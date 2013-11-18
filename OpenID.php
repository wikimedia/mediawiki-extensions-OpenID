<?php
/**
 * OpenID.php -- Make MediaWiki an OpenID consumer and server
 * Copyright 2006,2007 Internet Brands (http://www.internetbrands.com/)
 * Copyright 2007,2008 Evan Prodromou <evan@prodromou.name>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @file
 * @author Evan Prodromou <evan@prodromou.name>
 * @author Thomas Gries
 * @author Tyler Romeo
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

define( 'MEDIAWIKI_OPENID_VERSION', '3.43 20131103' );

$path = dirname( __FILE__ );
set_include_path( implode( PATH_SEPARATOR, array( $path ) ) . PATH_SEPARATOR . get_include_path() );

# CONFIGURATION VARIABLES

/**
 * Only allow login with OpenID.
 * Default: true
 */
$wgOpenIDLoginOnly = true;

/**
 * If true, user accounts on this wiki can be used as OpenIDs on other
 * sites. This is called "OpenID Provider" (or "OpenID Server") mode.
 *
 * @deprecated $wgOpenIDClientOnly since E:OpenID v3.12. Use $wgOpenIDConsumerAndAlsoProvider with inverted logic instead
 */
$wgOpenIDConsumerAndAlsoProvider = true;

/**
 * If true, users can use their OpenID identity provided by this site A
 * as OpenID for logins to other sites B
 * even when users logged in on site A with OpenID.
 *
 * Some users might want to do that for vanity purposes or whatever.
 */
$wgOpenIDAllowServingOpenIDUserAccounts = true;

/**
 * Whether to hide the "Login with OpenID link" link:
 * set to true if you already have this link in your skin.
 */
$wgOpenIDHideOpenIDLoginLink = false;

/**
 * Location (fully specified Url) of a small OpenID logo.
 * When set to false (default), the built-in standard logo is used.
 */
$wgOpenIDSmallLogoUrl = false;

/**
 * Whether to show the OpenID identity URL on a user's home page.
 * Possible values are 'always', 'never' (default), or 'user'.
 * 'user' lets the user decide in their preferences.
 */
$wgOpenIDShowUrlOnUserPage = 'user';

/**
 * These are trust roots that we don't bother asking users whether the trust
 * root is allowed to trust; typically for closely-linked partner sites.
 */
$wgOpenIDServerForceAllowTrust = array();

/**
 * Implicitly trust the e-mail address sent from the OpenID server, and don't
 * ask the user to verify it.  This can lead to people with a nasty OpenID
 * provider setting up accounts and spamming
 */
$wgOpenIDTrustEmailAddress = false;

/**
 * Where to store transitory data.
 * Supported types are 'file', 'memcached', 'db'.
 */
$wgOpenIDServerStoreType = 'file';

/**
 * If the store type is set to 'file', this is is the name of a directory to
 * store the data in.
 *
 * false defaults to "$wgTmpDirectory/$wgDBname/openid-server-store"
 */
$wgOpenIDServerStorePath = false;

/**
 * Defines the trust root for this server
 * If null, we make a guess
 */
$wgOpenIDTrustRoot = null;

/**
 * When using deny and allow arrays, defines how the security works.
 * If true, works like "Order Allow,Deny" in Apache; deny by default,
 * allow items that match allow that don't match deny to pass.
 * If false, works like "Order Deny,Allow" in Apache; allow by default,
 * deny items in deny that aren't in allow.
 */
$wgOpenIDConsumerDenyByDefault = false;

/**
 * Which partners to allow; regexps here. See above.
 */
$wgOpenIDConsumerAllow = array();

/**
 * Which partners to deny; regexps here. See above.
 */
$wgOpenIDConsumerDeny = array();

/**
 * Force this server to only allow authentication against one server
 * and hide the selection form entirely.
 *
 * @param string|null $wgOpenIDForcedProvider Name of hard-coded provider, or fully qualified Provider Id selection page Url
 *
 * null:                          (default) show the extension's OpenID provider selection screen based on internal $wgOpenIDProviders list
 *
 * (string) fully qualified Url:  a fully qualified Url to the Providers' Id selection page
 *                                use "http://mediawiki-provider-server/wiki/Special:OpenIDServer/id"
 *                                in case you want to force the use of another mediawiki-provider-server (not this wiki!) as OpenID provider
 *
 * (string) OpenID provider Name: use data for provider "Name" from the internal $wgOpenIDProviders list
 *
 */
$wgOpenIDForcedProvider = null;


/**
 * The provider to select by default for a user who never selected a provider before
 *
 * @param string|null $wgOpenIDDefaultProviderName Name of provider in $wgOpenIDProviders to select by default
 *
 * null:                         (default) Don't select any provider by default
 *
 * (string) OpenIdProvider Name: select provider "Name" from the internal $wgOpenIDProviders list
 */
$wgOpenIDDefaultProviderName = null;


/**
 * List of supported OpenID Providers
 *
 * Names and parameters of supported OpenID Providers
 * OpenID provider names are the keys.
 *
 * Example of an array element:
 *
 *  'Verisign' => array(
 *
 *    // whether the provider is a large (true) or small one (false)
 *    'large-provider' => false,
 *
 *     // Provider OpenID, {username} placeholder is replaced
 *    'openid-url' => 'http://{username}.pip.verisignlabs.com/',
 *
 *    // Provider Url which allows then the selection of a specific Id
 *    'openid-selection-url' => 'http://pip.verisignlabs.com/',
 *   )
 *
 * Provider icons:
 * have to be supplied locally in directoy $wgExtensionAssets/OpenID/skin/icons
 *
 * The provider icon files need to have canonical filenames like
 * <ProviderName>_large.png (example Google_large.png)
 * <ProviderName>_small.png (example Versign_small.png)
 *
 * @param $wgOpenIDProviders Array: names and parameters of supported OpenID Providers
 *
 */
$wgOpenIDProviders = array(
	'OpenID' => array(
		'large-provider' => true,
		'openid-url' => '{URL}'
	),
	'Google' => array(
		'large-provider' => true,
		'openid-url' => 'https://www.google.com/accounts/o8/id'
	),
	'Yahoo' => array(
		'large-provider' => true,
		'openid-url' => 'http://yahoo.com/'
	),
	'AOL' => array(
		'large-provider' => true,
		'openid-url' => 'http://openid.aol.com/{username}'
	),
	'MyOpenID' => array(
		'large-provider' => false,
		'openid-url' => 'http://{username}.myopenid.com/'
	),
	'LiveJournal' => array(
		'large-provider' => false,
		'openid-url' => 'http://{username}.livejournal.com/'
	),
	'Blogger' => array(
		'large-provider' => false,
		'openid-url' => 'http://{username}.blogspot.com/'
	),
	'Flickr' => array(
		'large-provider' => false,
		'openid-url' => 'http://flickr.com/photos/{username}/'
	),
	'Verisign' => array(
		'large-provider' => false,
		'openid-url' => 'https://{username}.pip.verisignlabs.com/',
		'openid-selection-url' => 'https://pip.verisignlabs.com/'
	),
	'ClaimID' => array(
		'large-provider' => false,
		'openid-url' => 'http://claimid.com/{username}'
	)
);

/**
 * when creating a new account or associating an existing account with OpenID:
 *
 * the following settings allow the Wiki sysop a fine-grained tuning of
 * how new wiki user account names are derived from data associated with or
 * otherwise available from the validated OpenID identity, and/or whether or not
 * the free choice of the corresponding wiki user account name is allowed.
 */

/**
 * whether associating an existing account with OpenID is allowed:
 * show a wiki account username text input and password field
 */
$wgOpenIDAllowExistingAccountSelection = true;

/**
 * when creating a new account with OpenID:
 * show users a text input field to enter an arbitrary username
 */
$wgOpenIDAllowNewAccountname = true;

/**
 * when creating a new account or associating an existing account with OpenID:
 * Use the username part left of "@" in an OpenID e-mail address as username
 * for account creation, or log in - if no nickname is supplied in the OpenID
 * SREG data set. In other words: if available, nickname takes precedence
 * over username from e-mail.
 *
 * Example:
 *
 * When your OpenID is http://me.yahoo.com/my.name and your e-mail address is
 * my.name@yahoo.com, then "my.name" will be used for account creation.
 *
 * This works well with $wgOpenIDForcedProvider where all users have a unique
 * e-mail address at the same domain.
 *
 * The e-mail address associated with the OpenID identity becomes
 * the (unconfirmed) users' wiki account e-mail address.
 */
$wgOpenIDUseEmailAsNickname = false;

/**
 * when creating a new account or associating an existing account with OpenID:
 * propose and allow new account names from OpenID SREG data such as
 * fullname or nickname (if such data is available)
 */
$wgOpenIDProposeUsernameFromSREG = true;

/**
 * when creating a new account or associating an existing account with OpenID:
 * propose an auto-generated fixed unique username "OpenIDUser#" (#=1, 2, ..)
 */
$wgOpenIDAllowAutomaticUsername = true;

/**
 * Where to store transitory data.
 * Supported types are 'file', 'memcached', 'db'.
 */
$wgOpenIDConsumerStoreType = 'file';

/**
 * If the store type is set to 'file', this is is the name of a
 * directory to store the data in.
 *
 * false defaults to "$wgTmpDirectory/$wgDBname/openid-consumer-store"
 */
$wgOpenIDConsumerStorePath = false;

/**
 * Expiration time for the OpenID cookie. Lets the user re-authenticate
 * automatically if their session is expired. Only really useful if
 * it's much greater than $wgCookieExpiration. Default: about one year.
 */
$wgOpenIDCookieExpiration = 365 * 24 * 60 * 60;

/*
 * The fractional part after /Special:OpenIDServer/
 * when the server shall show the selection (login) form
 *
 */
$wgOpenIDIdentifierSelect = "id";

/**
 * When merging accounts with the UserMerge and Delete extension,
 * should OpenIDs associated to the "from" account automatically be associated
 * to the "to" account ?
 */
$wgOpenIDMergeOnAccountMerge = false;

/**
 * If true, will show provider icons instead of the text.
 */
$wgOpenIDShowProviderIcons = true;

/**
 * When used as OpenID provider, you can optionally define a template for a
 * customized fully specified url (CFSU) as identity url for delegation.
 * This allows differently looking "nice OpenID urls" in addition to the
 * generic urls /User:Username and /Special:OpenIDIdentifier/<id> .
 *
 * The CFSU template must contain a placeholder string "{ID}".
 *
 * The placeholder is substituted with the authenticated user's internal ID
 * during the OpenID authentication process.
 *
 * To make this working you need also to set up a suited rewrite rule
 * in your web server which redirects the CFSU with the replaced user id
 * to Special:OpenIDIdentifier/<id>.
 *
 * The default value is computed internally as
 *
 * $wgOpenIDIdentifiersURL =
 * str_replace( "$1", "Special:OpenIDIdentifier/{ID}", $wgServer . $wgArticlePath );
 *
 */
$wgOpenIDIdentifiersURL = "";

# New options
$wgDefaultUserOptions['openid-show-openid'] = true;
$wgDefaultUserOptions['openid-userinfo-update-on-login-nickname'] = false;
$wgDefaultUserOptions['openid-userinfo-update-on-login-email'] = false;
$wgDefaultUserOptions['openid-userinfo-update-on-login-fullname'] = false;
$wgDefaultUserOptions['openid-userinfo-update-on-login-language'] = false;
$wgDefaultUserOptions['openid-userinfo-update-on-login-timezone'] = false;

# END CONFIGURATION VARIABLES

$wgExtensionCredits['other'][] = array(
	'name' => 'OpenID',
	'version' => MEDIAWIKI_OPENID_VERSION,
	'path' => __FILE__,
	'author' => array( 'Evan Prodromou', 'Sergey Chernyshev', 'Alexandre Emsenhuber', 'Thomas Gries' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:OpenID',
	'descriptionmsg' => 'openid-desc',
);

function OpenIDGetServerPath() {
	$rel = 'Auth/OpenID/Server.php';

	foreach ( explode( PATH_SEPARATOR, get_include_path() ) as $pe ) {
		$full = $pe . DIRECTORY_SEPARATOR . $rel;
		if ( file_exists( $full ) ) {
			return $full;
		}
	}
	return $rel;
}

$dir = $path . '/';

$wgExtensionMessagesFiles['OpenID'] = $dir . 'OpenID.i18n.php';
$wgExtensionMessagesFiles['OpenIDAlias'] = $dir . 'OpenID.alias.php';

$wgAutoloadClasses['OpenIDHooks'] = $dir . 'OpenID.hooks.php';
$wgAutoloadClasses['SpecialOpenIDCreateAccount'] = $dir . 'OpenID.hooks.php';
$wgAutoloadClasses['SpecialOpenIDUserLogin'] = $dir . 'OpenID.hooks.php';

# Autoload common parent with utility methods
$wgAutoloadClasses['SpecialOpenID'] = $dir . 'SpecialOpenID.body.php';
$wgAutoloadClasses['SpecialOpenIDIdentifier'] = $dir . 'SpecialOpenIDIdentifier.body.php';

$wgAutoloadClasses['SpecialOpenIDLogin'] = $dir . 'SpecialOpenIDLogin.body.php';
$wgAutoloadClasses['SpecialOpenIDConvert'] = $dir . 'SpecialOpenIDConvert.body.php';
$wgAutoloadClasses['SpecialOpenIDServer'] = $dir . 'SpecialOpenIDServer.body.php';
$wgAutoloadClasses['SpecialOpenIDXRDS'] = $dir . 'SpecialOpenIDXRDS.body.php';
$wgAutoloadClasses['SpecialOpenIDDashboard'] = $dir . 'SpecialOpenIDDashboard.body.php';

# UI class
$wgAutoloadClasses['OpenIDProvider'] = $dir . 'OpenIDProvider.body.php';

# Gets stored in the session, needs to be reified before our setup
$wgAutoloadClasses['Auth_OpenID_CheckIDRequest'] = OpenIDGetServerPath();

$wgAutoloadClasses['MediaWikiOpenIDDatabaseConnection'] = $dir . 'DatabaseConnection.php';
$wgAutoloadClasses['MediaWikiOpenIDMemcachedStore'] = $dir . 'MemcachedStore.php';

$wgSpecialPages['OpenIDIdentifier'] = 'SpecialOpenIDIdentifier';

$wgHooks['PersonalUrls'][] = 'OpenIDHooks::onPersonalUrls';
$wgHooks['BeforePageDisplay'][] = 'OpenIDHooks::onBeforePageDisplay';
$wgHooks['ArticleViewHeader'][] = 'OpenIDHooks::onArticleViewHeader';
$wgHooks['SpecialPage_initList'][] = 'OpenIDHooks::onSpecialPage_initList';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'OpenIDHooks::onLoadExtensionSchemaUpdates';
$wgHooks['DeleteAccount'][] = 'OpenIDHooks::onDeleteAccount';
$wgHooks['MergeAccountFromTo'][] = 'OpenIDHooks::onMergeAccountFromTo';

# 1.16+
$wgHooks['GetPreferences'][] = 'OpenIDHooks::onGetPreferences';

# FIXME, function does not exist
# $wgHooks['UserLoginForm'][] = 'OpenIDHooks::onUserLoginForm';

# new user rights
$wgAvailableRights[] = 'openid-dashboard-access';
$wgAvailableRights[] = 'openid-dashboard-admin';

# uncomment to allow users to read access the dashboard
# $wgGroupPermissions['user']['openid-dashboard-access'] = true;

# allow users to add or convert OpenIDs to their accounts
# but only if we do not enforce the use of a certain provider
# if $wgOpenIDForcedProvider is set, the permission is set false
$wgGroupPermissions['user']['openid-converter-access'] = true;

# allow sysops to read access the dashboard and
# allow sysops to adminstrate the OpenID settings (feature under construction)
$wgGroupPermissions['sysop']['openid-dashboard-access'] = true;
$wgGroupPermissions['sysop']['openid-dashboard-admin'] = true;

$myResourceTemplate = array(
	'localBasePath' => $path . '/skin',
	'remoteExtPath' => 'OpenID/skin',
	'group' => 'ext.openid',
);

$wgResourceModules['ext.openid'] = $myResourceTemplate + array(
	'scripts' => 'openid.js',
	'dependencies' => array(
		'jquery.cookie'
	)
);
$wgResourceModules['ext.openid.plain'] = $myResourceTemplate + array(
	'styles' => 'openid-plain.css',
	'dependencies' => array(
		'ext.openid'
	)
);
$wgResourceModules['ext.openid.icons'] = $myResourceTemplate + array(
	'styles' => 'openid.css',
	'dependencies' => array(
		'ext.openid'
	)
);
