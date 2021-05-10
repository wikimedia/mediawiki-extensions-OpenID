<?php
/**
 * Consumer side of OpenID site
 * Copyright 2006,2007 Internet Brands (http://www.internetbrands.com/)
 * Copyright 2007,2008 Evan Prodromou <evan@prodromou.name>
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @file
 * @author Evan Prodromou <evan@prodromou.name>
 * @author Thomas Gries
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
  exit( 1 );
}

require_once "Auth/Yadis/XRI.php";

class SpecialOpenIDLogin extends SpecialOpenID {

	function __construct() {
		parent::__construct( 'OpenIDLogin', 'openid-login-with-openid' );
	}

	/**
	 * Entry point
	 *
	 * @param string|null $par
	 */
	function execute( $par ) {
		global $wgRequest, $wgOpenIDForcedProvider, $wgOpenIDProviders, $wgOut;

		$this->setHeaders();

		if ( $this->getUser()->getID() != 0 ) {
			$this->alreadyLoggedIn();
			return;
		}

		if ( !OpenID::isAllowedMode( 'consumer' ) ) {
			$wgOut->showErrorPage(
				'error',
				'openid-error-openid-consumer-mode-disabled'
			);
			return;
		}

		$this->outputHeader();

		switch ( $par ) {
		case 'ChooseName':
			$this->chooseName();
			break;

		case 'Finish': # Returning from a server
			$this->finish();
			break;

		default: # Main entry point

			if ( $wgRequest->getText( 'returnto' ) ) {
				$this->setReturnTo( $wgRequest->getText( 'returnto' ), $wgRequest->getVal( 'returntoquery' ) );
			}

			// if a forced OpenID provider is specified, bypass
			// the form and any openid_url in the request.

			$skipTokenTestBecauseForcedProvider = false;

			if ( OpenID::isForcedProvider() ) {
				if ( array_key_exists( $wgOpenIDForcedProvider, $wgOpenIDProviders ) ) {
					$url = $wgOpenIDProviders[$wgOpenIDForcedProvider]['openid-url'];

					// make sure that the associated provider Url does not contain {username} placeholder
					// and try to use an optional openid-selection-url from the $wgOpenIDProviders array
					if ( strpos( $url, '{username}' ) === false ) {
						$skipTokenTestBecauseForcedProvider = true;
						$openid_url = $url;
					} else {
						if ( isset( $wgOpenIDProviders[$wgOpenIDForcedProvider]['openid-selection-url'] ) ) {
							$skipTokenTestBecauseForcedProvider = true;
							$openid_url = $wgOpenIDProviders[$wgOpenIDForcedProvider]['openid-selection-url'];
						} else {
							$this->showErrorPage( 'openid-error-wrong-force-provider-setting', [ $wgOpenIDForcedProvider ] );
							return;
						}
					}
				} else {
					// a fully qualified URL is given
					$skipTokenTestBecauseForcedProvider = true;
					$openid_url = $wgOpenIDForcedProvider;
				}
			} else {
				$openid_url = $wgRequest->getText( 'openid_url' );
			}

			if ( $openid_url !== null && strlen( $openid_url ) > 0 ) {
				$this->login( $openid_url, $this->getPageTitle( 'Finish' ), $skipTokenTestBecauseForcedProvider );
			} else {
				$this->providerSelectionLoginForm();
			}
		} /* switch $par */
	}

	/**
	 * Displays an info message saying that the user is already logged-in
	 */
	function alreadyLoggedIn() {
		global $wgOut;

		$wgOut->setPageTitle( wfMessage( 'openidalreadyloggedin' )->text() );
		$wgOut->setRobotPolicy( 'noindex,nofollow' );
		$wgOut->setArticleRelated( false );
		$wgOut->addWikiMsg( 'openidalreadyloggedintext', $this->getUser()->getName() );
		list( $returnto, $returntoquery ) = $this->returnTo();
		$wgOut->returnToMain( null, $returnto, $returntoquery );
	}

	/**
	 * Displays the main provider selection login form
	 */
	function providerSelectionLoginForm() {
		global $wgOut, $wgOpenIDShowProviderIcons, $wgOpenIDLoginOnly, $wgOpenIDForcedProvider;
		global $wgRequest;

		$inputFormHTML = '';
		$largeButtonsHTML = '';
		$smallButtonsHTML = '';

		if ( $wgOpenIDForcedProvider instanceof OpenIDProvider ) {
			/** @var $wgOpenIDForcedProvider OpenIDProvider */
			$inputFormHTML .= $wgOpenIDForcedProvider->getLoginFormHTML();
		} else {
			SpecialOpenIDConvert::renderProviderIcons( $inputFormHTML, $largeButtonsHTML, $smallButtonsHTML );
		}

		$wgOut->addModules( $wgOpenIDShowProviderIcons ? 'ext.openid.icons' : 'ext.openid.plain' );
		$wgOut->addHTML(
			Html::rawElement( 'form',
				[
					'id' => 'openid_form',
					'action' => $this->getPageTitle()->getLocalUrl(),
					'method' => 'post',
					'onsubmit' => 'openid.update()'
				],
				Xml::fieldset( wfMessage( 'openid-login-or-create-account' )->text() ) .
				$largeButtonsHTML .
				Html::rawElement( 'div',
					[
						'id' => 'openid_provider_selection_error_box',
						'class' => 'errorbox',
						'style' => 'display:none'
					],
					wfMessage( 'openid-empty-param-error' )->escaped()
				) .
				Html::rawElement( 'div',
					[ 'id' => 'openid_input_area' ],
					$inputFormHTML
				) .
				$smallButtonsHTML .
				Xml::closeElement( 'fieldset' ) .
				Html::Hidden( 'openidProviderSelectionLoginToken',
					$wgRequest->getSession()->getToken( '', 'login' )->toString() )
			)
		);

		$wgOut->addWikiMsg( 'openidlogininstructions' );

		if ( $wgOpenIDLoginOnly ) {
			$wgOut->addWikiMsg( 'openidlogininstructions-openidloginonly' );
		} else {
			$wgOut->addWikiMsg( 'openidlogininstructions-passwordloginallowed' );
		}
	}

	/**
	 * Displays a form to let the user choose an account to attach with the
	 * given OpenID
	 *
	 * @param string $openid OpenID url
	 * @param string[] $sreg Options get from OpenID
	 * @param array[] $ax Options get from OpenID
	 * @param string|null $messagekey Message name to display at the top
	 */
	function chooseNameForm( $openid, $sreg, $ax, $messagekey = null ) {
		global $wgAuth, $wgOut, $wgOpenIDAllowExistingAccountSelection, $wgHiddenPrefs,
			$wgOpenIDProposeUsernameFromSREG,
			$wgOpenIDAllowAutomaticUsername, $wgOpenIDAllowNewAccountname;
		global $wgRequest;

		if ( $messagekey ) {
			$wgOut->addWikiMsg( $messagekey );
		}
		$wgOut->addWikiMsg( 'openidchooseinstructions' );

		$wgOut->addHTML(
			Xml::openElement( 'form',
				[
					'action' => $this->getPageTitle( 'ChooseName' )->getLocalUrl(),
					'method' => 'POST'
				]
			) .
			Xml::fieldset( wfMessage( 'openidchooselegend' )->text(),
				false,
				[
					'id' => 'mw-openid-choosename'
				]
			) .
			Xml::openElement( 'table' )
		);
		$def = false;

		if ( $wgOpenIDAllowExistingAccountSelection ) {
			# Let them attach it to an existing user

			# Grab the UserName in the cookie if it exists

			global $wgCookiePrefix;
			$name = '';
			if ( isset( $_COOKIE["{$wgCookiePrefix}UserName"] ) ) {
				$name = trim( $_COOKIE["{$wgCookiePrefix}UserName"] );
			}

			# show OpenID Attributes
			$oidAttributesToAccept = [ 'fullname', 'nickname', 'email', 'language' ];
			$oidAttributes = [];

			foreach ( $oidAttributesToAccept as $oidAttr ) {
				if ( ( $oidAttr == 'fullname' )
					&& ( in_array( 'realname', $wgHiddenPrefs ) ) ) {
					continue;
				}

				if ( array_key_exists( $oidAttr, $sreg ) ) {
					$checkName = 'wpUpdateUserInfo' . $oidAttr;
					$oidAttributes[] = Xml::tags( 'li',
						[],
						Xml::check( $checkName,
							false,
							[
								'id' => $checkName
							]
						) .
						Xml::tags( 'label',
							[
								'for' => $checkName
							],
							wfMessage( "openid$oidAttr" )->text() . wfMessage( 'colon-separator' )->escaped() .
							Xml::element( 'i',
								[],
								$sreg[$oidAttr]
							)
						)
					);
				}
			}

			$oidAttributesUpdate = '';
			if ( count( $oidAttributes ) > 0 ) {
				$oidAttributesUpdate = "<br />\n" .
					wfMessage( 'openidupdateuserinfo' )->text() . "\n" .
					Xml::tags( 'ul',
						[],
						implode( "\n", $oidAttributes )
					);
			}

			$wgOut->addHTML(
				Xml::openElement( 'tr' ) .
				Xml::tags( 'td',
					[
						'class' => 'mw-label'
					],
					Xml::radio( 'wpNameChoice',
						'existing',
						!$def,
						[
							'id' => 'wpNameChoiceExisting'
						]
					)
				) .
				Xml::tags( 'td',
					[
						'class' => 'mw-input'
					],
					Xml::label( wfMessage( 'openidchooseexisting' )->text(), 'wpNameChoiceExisting' ) . "<br />" .
					wfMessage( 'openidchooseusername' )->text() .
					Xml::input( 'wpExistingName',
						16,
						$name,
						[
							'id' => 'wpExistingName'
						]
					) . " " .
					wfMessage( 'openidchoosepassword' )->text() .
					Xml::password( 'wpExistingPassword' ) .
					$oidAttributesUpdate
				) .
				Xml::closeElement( 'tr' )
			);

		if ( method_exists( $wgAuth, 'allowPasswordChange' ) && $wgAuth->allowPasswordChange() ) {
			$wgOut->addHTML(
				Xml::openElement( 'tr' ) .

				Xml::tags( 'td',
					[],
					"&nbsp;"
				) .

				Xml::tags( 'td',
					[],
					Linker::link(
						SpecialPage::getTitleFor( 'PasswordReset' ),
						wfMessage( 'passwordreset' )->escaped(),
						[],
						[ 'returnto' => SpecialPage::getTitleFor( 'OpenIDLogin' ) ]
					)
				) .

				Xml::closeElement( 'tr' )
			);
		}

			$def = true;
		} // $wgOpenIDAllowExistingAccountSelection

		$user = $this->getUser();
		# These are only available if the visitor is allowed to create account
		if ( $user->isAllowed( 'createaccount' )
			&& $user->isAllowed( 'openid-create-account-with-openid' )
			&& !$user->isBlockedFromCreateAccount()
		) {
			if ( $wgOpenIDProposeUsernameFromSREG ) {
				# These options won't exist if we can't get them.
				if ( array_key_exists( 'nickname', $sreg ) && $this->userNameOK( $sreg['nickname'] ) ) {
					$wgOut->addHTML(
						Xml::openElement( 'tr' ) .
						Xml::tags( 'td',
							[
								'class' => 'mw-label'
							],
							Xml::radio( 'wpNameChoice',
								'nick',
								!$def,
								[
									'id' => 'wpNameChoiceNick'
								]
							)
						) .
						Xml::tags( 'td',
							[
								'class' => 'mw-input'
							],
							Xml::label( wfMessage( 'openidchoosenick', $sreg['nickname'] )->escaped(), 'wpNameChoiceNick' )
						) .
						Xml::closeElement( 'tr' )
					);
				}

				# These options won't exist if we can't get them.
				$fullname = null;
				if ( array_key_exists( 'fullname', $sreg ) ) {
					$fullname = $sreg['fullname'];
				}

				$axName = $this->getAXUserName( $ax );
				if ( $axName !== null ) {
					$fullname = $axName;
				}

				if ( $fullname && $this->userNameOK( $fullname ) ) {
					$wgOut->addHTML(
						Xml::openElement( 'tr' ) .
						Xml::tags( 'td',
							[
								'class' => 'mw-label'
							],
							Xml::radio( 'wpNameChoice',
								'full',
								!$def,
								[
									'id' => 'wpNameChoiceFull'
								]
							)
						) .
						Xml::tags( 'td',
							[
								'class' => 'mw-input'
							],
							Xml::label( wfMessage( 'openidchoosefull', $fullname )->escaped(), 'wpNameChoiceFull' )
						) .
						Xml::closeElement( 'tr' )
					);
					$def = true;
				}

				$idname = $this->toUserName( $openid );
				if ( $idname && $this->userNameOK( $idname ) ) {
					$wgOut->addHTML(
						Xml::openElement( 'tr' ) .
						Xml::tags( 'td',
							[
								'class' => 'mw-label'
							],
							Xml::radio( 'wpNameChoice',
								'url',
								!$def,
								[
									'id' => 'wpNameChoiceUrl'
								]
							)
						) .
						Xml::tags( 'td',
							[
								'class' => 'mw-input'
							],
							Xml::label( wfMessage( 'openidchooseurl', $idname )->text(), 'wpNameChoiceUrl' )
						) .
						Xml::closeElement( 'tr' )
					);
					$def = true;
				}
			} // if $wgOpenIDProposeUsernameFromSREG

			if ( $wgOpenIDAllowAutomaticUsername ) {
				$wgOut->addHTML(
					Xml::openElement( 'tr' ) .
					Xml::tags( 'td',
						[
							'class' => 'mw-label'
						],
						Xml::radio( 'wpNameChoice',
							'auto',
							!$def,
							[
								'id' => 'wpNameChoiceAuto'
							]
						)
					) .
					Xml::tags( 'td',
						[
							'class' => 'mw-input'
						],
						Xml::label( wfMessage( 'openidchooseauto', $this->automaticName( $sreg ) )->escaped(), 'wpNameChoiceAuto' )
					) .
					Xml::closeElement( 'tr' )
					);
			}

			if ( $wgOpenIDAllowNewAccountname ) {
				$wgOut->addHTML(

				Xml::openElement( 'tr' ) .
				Xml::tags( 'td',
					[
						'class' => 'mw-label'
					],
					Xml::radio( 'wpNameChoice',
						'manual',
						!$def,
						[
							'id' => 'wpNameChoiceManual'
						]
					)
				) .
				Xml::tags( 'td',
					[
						'class' => 'mw-input'
					],
					Xml::label( wfMessage( 'openidchoosemanual' )->text(), 'wpNameChoiceManual' ) . '&#160;' .
					Xml::input( 'wpNameValue',
						16,
						false,
						[
							'id' => 'wpNameValue'
						]
					)
				) .
				Xml::closeElement( 'tr' )
				);
			}
		} // These are only available if all visitors are allowed to create accounts

		# These are always available
		$wgOut->addHTML(
			Xml::openElement( 'tr' ) .
			Xml::tags( 'td',
				[],
				''
			) .
			Xml::tags( 'td',
				[
					'class' => 'mw-submit'
				],
				Xml::submitButton( OpenID::loginOrCreateAccountOrConvertButtonLabel(), [ 'name' => 'wpOK' ] ) .
				Xml::submitButton( wfMessage( 'cancel' )->text(), [ 'name' => 'wpCancel' ] )
			) .
			Xml::closeElement( 'tr' ) .
			Xml::closeElement( 'table' ) .
			Xml::closeElement( 'fieldset' ) .
			Html::Hidden( 'openidChooseNameBeforeLoginToken',
				$wgRequest->getSession()->getToken( '', 'login' )->toString() ) .
			Xml::closeElement( 'form' )
		);
	}

	/**
	 * Handle "Choose name" form submission
	 */
	function chooseName() {
		global $wgRequest, $wgUser, $wgOut;

		$token = $wgRequest->getSession()->getToken( '', 'login' )->toString();
		if ( $token != $wgRequest->getVal( 'openidChooseNameBeforeLoginToken' ) ) {
			$wgOut->showErrorPage( 'openiderror', 'openid-error-request-forgery' );
			return;
		}

		list( $openid, $sreg, $ax ) = $this->fetchValues();
		if ( $openid === null ) {
			$this->clearValues();
			# No messing around, here
			$wgOut->showErrorPage( 'openiderror', 'openiderrortext' );
			return;
		}

		if ( $wgRequest->getCheck( 'wpCancel' ) ) {
			$this->clearValues();
			$wgOut->showErrorPage( 'openidcancel', 'openidcanceltext' );
			return;
		}

		$choice = $wgRequest->getText( 'wpNameChoice' );
		$nameValue = $wgRequest->getText( 'wpNameValue' );

		if ( $choice == 'existing' ) {
			$user = $this->attachUser( $openid, $sreg,
				$wgRequest->getText( 'wpExistingName' ),
				$wgRequest->getText( 'wpExistingPassword' )
			);

			if ( $user === null || !$user ) {
				$this->clearValues();
				// $this->chooseNameForm( $openid, $sreg, $ax, 'wrongpassword' );
				return;
			}

			$force = [];
			foreach ( [ 'fullname', 'nickname', 'email', 'language' ] as $option ) {
				if ( $wgRequest->getCheck( 'wpUpdateUserInfo' . $option ) ) {
					$force[] = $option;
				}
			}

			$this->updateUser( $user, $sreg, $ax );
		} else {
			$name = $this->getUserName( $openid, $sreg, $ax, $choice, $nameValue );

			if ( !$name || !$this->userNameOK( $name ) ) {
				$this->chooseNameForm( $openid, $sreg, $ax );
				return;
			}

			$user = $this->createUser( $openid, $sreg, $ax, $name );
		}

		if ( $user === null ) {
			$this->clearValues();
			$wgOut->showErrorPage( 'openiderror', 'openiderrortext' );
			return;
		}

		$wgUser = $user;
		$this->clearValues();
		$this->displaySuccessLogin( $openid );
	}

	/**
	 * Called when returning from the authentication server
	 * Find the user with the given openid, if any or displays the "Choose name"
	 * form
	 */
	function finish() {
		global $wgOut, $wgUser, $wgOpenIDUseEmailAsNickname;

		Wikimedia\suppressWarnings();
		$consumer = $this->getConsumer();
		$response = $consumer->complete( $this->scriptUrl( 'Finish' ) );
		Wikimedia\restoreWarnings();

		if ( $response === null ) {
			wfDebug( "OpenID: aborting in auth because no response was received\n" );
			$wgOut->showErrorPage( 'openiderror', 'openiderrortext' );
			return;
		}

		switch ( $response->status ) {
		case Auth_OpenID_CANCEL:
			// This means the authentication was cancelled.
			$wgOut->showErrorPage( 'openidcancel', 'openidcanceltext' );
			break;
		case Auth_OpenID_FAILURE:
			wfDebug( "OpenID: error message '" . $response->message . "'\n" );
			$wgOut->showErrorPage( 'openidfailure', 'openidfailuretext',
				[ ( $response->message ) ? $response->message : '' ] );
			break;
		case Auth_OpenID_SUCCESS:
			// This means the authentication succeeded.
			Wikimedia\suppressWarnings();
			$openid = $response->identity_url;

			if ( !$this->canLogin( $openid ) ) {
				$wgOut->showErrorPage( 'openidpermission', 'openidpermissiontext' );
				return;
			}

			$sreg_resp = Auth_OpenID_SRegResponse::fromSuccessResponse( $response );
			$sreg = $sreg_resp->contents();
			if ( $sreg === null ) {
				$sreg = [];
			}
			$ax_resp = Auth_OpenID_AX_FetchResponse::fromSuccessResponse( $response );
			$ax = $ax_resp->data;
			if ( $ax === null ) {
				$ax = [];
			}
			Wikimedia\restoreWarnings();

			if ( $openid === null ) {
				$wgOut->showErrorPage( 'openiderror', 'openiderrortext' );
				return;
			}

			$user = self::getUserFromUrl( $openid );

			if ( $user instanceof User ) {
				$this->updateUser( $user, $sreg, $ax ); # update from server
				$wgUser = $user;
				$this->displaySuccessLogin( $openid );
			} else {
				// if we are hardcoding nickname, and a valid e-mail address was returned, create a user with this name
				if ( $wgOpenIDUseEmailAsNickname ) {
					$name = $this->getNameFromEmail( $openid, $sreg, $ax );

					if ( !empty( $name ) && $this->userNameOk( $name ) ) {
						$wgUser = $this->createUser( $openid, $sreg, $ax, $name );
						$this->displaySuccessLogin( $openid );
						return;
					}
				}

				$this->saveValues( $openid, $sreg, $ax );
				$this->chooseNameForm( $openid, $sreg, $ax );

				return;
			}
		}
	}

	/**
	 * Update some user's settings with value get from OpenID
	 *
	 * @param User $user
	 * @param string[] $sreg Array of options get from OpenID
	 * @param array[] $ax
	 * @param bool $force Forces update regardless of user preferences
	 */
	function updateUser( $user, $sreg, $ax, $force = false ) {
		global $wgOut, $wgHiddenPrefs, $wgOpenIDTrustEmailAddress;

		// Nick name
		if ( $this->updateOption( 'nickname', $user, $force ) ) {
			if ( array_key_exists( 'nickname', $sreg ) && $sreg['nickname'] != $user->getOption( 'nickname' ) ) {
				$user->setOption( 'nickname', $sreg['nickname'] );
			}
		}

		// E-mail
		if ( $this->updateOption( 'email', $user, $force ) ) {
			// first check SREG, then AX; if both, AX takes higher priority
			$email = false;

			if ( array_key_exists( 'email', $sreg )
				&& Sanitizer::validateEmail( $sreg['email'] ) ) {
				$email = $sreg['email'];
			}

			if ( isset( $ax['http://axschema.org/contact/email'][0] )
				 && Sanitizer::validateEmail( $ax['http://axschema.org/contact/email'][0] ) ) {
				$email = $ax['http://axschema.org/contact/email'][0];
			}

			if ( $email ) {
				// send a confirmation mail if email has changed

				if ( $email != $user->getEmail() ) {
					if ( $wgOpenIDTrustEmailAddress ) {
						$user->setEmail( $email );
						$user->confirmEmail();
					} else {
						$status = $user->setEmailWithConfirmation( $email );
						if ( !$status->isOK() ) {
							$wgOut->addWikiMsg( 'mailerror', $status->getMessage() );
						}
					}
				}
			}
		}

		// Full name
		if ( !in_array( 'realname', $wgHiddenPrefs )
			&& ( $this->updateOption( 'fullname', $user, $force ) )
		) {
			if ( array_key_exists( 'fullname', $sreg ) ) {
				$user->setRealName( $sreg['fullname'] );
			}

			$axName = $this->getAXUserName( $ax );
			if ( $axName !== null ) {
				$user->setRealName( $axName );
			}
		}

		if ( $this->updateOption( 'language', $user, $force ) ) {
			if ( array_key_exists( 'language', $sreg ) ) {
				# FIXME: check and make sure the language exists
				$user->setOption( 'language', $sreg['language'] );
			}
		}

		if ( $this->updateOption( 'timezone', $user, $force ) ) {
			if ( array_key_exists( 'timezone', $sreg ) ) {
				# FIXME: do something with it.
				# $offset = OpenIDTimezoneToTzoffset($sreg['timezone']);
				# $user->setOption('timecorrection', $offset);
			}
		}

		$user->saveSettings();
	}

	/**
	 * Helper function for updateUser()
	 *
	 * reading option from database table user_properties up_property
	 * keys look like 'openid-userinfo-update-on-login-nickname'
	 *
	 * FIXME: options could better be saved as a JSON encoded array in a single key
	 * @param string $option
	 * @param User $user
	 * @param bool|array $force
	 * @return bool
	 */
	private function updateOption( $option, User $user, $force ) {
		$ret = ( $force === true
			|| ( is_array( $force ) && in_array( $option, $force ) )
			|| $user->getOption( 'openid-userinfo-update-on-login-' . $option ) );

			// the trailing "-" is important
			// it separates the key prefix and the value
			// keys look like 'openid-userinfo-update-on-login-nickname'

		return $ret;
	}

	/**
	 * Display the final "Successful login"
	 *
	 * @param string $openid OpenID URL
	 */
	function displaySuccessLogin( $openid ) {
		global $wgUser, $wgOut;

		$this->setupSession();
		RequestContext::getMain()->setUser( $wgUser );
		$wgUser->SetCookies();

		# Run any hooks; ignore results
		$inject_html = '';
		Hooks::run( 'UserLoginComplete', [ &$wgUser, &$inject_html ] );

		# Set a cookie for later check-immediate use

		$this->loginSetCookie( $openid );

		$wgOut->setPageTitle( wfMessage( 'openidsuccess' )->text() );
		$wgOut->setRobotPolicy( 'noindex,nofollow' );
		$wgOut->setArticleRelated( false );
		$wgOut->addWikiMsg( 'openidsuccesstext', $wgUser->getName(), $openid );
		$wgOut->addHtml( $inject_html );
		list( $returnto, $returntoquery ) = $this->returnTo();
		$wgOut->returnToMain( null, $returnto, $returntoquery );
	}

	function createUser( $openid, $sreg, $ax, $name ) {
		global $wgAuth;

		$creator = $this->getUser();
		# Check permissions of the creating user
		if ( !$creator->isAllowed( 'createaccount' )
			|| !$creator->isAllowed( 'openid-create-account-with-openid' ) ) {
			wfDebug( "OpenID: User is not allowed to create an account.\n" );
			return null;
		} elseif ( $creator->isBlockedFromCreateAccount() ) {
			wfDebug( "OpenID: User is blocked.\n" );
			return null;
		}

		$user = User::newFromName( $name );

		if ( !$user ) {
			wfDebug( "OpenID: Error adding new user.\n" );
			return null;
		}

		$user->addToDatabase();

		if ( !$user->getId() ) {
			wfDebug( "OpenID: Error adding new user.\n" );
		} else {
			$wgAuth->initUser( $user );
			$wgAuth->updateUser( $user );

			global $wgUser;
			$wgUser = $user;

			# new user account: not opened by mail
			Hooks::run( 'AddNewAccount', [ $user, false ] );
			$user->addNewUserLogEntry();

			# Update site stats
			$ssUpdate = SiteStatsUpdate::factory( [ 'users' => 1 ] );
			DeferredUpdates::addUpdate( $ssUpdate );

			self::addUserUrl( $user, $openid );
			$this->updateUser( $user, $sreg, $ax, true );
			$user->saveSettings();
			return $user;
		}
	}

	/**
	 * @param string $openid
	 * @param string[] $sreg
	 * @param string $name
	 * @param string $password
	 * @return bool|null|User
	 */
	function attachUser( $openid, $sreg, $name, $password ) {
		global $wgAuth;

		$user = User::newFromName( $name );

		if ( $this->checkPassword( $password ) ) {
			// de-validate the temporary password
			// requires MediaWiki core with https://gerrit.wikimedia.org/r/#/c/96029/ merged 2013-11-18
			$user->setNewPassword( null );
			self::addUserUrl( $user, $openid );

			return $user;
		}

		if ( $this->checkPassword( $password ) ) {
			$wgAuth->updateUser( $user );
			$user->saveSettings();

			$reset = new SpecialChangePassword();
			$reset->setContext( $this->getContext()->setUser( $user ) );
			$reset->execute( null );

			return null;
		}

		return null;
	}

	/**
	 * @param string $openid
	 * @param string[] $sreg
	 * @param array[] $ax
	 * @param string $choice
	 * @param string $nameValue
	 * @return string|null
	 */
	function getUserName( $openid, $sreg, $ax, $choice, $nameValue ) {
		global $wgOpenIDAllowAutomaticUsername, $wgOpenIDAllowNewAccountname, $wgOpenIDProposeUsernameFromSREG;

		switch ( $choice ) {
		case 'nick':
			if ( $wgOpenIDProposeUsernameFromSREG ) {
				return ( ( array_key_exists( 'nickname', $sreg ) ) ? $sreg['nickname'] : null );
			}
			break;
		case 'full':
			if ( !$wgOpenIDProposeUsernameFromSREG ) {
				return null;
			}
			# check the SREG first; only return a value if non-null
			$fullname = ( ( array_key_exists( 'fullname', $sreg ) ) ? $sreg['fullname'] : null );
			if ( $fullname !== null ) {
				return $fullname;
			}

			# try AX
			$fullname = ( ( array_key_exists( 'http://axschema.org/namePerson/first', $ax )
				|| array_key_exists( 'http://axschema.org/namePerson/last', $ax ) ) ?
				$ax['http://axschema.org/namePerson/first'][0] . " " . $ax['http://axschema.org/namePerson/last'][0] : null
			);

			return $fullname;
		case 'url':
			if ( $wgOpenIDProposeUsernameFromSREG ) {
				return $this->toUserName( $openid );
			}
			break;
		case 'auto':
			if ( $wgOpenIDAllowAutomaticUsername ) {
				return $this->automaticName( $sreg );
			}
			break;
		case 'manual':
			if ( $wgOpenIDAllowNewAccountname ) {
				return $nameValue;
			}
		 default:
			return null;
		}
	}

	/**
	 * @param string $openid
	 * @return string|null
	 */
	function toUserName( $openid ) {
		if ( Auth_Yadis_identifierScheme( $openid ) == 'XRI' ) {
			return $this->toUserNameXri( $openid );
		} else {
			return $this->toUserNameUrl( $openid );
		}
	}

	function getNameFromEmail( $openid, $sreg, $ax ) {
		# return the part before the @ in the e-mail address;
		# look first at SREG, then AX

		if ( array_key_exists( 'email', $sreg )
			&& Sanitizer::validateEmail( $sreg['email'] )
		) {
			$addr = explode( "@", $sreg['email'] );
			if ( $addr ) {
				return $addr[0];
			}
		}

		if ( isset( $ax['http://axschema.org/contact/email'][0] )
			&& Sanitizer::validateEmail( $ax['http://axschema.org/contact/email'][0] )
		) {
			$addr = explode( "@", $ax['http://axschema.org/contact/email'][0] );

			if ( $addr ) {
				return $addr[0];
			}
		}
	}

	/**
	 * We try to use an OpenID URL as a legal MediaWiki user name in this order
	 * 1. Plain hostname, like http://evanp.myopenid.com/
	 * 2. One element in path, like http://profile.typekey.com/EvanProdromou/
	 *   or http://getopenid.com/evanprodromou
	 *
	 * @param string $openid
	 * @return string|null
	 */
	function toUserNameUrl( $openid ) {
		static $bad = [ 'query', 'user', 'password', 'port', 'fragment' ];

		$parts = parse_url( $openid );

		# If any of these parts exist, this won't work

		foreach ( $bad as $badpart ) {
			if ( array_key_exists( $badpart, $parts ) ) {
				return null;
			}
		}

		# We just have host and/or path

		# If it's just a host...
		if ( array_key_exists( 'host', $parts ) &&
			( !array_key_exists( 'path', $parts ) || strcmp( $parts['path'], '/' ) == 0 ) ) {
			$hostparts = explode( '.', $parts['host'] );

			# Try to catch common idiom of nickname.service.tld

			if ( ( count( $hostparts ) > 2 ) &&
				( strlen( $hostparts[count( $hostparts ) - 2] ) > 3 ) && # try to skip .co.uk, .com.au
				( strcmp( $hostparts[0], 'www' ) != 0 ) ) {
				return $hostparts[0];
			} else {
				# Do the whole hostname
				return $parts['host'];
			}
		} else {
			if ( array_key_exists( 'path', $parts ) ) {
				# Strip starting, ending slashes
				$path = preg_replace( '@/$@', '', $parts['path'] );
				$path = preg_replace( '@^/@', '', $path );
				if ( strpos( $path, '/' ) === false ) {
					return $path;
				}
			}
		}

		return null;
	}

	/**
	 * @param string $xri
	 * @return string|null
	 */
	function toUserNameXri( $xri ) {
		$base = $this->xriBase( $xri );

		if ( !$base ) {
			return null;
		} else {
			# =evan.prodromou
			# or @gratis*evan.prodromou
			$parts = explode( '*', substr( $base, 1 ) );
			return array_pop( $parts );
		}
	}

	/**
	 * @param string[] $sreg
	 * @return string|null
	 */
	function automaticName( $sreg ) {
		if ( array_key_exists( 'nickname', $sreg ) && # try auto-generated from nickname
			strlen( $sreg['nickname'] ) > 0 ) {
			return $this->firstAvailable( $sreg['nickname'] );
		} else { # try auto-generated
			return $this->firstAvailable( wfMessage( 'openidusernameprefix' )->text() );
		}
	}

	/**
	 * Get an auto-incremented name
	 *
	 * @param string $prefix
	 * @return string|null
	 */
	function firstAvailable( $prefix ) {
		for ( $i = 2; ; $i++ ) { # FIXME: this is the DUMB WAY to do this
			$name = "$prefix$i";
			if ( $this->userNameOK( $name ) ) {
				return $name;
			}
		}
	}

	/**
	 * Is this name OK to use as a user name?
	 *
	 * @param string $name
	 * @return bool
	 */
	function userNameOK( $name ) {
		global $wgReservedUsernames;
		return User::idFromName( $name ) == 0
			&& !in_array( $name, $wgReservedUsernames );
	}

	/**
	 * Get the full user name (first and last name) or only last or first name
	 * whatever is available from the ax array (if exists)
	 * @param array[] $ax
	 * @return string|null
	 */
	function getAXUserName( $ax ) {
		$axName = '';
		if ( isset( $ax['http://axschema.org/namePerson/first'][0] ) ) {
			$axName = $ax['http://axschema.org/namePerson/first'][0];
		}
		if ( isset( $ax['http://axschema.org/namePerson/last'][0] ) ) {
			if ( strlen( $axName ) ) {
				$axName .= ' ' . $ax['http://axschema.org/namePerson/last'][0];
			} else {
				$axName = $ax['http://axschema.org/namePerson/last'][0];
			}
		}
		return ( strlen( $axName ) ? $axName : null );
	}

	function saveValues( $response, $sreg, $ax ) {
		$this->setupSession();

		$_SESSION['openid_consumer_response'] = $response;
		$_SESSION['openid_consumer_sreg'] = $sreg;
		$_SESSION['openid_consumer_ax'] = $ax;

		return true;
	}

	function clearValues() {
		unset( $_SESSION['openid_consumer_response'] );
		unset( $_SESSION['openid_consumer_sreg'] );
		unset( $_SESSION['openid_consumer_ax'] );
		return true;
	}

	function fetchValues() {
		$response = isset( $_SESSION['openid_consumer_response'] ) ? $_SESSION['openid_consumer_response'] : null;
		$sreg = isset( $_SESSION['openid_consumer_sreg'] ) ? $_SESSION['openid_consumer_sreg'] : [];
		$ax = isset( $_SESSION['openid_consumer_ax'] ) ? $_SESSION['openid_consumer_ax'] : [];
		return [ $response, $sreg, $ax ];
	}

	function returnTo() {
		$returnto = isset( $_SESSION['openid_consumer_returnto'] ) ? $_SESSION['openid_consumer_returnto'] : '';
		$returntoquery = isset( $_SESSION['openid_consumer_returntoquery'] ) ? $_SESSION['openid_consumer_returntoquery'] : '';
		return [ $returnto, $returntoquery ];
	}

	function setReturnTo( $returnto, $returntoquery ) {
		$this->setupSession();
		$_SESSION['openid_consumer_returnto'] = $returnto;
		$_SESSION['openid_consumer_returntoquery'] = $returntoquery;
	}

	protected function getGroupName() {
		return 'openid';
	}

	public function isListed() {
		return !$this->getUser()->isRegistered();
	}
}
