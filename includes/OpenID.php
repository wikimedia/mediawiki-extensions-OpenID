<?php
class OpenID {
	/**
	 * @param string|string[]|false $mode Mode 'provider'|'consumer'|array('provider','consumer') to be checked if allowed
	 * @return bool
	 */
	static function isAllowedMode( $mode = false ) {
		global $wgOpenIDMode, $wgOpenIDProviders;

		if ( !is_string( $mode )
			|| $wgOpenIDMode === null
			|| ( $wgOpenIDMode === false )
			|| !in_array( $mode, [ 'provider', 'consumer' ] ) ) {
			return false;
		}

		# An empty list of providers _and_ no forced provider implies
		# that the wiki cannot act as consumer because it would not accept
		# any provider

		if ( $mode === 'consumer'
			&& !is_array( $wgOpenIDProviders )
			&& !self::isForcedProvider() ) {
			return false;
		}

		if ( is_array( $wgOpenIDMode ) && in_array( $mode, $wgOpenIDMode ) ) {
			return true;
		} elseif ( is_string( $wgOpenIDMode ) && ( $wgOpenIDMode == $mode ) ) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @return bool
	 */
	static function isForcedProvider() {
		global $wgOpenIDForcedProvider;
		return is_string( $wgOpenIDForcedProvider );
	}

	static function getTrustRoot() {
		global $wgOpenIDTrustRoot;

		if ( $wgOpenIDTrustRoot !== null ) {
			$trust_root = $wgOpenIDTrustRoot;
		} else {
			global $wgScriptPath, $wgCanonicalServer;
			$trust_root = $wgCanonicalServer . $wgScriptPath;
		}

		return $trust_root;
	}

	/**
	 * @return string
	 */
	static function getOpenIDSmallLogoUrl() {
		global $wgOpenIDSmallLogoUrl, $wgExtensionAssetsPath;

		if ( !$wgOpenIDSmallLogoUrl ) {
			return $wgExtensionAssetsPath . '/OpenID/skin/icons/openid-inputicon.png';
		} else {
			return $wgOpenIDSmallLogoUrl;
		}
	}

	/**
	 * @return string
	 */
	public static function getOpenIDSmallLogoUrlImageTag() {
		return Xml::element( 'img',
			[ 'src' => self::getOpenIDSmallLogoUrl(), 'alt' => 'OpenID' ],
			''
		);
	}

	/**
	 * @return string
	 */
	public static function loginOrCreateAccountOrConvertButtonLabel() {
		global $wgOut;

		$title = $wgOut->getTitle();
		$user = RequestContext::getMain()->getUser(); // No context
		if ( $title && $title->equals( SpecialPage::getTitleFor( 'OpenIDConvert' ) ) ) {
			return wfMessage( 'openid-provider-selection-button-convert' )->text();
		} else {
			if ( $user->isAllowed( 'openid-create-account-with-openid' )
				&& !$user->isAllowed( 'openid-login-with-openid' ) ) {
				return wfMessage( 'openid-provider-selection-button-create-account' )->text();
			}

			if ( !$user->isAllowed( 'openid-create-account-with-openid' )
				&& $user->isAllowed( 'openid-login-with-openid' ) ) {
				return wfMessage( 'openid-provider-selection-button-login' )->text();
			}

			return wfMessage( 'openid-provider-selection-button-login-or-create-account' )->text();
		}
	}
}
