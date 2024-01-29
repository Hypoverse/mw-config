<?php

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgMaxUploadSize = 209715200;

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
unset( $wgFooterIcons['poweredby'] );
# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

$wgGenerateThumbnailOnParse = true;
#$wgEnableScaryTranscluding = false;
//$wgIncludeLegacyJavaScript = true;

$wgUseSiteJs = true;
$wgUseSiteCss = true;
$wgAllowUserJs = true;
$wgAllowUserCss = true;

//Global Settings
 $wgFragmentMode = ['html5', 'legacy'];
$wgLocaltimezone = "UTC";
date_default_timezone_set( $wgLocaltimezone );
$wgUseRCPatrol = true;
$wgImplicitGroups = array('*', 'user', 'autoconfirmed', 'emailconfirmed', 'extconfirmed');
$wgCookieSetOnAutoblock = true;
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;
$wgCookieSetOnIpBlock = true;

$wgRateLimits = [
	// Page edits
	'edit' => [
		'ip' => [ 8, 60 ],
		'newbie' => [ 8, 60 ],
		'user' => [ 90, 60 ],
	],
	// Triggering password resets emails
	'mailpassword' => [
		'ip' => [ 5, 3600 ],
	],
	'changeemail' => [
		'ip-all' => [ 10, 3600 ],
		'user' => [ 4, 86400 ]
	],
	// since 1.33 - rate limit email confirmations
	'confirmemail' => [
		'ip-all' => [ 10, 3600 ],
		'user' => [ 4, 86400 ]
	],
	// Purging pages
	'purge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Purges of link tables
	'linkpurge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Files rendered via thumb.php or thumb_handler.php
	'renderfile' => [
		'ip' => [ 700, 30 ],
		'user' => [ 700, 30 ],
	],
	// Same as above but for non-standard thumbnails
	'renderfile-nonstandard' => [
		'ip' => [ 70, 30 ],
		'user' => [ 70, 30 ],
	],
	'badoath' => [
				'&can-bypass' => false,
				'user' => [ 10, 60 ],
				'user-global' => [ 10, 60 ],
			]
];

$wgUseAjax = true;
$wgEnableAPI = true;
$wgEnableWriteAPI = true;
$wgAllowUserJs = true;
$wgAllowUserCss = true;
$wgAllowUserCssPrefs = true;
$wgUseSiteJs = true;
$wgUseSiteCss = true;
$wgAccountCreationThrottle = 2;
$wgAutoConfirmCount = 10;
$wgAutoConfirmAge = 86400*4;
$wgAutopromote['emailconfirmed'] = APCOND_EMAILCONFIRMED;
$wgAutopromote['extconfirmed'] = array(
    '&',
    APCOND_EMAILCONFIRMED,
    array( APCOND_EDITCOUNT, 100 ),
    array( APCOND_AGE, 86400*15 ),
);

$wgBlockCIDRLimit = array (
       'IPv4' => 14,
       'IPv6' => 18
);

$wgNamespaceAliases['MW'] = NS_MEDIAWIKI;
$wgNamespaceAliases['T'] = NS_TEMPLATE;
$wgNamespaceProtection[NS_TEMPLATE] = array( 'templateeditor' );
$wgRestrictionLevels = [ '', 'autoconfirmed', 'extconfirmed', 'tech', 'sysop', 'bureaucrat', 'wiki-leader', 'staff', 'manager' ];
$wgRestrictionTypes = [ 'create', 'delete', 'edit', 'move', 'upload' ];
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'ico', 'svg' );

$wgUseFilePatrol = false;  # Can be re-enabled later on a per-wiki basis.
$wgUseRCPatrol = false;    # Can be re-enabled later on a per-wiki basis.

$wgRightsIcon = "$wgScriptPath/resources/assets/licenses/cc-by-nc-sa.png";
$wgRightsUrl = 'https://creativecommons.org/licenses/by-nc-sa/4.0/';

# $wgWhitelistRead
$wgWhitelistRead = ["Main Page", "Special:UserLogin", "Special:UserLogout"];

$actions = ['edit', 'watch', 'unwatch', 'delete','revert', 'rollback', 'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'info', 'login', 'logout' ];
 
foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/wiki/$1&action=$action";
}

$wgActionPaths['view'] = "/wiki/$1";
$wgArticlePath = $wgActionPaths['view'];