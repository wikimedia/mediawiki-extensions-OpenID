<?php
/**
 * OpenID.i18n.php -- Interface messages for OpenID for MediaWiki
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
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Evan Prodromou <evan@prodromou.name>
 * @author Sergey Chernyshev
 * @author Alexandre Emsenhuber
 * @author Thomas Gries
 */
$messages['en'] = array(
	'openid-desc' => 'Let users log in to the wiki with an [//openid.net/ OpenID]. If this is enabled on the wiki, they can also use their user account URL of this wiki as OpenID to log in to other OpenID-aware web sites',
	'openididentifier' => 'OpenID Identifier',
	'openidlogin' => 'Log in / create account with OpenID',
	'openidserver' => 'OpenID server',
	'openid-identifier-page-text-user' => 'This page is the identifier for user "$1".',
	'openid-identifier-page-text-different-user' => 'This page is the identifier for user ID $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'This is an invalid local OpenID identifier.',
	'openid-server-identity-page-text' => 'This is a technical OpenID server page for starting the OpenID authentication. The page has no other purpose.',
	'openidxrds' => 'Yadis file',
	'openidconvert' => 'OpenID converter',
	'openiderror' => 'Verification error',
	'openiderrortext' => 'An error occurred during verification of the OpenID URL.',
	'openidconfigerror' => 'OpenID configuration error',
	'openidconfigerrortext' => 'The OpenID storage configuration for this wiki is invalid.
Please consult an [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'OpenID permissions error',
	'openidpermissiontext' => 'The OpenID you provided is not allowed to login to this server.',
	'openidcancel' => 'Verification cancelled',
	'openidcanceltext' => 'Verification of the OpenID URL was cancelled.',
	'openidfailure' => 'Verification failed',
	'openidfailuretext' => 'Verification of the OpenID URL failed. Error message: "$1"',
	'openidsuccess' => 'Verification succeeded',
	'openidsuccesstext' => "'''Successful verification and log in as user $1'''.

Your OpenID is $2 .

This and optional further OpenIDs can be managed in the [[Special:Preferences#mw-prefsection-openid|OpenID tab]] of your preferences.<br />
An optional account password can be added in your [[Special:Preferences#mw-prefsection-personal|User profile]].",
	'openidusernameprefix' => 'OpenIDUser',
	'openidserverlogininstructions' => '$3 requests that you enter your password for your user $2 page $1 (this is your OpenID URL)',
	'openidtrustinstructions' => 'Check if you want to share data with $1.',
	'openidallowtrust' => 'Allow $1 to trust this user account.',
	'openidnopolicy' => 'Site has not specified a privacy policy.',
	'openidpolicy' => 'Check the <a target="_new" href="$1">privacy policy</a> for more information.',
	'openidoptional' => 'Optional',
	'openidrequired' => 'Required',
	'openidnickname' => 'Nickname',
	'openidfullname' => 'Real name',
	'openidemail' => 'E-mail address',
	'openidlanguage' => 'Language',
	'openidtimezone' => 'Time zone',
	'openidchooselegend' => 'Username and account choice',
	'openidchooseinstructions' => 'All users need a nickname;
you can choose one from the options below.',
	'openidchoosenick' => 'Your nickname ($1)',
	'openidchoosefull' => 'Your real name ($1)',
	'openidchooseurl' => 'A name picked from your OpenID ($1)',
	'openidchooseauto' => 'An auto-generated name ($1)',
	'openidchoosemanual' => 'A name of your choice:',
	'openidchooseexisting' => 'An existing account on this wiki',
	'openidchooseusername' => 'Username:',
	'openidchoosepassword' => 'Password:',
	'openidconvertinstructions' => 'This form lets you change your user account to use an OpenID URL or add more OpenID URLs',
	'openidconvertoraddmoreids' => 'Convert to OpenID or add another OpenID URL',
	'openidconvertsuccess' => 'Successfully converted to OpenID',
	'openidconvertsuccesstext' => 'You have successfully converted your OpenID to $1.',
	'openid-convert-already-your-openid-text' => 'The OpenID $1 is already associated to your account. It does not make sense to add it again.',
	'openid-convert-other-users-openid-text' => '$1 is someone else\'s OpenID. You cannot use the OpenID of another user.',
	'openidalreadyloggedin' => 'You are already logged in.',
	'openidalreadyloggedintext' => "'''You are already logged in, $1!'''

You can manage (view, delete, add further) OpenIDs in the [[Special:Preferences#mw-prefsection-openid|OpenID tab]] of your preferences.",
	'openidnousername' => 'No username specified.',
	'openidbadusername' => 'Bad username specified.',
	'openidautosubmit' => 'This page includes a form that should be automatically submitted if you have JavaScript enabled.
If not, try the "Continue" button.',
	'openidclientonlytext' => 'You cannot use accounts from this wiki as OpenIDs on another site.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} supports the [//openid.net/ OpenID] standard for single sign-on between websites.
OpenID lets you log in to many different websites without using a different password for each.
(See [//en.wikipedia.org/wiki/OpenID Wikipedia\'s OpenID article] for more information.)
There are many [//openid.net/get/ OpenID providers], and you may already have an OpenID-enabled account on another service.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''only'' allows you to log in with OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'If you already have an account on {{SITENAME}}, you can [[Special:UserLogin|log in]] with your username and password as usual.
To use OpenID in the future, you can [[Special:OpenIDConvert|convert your account to OpenID]] after you have logged in normally.',
	'openidupdateuserinfo' => 'Update my personal information:',
	'openiddelete' => 'Delete OpenID',
	'openiddelete-text' => 'By clicking the "{{int:openiddelete-button}}" button, you will remove the OpenID "$1" from your account.
You will no longer be able to log in with this OpenID.',
	'openiddelete-button' => 'Confirm',
	'openiddeleteerrornopassword' => 'You cannot delete all your OpenIDs because your account has no password.
You would not able to log in without an OpenID.',
	'openiddeleteerroropenidonly' => 'You cannot delete all your OpenIDs because your are only allowed to log in with OpenID.
You would not able to log in without an OpenID.',
	'openiddelete-success' => 'The OpenID has been successfully removed from your account.',
	'openiddelete-error' => 'An error occurred while removing the OpenID from your account.',
	'openid-openids-were-not-merged' => 'OpenID(s) were not merged when merging the user accounts.',

	'prefs-openid' => 'OpenID',
	'prefs-openid-hide-openid' => 'OpenID URL on your user page',
	'prefs-openid-userinfo-update-on-login' => 'OpenID user information update',
	'prefs-openid-associated-openids' => 'Your OpenIDs for login to {{SITENAME}}',
	'prefs-openid-trusted-sites' => 'Trusted sites',
	'prefs-openid-local-identity' => 'Your OpenID for login to other sites',
	'openid-hide-openid-label' => 'Hide your OpenID URL on your user page.',
	'openid-show-openid-url-on-userpage-always' => 'Your OpenID is always shown on your user page when you visit it.',
	'openid-show-openid-url-on-userpage-never' => 'Your OpenID is never shown on your user page.',
	'openid-userinfo-update-on-login-label' => 'User profile information fields which will be automatically updated from OpenID persona every time when you log in:',
	'openid-associated-openids-label' => 'OpenIDs associated with your account:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Action',
	'openid-urls-registration' => 'Registration time',
	'openid-urls-registration-date-time'  => '$1', # only translate this message to other languages if you have to change it
	'openid-urls-delete' => 'Delete',
	'openid-add-url' => 'Add a new OpenID to your account',
	'openid-trusted-sites-label' => 'Sites you trust and where you have used your OpenID for logging in:',
	'openid-trusted-sites-table-header-column-url' => 'Trusted sites',
	'openid-trusted-sites-table-header-column-action' => 'Action',
	'openid-trusted-sites-delete-link-action-text' => 'Delete',
	'openid-trusted-sites-delete-all-link-action-text' => 'Delete all trusted sites',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Site trust deletion',
	'openid-trusted-sites-delete-confirmation-question' => 'By clicking the "{{int:openid-trusted-sites-delete-confirmation-button-text}}" button, you will remove "$1" from the list of sites you trust.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'By clicking the "{{int:openid-trusted-sites-delete-confirmation-button-text}}" button, you will remove all trusted sites from your user profile.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Confirm',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1" was successfully removed from the list of sites you trust.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'All sites you previously trusted were successfully removed from your user profile.',

	'openid-local-identity' => 'Your OpenID:',

	'openid-login-or-create-account' => 'Log in or create a new account',
	'openid-provider-label-openid' => 'Enter your OpenID URL',
	'openid-provider-label-google' => 'Log in using your Google account',
	'openid-provider-label-yahoo' => 'Log in using your Yahoo account',
	'openid-provider-label-aol' => 'Enter your AOL screenname',
	'openid-provider-label-wmflabs' => 'Log in using your Wmflabs account',
	'openid-provider-label-other-username' => 'Enter your $1 username',

	'specialpages-group-openid' => 'OpenID service pages and status information',

	# Rights
	'right-openid-converter-access' => 'Can add or convert their account to use OpenID identities',
	'right-openid-dashboard-access' => 'Standard access to the OpenID dashboard',
	'right-openid-dashboard-admin' => 'Administrator access to the OpenID dashboard',

	# Associated actions - in the sentence "You do not have permission to X"
	'action-openid-converter-access' => 'add or convert your account to use OpenID identities',
	'action-openid-dashboard-access' => 'access the OpenID dashboard',
	'action-openid-dashboard-admin' => 'access the OpenID administrator dashboard',

	'openid-dashboard-title' => 'OpenID dashboard',
	'openid-dashboard-title-admin' => 'OpenID dashboard (administrator)',
	'openid-dashboard-introduction' => 'The current OpenID extension settings ([$1 help])',
	'openid-dashboard-number-openid-users' => 'Number of users with OpenID',
	'openid-dashboard-number-openids-in-database' => 'Number of OpenIDs (total)',
	'openid-dashboard-number-users-without-openid' => 'Number of users without OpenID',
);

/** Message documentation (This is the name of the message documentation language code (qqq). Follow the rules of your languages and use small first letter if it doesn't capitalize language names always.

It might be easier to translate it as "translation guidelines" or "translation help".
{{Identical|Message documentation}})
 * @author Dbc334
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Hamilton Abreu
 * @author IAlex
 * @author Jon Harald Søby
 * @author Nemo bis
 * @author Nike
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 * @author The Evil IP address
 * @author Thomas Gries
 * @author Umherirrender
 * @author Wikinaut
 */
$messages['qqq'] = array(
	'openid-desc' => '{{desc|name=Open ID|url=http://www.mediawiki.org/wiki/Extension:OpenID}}',
	'openididentifier' => '{{doc-special|OpenIDIdentifier|unlisted=1}}',
	'openidlogin' => 'Used as page title in Special:OpenIDLogin.',
	'openidserver' => 'Used as page title of Special:OpenIDServer.',
	'openid-identifier-page-text-user' => 'A short text which describes this technical OpenID identifier page for a user. The page is used only during OpenID authentication and is generally not visited otherwise.

Parameters:
* $1 - a user name',
	'openid-identifier-page-text-different-user' => 'A short text which describes this technical OpenID identifier page for a user other than then the visiting logged-in user. The page is used only during OpenID authentication and is generally not visited otherwise.

Parameters:
* $1 - a User ID',
	'openid-identifier-page-text-no-such-local-openid' => 'A short text which describes this technical OpenID identifier page when the id (subpage) is not valid in that wiki, because no user has that User ID. The page is used only during OpenID authentication and is generally not visited otherwise.',
	'openid-server-identity-page-text' => 'A short text which describes this technical OpenID server identity page which is only used during OpenID authentication and not used otherwise.',
	'openidxrds' => 'Used as page title in Special:OpenIDXRDS.

[[w:Yadis|Yadis]] is a communications protocol for discovery of services such as OpenID, OAuth, and XDI connected to a Yadis ID.',
	'openidconvert' => 'Used as page title in Special:OpenIDConvert.',
	'openiderror' => 'Used as error page title.

This message is title for the following error messages:
* {{msg-mw|openid-convert-already-your-openid-text}}
* {{msg-mw|openid-convert-other-users-openid-text}}
* {{msg-mw|openidclientonlytext}}
* {{msg-mw|openiddeleteerrornopassword}}
* {{msg-mw|openiddeleteerroropenidonly}}
* {{msg-mw|openiderrortext}}',
	'openiderrortext' => 'Used as error message.

The title for this error message is {{msg-mw|Openiderror}}.',
	'openidconfigerror' => 'Used as error title for the following error message:
* {{msg-mw|Openidconfigerrortext}}',
	'openidconfigerrortext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidconfigerror}}.',
	'openidpermission' => 'Used as error title for the following error message:
* {{msg-mw|Openidpermissiontext}}',
	'openidpermissiontext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidpermission}}.',
	'openidcancel' => 'Used as error title for the following error message:
* {{msg-mw|Openidcanceltext}}',
	'openidcanceltext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidcancel}}.',
	'openidfailure' => 'Used as error title for the following error message:
* {{msg-mw|Openidfailuretext}}',
	'openidfailuretext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidfailure}}.',
	'openidsuccess' => 'Used as page title.

The page body for this title is:
* {{msg-mw|Openidsuccesstext}}',
	'openidsuccesstext' => 'Used as page body. The page title for this message is {{msg-mw|Openidsuccess}}.

Parameters:
* $1 - a username
* $2 - an OpenID',
	'openidusernameprefix' => 'Used as username prefix, if the nickname is not defined or is empty.',
	'openidserverlogininstructions' => 'The message is shown to users when they want to log in on another site ($3) with their MediaWiki userpage URL (this MediaWiki as OpenID server) acting as OpenID identity. 

If not logged in by cookie or session, the MediaWiki prompts the user to log in as user $2. After a successful login to the MediaWiki which acts as OpenID server, the process flow is redirected to the other OpenID consumer site, where the user will be logged via their (MediaWiki userpage) OpenID.

System message output example after parameter substitution:

"http://www.consumer.org/foo requests that you enter your password for your user MeMyself page http://www.server.org/mediawiki/index.php/User:MeMyself (this is your OpenID URL)"

Parameters:
* $1 - the fully specified user page URL which acts as OpenID identity. This is the OpenID identity for log-ins on the other, requesting site $3 (the OpenID consumer site $3)
* $2 - MediaWiki account username (on this wiki, which acts as OpenID server). Remark: a password must be associated to that MediaWiki account, OpenID alone is not sufficient.
* $3 - OpenID consumer site URL',
	'openidtrustinstructions' => 'Parameters:
* $1 - a trust root. A trust root looks much like a normal URL, but is used to describe a set of URLs. Trust roots are used by OpenID to verify that a user has approved the OpenID enabled website.',
	'openidallowtrust' => 'Used as label for the checkbox in Special:OpenIDServer. Parameters:
* $1 - a trust root. A trust root looks much like a normal URL, but is used to describe a set of URLs. Trust roots are used by OpenID to verify that a user has approved the OpenID enabled website.',
	'openidnopolicy' => 'unused at this time',
	'openidpolicy' => 'unused at this time. Parameters:
* $1 - the URL',
	'openidoptional' => '{{Identical|Optional}}',
	'openidrequired' => '{{Identical|Required}}',
	'openidnickname' => '{{Identical|Nickname}}',
	'openidfullname' => '{{Identical|Real name}}',
	'openidemail' => '{{Identical|E-mail address}}',
	'openidlanguage' => '{{Identical|Language}}',
	'openidtimezone' => '{{Identical|Time zone}}',
	'openidchooselegend' => 'Used as fieldset label for the "Choose an account" form.

The instruction for the form is:
* {{msg-mw|openidchooseinstructions}}',
	'openidchooseinstructions' => 'Used as instruction for the "Choose an account" form.

See also:
* {{msg-mw|Openidchooselegend|fieldset label}}',
	'openidchoosenick' => 'Used as label for the radio button in Special:OpenIDLogin. Parameters:
* $1 - nickname',
	'openidchoosefull' => 'Used as label for the radio button in Special:OpenIDLogin. Parameters:
* $1 - fullname',
	'openidchooseurl' => 'Used as label for the radio button in Special:OpenIDLogin. Parameters:
* $1 - OpenID URL',
	'openidchooseauto' => "Used as label for the radio button in Special:OpenIDLogin. Parameters:
* $1 - nickname. If nickname doesn't exist or is empty, $1 is {{msg-mw|openidusernameprefix}}.",
	'openidchoosemanual' => 'Used as label for the radio button in Special:OpenIDLogin.

This message is followed by the "Account name" input box.',
	'openidchooseexisting' => 'Used as label for the radio button in Special:OpenIDLogin.

This message is followed by the following messages:
* {{msg-mw|openidchooseusername}} (an input box follows)
* {{msg-mw|openidchoosepassword}} (an input box follows)',
	'openidchooseusername' => 'Used as label for input box in Special:OpenIDLogin.
{{Identical|Username}}',
	'openidchoosepassword' => 'Used as label for the "Password" input box in Special:OpenIDLogin.
{{Identical|Password}}',
	'openidconvertinstructions' => 'Used as instruction text for the form in Special:OpenIDConvert.

The fieldset label for the form is:
* {{msg-mw|openidconvertoraddmoreids}}',
	'openidconvertoraddmoreids' => 'Used as the legend of the form in Special:OpenIDConvert',
	'openidconvertsuccess' => 'Used as page title in Special:OpenIDConvert.

The page body for this title is:
* {{msg-mw|Openidconvertsuccesstext}}',
	'openidconvertsuccesstext' => 'Used as page body. The page title for this message is {{msg-mw|Openidconvertsuccess}}.',
	'openid-convert-already-your-openid-text' => 'Warning text in case a user tried to add an OpenID which is already associated to their account.

Parameters:
* $1 - the conflicting, already associated OpenID',
	'openid-convert-other-users-openid-text' => 'Warning text in case a user tried to add an OpenID which is already associated with an account of another user.

Parameters:
* $1 - the conflicting, already associated OpenID',
	'openidalreadyloggedin' => '',
	'openidalreadyloggedintext' => 'Parameters:
* $1 - a username',
	'openidnousername' => 'Used as error message. (Commented out at this time.)',
	'openidbadusername' => 'Used as error message. (Commented out at this time.)',
	'openidautosubmit' => '{{doc-important|"Continue" will never be localised. It is hardcoded in a PHP extension. Translations could be made like ""Continue" (translation)"}}',
	'openidclientonlytext' => 'Used as error message. Its title is {{msg-mw|Openiderror}}.

This is also used as "404 Not Found" page body in Special:OpenIDXRDS.',
	'openidloginlabel' => 'unused at this time',
	'openidlogininstructions' => 'Used as instruction text for the Login form in Special:OpenIDLogin.

This message is followed by any one of the following messages:
* {{msg-mw|openidlogininstructions-openidloginonly|if <code>$wgOpenIDLoginOnly</code> is TRUE}}
* {{msg-mw|openidlogininstructions-passwordloginallowed|if <code>$wgOpenIDLoginOnly</code> is FALSE}}',
	'openidlogininstructions-openidloginonly' => 'Used as instruction text for the Login form in Special:OpenIDLogin, if <code>$wgOpenIDLoginOnly</code> is TRUE.

This message follows the message:
* {{msg-mw|Openidlogininstructions}}

See also:
* {{msg-mw|Openidlogininstructions-passwordloginallowed}}',
	'openidlogininstructions-passwordloginallowed' => 'Used as instruction text for the Login form in Special:OpenIDLogin, if <code>$wgOpenIDLoginOnly</code> is FALSE.

This message follows the message:
* {{msg-mw|Openidlogininstructions}}

See also:
* {{msg-mw|Openidlogininstructions-openidloginonly}}',
	'openidupdateuserinfo' => 'Used in Special:OpenIDLogin.

This message is followed by list of OpenID attributes (nickname, email and/or language).',
	'openiddelete' => 'Used as page title',
	'openiddelete-text' => 'Parameters:
* $1 - the URL of the removed site',
	'openiddelete-button' => '{{Identical|Confirm}}',
	'openiddeleteerrornopassword' => 'Used as error message in Special:OpenIDConvert.

The title for this error message is {{msg-mw|openiderror}}.

See also:
* {{msg-mw|Openiddeleteerroropenidonly}}',
	'openiddeleteerroropenidonly' => 'Used as error message in Special:OpenIDConvert.

The title for this error message is {{msg-mw|openiderror}}.

See also:
* {{msg-mw|Openiddeleteerrornopassword}}',
	'openiddelete-success' => 'Used in Special:OpenIDConvert.

See also:
* {{msg-mw|Openiddelete-error}}',
	'openiddelete-error' => 'Used as error message in Special:OpenIDConvert.

See also:
* {{msg-mw|Openiddelete-success}}',
	'openid-openids-were-not-merged' => 'When merging user accounts by UserMerge or similar extensions, OpenID(s) are not merged if $wgOpenIDMergeOnAccountMerge=false (default).',
	'prefs-openid' => '{{optional}}
OpenID preferences tab title',
	'prefs-openid-hide-openid' => 'Label of a Special:Preference section about OpenID: if you log in with OpenID, you can hide your OpenID URL on your user page.',
	'prefs-openid-userinfo-update-on-login' => 'OpenID user information update (section header)',
	'prefs-openid-associated-openids' => 'Your OpenIDs for login to this wiki (section header)',
	'prefs-openid-trusted-sites' => 'Trusted sites (section header).
{{Identical|Trusted site}}',
	'prefs-openid-local-identity' => 'Your OpenID for login to other sites (section header)',
	'openid-hide-openid-label' => 'Hide your OpenID URL on your user page (preference label)

If <code>$wgOpenIDShowUrlOnUserPage</code> is not defined, this message is used as the label for checkbox.

If <code>$wgOpenIDShowUrlOnUserPage</code>\'s value is "always", this message is used as the label for:
* {{msg-mw|Openid-show-openid-url-on-userpage-always}}

If <code>$wgOpenIDShowUrlOnUserPage</code>\'s value is "never", this message is used as the label for:
* {{msg-mw|Openid-show-openid-url-on-userpage-never}}',
	'openid-show-openid-url-on-userpage-always' => 'Used in [[Special:Preferences]], when <code>$wgOpenIDShowUrlOnUserPage</code>\'s value is "always".

See also:
* {{msg-mw|Openid-show-openid-url-on-userpage-never}}',
	'openid-show-openid-url-on-userpage-never' => 'Used in [[Special:Preferences]], when <code>$wgOpenIDShowUrlOnUserPage</code>\'s value is "never".

See also:
* {{msg-mw|Openid-show-openid-url-on-userpage-always}}',
	'openid-userinfo-update-on-login-label' => 'Update the following information from OpenID persona every time the user logs in: (preference label)',
	'openid-associated-openids-label' => 'OpenIDs associated with your account: (preference label)',
	'openid-urls-url' => '{{optional}}',
	'openid-urls-action' => '{{Identical|Action}}',
	'openid-urls-registration' => 'Used in the same way as {{msg-mw|prefs-registration}}',
	'openid-urls-registration-date-time' => '{{optional}}
Used in the same way as {{msg-mw|prefs-registration-date-time}}.',
	'openid-urls-delete' => '{{Identical|Delete}}',
	'openid-add-url' => 'Used as link text. It is a link to Special:OpenIDConvert.',
	'openid-trusted-sites-label' => 'Sites you trust and where you have used your OpenID for logging in: (preference label)',
	'openid-trusted-sites-table-header-column-url' => 'Trusted sites (table header, URL column).
{{Identical|Trusted site}}',
	'openid-trusted-sites-table-header-column-action' => 'Trusted sites (table header, action column).
{{Identical|Action}}',
	'openid-trusted-sites-delete-link-action-text' => '{{Identical|Delete}}',
	'openid-trusted-sites-delete-all-link-action-text' => 'A text for the link in the table to click to delete all trusted sites, e.g. "Delete all trusted sites"',
	'openid-trusted-sites-delete-confirmation-page-title' => 'The page title for "Site trust deletion"',
	'openid-trusted-sites-delete-confirmation-question' => 'The question of By clicking the {{msg-mw|openid-trusted-sites-delete-confirmation-button-text}} button, you will remove $1 from the list of sites you trust.

Parameters:
* $1 - the URL of the removed site',
	'openid-trusted-sites-delete-all-confirmation-question' => 'The question of By clicking the {{msg-mw|openid-trusted-sites-delete-confirmation-button-text}} button, you will remove all trusted sites from the list.',
	'openid-trusted-sites-delete-confirmation-button-text' => '{{Identical|Confirm}}',
	'openid-trusted-sites-delete-confirmation-success-text' => 'A confirmation text which is shown, when the user has successfully removed a site from the list of trusted site.

Parameters:
* $1 - the URL of the removed site
See also:
* {{msg-mw|Openid-trusted-sites-delete-all-confirmation-success-text}}',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'A confirmation text which is shown, when the user has successfully removed all sites from the list of trusted site.

See also:
* {{msg-mw|Openid-trusted-sites-delete-confirmation-success-text}}',
	'openid-local-identity' => 'Your OpenID when used a identity to other sites (preference label)',
	'openid-login-or-create-account' => 'Used as fieldset label for the login form.',
	'openid-provider-label-openid' => '{{Related|Openid-provider-label}}',
	'openid-provider-label-google' => '{{Related|Openid-provider-label}}',
	'openid-provider-label-yahoo' => '{{Related|Openid-provider-label}}',
	'openid-provider-label-aol' => '{{Related|Openid-provider-label}}',
	'openid-provider-label-wmflabs' => '{{Related|Openid-provider-label}}',
	'openid-provider-label-other-username' => 'Parameters:
* $1 - other site name; any one of the following site name (hard-coded and not localized):
** MyOpenID
** LiveJournal
** VOX
** Blogger
** Flickr
** Verisign
** Vidoop
** ClaimID
{{Related|Openid-provider-label}}',
	'specialpages-group-openid' => '{{doc-special-group|that=are related to the OpenID extension|like=[[Special:OpenIDLogin]], [[Special:OpenIDConvert]], [[Special:OpenIDDashboard]], [[Special:OpenIDIdentifier]], [[Special:OpenIDServer]], [[Special:OpenIDXRDS]]}}',
	'right-openid-converter-access' => '{{doc-right|openid-converter-access}}
{{doc-singularthey}}',
	'right-openid-dashboard-access' => '{{doc-right|openid-dashboard-access}}
the standard access right for the OpenID dashboard, which is a restricted special page',
	'right-openid-dashboard-admin' => '{{doc-right|openid-dashboard-admin}}
the special adminstrator access right for the OpenID dashboard, which is a restricted special page',
	'action-openid-converter-access' => '{{doc-action|openid-converter-access}}
{{doc-singularthey}}',
	'action-openid-dashboard-access' => '{{doc-action|openid-dashboard-access}}
the standard access right for the OpenID dashboard, which is a restricted special page',
	'action-openid-dashboard-admin' => '{{doc-action|openid-dashboard-admin}}
the special adminstrator access right for the OpenID dashboard, which is a restricted special page',
	'openid-dashboard-title' => '{{doc-special|OpenIDDashboard}}
This title is for non-admins.

See also:
* {{msg-mw|Openid-dashboard-title-admin}}',
	'openid-dashboard-title-admin' => '{{doc-special|OpenIDDashboard}}
This title is for administrator.

See also
* {{msg-mw|Openid-dashboard-title}}',
	'openid-dashboard-introduction' => 'Intro text for the special OpenID dashboard page: the user gets status information about the current OpenID settings of this wiki.
* $1 - the URL of the help page explaining the parameters',
	'openid-dashboard-number-openid-users' => 'Used as the label in the information table on Special:OpenIDDashboard.
{{Related|Openid-dashboard-number}}',
	'openid-dashboard-number-openids-in-database' => 'Used as the label in the information table on Special:OpenIDDashboard.
{{Related|Openid-dashboard-number}}',
	'openid-dashboard-number-users-without-openid' => 'Used as the label in the information table on Special:OpenIDDashboard.
{{Related|Openid-dashboard-number}}',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'openid-desc' => "Teken by die wiki aan met 'n [//openid.net/ OpenID], en teken by ander OpenID ondersteunde webwerwe aan met 'n wikigebruiker",
	'openidlogin' => 'Meld aan/ registreer met OpenID',
	'openidserver' => 'OpenID-bediener',
	'openidxrds' => 'Yadis-lêer',
	'openidconvert' => 'OpenID-omskakeling',
	'openiderror' => 'Verifikasiefout',
	'openiderrortext' => "'n Fout het voorgekom tydens die verifikasie van die OpenID-URL.",
	'openidconfigerror' => 'Fout met OpenID se konfigurasie',
	'openidconfigerrortext' => "OpenID se stoor-instellings vir hierdie wiki is ongeldig.
Raadpleeg asseblief 'n [[Special:ListUsers/sysop|administrateur]].",
	'openidpermission' => 'Fout in die regte vir OpenID',
	'openidpermissiontext' => 'Die OpenID wat u verskaf het word nie toegelaat om na hierdie bediener aan te teken nie.',
	'openidcancel' => 'Verifikasie is gekanselleer',
	'openidcanceltext' => 'Verifikasie van die OpenID-URL is gekanselleer.',
	'openidfailure' => 'Verifikasie het gefaal',
	'openidfailuretext' => 'Verifikasie van die OpenID-URL het gefaal. Foutboodskap: "$1"',
	'openidsuccess' => 'Verifikasie suksesvol uitgevoer',
	'openidsuccesstext' => "'''Verifikasie en aanmelding was suksesvol vir gebruiker $1'''.

U OpenID is $2 .

Hierdie en verdere OpenID's, saam met 'n opsionele wagwoord, kan in u [[Special:Preferences|voorkeure]] bestuur word.", # Fuzzy
	'openidusernameprefix' => 'OpenIDGebruiker',
	'openidserverlogininstructions' => 'Sleutel u wagwoord hier onder in om by $3 aan te meld as gebruiker $2 (gebruikersbladsy $1).', # Fuzzy
	'openidtrustinstructions' => 'Kontroleer of u data met $1 wil deel.',
	'openidallowtrust' => 'Laat $1 toe om hierdie gebruiker te vertrou.',
	'openidnopolicy' => "Die werf het nie 'n privaatheidsbeleid nie.",
	'openidpolicy' => 'Lees die <a target="_new" href="$1">privaatheidsbeleid</a> vir meer inligting.',
	'openidoptional' => 'Opsioneel',
	'openidrequired' => 'Verpligtend',
	'openidnickname' => 'Noemnaam',
	'openidfullname' => 'Volledige naam', # Fuzzy
	'openidemail' => 'E-posadres',
	'openidlanguage' => 'Taal',
	'openidtimezone' => 'Tydsone',
	'openidchooselegend' => 'Gebruikersnaamkeuse', # Fuzzy
	'openidchooseinstructions' => "Alle gebruikers moet 'n gebruikersnaam kies. U kan een kies uit die opsies hieronder.",
	'openidchoosenick' => 'U bynaam ($1)',
	'openidchoosefull' => 'U volledige naam ($1)', # Fuzzy
	'openidchooseurl' => "'n Naam vanuit u OpenID ($1)",
	'openidchooseauto' => "'n Outomaties gegenereerde naam ($1)",
	'openidchoosemanual' => "'n Naam van u keuse:",
	'openidchooseexisting' => "'n Bestaande gebruiker op hierdie wiki:",
	'openidchooseusername' => 'Gebruikersnaam:',
	'openidchoosepassword' => 'Wagwoord:',
	'openidconvertinstructions' => "Hierdie vorm laat u toe om u gebruiker te verander om 'n OpenID-URL te gebruik of om meer OpenID-URL's by te voeg.",
	'openidconvertoraddmoreids' => "Skakel om na OpenID of voeg 'n ander OpenID-URL by",
	'openidconvertsuccess' => 'Suksesvol omgeskakel na OpenID',
	'openidconvertsuccesstext' => 'U OpenID is omgeskakel na $1.',
	'openid-convert-already-your-openid-text' => 'Dit is al reeds u OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Dit is iemand anders se OpenID.', # Fuzzy
	'openidalreadyloggedin' => "'''U is al reeds aangeteken!'''",
	'openidnousername' => 'Geen gebruikersnaam is verskaf nie.',
	'openidbadusername' => 'Slegte gebruikersnaam verskaf.',
	'openidautosubmit' => 'Hierdie bladsy bevat \'n vorm wat outomaties ingedien sal word as u JavaScript in u bladleser geaktveer het.
As dit nie werk nie, kliek op die "Continue"-knoppie om voort te gaan.',
	'openidclientonlytext' => "U kan nie gebruikers van die wiki as OpenID op 'n ander webwerf gebruik nie.",
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => "{{SITENAME}} ondersteun die [//openid.net/ OpenID]-standaard wat u toelaat om verskeie webtuistes te besoek sonder om telkens weer aan te teken.
Met OpenID kan u by verskeie webwerwe aanmeld sonder om elke keer opnuut 'n wagwoord te moet verskaf.
Sien die [//af.wikipedia.org/wiki/OpenID Wikipedia-artikel oor OpenID] vir meer inligting.

As u reeds 'n gebruiker op {{SITENAME}} het, kan u [[Special:UserLogin|aanmeld]] met u gebruikersnaam en wagwoord soos u normaalweg doen. Om in die toekoms OpenID te gebruik, kan u u [[Special:OpenIDConvert|gebruiker na OpenID omskakel]] nadat u aangeteken het.

Daar is verskeie [http://wiki.openid.net/Public_OpenID_providers publieke OpenID-verskaffers], en waarskynlik het u reeds 'n OpenID-gebruiker by 'n ander diens.", # Fuzzy
	'openidupdateuserinfo' => 'Opdateer my persoonlike inligting:',
	'openiddelete' => 'Skrap OpenID',
	'openiddelete-text' => 'Deur op die "{{int:openiddelete-button}}"-knoppie te kliek, verwyder u die OpenID $1 vanuit u gebruiker.
Dit sal dan nie langer moontlik wees om met hierdie OpenID aan te teken nie.',
	'openiddelete-button' => 'Bevestig',
	'openiddeleteerrornopassword' => "U kan nie al u OpenID's verwyder nie omdat u rekening nie 'n wagwoord het nie.
Sonder 'n OpenID sou u glad nie meer kon aanteken nie.",
	'openiddeleteerroropenidonly' => "U kan nie al u OpenID's verwyder nie omdat u slegs toegelaat word om met OpenID aan te teken.
Sonder 'n OpenID sou u glad nie meer kon aanteken nie.",
	'openiddelete-success' => 'Die OpenID is suksesvol van u gebruiker verwyder.',
	'openiddelete-error' => "'n Fout het voorgekom tydens die verwydering van die OpenID uit u gebruiker.",
	'prefs-openid-hide-openid' => 'Versteek u OpenID op u gebruikersbladsy as u met OpenID aanteken.',
	'openid-hide-openid-label' => 'Versteek u OpenID op u gebruikersbladsy as u met OpenID aanteken.',
	'openid-userinfo-update-on-login-label' => 'Opdateer die volgende inligting vanuit die OpenID-gebruiker elke keer as ek inteken:', # Fuzzy
	'openid-associated-openids-label' => "OpenID's aan u gebruiker gekoppel:",
	'openid-urls-action' => 'Aksie',
	'openid-urls-delete' => 'Skrap',
	'openid-add-url' => "Voeg 'n nuwe OpenID by", # Fuzzy
	'openid-login-or-create-account' => "Meld aan of skep 'n nuwe gebruiker",
	'openid-provider-label-openid' => 'Sleutel die URL van u OpenID in',
	'openid-provider-label-google' => 'Teken aan met u Google-gebruiker',
	'openid-provider-label-yahoo' => 'Teken aan met u Yahoo-gebruiker',
	'openid-provider-label-aol' => 'Teken aan met u AOL-gebruiker',
	'openid-provider-label-other-username' => 'U gebruikersnaam by $1',
	'openid-dashboard-title' => 'OpenID-beheerbord',
	'openid-dashboard-title-admin' => 'OpenID-beheerbord (administrateur)',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'openiddelete-success' => 'OpenID u hoq me sukses nga llogaria juaj.',
	'openiddelete-error' => 'Gabim gjatë heqjes OpenID nga llogaria juaj.',
	'prefs-openid-hide-openid' => 'Fshih URL OpenID tuaj në faqen tuaj të përdoruesit, nëse ju hyni në me OpenID.',
	'openid-hide-openid-label' => 'Fshih URL OpenID tuaj në faqen tuaj të përdoruesit, nëse ju hyni në me OpenID.',
	'openid-userinfo-update-on-login-label' => 'Update informacionin e mëposhtëm nga persona OpenID çdo herë që në hyrje:', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDs lidhur me llogarinë tuaj:',
	'openid-urls-action' => 'Veprim',
	'openid-urls-delete' => 'Fshij',
	'openid-add-url' => 'Shto një OpenID ri', # Fuzzy
	'openid-login-or-create-account' => 'Regjistrohu ose hapni një llogari të re', # Fuzzy
	'openid-provider-label-openid' => 'Shkruani URL OpenID tuaj',
	'openid-provider-label-google' => 'Hyni në llogarinë tuaj duke përdorur Google',
	'openid-provider-label-yahoo' => 'Hyni ose duke përdorur llogarinë tuaj Yahoo',
	'openid-provider-label-aol' => 'Shkruani AOL screenname tuaj',
	'openid-provider-label-other-username' => 'Fusni emrin e përdoruesit $1',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'openidemail' => 'የኢ-ሜል አድራሻ',
	'openidlanguage' => 'ቋንቋ',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'openidlanguage' => 'Idioma',
	'openid-urls-action' => 'Acción',
	'openid-urls-delete' => 'Borrar',
);

/** Arabic (العربية)
 * @author ;Hiba;1
 * @author Meno25
 * @author Orango
 * @author OsamaK
 */
$messages['ar'] = array(
	'openid-desc' => 'سجل الدخول للويكي [//openid.net/ بهوية مفتوحة]، وسجل الدخول لمواقع الوب الأخرى التي تعترف بالهوية المفتوحة بحساب مستخدم ويكي',
	'openidlogin' => 'سجل الدخول / أنشئ حساب مع الهوية المفتوحة',
	'openidserver' => 'خادم الهوية المفتوحة',
	'openidxrds' => 'ملف ياديس',
	'openidconvert' => 'محول الهوية المفتوحة',
	'openiderror' => 'خطأ تأكيد',
	'openiderrortext' => 'حدث خطأ أثناء التأكد من مسار الهوية المفتوحة.',
	'openidconfigerror' => 'خطأ ضبط الهوية المفتوحة',
	'openidconfigerrortext' => 'ضبط تخزين الهوية المفتوحة لهذا الويكي غير صحيح.
من فضلك استشر [[Special:ListUsers/sysop|إداريا]].',
	'openidpermission' => 'خطأ سماحات الهوية المفتوحة',
	'openidpermissiontext' => 'الهوية المفتوحة التي وفرتها غير مسموح لها بتسجيل الدخول إلى هذا الخادم.',
	'openidcancel' => 'التأكيد تم إلغاؤه',
	'openidcanceltext' => 'التحقق من مسار الهوية المفتوحة تم إلغاؤه.',
	'openidfailure' => 'فشل التحقق',
	'openidfailuretext' => 'التحقق من مسار الهوية المفتوحة فشل. رسالة خطأ: "$1"',
	'openidsuccess' => 'نحج التحقق',
	'openidsuccesstext' => 'نجح التحقق من مسار الهوية المفتوحة.', # Fuzzy
	'openidusernameprefix' => 'مستخدم الهوية المفتوحة',
	'openidserverlogininstructions' => 'أدخل كلمة سرك بالأسفل لتسجيل الدخول إلى $3 كمستخدم $2 (صفحة مستخدم $1).', # Fuzzy
	'openidtrustinstructions' => 'تأكد مما إذا كنت ترغب في مشاركة البيانات مع $1.',
	'openidallowtrust' => 'السماح ل$1 بالوثوق بحساب هذا المستخدم.',
	'openidnopolicy' => 'الموقع لا يمتلك سياسة محددة للخصوصية.',
	'openidpolicy' => 'تحقق من <a target="_new" href="$1">سياسة الخصوصية</a> لمزيد من المعلومات.',
	'openidoptional' => 'اختياري',
	'openidrequired' => 'مطلوب',
	'openidnickname' => 'اللقب',
	'openidfullname' => 'الاسم الكامل', # Fuzzy
	'openidemail' => 'عنوان البريد الإلكتروني',
	'openidlanguage' => 'اللغة',
	'openidtimezone' => 'المنطقة الزمنية',
	'openidchooselegend' => 'اختيار اسم المستخدم والحساب',
	'openidchooseinstructions' => 'كل المستخدمين يحتاجون إلى لقب؛
يمكنك أن تختار واحدا من الخيارات بالأسفل.',
	'openidchoosenick' => 'اسمك المستعار ($1)',
	'openidchoosefull' => 'اسمك الكامل ($1)', # Fuzzy
	'openidchooseurl' => 'اسم مختار من هويتك المفتوحة ($1)',
	'openidchooseauto' => 'اسم مولد تلقائيا ($1)',
	'openidchoosemanual' => 'اسم من اختيارك:',
	'openidchooseexisting' => 'حساب موجود في هذا الويكي',
	'openidchooseusername' => 'اسم المستخدم:',
	'openidchoosepassword' => 'كلمة السر:',
	'openidconvertinstructions' => 'هذه الاستمارة تتيح لك تغيير حساب مستخدمك لتستخدم مسار هوية مفتوحة أو لاضافة المزيد من مسارات هويات مفتوحة.',
	'openidconvertoraddmoreids' => 'حوّل إلى OpenID أو أضف عنوان OpenID آخر',
	'openidconvertsuccess' => 'تم التحول بنجاح إلى الهوية المفتوحة',
	'openidconvertsuccesstext' => 'أنت حولت بنجاح هويتك المفتوحة إلى $1.',
	'openid-convert-already-your-openid-text' => 'هذه بالفعل هويتك المفتوحة.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'هذه هي الهوية المفتوحة لشخص آخر.', # Fuzzy
	'openidalreadyloggedin' => 'أنت مسجل الدخول بالفعل.',
	'openidnousername' => 'لا اسم مستخدم تم تحديده.',
	'openidbadusername' => 'اسم المستخدم المحدد سيء.',
	'openidautosubmit' => 'هذه الصفحة تحتوي على استمارة ينبغي أن يتم إرسالها تلقائيا لو أنك لديك الجافاسكريبت مفعلة.
لو لا، جرب زر "Continue".',
	'openidclientonlytext' => 'لا يمكنك استخدام حسابات هذه الويكي كهوية مفتوحة على موقع آخر.',
	'openidloginlabel' => 'مسار الهوية المفتوحة',
	'openidlogininstructions' => '{{SITENAME}} تدعم معيار [//openid.net/ الهوية المفتوحة] للدخول الفردي بين مواقع الوب.
الهوية المفتوحة تسمح لك بتسجيل الدخول إلى مواقع وب عديدة مختلفة بدون استخدام كلمة سر مختلفة لكل موقع.
(راجع [//en.wikipedia.org/wiki/OpenID مقالة الهوية المفتوحة في يويكيبيديا] لمزيد من المعلومات.)

إذا كان لديك بالفعل حساب في {{SITENAME}}، يمكنك [[Special:UserLogin|تسجيل الدخول]] باسم مستخدمك وكلمة سرك كالمعتاد.
لاستخدام الهوية المفتوحة في المستقبل، يمكنك [[Special:OpenIDConvert|تحويل حسابك إلى الهوية المفتوحة]] بعد تسجيل دخولك بشكل عادي.

يوجد العديد من [http://wiki.openid.net/Public_OpenID_providers مزودي الهوية المفتوحة]، وقد يكون لديك حسابك بهوية مفتوحة على خدمة أخرى.', # Fuzzy
	'openidupdateuserinfo' => 'تحديث معلوماتي الشخصية:',
	'openiddelete' => 'احذف الهوية المفتوحة',
	'openiddelete-text' => 'بالضغط على زر "{{int:openiddelete-button}}"، ستزيل الهوية المفتوحة OpenID $1 من حسابك.
لن تتمكن بعد الآن من الدخول بهذه الهوية المفتوحة.',
	'openiddelete-button' => 'أكّد',
	'openiddeleteerrornopassword' => 'لا يمكنك إزالة كل هوياتك المفتوحة لعدم وجود كلمة سر لحسابك.
لن تتمكن من الولوج بدون هوية مفتوحة.',
	'openiddeleteerroropenidonly' => 'لا يمكنك إزالة كل هوياتك المفتوحة لأنه يسمح لك بالدخول عبر هوية مفتوحة فقط.
لن تتمكن من الولوج بدون هوية مفتوحة.',
	'openiddelete-success' => 'أزيلت الهوية المفتوحة بنجاح من حسابك.',
	'openiddelete-error' => 'صودف خطأ أثناء إزالة الهوية المفتوحة من حسابك.',
	'prefs-openid' => 'هوية مفتوحة',
	'prefs-openid-hide-openid' => 'أخفِ مسار هويتك المفتوحة من صفحتك الشخصية، إذا سجلت الدخول بالهوية المفتوحة.',
	'openid-hide-openid-label' => 'أخفِ مسار هويتك المفتوحة من صفحتك الشخصية، إذا سجلت الدخول بالهوية المفتوحة.',
	'openid-userinfo-update-on-login-label' => 'حدث المعلومات التالية من شخصية الهوية المفتوحة كل مرة أسجل الدخول:', # Fuzzy
	'openid-associated-openids-label' => 'الهويات المفتوحة المربوطة بحسابك:',
	'openid-urls-url' => 'مسار',
	'openid-urls-action' => 'إجراء',
	'openid-urls-delete' => 'حذف',
	'openid-add-url' => 'أضف هوية مفتوحة جديدة', # Fuzzy
	'openid-login-or-create-account' => 'سجل الدخول أو أنشئ حسابا جديدا',
	'openid-provider-label-openid' => 'أدخل مسار هويتك المفتوحة',
	'openid-provider-label-google' => 'سجل الدخول باستخدام حسابك في جوجل',
	'openid-provider-label-yahoo' => 'سجل الدخول باستخدام حسابك في ياهو',
	'openid-provider-label-aol' => 'أدخل اسم شاشة AOL الخاص بك',
	'openid-provider-label-other-username' => 'أدخل اسم مستخدمك في $1',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author 334a
 * @author Basharh
 */
$messages['arc'] = array(
	'openidusernameprefix' => 'ܡܦܠܚܢܐ ܕܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'openidoptional' => 'ܓܒܝܝܐ',
	'openidfullname' => 'ܫܡܐ ܓܡܝܪܐ',
	'openidemail' => 'ܡܘܢܥܐ ܕܒܝܠܕܪܐ ܐܠܩܛܪܘܢܝܐ',
	'openidlanguage' => 'ܠܫܢܐ',
	'openidtimezone' => 'ܙܘܢܐ ܙܒܢܝܐ:',
	'openidchooselegend' => 'ܓܒܝܐ ܕܚܘܫܒܢܐ ܘܫܡܐ ܕܡܦܠܚܢܐ',
	'openidchoosefull' => 'ܫܡܐ ܓܡܝܪܐ ܕܝܠܟ($1)',
	'openidchoosepassword' => 'ܡܠܬܐ ܕܥܠܠܐ:',
	'openidloginlabel' => 'URL ܕܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'openiddelete' => 'ܫܘܦ ܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'openiddelete-button' => 'ܫܪܪ',
	'openid-urls-action' => 'ܥܒܕܐ',
	'openid-urls-delete' => 'ܫܘܦ',
	'openid-add-url' => 'ܐܘܣܦ ܗܝܝܘܬܐ ܦܬܝܚܬܐ ܚܕܬܐ',
	'openid-provider-label-other-username' => 'ܐܥܠ ܫܡܐ ܕܡܦܠܚܢܐ ܕܝܠܟ ܒ $1',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Dudi
 * @author Ghaly
 * @author Meno25
 */
$messages['arz'] = array(
	'openid-desc' => 'سجل الدخول للويكى [//openid.net/ بهوية مفتوحة]، وسجل الدخول لمواقع ويب أخرى تعرف الهوية المفتوحة بحساب مستخدم ويكي',
	'openidlogin' => 'تسجيل الدخول بالهوية المفتوحة', # Fuzzy
	'openidserver' => 'خادم الهوية المفتوحة',
	'openidxrds' => 'ملف ياديس',
	'openidconvert' => 'محول الهوية المفتوحة',
	'openiderror' => 'خطأ تأكيد',
	'openiderrortext' => 'حدث خطأ أثناء التأكد من مسار الهوية المفتوحة.',
	'openidconfigerror' => 'خطأ ضبط الهوية المفتوحة',
	'openidconfigerrortext' => 'ضبط تخزين الهوية المفتوحة لهذا الويكى غير صحيح.
من فضلك استشر [[Special:ListUsers/sysop|إداريا]].',
	'openidpermission' => 'خطأ سماحات الهوية المفتوحة',
	'openidpermissiontext' => 'الهوية المفتوحة التى وفرتها غير مسموح لها بتسجيل الدخول إلى هذا الخادم.',
	'openidcancel' => 'التأكيد تم إلغاؤه',
	'openidcanceltext' => 'التحقق من مسار الهوية المفتوحة تم إلغاؤه.',
	'openidfailure' => 'التأكيد فشل',
	'openidfailuretext' => 'التحقق من مسار الهوية المفتوحة فشل. رسالة خطأ: "$1"',
	'openidsuccess' => 'التأكيد نجح',
	'openidsuccesstext' => 'التحقق من مسار الهوية المفتوحة نجح.', # Fuzzy
	'openidusernameprefix' => 'مستخدم الهوية المفتوحة',
	'openidserverlogininstructions' => 'أدخل كلمة سرك بالأسفل لتسجيل الدخول إلى $3 كمستخدم $2 (صفحة مستخدم $1).', # Fuzzy
	'openidtrustinstructions' => 'تأكد مما إذا كنت ترغب فى مشاركة البيانات مع $1.',
	'openidallowtrust' => 'السماح ل$1 بالوثوق بحساب هذا المستخدم.',
	'openidnopolicy' => 'الموقع لا يمتلك سياسة محددة للخصوصية.',
	'openidpolicy' => 'تحقق من <a target="_new" href="$1">سياسة الخصوصية</a> لمزيد من المعلومات.',
	'openidoptional' => 'اختياري',
	'openidrequired' => 'مطلوب',
	'openidnickname' => 'اللقب',
	'openidfullname' => 'الاسم الكامل', # Fuzzy
	'openidemail' => 'عنوان البريد الإلكتروني',
	'openidlanguage' => 'اللغة',
	'openidchooseinstructions' => 'كل المستخدمين يحتاجون إلى لقب؛
يمكنك أن تختار واحدا من الخيارات بالأسفل.',
	'openidchoosefull' => 'اسمك الكامل ($1)', # Fuzzy
	'openidchooseurl' => 'اسم مختار من هويتك المفتوحة ($1)',
	'openidchooseauto' => 'اسم مولد تلقائيا ($1)',
	'openidchoosemanual' => 'اسم من اختيارك:',
	'openidchooseexisting' => 'حساب موجود فى الويكى دى',
	'openidchoosepassword' => 'كلمة السر:',
	'openidconvertinstructions' => 'هذه الاستمارة تتيح لك تغيير حساب المستخدم الخاص بك لكى تستخدم OpenID URL او لاضافة المزيد من OpenID URLs .',
	'openidconvertsuccess' => 'تم التحول بنجاح إلى الهوية المفتوحة',
	'openidconvertsuccesstext' => 'أنت حولت بنجاح هويتك المفتوحة إلى $1.',
	'openid-convert-already-your-openid-text' => 'هذه بالفعل هويتك المفتوحة.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'هذه هى الهوية المفتوحة لشخص آخر.', # Fuzzy
	'openidalreadyloggedin' => "'''أنت مسجل الدخول بالفعل، $1!'''

لو كنت تريد استخدام الهوية المفتوحة لتسجيل الدخول فى المستقبل، يمكنك [[Special:OpenIDConvert|تحويل حسابك لاستخدام الهوية المفتوحة]].", # Fuzzy
	'openidnousername' => 'مافيش اسم يوزر تم تحديده.',
	'openidbadusername' => 'اسم المستخدم المحدد سيء.',
	'openidautosubmit' => 'هذه الصفحة تحتوى على إستمارة ينبغى أن يتم إرسالها تلقائيا لو أنك لديك الجافاسكريبت مفعلة.
لو لا، جرب زر "Continue".',
	'openidclientonlytext' => 'أنت لا يمكنك استخدام الحسابات من هذا الويكى كهوية مفتوحة على موقع آخر.',
	'openidloginlabel' => 'مسار الهوية المفتوحة',
	'openidlogininstructions' => '{{SITENAME}} تدعم معيار [//openid.net/ الهوية المفتوحة] للدخول الفردى بين مواقع الويب.
الهوية المفتوحة تسمح لك بتسجيل الدخول إلى مواقع ويب عديدة مختلفة بدون استخدام كلمة سر مختلفة لكل موقع.
(انظر [//en.wikipedia.org/wiki/OpenID مقالة الهوية المفتوحة فى يويكيبيديا] لمزيد من المعلومات.)

لو أنك لديك بالفعل حساب فى {{SITENAME}}، يمكنك [[Special:UserLogin|تسجيل الدخول]] باسم مستخدمك وكلمة السر الخاصة بك كالمعتاد.
لاستخدام الهوية المفتوحة فى المستقبل، يمكنك [[Special:OpenIDConvert|تحويل حسابك إلى الهوية المفتوحة]] بعد تسجيل دخولك بشكل عادى.

يوجد العديد من [http://wiki.openid.net/Public_OpenID_providers موفرى الهوية المفتوحة العلنيين]، وربما يكون لديك حسابك بهوية مفتوحة على خدمة أخرى.', # Fuzzy
	'prefs-openid-hide-openid' => 'أخف هويتك هويتك المفتوحة على صفحتك الشخصية، لو سجلت الدخول بالهوية المفتوحة.',
	'openid-hide-openid-label' => 'أخف هويتك هويتك المفتوحة على صفحتك الشخصية، لو سجلت الدخول بالهوية المفتوحة.',
);

/** Asturian (asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'openid-desc' => "Permite a los usuarios l'accesu a la wiki con una [//openid.net/ OpenID]. Si esto ta activao na wiki, tamién puen utilizar la URL de la so cuenta d'usuariu d'esta wiki como OpenID p'aniciar sesión n'otros sitios web qu'utilicen OpenID",
	'openididentifier' => 'Identificador OpenID',
	'openidlogin' => 'Aniciar sesión / crear cuenta con OpenID',
	'openidserver' => 'Sirvidor OpenID',
	'openid-identifier-page-text-user' => 'Esta páxina ye l\'identificador del usuariu "$1".',
	'openid-identifier-page-text-different-user' => 'Esta páxina ye l\'identificador de la User ID "$1" del usuariu.',
	'openid-identifier-page-text-no-such-local-openid' => 'Esti ye un identificador llocal OpenID inválidu.',
	'openid-server-identity-page-text' => "Esta ye una páxina téunica del sirvidor OpenID p'aniciar la identificación OpenID. La páxina nun tien otru propósitu.",
	'openidxrds' => 'Ficheru Yadis',
	'openidconvert' => 'Convertidor OpenID',
	'openiderror' => 'Error de verificación',
	'openiderrortext' => 'Hebo un error mentanto se comprobaba la URL de la OpenID.',
	'openidconfigerror' => "Error de configuración d'OpenID",
	'openidconfigerrortext' => "La configuración del almacenamientu OpenID d'esta wiki ye inválida.
Consulta con un [[Special:ListUsers/sysop|alministrador]].",
	'openidpermission' => 'Error de permisos OpenID',
	'openidpermissiontext' => "La OpenID qu'indicasti nun tien permisu d'accesu nesti sirvidor.",
	'openidcancel' => "S'encaboxó la comprobación",
	'openidcanceltext' => "S'encaboxó la comprobación de la URL d'OpenID",
	'openidfailure' => 'Falló la comprobación',
	'openidfailuretext' => "Falló la comprobación de la URL d'OpenID. Mensaxe d'error: «$1»",
	'openidsuccess' => 'Comprobación correuta',
	'openidsuccesstext' => "'''Comprobación y aniciu de sesión como usuariu $1 correutos.'''

La to OpenID ye $2.

Esti y otros OpenID opcionales se puen xestionar na [[Special:Preferences#mw-prefsection-openid|llingüeta OpenID]] de les preferencies.<br />
Se pue amestar una conseña de cuenta opcional nel [[Special:Preferences#mw-prefsection-personal|perfil d'usuariu]].",
	'openidusernameprefix' => 'Usuariu OpenID',
	'openidserverlogininstructions' => "$3 pide qu'escribas la to conseña de la páxina $1 pal usuariu $2 (esta ye la URL del to OpenID)",
	'openidtrustinstructions' => 'Comprueba si quies compartir datos con $1.',
	'openidallowtrust' => "Permitir a $1 confiar nesta cuenta d'usuariu.",
	'openidnopolicy' => "El sitiu nun conseñó la so política d'intimidá.",
	'openidpolicy' => 'Comprueba la <a target="_new" href="$1">política d\'intimidá</a> pa mayor información.',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Requeríu',
	'openidnickname' => 'Alcuñu',
	'openidfullname' => 'Nome real',
	'openidemail' => 'Direición de corréu electrónicu',
	'openidlanguage' => 'Llingua',
	'openidtimezone' => 'Estaya horaria',
	'openidchooselegend' => "Eleición del nome d'usuariu y cuenta",
	'openidchooseinstructions' => "Tolos usuarios necesiten un alcuñu;
pues escoyer unu ente les opciones d'abaxo.",
	'openidchoosenick' => 'El to alcuñu ($1)',
	'openidchoosefull' => 'El so nome completu ($1)',
	'openidchooseurl' => 'Un nome sacáu de la to OpenID ($1)',
	'openidchooseauto' => 'Un nome xeneráu automáticamente ($1)',
	'openidchoosemanual' => 'Un nome escoyíu por ti:',
	'openidchooseexisting' => 'Una cuenta esistente nesta wiki',
	'openidchooseusername' => "Nome d'usuariu:",
	'openidchoosepassword' => 'Contraseña:',
	'openidconvertinstructions' => "Esti formulariu te permite camudar la to cuenta d'usuariu pa usar una URL d'OpenID o amestar más URLs d'OpenID.",
	'openidconvertoraddmoreids' => 'Convertir a OpenID o amestar otra URL OpenID',
	'openidconvertsuccess' => 'Convertida correutamente a OpenID',
	'openidconvertsuccesstext' => 'Convertisti correutamente la to OpenID a $1.',
	'openid-convert-already-your-openid-text' => 'La OpenID $1 yá ta asociada cola to cuenta. Nun tien xaciu amestala otra vuelta.',
	'openid-convert-other-users-openid-text' => "$1 ye la OpenID d'otra persona. Nun pues usar la OpenID d'otru usuariu.",
	'openidalreadyloggedin' => 'Yá aniciasti sesión.',
	'openidalreadyloggedintext' => "'''Yá tas identificáu, $1!'''

Pues xestionar (ver, desaniciar, amestar otres) les OpenID na [[Special:Preferences#mw-prefsection-openid|llingüeta OpenID]] de les preferencies.",
	'openidnousername' => "Nun escribisti dengún nome d'usuariu.",
	'openidbadusername' => "Escribisti mal el nome d'usuariu.",
	'openidautosubmit' => 'Esta páxina inclúi un formulariu que tendría d\'unviase automáticamente si tien JavaScript activáu.
Sinon, pruebe a calcar nel botón "Continue" (Siguir).',
	'openidclientonlytext' => "Nun pue usar cuentes d'esta wiki como OpenIDs n'otru sitiu.",
	'openidloginlabel' => "URL d'OpenID",
	'openidlogininstructions' => "{{SITENAME}} sofita l'estándar [//openid.net/ OpenID] pa tener un aniciu de sesión únicu pa dellos sitios web.
OpenID te permite aniciar sesión en munchos sitios web diferentes evitando usar una contraseña distinta en caún.
(Ver [//en.wikipedia.org/wiki/OpenID l'artículu d'OpenID en Wikipedia] pa más información.)
Hai munchos [//openid.net/get/ fornidores d'OpenID], y yá podríes tener dalguna cuenta con OpenID activáu n'otru serviciu.",
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''namái'' permite aniciar sesión con OpenID.",
	'openidlogininstructions-passwordloginallowed' => "Si yá tien una cuenta en {{SITENAME}}, pue [[Special:UserLogin|aniciar sesión]] col so nome d'usuariu y contraseña, como de vezu.
Pa utilizar OpenID nel futuru, pue [[Special:OpenIDConvert|convertir la so cuenta a OpenID]] dempués de aniciar sesión normalmente.",
	'openidupdateuserinfo' => 'Anovar la mio información personal:',
	'openiddelete' => 'Desaniciar OpenID',
	'openiddelete-text' => 'Al calcar nel botón "{{int:openiddelete-button}}", desaniciará el OpenID $1 de la so cuenta.
Darréu nun podrá volver a aniciar sesión con esta OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'Nun pue desaniciar toles sos OpenID porque la so cuenta nun tien contraseña.
Nun podría aniciar sesión ensin una OpenID.',
	'openiddeleteerroropenidonly' => 'Nun pue desaniciar toles sos OpenID porque permitese namái aniciar sesión con OpenID.
Nun podría aniciar sesión ensin una OpenID.',
	'openiddelete-success' => 'La OpenID desaniciose correutamente de la to cuenta.',
	'openiddelete-error' => 'Hebo un error al desaniciar la OpenID de la so cuenta.',
	'openid-openids-were-not-merged' => "Les OpenID nun s'amestaron cuando s'amestaron les cuentas d'usuariu.",
	'prefs-openid-hide-openid' => "URL de la so OpenID na páxina d'usuariu.",
	'prefs-openid-userinfo-update-on-login' => "Anovamientu de la información d'usuariu d'OpenID",
	'prefs-openid-associated-openids' => "Los sos OpenID p'aniciar sesión en {{SITENAME}}",
	'prefs-openid-trusted-sites' => 'Sitios enfotaos',
	'prefs-openid-local-identity' => "La so OpenID p'aniciar sesión n'otros sitios",
	'openid-hide-openid-label' => "Anubrir la URL de la so OpenID na páxina d'usuariu.",
	'openid-show-openid-url-on-userpage-always' => "La so OpenID amuesase siempres na so páxina d'usuariu cuando la visita.",
	'openid-show-openid-url-on-userpage-never' => "La OpenID nun s'amuesa nunca na so páxina d'usuariu.",
	'openid-userinfo-update-on-login-label' => "Campos d'información del perfil d'usuariu que s'anovarán automáticamente dende la persona OpenID cada vez qu'anicie sesión:",
	'openid-associated-openids-label' => 'OpenIDs asociaes cola to cuenta:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Aición',
	'openid-urls-registration' => 'Hora del rexistru',
	'openid-urls-delete' => 'Desaniciar',
	'openid-add-url' => 'Amestar una OpenID nueva a la so cuenta',
	'openid-trusted-sites-label' => "Sitios nos que tien enfotu y onde yá utilizó la so OpenID p'aniciar sesión:",
	'openid-trusted-sites-table-header-column-url' => 'Sitios enfotaos',
	'openid-trusted-sites-table-header-column-action' => 'Aición',
	'openid-trusted-sites-delete-link-action-text' => 'Desaniciar',
	'openid-trusted-sites-delete-all-link-action-text' => 'Desaniciar tolos sitios de confianza',
	'openid-trusted-sites-delete-confirmation-page-title' => "Desaniciu d'un sitiu de confianza",
	'openid-trusted-sites-delete-confirmation-question' => 'En calcando\'l botón "{{int:openid-trusted-sites-delete-confirmation-button-text}}", desaniciará "$1" de la llista de sitios de confianza.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'En calcando\'l botón "{{int:openid-trusted-sites-delete-confirmation-button-text}}", desaniciará tolos sitios de confianza del so perfil d\'usuariu.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Confirmar',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1" desanicióse correutamente de la llista de sitios de confianza.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => "Tolos sitios nos que confiaba anteriormente desaniciaronse correutamente del so perfil d'usuariu.",
	'openid-local-identity' => 'La so OpenID:',
	'openid-login-or-create-account' => 'Entrar o crear una cuenta nueva',
	'openid-provider-label-openid' => 'Escribi la URL de la to OpenID',
	'openid-provider-label-google' => 'Aniciar sesión usando la to cuenta de Google',
	'openid-provider-label-yahoo' => 'Aniciar sesión usando la to cuenta de Yahoo',
	'openid-provider-label-aol' => "Escribi'l nome de la to cuenta AOL",
	'openid-provider-label-wmflabs' => 'Aniciar sesión usando la to cuenta de Wmflabs',
	'openid-provider-label-other-username' => "Escribi'l nome d'usuariu de $1",
	'specialpages-group-openid' => "Páxines de serviciu d'OpenID ya información d'estáu",
	'right-openid-converter-access' => 'Pue amestar o convertir la so cuenta pa utilizar identidaes OpenID',
	'right-openid-dashboard-access' => "Accesu estándar al tableru d'OpenID",
	'right-openid-dashboard-admin' => "Accesu d'alministrador al tableru d'OpenID",
	'action-openid-converter-access' => 'amestar o convertir la so cuenta pa utilizar identidaes OpenID',
	'action-openid-dashboard-access' => "entrar al tableru d'OpenID",
	'action-openid-dashboard-admin' => "entrar al tableru d'alministrador d'OpenID",
	'openid-dashboard-title' => "Tableru d'OpenID",
	'openid-dashboard-title-admin' => "Tableru d'OpenID (alministrador)",
	'openid-dashboard-introduction' => 'La configuración actual de la estensión OpenID ([$1 ayuda])',
	'openid-dashboard-number-openid-users' => "Númberu d'usuarios con OpenID",
	'openid-dashboard-number-openids-in-database' => "Númberu d'OpenIDs (total)",
	'openid-dashboard-number-users-without-openid' => "Númberu d'usuarios ensin OpenID",
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'openidnickname' => 'Ləqəb',
	'openidemail' => 'E-poçt ünvanı',
	'openidlanguage' => 'Dil',
	'openidtimezone' => 'Vaxt zonası',
	'openidchooseusername' => 'İstifadəçi adı:',
	'openidchoosepassword' => 'Parol:',
	'openiddelete-button' => 'Təsdiq et',
	'openid-urls-delete' => 'Sil',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'openidoptional' => 'Теләккә күрә',
	'openidrequired' => 'Мотлаҡ',
	'openidnickname' => 'Ҡушма исем',
	'openidfullname' => 'Тулы исем',
	'openidemail' => 'Электрон почта адресы',
	'openidlanguage' => 'Тел',
	'openidtimezone' => 'Ваҡыт бүлкәте',
);

/** Belarusian (беларуская)
 * @author Тест
 */
$messages['be'] = array(
	'openiddelete-button' => 'Пацвердзіць',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'openid-desc' => 'Уваход ў {{GRAMMAR:вінавальны|{{SITENAME}}}} з дапамогай [//openid.net/ OpenID], а так сама ў іншыя сайты, якія падтрымліваюць OpenID з вікі-рахунка',
	'openidlogin' => 'Уваход у сыстэму / стварэньне рахунку з дапамогай OpenID',
	'openidserver' => 'Сэрвэр OpenID',
	'openidxrds' => 'Файл Yadis',
	'openidconvert' => 'Канвэртар OpenID',
	'openiderror' => 'Памылка праверкі',
	'openiderrortext' => 'Пад час праверкі адрасу OpenID узьнікла памылка.',
	'openidconfigerror' => 'Памылка ў канфігурацыі OpenID',
	'openidconfigerrortext' => 'Канфігурацыя сховішча OpenID у {{GRAMMAR:месны|{{SITENAME}}}} — няслушная.
Калі ласка, зьвярніцеся да [[Special:ListUsers/sysop|адміністратараў]].',
	'openidpermission' => 'Памылка правоў доступу OpenID',
	'openidpermissiontext' => 'Пазначаны Вамі OpenID не дазваляе ўвайсьці на гэты сэрвэр.',
	'openidcancel' => 'Праверка адменена',
	'openidcanceltext' => 'Праверка адрасу OpenID была скасавана.',
	'openidfailure' => 'Праверка не атрымалася',
	'openidfailuretext' => 'Праверка адрасу OpenID не атрымалася. Паведамленьне пра памылку: «$1»',
	'openidsuccess' => 'Праверка прайшла пасьпяхова',
	'openidsuccesstext' => "'''Праверка і ўваход для карыстальніка $1 прайшлі пасьпяхова'''.

Ваш OpenID: $2.

Гэты і дадатковыя OpenID могуць наладжаныя ў [[Special:Preferences#mw-prefsection-openid|OpenID tab]].<br />
Неабавязковы пароль для рахунка можа быць даданы ў Вашым [[Special:Preferences#mw-prefsection-personal|профілі]].",
	'openidusernameprefix' => 'КарыстальнікOpenID',
	'openidserverlogininstructions' => '$3 падаў запыт, каб Вы ўвялі Ваш пароль для {{GENDER:$2|удзельніка|удзельніцы}} $1 (гэта Ваш URL-адрас OpenID).',
	'openidtrustinstructions' => 'Пазначце, калі Вы жадаеце даць доступ да зьвестак для $1.',
	'openidallowtrust' => 'Дазволіць $1 давераць гэтаму рахунку.',
	'openidnopolicy' => 'Сайт ня мае правілаў адносна прыватнасьці.',
	'openidpolicy' => 'Глядзіце дадатковую інфармацыю ў <a target="_new" href="$1">правілах адносна прыватнасьці</a>.',
	'openidoptional' => 'Неабавязковае',
	'openidrequired' => 'Абавязковае',
	'openidnickname' => 'Мянушка',
	'openidfullname' => 'Поўнае імя', # Fuzzy
	'openidemail' => 'Адрас электроннай пошты',
	'openidlanguage' => 'Мова',
	'openidtimezone' => 'Часавы пояс',
	'openidchooselegend' => 'Выбар імя карыстальніка і паролю',
	'openidchooseinstructions' => 'Кожны ўдзельнік павінен мець мянушку;
Вы можаце выбраць адну з пададзеных ніжэй.',
	'openidchoosenick' => 'Ваша мянушка ($1)',
	'openidchoosefull' => 'Ваша поўнае імя ($1)', # Fuzzy
	'openidchooseurl' => 'Імя атрыманае ад Вашага сэрвэра OpenID ($1)',
	'openidchooseauto' => 'Аўтаматычна створанае імя ($1)',
	'openidchoosemanual' => 'Імя на Ваш выбар:',
	'openidchooseexisting' => 'Існуючы рахунак у {{GRAMMAR:месны|{{SITENAME}}}}',
	'openidchooseusername' => 'Імя карыстальніка:',
	'openidchoosepassword' => 'Пароль:',
	'openidconvertinstructions' => 'Гэта форма дазваляе выкарыстоўваць для Вашага рахунку адрас OpenID альбо дадаць іншыя адрасы OpenID.',
	'openidconvertoraddmoreids' => 'Канвэртаваць у OpenID альбо дадаць іншы адрас OpenID',
	'openidconvertsuccess' => 'Пасьпяховае пераўтварэньне ў OpenID',
	'openidconvertsuccesstext' => 'Вы пасьпяхова пераўтварылі Ваш OpenID у $1.',
	'openid-convert-already-your-openid-text' => 'Гэта ўжо Ваш OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Гэта ня Ваш OpenID.', # Fuzzy
	'openidalreadyloggedin' => 'Вы ўжо ўвайшлі.',
	'openidalreadyloggedintext' => "'''Вы ўжо ўвайшлі, $1!'''

Вы можаце кіраваць (праглядаць, выдаляць, дадаваць) OpenID ва ўкладцы Вашых  [[Special:Preferences#mw-prefsection-openid|наладаў]] OpenID.",
	'openidnousername' => 'Не пазначана імя ўдзельніка.',
	'openidbadusername' => 'Пазначана няслушнае імя ўдзельніка.',
	'openidautosubmit' => 'Гэта старонка ўтрымлівае форму, якая павінна быць аўтаматычна адпраўлена, калі ў Вас уключаны JavaScript.
Калі гэтага не адбылася, паспрабуйце націснуць кнопку «Continue» (Працягнуць).',
	'openidclientonlytext' => 'Вы ня можаце выкарыстоўваць рахункі {{GRAMMAR:родны|{{SITENAME}}}} як OpenID на іншых сайтах.',
	'openidloginlabel' => 'Адрас OpenID',
	'openidlogininstructions' => '{{SITENAME}} падтрымлівае стандарт [//openid.net/ OpenID], які дазваляе выкарыстоўваць адзіны рахунак для ўваходу ў розныя сайты без выкарыстаньня розных пароляў для кожнага зь іх.
(Глядзіце падрабязнасьці ў [//en.wikipedia.org/wiki/OpenID артыкуле пра OpenID у Вікіпэдыі].)

Існуе шмат [//openid.net/get/ сэрвісаў OpenID], і Вы, магчыма, ужо маеце рахунак OpenID у іншым сэрвісе.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} дазваляе Вам уваход ''толькі'' з дапамогай OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Калі Вы ўжо маеце рахунак у {{GRAMMAR:месны|{{SITENAME}}}}, Вы можаце [[Special:UserLogin|ўвайсьці]] з Вашым імем і паролем як звычайна.
Каб выкарыстоўваць OpenID у будучыні, Вы можаце [[Special:OpenIDConvert|пераўтварыць Ваш рахунак у OpenID]] пасьля таго, як увайшлі звычайным чынам.',
	'openidupdateuserinfo' => 'Абнавіць маю асабістую інфармацыю:',
	'openiddelete' => 'Выдаліць OpenID',
	'openiddelete-text' => 'Націснуўшы кнопку «{{int:openiddelete-button}}» Вы выдаліце OpenID $1 з Вашага рахунку.
Вы болей ня зможаце ўваходзіць у сыстэму з гэтым OpenID.',
	'openiddelete-button' => 'Пацьвердзіць',
	'openiddeleteerrornopassword' => 'Вы ня можаце выдаліць усе Вашыя OpenID, таму што Ваш рахунак ня мае паролю.
Вы ня зможаце ўвайсьці ў сыстэму без OpenID.',
	'openiddeleteerroropenidonly' => 'Вы ня можаце выдаліць усе Вашыя OpenID, таму што Вам дазволена ўваходзіць у сыстэму толькі праз OpenID.
Вы ня зможаце ўвайсьці ў сыстэму без OpenID.',
	'openiddelete-success' => 'OpenID быў пасьпяхова выдалены з Вашага рахунку.',
	'openiddelete-error' => 'Адбылася памылка пад час выдаленьня OpenID з Вашага рахунку.',
	'openid-openids-were-not-merged' => 'Рахункі OpenID ня былі аб’яднаныя падчас аб’яднаныя рахункаў.',
	'prefs-openid-hide-openid' => 'Хаваць Ваш адрас OpenID на Вашай старонцы ўдзельніка, калі Вы ўвайшлі з дапамогай OpenID.',
	'openid-hide-openid-label' => 'Хаваць Ваш адрас OpenID на Вашай старонцы ўдзельніка, калі Вы ўвайшлі з дапамогай OpenID.',
	'openid-userinfo-update-on-login-label' => 'Абнаўляць наступную інфармацыю з OpenID кожны раз, калі я уваходжу ў сыстэму:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID зьвязаныя з Вашым рахункам:',
	'openid-urls-action' => 'Дзеяньне',
	'openid-urls-registration' => 'Час рэгістрацыі',
	'openid-urls-delete' => 'Выдаліць',
	'openid-add-url' => 'Дадаць новы OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Увайсьці альбо стварыць новы рахунак',
	'openid-provider-label-openid' => 'Увядзіце Ваш адрас OpenID',
	'openid-provider-label-google' => 'Увайсьці з дапамогай Вашага рахунку ў Google',
	'openid-provider-label-yahoo' => 'Увайсьці з дапамогай Вашага рахунку ў Yahoo',
	'openid-provider-label-aol' => 'Увядзіце назву Вашага рахунку ў AOL',
	'openid-provider-label-other-username' => 'Увядзіце Вашае імя ўдзельніка $1',
	'specialpages-group-openid' => 'Старонка сэрвісу OpenID і інфармацыя пра статус',
	'right-openid-converter-access' => 'Можа дадаць ці прыстасаваць уласны рахунак для выкарыстаньня OpenID',
	'right-openid-dashboard-access' => 'стандартны доступ да панэлі кіраваньня OpenID',
	'right-openid-dashboard-admin' => 'доступ адміністратара да панэлі кіраваньня OpenID',
	'openid-dashboard-title' => 'Дошка OpenID',
	'openid-dashboard-title-admin' => 'Панэль кіраваньня OpenID (адміністратар)',
	'openid-dashboard-introduction' => 'Цяперашнія налады пашырэньня OpenID ([$1 дапамога])',
	'openid-dashboard-number-openid-users' => 'Колькасьць удзельнікаў з OpenID',
	'openid-dashboard-number-openids-in-database' => 'Колькасьць OpenID (агульна)',
	'openid-dashboard-number-users-without-openid' => 'Колькасьць удзельнікаў без OpenID',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 * @author Stanqo
 */
$messages['bg'] = array(
	'openidlogin' => 'Влизане с OpenID', # Fuzzy
	'openidserver' => 'OpenID сървър',
	'openidxrds' => 'Yadis файл',
	'openidconvert' => 'Конвертор за OpenID',
	'openiderror' => 'Грешка при потвърждението',
	'openidconfigerror' => 'OpenID грешка при конфигурирането',
	'openidpermissiontext' => 'На предоставеното OpenID не е позволено да влиза на този сървър.',
	'openidcancel' => 'Потвърждението беше прекратено',
	'openidcanceltext' => 'Потвърждението на OpenID URL беше прекратено.',
	'openidfailure' => 'Потвърждението беше неуспешно',
	'openidfailuretext' => 'Потвърждението на OpenID URL беше неуспешно. Грешка: „$1“',
	'openidsuccess' => 'Потвърждението беше успешно',
	'openidsuccesstext' => 'Потвърждението на OpenID URL беше успешно.', # Fuzzy
	'openidserverlogininstructions' => 'Въведете паролата си по-долу за да влезете в $3 като потребител $2 (потребителска страница $1).', # Fuzzy
	'openidnopolicy' => 'Сайтът няма уточнена политика за защита на личните данни.',
	'openidpolicy' => 'За повече информация вижте политиката за <a target="_new" href="$1">защита на личните данни</a>.',
	'openidoptional' => 'Незадължително',
	'openidrequired' => 'Изисква се',
	'openidnickname' => 'Псевдоним',
	'openidfullname' => 'Име', # Fuzzy
	'openidemail' => 'Електронна поща',
	'openidlanguage' => 'Език',
	'openidtimezone' => 'Часова зона',
	'openidchooselegend' => 'Избиране на потребителско име и сметка',
	'openidchooseinstructions' => 'Всички потребители трябва да имат потребителско име;
можете да изберете своето от предложенията по-долу.',
	'openidchoosefull' => 'Вашето пълно име ($1)', # Fuzzy
	'openidchooseauto' => 'Автоматично генерирано име ($1)',
	'openidchoosemanual' => 'Име по избор:',
	'openidchooseexisting' => 'Съществуваща сметка в това уики',
	'openidchooseusername' => 'Потребителско име:',
	'openidchoosepassword' => 'Парола:',
	'openidconvertinstructions' => 'Този формуляр позволява да се промени потребителската сметка да използва OpenID URL.', # Fuzzy
	'openidconvertsuccess' => 'Преобразуването в OpenID беше успешно',
	'openidconvertsuccesstext' => 'Успешно преобразувахте вашият OpenID в $1.',
	'openid-convert-already-your-openid-text' => 'Това вече е вашият OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Това е OpenID на някой друг.', # Fuzzy
	'openidalreadyloggedin' => "'''Вече сте влезли в системата, $1!'''

Ако желаете да използвате OpenID за бъдещи влизания, можете да [[Special:OpenIDConvert|преобразувате сметката си да използва OpenID]].", # Fuzzy
	'openidnousername' => 'Не е посочено потребителско име.',
	'openidbadusername' => 'Беше посочено невалидно име.',
	'openidautosubmit' => 'Тази страница включва формуляр, който би трябвало да се изпрати автоматично ако Джаваскриптът е разрешен.
Ако не е, можете да използвате бутона "Continue" (Продължаване).',
	'openidclientonlytext' => 'Не можете да използвате сметки от това уики като OpenID за друг сайт.',
	'openidloginlabel' => 'OpenID Адрес',
	'openidlogininstructions' => "{{SITENAME}} поддържа [http://openid.net/ OpenID] стандарта за single signon between Web sites.
OpenID позволява влизането в много различни сайтове без да е необходимо да се регистрирате за всеки поотделно.
(Вижте [http://en.wikipedia.org/wiki/OpenID статията за OpenID в Уикипедия] за повече информация.)

Ако вече имате сметка в {{SITENAME}}, можете [[Special:UserLogin|да влезете]] с потребителското си име и парола, както обикновено.
Ако желаете да използвате OpenID, можете [[Special:OpenIDConvert|да преобразувате сметката си в OpenID]] след като влезете в системата.

Налични са много [http://wiki.openid.net/Public_OpenID_providers обществени доставчици на OpenID] и е възможно вече да имате сметка, която поддържа OpenID в друг сайт.

; Други уикита: Ако имате сметка в уики, което поддържа OpenID като [http://wikitravel.org/ Wikitravel], [http://www.wikihow.com/ wikiHow], [http://vinismo.com/ Vinismo], [http://aboutus.org/ AboutUs] или [http://kei.ki/ Keiki], можете да влезете в {{SITENAME}} като въведете в кутията по-горе '''пълния адрес''' към потребителската си страница в другото уикиo, напр. ''<nowiki>http://kei.ki/en/User:Evan</nowiki>''.
; [http://openid.yahoo.com/ Yahoo!]: Ако имате сметка в Yahoo!, можете да влезете в този сайт като в кутията по-горе въведете вашето Yahoo! OpenID. Yahoo! OpenID адресите са от вида ''<nowiki>https://me.yahoo.com/yourusername</nowiki>''.
; [http://dev.aol.com/aol-and-63-million-openids AOL]: Ако притежавате сметка в [http://www.aol.com/ AOL], напр. в [http://www.aim.com/ AIM], можете да влезете в {{SITENAME}} като въведете в кутията по-горе вашето AOL OpenID. AOL OpenID адресите са от вида ''<nowiki>http://openid.aol.com/yourusername</nowiki>''. Потребителското име се изписва само с малки букви и без интервали.
; [http://bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-openid-provider.html Blogger], [http://faq.wordpress.com/2007/03/06/what-is-openid/ Wordpress.com], [http://www.livejournal.com/openid/about.bml LiveJournal], [http://bradfitz.vox.com/library/post/openid-for-vox.html Vox] : Ако имате блог в някоя от тези услуги, въведете адреса на блога си в кутията по-горе, напр. ''<nowiki>http://yourusername.blogspot.com/</nowiki>'', ''<nowiki>http://yourusername.wordpress.com/</nowiki>'', ''<nowiki>http://yourusername.livejournal.com/</nowiki>'' или ''<nowiki>http://yourusername.vox.com/</nowiki>''.", # Fuzzy
	'openidupdateuserinfo' => 'Актуализиране на моите лични данни:',
	'openiddelete' => 'Изтриване на OpenID',
	'openiddelete-button' => 'Потвърждаване',
	'prefs-openid-hide-openid' => 'Скриване на OpenID от потребителската страница ако влезете чрез OpenID.',
	'openid-hide-openid-label' => 'Скриване на OpenID от потребителската страница ако влезете чрез OpenID.',
	'openid-urls-action' => 'Действие',
	'openid-urls-delete' => 'Изтриване',
	'openid-add-url' => 'Добавяне на нов OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Влизане или създаване на нова сметка',
	'openid-provider-label-openid' => 'Въведете своя OpenID адрес',
	'openid-provider-label-google' => 'Влизане чрез сметката в Google',
	'openid-provider-label-other-username' => 'Въведете вашето $1 потребителско име',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Ehsanulhb
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'openidlogin' => 'ওপেনআইডি-এর সাহায্য লগইন', # Fuzzy
	'openidserver' => 'ওপেনআইডি সার্ভার',
	'openidxrds' => 'ইয়াদিস ফাইল',
	'openiderror' => 'নিশ্চিতকরণ ত্রুটি',
	'openidconfigerror' => 'ওপেন আইডি কনফিগারেশন ত্রুটি',
	'openidpermission' => 'ওপেনআইডি অনুমতি ত্রুটি',
	'openidcancel' => 'নিশ্চিতকরণ বাতিল করা হয়েছে',
	'openidcanceltext' => 'ওপেনআইডি ইউআরএল-এর নিশ্চিতকরণ বাতিল করা হয়েছে।',
	'openidfailure' => 'নিশ্চিতকরণ ব্যর্থ হয়েছে',
	'openidsuccess' => 'নিশ্চিতকরণ সফল',
	'openidsuccesstext' => 'ওপেনআইডি ইউআরএল-এর নিশ্চিতকরণ সফল।', # Fuzzy
	'openidusernameprefix' => 'ওপেনআইডিইউজার',
	'openidoptional' => 'ঐচ্ছিক',
	'openidrequired' => 'বাধ্যতামূলক',
	'openidnickname' => 'ডাকনাম',
	'openidfullname' => 'পূর্ণ নাম',
	'openidemail' => 'ই-মেইল ঠিকানা',
	'openidlanguage' => 'ভাষা',
	'openidtimezone' => 'সময় স্থান',
	'openidchooselegend' => 'ব্যবহারকারী নামের পছন্দ', # Fuzzy
	'openidchoosenick' => 'আপনার ডাকনাম ($1)',
	'openidchoosefull' => 'আপনার পূর্ণ নাম ($1)',
	'openidchooseusername' => 'ব্যবহারকারী নাম:',
	'openidchoosepassword' => 'শব্দচাবি:',
	'openidconvertsuccess' => 'সফলভাবে ওপেনআইডিতে রূপান্তর করা হয়েছে',
	'openiddelete-button' => 'নিশ্চিত করুন',
	'openid-urls-action' => 'অ্যাকশন',
	'openid-urls-delete' => 'অপসারণ',
	'openid-add-url' => 'একটি নতুন ওপেনআইডি যোগ করুন',
	'openid-login-or-create-account' => 'প্রবেশ করুন অথবা নতুন অ্যকাউন্ট তৈরি করুন',
	'openid-provider-label-openid' => 'আপনার ওপেনআইডি ইউআরএল প্রবেশ করান',
	'openid-provider-label-google' => 'আপনার গুগল অ্যাকাউন্ট ব্যবহার করে প্রবেশ করুন',
	'openid-provider-label-yahoo' => 'আপনার ইয়াহু অ্যাকাউন্ট ব্যবহার করে প্রবেশ করুন',
	'openid-provider-label-aol' => 'আপনার এওএল স্ক্রিননাম প্রবেশ করান',
	'openid-provider-label-other-username' => 'আপনার $1 ব্যবহাকারী নাম প্রবেশ করান',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwenn-Ael
 * @author Y-M D
 */
$messages['br'] = array(
	'openid-desc' => "Kevreañ ouzh ar wiki gant [//openid.net/ OpenID] ha kevreañ ouzh lec'hiennoù OpenID all gant ur gont implijer wiki.",
	'openidlogin' => 'Kevreañ / Krouiñ ur gont gant OpenID',
	'openidserver' => 'Servijer OpenID',
	'openidxrds' => 'Restr Yadis',
	'openidconvert' => 'Amdroer OpenID',
	'openiderror' => 'Fazi gwiriañ',
	'openiderrortext' => 'Ur fazi a zo bet e-pad gwiriekadenn ar URL OpenID.',
	'openidconfigerror' => 'Fazi kefluniadur OpenID',
	'openidconfigerrortext' => "N'eo ket mat stokañ ar c'hefluniañ OpenID evit ar wiki-mañ.
Kit e darempred, mar plij, gant unan eus [[Special:ListUsers/sysop|merourien ]] al lec'hienn-mañ.",
	'openidpermission' => 'Fazi aotre OpenID',
	'openidpermissiontext' => "N'eo ket aotreet an OpenID hoc'h eus roet da gevreañ war ar servijer-mañ.",
	'openidcancel' => 'Gwiriekadur nullet',
	'openidcanceltext' => "Nullet eo bet ar gwiriekadenn eus ar chomlec'h OpenID.",
	'openidfailure' => "C'hwitet eo ar gwiriadur",
	'openidfailuretext' => 'C\'hwitet eo bet gwiriekadenn ar chomlec\'h OpenID. Kemennadenn fazi : "$1"',
	'openidsuccess' => 'Gwiriet pep tra ervat',
	'openidsuccesstext' => "'''Gwiriet eo bet an troaù ervat, kevreet oc'h evel $1'''.

$2 eo hoc'h OpenID.

Gallout a rit merañ an OpenID-mañ ha re all diret dre an ivinell [[Special:Preferences#mw-prefsection-openid|OpenID]] en ho Penndibaboù.<br />
Gallout a rit ouzhpennañ ur ger-tremen kont diret en ho [[Special:Preferences#mw-prefsection-personal|profil implijer]].",
	'openidusernameprefix' => 'Implijer OpenID',
	'openidserverlogininstructions' => "Goulenn a ra $3 e lakfec'h ho ker-tremen evit ho pajenn $1 implijer $2 (URL OpenID)",
	'openidtrustinstructions' => "Gwiriañ ha c'hoant hoc'h eus da rannañ titouroù gant $1.",
	'openidallowtrust' => 'Aotren $1 da fiziout er gont implijer-mañ.',
	'openidnopolicy' => "N'en deus ket meneget al lec'hienn a bolitikerezh prevezded.",
	'openidpolicy' => 'Gwiriañ <a target="_new" href="$1">ar bolitikerezh prevezded</a> evit muioc\'h a ditouroù.',
	'openidoptional' => 'Diret',
	'openidrequired' => 'Rekis',
	'openidnickname' => 'Lesanv',
	'openidfullname' => 'Anv klok', # Fuzzy
	'openidemail' => "Chomlec'h postel",
	'openidlanguage' => 'Yezh',
	'openidtimezone' => 'Takad eur :',
	'openidchooselegend' => 'Dibab an anv implijer hag anv ar gont',
	'openidchooseinstructions' => "An holl implijerien o deus ezhomm ul lesanv ;
gellout a rit dibab unan eus ar c'hinnigoù a-is.",
	'openidchoosenick' => 'Ho lesanv ($1)',
	'openidchoosefull' => "Hoc'h anv klok ($1)", # Fuzzy
	'openidchooseurl' => "Un anv tapet eus hoc'h OpenID ($1)",
	'openidchooseauto' => 'Un anv krouet emgefre ($1)',
	'openidchoosemanual' => "Un anv dibabet ganeoc'h :",
	'openidchooseexisting' => 'Ur gont zo anezhi war ar wiki-mañ',
	'openidchooseusername' => 'Anv implijer :',
	'openidchoosepassword' => 'Ger-tremen :',
	'openidconvertinstructions' => "Gant ar furmskrid-se e c'hallit kemmañ ho kont implijer evit implijout ur chomlec'h OpenID pe evit ouzhpennañ chomlec'hioù OpenID.",
	'openidconvertoraddmoreids' => "Amdreiñ da OpenID pe ouzhpennañ ur chomlec'h OpenID all",
	'openidconvertsuccess' => 'Amdroet eo bet ervat davet OpenID',
	'openidconvertsuccesstext' => "Amdroet hoc'h eus ho OpenID davet $1.",
	'openid-convert-already-your-openid-text' => "Hoc'h OpenID eo hemañ dija.", # Fuzzy
	'openid-convert-other-users-openid-text' => 'OpenID un implijer all eo hemañ.', # Fuzzy
	'openidalreadyloggedin' => "Kevreet oc'h c'hoazh.",
	'openidalreadyloggedintext' => "'''Kevreet oc'h c'hoazh, $1!'''

Gallout a rit merañ (gwelet, diverkañ, ouzhpennañ) OpenIDoù all en ivinell [[Special:Preferences#mw-prefsection-openid|OpenID]] ho penndibaboù.",
	'openidnousername' => "N'eus bet diferet anv implijer ebet.",
	'openidbadusername' => 'Un anv implijer fall zo bet lakaet.',
	'openidautosubmit' => "Er bajenn-mañ ez eus ur furmskrid hag a c'hallfe bezañ kaset emgefre m'hoc'h eus gweredekaet JavaScript.
Ma n'eus ket, pouezit war ar bouton \"Continue\" (kenderc'hel).",
	'openidclientonlytext' => "Ne c'hallit ket implijout kontoù adalek ar wiki-mañ evel OpenID war lec'hiennoù all.",
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => "{{SITENAME}} a embreg an [//openid.net/ OpenID] stantard evit ur sinadur hepken etre al lec'hiennoù Kenrouedad.
Gant OpenID e c'hallit kevreañ ouzh lec'hiennoù disheñvel hep implijout ur ger-tremen disheñvel evit pep hini anezho.
(Gwelit [//br.wikipedia.org/wiki/OpenID pennad Wikipedia] evit gouzout hiroc'h.)

M'ho peus ur gont dija war {{SITENAME}} e c'hallit [[Special:UserLogin|kevreañ]] ouzh ho kont implijer hag ar ger-tremen boas anezhi. Evit implijout OpenID, en dazont, e c'hallit [[Special:OpenIDConvert|amdreiñ ho kont en OpenID]] goude bezañ kevreet ent reizh.

Meur a [//openid.net/get/ bourchaser OpenID] ; gallout a rit neuze kaout ur gont OpenID gweredekaet war ur servij all dija.", # Fuzzy
	'openidupdateuserinfo' => 'Hizivaat ma zitouroù personel :',
	'openiddelete' => 'Dilemel an OpenID',
	'openiddelete-text' => 'En ur glikañ war ar bouton "{{int:openiddelete-button}}" e c\'hallit dilemel an OpenID $1 eus ho kont.
Ne c\'hallit ket mui kevreañ ouzh an OpenID-mañ.',
	'openiddelete-button' => 'Kadarnaat',
	'openiddeleteerrornopassword' => "Ne c'hallit ket dilemel hoc'h holl OpenID abalamour ma n'eus ger-tremen ebet gant ho kont.
Ne c'hallfec'h ket kevreañ hep OpenID.",
	'openiddeleteerroropenidonly' => "Ne c'hallit ket dilemel hoc'h holl OpenID abalamour ma ne c'hallit kevreañ nemet gant hoc'h OpenID.
Ne c'hallfec'h ket kevreañ hep OpenID.",
	'openiddelete-success' => 'Tennet eo bet ervat an OpenID eus ho kont.',
	'openiddelete-error' => "Ur fazi a zo bet pa oac'h o klask tennañ an OpenID eus ho kont.",
	'prefs-openid-hide-openid' => "Kuzhit hoc'h OpenID war ho pajenn implijer, ma kevreit gant OpenID.",
	'prefs-openid-trusted-sites' => "Lec'hiennoù a fiziañs",
	'openid-hide-openid-label' => "Kuzhit hoc'h OpenID war ho pajenn implijer, ma kevreit gant OpenID.", # Fuzzy
	'openid-userinfo-update-on-login-label' => "Hizivaat ar roadennoù da heul adalek OpenID bep tro m'en em lugan :", # Fuzzy
	'openid-associated-openids-label' => 'An OpenIDoù stag ouzh ho kont :',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Ober',
	'openid-urls-registration' => 'Deiziad enskrivañ',
	'openid-urls-delete' => 'Dilemel',
	'openid-add-url' => 'Ouzhpennañ un OpenID nevez', # Fuzzy
	'openid-trusted-sites-delete-link-action-text' => 'Dilemel',
	'openid-login-or-create-account' => 'Kevreañ pe krouiñ ur gont nevez',
	'openid-provider-label-openid' => "Ebarzhit hoc'h URL OpenID",
	'openid-provider-label-google' => 'Kevreañ dre ho kont Google',
	'openid-provider-label-yahoo' => 'Kevreañ dre ho kont Yahoo',
	'openid-provider-label-aol' => "Ebarzhit hoc'h anv AOL",
	'openid-provider-label-other-username' => "Ebarzhit hoc'h anv implijer $1",
	'openid-dashboard-number-openid-users' => 'Niver a implijerien gant OpenID',
	'openid-dashboard-number-openids-in-database' => 'Niver a OpenIDoù (hollad)',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'openid-desc' => 'Prijava na wiki sa [//openid.net/ OpenID] i prijava na druge stranice koje podržavaju OpenID sa wiki korisničkim računom',
	'openidlogin' => 'Prijava / napravite račun sa OpenID',
	'openidserver' => 'OpenID server',
	'openidxrds' => 'Yadis datoteka',
	'openidconvert' => 'OpenID pretvarač',
	'openiderror' => 'Greška pri provjeri',
	'openiderrortext' => 'Desila se greška pri provjeri OpenID URL adrese.',
	'openidconfigerror' => 'Greška OpenID postavki',
	'openidconfigerrortext' => 'OpenID konfiguracija spremanja za ovaj wiki je nevaljana. 
Molimo konsultujte se sa [[Special:ListUsers/sysop|administratorom]].',
	'openidpermission' => 'Greška kod OpenID dopuštenja',
	'openidpermissiontext' => 'OpenID koji ste naveli nije dopušteno da se prijavi na ovaj server.',
	'openidcancel' => 'Provjera poništena',
	'openidcanceltext' => 'Provjera OpenID URL-a je otkazana.',
	'openidfailure' => 'Potvrda nije uspjela',
	'openidfailuretext' => 'Provjera URL-a za OpenID nije uspjela. Poruka greške: "$1"',
	'openidsuccess' => 'Provjera uspješna',
	'openidsuccesstext' => "'''Uspješna provjera i prijava kao korisnika $1'''.

Vaš OpenID je $2 .

Ovaj i daljnji OpenIDevi, te neobavezna šifra računa, može biti postavljena u vašim [[Special:Preferences|postavkama]].", # Fuzzy
	'openidusernameprefix' => 'OpenIDKorisnik',
	'openidserverlogininstructions' => '$3 zahtijeca da unesete Vašu šifru za vašu $2 korisničku stranicu $1 (Ovo je vaš OpenID URL).',
	'openidtrustinstructions' => 'Provjerite da li želite dijeliti podatke sa $1.',
	'openidallowtrust' => 'Omogući $1 da vjeruje ovom korisničkom računu.',
	'openidnopolicy' => 'Sajt nema napisana pravila privatnosti.',
	'openidpolicy' => 'Provjerite <a target="_new" href="$1">politiku privatnosti</a> za više informacija.',
	'openidoptional' => 'opcionalno',
	'openidrequired' => 'obavezno',
	'openidnickname' => 'Nadimak',
	'openidfullname' => 'Puno ime', # Fuzzy
	'openidemail' => 'E-mail adresa',
	'openidlanguage' => 'Jezik',
	'openidtimezone' => 'Vremenska zona',
	'openidchooselegend' => 'Odabir korisničkog imena i računa',
	'openidchooseinstructions' => 'Svi korisnici trebaju imati nadimak;
možete odabrati jedan sa opcijama ispod.',
	'openidchoosenick' => 'Vaš nadimak ($1)',
	'openidchoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'openidchooseurl' => 'Ime uzeto sa Vašeg OpenID ($1)',
	'openidchooseauto' => 'Automatski generisano ime ($1)',
	'openidchoosemanual' => 'Naziv po Vašem izboru:',
	'openidchooseexisting' => 'Postojeći račun na ovoj wiki',
	'openidchooseusername' => 'korisničko ime:',
	'openidchoosepassword' => 'Šifra:',
	'openidconvertinstructions' => 'Ovaj obrazac Vam omogućuje da promijenite Vaš korisnički račun za upotrebu URL OpenID ili da dodate više OpenID URLova',
	'openidconvertoraddmoreids' => 'Pretvorite u OpenID ili dodajte drugi OpenID URL',
	'openidconvertsuccess' => 'Uspješno prevedeno u OpenID',
	'openidconvertsuccesstext' => 'Uspješno ste pretvorili Vaš OpenID u $1.',
	'openid-convert-already-your-openid-text' => 'To je već Vaš OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To je OpenID koji pripada nekom drugom.', # Fuzzy
	'openidalreadyloggedin' => 'Već ste prijavljeni.',
	'openidnousername' => 'Nije navedeno korisničko ime.',
	'openidbadusername' => 'Navedeno loše korisničko ime.',
	'openidautosubmit' => 'Ova stranica uključuje obrazac koji bi se trebao automatski poslati ako je kod Vas omogućena JavaScript. Ako nije, pokušajte nastaviti dalje putem dugmeta "Continue".',
	'openidclientonlytext' => 'Ne možete koristiti račune sa ove wiki kao OpenID na drugom sajtu.',
	'openidloginlabel' => 'OpenID URL adresa',
	'openidlogininstructions' => '{{SITENAME}} podržava [//openid.net/ OpenID] standard za jedinstvenu prijavu između web sajtova.
OpenID omogućuje da se prijavite na mnoge različite web stranice bez korištenja različitih šifri za svaku od njih.
(Pogledajte [//en.wikipedia.org/wiki/OpenID članak na Wikipediji o OpenID-u] za više informacija.)

Postoji mnogo [http://wiki.openid.net/Public_OpenID_providers javnih provajdera za OpenID], i možda već imate neki račun na drugom servisu koji podržava OpenID.',
	'openidupdateuserinfo' => 'Ažuriraj moje lične informacije:',
	'openiddelete' => 'Obriši OpenID',
	'openiddelete-text' => 'Klikanjem na dugme "{{int:openiddelete-button}}" uklonićete OpenID $1 sa vašeg računa.
Nećete više biti u mogućnosti da se prijavite s ovim OpenID.',
	'openiddelete-button' => 'Potvrdi',
	'openiddeleteerrornopassword' => 'Ne možete obrisati sve vaše OpenID jer vaš račun nema šifre.
Neće se moći prijaviti bez OpenID.',
	'openiddeleteerroropenidonly' => 'Ne možete obrisati sve vaše OpenID jer vam je omogućeno da se prijavite samo sa OpenID.
Bez OpenId nećete moći da se prijavite.',
	'openiddelete-success' => 'OpenID je uspješno uklonjen sa vašeg računa.',
	'openiddelete-error' => 'Desila se greška pri uklanjanju OpenID sa vašeg računa.',
	'prefs-openid-hide-openid' => 'Sakrij Vaš OpenID na Vašoj korisničkoj stranici, ako ste prijavljeni sa OpenID.',
	'openid-hide-openid-label' => 'Sakrij Vaš OpenID na Vašoj korisničkoj stranici, ako ste prijavljeni sa OpenID.',
	'openid-userinfo-update-on-login-label' => 'Ažuriraj slijedeće informacije sa OpenID identiteta svaki put kad se prijavim:', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDovi pridruženi vašem računu:',
	'openid-urls-action' => 'Akcija',
	'openid-urls-delete' => 'Obriši',
	'openid-add-url' => 'Dodaj novi OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Prijavite se ili napravite novi račun',
	'openid-provider-label-openid' => 'Unesite Vaš OpenID URL',
	'openid-provider-label-google' => 'Prijava putem Vašeg Google računa',
	'openid-provider-label-yahoo' => 'Prijava putem Vašeg Yahoo računa',
	'openid-provider-label-aol' => 'Unesite svoj AOL nadimak',
	'openid-provider-label-other-username' => 'Unesite Vaše $1 korisničko ime',
	'openid-dashboard-number-openid-users' => 'Broj korisnika sa OpenID',
	'openid-dashboard-number-openids-in-database' => 'Broj OpenID-eva (ukupno)',
);

/** Catalan (català)
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Toniher
 */
$messages['ca'] = array(
	'openid-desc' => 'Inicieu una sessió al wiki amb un [//openid.net/ OpenID], i inicieu una sessió a qualsevol lloc web compatible amb OpenID amb el vostre compte wiki',
	'openidlogin' => 'Inicia una sessió amb OpenID', # Fuzzy
	'openidserver' => 'Servidor OpenID',
	'openidxrds' => 'Fitxer Yadis',
	'openidconvert' => 'Conversor OpenID',
	'openiderror' => 'Error de verificació',
	'openidfailure' => 'Verificació fallida',
	'openidusernameprefix' => 'Usuari OpenID',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Requerit',
	'openidnickname' => 'Sobrenom',
	'openidfullname' => 'Nom complet',
	'openidemail' => 'Adreça de correu electrònic',
	'openidlanguage' => 'Idioma',
	'openidtimezone' => 'Zona horaria',
	'openidchooseinstructions' => 'Tots els usuaris cal que tinguin un sobrenom;
podeu triar-ne un de les opcions a continuació.',
	'openidchoosefull' => 'El vostre nom complet ($1)',
	'openidchooseexisting' => 'Un compte existent en aquesta wiki',
	'openidchoosepassword' => 'Contrasenya',
	'openid-urls-action' => 'Acció',
	'openid-urls-delete' => 'Elimina',
	'openid-provider-label-other-username' => "Introduïu el vostre $1 nom d'usuari",
);

/** Sorani Kurdish (کوردی)
 */
$messages['ckb'] = array(
	'openiddelete-button' => 'پشتدار بکەرەوە',
	'openid-urls-delete' => 'سڕینەوە',
);

/** Czech (česky)
 * @author Kuvaly
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'openid-desc' => 'Přihlašování se na wiki pomocí [//openid.net/ OpenID] a přihlašování se na jiné stránky podporující OpenID pomocí uživatelského účtu z wiki',
	'openidlogin' => 'Přihlášení / vytvoření účtu pomocí OpenID',
	'openidserver' => 'OpenID server',
	'openidxrds' => 'Soubor Yadis',
	'openidconvert' => 'OpenID konvertor',
	'openiderror' => 'Chyba při ověřování',
	'openiderrortext' => 'Při ověřování URL OpenID se vyskytla chyba.',
	'openidconfigerror' => 'Chyba konfigurace OpenID',
	'openidconfigerrortext' => 'Konfigurace OpenID této wiki je neplatná.
Prosím, poraďte se se [[Special:ListUsers/sysop|správcem]].',
	'openidpermission' => 'Chyba oprávnění OpenID',
	'openidpermissiontext' => 'OpenID, který jste poskytli, nemá oprávnění příhlásit se k tomuto serveru.',
	'openidcancel' => 'Ověřování bylo zrušeno',
	'openidcanceltext' => 'Ověřování URL OpenID bylo zrušeno.',
	'openidfailure' => 'Ověřování zrušeno',
	'openidfailuretext' => 'Ověřování URL OpenID selhalo. Chybová zpráva: „$1“',
	'openidsuccess' => 'Ověřování bylo úspěšné',
	'openidsuccesstext' => "'''Úspěšně ověřeno a {{gender:|přihlášen uživatel|přihlášena uživatelka}} $1'''.

Vaše OpenID je $2 .

Toto a případná další OpenID můžete spravovat na [[Special:Preferences#mw-prefsection-openid|záložce OpenID]] v uživatelském nastavení.<br />
Nepovinné heslo k účtu si můžete přidat v [[Special:Preferences#mw-prefsection-personal|uživatelském profilu]].",
	'openidusernameprefix' => 'Uživatel OpenID',
	'openidserverlogininstructions' => '$3 žádá, abyste {{GENDER:$2|zadal|zadala|zadali}} své heslo jako {{GENDER:$2|uživatel|uživatelka}} $2 se stránkou $1 (to je vaše OpenID URL)',
	'openidtrustinstructions' => 'Zkontrolujte, jestli chcete sdílet data s uživatelem $1.',
	'openidallowtrust' => 'Povolit $1 důvěřovat tomuto uživatelskému účtu.',
	'openidnopolicy' => 'Lokalita nespecifikovala pravidla ochrany osobních údajů.',
	'openidpolicy' => 'Více informací na stránce <a target="_new" href="$1">Ochrana osobních údajoů</a>.',
	'openidoptional' => 'Volitelné',
	'openidrequired' => 'Požadované',
	'openidnickname' => 'Přezdívka',
	'openidfullname' => 'Celé jméno', # Fuzzy
	'openidemail' => 'E-mailová adresa',
	'openidlanguage' => 'Jazyk',
	'openidtimezone' => 'Časové pásmo',
	'openidchooselegend' => 'Volba uživatelského jména a účtu',
	'openidchooseinstructions' => 'Kyždý uživatel musí mít přezdívku; můžete si vybrat z níže uvedených možností.',
	'openidchoosenick' => 'Vaše přezdívka ($1)',
	'openidchoosefull' => 'Vaše celé jméno ($1)', # Fuzzy
	'openidchooseurl' => 'Jméno na základě vašeho OpenID ($1)',
	'openidchooseauto' => 'Automaticky vytvořené jméno ($1)',
	'openidchoosemanual' => 'Jméno, které si vyberete:',
	'openidchooseexisting' => 'Existující účet na této wiki',
	'openidchooseusername' => 'Uživatelské jméno:',
	'openidchoosepassword' => 'Heslo:',
	'openidconvertinstructions' => 'Tento formulář vám umožňuje změnit váš učet, aby používal OpenID URL, nebo přidat více URL OpenID.',
	'openidconvertoraddmoreids' => 'Převést na OpenID nebo přidat jinou OpenID URL',
	'openidconvertsuccess' => 'Úspěšně převedeno na OpenID',
	'openidconvertsuccesstext' => 'Úspěšně jste převedli váš OpenID na $1.',
	'openid-convert-already-your-openid-text' => 'To už je váš OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To je OpenID někoho jiného.', # Fuzzy
	'openidalreadyloggedin' => 'Už jste {{GENDER:|přihlášen|přihlášena}}.',
	'openidalreadyloggedintext' => "'''Už jste {{GENDER:$1|přihlášen, uživateli|přihlášena, uživatelko|přihlášen, uživateli}} $1!'''

Spravovat svá OpenID (prohlížet, mazat, přidávat další) můžete na [[Special:Preferences#mw-prefsection-openid|záložce OpenID]] uživatelského nastavení.",
	'openidnousername' => 'Nebylo zadáno uživatelské jméno.',
	'openidbadusername' => 'Bylo zadáno chybné uživatelské jméno.',
	'openidautosubmit' => 'Tato stránka obsahuje formulář, který by měl být automaticky odeslán pokud máte zapnutý JavaScript.
Pokud ne, zkuste tlačátko „Continue“ (Pokračovat).',
	'openidclientonlytext' => 'Nemůžete používat účty z této wiki jako OpenID na jinýh webech.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} podporuje pro sjednocené přihlašování na různé webové stránky standard [//openid.net/ OpenID].
OpenID vám umožňuje přihlašovat se na množství různých webových stránek bez nutnosti používat pro každou jiné heslo.
(Více informací se dočtete v [//cs.wikipedia.org/wiki/OpenID článku o OpenID na Wikipedii].)
Existuje množství [//openid.net/get/ poskytovatelů OpenID], možná už také máte účet s podporou OpenID v rámci jiné služby.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} dovoluje přihlášení ''pouze'' pomocí OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Pokud už máte na {{grammar:6sg|{{SITENAME}}}} účet, můžete se [[Special:UserLogin|přihlásit]] pomocí uživatelského jména a hesla jako obvykle.
Pokud chcete v budoucnosti používat OpenID, můžete po normálním přihlášení [[Special:OpenIDConvert|převést svůj účet na OpenID]].',
	'openidupdateuserinfo' => 'Aktualizovat moje osobní informace:',
	'openiddelete' => 'Smazat OpenID',
	'openiddelete-text' => 'Kliknutím na tlačítko „{{int:openiddelete-button}}“ odstraníte OpenID $1 z vašeho účtu.
Nebudete se již moci tímto OpenID přihlasít.',
	'openiddelete-button' => 'Potvrdit',
	'openiddeleteerrornopassword' => 'Nemůžete smazat všechna svá OpenID, protože váš účet nemá heslo.
Bez OpenID byste se {{GENDER:|nebyl schopen|nebyla schopna|nebyli schopni}} přihlásit.',
	'openiddeleteerroropenidonly' => 'Nemůžete smazat všechna svá OpenID, protože přihlášení je dovoleno pouze pomocí OpenID.
Bez OpenID byste se {{GENDER:|nebyl schopen|nebyla schopna|nebyli schopni}} přihlásit.',
	'openiddelete-success' => 'OpenID bylo úspěšně odstraněno z vašeho účtu.',
	'openiddelete-error' => 'Během odstraňování OpenID z vašeho účtu se vyskytla chyba.',
	'openid-openids-were-not-merged' => 'OpenID nebyly při slučování uživatelských účtů sloučeny.',
	'prefs-openid-hide-openid' => 'Nezobrazovat OpenID na vaší uživatelské stránce, pokud se přihlašujete pomocí OpenID.',
	'openid-hide-openid-label' => 'Nezobrazovat OpenID na vaší uživatelské stránce, pokud se přihlašujete pomocí OpenID.',
	'openid-userinfo-update-on-login-label' => 'Aktualizovat následující informace z OpenID identity vždy, když se přihlásím:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID asociovaná s vaším účtem:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Operace',
	'openid-urls-registration' => 'Čas registrace',
	'openid-urls-delete' => 'Smazat',
	'openid-add-url' => 'Přidat nové OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Přihlásit se nebo vytvořit nový účet',
	'openid-provider-label-openid' => 'Zadejte URL svého OpenID',
	'openid-provider-label-google' => 'Přihlásit se pomocí Google účtu',
	'openid-provider-label-yahoo' => 'Přihlásit se pomocí Yahoo účtu',
	'openid-provider-label-aol' => 'Přihlásit se pomocí AOL účtu',
	'openid-provider-label-other-username' => 'Zadejte svoje uživatelské jméno pro $1',
	'specialpages-group-openid' => 'Servisní stránky a stavové informace k OpenID',
	'right-openid-converter-access' => 'Smí přidávat nebo převádět svůj účet na užití identit OpenID',
	'right-openid-dashboard-access' => 'Standardní přístup k řídicímu panelu OpenID',
	'right-openid-dashboard-admin' => 'Správcovský přístup k řídicímu panelu OpenID',
	'openid-dashboard-title' => 'Řídicí panel OpenID',
	'openid-dashboard-title-admin' => 'Řídicí panel OpenID (správce)',
	'openid-dashboard-introduction' => 'Aktuální nastavení rozšíření OpenID ([$1 nápověda])',
	'openid-dashboard-number-openid-users' => 'Počet uživatelů s OpenID',
	'openid-dashboard-number-openids-in-database' => 'Počet OpenID (celkem)',
	'openid-dashboard-number-users-without-openid' => 'Počet uživatelů bez OpenID',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'openidlanguage' => 'ѩꙁꙑ́къ',
);

/** Welsh (Cymraeg)
 * @author (vinny)
 */
$messages['cy'] = array(
	'openidoptional' => 'Dewisol',
);

/** Danish (dansk)
 * @author Froztbyte
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'openidserver' => 'OpenID-server',
	'openidxrds' => 'Yadis-fil',
	'openiderror' => 'Bekræftelsesfejl',
	'openidcancel' => 'Bekræftelse annulleret',
	'openidusernameprefix' => 'OpenID-bruger',
	'openidrequired' => 'Påkrævet',
	'openidnickname' => 'Kaldenavn',
	'openidlanguage' => 'Sprog',
	'openidchooseinstructions' => 'Alle brugere skal have et brugernavn;
du kan vælge et fra nedenstående muligheder.',
	'openidchooseusername' => 'Brugernavn:',
	'openidchoosepassword' => 'Adgangskode:',
	'openidnousername' => 'Intet brugernavn angivet.',
	'openidbadusername' => 'Ugyldigt brugernavn angivet.',
	'openidloginlabel' => 'OpenID-adresse',
	'openiddelete' => 'Slet OpenID',
	'openiddelete-button' => 'Bekræft',
	'openiddelete-success' => 'OpenID er blevet fjernet fra din konto.',
	'openid-urls-action' => 'Handling',
	'openid-urls-delete' => 'Slet',
	'openid-add-url' => 'Tilføj en ny OpenID',
	'openid-provider-label-aol' => 'Indtast dit AOL-brugernavn',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author Church of emacs
 * @author DaSch
 * @author Kghbln
 * @author LWChris
 * @author Leithian
 * @author Metalhead64
 * @author Tbleher
 * @author The Evil IP address
 * @author Umherirrender
 * @author Wikinaut
 */
$messages['de'] = array(
	'openid-desc' => 'Erlaubt die Anmeldung mit einer [//openid.net/ OpenID]. Sofern es für dieses Wiki aktiviert wurde, kann man sich auch mit seinem Benutzerkonto (dieses Wikis) als OpenID bei anderen Websites per OpenID anmelden',
	'openididentifier' => 'OpenID-Kennung',
	'openidlogin' => 'Anmelden / Benutzerkonto erstellen mit OpenID',
	'openidserver' => 'OpenID-Server',
	'openid-identifier-page-text-user' => 'Diese Seite ist die Kennung für den Benutzer „$1“.',
	'openid-identifier-page-text-different-user' => 'Diese Seite ist die Kennung für den Benutzer mit der Kennung $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'Dies ist eine ungültige lokale OpenID-Kennung.',
	'openid-server-identity-page-text' => 'Dies ist eine technische OpenID-Server-Seite während der OpenID-Authentifizierung, die keine weitere Bedeutung hat.',
	'openidxrds' => 'Yadis-Datei',
	'openidconvert' => 'OpenID-Konverter',
	'openiderror' => 'Überprüfungsfehler',
	'openiderrortext' => 'Ein Fehler ist während der Überprüfung der OpenID-URL aufgetreten.',
	'openidconfigerror' => 'OpenID-Konfigurationsfehler',
	'openidconfigerrortext' => 'Die OpenID-Speicherkonfiguarion für dieses Wiki ist fehlerhaft.
Bitte benachrichtige einen [[Special:ListUsers/sysop|Administrator]].',
	'openidpermission' => 'OpenID-Berechtigungsfehler',
	'openidpermissiontext' => 'Die angegebene OpenID berechtigt nicht zur Anmeldung an diesem Server.',
	'openidcancel' => 'Überprüfung abgebrochen',
	'openidcanceltext' => 'Die Überprüfung der OpenID-URL wurde abgebrochen.',
	'openidfailure' => 'Überprüfungsfehler',
	'openidfailuretext' => 'Die Überprüfung der OpenID-URL ist fehlgeschlagen. Fehlermeldung: „$1“',
	'openidsuccess' => 'Überprüfung erfolgreich beendet',
	'openidsuccesstext' => "'''Die Überprüfung sowie die Anmeldung als Benutzer $1 war erfolgreich.'''

Deine OpenID lautet $2.

Diese und weitere OpenIDs können unter dem Reiter [[Special:Preferences#mw-prefsection-openid|OpenID]] deiner Kontoeinstellungen verwaltet werden.<br />
Ein fakultatives Benutzerkontopasswort kann hingegen unter dem Reiter [[Special:Preferences#mw-prefsection-personal|Benutzerdaten]] deiner Kontoeinstellungen festgelegt werden.",
	'openidusernameprefix' => 'OpenID-Benutzer',
	'openidserverlogininstructions' => '$3 erfordert die Eingabe deines Passworts für dein Benutzerkonto $2 auf der Seite $1 (OpenID-URL)',
	'openidtrustinstructions' => 'Prüfe, ob du Daten mit $1 teilen möchtest.',
	'openidallowtrust' => 'Erlaube $1, diesem Benutzerkonto zu vertrauen.',
	'openidnopolicy' => 'Die Seite hat keine Datenschutzrichtlinie angegeben.',
	'openidpolicy' => 'Prüfe die <a target="_new" href="$1">Datenschutzrichtlinie</a> für weitere Informationen.',
	'openidoptional' => 'Optional',
	'openidrequired' => 'Erforderlich',
	'openidnickname' => 'Benutzername',
	'openidfullname' => 'Bürgerlicher Name',
	'openidemail' => 'E-Mail-Adresse',
	'openidlanguage' => 'Sprache',
	'openidtimezone' => 'Zeitzone',
	'openidchooselegend' => 'Wahl des Benutzernamens und Benutzerkontos',
	'openidchooseinstructions' => 'Alle Benutzer benötigen einen Benutzernamen;
du kannst einen aus der untenstehenden Liste auswählen.',
	'openidchoosenick' => 'Dein Spitzname ($1)',
	'openidchoosefull' => 'Dein bürgerlicher Name ($1)',
	'openidchooseurl' => 'Ein Name aus deiner OpenID ($1)',
	'openidchooseauto' => 'Ein automatisch erzeugter Name ($1)',
	'openidchoosemanual' => 'Ein Name deiner Wahl:',
	'openidchooseexisting' => 'Ein existierendes Benutzerkonto in diesem Wiki',
	'openidchooseusername' => 'Benutzername:',
	'openidchoosepassword' => 'Passwort:',
	'openidconvertinstructions' => 'Mit diesem Formular kannst du dein Benutzerkonto zur Benutzung mit deiner OpenID-URL freigeben oder eine weitere OpenID-URL hinzufügen.',
	'openidconvertoraddmoreids' => 'Zu OpenID konvertieren oder eine andere OpenID-URL hinzufügen',
	'openidconvertsuccess' => 'Erfolgreich nach OpenID konvertiert',
	'openidconvertsuccesstext' => 'Du hast die Konvertierung deiner OpenID nach $1 erfolgreich durchgeführt.',
	'openid-convert-already-your-openid-text' => '$1 ist eine deinem Benutzerkonto bereits zugeordnete OpenID. Es macht keinen Sinn, diese OpenID ein weiteres Mal hinzuzufügen.',
	'openid-convert-other-users-openid-text' => '$1 ist schon die OpenID eines anderen Benutzers. Du kannst diese OpenID nicht verwenden.',
	'openidalreadyloggedin' => 'Du bist bereits angemeldet.',
	'openidalreadyloggedintext' => "'''Du bist bereits angemeldet, $1.'''

Du kannst diese und weitere OpenIDs unter dem Reiter [[Special:Preferences#mw-prefsection-openid|OpenID]] deiner Kontoeinstellungen verwalten (ansehen, löschen sowie weitere hinzufügen).",
	'openidnousername' => 'Kein Benutzername angegeben.',
	'openidbadusername' => 'Falscher Benutzername angegeben.',
	'openidautosubmit' => 'Diese Seite enthält ein Formular, das automatisch übertragen wird, wenn JavaSkript aktiviert ist. Falls nicht, klicke bitte auf „Continue“ (Weiter).',
	'openidclientonlytext' => 'Du kannst Benutzerkonten dieses Wiki nicht als OpenID für andere Seiten verwenden.',
	'openidloginlabel' => 'OpenID-URL',
	'openidlogininstructions' => '{{SITENAME}} unterstützt den [//openid.net/ OpenID-Standard] für eine einheitliche Anmeldung auf mehreren Websites.
OpenID meldet dich bei vielen unterschiedlichen Websites an, ohne dass du für jede ein separates Passwort verwenden musst.
(Mehr Informationen hierzu bietet der [//de.wikipedia.org/wiki/OpenID Wikipedia-Artikel zu OpenID].)
Es gibt viele [//openid.net/get/ OpenID-Provider] und möglicherweise verfügst du bereits über ein OpenID-Benutzerkonto bei einer anderen Website.',
	'openidlogininstructions-openidloginonly' => "Auf {{SITENAME}} kann man sich ''nur'' mit OpenID anmelden.",
	'openidlogininstructions-passwordloginallowed' => 'Sofern du bereits über ein Benutzerkonto auf {{SITENAME}} verfügst, kannst du dich hier wie gewöhnlich mit deinem Benutzernamen und Passwort [[Special:UserLogin|anmelden]].
Um OpenID zukünftig zu nutzen, kannst du dein Benutzerkonto für die Verwendung mit OpenID [[Special:OpenIDConvert|umwandeln]], nachdem du dich regulär angemeldet hast.',
	'openidupdateuserinfo' => 'Persönliche Daten aktualisieren:',
	'openiddelete' => 'OpenID löschen',
	'openiddelete-text' => 'Wenn du auf den Button „{{int:openiddelete-button}}“ klickst, löschst du die OpenID $1 von deinem Benutzerkonto.
Du wirst dich nicht mehr mit dieser OpenID anmelden können.',
	'openiddelete-button' => 'Bestätigen',
	'openiddeleteerrornopassword' => 'Du kannst nicht alle deine OpenIDs löschen, da du kein Passwort gesetzt hast.
Ohne OpenID könntest du dich nicht mehr anmelden.',
	'openiddeleteerroropenidonly' => 'Du kannst nicht alle deiner OpenIDs löschen, weil du dich nur mit OpenID einloggen darfst.
Ohne OpenID könntest du dich nicht mehr anmelden.',
	'openiddelete-success' => 'Die OpenID wurde erfolgreich von deinem Benutzerkonto entfernt.',
	'openiddelete-error' => 'Beim Entfernen der OpenID von deinem Benutzerkonto ist ein Fehler aufgetreten.',
	'openid-openids-were-not-merged' => 'Die OpenID(s) wurden während der Zusammenlegung der Benutzerkonten nicht zusammengeführt.',
	'prefs-openid-hide-openid' => 'Anzeige der OpenID auf deiner Benutzerseite',
	'prefs-openid-userinfo-update-on-login' => 'Daten, die vom OpenID-Konto bei jeder Anmeldung aktualisiert werden',
	'prefs-openid-associated-openids' => 'Mit deinem {{SITENAME}} Benutzerkonto verbundene OpenIDs:',
	'prefs-openid-trusted-sites' => 'Websites, denen du vertraust',
	'prefs-openid-local-identity' => 'Deine OpenID zur Anmeldung auf anderen Websites',
	'openid-hide-openid-label' => 'Deine OpenID-URL auf deiner Benutzerseite ausblenden.',
	'openid-show-openid-url-on-userpage-always' => 'Deine OpenID wird immer auf deiner Benutzerseite angezeigt, wenn du sie besuchst.',
	'openid-show-openid-url-on-userpage-never' => 'Deine OpenID wird niemals auf deiner Benutzerseite angezeigt.',
	'openid-userinfo-update-on-login-label' => 'Diese Benutzerprofilfelder werden vom OpenID-Konto jedes Mal automatisch aktualisiert, wenn du dich anmeldest:',
	'openid-associated-openids-label' => 'Mit dem Konto verbundene OpenIDs:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Aktion',
	'openid-urls-registration' => 'Registrierungszeitpunkt',
	'openid-urls-delete' => 'Löschen',
	'openid-add-url' => 'Eine neue OpenID deinem Benutzerkonto hinzufügen',
	'openid-trusted-sites-label' => 'Websites, denen du vertraust, und bei denen du mit deiner OpenID bekannt bist:',
	'openid-trusted-sites-table-header-column-url' => 'Websites, denen du vertraust',
	'openid-trusted-sites-table-header-column-action' => 'Aktion',
	'openid-trusted-sites-delete-link-action-text' => 'Löschen',
	'openid-trusted-sites-delete-all-link-action-text' => 'Alle Websites löschen, denen du bisher vertraut hast',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Löschen vertrauenswürdiger Websites',
	'openid-trusted-sites-delete-confirmation-question' => 'Durch Klicken auf „{{int:openid-trusted-sites-delete-confirmation-button-text}}“ entfernst du „$1“ aus der Liste der vertrauenswürdigen Websites.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'Durch Klicken auf „{{int:openid-trusted-sites-delete-confirmation-button-text}}“ entfernst du alle vertrauenswürdigen Websites aus deinem Benutzerprofil.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Bestätigen',
	'openid-trusted-sites-delete-confirmation-success-text' => '„$1“ wurde erfolgreich aus der Liste der vertrauenswürdigen Websites entfernt.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Alle Websites, denen du bisher vertraut hast, wurden erfolgreich aus deinem Benutzerprofil entfernt.',
	'openid-local-identity' => 'Deine OpenID:',
	'openid-login-or-create-account' => 'Anmelden oder ein neues Benutzerkonto erstellen',
	'openid-provider-label-openid' => 'Gib deine OpenID-URL an',
	'openid-provider-label-google' => 'Mit deinem Google-Benutzerkonto anmelden',
	'openid-provider-label-yahoo' => 'Mit deinem Yahoo-Benutzerkonto anmelden',
	'openid-provider-label-aol' => 'Gib deinen AOL-Namen an',
	'openid-provider-label-wmflabs' => 'Mit deinem Wmflabs-Benutzerkonto anmelden',
	'openid-provider-label-other-username' => 'Gib deinen „$1“-Benutzernamen an',
	'specialpages-group-openid' => 'Websites von OpenID-Diensten und Statusinformationen',
	'right-openid-converter-access' => 'Benutzerkonto zur Nutzung von OpenID erstellen oder konvertieren',
	'right-openid-dashboard-access' => 'Standardzugang zur OpenID-Übersichts- und Einstellungsseite',
	'right-openid-dashboard-admin' => 'Administratorzugang zur OpenID-Übersichts- und Einstellungsseite',
	'action-openid-converter-access' => 'ein Benutzerkonto zur Nutzung von OpenID zu erstellen oder zu konvertieren',
	'action-openid-dashboard-access' => 'die OpenID-Übersichts- und Einstellungsseite anzusehen',
	'action-openid-dashboard-admin' => 'die OpenID-Administrator-Übersichts- und -Einstellungsseite anzusehen',
	'openid-dashboard-title' => 'OpenID – Übersicht',
	'openid-dashboard-title-admin' => 'OpenID – Übersicht und Einstellungen',
	'openid-dashboard-introduction' => 'Die aktuellen Einstellungen zu OpenID ([$1 Hilfe])',
	'openid-dashboard-number-openid-users' => 'Anzahl der Benutzer mit mindestens einer OpenID',
	'openid-dashboard-number-openids-in-database' => 'Anzahl der OpenIDs (gesamt)',
	'openid-dashboard-number-users-without-openid' => 'Anzahl der Benutzer ohne OpenID',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author ChrisiPK
 * @author Imre
 * @author Kghbln
 * @author LWChris
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'openidconfigerrortext' => 'Die OpenID-Speicherkonfiguarion für dieses Wiki ist fehlerhaft.
Bitte benachrichtigen Sie einen [[Special:ListUsers/sysop|Administrator]].',
	'openidsuccesstext' => "'''Die Überprüfung sowie die Anmeldung als Benutzer $1 war erfolgreich.'''

Ihre OpenID lautet $2.

Diese und weitere OpenIDs können unter dem Reiter [[Special:Preferences#mw-prefsection-openid|OpenID]] Ihrer Kontoeinstellungen verwaltet werden.<br />
Ein fakultatives Benutzerkontopasswort kann hingegen unter dem Reiter [[Special:Preferences#mw-prefsection-personal|Benutzerdaten]] Ihrer Kontoeinstellungen festgelegt werden.",
	'openidserverlogininstructions' => '$3 erfordert die Eingabe Ihres Passworts für Ihr Benutzerkonto $2 auf der Seite $1 (OpenID-URL)',
	'openidtrustinstructions' => 'Prüfen Sie, ob Sie Daten mit $1 teilen möchten.',
	'openidchooseinstructions' => 'Alle Benutzer benötigen einen Benutzernamen;
Sie können einen aus der untenstehenden Liste auswählen.',
	'openidchoosenick' => 'Ihr Spitzname ($1)',
	'openidchoosefull' => 'Ihr bürgerlicher Name ($1)', # Fuzzy
	'openidchooseurl' => 'Ein Name aus Ihrer OpenID ($1)',
	'openidchoosemanual' => 'Ein Name Ihrer Wahl:',
	'openidconvertinstructions' => 'Mit diesem Formular können Sie Ihr Benutzerkonto zur Benutzung mit Ihrer OpenID-URL freigeben oder eine weitere OpenID-URL hinzufügen.',
	'openidconvertsuccesstext' => 'Sie haben die Konvertierung Ihrer OpenID nach $1 erfolgreich durchgeführt.',
	'openid-convert-already-your-openid-text' => 'Dies ist bereits Ihre OpenID.', # Fuzzy
	'openidalreadyloggedin' => 'Sie sind bereits angemeldet.',
	'openidalreadyloggedintext' => "'''Sie sind bereits angemeldet, $1.'''

Sie können diese und weitere OpenIDs unter dem Reiter [[Special:Preferences#mw-prefsection-openid|OpenID]] Ihrer Kontoeinstellungen verwalten (ansehen, löschen sowie weitere hinzufügen).",
	'openidautosubmit' => 'Diese Seite enthält ein Formular, das automatisch übertragen wird, wenn JavaSkript aktiviert ist. Falls nicht, klicken Sie bitte auf „Continue“ (Weiter).',
	'openidclientonlytext' => 'Sie können keine Benutzerkonten aus diesem Wiki als OpenID für andere Seiten verwenden.',
	'openidlogininstructions' => '{{SITENAME}} unterstützt den [//openid.net/ OpenID-Standard] für eine einheitliche Anmeldung auf mehreren Websites.
OpenID meldet Sie bei vielen unterschiedlichen Websites an, ohne dass Sie für jede ein separates Passwort verwenden müssen.
(Mehr Informationen hierzu bietet der [//de.wikipedia.org/wiki/OpenID Wikipedia-Artikel zu OpenID].)
Es gibt viele [//openid.net/get/ OpenID-Provider] und möglicherweise verfügen Sie bereits über ein OpenID-Benutzerkonto bei einer anderen Website.',
	'openidlogininstructions-passwordloginallowed' => 'Sofern Sie bereits über ein Benutzerkonto auf {{SITENAME}} verfügen, können Sie sich hier wie gewöhnlich mit Ihrem Benutzernamen und Passwort [[Special:UserLogin|anmelden]].
Um OpenID auf diesem Wiki zukünftig zu nutzen, können Sie Ihr Benutzerkonto für die Verwendung mit OpenID [[Special:OpenIDConvert|umwandeln]], nachdem Sie sich regulär angemeldet haben.',
	'openiddelete-text' => 'Wenn Sie auf den Button „{{int:openiddelete-button}}“ klicken, löschen Sie die OpenID $1 von Ihrem Benutzerkonto.
Sie werden sich nicht mehr mit dieser OpenID anmelden können.',
	'openiddeleteerrornopassword' => 'Sie können nicht alle Ihre OpenIDs löschen, da Sie kein Passwort gesetzt haben.
Ohne OpenID könnten Sie sich nicht mehr anmelden.',
	'openiddeleteerroropenidonly' => 'Sie können nicht alle Ihre OpenIDs löschen, weil Sie sich nur mit OpenID einloggen dürfen.
Ohne OpenID könnten Sie sich nicht mehr anmelden.',
	'openiddelete-success' => 'Die OpenID wurde erfolgreich von Ihrem Benutzerkonto entfernt.',
	'openiddelete-error' => 'Beim Entfernen der OpenID von Ihrem Benutzerkonto ist ein Fehler aufgetreten.',
	'prefs-openid-hide-openid' => 'Verstecken Sie Ihre OpenID auf Ihrer Benutzerseite, wenn Sie sich mit OpenID anmelden.',
	'openid-hide-openid-label' => 'Verstecken Sie Ihre OpenID auf Ihrer Benutzerseite, wenn Sie sich mit OpenID anmelden.',
	'openid-associated-openids-label' => 'Mit Ihrem Benutzerkonto verbundene OpenIDs:',
	'openid-provider-label-openid' => 'Geben Sie Ihre OpenID-URL an',
	'openid-provider-label-google' => 'Mit Ihrem Google-Benutzerkonto anmelden',
	'openid-provider-label-yahoo' => 'Mit Ihrem Yahoo-Benutzerkonto anmelden',
	'openid-provider-label-aol' => 'Geben Sie Ihren AOL-Namen an',
	'openid-provider-label-other-username' => 'Geben Sie Ihren „$1“-Benutzernamen an',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'openidoptional' => 'Opsiyonel',
	'openidrequired' => 'Lazım',
	'openidnickname' => 'Leqebe',
	'openidfullname' => 'Nameyo tam', # Fuzzy
	'openidemail' => 'Adresa e-postey',
	'openidlanguage' => 'Zıwan',
	'openidtimezone' => 'Warey saete',
	'openidchooseusername' => 'Nameyê karberi:',
	'openidchoosepassword' => 'Parola:',
	'openidloginlabel' => 'OpenID URL',
	'openiddelete-button' => 'Tesdiq',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Kerdış',
	'openid-urls-delete' => 'Bestere',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'openid-desc' => 'Pśizjawjenje pla wikija z [//openid.net/ OpenID] a pśizjawjenje pla drugich websedłow, kótarež pódpěraju OpenID z wikijowym wužywarskim kontom',
	'openidlogin' => 'Z OpenID pśizjawiś / konto załožyś',
	'openidserver' => 'Serwer OpenID',
	'openidxrds' => 'Yadis-dataja',
	'openidconvert' => 'Konwerter OpenID',
	'openiderror' => 'Pśeglědańska zmólka',
	'openiderrortext' => 'Zmólka jo nastała pśi pśeglědowanju URL OpenID.',
	'openidconfigerror' => 'Konfiguraciska zmólka OpenID',
	'openidconfigerrortext' => 'Konfiguracija składowaka OpenID za toś ten wiki jo njepłaśiwy.
Pšosym staj se z [[Special:ListUsers/sysop|administratorom]] do zwiska.',
	'openidpermission' => 'Zmólka pšawow OpenID',
	'openidpermissiontext' => 'OpenID, kótaryž sy pódał, njedowólujo pśizjawjenje pla toś togo serwera.',
	'openidcancel' => 'Pśeglědanje pśetergnjone',
	'openidcanceltext' => 'Pśeglědanje URL OpenID jo se pśetergnuło.',
	'openidfailure' => 'Pséglědanje jo se njeraźiło',
	'openidfailuretext' => 'Pśeglědanje URL OpenID je so njeraźiło. Zmólkowa powěźeńka: "$1"',
	'openidsuccess' => 'Pśeglědanje wuspěšne',
	'openidsuccesstext' => "'''Pśeglědanje a pśizjawjenje ako wužywaŕ $1 stej byłej wuspěšnej.'''

Twój OpenID jo $2.

Toś ten a dalšne OpenID daju se na [[Special:Preferences#mw-prefsection-openid|OpenID-rejtarku]] twójich nastajenjow zastojaś.<br />
Faktulatiwne gronidło dajo se w twójom [[Special:Preferences#mw-prefsection-personal|wužywarskem profilu]] pśidaś.",
	'openidusernameprefix' => 'Wužywaŕ OpenID',
	'openidserverlogininstructions' => '$3 se pomina, až zapódajoš swójo gronidło za swójo wužywarske konto $2 na boku $1 (to jo jo twój OpenID-URL)',
	'openidtrustinstructions' => 'Kontrolěruj, lěc coš daty z $1 źěliś.',
	'openidallowtrust' => '$1 dowóliś, toś tomu wužywarskemu kontoju dowěriś.',
	'openidnopolicy' => 'Sedło njejo pódało zasady priwatnosći.',
	'openidpolicy' => 'Kontrolěruj <a target="_new" href="$1">zasady priwatnosći</a> za dalšne informacije.',
	'openidoptional' => 'Opcionalny',
	'openidrequired' => 'Trěbny',
	'openidnickname' => 'Pśimě',
	'openidfullname' => 'Napšawdne mě',
	'openidemail' => 'E-mailowa adresa:',
	'openidlanguage' => 'Rěc',
	'openidtimezone' => 'Casowa cona',
	'openidchooselegend' => 'Wuběr wužywarskego mjenja a konta',
	'openidchooseinstructions' => 'Wše wužywarje trjebaju pśimě;
móžoš jadno ze slědujucych opcijow wubraś.',
	'openidchoosenick' => 'Twójo pśimě ($1)',
	'openidchoosefull' => 'Twójo napšawdne mě ($1)',
	'openidchooseurl' => 'Mě z twójogo OpenID ($1)',
	'openidchooseauto' => 'Awtomatiski napórane mě ($1)',
	'openidchoosemanual' => 'Mě twójogo wuzwólenja:',
	'openidchooseexisting' => 'Eksistěrujuce konto w toś tom wikiju',
	'openidchooseusername' => 'wužywarske mě:',
	'openidchoosepassword' => 'Gronidło:',
	'openidconvertinstructions' => 'Z toś tym formularom móžoš swójo wužywarske konto změniś, aby wužywało URL OpenID abo dalšnje URL OpenID pśidał.',
	'openidconvertoraddmoreids' => 'Do OpenID konwertěrowaś abo dalšny URL OpenID pśidaś',
	'openidconvertsuccess' => 'Wuspěšnje do OpenID konwertěrowany',
	'openidconvertsuccesstext' => 'Sy wuspěšnje konwertěrował twój OpenID do $1.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 jo južo z twójim kontom zwězany. Njama zmysła jen znowego pśidaś.',
	'openid-convert-other-users-openid-text' => '$1 jo OpenID někogo drugego. Njamóžoš OpenID drugego wužywarja wužywaś.',
	'openidalreadyloggedin' => 'Sy južo pśizjawjony.',
	'openidnousername' => 'Žedno wužywarske mě pódane.',
	'openidbadusername' => 'Wopacne wužywarske mě pódane.',
	'openidautosubmit' => 'Toś ten bok wopśimujo formular, kótaryž se awtmatiski wótpósćeła, jolic JavaScript jo zmóžnjony. Jolic nic, klikni na tłocašk "Continue" (Dalej).',
	'openidclientonlytext' => 'Njamóžoš konta z toś togo wikija ako OpneID na drugem sedle wužywaś.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} pódpěra standard [//openid.net/ OpenID] za jadnotliwe pśizjawjenja mjazy websedłami.
OpenID śi zmóžnja se pla rozdźělnych websedłow pśizjawiś, bźez togo až musyš rozdźělne gronidła wužywaś.
(Glědaj [//en.wikipedia.org/wiki/OpenID nastawk OpenID we Wikipediji] za dalšne informacije.)

Jo wjele [//openid.net/get/ póbitowarjow OpenID] a snaź maš južo konto z OpenID pla drugeje słužby.',
	'openidlogininstructions-openidloginonly' => "Móžoš se na {{GRAMMAR:lokatiw|{{SITENAME}}}} ''jano'' z OpenID pśizjawiś.",
	'openidupdateuserinfo' => 'Móje wósobinske informacije aktualizěrowaś:',
	'openiddelete' => 'OpenID wulašowaś',
	'openiddelete-text' => 'Pśez kliknjenje na tłócašk "{{int:openiddelete-button}}", wótpórajoš OpenID $1 z twójogo konta. Njamóžoš se wěcej z toś tym OpenID pśizjawiś.',
	'openiddelete-button' => 'Wobkšuśiś',
	'openiddeleteerrornopassword' => 'Njamóžoš wše swóje OpenID lašowaś, dokulaž twójo konto njama gronidło.
Ty njeby mógał se bźez OpenID pśizjawiś.',
	'openiddeleteerroropenidonly' => 'Njamóžoš wše swóje OpenID lašowaś, dokulaž njesmějoš se z OpenID pśizjawiś.
Ty njeby se bźez OpenID pśizjawiś.',
	'openiddelete-success' => 'OpenID jo se wuspěšnje z twójogo konta wótpórał.',
	'openiddelete-error' => 'Pśi wótwónoźowanju OpenID z twójogo konta jo zmólka jo nastata.',
	'openid-openids-were-not-merged' => 'Pśi zjadnośenju wužywarskich kontow OpenID njejsu se zjadnośili.',
	'prefs-openid-hide-openid' => 'Schowaj swój OpenID na swójom wužywarskem boku, jolic se pśizjawjaś z OpenID.',
	'prefs-openid-userinfo-update-on-login' => 'Aktualizacija informacijow OpenID-wužywarja',
	'prefs-openid-associated-openids' => 'Twóje OpenID za pśizjawjenje k {{GRAMMAR:datiw|{{SITENAME}}}}',
	'prefs-openid-trusted-sites' => 'Dowěry gódne sedła',
	'openid-hide-openid-label' => 'Twój OpenID-URL na twójom wužywarskem boku schowaś',
	'openid-userinfo-update-on-login-label' => 'Póla informacijow wužywarskego profila, kótarež aktualizěruju se kuždy raz, gaž se pśizjawjaš:',
	'openid-associated-openids-label' => 'OpenID, kótarež su z twójim kontom zwězane:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Akcija',
	'openid-urls-registration' => 'Registěrowański cas',
	'openid-urls-delete' => 'Lašowaś',
	'openid-add-url' => 'Nowy OpenID twójomu kontoju pśidaś',
	'openid-trusted-sites-label' => 'Sedła, kótarymž dowěriš a źož sy swój OpenID za pśizjawjenje wužył:',
	'openid-trusted-sites-table-header-column-url' => 'Dowěry gódne sedła',
	'openid-login-or-create-account' => 'Pśizjawiś abo nowe konto załožyś',
	'openid-provider-label-openid' => 'Zapódaj swój URL OpenID',
	'openid-provider-label-google' => 'Z pomocu twójogo konta Google se pśizjawiś',
	'openid-provider-label-yahoo' => 'Z pomocu twójogo konta Yahoo se pśizjawiś',
	'openid-provider-label-aol' => 'Zapódaj swójo wužywarske mě AOL',
	'openid-provider-label-wmflabs' => 'Ze swójim kontom Wmflabs se pśizjawiś',
	'openid-provider-label-other-username' => 'Zapódaj swójo wužywarske mě $1',
	'specialpages-group-openid' => 'Boki OpenID-słužbow a statusowych informacijow',
	'right-openid-converter-access' => 'Móźo konto za wužywanje OpenID-identitow pśidaś abo konwertěrowaś',
	'right-openid-dashboard-access' => 'Standardny pśistup k tofli OpenID',
	'right-openid-dashboard-admin' => 'Administratorowy přistup k tofli OpenID',
	'action-openid-converter-access' => 'Twójo konto za wužywanje identitow OpenID pśidać abo konwertěrowaś',
	'action-openid-dashboard-access' => 'pśistup k tofli OpenID',
	'action-openid-dashboard-admin' => 'pśistup k administratorowej tofli OpenID',
	'openid-dashboard-title' => 'OpenID-pśeglěd',
	'openid-dashboard-title-admin' => 'OpenID-pśeglěd (administrator)',
	'openid-dashboard-introduction' => 'Aktualne nastajenja rozšyrjenja OpenID ([$1 pomoc])',
	'openid-dashboard-number-openid-users' => 'Licba wužywarjow z OpenID',
	'openid-dashboard-number-openids-in-database' => 'Licba wšych OpenID (dogromady)',
	'openid-dashboard-number-users-without-openid' => 'Licba wužywarjow bźez OpenID',
);

/** Ewe (eʋegbe)
 */
$messages['ee'] = array(
	'openid-urls-delete' => 'Tutui',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Kiriakos
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'openid-desc' => 'Συνδεθείτε στο wiki με ένα [//openid.net/ OpenID], και συνδεθείτε σε άλλους ιστοτόπους που λαμβάνουν υπόψη το OpenID με ένα λογαριασμό χρήστη wiki',
	'openidlogin' => 'Σύνδεση με OpenID', # Fuzzy
	'openidserver' => 'Εξυπηρετητής OpenID',
	'openidxrds' => 'Αρχείο Yadis.',
	'openidconvert' => 'Μετατροπέας OpenID',
	'openiderror' => 'Σφάλμα επαλήθευσης',
	'openiderrortext' => 'Προέκυψε ένα σφάλμα κατά τη διάρκεια της επιβεβαίωσης του OpenID URL σας.',
	'openidconfigerror' => 'Σφάλμα διαμόρφωσης OpenID',
	'openidconfigerrortext' => 'Η διαμόρφωση αποθήκευσης OpenID για αυτό το wiki είναι μη έγκυρη.
Παρακαλώ συμβουλευθείτε έναν [[Special:ListUsers/sysop|διαχειριστή]].',
	'openidpermission' => 'Σφάλμα αδειών OpenID',
	'openidpermissiontext' => 'Το OpenID που παρείχες δεν είναι επιτρεπτό να συνδεθεί σε αυτόν τον εξυπηρετητή.',
	'openidcancel' => 'Η επαλήθευση ακυρώθηκε',
	'openidcanceltext' => 'Η επιβεβαίωση του OpenID URL ακυρώθηκε.',
	'openidfailure' => 'Η επαλήθευση απέτυχε',
	'openidfailuretext' => 'Η επιβεβαίωση του OpenID URL απέτυχε. Μήνυμα σφάλματος: "$1"',
	'openidsuccess' => 'Η επαλήθευση ήταν επιτυχής',
	'openidsuccesstext' => 'Η επιβεβαίωση του OpenID URL ήταν επιτυχής.', # Fuzzy
	'openidusernameprefix' => 'Χρήστης OpenID',
	'openidserverlogininstructions' => 'Βάλτε τον κωδικό σας παρακάτω για να συνδεθείτε στο $3 ως χρήστης $2 (σελίδα χρήστη $1).', # Fuzzy
	'openidtrustinstructions' => 'Τσεκάρετε αν θέλετε να μοιραστείτε δεδομένα με το $1.',
	'openidallowtrust' => 'Επέτρεψε στο $1 να εμπιστευτεί αυτό το λογαριασμό χρήστη.',
	'openidnopolicy' => 'Ο ιστοτόπος δεν έχει καθορίσει μια πολιτική ιδιωτικότητας.',
	'openidpolicy' => 'Ελέγξατε <a target="_new" href="$1">πολιτική διακριτικότητας</a> για περισσότερες πληροφορίες.',
	'openidoptional' => 'Προαιρετικός',
	'openidrequired' => 'Απαιτημένος',
	'openidnickname' => 'Παρωνύμιο',
	'openidfullname' => 'ονοματεπώνυμο', # Fuzzy
	'openidemail' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
	'openidlanguage' => 'Γλώσσα',
	'openidtimezone' => 'Ζώνη ώρας:',
	'openidchooselegend' => 'Επιλογή ονόματος χρήστη', # Fuzzy
	'openidchooseinstructions' => 'Όλοι οι χρήστες χρειάζονται ένα nickname,
για να επιλέξετε μια από τις παρακάτω επιλογές.',
	'openidchoosenick' => 'Το ψευδώνυμό σας ($1)',
	'openidchoosefull' => 'Το πλήρες όνομά σας ($1)', # Fuzzy
	'openidchooseurl' => 'Ένα όνομα διαλεγμένο από το OpenID σας ($1)',
	'openidchooseauto' => 'Ένα αυτο-δημιουργημένο όνομα ($1)',
	'openidchoosemanual' => 'Ένα όνομα της επιλογής σας:',
	'openidchooseexisting' => 'Ένας υπάρχων λογαριασμός σε αυτό το βίκι',
	'openidchooseusername' => 'Όνομα χρήστη:',
	'openidchoosepassword' => 'Κωδικός:',
	'openidconvertinstructions' => 'Αυτή η φόρμα σας επιτρέπει να αλλάξετε το λογαριασμό χρήστη σας για να χρησιμοποιήσετε ένα ή περισσόττερα URL OpenID',
	'openidconvertoraddmoreids' => 'Μετατρέψτε το OpenID ή προσθέστε κι άλλο URL OpenID',
	'openidconvertsuccess' => 'Μετατράπηκε επιτυχώς σε OpenID',
	'openidconvertsuccesstext' => 'Έχετε επιτυχώς μετατρέψει το OpenID σας σε $1.',
	'openid-convert-already-your-openid-text' => 'Αυτό είναι ήδη το OpenID σας.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Αυτό είναι το OpenID κάποιου άλλου.', # Fuzzy
	'openidalreadyloggedin' => "'''Έχεις ήδη συνδεθεί, $1!'''

Αν θέλεις να χρησιμοποιήσεις το OpenID για να συνδεθείς στο μέλλον, μπορείς να [[Special:OpenIDConvert|μετατρέψεις το λογαριασμό σου για να χρησιμοποιήσεις το OpenID]].", # Fuzzy
	'openidnousername' => 'Δεν καθορίστηκε κανένα όνομα χρήστη.',
	'openidbadusername' => 'Καθορίστηκε κακό όνομα χρήστη.',
	'openidautosubmit' => 'Αυτή η σελίδα περιλαμβάνει μια φόρμα που θα πρέπει να καταχωρηθεί αυτόματα αν έχετε ενεργοποιήσει το JavaScript.
Αν όχι, πατήστε το κουμπί "Συνέχεια".',
	'openidclientonlytext' => 'Δεν μπορείτε να χρησιμοποιείτε λογαριασμούς από το βίκι σαν OpenID σε άλλη ιστοσελίδα.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => 'Ο ιστότοπος {{SITENAME}} υποστηρίζει το πρότυπο [//openid.net/ OpenID] για μοναδικό υπογραφή μεταξύ ιστοτόπων.
Το OpenID σου επιτρέπει να συνδεθείς σε πολλούς διαφορετικούς ιστοτόπους χωρίς τη χρήση διαφορετικού κωδικού για τον καθένα.
(Δες το [//en.wikipedia.org/wiki/OpenID άρθρο της Wikipedia για το OpenID] για περισσότερες πληροφορίες.)

Αν έχεις ήδη έναν λογαριασμό στο {{SITENAME}}, μπορείς να [[Special:UserLogin|συνδεθείς]] με το όνομα χρήστη σου και τον κωδικό σου ως συνήθως.
Για να χρησιμοποιήσεις το OpenID στο μέλλον, μπορείς να [[Special:OpenIDConvert|μετατρέψεις το λογαριασμό σου σε OpenID]] αφού έχεις συνδεθεί κανονικά.

Υπάρχουν υπερβολικά πολλοί [//openid.net/get/ παροχείς OpenID], και μπορεί να έχεις έναν ήδη ενεργοποιημένο με OpenID λογαριασμό σε άλλη υπηρεσία.', # Fuzzy
	'openidupdateuserinfo' => 'Ενημέρωση των προσωπικών πληροφοριών μου:',
	'openiddelete' => 'Διαγραφή OpenID',
	'openiddelete-text' => 'Κάνωντας κλικ στο κουμπί "{{int:openiddelete-button}}", θα αφαιρέσετε το OpenID $1 από το λογαριασμό σας.
Δεν θα είστε πλέον σε θέση να συνδεθείτε με αυτό το OpenID.',
	'openiddelete-button' => 'Επιβεβαίωση',
	'openiddeleteerrornopassword' => 'Δεν μπορείτε να διαγράψετε όλα τα OpenIDs σας, διότι ο λογαριασμός σας δεν έχει κωδικό πρόσβασης. 
 Δεν θα μπορέσετε να συνδεθείτε  χωρίς ένα OpenID.',
	'openiddeleteerroropenidonly' => 'Δεν μπορείτε να διαγράψετε όλα τα OpenIDs σας, διότι σας επιτρέπεται  να συνδεθείτε μόνο με OpenID. 
 Δεν θα μπορέσετε να συνδεθείτε χωρίς ένα OpenID.',
	'openiddelete-success' => 'Το OpenID αφαιρέθηκε επιτυχώς από τον λογαριασμό σας.',
	'openiddelete-error' => 'Ένα σφάλμα προέκυψε κατά την αφαίρεση του OpenID από το λογαριασμό σας.',
	'prefs-openid-hide-openid' => 'Απόκρυψη του OpenID URL στη σελίδα χρήστη σας, αν συνδεθείτε με το OpenID.',
	'openid-hide-openid-label' => 'Απόκρυψη του OpenID URL στη σελίδα χρήστη σας, αν συνδεθείτε με το OpenID.',
	'openid-userinfo-update-on-login-label' => 'Ενημέρωση των ακόλουθων πληροφοριών από το OpenID persona κάθε φορά που συνδέομαι:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID συνδεδεμένα με τον λογαριασμό σας:',
	'openid-urls-url' => 'Διεύθυνση URL',
	'openid-urls-action' => 'Ενέργεια',
	'openid-urls-delete' => 'Διαγραφή',
	'openid-add-url' => 'Προσθέστε ένα νέο OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Σύνδεση ή Δημιουργία Νέου Λογαριασμού', # Fuzzy
	'openid-provider-label-openid' => 'Εισαγωγή URL του OpenID σας',
	'openid-provider-label-google' => 'Σύνδεση χρησιμοποιώντας τον Google λογαριασμό σας',
	'openid-provider-label-yahoo' => 'Σύνδεση χρησιμοποιώντας τον Yahoo λογαριασμό σας',
	'openid-provider-label-aol' => 'Εισάγετε το AOL όνομα οθόνης σας',
	'openid-provider-label-other-username' => 'Εισαγωγή του δικού σας $1 ονόματος χρήστη',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 * @author Lucas
 * @author Michawiki
 * @author Yekrats
 */
$messages['eo'] = array(
	'openid-desc' => 'Ensaluti la vikion kun [//openid.net/ identigo OpenID], kaj ensaluti aliajn retejon uzantajn OpenID kun vikia uzula konto',
	'openidlogin' => 'Ensaluti kun OpenID', # Fuzzy
	'openidserver' => 'Servilo OpenID',
	'openidxrds' => 'dosiero Yadis',
	'openidconvert' => 'OpenID konvertilo',
	'openiderror' => 'Atestada eraro',
	'openiderrortext' => 'Eraro okazis dum atestado de la OpenID URL-o.',
	'openidconfigerror' => 'Konfigurada eraro de OpenID',
	'openidconfigerrortext' => 'La konfiguro de la OpenID-identigujo por ĉi tiu vikio estas nevalida.
Bonvolu konsulti [[Special:ListUsers/sysop|administranton]].',
	'openidpermission' => 'OpenID rajt-eraro',
	'openidpermissiontext' => 'La OpenID kiun vi provizis ne estas permesita ensaluti ĉi tiun servilon.',
	'openidcancel' => 'Atestado nuliĝis',
	'openidcanceltext' => 'Atestado de la URL-o OpenID estis nuligita.',
	'openidfailure' => 'Atestado malsukcesis',
	'openidfailuretext' => 'Atestado de la URL-o OpenID malsukcesis. Erara mesaĝo: "$1"',
	'openidsuccess' => 'Atestado sukcesis.',
	'openidsuccesstext' => 'Atestado de la OpenID URL-o sukcesis.', # Fuzzy
	'openidusernameprefix' => 'OpenID-Uzanto',
	'openidserverlogininstructions' => 'Enigu vian pasvorton suben por ensaluti al $3 kiel uzanto $2 (uzulpaĝo $1).', # Fuzzy
	'openidtrustinstructions' => 'Kontroli se vi volas kunpermesigi datenojn kun $1.',
	'openidallowtrust' => 'Rajtigi $1 fidi ĉi tiun uzulan konton.',
	'openidnopolicy' => 'Retejo ne specifis regularon pri privateco.',
	'openidpolicy' => 'Kontroli la <a target="_new" href="$1">regularon pri privateco</a> pri plua informo.',
	'openidoptional' => 'Nedeviga',
	'openidrequired' => 'Deviga',
	'openidnickname' => 'Kaŝnomo',
	'openidfullname' => 'Plena nomo', # Fuzzy
	'openidemail' => 'Retadreso',
	'openidlanguage' => 'Lingvo',
	'openidtimezone' => 'Horzono',
	'openidchooselegend' => 'Elekto de salutnomo', # Fuzzy
	'openidchooseinstructions' => 'Ĉiuj uzantoj bezonas kromnomo;
vi povas selekti el unu la jenaj opcioj.',
	'openidchoosenick' => 'Via kromnomo ($1)',
	'openidchoosefull' => 'Via plena nomo ($1)', # Fuzzy
	'openidchooseurl' => 'Nomo eltenita de via OpenID ($1)',
	'openidchooseauto' => 'Automate generita nomo ($1)',
	'openidchoosemanual' => 'Nomo de via elekto:',
	'openidchooseexisting' => 'Ekzistanta konto en ĉi tiu vikio',
	'openidchooseusername' => 'Salutnomo:',
	'openidchoosepassword' => 'Pasvorto:',
	'openidconvertinstructions' => 'Ĉi tiu paĝo permesas al vi ŝanĝi vian uzulan konton por uzi URL-on OpenID aŭ aldoni pliajn OpenID-URL-ojn.',
	'openidconvertoraddmoreids' => 'Konverti al OpenID aŭ aldoni alian OpenID-URL-on',
	'openidconvertsuccess' => 'Sukcese konvertis al OpenID',
	'openidconvertsuccesstext' => 'Vi sukcese konvertis vian identigon OpenID al $1.',
	'openid-convert-already-your-openid-text' => 'Tio jam estas via OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Tio estas OpenID de alia persono.', # Fuzzy
	'openidalreadyloggedin' => "'''Vi jam ensalutis, $1!'''

Se vi volas utiligi OpenID por ensaluti estontece, vi povas [[Special:OpenIDConvert|konverti vian konton por uzi OpenID]].", # Fuzzy
	'openidnousername' => 'Neniu salutnomo estis donita.',
	'openidbadusername' => 'Fuŝa salutnomo donita.',
	'openidautosubmit' => 'Ĉi tiu paĝo inkluzivas kamparo kiu estos aŭtomate enigita se vi havas JavaScript-on ŝaltan.
Se ne, klaku la butonon "Continue" (Daŭri).',
	'openidclientonlytext' => 'Vi ne povas uzi kontojn de ĉi tiu vikio kiel OpenID-ojn en alia retejo.',
	'openidloginlabel' => 'URL-o OpenID',
	'openidupdateuserinfo' => 'Ĝisdatigi mian personan informon:',
	'openiddelete' => 'Forigi OpenID',
	'openiddelete-button' => 'Konfirmi',
	'openiddelete-success' => 'La OpenID estis sukcese forigita de via konto.',
	'openiddelete-error' => 'Eraro okazis dum forigado de la OpenID de via konto.',
	'prefs-openid-hide-openid' => 'Kaŝi viajn identigon OpenID en via uzantopaĝo, se vi ensalutas kun OpenID.',
	'openid-hide-openid-label' => 'Kaŝi viajn identigon OpenID en via uzantopaĝo, se vi ensalutas kun OpenID.',
	'openid-userinfo-update-on-login-label' => 'Ĝisdatigi mian informon de OpenID-konto ĉiam, kiam mi ensalutos:', # Fuzzy
	'openid-associated-openids-label' => 'Indentigoj OpenID asociigita kun via konto:',
	'openid-urls-action' => 'Ago',
	'openid-urls-delete' => 'Forigi',
	'openid-add-url' => 'Aldoni novan OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Ensaluti aŭ Krei Novan Konton', # Fuzzy
	'openid-provider-label-openid' => 'Enigi vian OpenID-URL-on',
	'openid-provider-label-google' => 'Ensaluti per via Google-konto',
	'openid-provider-label-yahoo' => 'Ensaluti per via Yahoo-konto',
	'openid-provider-label-aol' => 'Enigi vian AOL-salutnomon',
	'openid-provider-label-other-username' => 'Enigi vian salutnomon de $1',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Ascánder
 * @author Crazymadlover
 * @author Drini
 * @author Fitoschido
 * @author Imre
 * @author McDutchie
 * @author Sanbec
 * @author Translationista
 * @author Vivaelcelta
 * @author XalD
 */
$messages['es'] = array(
	'openid-desc' => 'Permite a los usuarios iniciar sesión en el wiki con un [//openid.net/ OpenID]. Si esto está activado en el wiki, también pueden utilizar su URL de cuenta de usuario de este wiki como OpenID para iniciar sesión en otros sitios web que utilicen OpenID',
	'openidlogin' => 'Iniciar sesión / crear cuenta con OpenID',
	'openidserver' => 'Servidor de OpenID',
	'openidxrds' => 'Archivo de Yadis',
	'openidconvert' => 'Convertidor de OpenID',
	'openiderror' => 'Error de verificación',
	'openiderrortext' => 'Un error ocurrió durante la verificación del URL de OpenID.',
	'openidconfigerror' => 'Error de configuración de OpenID',
	'openidconfigerrortext' => 'La configuración de almacenamiento OpenID de este wiki es inválido.
Consulta a un [[Special:ListUsers/sysop|administrador]].',
	'openidpermission' => 'Error de permisos de OpenID',
	'openidpermissiontext' => 'El OpenID que indicaste no tiene permiso de ingresar a este servidor.',
	'openidcancel' => 'Verificación cancelada',
	'openidcanceltext' => 'Verificación del URL OpenID fue cancelada.',
	'openidfailure' => 'Verificación fracasada',
	'openidfailuretext' => 'La verificación del OpenID falló. Mensaje de error: «$1».',
	'openidsuccess' => 'Verificación exitosa',
	'openidsuccesstext' => "'''Verificación e inicio de sesión exitosos como usuario $1'''.

Tu OpenID es $2 .

Ésta y otras OpenID opcionales pueden administrarse en la [[Special:Preferences#mw-prefsection-openid|pestaña OpenID]] de sus preferencias.<br />
Una contraseña de cuenta opcional puede ser añadida en su [[Special:Preferences#mw-prefsection-personal|perfil de usuario]].",
	'openidusernameprefix' => 'OpenIDUser',
	'openidserverlogininstructions' => '$3 solicita que introduzcas tu contraseña para tu página de usuario $2 $1 (ésta es tu URL de OpenID)',
	'openidtrustinstructions' => 'Comprueba si quieres compartir datos con $1.',
	'openidallowtrust' => 'Permitir a $1 confiar en esta cuenta de usuario.',
	'openidnopolicy' => 'El sitio no ha especificado una política de privacidad.',
	'openidpolicy' => 'Comprueba la <a target="_new" href="$1">política de privacidad</a> para mayor información.',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Obligatorio',
	'openidnickname' => 'Apodo',
	'openidfullname' => 'Nombre completo', # Fuzzy
	'openidemail' => 'Dirección de correo electrónico',
	'openidlanguage' => 'Idioma',
	'openidtimezone' => 'Huso horario',
	'openidchooselegend' => 'Elección del nombre de usuario y cuenta',
	'openidchooseinstructions' => 'Todos los usuarios necesitan un sobrenombre;
puedes escoger uno de las opciones debajo.',
	'openidchoosenick' => 'Tu apodo ($1)',
	'openidchoosefull' => 'Su nombre completo ($1)', # Fuzzy
	'openidchooseurl' => 'Un nombre escogido a partir de tu OpenID ($1)',
	'openidchooseauto' => 'Un nombre autogenerado ($1)',
	'openidchoosemanual' => 'Un nombre de su preferencia:',
	'openidchooseexisting' => 'Una cuenta existente en este wiki',
	'openidchooseusername' => 'nombre de usuario:',
	'openidchoosepassword' => 'Contraseña:',
	'openidconvertinstructions' => 'Este formulario te permite cambiar tu cuenta de usuario para usar una URL de OpenID o agregar más URLs de OpenID.',
	'openidconvertoraddmoreids' => 'Convertir a OpenID o añadir otra URL OpenID',
	'openidconvertsuccess' => 'Convertido exitosamente a OpenID',
	'openidconvertsuccesstext' => 'Has convertido correctamente tu OpenID a $1.',
	'openid-convert-already-your-openid-text' => 'Ya es tu OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Esto es el OpenID de alguien más.', # Fuzzy
	'openidalreadyloggedin' => 'Ya has iniciado sesión.',
	'openidalreadyloggedintext' => "'''¡Ya ha iniciado sesión, $1!'''

Puede gestionar (ver, eliminar, añadir) identificadores OpenID en la [[Special:Preferences#mw-prefsection-openid|pestaña OpenID]] de sus  preferencias.",
	'openidnousername' => 'No se especificó ningún nombre de usuario.',
	'openidbadusername' => 'Nombre de usuario mal especificado.',
	'openidautosubmit' => 'Esta página incluye un formulario que será enviado automáticamnte si dispones de JavaScript.
De lo contrario, usa el botón «Continue» (Continuar).',
	'openidclientonlytext' => 'No puedes usar cuentas de este wiki como OpenID en otro sitio.',
	'openidloginlabel' => 'URL de OpenID',
	'openidlogininstructions' => '{{SITENAME}} usa el estándar [//openid.net/ OpenID] para iniciar una sola sesión entre varios sitios web.
OpenID te permite iniciar sesión en muchos sitios web diferentes evitando usar una contraseña diferente en cada uno.
(Véase [//es.wikipedia.org/wiki/OpenID el artículo de Wikipedia correspondiente] para más información.)
Existen muchos [//openid.net/get/ proveedores de OpenID], y quizás tú ya poseas alguna cuenta con OpenID en otro servicio.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''solo'' permite iniciar sesión con OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Si ya tienes una cuenta en {{SITENAME}}, puedes [[Special:UserLogin|iniciar sesión]] con tu nombre de usuario y contraseña como siempre.
Para usar OpenID en el futuro, puedes [[Special:OpenIDConvert|convertir tu cuenta a OpenID]] después de haber iniciado sesión normalmente.',
	'openidupdateuserinfo' => 'Actualizar mi información personal:',
	'openiddelete' => 'Eliminar OpenID',
	'openiddelete-text' => 'Al hacer clic en el botón «{{int:openiddelete-button}}», eliminarás el OpenID $1 de tu cuenta.
Ya no podrás iniciar sesión con este OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'No puedes eliminar todos tus OpenID porque tu cuenta no tiene contraseña.
No podrás iniciar sesión sin un OpenID.',
	'openiddeleteerroropenidonly' => 'No puedes eliminar todos tus OpenID porque solo se puede iniciar sesión con OpenID.
No podrás iniciar sesión sin un OpenID.',
	'openiddelete-success' => 'El OpenID fue eliminado exitosamente de tu cuenta.',
	'openiddelete-error' => 'Ocurrió un error al eliminar el OpenID de tu cuenta.',
	'openid-openids-were-not-merged' => 'El(los) OpenID(s) no se fusionaron cuando se fusionaban las cuentas de usuario.',
	'prefs-openid-hide-openid' => 'Ocultar tu OpenID en tu página de usuario, si inicias sesión con OpenID.',
	'openid-hide-openid-label' => 'Ocultar tu OpenID en tu página de usuario, si inicias sesión con OpenID.',
	'openid-userinfo-update-on-login-label' => 'Actualizar la siguiente información desde mi perfil OpenID cada vez que inicie sesión:', # Fuzzy
	'openid-associated-openids-label' => 'Los OpenID asociados a tu cuenta:',
	'openid-urls-url' => 'Dirección URL',
	'openid-urls-action' => 'Acción',
	'openid-urls-registration' => 'Fecha y hora de registro',
	'openid-urls-delete' => 'Eliminar',
	'openid-add-url' => 'Añadir un OpenID nuevo', # Fuzzy
	'openid-login-or-create-account' => 'Iniciar sesión o crear una cuenta nueva',
	'openid-provider-label-openid' => 'Introduce la URL de OpenID',
	'openid-provider-label-google' => 'Iniciar sesión usando tu cuenta de Google',
	'openid-provider-label-yahoo' => 'Iniciar sesión usando tu cuenta de Yahoo',
	'openid-provider-label-aol' => 'Introduce tu nombre de usuario de AOL',
	'openid-provider-label-other-username' => 'Introduce tu nombre de usuario de $1',
	'specialpages-group-openid' => 'Páginas de servicio de OpenID e información de estado',
	'right-openid-converter-access' => 'Puede agregar o convertir su cuenta para utilizar identidades OpenID',
	'right-openid-dashboard-access' => 'Acceso estándar al tablero de OpenID',
	'right-openid-dashboard-admin' => 'Acceso de administrador al tablero de OpenID',
	'action-openid-converter-access' => 'añadir o convertir tu cuenta para utilizar identidades OpenID',
	'action-openid-dashboard-access' => 'acceder al tablero del OpenID',
	'action-openid-dashboard-admin' => 'acceder al tablero de administración del OpenID',
	'openid-dashboard-title' => 'Tablero de OpenID',
	'openid-dashboard-title-admin' => 'Tablero de OpenID (administrador)',
	'openid-dashboard-introduction' => 'La configuración actual de la extensión de OpenID ([$1 ayuda])',
	'openid-dashboard-number-openid-users' => 'Número de usuarios con OpenID',
	'openid-dashboard-number-openids-in-database' => 'Número de OpenID (total)',
	'openid-dashboard-number-users-without-openid' => 'Número de usuarios sin OpenID',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'openidoptional' => 'Valikuline',
	'openidrequired' => 'Nõutav',
	'openidnickname' => 'Hüüdnimi',
	'openidfullname' => 'Täisnimi',
	'openidemail' => 'E-posti aadress',
	'openidlanguage' => 'Keel',
	'openidtimezone' => 'Ajavöönd',
	'openidchoosenick' => 'Sinu hüüdnimi ($1)',
	'openidchoosefull' => 'Sinu täisnimi ($1)',
	'openidchoosemanual' => 'Sinu valitud nimi:',
	'openidchooseexisting' => 'Olemasolev konto selles vikis',
	'openidchooseusername' => 'Kasutajanimi:',
	'openidchoosepassword' => 'Parool:',
	'openid-convert-already-your-openid-text' => 'See on juba sinu OpenID.',
	'openid-convert-other-users-openid-text' => 'See on kellegi teise OpenID.',
	'openidalreadyloggedin' => 'Oled juba sisse loginud.',
	'openidnousername' => 'Kasutajanimi määratlemata.',
	'openidbadusername' => 'Märgitud kasutajanimi on vigane.',
	'openiddelete-button' => 'Kinnita',
	'openid-urls-delete' => 'Kustuta',
	'openid-provider-label-google' => "Logi sisse oma Google'i konto kaudu",
	'openid-provider-label-yahoo' => 'Logi sisse oma Yahoo konto kaudu',
);

/** Basque (euskara)
 * @author Kobazulo
 * @author Theklan
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'openidserver' => 'OpenID zerbitzaria',
	'openidoptional' => 'Aukerazkoa',
	'openidrequired' => 'Nahitaezkoa',
	'openidnickname' => 'Ezizena',
	'openidfullname' => 'Izen osoa',
	'openidemail' => 'E-posta helbidea',
	'openidlanguage' => 'Hizkuntza',
	'openidtimezone' => 'Ordu-eremua',
	'openidchooseusername' => 'Erabiltzaile izena:',
	'openidchoosepassword' => 'Pasahitza:',
	'openid-urls-action' => 'Ekintza',
	'openid-urls-delete' => 'Ezabatu',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'openidoptional' => 'اختیاری',
	'openidrequired' => 'اجباری',
	'openidnickname' => 'نام مستعار',
	'openidfullname' => 'نام کامل',
	'openidemail' => 'نشانی پست الکترونیکی',
	'openidlanguage' => 'زبان',
	'openidtimezone' => 'منطقهٔ زمانی',
	'openidchoosenick' => 'نام مستعار شما ($1)',
	'openidchoosefull' => 'نام کامل شما ($1)',
	'openidchooseusername' => 'نام کاربری:',
	'openidchoosepassword' => 'گذرواژه:',
	'openiddelete-button' => 'تأیید',
	'openid-urls-action' => 'اقدام',
	'openid-urls-registration' => 'زمان ثبت نام',
	'openid-urls-delete' => 'حذف',
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Cimon Avaro
 * @author Crt
 * @author Mobe
 * @author Nike
 * @author Olli
 * @author Silvonen
 * @author Str4nd
 * @author Varusmies
 * @author Vililikku
 * @author ZeiP
 */
$messages['fi'] = array(
	'openid-desc' => 'Kirjaudu wikiin [//openid.net/ OpenID:llä] ja muille OpenID-tuetuille sivustoille wiki-käyttäjätilillä.',
	'openididentifier' => 'OpenID-tunnus',
	'openidlogin' => 'Kirjaudu sisään tai luo tunnus OpenID:llä',
	'openidserver' => 'OpenID-palvelin',
	'openidxrds' => 'Yadis-tiedosto',
	'openidconvert' => 'OpenID-muunnin',
	'openiderror' => 'Todennusvirhe',
	'openiderrortext' => 'Tapahtui virhe OpenID-osoitteen todentamisen aikana.',
	'openidconfigerror' => 'OpenID-asetusvirhe',
	'openidconfigerrortext' => 'OpenID-varaston määritykset ovat epäkelvolliset tässä wikissä.
Ota yhteyttä [[Special:ListUsers/sysop|ylläpitäjään]].',
	'openidpermission' => 'OpenID-oikeusvirhe',
	'openidpermissiontext' => 'Tarjoamallasi OpenID:llä ei ole luvallista kirjautua tälle palvelimelle.',
	'openidcancel' => 'Todennus peruutettiin',
	'openidcanceltext' => 'OpenID-osoitteen todentaminen peruutettiin.',
	'openidfailure' => 'Todennus epäonnistui',
	'openidfailuretext' => 'OpenID-osoitteen todentaminen epäonnistui. Virheilmoitus: ”$1”',
	'openidsuccess' => 'Todennus onnistui',
	'openidsuccesstext' => 'OpenID-osoitteen todennus onnistui.', # Fuzzy
	'openidusernameprefix' => 'OpenID-käyttäjä',
	'openidserverlogininstructions' => 'Kirjaudu sisään sivustolle $3 käyttäjänä $2 (käyttäjäsivu $1) syöttämällä salasana alle.', # Fuzzy
	'openidtrustinstructions' => 'Tarkista, haluatko jakaa tietoja kohteen $1 kanssa.',
	'openidallowtrust' => 'Salli sivuston $1 luottaa tähän käyttäjätiliin.',
	'openidnopolicy' => 'Sivusto ei ole määritellyt yksityisyyskäytäntöä.',
	'openidpolicy' => 'Lisää tietoa on <a target="_new" href="$1">yksityisyyskäytännöissä</a>.',
	'openidoptional' => 'Valinnainen',
	'openidrequired' => 'Vaadittu',
	'openidnickname' => 'Nimimerkki',
	'openidfullname' => 'Koko nimi', # Fuzzy
	'openidemail' => 'Sähköpostiosoite',
	'openidlanguage' => 'Kieli',
	'openidtimezone' => 'Aikavyöhyke',
	'openidchooselegend' => 'Käyttäjätunnuksen valinta', # Fuzzy
	'openidchooseinstructions' => 'Kaikki käyttäjät tarvitsevat nimimerkin.
Voit valita omasi alla olevista vaihtoehdoista.',
	'openidchoosenick' => 'Nimimerkkisi ($1)',
	'openidchoosefull' => 'Koko nimesi ($1)', # Fuzzy
	'openidchooseurl' => 'OpenID:stäsi poimittu nimi ($1)',
	'openidchooseauto' => 'Automaattisesti luotu nimi ($1)',
	'openidchoosemanual' => 'Omavalintainen nimi',
	'openidchooseexisting' => 'Olemassa oleva tunnus tässä wikissä',
	'openidchooseusername' => 'Käyttäjätunnus:',
	'openidchoosepassword' => 'Salasana',
	'openidconvertinstructions' => 'Tällä lomakkeella voit muuttaa käyttäjätilisi käyttämään OpenID-osoitetta tai lisätä OpenID-osoitteita.',
	'openidconvertoraddmoreids' => 'Siirry OpenID:hen tai lisää uusi OpenID-osoite.',
	'openidconvertsuccess' => 'Muutettiin onnistuneesti OpenID:hen.',
	'openidconvertsuccesstext' => 'OpenID:si on muunnettu muotoon $1.',
	'openid-convert-already-your-openid-text' => 'Tämä on jo OpenID:si.', # Fuzzy
	'openid-convert-other-users-openid-text' => '$1 on jonkun muun OpenID. Et voi käyttää toisen käyttäjän OpenID:tä.',
	'openidalreadyloggedin' => 'Olet jo kirjautuneena sisään.',
	'openidnousername' => 'Käyttäjätunnus puuttuu.',
	'openidbadusername' => 'Käyttäjätunnus on virheellinen.',
	'openidautosubmit' => 'Tämä sivu sisältää lomakkeen, joka lähettää itse itsensä, jos JavaScript käytössä.
Muussa tapauksessa valitse <code>Continue</code> (Jatka).',
	'openidclientonlytext' => 'Et voi käyttää tämän wikin käyttäjätunnuksia OpenID-tunnuksina muilla sivustoilla.',
	'openidloginlabel' => 'OpenID-URL',
	'openidlogininstructions' => '{{SITENAME}} tukee [//openid.net/ OpenID]-standardia yhden tunnuksen käyttämiseksi eri sivustoilla.
OpenID mahdollistaa kirjautumisen useille eri sivustoille tarvitsematta eri salasanaa jokaiseen.
(Katso [//en.wikipedia.org/wiki/OpenID Wikipedian OpenID-artikkeli] saadaksesi lisätietoja.)
Tarjolla on monia eri [//openid.net/get/ OpenID-tarjoajia], ja sinulla saattaa jo olla OpenID:tä tarjoava tunnus toisessa palvelussa.',
	'openidupdateuserinfo' => 'Päivitä henkilökohtaiset tietoni:',
	'openiddelete' => 'Poista OpenID',
	'openiddelete-text' => 'Napsauttamalla {{int:openiddelete-button}}-paniketta, voit poistaa OpenID:n $1 tunnuksestasi.
Et voi enää kirjautua sisään tällä OpenID:llä.',
	'openiddelete-button' => 'Vahvista',
	'openiddeleteerrornopassword' => 'Et voi poistaa kaikkia OpenID-tunnuksiasi, koska tililläsi ei ole salasanaa.
Et kykenisi kirjautumaan sisään ilman OpenID-tunnusta.',
	'openiddeleteerroropenidonly' => 'Et voi poistaa kaikkia OpenID-tunnuksiasi, koska sinun sallitaan kirjautua sisään vain OpenID-tunnuksella.
Et kykenisi kirjautumaan ilman OpenID-tunnusta.',
	'openiddelete-success' => 'OpenID on onnistuneesti poistettu tilistäsi.',
	'openiddelete-error' => 'Virhe poistettaessa OpenID:tä tilistäsi.',
	'prefs-openid-hide-openid' => 'Piilota OpenID:si käyttäjäsivultani, jos kirjaudun sisään OpenID-tunnuksilla.',
	'prefs-openid-trusted-sites' => 'Luotetut sivustot',
	'openid-hide-openid-label' => 'Piilota OpenID:si käyttäjäsivultani, jos kirjaudun sisään OpenID-tunnuksilla.', # Fuzzy
	'openid-userinfo-update-on-login-label' => 'Päivitä seuraavat tiedot OpenID-tiedoista jokaisella kirjautumisella:', # Fuzzy
	'openid-associated-openids-label' => 'Tiliisi liitetyt OpenID:eet:',
	'openid-urls-action' => 'Toiminto',
	'openid-urls-delete' => 'Poista',
	'openid-add-url' => 'Lisää uusi OpenID', # Fuzzy
	'openid-trusted-sites-delete-link-action-text' => 'Poista',
	'openid-trusted-sites-delete-all-link-action-text' => 'Poista kaikki luotetut sivustot',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Vahvista',
	'openid-login-or-create-account' => 'Kirjaudu sisään tai luo tunnus',
	'openid-provider-label-openid' => 'Anna sinun OpenID URL-osoitteesi',
	'openid-provider-label-google' => 'Kirjaudu sisään käyttämällä Google-tunnuksiasi',
	'openid-provider-label-yahoo' => 'Kirjaudu sisään käyttämällä Yahoo-tunnuksiasi',
	'openid-provider-label-aol' => 'Anna AOL-käyttäjänimesi',
	'openid-provider-label-other-username' => 'Anna $1-käyttäjätunnuksesi',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 * @author McDutchie
 * @author Od1n
 * @author Peter17
 * @author PiRSquared17
 * @author Sherbrooke
 * @author Verdy p
 * @author Zetud
 */
$messages['fr'] = array(
	'openid-desc' => 'Se connecter au wiki avec [//openid.net/ OpenID] et se connecter à d’autres sites internet OpenID avec un compte utilisateur du wiki.',
	'openididentifier' => 'Identifiant OpenID',
	'openidlogin' => 'Se connecter ou créer un compte avec OpenID',
	'openidserver' => 'Serveur OpenID',
	'openid-identifier-page-text-user' => 'Cette page est l’identifiant de l’utilisateur "$1".',
	'openid-identifier-page-text-different-user' => 'Cette page est l’identifiant de l’utilisateur d’ID $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'Ceci est un identifiant OpenID local non valide.',
	'openid-server-identity-page-text' => 'Ceci est une page du serveur technique OpenID pour démarrer l’authentification OpenID. La page n’a pas d’autre but.',
	'openidxrds' => 'Fichier Yadis',
	'openidconvert' => 'Convertisseur OpenID',
	'openiderror' => 'Erreur de vérification',
	'openiderrortext' => 'Une erreur est intervenue pendant la vérification de l’adresse OpenID.',
	'openidconfigerror' => 'Erreur de configuration de OpenID',
	'openidconfigerrortext' => 'Le stockage de la configuration OpenID pour ce wiki est incorrecte.
Veuillez vous mettre en rapport avec un [[Special:ListUsers/sysop|administrateur]] de ce site.',
	'openidpermission' => 'Erreur de permission OpenID',
	'openidpermissiontext' => 'L’OpenID que vous avez fournie n’est pas autorisée à se connecter sur ce serveur.',
	'openidcancel' => 'Vérification annulée',
	'openidcanceltext' => 'La vérification de l’adresse OpenID a été annulée.',
	'openidfailure' => 'Échec de la vérification',
	'openidfailuretext' => 'La vérification de l’adresse OpenID a échouée. Message d’erreur : « $1 »',
	'openidsuccess' => 'Vérification réussie',
	'openidsuccesstext' => "'''La vérification de l’adresse OpenID est réussie et vous êtes identifié en tant qu'utilisateur $1.'''

Votre OpenID est $2.

Cet OpenID et d'autres optionnels peuvent être gérés dans l'[[Special:Preferences#mw-prefsection-openid|onglet OpenID]] de vos préférences.<br />
Un mot de passe facultatif de compte peut être ajouté dans votre [[Special:Preferences#mw-prefsection-personal|profil utilisateur]].",
	'openidusernameprefix' => 'Utilisateur OpenID',
	'openidserverlogininstructions' => '$3 demande que vous entriez votre mot de passe pour votre page $1 utilisateur $2 (URL OpenID)',
	'openidtrustinstructions' => 'Cochez si vous désirez partager les données avec $1.',
	'openidallowtrust' => 'Autorise $1 à faire confiance à ce compte utilisateur.',
	'openidnopolicy' => 'Le site n’a pas indiqué une politique des données personnelles.',
	'openidpolicy' => 'Vérifier la <a target="_new" href="$1">Politique des données personnelles</a> pour plus d’information.',
	'openidoptional' => 'Facultatif',
	'openidrequired' => 'Exigé',
	'openidnickname' => 'Surnom',
	'openidfullname' => 'Nom réel',
	'openidemail' => 'Adresse de courriel',
	'openidlanguage' => 'Langue',
	'openidtimezone' => 'Zone horaire',
	'openidchooselegend' => "Choix du nom d'utilisateur et du compte",
	'openidchooseinstructions' => 'Tous les utilisateurs ont besoin d’un surnom ; vous pouvez en choisir un à partir des choix ci-dessous.',
	'openidchoosenick' => 'Votre surnom ($1)',
	'openidchoosefull' => 'Votre vrai nom ($1)',
	'openidchooseurl' => 'Un nom choisi depuis votre OpenID ($1)',
	'openidchooseauto' => 'Un nom créé automatiquement ($1)',
	'openidchoosemanual' => 'Un nom de votre choix :',
	'openidchooseexisting' => 'Un compte existant sur ce wiki',
	'openidchooseusername' => 'Nom d’utilisateur :',
	'openidchoosepassword' => 'Mot de passe :',
	'openidconvertinstructions' => 'Ce formulaire vous permet de changer votre compte utilisateur pour utiliser une adresse OpenID ou ajouter des adresses OpenID supplémentaires.',
	'openidconvertoraddmoreids' => 'Convertir vers OpenID ou ajouter une autre adresse OpenID',
	'openidconvertsuccess' => 'Converti avec succès vers OpenID',
	'openidconvertsuccesstext' => 'Vous avez converti avec succès votre OpenID vers $1.',
	'openid-convert-already-your-openid-text' => 'L’OpenID $1 est déjà associé à votre compte. Il est inutile de l’ajouter de nouveau.',
	'openid-convert-other-users-openid-text' => '$1 est l’OpenID de quelqu’un d’autre. Vous ne pouvez pas utiliser l’OpenID d’un autre utilisateur.',
	'openidalreadyloggedin' => 'Vous êtes déjà connecté.',
	'openidalreadyloggedintext' => "'''Vous êtes déjà connecté, $1 !'''

Vous pouvez gérer (voir, supprimer et en ajouter d'autres) OpenID dans l'onglet [[Special:Preferences#mw-prefsection-openid|OpenID]] de vos préférences.",
	'openidnousername' => 'Aucun nom d’utilisateur n’a été indiqué.',
	'openidbadusername' => 'Un mauvais nom d’utilisatteur a été indiqué.',
	'openidautosubmit' => 'Cette page comprend un formulaire qui pourrait être envoyé automatiquement si vous avez activé JavaScript.
Si tel n’était pas le cas, essayez le bouton « Continue » (continuer).',
	'openidclientonlytext' => 'Vous ne pouvez utiliser des comptes depuis ce wiki en tant qu’OpenID sur d’autres sites.',
	'openidloginlabel' => 'Adresse OpenID',
	'openidlogininstructions' => '{{SITENAME}} prend en charge la norme [//openid.net/ OpenID] pour l’authentification unique entre les sites.
OpenID vous permet de vous connecter sur plusieurs sites différents sans à avoir à utiliser un mot de passe différent pour chacun d’entre eux.
(Voyez [//fr.wikipedia.org/wiki/OpenID l’article de Wikipédia] pour plus d’informations.)

Il y a de nombreux [//openid.net/get/ fournisseurs OpenID], et vous avez peut-être déjà un compte OpenID activé sur un autre service.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ne vous permet de vous connecter ''uniquement'' avec OpenID.",
	'openidlogininstructions-passwordloginallowed' => "Si vous avez déjà un compte sur {{SITENAME}}, vous pouvez [[Special:UserLogin|connecter]] avec votre nom d'utilisateur et votre mot de passe comme d'habitude.
Pour utiliser OpenID dans le futur vous pourrez [[Special:OpenIDConvert|convertir votre compte vers OpenID]] après vous être connecté normalement.",
	'openidupdateuserinfo' => 'Mettre à jour mes données personnelles :',
	'openiddelete' => "Supprimer l'OpenID",
	'openiddelete-text' => "En cliquant sur le bouton « {{int:openiddelete-button}} », vous supprimez l'OpenID $1 de votre compte.
Vous ne pourrez plus vous connecter avec cet OpenID.",
	'openiddelete-button' => 'Confirmer',
	'openiddeleteerrornopassword' => "Vous ne pouvez pas supprimer tous vos OpenID parce que votre compte n'a pas de mot de passe.
Vous ne pourriez pas vous connecter sans un OpenID.",
	'openiddeleteerroropenidonly' => "Vous ne pouvez pas supprimer tous vos OpenID parce que vous ne pouvez vous connecter qu'avec OpenID.
Vous ne pourriez pas vous connecter sans un OpenID.",
	'openiddelete-success' => "L'OpenID a été supprimé avec succès de votre compte.",
	'openiddelete-error' => "Une erreur est survenue pendant la suppression de l'OpenID de votre compte.",
	'openid-openids-were-not-merged' => "Les OpenID n'ont pas été fusionnés lors de la fusion des comptes d'utilisateurs.",
	'prefs-openid-hide-openid' => 'Cacher votre OpenID sur votre page utilisateur, si vous vous connectez avec OpenID.',
	'prefs-openid-userinfo-update-on-login' => 'Mise à jour des informations utilisateur de OpenID',
	'prefs-openid-associated-openids' => 'Vos OpenIDs pour vous connecter à {{SITENAME}}',
	'prefs-openid-trusted-sites' => 'Sites de confiance',
	'prefs-openid-local-identity' => 'Votre OpenID pour vous connecter à d’autres sites',
	'openid-hide-openid-label' => 'Masquer l’URL de votre OpenID sur votre page utilisateur.',
	'openid-show-openid-url-on-userpage-always' => 'Votre OpenID est toujours affiché sur votre page utilisateur quand vous la visitez.',
	'openid-show-openid-url-on-userpage-never' => 'Votre OpenID n’est jamais affiché sur votre page utilisateur.',
	'openid-userinfo-update-on-login-label' => 'Champs d’information du profil utilisateur qui seront mis à jour automatiquement depuis votre personne OpenID chaque fois que vous vous connecterez:',
	'openid-associated-openids-label' => 'OpenID associées avec votre compte :',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Action',
	'openid-urls-registration' => "Date d'enregistrement",
	'openid-urls-delete' => 'Supprimer',
	'openid-add-url' => 'Ajouter un nouvel OpenID à  votre compte',
	'openid-trusted-sites-label' => 'Sites en qui vous avez confiance et où vous avez utilisé votre OpenID pour vous connecter:',
	'openid-trusted-sites-table-header-column-url' => 'Sites de confiance',
	'openid-trusted-sites-table-header-column-action' => 'Action',
	'openid-trusted-sites-delete-link-action-text' => 'Supprimer',
	'openid-trusted-sites-delete-all-link-action-text' => 'Supprimer tous les sites de confiance',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Suppression d’un site de confiance',
	'openid-trusted-sites-delete-confirmation-question' => 'En cliquant sur le bouton « {{int:openid-trusted-sites-delete-confirmation-button-text}} », vous supprimerez « $1 » de la liste de vos sites de confiance.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'En cliquant sur le bouton « {{int:openid-trusted-sites-delete-confirmation-button-text}} », vous supprimerez tous les sites de confiance de votre profil utilisateur.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Confirmer',
	'openid-trusted-sites-delete-confirmation-success-text' => '« $1 » a bien été supprimé de la liste de vos sites de confiance.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Tous les sites auxquels vous faisiez auparavant confiance ont bien été supprimés de votre profil utilisateur.',
	'openid-local-identity' => 'Votre OpenID :',
	'openid-login-or-create-account' => 'Se connecter ou créer un nouveau compte',
	'openid-provider-label-openid' => 'Entrez votre URL OpenID',
	'openid-provider-label-google' => 'Vous connecter en utilisant votre compte Google',
	'openid-provider-label-yahoo' => 'Vous connecter en utilisant votre compte Yahoo',
	'openid-provider-label-aol' => 'Entrez votre nom AOL',
	'openid-provider-label-wmflabs' => 'Vous connecter en utilisant votre compte Wmflabs',
	'openid-provider-label-other-username' => 'Entrez votre nom d’utilisateur $1',
	'specialpages-group-openid' => "Pages de service OpenID et d'information sur le statut",
	'right-openid-converter-access' => 'Peut ajouter ou convertir leur compte pour utiliser les identités OpenID',
	'right-openid-dashboard-access' => 'Accès standard au tableau de bord OpenID',
	'right-openid-dashboard-admin' => 'Accès administrateur au tableau de bord OpenID',
	'action-openid-converter-access' => 'ajouter ou convertir votre compte pour utiliser les identifiants OpenID',
	'action-openid-dashboard-access' => 'accès au tableau de bord OpenID',
	'action-openid-dashboard-admin' => 'accéder au tableau de bord de l’administrateur OpenID',
	'openid-dashboard-title' => 'Tableau de bord OpenID',
	'openid-dashboard-title-admin' => 'Tableau de bord OpenID (administrateur)',
	'openid-dashboard-introduction' => "Les paramètres actuels de l'extension OpenID ([$1 aide])",
	'openid-dashboard-number-openid-users' => "Nombre d'utilisateurs avec OpenID",
	'openid-dashboard-number-openids-in-database' => 'Nombre de OpenID (total)',
	'openid-dashboard-number-users-without-openid' => "Nombre d'utilisateurs sans OpenID",
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'openidlogin' => 'Sè branchiér ou ben fâre un compto avouéc OpenID',
	'openidserver' => 'Sèrvor OpenID',
	'openidxrds' => 'Fichiér Yadis',
	'openidconvert' => 'Convèrtissor OpenID',
	'openiderror' => 'Èrror de contrôlo',
	'openiderrortext' => 'Na fôta est arrevâye pendent lo contrôlo de l’URL OpenID.',
	'openidconfigerror' => 'Èrror de configuracion de OpenID',
	'openidconfigerrortext' => 'La configuracion de stocâjo OpenID por ceti vouiqui est envalida.
Vos volyéd veriér vers un [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Èrror de pèrmission OpenID',
	'openidpermissiontext' => 'L’OpenID que vos éd balyêye est pas ôtorisâye a sè branchiér sur ceti sèrvior.',
	'openidcancel' => 'Contrôlo anulâ',
	'openidcanceltext' => 'Lo contrôlo de l’URL OpenID est étâ anulâ.',
	'openidfailure' => 'Falyita du contrôlo',
	'openidfailuretext' => 'Lo contrôlo de l’URL OpenID at pas reussi. Mèssâjo de fôta : « $1 »',
	'openidsuccess' => 'Contrôlo reussi',
	'openidusernameprefix' => 'Usanciér OpenID',
	'openidtrustinstructions' => 'Pouentâd se vos voléd partagiér les donâs avouéc $1.',
	'openidallowtrust' => 'Ôtorise $1 a comptar sur ceti compto utilisator.',
	'openidnopolicy' => 'Lo seto at pas spècifiâ na politica de confidencialitât.',
	'openidpolicy' => 'Controlar la <a target="_new" href="$1">politica de confidencialitât</a> por més d’enformacions.',
	'openidoptional' => 'U chouèx',
	'openidrequired' => 'Oblegatouèro',
	'openidnickname' => 'Surnom',
	'openidfullname' => 'Nom complèt', # Fuzzy
	'openidemail' => 'Adrèce èlèctronica',
	'openidlanguage' => 'Lengoua',
	'openidtimezone' => 'Fus horèro',
	'openidchooselegend' => 'Chouèx du nom d’usanciér et du compto',
	'openidchooseinstructions' => 'Tôs los utilisators ont fôta d’un surnom ;
vos en pouede chouèsir yon dês los chouèx ce-desot.',
	'openidchoosenick' => 'Voutron surnom ($1)',
	'openidchoosefull' => 'Voutron nom complèt ($1)', # Fuzzy
	'openidchooseurl' => 'Un nom chouèsi dês voutron OpenID ($1)',
	'openidchooseauto' => 'Un nom fêt ôtomaticament ($1)',
	'openidchoosemanual' => 'Un nom de voutron chouèx :',
	'openidchooseexisting' => 'Un compto ègzistent sur ceti vouiqui',
	'openidchooseusername' => 'Nom d’utilisator :',
	'openidchoosepassword' => 'Contresegno :',
	'openidconvertoraddmoreids' => 'Convèrtir vers OpenID ou ben apondre n’ôtr’URL OpenID',
	'openidconvertsuccess' => 'Convèrti avouéc reusséta vers OpenID',
	'openidconvertsuccesstext' => 'Vos éd convèrti avouéc reusséta voutron OpenID vers $1.',
	'openid-convert-already-your-openid-text' => 'O est ja voutron OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'O est l’OpenID de quârqu’un d’ôtro.', # Fuzzy
	'openidalreadyloggedin' => 'Vos éte ja branchiê.',
	'openidalreadyloggedintext' => "'''Vos éte ja branchiê, $1 !'''

Vos pouede administrar (vêre, suprimar et pués nen apondre d’ôtres) OpenIDs dedens l’[[Special:Preferences#mw-prefsection-openid|ongllèta OpenID]] de voutres prèferences.",
	'openidnousername' => 'Nion nom d’usanciér at étâ spècefiâ.',
	'openidbadusername' => 'Un crouyo nom d’usanciér at étâ spècefiâ.',
	'openidclientonlytext' => 'Vos pouede pas empleyér des comptos dês ceti vouiqui por OpenID sur un ôtro seto.',
	'openidloginlabel' => 'Adrèce OpenID',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} vos pèrmèt ''ren que'' lo branchement avouéc OpenID.",
	'openidupdateuserinfo' => 'Betar a jorn mes balyês a mè :',
	'openiddelete' => 'Suprimar l’OpenID',
	'openiddelete-button' => 'Confirmar',
	'prefs-openid-hide-openid' => 'Cachiér voutron OpenID sur voutra pâge utilisator, se vos vos branchiéd avouéc OpenID.',
	'openid-hide-openid-label' => 'Cachiér voutron OpenID sur voutra pâge utilisator, se vos vos branchiéd avouéc OpenID.',
	'openid-userinfo-update-on-login-label' => 'Betar a jorn cetes enformacions dês OpenID a tôs los côps que mè brancho :', # Fuzzy
	'openid-associated-openids-label' => 'OpenID associyêyes avouéc voutron compto :',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Accion',
	'openid-urls-registration' => 'Dâta d’encartâjo',
	'openid-urls-delete' => 'Suprimar',
	'openid-add-url' => 'Apondre un OpenID novél', # Fuzzy
	'openid-login-or-create-account' => 'Sè branchiér ou ben fâre un compto novél',
	'openid-provider-label-openid' => 'Buchiéd voutra adrèce OpenID',
	'openid-provider-label-google' => 'Vos branchiér en empleyent voutron compto Google',
	'openid-provider-label-yahoo' => 'Vos branchiér en empleyent voutron compto Yahoo',
	'openid-provider-label-aol' => 'Buchiéd voutron nom AOL',
	'openid-provider-label-other-username' => 'Buchiéd voutron nom d’usanciér $1',
	'specialpages-group-openid' => 'Pâges de sèrviço OpenID et enformacions sur lo statut',
	'right-openid-converter-access' => 'Pôt apondre ou ben convèrtir lor compto por empleyér les identitâts OpenID',
	'right-openid-dashboard-access' => 'Accès standârd a la grelye de bôrd OpenID',
	'right-openid-dashboard-admin' => 'Accès administrator a la grelye de bôrd OpenID',
	'openid-dashboard-title' => 'Tablô de bôrd OpenID',
	'openid-dashboard-title-admin' => 'Tablô de bôrd OpenID (administrator)',
	'openid-dashboard-introduction' => 'La configuracion d’ora de l’èxtension OpenID ([$1 éde])',
	'openid-dashboard-number-openid-users' => 'Nombro d’utilisators avouéc OpenID',
	'openid-dashboard-number-openids-in-database' => 'Nombro d’OpenIDs (soma)',
	'openid-dashboard-number-users-without-openid' => 'Nombro d’utilisators sen OpenID',
);

/** Irish (Gaeilge)
 * @author Alison
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'openidpermission' => 'Earráid ceadúnais OpenID',
	'openidlanguage' => 'Teanga',
	'openidchooseusername' => 'Ainm úsáideora:',
	'openidchoosepassword' => "D'fhocal faire:",
	'openiddelete-button' => 'Deimhnigh',
	'openid-urls-action' => 'Gníomh',
	'openid-urls-delete' => 'Scrios',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'openid-desc' => 'Acceder ao sistema do wiki cun [//openid.net/ OpenID] e acceder a outras páxinas web OpenID cunha conta de usuario dun wiki',
	'openididentifier' => 'Identificador OpenID',
	'openidlogin' => 'Acceder ao sistema ou crear unha conta co OpenID',
	'openidserver' => 'Servidor do OpenID',
	'openid-identifier-page-text-user' => 'Esta páxina é o identificador do usuario "$1".',
	'openid-identifier-page-text-different-user' => 'Esta páxina é o identificador para o ID de usuario $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'Este é un idenfificador OpenID local non válido.',
	'openid-server-identity-page-text' => 'Esta é unha páxina do servidor técnico do OpenID para comezar a autenticación do OpenID. A páxina non ten outro propósito.',
	'openidxrds' => 'Ficheiro Yadis',
	'openidconvert' => 'Transformador OpenID',
	'openiderror' => 'Erro de verificación',
	'openiderrortext' => 'Ocorreu un erro durante a verificación do URL do OpenID.',
	'openidconfigerror' => 'Erro na configuración do OpenID',
	'openidconfigerrortext' => 'A configuración do almacenamento no OpenID deste wiki é inválido.
Por favor, consúlteo cun [[Special:ListUsers/sysop|administrador]] do sitio.',
	'openidpermission' => 'Erro de permisos OpenID',
	'openidpermissiontext' => 'O OpenID que proporcionou non ten permitido o acceso a este servidor.',
	'openidcancel' => 'A verificación foi cancelada',
	'openidcanceltext' => 'A verificación do enderezo URL do OpenID foi cancelada.',
	'openidfailure' => 'Fallou a verificación',
	'openidfailuretext' => 'Fallou a verificación da dirección URL do OpenID. Mensaxe de erro: "$1"',
	'openidsuccess' => 'A verificación foi un éxito',
	'openidsuccesstext' => "'''A verificación e o rexistro como usuario $1 foron correctos.'''

O seu OpenID é $2.

Pode xestionar este e outros OpenID e contrasinais opcionais na [[Special:Preferences#mw-prefsection-openid|lapela OpenID]] das súas preferencias.<br />
Pode engadir un contrasinal opcional no seu [[Special:Preferences#mw-prefsection-personal|perfil de usuario]].",
	'openidusernameprefix' => 'Usuario do OpenID',
	'openidserverlogininstructions' => '$3 solicita que insira o seu contrasinal para o seu usuario $2 páxina $1 (este é o enderezo URL do seu OpenID)',
	'openidtrustinstructions' => 'Comprobe se quere compartir datos con $1.',
	'openidallowtrust' => 'Permitir que $1 revise esta conta de usuario.',
	'openidnopolicy' => 'O sitio non especificou unha política de privacidade.',
	'openidpolicy' => 'Comprobe a <a target="_new" href="$1">política de privacidade</a> para máis información.',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Obrigatorio',
	'openidnickname' => 'Alcume',
	'openidfullname' => 'Nome real',
	'openidemail' => 'Enderezo de correo electrónico',
	'openidlanguage' => 'Lingua',
	'openidtimezone' => 'Zona horaria',
	'openidchooselegend' => 'Elección do nome de usuario e da conta',
	'openidchooseinstructions' => 'Todos os usuarios precisan un alcume; pode escoller un de entre as opcións de embaixo.',
	'openidchoosenick' => 'O seu alcume ($1)',
	'openidchoosefull' => 'O seu nome real ($1)',
	'openidchooseurl' => 'Un nome tomado do seu OpenID ($1)',
	'openidchooseauto' => 'Un nome xerado automaticamente ($1)',
	'openidchoosemanual' => 'Un nome da súa escolla:',
	'openidchooseexisting' => 'Unha conta existente neste wiki',
	'openidchooseusername' => 'Nome de usuario:',
	'openidchoosepassword' => 'Contrasinal:',
	'openidconvertinstructions' => 'Este formulario permítelle cambiar a súa conta de usuario para usar un enderezo URL de OpenID ou engadir máis enderezos URL de OpenID.',
	'openidconvertoraddmoreids' => 'Converter a OpenID ou engadir outro enderezo URL de OpenID',
	'openidconvertsuccess' => 'Convertiuse con éxito a OpenID',
	'openidconvertsuccesstext' => 'Converteu con éxito o seu OpenID a $1.',
	'openid-convert-already-your-openid-text' => 'O OpenID $1 xa está asociado á súa conta. Non ten sentido engadilo outra vez.',
	'openid-convert-other-users-openid-text' => '$1 é o OpenID doutra persoa. Non pode usar o OpenID doutro usuario.',
	'openidalreadyloggedin' => 'Xa está identificado.',
	'openidalreadyloggedintext' => "'''Xa está identificado como $1!'''

Pode xestionar (ollar, borrar, engadir) os OpenID na [[Special:Preferences#mw-prefsection-openid|lapela OpenID]] das súas preferencias.",
	'openidnousername' => 'Non especificou ningún nome de usuario.',
	'openidbadusername' => 'O nome de usuario especificado é incorrecto.',
	'openidautosubmit' => 'Esta páxina inclúe un formulario que debería ser enviado automaticamente se ten o JavaScript activado.
Se non é así, probe a premer no botón "Continue" (Continuar).',
	'openidclientonlytext' => 'Non pode usar contas deste wiki como OpenIDs noutro sitio.',
	'openidloginlabel' => 'Enderezo URL do OpenID',
	'openidlogininstructions' => '{{SITENAME}} soporta o [//openid.net/ OpenID] estándar para unha soa sinatura entre os sitios web.
OpenID permítelle rexistrarse en diferentes sitios web sen usar un contrasinal diferente para cada un.
(Consulte o [//en.wikipedia.org/wiki/OpenID artigo sobre o OpenID na Wikipedia en inglés] para obter máis información.)
Hai moitos [//openid.net/get/ provedores de OpenID] e xa pode ter unha conta co OpenID activado noutro servizo.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} permite ''unicamente'' o acceso mediante OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Se xa ten unha conta en {{SITENAME}}, pode [[Special:UserLogin|acceder ao sistema]] co seu nome de usuario e contrasinal, como de costume.
Para utilizar o OpenID no futuro, pode [[Special:OpenIDConvert|converter súa conta nun OpenID]] despois de acceder normalmente.',
	'openidupdateuserinfo' => 'Actualizar a miña información persoal:',
	'openiddelete' => 'Borrar o OpenID',
	'openiddelete-text' => 'Ao premer no botón "{{int:openiddelete-button}}", borrará o OpenID $1 da súa conta.
Non será capaz de volver acceder ao sistema con este OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'Non pode borrar todos os seus OpenID porque a súa conta non ten contrasinal.
Non podería conectarse sen un OpenID.',
	'openiddeleteerroropenidonly' => 'Non pode borrar todos os seus OpenID porque non se pode conectar máis que con OpenID.
Non podería conectarse sen un OpenID.',
	'openiddelete-success' => 'O OpenID foi eliminado con éxito da súa conta.',
	'openiddelete-error' => 'Houbo un erro ao eliminar o OpenID da súa conta.',
	'openid-openids-were-not-merged' => 'Os OpenID non se fusionaron ao mesturar as contas de usuario.',
	'prefs-openid-hide-openid' => 'Enderezo URL do OpenID na súa páxina de usuario',
	'prefs-openid-userinfo-update-on-login' => 'Actualización da información de usuario do OpenID',
	'prefs-openid-associated-openids' => 'Os seus OpenID para acceder a {{SITENAME}}',
	'prefs-openid-trusted-sites' => 'Sitios de confianza',
	'prefs-openid-local-identity' => 'O seu OpenID para acceder a outros sitios',
	'openid-hide-openid-label' => 'Agoche o enderezo URL do seu OpenID na súa páxina de usuario.',
	'openid-show-openid-url-on-userpage-always' => 'O seu OpenID móstrase sempre na súa páxina de usuario cando a visita.',
	'openid-show-openid-url-on-userpage-never' => 'O seu OpenID non se mostra nunca na súa páxina de usuario.',
	'openid-userinfo-update-on-login-label' => 'Os campos de información do perfil que se actualizarán desde o OpenID cada vez que acceda ao sistema:',
	'openid-associated-openids-label' => 'OpenIDs asociados á súa conta:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Acción',
	'openid-urls-registration' => 'Data e hora de rexistro',
	'openid-urls-delete' => 'Borrar',
	'openid-add-url' => 'Engadir un novo OpenID á súa conta',
	'openid-trusted-sites-label' => 'Sitios nos que confía e nos que utilizou o seu OpenID para identificarse:',
	'openid-trusted-sites-table-header-column-url' => 'Sitios de confianza',
	'openid-trusted-sites-table-header-column-action' => 'Acción',
	'openid-trusted-sites-delete-link-action-text' => 'Borrar',
	'openid-trusted-sites-delete-all-link-action-text' => 'Borrar todos os sitios de confianza',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Borrado dun sitio de confianza',
	'openid-trusted-sites-delete-confirmation-question' => 'Ao premer no botón "{{int:openid-trusted-sites-delete-confirmation-button-text}}" eliminará "$1" da lista de sitios de confianza.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'Ao premer no botón "{{int:openid-trusted-sites-delete-confirmation-button-text}}" eliminará todos os sitios de confianza do seu perfil de usuario.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Confirmar',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1" eliminouse correctamente da lista de sitios de confianza.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Elimináronse correctamente do seu perfil de usuario todos os sitios nos que confiaba anteriormente.',
	'openid-local-identity' => 'O seu OpenID:',
	'openid-login-or-create-account' => 'Acceder ou crear unha conta nova',
	'openid-provider-label-openid' => 'Insira o enderezo URL do seu OpenID',
	'openid-provider-label-google' => 'Acceder usando a súa conta do Google',
	'openid-provider-label-yahoo' => 'Acceder usando a súa conta do Yahoo',
	'openid-provider-label-aol' => 'Insira o seu nome AOL',
	'openid-provider-label-wmflabs' => 'Acceder usando a súa conta do Wmflabs',
	'openid-provider-label-other-username' => 'Insira o seu nome de usuario $1',
	'specialpages-group-openid' => 'Páxinas de servizo e información sobre o estado do OpenID',
	'right-openid-converter-access' => 'Pode engadir ou converter a súa conta para utilizar identidades OpenID',
	'right-openid-dashboard-access' => 'Acceso estándar ao taboleiro do OpenID',
	'right-openid-dashboard-admin' => 'Acceso de administrador ao taboleiro do OpenID',
	'action-openid-converter-access' => 'engadir ou converter a súa conta para utilizar identidades OpenID',
	'action-openid-dashboard-access' => 'acceder ao taboleiro do OpenID',
	'action-openid-dashboard-admin' => 'acceder ao taboleiro de administración do OpenID',
	'openid-dashboard-title' => 'Taboleiro de OpenID',
	'openid-dashboard-title-admin' => 'Taboleiro de OpenID (administrador)',
	'openid-dashboard-introduction' => 'A configuración actual da extensión OpenID ([$1 axuda])',
	'openid-dashboard-number-openid-users' => 'Número de usuarios con OpenID',
	'openid-dashboard-number-openids-in-database' => 'Número de OpenID (total)',
	'openid-dashboard-number-users-without-openid' => 'Número de usuarios sen OpenID',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'openidoptional' => 'Προαιρετικόν',
	'openidrequired' => 'Ἀπαιτούμενον',
	'openidnickname' => 'Ψευδώνυμον',
	'openidfullname' => 'Πλῆρες ὄνομα',
	'openidemail' => 'Ἡλεκτρονικὴ διεύθυνσις',
	'openidlanguage' => 'Γλῶττα',
	'openidtimezone' => 'Χρονικὴ ζώνη:',
	'openidchoosepassword' => 'Σῆμα:',
	'openiddelete-button' => 'Κυροῦν',
	'openid-urls-action' => 'Δρᾶσις',
	'openid-urls-delete' => 'Σβεννύναι',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'openid-desc' => 'Mit eme Wiki-Benutzerkonto in däm Wiki mit ere [//openid.net/ OpenID] aamälde un bi andere Netzsyte aamälde, wu OpenID unterstitze',
	'openidlogin' => 'Aamälde/Benutzerkonto erstelle mit OpenID',
	'openidserver' => 'OpenID-Server',
	'openidxrds' => 'Yadis-Datei',
	'openidconvert' => 'OpenID-Konverter',
	'openiderror' => 'Iberpriefigsfähler',
	'openiderrortext' => 'S het e Fähle gee derwyylscht d OpenID-URL iberprieft woren isch.',
	'openidconfigerror' => 'OpenID-Konfigurationsfähler',
	'openidconfigerrortext' => 'D OpenID-Spycherkonfiguarion fir des Wiki isch fählerhaft.
Bitte gib eme [[Special:ListUsers/sysop|Ammann]] e Nochricht.',
	'openidpermission' => 'OpenID-Berächtigungsfähler',
	'openidpermissiontext' => 'D OpenID, wu Du aagee hesch, berächtigt nit zue dr Aamäldig bi däm Server.',
	'openidcancel' => 'Iberpriefig abbroche',
	'openidcanceltext' => 'D Iberpriefig vu dr OpenID-URL isch abbroche wore.',
	'openidfailure' => 'Iberpriefigsfähler',
	'openidfailuretext' => 'D Iberpriefig vu dr OpenID-URL isch fählgschlaa. Fählermäldig: „$1“',
	'openidsuccess' => 'Erfolgryych iberprieft',
	'openidsuccesstext' => 'D Iberpriefig vu dr OpenID-URL isch erfolgryych gsi.', # Fuzzy
	'openidusernameprefix' => 'OpenID-Benutzer',
	'openidserverlogininstructions' => 'Gib Dyy Passwort unten yy go Di as Benutzer $2 an $3 aazmälde (Benutzersyte $1).', # Fuzzy
	'openidtrustinstructions' => 'Prief, eb Du Date mit $1 wit teile.',
	'openidallowtrust' => 'Erlaub $1, däm Benutzerkonto z vertröue.',
	'openidnopolicy' => 'D Syte het kei Dateschutzrichtlinie aagee.',
	'openidpolicy' => 'Prief d <a target="_new" href="$1">Dateschutzrichtlinie</a> fir wyteri Informatione.',
	'openidoptional' => 'Optional',
	'openidrequired' => 'Pflicht',
	'openidnickname' => 'Benutzername',
	'openidfullname' => 'Vollständiger Name', # Fuzzy
	'openidemail' => 'E-Mail-Adräss:',
	'openidlanguage' => 'Sproch',
	'openidtimezone' => 'Zytzone',
	'openidchooselegend' => 'Benutzernameuuswahl', # Fuzzy
	'openidchooseinstructions' => 'Alli Benutzer bruuche ne Benutzername;
Du chasch us däre Lischt ein uussueche.',
	'openidchoosenick' => 'Dyy Spitzname ($1)',
	'openidchoosefull' => 'Dyy vollständige Name ($1)', # Fuzzy
	'openidchooseurl' => 'E Name us Dyynere OpenID ($1)',
	'openidchooseauto' => 'E automatisch aagleite Name ($1)',
	'openidchoosemanual' => 'E vu Dir gwehlte Name:',
	'openidchooseexisting' => 'E Benutzerkonto, wu s in däm Wiki git:',
	'openidchooseusername' => 'Benutzername:',
	'openidchoosepassword' => 'Passwort:',
	'openidconvertinstructions' => 'Mit däm Formular chasch Dyy Benutzerkonto frejgee fir d Benutzig vun ere OpenID-URL oder firzum meh OpenIds yyfiege.',
	'openidconvertoraddmoreids' => 'Zuen ere OpenId wägsle oder e anderi OpenId zuefiege',
	'openidconvertsuccess' => 'Erfolgryych no OpenID konvertiert',
	'openidconvertsuccesstext' => 'Du hesch d Konvertierig vu Dyynere OpenID no $1 erfolgryych durgfiert.',
	'openid-convert-already-your-openid-text' => 'Des isch scho Dyyni OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Des isch d OpenID vu eber anderem.', # Fuzzy
	'openidalreadyloggedin' => "'''Du bisch scho aagmäldet, $1!'''

Wänn Du OpenID fir s Aamälde in Zuechumft wit nutze, no chasch [[Special:OpenIDConvert|Dyy Benutzerkonto no OpenID konvertiere]].", # Fuzzy
	'openidnousername' => 'Kei Benutzername aagee.',
	'openidbadusername' => 'Falsche Benutzername aagee.',
	'openidautosubmit' => 'Uf däre Syte het s e Formular, wu automatisch ibertrait wird, wänn JavaSkript aktiviert isch. Wänn nit, no druck bitte uf „Continue“ (Wyter).',
	'openidclientonlytext' => 'Du chasch kei Benutzerkonte us däm Wiki as OpenID fir anderi Syte verwände.',
	'openidloginlabel' => 'OpenID-URL',
	'openidlogininstructions' => '{{SITENAME}} unterstitzt dr [//openid.net/ OpenID]-Standard zum sich fir mehreri Websites aazmälde.
OpenID mäldet Di bi vyyle unterschidlige Netzsyte aa, ohni ass Du fir jedi e ander Passwort muesch verwände.
(Meh Informatione bietet dr [//de.wikipedia.org/wiki/OpenID dytsch Wikipedia-Artikel zue dr OpenID].)

Wänn Du imfall scho ne Benutzerkonto bi {{SITENAME}} hesch, no chasch Di ganz normal mit em Benutzername un em Passwort [[Special:UserLogin|aamälde]].
Wänn Du in Zuechumft OpenID mechtsch verwände, chasch [[Special:OpenIDConvert|Dyy Account zue OpenID konvertiere]], wänn Di normal aagmäldet hesch.

S git vyyl [http://wiki.openid.net/Public_OpenID_providers effentligi OpenID-Provider] un villicht hesch scho ne  Benutzerkonto mit aktiviertem OpenID bin eme andere Aabieter.', # Fuzzy
	'openidupdateuserinfo' => 'Myni persenlige Date aktualisiere',
	'openiddelete' => 'OpenID lesche',
	'openiddelete-text' => 'Wänn Du dr „{{int:openiddelete-button}}“-Chnopf drucksch, nimmsch d OpenID $1 us Dyym Benutzerkonto use. Du chasch Di derno nimmi mit däre OpenID aamälde.',
	'openiddelete-button' => 'Bstätige',
	'openiddeleteerrornopassword' => 'Du chasch nit Dyyni ganze OpenID lesche, wel Dyy Benutzerkonto kei Passwort het.
Derno wärsch nimmi imstand, di ohni OpenID aazmälde.',
	'openiddeleteerroropenidonly' => 'Du chasch nit Dyyni ganze OpenID lesche, wel Du di numme mit ere OpenID aamälde derfsch. Derno wärsch nimmi imstand, di ohni OpenID aazmälde.',
	'openiddelete-success' => 'D OpenID isch erfolgryych us Dyym Benutzerkonto uusegnuu wore.',
	'openiddelete-error' => 'E Fähler isch ufträtte, derwylscht d OpenID us Dyym Benutzerkonto uusegnuu woren isch.',
	'prefs-openid-hide-openid' => 'Versteck Dyyni OpenID uf Dyynere Benutzersyte, wänn Di mit OpenID aamäldsch.',
	'openid-hide-openid-label' => 'Versteck Dyyni OpenID uf Dyynere Benutzersyte, wänn Di mit OpenID aamäldsch.',
	'openid-userinfo-update-on-login-label' => 'Die Informatione mit em OpenID-Konto bi jedere Aamäldig aktualisiere', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDs´, wu mit Dyym Benutzerkonto verbunde sin:',
	'openid-urls-action' => 'Aktion',
	'openid-urls-delete' => 'Lesche',
	'openid-add-url' => 'E neji OpenID zuefiege', # Fuzzy
	'openid-login-or-create-account' => 'Aamälde oder nej Benutzerkonto aalege', # Fuzzy
	'openid-provider-label-openid' => 'Gib Dyy OpenID URL yy',
	'openid-provider-label-google' => 'Mäld Di aa mit Dyynem Google-Konto',
	'openid-provider-label-yahoo' => 'Mäld Di aa mit Dyynme Yahoo-Konto',
	'openid-provider-label-aol' => 'Gib Dyy AOL-Benutzername yy',
	'openid-provider-label-other-username' => 'Gib Dyy $1-Benutzername yy',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'openidemail' => 'Enmys post-L',
	'openidlanguage' => 'Çhengey',
	'openidchoosepassword' => 'fockle yn arrey:',
);

/** Hausa (Hausa)
 */
$messages['ha'] = array(
	'openid-urls-delete' => 'Soke',
);

/** Hawaiian (Hawai`i)
 * @author Kalani
 */
$messages['haw'] = array(
	'openidlanguage' => 'ʻŌlelo',
	'openidchoosepassword' => 'ʻŌlelo hūnā:',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'openid-desc' => 'כניסה לחשבון בוויקי באמצעות [//openid.net/ OpenID], והתחברות לאתרים נוספים הפועלים עם OpenID באמצעות חשבון משתמש בוויקי',
	'openidlogin' => 'כניסה או יצירת חשבון עם OpenID',
	'openidserver' => 'שרת OpenID',
	'openidxrds' => 'קובץ Yadis',
	'openidconvert' => 'ממיר OpenID',
	'openiderror' => 'שגיאת אימות',
	'openiderrortext' => 'אירעה שגיאה במהלך אימות כתובת ה־OpenID.',
	'openidconfigerror' => 'שגיאה בתצורת OpenID',
	'openidconfigerrortext' => 'תצורת איחסון ה־OpenID עבור ויקי זה אינה תקינה.
אנא התייעצו עם אחד מ[[Special:ListUsers/sysop|מפעילי המערכת]].',
	'openidpermission' => 'שגיאת הרשאות OpenID',
	'openidpermissiontext' => 'ה־OpenID שסיפקתם אינו מורשה להתחבר לשרת זה.',
	'openidcancel' => 'האימות בוטל',
	'openidcanceltext' => 'אימות כתובת ה־OpenID בוטל.',
	'openidfailure' => 'האימות נכשל',
	'openidfailuretext' => 'אימות כתובת ה־OpenID נכשל. הודעת השגיאה: "$1"',
	'openidsuccess' => 'האימות הושלם בהצלחה',
	'openidsuccesstext' => "אימות וכניסה מוצלחים בתור משתמש $1'''.

ה־OpenID שלך הוא $2 .

ניתן לההל את ה־OpenID הזה ואת הבאים אחריו ב[[Special:Preferences#mw-prefsection-openid|לשונית OpenID]] בדף ההעדפות שלך.<br />

ניתן להוסיף ססמה לחשבון ב[[Special:Preferences#mw-prefsection-personal|דף המידע האישי בהעדפות]].",
	'openidusernameprefix' => 'משתמשOpenID',
	'openidserverlogininstructions' => 'אתר $3 דורש שתכתבו את סיסמתכם לדף המשתמש $2 בכתובת $1 (זוהי כתובת ה־OpenID שלכם)',
	'openidtrustinstructions' => 'סמנו אם ברצונכם לשתף מידע עם $1.',
	'openidallowtrust' => 'מתן האפשרות ל־$1 לבטוח בחשבון משתמש זה.',
	'openidnopolicy' => 'האתר לא ציין מדיניות פרטיות.',
	'openidpolicy' => 'בדקו את <a target="_new" href="$1">מדיניות הפרטיות</a> למידע נוסף.',
	'openidoptional' => 'אופציונאלי',
	'openidrequired' => 'נדרש',
	'openidnickname' => 'כינוי',
	'openidfullname' => 'שם מלא', # Fuzzy
	'openidemail' => 'כתובת דוא"ל',
	'openidlanguage' => 'שפה',
	'openidtimezone' => 'אזור זמן',
	'openidchooselegend' => 'בחירה של שם המשתמש וחשבון',
	'openidchooseinstructions' => 'כל המשתמשים זקוקים לכינוי;
תוכלו לבחור אחת מהאפשרויות שלהלן.',
	'openidchoosenick' => 'הכינוי שלך ($1)',
	'openidchoosefull' => 'שמכם המלא ($1)', # Fuzzy
	'openidchooseurl' => 'שם שנבחר מה־OpenID שלכם ($1)',
	'openidchooseauto' => 'שם שנוצר אוטומטית ($1)',
	'openidchoosemanual' => 'השם הנבחר:',
	'openidchooseexisting' => 'חשבון קיים בוויקי זה:',
	'openidchooseusername' => 'שם משתמש:',
	'openidchoosepassword' => 'סיסמה:',
	'openidconvertinstructions' => 'טופס זה מאפשר לכם לשנות את חשבון המשתמש שלכם לשימוש בכתובת OpenID או להוסיף כתובות OpenID נוספות',
	'openidconvertoraddmoreids' => 'המרה ל־OpenID או הוספת כתובת OpenID נוספת',
	'openidconvertsuccess' => 'הומר בהצלחה ל־OpenID',
	'openidconvertsuccesstext' => 'המרתם בהצלחה את ה־OpenID שלכם ל־$1.',
	'openid-convert-already-your-openid-text' => 'זהו כבר ה־OpenID שלכם.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'זהו ה־OpenID של מישהו אחר.', # Fuzzy
	'openidalreadyloggedin' => 'אתם כבר מחוברים לחשבון.',
	'openidalreadyloggedintext' => "'''$1, {{GENDER:$1|אתה כבר מחובר|את כבר מחוברת}} לחשבון!'''

אפשר לנהל (להציג, למחוק ולהוסיף) מזהי OpenID ב[[Special:Preferences#mw-prefsection-openid|לשונית OpenID]] בדף ההעדפות שלך.",
	'openidnousername' => 'לא צוין שם משתמש.',
	'openidbadusername' => 'שם המשתמש שצוין אינו תקין.',
	'openidautosubmit' => 'דף זה מכיל טופס שאמור להשלח אוטומטית אם יש לכם JavaScript פעיל.
אם זה לא פועל, נסו את הכפתור "Continue" (המשך).',
	'openidclientonlytext' => 'אינכם יכולים להשתמש בחשבונות משתמש מוויקי זה כזהויות OpenID באתר אחר.',
	'openidloginlabel' => 'כתובת OpenID',
	'openidlogininstructions' => '{{SITENAME}} תומך בתקן [//openid.net/ OpenID] לחשבון משתמש מאוחד בין אתרי אינטרנט.
OpenID מאפשר לכם להיכנס לחשבון במגוון אתרים מבלי להשתמש בסיסמה שונה עבור כל אחד מהם.
(עיינו ב[//he.wikipedia.org/wiki/OpenID ערך על OpenID בוויקיפדיה העברית] למידע נוסף.)
ישנם [http://wiki.openid.net/Public_OpenID_providers ספקי OpenID ציבוריים] רבים, וייתכן שכבר יש לכם חשבון התומך ב־OpenID בשירות אחר.',
	'openidlogininstructions-openidloginonly' => "אתר {{SITENAME}} מאפשר כניסה ''רק'' באמצעות OpenID",
	'openidlogininstructions-passwordloginallowed' => 'אם כבר יש לכם חשבון באתר {{SITENAME}}, אפשר [[Special:UserLogin|להיכנס]] אליו עם שם המשתמש והססמה הרגילים.
כדי להשתמש ב־OpenID בעתיד, אפשר [[Special:OpenIDConvert|להמיר את חשבונכם ל־OpenID]] אחרי שיצאתם באופן רגיל.',
	'openidupdateuserinfo' => 'עדכון הפרטים האישיים שלי:',
	'openiddelete' => 'מחיקת OpenID',
	'openiddelete-text' => 'אם תלחצו על הכפתור "{{int:openiddelete-button}}", חשבון ה־OpenID בשם $1 יוסר מחשבונכם.
לא תוכלו יותר להכנס עם OpenID זה.',
	'openiddelete-button' => 'אישור',
	'openiddeleteerrornopassword' => 'אין באפשרותך למחוק את כל מזהי ה־OpenID שלך כיוון שלחשבון המשתמש שלך אין ססמה.
לא תהיה באפשרותך להיכנס ללא OpenID.',
	'openiddeleteerroropenidonly' => 'אין באפשרותך למחוק את כל מזהי ה־OpenID שלך כיוון שהרשאת הגישה שלך מותנית ב־OpenID.
לא תהיה באפשרותך להיכנס ללא OpenID.',
	'openiddelete-success' => 'ה־OpenID הוסר בהצלחה מחשבונכם.',
	'openiddelete-error' => 'ארעה שגיאה בעת הסרת ה־OpenID מחשבונכם.',
	'openid-openids-were-not-merged' => 'חשבונות OpenID לא מוזגו כאשר מוזג החשבון.',
	'prefs-openid-hide-openid' => 'הסתרת כתובת ה־OpenID בדף המשתמש, במקרה של כניסה לחשבון עם OpenID.',
	'openid-hide-openid-label' => 'הסתרת כתובת ה־OpenID בדף המשתמש, במקרה של כניסה לחשבון עם OpenID.',
	'openid-userinfo-update-on-login-label' => 'עדכון המידע הבא מכרטיס ה־OpenID עם כל כניסה לחשבון:', # Fuzzy
	'openid-associated-openids-label' => 'כתובות OpenID המשויכות לחשבונכם:',
	'openid-urls-url' => 'כתובת URL',
	'openid-urls-action' => 'פעולה',
	'openid-urls-registration' => 'זמן ההרשמה',
	'openid-urls-delete' => 'מחיקה',
	'openid-add-url' => 'הוספת OpenID חדש', # Fuzzy
	'openid-login-or-create-account' => 'כניסה או יצירת חשבון חדש',
	'openid-provider-label-openid' => 'הזינו את כתובת ה־OpenID שלכם',
	'openid-provider-label-google' => 'היכנסו באמצעות חשבונכם ב־Google',
	'openid-provider-label-yahoo' => 'היכנסו באמצעות חשבונכם ב־Yahoo',
	'openid-provider-label-aol' => 'כתבו את כינוי המסך שלכם ב־AOL',
	'openid-provider-label-other-username' => 'כתבו את שם המשתמש שלכם ב־$1',
	'specialpages-group-openid' => 'דפי שירות ומידע על המצב של OpenID',
	'right-openid-converter-access' => 'יכול להוסיף או להמיר את החשבון לשימוש בזהויות OpenId',
	'right-openid-dashboard-access' => 'גישה רגילה ללוח הבקרה של OpenID',
	'right-openid-dashboard-admin' => 'גישת מפעיל ללוח הבקרה של OpenID',
	'openid-dashboard-title' => 'לוח הבקרה של OpenID',
	'openid-dashboard-title-admin' => 'לוח הבקרה של OpenID (מפעיל)',
	'openid-dashboard-introduction' => 'הגדרות נוכחיות של OpenID ([$1 עזרה])',
	'openid-dashboard-number-openid-users' => 'מספר המשתמשים שיש להם OpenID.',
	'openid-dashboard-number-openids-in-database' => 'המספר הכולל של מזהי OpenID',
	'openid-dashboard-number-users-without-openid' => 'מספר המשתמשים שאין להם OpenID',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Siddhartha Ghai
 * @author आलोक
 */
$messages['hi'] = array(
	'openidlogin' => 'OpenID से लॉग इन करें', # Fuzzy
	'openidserver' => 'OpenID सर्वर',
	'openidxrds' => 'याडिस संचिका',
	'openidconvert' => 'OpenID कन्वर्टर',
	'openiderror' => 'प्रमाणिकरण गलती',
	'openiderrortext' => 'OpenID URL के प्रमाणिकरण में समस्या आई हैं।',
	'openidconfigerror' => 'OpenID व्यवस्थापन समस्या',
	'openidpermission' => 'OpenID अनुमति समस्या',
	'openidpermissiontext' => 'आपने दिये ओपनID से इस सर्वरपर लॉग इन नहीं किया जा सकता हैं।',
	'openidcancel' => 'प्रमाणिकरण रद्द कर दिया',
	'openidcanceltext' => 'ओपनID URL प्रमाणिकरण रद्द कर दिया गया हैं।',
	'openidfailure' => 'प्रमाणिकरण पूरा नहीं हुआ',
	'openidfailuretext' => 'ओपनID URL प्रमाणिकरण पूरा नहीं हो पाया। समस्या: "$1"',
	'openidsuccess' => 'प्रमाणिकरण पूर्ण',
	'openidsuccesstext' => 'ओपनID URL प्रमाणिकरण पूरा हो गया।', # Fuzzy
	'openidusernameprefix' => 'OpenIDसदस्य',
	'openidserverlogininstructions' => '$3 पर $2 नामसे (सदस्य पृष्ठ $1) लॉग इन करनेके लिये अपना कूटशब्द नीचे दें।', # Fuzzy
	'openidtrustinstructions' => 'आप $1 के साथ डाटा शेअर करना चाहते हैं इसकी जाँच करें।',
	'openidallowtrust' => '$1 को इस सदस्य खातेपर भरोसा रखने की अनुमति दें।',
	'openidnopolicy' => 'साइटने गोपनियता नीति नहीं बनाई हैं।',
	'openidoptional' => 'वैकल्पिक',
	'openidrequired' => 'आवश्यक',
	'openidnickname' => 'उपनाम',
	'openidfullname' => 'पूरानाम', # Fuzzy
	'openidemail' => 'इ-मेल एड्रेस',
	'openidlanguage' => 'भाषा',
	'openidchoosefull' => 'आपका पूरा नाम ($1)', # Fuzzy
	'openidchooseurl' => 'आपके OpenID से लिया एक नाम ($1)',
	'openidchooseauto' => 'एक अपनेआप बनाया नाम ($1)',
	'openidchoosemanual' => 'आपके पसंद का नाम:',
	'openidchooseexisting' => 'इस विकिपर पहले से होने वाला खाता:', # Fuzzy
	'openidchoosepassword' => 'कूटशब्द:',
	'openidconvertsuccess' => 'ओपनID में बदल दिया गया हैं',
	'openidconvertsuccesstext' => 'आपने आपका ओपनID $1 में बदल दिया हैं।',
	'openid-convert-already-your-openid-text' => 'यह आपका ही ओपनID हैं।', # Fuzzy
	'openid-convert-other-users-openid-text' => 'यह किसी औरका ओपनID हैं।', # Fuzzy
	'openidnousername' => 'सदस्यनाम दिया नहीं हैं।',
	'openidbadusername' => 'गलत सदस्यनाम दिया हैं।',
	'openidclientonlytext' => 'इस विकिपर खोले गये खाते आप अन्य साइटपर ओपनID के तौर पर इस्तेमाल नहीं कर सकतें हैं।',
	'openidloginlabel' => 'ओपनID URL',
	'prefs-openid-hide-openid' => 'अगर आपने ओपनID का इस्तेमाल करके लॉग इन किया हैं, तो आपके सदस्यपन्नेपर आपका ओपनID छुपायें।',
	'openid-hide-openid-label' => 'अगर आपने ओपनID का इस्तेमाल करके लॉग इन किया हैं, तो आपके सदस्यपन्नेपर आपका ओपनID छुपायें।',
	'openid-urls-url' => 'यू॰आर॰एल',
	'openid-urls-action' => 'कार्य',
	'openid-urls-delete' => 'हटाएँ',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'openidchoosepassword' => 'Kontra-senyas:',
);

/** Croatian (hrvatski)
 * @author Dalibor Bosits
 * @author Ex13
 */
$messages['hr'] = array(
	'openid-desc' => 'Prijava na wiki s [//openid.net/ OpenID] i prijava na druge stranice koje podržavaju OpenID s wiki suradničkim računom',
	'openidlogin' => 'Prijava s OpenID', # Fuzzy
	'openidserver' => 'OpenID poslužitelj',
	'openidxrds' => 'Yadis datoteka',
	'openidconvert' => 'OpenID pretvarač',
	'openiderror' => 'Greška pri provjeri',
	'openiderrortext' => 'Došlo je do pogreške pri provjeri OpenID URL adrese',
	'openidconfigerror' => 'Greška OpenID postavki',
	'openidconfigerrortext' => 'OpenID konfiguracija spremanja za ovaj wiki nije valjana.  
Molimo savjetujte se s [[Special:ListUsers/sysop|administratorom]].',
	'openidpermission' => 'Greška kod OpenID prava pristupa',
	'openidpermissiontext' => 'OpenIDu kojeg ste naveli nije dopušteno prijaviti se na ovaj poslužitelj.',
	'openidcancel' => 'Provjera otkazana',
	'openidcanceltext' => 'Provjera OpenID URL-a je otkazana.',
	'openidfailure' => 'Provjera nije uspjela',
	'openidfailuretext' => 'Provjera URL-a za OpenID nije uspjela. Greška: "$1"',
	'openidsuccess' => 'Provjera uspješna',
	'openidsuccesstext' => 'Provjera URL-a za OpenID je uspjela.', # Fuzzy
	'openidusernameprefix' => 'OpenIDSuradnik',
	'openidserverlogininstructions' => 'Unesite ispod Vašu lozinku da biste se prijavili na $3 kao suradnik $2 (suradnička stranica $1).', # Fuzzy
	'openidtrustinstructions' => 'Provjerite želite li dijeliti podatke s $1.',
	'openidallowtrust' => 'Omogući $1 da vjeruje ovom suradničkom računu.',
	'openidnopolicy' => 'Stranica nema navedena pravila privatnosti.',
	'openidpolicy' => 'Provjerite <a target="_new" href="$1">politiku privatnosti</a> za više informacija.',
	'openidoptional' => 'Neobavezno',
	'openidrequired' => 'Obavezno',
	'openidnickname' => 'Nadimak',
	'openidfullname' => 'Puno ime', # Fuzzy
	'openidemail' => 'E-pošta',
	'openidlanguage' => 'Jezik',
	'openidtimezone' => 'Vremenska zona',
	'openidchooselegend' => 'Odabir suradničkog imena', # Fuzzy
	'openidchooseinstructions' => 'Svi suradnici trebaju imati nadimak;
možete odabrati jedan od niže ponuđenih.',
	'openidchoosenick' => 'Vaš nadimak ($1)',
	'openidchoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'openidchooseurl' => 'Ime uzeto s Vašeg OpenID ($1)',
	'openidchooseauto' => 'Automatski generirano ime ($1)',
	'openidchoosemanual' => 'Ime po Vašem izboru:',
	'openidchooseexisting' => 'Postojeći račun na ovom wiki',
	'openidchooseusername' => 'Suradničko ime:',
	'openidchoosepassword' => 'Lozinka:',
	'openidconvertinstructions' => 'Ovaj obrazac Vam omogućuje da promijenite Vaš suradničkii račun za upotrebu URL OpenID ili da dodate više OpenID URLova',
	'openidconvertoraddmoreids' => 'Pretvorite u OpenID ili dodajte drugi OpenID URL',
	'openidconvertsuccess' => 'Uspješno pretvoreno u OpenID',
	'openidconvertsuccesstext' => 'Uspješno ste pretvorili Vaš OpenID u $1.',
	'openid-convert-already-your-openid-text' => 'To je već Vaš OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To je OpenID koji pripada nekom drugom.', # Fuzzy
	'openidalreadyloggedin' => "'''Vi ste već prijavljeni, $1!'''

Ako želite rabiti OpenID za buduće prijave, možete [[Special:OpenIDConvert|promijeniti Vaš račun za uporabu OpenID]].", # Fuzzy
	'openidnousername' => 'Nije navedeno suradničko ime.',
	'openidbadusername' => 'Navedeno je neispravno suradničko ime.',
	'openidautosubmit' => 'Ova stranica uključuje obrazac koji bi trebao biti automatski poslan ako je kod Vas omogućen JavaScript. Ako nije, pokušajte nastaviti dalje putem "Continue".',
	'openidclientonlytext' => 'Ne možete rabiti račune s ove wiki kao OpenID na drugoj stranici.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} podržava [//openid.net/ OpenID] standard za jedinstvenu prijavu između web stranica.
OpenID omogućuje da se prijavite na mnoge različite web stranice bez uporabe različitih lozinki za svaku od njih.
(Pogledajte [//en.wikipedia.org/wiki/OpenID članak na Wikipediji o OpenID-u] za više informacija.)

Ako već imate račun na {{SITENAME}}, možete se [[Special:UserLogin|prijaviti]] s Vašim korisničkim imenom i šifrom kao i uvijek.
Da bi koristili OpenID u buduće, možete [[Special:OpenIDConvert|pretvoriti vaš račun u OpenID]] nakon što se normalno prijavite.

Postoji mnogo [http://wiki.openid.net/Public_OpenID_providers javnih pružatelja usluga za OpenID], i možda već imate neki račun na drugom servisu koji podržava OpenID.', # Fuzzy
	'openidupdateuserinfo' => 'Ažuriraj moje osobne informacije:',
	'openiddelete' => 'Izbriši OpenID',
	'openiddelete-text' => 'Klikom na "{{int:openiddelete-button}}" uklonit ćete OpenID $1 s Vašeg računa.
Nećete više biti u mogućnosti prijaviti se s ovim OpenID.',
	'openiddelete-button' => 'Potvrdi',
	'openiddeleteerrornopassword' => 'Ne možete obrisati sve Vaše OpenID jer vaš račun nema lozinke.
Nećete se moći prijaviti bez OpenID.',
	'openiddeleteerroropenidonly' => 'Ne možete obrisati sve Vaše OpenID jer Vam je omogućeno da se prijavite samo sa OpenID.
Bez OpenId nećete se moći prijaviti.',
	'openiddelete-success' => 'OpenID je uspješno uklonjen iz vašeg računa.',
	'openiddelete-error' => 'Došlo je do pogreška pri uklanjanju OpenID iz Vašeg računa.',
	'prefs-openid-hide-openid' => 'Sakrij Vaš OpenID na Vašoj suradničkoj stranici, ako ste prijavljeni s OpenID.',
	'openid-hide-openid-label' => 'Sakrij Vaš OpenID na Vašoj suradničkoj stranici, ako ste prijavljeni s OpenID.',
	'openid-userinfo-update-on-login-label' => 'Ažuriraj sljedeće informacije iz OpenID identiteta svaki put kad se prijavim:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID-ovi povezani s Vašim računom:',
	'openid-urls-action' => 'Radnja',
	'openid-urls-delete' => 'Izbriši',
	'openid-add-url' => 'Dodaj novi OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Prijavite se ili napravite novi račun', # Fuzzy
	'openid-provider-label-openid' => 'Unesite Vaš OpenID URL',
	'openid-provider-label-google' => 'Prijava putem Vašeg Google računa',
	'openid-provider-label-yahoo' => 'Prijava putem Vašeg Yahoo računa',
	'openid-provider-label-aol' => 'Unesite Vaš AOL nadimak',
	'openid-provider-label-other-username' => 'Unesite Vaše $1 suradničko ime',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'openid-desc' => 'Přizjewjenje pola wikija z [//openid.net/ OpenID], a přizjewjenje pola druhich websydłow, kotrež OpenID podpěruja, z wikijowym wužiwarskim kontom',
	'openididentifier' => 'OpenID-identifikator',
	'openidlogin' => 'Z OpenID přizjewić/konto załožić',
	'openidserver' => 'Serwer OpenID',
	'openid-identifier-page-text-user' => 'Tuta strona je identifikator za wužiwarja "$1".',
	'openid-identifier-page-text-different-user' => 'Tuta strona je identifikator za wužiwarja $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'To je njepłaćiwy lokalny OpenID-identifikator.',
	'openid-server-identity-page-text' => 'To je techniska strona serwera OpenID za startowanje awtentifikacije přez OpenID. Strona nima druhi zaměr.',
	'openidxrds' => 'Yadis-dataja',
	'openidconvert' => 'Konwerter OpenID',
	'openiderror' => 'Pruwowanski zmylk',
	'openiderrortext' => 'Zmylk je při pruwowanju URL OpenID wustupił.',
	'openidconfigerror' => 'OpenID konfiguraciski zmylk',
	'openidconfigerrortext' => 'Składowanska konfiguracija OpenID zu tutón wiki je njepłaćiwy. Prošu skonsultuj administratora tutoho sydła.',
	'openidpermission' => 'Zmylk w prawach OpenID',
	'openidpermissiontext' => 'OpenID, kotryž sy podał, njesmě so za přizjewjenje pola tutoho serwera wužiwać.',
	'openidcancel' => 'Přepruwowanje přetorhnjene',
	'openidcanceltext' => 'Přepruwowanje URL OpenID bu přetorhnjene.',
	'openidfailure' => 'Přepruwowanje njeporadźiło',
	'openidfailuretext' => 'Přepruwowanje URL OpenID je so njeporadźiło. Zmylkowa zdźělenka: "$1"',
	'openidsuccess' => 'Přepruwowanje poradźiło',
	'openidsuccesstext' => "'''Přepruwowanje a přizjewjenje jako wužiwar $1 běštej wuspěšnej.'''

Twój OpenID je $2.

Tutón a dalše OpenID hodźa so na [[Special:Preferences#mw-prefsection-openid|OpenID-rajtarku]] twojich nastajenjow zrjadować.<br />
Faktulatiwne hesło hodźi so w twojim [[Special:Preferences#mw-prefsection-personal|wužiwarskim profilu]] přidać.",
	'openidusernameprefix' => 'Wužiwar OpenID',
	'openidserverlogininstructions' => '$3 sej žada, zo zapodaš swoje hesło za swoje wužiwarske konto $2 na stronje $1 (to je twój OpenID-URL)',
	'openidtrustinstructions' => 'Pruwuj, hač chceš z $1 daty dźělić.',
	'openidallowtrust' => '$1 dowolić, zo by so tutomu wužiwarskemu konće dowěriło.',
	'openidnopolicy' => 'Sydło njeje zasady za priwatnosć podało.',
	'openidpolicy' => 'Pohladaj do <a target="_new" href="$1">zasadow priwatnosće</a> za dalše informacije.',
	'openidoptional' => 'Opcionalny',
	'openidrequired' => 'Trěbny',
	'openidnickname' => 'Přimjeno',
	'openidfullname' => 'Woprawdźite mjeno',
	'openidemail' => 'E-mejlowa adresa',
	'openidlanguage' => 'Rěč',
	'openidtimezone' => 'Časowe pasmo',
	'openidchooselegend' => 'Wuběranje wužiwarskeho mjena a wužiwarskeho konta',
	'openidchooseinstructions' => 'Wšitcy wužiwarjo trjebaja přimjeno; móžěs jedne z opcijow deleka wuzwolić.',
	'openidchoosenick' => 'Twoje přimjeno ($1)',
	'openidchoosefull' => 'Twoje woprawdźite mjeno ($1)',
	'openidchooseurl' => 'Mjeno wzate z twojeho OpenID ($1)',
	'openidchooseauto' => 'Awtomatisce wutworjene mjeno ($1)',
	'openidchoosemanual' => 'Mjeno twojeje wólby:',
	'openidchooseexisting' => 'Eksistowace konto na tutym wikiju',
	'openidchooseusername' => 'wužiwarske mjeno:',
	'openidchoosepassword' => 'Hesło:',
	'openidconvertinstructions' => 'Tutón formular ći dowola swoje wužiwarske konto změnić, zo by URL OpenID wužiwał abo dalše URL OpenID přidał.',
	'openidconvertoraddmoreids' => 'OpenID konwertować abo dalši URL OpenID přidać',
	'openidconvertsuccess' => 'Wuspěšnje do OpenID konwertowany.',
	'openidconvertsuccesstext' => 'Sy swój OpenID wuspěšnje do $1 konwertował.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 je hižo z twojim kontom zwjazany. Nima zmysł jón znowa přidać.',
	'openid-convert-other-users-openid-text' => '$1 je OpenID někoho druheho. Njemóžeš OpenID druheho wužiwarja wužiwać.',
	'openidalreadyloggedin' => 'Sy hižo přizjewjeny.',
	'openidalreadyloggedintext' => "'''Sy hižo přizjewjeny, $1!'''

Móžeš OpenID na [[Special:Preferences#mw-prefsection-openid|rajtarku OpenID]] swojich nastajenjow zrjadować (sej wobhladać, zhašeć, přidać).",
	'openidnousername' => 'Žane wužiwarske mjeno podate.',
	'openidbadusername' => 'Wopačne wužiwarske mjeno podate.',
	'openidautosubmit' => 'Tuta strona wobsahuje formular, kotryž měł so awtomatisce wotpósłać, jeli sy JavaScript zmóžnił. Jeli nic, spytaj tłóčatko "Continue" (Dale).',
	'openidclientonlytext' => 'Njemóžeš konta z tutoho wikija jako OpenID na druhim sydle wužiwać.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} podpěruje standard [//openid.net/ OpenID] za jednotliwe přizjewjenje mjez websydłami. OpenID ći zmóžnja so pola wjele rozdźělnych websydłow prizjewić, bjeztoho zo dyrbiš rozdźělne hesła wužiwać. (Hlej [//en.wikipedia.org/wiki/OpenID nastawk OpenID wikipedije] za dalše informacije.)
Je wjele [//openid.net/get/ poskićowarjow OpenID], snano maš hižo konto z OpenID pola druheje słužby.',
	'openidlogininstructions-openidloginonly' => "Móžeš so na {{GRAMMAR:lokatiw|{{SITENAME}}}} ''jenož'' z OpenID přizjewić.",
	'openidlogininstructions-passwordloginallowed' => 'Jeli maš hižo konto na {{GRAMMAR:lokatiw|{{SITENAME}}}}, móžeš so ze swojim wužiwarskim mjenom a hesłom kaž přeco [[Special:UserLogin|přizjewić]].
Zo by OpenID w přichodźe wužiwał, móžeš [[Special:OpenIDConvert|swoje konto do OpenID konwertować]], po tym zo sy so normalnje přizjewił.',
	'openidupdateuserinfo' => 'Moje wosobinske informacije aktualizować:',
	'openiddelete' => 'OpenID wušmórnyć',
	'openiddelete-text' => 'Přez kliknjenje tłóčatka "{{int:openiddelete-button}}", wotstroniš OpenID $1 ze swojeho konta. Njemóžeš potom hižo so z tutym OpenID přizjewić.',
	'openiddelete-button' => 'Wobkrućić',
	'openiddeleteerrornopassword' => 'Njemóžeš wšě swoje OpenID zničić, dokelž twoje konto hesło nima.
Ty njemóhł so bjez OpenID přizjewić.',
	'openiddeleteerroropenidonly' => 'Njemóžeš wšě swoje OpenID zničić, dokelž njesměš so z OpenID přizjewić.
Ty njemóhł so bjez OpenID přizjewić.',
	'openiddelete-success' => 'OpenID je so wuspěšnje z twojeho konta wotstronił.',
	'openiddelete-error' => 'Při wotstronjenju OpenID z twojeho konto je zmylk wustupił.',
	'openid-openids-were-not-merged' => 'Při zjednoćenju wužiwarskich kontow OpenID njejsu so zjednoćili.',
	'prefs-openid-hide-openid' => 'Twój OpenID na twojej wužiwarskej stronje schować, jeli so z OpenID přizjewješ.',
	'prefs-openid-userinfo-update-on-login' => 'Aktualizacija informacijow OpenID-wužiwarja',
	'prefs-openid-associated-openids' => 'Twoje OpenID za přizjewjenje k {{GRAMMAR:datiw|{{SITENAME}}}}',
	'prefs-openid-trusted-sites' => 'Dowěryhódne sydła',
	'prefs-openid-local-identity' => 'Twój OpenID za přizjewjenje pola druhich sydłow',
	'openid-hide-openid-label' => 'Twój OpenID-URL na twojej wužiwarskej stronje schować',
	'openid-show-openid-url-on-userpage-always' => 'Twój OpenID so přeco na twojej wužiwarskej stronje pokazuje, hdyž ju wopytuješ.',
	'openid-show-openid-url-on-userpage-never' => 'Twój OpenID so na twojej wužiwarskej stronje ženje pokazuje.',
	'openid-userinfo-update-on-login-label' => 'Pola informacijow wužiwarskeho profila, kotrež so kóždy raz, hdyž so přizjewješ, aktualizuja:',
	'openid-associated-openids-label' => 'OpenID, kotrež su z twojim kontom zwjazane:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Akcija',
	'openid-urls-registration' => 'Registrowanski čas',
	'openid-urls-delete' => 'Wušmórnyć',
	'openid-add-url' => 'Nowy OpenID twojemu kontu přidać',
	'openid-trusted-sites-label' => 'Sydła, kotrymž dowěrješ a hdźež sy swój OpenID za přizjewjenje wužił:',
	'openid-trusted-sites-table-header-column-url' => 'Dowěryhódne sydła',
	'openid-trusted-sites-table-header-column-action' => 'Akcija',
	'openid-trusted-sites-delete-link-action-text' => 'Zhašeć',
	'openid-trusted-sites-delete-all-link-action-text' => 'Wšě dowěryhódne sydła zhašeć',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Zhašenje dowěryhódnych sydłow',
	'openid-trusted-sites-delete-confirmation-question' => 'Přez kliknjenje na tłóčatko "{{int:openid-trusted-sites-delete-confirmation-button-text}}" wotstroniš "$1" z lisćiny sydłow, kotrymž dowěrješ.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'Přez kliknjenje na tłóčatko "{{int:openid-trusted-sites-delete-confirmation-button-text}}" wotstroniš wšě dowěryhódne strony z lisćiny.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Wobkrućić',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1" je so wuspěšnje z lisćiny sydłow, kotrymž dowěrjeće, wotstronił.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Wšě sydła, kotrymž sy dotal dowěrił, su so wuspěšnje z twojeho wužiwarskeho profila zhašeli.',
	'openid-local-identity' => 'Twój OpenID:',
	'openid-login-or-create-account' => 'Přizjewić abo nowe konto załožić',
	'openid-provider-label-openid' => 'Zapodaj swój URL OpenID',
	'openid-provider-label-google' => 'Z pomocu twojeho konta Google so přizjewić',
	'openid-provider-label-yahoo' => 'Z pomocu twojeho konta Yahoo so přizjewić',
	'openid-provider-label-aol' => 'Zapodaj swoje wužiwarske mjeno AOL',
	'openid-provider-label-wmflabs' => 'Ze swojim kontom Wmflabs so přizjewić',
	'openid-provider-label-other-username' => 'Zapodaj swoje wužiwarske mjeno $1',
	'specialpages-group-openid' => 'Strony OpenID-słužbow a statusowych informacijow',
	'right-openid-converter-access' => 'Móže konto za wužiwanje OpenID-identitow přidać abo konwertować',
	'right-openid-dashboard-access' => 'Standardny přistup na OpenID-přehlad',
	'right-openid-dashboard-admin' => 'Administratorowy přistup na OpenID-přehlad',
	'action-openid-converter-access' => 'Twoje konto za wužiwanje identitow OpenID přidać abo konwertować',
	'action-openid-dashboard-access' => 'přistup k tafli OpenID',
	'action-openid-dashboard-admin' => 'přistup k administratorowej tafli OpenID',
	'openid-dashboard-title' => 'OpenID-přehlad',
	'openid-dashboard-title-admin' => 'OpenID-přehlad (administrator)',
	'openid-dashboard-introduction' => 'Aktualne nastajenja rozšěrjenja OpenID ([$1 pomoc])',
	'openid-dashboard-number-openid-users' => 'Ličba wužiwarjow z OpenID',
	'openid-dashboard-number-openids-in-database' => 'Ličba wšěch OpenID (dohromady)',
	'openid-dashboard-number-users-without-openid' => 'Ličba wužiwarjow bjez OpenID',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 * @author Tgr
 */
$messages['hu'] = array(
	'openid-desc' => 'Bejelentkezés [//openid.net/ OpenID] azonosítóval, és más OpenID-kompatibilis weboldalak használata a wikis azonosítóval',
	'openidlogin' => 'Bejelentkezés / fiók létrehozása OpenID-vel',
	'openidserver' => 'OpenID szerver',
	'openidxrds' => 'Yadis fájl',
	'openidconvert' => 'OpenID konverter',
	'openiderror' => 'Hiba az ellenőrzés során',
	'openiderrortext' => 'Az OpenID URL elenőrzése nem sikerült.',
	'openidconfigerror' => 'OpenID konfigurációs hiba',
	'openidconfigerrortext' => 'A wiki OpenID tárhelyének beállítása érvénytelen.
Lépj kapcsolatba egy [[Special:ListUsers/sysop|adminisztrátorral]].',
	'openidpermission' => 'OpenID jogosultság hiba',
	'openidpermissiontext' => 'Ezzel az OpenID-vel nem vagy jogosult belépni erre a wikire.',
	'openidcancel' => 'Ellenőrzés visszavonva',
	'openidcanceltext' => 'Az OpenID URL ellenőrzése vissza lett vonva.',
	'openidfailure' => 'Ellenőrzés sikertelen',
	'openidfailuretext' => 'Az OpenID URL ellenőrzése nem sikerült. A kapott hibaüzenet: „$1”',
	'openidsuccess' => 'Sikeres ellenőrzés',
	'openidsuccesstext' => 'Az OpenID URL ellenőrzése sikerült.', # Fuzzy
	'openidusernameprefix' => 'OpenID-s szerkesztő',
	'openidserverlogininstructions' => 'Add meg a jelszót a(z) $3 oldalra való bejelentkezéshez $2 néven (userlap: $1).', # Fuzzy
	'openidtrustinstructions' => 'Adatok megosztása a(z) $1 oldallal.',
	'openidallowtrust' => '$1 megbízhat ebben a felhasználóban.',
	'openidnopolicy' => 'Az oldalnak nincsen adatvédelmi szabályzata.',
	'openidpolicy' => 'További információkért lásd az <a target="_new" href="$1">adatvédelmi szabályzatot</a>.',
	'openidoptional' => 'Nem kötelező',
	'openidrequired' => 'Kötelező',
	'openidnickname' => 'Felhasználónév',
	'openidfullname' => 'Teljes név', # Fuzzy
	'openidemail' => 'E-mail cím:',
	'openidlanguage' => 'Nyelv',
	'openidtimezone' => 'Időzóna',
	'openidchooselegend' => 'Felhasználónév és fiók választás',
	'openidchooseinstructions' => 'Mindenkinek választania kell egy felhasználónevet; választhatsz egyet az alábbi opciókból.',
	'openidchoosenick' => 'A nickneved ($1)',
	'openidchoosefull' => 'A teljes neved ($1)', # Fuzzy
	'openidchooseurl' => 'Az OpenID-dből vett név ($1)',
	'openidchooseauto' => 'Egy automatikusan generált név ($1)',
	'openidchoosemanual' => 'Egy általad megadott név:',
	'openidchooseexisting' => 'Egy létező felhasználónév ezen a wikin',
	'openidchooseusername' => 'Felhasználónév:',
	'openidchoosepassword' => 'Jelszó:',
	'openidconvertinstructions' => 'Ezzel az űrlappal átállíthatod a felhasználói fiókodat, hogy egy OpenId URL-t használjon, vagy hozzáadhatsz több OpenID URL-t',
	'openidconvertoraddmoreids' => 'Átalakítás OpenID-ra, vagy másik OpenID URL hozzáadása',
	'openidconvertsuccess' => 'Sikeres átállás OpenID-re',
	'openidconvertsuccesstext' => 'Sikeresen átállítottad az OpenID-det erre: $1.',
	'openid-convert-already-your-openid-text' => 'Ez az OpenID már a tiéd.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Ez az OpenID másvalakié.', # Fuzzy
	'openidalreadyloggedin' => "'''Már be vagy jelentkezve, $1!'''

Ha ezentúl az OpenID-del akarsz bejelentkezni, [[Special:OpenIDConvert|konvertálhatod a felhasználói fiókodat OpenID-re]].", # Fuzzy
	'openidnousername' => 'Nem adtál meg felhasználónevet.',
	'openidbadusername' => 'Rossz felhasználónevet adtál meg.',
	'openidautosubmit' => 'Az ezen az oldalon lévő űrlap automatikusan elküldi az adatokat, ha a JavaScript engedélyezve van. Ha nem, használd a "Continue" (Tovább) gombot.',
	'openidclientonlytext' => 'Az itteni felhasználónevedet nem használhatod OpenID-ként más weboldalon.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => 'A(z) {{SITENAME}} támogatja az [//openid.net/ OpenID] szabványt a weboldalak közötti egységes bejelentkezéshez.
A OpenID lehetővé teszi, hogy számos különböző weboldalra jelentkezz be úgy, hogy csak egyszer kell megadnod a jelszavadat. (Lásd [//hu.wikipedia.org/wiki/OpenID a Wikipédia OpenID cikkét] további információkért.)

Ha már regisztráltál korábban, [[Special:UserLogin|bejelentkezhetsz]] a felhasználóneveddel és a jelszavaddal, ahogy eddig is. Ha a továbbiakban OpenID-t szeretnél használni, [[Special:OpenIDConvert|állítsd át a felhasználói fiókodat OpenID-re]] miután bejelentkeztél.

Számos [//openid.net/get/ OpenID szolgáltató] van, lehetséges, hogy van már OpenID-fiókod egy másik weboldalon.', # Fuzzy
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''csak'' OpenID-s bejelentkezést engedélyez.",
	'openidupdateuserinfo' => 'Személyes információk frissítése:',
	'openiddelete' => 'OpenID törlése',
	'openiddelete-text' => 'A {{int:openiddelete-button}} gomb megnyomásakor eltávolítod a következő OpenID-t a felhasználói fiókodból: $1.
Ezután többé nem fogsz tudni bejelentkezni ezzel az OpenID-vel.',
	'openiddelete-button' => 'Megerősítés',
	'openiddeleteerrornopassword' => 'Nem törölheted az összes OpenID-d, mert a felhasználói fiókodnak nincs jelszava.
Nem tudnál bejelentkezni OpenID nélkül.',
	'openiddeleteerroropenidonly' => 'Nem törölheted az összes OpenID-d, mert csak azzal jelentkezhetsz be.
Nem tudnál bejelentkezni OpenID nélkül.',
	'openiddelete-success' => 'Az OpenID sikeresen eltávolítva a felhasználói fiókodból.',
	'openiddelete-error' => 'Hiba történt az OpenID felhasználói fiókodból való eltávolításakor.',
	'prefs-openid-hide-openid' => 'Az OpenID-d elrejtése a felhasználói lapodon, amikor OpenID-vel jelentkezel be.',
	'openid-hide-openid-label' => 'Az OpenID-d elrejtése a felhasználói lapodon, amikor OpenID-vel jelentkezel be.',
	'openid-userinfo-update-on-login-label' => 'A következő információ frissítése az OpenID fiókom alapján minden bejelentkezéskor:', # Fuzzy
	'openid-associated-openids-label' => 'A felhasználói fiókodhoz kapcsolt OpenID-k:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Művelet',
	'openid-urls-registration' => 'Regisztráció ideje',
	'openid-urls-delete' => 'Törlés',
	'openid-add-url' => 'Új OpenID hozzáadása', # Fuzzy
	'openid-login-or-create-account' => 'Bejelentkezés vagy új felhasználói fiók létrehozása',
	'openid-provider-label-openid' => 'OpenID URL megadása',
	'openid-provider-label-google' => 'Bejelentkezés a Google felhasználói fiókoddal',
	'openid-provider-label-yahoo' => 'Bejelentkezés a Yahoo felhasználói fiókoddal',
	'openid-provider-label-aol' => 'Add meg az AOL felhasználóneved',
	'openid-provider-label-other-username' => 'Add meg a(z) $1 felhasználóneved',
	'openid-dashboard-number-openids-in-database' => 'OpenID-k száma (összes)',
	'openid-dashboard-number-users-without-openid' => 'OpenID nélküli felhasználók száma',
);

/** Interlingua (interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'openid-desc' => 'Aperir un session in le wiki con [//openid.net/ OpenID], e aperir un session in altere sitos web usante OpenID con un conto de usator del wiki',
	'openidlogin' => 'Aperir session / crear conto con OpenID',
	'openidserver' => 'Servitor OpenID',
	'openidxrds' => 'File Yadis',
	'openidconvert' => 'Convertitor de OpenID',
	'openiderror' => 'Error de verification',
	'openiderrortext' => 'Un error occurreva durante le verification del adresse URL de OpenID.',
	'openidconfigerror' => 'Error de configuration de OpenID',
	'openidconfigerrortext' => 'Le configuration de immagazinage OpenID pro iste wiki es invalide.
Per favor contacta un [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Error de permissiones OpenID',
	'openidpermissiontext' => 'Le OpenID que tu forniva non ha le permission de aperir sessiones in iste servitor.',
	'openidcancel' => 'Verification cancellate',
	'openidcanceltext' => 'Le verification del adresse URL OpenID ha essite cancellate.',
	'openidfailure' => 'Verification fallite',
	'openidfailuretext' => 'Le verification del adresse URL de OpenID ha fallite. Message de error: "$1"',
	'openidsuccess' => 'Verification succedite',
	'openidsuccesstext' => "'''Verification e apertura de session succedite pro le usator $1'''.

Tu OpenID es $2 .

Iste OpenID e alteres (si presente) pote esser gerite in le [[Special:Preferences#mw-prefsection-openid|scheda OpenID]] de tu preferentias.<br />
Es possibile specificar un contrasigno pro le conto in tu [[Special:Preferences#mw-prefsection-personal|profilo de usator]].",
	'openidusernameprefix' => 'Usator OpenID',
	'openidserverlogininstructions' => 'Le sito $3 requesta que tu entra le contrasigno de tu conto "$2", pagina $1 (isto es tu URL de OpenID).',
	'openidtrustinstructions' => 'Controla si tu vole divider datos con $1.',
	'openidallowtrust' => 'Permitte que $1 se fide a iste conto de usator.',
	'openidnopolicy' => 'Le sito non ha specificate un politica de confidentialitate.',
	'openidpolicy' => 'Consulta le <a target="_new" href="$1">politica de confidentialitate</a> pro plus informationes.',
	'openidoptional' => 'Optional',
	'openidrequired' => 'Requirite',
	'openidnickname' => 'Pseudonymo',
	'openidfullname' => 'Nomine complete', # Fuzzy
	'openidemail' => 'Adresse de e-mail',
	'openidlanguage' => 'Lingua',
	'openidtimezone' => 'Fuso horari',
	'openidchooselegend' => 'Selection del nomine de usator e del conto',
	'openidchooseinstructions' => 'Tote le usatores require un pseudonymo;
tu pote seliger un del optiones in basso.',
	'openidchoosenick' => 'Tu pseudonymo ($1)',
	'openidchoosefull' => 'Tu nomine complete ($1)', # Fuzzy
	'openidchooseurl' => 'Un nomine seligite de tu OpenID ($1)',
	'openidchooseauto' => 'Un nomine automaticamente generate ($1)',
	'openidchoosemanual' => 'Un nomine de tu preferentia:',
	'openidchooseexisting' => 'Un conto existente in iste wiki',
	'openidchooseusername' => 'Nomine de usator:',
	'openidchoosepassword' => 'Contrasigno:',
	'openidconvertinstructions' => 'Iste formulario te permitte cambiar tu conto de usator pro usar un URL de OpenID o adder altere URL de OpenID.',
	'openidconvertoraddmoreids' => 'Converter in OpenID o adder un altere URL de OpenID',
	'openidconvertsuccess' => 'Conversion a OpenID succedite',
	'openidconvertsuccesstext' => 'Tu ha convertite con successo tu OpenID a $1.',
	'openid-convert-already-your-openid-text' => 'Isto es ja tu OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Isto es le OpenID de alcuno altere.', # Fuzzy
	'openidalreadyloggedin' => 'Tu es jam authenticate.',
	'openidalreadyloggedintext' => "'''Tu es jam authenticate, \$1!'''

Tu pote gerer (vider, deler, adder altere) OpenIDs in le [[Special:Preferences#mw-prefsection-openid|scheda \"OpenID\"]] de tu preferentias.",
	'openidnousername' => 'Nulle nomine de usator specificate.',
	'openidbadusername' => 'Mal nomine de usator specificate.',
	'openidautosubmit' => 'Iste pagina include un formulario que debe esser submittite automaticamente si tu ha JavaScript activate.
Si non, prova le button "Continue" (Continuar).',
	'openidclientonlytext' => 'Tu non pote usar contos ab iste wiki como contos OpenID in un altere sito.',
	'openidloginlabel' => 'Adresse URL de OpenID',
	'openidlogininstructions' => '{{SITENAME}} supporta le standard [//openid.net/ OpenID] pro contos unificate inter sitos web.
OpenID permitte aperir session in multe diverse sitos web sin usar un contrasigno differente pro cata un.
(Vide [//ia.wikipedia.org/wiki/OpenID le articulo super OpenID in Wikipedia] pro plus informationes.)
Il ha multe [//openid.net/get/ fornitores de OpenID], e tu pote jam disponer de un conto con capacitate OpenID in un altere servicio.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''solmente'' permitte aperir session con OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Si tu ha jam un conto in {{SITENAME}}, tu pote [[Special:UserLogin|aperir session]] con tu nomine de usator e contrasigno como de costume.
Pro usar OpenID in le futuro, tu pote [[Special:OpenIDConvert|converter tu conto a OpenID]] post haber aperite session del modo normal.',
	'openidupdateuserinfo' => 'Actualisar mi informationes personal:',
	'openiddelete' => 'Deler OpenID',
	'openiddelete-text' => 'Per cliccar le button "{{int:openiddelete-button}}", tu removera le OpenID $1 de tu conto.
Tu non potera plus aperir un session con iste OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'Tu non pote deler tote tu OpenIDs proque tu conto non ha un contrasigno.
Il esserea impossibile aperir un session sin OpenID.',
	'openiddeleteerroropenidonly' => 'Tu non pote deler tote tu OpenIDs proque tu ha le permission de authenticar te solmente con OpenID.
Il esserea impossibile aperir un session sin OpenID.',
	'openiddelete-success' => 'Le OpenID ha essite removite de tu conto con successo.',
	'openiddelete-error' => 'Un error occurreva durante le remotion del OpenID de tu conto.',
	'openid-openids-were-not-merged' => 'Solmente le contos de usator, non le OpenID(s), ha essite fusionate.',
	'prefs-openid-hide-openid' => 'Celar tu OpenID in tu pagina de usator, si tu aperi un session con OpenID.',
	'openid-hide-openid-label' => 'Celar tu OpenID in tu pagina de usator, si tu aperi un session con OpenID.',
	'openid-userinfo-update-on-login-label' => 'Actualisar le sequente informationes ab mi personage OpenID cata vice que io aperi un session:', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDs associate con tu conto:',
	'openid-urls-action' => 'Action',
	'openid-urls-registration' => 'Hora de registration',
	'openid-urls-delete' => 'Deler',
	'openid-add-url' => 'Adder un nove OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Aperir session o crear nove conto',
	'openid-provider-label-openid' => 'Entra le URL de tu OpenID',
	'openid-provider-label-google' => 'Aperir session con tu conto de Google',
	'openid-provider-label-yahoo' => 'Aperir session con tu conto de Yahoo',
	'openid-provider-label-aol' => 'Entra tu pseudonymo de AOL',
	'openid-provider-label-other-username' => 'Entra tu nomine de usator de $1',
	'specialpages-group-openid' => 'Paginas de servicio OpenID e informationes de stato',
	'right-openid-converter-access' => 'Pote adder o converter su conto pro usar identitates OpenID',
	'right-openid-dashboard-access' => 'Accesso standard al pannello de instrumentos OpenID',
	'right-openid-dashboard-admin' => 'Accesso administrator al pannello de instrumentos OpenID',
	'openid-dashboard-title' => 'Pannello de instrumentos OpenID',
	'openid-dashboard-title-admin' => 'Pannello de instrumentos OpenID (administrator)',
	'openid-dashboard-introduction' => 'Le configuration actual del extension OpenID ([$1 adjuta])',
	'openid-dashboard-number-openid-users' => 'Numero de usatores con OpenID',
	'openid-dashboard-number-openids-in-database' => 'Numero de OpenIDs (total)',
	'openid-dashboard-number-users-without-openid' => 'Numero de usatores sin OpenID',
);

/** Indonesian (Bahasa Indonesia)
 * @author -iNu-
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Kenrick95
 * @author Rex
 */
$messages['id'] = array(
	'openid-desc' => 'Masuk log ke wiki dengan sebuah [//openid.net/ OpenID], dan masuk log ke situs web lain yang berbasis OpenID dengan sebuah akun pengguna wiki',
	'openidlogin' => 'Masuk log/ buat akun dengan OpenID',
	'openidserver' => 'Server OpenID',
	'openidxrds' => 'berkas Yadis',
	'openidconvert' => 'Konverter OpenID',
	'openiderror' => 'Verifikasi gagal',
	'openiderrortext' => 'Sebuah kesalahan terjadi ketika melakukan verifikasi atas URL OpenID.',
	'openidconfigerror' => 'Kesalahan konfigurasi OpenID',
	'openidconfigerrortext' => 'Konfigurasi penyimpanan OpenID di wiki ini tidak sah.
Silakan hubungi salah satu [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Izin OpenID tidak sah',
	'openidpermissiontext' => 'OpenID yang Anda berikan tidak diperbolehkan untuk mengakses server ini.',
	'openidcancel' => 'Verifikasi dibatalkan',
	'openidcanceltext' => 'Verifikasi URL OpenID tersebut dibatalkan.',
	'openidfailure' => 'Verifikasi gagal',
	'openidfailuretext' => 'Verifikasi dari URL OpenID tersebut gagal.
Pesan kesalahan: "$1"',
	'openidsuccess' => 'Verifikasi berhasil',
	'openidsuccesstext' => "''Verifikasi berhasil dan masuk log sebagai pengguna $1'''.

OpenID Anda adalah $2.

Ini dan OpenID selanjutnya, dan sebuah kata sandi akun opsional, dapat dikelola di [[Special:Preferences|preferensi]] Anda.", # Fuzzy
	'openidusernameprefix' => 'PenggunaOpenID',
	'openidserverlogininstructions' => '$3 meminta Anda memasukkan sandi untuk halaman pengguna $2 Anda di $1 (ini adalah URL OpenID Anda)',
	'openidtrustinstructions' => 'Berikan tanda cek jika Anda ingin berbagi data dengan $1.',
	'openidallowtrust' => 'Izinkan $1 untuk mempercayai akun pengguna ini.',
	'openidnopolicy' => 'Situs ini tidak memiliki kebijakan privasi.',
	'openidpolicy' => 'Lihat <a target="_new" href="$1">kebijakan privasi</a> untuk informasi lebih lanjut.',
	'openidoptional' => 'Opsional',
	'openidrequired' => 'Diperlukan',
	'openidnickname' => 'Nama panggilan',
	'openidfullname' => 'Nama lengkap', # Fuzzy
	'openidemail' => 'Alamat surel',
	'openidlanguage' => 'Bahasa',
	'openidtimezone' => 'Zona waktu',
	'openidchooselegend' => 'Pilihan nama pengguna dan akun',
	'openidchooseinstructions' => 'Semua pengguna memerlukan sebuah nama panggilan;
Anda dapat memilih dari salah satu opsi berikut.',
	'openidchoosenick' => 'Nama panggilan anda ($1)',
	'openidchoosefull' => 'Nama lengkap Anda ($1)', # Fuzzy
	'openidchooseurl' => 'Sebuah nama diambil dari OpenID Anda ($1)',
	'openidchooseauto' => 'Nama yang dibuat secara otomatis ($1)',
	'openidchoosemanual' => 'Nama pilihan Anda:',
	'openidchooseexisting' => 'Akun yang telah ada di wiki ini',
	'openidchooseusername' => 'Nama pengguna:',
	'openidchoosepassword' => 'Kata sandi:',
	'openidconvertinstructions' => 'Formulir ini mengijinkan Anda untuk mengganti akun pengguna Anda menjadi OpenID atau menambahkan pranala OpenID',
	'openidconvertoraddmoreids' => 'Konversi ke OpenID atau tambahkan URL OpenID yang lain',
	'openidconvertsuccess' => 'Berhasil dikonversi menjadi OpenID',
	'openidconvertsuccesstext' => 'Anda telah berhasil mengkonversi OpenID Anda menjadi $1.',
	'openid-convert-already-your-openid-text' => 'Sudah merupakan OpenID Anda.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Itu adalah OpenID orang lain.', # Fuzzy
	'openidalreadyloggedin' => "'''Anda telah masuk log, $1!'''

Jika Anda ingin menggunakan OpenID untuk masuk log di masa yang akan datang, Anda dapat [[Special:OpenIDConvert|mengkonversi akun Anda menjadi OpenID]].", # Fuzzy
	'openidnousername' => 'Tidak ada nama pengguna diberikan.',
	'openidbadusername' => 'Nama pengguna salah.',
	'openidautosubmit' => 'Dalam halaman ini terdapat formulir yang akan dikirimkan secara otomatis jika Anda mengaktifkan JavaScript.
Jika tidak, coba tombol "Continue" (Lanjutkan).',
	'openidclientonlytext' => 'Anda tidak dapat menggunakan akun dari wiki ini sebagai OpenID di situs lain.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} mendukung standar [//openid.net/ OpenID] untuk info masuk tunggal lintas situs web.
OpenID mengizinkan Anda untuk masuk log di berbagai situs web tanpa harus memasukkan kata sandi yang berbeda.
(Lihat [//id.wikipedia.org/wiki/OpenID artikel Wikipedia mengenai OpenID] untuk informasi lebih lanjut.)
Ada banyak [//openid.net/get penyedia OpenID] dan Anda mungkin telah memiliki akun OpenID di salah satu layanan situs lain.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''hanya'' mengizinkan untuk masuk log dengan OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Jika Anda sudah memiliki akun di {{SITENAME}}, Anda dapat [[Special:UserLogin|masuk]] dengan nama pengguna dan sandi Anda seperti biasa.
Untuk menggunakan OpenID selanjutnya, Anda dapat [[Special:OpenIDConvert|mengubah akun menjadi OpenID]] setelah Anda masuk seperti biasa.',
	'openidupdateuserinfo' => 'Mutakhirkan informasi pribadi saya:',
	'openiddelete' => 'Hapus OpenID',
	'openiddelete-text' => 'Dengan menekan tombol "{{int:openiddelete-button}}", Anda akan menghapuskan OpenID $1 dari akun Anda.
Anda tidak akan dapat masuk log lagi dengan OpenID ini.',
	'openiddelete-button' => 'Konfirmasi',
	'openiddeleteerrornopassword' => 'Anda tidak dapat menghapus semua OpenID Anda karena akun Anda tidak diberi kata sandi.
Anda tidak akan dapat masuk log tanpa OpenID.',
	'openiddeleteerroropenidonly' => 'Anda tidak dapat menghapus semua OpenIDs Anda karena Anda hanya diijinkan masuk log dengan OpenID. 
Anda tidak akan dapat masuk log tanpa OpenID.',
	'openiddelete-success' => 'OpenID telah dihapus dari akun Anda.',
	'openiddelete-error' => 'Terjadi kesalahan saat berusaha menghapus OpenID dari akun Anda.',
	'prefs-openid-hide-openid' => 'Sembunyikan URL OpenID Anda di halaman pengguna Anda, jika Anda masuk log dengan OpenID.',
	'openid-hide-openid-label' => 'Sembunyikan URL OpenID Anda di halaman pengguna Anda, jika Anda masuk log dengan OpenID.',
	'openid-userinfo-update-on-login-label' => 'Mutakhirkan informasi dari persona OpenID berikut setiap kali saya masuk log:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID yang dihubungkan dengan akun Anda:',
	'openid-urls-action' => 'Tindakan',
	'openid-urls-delete' => 'Hapus',
	'openid-add-url' => 'Tambahkan OpenID baru', # Fuzzy
	'openid-login-or-create-account' => 'Log Masuk atau Daftarkan Akun Baru', # Fuzzy
	'openid-provider-label-openid' => 'Masukkan URL OpenID Anda',
	'openid-provider-label-google' => 'Log masuk mengunakan akun Google Anda',
	'openid-provider-label-yahoo' => 'Log masuk mengunakan akun Yahoo Anda',
	'openid-provider-label-aol' => 'Masukkan nama pengguna AOL Anda',
	'openid-provider-label-other-username' => 'Masukkan nama pengguna $1 Anda',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'openidoptional' => 'I cho, ka I chogị',
	'openidchoosepassword' => 'Okwúngáfè:',
	'openid-urls-delete' => 'Kàcha',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'openidchoosepassword' => 'Lykilorð:',
);

/** Italian (italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Civvì
 * @author Darth Kule
 * @author McDutchie
 * @author Nemo bis
 * @author Pietrodn
 * @author Stefano-c
 */
$messages['it'] = array(
	'openid-desc' => 'Effettua il login alla wiki con [//openid.net/ OpenID] e agli altri siti web che utilizzano OpenID con un account wiki',
	'openididentifier' => 'Identificatore OpenID',
	'openidlogin' => 'Entra / crea account con OpenID',
	'openidserver' => 'server OpenID',
	'openid-identifier-page-text-user' => 'Questa pagina è l\'identificatore per utente "$1".',
	'openidxrds' => 'file Yadis',
	'openidconvert' => 'convertitore OpenID',
	'openiderror' => 'Errore di verifica',
	'openiderrortext' => "Si è verificato un errore durante la verifica dell'URL OpenID.",
	'openidconfigerror' => 'Errore nella configurazione OpenID',
	'openidconfigerrortext' => 'La configurazione della memorizzazione di OpenID per questa wiki non è valida.
Per favore consulta un [[Special:ListUsers/sysop|amministratore]].',
	'openidpermission' => 'Errore nei permessi OpenID',
	'openidpermissiontext' => "L'accesso a questo server non è consentito all'OpenID indicato.",
	'openidcancel' => 'Verifica annullata',
	'openidcanceltext' => "La verifica dell'URL OpenID è stata annullata.",
	'openidfailure' => 'Verifica fallita',
	'openidfailuretext' => 'La verifica dell\'URL OpenID è fallita. Messaggio di errore: "$1"',
	'openidsuccess' => 'Verifica effettuata',
	'openidsuccesstext' => "'''La verifica è stata effettuata con successo ed ora sei connesso come utente $1'''.

Il tuo OpenID è $2.

Questo ed altri OpenID opzionali possono essere gestiti dalla [[Special:Preferences#mw-prefsection-openid|scheda OpenID]] nelle tue preferenze.<br />
È possibile aggiungere una password opzionale dal tuo [[Special:Preferences#mw-prefsection-personal|profilo utente]].",
	'openidusernameprefix' => 'Utente OpenID',
	'openidserverlogininstructions' => "$3 richiede di inserire la tua password per l'utente $2 pagina $1 (questo è il tuo URL OpenID).",
	'openidtrustinstructions' => 'Controlla se desideri condividere i dati con $1.',
	'openidallowtrust' => 'Permetti a $1 di fidarsi di questo account utente.',
	'openidnopolicy' => 'Il sito non ha specificato una politica relativa alla privacy.',
	'openidpolicy' => 'Controlla la <a target="_new" href="$1">politica relativa alla privacy</a> per maggiori informazioni.',
	'openidoptional' => 'Opzionale',
	'openidrequired' => 'Obbligatorio',
	'openidnickname' => 'Nickname',
	'openidfullname' => 'Nome vero',
	'openidemail' => 'Indirizzo e-mail',
	'openidlanguage' => 'Lingua',
	'openidtimezone' => 'Fuso orario',
	'openidchooselegend' => "Scelta del nome utente e dell'account",
	'openidchooseinstructions' => 'Tutti gli utenti hanno bisogno di un nickname;
puoi sceglierne uno dalle opzioni seguenti.',
	'openidchoosenick' => 'Il tuo nickname ($1)',
	'openidchoosefull' => 'Il tuo vero nome ($1)',
	'openidchooseurl' => 'Un nome scelto dal tuo OpenID ($1)',
	'openidchooseauto' => 'Un nome auto-generato ($1)',
	'openidchoosemanual' => 'Un nome di tua scelta:',
	'openidchooseexisting' => 'Un account esistente su questa wiki',
	'openidchooseusername' => 'Nome utente:',
	'openidchoosepassword' => 'Password:',
	'openidconvertinstructions' => 'Questo modulo permette di cambiare il proprio account per usare un URL OpenID o aggiungere altri URL OpenID.',
	'openidconvertoraddmoreids' => 'Converti in OpenID o aggiungi un altro URL OpenID',
	'openidconvertsuccess' => 'Convertito con successo a OpenID',
	'openidconvertsuccesstext' => 'Il tuo OpenID è stato convertito con successo a $1.',
	'openid-convert-already-your-openid-text' => "L'OpenID $1 è già associato alla tua utenza. Non ha senso aggiungerlo di nuovo.",
	'openid-convert-other-users-openid-text' => "$1 è l'OpenID di qualcun altro. Non puoi utilizzare l'OpenID di un altro utente.",
	'openidalreadyloggedin' => "Hai già effettuato l'accesso.",
	'openidalreadyloggedintext' => "'''Hai già effettuato l'accesso, $1!'''

Puoi gestire (vedere, cancellare, aggiungere altri) OpenID dalla [[Special:Preferences#mw-prefsection-openid|scheda OpenID]] nelle tue preferenze.",
	'openidnousername' => 'Nessun nome utente specificato.',
	'openidbadusername' => 'Nome utente specificato errato.',
	'openidautosubmit' => 'Questa pagina include un modulo che dovrebbe essere inviato automaticamente se hai JavaScript attivato. Se non lo è, prova a premere il pulsante "Continue".',
	'openidclientonlytext' => 'Non puoi usare gli account di questa wiki come OpenID su un altro sito.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} supporta lo standard [//openid.net/ OpenID] per il login unico sui siti web.
OpenID consente di effettuare la registrazione su molti siti web senza dover utilizzare una password diversa per ciascuno.
(Leggi la [//it.wikipedia.org/wiki/OpenID voce di Wikipedia su OpenID] per maggiori informazioni.)

Esistono molti [//openid.net/get/ Provider OpenID]; è possibile che tu abbia già un account abilitato a OpenID su un altro servizio.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} consente ''solamente'' l'accesso con OpenID.",
	'openidlogininstructions-passwordloginallowed' => "Chi possiede già un account su {{SITENAME}} può effettuare [[Special:UserLogin|l'accesso]] con il proprio nome utente e la propria password come al solito. Per utilizzare OpenID in futuro, si può [[Special:OpenIDConvert|convertire il proprio account a OpenID]] dopo aver effettuato normalmente il login.",
	'openidupdateuserinfo' => 'Aggiorna i miei dati personali:',
	'openiddelete' => 'Cancella OpenID',
	'openiddelete-text' => 'Facendo clic sul pulsante "{{int:openiddelete-button}}" verrà rimosso l\'OpenID $1 dal proprio account.
Non si potrà più effettuare il login con questo OpenID.',
	'openiddelete-button' => 'Conferma',
	'openiddeleteerrornopassword' => 'Non è possibile eliminare tutti i tuoi OpenID perché il tuo account non ha password. 
Non saresti in grado di accedere senza un OpenID.',
	'openiddeleteerroropenidonly' => 'Non puoi eliminare tutti i tuoi OpenID perché è permesso collegarsi sono tramite OpenID. 
Non saresti in grado di accedere senza un OpenID.',
	'openiddelete-success' => "L'OpenID è stato rimosso con successo dall'account.",
	'openiddelete-error' => "Si è verificato un errore durante la rimozione dell'account OpenID.",
	'openid-openids-were-not-merged' => 'Gli OpenID non sono uniti quando vengono uniti gli account utenti.',
	'prefs-openid-hide-openid' => 'Nascondi il tuo OpenID sulla tua pagina utente, se effettui il login con OpenID.',
	'prefs-openid-trusted-sites' => 'Siti attendibili',
	'openid-hide-openid-label' => 'Nascondi il tuo OpenID sulla tua pagina utente.',
	'openid-show-openid-url-on-userpage-never' => 'Il tuo OpenID non è mai mostrato nella tua pagina utente.',
	'openid-userinfo-update-on-login-label' => 'Informazioni del profilo utente che sono automaticamente aggiornate dalla persona OpenID a ogni accesso:',
	'openid-associated-openids-label' => 'OpenID associati al proprio account:',
	'openid-urls-action' => 'Azione',
	'openid-urls-registration' => 'Data di registrazione',
	'openid-urls-delete' => 'Cancella',
	'openid-add-url' => 'Aggiungi un nuovo OpenID alla tua utenza',
	'openid-local-identity' => 'Il tuo OpenID:',
	'openid-login-or-create-account' => 'Entra o crea un nuovo account',
	'openid-provider-label-openid' => "Inserisci l'URL del tuo OpenID",
	'openid-provider-label-google' => 'Accedi utilizzando il tuo account Google',
	'openid-provider-label-yahoo' => 'Accedi utilizzando il tuo account Yahoo',
	'openid-provider-label-aol' => 'Inserisci il tuo screenname AOL',
	'openid-provider-label-other-username' => 'Inserisci il tuo $1 nome utente',
	'specialpages-group-openid' => 'Pagine di servizio ed informazioni sullo stato per OpenID',
	'right-openid-converter-access' => 'Può aggiungere o convertire il suo account per usare identità OpenID',
	'right-openid-dashboard-access' => 'Accesso standard al cruscotto OpenID',
	'right-openid-dashboard-admin' => 'Accesso amministrativo al cruscotto OpenID',
	'openid-dashboard-title' => 'Cruscotto OpenID',
	'openid-dashboard-title-admin' => 'Cruscotto OpenID per amministratori',
	'openid-dashboard-introduction' => "Le impostazioni attuali per l'estensione OpenID ([$1 aiuto])",
	'openid-dashboard-number-openid-users' => 'Numero di utenti con OpenID',
	'openid-dashboard-number-openids-in-database' => 'Numero di OpenID (totale)',
	'openid-dashboard-number-users-without-openid' => 'Numero di utenti senza OpenID',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author Schu
 * @author Shirayuki
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'openid-desc' => '[//openid.net/ OpenID] でウィキにログインできるようにする。これをウィキで有効にすると、ウィキの利用者アカウントの URL を OpenID として他の OpenID 対応サイトにもログインできる',
	'openididentifier' => 'OpenID 識別子',
	'openidlogin' => 'OpenID によるログイン/アカウント作成',
	'openidserver' => 'OpenID サーバー',
	'openid-identifier-page-text-user' => 'このページは利用者「$1」の識別子です。',
	'openid-identifier-page-text-different-user' => 'このページは利用者 ID $1 の識別子です。',
	'openid-identifier-page-text-no-such-local-openid' => '無効なローカル OpenID 識別子です。',
	'openid-server-identity-page-text' => 'このページは、OpenID 認証を開始するための、OpenID サーバーの技術的なページであり、それ以外の目的はありません。',
	'openidxrds' => 'Yadis ファイル',
	'openidconvert' => 'OpenID コンバーター',
	'openiderror' => '検証エラー',
	'openiderrortext' => 'OpenID URL の検証中にエラーが発生しました。',
	'openidconfigerror' => 'OpenID 設定エラー',
	'openidconfigerrortext' => 'このウィキの OpenID 格納設定は無効です。
[[Special:ListUsers/sysop|管理者]]にお問い合わせください。',
	'openidpermission' => 'OpenID パーミッションエラー',
	'openidpermissiontext' => '指定した OpenID では、このサーバーへのログインが許可されていません。',
	'openidcancel' => '検証中止',
	'openidcanceltext' => 'OpenID URL の検証は中止されました。',
	'openidfailure' => '検証失敗',
	'openidfailuretext' => 'OpenID URL の検証は失敗しました。エラーメッセージ:「$1」',
	'openidsuccess' => '検証成功',
	'openidsuccesstext' => "'''利用者 $1 の検証とログインに成功しました'''。

あなたの OpenID は $2 です。

これを含むすべての OpenID は個人設定の [[Special:Preferences#mw-prefsection-openid|OpenID タブ]]で管理できます。<br />
アカウントパスワード (省略可能) は[[Special:Preferences#mw-prefsection-personal|利用者情報]]で追加できます。",
	'openidusernameprefix' => 'OpenID ユーザー',
	'openidserverlogininstructions' => '利用者 $2 のページ $1 (これがあなたの OpenID URL です) に対応するパスワードを入力することを、$3 が要求しています',
	'openidtrustinstructions' => '$1 とデータを共有したいか確認してください。',
	'openidallowtrust' => '$1 がこの利用者アカウントを信用するのを許可する。',
	'openidnopolicy' => 'サイトはプライバシーに関する方針を明記していません。',
	'openidpolicy' => 'より詳しくは<a target="_new" href="$1">プライバシーに関する方針</a>を確認してください。',
	'openidoptional' => '省略可能',
	'openidrequired' => '必須',
	'openidnickname' => 'ニックネーム',
	'openidfullname' => '本名',
	'openidemail' => 'メールアドレス',
	'openidlanguage' => '言語',
	'openidtimezone' => 'タイムゾーン',
	'openidchooselegend' => '利用者名とアカウントの選択',
	'openidchooseinstructions' => 'すべての利用者にはニックネームが必要です。
以下の選択肢から 1 つ選択できます。',
	'openidchoosenick' => 'あなたのニックネーム ($1)',
	'openidchoosefull' => 'あなたの本名 ($1)',
	'openidchooseurl' => 'あなたの OpenID から取得した名前 ($1)',
	'openidchooseauto' => '自動生成された名前 ($1)',
	'openidchoosemanual' => '名前を別に設定する:',
	'openidchooseexisting' => 'このウィキの既存のアカウント',
	'openidchooseusername' => '利用者名:',
	'openidchoosepassword' => 'パスワード:',
	'openidconvertinstructions' => 'このフォームでは、あなたの利用者アカウントで OpenID URL を使用するように変更したり、OpenID URL をさらに追加できます。',
	'openidconvertoraddmoreids' => 'OpenID への変換、または別の OpenID URL の追加',
	'openidconvertsuccess' => 'OpenID に変換しました',
	'openidconvertsuccesstext' => 'あなたの OpenID を $1 に変換しました。',
	'openid-convert-already-your-openid-text' => 'OpenID $1 はあなたのアカウントに既に関連付けられています。再度追加する必要はありません。',
	'openid-convert-other-users-openid-text' => '$1 は他の誰かの OpenID です。他の利用者の OpenID は使用できません。',
	'openidalreadyloggedin' => 'あなたは既にログインしています。',
	'openidalreadyloggedintext' => "'''$1 さん、あなたは既にログインしています!'''

個人設定の [[Special:Preferences#mw-prefsection-openid|OpenID タブ]]で、あなたの OpenID を管理 (表示、削除、追加など) できます。",
	'openidnousername' => '利用者名が指定されていません。',
	'openidbadusername' => '利用者名の指定が正しくありません。',
	'openidautosubmit' => 'このページにあるフォームはあなたが JavaScript を有効にしていれば自動的に送信されるはずです。そうならない場合は、「Continue」(続行) ボタンを試してください。',
	'openidclientonlytext' => 'このウィキのアカウントは、別のサイトで OpenID として使用できません。',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} はウェブサイト間でのシングルサインオンのための [//openid.net/ OpenID] 規格に対応しています。OpenID によって、個別のパスワードを使用することなく、たくさんのさまざまなウェブサイトにログインできるようになります(より詳しい情報は[//ja.wikipedia.org/wiki/OpenID ウィキペディアの OpenID についての記事]を参照してください)。
多くの [//openid.net/get/ OpenID プロバイダー]が存在するため、OpenID が有効なアカウントを別のサービスで既に保持しているかもしれません。',
	'openidlogininstructions-openidloginonly' => "OpenID で{{SITENAME}}''のみ''にログインできます。",
	'openidupdateuserinfo' => '自分の個人情報を更新:',
	'openiddelete' => 'OpenID の削除',
	'openiddelete-text' => '「{{int:openiddelete-button}}」ボタンをクリックすると、アカウントから OpenID「$1」を除去します。
以降、この OpenID を使用してのログインができなくなります。',
	'openiddelete-button' => '確定',
	'openiddeleteerrornopassword' => 'アカウントにパスワードが設定されていないため、OpenID を削除できません。
ログインに OpenID が必要です。',
	'openiddeleteerroropenidonly' => 'OpenID を使用してのログインのみが許可されているため、OpenID を削除できません。
ログインに OpenID が必要です。',
	'openiddelete-success' => 'あなたのアカウントから OpenID を除去しました。',
	'openiddelete-error' => 'あなたのアカウントから OpenID を除去する際にエラーが発生しました。',
	'openid-openids-were-not-merged' => '利用者アカウントを統合する際に、OpenID は統合されませんでした。',
	'prefs-openid-hide-openid' => '利用者ページでの OpenID URL の表示',
	'prefs-openid-userinfo-update-on-login' => 'OpenID 利用者情報の更新',
	'prefs-openid-associated-openids' => '{{SITENAME}}へのログインに使用する OpenID',
	'prefs-openid-trusted-sites' => '信頼済みサイト',
	'prefs-openid-local-identity' => '他のサイトへのログインに使用する OpenID',
	'openid-hide-openid-label' => 'OpenID を利用者ページに表示しない',
	'openid-show-openid-url-on-userpage-always' => 'あなたの OpenID が利用者ページに常に表示されます。',
	'openid-show-openid-url-on-userpage-never' => 'あなたの OpenID が利用者ページに表示されることはありません。',
	'openid-userinfo-update-on-login-label' => 'ログインするたびに OpenID ペルソナの内容をもとに自動的に更新するプロフィール情報:',
	'openid-associated-openids-label' => 'あなたのアカウントに関連付けられた OpenID:',
	'openid-urls-action' => '操作',
	'openid-urls-registration' => '登録日時',
	'openid-urls-delete' => '削除',
	'openid-add-url' => '自分のアカウントに新しい OpenID を追加',
	'openid-trusted-sites-label' => 'OpenID を使用してログインした信頼済みサイト:',
	'openid-trusted-sites-table-header-column-url' => '信頼済みサイト',
	'openid-trusted-sites-table-header-column-action' => '操作',
	'openid-trusted-sites-delete-link-action-text' => '削除',
	'openid-trusted-sites-delete-all-link-action-text' => '信頼済みサイトをすべて削除',
	'openid-trusted-sites-delete-confirmation-page-title' => '信頼済みサイトの削除',
	'openid-trusted-sites-delete-confirmation-question' => '「{{int:openid-trusted-sites-delete-confirmation-button-text}}」ボタンをクリックすると、信頼済みサイト一覧から「$1」を除去します。',
	'openid-trusted-sites-delete-all-confirmation-question' => '「{{int:openid-trusted-sites-delete-confirmation-button-text}}」ボタンをクリックすると、利用者プロフィールから信頼済みサイトをすべて除去します。',
	'openid-trusted-sites-delete-confirmation-button-text' => '確認',
	'openid-trusted-sites-delete-confirmation-success-text' => '信頼済みサイト一覧から「$1」を除去しました。',
	'openid-trusted-sites-delete-all-confirmation-success-text' => '利用者プロフィールから、以前登録した信頼済みサイトをすべて除去しました。',
	'openid-local-identity' => 'あなたの OpenID:',
	'openid-login-or-create-account' => 'ログインまたは新規アカウント作成',
	'openid-provider-label-openid' => 'あなたの OpenID URL を入力してください',
	'openid-provider-label-google' => 'あなたの Google アカウントを使用してログインしてください',
	'openid-provider-label-yahoo' => 'あなたの Yahoo アカウントを使用してログインしてください',
	'openid-provider-label-aol' => 'あなたの AOL スクリーンネームを入力してください',
	'openid-provider-label-wmflabs' => 'あなたの Wmflabs アカウントを使用してログインしてください',
	'openid-provider-label-other-username' => 'あなたの $1 でのユーザー名を入力してください',
	'specialpages-group-openid' => 'OpenID のサービスページとステータス情報',
	'right-openid-converter-access' => 'OpenID を使用するアカウントを追加/変換',
	'right-openid-dashboard-access' => 'OpenID ダッシュボードに標準アクセス',
	'right-openid-dashboard-admin' => 'OpenID ダッシュボードに管理者アクセス',
	'action-openid-converter-access' => 'OpenID を使用するアカウントの追加/変換',
	'action-openid-dashboard-access' => 'OpenID ダッシュボードへのアクセス',
	'action-openid-dashboard-admin' => 'OpenID 管理者ダッシュボードへのアクセス',
	'openid-dashboard-title' => 'OpenID ダッシュボード',
	'openid-dashboard-title-admin' => 'OpenID ダッシュボード (管理者)',
	'openid-dashboard-introduction' => '現在の OpenID 拡張機能の設定 ([$1 ヘルプ])',
	'openid-dashboard-number-openid-users' => 'OpenID を持つ利用者の数',
	'openid-dashboard-number-openids-in-database' => 'OpenID の数 (合計)',
	'openid-dashboard-number-users-without-openid' => 'OpenID を持たない利用者の数',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'openidxrds' => 'Berkas Yadis',
	'openiderror' => 'Kaluputan vérifikasi',
	'openidcancel' => 'Vérifikasi dibatalaké',
	'openidfailure' => 'Vérifikasi gagal',
	'openidtrustinstructions' => 'Mangga dipriksa yèn panjenengan péngin mbagi data karo $1.',
	'openidallowtrust' => 'Marengaké $1 percaya karo rékening panganggo iki.',
	'openidnopolicy' => 'Situs iki durung spésifikasi kawicaksanan privasi.',
	'openidoptional' => 'Opsional',
	'openidrequired' => 'Diperlokaké',
	'openidnickname' => 'Jeneng sesinglon',
	'openidfullname' => 'Jeneng jangkep',
	'openidemail' => 'Alamat e-mail',
	'openidlanguage' => 'Basa',
	'openidchooseinstructions' => 'Kabèh panganggo prelu jeneng sesinglon;
panjenengan bisa milih salah siji saka opsi ing ngisor iki.',
	'openidchoosefull' => 'Jeneng pepak panjenengan ($1)',
	'openidchooseauto' => 'Jeneng ($1) sing digawé sacara otomatis',
	'openidchoosemanual' => 'Jeneng miturut pilihan panjenengan:',
	'openidchoosepassword' => 'Tembung sandhi:',
);

/** Georgian (ქართული)
 * @author David1010
 * @author Malafaya
 */
$messages['ka'] = array(
	'openidlogin' => 'შესვლა / შექმენით ანგარიში OpenID-ით',
	'openidserver' => 'OpenID-ის სერვერი',
	'openidxrds' => 'Yadis ფაილი',
	'openidconvert' => 'OpenID-ის კონვერტორი',
	'openiderror' => 'დადასტურების შეცდომა',
	'openiderrortext' => 'OpenID-ის URL-ის შემოწმებისას მოხდა შეცდომა.',
	'openidconfigerror' => 'OpenID-ის კონფიგურაციის შეცდომა',
	'openidconfigerrortext' => 'OpenID-ის საცავის კონფიგურაცია ამ ვიკისათვის არასწორია.
გთხოვთ, მიმართეთ [[Special:ListUsers/sysop|ადმინისტრატორს]].',
	'openidpermission' => 'OpenID-ის უფლებების შეცდომა',
	'openidpermissiontext' => 'მითითებული OpenID არ გაძლევთ ამ სერვერზე შესვლის საშუალებას.',
	'openidcancel' => 'შემოწმება გაუქმებულია',
	'openidcanceltext' => 'OpenID-ის URL-ის შემოწმება გაუქმებულია.',
	'openidfailure' => 'შემოწმება ვერ განხორციელდა',
	'openidfailuretext' => 'OpenID-ის URL-ის შემოწმება წარუმატებლად დასრულდა. შეცდომის შეტყობინება: „$1“',
	'openidsuccess' => 'შემოწმება წარმატებით დასრულდა',
	'openidusernameprefix' => 'OpenID-ის მოხმარებელი',
	'openidserverlogininstructions' => 'ქვემოთ შეიყვანეთ თქვენი პაროლი, რათა შეხვიდეთ $3-ზე როგორც მომხმარებელი $2 (პირადი გვერდი $1 — ეს არის თქვენი OpenID-ის URL).',
	'openidtrustinstructions' => 'მონიშნეთ, თუ თქვენ გსურთ გააზიაროთ მონაცემები $1-თვის.',
	'openidnopolicy' => 'ვებ-გვერდმა არ მიუთითა კონფიდენციალურობის პოლიტიკა.',
	'openidpolicy' => 'მეტი ინფორმაციისათვის იხილეთ <a target="_new" href="$1">კონფიდენციალურობის პოლიტიკა</a>.',
	'openidoptional' => 'არასავალდებულო',
	'openidrequired' => 'სავალდებულო',
	'openidnickname' => 'მეტსახელი',
	'openidfullname' => 'ნამდვილი სახელი',
	'openidemail' => 'ელ. ფოსტის მისამართი',
	'openidlanguage' => 'ენა',
	'openidtimezone' => 'სასაათო სარტყელი',
	'openidchooselegend' => 'მომხმარებლის სახელისა და ანგარიშის არჩევა',
	'openidchooseinstructions' => 'ყველა მომხმარებელს უნდა გქონდეს მეტსახელი;
თქვენ შეგიძლიათ აირჩიოთ ქვემოთ მოცემულიდან ერთ-ერთი.',
	'openidchoosenick' => 'თქვენი მეტსახელი ($1)',
	'openidchoosefull' => 'თქვენი ნამდვილი სახელი ($1)',
	'openidchooseurl' => 'სახელი, მიღებული თქვენი OpenID-დან ($1)',
	'openidchooseauto' => 'ავტომატურად შექმნილი სახელი ($1)',
	'openidchoosemanual' => 'სახელი თქვენი არჩევანით:',
	'openidchooseexisting' => 'არსებული ანგარიში ამ ვიკიში',
	'openidchooseusername' => 'მომხმარებლის სახელი:',
	'openidchoosepassword' => 'პაროლი:',
	'openidconvertoraddmoreids' => 'OpenID-ში კონვერტირება ან სხვა OpenID-ის URL-ის დამატება',
	'openidconvertsuccess' => 'წარმატებით დაკონვერტირდა OpenID-ში',
	'openidconvertsuccesstext' => 'თქვენ წარმატებით დააკონვერტირეთ საკუთარი OpenID $1-ში.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 უკვე დაკავშირებულია თქვენ ანგარიშთან. მისი ხელმეორედ დამატება უაზროა.',
	'openid-convert-other-users-openid-text' => '$1 არის სხვისი OpenID. თქვენ არ შეგიძლიათ გამოიყენოთ სხვა მომხმარებლის OpenID.',
	'openidalreadyloggedin' => 'თქვენ უკვე შესული ხართ.',
	'openidnousername' => 'მომხმარებლის სახელი არ არის მითითებული.',
	'openidbadusername' => 'მითითებულია არასწორი მომხმარებლის სახელი.',
	'openidloginlabel' => 'OpenID-ის URL',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} უფლებას გაძლევთ შეხვიდეთ ''მხოლოდ'' OpenID-ის გამოყენებით.",
	'openidupdateuserinfo' => 'ჩემი პირადი ინფორმაციის განახლება:',
	'openiddelete' => 'OpenID-ის წაშლა',
	'openiddelete-button' => 'დადასტურება',
	'openiddelete-success' => 'OpenID წარმატებით წაიშალა თქვენი ანგარიშიდან.',
	'openiddelete-error' => 'OpenID-ის თქვენი ანგარიშიდან წაშლისას მოხდა შეცდომა.',
	'openid-openids-were-not-merged' => 'OpenID(-ები) არ გაერთიანდა ანგარიშების შერწყმისას.',
	'prefs-openid-hide-openid' => 'თქვენი მომხმარებლის გვერდზე OpenID-ის URL-ის დამალვა, თუ თქვენ შეხვედით OpenID-ის საშუალებით.',
	'openid-hide-openid-label' => 'თქვენი მომხმარებლის გვერდზე OpenID-ის URL-ის დამალვა.',
	'openid-userinfo-update-on-login-label' => 'შემდეგი ინფორმაციის განახლება ჩემ შესახებ OpenID-ით ყოველ ჯერზე, როდესაც შევალ სისტემაში:', # Fuzzy
	'openid-associated-openids-label' => 'თქვენ ანგარიშთან დაკავშირებული OpenID-ები:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'მოქმედება',
	'openid-urls-registration' => 'რეგისტრაციის დრო',
	'openid-urls-registration-date-time' => '$1',
	'openid-urls-delete' => 'წაშლა',
	'openid-add-url' => 'ახალი OpenID-ის დამატება', # Fuzzy
	'openid-login-or-create-account' => 'შესვლა ან ახალი ანგარიშის შექმნა',
	'openid-provider-label-openid' => 'შეიყვანეთ თქვენი OpenID-ის URL',
	'openid-provider-label-google' => 'შედით თქვენი Google-ის ანგარიშით',
	'openid-provider-label-yahoo' => 'შედით თქვენი Yahoo-ს ანგარიშით',
	'openid-provider-label-aol' => 'შეიყვანეთ თქვენი AOL-ის სახელი',
	'openid-provider-label-other-username' => 'შეიყვანეთ თქვენი „$1“ მომხმარებლის სახელი',
	'specialpages-group-openid' => 'OpenID-ის მომსახურების გვერდები და სტატუსის ინფორმაცია',
	'openid-dashboard-title' => 'OpenID-ის სამართავი დაფა',
	'openid-dashboard-title-admin' => 'OpenID-ის სამართავი დაფა (ადმინისტრატორი)',
	'openid-dashboard-introduction' => 'OpenID-ის მიმდინარე გაფართოების პარამეტრები ([$1 დახმარება])',
	'openid-dashboard-number-openid-users' => 'OpenID-ის მომხმარებლების რაოდენობა',
	'openid-dashboard-number-openids-in-database' => 'OpenID-ების რაოდენობა (სულ)',
	'openid-dashboard-number-users-without-openid' => 'OpenID-ის არმქონე მომხმარებლების რაოდენობა',
);

/** Kirmanjki (Kırmancki)
 * @author Mirzali
 */
$messages['kiu'] = array(
	'openidlanguage' => 'Zon',
	'openidtimezone' => 'Warê sate',
);

/** Kalaallisut (kalaallisut)
 * @author Qaqqalik
 */
$messages['kl'] = array(
	'openidlanguage' => 'Oqaatsit',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author T-Rithy
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'openidconvert' => 'កម្មវិធីបម្លែងOpenID',
	'openiderror' => 'កំហុស​ក្នុងការផ្ទៀងផ្ទាត់',
	'openidcancel' => 'ការផ្ទៀងផ្ទាត់​ត្រូវបានលុបចោល',
	'openidfailure' => 'ការផ្ទៀងផ្ទាត់បរាជ័យ',
	'openidsuccess' => 'ផ្ទៀងផ្ទាត់ដោយជោគជ័យ',
	'openidtrustinstructions' => 'ចូរ​ពិនិត្យ ប្រសិនបើ​អ្នក​ចង់​ចែករំលែក​ទិន្នន័យ​ជាមួយ $1​។',
	'openidoptional' => 'ជាជម្រើស',
	'openidrequired' => 'ត្រូវការជាចាំបាច់',
	'openidnickname' => 'ឈ្មោះហៅក្រៅ',
	'openidfullname' => 'ឈ្មោះពេញ', # Fuzzy
	'openidemail' => 'អាសយដ្ឋានអ៊ីមែល',
	'openidlanguage' => 'ភាសា',
	'openidtimezone' => 'ល្វែងម៉ោង',
	'openidchooselegend' => 'ជំរើសអត្តនាមនិងគណនី',
	'openidchooseinstructions' => 'អ្នកប្រើប្រាស់ទាំងត្រូវការឈ្មោះហៅក្រៅ

អ្នកអាចជ្រើសរើសពីក្នុងជម្រើសខាងក្រោម។',
	'openidchoosenick' => 'ឈ្មោះហៅក្រៅរបស់អ្នក ($1)',
	'openidchoosefull' => 'ឈ្មោះពេញ​របស់អ្នក ($1)', # Fuzzy
	'openidchooseurl' => 'ឈ្មោះដែលយកពី OpenID របស់អ្នក ($1)',
	'openidchooseauto' => 'ឈ្មោះបង្កើតស្វ័យប្រវត្តិ ($1)',
	'openidchoosemanual' => 'ឈ្មោះសំរាប់អោយអ្នកជ្រើយយក៖',
	'openidchooseexisting' => 'គណនីដែលមានរួចហើយនៅក្នុងវិគីនេះ',
	'openidchooseusername' => 'អត្តនាម៖',
	'openidchoosepassword' => 'ពាក្យសំងាត់៖',
	'openidconvertsuccess' => 'បានបម្លែងទៅ OpenID ដោយជោគជ័យ',
	'openid-convert-already-your-openid-text' => 'វាជាOpenIDរបស់អ្នករួចហើយ។', # Fuzzy
	'openid-convert-other-users-openid-text' => 'វាជាOpenIDរបស់អ្នកដទៃ។', # Fuzzy
	'openidalreadyloggedin' => "'''អ្នកបានកត់ឈ្មោះចូលរួចហើយ $1!'''
ប្រសិនបើអ្នកចង់់ប្រើ OpenID ដើម្បីចុះឈ្មោះចូលនាពេលអនាគត អ្នកអាច[[Special:OpenIDConvert|បម្លែងគណនីរបស់អ្នកដើម្បីប្រើ OpenID]]។", # Fuzzy
	'openidnousername' => 'មិនមានអត្តនាមបានបញ្ជាក់ទេ។',
	'openidbadusername' => 'ឈ្មោះមិនត្រឹមត្រូវត្រូវបានបញ្ជាក់',
	'prefs-openid-hide-openid' => 'អាសយដ្ឋាន URL នៃ OpenID របស់អ្នកនៅលើទំព័រអ្នកប្រើប្រាស់របស់អ្នក',
	'openid-hide-openid-label' => 'លាក់OpenIDរបស់អ្នកនៅលើទំព័រអ្នកប្រើប្រាស់របស់អ្នក ប្រសិនបើអ្នកកត់ឈ្មោះចូលដោយប្រើOpenID។', # Fuzzy
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'openidoptional' => 'ಐಚ್ಛಿಕ',
	'openidnickname' => 'ಉಪನಾಮ',
	'openidlanguage' => 'ಭಾಷೆ',
	'openidtimezone' => 'ಸಮಯ ವಲಯ',
	'openidchoosepassword' => 'ಪ್ರವೇಶಪದ:',
	'openid-urls-delete' => 'ಅಳಿಸು',
);

/** Korean (한국어)
 * @author Devunt
 * @author Ficell
 * @author Kwj2772
 * @author happyday19c
 * @author 아라
 */
$messages['ko'] = array(
	'openid-desc' => '사용자가 [//openid.net/ OpenID]를 통한 로그인을 할 수 있습니다. 또한 위키의 사용자 계정을 통해 OpenID를 지원하는 다른 사이트에도 로그인이 가능합니다.',
	'openididentifier' => 'OpenID 식별자',
	'openidlogin' => 'OpenID로 로그인 / 계정 만들기',
	'openidserver' => 'OpenID 서버',
	'openid-identifier-page-text-user' => '이 문서는 "$1" 사용자에 대한 식별자입니다.',
	'openid-identifier-page-text-different-user' => '이 문서는 $1 사용자 ID에 대한 식별자입니다.',
	'openid-identifier-page-text-no-such-local-openid' => '잘못된 로컬 OpenID 식별자입니다.',
	'openid-server-identity-page-text' => '이 문서는 OpenID 인증을 시작하기 위한 기술적인 OpenID 서버의 문서입니다. 다른 목적은 없습니다.',
	'openidxrds' => 'Yadis 파일',
	'openidconvert' => 'OpenID 변환기',
	'openiderror' => '인증 오류',
	'openiderrortext' => 'OpenID URL을 인증하는 과정에 오류가 발생했습니다.',
	'openidconfigerror' => 'OpenID 설정 오류',
	'openidconfigerrortext' => '이 위키에 OpenID 저장소 설정이 잘못되었습니다.
[[Special:ListUsers/sysop|{{SITENAME}} 관리자]]에게 문의하시기 바랍니다.',
	'openidpermission' => 'OpenID 권한 오류',
	'openidpermissiontext' => '제공한 OpenID는 이 서버에 로그인할 수 없습니다.',
	'openidcancel' => '인증 취소',
	'openidcanceltext' => 'OpenID URL의 인증이 취소되었습니다.',
	'openidfailure' => '인증 실패',
	'openidfailuretext' => 'OpenID 인증이 실패했습니다. 오류 메시지: "$1"',
	'openidsuccess' => '인증 성공',
	'openidsuccesstext' => "'''성공적으로 인증되었고 $1 사용자로 로그인했습니다'''.

당신의 OpenID는 $2 입니다.

이와 선택적인 추가 OpenID는 사용자 환경 설정의 [[Special:Preferences#mw-prefsection-openid|OpenID 탭]]에서 관리할 수 있습니다.<br />
선택적인 계정 비밀번호는 [[Special:Preferences#mw-prefsection-personal|기본 정보]]에서 더할 수 있습니다.",
	'openidusernameprefix' => 'OpenID 사용자',
	'openidserverlogininstructions' => '$2 사용자로서 $1 문서에 비밀번호를 입력하여 $3에 요청하세요. (사용자의 OpenID URL)',
	'openidtrustinstructions' => '$1과 데이터를 공유하려면 체크하세요.',
	'openidallowtrust' => '$1 사용자가 이 사용자 계정을 허용합니다.',
	'openidnopolicy' => '사이트가 개인정보 정책을 지정하지 않았습니다.',
	'openidpolicy' => '자세한 사항은 <a target="_new" href="$1">개인 정보 보호 정책</a>을 참고하세요.',
	'openidoptional' => '선택 사항',
	'openidrequired' => '필수',
	'openidnickname' => '별명',
	'openidfullname' => '실명',
	'openidemail' => '메일 주소',
	'openidlanguage' => '언어',
	'openidtimezone' => '시간대',
	'openidchooselegend' => '사용자 이름과 계정 선택',
	'openidchooseinstructions' => '모든 사용자는 별명을 가져야 합니다.
아래의 옵션 중 하나를 선택할 수 있습니다.',
	'openidchoosenick' => '별명 ($1)',
	'openidchoosefull' => '실명 ($1)',
	'openidchooseurl' => 'OpenID로 부터 선택한 이름 ($1)',
	'openidchooseauto' => '자동 생성된 이름 ($1)',
	'openidchoosemanual' => '선택한 이름:',
	'openidchooseexisting' => '이 위키에 이미 존재하는 계정입니다',
	'openidchooseusername' => '사용자 이름:',
	'openidchoosepassword' => '비밀번호:',
	'openidconvertinstructions' => '이 양식은 OpenID URL을 통한 로그인을 설정하거나 OpenID URL을 추가하기 위한 곳입니다',
	'openidconvertoraddmoreids' => 'OpenID로 변환하거나 OpenID URL을 추가합니다',
	'openidconvertsuccess' => 'OpenID로의 변환이 완료되었습니다',
	'openidconvertsuccesstext' => 'OpenID를 $1(으)로 성공적으로 변환했습니다.',
	'openid-convert-already-your-openid-text' => '$1 OpenID는 이미 계정에 연결되어 있습니다. 다시 추가할 필요가 없습니다.',
	'openid-convert-other-users-openid-text' => '$1(은)는 다른 사용자의 OpenID입니다. 다른 사용자의 OpenID를 사용할 수 없습니다.',
	'openidalreadyloggedin' => '이미 로그인했습니다.',
	'openidalreadyloggedintext' => "'''$1 계정으로 이미 로그인했습니다!'''

사용자 환경 설정의 [[Special:Preferences#mw-prefsection-openid|OpenID 탭]]에서 OpenID를 관리(보기, 삭제, 추가)할 수 있습니다.",
	'openidnousername' => '사용자 이름을 지정하지 않았습니다.',
	'openidbadusername' => '지정한 사용자 이름이 잘못되었습니다.',
	'openidautosubmit' => '자바 스크립트가 허용된 경우 자동으로 데이터가 전송됩니다.
만약 자동으로 되지 않는다면 "계속" 버튼을 눌러주세요.',
	'openidclientonlytext' => '다른 사이트에 OpenID로 이 위키에서 계정을 사용할 수 없습니다.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}}에서는 다양한 웹사이트에서의 Single Sign-On을 지원하는 [//openid.net/ OpenID] 기능을 제공합니다.
OpenID는 다른 많은 웹사이트에서 서로 다른 비밀번호나 사용자 이름을 입력하는 불편없이 편리하게 로그인할 수 있도록 도와줍니다.
(OpenID에 대한 자세한 정보는 [//ko.wikipedia.org/wiki/OpenID 위키백과 OpenID 문서]를 참고하세요.)
다양한 사이트에서 [//openid.net/get/ OpenID 서비스를 제공하며], 이미 사용중인 다른 서비스가 OpenID 서비스 계정을 제공할 수도 있습니다.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}}(은)는 OpenID''로만'' 로그인을 할 수 있습니다.",
	'openidlogininstructions-passwordloginallowed' => '{{SITENAME}}에 계정이 이미 있을 경우 사용하는 사용자 이름과 비밀번호로 [[Special:UserLogin|로그인]]할 수 있습니다.
나중에 OpenID를 사용하려면, 정상적으로 로그인한 후 [[Special:OpenIDConvert|계정을 OpenID로 변환]]할 수 있습니다.',
	'openidupdateuserinfo' => '내 개인 정보를 새로 고침:',
	'openiddelete' => 'OpenID 삭제',
	'openiddelete-text' => '"{{int:openiddelete-button}}" 버튼을 누르시면, [$1 OpenID 정보]를 내 계정으로부터 삭제할 것입니다.
이후 OpenID를 통한 현재 사용자 계정으로의 로그인이 불가능하게 될 것입니다.',
	'openiddelete-button' => '확인',
	'openiddeleteerrornopassword' => '계정에 비밀번호를 설정하지 않았기 때문에 모든 OpenID 계정을 삭제할 수 없습니다.
OpenID 없이 로그인할 수 없습니다.',
	'openiddeleteerroropenidonly' => 'OpenID를 이용해서만 로그인 할 수 있기 때문에 모든 OpenID 계정을 삭제할 수 없습니다.
OpenID 없이 로그인 할 수 없습니다.',
	'openiddelete-success' => 'OpenID가 내 계정에서 성공적으로 삭제되었습니다.',
	'openiddelete-error' => '사용자 계정으로부터 OpenID 정보를 삭제하는 과정에 오류가 발생했습니다.',
	'openid-openids-were-not-merged' => 'OpenID가 사용자 계정을 병합하는 동안 병합하지 못했습니다.',
	'prefs-openid' => 'OpenID',
	'prefs-openid-hide-openid' => '사용자 문서에서 OpenID URL',
	'prefs-openid-userinfo-update-on-login' => 'OpenID 사용자 정보 업데이트',
	'prefs-openid-associated-openids' => '{{SITENAME}}에 로그인한 OpenID',
	'prefs-openid-trusted-sites' => '신뢰하는 사이트',
	'prefs-openid-local-identity' => '다른 사이트에 로그인한 OpenID',
	'openid-hide-openid-label' => '사용자 문서에 OpenID URL을 숨깁니다.',
	'openid-show-openid-url-on-userpage-always' => '사용자 문서를 방문할 때 내 OpenID를 사용자 문서에 항상 보여줍니다.',
	'openid-show-openid-url-on-userpage-never' => '내 OpenID를 사용자 문서에 절대 보여주지 않습니다.',
	'openid-userinfo-update-on-login-label' => '로그인할 때 매번 OpenID 페르소나에서 자동으로 업데이트할 사용자 프로필 정보 필드:',
	'openid-associated-openids-label' => '현재 연결된 OpenID 계정 목록:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => '동작',
	'openid-urls-registration' => '등록 시간',
	'openid-urls-delete' => '삭제',
	'openid-add-url' => '계정에 새 OpenID 추가하기',
	'openid-trusted-sites-label' => '로그인하기 위해 신뢰하고 OpenID를 사용하는 사이트:',
	'openid-trusted-sites-table-header-column-url' => '신뢰하는 사이트',
	'openid-trusted-sites-table-header-column-action' => '동작',
	'openid-trusted-sites-delete-link-action-text' => '삭제',
	'openid-trusted-sites-delete-all-link-action-text' => '모든 신뢰하는 사이트 삭제',
	'openid-trusted-sites-delete-confirmation-page-title' => '신뢰하는 사이트 삭제',
	'openid-trusted-sites-delete-confirmation-question' => '"{{int:openid-trusted-sites-delete-confirmation-button-text}}" 버튼을 클릭하면 신뢰하는 사이트의 목록에서 "$1"(을)를 제거합니다.',
	'openid-trusted-sites-delete-all-confirmation-question' => '"{{int:openid-trusted-sites-delete-confirmation-button-text}}" 버튼을 클릭하면 사용자 프로필에서 모든 신뢰하는 사이트를 제거합니다.',
	'openid-trusted-sites-delete-confirmation-button-text' => '확인',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1"(을)를 신뢰하는 사이트의 목록에서 성공적으로 제거했습니다.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => '이전에 신뢰하는 모든 사이트를 사용자 프로필에서 성공적으로 제거했습니다.',
	'openid-local-identity' => '내 OpenID:',
	'openid-login-or-create-account' => '로그인하거나 새 계정 만들기',
	'openid-provider-label-openid' => 'OpenID URL을 입력하세요',
	'openid-provider-label-google' => '구글 계정을 통해 로그인하기',
	'openid-provider-label-yahoo' => '야후 계정을 통해 로그인하기',
	'openid-provider-label-aol' => 'AOL 사용자 이름을 입력하세요',
	'openid-provider-label-wmflabs' => 'Wmflabs 계정을 통해 로그인하기',
	'openid-provider-label-other-username' => '$1 사용자 이름을 입력하세요',
	'specialpages-group-openid' => 'OpenID 서비스 문서와 상태 정보',
	'right-openid-converter-access' => 'OpenID 식별자를 사용하여 계정을 추가하거나 변환할 수 있습니다',
	'right-openid-dashboard-access' => 'OpenID 대시보드에 표준 접근',
	'right-openid-dashboard-admin' => 'OpenID 대시보드에 관리자 접근',
	'action-openid-converter-access' => 'OpenID 식별자를 사용하여 계정을 추가하거나 변환',
	'action-openid-dashboard-access' => 'OpenID 대시보드에 접근',
	'action-openid-dashboard-admin' => 'OpenID 관리자 대시보드에 접근',
	'openid-dashboard-title' => 'OpenID 대시보기',
	'openid-dashboard-title-admin' => 'OpenID 대시보드 (관리자)',
	'openid-dashboard-introduction' => '현재 OpenID 확장 기능 설정 ([$1 도움말])',
	'openid-dashboard-number-openid-users' => 'OpenID 사용자 수',
	'openid-dashboard-number-openids-in-database' => 'OpenID의 수 (총)',
	'openid-dashboard-number-users-without-openid' => 'OpenID를 사용하지 않는 사용자 수',
);

/** Komi-Permyak (Перем Коми)
 * @author Enye Lav
 */
$messages['koi'] = array(
	'openid-urls-delete' => 'Чышкыны',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'openid-desc' => 'Heh em Wiki met ener [//openid.net/ OpenID] enlogge, un angerschwoh, woh mer OpenID kennt, met enem Metmaacher-Name fun heh fum Wiki enlogge.',
	'openidlogin' => 'Met Dinge OpenID enlogge udder ene Zohjang enreeschte',
	'openidserver' => 'OpenID Server',
	'openidxrds' => 'Yadis-Dattei',
	'openidconvert' => 'OpenID Ömsetzer',
	'openiderror' => 'Fähler beim Pröfe',
	'openiderrortext' => 'Ene Fähler es opjetrodde beim Pröfe fun de OpenID URL.',
	'openidconfigerror' => 'Fähler en dä Aat, wi OpenID opjesaz es',
	'openidconfigerrortext' => 'Dem OpenID sing Enstellung för Date affzelääje es nit en Odenung.
Beß esu joot un don enem [[Special:ListUsers/sysop|Wiki-Köbes]] dofun verzälle.',
	'openidpermission' => 'Fähler mem Rääsch en OpenID',
	'openidpermissiontext' => 'Met de aanjejovve OpenID darrfs de hee ävver nit enlogge.',
	'openidcancel' => 'Övverpröfung affjebroche',
	'openidcanceltext' => 'De Övverpröfung fun dä OpenID URL woht affjebroche.',
	'openidfailure' => 'Övverpröfung jingk donevve',
	'openidfailuretext' => 'De Pröfung fun de OpenID URL es donevve jejange.
Dä Fähler wohr: „$1“',
	'openidsuccess' => 'De Pröfung hät jeflupp',
	'openidsuccesstext' => "'''Di Pröfung fun dä OpenID URL hät jot jejange. Do be jäz als dä Metmaacher $1 aanjemälldt.'''

Ding OpenID es $2

Di kanns De zosamme met ander OpenIDs, wann et se jitt, op dä Sigg [[Special:Preferences#mw-prefsection-openid|OpenID tab]] en Dinge Enschtällonge verwallde.<br />
Do kanns och e Paßwood en Dinge [[Special:Preferences#mw-prefsection-personal|Enschtällong]]endraare lohße, wann De wells.",
	'openidusernameprefix' => 'OpenID Metmaacher',
	'openidserverlogininstructions' => 'Öm op $3 met OpenID enzelogge jif heh et Paßwoot för Dinge Metmaachername $2 en.
Ding Metmaachersigg hehe un Ding OpenID-URL sinn_er beeds: $1',
	'openidtrustinstructions' => 'Loor, ov De de Date met $1 deile wells.',
	'openidallowtrust' => 'Donn däm $1 zojestonn, däm Metmaacher ze verdraue.',
	'openidnopolicy' => 'Die Websait udder dä Server hät nix aanjejovve övver der Schotz fun private Date.',
	'openidpolicy' => 'Loor Der de <a target="_new" href="$1">Räjele för der Schotz fun private Date</a> aan, wann De mieh do drövver wesse wels.',
	'openidoptional' => 'Nit nüdesch',
	'openidrequired' => 'Nüdesch',
	'openidnickname' => 'Spetznam',
	'openidfullname' => 'Der janze Name', # Fuzzy
	'openidemail' => 'De e-mail Address',
	'openidlanguage' => 'Schprooch',
	'openidtimezone' => 'Ziggzohn',
	'openidchooselegend' => 'Ußwahl vum Metmaacher un Zohjang singem Name',
	'openidchooseinstructions' => 'Jede Metmaacher bruch enne Spetznam,
Do kannß Der der Dinge unge druß üßsöke.',
	'openidchoosenick' => 'Dinge Spezname ($1)',
	'openidchoosefull' => 'Dinge komplätte Name ($1)', # Fuzzy
	'openidchooseurl' => 'Enne Name uß Dinge OpenID eruß jejreffe ($1)',
	'openidchooseauto' => 'Enne automattesch zerääsch jemaate Name ($1)',
	'openidchoosemanual' => 'Ene Name, dä De Der sellver ußjedaach un jejovve häs:',
	'openidchooseexisting' => 'Ene Metmaachername, dä et alld jitt heh em Wiki',
	'openidchooseusername' => 'Metmaacher_Naame:',
	'openidchoosepassword' => 'Paßwoot:',
	'openidconvertinstructions' => 'He kanns De Ding Aanmeldung als ene Metmaacher esu aanpasse, dat De en <i lang="en">OpenID</i> <i lang="en">URL</i> bruche kanns.
Do kanns och noch mieh <i lang="en">OpenID</i> <i lang="en">URLs</i> dobei donn.',
	'openidconvertoraddmoreids' => 'Op <i lang="en">OpenID</i> ömshtelle, udder en <i lang="en">OpenID URL</i> dobei donn',
	'openidconvertsuccess' => 'De Aanpassung aan OpenID hät jeklapp',
	'openidconvertsuccesstext' => 'Do häß Ding OpenID jez ömjewandelt noh $1.',
	'openid-convert-already-your-openid-text' => 'Dat es ald Ding OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Dat wämm anders sing OpenID.', # Fuzzy
	'openidalreadyloggedin' => 'Do bes alt enjelogg.',
	'openidalreadyloggedintext' => "Leeven $1, Do bes alld enjelogg.'''

Do kanns Ding OpenID op dä Sigg [[Special:Preferences#mw-prefsection-openid|met  Dinge Enschtällong, onger OpenID]] verwallde, also beloore, fottschmiiße, un mieh.",
	'openidnousername' => 'Keine Metmaacher-Name aanjejovve.',
	'openidbadusername' => 'Ene kapodde Metmaacher-Name aanjejovve.',
	'openidautosubmit' => 'Di Sigg enthääld_e Fomulaa för Ennjave, wat automattesch afjeschek weed, wann de Javaskrip enjeschalldt häs.
Wann nit, donn dä "Continue" (Wigger) Knopp nemme.',
	'openidclientonlytext' => 'Do kann de Aanmelldunge fun hee dämm Wiki nit als <span lang="en">OpenIDs</span> op annder Webßöövere nämme.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{ucfirst:{{GRAMMAR:Nominativ|{{SITENAME}}}}}} ongerstöz der <span lang="en">[//openid.net/ OpenID]</span> Standat för et eijfache un eijmoolije Enlogge zwesche diverse Websigge.
<span lang="en">OpenID</span> määd_et müjjesch, dat mer op ongerscheedlijje Websigge enlogge kann, oohne dat mer övverall en annder Paßwoot bruch.
Loor Der [//ksh.wikipedia.org/wiki/OpenID der Wikipedia ier Atikkel övver <span lang="en">OpenID</span>] aan, do steit noch mieh dren.

Wann de {{GRAMMAR:em|{{SITENAME}}}} alld aanjemeldt bes, dann kanns De met Dingem Metmaacher-Name un Paßwoot [[Special:UserLogin|enlogge]] wi sönß och.
Öm spääder och <span lang="en">OpenID</span> ze bruche, kann noh_m nomaale Enlogge Ding Aanmeldungsdate [[Special:OpenIDConvert|op <span lang="en">OpenID</span> ömstelle]].

Et jitt en jruuße Zahl [http://wiki.openid.net/Public_OpenID_providers <span lang="en">OpenID Provider</span> för de Öffentleschkeit], un et künnt joot sin, dat De alld ene <span lang="en">OpenID</span>-fä\'ijje Zojang häß, op däm eine udder andere Server.
<!--
; Annder Wikis : Wann De op enem Wiki aanjemelldt bes, wat <span lang="en">OpenID</span> ongerschtöz, zem Beispöll [//wikitravel.org/ Wikitravel], [//www.wikihow.com/ wikiHow], [//vinismo.com/ Vinismo], [//aboutus.org/ AboutUs] udder [//kei.ki/ Keiki], kanns de hee op de {{SITENAME}} enlogge, indämm dat De de komplätte URL fun Dinge Metmaacher-Sigg op däm aandere Wiki hee bovve endrähß. Zem Beispöll esu jät wi: \'\'<nowiki>//kei.ki/en/User:Evan</nowiki>\'\'.
; [//openid.yahoo.com/ Yahoo!] : Wann De bei <span lang="en">Yahoo!</span> aanjemelldt bes, kanns de hee {{GRAMMAR:em|{{SITENAME}}}} enlogge, indämm dat De de Ding <span lang="en">OpenID URL</span> bovve aanjiß, di De fun <span lang="en">Yahoo!</span> bekumme häß. Di <span lang="en">OpenID URLs</span> sinn uß wi zem Beispöll: \'\'<nowiki>https://me.yahoo.com/DingeMetmaacherName</nowiki>\'\'.
; [//dev.aol.com/aol-and-63-million-openids AOL] : Wann de ene zohjang op [//www.aol.com/ AOL] häß, esu jet wie ennen Zojang zom [//www.aim.com/ AIM], do kanns de Desch hee {{GRAMMAR:em|{{SITENAME}}}} enlogge, indämm dat De de Ding <span lang="en">OpenID</span> bovve enjiß. De <span lang="en">OpenID URLs</span> fun AOL sen opjebout wi \'\'<nowiki>//openid.aol.com/dingemetmaachername</nowiki>\'\'. Dinge Metmaacher-Name sullt uß luuter Kleinbochstave bestonn, kein Zwescheräum.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-openid-provider.html Blogger], [//faq.wordpress.com/2007/03/06/what-is-openid/ Wordpress.com], [//www.livejournal.com/openid/about.bml LiveJournal], [//bradfitz.vox.com/library/post/openid-for-vox.html Vox] : Wann de e <span lang="en">Blog</span> op einem fun dä Söövere häß, dann draach der Url fu Dingem <span lang="en">Blog</span> bovve en. Zem Beispöll: \'\'<nowiki>//dingeblogname.blogspot.com/</nowiki>\'\', \'\'<nowiki>//dingeblogname.wordpress.com/</nowiki>\'\', \'\'<nowiki>//dingeblogname.livejournal.com/</nowiki>\'\', udder \'\'<nowiki>//dingeblogname.vox.com/</nowiki>\'\'.
<!-- -->', # Fuzzy
	'openidlogininstructions-openidloginonly' => 'Op {{GRAMMAY:Dative|{{SITENAME}}}} kam_mer sesch bloß met OpenID enlogge.',
	'openidlogininstructions-passwordloginallowed' => 'Wann De ald ene Zohjang op {{GRAMMAR:Dative|{{SITENAME}}}}, kann De Desch janz nommaal met Dingem Metmaacher-Naame un Dingem Paßwoot [[Special:UserLogin|enlogge]].
Öm könftesch Ding OpenID zom Enlogge ze nämme, kanns De [[Special:OpenIDConvert|Dinge Zohang op OpenID ömschtälle]], nohdämm De enjelogg bes.',
	'openidupdateuserinfo' => 'Donn ming päsöönlijje Enstellunge op der neuste Stand bränge:',
	'openiddelete' => 'Donn de <i lang="en">OpenID</i> fott schmiiße',
	'openiddelete-text' => 'Wann De op dä Knopp „{{int:openiddelete-button}}“ klecks, weed de <i lang="en">OpenID</i> „$1“ vun Dinge Aanmeldung heh fott jenumme.
Dann kanns De met dä <i lang="en">OpenID</i> nit mieh heh enlogge.',
	'openiddelete-button' => 'Lohß jonn!',
	'openiddeleteerrornopassword' => 'Do kanns nit all Ding <i lang="en">OpenID</i>s fott schmieße, weil Dinge Zohjang kei Paßwoot hät.
Ohne <i lang="en">OpenID</i> künnts De nit mieh enlogge.',
	'openiddeleteerroropenidonly' => 'Do kanns nit all Ding <i lang="en">OpenID</i>s fott schmieße, weil De bloß met <i lang="en">OpenID</i>  enlogge darfß, un ohne <span i="en">OpenID</i> künnts De jaa nit mieh enlogge.',
	'openiddelete-success' => 'Di <i lang="en">OpenID</i> es jäz nit mieh met Dinge Aanmeldung verbonge.',
	'openiddelete-error' => 'Et es ene Fähler opjetrodde, wi mer di <i lang="en">OpenID</i> vun Dinge Aanmeldung fott nämme wullte.',
	'prefs-openid' => '<i lang="en">OpenID</i>',
	'prefs-openid-hide-openid' => 'Versteich Ding OpenID op Dinge Metmaacher-Sigg, wann de met <span lang="en">OpenID</span> enloggs.',
	'openid-hide-openid-label' => 'Versteich Ding OpenID op Dinge Metmaacher-Sigg, wann de met <span lang="en">OpenID</span> enloggs.',
	'openid-userinfo-update-on-login-label' => 'Donn jedesmol wann_esch hee enloggen, di Enfomazjuhne övver mesch heh noh vun <i lang="en">OpenID</i> op der neuste Stand bränge:', # Fuzzy
	'openid-associated-openids-label' => 'De <i lang="en">OpenIDs</i>, di jez met Dinge Aanmeldung heh verbonge sin:',
	'openid-urls-url' => 'de URL',
	'openid-urls-action' => 'Akßuhn',
	'openid-urls-registration' => 'Aanjemeldt zick',
	'openid-urls-delete' => 'Schmiiß fott',
	'openid-add-url' => 'Donn en neu <i lang="en">OpenID</i> dobei', # Fuzzy
	'openid-login-or-create-account' => 'Donn enlogge udder Desch neu aanmellde',
	'openid-provider-label-openid' => 'Donn Ding <i lang="en">OpenID</i> URL aanjevve',
	'openid-provider-label-google' => 'Donn met Dingem <i lang="en">Google account</i> enlogge',
	'openid-provider-label-yahoo' => 'Donn met Dinge <i lang="en">Yahoo</i> Kennung enlogge',
	'openid-provider-label-aol' => 'Donn met Dingem <i lang="en">AOL</i>-Name enlogge',
	'openid-provider-label-other-username' => 'Donn Dinge Metmaachername vun $1 aanjevve',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'openidlanguage' => 'Ziman',
	'openidtimezone' => 'Navçeya demê',
	'openidchooseusername' => 'Navê bikarhêner:',
	'openid-trusted-sites-delete-link-action-text' => 'Jê bibe',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'openid-desc' => "Sech an d'Wiki matt enger [//openid.net/ OpenID] aloggen, a sech op aneren Internetsiten, déi OpenID ënerstetzen, matt engem Wiki-Benotzerkont aloggen.",
	'openidlogin' => 'Umellen /OpenID-Benotzerkont uleeën',
	'openidserver' => 'OpenID-Server',
	'openidxrds' => 'Yadis Fichier',
	'openidconvert' => 'OpenID-Ëmwandler',
	'openiderror' => 'Feeler bei der Iwwerpréifung',
	'openiderrortext' => 'Beim Iwwerpréifen vun der OpenID URL ass e Feeler geschitt.',
	'openidconfigerror' => 'OpenId-Konfiguratiounsfeeler',
	'openidconfigerrortext' => "D'OpenID-Späicherastellung fir dës Wiki ass falsch.
Kontaktéiert w.e.g. een [[Special:ListUsers/sysop|Administrateur]].",
	'openidpermission' => 'OpenID-Autorisatiounsfeeler',
	'openidpermissiontext' => "D'OpeniD déi Dir uginn hutt ass net erlaabt fir sech op dëse Server anzeloggen.",
	'openidcancel' => 'Iwwerpréifung ofgebrach',
	'openidcanceltext' => "D'Iwwerpréifung vun der OpenID-URL gouf ofgebrach",
	'openidfailure' => 'Feeler bei der Iwwerpréifung',
	'openidfailuretext' => 'D\'iwwerpréifung vun der OpeniD URL huet net fonctionnéiert. Feeler Message: "$1"',
	'openidsuccess' => 'Iwwerpréifung huet geklappt',
	'openidsuccesstext' => "'''D'Iwwerpréifung an d'Aloggen als Benotzer $1 huet geklappt'''.

Är OpenID ass $2.

Dës a weider OpenId'en, , kann am [[Special:Preferences#mw-prefsection-openid|OpenID Tab]] vun Ären Astellungen geréiert ginn.<br />
En optionaalt Passwuert fir de Benotzerkont kann an Ärem [[Special:Preferences#mw-prefsection-personal|Benotzerprofil]] derbäigesat ginn.",
	'openidusernameprefix' => 'OpenIDBenotzer',
	'openidserverlogininstructions' => '$3 freet datt Dir Äert Passwuert agitt fir Är $2-Benotzersäit $1 (dëst ass Är OpenID URL).',
	'openidtrustinstructions' => 'Klickt un wann Dir Donnéeën mat $1 deele wellt.',
	'openidallowtrust' => 'Erlaabt $1 fir dësem Benotzerkont ze vertrauen.',
	'openidnopolicy' => 'De Site huet keng Richtlinne fir den Dateschutz uginn.',
	'openidpolicy' => 'Fir méi Informatiounen <a target="_new" href="$1">kuckt d\'Dateschutzrichtlinnen</a>.',
	'openidoptional' => 'Facultatif',
	'openidrequired' => 'Obligatoresch',
	'openidnickname' => 'Spëtznumm',
	'openidfullname' => 'Richtegen Numm',
	'openidemail' => 'E-Mailadress',
	'openidlanguage' => 'Sprooch',
	'openidtimezone' => 'Zäitzone',
	'openidchooselegend' => 'Eraussiche vum Benotzernumm a vum Benotzerkont',
	'openidchooseinstructions' => 'All Benotzer brauchen e Spëtznumm; Dir kënnt iech ee vun de Méiglechkeeten ënnendrënner auswielen.',
	'openidchoosenick' => 'Äre Spëtznumm ($1)',
	'openidchoosefull' => 'Äre richtegen Numm ($1)',
	'openidchooseurl' => 'En Numm gouf vun ärer OpenID ($1) geholl',
	'openidchooseauto' => 'En Numm deen automatesch generéiert gouf ($1)',
	'openidchoosemanual' => 'En Numm vun Ärer Wiel:',
	'openidchooseexisting' => 'E Benotzerkont deen et op dëser Wiki gëtt',
	'openidchooseusername' => 'Benotzernumm:',
	'openidchoosepassword' => 'Passwuert:',
	'openidconvertinstructions' => "Mat dësem Formulaire kënnt dir Äre Benotzerkont ännere fir eng OpenID URL ze benotzen oder méi OpenID URL'en derbäizesetzen.",
	'openidconvertoraddmoreids' => 'An en OpenID ëmwandelen oder eng aner OpenID URL derbäisetzen',
	'openidconvertsuccess' => 'An en OpenID-Benotzerkont ëmgewandelt',
	'openidconvertsuccesstext' => 'Dir hutt Är OpenID op $1 ëmgewandelt.',
	'openid-convert-already-your-openid-text' => "D'OpenID $1 ass scho mat Ärem Benotzerkont verbonn. Et mécht kee Sënn fir se nach eng Kéier derbäizesetzen.",
	'openid-convert-other-users-openid-text' => "$1 ass engem anere seng OpenID. Dir kënnt d'OpenID vun engem anere Benotzer benotzen.",
	'openidalreadyloggedin' => 'Dir sidd schonn ageloggt.',
	'openidnousername' => 'Kee Benotzernumm uginn.',
	'openidbadusername' => 'Falsche Benotzernumm uginn.',
	'openidautosubmit' => 'Op dëser Säit gëtt et e Formulaire deen automatesch soll verschéckt ginn wann Dir JavaScript ageschalt hutt.
Wann net, da verich et mam Knäppche "Continue" (Weider).',
	'openidclientonlytext' => 'Dir kënnt keng Benotzerkonten aus dëser Wiki als OpendIDen op anere Site benotzen.',
	'openidloginlabel' => 'URL vun der OpenID',
	'openidlogininstructions' => '{{SITENAME}} ënnerstëtzt den [//openid.net/ OpenID]-Standard fir eng eenheetlech Umeldung fir méi Websäiten.
OpenID mellt Iech bäi ville verschiddene Websäiten un, ouni datt Dir fir jiddwer Säiten een anert Passwuert gebrauche musst.
(Méi Informatiounen fannt Dir am [//de.wikipedia.org/wiki/OpenID Wikipedia-Artikel iwwer OpenID].)


Et gëtt vill [//openid.net/get/ OpenID-Provider] a méiglecherweis hutt Dir schonn e Benotzerkont mat aktivéierter OpenID bäi engem aneren Ubidder.',
	'openidupdateuserinfo' => 'Meng perséinlech Informatiounen aktualiséieren:',
	'openiddelete' => 'OpenID läschen',
	'openiddelete-text' => 'Wann dir op de Knäppchen "{{int:openiddelete-button}}" klickt, dann huelt Dir d\'OpenID $1 vun Ärem Benotzerkont ewech.
Da kënnt Dir Iech net méi mat dëser OpenID aloggen.',
	'openiddelete-button' => 'Confirméieren',
	'openiddeleteerrornopassword' => 'Dir kënnt net all Är OpenIDe läschen well Äre Benotzerkont kee Paswuert huet.
Dir kéint Iech net ouni eng OpenID aloggen.',
	'openiddeleteerroropenidonly' => 'Dir kënnt net all Är OpenIDe läsche well Dir Iech nëmme mat OpenID aloggen däerft.
Dir kéint Iech ouni OpenID net aloggen.',
	'openiddelete-success' => "D'OpenID gouf vun Ärem Benotzerkont ewechgeholl",
	'openiddelete-error' => 'Beim Ewehhuele vun der OpenID vun Ärem Benotzerkont ass e Feeler geschitt.',
	'prefs-openid-hide-openid' => 'Verstoppt Är OpenID op ärer Benotzersäit, wann dir Iech mat OpenID aloggt.',
	'prefs-openid-trusted-sites' => 'Siten, deenen Dir traut',
	'openid-hide-openid-label' => 'Verstoppt Är OpenID URL op ärer Benotzersäit.',
	'openid-userinfo-update-on-login-label' => "D'Informatioune vum Benotzerprofil vun dësem OpenID-Kont ginn all Kéier aktualiséiert wann Dir Iech aloggt:",
	'openid-associated-openids-label' => 'OpendIden déi mat Ärem Benotzerkont asoziéiert sinn',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Aktioun',
	'openid-urls-delete' => 'Läschen',
	'openid-add-url' => 'Eng nei OpenID bäi Äre Benotzerkont derbäisetzen',
	'openid-trusted-sites-table-header-column-url' => 'Siten, deenen Dir traut',
	'openid-trusted-sites-table-header-column-action' => 'Aktioun',
	'openid-trusted-sites-delete-link-action-text' => 'Läschen',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Confirméieren',
	'openid-local-identity' => 'Är OpenID:',
	'openid-login-or-create-account' => 'Loggt Iech an oder maacht en neie Benotzerkont op',
	'openid-provider-label-openid' => 'Gitt Är OpenID URL un',
	'openid-provider-label-google' => 'Loggt Iech mat Ärem Goggle-Benotzerkont an',
	'openid-provider-label-yahoo' => 'Loggt Iech mat Ärem Yahoo-Benotzerkont an',
	'openid-provider-label-aol' => 'Gitt Ären AOL Numm un',
	'openid-provider-label-other-username' => 'Gitt Äre(n) $1 Benotzernumm un',
	'openid-dashboard-number-openid-users' => 'Zuel vun de Benotzer mat OpenID',
	'openid-dashboard-number-users-without-openid' => 'Zuel vun de Benotzer ouni OpenID',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'openidchoosepassword' => 'Wachwaord:',
);

/** Lingala (lingála)
 * @author Eruedin
 */
$messages['ln'] = array(
	'openidemail' => 'Adɛlɛ́sɛ-ímɛ́lɛ:',
	'openidlanguage' => 'Lokótá',
	'openidchooseusername' => 'Nkómbó ya mosáleli:',
	'openidchoosepassword' => 'Banda nayó:',
	'openiddelete-button' => 'Kondima',
	'openid-urls-delete' => 'Kolímwisa',
);

/** Lithuanian (lietuvių)
 * @author Garas
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'openiderror' => 'Tikrinimo klaida',
	'openidnickname' => 'Slapyvardis',
	'openidfullname' => 'Visas vardas',
	'openidemail' => 'El. pašto adresas',
	'openidlanguage' => 'Kalba',
	'openidchoosepassword' => 'Slaptažodis:',
);

/** Latvian (latviešu)
 * @author GreenZeb
 */
$messages['lv'] = array(
	'openidchooseusername' => 'Lietotājvārds:',
	'openidchoosepassword' => 'Parole:',
);

/** Eastern Mari (олык марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'openidchoosepassword' => 'Шолыпмут:',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'openid-desc' => 'Најавувајте се на викито со [//openid.net/ OpenID], и најавувајте се со други OpenID-поддржни страници со вики-корисничка сметка',
	'openididentifier' => 'OpenID-назнака',
	'openidlogin' => 'Најава / создај сметка со OpenID',
	'openidserver' => 'OpenID опслужувач',
	'openid-identifier-page-text-user' => 'Оваа страница е назнака на корисникот „$1“',
	'openid-identifier-page-text-different-user' => 'Страницава е назнаката на корисникот со назнака $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'Ова е неважечка локална OpenID-назнака.',
	'openid-server-identity-page-text' => 'Ова е техничка страница на опслужувачот на OpenID што се однесува на започнувањето на заверката. Страницата нема друга цел.',
	'openidxrds' => 'Yadis податотека',
	'openidconvert' => 'OpenID претворач',
	'openiderror' => 'Грешка при потврдувањето',
	'openiderrortext' => 'Настана грешка при потврдувањето на URL адресата на OpenID.',
	'openidconfigerror' => 'Грешка со конфигурацијата на OpenID',
	'openidconfigerrortext' => 'Складишните посатвки на OpenID за ова вики се погрешни.
Консултирајте [[Special:ListUsers/sysop|администратор]].',
	'openidpermission' => 'Грешка при дозволување на OpenID',
	'openidpermissiontext' => 'На внесениот OpenID не му е дозволено најавување на овој опслужувач.',
	'openidcancel' => 'Потврдувањето е откажано',
	'openidcanceltext' => 'Потврдувањето на URL адресата на OpenID беше откажана.',
	'openidfailure' => ' Потврдувањето не успеа',
	'openidfailuretext' => 'Потврдувањето на URL адресата на OpenID не успеа. Извештај за грешката: „$1“',
	'openidsuccess' => 'Потврдувањето успеа',
	'openidsuccesstext' => "'''Проверката е успешна. Најавени сте како корисник $1'''.

Вашиот OpenID гласи $2 .

Можете да раководите со ова и други незадолжителни OpenID-ја во [[Special:Preferences#mw-prefsection-openid|јазичето за OpenID]] во вашите нагодувања.<br />
По желба можете да додадете и лозинка на сметката во вашиот [[Special:Preferences#mw-prefsection-personal|корисничкиот профил]].",
	'openidusernameprefix' => 'OpenIDКорисник',
	'openidserverlogininstructions' => '$3 бара да ја внесете лозинката за вашиот корисник $2 страница $1 (OpenID URL)',
	'openidtrustinstructions' => 'Штиклирајте ако сакате да споделувате податоци со $1.',
	'openidallowtrust' => 'Дозволи му на $1 да ѝ верува на оваа корисничка сметка.',
	'openidnopolicy' => 'Страницата нема назначено заштита на личните податоци.',
	'openidpolicy' => 'Погледајте го <a target="_new" href="$1">правилникот за приватност</a> за повеќе информации.',
	'openidoptional' => 'Незадолжително',
	'openidrequired' => 'Задолжително',
	'openidnickname' => 'Прекар',
	'openidfullname' => 'Вистинско име',
	'openidemail' => 'Е-пошта',
	'openidlanguage' => 'Јазик',
	'openidtimezone' => 'Часовен појас',
	'openidchooselegend' => 'Избор на корисничко име и сметка',
	'openidchooseinstructions' => 'Сите корисници треба да имаат прекар;
можете да изберете едно од долунаведените предлози:',
	'openidchoosenick' => 'Вашиот прекар ($1)',
	'openidchoosefull' => 'Вашето вистинско име ($1)',
	'openidchooseurl' => 'Име преземено од вашиот OpenID ($1)',
	'openidchooseauto' => 'Автоматски создадено име ($1)',
	'openidchoosemanual' => 'Име по избор:',
	'openidchooseexisting' => 'Постоечка сметка на ова вики',
	'openidchooseusername' => 'корисничко име:',
	'openidchoosepassword' => 'Лозинка:',
	'openidconvertinstructions' => 'Овој образец ви овозможува да ја промените вашата корисничка сметка за да користи OpenID URL адреса или да додавате уште OpenID URL адреси',
	'openidconvertoraddmoreids' => 'Претворете во OpenID или додајте друга OpenID URL адреса',
	'openidconvertsuccess' => 'Претворањето во OpenID е успешно',
	'openidconvertsuccesstext' => 'Успешно го претворивте вашиот OpenID во $1.',
	'openid-convert-already-your-openid-text' => 'Назнаката $1 на OpenID е веќе здружена со вашата сметка. Нема зошто да се додава пак.',
	'openid-convert-other-users-openid-text' => '$1 е туѓа назнака од OpenID. Не можете да користите назнаки на други корисници.',
	'openidalreadyloggedin' => 'Веќе сте најавени.',
	'openidalreadyloggedintext' => "'''Веќе сте најавени, $1!'''

Можете да раководите со (погледате, избришете, додавате повеќе) OpenID-ја во [[Special:Preferences#mw-prefsection-openid|јазичето за OpenID]] во вашите нагодувања",
	'openidnousername' => 'Немате наведено корисничко име.',
	'openidbadusername' => 'Беше назначено грешно име.',
	'openidautosubmit' => 'На оваа страница стои образец кој треба да се поднесе автоматски ако имате овозможено JavaScript.
Ако ова не се случи, притиснете на копчето "Continue" (Продолжи).',
	'openidclientonlytext' => 'Не можете да користите сметки од ова вики како OpenID за друго мрежно место.',
	'openidloginlabel' => 'OpenID URL адреса',
	'openidlogininstructions' => '{{SITENAME}} го поддржува [//openid.net/ OpenID] - стандард за една сметка за најава на разни мрежни места.
OpenID ви овозможува да се најавувате на многу различни мрежни места без да ви треба различна лозинка за секое поединечно.
(Повеќе информации на [//mk.wikipedia.org/wiki/OpenID статијата за OpenID на Википедија].)
Постојат многу [//openid.net/get/ услужници за OpenID]. Можеби веќе имате сметка со овозможено OpenID на друга служба.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''само'' ви овозможува да се најавувате со OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Ако веќе имате сметка на {{SITENAME}}, можете да се [[Special:UserLogin|најавите]] со корисничкото име и лозинката по редовен пат.
За да користите OpenID во иднина, [[Special:OpenIDConvert|претворете ја вашата сметка во OpenID]] откако ќе се најавите нормално.',
	'openidupdateuserinfo' => 'Поднови ги моите лични информации:',
	'openiddelete' => 'Избриши го овој OpenID',
	'openiddelete-text' => 'Со кликнување на копчето „{{int:openiddelete-button}}“ ќе го отстраните OpenID $1 од вашата сметка.
Повеќе нема да можете да се најавувате со овој OpenID.',
	'openiddelete-button' => 'Потврди',
	'openiddeleteerrornopassword' => 'Не можете да ги избришете сите ваши OpenID-ја бидејќи вашата сметка нема лозинка.
Ако немате OpenID нема да можете да се најавите.',
	'openiddeleteerroropenidonly' => 'Не можете да ги избришете сите ваши OpenID-ја бидејќи дозволено ви е да се најавувате само со OpenID.
Ако немате OpenID нема да можете да се најавите.',
	'openiddelete-success' => 'Овој OpenID е успешно отстранет од вашата сметка.',
	'openiddelete-error' => 'Настана грешка при отстранувањето на OpenID од вашата сметка.',
	'openid-openids-were-not-merged' => 'OpenID-јата не се споија при спојувањето на корисничките сметки.',
	'prefs-openid-hide-openid' => 'Скријте ја вашата OpenID URL адреса на вашата корисничката страница, ако се најавувате со OpenID.',
	'prefs-openid-userinfo-update-on-login' => 'Поднова на информациите на корисник на OpenID',
	'prefs-openid-associated-openids' => 'Вашите OpenID-сметки за најавување на {{SITENAME}}',
	'prefs-openid-trusted-sites' => 'Мрежни места од доверба',
	'prefs-openid-local-identity' => 'Вашиот OpenID за најава на други мрежни места',
	'openid-hide-openid-label' => 'Скриј ја адресата на мојот OpenID на корисничката страница.',
	'openid-show-openid-url-on-userpage-always' => 'Вашиот OpenID секогаш стои на корисничката страница кога ќе ја посетите.',
	'openid-show-openid-url-on-userpage-never' => 'Вашиот OpenID никогаш не се прикажува на корисничката страница.',
	'openid-userinfo-update-on-login-label' => 'Полињата за профилни информации што автоматски се подновуваат од OpenID-сметката секојпат кога ќе се најавите:',
	'openid-associated-openids-label' => 'OpenID поврзани со вашата сметка:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Дејство',
	'openid-urls-registration' => 'Време на регистрација',
	'openid-urls-delete' => 'Избриши',
	'openid-add-url' => 'Додај нов OpenID кон сметката',
	'openid-trusted-sites-label' => 'Мрежните места на коишто им верувате и кајшто го имате користено вашиот OpenID за најава:',
	'openid-trusted-sites-table-header-column-url' => 'Мрежни места од доверба',
	'openid-trusted-sites-table-header-column-action' => 'Дејство',
	'openid-trusted-sites-delete-link-action-text' => 'Избриши',
	'openid-trusted-sites-delete-all-link-action-text' => 'Избриши ги сите доверливи мреж. места',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Бришење на доверливи мреж. места',
	'openid-trusted-sites-delete-confirmation-question' => 'Стискајќи на копчето „{{int:openid-trusted-sites-delete-confirmation-button-text}}“ ќе го отстраните „$1“ од списокот на мрежни места од доверба.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'Стискајќи на копчето „{{int:openid-trusted-sites-delete-confirmation-button-text}}“ ќе ги сите мрежни места од доверба што се наведени на профилот.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Потврди',
	'openid-trusted-sites-delete-confirmation-success-text' => '„$1“ е успешно отстрането од списокот на доверливи мрежни места.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Сите мрежни места од доверба се успешно отстранети од списокот на профилот.',
	'openid-local-identity' => 'Вашиот OpenID:',
	'openid-login-or-create-account' => 'Најавете се или создајте нова сметка',
	'openid-provider-label-openid' => 'Внесете ја вашата OpenID URL адреса',
	'openid-provider-label-google' => 'Најавете се со вашата сметка на Google',
	'openid-provider-label-yahoo' => 'Најавете се со вашата сметка на Google',
	'openid-provider-label-aol' => 'Внесете го вашето име на AOL',
	'openid-provider-label-wmflabs' => 'Најавете се со вашата сметка на Wmflabs',
	'openid-provider-label-other-username' => 'Внесете го вашето $1 корисничко име',
	'specialpages-group-openid' => 'Службени страници и статусни информации на OpenID',
	'right-openid-converter-access' => 'Може да ја додава или претвора својата сметка за употреба на OpenID-идентитети',
	'right-openid-dashboard-access' => 'Стандарден пристап до таблата на OpenID',
	'right-openid-dashboard-admin' => 'Администраторски пристап до таблата на OpenID',
	'action-openid-converter-access' => 'додавање или претворање на вашата сметка за да користи идентитети со OpenID',
	'action-openid-dashboard-access' => 'пристап на контролната табла на OpenID',
	'action-openid-dashboard-admin' => 'пристап на администраторската контролна табла на OpenID',
	'openid-dashboard-title' => 'Табла на OpenID',
	'openid-dashboard-title-admin' => 'Табла на OpenID (администратор)',
	'openid-dashboard-introduction' => 'Тековни нагодувања на додатокот за OpenID ([$1 помош])',
	'openid-dashboard-number-openid-users' => 'Број на корисници со OpenID',
	'openid-dashboard-number-openids-in-database' => 'Број на OpenID-ја (вкупно)',
	'openid-dashboard-number-users-without-openid' => 'Број на корисници без OpenID',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'openidlogin' => 'ഓപ്പൺ ഐ.ഡി. ഉപയോഗിച്ച് ലോഗിൻ ചെയ്യുക', # Fuzzy
	'openidserver' => 'OpenID സെർ‌വർ',
	'openidcancel' => 'സ്ഥിരീകരണം റദ്ദാക്കിയിരിക്കുന്നു',
	'openidfailure' => 'സ്ഥിരീകരണം പരാജയപ്പെട്ടു',
	'openidsuccess' => 'സ്ഥിരീകരണം വിജയിച്ചു',
	'openidusernameprefix' => 'ഓപ്പൺ ഐ.ഡി. ഉപയോക്താവ്',
	'openidserverlogininstructions' => '$3യിലേക്ക് $2 എന്ന ഉപയോക്താവായി (ഉപയോക്തൃതാൾ $1) ലോഗിൻ ചെയ്യുവാൻ താങ്കളുടെ രഹസ്യവാക്ക് താഴെ രേഖപ്പെടുത്തുക.', # Fuzzy
	'openidtrustinstructions' => '$1 താങ്കളുടെ ഡാറ്റ പങ്കുവെക്കണമോ എന്ന കാര്യം പരിശോധിക്കുക.',
	'openidnopolicy' => 'സൈറ്റ് സ്വകാര്യതാ നയം കൊടുത്തിട്ടില്ല.',
	'openidoptional' => 'നിർബന്ധമില്ല',
	'openidrequired' => 'അത്യാവശ്യമാണ്‌',
	'openidnickname' => 'ചെല്ലപ്പേര്',
	'openidfullname' => 'പൂർണ്ണനാമം',
	'openidemail' => 'ഇമെയിൽ വിലാസം',
	'openidlanguage' => 'ഭാഷ',
	'openidtimezone' => 'സമയ മേഖല',
	'openidchooselegend' => 'ഐച്ഛിക ഉപയോക്തൃനാമം', # Fuzzy
	'openidchooseinstructions' => 'എല്ലാ ഉപയോക്താക്കൾക്കും ഒരു വിളിപ്പേരു ആവശ്യമാണ്‌. താഴെ കൊടുത്തിരിക്കുന്നവയിൽ നിന്നു ഒരെണ്ണം താങ്കൾക്ക് തിരഞ്ഞെടുക്കാവുന്നതാണ്‌.',
	'openidchoosenick' => 'താങ്കളുടെ വിളിപ്പേര് ($1)',
	'openidchoosefull' => 'താങ്കളുടെ പൂർണ്ണനാമം ($1)',
	'openidchooseurl' => 'താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി.യിൽ നിന്നു തിരഞ്ഞെടുത്ത ഒരു പേര്‌ ($1)',
	'openidchooseauto' => 'യാന്ത്രികമായി ഉണ്ടാക്കിയ പേര്‌ ($1)',
	'openidchoosemanual' => 'താങ്കൾക്ക് ഇഷ്ടമുള്ള ഒരു പേര്‌:',
	'openidchooseexisting' => 'ഈ വിക്കിയിലെ നിലവിലുള്ള അംഗത്വം',
	'openidchooseusername' => 'ഉപയോക്തൃനാമം:',
	'openidchoosepassword' => 'രഹസ്യവാക്ക്:',
	'openidconvertsuccess' => 'ഓപ്പൺ ഐ.ഡി.യിലേക്ക് വിജയകരമായി പരിവർത്തനം ചെയ്തിരിക്കുന്നു',
	'openidconvertsuccesstext' => 'താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി. $1ലേക്കു വിജയകരമായി പരിവർത്തനം ചെയ്തിരിക്കുന്നു.',
	'openid-convert-already-your-openid-text' => 'ഇതു ഇപ്പോൾ തന്നെ താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി.യാണ്‌.',
	'openid-convert-other-users-openid-text' => 'ഇതു മറ്റാരുടേയോ ഓപ്പൺ‌ഐ.ഡി.യാണ്‌.',
	'openidnousername' => 'ഉപയോക്തൃനാമം തിരഞ്ഞെടുത്തിട്ടില്ല.',
	'openidbadusername' => 'അസാധുവായ ഉപയോക്തൃനാമമാണു തിരഞ്ഞെടുത്തിരിക്കുന്നത.',
	'openidloginlabel' => 'ഓപ്പൺ‌ഐ.ഡി. വിലാസം',
	'openid-urls-action' => 'നടപടി',
	'openid-urls-delete' => 'മായ്ക്കുക',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'openidlanguage' => 'Хэл',
	'openidtimezone' => 'Цагийн бүс',
	'openidchooseusername' => 'Хэрэглэгчийн нэр:',
);

/** Marathi (मराठी)
 * @author Htt
 * @author Kaustubh
 */
$messages['mr'] = array(
	'openid-desc' => 'विकिवर [//openid.net/ ओपनID] वापरून प्रवेश करा, तसेच कुठल्याही इतर ओपनID संकेतस्थळावर विकि सदस्य नाम वापरून प्रवेश करा',
	'openidlogin' => 'ओपनID वापरून प्रवेश करा', # Fuzzy
	'openidserver' => 'ओपनID सर्व्हर',
	'openidxrds' => 'Yadis संचिका',
	'openidconvert' => 'ओपनID कन्व्हर्टर',
	'openiderror' => 'तपासणी त्रुटी',
	'openiderrortext' => 'ओपनID URL च्या तपासणीमध्ये त्रुटी आढळलेली आहे.',
	'openidconfigerror' => 'ओपनID व्यवस्थापन त्रुटी',
	'openidconfigerrortext' => 'या विकिसाठीचे ओपनID जतन व्यवस्थापन चुकीचे आहे.
कृपया प्रबंधकांशी संपर्क करा.', # Fuzzy
	'openidpermission' => 'ओपनID परवानगी त्रुटी',
	'openidpermissiontext' => 'आपण दिलेल्या ओपनID या सर्व्हरवर प्रवेश करता येणार नाही.',
	'openidcancel' => 'तपासणी रद्द',
	'openidcanceltext' => 'ओपनID URL ची तपासणी रद्द केलेली आहे.',
	'openidfailure' => 'तपासणी पूर्ण झाली नाही',
	'openidfailuretext' => 'ओपनID URL ची तपासणी पूर्ण झालेली नाही. त्रुटी संदेश: "$1"',
	'openidsuccess' => 'तपासणी पूर्ण',
	'openidsuccesstext' => 'ओपनID URL ची तपासणी पूर्ण झालेली आहे.', # Fuzzy
	'openidusernameprefix' => 'ओपनIDसदस्य',
	'openidserverlogininstructions' => '$3 वर $2 या नावाने (सदस्य पान $1) प्रवेश करण्यासाठी आपला परवलीचा शब्द खाली लिहा.', # Fuzzy
	'openidtrustinstructions' => 'तुम्ही $1 बरोबर डाटा शेअर करू इच्छिता का याची तपासणी करा.',
	'openidallowtrust' => '$1 ला ह्या सदस्य खात्यावर विश्वास ठेवण्याची अनुमती द्या.',
	'openidnopolicy' => 'संकेतस्थळावर गोपनियता नीती दिलेली नाही.',
	'openidpolicy' => 'अधिक माहितीसाठी <a target="_new" href="$1">गुप्तता नीती</a> तपासा.',
	'openidoptional' => 'वैकल्पिक',
	'openidrequired' => 'आवश्यक',
	'openidnickname' => 'टोपणनाव',
	'openidfullname' => 'पूर्णनाव', # Fuzzy
	'openidemail' => 'इमेल पत्ता',
	'openidlanguage' => 'भाषा',
	'openidtimezone' => 'वेळक्षेत्र',
	'openidchooseinstructions' => 'सर्व सदस्यांना टोपणनाव असणे आवश्यक आहे;
तुम्ही खाली दिलेल्या नावांमधून एक निवडू शकता.',
	'openidchoosefull' => 'तुमचे पूर्ण नाव ($1)', # Fuzzy
	'openidchooseurl' => 'तुमच्या ओपनID मधून घेतलेले नाव ($1)',
	'openidchooseauto' => 'एक आपोआप तयार झालेले नाव ($1)',
	'openidchoosemanual' => 'तुमच्या आवडीचे नाव:',
	'openidchooseexisting' => 'या विकिवरील अस्तित्वात असलेले सदस्य खाते:', # Fuzzy
	'openidchooseusername' => 'सदस्यनाम:',
	'openidchoosepassword' => 'परवलीचा शब्द:',
	'openidconvertinstructions' => 'हा अर्ज तुम्हाला ओपनID URL वापरण्यासाठी तुमचे सदस्यनाव बदलण्याची परवानगी देतो.', # Fuzzy
	'openidconvertsuccess' => 'ओपनID मध्ये बदल पूर्ण झालेले आहेत',
	'openidconvertsuccesstext' => 'तुम्ही तुमचा ओपनID $1 मध्ये यशस्वीरित्या बदललेला आहे.',
	'openid-convert-already-your-openid-text' => 'हा तुमचाच ओपनID आहे.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'हा दुसर्‍याचा ओपनID आहे.', # Fuzzy
	'openidalreadyloggedin' => "'''$1, तुम्ही अगोदरच प्रवेश केलेला आहे!'''

जर तुम्ही भविष्यात ओपनID वापरून प्रवेश करू इच्छित असाल, तर तुम्ही [[Special:OpenIDConvert|तुमचे खाते ओपनID साठी बदलू शकता]].", # Fuzzy
	'openidnousername' => 'सदस्यनाव दिले नाही.',
	'openidbadusername' => 'चुकीचे सदस्यनाव दिले आहे.',
	'openidautosubmit' => 'या पानावरील अर्ज जर तुम्ही जावास्क्रीप्ट वापरत असाल तर आपोआप पाठविला जाईल. जर तसे झाले नाही, तर "Continue" (पुढे) कळीवर टिचकी मारा.',
	'openidclientonlytext' => 'या विकिवरील खाती तुम्ही इतर संकेतस्थळांवर ओपनID म्हणून वापरू शकत नाही.',
	'openidloginlabel' => 'ओपनID URL',
	'openidlogininstructions' => "{{SITENAME}} [//openid.net/ ओपनआयडी] वापरून विविध संकेतस्थळांवर प्रवेश करण्याची अनुमती देते.
ओपनआयडी वापरुन तुम्ही एकाच परवलीच्या शब्दाने विविध संकेतस्थळांवर प्रवेश करू शकता.
(अधिक माहिती साठी [//en.wikipedia.org/wiki/OpenID विकिपीडिया वरील ओपनआयडीवरील लेख] पहा.)

जर {{SITENAME}} वर अगोदरच तुमचे खाते असेल, तुम्ही नेहमीप्रमाणे तुमचे सदस्यनाव व परवलीचा शब्द वापरून [[Special:UserLogin|प्रवेश करा]].
भविष्यात ओपनआयडी वापरण्यासाठी, तुम्ही प्रवेश केल्यानंतर [[Special:OpenIDConvert|तुमचे खाते ओपनआयडी मध्ये बदला]].

अनेक [http://wiki.openid.net/Public_OpenID_providers Public ओपनआयडी वितरक] आहेत, व तुम्ही अगोदरच ओपनआयडी चे खाते उघडले असण्याची शक्यता आहे.

; इतर विकि : जर तुमच्याकडे ओपनआयडी वापरणार्‍या विकिवर खाते असेल, जसे की [//wikitravel.org/ विकिट्रॅव्हल], [//www.wikihow.com/ विकिहाऊ], [//vinismo.com/ विनिस्मो], [//aboutus.org/ अबाउट‍अस] किंवा [//kei.ki/ कैकी], तुम्ही {{SITENAME}} वर तुमच्या त्या विकिवरील सदस्य पानाची '''पूर्ण URL''' वरील पृष्ठपेटीमध्ये देऊन प्रवेश करू शकता. उदाहरणार्थ, ''<nowiki>//kei.ki/en/User:Evan</nowiki>''.
; [//openid.yahoo.com/ याहू!] : जर तुमच्याकडे याहू! चे खाते असेल, तर तुम्ही वरील पृष्ठपेटीमध्ये याहू! ने दिलेल्या ओपनआयडीचा वापर करून प्रवेश करू शकता. याहू! ओपनआयडी URL ची रुपरेषा ''<nowiki>https://me.yahoo.com/तुमचेसदस्यनाव</nowiki>'' अशी आहे.
; [//dev.aol.com/aol-and-63-million-openids एओएल] : जर तुमच्याकडे [//www.aol.com/ एओएल]चे खाते असेल, जसे की [//www.aim.com/ एम] खाते, तुम्ही {{SITENAME}} वर वरील पृष्ठपेटीमध्ये एओएल ने दिलेल्या ओपनआयडीचा वापर करून प्रवेश करू शकता. एओएल ओपनआयडी URL ची रुपरेषा ''<nowiki>//openid.aol.com/तुमचेसदस्यनाव</nowiki>'' अशी आहे. तुमच्या सदस्यनावात अंतर (space) चालणार नाही.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-openid-provider.html ब्लॉगर], [//faq.wordpress.com/2007/03/06/what-is-openid/ वर्डप्रेस.कॉम], [//www.livejournal.com/openid/about.bml लाईव्ह जर्नल], [//bradfitz.vox.com/library/post/openid-for-vox.html वॉक्स] : जर यापैकी कुठेही तुमचा ब्लॉग असेल, तर वरील पृष्ठपेटीमध्ये तुमच्या ब्लॉगची URL भरा. उदाहरणार्थ, ''<nowiki>//yourusername.blogspot.com/</nowiki>'', ''<nowiki>//yourusername.wordpress.com/</nowiki>'', ''<nowiki>//yourusername.livejournal.com/</nowiki>'', किंवा ''<nowiki>//yourusername.vox.com/</nowiki>''.", # Fuzzy
	'openiddelete-button' => 'खात्री करा',
	'prefs-openid-hide-openid' => 'जर तुम्ही ओपनID वापरून प्रवेश केला, तर तुमच्या सदस्यपानावरील तुमचा ओपनID लपवा.',
	'openid-hide-openid-label' => 'जर तुम्ही ओपनID वापरून प्रवेश केला, तर तुमच्या सदस्यपानावरील तुमचा ओपनID लपवा.',
	'openid-urls-delete' => 'वगळा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 * @author Diagramma Della Verita
 */
$messages['ms'] = array(
	'openid-desc' => 'Membolehkan pengguna untuk log masuk ke dalam wiki dengan [//openid.net/ OpenID]. Jika dihidupkan pada wiki, pengguna juga obleh menggunakan URL akaun penggunanya di wiki ini sebagai OpenID untuk log masuk ke dalam tapak web lain yang sedia OpenID',
	'openidlogin' => 'Log masuk / buka akaun dengan OpenID',
	'openidserver' => 'Pelayan OpenID',
	'openid-server-identity-page-text' => 'Ini ialah halaman pelayan teknikal OpenID untuk memulakan penentusahan OpenID tanpa sebarang tujuan lain.',
	'openidxrds' => 'Fail Yadis',
	'openidconvert' => 'Penukar OpenID',
	'openiderror' => 'Ralat pengesahan',
	'openiderrortext' => 'Berlaku ralat ketika pengesahan URL OpenID.',
	'openidconfigerror' => 'Ralat konfigurasi OpenID',
	'openidconfigerrortext' => 'Konfigurasi storan OpenID bagi wiki ini tidak sah.
Sila hubungi [[Special:ListUsers/sysop|pentadbir]].',
	'openidpermission' => 'Ralat keizinan OpenID',
	'openidpermissiontext' => 'OpenID yang anda berikan tidak dibenarkan untuk mengakses pelayan ini.',
	'openidcancel' => 'Pengesahan telah dibatalkan',
	'openidcanceltext' => 'Pengesahan URL OpenID telah dibatalkan.',
	'openidfailure' => 'Pengesahan gagal',
	'openidfailuretext' => 'Pengesahan URL OpenID gagal. Pesanan ralat: "$1"',
	'openidsuccess' => 'Pengesahan berjaya',
	'openidsuccesstext' => "'''Pengesahan berjaya dan log masuk sebagai pengguna $1'''.

OpenID anda ialah $2 .

Ini dan OpenID pilihan yang lain boleh diuruskan dalam [[Special:Preferences#mw-prefsection-openid|tab OpenID]] keutamaan anda.<br />
Kata laluan akaun pilihan boleh ditambahkan ke dalam [[Special:Preferences#mw-prefsection-personal|Profil pengguna]] anda.",
	'openidusernameprefix' => 'PenggunaOpenID',
	'openidserverlogininstructions' => '$3 meminta supaya anda memasukkan kata laluan anda untuk laman $2 anda, $1 (iaitu URL OpenID anda)',
	'openidtrustinstructions' => 'Raitkan jika anda ingin berkongsi data dengan $1.',
	'openidallowtrust' => 'Benarkan $1 untuk mempercayai akaun pengguna ini.',
	'openidnopolicy' => 'Tapak ini belum menetapkan dasar privasi.',
	'openidpolicy' => 'Rujuk <a target="_new" href="$1">dasar privasi</a> untuk maklumat lanjut.',
	'openidoptional' => 'Pilihan',
	'openidrequired' => 'Wajib',
	'openidnickname' => 'Nama timangan',
	'openidfullname' => 'Nama penuh', # Fuzzy
	'openidemail' => 'Alamat e-mel',
	'openidlanguage' => 'Bahasa',
	'openidtimezone' => 'Zon waktu',
	'openidchooselegend' => 'Pilihan nama pengguna dan akaun',
	'openidchooseinstructions' => 'Semua pengguna memerlukan nama timangan;
anda boleh memilih satu daripada pilihan-pilihan berikut.',
	'openidchoosenick' => 'Nama timangan anda ($1)',
	'openidchoosefull' => 'Nama penuh anda ($1)', # Fuzzy
	'openidchooseurl' => 'Nama yang dipilih daripada OpenID anda ($1)',
	'openidchooseauto' => 'Nama janaan automatik ($1)',
	'openidchoosemanual' => 'Nama pilihan anda:',
	'openidchooseexisting' => 'Akaun yang sedia ada di wiki ini',
	'openidchooseusername' => 'Nama pengguna:',
	'openidchoosepassword' => 'Kata laluan:',
	'openidconvertinstructions' => 'Borang membolehkan anda untuk ini untuk menukar akaun anda untuk menggunakan OpenID URL. atau menambahkan lagi URL OpenID',
	'openidconvertoraddmoreids' => 'Tukar ke OpenID atau tambahkan satu lagi URL OpenID',
	'openidconvertsuccess' => 'Berjaya ditukar ke OpenID',
	'openidconvertsuccesstext' => 'Anda telah berjaya menukar OpenID ke $1.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 sudah dikaitkan dengan akaun anda. Tiada perlunya menambahkannya semula.',
	'openid-convert-other-users-openid-text' => '$1 adalah OpenID orang lain. Anda tidak boleh menggunakan OpenID pengguna lain.',
	'openidalreadyloggedin' => 'Anda sudah log masuk.',
	'openidalreadyloggedintext' => "'''Anda sudah log masuk, $1!'''

Anda boleh menguruskan (lihat, hapuskan, tambahkan lagi) OpenID dalam [[Special:Preferences#mw-prefsection-openid|tab OpenID]] dalam keutamaan anda.",
	'openidnousername' => 'Nama pengguna tidak dinyatakan.',
	'openidbadusername' => 'Nama pengguna yang dinyatakan tidak sah.',
	'openidautosubmit' => 'Laman ini mempunyai borang yang sepatutnya diserahkan secara automatik jika JavaScript dihidupkan.
Jika tidak, cuba butang "Continue" (sambung).',
	'openidclientonlytext' => 'Anda tidak boleh menggunakan akaun-akaun dari wiki ini sebagai OpenID di laman lain.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} menyokong piawaian [//openid.net/ OpenID] untuk daftar masuk sekali sesama tapak web.
OpenID membolehkan anda untuk log masuk ke dalam pelbagai tapak web tanpa menggunakan kata laluan yang berbeza untuk setiap satu.
(Lihat [//ms.wikipedia.org/wiki/OpenID rencana OpenID di Wikipedia] untuk maklumat lanjut.)
Terdapat banyak [//openid.net/get/ perkhidmatan OpenID]; anda mungkin sudah membuka akaun yang dihidupkan OpenID di sebuah perkhidmatan lain.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''hanya'' membolehkan anda untuk log masuk dengan OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Jika anda sudah memiliki akaun di {{SITENAME}}, anda boleh [[Special:UserLogin|log masuk]] dengan nama pengguna dan kata laluan anda seperti biasa.
Untuk menggunakan OpenID pada masa akan datang, anda boleh [[Special:OpenIDConvert|mengubah akuan anda menjadi OpenID]] selepas anda log masuk seperti biasa.',
	'openidupdateuserinfo' => 'Kemas kinikan maklumat pribadi saya:',
	'openiddelete' => 'Hapuskan OpenID',
	'openiddelete-text' => 'Dengan menekan butang "{{int:openiddelete-button}}", anda akan menghapuskan OpenID $1 dari akaun Anda.
Anda tidak akan dapat log masuk dengan OpenID ini lagi.',
	'openiddelete-button' => 'Sahkan',
	'openiddeleteerrornopassword' => 'Anda tidak boleh menghapuskan semua OpenID Anda kerana akaun anda tidak diberi kata kata laluan.
Anda tidak boleh log masuk tanpa OpenID.',
	'openiddeleteerroropenidonly' => 'Anda tidak boleh menghapuskan semua OpenID Anda kerana anda hanya dibenarkan untuk log masuk dengan OpenID.
Anda tidak boleh log masuk tanpa OpenID.',
	'openiddelete-success' => 'OpenID ini berjaya dibuang dari akaun anda.',
	'openiddelete-error' => 'Ralat berlaku ketika membuang OpenID ini dari akaun anda.',
	'openid-openids-were-not-merged' => 'OpenID tidak digabungkan sekali ketika akaun-akaun pengguna digabungkan.',
	'prefs-openid-hide-openid' => 'Sorokkan URL OpenID anda pada laman pengguna anda, jika anda log masuk dengan OpenID.',
	'openid-hide-openid-label' => 'Sorokkan URL OpenID anda pada laman pengguna anda, jika anda log masuk dengan OpenID.',
	'openid-userinfo-update-on-login-label' => 'Kemaskinikan maklumat berikut dari persona OpenID setiap kali saya log masuk:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID yang dikaitkan dengan akaun anda:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Tindakan',
	'openid-urls-registration' => 'Waktu pendaftaran',
	'openid-urls-delete' => 'Hapuskan',
	'openid-add-url' => 'Tambahkan OpenID baru', # Fuzzy
	'openid-login-or-create-account' => 'Log masuk atau buka akaun baru',
	'openid-provider-label-openid' => 'Taipkan URL OpenID anda',
	'openid-provider-label-google' => 'Log masuk dengan akaun Google anda',
	'openid-provider-label-yahoo' => 'Log masuk dengan akaun Yahoo anda',
	'openid-provider-label-aol' => 'Taipkan nama pengguna AOL anda',
	'openid-provider-label-wmflabs' => 'Log masuk dengan akaun Wmflabs anda',
	'openid-provider-label-other-username' => 'Taipkan nama pengguna $1 anda',
	'specialpages-group-openid' => 'Laman-laman perkhidmatan dan maklumat status OpenID',
	'right-openid-converter-access' => 'Boleh menambahkan atau menukarkan akaun mereka untuk menggunakan identiti OpenID',
	'right-openid-dashboard-access' => 'Akses piawai ke dalam papan pemuka OpenID',
	'right-openid-dashboard-admin' => 'Akses pentadbir ke dalam papan pemuka OpenID',
	'action-openid-converter-access' => 'menambah atau menukar akaun anda untuk menggunakan identiti OpenID',
	'action-openid-dashboard-access' => 'mengakses papan pemuka OpenID',
	'action-openid-dashboard-admin' => 'mengakses papan pemuka penyelia OpenID',
	'openid-dashboard-title' => 'Papan pemuka OpenID',
	'openid-dashboard-title-admin' => 'Papan Pemuka OpenID (pentadbir)',
	'openid-dashboard-introduction' => 'Tetapan sambungan OpenID semasa ([$1 bantuan])',
	'openid-dashboard-number-openid-users' => 'Bilangan pengguna dengan OpenID',
	'openid-dashboard-number-openids-in-database' => 'Bilangan OpenID (jumlah)',
	'openid-dashboard-number-users-without-openid' => 'Bilangan pengguna tanpa OpenID',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'openidlanguage' => 'Lingwa',
	'openidchooseusername' => 'Isem tal-utent',
	'openidchoosepassword' => 'Password:',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'openidoptional' => 'ရွေးပိုင်ခွင့်',
	'openidrequired' => 'လိုအပ်သည်',
	'openidnickname' => 'Nickname အမည်',
	'openidfullname' => 'အမည် အပြည့်အစုံ',
	'openidemail' => 'အီးမေး လိပ်စာ',
	'openidlanguage' => 'ဘာသာ',
	'openid-provider-label-google' => 'Google အကောင့် အသုံးပြု၍ Login ဝင်ရန်',
	'openid-provider-label-yahoo' => 'Yahoo အကောင့် အသုံးပြု၍ Login ဝင်ရန်',
	'openid-provider-label-aol' => 'AOL အကောင့် အားရိုက်ပါ',
	'openid-provider-label-other-username' => 'သင်၏ $1 မှ အသုံးပြုသူ အမည်အား ရိုက်ပါ',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'openidoptional' => 'Мелень коряс',
	'openidrequired' => 'Тентеме кодаяк',
	'openidnickname' => 'Путонь лем',
	'openidfullname' => 'Лем педе-пес',
	'openidemail' => 'Е-сёрма парго',
	'openidlanguage' => 'Кель',
	'openidtimezone' => 'Шкань каркс',
	'openidchooseusername' => 'Совицянь леметь:',
	'openidchoosepassword' => 'Совамо валот:',
	'openiddelete-button' => 'Кемекстамс',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 * @author Teòtlalili
 */
$messages['nah'] = array(
	'openidemail' => 'E-mailcān',
	'openidlanguage' => 'Tlâtòlli',
	'openidchoosepassword' => 'Motlahtōlichtacāyo',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'openid-desc' => 'Logg inn på wikien med en [//openid.net/ OpenID] og logg inn på andre sider som bruker OpenID med kontoen herfra',
	'openidlogin' => 'Logg inn med OpenID', # Fuzzy
	'openidserver' => 'OpenID-tjener',
	'openidxrds' => 'Yadis-fil',
	'openidconvert' => 'OpenID-konvertering',
	'openiderror' => 'Bekreftelsesfeil',
	'openiderrortext' => 'En feil oppsto under bekrefting av OpenID-adressen.',
	'openidconfigerror' => 'Oppsettsfeil med OpenID',
	'openidconfigerrortext' => 'Lagringsoppsettet for OpenID på denne wikien er ugyldig.
Vennligst kontakt en [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Tillatelsesfeil med OpenID',
	'openidpermissiontext' => 'Du kan ikke logge inn på denne tjeneren med OpenID-en du oppga.',
	'openidcancel' => 'Bekreftelse avbrutt',
	'openidcanceltext' => 'Bekreftelsen av OpenID-adressen ble avbrutt.',
	'openidfailure' => 'Bekreftelse mislyktes',
	'openidfailuretext' => 'Bekreftelse av OpenID-adressen mislyktes. Feilbeskjed: «$1»',
	'openidsuccess' => 'Bekreftelse lyktes',
	'openidsuccesstext' => 'Bekreftelse av OpenID-adressen lyktes.', # Fuzzy
	'openidusernameprefix' => 'OpenID-bruker',
	'openidserverlogininstructions' => 'Skriv inn passordet ditt nedenfor for å logge på $3 som $2 (brukerside $1).', # Fuzzy
	'openidtrustinstructions' => 'Sjekk om du ønsker å dele data med $1.',
	'openidallowtrust' => 'La $1 stole på denne kontoen.',
	'openidnopolicy' => 'Siden har ingen personvernerklæring.',
	'openidpolicy' => 'Sjekk <a href="_new" href="$1">personvernerklæringen</a> for mer informasjon.',
	'openidoptional' => 'Valgfri',
	'openidrequired' => 'Påkrevd',
	'openidnickname' => 'Kallenavn',
	'openidfullname' => 'Fullt navn', # Fuzzy
	'openidemail' => 'E-postadresse',
	'openidlanguage' => 'Språk',
	'openidtimezone' => 'Tidssone',
	'openidchooselegend' => 'Velg brukernavn', # Fuzzy
	'openidchooseinstructions' => 'Alle brukere må ha et kallenavn; du kan velge blant valgene nedenfor.',
	'openidchoosenick' => 'Ditt kallenavn ($1)',
	'openidchoosefull' => 'Fullt navn ($1)', # Fuzzy
	'openidchooseurl' => 'Et navn tatt fra din OpenID ($1)',
	'openidchooseauto' => 'Et automatisk opprettet navn ($1)',
	'openidchoosemanual' => 'Et valgfritt navn:',
	'openidchooseexisting' => 'En eksisterende konto på denne wikien',
	'openidchooseusername' => 'Brukernavn:',
	'openidchoosepassword' => 'Passord:',
	'openidconvertinstructions' => 'Dette skjemaet lar deg endre brukerkontoen din til å bruke en OpenID-adresse eller å legge til flere OpenID-adresser.',
	'openidconvertoraddmoreids' => 'Konverter til OpenID eller legg til en annen OpenID-adresse',
	'openidconvertsuccess' => 'Konverterte til OpenID',
	'openidconvertsuccesstext' => 'Du har konvertert din OpenID til $1.',
	'openid-convert-already-your-openid-text' => 'Det er allerede din OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Den OpenID-en tilhører noen andre.', # Fuzzy
	'openidalreadyloggedin' => "'''$1, du er allerede logget inn.'''

Om du ønsker å bruke OpenID i framtiden, kan du [[Special:OpenIDConvert|konvertere kontoen din til å bruke OpenID]].", # Fuzzy
	'openidnousername' => 'Intet brukernavn oppgitt.',
	'openidbadusername' => 'Ugyldig brukernavn oppgitt.',
	'openidautosubmit' => 'Denne siden inneholder et skjema som vil leveres automatisk om du har JavaScript slått på.
Om ikke, trykk på «Continue» (Fortsett).',
	'openidclientonlytext' => 'Du kan ikke bruke kontoer fra denne wikien som OpenID på en annen side.',
	'openidloginlabel' => 'OpenID-adresse',
	'openidlogininstructions' => '{{SITENAME}} støtter [//openid.net/ OpenID]-standarden for enhetlig innlogging på forskjellige nettsteder.
OpenID lar deg logge inn på mange forskjellige nettsider uten at du må bruke forskjellige passord på hver.
(Se [//nn.wikipedia.org/wiki/OpenID Wikipedia-artikkelen om OpenID] for mer informasjon.)

Om du allerede har en konto på {{SITENAME}}, kan du [[Special:UserLogin|logga på]] som vanlig med brukarnavnet og passordet ditt.
For å bruke OpenID i fremtiden, kan du [[Special:OpenIDConvert|konvertere kontoen din til OpenID]] etter at du har logget inn på vanlig måte.

Det er mange [http://wiki.openid.net/Public_OpenID_providers leverandører av OpenID], og du kan allerede ha en OpenID-aktivert konto et annet sted.', # Fuzzy
	'openidupdateuserinfo' => 'Oppdater min personlige informasjon:',
	'openiddelete' => 'Slett OpenID',
	'openiddelete-text' => 'Ved å klikke på «{{int:openiddelete-button}}»-knappen vil du fjerne OpenID $1 fra din konto.
Du vil ikke lenger ha mulighet til å logge inn med denne OpenID.',
	'openiddelete-button' => 'Bekreft',
	'openiddeleteerrornopassword' => 'Du kan ikke slette alle dine OpenID-er fordi kontoen din ikke har noe passord.
Du ville ikke kunne logge inn uten en OpenID.',
	'openiddeleteerroropenidonly' => 'Du kan ikke slette alle dine OpenID-er fordi du kun kan logge inn med en OpenID.
Du ville ikke kunne logge inn uten en OpenID.',
	'openiddelete-success' => 'OpenID-en har blitt fjernet fra din konto.',
	'openiddelete-error' => 'En feil oppsto i prosessen med å fjerne OpenID-en fra din konto.',
	'prefs-openid-hide-openid' => 'Skjul OpenID på brukersiden din om du logger inn med en.',
	'openid-hide-openid-label' => 'Skjul OpenID på brukersiden din om du logger inn med en.',
	'openid-userinfo-update-on-login-label' => 'Oppdater den følgende informasjonen fra OpenID-persona hver gang jeg logger inn:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID-er knyttet til din brukerkonto:',
	'openid-urls-action' => 'Handling',
	'openid-urls-delete' => 'Slett',
	'openid-add-url' => 'Legg til en ny OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Logg inn eller lag en ny konto', # Fuzzy
	'openid-provider-label-openid' => 'Skriv inn din OpenID-nettadresse',
	'openid-provider-label-google' => 'Logg inn med din Google-konto',
	'openid-provider-label-yahoo' => 'Logg inn med din Yahoo-konto',
	'openid-provider-label-aol' => 'Skriv inn ditt AOL-skjermnavn',
	'openid-provider-label-other-username' => 'Skriv inn ditt $1-brukernavn',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'openid-urls-action' => 'Akschoon',
	'openid-urls-delete' => 'Wegdoon',
	'openid-trusted-sites-table-header-column-action' => 'Akschoon',
	'openid-trusted-sites-delete-link-action-text' => 'Wegdoon',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'openidemail' => 'इमेल ठेगाना',
	'openidlanguage' => 'भाषा',
	'openidtimezone' => 'समय क्षेत्र',
	'openidchooseusername' => 'प्रयोगकर्ता नाम:',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'openidchoosepassword' => 'Kupu fufu:',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author McDutchie
 * @author Rcdeboer
 * @author SPQRobin
 * @author Siebrand
 * @author Tjcool007
 */
$messages['nl'] = array(
	'openid-desc' => 'Aanmelden bij de wiki met een [//openid.net/ OpenID] en aanmelden bij andere websites die OpenID ondersteunen met een wikigebruiker',
	'openididentifier' => 'OpenID',
	'openidlogin' => 'Aanmelden / registreren met OpenID',
	'openidserver' => 'OpenID-server',
	'openid-identifier-page-text-user' => 'Deze pagina is de ID van gebruiker "$1".',
	'openid-identifier-page-text-different-user' => 'Deze pagina is de identificatie van de gebruiker $1.',
	'openid-identifier-page-text-no-such-local-openid' => 'Dit is een ongeldige lokale OpenID-identificatie.',
	'openid-server-identity-page-text' => 'Dit is een technische pagina voor OpenID-server voor het beginnen van de OpenID-authenticatie. De pagina heeft geen ander doel.',
	'openidxrds' => 'Yadis-bestand',
	'openidconvert' => 'OpenID-convertor',
	'openiderror' => 'Controlefout',
	'openiderrortext' => 'Er is een fout opgetreden tijdens de verificatie van de OpenID URL.',
	'openidconfigerror' => 'Fout in de installatie van OpenID',
	'openidconfigerrortext' => "De instellingen van de opslag van OpenID's voor deze wiki kloppen niet.
Raadpleeg een  [[Special:ListUsers/sysop|beheerder]].",
	'openidpermission' => 'Fout in de rechten voor OpenID',
	'openidpermissiontext' => 'Met de OpenID die u hebt opgegeven kunt u niet aanmelden bij deze server.',
	'openidcancel' => 'Verificatie geannuleerd',
	'openidcanceltext' => 'De verificatie van de OpenID URL is geannuleerd.',
	'openidfailure' => 'Verificatie mislukt',
	'openidfailuretext' => 'De verificatie van de OpenID URL is mislukt. Foutmelding: "$1"',
	'openidsuccess' => 'Verificatie uitgevoerd',
	'openidsuccesstext' => "'''De controle is geslaagd en u bent aangemeld als gebruiker $1.'''

Uw OpenID is $2 .

Dit OpenID en andere toekomstige OpenID's kunt u beheren in het [[Special:Preferences#mw-prefsection-openid|tabblad OpenID]] van uw voorkeuren.<br />
Optioneel kunt u een wachtwoord instellen voor deze gebruiker in uw [[Special:Preferences#mw-prefsection-personal|gebruikersprofiel]].",
	'openidusernameprefix' => 'OpenIDGebruiker',
	'openidserverlogininstructions' => '$3 vraag om het invoeren van uw wachtwoord voor uw gebruiker $2 pagina $1 (URL voor OpenID).',
	'openidtrustinstructions' => 'Controleer of u gegevens wilt delen met $1.',
	'openidallowtrust' => 'Toestaan dat $1 deze gebruiker vertrouwt.',
	'openidnopolicy' => 'De site heeft geen privacybeleid.',
	'openidpolicy' => 'Lees het <a target="_new" href="$1">privacybeleid</a> voor meer informatie.',
	'openidoptional' => 'Optioneel',
	'openidrequired' => 'Vereist',
	'openidnickname' => 'Gebruikersnaam',
	'openidfullname' => 'Volledige naam',
	'openidemail' => 'E-mailadres',
	'openidlanguage' => 'Taal',
	'openidtimezone' => 'Tijdzone',
	'openidchooselegend' => 'Gebruikersnaamkeuze',
	'openidchooseinstructions' => 'Alle gebruikers moeten een gebruikersnaam kiezen. U kunt er een kiezen uit de onderstaande opties.',
	'openidchoosenick' => 'Uw bijnaam ($1)',
	'openidchoosefull' => 'Uw volledige naam ($1)',
	'openidchooseurl' => 'Een naam uit uw OpenID ($1)',
	'openidchooseauto' => 'Een automatisch samengestelde naam ($1)',
	'openidchoosemanual' => 'Een te kiezen naam:',
	'openidchooseexisting' => 'Een bestaande gebruiker op deze wiki',
	'openidchooseusername' => 'Gebruikersnaam:',
	'openidchoosepassword' => 'Wachtwoord:',
	'openidconvertinstructions' => "Via dit formulier kunt u uw gebruiker als OpenID-URL gebruiken of meer OpenID-URL's toevoegen.",
	'openidconvertoraddmoreids' => 'Converteren naar OpenID of een andere OpenID-URL toevoegen',
	'openidconvertsuccess' => 'Omzetten naar OpenID is uitgevoerd',
	'openidconvertsuccesstext' => 'Uw OpenID is omgezet naar $1.',
	'openid-convert-already-your-openid-text' => 'Het OpenID $1 is al gekoppeld aan uw gebruiker. Opnieuw toevoegen heeft geen zin.',
	'openid-convert-other-users-openid-text' => 'Iemand anders heeft het OpenID $1 al in gebruik. U kunt niet het OpenID van een andere gebruiker gebruiken.',
	'openidalreadyloggedin' => 'U bent al aangemeld.',
	'openidalreadyloggedintext' => "'''U bent al aangemeld, $1!'''

U kunt OpenID's beheren (bekijken, verwijderen en toevoegen) in het [[Special:Preferences#mw-prefsection-openid|tabblad OpenID]] in uw voorkeuren.",
	'openidnousername' => 'Er is geen gebruikersnaam opgegeven.',
	'openidbadusername' => 'De opgegeven gebruikersnaam is niet toegestaan.',
	'openidautosubmit' => 'Deze pagina bevat een formulier dat automatisch wordt verzonden als JavaScript is ingeschaked.
Als dat niet werkt, klik dan op de knop "Continue" (Doorgaan).',
	'openidclientonlytext' => 'U kunt gebruikers van deze wiki niet als OpenID gebruiken op een andere site.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} ondersteunt de standaard [//openid.net/ OpenID] voor maar een keer hoeven aanmelden voor meerdere websites.
Met OpenID kunt u aanmelden bij veel verschillende websites zonder voor iedere site opnieuw een wachtwoord te moeten opgeven.
Zie het [//nl.wikipedia.org/wiki/OpenID Wikipedia-artikel over OpenID] voor meer informatie.
Er zijn veel [http://wiki.openid.net/Public_OpenID_providers OpenID-providers] en wellicht hebt u al een gebruiker voor OpenID bij een andere dienst.',
	'openidlogininstructions-openidloginonly' => "Bij {{SITENAME}} kunt u zich ''alleen'' aanmelden via OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Als u al een gebruiker hebt bij op {{SITENAME}}, kunt u [[Special:UserLogin|aanmelden]] met uw gebruikersnaam en wachtwoord zoals gewoonlijk.
Om in de toekomst OpenID te gebruiken, kunt u uw [[Special:OpenIDConvert|gebruiker omzetten naar OpenID]] nadat u bent aangemeld.',
	'openidupdateuserinfo' => 'Mijn persoonlijke gegevens bijwerken:',
	'openiddelete' => 'OpenID verwijderen',
	'openiddelete-text' => 'Door te klikken op de knop "{{int:openiddelete-button}}", verwijdert u de OpenID $1 uit uw gebruiker.
Het is dan niet langer mogelijk aan te melden met de OpenID "$1".',
	'openiddelete-button' => 'Bevestigen',
	'openiddeleteerrornopassword' => "U kunt niet al uw OpenID's verwijderen omdat uw gebruiker geen wachtwoord heeft.
Dan zou u niet langer kunnen aanmelden zonder een OpenID.",
	'openiddeleteerroropenidonly' => "U kunt niet al uw OpenID's verwijderen omdat u alleen mag aanmelden met een OpenID.
Dan zou u niet langer kunnen aanmelden zonder een OpenID.",
	'openiddelete-success' => 'De OpenID is verwijderd uit uw gebruiker.',
	'openiddelete-error' => 'Er is een fout opgetreden tijdens het verwijderen van de OpenID uit uw gebruiker.',
	'openid-openids-were-not-merged' => "Bij het samenvoegen van de gebruikers zijn een of meer OpenID's niet samengevoegd.",
	'prefs-openid-hide-openid' => 'OpenID-URL op uw gebruikerspagina weergeven',
	'prefs-openid-userinfo-update-on-login' => 'OpenID gebruikersinformatie bewerken',
	'prefs-openid-associated-openids' => "Uw OpenID's om aan te melden bij {{SITENAME}}",
	'prefs-openid-trusted-sites' => 'Vertrouwde sites',
	'prefs-openid-local-identity' => 'Uw OpenID voor aanmelden bij andere sites',
	'openid-hide-openid-label' => 'Uw OpenID-URL verbergen op uw gebruikerspagina.',
	'openid-show-openid-url-on-userpage-always' => 'Uw OpenID wordt altijd weergegeven op uw gebruikerspagina als u die bezoekt.',
	'openid-show-openid-url-on-userpage-never' => 'Uw OpenID wordt nooit weergegeven op uw gebruikerspagina.',
	'openid-userinfo-update-on-login-label' => 'Velden van uw gebruikersprofiel die iedere keer dat u aanmeldt worden bijgewerkt vanuit uw OpenID-persona:',
	'openid-associated-openids-label' => "Aan uw gebruiker gekoppelde OpenID's:",
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Handeling',
	'openid-urls-registration' => 'Registratietijd',
	'openid-urls-delete' => 'Verwijderen',
	'openid-add-url' => 'Een nieuwe OpenID aan uw gebruiker toevoegen',
	'openid-trusted-sites-label' => 'Sites die u vertrouwt en waar u uw OpenID hebt gebruikt om aan te melden:',
	'openid-trusted-sites-table-header-column-url' => 'Vertrouwde sites',
	'openid-trusted-sites-table-header-column-action' => 'Handeling',
	'openid-trusted-sites-delete-link-action-text' => 'Verwijderen',
	'openid-trusted-sites-delete-all-link-action-text' => 'Alle vertrouwde sites verwijderen',
	'openid-trusted-sites-delete-confirmation-page-title' => 'Vertrouwde site verwijderen',
	'openid-trusted-sites-delete-confirmation-question' => 'Door te klikken op de know "{{int:openid-trusted-sites-delete-confirmation-button-text}}" wordt "$1" verwijderd uit de lijst met sites die u vertrouwt.',
	'openid-trusted-sites-delete-all-confirmation-question' => 'Door te klikken op de knop "{{int:openid-trusted-sites-delete-confirmation-button-text}}" verwijderd u alle vertrouwde sites uit uw gebruikersprofiel.',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Bevestigen',
	'openid-trusted-sites-delete-confirmation-success-text' => '"$1" is verwijderd uit de lijst met vertrouwde sites.',
	'openid-trusted-sites-delete-all-confirmation-success-text' => 'Alle voorheen vertrouwde sites zijn verwijderd uit uw gebruikersprofiel.',
	'openid-local-identity' => 'Uw OpenID:',
	'openid-login-or-create-account' => 'Aanmelden of nieuwe gebruiker aanmaken',
	'openid-provider-label-openid' => 'Voer de URL van uw OpenID in',
	'openid-provider-label-google' => 'Aanmelden met uw Google-gebruiker',
	'openid-provider-label-yahoo' => 'Aanmelden met uw Yahoo-gebruiker',
	'openid-provider-label-aol' => 'Aanmelden met uw AOL-gebruiker',
	'openid-provider-label-wmflabs' => 'Aanmelden met uw gebruiker van WMF-labs',
	'openid-provider-label-other-username' => 'Geef uw gebruikersnaam bij $1 in',
	'specialpages-group-openid' => "OpenID-servicepagina's en statusinformatie",
	'right-openid-converter-access' => 'Kan gebruiker toevoegen of converteren om OpenID-identiteiten te gebruiken',
	'right-openid-dashboard-access' => 'Standaard toegang tot het OpenID-dashboard',
	'right-openid-dashboard-admin' => 'Beheerderstoegang tot het OpenID-dashboard',
	'action-openid-converter-access' => 'uw gebruiker toe te voegen of te converteren om OpenID-identiteiten te gebruiken',
	'action-openid-dashboard-access' => 'toegang te krijgen tot het OpenID-dashboard',
	'action-openid-dashboard-admin' => 'toegang te krijgen tot het OpenID-beheerdersdashboard',
	'openid-dashboard-title' => 'OpenID-dashboard',
	'openid-dashboard-title-admin' => 'OpenID-dashboard (beheerder)',
	'openid-dashboard-introduction' => 'De huidige instellingen van de OpenID-uitbreiding ([$1 hulp])',
	'openid-dashboard-number-openid-users' => 'Aantal gebruikers met OpenID',
	'openid-dashboard-number-openids-in-database' => "Totaal aantal OpenID's",
	'openid-dashboard-number-users-without-openid' => 'Aantal gebruikers zonder OpenID',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Nghtwlkr
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'openid-desc' => 'Logg inn på wikien med ein [//openid.net/ OpenID] og logg inn på andre sider som bruker OpenID med kontoen herifrå',
	'openidlogin' => 'Logg inn med OpenID', # Fuzzy
	'openidserver' => 'OpenID-tenar',
	'openidxrds' => 'Yadis-fil',
	'openidconvert' => 'OpenID-konvertering',
	'openiderror' => 'Feil under stadfesting',
	'openiderrortext' => 'Ein feil oppstod under stadfesting av OpenID-adressa.',
	'openidconfigerror' => 'Konfigurasjonsfeil med OpenID',
	'openidconfigerrortext' => 'Lagreoppsettet for OpenID på denne wikien er ugyldig.
Kontakt ein [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Tilgjengefeil med OpenID',
	'openidpermissiontext' => 'Du kan ikkje logga deg inn på denne tenaren med OpenID-en du oppgav.',
	'openidcancel' => 'Stadfesting avbrote',
	'openidcanceltext' => 'Stadfestinga av OpenID-adressa blei avbrote.',
	'openidfailure' => 'Stadfesting mislukkast',
	'openidfailuretext' => 'Stadfestinga av OpenID-adressa mislukkast. Feilmelding: «$1»',
	'openidsuccess' => 'Stadfestinga lukkast',
	'openidsuccesstext' => 'Stadfestinga av OpenID-adressa lukkast.', # Fuzzy
	'openidusernameprefix' => 'OpenID-brukar',
	'openidserverlogininstructions' => 'Skriv inn passordet ditt nedanfor for å logga deg inn på $3 som $2 (brukarsida $1).', # Fuzzy
	'openidtrustinstructions' => 'Sjekk om du ynskjer å dela data med $1.',
	'openidallowtrust' => 'Lat $1 stola på denne kontoen.',
	'openidnopolicy' => 'Sida har inga personvernerklæring.',
	'openidpolicy' => 'Sjekk <a href="_new" href="$1">personvernerklæringa</a> for meir informasjon.',
	'openidoptional' => 'Valfri',
	'openidrequired' => 'Påkravd',
	'openidnickname' => 'Kallenamn',
	'openidfullname' => 'Fullt namn', # Fuzzy
	'openidemail' => 'E-postadressa',
	'openidlanguage' => 'Språk',
	'openidtimezone' => 'Tidssone',
	'openidchooselegend' => 'Val av brukarnamn', # Fuzzy
	'openidchooseinstructions' => 'All brukarar må ha eit kallenamn; du kan velja mellom vala nedanfor.',
	'openidchoosenick' => 'Kallenamnet ditt ($1)',
	'openidchoosefull' => 'Fullt namn ($1)', # Fuzzy
	'openidchooseurl' => 'Eit namn teke frå OpenID-en din ($1)',
	'openidchooseauto' => 'Eit automatisk oppretta namn ($1)',
	'openidchoosemanual' => 'Eit valfritt namn:',
	'openidchooseexisting' => 'Ein konto på denne wikien som finst frå før',
	'openidchooseusername' => 'Brukarnamn:',
	'openidchoosepassword' => 'Passord:',
	'openidconvertinstructions' => 'Dette skjemaet lèt deg endra brukarkontoen din slik at han kan nytta ei OpenID-adresse eller leggja til fleire OpenID-adresser.',
	'openidconvertoraddmoreids' => 'Konverter til OpenID eller legg til ei anna OpenID-adresse',
	'openidconvertsuccess' => 'Konverterte til OpenID',
	'openidconvertsuccesstext' => 'Du har konvertert OpenID-en din til $1.',
	'openid-convert-already-your-openid-text' => 'Det er allereie OpenID-en din.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Den OpenID-en tilhøyrer einkvan annan.', # Fuzzy
	'openidalreadyloggedin' => 'Du er alt innlogga.',
	'openidnousername' => 'Du oppgav ingen brukarnamn.',
	'openidbadusername' => 'Du oppgav eit ugyldig brukarnamn.',
	'openidautosubmit' => 'Denne sida inneheld eit skjema som blir levert automatisk om du har JavaSvript slege på.
Dersom ikkje, trykk på «Continue» (Hald fram).',
	'openidclientonlytext' => 'Du kan ikkje nytta kontoar frå denne wikien som OpenID på ei onnor sida.',
	'openidloginlabel' => 'OpenID-adressa',
	'openidlogininstructions' => '{{SITENAME}} støttar [//openid.net/ OpenID]-standarden for einskapleg innlogging på forskjellige nettstader. OpenID lèt deg logga inn på mange forskjellige nettsider utan at du må nytta forskjellige passord på kvar. (Sjå [//nn.wikipedia.org/wiki/OpenID Wikipedia-artikkelen om OpenID] for meir informasjon.)

Om du allereie har ein konto på {{SITENAME}}, kan du [[Special:UserLogin|logga på]] som vanleg med brukarnamnet og passordet ditt. For å nytta OpenID i framtida, kan du [[Special:OpenIDConvert|konvertera kontoen din til OpenID]] etter at du har logga inn på vanleg vis.

Det er mange [http://wiki.openid.net/Public_OpenID_providers leverandørar av OpenID], og du kan allereie ha ein OpenID-aktivert konto ein annan stad.', # Fuzzy
	'openidupdateuserinfo' => 'Oppdater den personlege informasjonen min:',
	'openiddelete' => 'Slett OpenID',
	'openiddelete-text' => 'Ved å klikka på «{{int:openiddelete-button}}»-knappen vil du fjernae OpenID $1 frå kontoen din.
Du vil ikkje lenger ha høve til å logga inn med denne OpenIDen.',
	'openiddelete-button' => 'Stadfest',
	'openiddeleteerrornopassword' => 'Du kan ikkje sletta alle OpenID-ane dine av di kontoen din ikkje har eit passord.
Du ville ikkje ha kunna logga inn utan ein OpenID.',
	'openiddeleteerroropenidonly' => 'Du kan ikkje sletta alle OpenID-ane dine av di du berre har løyve til å logga inn med OpenID.
Du ville ikkje ha kunna logga inn utan ein OpenID.',
	'openiddelete-success' => 'OpenID har vorte fjerna frå kontoen din',
	'openiddelete-error' => 'Ein feil oppstod i prosessen med å fjerna OpenID frå kontoen din.',
	'prefs-openid-hide-openid' => 'Gøym OpenID på brukarsida di om du loggar inn med ein.',
	'openid-hide-openid-label' => 'Gøym OpenID på brukarsida di om du loggar inn med ein.',
	'openid-userinfo-update-on-login-label' => 'Oppdatér den fylgjande informasjonen frå OpenID-persona kvar gong eg loggar inn', # Fuzzy
	'openid-associated-openids-label' => 'OpenID-ar knytte til brukarkontoen din:',
	'openid-urls-action' => 'Handling',
	'openid-urls-delete' => 'Slett',
	'openid-add-url' => 'Legg til ein ny OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Logg inn eller lag ein ny konto', # Fuzzy
	'openid-provider-label-openid' => 'Skriv inn OpenID-URL-en din.',
	'openid-provider-label-google' => 'Logg inn med Google-kontoen din',
	'openid-provider-label-yahoo' => 'Logg inn med Yahoo-kontoen din',
	'openid-provider-label-aol' => 'Skriv inn AOL-skjermnamnet ditt',
	'openid-provider-label-other-username' => 'Skriv inn $1-brukarnamnet ditt',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'openid-desc' => "Se connècta al wiki amb [//openid.net/ OpenID] e se connècta a d'autres sites internet OpenID amb un wiki qu'utiliza un compte d'utilizaire.",
	'openidlogin' => 'Se connectar amb OpenID', # Fuzzy
	'openidserver' => 'Servidor OpenID',
	'openidxrds' => 'Fichièr Yadis',
	'openidconvert' => 'Convertisseire OpenID',
	'openiderror' => 'Error de verificacion',
	'openiderrortext' => "Una error es intervenguda pendent la verificacion de l'adreça OpenID.",
	'openidconfigerror' => 'Error de configuracion de OpenID',
	'openidconfigerrortext' => "L'estocatge de la configuracion OpenID per aqueste wiki es incorrècte.
Metetz-vos en rapòrt amb l’[[Special:ListUsers/sysop|administrator]].",
	'openidpermission' => 'Error de permission OpenID',
	'openidpermissiontext' => "L’OpenID qu'avètz provesida es pas autorizada a se connectar sus aqueste servidor.",
	'openidcancel' => 'Verificacion anullada',
	'openidcanceltext' => 'La verificacion de l’adreça OpenID es estada anullada.',
	'openidfailure' => 'Fracàs de la verificacion',
	'openidfailuretext' => 'La verificacion de l’adreça OpenID a fracassat. Messatge d’error : « $1 »',
	'openidsuccess' => 'Verificacion capitada',
	'openidsuccesstext' => 'Verificacion de l’adreça OpenID capitada.', # Fuzzy
	'openidusernameprefix' => 'Utilizaire OpenID',
	'openidserverlogininstructions' => "Picatz vòstre senhal çaijós per vos connectar sus $3 coma utilizaire '''$2''' (pagina d'utilizaire $1).", # Fuzzy
	'openidtrustinstructions' => 'Marcatz se desiratz partejar las donadas amb $1.',
	'openidallowtrust' => "Autoriza $1 a far fisança a aqueste compte d'utilizaire.",
	'openidnopolicy' => 'Lo site a pas indicat una politica de donadas personalas.',
	'openidpolicy' => 'Verificar la <a target="_new" href="$1">Politica de las donadas personalas</a> per mai d’entresenhas.',
	'openidoptional' => 'Facultatiu',
	'openidrequired' => 'Exigit',
	'openidnickname' => 'Escais',
	'openidfullname' => 'Nom complet', # Fuzzy
	'openidemail' => 'Adreça de corrièr electronic',
	'openidlanguage' => 'Lenga',
	'openidtimezone' => 'Zòna orària',
	'openidchooseinstructions' => "Totes los utilizaires an besonh d'un escais ; ne podètz causir un a partir de la causida çaijós.",
	'openidchoosefull' => 'Vòstre nom complet ($1)', # Fuzzy
	'openidchooseurl' => 'Un nom es estat causit dempuèi vòstra OpenID ($1)',
	'openidchooseauto' => 'Un nom creat automaticament ($1)',
	'openidchoosemanual' => "Un nom qu'avètz causit :",
	'openidchooseexisting' => 'Un compte existent sus aqueste wiki :', # Fuzzy
	'openidchoosepassword' => 'Senhal :',
	'openidconvertinstructions' => "Aqueste formulari vos permet de cambiar vòstre compte d'utilizaire per utilizar una adreça OpenID o apondre d'adreças OpenID suplementàrias.",
	'openidconvertoraddmoreids' => 'Convertir cap a OpenID o apondre una autra adreça OpenID',
	'openidconvertsuccess' => 'Convertit amb succès cap a OpenID',
	'openidconvertsuccesstext' => 'Avètz convertit amb succès vòstra OpenID cap a $1.',
	'openid-convert-already-your-openid-text' => 'Ja es vòstra OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => "Aquò es quicòm d'autre qu'una OpenID.", # Fuzzy
	'openidalreadyloggedin' => "'''Ja sètz connectat, $1 !'''

Se desiratz utilizar vòstra OpenID per vos connectar ulteriorament, podètz [[Special:OpenIDConvert|convertir vòstre compte per utilizar OpenID]].", # Fuzzy
	'openidnousername' => 'Cap de nom d’utilizaire es pas estat indicat.',
	'openidbadusername' => 'Un nom d’utilizaire marrit es estat indicat.',
	'openidautosubmit' => "Aquesta pagina conten un formulari que poiriá èsser mandat automaticament s'avètz activat JavaScript.
S’èra pas lo cas, ensajatz lo boton « Continue » (Contunhar).",
	'openidclientonlytext' => 'Podètz pas utilizar de comptes dempuèi aqueste wiki en tant qu’OpenID sus d’autres sites.',
	'openidloginlabel' => 'Adreça OpenID',
	'openidlogininstructions' => "{{SITENAME}} supòrta lo format [//openid.net/ OpenID] estandard per una sola signatura entre de sites Internet.
OpenID vos permet de vos connectar sus mantun site diferent sens aver d'utilizar un senhal diferent per cadun d’entre eles.
(Vejatz [//en.wikipedia.org/wiki/OpenID Wikipedia's OpenID article] per mai d'entresenhas.)

S'avètz ja un compte sus {{SITENAME}}, vos podètz [[Special:UserLogin|connectar]] amb vòstre nom d'utilizaire e son senhal coma de costuma. Per utilizar OpenID, a l’avenidor, podètz [[Special:OpenIDConvert|convertir vòstre compte en OpenID]] aprèp vos èsser connectat normalament.

Existís mantun [http://wiki.openid.net/Public_OpenID_providers provesidor d'OpenID publicas], e podètz ja obténer un compte OpenID activat sus un autre servici.", # Fuzzy
	'openidupdateuserinfo' => 'Metre a jorn mas donadas personalas', # Fuzzy
	'openiddelete' => "Suprimir l'OpenID",
	'openiddelete-text' => "En clicant sul boton « {{int:openiddelete-button}} », suprimtz l'OpenID $1 de vòstre compte.
Vos poiretz pas pus connectar amb aquesta OpenID.",
	'openiddelete-button' => 'Confirmar',
	'openiddelete-success' => "L'OpenID es estada suprimida amb succès de vòstre compte.",
	'openiddelete-error' => "Una error es arribada pendent la supression de l'OpenID de vòstre compte.",
	'prefs-openid-hide-openid' => "Amaga vòstra OpenID sus vòstra pagina d'utilizaire, se vos connectaz amb OpenID.",
	'openid-hide-openid-label' => "Amaga vòstra OpenID sus vòstra pagina d'utilizaire, se vos connectaz amb OpenID.",
	'openid-userinfo-update-on-login-label' => 'Metre a jorn las donadas seguentas dempuèi OpenID a cada còp que me connecti :', # Fuzzy
	'openid-associated-openids-label' => 'OpenID associadas amb vòstre compte :',
	'openid-urls-action' => 'Accion',
	'openid-urls-delete' => 'Suprimir',
	'openid-add-url' => 'Apondre un OpenID novèla', # Fuzzy
	'openid-login-or-create-account' => 'Se connectar o crear un compte novèl', # Fuzzy
	'openid-provider-label-openid' => 'Picatz vòstra URL OpenID',
	'openid-provider-label-google' => 'Vos connectar en utilizant vòstre compte Google',
	'openid-provider-label-yahoo' => 'Vos connectar en utilizant vòstre compte Yahoo',
	'openid-provider-label-aol' => 'Picatz vòstre nom AOL',
	'openid-provider-label-other-username' => "Picatz vòstre nom d'utilizaire $1",
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'openidnickname' => 'Фæсномыг',
	'openidlanguage' => 'Æвзаг',
	'openidchoosepassword' => 'Пароль:',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'openidlanguage' => 'Schprooch',
	'openidchooseusername' => 'Yuuser-Naame:',
	'openidchoosepassword' => 'Paesswatt:',
	'openid-urls-delete' => 'Verwische',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'openidchoosepassword' => 'Passwuat:',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'openid-urls-delete' => 'Lesche',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Chrumps
 * @author Herr Kriss
 * @author Maikking
 * @author Matma Rex
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'openid-desc' => 'Logowanie się do wiki z użyciem [//openid.net/ OpenID], oraz logowanie się do innych witryn używających OpenID z użyciem konta użytkownika z wiki',
	'openidlogin' => 'Zaloguj lub utwórz konto korzystając z OpenID',
	'openidserver' => 'Serwer OpenID',
	'openidxrds' => 'Plik Yadis',
	'openidconvert' => 'Obsługa OpenID',
	'openiderror' => 'Błąd weryfikacji',
	'openiderrortext' => 'Wystąpił błąd podczas weryfikacji adresu URL OpenID.',
	'openidconfigerror' => 'Błąd konfiguracji OpenID',
	'openidconfigerrortext' => 'Konfiguracja przechowywania w OpenID dla tej wiki jest nieprawidłowa.
Skonsultuj to z [[Special:ListUsers/sysop|administratorem]].',
	'openidpermission' => 'Błąd uprawnień OpenID',
	'openidpermissiontext' => 'OpenID, które podałeś nie ma uprawnień do logowania na ten serwer.',
	'openidcancel' => 'Weryfikacja anulowana',
	'openidcanceltext' => 'Weryfikacja adresu URL OpenID została przerwana.',
	'openidfailure' => 'Weryfikacja nie powiodła się',
	'openidfailuretext' => 'Weryfikacja adresu URL OpenID nie powiodła się. Komunikat o błędzie – „$1”',
	'openidsuccess' => 'Weryfikacja udana',
	'openidsuccesstext' => "'''Zweryfikowano i zalogowano użytkownika $1'''.

Twój OpenID to $2.

Tym i innymi dodatkowymi OpenID możesz zarządzać w [[Special:Preferences#mw-prefsection-openid|zakładce OpenID]] w swoich preferencjach.<br />
Opcjonalne hasło do konta możesz dodać w swoim [[Special:Preferences#mw-prefsection-personal|profilu użytkownika]].",
	'openidusernameprefix' => 'UżytkownikOpenID',
	'openidserverlogininstructions' => '$3 zażądało abyś podał hasło użytkownika $2 strona $1 (to jest Twój OpenID adres URL).',
	'openidtrustinstructions' => 'Sprawdź, czy chcesz wymieniać informacje z $1.',
	'openidallowtrust' => 'Zezwól $1 na użycie tego konta użytkownika.',
	'openidnopolicy' => 'Witryna nie ma określonej polityki prywatności.',
	'openidpolicy' => 'Zapoznaj się z <a target="_new" href="$1">polityką prywatności</a> aby uzyskać więcej informacji.',
	'openidoptional' => 'Opcjonalnie',
	'openidrequired' => 'Wymagane',
	'openidnickname' => 'Nazwa użytkownika',
	'openidfullname' => 'Imię i nazwisko', # Fuzzy
	'openidemail' => 'Adres e‐mail',
	'openidlanguage' => 'Język',
	'openidtimezone' => 'Strefa czasowa',
	'openidchooselegend' => 'Wybór nazwy użytkownika i konta',
	'openidchooseinstructions' => 'Wszyscy użytkownicy muszą mieć pseudonim.
Możesz wybrać spośród propozycji podanych poniżej.',
	'openidchoosenick' => 'Twoja nazwa konta użytkownika ($1)',
	'openidchoosefull' => 'Twoje imię i nazwisko ($1)', # Fuzzy
	'openidchooseurl' => 'Nazwa wybrana spośród OpenID ($1)',
	'openidchooseauto' => 'Automatycznie utworzono nazwę użytkownika ($1)',
	'openidchoosemanual' => 'Nazwa użytkownika wybrana przez Ciebie',
	'openidchooseexisting' => 'Istniejące konto na tej wiki',
	'openidchooseusername' => 'Nazwa użytkownika',
	'openidchoosepassword' => 'Hasło',
	'openidconvertinstructions' => 'Formularz umożliwia przystosowanie konta użytkownika do korzystania z adresu URL OpenID lub dodanie następnych adresów URL OpenID.',
	'openidconvertoraddmoreids' => 'Konwertuj do OpenID lub dodaj kolejny adres URL OpenID',
	'openidconvertsuccess' => 'Przełączone na korzystanie z OpenID',
	'openidconvertsuccesstext' => 'Zmieniłeś swoje OpenID na $1.',
	'openid-convert-already-your-openid-text' => 'Już masz swój OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To jest OpenID należące do kogoś innego.', # Fuzzy
	'openidalreadyloggedin' => 'Jesteś już zalogowany.',
	'openidalreadyloggedintext' => "'''Już jesteś zalogowany jako $1!'''

Możesz zarządzać (przeglądać, usuwać, dodawać dalsze) OpenID w [[Special:Preferences#mw-prefsection-openid|zakładce OpenID]] w swoich preferencjach.",
	'openidnousername' => 'Nie wybrano żadnej nazwy użytkownika.',
	'openidbadusername' => 'Wybrano nieprawidłową nazwę użytkownika.',
	'openidautosubmit' => 'Strona zawiera formularz, który powinien zostać automatycznie przesłany jeśli masz włączoną obsługę JavaScript.
Jeśli tak się nie stało spróbuj wcisnąć klawisz „Continue” (Kontynuuj).',
	'openidclientonlytext' => 'Nie można korzystać z kont tej wiki jako OpenID w innych witrynach.',
	'openidloginlabel' => 'Adres URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} korzysta ze standardu [//openid.net/ OpenID] umożliwiającego równoczesne zalogowanie się do wielu witryn.
OpenID pozwala na zalogowanie się do wielu różnych witryn sieci Web, bez użycia osobnego hasła dla każdej z nich. 
(Zobacz [//pl.wikipedia.org/wiki/OpenID artykuł o OpenID w Wikipedii] jeśli chcesz uzyskać więcej informacji.)
Jest wielu [//openid.net/get/ operatorów usługi OpenID] – możliwe, że posiadasz już konto OpenID u innego usługodawcy.',
	'openidlogininstructions-openidloginonly' => "Do {{GRAMMAR:D.lp|{{SITENAME}}}} możesz się zalogować ''wyłącznie'' przy pomocy OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Jeśli masz już konto w {{GRAMMAR:Ms.lp|{{SITENAME}}}} możesz [[Special:UserLogin|zalogować się]] przy pomocy swojej nazwy i hasła tak jak dotychczas.
Jeśli chcesz korzystać w przyszłości z OpenID, możesz [[Special:OpenIDConvert|przekształcić swoje konto na  OpenID]] po tym jak się zwyczajne zalogujesz.',
	'openidupdateuserinfo' => 'Uaktualnij moje dane',
	'openiddelete' => 'Usuń OpenID',
	'openiddelete-text' => 'Klikając na przycisk „{{int:openiddelete-button}}” usuniesz OpenID $1 ze swojego konta.
Nie będziesz już mógł więcej logować się korzystając z tego OpenID.',
	'openiddelete-button' => 'Zapisz',
	'openiddeleteerrornopassword' => 'Nie można usunąć wszystkich OpenID ponieważ konto nie ma ustalonego hasła.
Nie będziesz mógł zalogować się bez OpenID.',
	'openiddeleteerroropenidonly' => 'Nie możesz usunąć wszystkich OpenID, ponieważ logować się możesz jedynie korzystając z OpenID.
Nie będziesz mógł się zalogować bez OpenID.',
	'openiddelete-success' => 'OpenID został pomyślnie usunięty z Twojego konta.',
	'openiddelete-error' => 'Wystąpił błąd podczas usuwania powiązania Twojego konta z OpenID.',
	'openid-openids-were-not-merged' => 'OpenID nie zostały połączone w trakcie scalania kont użytkownika.',
	'prefs-openid-hide-openid' => 'Ukryj mój adres URL OpenID na stronie użytkownika, jeśli zaloguję się za pomocą OpenID.',
	'openid-hide-openid-label' => 'Ukryj mój adres URL OpenID na stronie użytkownika, jeśli zaloguję się za pomocą OpenID.', # Fuzzy
	'openid-userinfo-update-on-login-label' => 'Aktualizuj następujące informacje o mnie z OpenID przy każdym logowaniu', # Fuzzy
	'openid-associated-openids-label' => 'OpenID powiązane z Twoim kontem:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Akcja',
	'openid-urls-registration' => 'Data rejestracji',
	'openid-urls-delete' => 'Usuń',
	'openid-add-url' => 'Dodaj nowe OpenID do swojego konta',
	'openid-trusted-sites-delete-link-action-text' => 'Usuń',
	'openid-trusted-sites-delete-confirmation-button-text' => 'Potwierdź',
	'openid-local-identity' => 'Twój OpenID:',
	'openid-login-or-create-account' => 'Zaloguj się lub utwórz nowe konto',
	'openid-provider-label-openid' => 'Wprowadź adres OpenID',
	'openid-provider-label-google' => 'Zaloguj się korzystając z konta Google',
	'openid-provider-label-yahoo' => 'Zaloguj się korzystając z konta Yahoo',
	'openid-provider-label-aol' => 'Wprowadź nazwę wyświetlaną AOL',
	'openid-provider-label-wmflabs' => 'Zaloguj się korzystając z konta Wmflabs',
	'openid-provider-label-other-username' => 'Wprowadź swoją nazwę użytkownika $1',
	'specialpages-group-openid' => 'OpenID – strony diagnostyczne i statusu',
	'right-openid-converter-access' => 'Można dodać lub przystosować ich konto do używania tożsamości OpenID',
	'right-openid-dashboard-access' => 'Standardowy dostęp do zarządzania OpenID',
	'right-openid-dashboard-admin' => 'Administracyjny dostęp do zarządzania OpenID',
	'openid-dashboard-title' => 'Zarządzanie OpenID',
	'openid-dashboard-title-admin' => 'Zarządzanie OpenID (administrator)',
	'openid-dashboard-introduction' => 'Bieżące ustawienia rozszerzenia OpenID ([$1 pomoc])',
	'openid-dashboard-number-openid-users' => 'Liczba użytkowników z OpenID',
	'openid-dashboard-number-openids-in-database' => 'Wszystkich OpenID',
	'openid-dashboard-number-users-without-openid' => 'Liczba użytkowników bez OpenID',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'openid-desc' => "Intra ant la wiki con [//openid.net/ OpenID], e intra ant j'àutri sit dl'aragnà OpenID con un cont utent wiki",
	'openidlogin' => 'Intré ant ël sistema / creé un cont con OpenID',
	'openidserver' => 'servent OpenID',
	'openidxrds' => 'Archivi Yadis',
	'openidconvert' => 'Convertidor OpenID',
	'openiderror' => 'Eror ëd verìfica',
	'openiderrortext' => "A l'é capitaje n'eror an verificand l'adrëssa OpenID.",
	'openidconfigerror' => "Eror ëd configurassion d'OpenID",
	'openidconfigerrortext' => "La configurassion ëd memorisassion d'OpenID për sta wiki-sì a l'é pa bon-a.
Për piasì ch'a consulta n'[[Special:ListUsers/sysop|aministrator]].",
	'openidpermission' => "Eror ëd përmess d'OpenID",
	'openidpermissiontext' => "L'OpenID ch'a l'ha dàit a peul pa intré an sto servent-sì.",
	'openidcancel' => 'Verìfica scancelà',
	'openidcanceltext' => "La verìfica dl'adrëssa OpenID a l'é stàita scancelà.",
	'openidfailure' => 'verìfica falìa',
	'openidfailuretext' => 'Verìfica ëd l\'adrëssa OpenID falìa. Messagi d\'eror: "$1"',
	'openidsuccess' => 'Verìfica andàita bin',
	'openidsuccesstext' => "'''Verìfica e intrà ant ël sistem da bin com utent $1'''.

Sò OpenID a l'é $2 .

Cost e d'àutri ospionaj OpenID a peulo esse gestì ant la [[Special:Preferences#mw-prefsection-openid|scheda OpenID]] dij sò gust.<br />
Na ciav opsional dël cont a peul esse giontà an sò [[Special:Preferences#mw-prefsection-personal|Profil utent]].",
	'openidusernameprefix' => 'Utent OpenID',
	'openidserverlogininstructions' => "$3 a ciama ch'a anserissa soa ciav për soa pàgina $1 utent $2 (costa a l'é soa anliura OpenID).",
	'openidtrustinstructions' => "Contròla s'it veule condivide dat con $1.",
	'openidallowtrust' => 'A përmët a $1 ëd fidesse dë sto cont utent-sì.',
	'openidnopolicy' => "Ël sit a l'ha pa spessificà dle régole ëd riservatëssa.",
	'openidpolicy' => 'Contròla le <a target="_new" href="$1">régole ëd riservatëssa</a> për savèjne ëd pi.',
	'openidoptional' => 'Opsional',
	'openidrequired' => 'Obligatòri',
	'openidnickname' => 'Stranòm',
	'openidfullname' => 'Nòm complet', # Fuzzy
	'openidemail' => 'Adrëssa ëd pòsta eletrònica',
	'openidlanguage' => 'Lenga',
	'openidtimezone' => 'Fus orari',
	'openidchooselegend' => 'Sèrnia ëd lë stranòm e dël cont',
	'openidchooseinstructions' => "Tùit j'utent a l'han dabzògn ëd në stranòm,
a peul sern-ne un da j'opsion sì-sota.",
	'openidchoosenick' => 'Tò stranòm ($1)',
	'openidchoosefull' => 'Tò nòm complet ($1)', # Fuzzy
	'openidchooseurl' => 'Un nòm sërnù da tò OpenID ($1)',
	'openidchooseauto' => 'Un nòm generà da sol ($1)',
	'openidchoosemanual' => 'Un nòm sërnù da ti:',
	'openidchooseexisting' => 'Un cont esistent an sta wiki-sì',
	'openidchooseusername' => 'nòm utent:',
	'openidchoosepassword' => 'Ciav:',
	'openidconvertinstructions' => "Sta forma-sì a-j përmët ëd cangé sò cont utent për dovré n'adrëssa OpenID o për gionté d'adrësse OpenID",
	'openidconvertoraddmoreids' => "Convertì a OpenID o gionté n'àutra adrëssa OpenID",
	'openidconvertsuccess' => 'Convertì da bin a OpenID',
	'openidconvertsuccesstext' => "A l'ha convertì da bin sò OpenID a $1",
	'openid-convert-already-your-openid-text' => "Cost-sì a l'é già sò OpenID.", # Fuzzy
	'openid-convert-other-users-openid-text' => "Cost-sì a l'é l'OpenID ëd cheidun d'àutri.", # Fuzzy
	'openidalreadyloggedin' => "A l'é già intrà ant ël sistema.",
	'openidalreadyloggedintext' => "'''A l'é già intrà ant ël sistema, $1!'''

A peul gestì (vardé, scancelé, e gionté d'àutri) OpenID ant la [[Special:Preferences#mw-prefsection-openid|Scheda OpenID]] dij sò gust.",
	'openidnousername' => 'Gnun nòm utent spessificà.',
	'openidbadusername' => 'Nòm utent spessificà pa bon.',
	'openidautosubmit' => 'Sta pàgina-sì a conten un formolari che a dovrìa esse spedì automaticament se chiel a l\'ha JavaScript abilità. 
Dësnò, ch\'a preuva ël boton "Continua".',
	'openidclientonlytext' => "A peul pa dovré dij cont da sta wiki-sì com OpenID dzora a n'àutr sit.",
	'openidloginlabel' => 'Adrëssa OpenID',
	'openidlogininstructions' => "{{SITENAME}} a sosten lë stàndard [//openid.net/ OpenID] për na signadura sola antra sit ëd l'aragnà. OpenID a-j përmët ëd rintré an vàire sit diferent an sl'aragnà sensa dovré na ciav diferenta për mincadun. (Ch'a lesa [//en.wikipedia.org/wiki/OpenID Artìcol OpenID ëd Wikipedia] për savèjne ëd pi).
A-i son già tanti [//openid.net/get/ fornitor d'OpenID], e a podrìa già avèj un cont abilità a OpenID dzora a n'àutr servissi.",
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} a-j përmët ''mach'' d'intré ant ël sistema con OpenID.",
	'openidlogininstructions-passwordloginallowed' => "S'a l'has già un cont dzora {{SITENAME}}, a peul [[Special:UserLogin|intré ant ël sistema]] con sò stranòm e soa ciav com al sòlit. Per dovré OpenID ant l'avnì, a peul [[Special:OpenIDConvert|convertì sò cont vers OpenID]] apress esse intrà ant ël sistema normalment.",
	'openidupdateuserinfo' => 'Modìfica mie anformassion përsonaj:',
	'openiddelete' => 'Scancela OpenID',
	'openiddelete-text' => 'An sgnacand ël boton "{{int:openiddelete-button}}", it gavras l\'OpenID $1 da tò cont.
It saras pa pi bon a intré con sto OpenID-sì.',
	'openiddelete-button' => 'Conferma',
	'openiddeleteerrornopassword' => "A peul pa scancelé tùit ij sò OpenID përchè tò sont a l'ha pa 'd ciav.
A podrà pa intré ant ël sistema sensa n'OpenID.",
	'openiddeleteerroropenidonly' => "A peul pa scancelé tùit ij sò OpenID përchè a peule intré intré ant ël sistema mach con OpenID.
A podrà pa intré sensa n'OpenID.",
	'openiddelete-success' => "L'OpenID a l'é stàit gavà da bin da tò cont.",
	'openiddelete-error' => "A l'é capitaje n'eror an gavand l'OpenID da tò cont.",
	'openid-openids-were-not-merged' => "J'OpenID a son pa stàit unì cand a son unisse ij cont d'utent.",
	'prefs-openid-hide-openid' => "Stërmé soa adrëssa OpenID dzora a soa pàgina utent, s'a intra con openID.",
	'openid-hide-openid-label' => "Stërmé soa adrëssa OpenID dzora a soa pàgina utent, s'a intra con openID.",
	'openid-userinfo-update-on-login-label' => "Modifiché j'anformassion përsonaj sì-sota OpenID minca vira ch'i intro:", # Fuzzy
	'openid-associated-openids-label' => 'OpenID associà con tò cont:',
	'openid-urls-url' => "Adrëssa an sl'aragnà",
	'openid-urls-action' => 'Assion',
	'openid-urls-registration' => 'Data ëd registrassion',
	'openid-urls-delete' => 'Scancela',
	'openid-add-url' => 'Gionta un neuv OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Intré ant ël sistema o creé un cont neuv',
	'openid-provider-label-openid' => "Ch'a anserissa soa adrëssa OpenID",
	'openid-provider-label-google' => 'Intra an dovrand tò cont Google',
	'openid-provider-label-yahoo' => 'Intra an dovrand tò cont Yahoo',
	'openid-provider-label-aol' => "Ch'a anserissa sò nòm AOL",
	'openid-provider-label-other-username' => "Ch'a anserissa sò nòm utent $1",
	'specialpages-group-openid' => 'Pàgina ëd sërvissi OpenID e anformassion an slë statù',
	'right-openid-converter-access' => "A peul gionté o convertì sò cont për dovré j'identità OpenID",
	'right-openid-dashboard-access' => 'Acess predefinì al cruscòt OpenID',
	'right-openid-dashboard-admin' => "Acess dl'aministrator al cruscòt OpenID",
	'openid-dashboard-title' => 'Cruscòt OpenID',
	'openid-dashboard-title-admin' => 'Cruscòt OpenID (aministrator)',
	'openid-dashboard-introduction' => "J'ampostassion corente dl'estension d'OpenID ([$1 agiut])",
	'openid-dashboard-number-openid-users' => "Nùmer d'utent con OpenID",
	'openid-dashboard-number-openids-in-database' => "Nùmer d'OpenID (total)",
	'openid-dashboard-number-users-without-openid' => "Nùmer d'utent sensa OpenID",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'openidoptional' => 'ستاسې په خوښه',
	'openidrequired' => 'اړين مالومات',
	'openidnickname' => 'کورنی نوم',
	'openidfullname' => 'اصلي نوم',
	'openidemail' => 'برېښليک پته',
	'openidlanguage' => 'ژبه',
	'openidtimezone' => 'د وخت سيمه',
	'openidchooselegend' => 'د کارن نوم او ګڼون خوښه',
	'openidchooseinstructions' => 'ټولو کارنانو ته د يوه کورني نوم اړتيا شته؛
تاسې يو نوم د لاندينيو خوښنو نه ځانته ټاکلی شی.',
	'openidchoosenick' => 'ستاسې کورنی نوم ($1)',
	'openidchoosefull' => 'ستاسې اصلي نوم ($1)',
	'openidchoosemanual' => 'ستاسې د خوښې يو نوم:',
	'openidchooseusername' => 'کارن-نوم:',
	'openidchoosepassword' => 'پټنوم:',
	'openidnousername' => 'هېڅ يو کارن-نوم نه دی ځانګړی شوی.',
	'openidbadusername' => 'يو ناسم کارن-نوم مو ځانګړی کړی.',
	'openiddelete-button' => 'تاييد',
	'openid-urls-action' => 'چاره',
	'openid-urls-delete' => 'ړنګول',
	'openid-login-or-create-account' => 'ننوتل او يا يو نوی ګڼون جوړول',
	'openid-provider-label-google' => 'د ګووګل د ګڼون په مرسته ننوتل',
	'openid-provider-label-yahoo' => 'د ياهو د ګڼون په مرسته ننوتل',
	'openid-provider-label-other-username' => 'تاسې خپل $1 کارن-نوم وليکۍ',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Malafaya
 * @author SandroHc
 * @author Waldir
 */
$messages['pt'] = array(
	'openid-desc' => 'Autentique-se na wiki com um [//openid.net/ OpenID] e autentique-se noutros sites que usem OpenID com uma conta de utilizador wiki',
	'openidlogin' => 'Entrar ou criar conta com OpenID',
	'openidserver' => 'Servidor OpenID',
	'openidxrds' => 'Ficheiro Yadis',
	'openidconvert' => 'Conversor de OpenID',
	'openiderror' => 'Erro de verificação',
	'openiderrortext' => 'Ocorreu um erro durante a verificação da URL OpenID.',
	'openidconfigerror' => 'Erro de Configuração do OpenID',
	'openidconfigerrortext' => 'A configuração de armazenamento OpenID para esta wiki é inválida.
Por favor, consulte um [[Special:ListUsers/sysop|administrador]].',
	'openidpermission' => 'Erro de permissões OpenID',
	'openidpermissiontext' => 'O OpenID fornecido não está autorizado a autenticar-se neste servidor.',
	'openidcancel' => 'Verificação cancelada',
	'openidcanceltext' => 'A verificação da URL OpenID foi cancelada.',
	'openidfailure' => 'Verificação falhou',
	'openidfailuretext' => 'A verificação da URL OpenID falhou. Mensagem de erro: "$1"',
	'openidsuccess' => 'Verificação com sucesso',
	'openidsuccesstext' => "'''Verificado e autenticado como $1'''.

O seu OpenID é $2.

Este OpenID pode ser gerido no separador do [[Special:Preferences#mw-prefsection-openid|OpenID]] das tuas preferências.<br />Uma senha da conta opcional pode ser adicionada no teu [[Special:Preferences#mw-prefsection-personal|Perfil do utilizador]].",
	'openidusernameprefix' => 'UtilizadorOpenID',
	'openidserverlogininstructions' => '$3 pede que introduza a palavra-chave do seu utilizador $2 página $1 (a URL do seu OpenID)',
	'openidtrustinstructions' => 'Verifique se pretender partilhar dados com $1.',
	'openidallowtrust' => 'Permitir que $1 confie nesta conta de utilizador.',
	'openidnopolicy' => 'O site não especificou uma política de privacidade.',
	'openidpolicy' => 'Consulte a <a target="_new" href="$1">política de privacidade</a> para mais informações.',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Requerido',
	'openidnickname' => 'Alcunha',
	'openidfullname' => 'Nome completo', # Fuzzy
	'openidemail' => 'Correio electrónico',
	'openidlanguage' => 'Língua',
	'openidtimezone' => 'Fuso horário',
	'openidchooselegend' => 'Escolha do nome de utilizador e da conta',
	'openidchooseinstructions' => 'Todos os utilizadores precisam de uma alcunha;
pode escolher uma das opções abaixo.',
	'openidchoosenick' => 'A sua alcunha ($1)',
	'openidchoosefull' => 'O seu nome completo ($1)', # Fuzzy
	'openidchooseurl' => 'Um nome escolhido a partir do seu OpenID ($1)',
	'openidchooseauto' => 'Um nome gerado automaticamente ($1)',
	'openidchoosemanual' => 'Um nome à sua escolha:',
	'openidchooseexisting' => 'Uma conta existente nesta wiki',
	'openidchooseusername' => 'Nome de utilizador:',
	'openidchoosepassword' => 'Palavra-chave:',
	'openidconvertinstructions' => 'Este formulário permite-lhe alterar a sua conta de utilizador para usar uma URL OpenID ou adicionar mais URLs OpenID.',
	'openidconvertoraddmoreids' => 'Converter para OpenID ou adicionar outra URL OpenID',
	'openidconvertsuccess' => 'Convertido para OpenID com sucesso',
	'openidconvertsuccesstext' => 'Converteu com sucesso o seu OpenID para $1.',
	'openid-convert-already-your-openid-text' => 'Esse já é o seu OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Esse é o OpenID de outra pessoa.', # Fuzzy
	'openidalreadyloggedin' => 'Já está autenticado.',
	'openidalreadyloggedintext' => "'''Já está autenticado, $1!'''

Pode gerir (ver, eliminar, etc.) OpenIDs no separador [[Special:Preferences#mw-prefsection-openid|OpenID]] das suas preferências.",
	'openidnousername' => 'Nenhum nome de utilizador especificado.',
	'openidbadusername' => 'Nome de utilizador especificado inválido.',
	'openidautosubmit' => 'Esta página inclui um formulário que deverá ser automaticamente submetido se tiver JavaScript activado.
Caso contrário, utilize o botão "Continue" (Continuar).',
	'openidclientonlytext' => 'Pode usar contas desta wiki como OpenIDs noutro site.',
	'openidloginlabel' => 'URL do OpenID',
	'openidlogininstructions' => 'A {{SITENAME}} suporta o padrão [//openid.net/ OpenID] para autenticação unificada entre sites na internet.
O OpenID permite-lhe autenticar-se em vários sites sem usar uma palavra-chave diferente para cada um
(consulte o [//pt.wikipedia.org/wiki/OpenID artigo OpenID da Wikipédia] para mais informações). Existem vários [//openid.net/get fornecederes de OpenID] e você pode já ter uma conta activada para OpenID noutro serviço.',
	'openidlogininstructions-openidloginonly' => "A {{SITENAME}} ''só'' permite que se autentique com um OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Se já tem uma conta na {{SITENAME}}, pode [[Special:UserLogin|entrar]] com o seu nome de utilizador e palavra-chave, como normalmente.
Para usar o OpenID no futuro, pode [[Special:OpenIDConvert|converter a sua conta para OpenID]] depois de ter entrado normalmente.',
	'openidupdateuserinfo' => 'Actualizar a minha informação pessoal:',
	'openiddelete' => 'Eliminar OpenID',
	'openiddelete-text' => 'Ao clicar o botão "{{int:openiddelete-button}}", irá eliminar o OpenID $1 da sua conta.
Não poderá voltar a autenticar-se com este OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'Não pode apagar todos os seus OpenID porque a sua conta não tem palavra-chave.
Sem um OpenID não se poderia autenticar.',
	'openiddeleteerroropenidonly' => 'Não pode apagar todos os seus OpenID, porque só se pode autenticar usando um OpenID.
Sem um OpenID não se poderia autenticar.',
	'openiddelete-success' => 'O OpenID foi removido da sua conta com sucesso.',
	'openiddelete-error' => 'Ocorreu um erro ao remover o OpenID da sua conta.',
	'openid-openids-were-not-merged' => 'Os OpenIDs não foram fundidos ao fundir as contas.',
	'prefs-openid-hide-openid' => 'Esconder o seu OpenID na sua página de utilizador, se se autenticar com OpenID.',
	'openid-hide-openid-label' => 'Esconder o seu OpenID na sua página de utilizador, se se autenticar com OpenID.',
	'openid-userinfo-update-on-login-label' => 'Actualizar a seguinte informação a partir do meu OpenID de cada vez que me autentico:', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDs associados à sua conta:',
	'openid-urls-action' => 'Acção',
	'openid-urls-delete' => 'Apagar',
	'openid-add-url' => 'Adicionar novo OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Entrar ou criar uma conta nova',
	'openid-provider-label-openid' => 'Introduza a sua URL OpenID',
	'openid-provider-label-google' => 'Entrar usando a sua conta do Google',
	'openid-provider-label-yahoo' => 'Entrar usando a sua conta do Yahoo',
	'openid-provider-label-aol' => 'Introduza o seu nome de utilizador AOL',
	'openid-provider-label-other-username' => 'Introduza o seu nome de utilizador $1',
	'specialpages-group-openid' => 'Páginas de serviço e informação do estado do OpenID',
	'right-openid-dashboard-access' => 'Acesso normal ao painel do OpenID',
	'right-openid-dashboard-admin' => 'Acesso de administrador ao painel do OpenID',
	'openid-dashboard-title' => 'Painel do OpenID',
	'openid-dashboard-title-admin' => 'Painel do OpenID (administrador)',
	'openid-dashboard-introduction' => 'As configurações actuais da extensão OpenID ([$1 ajuda])',
	'openid-dashboard-number-openid-users' => 'Número de utilizadores com OpenID',
	'openid-dashboard-number-openids-in-database' => 'Número de OpenIDs (total)',
	'openid-dashboard-number-users-without-openid' => 'Número de utilizadores sem OpenID',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Danielsouzat
 * @author Eduardo.mps
 * @author Hamilton Abreu
 * @author ZehRique
 * @author 555
 */
$messages['pt-br'] = array(
	'openid-desc' => 'Autentique-se no wiki com um [//openid.net/ OpenID], e autentique-se em outros sítios que usem OpenID com uma conta de utilizador wiki',
	'openidlogin' => 'Autenticação com OpenID', # Fuzzy
	'openidserver' => 'Servidor OpenID',
	'openidxrds' => 'Arquivo Yadis',
	'openidconvert' => 'Conversor de OpenID',
	'openiderror' => 'Erro de verificação',
	'openiderrortext' => 'Ocorreu um erro durante a verificação da URL OpenID.',
	'openidconfigerror' => 'Erro de Configuração do OpenID',
	'openidconfigerrortext' => 'A configuração de armazenamento OpenID para este wiki é inválida.
Por favor, consulte um [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Erro de permissões OpenID',
	'openidpermissiontext' => 'O OpenID fornecido não está autorizado a autenticar-se neste servidor.',
	'openidcancel' => 'Verificação cancelada',
	'openidcanceltext' => 'A verificação da URL OpenID foi cancelada.',
	'openidfailure' => 'Verificação falhou',
	'openidfailuretext' => 'A verificação da URL OpenID falhou. Mensagem de erro: "$1"',
	'openidsuccess' => 'Verificação com sucesso',
	'openidsuccesstext' => 'A verificação da URL OpenID foi bem sucedida.', # Fuzzy
	'openidusernameprefix' => 'UtilizadorOpenID',
	'openidserverlogininstructions' => 'Introduza a sua palavra-chave abaixo para se autenticar em $3 como utilizador $2 (página de utilizador $1).', # Fuzzy
	'openidtrustinstructions' => 'Verifique se pretende compartilhar dados com $1.',
	'openidallowtrust' => 'Permitir que $1 confie nesta conta de utilizador.',
	'openidnopolicy' => 'O sítio não especificou uma política de privacidade.',
	'openidpolicy' => 'Consulte a <a target="_new" href="$1">política de privacidade</a> para mais informações.',
	'openidoptional' => 'Opcional',
	'openidrequired' => 'Requerido',
	'openidnickname' => 'Apelido',
	'openidfullname' => 'Nome completo', # Fuzzy
	'openidemail' => 'Endereço de e-mail',
	'openidlanguage' => 'Língua',
	'openidtimezone' => 'Fuso horário',
	'openidchooselegend' => 'Escolha do nome de usuário', # Fuzzy
	'openidchooseinstructions' => 'Todos os utilizadores precisam de um apelido;
pode escolher uma das opções abaixo.',
	'openidchoosenick' => 'Seu apelido ($1)',
	'openidchoosefull' => 'O seu nome completo ($1)', # Fuzzy
	'openidchooseurl' => 'Um nome escolhido a partir do seu OpenID ($1)',
	'openidchooseauto' => 'Um nome gerado automaticamente ($1)',
	'openidchoosemanual' => 'Um nome à sua escolha:',
	'openidchooseexisting' => 'Uma conta existente nesta wiki',
	'openidchooseusername' => 'Nome de usuário:',
	'openidchoosepassword' => 'Senha:',
	'openidconvertinstructions' => 'Este formulário lhe permite alterar sua conta de usuário para usar uma URL OpenID ou adicionar mais URLs OpenID.',
	'openidconvertoraddmoreids' => 'Converter para OpenID ou adicionar outra URL OpenID',
	'openidconvertsuccess' => 'Convertido para OpenID com sucesso',
	'openidconvertsuccesstext' => 'Você converteu com sucesso o seu OpenID para $1.',
	'openid-convert-already-your-openid-text' => 'Esse já é o seu OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Esse é o OpenID de outra pessoa.', # Fuzzy
	'openidalreadyloggedin' => "'''Você já se encontra autenticado, $1!'''

Se no futuro pretender usar OpenID para se autenticar, pode [[Special:OpenIDConvert|converter a sua conta para usar OpenID]].", # Fuzzy
	'openidnousername' => 'Nenhum nome de utilizador especificado.',
	'openidbadusername' => 'Nome de utilizador especificado inválido.',
	'openidautosubmit' => 'Esta página inclui um formulário que deverá ser automaticamente submetido se tiver JavaScript ativado.
Caso contrário, utilize o botão "Continue" (Continuar).',
	'openidclientonlytext' => 'Você pode usar contas deste wiki como OpenIDs em outro sítio.',
	'openidloginlabel' => 'URL do OpenID',
	'openidlogininstructions' => '{{SITENAME}} suporta o padrão [//openid.net/ OpenID] para autenticação única entre sítios Web.
O OpenID lhe permite autenticar-se em diversos sítios Web sem usar uma palavra-chave diferente em cada um.
(Veja [//pt.wikipedia.org/wiki/OpenID o artigo OpenID na Wikipédia] para mais informação.)

Se já possui uma conta em {{SITENAME}}, pode [[Special:UserLogin|autenticar-se]] com o seu nome de utilizador e palavra-chave como habitualmente.
Para utilizar o OpenID no futuro, pode [[Special:OpenIDConvert|converter a sua conta em OpenID]] após autenticar-se normalmente.

Existem vários [http://wiki.openid.net/Public_OpenID_providers fornecederes de OpenID], e você poderá já ter uma conta ativada para OpenID em outro serviço.', # Fuzzy
	'openidupdateuserinfo' => 'Atualizar minhas informações pessoais:',
	'openiddelete' => 'Excluir OpenID',
	'openiddelete-text' => 'Ao clicar no botão "{{int:openiddelete-button}}", você removerá o OpenID $1 de sua conta.
Você não poderá mais efetuar autenticação com este OpenID.',
	'openiddelete-button' => 'Confirmar',
	'openiddeleteerrornopassword' => 'Você não pode apagar todos os seus OpenID porque a sua conta não tem uma palavra-chave.
Você ficaria impossibilitado de entrar na sua conta sem um OpenID.',
	'openiddeleteerroropenidonly' => 'Você não pode apagar todos os seus OpenID porque só pode entrar com OpenID.
Você não poderia entrar sem um OpenID.',
	'openiddelete-success' => 'O OpenID foi removido de sua conta com sucesso.',
	'openiddelete-error' => 'Ocorreu um erro enquanto removia o OpenID de sua conta.',
	'prefs-openid-hide-openid' => 'Ocultar o seu URL de OpenID da sua página de usuário ao se autenticar com OpenID.',
	'openid-hide-openid-label' => 'Ocultar o seu URL de OpenID da sua página de usuário ao se autenticar com OpenID.',
	'openid-userinfo-update-on-login-label' => 'Atualizar a seguinte informação a partir da minha "persona" OpenID cada vez que me autentico', # Fuzzy
	'openid-associated-openids-label' => 'OpenIDs associadas à sua conta:',
	'openid-urls-action' => 'Ação',
	'openid-urls-delete' => 'Excluir',
	'openid-add-url' => 'Adicionar novo OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Entrar ou Criar Nova Conta', # Fuzzy
	'openid-provider-label-openid' => 'Introduza a sua URL OpenID',
	'openid-provider-label-google' => 'Entrar usando a sua conta do Google',
	'openid-provider-label-yahoo' => 'Entrar usando a sua conta do Yahoo',
	'openid-provider-label-aol' => 'Digite seu nome de utilizador AOL',
	'openid-provider-label-other-username' => 'Introduza o seu nome de utilizador $1',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Memo18
 * @author Minisarm
 * @author Misterr
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'openid-desc' => 'Autentificați-vă pe acest wiki folosind un [//openid.net/ OpenID] și conectați-vă la alte site-uri web OpenID cu un cont de utilizator wiki',
	'openidlogin' => 'Autentificare / creare cont cu OpenID',
	'openidserver' => 'Server OpenID',
	'openidxrds' => 'Fișier Yadis',
	'openidconvert' => 'Convertor OpenID',
	'openiderror' => 'Eroare de verificare',
	'openiderrortext' => 'A avut loc o eroare în timpul verificării URL-ului OpenID',
	'openidconfigerror' => 'Eroare de configurare OpenID',
	'openidconfigerrortext' => 'Configurarea stocării OpenID pentru acest wiki este invalidă.
Vă rugăm să contactați un [[Special:ListUsers/sysop|administrator]].',
	'openidpermission' => 'Eroare de permisiune OpenID',
	'openidpermissiontext' => 'OpenID-ul furnizat nu poate fi folosit pe acest server pentru autentificare.',
	'openidcancel' => 'Verificare anulată',
	'openidcanceltext' => 'Verificarea URL-ului OpenID a fost anulată.',
	'openidfailure' => 'Verificare eșuată',
	'openidfailuretext' => 'Verificarea URL-ului OpenID a eșuat. Mesaj de eroare: "$1"',
	'openidsuccess' => 'Verificare cu succes',
	'openidsuccesstext' => "'''Verificare finalizată cu succes și autentificare ca utilizator $1'''.

OpenID-ul dumneavoastră este $2 .

Acesta și alte OpenID-uri opționale pot fi administrate în [[Special:Preferences#mw-prefsection-openid|fila OpenID]] din cadrul preferințelor dumneavoastră.<br />
O parolă opțională a contului poate fi adăugată în secțiunea [[Special:Preferences#mw-prefsection-personal|Informații personale]].",
	'openidusernameprefix' => 'Utilizator OpenID',
	'openidserverlogininstructions' => '$3 vă solicită să introduceți parola pentru pagina $2 dumneavoastră de utilizator $1 (URL OpenID)',
	'openidtrustinstructions' => 'Verificați dacă doriți să partajați datele cu $1.',
	'openidallowtrust' => 'Permite lui $1 să aibă încredere în acest cont de utilizator.',
	'openidnopolicy' => 'Site-ul nu a specificat politica de confidențialitate.',
	'openidpolicy' => 'Verificați <a target="_new" href="$1">politica de confidențialitate</a> pentru mai multe informații.',
	'openidoptional' => 'Opțional',
	'openidrequired' => 'Necesar',
	'openidnickname' => 'Poreclă',
	'openidfullname' => 'Nume complet:',
	'openidemail' => 'Adresă e-mail',
	'openidlanguage' => 'Limbă',
	'openidtimezone' => 'Fus orar',
	'openidchooselegend' => 'Alegerea numelui de utilizator și a contului',
	'openidchooseinstructions' => 'Toți utilizatorii necesită o poreclă;
se poate alege una din opțiunile de mai jos.',
	'openidchoosenick' => 'Porecla dvs. ($1)',
	'openidchoosefull' => 'Numele întreg ($1)',
	'openidchooseurl' => 'Un nume ales din OpenID-ul dvs. ($1)',
	'openidchooseauto' => 'Un nume generat automat ($1)',
	'openidchoosemanual' => 'Un nume la alegere:',
	'openidchooseexisting' => 'Un cont existent pe acest wiki',
	'openidchooseusername' => 'Nume de utilizator:',
	'openidchoosepassword' => 'Parolă:',
	'openidconvertsuccess' => 'Convertit cu succes la OpenID',
	'openidconvertsuccesstext' => 'V-ați convertit cu succes contul OpenID la $1.',
	'openid-convert-already-your-openid-text' => 'Acesta este deja OpenID-ul dumneavoastră.',
	'openid-convert-other-users-openid-text' => 'Acesta este OpenID-ul altcuiva.',
	'openidalreadyloggedin' => 'Sunteți deja autentificat.',
	'openidnousername' => 'Nici un nume de utilizator specificat.',
	'openidbadusername' => 'Nume de utilizator specificat greșit.',
	'openidloginlabel' => 'URL OpenID',
	'openidupdateuserinfo' => 'Actualizează informaţiile mele personale:',
	'openiddelete' => 'Şterge OpenID',
	'openiddelete-button' => 'Confirmă',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Acțiune',
	'openid-urls-registration' => 'Data înregistrării',
	'openid-urls-delete' => 'Şterge',
	'openid-add-url' => 'Adaugă un nou OpenID',
	'openid-login-or-create-account' => 'Autentificați-vă sau creați-vă un nou cont',
	'openid-provider-label-google' => 'Autentificare folosind contul Google',
	'openid-provider-label-yahoo' => 'Autentificare folosind contul Yahoo',
	'openid-provider-label-other-username' => 'Introduceți numele dumneavoastră de $1 utilizator.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'openidserver' => 'Server OpenID',
	'openidxrds' => 'File Yadis',
	'openidconvert' => 'Convertitore OpenID',
	'openidoptional' => 'Opzionele',
	'openidrequired' => 'Richieste',
	'openidnickname' => 'Soprannome',
	'openidfullname' => 'Nome vere',
	'openidemail' => 'Indirizze e-mail',
	'openidlanguage' => 'Lènghe',
	'openidtimezone' => "Orarie d'a zone",
	'openidchoosenick' => "'U soprannome tune ($1)",
	'openidchoosefull' => "'U nome vere tune ($1)",
	'openidchoosemanual' => "Scacchie 'nu nome:",
	'openidchooseusername' => "Nome de l'utende:",
	'openidchoosepassword' => 'Passuord:',
	'openidnousername' => 'Nisciune nome utende specificate.',
	'openidbadusername' => "'U nome utende specificate non g'è valide.",
	'openidloginlabel' => 'URL de OpenID',
	'openiddelete-button' => 'Conferme',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Azione',
	'openid-urls-registration' => 'Orarie de reggistrazzione',
	'openid-urls-delete' => 'Scangille',
	'openid-add-url' => "Aggiunge 'nu nuève OpenID a 'u cunde tune",
	'openid-login-or-create-account' => "Trase o ccreje 'nu cunde utende nuève",
	'openid-provider-label-openid' => "Mitte l'URL toje de OpenID",
	'openid-provider-label-google' => "Tràse ausanne 'u cunde utende de Google",
	'openid-provider-label-yahoo' => "Tràse ausanne 'u cunde utende de Yahoo",
	'openid-provider-label-aol' => "Mitte 'u tue nome utende AOL",
	'openid-provider-label-other-username' => "Mitte 'u tue $1 nome utende",
	'specialpages-group-openid' => "Pàggene de servizie de OpenID e 'mbormaziune de state",
	'openid-dashboard-title' => 'Cruscotte de OpenID',
	'openid-dashboard-title-admin' => 'Cruscotte de OpenID (amministratore)',
	'openid-dashboard-number-openid-users' => 'Numere de utinde cu OpenID',
	'openid-dashboard-number-openids-in-database' => 'Numere de OpenID (totale)',
	'openid-dashboard-number-users-without-openid' => 'Numere de utinde senze OpenID',
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'openidchoosepassword' => 'Ou password:',
);

/** Russian (русский)
 * @author Adata80
 * @author Aleksandrit
 * @author Ferrer
 * @author Ignatus
 * @author Kaganer
 * @author Lockal
 * @author Putnik
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'openid-desc' => 'Вход в вики с помощью [//openid.net/ OpenID], а также вход на другие сайты поддерживающие OpenID с помощью учётной записи в вики',
	'openidlogin' => 'Войти / создать учетную запись с OpenID',
	'openidserver' => 'Сервер OpenID',
	'openidxrds' => 'Файл Yadis',
	'openidconvert' => 'Преобразователь OpenID',
	'openiderror' => 'Ошибка проверки полномочий',
	'openiderrortext' => 'Во время проверки адреса OpenID произошла ошибка.',
	'openidconfigerror' => 'Ошибка настройки OpenID',
	'openidconfigerrortext' => 'Настройка хранилища OpenID для этой вики ошибочна.
Пожалуйста, обратитесь к [[Special:ListUsers/sysop|администратору сайта]].',
	'openidpermission' => 'Ошибка прав доступа OpenID',
	'openidpermissiontext' => 'Указанный OpenID не позволяет войти на этот сервер.',
	'openidcancel' => 'Проверка отменена',
	'openidcanceltext' => 'Проверка адреса OpenID была отменена.',
	'openidfailure' => 'Проверка неудачна',
	'openidfailuretext' => 'Проверка адреса OpenID завершилась неудачей. Сообщение об ошибке: «$1»',
	'openidsuccess' => 'Проверка прошла успешно',
	'openidsuccesstext' => "'''Успешная проверка. Вы вошли как $1.'''

Ваш идентификатор OpenID: ''$2''.

Этот и возможные дальнейшие идентификаторы OpenID могут быть настроены на [[Special:Preferences#mw-prefsection-openid|вкладке OpenID]] в ваших настройках.<br />
Необязательный пароль к учётной записи может быть добавлен в вашем [[Special:Preferences#mw-prefsection-personal|профиле пользователя]].",
	'openidusernameprefix' => 'УчастникOpenID',
	'openidserverlogininstructions' => 'Введите ниже свой пароль, чтобы войти на $3 как участник $2 (личная страница $1 — это ваш OpenID URL).',
	'openidtrustinstructions' => 'Отметьте, если вы хотите предоставить доступ к данным для $1.',
	'openidallowtrust' => 'Разрешить $1 доверять этой учётной записи.',
	'openidnopolicy' => 'Сайт не указал политику конфиденциальности.',
	'openidpolicy' => 'Дополнительную информацию см. в <a target="_new" href="$1">политике конфиденциальности</a>.',
	'openidoptional' => 'необязательное',
	'openidrequired' => 'обязательное',
	'openidnickname' => 'Псевдоним',
	'openidfullname' => 'Полное имя', # Fuzzy
	'openidemail' => 'Адрес эл. почты',
	'openidlanguage' => 'Язык',
	'openidtimezone' => 'Часовой пояс',
	'openidchooselegend' => 'Выбор имени пользователя и учётной записи',
	'openidchooseinstructions' => 'Каждый участник должен иметь псевдоним;
вы можете выбрать один из представленных ниже.',
	'openidchoosenick' => 'Ваш ник ($1)',
	'openidchoosefull' => 'Ваше полное имя ($1)', # Fuzzy
	'openidchooseurl' => 'Имя, полученное из вашего OpenID ($1)',
	'openidchooseauto' => 'Автоматически созданное имя ($1)',
	'openidchoosemanual' => 'Имя на ваш выбор:',
	'openidchooseexisting' => 'Существующая учётная запись в этой вики',
	'openidchooseusername' => 'имя участника:',
	'openidchoosepassword' => 'Пароль:',
	'openidconvertinstructions' => 'Эта форма позволяет вам сменить использование вашей учётной записи на использование адреса OpenID, добавить несколько адресов OpenID.',
	'openidconvertoraddmoreids' => 'Преобразовать в OpenID или добавить другой адрес OpenID',
	'openidconvertsuccess' => 'Успешное преобразование в OpenID',
	'openidconvertsuccesstext' => 'Вы успешно преобразовали свой OpenID в $1.',
	'openid-convert-already-your-openid-text' => 'Это уже ваш OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Это чужой OpenID.', # Fuzzy
	'openidalreadyloggedin' => 'Вы уже вошли.',
	'openidalreadyloggedintext' => "''' Вы уже вошли,  $1!'''

Вы можете управлять (просматривать, удалять, добавлять) записи OpenID на [[Special:Preferences#mw-prefsection-openid|вкладке OpenID]] в ваших предпочтениях.",
	'openidnousername' => 'Не указано имя участника.',
	'openidbadusername' => 'Указано неверное имя участника.',
	'openidautosubmit' => 'Эта страница содержит форму, которая должна быть автоматически отправлена, если у вас включён JavaScript.
Если этого не произошло, попробуйте нажать на кнопку «Продолжить».',
	'openidclientonlytext' => 'Вы не можете использовать учётные записи из этой вики как OpenID на другом сайте.',
	'openidloginlabel' => 'Адрес OpenID',
	'openidlogininstructions' => '{{SITENAME}} поддерживает стандарт [//openid.net/ OpenID], позволяющий использовать одну учётную запись для входа на различные веб-сайты.
OpenID позволяет вам заходить на различные веб-сайты без указания разных паролей для них
(подробнее см. [//ru.wikipedia.org/wiki/OpenID статью об OpenID в Википедии]).

Существует множество [//openid.net/get/ общедоступных провайдеров OpenID], возможно, вы уже имеете учётную запись OpenID на другом сайте.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} позволяет вам войти ''только'' с использованием OpenID.",
	'openidupdateuserinfo' => 'Обновить мою личную информацию:',
	'openiddelete' => 'Удалить OpenID',
	'openiddelete-text' => 'Нажав на кнопку «{{int:openiddelete-button}}», Вы удалите OpenID $1 из своей учётной записи.
Вы больше не сможете входить с этим OpenID.',
	'openiddelete-button' => 'Подтвердить',
	'openiddeleteerrornopassword' => 'Вы не можете удалить все свои OpenID, так как у вашей учётной записи нет пароля.
У вас не будет возможности войти в систему без OpenID.',
	'openiddeleteerroropenidonly' => 'Вы не можете удалить все свои OpenID, так как вам разрешено входить в систему только с использованием OpenID.
У вас не будет возможности войти в систему без OpenID.',
	'openiddelete-success' => 'OpenID успешно удалён из Вашей учётной записи.',
	'openiddelete-error' => 'Произошла ошибка при удалении OpenID из Вашей учётной записи.',
	'openid-openids-were-not-merged' => 'OpenID(s) не были объединены при слиянии учетных записей.',
	'prefs-openid-hide-openid' => 'Скрывать ваш OpenID на вашей странице участника, если вы вошли с помощью OpenID.',
	'openid-hide-openid-label' => 'Скрывать ваш OpenID на вашей странице участника, если вы вошли с помощью OpenID.',
	'openid-userinfo-update-on-login-label' => 'Обновлять следующую информацию обо мне через OpenID каждый раз, когда я представляюсь системе:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID, связанные с Вашей учётной записью:',
	'openid-urls-action' => 'Действие',
	'openid-urls-registration' => 'Время регистрации',
	'openid-urls-delete' => 'Удалить',
	'openid-add-url' => 'Добавить новый OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Представиться системе или создать новую учётную запись',
	'openid-provider-label-openid' => 'Введите URL вашего OpenID',
	'openid-provider-label-google' => 'Представиться, используя учётную запись Google',
	'openid-provider-label-yahoo' => 'Представиться, используя учётную запись Yahoo',
	'openid-provider-label-aol' => 'Введите ваше имя в AOL',
	'openid-provider-label-other-username' => 'Введите ваше имя участника $1',
	'openid-dashboard-title' => 'панель OpenID',
	'openid-dashboard-title-admin' => 'Панель OpenID (администратор)',
	'openid-dashboard-number-openid-users' => 'Чисто пользователей с OpenID',
	'openid-dashboard-number-openids-in-database' => 'Число OpenID (всего)',
	'openid-dashboard-number-users-without-openid' => 'Чисто пользователей без OpenID',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'openidchooseusername' => 'Мено хоснователя:',
	'openidchoosepassword' => 'Гесло:',
);

/** Sicilian (sicilianu)
 * @author Melos
 * @author Santu
 */
$messages['scn'] = array(
	'openid-desc' => "Fai lu login a la wiki cu [//openid.net/ OpenID] r a l'àutri siti web ca non ùsanu OpenID cu n'account wiki",
	'openidlogin' => 'Login cu OpenID', # Fuzzy
	'openidserver' => 'server OpenID',
	'openidxrds' => 'file Yadis',
	'openidconvert' => 'cunvirtituri OpenID',
	'openiderror' => 'Sbàgghiu di virìfica',
	'openiderrortext' => "Ci fu n'erruri ntô mentri dâ virìfica di l'URL OpenID.",
	'openidconfigerror' => 'Sbàgghiu ntâ cunfigurazzioni OpenID',
	'openidconfigerrortext' => 'La cunfigurazzioni dâ mimurizzazzioni di OpenID pi sta wiki non è vàlida.
Pi favuri addumanna cunzigghiu a nu [[Special:ListUsers/sysop|amministraturi]].',
	'openidpermission' => 'Sbàgghiu nna li pirmessi OpenID',
	'openidpermissiontext' => "Non vinni pirmuttutu di fari lu login a stu server a l'OpenID ca dasti.",
	'openidcancel' => 'Virìfica scancillata',
	'openidcanceltext' => "La virìfica di l'URL OpenID vinni scancillata.",
	'openidfailure' => 'Virìfica falluta',
	'openidfailuretext' => 'La virìfica di l\'URL OpenID fallìu. Missaggiu di erruri: "$1"',
	'openidsuccess' => 'Virìfica fatta',
	'openidsuccesstext' => "La virìfica di l'URL OpenID vinni fatta cu successu.", # Fuzzy
	'openidusernameprefix' => 'Utenti OpenID',
	'openidserverlogininstructions' => 'Nzirisci di sècutu la tò password pi fari lu  login a  $3 comu utenti $2 (pàggina utenti  $1).', # Fuzzy
	'openidtrustinstructions' => 'Cuntrolla si disìi cunnivìdiri li dati cu $1.',
	'openidallowtrust' => "Pirmetti a $1 di fidàrisi di st'account utenti.",
	'openidnopolicy' => "Lu situ non pricisau na pulìtica supr'a la privacy.",
	'openidpolicy' => 'Cuntrolla la  <a target="_new" href="$1">pulìtica supr\'a la privacy</a> pi chiossai nfurmazzioni.',
	'openidoptional' => 'Facultativu',
	'openidrequired' => 'Addumannatu',
	'openidnickname' => 'Nickname',
	'openidfullname' => 'Nomu cumpretu', # Fuzzy
	'openidemail' => 'Nnirizzu e-mail',
	'openidlanguage' => 'Lingua',
	'openidchooseinstructions' => "Tutti l'utenti hannu di bisognu di nu nickname;
ni poi pigghiari unu di chisti ccà di sècutu.",
	'openidchoosefull' => 'Lu tò nomu cumpretu ($1)', # Fuzzy
	'openidchooseurl' => 'Nu nomu scigghiutu dû tò OpenID ($1)',
	'openidchooseauto' => 'Nu nomu giniràtusi sulu ($1)',
	'openidchoosemanual' => 'Nu nomu scigghiutu di tia:',
	'openidchooseexisting' => "N'account ca ggià c'è nti sta wiki:", # Fuzzy
	'openidchoosepassword' => 'Password:',
	'openidconvertinstructions' => 'Stu mòdulu ti duna lu pirmessu di canciari lu tò account pi usari nu URL OpenID.', # Fuzzy
	'openidconvertsuccess' => 'Canciatu cu successu a OpenID',
	'openidconvertsuccesstext' => 'Lu tò OpenID canciau cu sucessu a $1.',
	'openid-convert-already-your-openid-text' => 'Chistu è ggià lu tò  OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => "Chistu è l'OpenID di n'àutru.", # Fuzzy
	'openidalreadyloggedin' => "'''Facisti ggià lu login, $1!'''

Si disìi usari OpenID pi fari lu login ntô futuru, poi [[Special:OpenIDConvert|canciari lu tò account pi utilizzari OpenID]].", # Fuzzy
	'openidnousername' => 'Nuddu nomu utenti spicificatu.',
	'openidbadusername' => 'Nomu utenti spicificatu sbagghiatu.',
	'openidautosubmit' => 'Sta pàggina havi nu mòdulu c\'avissi èssiri mannatu autumàticamenti si JavaScript ci l\'hai attivatu. Si, mmeci, nun è accuddì, prova a mùnciri lu buttuni "Continue".',
	'openidclientonlytext' => "Non poi usari li account di sta wiki comu OpenID supra a n'àutru situ.",
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => "{{SITENAME}} susteni lu standard [//openid.net/ OpenID] pô login ùnicu supr'a li siti web.
OpenID ti pirmetti di riggistràriti nni assai siti web senza utilizzari na password diffirenti pi ognidunu d'iddi.
(Leggi la [//en.wikipedia.org/wiki/OpenID vuci di Wikipedia supr'a l'OpenID] pi cchiossai nfurmazzioni.)

Si n'account ci l'hai gìa supr'a {{SITENAME}}, poi fari lu [[Special:UserLogin|login]] cu lu tò nomu utentu e la tò password comu ô sòlitu.
Pi utilizzari OpenID ntô futuru, poi [[Special:OpenIDConvert|canciari lu tò account a OpenID]] doppu ca hà fattu lu login comu ô sòlitu.

Ci sunnu assai [http://wiki.openid.net/Public_OpenID_providers Provider OpenID pùbbrichi], e tu putissi aviri già n'account abbilitatu a l'OpenID supra a n'àutru sirvizu.

; Àutri wiki : Si pussedi n'account supra a na wiki abbilitata a l'OpenID, comu [//wikitravel.org/ Wikitravel], [//www.wikihow.com/ wikiHow], [//vinismo.com/ Vinismo], [//aboutus.org/ AboutUs] o [//kei.ki/ Keiki], poi fari lu login a {{SITENAME}} nzirennu l<nowiki>'</nowiki>'''URL cumpretu''' dâ tò pàggina utenti nti ss'àutra wiki ntô box misu susu. P'asèmpiu, ''<nowiki>//kei.ki/en/User:Evan</nowiki>''.
; [//openid.yahoo.com/ Yahoo!] : Si pussedi n'account cu Yahoo!, poi fari lu login a stu situ nzirennu lu tò OpenID Yahoo! ntô box currispunnenti. Li URL OpenID Yahoo! pussèdunu la furma ''<nowiki>https://me.yahoo.com/yourusername</nowiki>''.
; [//dev.aol.com/aol-and-63-million-openids AOL] : Si pussedi n'account cu [//www.aol.com/ AOL], comu a n'account [//www.aim.com/ AIM], poi fari lu login a {{SITENAME}} nzirennu lu tò OpenID AOL ntô box curripunnenti. Li URL OpenID AOL pussèdunu la furma ''<nowiki>//openid.aol.com/yourusername</nowiki>''. Lu tò nomu utenti avissi a èssiri tuttu paru 'n caràttiri nichi, senza spàzii.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-openid-provider.html Blogger], [//faq.wordpress.com/2007/03/06/what-is-openid/ Wordpress.com], [//www.livejournal.com/openid/about.bml LiveJournal], [//bradfitz.vox.com/library/post/openid-for-vox.html Vox] : Si pussedi nu blog supr'a unu di sti siti, nzirisci l'URL dû blog ntô box currispunnenti. P'asèmpiu, ''<nowiki>//yourusername.blogspot.com/</nowiki>'', ''<nowiki>//yourusername.wordpress.com/</nowiki>'', ''<nowiki>//yourusername.livejournal.com/</nowiki>'', o ''<nowiki>//yourusername.vox.com/</nowiki>''.", # Fuzzy
	'prefs-openid-hide-openid' => "Ammuccia lu tò OpenID supr'a tò pàggina utenti, si fai lu login cu OpenID.",
	'openid-hide-openid-label' => "Ammuccia lu tò OpenID supr'a tò pàggina utenti, si fai lu login cu OpenID.",
	'openid-urls-action' => 'Azzioni',
	'openid-provider-label-google' => 'Accedi utilizzannu lu tò account Google',
	'openid-provider-label-aol' => 'Nserisci lu tò screenname AOL',
	'openid-provider-label-other-username' => 'Nserisci lu tò $1 nnomu utenti',
);

/** Sinhala (සිංහල)
 * @author Asiri wiki
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'openidlogin' => 'OpenID සමඟ පිවිසෙන්න / ගිණුමක් තනන්න',
	'openidserver' => 'OpenID සර්වරය',
	'openidxrds' => 'Yadis ගොනුව',
	'openidconvert' => 'OpenID පරිවර්තකය',
	'openiderror' => 'සත්‍යාපන දෝෂය',
	'openidconfigerror' => 'OpenID වින්‍යාස දෝෂය',
	'openidpermission' => 'OpenID අනුමැති දෝෂය',
	'openidcancel' => 'සත්‍යාපනය අවලංගු කරන ලදී',
	'openidfailure' => 'සත්‍යාපනය අසාර්ථකයි',
	'openidsuccess' => 'සත්‍යාපනය සාර්ථකයි',
	'openidusernameprefix' => 'OpenIDපරිශීලක',
	'openidpolicy' => 'තවත් තොරතුරු සඳහා <a target="_new" href="$1">පුද්ගලිකත්ව ප්‍රතිපත්තිය</a> පරික්ෂා කරන්න.',
	'openidoptional' => 'වෛකල්පිත',
	'openidrequired' => 'අවශ්‍යයි',
	'openidnickname' => 'අපනාමය',
	'openidfullname' => 'සම්පූර්ණ නම',
	'openidemail' => 'විද්‍යුත්-තැපැල් ලිපිනය',
	'openidlanguage' => 'භාෂාව',
	'openidtimezone' => 'වේලා කලාපය',
	'openidchooselegend' => 'පරිශීලක නාමය සහ ගිණුම් අභිමතය',
	'openidchoosenick' => 'ඔබේ අපනාමය ($1)',
	'openidchoosefull' => 'ඔබේ සම්පූර්ණ නම ($1)',
	'openidchooseauto' => 'ස්වයං-ජනිත නාමය ($1)',
	'openidchoosemanual' => 'ඔබේ කැමැත්තට අනුව නම:',
	'openidchooseexisting' => 'මෙම විකියෙහි පවත්නා ගිණුමක්',
	'openidchooseusername' => 'පරිශීලක නාමය:',
	'openidchoosepassword' => 'මුරපදය:',
	'openidconvertsuccess' => 'OpenID වෙත සාර්ථකව හරවන ලදී',
	'openid-convert-already-your-openid-text' => 'එය දැනටමත් ඔබේ OpenID වේ.',
	'openid-convert-other-users-openid-text' => 'එය වෙන කෙනෙකුගේ OpenID එකකි.',
	'openidalreadyloggedin' => 'ඔබ දැනටමත් ප්‍රවිෂ්ට වී ඇත.',
	'openidnousername' => 'පරිශීලක නාමයක් විශේෂණය කර නොමැත.',
	'openidloginlabel' => 'OpenID URL',
	'openidupdateuserinfo' => 'මගේ පෞද්ගලික තොරතුරු යාවත්කාලීන කරන්න:',
	'openiddelete' => 'OpenID මකන්න',
	'openiddelete-button' => 'තහවුරු කරන්න',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'කාර්යය',
	'openid-urls-registration' => 'ලියාපදිංචි වූ වේලාව',
	'openid-urls-delete' => 'මකන්න',
	'openid-add-url' => 'නව OpenID එක් කරන්න',
	'openid-login-or-create-account' => 'පිවිසෙන්න හෝ නව ගිණුමක් තනන්න',
	'openid-provider-label-openid' => 'ඔබේ OpenID URL යොදන්න',
	'openid-provider-label-google' => 'ඔබේ ගූගල් ගිණුමෙන් පිවිසෙන්න',
	'openid-provider-label-yahoo' => 'ඔබේ යාහු ගිණුමෙන් පිවිසෙන්න',
	'openid-provider-label-aol' => 'ඔබේ AOL තිරනාමය යොදන්න',
	'openid-provider-label-other-username' => 'ඔබේ $1 පරිශීලකනාමය යොදන්න',
	'openid-dashboard-title' => 'OpenID උපකරණ පුවරුව',
	'openid-dashboard-title-admin' => 'OpenID උපකරණ පුවරුව (පරිපාලක)',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'openid-desc' => 'Prihlásenie sa na wiki pomocou [//openid.net/ OpenID] a prihlásenie na iné stránky podporujúce OpenID pomocou používateľského účtu wiki',
	'openidlogin' => 'Prihlásiť sa pomocou OpenID', # Fuzzy
	'openidserver' => 'OpenID server',
	'openidxrds' => 'Súbor Yadis',
	'openidconvert' => 'OpenID konvertor',
	'openiderror' => 'Chyba pri overovaní',
	'openiderrortext' => 'Počas overovania OpenID URL sa vyskytla chyba.',
	'openidconfigerror' => 'Chyba konfigurácie OpenID',
	'openidconfigerrortext' => 'Konfigurácia OpenID tejto wiki je neplatná.
Prosím, poraďte sa so [[Special:ListUsers/sysop|správcom]] tejto webovej lokality.',
	'openidpermission' => 'Chyba oprávnení OpenID',
	'openidpermissiontext' => 'OpenID, ktorý ste poskytli, nemá oprávnenie prihlásiť sa k tomuto serveru',
	'openidcancel' => 'Overovanie bolo zrušené',
	'openidcanceltext' => 'Overovanie OpenID URL bolo zrušené.',
	'openidfailure' => 'Overovanie bolo zrušené',
	'openidfailuretext' => 'Overovanie OpenID URL zlyhalo. Chybová správa: „$1“',
	'openidsuccess' => 'Overenie bolo úspešné',
	'openidsuccesstext' => 'Overenie OpenID URL bolo úspešné.', # Fuzzy
	'openidusernameprefix' => 'PoužívateľOpenID',
	'openidserverlogininstructions' => 'Dolu zadajte heslo pre prihlásenie na $3 ako používateľ $2 (používateľská stránka $1).', # Fuzzy
	'openidtrustinstructions' => 'Skontrolujte, či chcete zdieľať dáta s používateľom $1.',
	'openidallowtrust' => 'Povoliť $1 dôverovať tomuto používateľskému účtu.',
	'openidnopolicy' => 'Lokalita nešpecifikovala politiku ochrany osobných údajov.',
	'openidpolicy' => 'Viac informácií na stránke <a target="_new" href="$1">Ochrana osobných údajov</a>',
	'openidoptional' => 'Voliteľné',
	'openidrequired' => 'Požadované',
	'openidnickname' => 'Prezývka',
	'openidfullname' => 'Plné meno', # Fuzzy
	'openidemail' => 'Emailová adresa',
	'openidlanguage' => 'Jazyk',
	'openidtimezone' => 'Časové pásmo',
	'openidchooselegend' => 'Výber používateľského mena', # Fuzzy
	'openidchooseinstructions' => 'Každý používateľ musí mať prezývku; môžete si vybrať z dolu uvedených možností.',
	'openidchoosenick' => 'Vaša prezývka ($1)',
	'openidchoosefull' => 'Vaše plné meno ($1)', # Fuzzy
	'openidchooseurl' => 'Meno na základe vášho OpenID ($1)',
	'openidchooseauto' => 'Automaticky vytvorené meno ($1)',
	'openidchoosemanual' => 'Meno, ktoré si vyberiete:',
	'openidchooseexisting' => 'Existujúci účet na tejto wiki',
	'openidchooseusername' => 'Používateľské meno:',
	'openidchoosepassword' => 'Heslo:',
	'openidconvertinstructions' => 'Tento formulár vám umožňuje zmeniť váš učet, aby používal OpenID URL alebo pridať ďalšie OpenID URL.',
	'openidconvertoraddmoreids' => 'Previesť na OpenID alebo pridať iný OpenID URL',
	'openidconvertsuccess' => 'Úspešne prevedené na OpenID',
	'openidconvertsuccesstext' => 'Úspešne ste previedli váš OpenID na $1.',
	'openid-convert-already-your-openid-text' => 'To už je váš OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To je OpenID niekoho iného.', # Fuzzy
	'openidalreadyloggedin' => "'''Už ste prihlásený, $1!'''

Ak chcete na prihlasovanie v budúcnosti využívať OpenID, môžete [[Special:OpenIDConvert|previesť váš účet na OpenID]].", # Fuzzy
	'openidnousername' => 'Nebolo zadané používateľské meno.',
	'openidbadusername' => 'Bolo zadané chybné používateľské meno.',
	'openidautosubmit' => 'Táto stránka obsahuje formulár, ktorý by mal byť automaticky odoslaný ak máte zapnutý JavaScript.
Ak nie, skúste tlačidlo „Continue“ (Pokračovať).',
	'openidclientonlytext' => 'Nemôžete používať účty z tejto wiki ako OpenID na iných weboch.',
	'openidloginlabel' => 'OpenID URL',
	'openidlogininstructions' => '{{SITENAME}} podporuje štandard [//openid.net/ OpenID] na zjednotené prihlasovanie na webstránky.
OpenID vám umožňuje prihlasovať sa na množstvo rozličných webstránok bez nutnosti používať pre každú odlišné heslo. (Pozri [//sk.wikipedia.org/wiki/OpenID Článok o OpenID na Wikipédii])

Ak už máte účet na {{GRAMMAR:lokál|{{SITENAME}}}}, môžete sa [[Special:UserLogin|prihlásiť]] pomocou používateľského mena a hesla ako zvyčajne. Ak chcete v budúcnosti používať OpenID, môžete po normálnom prihlásení [[Special:OpenIDConvert|previesť svoj účet na OpenID]].

Existuje množstvo [http://wiki.openid.net/Public_OpenID_providers Verejných poskytovateľov OpenID] a možno už máte účet s podporou OpenID u iného poskytovateľa.', # Fuzzy
	'openidupdateuserinfo' => 'Aktualizovať moje používateľské informácie:',
	'openiddelete' => 'Zmazať OpenID',
	'openiddelete-text' => 'Klinužím na tlačidlo „{{int:openiddelete-button}}“ odstránite OpenID $1 z vášho účtu.
Nebudete sa už pomocou tohto OpenID prihlasovať.',
	'openiddelete-button' => 'Potvrdiť',
	'openiddeleteerrornopassword' => 'Nemôžete zmazať všetky svoje OpenID, pretože účet nemá nastavené heslo.
Bez OpenID by ste sa nemohli prihlásiť.',
	'openiddeleteerroropenidonly' => 'Nemôžete zmazať všetky svoje OpenID, pretože máte oprávnenie prihlasovať sa jedine pomocou OpenID.
Bez OpenID by ste sa nemohli prihlásiť.',
	'openiddelete-success' => 'OpenID bolo úspešne odstránené z vášho účtu.',
	'openiddelete-error' => 'Počas odstraňovania OpenIOD z vášho účtu sa vyskytla chyba.',
	'prefs-openid-hide-openid' => 'Nezobrazovať váš OpenID na vašej používateľskej stránke ak sa prihlasujete pomocou OpenID.',
	'openid-hide-openid-label' => 'Nezobrazovať váš OpenID na vašej používateľskej stránke ak sa prihlasujete pomocou OpenID.',
	'openid-userinfo-update-on-login-label' => 'Aktualizovať nasledovné informácie z OpenID identity vždy, keď sa prihlásim:', # Fuzzy
	'openid-associated-openids-label' => 'OpenID asociované s vašim účtom:',
	'openid-urls-action' => 'Operácia',
	'openid-urls-delete' => 'Zmazať',
	'openid-add-url' => 'Pridať nový OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Prihlásiť sa alebo vytvoriť nový účet', # Fuzzy
	'openid-provider-label-openid' => 'Zadajte URL svojho OpenID',
	'openid-provider-label-google' => 'Prihlásiť sa pomocou účtu Google',
	'openid-provider-label-yahoo' => 'Prihlásiť sa pomocou účtu Yahoo',
	'openid-provider-label-aol' => 'Prihlásiť sa pomocou účtu AOL',
	'openid-provider-label-other-username' => 'Zadajte svoje prihlasovacie meno na $1',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'openid-desc' => 'Prijavite se v wiki z [//openid.net/ OpenID] in prijavite se v druge spletne strani s podporo OpenID z uporabniškim računom wiki',
	'openidlogin' => 'Prijavite se / ustvarite račun z OpenID',
	'openidserver' => 'Strežnik OpenID',
	'openidxrds' => 'Datoteka Yadis',
	'openidconvert' => 'Pretvornik OpenID',
	'openiderror' => 'Napaka med preverjanjem',
	'openiderrortext' => 'Med preverjanjem URL OpenID je prišlo do napake.',
	'openidconfigerror' => 'Napaka konfiguracije OpenID',
	'openidconfigerrortext' => 'Konfiguracija shrambe OpenID za ta wiki je neveljavna.
Posvetujte se z [[Special:ListUsers/sysop|administratorjem]].',
	'openidpermission' => 'Napaka dovoljenj OpenID',
	'openidpermissiontext' => 'Navedenemu OpenID prijava v ta strežnik ni dovoljena.',
	'openidcancel' => 'Preverjanje je bilo preklicano',
	'openidcanceltext' => 'Preverjanje URL OpenID je bilo preklicano.',
	'openidfailure' => 'Preverjanje ni uspelo',
	'openidfailuretext' => 'Preverjanje URL OpenID ni uspelo. Sporočilo o napaki: »$1«',
	'openidsuccess' => 'Preverjanje je uspelo',
	'openidsuccesstext' => "'''Preverjanje je bilo uspešno, prijavljeni ste kot uporabnik $1'''.

Vaš OpenID je $2.

Ta in izbirne nadaljne OpenID-je lahko uprabljate na [[Special:Preferences#mw-prefsection-openid|zavihku OpenID]] v svojih nastavitvah.<br />
Izbirno geslo računa lahko dodate v svojih [[Special:Preferences#mw-prefsection-personal|Podatkih o uporabniku]].",
	'openidusernameprefix' => 'UporabnikOpenID',
	'openidserverlogininstructions' => '$3 zahteva, da vnesete svoje geslo za vašega uporabnika $2, stran $1 (URL OpenID).',
	'openidtrustinstructions' => 'Označite, če želite deliti podatke s $1.',
	'openidallowtrust' => 'Dovoli $1, da zaupa temu uporabniškemuu računu.',
	'openidnopolicy' => 'Stran ni določila pravilnika o zasebnosti.',
	'openidpolicy' => 'Preverite <a target="_new" href="$1">politiko zasebnosti</a> za več informacij.',
	'openidoptional' => 'Izbirno',
	'openidrequired' => 'Zahtevano',
	'openidnickname' => 'Vzdevek',
	'openidfullname' => 'Pravo ime',
	'openidemail' => 'E-poštni naslov',
	'openidlanguage' => 'Jezik',
	'openidtimezone' => 'Časovni pas',
	'openidchooselegend' => 'Izbira uporabniškega imena in računa',
	'openidchooseinstructions' => 'Vsi uporabniki potrebujejo vzdevek;
svojega si lahko izberete med spodnjimi možnostmi.',
	'openidchoosenick' => 'Vaš vzdevek ($1)',
	'openidchoosefull' => 'Vaše pravo ime ($1)',
	'openidchooseurl' => 'Ime vzeto iz vašega OpenID ($1)',
	'openidchooseauto' => 'Samodejno ustvarjeno ime ($1)',
	'openidchoosemanual' => 'Ime po vaši izbiri:',
	'openidchooseexisting' => 'Obstoječi račun na tem wikiju',
	'openidchooseusername' => 'Uporabniško ime:',
	'openidchoosepassword' => 'Geslo:',
	'openidconvertinstructions' => 'Ta obrazec vam omogoča spremeniti vaš uporabniški račun za uporabo OpenID URL ali dodati več OpenID URL-jev',
	'openidconvertoraddmoreids' => 'Pretvorite v OpenID ali dodajte še en URL OpenID',
	'openidconvertsuccess' => 'Uspešno pretvorjeno v OpenID',
	'openidconvertsuccesstext' => 'Uspešno ste pretvorili svoj OpenID v $1.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 je že povezan z vašim računom. Ponovno dodajanje ni smiselno.',
	'openid-convert-other-users-openid-text' => '$1 je OpenID nekoga drugega. Ne morete uporabiti OpenID drugega uporabnika.',
	'openidalreadyloggedin' => 'Ste že prijavljeni.',
	'openidalreadyloggedintext' => "'''$1, ste že prijavljeni!'''

OpenID-je lahko upravljate (si jih ogledate, izbrišete in drugo) na [[Special:Preferences#mw-prefsection-openid|zavihku OpenID]] v vaših nastavitvah.",
	'openidnousername' => 'Uporabniško ime ni določeno.',
	'openidbadusername' => 'Določeno je neustrezno uporabniško ime.',
	'openidautosubmit' => 'Ta stran vsebuje obrazec, ki bi se moral potrditi samodejno, če imate omogočen JavaScript.
Če ne, poskusite klikniti na gumb »Continue« (Nadaljuj).',
	'openidclientonlytext' => 'Ne morete uporabiti računov s tega wikija kot OpenID-je na drugi strani.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => '{{SITENAME}} podpira standard [//openid.net/ OpenID] za enkratno prijavo med spletnimi stranmi.
OpenID vam omogoča prijavo v kopico različnih spletnih strani brez uporabe različnega gesla za vsako.
(Za več informacij si oglejte [//en.wikipedia.org/wiki/OpenID Wikipedijin članek o OpenID].)
Obstaja veliko [//openid.net/get/ ponudnikov OpenID] in morda že imate račun z omogočenim OpenID pri drugi storitvi.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} omogoča prijavo ''samo'' z OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Če že imate račun na {{SITENAME}}, se lahko [[Special:UserLogin|prijavite]] s svojim uporabniškim imenom in geslom kot običajno.
Če želite v prihodnje uporabljati OpenID, lahko [[Special:OpenIDConvert|pretvorite svoj račun v OpenID]] po tem, ko ste se normalno prijavili.',
	'openidupdateuserinfo' => 'Posodobi moje osebne podatke:',
	'openiddelete' => 'Izbriši OpenID',
	'openiddelete-text' => 'S klikom na gumb »{{int:openiddelete-button}}« boste odstranili OpenID $1 s svojega računa.
V prihodnje se s tem OpenID ne boste več mogli prijaviti.',
	'openiddelete-button' => 'Potrdi',
	'openiddeleteerrornopassword' => 'Ne morete izbrisati vseh svojih OpenID-jev, ker vaš račun nima gesla.
Brez OpenID se ne boste mogli prijaviti.',
	'openiddeleteerroropenidonly' => 'Ne morete izbrisati vseh svojih OpenID-jev, ker se lahko prijavite samo z OpenID.
Brez OpenID se ne boste mogli prijaviti.',
	'openiddelete-success' => 'OpenID je bil uspešno odstranjen iz vašega računa.',
	'openiddelete-error' => 'Pri odstranjevanju OpenID iz vašega računa je prišlo do napake.',
	'openid-openids-were-not-merged' => 'OpenID(-ji) med združevanjem uporabniških računov niso bili združeni.',
	'prefs-openid-hide-openid' => 'Skrijte svoj URL OpenID na svoji uporabniški strani, če se prijavite z OpenID.',
	'openid-hide-openid-label' => 'Skrijte svoj URL OpenID na svoji uporabniški strani.',
	'openid-userinfo-update-on-login-label' => 'Polja informacij profila osebe, ki bodo samodejno posodobljena iz osebe Open ID vsakič, ko se prijavite:',
	'openid-associated-openids-label' => 'OpenID-ji, povezani z vašim računom:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Dejanje',
	'openid-urls-registration' => 'Registriran od',
	'openid-urls-delete' => 'Izbriši',
	'openid-add-url' => 'Dodaj nov OpenID k svojemu računu',
	'openid-login-or-create-account' => 'Prijavite se ali ustvarite nov račun',
	'openid-provider-label-openid' => 'Vnesite svoj URL OpenID',
	'openid-provider-label-google' => 'Prijavite se s svojim računom Google',
	'openid-provider-label-yahoo' => 'Prijavite se s svojim računom Yahoo',
	'openid-provider-label-aol' => 'Vnesite svoje prikazno ime AOL',
	'openid-provider-label-wmflabs' => 'Prijavite se s svojim računom Wmflabs',
	'openid-provider-label-other-username' => 'Vnesite svoje uporabniško ime $1',
	'specialpages-group-openid' => 'Storitvene strani in informacije o stanju OpenID',
	'right-openid-converter-access' => 'Lahko dodaja ali pretvarja svoj račun tako, da uporablja identitete OpenID',
	'right-openid-dashboard-access' => 'Običajni dostop do pregledne plošče OpenID',
	'right-openid-dashboard-admin' => 'Administratorski dostop do pregledne plošče OpenID',
	'openid-dashboard-title' => 'Pregledna plošča OpenID',
	'openid-dashboard-title-admin' => 'Pregledna plošča OpenID (administrator)',
	'openid-dashboard-introduction' => 'Trenutne nastavitve razširitve OpenID ([$1 pomoč])',
	'openid-dashboard-number-openid-users' => 'Število uporabnikov z OpenID',
	'openid-dashboard-number-openids-in-database' => 'Število OpenID-jev (skupno)',
	'openid-dashboard-number-users-without-openid' => 'Število uporabnikov brez OpenID',
);

/** Lower Silesian (Schläsch)
 * @author Schläsinger
 */
$messages['sli'] = array(
	'openidxrds' => 'Yadis-Datei',
	'openidemail' => 'E-Mail-Atresse:',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'openidserver' => 'OpenID сервер',
	'openidconvert' => 'OpenID претварач',
	'openiderror' => 'Грешка при провери',
	'openiderrortext' => 'Дошло је до грешке при проверавању адресе OpenID-ја.',
	'openidconfigerror' => 'Грешка у поставци OpenID-ја',
	'openidpermission' => 'Грешка око OpenID права приступа',
	'openidpermissiontext' => 'OpenID-у кога сте навели није дозвољено да се улогује на овај сервер.',
	'openidcancel' => 'Провера је отказана',
	'openidcanceltext' => 'Провера адресе OpenID-ја је отказана.',
	'openidfailure' => 'Провера није успела',
	'openidfailuretext' => 'Не могу да проверим адресу OpenID-ја. Грешка: „$1“',
	'openidsuccess' => 'Провера је успела',
	'openidsuccesstext' => "'''Провера је успела. Пријављени сте као корисник $1'''.

Ваш OpenID је $2 .

Можете да управљате овим и другим необавезним налозима OpenID-ја у [[Special:Preferences#mw-prefsection-openid|језичку за OpenID]] у вашим подешавањима.<br />
Можете додати и лозинку налога у вашем [[Special:Preferences#mw-prefsection-personal|корисничком профилу]].",
	'openidoptional' => 'Необавезно',
	'openidrequired' => 'Обавезно',
	'openidnickname' => 'Надимак',
	'openidfullname' => 'Пуно име', # Fuzzy
	'openidemail' => 'Е-адреса',
	'openidlanguage' => 'Језик',
	'openidtimezone' => 'Временска зона',
	'openidchooselegend' => 'Одабир корисничког имена и налога',
	'openidchooseinstructions' => 'Сваки корисник треба да има надимак.
Можете да изаберете једну од доленаведених могућности.',
	'openidchoosenick' => 'Ваш надимак ($1)',
	'openidchoosefull' => 'Ваше пуно име ($1)', # Fuzzy
	'openidchooseurl' => 'Име преузето од вашег OpenID-ја ($1)',
	'openidchooseauto' => 'Самостворено корисничко име ($1)',
	'openidchoosemanual' => 'Изаберите корисничко име:',
	'openidchooseexisting' => 'Постојећи налог на овом викију',
	'openidchooseusername' => 'Корисничко име:',
	'openidchoosepassword' => 'Лозинка:',
	'openidconvertsuccess' => 'Претварање у OpenID је успело',
	'openidconvertsuccesstext' => 'Успешно сте претворили свој OpenID у $1.',
	'openid-convert-already-your-openid-text' => 'Ово је већ ваш OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Тај OpenID припада неком другом.', # Fuzzy
	'openidnousername' => 'Нисте навели корисничко име.',
	'openidbadusername' => 'Наведено је неисправно корисничко име.',
	'openidclientonlytext' => 'Не можете користити налоге с овог викија као OpenID за други сајт.',
	'openidloginlabel' => 'Адреса OpenID-ја',
	'openidupdateuserinfo' => 'Ажурирај моје личне податке:',
	'openiddelete-button' => 'Потврди',
	'prefs-openid' => 'OpenID',
	'prefs-openid-hide-openid' => 'Сакријте своју адресу OpenID-а са корисничке странице ако се с њим пријављујете.',
	'openid-hide-openid-label' => 'Сакријте своју адресу OpenID-а са корисничке странице ако се с њим пријављујете.',
	'openid-userinfo-update-on-login-label' => 'Ажурирај следеће податке OpenID-а сваки пут када се пријавим:', # Fuzzy
	'openid-urls-url' => 'Адреса',
	'openid-urls-action' => 'Радња',
	'openid-urls-registration-date-time' => '$1',
	'openid-urls-delete' => 'Обриши',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Ex13
 * @author Michaello
 * @author Rancher
 */
$messages['sr-el'] = array(
	'openidserver' => 'OpenID server',
	'openidconvert' => 'OpenID konvertor',
	'openiderror' => 'Greška prilikom verifikacije',
	'openiderrortext' => 'Došlo je do greške prilikom verifikacije OpenID URL-a.',
	'openidconfigerror' => 'Greška oko konfiguracije OpenID-a',
	'openidpermission' => 'Greška oko OpenID prava pristupa',
	'openidpermissiontext' => 'OpenID-u koga ste naveli nije dozvoljeno da se uloguje na ovaj server.',
	'openidcancel' => 'Verifikacija poništena',
	'openidcanceltext' => 'Verifikacija OpenID URL-a je poništena.',
	'openidfailure' => 'Verifikacija nije prošla',
	'openidfailuretext' => 'Verifikacija OpenID URL-a nije prošla. Poruka greške: "$1"',
	'openidsuccess' => 'Verifikacija uspešna',
	'openidsuccesstext' => "'''Provera je uspela. Prijavljeni ste kao korisnik $1'''.

Vaš OpenID je $2 .

Možete da upravljate ovim i drugim neobaveznim nalozima OpenID-ja u [[Special:Preferences#mw-prefsection-openid|jezičku za OpenID]] u vašim podešavanjima.<br />
Možete dodati i lozinku naloga u vašem [[Special:Preferences#mw-prefsection-personal|korisničkom profilu]].",
	'openidoptional' => 'Neobavezno',
	'openidrequired' => 'Obavezno',
	'openidnickname' => 'Nadimak',
	'openidfullname' => 'Puno ime', # Fuzzy
	'openidemail' => 'E-pošta',
	'openidlanguage' => 'Jezik',
	'openidtimezone' => 'Vremenska zona',
	'openidchooselegend' => 'Odabir korisničkog imena i naloga',
	'openidchooseinstructions' => 'Svaki korisnik treba da ima nadimak;
Možete da izaberete jednu od opcija ispod.',
	'openidchoosenick' => 'Vaš nadimak ($1)',
	'openidchoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'openidchooseurl' => 'Ime preuzeto od vašeg OpenID ($1)',
	'openidchooseauto' => 'Automatski generisano korisničko ime ($1)',
	'openidchoosemanual' => 'Izaberite korisničko ime:',
	'openidchooseexisting' => 'Postojeći nalog na ovoj Viki',
	'openidchooseusername' => 'Korisničko ime:',
	'openidchoosepassword' => 'Lozinka:',
	'openidconvertsuccess' => 'Konverzija ka OpenID je uspešna',
	'openidconvertsuccesstext' => 'Uspešno ste prmenili svoj OpenID na $1.',
	'openid-convert-already-your-openid-text' => 'Taj OpenID je već vaš.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'To je tuđ OpenID.', # Fuzzy
	'openidnousername' => 'Nije navedeno korisničko ime.',
	'openidbadusername' => 'Zadato neispravno korisničko ime.',
	'openidclientonlytext' => 'Vi ne možete da koristite naloge sa ovog Vikija kao OpenID-ove na drugim sajtovima.',
	'openidloginlabel' => 'OpenID URL',
	'openidupdateuserinfo' => 'Aktualizuj moje lične podatke:',
	'openiddelete-button' => 'Potvrdi',
	'prefs-openid' => 'OpenID',
	'prefs-openid-hide-openid' => 'Sakrijte svoj OpenID URL sa korisničke strane, ako se sa njim logujete.',
	'openid-hide-openid-label' => 'Sakrijte svoj OpenID URL sa korisničke strane, ako se sa njim logujete.',
	'openid-userinfo-update-on-login-label' => 'Aktualizuj sledeće informacije OpenID identiteta svaki put kad se ulogujem:', # Fuzzy
	'openid-urls-url' => 'Adresa',
	'openid-urls-action' => 'Radnja',
	'openid-urls-registration-date-time' => '$1',
	'openid-urls-delete' => 'Obriši',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'openid-desc' => 'Anmeldenge an dit Wiki mäd ne [//openid.net/ OpenID] un anmäldje an uur Websites, do der OpenID unnerstutsje, mäd een Wiki-Benutserkonto.',
	'openidlogin' => 'Anmäldje mäd OpenID', # Fuzzy
	'openidserver' => 'OpenID-Server',
	'openidxrds' => 'Yadis-Doatäi',
	'openidconvert' => 'OpenID-Konverter',
	'openiderror' => 'Wröige-Failer',
	'openiderrortext' => 'Aan Failer is unner ju Wröige fon ju OpenID-URL aptreeden.',
	'openidconfigerror' => 'OpenID-Konfigurationsfailer',
	'openidconfigerrortext' => 'Ju OpenID-Spiekerkonfiguration foar dit Wiki ist failerhaft.
Täl n [[Special:ListUsers/sysop|Administrator]] Beskeed.',
	'openidpermission' => 'OpenID-Begjuchtigengsfailer',
	'openidpermissiontext' => 'Ju anroate OpenID begjuchtiget nit tou Anmäldenge an dissen Server.',
	'openidcancel' => 'Wröige oubreeken',
	'openidcanceltext' => 'Ju Wröige fon ju OpenID-URL wuud oubreeken.',
	'openidfailure' => 'Wröige-Failer',
	'openidfailuretext' => 'Ju Wröige fon ju OpenID-URL is failsloain. Failermäldenge: "$1"',
	'openidsuccess' => 'Wröige mäd Ärfoulch be-eended',
	'openidsuccesstext' => 'Ju Wröige fon ju Open-ID hied Ärfoulch.', # Fuzzy
	'openidusernameprefix' => 'OpenID-Benutser',
	'openidserverlogininstructions' => 'Reek dien Paaswoud unner ien, uum die as Benutser $2 an $3 antoumäldjen (Benutsersiede $1).', # Fuzzy
	'openidtrustinstructions' => 'Wröich, of du Doaten mäd $1 deele moatest.',
	'openidallowtrust' => 'Ferlööwje $1, dissen Benutserkonto tou tjouen.',
	'openidnopolicy' => 'Ju Siede häd neen Doatenskuts-Gjuchtlienje anroat.',
	'openidpolicy' => 'Wröich ju <a target="_new" href="$1">Doatenschuts-Gjuchtlienje</a> foar moor Informatione.',
	'openidoptional' => 'Optionoal',
	'openidrequired' => 'Plicht',
	'openidnickname' => 'Benutsernoome',
	'openidfullname' => 'Fulboodigen Noome', # Fuzzy
	'openidemail' => 'E-Mail-Adresse:',
	'openidlanguage' => 'Sproake',
	'openidtimezone' => 'Tiedzone',
	'openidchooseinstructions' => 'Aal Benutsere benöödigje n Benutsernoome;
du koast aan uut ju unnerstoundene Lieste uutwääle.',
	'openidchoosefull' => 'Din fulboodigen Noome ($1)', # Fuzzy
	'openidchooseurl' => 'N Noome uut dien OpenID ($1)',
	'openidchooseauto' => 'N automatisk moakeden Noome ($1)',
	'openidchoosemanual' => 'N Noome fon dien Woal:',
	'openidchooseexisting' => 'N existierend Benutserkonto in dit Wiki:', # Fuzzy
	'openidchoosepassword' => 'Paaswoud:',
	'openidconvertinstructions' => 'Mäd dit Formular koast du dien Benutserkonto tou Benutsenge fon n OpenID-URL annerje.',
	'openidconvertoraddmoreids' => 'Uumsätte tou OpenID of föich n uur OpenID-URL tou.',
	'openidconvertsuccess' => 'Mäd Ärfoulch ätter OpenID konvertierd',
	'openidconvertsuccesstext' => 'Du hääst ju Konvertierenge fon dien OpenID ätter $1 mäd Ärfoulch truchfierd.',
	'openid-convert-already-your-openid-text' => 'Dit is al dien OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Dit is ju OpenID fon uurswäl.', # Fuzzy
	'openidalreadyloggedin' => "'''Du bäst al anmälded, $1!'''

Wan du OpenID foar kuumende Anmäldefoargonge nutsje moatest, koast du [[Special:OpenIDConvert|dien Benutserkonto ätter OpenID konvertierje]].", # Fuzzy
	'openidnousername' => 'Naan Benutsernoome anroat.',
	'openidbadusername' => 'Falsken Benutsernoome anroat.',
	'openidautosubmit' => 'Disse Siede änthaalt n Formular, dät automatisk uurdrain wäd, wan JavaSkript aktivierd is.
Fals nit, klik ap „Continue“ (Fääre).',
	'openidclientonlytext' => 'Du koast neen Benutserkonten uut dissen Wiki as OpenID foar uur Sieden ferweende.',
	'openidloginlabel' => 'OpenID-URL',
	'openidlogininstructions' => '{{SITENAME}} unnerstutset dän [//openid.net/ OpenID]-Standoard foar ne eenhaidelke Anmäldenge foar moorere Websites.
OpenID mäldet die bie fuul unnerskeedelke Websieden an, sunner dät du foar älke Siede n uur Paaswoud ferweende moast.
(Moor Informatione bjut die [//de.wikipedia.org/wiki/OpenID Wikipedia-Artikkel tou OpenID].)

Fals du al n Benutserkonto bie {{SITENAME}} hääst, koast du die gans normoal mäd Benutsernoome un Paaswoud [[Special:UserLogin|anmäldje]].
Wan du in n Toukumst OpenID ferweende moatest, koast du [[Special:OpenIDConvert|dien Account tou OpenID konvertierje]], ätter dät du die normoal ienlogged hääst.

Dät rakt fuul [http://wiki.openid.net/Public_OpenID_providers eepentelke OpenID-Providere] un muugelkerwiese hääst du al n Benutserkonto mäd aktivierden OpenID bie n uur Anbjooder.', # Fuzzy
	'openidupdateuserinfo' => 'Persöönelke Doaten aktualisierje', # Fuzzy
	'openiddelete' => 'OpenID läskje',
	'openiddelete-button' => 'Bestäätigje',
	'openiddelete-success' => 'Ju OpenID wuud mäd Ärfoulch fon din Benutserkonto wächhoald.',
	'openiddelete-error' => 'Bie dät Wächhoaljen fon ju OpenID fon din Benutserkonto is n Failer aptreeden.',
	'prefs-openid-hide-openid' => 'Fersteet dien OpenID ap dien Benutsersiede, wan du die mäd OpenID anmäldest.',
	'openid-hide-openid-label' => 'Fersteet dien OpenID ap dien Benutsersiede, wan du die mäd OpenID anmäldest.',
	'openid-userinfo-update-on-login-label' => 'Ju foulgjende Information fon dät OpenID-Konto bie älke Login aktualisierje', # Fuzzy
	'openid-urls-action' => 'Aktion',
	'openid-urls-delete' => 'Läskje',
	'openid-add-url' => 'Näien OpenID bietouföigje', # Fuzzy
	'openid-login-or-create-account' => 'Anmäldje of n näi Benutserkonto moakje', # Fuzzy
	'openid-provider-label-openid' => 'Reek dien OpenID-URL an',
	'openid-provider-label-google' => 'Mäd dien Google-Benutserkonto anmäldje',
	'openid-provider-label-yahoo' => 'Mäd dien Yahoo-Benutserkonto anmäldje',
	'openid-provider-label-aol' => 'Reek dien AOL-Noome an',
	'openid-provider-label-other-username' => 'Reek dien „$1“-Benutsernoome an',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'openidnickname' => 'Landihan',
	'openidlanguage' => 'Basa',
	'openidchoosepassword' => 'Sandi:',
);

/** Swedish (svenska)
 * @author Boivie
 * @author Cybjit
 * @author Fluff
 * @author Jon Harald Søby
 * @author Lokal Profil
 * @author M.M.S.
 * @author Najami
 * @author Nghtwlkr
 * @author Per
 * @author Rotsee
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'openid-desc' => 'Logga in på wikin med en [//openid.net/ OpenID] och logga in på andra sidor som använder OpenID med konton härifrån',
	'openidlogin' => 'Logga in / skapa konto med OpenID',
	'openidserver' => 'OpenID-server',
	'openid-identifier-page-text-user' => 'Den här sidan fungerar som OpenID-legitimation för användaren ”$1”.',
	'openidxrds' => 'Yadis-fil',
	'openidconvert' => 'OpenID-konvertering',
	'openiderror' => 'Bekräftelsefel',
	'openiderrortext' => 'Ett fel uppstod under bekräftning av OpenID-adressen.',
	'openidconfigerror' => 'Konfigurationsfel med OpenID',
	'openidconfigerrortext' => 'Lagringkonfigurationen för OpenID på den här wikin är ogiltig.
Var god konsultera en [[Special:ListUsers/sysop|administratör]].',
	'openidpermission' => 'Behörighetsfel med OpenID',
	'openidpermissiontext' => 'Du kan inte logga in på den här servern med det OpenID du uppgav.',
	'openidcancel' => 'Kontrollen avbröts',
	'openidcanceltext' => 'Kontrollen av OpenID-adressen avbröts.',
	'openidfailure' => 'Kontrollen misslyckades',
	'openidfailuretext' => 'Bekräftning av OpenID-adressen misslyckades. Felmeddelande: "$1"',
	'openidsuccess' => 'Bekräftning lyckades',
	'openidsuccesstext' => "'''Du är inloggad som $1'''.

Ditt OpenID är $2.

Du kan hantera detta och andra OpenID:n i [[Special:Preferences#mw-prefsection-openid|OpenID-fliken]] bland dina inställningar.<br />
Vill du kan du också ange ett lösenord för det här kontot i din [[Special:Preferences#mw-prefsection-personal|användarprofil]].",
	'openidusernameprefix' => 'OpenID-användare',
	'openidserverlogininstructions' => '$3 begär att du anger ditt lösenord för ditt användare $2s sida $1 (detta är din OpenID-URL)',
	'openidtrustinstructions' => 'Kolla om du vill dela data med $1.',
	'openidallowtrust' => 'Tillåter $1 att förlita sig på detta användarkonto.',
	'openidnopolicy' => 'Sajten har inga riktlinjer för personlig integritet.',
	'openidpolicy' => 'Se <a href="_new" href="$1">riktlinjer för personlig integritet</a> för mer information.',
	'openidoptional' => 'Frivilligt',
	'openidrequired' => 'Obligatoriskt',
	'openidnickname' => 'Smeknamn',
	'openidfullname' => 'Riktigt namn',
	'openidemail' => 'E-postadress',
	'openidlanguage' => 'Språk',
	'openidtimezone' => 'Tidszon',
	'openidchooselegend' => 'Val av användarnamn och konto',
	'openidchooseinstructions' => 'Alla användare måste ha ett användarnamn.
Du kan välja ett från alternativen nedan.',
	'openidchoosenick' => 'Smeknamn ($1)',
	'openidchoosefull' => 'Ditt riktiga namn ($1)',
	'openidchooseurl' => 'Ett namn taget från din OpenID ($1)',
	'openidchooseauto' => 'Ett automatiskt genererat namn ($1)',
	'openidchoosemanual' => 'Valfritt namn:',
	'openidchooseexisting' => 'Ett existerande konto på denna wiki',
	'openidchooseusername' => 'Användarnamn:',
	'openidchoosepassword' => 'Lösenord:',
	'openidconvertinstructions' => 'Detta formulär låter dig ändra dina användarkonton till att använda eller lägga till en eller flera OpenID-adresser',
	'openidconvertoraddmoreids' => 'Konvertera till OpenID eller lägg till en ny OpenID-adress',
	'openidconvertsuccess' => 'Konverterade till OpenID',
	'openidconvertsuccesstext' => 'Du har konverterat ditt OpenID till $1.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 är redan associerad med ditt konto. Det finns ingen anledning till att göra det igen.',
	'openid-convert-other-users-openid-text' => '$1 är någon annans OpenID. Du kan inte använda ett OpenID som tillhör någon annan.',
	'openidalreadyloggedin' => 'Du är redan inloggad.',
	'openidalreadyloggedintext' => "'''Du är redan inloggad, $1!'''

Du kan hantera (visa, radera, m.m) OpenID:n i [[Special:Preferences#mw-prefsection-openid|OpenID-fliken]] under dina inställningar.",
	'openidnousername' => 'Inget användarnamn angivet.',
	'openidbadusername' => 'Ogiltigt användarnamn angivet.',
	'openidautosubmit' => 'Denna sida innehåller ett formulär som kommer levereras automatiskt om du har slagit på JavaScript.
Om inte, tryck på "Continue" (Fortsätt).',
	'openidclientonlytext' => 'Du kan inte använda konton från denna wikin som OpenID på en annan sida.',
	'openidloginlabel' => 'OpenID-adress',
	'openidlogininstructions' => '{{SITENAME}} stödjer [//openid.net/ OpenID]-standarden för enhetlig inloggning på många webbsidor.
OpenID låter dig logga in på många webbsidor utan att använda olika lösenord för varje. 
(Se [//en.wikipedia.org/wiki/OpenID Wikipedia-artikeln om OpenID] för mer information.)
Det finns många [//openid.net/get/ leverantörer av OpenID], och du kan redan ha ett OpenID-aktiverat konto på en annan plats.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} låter dig ''endast'' logga in med OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Om du redan har ett konto på {{SITENAME}} kan du [[Special:UserLogin|logga in]] med ditt användarnamn och lösenord som vanligt.
För att använda OpenID i framtiden, kan du [[Special:OpenIDConvert|konvertera ditt konto till OpenID]] efter du har loggat in normalt.',
	'openidupdateuserinfo' => 'Uppdatera min personliga information:',
	'openiddelete' => 'Ta bort OpenID',
	'openiddelete-text' => 'Genom att klicka på knappen "{{int:openiddelete-button}}" kommer du att ta bort OpenID $1 från ditt konto. Du kommer inte att kunna använda detta OpenID för att logga in.',
	'openiddelete-button' => 'Bekräfta',
	'openiddeleteerrornopassword' => 'Du kan inte radera alla dina OpenId eftersom ditt konto saknar lösenord.
Du skulle inte kunna logga in utan ett OpenID.',
	'openiddeleteerroropenidonly' => 'Du kan inte radera alla dina OpenID eftersom du endast får logga in med OpenID.
Du skulle inte kunna logga in utan ett OpenID.',
	'openiddelete-success' => 'OpenID-kopplingen har tagits bort från ditt konto.',
	'openiddelete-error' => 'Ett fel uppstod när OpenID-kopplingen skulle tas bort från ditt konto.',
	'openid-openids-were-not-merged' => "Eventuella OpenID:n som varit kopplade till de sammanslagna kontona har ''inte'' slagits samman.",
	'prefs-openid-hide-openid' => 'Dölj OpenID-URL:en på din användarsida, om du loggar in med OpenID.',
	'openid-hide-openid-label' => 'Dölj din OpenID-URL på din användarsida.',
	'openid-userinfo-update-on-login-label' => 'Uppdatera följande information från min OpenID-profil varje gång jag loggar in', # Fuzzy
	'openid-associated-openids-label' => 'OpenID:n som är kopplade till ditt konto:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Åtgärd',
	'openid-urls-registration' => 'Registreringstidpunkt',
	'openid-urls-delete' => 'Ta bort',
	'openid-add-url' => 'Lägg till ett nytt OpenID till ditt konto',
	'openid-login-or-create-account' => 'Logga in eller skapa ett nytt konto',
	'openid-provider-label-openid' => 'Skriv in din OpenID-URL',
	'openid-provider-label-google' => 'Logga in med ditt Google-konto',
	'openid-provider-label-yahoo' => 'Logga in med ditt Yahoo-konto',
	'openid-provider-label-aol' => 'Skriv in ditt AOL-användarnamn',
	'openid-provider-label-other-username' => 'Skriv in ditt $1-användarnamn',
	'specialpages-group-openid' => 'Specialsidor för OpenID',
	'right-openid-converter-access' => 'Kan lägga till eller konvertera sina konton för att använda OpenID-identiteter',
	'right-openid-dashboard-access' => 'Tillgång till OpenID-kontrollpanelen',
	'right-openid-dashboard-admin' => 'Administratörstillgång till OpenID-kontrollpanelen',
	'openid-dashboard-title' => 'Kontrollpanel för OpenID',
	'openid-dashboard-title-admin' => 'Kontrollpanel för OpenID (administratör)',
	'openid-dashboard-introduction' => 'Aktuella inställningar för OpenID-tillägget ([$1 hjälp])',
	'openid-dashboard-number-openid-users' => 'Antal användare med OpenID',
	'openid-dashboard-number-openids-in-database' => 'Antal OpenID:n (totalt)',
	'openid-dashboard-number-users-without-openid' => 'Antal användare utan OpenID',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'openidcancel' => 'சரிபார்ப்பு  இரத்து செய்யப்பட்டது',
	'openidfailure' => 'சரிபார்ப்பு தோல்வியுற்றது',
	'openidsuccess' => 'சரிபார்ப்பு  வெற்றியடைந்தது',
	'openidoptional' => 'விருப்பத்தேர்வு',
	'openidrequired' => 'தேவைபடுகிறது',
	'openidnickname' => 'புனைப்பெயர்',
	'openidfullname' => 'முழுப்பெயர்',
	'openidemail' => 'மின்னஞ்சல் முகவரி',
	'openidlanguage' => 'மொழி',
	'openidtimezone' => 'நேர வலயம்',
	'openidchooseinstructions' => 'எல்லாப் பயனர்களுக்கும் புனைப்பெயர் தேவை.
பின்வரும் விருப்பத் தேர்வுகளுள் ஒன்றை நீங்கள் தேர்வு  செய்யலாம்.',
	'openidchoosenick' => 'உங்கள் புனைப்பெயர் ($1)',
	'openidchoosefull' => 'உங்கள் முழுப்பெயர் ($1)',
	'openidchooseusername' => 'பயனர் பெயர்:',
	'openidchoosepassword' => 'கடவுச்சொல்:',
	'openid-convert-other-users-openid-text' => 'இது வேறு ஒருவரின் OpenID.',
	'openidalreadyloggedin' => 'நீங்கள் ஏற்கனவே புகுபதிகை செய்துள்ளீர்கள்.',
	'openidnousername' => 'ஒரு பயனர் பெயரும் குறிப்பிடப்படவில்லை.',
	'openidbadusername' => 'மோசமான பயனர் பெயர் குறிப்பிடப்பட்டுள்ளது.',
	'openiddelete-button' => 'உறுதிசெய்',
	'openid-urls-url' => 'உரலி (URL)',
	'openid-urls-action' => 'செயல்',
	'openid-urls-registration' => 'பதிவு செய்யும் நேரம்',
	'openid-urls-delete' => 'நீக்கு',
	'openid-login-or-create-account' => 'புகுபதிகை செய்க அல்லது  புதிய கணக்கு ஒன்றை உருவாக்கவும்',
	'openid-provider-label-google' => 'உங்கள் கூகுள் கணக்கைப் பயன்படுத்திப் புகுபதிகை செய்க',
	'openid-provider-label-other-username' => 'உங்கள் $1 பயனர் பெயரை உள்ளிடவும்',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Ravichandra
 * @author Veeven
 */
$messages['te'] = array(
	'openid-desc' => '[//openid.net/ ఓపెన్ఐడీ]తో వికీ లోనికి ప్రవేశించండి, మరియు వికీ వాడుకరి ఖాతాతో ఓపెన్ఐడీని అంగీకరించే ఇతర వెబ్ సైట్లలోనికి ప్రవేశించండి',
	'openidlogin' => 'ఓపెన్ఐడీతో ప్రవేశించండి', # Fuzzy
	'openidserver' => 'ఓపెన్ఐడీ సేవకి',
	'openiderror' => 'తనిఖీ పొరపాటు',
	'openiderrortext' => 'ఓపెన్ఐడీ చిరునామాని తనిఖీ చేయడంలో పొరపాటు జరిగింది.',
	'openidpermission' => 'ఓపెన్ఐడీ అనుమతుల పొరపాటు',
	'openidpermissiontext' => 'మీరు ఇచ్చిన ఓపెన్ఐడీకి ఈ సేవకి లోనికి ప్రవేశించే అనుమతి లేదు.',
	'openidcancel' => 'తనిఖీ రద్దయింది',
	'openidcanceltext' => 'ఓపెన్ఐడీ చిరునామా యొక్క తనిఖీని రద్దుచేసారు.',
	'openidfailure' => 'తనిఖీ విఫలమైంది',
	'openidfailuretext' => 'ఓపెన్ఐడీ చిరునామా యొక్క తనిఖీ విఫలమైంది. పొరపాటు సందేశం: "$1"',
	'openidsuccess' => 'తనిఖీ విజయవంతమైంది',
	'openidserverlogininstructions' => '$3 లోనికి $2 (వాడుకరి పేజీ $1) అనే వాడుకరిగా ప్రవేశించడానికి మీ సంకేతపదం ఇవ్వండి.', # Fuzzy
	'openidallowtrust' => 'ఈ వాడుకరి ఖాతాని విశ్వసించడానికి $1ని అనుమతించు.',
	'openidnopolicy' => 'సైటు అంతరంగికత విధానాన్ని పేర్కొనలేదు.',
	'openidpolicy' => 'మరింత సమాచారం కొరకు <a target="_new" href="$1">అంతరంగికత విధానా</a>న్ని చూడండి.',
	'openidoptional' => 'ఐచ్చికం',
	'openidrequired' => 'తప్పనిసరి',
	'openidnickname' => 'ముద్దుపేరు',
	'openidfullname' => 'పూర్తిపేరు', # Fuzzy
	'openidemail' => 'ఈ-మెయిల్ చిరునామా',
	'openidlanguage' => 'భాష',
	'openidtimezone' => 'కాలమానం',
	'openidchooseinstructions' => 'సభ్యులందరికీ ముద్దు పేరు ఉండవలెను. 
క్రింద పేర్కొన్న వాటిలో ఒకటి ఎంచుకోండి',
	'openidchoosefull' => 'మీ పూర్తి పేరు ($1)', # Fuzzy
	'openidchooseurl' => 'మీ ఓపెన్ఐడీ నుండి తీసుకున్న పేరు ($1)',
	'openidchoosemanual' => 'మీరు ఎన్నుకున్న పేరు:',
	'openidchooseexisting' => 'ఈ వికీలో ఇప్పటికే ఉన్న ఖాతా',
	'openidchooseusername' => 'వాడుకరి పేరు:',
	'openidchoosepassword' => 'సంకేతపదం:',
	'openidconvertinstructions' => 'మీ ఖాతాని ఓపెన్ఐడీ చిరునామా ఉపయోగించేలా మార్చడానికి లేదా మరిన్ని ఓపెన్ఐడీ చిరునామాలు చేర్చుకోడానికి ఈ ఫారం వీలుకల్పిస్తుంది',
	'openidconvertsuccess' => 'విజయవంతంగా ఓపెనిఐడీకి మారారు',
	'openidconvertsuccesstext' => 'మీ ఓపెన్ఐడీని $1కి విజయవంతంగా మార్చుకున్నారు.',
	'openid-convert-already-your-openid-text' => 'అది ఇప్పటికే మీ ఓపెన్ఐడీ.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'ఇది వేరొకరి ఓపెన్ ఐడి', # Fuzzy
	'openidnousername' => 'వాడుకరిపేరు ఇవ్వలేదు.',
	'openidbadusername' => 'తప్పుడు వాడుకరిపేరుని ఇచ్చారు.',
	'openidclientonlytext' => 'ఈ వికీ లోని ఖాతాలను మీరు వేరే సైట్లలో ఓపెన్ఐడీలుగా ఉపయోగించలేరు.',
	'openidloginlabel' => 'ఓపెన్ఐడీ చిరునామా',
	'openidupdateuserinfo' => 'నా వ్యక్తిగత సమాచారాన్ని తాజాకరించు:',
	'openiddelete' => 'ఓపెన్ ఐడి తొలగించు',
	'openiddelete-button' => 'నిర్ధారించు',
	'openiddelete-success' => 'మీ ఖాతా నుండి ఆ ఓపెన్ఐడీని విజయవంతంగా తొలగించాం.',
	'openiddelete-error' => 'మీ ఖాతా నుండి ఓపెన్ఐడీని తొలగించడంలో పొరపాటు జరిగింది.',
	'prefs-openid-hide-openid' => 'నేను ఓపెన్ఐడీతో ప్రవేశిస్తే, నా ఓపెన్ఐడీ చిరునామాని నా వాడుకరి పేజీలో కనబడకుండా దాచు.',
	'openid-hide-openid-label' => 'నేను ఓపెన్ఐడీతో ప్రవేశిస్తే, నా ఓపెన్ఐడీ చిరునామాని నా వాడుకరి పేజీలో కనబడకుండా దాచు.',
	'openid-associated-openids-label' => 'మీ ఖాతాతో సంధానమై ఉన్న ఓపెన్ఐడీలు:',
	'openid-urls-action' => 'చర్య',
	'openid-urls-delete' => 'తొలగించు',
	'openid-add-url' => 'కొత్త ఓపెన్ఐడీని చేర్చు', # Fuzzy
	'openid-login-or-create-account' => 'ప్రవేశించండి లేదా కొత్త ఖాతాని సృష్టించుకోండి', # Fuzzy
	'openid-provider-label-openid' => 'మీ ఓపెన్ఐడీ చిరునామాని ఇవ్వండి',
	'openid-provider-label-google' => 'మీ గూగుల్ ఖాతాని ఉపయోగించి ప్రవేశించండి',
	'openid-provider-label-yahoo' => 'మీ యాహూ ఖాతాని ఉపయోగించి ప్రవేశించండి',
	'openid-provider-label-aol' => 'మీ ఎఓఎల్ స్క్రీన్ నామము ఇవ్వండి',
	'openid-provider-label-other-username' => 'మీ $1 వాడుకరిపేరుని ఇవ్వండి',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'openidnickname' => "Naran uza-na'in",
	'openidfullname' => 'Naran kompletu',
	'openidemail' => 'Diresaun korreiu eletróniku',
	'openidlanguage' => 'Lian',
	'openidchooseusername' => "Naran uza-na'in:",
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'openid-desc' => 'Ба вики бо [//openid.net/ OpenID] вуруд кунед, ва ба дигар сомонаҳои OpenID бо ҳисоби корбарии вики вуруд кунед',
	'openidlogin' => 'Бо OpenID вуруд кунед', # Fuzzy
	'openidserver' => 'Хидматгузори OpenID',
	'openidxrds' => 'Парвандаи Yadis',
	'openidconvert' => 'Табдилкунандаи OpenID',
	'openiderror' => 'Хатои тасдиқ',
	'openiderrortext' => 'Дар ҳолати тасдиқи нишонаи OpenID хатое рух дод.',
	'openidconfigerror' => 'Хатои Танзимоти OpenID',
	'openidconfigerrortext' => 'Танзимоти захирасозии OpenID барои ин вики номӯътабар аст.
Лутфан бо мудири сомона тамос бигиред.', # Fuzzy
	'openidoptional' => 'Ихтиёрӣ',
	'openidemail' => 'Нишонаи почтаи электронӣ',
	'openidlanguage' => 'Забон',
	'openidchoosepassword' => 'Калимаи убур:',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'openid-desc' => 'Ba viki bo [//openid.net/ OpenID] vurud kuned, va ba digar somonahoi OpenID bo hisobi korbariji viki vurud kuned',
	'openidlogin' => 'Bo OpenID vurud kuned', # Fuzzy
	'openidserver' => 'Xidmatguzori OpenID',
	'openidxrds' => 'Parvandai Yadis',
	'openidconvert' => 'Tabdilkunandai OpenID',
	'openiderror' => 'Xatoi tasdiq',
	'openiderrortext' => 'Dar holati tasdiqi nişonai OpenID xatoe rux dod.',
	'openidconfigerror' => 'Xatoi Tanzimoti OpenID',
	'openidoptional' => 'Ixtijorī',
	'openidemail' => 'Nişonai poctai elektronī',
	'openidlanguage' => 'Zabon',
	'openidchoosepassword' => 'Kalimai ubur:',
);

/** Thai (ไทย)
 * @author Passawuth
 */
$messages['th'] = array(
	'openidemail' => 'อีเมล',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'openidlanguage' => 'Dil',
	'openid-urls-delete' => 'Öçür',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'openid-desc' => 'Lumagda sa wiki na may [//openid.net/ OpenID], at lumagda sa iba pang mga websayt na nakakaalam sa/nakababatid ng OpenID na may kuwenta/akawnt na pang-wiki',
	'openidlogin' => 'Lumagda / lumika ng akawnt sa pamamagitan ng OpenID',
	'openidserver' => 'Serbidor ng OpenID',
	'openidxrds' => 'Talaksang Yadis',
	'openidconvert' => 'Tagapagpalit ng OpenID',
	'openiderror' => 'Kamalian sa pagpapatunay',
	'openiderrortext' => 'Naganap ang isang kamalian habang pinatototohanan ang URL ng OpenID.',
	'openidconfigerror' => 'Kamalian sa pagkakaayos ng OpenID',
	'openidconfigerrortext' => 'Hindi tanggap ang kaayusang pangtaguan ng OpenID para sa wiking ito.
Makipagugnayan po lamang sa isang [[Special:ListUsers/sysop|tagapangasiwa]].',
	'openidpermission' => 'May kamalian sa mga kapahintulutang pang-OpenID',
	'openidpermissiontext' => 'Hindi pinapahintulutang makalagda sa serbidor na ito ang ibinigay mong OpenID.',
	'openidcancel' => 'Hindi itinuloy ang pagpapatotoo',
	'openidcanceltext' => 'Hindi itinuloy ang pagpapatotoo sa URL ng OpenID.',
	'openidfailure' => 'Nabigo ang pagpapatotoo',
	'openidfailuretext' => 'Nabigo ang pagpapatoo sa URL ng OpenID.  Mensaheng pangkamalian: "$1"',
	'openidsuccess' => 'Nagtagumpay ang pagpapatotoo',
	'openidsuccesstext' => "'''Matagumpay na pagpapatotoo at paglagda bilang ang tagagamit na si $1'''.

Ang OpenID mo ay $2 .

Ito at ang karagdagan ngunit maaaring meron o wala na mga OpenID na maaaring pamahalaan sa loob ng [[Special:Preferences#mw-prefsection-openid|laylayan ng OpenID]] ng mga kanaisan mo.<br />
Maaaring idagdag o hindi idagdag ang isang hudyat ng akawnt sa loob ng iyong [[Special:Preferences#mw-prefsection-personal|Balangkas ng katangian ng tagagamit]].",
	'openidusernameprefix' => 'Tagagamit ng OpenID',
	'openidserverlogininstructions' => 'Hinihiling ni $3 na ipasok mo ang iyong hudyat para sa iyong pahina $1 ng tagagamit $2 (ito ang iyong URL ng OpenID)',
	'openidtrustinstructions' => 'Pakisuri kung nais mong isalo ang dato kay $1.',
	'openidallowtrust' => 'Pahintulutan si $1 na pagkatiwalaan ang kuwenta ng tagagamit na ito.',
	'openidnopolicy' => 'Hindi tumukoy ang sityo (sayt) ng isang patakaran sa paglilihim na pansarili.',
	'openidpolicy' => 'Suriin ang <a target="_new" href="$1">patakaran sa paglilihim na pansarili</a> para sa mas marami pang kabatiran.',
	'openidoptional' => 'Opsyonal (hindi talaga kailangan/maaaring wala nito)',
	'openidrequired' => 'Kinakailangan',
	'openidnickname' => 'Bansag',
	'openidfullname' => 'Buong pangalan', # Fuzzy
	'openidemail' => 'Adres ng e-liham',
	'openidlanguage' => 'Wika',
	'openidtimezone' => 'Sona ng oras',
	'openidchooselegend' => 'Mapagpipilian ng pangalan ng tagagamit at akawnt',
	'openidchooseinstructions' => 'Lahat ng mga tagagamit ay kinakailangang may bansag;
makakapili ka mula sa mga pagpipiliang nasa ibaba.',
	'openidchoosenick' => 'Ang palayaw mo ($1)',
	'openidchoosefull' => 'Ang buong pangalan mo ($1)', # Fuzzy
	'openidchooseurl' => 'Isang pangalang napulot (napili/nakuha) mula sa iyong OpenID ($1)',
	'openidchooseauto' => 'Isang pangalang kusang nalikha ($1)',
	'openidchoosemanual' => 'Isang pangalang ikaw ang pumili:',
	'openidchooseexisting' => 'Isang umiiral na akawnt sa wiking ito:',
	'openidchooseusername' => 'Pangalan ng tagagamit:',
	'openidchoosepassword' => 'Hudyat:',
	'openidconvertinstructions' => 'Nagpapahintulot ang pormularyong ito upang mabago mo ang iyong akawnt na pangtagagamit upang magamit ang isang URL ng OpenID o makapagdagdag ng maraming pang mga URL na pang-OpenID.',
	'openidconvertoraddmoreids' => 'Gawing OpenID o magdagdag ng iba pang URL na pang-OpenID',
	'openidconvertsuccess' => 'Matagumpay na napalitan (nabago) upang maging OpenID',
	'openidconvertsuccesstext' => 'Matagumpay mong napalitan/nabago ang iyong OpenID para maging $1.',
	'openid-convert-already-your-openid-text' => 'Iyan na mismo ang iyong OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Iyan ay isa nang OpenID ng ibang tao.', # Fuzzy
	'openidalreadyloggedin' => 'Nakalagda ka na.',
	'openidalreadyloggedintext' => "'''Nakalagda ka na, $1!'''

Mapapamahalaan (matitingnan, mabubura, magdagdag pa) mo ang mga OpenID sa loob ng [[Special:Preferences#mw-prefsection-openid|laylay ng OpenID]] ng mga kanaisan mo.",
	'openidnousername' => 'Walang tinukoy na pangalan ng tagagamit.',
	'openidbadusername' => 'Masama ang tinukoy na pangalan ng tagagamit.',
	'openidautosubmit' => 'Kabilang/kasama sa pahinang ito ang isang pormularyo na dapat na kusang maipasa/maipadala kapag hindi pinaandar (pinagana) ang JavaScript.
Kung hindi, subukin ang pindutang "Continue" (Magpatuloy).',
	'openidclientonlytext' => 'Hindi mo magagamit ang mga kuwenta mula sa wiking ito bilang mga OpenID sa iba pang sityo/sayt.',
	'openidloginlabel' => 'URL ng OpenID',
	'openidlogininstructions' => "Tinatangkilik ng {{SITENAME}} ang pamantayang [//openid.net/ OpenID] para sa mga pang-isahang ulit na paglagda sa pagitan ng mga pook sa Sangkasaputan.
Hinahayaan ka ng OpenID na makalagda sa maraming iba't ibang mga pook sa Sangkasaputan na hindi gumagamit ng isang naiibang hudyat para sa bawat isa.
(Tingnan ang [//en.wikipedia.org/wiki/OpenID artikulo hinggil sa OpenID ng Wikipedia] para sa mas marami pang kabatiran.)
Maraming mga [http://wiki.openid.net/Public_OpenID_providers tagapagbigay ng OpenID], at maaaring mayroon ka nang isang akawnt na pinagana ng OpenID na nasa ibang palingkuran.",
	'openidlogininstructions-openidloginonly' => "Pinapayagan ka ng {{SITENAME}} na lumagdang papasok sa pamamagitan ''lamang'' ng OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Kung mayroon ka nang isang akawnt sa {{SITENAME}}, [[Special:UserLogin|Makakalagda]] ka sa pangkaraniwang paraan sa pamamagitan ng iyong pangalan ng tagagamit at hudyat. Upang magamit ang OpenID sa hinaharap, [[Special:OpenIDConvert|mapapalitan mo ang iyong akawnt upang maging isang OpenID]] pagkaraan mong lumagda sa normal na paraan.',
	'openidupdateuserinfo' => 'Isapanahon ang aking pansariling kabatiran:',
	'openiddelete' => 'Burahin ang OpenID',
	'openiddelete-text' => 'Sa pagpaindot ng pindutang "{{int:openiddelete-button}}", aalisin mo ang OpenID na $1 mula sa iyong akawnt.  Hindi ka na makalalagdang papasok sa pamamagitan ng ganitong OpenID.',
	'openiddelete-button' => 'Tiyakin',
	'openiddeleteerrornopassword' => 'Hindi mo mabubura ang lahat ng mga OpenID mo dahil walang hudyat ang akawnt mo.
Hindi ka makalalagda na walang OpenID.',
	'openiddeleteerroropenidonly' => 'Hindi mo mabubura ang lahat ng mga OpenID mo dahil hindi pinapayagan kang lumagda sa pamamagitan lang ng OpenID.
Hindi ka maaaring makalagda na walang OpenID.',
	'openiddelete-success' => 'Matagumpay na natanggal ang OpenID mula sa iyong akawnt.',
	'openiddelete-error' => 'Naganap ang isang kamalian habang tinatanggal ang OpenID mula sa iyong akawnt.',
	'openid-openids-were-not-merged' => 'Hindi napagsanib ang (mga) OpenID noong pinagsasanib ang mga akawnt ng tagagamit.',
	'prefs-openid' => 'OpenID',
	'prefs-openid-hide-openid' => 'Itago ang OpenID mo sa ibabaw ng iyong pahina ng tagagamit, kapag lumagda ka sa pamamagitan ng OpenID.',
	'openid-hide-openid-label' => 'Itago ang OpenID mo sa ibabaw ng iyong pahina ng tagagamit, kapag lumagda ka sa pamamagitan ng OpenID.',
	'openid-userinfo-update-on-login-label' => 'Isapanahon ang sumusunod na kabatiran mula sa katauhang pang-OpenID sa bawat pagkakataong lalagda akong papasok:', # Fuzzy
	'openid-associated-openids-label' => 'Mga openID na may kaugnayan sa akawnt mo:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Galaw',
	'openid-urls-registration' => 'Oras ng pagpaparehistro',
	'openid-urls-registration-date-time' => '$1',
	'openid-urls-delete' => 'Burahin',
	'openid-add-url' => 'Magdagdag ng isang bagong OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Lumagda o lumikha ng isang bagong akawnt',
	'openid-provider-label-openid' => 'Ipasok ang iyong URL na pang-OpenID',
	'openid-provider-label-google' => 'Lumagdang ginagamit ang iyong akawnt na pang-Google',
	'openid-provider-label-yahoo' => 'Lumagdang ginagamit ang akawnt mong pang-Yahoo',
	'openid-provider-label-aol' => 'Ipasok ang iyong katawagang pang-AOL',
	'openid-provider-label-other-username' => 'Ipasok ang iyong pangalang pangtagagamit na pang-$1',
	'specialpages-group-openid' => 'Mga pahina ng paglilingkod at kabatiran sa katayuan ng OpenID',
	'right-openid-converter-access' => 'Maidaragdag o mapapalitan ang kanilang akawnt upang makagamit ng mga katauhan ng OpenID',
	'right-openid-dashboard-access' => 'Pamantayang pagpunta sa tapalodo ng OpenID',
	'right-openid-dashboard-admin' => 'Pagpunta ng tagapangasiwa sa tapalodo ng OpenID',
	'openid-dashboard-title' => 'Tapalodo ng OpenID',
	'openid-dashboard-title-admin' => 'Tapalodo ng OpenID (tagapangasiwa)',
	'openid-dashboard-introduction' => 'Ang pangkasalukuyang mga katakdaan ng dugtong na OpenID ([$1 tulong])',
	'openid-dashboard-number-openid-users' => 'Bilang ng mga tagagamit na mayroong OpenID',
	'openid-dashboard-number-openids-in-database' => 'Bilang ng mga OpenID (kabuuan)',
	'openid-dashboard-number-users-without-openid' => 'Bilang ng mga tagagamit na walang OpenID',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Suelnur
 */
$messages['tr'] = array(
	'openid-desc' => 'Vikiye bir [//openid.net/ OpenID] ile giriş yapın, ve diğer OpenID kullanan web sitelerine bir viki kullanıcı hesabıyla giriş yapın.',
	'openidlogin' => 'OpenID ile giriş yapın', # Fuzzy
	'openidserver' => 'OpenID sunucusu',
	'openidxrds' => 'Yadis dosyası',
	'openidconvert' => 'OpenID çeviricisi',
	'openiderror' => 'Doğrulama hatası',
	'openiderrortext' => 'OpenID adresi doğrulanırken bir hata oluştu.',
	'openidconfigerror' => 'OpenID yapılandırma hatası',
	'openidconfigerrortext' => 'Bu viki için OpenID depolama yapılandırması geçersiz.
Lütfen bir [[Special:ListUsers/sysop|yöneticiye]] danışın.',
	'openidpermission' => 'OpenID izinleri hatası',
	'openidpermissiontext' => "Sağladığınız OpenID'nin bu sunucuya oturum açmasına izin verilmiyor.",
	'openidcancel' => 'Doğrulama iptal edildi',
	'openidcanceltext' => 'OpenID URL doğrulaması iptal edildi.',
	'openidfailure' => 'Doğrulama başarısız',
	'openidfailuretext' => 'OpenID URL doğrulaması başarısız oldu. Hata iletisi: "$1"',
	'openidsuccess' => 'Doğrulama başarılı',
	'openidsuccesstext' => 'OpenID URL doğrulaması başarılı.', # Fuzzy
	'openidusernameprefix' => 'OpenIDKullanıcısı',
	'openidserverlogininstructions' => '$3 sitesine $2 kullanıcısı (kullanıcı sayfası $1) olarak oturum açmak için parolanızı aşağıya girin.', # Fuzzy
	'openidtrustinstructions' => '$1 ile veri paylaşmak istediğinizi kontrol edin.',
	'openidallowtrust' => "Bu kullanıcı hesabına güvenmek için $1'e izin ver.",
	'openidnopolicy' => 'Site bir gizlilik ilkesi belirtmemiş.',
	'openidpolicy' => 'Daha fazla bilgi için <a target="_new" href="$1">gizlilik ilkesine</a> bakın.',
	'openidoptional' => 'İsteğe Bağlı',
	'openidrequired' => 'Gerekli',
	'openidnickname' => 'Kullanıcı adı',
	'openidfullname' => 'Tam ad', # Fuzzy
	'openidemail' => 'E-posta adresi',
	'openidlanguage' => 'Dil',
	'openidtimezone' => 'Saat dilimi',
	'openidchooselegend' => 'Kullanıcı adı ve hesap seçimi',
	'openidchooseinstructions' => 'Tüm kullanıcılar için bir kullanıcı adı gereklidir;
aşağıdaki seçeneklerden birini seçebilirsiniz.',
	'openidchoosenick' => 'Rumuzunuz ($1)',
	'openidchoosefull' => 'Tam adınız ($1)', # Fuzzy
	'openidchooseurl' => "OpenID'nizden bir isim alındı ($1)",
	'openidchooseauto' => 'Otomatik oluşturulan bir isim ($1)',
	'openidchoosemanual' => 'Tercihinizden bir isim:',
	'openidchooseexisting' => 'Bu vikide mevcut bir hesap',
	'openidchooseusername' => 'Kullanıcı adı:',
	'openidchoosepassword' => 'Parola:',
	'openidconvertinstructions' => 'Bu form bir OpenID URLsi kullanmak ya da daha fazla OpenID URLsi eklemek için kullanıcı hesabınızı değiştirmenizi sağlar.',
	'openidconvertoraddmoreids' => "OpenID'ye dönüştürün ya da başka bir OpenID URLsi ekleyin",
	'openidconvertsuccess' => 'OpenIDye başarıyla dönüştürüldü',
	'openidconvertsuccesstext' => "OpenIDnizi başarıyla $1'e dönüştürdünüz.",
	'openid-convert-already-your-openid-text' => 'Bu zaten sizin OpenIDniz.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Bu bir başkasının OpenIDsi.', # Fuzzy
	'openidalreadyloggedin' => "'''Zaten oturum açtınız, $1!'''

Eğer gelecekte de oturum açmak için OpenID kullanmak isterseniz, [[Special:OpenIDConvert|hesabınızı OpenID kullanmak için dönüştürebilirsiniz]].", # Fuzzy
	'openidnousername' => 'Herhangi bir kullanıcı adı belirtilmedi.',
	'openidbadusername' => 'Kötü bir kullanıcı adı belirtildi.',
	'openidautosubmit' => 'Bu sayfa, JavaScript etkin ise otomatik olarak gönderilmesi gereken bir form içeriyor.
Eğer değilse, "Continue" (Devam) düğmesini deneyin.',
	'openidclientonlytext' => 'Bu vikideki hesapları başka sitelerde OpenID olarak kullanamazsınız.',
	'openidloginlabel' => 'OpenID URLsi',
	'openidlogininstructions' => "{{SITENAME}}, web sitelerinde tekli giriş için [//openid.net/ OpenID] standartını desteklemektedir.
OpenID, herbirine farklı şifre kullanmadan birçok web sitesine giriş yapmanıza izin verir.
(Daha fazla bilgi için [//en.wikipedia.org/wiki/OpenID Vikipedideki OpenID maddesine bakın].)

Eğer {{SITENAME}} sitesinde mevcut bir hesabınız varsa, her zamanki gibi kullanıcı adınız ve şifrenizle [[Special:UserLogin|giriş yapabilirsiniz]].
İleride OpenID kullanmak için, normal giriş yaptıktan sonra [[Special:OpenIDConvert|hesabınızı OpenID'ye çevirebilirsiniz]].

Birçok [//openid.net/get/ OpenID sağlayıcısı] vardır, ve bir başka serviste halihazırda bir OpenID-etkin hesabınız olabilir.", # Fuzzy
	'openidupdateuserinfo' => 'Kişisel bilgimlerimi güncelle:',
	'openiddelete' => "OpenID'yi sil",
	'openiddelete-text' => '"{{int:openiddelete-button}}" düğmesine tıklayarak, $1 OpenID\'sini hesabınızdan çıkaracaksınız.
Bu OpenID ile artık giriş yapamayacaksınız.',
	'openiddelete-button' => 'Onayla',
	'openiddeleteerrornopassword' => "Tüm OpenID'lerinizi silemezsiniz çünkü hesabınızın şifresi yok.
OpenID olmadan giriş yapamazsınız.",
	'openiddeleteerroropenidonly' => "Tüm OpenID'lerinizi silemezsiniz çünkü sadece OpenID ile giriş yapmaya izniniz var.
OpenID olmadan giriş yapamazsınız.",
	'openiddelete-success' => 'OpenID hesabınızdan başarıyla kaldırıldı.',
	'openiddelete-error' => 'OpenID hesabınızdan çıkarılırken bir hata oluştu.',
	'prefs-openid-hide-openid' => 'Eğer OpenID ile giriş yaparsanız, kullanıcı sayfanızda OpenID URLnizi gizle.',
	'openid-hide-openid-label' => 'Eğer OpenID ile giriş yaparsanız, kullanıcı sayfanızda OpenID URLnizi gizle.',
	'openid-userinfo-update-on-login-label' => 'Her oturum açışımda OpenID karakterinden aşağıdaki bilgileri güncelle:', # Fuzzy
	'openid-associated-openids-label' => "Hesabınızla ilişkili OpenID'ler:",
	'openid-urls-action' => 'Eylem',
	'openid-urls-delete' => 'Sil',
	'openid-add-url' => 'Yeni bir OpenID ekle', # Fuzzy
	'openid-login-or-create-account' => 'Oturum açın ya da yeni hesap oluşturun',
	'openid-provider-label-openid' => 'OpenID URLnizi girin',
	'openid-provider-label-google' => 'Google hesabınızı kullanarak giriş yapın',
	'openid-provider-label-yahoo' => 'Yahoo hesabınızı kullanarak giriş yapın',
	'openid-provider-label-aol' => 'AOL ekran-adınızı girin',
	'openid-provider-label-other-username' => '$1 kullanıcı adınızı girin',
);

/** Turoyo (Ṫuroyo)
 * @author Ariyo
 */
$messages['tru'] = array(
	'openidlanguage' => 'Leşono:',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Alfredie
 */
$messages['ug-arab'] = array(
	'openidlanguage' => 'تىل',
);

/** Uyghur (Latin script) (Uyghurche)
 * @author Jose77
 */
$messages['ug-latn'] = array(
	'openidlanguage' => 'Til',
);

/** Ukrainian (українська)
 * @author A1
 * @author AS
 * @author Aleksandrit
 * @author Alex Khimich
 * @author Base
 * @author NickK
 * @author Prima klasy4na
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'openid-desc' => 'Вхід у вікі за допомогою [//openid.net/ OpenID], а також вхід на інші сайти, що підтримують OpenID за допомогою акаунта в вікі',
	'openidlogin' => 'Вхід / створення аккаунту за допомогою OpenID',
	'openidserver' => 'Сервер OpenID',
	'openid-server-identity-page-text' => 'Це технічна сторінка сервера OpenID, призначена для запуску OpenID-аутентифікації. Сторінка не має іншої мети.',
	'openidxrds' => 'Файл Yadis',
	'openidconvert' => 'Перетворювач OpenID',
	'openiderror' => 'Помилка перевірки повноважень',
	'openiderrortext' => 'Під час перевірки адреси OpenID сталася помилка.',
	'openidconfigerror' => 'Помилка налаштування OpenID',
	'openidconfigerrortext' => 'Налаштування сховища OpenID для цієї вікі помилкова.
Будь-ласка, зверніться до [[Special:ListUsers/sysop|адміністратору сайту]].',
	'openidpermission' => 'Помилка прав доступу OpenID',
	'openidpermissiontext' => 'Вказаний OpenID не дозволяє увійти на цей сервер.',
	'openidcancel' => 'Перевірку скасовано',
	'openidcanceltext' => 'Перевірка адреси OpenID була скасована.',
	'openidfailure' => 'Перевірка невдала',
	'openidfailuretext' => 'Перевірка адреси OpenID завершилася невдачею. Повідомлення про помилку: «$1»',
	'openidsuccess' => 'Перевірка пройшла успішно',
	'openidsuccesstext' => "'''Успішна перевірка і вхід в систему як користувач $1'''.

Ваш OpenID — $2 .

Цим та іншими можливими OpenID можна керувати на [[Special:Preferences#mw-prefsection-openid|вкладці OpenID]] у Ваших налаштуваннях.<br />
Необов'язковий пароль облікового запису можна додати у Вашому [[Special:Preferences#mw-prefsection-personal|профілі користувача]].",
	'openidusernameprefix' => 'Користувач OpenID',
	'openidserverlogininstructions' => '$3 запитує введення Вашого паролю до сторінки користувача $2 $1 (це Ваш OpenID URL)',
	'openidtrustinstructions' => 'Відзначте, якщо ви хочете надати доступ до даних для $1.',
	'openidallowtrust' => 'Дозволити $1 довіряти цьому акаунту.',
	'openidnopolicy' => 'Сайт не вказав політику конфіденційності.',
	'openidpolicy' => 'Додаткову інформацію можна дізнатися в <a target="_new" href="$1">політиці конфіденційності</a>.',
	'openidoptional' => "необов'язкове",
	'openidrequired' => "обов'язкове",
	'openidnickname' => 'Псевдонім',
	'openidfullname' => "Повне ім'я", # Fuzzy
	'openidemail' => 'Адреса ел. пошти',
	'openidlanguage' => 'Мова',
	'openidtimezone' => 'Часовий пояс',
	'openidchooselegend' => 'Вибір імені користувача та облікового запису',
	'openidchooseinstructions' => 'Кожен користувач повинен мати псевдонім;
ви можете вибрати один з представлених нижче.',
	'openidchoosenick' => 'Ваш нік ($1)',
	'openidchoosefull' => "Ваше повне ім'я ($1)", # Fuzzy
	'openidchooseurl' => 'Ім`я, отримане з вашого OpenID ($1)',
	'openidchooseauto' => "Автоматично створене ім'я ($1)",
	'openidchoosemanual' => "Ім'я на ваш вибір:",
	'openidchooseexisting' => 'Існуючий обліковий запис на цій вікі',
	'openidchooseusername' => "Ім'я користувача:",
	'openidchoosepassword' => 'Пароль:',
	'openidconvertinstructions' => 'Ця форма дозволяє вам змінити використання Вашого облікового запису на використання адреси OpenID або додати кілька адрес OpenID.',
	'openidconvertoraddmoreids' => 'Перетворити на OpenID або додати іншу адресу OpenID',
	'openidconvertsuccess' => 'Успішне перетворення в OpenID',
	'openidconvertsuccesstext' => 'Ви успішно перетворили ваш OpenID в $1.',
	'openid-convert-already-your-openid-text' => 'OpenID $1 уже асоційовано із Вашим обліковим записом. Немає сенсу додавати його ще раз.',
	'openid-convert-other-users-openid-text' => '$1 — чужий OpenID. Ви не можете використовувати OpenID іншого користувача.',
	'openidalreadyloggedin' => 'Ви вже ввійшли.',
	'openidalreadyloggedintext' => "'''Ви вже ввійшли, $1!'''

Ви можете керувати (переглядати, видаляти тощо) своїми OpenID у [[Special:Preferences#mw-prefsection-openid|вкладці OpenID]] Ваших налаштувань.",
	'openidnousername' => "Не вказано ім'я користувача.",
	'openidbadusername' => "Зазначено невірне ім'я користувача.",
	'openidautosubmit' => 'Ця сторінка містить форму, яка повинна бути автоматично відправлена, якщо у вас включений JavaScript.
Якщо цього не сталося, спробуйте натиснути на кнопку «Continue» (Продовжити).',
	'openidclientonlytext' => 'Ви не можете використовувати акаунти з цієї вікі, як OpenID на іншому сайті.',
	'openidloginlabel' => 'Адреса OpenID',
	'openidlogininstructions' => "{{SITENAME}} підтримує [//openid.net/ OpenID] стандарт єдиного облікового запису для різних сайтів.
OpenID дозволяє Вам заходити на різні сайти, не вказуючи інший пароль для кожного з них.
(Див. [//http://uk.wikipedia.org/wiki/OpenID статтю про OpenID у Вікіпедії] для додаткової інформації.)
Існує багато [//openid.net/get/ OpenID провайдерів], і у Вас уже може бути прив'язаний до OpenID обліковий запис на іншому сервісі.",
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} дозволяє Вам увійти ''тільки'' використовуючи OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Якщо у Вас уже є обліковий запис на {{SITENAME}}, Ви можете [[Special:UserLogin|увійти]] зі своїм іменем користувача і паролем, як завжди.
Щоб використовувати OpenID у майбутньому, ви можете [[Special:OpenIDConvert|конвертувати Ваш обліковий запис на OpenID]] після того, як увійдете в систему як звичайно.',
	'openidupdateuserinfo' => 'Оновити мою особисту інформацію:',
	'openiddelete' => 'Видалити OpenID',
	'openiddelete-text' => 'Натиснувши на кнопку «{{int:openiddelete-button}}», Ви видалите OpenID $1 зі свого облікового запису. Ви більше не зможете входити із цим OpenID.',
	'openiddelete-button' => 'Підтвердити',
	'openiddeleteerrornopassword' => 'Ви не можете вилучити всі свої OpenID, бо ваш обліковий запис не має пароля.
У вас не буде можливості увійти в ситему без OpenID.',
	'openiddeleteerroropenidonly' => 'Ви не можете вилучити всі свої OpenID, бо вам дозволено входити в систему тільки через OpenID.
У вас не буде можливості увійти в ситему без OpenID.',
	'openiddelete-success' => 'OpenID успішно вилучений з Вашого облікового запису.',
	'openiddelete-error' => 'Відбулася помилка при видаленні OpenID з Вашого облікового запису.',
	'openid-openids-were-not-merged' => "OpenID не були об'єднані при об'єднанні облікових записів.",
	'prefs-openid-hide-openid' => 'Приховувати ваш OpenID на вашій сторінці користувача, якщо ви ввійшли з допомогою OpenID.',
	'openid-hide-openid-label' => 'Приховувати ваш OpenID на вашій сторінці користувача, якщо ви ввійшли з допомогою OpenID.',
	'openid-userinfo-update-on-login-label' => 'Оновлювати наступну інформацію про мене через OpenID щораз, коли я представляюся системі:', # Fuzzy
	'openid-associated-openids-label' => "OpenID, пов'язані з Вашим обліковим записом:",
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Дія',
	'openid-urls-registration' => 'Час реєстрації',
	'openid-urls-delete' => 'Видалити',
	'openid-add-url' => 'Додати новий OpenID', # Fuzzy
	'openid-login-or-create-account' => 'Увійти до системи або створити новий обліковий запис',
	'openid-provider-label-openid' => 'Введіть URL Вашого OpenID',
	'openid-provider-label-google' => 'Представитися, використовуючи обліковий запис Google',
	'openid-provider-label-yahoo' => 'Представитися, використовуючи обліковий запис Yahoo',
	'openid-provider-label-aol' => "Введіть ваше ім'я в AOL",
	'openid-provider-label-wmflabs' => 'Увійти в систему з допомогою облікового запису Wmflabs',
	'openid-provider-label-other-username' => "Введіть Ваше ім'я користувача $1",
	'specialpages-group-openid' => 'Службові сторіки OpenID та інформація про статус',
	'right-openid-converter-access' => 'Можливість додавати або конвертувати свій обліковий запис для використання OpenID',
	'right-openid-dashboard-access' => 'Стандартний доступ до панелі OpenID',
	'right-openid-dashboard-admin' => 'Доступ адміністратора до панелі OpenID',
	'action-openid-converter-access' => 'додавання/перетворення свого облікового запису для використання OpenID',
	'action-openid-dashboard-access' => 'доступ до панелі OpenID',
	'action-openid-dashboard-admin' => 'доступ до панелі адміністратора OpenID',
	'openid-dashboard-title' => 'Панель OpenID',
	'openid-dashboard-title-admin' => 'Панель OpenID (адміністратор)',
	'openid-dashboard-introduction' => 'Поточні налаштування розширення OpenID ([$1 довідка])',
	'openid-dashboard-number-openid-users' => 'Число користувачів без OpenID',
	'openid-dashboard-number-openids-in-database' => 'Число OpenID (всього)',
	'openid-dashboard-number-users-without-openid' => 'Число користувачів без OpenID',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'openiderror' => 'تصدیق کی غلطی',
	'openidcancel' => 'منسوخ کر کے تصدیق',
	'openidfailure' => 'تصدیق ناکام',
	'openidnopolicy' => 'ویب سائٹ ایک راز داری کی پالیسی مخصوص نہیں ہے.',
	'openidoptional' => 'اختیاری',
	'openidrequired' => 'کی ضرورت',
	'openidnickname' => 'عرفیت',
	'openidemail' => 'ای میل پتہ',
	'openidlanguage' => 'زبان',
	'openidtimezone' => 'منطقۂ وقت',
	'openidchoosemanual' => 'آپ کی پسند کا ایک نام:',
	'openidchooseusername' => 'صارف کا نام:',
	'openidchoosepassword' => 'پاس ورڈ:',
	'openiddelete-button' => 'اس بات کی تصدیق',
	'openid-urls-action' => 'کارروائی',
	'openid-urls-registration' => 'رجسٹریشن کے وقت',
	'openid-urls-delete' => 'حذف کریں',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'openid-desc' => "Entra con [//openid.net/ OpenID] in te la wiki, e entra in tei altri siti web che dòpara OpenID co' na utensa wiki",
	'openidlogin' => 'Acesso con OpenID', # Fuzzy
	'openidserver' => 'server OpenID',
	'openidxrds' => 'file Yadis',
	'openidconvert' => 'convertidor OpenID',
	'openiderror' => 'Eròr ne la verifica',
	'openiderrortext' => "Se gà verificà un eròr durante la verifica de l'URL OpenID.",
	'openidconfigerror' => 'Eròr in te la configurassion OpenID',
	'openidconfigerrortext' => 'La configurassion de la memorixassion de OpenID par sta wiki no la xe mia valida.
Par piaser consulta un [[Special:ListUsers/sysop|aministrador]].',
	'openidpermission' => 'Eròr in tei parmessi OpenID',
	'openidpermissiontext' => "A l'OpenID che ti gà fornìo no xe mia parmesso de entrar su sto server.",
	'openidcancel' => 'Verifica anulà',
	'openidcanceltext' => "La verifica de l'URL OpenID le stà scancelà.",
	'openidfailure' => 'Verifica mia riussìa',
	'openidfailuretext' => 'La verifica de l\'URL OpenID la xe \'ndà mal. El messajo de eròr el xe: "$1"',
	'openidsuccess' => 'Verifica efetuà',
	'openidsuccesstext' => "La verifica de l'URL OpenID la xe stà fata coretamente.", # Fuzzy
	'openidusernameprefix' => 'Utente OpenID',
	'openidserverlogininstructions' => 'Scrivi qua la to password par entrar su $3 come utente $2 (pàxena utente  $1).', # Fuzzy
	'openidtrustinstructions' => 'Contròla se te vol dal bon condivìdar i dati con $1.',
	'openidallowtrust' => 'Parméti a $1 de fidarse de sta utensa.',
	'openidnopolicy' => "El sito no'l gà indicà na polìtega relativa a la privacy.",
	'openidpolicy' => 'Contròla la <a target="_new" href="$1">polìtega relativa a la privacy</a> par savérghene piessè.',
	'openidoptional' => 'Opzional',
	'openidrequired' => 'Obligatorio',
	'openidnickname' => 'Soranòme',
	'openidfullname' => 'Nome par intiero', # Fuzzy
	'openidemail' => 'Indirisso de posta eletronica',
	'openidlanguage' => 'Lengoa',
	'openidtimezone' => 'Fuso orario',
	'openidchooseinstructions' => 'Tuti i utenti i gà da verghe un soranòme;
te pol tórghene uno da le opzioni seguenti.',
	'openidchoosefull' => 'El to nome par intiero ($1)', # Fuzzy
	'openidchooseurl' => 'Un nome sielto dal to OpenID ($1)',
	'openidchooseauto' => 'Un nome generà automaticamente ($1)',
	'openidchoosemanual' => 'Un nome a sielta tua:',
	'openidchooseexisting' => 'Na utensa esistente su sta wiki:', # Fuzzy
	'openidchoosepassword' => 'Password:',
	'openidconvertinstructions' => 'Sto modulo el te parmete de canbiar la to utensa par doparar un URL OpenID o zontar altri URL OpenID.',
	'openidconvertsuccess' => 'Convertìo con successo a OpenID',
	'openidconvertsuccesstext' => 'El to OpenID el xe stà convertìo a $1.',
	'openid-convert-already-your-openid-text' => 'Sto chì el xe xà el to OpenID.', # Fuzzy
	'openid-convert-other-users-openid-text' => "Sto chì el xe l'OpenID de calchidun altro.", # Fuzzy
	'openidalreadyloggedin' => "'''Te sì xà entrà, $1!'''

Se ti vol doparar OpenID par entrar in futuro, te pol [[Special:OpenIDConvert|convertir la to utensa par doparar OpenID]].", # Fuzzy
	'openidnousername' => 'Nissun nome utente indicà.',
	'openidbadusername' => "El nome utente indicà no'l xe mia valido.",
	'openidautosubmit' => 'Sta pàxena la include un modulo che\'l dovarìa èssar invià automaticamente se ti gà JavaScript ativà.
Se no, próa a strucar el boton "Continue" (Continua).',
	'openidclientonlytext' => 'No te podi doparar le utense de sta wiki come OpenID su de un altro sito.',
	'openidloginlabel' => 'URL OpenID',
	'openidlogininstructions' => "{{SITENAME}} el suporta el standard [//openid.net/ OpenID] par el login unico sui siti web.
OpenID el te permete de registrarte in molti siti web sensa doparar na password difarente par ognuno.
(Lèzi la [//en.wikipedia.org/wiki/OpenID voce de Wikipedia su l'OpenID] par savérghene piassè.)

Se te ghè zà un account su {{SITENAME}}, te podi far el [[Special:UserLogin|login]] col to nome utente e la to password come al solito.
Par doparar OpenID in futuro, te podi [[Special:OpenIDConvert|convertir el to account a OpenID]] dopo che te ghè fato normalmente el login.

Ghe xe molti [//openid.net/get/ Provider OpenID], e te podaressi verghe zà un account abilità a l'OpenID su un altro servissio.", # Fuzzy
	'openidupdateuserinfo' => 'Ajorna le me informassion personài', # Fuzzy
	'openiddelete' => 'Scancela OpenID',
	'openiddelete-button' => 'Va ben',
	'prefs-openid-hide-openid' => 'Scondi el to OpenID su la to pàxena utente, se te fè el login con OpenID.',
	'openid-hide-openid-label' => 'Scondi el to OpenID su la to pàxena utente, se te fè el login con OpenID.',
	'openid-userinfo-update-on-login-label' => "Ajorna le seguenti informassion da l'utensa de OpenID ogni olta che me conéto:", # Fuzzy
	'openid-urls-action' => 'Azion',
	'openid-urls-delete' => 'Scancela',
	'openid-add-url' => 'Zonta un OpenID novo', # Fuzzy
	'openid-login-or-create-account' => 'Entra o crèa na utensa nova', # Fuzzy
	'openid-provider-label-openid' => "Inserissi l'URL del to OpenID",
	'openid-provider-label-google' => 'Entra doparando la to utensa Google',
	'openid-provider-label-yahoo' => 'Entra doparando la to utensa Yahoo',
	'openid-provider-label-aol' => 'Inserissi el to screenname AOL',
	'openid-provider-label-other-username' => 'Inserissi el to nome utente $1',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'openidxrds' => 'Yadis-fail',
	'openiderror' => 'Verifikacijan petuz',
	'openidoptional' => 'Opcionaline',
	'openidrequired' => 'Pidab',
	'openidnickname' => 'Nikneim',
	'openidemail' => 'E-počtan adres',
	'openidlanguage' => "Kel'",
	'openidtimezone' => 'Aigzon',
	'openidchoosepassword' => 'Peitsana:',
	'openidupdateuserinfo' => 'Udištada minun personaline informacii', # Fuzzy
	'openiddelete-button' => 'Vahvištoitta',
	'openid-urls-action' => 'Tegend',
	'openid-urls-delete' => 'Heitta poiš',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'openid-desc' => 'Đăng nhập vào wiki dùng [//openid.net/ OpenID] và đăng nhập vào các website nhận OpenID dùng tài khoản wiki',
	'openidlogin' => 'Đăng nhập / mở tài khoản dùng OpenID',
	'openidserver' => 'Dịch vụ OpenID',
	'openidxrds' => 'Tập tin Yadis',
	'openidconvert' => 'Chuyển đổi OpenID',
	'openiderror' => 'Lỗi thẩm tra',
	'openiderrortext' => 'Có lỗi khi thẩm tra địa chỉ OpenID.',
	'openidconfigerror' => 'Lỗi thiết lập OpenID',
	'openidconfigerrortext' => 'Cấu hình nơi lưu trữ OpenID cho wiki này không hợp lệ.
Xin hãy liên lạc với [[Special:ListUsers/sysop|bảo quản viên]].',
	'openidpermission' => 'Lỗi quyền OpenID',
	'openidpermissiontext' => 'Địa chỉ OpenID của bạn không được phép đăng nhập vào dịch vụ này.',
	'openidcancel' => 'Đã hủy bỏ thẩm tra',
	'openidcanceltext' => 'Đã hủy bỏ việc thẩm tra địa chỉ OpenID.',
	'openidfailure' => 'Không thẩm tra được',
	'openidfailuretext' => 'Không thể thẩm tra địa chỉ OpenID. Lỗi: “$1”',
	'openidsuccess' => 'Đã thẩm tra thành công',
	'openidsuccesstext' => "'''Đã xác minh và đăng nhập như $1'''.

Địa chỉ OpenID của bạn là <code>&lt;$2></code>.

Quản lý OpenID này và các OpenID sau trong [[Special:Preferences#mw-prefsection-openid|thẻ OpenID]] của trang tùy chọn.<br />
Có thể đặt một mật khẩu tùy chọn cho tài khoản trong [[Special:Preferences#mw-prefsection-personal|thẻ Thông tin cá nhân]].",
	'openidusernameprefix' => 'Thành viên OpenID',
	'openidserverlogininstructions' => '$2, $3 yêu cầu bạn nhập mật khẩu cho trang cá nhân của bạn, $1, tức là địa chỉ OpenID của bạn.',
	'openidtrustinstructions' => 'Hãy kiểm tra hộp này nếu bạn muốn cho $1 biết thông tin cá nhân của bạn.',
	'openidallowtrust' => 'Để $1 tin cậy vào tài khoản này.',
	'openidnopolicy' => 'Website chưa xuất bản quy định quyền riêng tư.',
	'openidpolicy' => 'Hãy đọc <a target="_new" href="$1">quy định quyền riêng tư</a> để biết thêm chi tiết.',
	'openidoptional' => 'Tùy ý',
	'openidrequired' => 'Bắt buộc',
	'openidnickname' => 'Tên hiệu',
	'openidfullname' => 'Tên đầy đủ', # Fuzzy
	'openidemail' => 'Địa chỉ thư điện tử',
	'openidlanguage' => 'Ngôn ngữ',
	'openidtimezone' => 'Múi giờ',
	'openidchooselegend' => 'Lựa chọn tên người dùng và tài khoản',
	'openidchooseinstructions' => 'Mọi người dùng cần có tên hiệu; bạn có thể chọn tên hiệu ở dưới.',
	'openidchoosenick' => 'Tên hiệu của bạn ($1)',
	'openidchoosefull' => 'Tên đầy đủ của bạn ($1)', # Fuzzy
	'openidchooseurl' => 'Tên bắt nguồn từ OpenID của bạn ($1)',
	'openidchooseauto' => 'Tên tự động ($1)',
	'openidchoosemanual' => 'Tên khác:',
	'openidchooseexisting' => 'Một tài khoản hiện có trên wiki này',
	'openidchooseusername' => 'tên người dùng:',
	'openidchoosepassword' => 'Mật khẩu:',
	'openidconvertinstructions' => 'Mẫu này cho phép bạn thay đổi tài khoản người dùng của bạn để sử dụng một địa chỉ URL OpenID hay thêm địa chỉ OpenID.',
	'openidconvertoraddmoreids' => 'Chuyển đổi OpenID hay thêm địa chỉ OpenID',
	'openidconvertsuccess' => 'Đã chuyển đổi sang OpenID thành công',
	'openidconvertsuccesstext' => 'Bạn đã chuyển đổi OpenID của bạn sang $1 thành công.',
	'openid-convert-already-your-openid-text' => 'Đó đã là OpenID của bạn.', # Fuzzy
	'openid-convert-other-users-openid-text' => 'Đó là OpenID của một người nào khác.', # Fuzzy
	'openidalreadyloggedin' => 'Bạn đã đăng nhập rồi.',
	'openidalreadyloggedintext' => "'''Bạn đã đăng nhập rồi, $1!'''

Quản lý (xem, xóa, và thêm) các OpenID trong [[Special:Preferences#mw-prefsection-openid|thẻ OpenID]] tại trang tùy chọn.",
	'openidnousername' => 'Chưa chỉ định tên người dùng.',
	'openidbadusername' => 'Tên người dùng không hợp lệ.',
	'openidautosubmit' => 'Trang này có một mẫu sẽ tự động đăng lên nếu bạn kích hoạt JavaScript.
Nếu không, hãy thử nút "Continue" (Tiếp tục).',
	'openidclientonlytext' => 'Bạn không thể sử dụng tài khoản tại wiki này như OpenID tại trang khác.',
	'openidloginlabel' => 'Địa chỉ OpenID',
	'openidlogininstructions' => '{{SITENAME}} hỗ trợ tiêu chuẩn [//openid.net/ OpenID] để đăng nhập một lần giữa các trang Web.
OpenID cho phép bạn đăng nhập vào nhiều trang Web khác nhau mà không phải sử dụng mật khẩu khác nhau tại mỗi trang.
(Xem thêm chi tiết tại [//vi.wikipedia.org/wiki/OpenID bài viết về OpenID của Wikipedia].)
Nhiều [//openid.net/get/ dịch vụ cung cấp OpenID], và có thể bạn đã có tài khoản tại một dịch vụ kích hoạt OpenID.',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''chỉ'' cho phép đăng nhập dùng OpenID.",
	'openidlogininstructions-passwordloginallowed' => 'Nếu bạn đã có một tài khoản tại {{SITENAME}}, bạn có thể [[Special:UserLogin|đăng nhập]] bằng tên người dùng và mật khẩu của bạn như thông thường.
Để dùng OpenID vào lần sau, bạn có thể [[Special:OpenIDConvert|chuyển đổi tài khoản của bạn sang OpenID]] sau khi đã đăng nhập bình thường.',
	'openidupdateuserinfo' => 'Cập nhật thông tin cá nhân của tôi:',
	'openiddelete' => 'Xóa OpenID',
	'openiddelete-text' => 'Khi bấm nút “{{int:openiddelete-button}}”, bạn sẽ dời OpenID $1 khỏi tài khoản của bạn.
Bạn sẽ không đăng nhập được dùng OpenID này.',
	'openiddelete-button' => 'Xác nhận',
	'openiddeleteerrornopassword' => 'Bạn không có thể xóa tất cả các OpenID của bạn vì tài khoản thiếu mật khẩu. Nếu không có OpenID thì bạn không thể đăng nhập được.',
	'openiddeleteerroropenidonly' => 'Bạn không có thể xóa tất cả các OpenID của bạn vì bạn chỉ được phép đăng nhập dùng OpenID. Nếu không có OpenID thì bạn không thể đăng nhập được.',
	'openiddelete-success' => 'Đã dời OpenID thành công khỏi tài khoản của bạn.',
	'openiddelete-error' => 'Đã gặp lỗi khi dời OpenID khỏi tài khoản của bạn.',
	'openid-openids-were-not-merged' => 'Các OpenID không được hợp nhất lúc khi hợp nhất các tài khoản người dùng.',
	'prefs-openid-hide-openid' => 'Ẩn địa chỉ OpenID của bạn khỏi trang cá nhân, nếu bạn đăng nhập bằng OpenID.',
	'openid-hide-openid-label' => 'Ẩn địa chỉ OpenID của bạn khỏi trang cá nhân, nếu bạn đăng nhập bằng OpenID.', # Fuzzy
	'openid-userinfo-update-on-login-label' => 'Cập nhật thông tin sau từ persona OpenID mỗi khi tôi đăng nhập:', # Fuzzy
	'openid-associated-openids-label' => 'Các OpenID được gắn vào tài khoản của bạn:',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => 'Tác vụ',
	'openid-urls-registration' => 'Lúc mở tài khoản',
	'openid-urls-delete' => 'Xóa',
	'openid-add-url' => 'Thêm OpenID mới', # Fuzzy
	'openid-login-or-create-account' => 'Đăng nhập hay mở tài khoản mới',
	'openid-provider-label-openid' => 'Ghi vào URL OpenID của bạn',
	'openid-provider-label-google' => 'Đăng nhập dùng tài khoản Google',
	'openid-provider-label-yahoo' => 'Đăng nhập dùng tài khoản Yahoo!',
	'openid-provider-label-aol' => 'Ghi vào tên màn hình AOL',
	'openid-provider-label-other-username' => 'Nhập tên đăng nhập $1',
	'specialpages-group-openid' => 'Các trang quản lý và trạng thái OpenID',
	'right-openid-converter-access' => 'Thêm hoặc chuyển đổi tài khoản để sử dụng danh tính OpenID',
	'right-openid-dashboard-access' => 'Truy cập chuẩn vào bảng điều khiển OpenID',
	'right-openid-dashboard-admin' => 'Truy cập như bảo quản viên vào bảng điều khiển OpenID',
	'openid-dashboard-title' => 'Bảng điều khiển OpenID',
	'openid-dashboard-title-admin' => 'Bảng điều khiển OpenID (bảo quản viên)',
	'openid-dashboard-introduction' => 'Cấu hình hiện hành của phần mở rộng OpenID ([$1 trợ giúp])',
	'openid-dashboard-number-openid-users' => 'Số người dùng qua OpenID',
	'openid-dashboard-number-openids-in-database' => 'Tổng số OpenID',
	'openid-dashboard-number-users-without-openid' => 'Số người dùng không phải qua OpenID',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'openidxrds' => 'Ragiv: Yadis',
	'openiderror' => 'Kontrolamapöl',
	'openidoptional' => 'No peflagon',
	'openidrequired' => 'Peflagon',
	'openidnickname' => 'Näinem',
	'openidfullname' => 'Nem lölik',
	'openidemail' => 'Ladet leäktronik',
	'openidlanguage' => 'Pük',
	'openidtimezone' => 'Düpakoun',
	'openidchooseinstructions' => 'Gebans valik neodons näinemi;
kanol välön bali sökölas.',
	'openidchoosefull' => 'Nem lölik ola ($1)',
	'openidchooseauto' => 'Nem itjäfidiko pejaföl ($1)',
	'openidchoosemanual' => 'Nem fa ol pevälöl:',
	'openidchooseexisting' => 'Kal in vük at dabinöl',
	'openidchooseusername' => 'Gebananem:',
	'openidchoosepassword' => 'Letavöd:',
	'openidnousername' => 'Gebananem nonik pegivon.',
	'openidbadusername' => 'Gebananem no lonöföl pegivon.',
	'openid-urls-delete' => 'Moükön',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'openidemail' => 'בליצפּאָסט אַדרעס:',
	'openidlanguage' => 'שפראך',
	'openidtimezone' => 'צײַט זאנע',
	'openidchooseusername' => 'באַניצער נאָמען:',
	'openidchoosepassword' => 'פאַסווארט:',
	'openid-urls-action' => 'אַקציע',
	'openid-urls-delete' => 'אויסמעקן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Gaoxuewei
 * @author Kuailong
 * @author Liangent
 * @author Onecountry
 * @author Wrightbus
 * @author Xiaomingyan
 * @author Yanmiao liu
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'openid-desc' => '让用户可使用一个[//openid.net/ OpenID]来登录到这个wiki。如果启用相关设置，还可以使用他们在此wiki上用户帐号URL作为OpenID来登录到其他接受OpenID的网站。',
	'openidlogin' => '使用OpenID登录或创建账号',
	'openidserver' => 'OpenID服务器',
	'openid-identifier-page-text-no-such-local-openid' => '这是一个无效的本地OpenID标识符。',
	'openidxrds' => 'Yadis文件',
	'openidconvert' => 'OpenID转换',
	'openiderror' => '验证错误',
	'openiderrortext' => '在验证OpenID地址时出现了一个错误。',
	'openidconfigerror' => 'OpenID配置出错',
	'openidconfigerrortext' => 'OpenID存储配置对此wiki是无效的。
请联系[[Special:ListUsers/sysop|管理员]]。',
	'openidpermission' => 'OpenID权限错误',
	'openidpermissiontext' => '您提供的OpenID不允许在本服务器上登录。',
	'openidcancel' => '验证取消',
	'openidcanceltext' => 'OpenID地址验证被取消。',
	'openidfailure' => '验证失败',
	'openidfailuretext' => 'OpenID地址验证失败。错误信息："$1"',
	'openidsuccess' => '验证成功',
	'openidsuccesstext' => "'''成功验证并且登录为用户 $1'''。

您的OpenID是 $2 。

这个和可能将来的OpenID可以在您的设置里的[[Special:Preferences#mw-prefsection-openid|OpenID选项卡]]中管理。<br />
可选的账户密码可以在您的[[Special:Preferences#mw-prefsection-personal|用户设置]]里添加。",
	'openidusernameprefix' => 'OpenID用户',
	'openidserverlogininstructions' => '$3请求您为用户$2的用户页面$1输入密码（这是您的OpenID URL）',
	'openidtrustinstructions' => '请确认您是否愿与$1分享数据。',
	'openidallowtrust' => '允许$1信任这个用户的账户。',
	'openidnopolicy' => '站点没有提供隐私政策。',
	'openidpolicy' => '如要获得更多信息，请参见<a target="_new" href="$1">隐私政策</a>。',
	'openidoptional' => '可选',
	'openidrequired' => '必选',
	'openidnickname' => '昵称',
	'openidfullname' => '真实姓名',
	'openidemail' => '电邮地址',
	'openidlanguage' => '语言',
	'openidtimezone' => '时区',
	'openidchooselegend' => '用户名和账户选择',
	'openidchooseinstructions' => '所有的用户都需要提供昵称；
您可以从下面任选一个。',
	'openidchoosenick' => '你的昵称 ($1)',
	'openidchoosefull' => '您的真实姓名（$1）',
	'openidchooseurl' => '从你的OpenID获取的名称（$1）',
	'openidchooseauto' => '自动生成的名称（$1）',
	'openidchoosemanual' => '您选择的名称：',
	'openidchooseexisting' => '本维基已经存在的帐户：',
	'openidchooseusername' => '用户名：',
	'openidchoosepassword' => '密码：',
	'openidconvertinstructions' => '本表单可以修改您的用户账号，让该账户得以使用OpenID地址或者添加更多OpenID地址。',
	'openidconvertoraddmoreids' => '转换到OpenID或添加另一个OpenID地址',
	'openidconvertsuccess' => '成功转换为OpenID',
	'openidconvertsuccesstext' => '您已经成功的将您的OpenID转化为$1。',
	'openid-convert-already-your-openid-text' => '这已经是您的OpenID。', # Fuzzy
	'openid-convert-other-users-openid-text' => '这是别人的OpenID。', # Fuzzy
	'openidalreadyloggedin' => '您已经登录了。',
	'openidalreadyloggedintext' => "'''您已经登录，$1！'''

您可以在您的设置的[[Special:Preferences#mw-prefsection-openid|OpenID 选项卡]]中管理（查看、删除和进一步添加）OpenID。",
	'openidnousername' => '没有指定用户名。',
	'openidbadusername' => '指定的用户名是错误的。',
	'openidautosubmit' => '本页包含的表单在启用JavaScript的情况下可以自动提交。
如果没有自动提交，请按 "Continue" （继续）按钮。',
	'openidclientonlytext' => '你不能在其他站点上使用这个wiki的帐号作为OpenID。',
	'openidloginlabel' => 'OpenID地址',
	'openidlogininstructions' => '{{SITENAME}} 支持用于网站间单点登录的 [//openid.net/ OpenID] 标准。
OpenID 可以让您不必使用不同的密码登录不同的站点。
（详情请参见 [//en.wikipedia.org/wiki/OpenID 维基百科关于 OpenID 的条目]。）
[//openid.net/get/ OpenID 的提供者]有很多，您可能在使用其他服务时已经建立了一个可以使用 OpenID 的账户了。',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''仅''允许用 OpenID 登录。",
	'openidlogininstructions-passwordloginallowed' => '如果您在 {{SITENAME}} 上已经拥有了账号，可以以通常的方式用用户名和密码[[Special:UserLogin|登录]]。
将来使用 OpenID，您可以在正常登录后[[Special:OpenIDConvert|转换账号为 OpenID]]。',
	'openidupdateuserinfo' => '更新我的个人信息',
	'openiddelete' => '删除OpenID',
	'openiddelete-text' => '按下"{{int:openiddelete-button}}"按钮后，OpenID $1将从你的账户中删除。你以后将无法再使用这个OpenID登录。',
	'openiddelete-button' => '确认',
	'openiddeleteerrornopassword' => '不得删除全部OpenID，否则您的账户将无密码保护。
没有OpenID您将无法登录。',
	'openiddeleteerroropenidonly' => '不得删除全部OpenID，因为这是你目前登录站点的唯一方法。
没有OpenID您将无法登录。',
	'openiddelete-success' => 'OpenID已被成功删除。',
	'openiddelete-error' => '在移除你的OpenID的时候出现了一个错误。',
	'openid-openids-were-not-merged' => '合并用户帐号时，OpenID 没有被合并。',
	'prefs-openid-hide-openid' => 'OpenID登录时，在用户页隐藏OpenID。',
	'prefs-openid-trusted-sites' => '受信任的站点',
	'openid-hide-openid-label' => '如果您用OpenID登录时，在用户页隐藏您的OpenID。',
	'openid-userinfo-update-on-login-label' => '每次登录时，都从OpenID的用户信息中更新以下信息。', # Fuzzy
	'openid-associated-openids-label' => '和你的账号关联的OpenID：',
	'openid-urls-url' => 'URL',
	'openid-urls-action' => '动作',
	'openid-urls-registration' => '注册时间',
	'openid-urls-delete' => '删除',
	'openid-add-url' => '添加一个新的OpenID', # Fuzzy
	'openid-trusted-sites-delete-link-action-text' => '删除',
	'openid-trusted-sites-delete-all-link-action-text' => '删除所有受信任的站点',
	'openid-trusted-sites-delete-confirmation-button-text' => '确认',
	'openid-login-or-create-account' => '登录或创建新账号',
	'openid-provider-label-openid' => '输入你的OpenID URL',
	'openid-provider-label-google' => '使用你的Google账号登录',
	'openid-provider-label-yahoo' => '使用你的Yahoo账号登录',
	'openid-provider-label-aol' => '输入你的AOL屏幕名称',
	'openid-provider-label-other-username' => '输入你的$1用户名',
	'specialpages-group-openid' => 'OpenID 服务页和状态信息',
	'right-openid-converter-access' => '可以添加或转换他们的帐户为使用 OpenID 验证',
	'right-openid-dashboard-access' => '对 OpenID 仪表板的标准访问',
	'right-openid-dashboard-admin' => '对 OpenID 仪表板的管理员访问',
	'action-openid-converter-access' => '添加或转换您的帐户为使用OpenID验证',
	'action-openid-dashboard-access' => '访问OpenID面板',
	'action-openid-dashboard-admin' => '访问OpenID管理员面板',
	'openid-dashboard-title' => 'OpenID 仪表板',
	'openid-dashboard-title-admin' => 'OpenID 仪表板（管理员）',
	'openid-dashboard-introduction' => '当前 OpenID 的扩展设置（[$1 help|$1 帮助]）',
	'openid-dashboard-number-openid-users' => '拥有 OpenID 的用户数',
	'openid-dashboard-number-openids-in-database' => 'OpenID 的数量（总数）',
	'openid-dashboard-number-users-without-openid' => '没有 OpenID 的用户数',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Frankou
 * @author Gzdavidwong
 * @author Horacewai2
 * @author Liangent
 * @author Mark85296341
 * @author Simon Shek
 * @author Waihorace
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'openid-desc' => '使用一個 [//openid.net/ OpenID] 來登入到這個 wiki，以及使用 wiki 用戶帳號登入到其他接受 OpenID 的網站',
	'openidlogin' => '使用OpenID登錄或創建賬號',
	'openidserver' => 'OpenID 伺服器',
	'openidxrds' => 'Yadis 檔案',
	'openidconvert' => 'OpenID 轉換器',
	'openiderror' => '驗證錯誤',
	'openiderrortext' => '在驗證 OpenID 地址時出現了一個錯誤。',
	'openidconfigerror' => 'OpenID 配置出錯',
	'openidconfigerrortext' => '這個 wiki 的 OpenID 儲存設定是無效的。
請通知[[Special:ListUsers/sysop|管理員]]。',
	'openidpermission' => 'OpenID 的權限錯誤',
	'openidpermissiontext' => '您提供的 OpenID 不允許在本服務器上登入。',
	'openidcancel' => '驗證已取消',
	'openidcanceltext' => 'OpenID 地址驗證被取消。',
	'openidfailure' => '驗證失敗',
	'openidfailuretext' => 'OpenID 地址驗證失敗。錯誤資訊：「$1」',
	'openidsuccess' => '驗證成功',
	'openidsuccesstext' => "'''成功驗證並且登錄為用戶 $1'''。

您的OpenID是 $2 。

這個和可能將來的OpenID可以在您的設置里的[[Special:Preferences#mw-prefsection-openid|OpenID選項卡]]中管理。<br />
可選的賬戶密碼可以在您的[[Special:Preferences#mw-prefsection-personal|用戶設置]]里添加。",
	'openidusernameprefix' => 'OpenID 使用者',
	'openidserverlogininstructions' => '$3請求您為用戶$2的用戶頁面$1輸入密碼（這是您的OpenID URL）',
	'openidtrustinstructions' => '請確認您是否願與 $1 共用資料。',
	'openidallowtrust' => '允許 $1 信任這個用使用者的帳號。',
	'openidnopolicy' => '站點沒有提供隱私權政策。',
	'openidpolicy' => '如要取得更多資訊，請參見<a target="_new" href="$1">隱私權政策</a>。',
	'openidoptional' => '可選',
	'openidrequired' => '必選',
	'openidnickname' => '暱稱',
	'openidfullname' => '全名', # Fuzzy
	'openidemail' => '電郵地址',
	'openidlanguage' => '語言',
	'openidtimezone' => '時區',
	'openidchooselegend' => '用戶名和賬戶選擇',
	'openidchooseinstructions' => '所有的用戶都需要提供暱稱；
您可以從下面任選一個。',
	'openidchoosenick' => '你的暱稱（$1）',
	'openidchoosefull' => '您的全名（$1）', # Fuzzy
	'openidchooseurl' => '從您的 OpenID 得到的名稱（$1）',
	'openidchooseauto' => '自動生成的名稱（$1）',
	'openidchoosemanual' => '您選擇的名稱：',
	'openidchooseexisting' => '本維基已經存在的帳號：',
	'openidchooseusername' => '用戶名：',
	'openidchoosepassword' => '密碼：',
	'openidconvertinstructions' => '本表單可以將您的用戶帳號修改為 OpenID 地址。',
	'openidconvertoraddmoreids' => '轉換到 OpenID 或加入另一個 OpenID URL',
	'openidconvertsuccess' => '成功轉換為 OpenID',
	'openidconvertsuccesstext' => '您已經成功的將您的 OpenID 轉化為 $1。',
	'openid-convert-already-your-openid-text' => '這已是您的 OpenID 了。', # Fuzzy
	'openid-convert-other-users-openid-text' => '這是別人的 OpenID。', # Fuzzy
	'openidalreadyloggedin' => '您已經登入。',
	'openidalreadyloggedintext' => "'''您已經登錄，$1！'''

您可以在您的設置的[[Special:Preferences#mw-prefsection-openid|OpenID 選項卡]]中管理（查看、刪除和進一步添加）OpenID。",
	'openidnousername' => '沒有指定用戶名。',
	'openidbadusername' => '指定的用戶名是錯誤的。',
	'openidautosubmit' => '本頁包含的表單在啟用 JavaScript 的情況下可以自動提交。
如果沒有自動提交，請按「Continue」（繼續）按鈕。',
	'openidclientonlytext' => '你不能在其他站點上使用這個 wiki 的帳號作為 OpenID。',
	'openidloginlabel' => 'OpenID 網址',
	'openidlogininstructions' => '{{SITENAME}} 支持用於網站間單點登錄的 [//openid.net/ OpenID] 標準。
OpenID 可以讓您不必使用不同的密碼登錄不同的站點。
（詳情請參見 [//en.wikipedia.org/wiki/OpenID 維基百科關於 OpenID 的條目]。）
[//openid.net/get/ OpenID 的提供者]有很多，您可能在使用其他服務時已經建立了一個可以使用 OpenID 的賬戶了。',
	'openidlogininstructions-openidloginonly' => "{{SITENAME}} ''僅''允許用 OpenID 登錄。",
	'openidlogininstructions-passwordloginallowed' => '如果您在 {{SITENAME}} 上已經擁有了賬號，可以以通常的方式用用戶名和密碼[[Special:UserLogin|登錄]]。
將來使用 OpenID，您可以在正常登錄後[[Special:OpenIDConvert|轉換賬號為 OpenID]]。',
	'openidupdateuserinfo' => '更新我的個人資料',
	'openiddelete' => '刪除 OpenID',
	'openiddelete-text' => '當你按下「{{int:openiddelete-button}}」按鈕，你會將 OpenID $1 從你的帳戶中移除。你以後都不可以再使用這個 OpenID 登入。',
	'openiddelete-button' => '確認',
	'openiddeleteerrornopassword' => '不得刪除全部 OpenID，否則您的帳戶將無密碼保護。
沒有 OpenID 您將無法登入。',
	'openiddeleteerroropenidonly' => '不得刪除全部 OpenID，因為這是你目前登入站點的唯一方法。
沒有 OpenID 您將無法登入。',
	'openiddelete-success' => 'OpenID 已被成功刪除。',
	'openiddelete-error' => '在移除你的 OpenID 的時候出現了一個錯誤。',
	'openid-openids-were-not-merged' => '合并用戶帳號時，OpenID 沒有被合并。',
	'prefs-openid-hide-openid' => '如果使用 OpenID 登入，您可以在您的用戶頁隱藏您的 OpenID。',
	'openid-hide-openid-label' => '如果使用 OpenID 登入，您可以在您的用戶頁隱藏您的 OpenID。',
	'openid-userinfo-update-on-login-label' => '每次登入時，都從 OpenID 的使用者資料中更新以下資料。', # Fuzzy
	'openid-associated-openids-label' => '和你的帳號關聯的 OpenID：',
	'openid-urls-action' => '動作',
	'openid-urls-registration' => '註冊時間',
	'openid-urls-delete' => '刪除',
	'openid-add-url' => '加入一個新的 OpenID', # Fuzzy
	'openid-login-or-create-account' => '登錄或創建新賬號',
	'openid-provider-label-openid' => '輸入你的 OpenID URL',
	'openid-provider-label-google' => '以您的 Google 帳戶登入',
	'openid-provider-label-yahoo' => '以您的 Yahoo 帳戶登入',
	'openid-provider-label-aol' => '輸入你的 AOL 螢幕名稱',
	'openid-provider-label-other-username' => '輸入你的 $1 用戶名',
	'specialpages-group-openid' => 'OpenID 服務頁和狀態信息',
	'right-openid-dashboard-access' => '對 OpenID 儀錶板的標準訪問',
	'right-openid-dashboard-admin' => '對 OpenID 儀錶板的管理員訪問',
	'openid-dashboard-title' => 'OpenID 儀錶板',
	'openid-dashboard-title-admin' => 'OpenID 儀錶板（管理員）',
	'openid-dashboard-introduction' => '當前 OpenID 的擴展設置（[$1 help|$1 幫助]）',
	'openid-dashboard-number-openid-users' => '擁有 OpenID 的用戶數',
	'openid-dashboard-number-openids-in-database' => 'OpenID 的數量（總數）',
	'openid-dashboard-number-users-without-openid' => '沒有 OpenID 的用戶數',
);
