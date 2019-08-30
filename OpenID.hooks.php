<?php

/**
 * Redirect classes to hijack the core UserLogin and CreateAccount facilities, because
 * they're so badly written as to be impossible to extend
 */

class OpenIDHooks {

	public static function onSpecialPage_initList( &$specialPagesList ) {
		global $wgOpenIDLoginOnly, $wgUser;

		# redirect all special login pages to our own OpenID login pages
		# but only for entitled users

		$addOpenIDSpecialPagesList = [];

		if ( OpenID::isAllowedMode( 'consumer' ) ) {
			if ( $wgOpenIDLoginOnly
				&& !$wgUser->isAllowed( 'openid-create-account-without-openid' )
				&& $wgUser->isAllowed( 'openid-login-with-openid' )
			) {
				$specialPagesList['Userlogin'] = 'SpecialOpenIDLogin';

				# as Special:CreateAccount is an alias for Special:UserLogin/signup
				# we show our own OpenID page here, too

				$specialPagesList['CreateAccount'] = 'SpecialOpenIDLogin';
			}
		}

		# Special pages for both modes are added at global scope

		if ( OpenID::isAllowedMode( 'provider' ) || OpenID::isAllowedMode( 'consumer' ) ) {
			if ( !$wgUser->isLoggedIn()
				&& ( $wgUser->isAllowed( 'openid-login-with-openid' )
					|| $wgUser->isAllowed( 'openid-create-account-with-openid' ) ) ) {
				$addOpenIDSpecialPagesList[] = 'Login';
			}

			$addOpenIDSpecialPagesList[] = 'Convert';
			$addOpenIDSpecialPagesList[] = 'Dashboard';
		}

		# add the server-related Special pages

		if ( OpenID::isAllowedMode( 'provider' ) ) {
			$addOpenIDSpecialPagesList[] = 'Identifier';
			$addOpenIDSpecialPagesList[] = 'Server';
			$addOpenIDSpecialPagesList[] = 'XRDS';
		}

		foreach ( $addOpenIDSpecialPagesList as $sp ) {
			$key = 'OpenID' . $sp;
			$specialPagesList[$key] = 'SpecialOpenID' . $sp;
		}
	}

	/**
	 * Hook is called whenever an article is being viewed
	 *
	 * @param Article $article
	 * @param bool $outputDone
	 * @param bool $pcache
	 */
	public static function onArticleViewHeader( $article, $outputDone, $pcache ) {
		$nt = $article->getTitle();

		// If the page being viewed is a user page,
		// generate the openid.server META tag and output
		// the X-XRDS-Location.  See the OpenIDXRDS
		// special page for the XRDS output / generation
		// logic.

		/* pre-version-2.00 behaviour: OpenID Server was only supported for existing userpages */

		if ( $nt
			&& ( $nt->getNamespace() == NS_USER )
			&& ( strpos( $nt->getText(), '/' ) === false )
		) {
			$user = User::newFromName( $nt->getText() );

			if ( $user && ( $user->getID() != 0 ) ) {
				SpecialOpenIDIdentifier::showOpenIDIdentifier( $user, true, false );
			}
		}
	}

	/**
	 * @param array[] &$personal_urls
	 * @param Title $title
	 */
	public static function onPersonalUrls( &$personal_urls, $title ) {
		global $wgOpenIDHideOpenIDLoginLink, $wgUser, $wgOut, $wgOpenIDLoginOnly;

		if ( !$wgOpenIDHideOpenIDLoginLink
			&& ( $wgUser->getID() == 0 )
			&& OpenID::isAllowedMode( 'consumer' )
		) {
			$sk = $wgOut->getSkin();
			$returnto = $title->isSpecial( 'Userlogout' ) ? '' : ( 'returnto=' . $title->getPrefixedURL() );

			$personal_urls['openidlogin'] = [
				'text' => wfMessage( 'openidlogin' )->text(),
				'href' => $sk->makeSpecialUrl( 'OpenIDLogin', $returnto ),
				'active' => $title->isSpecial( 'OpenIDLogin' )
			];

			if ( $wgOpenIDLoginOnly ) {
				# remove other login links
				foreach ( [ 'createaccount', 'login', 'anonlogin' ] as $k ) {
					if ( array_key_exists( $k, $personal_urls ) ) {
						unset( $personal_urls[$k] );
					}
				}
			}
		}
	}

	/**
	 * @param OutputPage $out
	 * @param Skin $sk
	 */
	public static function onBeforePageDisplay( $out, $sk ) {
		global $wgOpenIDHideOpenIDLoginLink, $wgUser;

		# We need to do this *before* PersonalUrls is called
		if ( !$wgOpenIDHideOpenIDLoginLink && $wgUser->getID() == 0 ) {
			$out->addHeadItem( 'openid-loginstyle', self::loginStyle() );
		}

		if ( $out->getTitle()->equals( SpecialPage::getTitleFor( 'OpenIDConvert' ) )
			|| $out->getTitle()->equals( SpecialPage::getTitleFor( 'OpenIDLogin' ) ) ) {
				$out->addHeadItem( 'openid-providerstyle', self::providerStyle() );
		}
	}

	/**
	 * @param User $user
	 * @return string
	 */
	private static function getAssociatedOpenIDsTable( $user ) {
		global $wgLang;

		$openid_urls_registration = SpecialOpenID::getUserOpenIDInformation( $user );
		$delTitle = SpecialPage::getTitleFor( 'OpenIDConvert', 'Delete' );

		$rows = '';

		foreach ( $openid_urls_registration as $url_reg ) {
			if ( !empty( $url_reg->uoi_user_registration ) ) {
				$registrationTime = wfMessage(
					'openid-urls-registration-date-time',
					$wgLang->timeanddate( $url_reg->uoi_user_registration, true ),
					$wgLang->date( $url_reg->uoi_user_registration, true ),
					$wgLang->time( $url_reg->uoi_user_registration, true )
				)->text();
			} else {
				$registrationTime = '';
			}

			$rows .= Xml::tags( 'tr', [],
				Xml::tags( 'td',
					[],
					OpenID::getOpenIDSmallLogoUrlImageTag() .
						"&nbsp;" .
						Xml::element( 'a', [ 'href' => $url_reg->uoi_openid ], $url_reg->uoi_openid )
				) .
				Xml::tags( 'td',
					[],
					$registrationTime
				) .
				Xml::tags( 'td',
					[],
					Linker::link( $delTitle, wfMessage( 'openid-urls-delete' )->text(),
						[],
						[ 'url' => $url_reg->uoi_openid ]
					)
				)
			) . "\n";
		}
		$info = Xml::tags( 'table', [ 'class' => 'wikitable' ],
			Xml::tags( 'tr', [],
				Xml::element( 'th',
					[],
					wfMessage( 'openid-urls-url' )->text() ) .
				Xml::element( 'th',
					[],
					wfMessage( 'openid-urls-registration' )->text() ) .
				Xml::element( 'th',
					[],
					wfMessage( 'openid-urls-action' )->text() )
				) . "\n" .
			$rows
		);

		if ( true || !OpenID::isForcedProvider() ) {
			$info .= Linker::link(
				SpecialPage::getTitleFor( 'OpenIDConvert' ),
				wfMessage( 'openid-add-url' )->escaped()
			);
		}

		return $info;
	}

	/**
	 * @param User $user
	 * @return string
	 */
	private static function getTrustTable( $user ) {
		$trusted_sites = SpecialOpenIDServer::GetUserTrustArray( $user );
		$rows = '';

		foreach ( $trusted_sites as $key => $value ) {
			$deleteTrustedSiteTitle = SpecialPage::getTitleFor( 'OpenIDServer', 'DeleteTrustedSite' );

			if ( $key !== "" ) {
				$rows .= Xml::tags( 'tr', [],
					Xml::tags( 'td',
						[],
						Xml::element( 'a', [ 'href' => $key ], $key )
					) .
					Xml::tags( 'td',
						[],
						Linker::link( $deleteTrustedSiteTitle,
							wfMessage( 'openid-trusted-sites-delete-link-action-text' )->text(),
							[],
							[ 'url' => $key ]
						)
					)
				) . "\n";
			}
		}

		if ( $rows !== "" ) {
			$rows .= Xml::tags( 'tr', [],
				Xml::tags( 'td',
					[],
					"&nbsp;"
				) .
				Xml::tags( 'td',
					[],
					Linker::link( $deleteTrustedSiteTitle,
						wfMessage( 'openid-trusted-sites-delete-all-link-action-text' )->text(),
						[],
						[ 'url' => "*" ]
					)
				)
			) . "\n";
		}

		return Xml::tags( 'table', [ 'class' => 'wikitable' ],
			Xml::tags( 'tr', [],
				Xml::element( 'th',
					[],
					wfMessage( 'openid-trusted-sites-table-header-column-url' )->text() ) .
				Xml::element( 'th',
					[],
					wfMessage( 'openid-trusted-sites-table-header-column-action' )->text() )
			) . "\n" .
			$rows
		);
	}

	/**
	 * @param User $user
	 * @param array[] &$preferences
	 */
	public static function onGetPreferences( $user, &$preferences ) {
		global $wgOpenIDShowUrlOnUserPage, $wgHiddenPrefs,
			$wgAuth, $wgUser, $wgLang;

		if ( OpenID::isAllowedMode( 'provider' ) ) {
			switch ( $wgOpenIDShowUrlOnUserPage ) {
			case 'user':
				$preferences['openid-show-openid'] =
					[
						'section' => 'openid/openid-show-openid',
						'type' => 'toggle',
						'label-message' => 'openid-show-openid-url-on-userpage-user',
					];
				break;

			case 'always':
				$preferences['openid-show-openid'] =
					[
						'section' => 'openid/openid-show-openid',
						'type' => 'info',
						'default' => wfMessage( 'openid-show-openid-url-on-userpage-always' )->text(),
					];
				break;

			case 'never':
				$preferences['openid-show-openid'] =
					[
						'section' => 'openid/openid-show-openid',
						'type' => 'info',
						'default' => wfMessage( 'openid-show-openid-url-on-userpage-never' )->text(),
					];
				break;
			}
		} /* provider mode */

		if ( OpenID::isAllowedMode( 'consumer' ) ) {
		// setting up user_properties up_property database key names
		// example 'openid-userinfo-update-on-login-nickname'
		// FIXME: this could better be saved as a JSON encoded array in a single key

		$update = [];
		$update[ wfMessage( 'openidnickname' )->text() ] = '-nickname';
		$update[ wfMessage( 'openidemail' )->text() ] = '-email';
		if ( !in_array( 'realname', $wgHiddenPrefs ) ) {
			$update[ wfMessage( 'openidfullname' )->text() ] = '-fullname';
		}
		$update[ wfMessage( 'openidlanguage' )->text() ] = '-language';
		$update[ wfMessage( 'openidtimezone' )->text() ] = '-timezone';

		$preferences['openid-userinfo-update-on-login'] =
			[
				'section' => 'openid/openid-userinfo-update-on-login',
				'type' => 'multiselect',
				'label-message' => 'openid-userinfo-update-on-login-label',
				'options' => $update,
			];

		$preferences['openid-associated-openids'] =
			[
				'section' => 'openid/openid-associated-openids',
				'type' => 'info',
				'label-message' => 'openid-associated-openids-label',
				'default' => self::getAssociatedOpenIDsTable( $user ),
				'raw' => true,
			];

		$preferences['openid_trust'] =
			[
				'type' => 'hidden',
			];
		} /* consumer mode */

		if ( OpenID::isAllowedMode( 'provider' ) ) {
			$preferences['openid-your-openid'] =
				[
					'section' => 'openid/openid-local-identity',
					'type' => 'info',
					'label-message' => 'openid-local-identity',
					'default' => OpenID::getOpenIDSmallLogoUrlImageTag() . "&nbsp;" .
						SpecialOpenIDServer::getLocalIdentityLink( $user ),
					'raw' => true,
				];

			$preferences['openid-trusted-sites'] =
				[
					'section' => 'openid/openid-trusted-sites',
					'type' => 'info',
					'label-message' => 'openid-trusted-sites-label',
					'default' => self::getTrustTable( $user ),
					'raw' => true,
				];
		} /* provider mode */

		if ( method_exists( $wgAuth, 'allowPasswordChange' ) && $wgAuth->allowPasswordChange() ) {
			$resetlink = Linker::link(
				SpecialPage::getTitleFor( 'PasswordReset' ),
				wfMessage( 'passwordreset' )->escaped(),
				[],
				[ 'returnto' => SpecialPage::getTitleFor( 'Preferences' ) ]
			);

			if ( empty( $wgUser->mPassword ) && empty( $wgUser->mNewpassword ) ) {
				$preferences['password'] = [
					'section' => 'personal/info',
					'type' => 'info',
					'raw' => true,
					'default' => $resetlink,
					'label-message' => 'yourpassword',
				];
			} else {
				$preferences['resetpassword'] = [
					'section' => 'personal/info',
					'type' => 'info',
					'raw' => true,
					'default' => $resetlink,
					'label-message' => null,
				];
			}

			global $wgCookieExpiration;

			if ( $wgCookieExpiration > 0 ) {
				unset( $preferences['rememberpassword'] );
				$preferences['rememberpassword'] = [
					'section' => 'personal/info',
					'type' => 'toggle',
					'label' => wfMessage(
						'tog-rememberpassword',
						$wgLang->formatNum( ceil( $wgCookieExpiration / ( 3600 * 24 ) ) )
						)->escaped(),
				];
			}
		}
	}

	/**
	 * @param User $user
	 */
	public static function onDeleteAccount( $user ) {
		global $wgOut;

		if ( is_object( $user ) ) {
			$username = $user->getName();
			$userID = $user->getID();

			$dbw = wfGetDB( DB_MASTER );

			$dbw->delete( 'user_openid', [ 'uoi_user' => $userID ] );
			$wgOut->addHTML( "OpenID " . wfMessage( 'usermerge-userdeleted', $username, $userID )->escaped() . "<br />\n" );
		}
	}

	/**
	 * @param User $fromUserObj
	 * @param User $toUserObj
	 */
	public static function onMergeAccountFromTo( $fromUserObj, $toUserObj ) {
		global $wgOut, $wgOpenIDMergeOnAccountMerge;

		if ( is_object( $fromUserObj ) && is_object( $toUserObj ) ) {
			$fromUsername = $fromUserObj->getName();
			$fromUserID = $fromUserObj->getID();
			$toUsername = $toUserObj->getName();
			$toUserID = $toUserObj->getID();

			if ( $wgOpenIDMergeOnAccountMerge ) {
				$dbw = wfGetDB( DB_MASTER );

				$dbw->update( 'user_openid', [ 'uoi_user' => $toUserID ], [ 'uoi_user' => $fromUserID ] );
				$wgOut->addHTML( "OpenID " . wfMessage( 'usermerge-updating', 'user_openid', $fromUsername, $toUsername )->escaped() . "<br />\n" );
			} else {
				$wgOut->addHTML( wfMessage( 'openid-openids-were-not-merged' )->escaped() . "<br />\n" );
			}
		}
	}

	/**
	 * @param DatabaseUpdater $updater
	 */
	public static function onLoadExtensionSchemaUpdates( $updater ) {
		switch ( $updater->getDB()->getType() ) {
		case "mysql":
			self::MySQLSchemaUpdates( $updater );
			break;
		case "postgres":
			self::PostgreSQLSchemaUpdates( $updater );
			break;
		default:
			throw new MWException( "OpenID does not support {$updater->getDB()->getType()} yet." );
		}
	}

	/**
	 * @param MysqlUpdater $updater
	 */
	public static function MySQLSchemaUpdates( $updater ) {
		// >= 1.17 support
		$updater->addExtensionTable( 'user_openid',
			__DIR__ . '/patches/openid_table.sql' );

		# when updating an older OpenID version
		# make the index non unique (remove unique index uoi_user, add new index user_openid_user)
		$db = $updater->getDB();
		$info = $db->fieldInfo( 'user_openid', 'uoi_user' );

		if ( $info && !$info->isMultipleKey() ) {
			$updater->addExtensionUpdate( [ 'dropIndex', 'user_openid', 'uoi_user',
				__DIR__ . '/patches/patch-drop_non_multiple_key_index_uoi_user.sql', true ] );
			$updater->addExtensionIndex( 'user_openid', 'user_openid_user',
				__DIR__ . '/patches/patch-add_multiple_key_index_user_openid_user.sql' );
		}

		# uoi_user_registration field was added in OpenID version 0.937
		$updater->addExtensionField( 'user_openid', 'uoi_user_registration',
			__DIR__ . '/patches/patch-add_uoi_user_registration.sql' );
	}

	/**
	 * @param PostgresUpdater $updater
	 */
	public static function PostgreSQLSchemaUpdates( $updater ) {
		$base = __DIR__ . '/patches';
		foreach ( [
			[ 'addTable', 'user_openid', $base . '/openid_table.pg.sql', true ],
			[ 'addPgField', 'user_openid', 'uoi_user_registration', 'TIMESTAMPTZ' ],
		] as $update ) {
			$updater->addExtensionUpdate( $update );
		}
	}

	/**
	 * @return string
	 */
	private static function providerStyle() {
		global $wgExtensionAssetsPath;

		$ret = "\n<style type='text/css'>";
		foreach ( OpenIDProvider::getProviders() as $provider ) {
			$providerName = $provider->providerName();
			$providerSize = $provider->isLargeProvider() ? 'large' : 'small';
			$ret .= "#openid_provider_{$providerName}_icon { background-image: url(" .
				"{$wgExtensionAssetsPath}/OpenID/skin/icons/{$providerName}_{$providerSize}.png); }
";
		}
		return $ret . "</style>";
	}

	/**
	 * @return string
	 */
	private static function loginStyle() {
		$openIDLogo = OpenID::getOpenIDSmallLogoUrl();
		return <<<EOS
<style type='text/css'>
li#pt-openidlogin {
background: url($openIDLogo) top left no-repeat;
padding-left: 20px;
text-transform: none;
}
</style>
EOS;
	}

}
