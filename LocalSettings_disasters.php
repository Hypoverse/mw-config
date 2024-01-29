<?php
# This file was automatically generated by the MediaWiki 1.36.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = "Hypothetical Disasters";
$wgMetaNamespace = "Hypothetical_Disasters";
$wgServer = "https://disasters.hypoverse.org";
$wgDBname = "disasters_wiki";

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "https://meta.hypoverse.org/w/images/general/Meta/c/c8/Hypoverse_Disasters_Wiki_Logo.png" ];
$wgFavicon = "https://meta.hypoverse.org/w/images/general/Meta/6/64/Favicon.ico";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgSVGConverter = 'ImageMagick';
$wgImageMagickConvertCommand = "/usr/bin/convert";
// $wgUploadDirectory = "/mnt/hypoverse_images/images/general/Disasters";
// $wgUploadPath = "{$wgScriptPath}/images/general/Disasters";
// $wgTmpDirectory = "/mnt/hypoverse_images/images/general/Disasters/temp";


$wgUploadDirectory = "/mnt/h_images/images/general/Disasters";
$wgUploadPath = "{$wgScriptPath}/images/general/Disasters";
$wgTmpDirectory = "/mnt/h_images/images/general/Disasters/temp";
$wgThumbnailEpoch = 20230708220648;
$wgCacheEpoch = 20230708220648;
setlocale(LC_NUMERIC, "C");
$wgShellLocale = "C.UTF-8";


# $wgShowExceptionDetails = true;
# $wgDebugToolbar = true;
# $wgShowDebug = true;
# $wgDevelopmentWarnings = true;
# $wgDebugLogFile = "/var/log/mw/debug-{$wgDBname}.log";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgSecretKey = "6db81647da71e497314fb881edf845dec4eb1520bf68bb227d9d8c7c60c8918b";
$wgUpgradeKey = "3a7e689f2b592f88";

require_once "Local_Skins.php";
require_once "Local_Permissions.php";

# Per wiki permission overrides