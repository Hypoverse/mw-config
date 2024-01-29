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

$wgSitename = "Hypothetical Astronomy";
$wgMetaNamespace = "Hypothetical_Astronomy";
$wgServer = "https://astronomy.hypoverse.org";
$wgDBname = "astronomy_wiki";

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "https://meta.hypoverse.org/w/images/general/Meta/5/5d/Astronomy_Wiki_Logo.png" ];
$wgFavicon = "https://meta.hypoverse.org/w/images/general/Meta/6/64/Favicon.ico";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgSVGConverter = 'ImageMagick';
$wgImageMagickConvertCommand = "/usr/bin/convert";
// $wgUploadDirectory = "/mnt/hypoverse_images/images/general/Astronomy";
// $wgUploadPath = "{$wgScriptPath}/images/general/Astronomy";
// $wgTmpDirectory = "/mnt/hypoverse_images/images/general/Astronomy/temp";


$wgUploadDirectory = "/mnt/h_images/images/general/Astronomy";
$wgUploadPath = "{$wgScriptPath}/images/general/Astronomy";
$wgTmpDirectory = "/mnt/h_images/images/general/Astronomy/temp";
$wgThumbnailEpoch = 20230708220648;
$wgCacheEpoch = 20230708220648;
setlocale(LC_NUMERIC, "C");
$wgShellLocale = "C.UTF-8";


# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgSecretKey = "b9ff50e12f0bc062f65ff6bb76143a798975d92a4b918df07de14eb8f7471b3c";
$wgUpgradeKey = "e334645456fe7ce9";


require_once "Local_Skins.php";
require_once "Local_Permissions.php";

# Per wiki permission overrides

$wgCosmosSocialProfileTagGroups = [ 'manager', 'staff', 'sysop-global', 'consul', 'bureaucrat', 'bot', 'sysop', 'moderator', 'rollback', 'autopatrolled' ];