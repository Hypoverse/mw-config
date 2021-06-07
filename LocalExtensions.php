<?php
/*
 * Common Extensions Settings
 */
//Global Extensions
// wfLoadExtension( 'GlobalUserrights' );
//wfLoadExtension( 'Antispam' ); // No $wgCTAccessKey
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'CheckUser' );
$wgCheckUserEnableSpecialInvestigate = true;
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'CreatePageUw' );
wfLoadExtension( 'GlobalCssJs' );
wfLoadExtension( 'Editcount' );
wfLoadExtension( 'ProtectSite' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'SimpleBatchUpload' );
//wfLoadExtension( 'EditAccount' );
wfLoadExtension( 'DPLforum' );
wfLoadExtension( 'StaffPowers' );
wfLoadExtension( 'VoteNY' );
wfLoadExtension( 'Comments' );
//wfLoadExtension( 'BlogPage' );
wfLoadExtension( 'UserMerge' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'Maintenance' );
//wfLoadExtension( 'RegexBlock' );
wfLoadExtension( 'WikiEditor' );
//wfLoadExtension( 'MessageCommons' );
//wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/QuestyCaptcha' ]);
//wfLoadExtension( 'GlobalContribs' );
//wfLoadExtension( 'GlobalContributions' );
wfLoadExtension( 'SimpleBatchUpload' );
wfLoadExtension( 'AdminLinks' );
//wfLoadExtension( 'BatchUserRights' );
//$wgGroupPermissions['bureaucrat']['batchuserrights'] = false;
wfLoadExtension( 'CookieWarning' );
$wgCookieWarningEnabled = true;
wfLoadExtension( 'LoginNotify' );

// Add your questions in LocalSettings.php using this format:
/* //$wgCaptchaQuestions = [
	'What is the capital of Michigan?' => 'Lansing',
	'What is the capital of Ohio' => 'Columbus',
	'What is the name of this wiki?' => $wgSitename,
	'What is the purpose of this wiki?' =>  'To create hypothetical scenarios' , 
];// */

$wgAbuseFilterCentralDB = $hvInstallationPrefix . 'meta_wiki';
$wgAbuseFilterIsCentral = true;
//$wgMessageCommonsDatabase = $hvInstallationPrefix . 'meta_wiki';
//$wgMessageCommonsLang = "en";

$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgHiddenPrefs[] = 'usebetatoolbar';

$wgTitleBlacklistLogHits = true;
//$wgTitleBlacklistBlockAutoAccountCreation = true;

/* //
require_once "$IP/extensions/ConfirmAccount/ConfirmAccount.php";
 $wgRejectedAccountMaxAge = 3600 * 12; // 12 hours
 $wgConfirmAccountContact = 'admin@hypoverse.org';
 $wgMakeUserPageFromBio = false;
 $wgAutoWelcomeNewUsers = false;
 $wgConfirmAccountRequestFormItems = array(
 	'UserName'        => array( 'enabled' => true ),
 	'RealName'        => array( 'enabled' => false ),
 	'Biography'       => array( 'enabled' => true, 'minWords' => 20 ),
 	'AreasOfInterest' => array( 'enabled' => false ),
 	'CV'              => array( 'enabled' => false ),
 	'Notes'           => array( 'enabled' => true ),
 	'Links'           => array( 'enabled' => false ),
 	'TermsOfService'  => array( 'enabled' => false ),
 );
// */

require_once "$IP/extensions/OneColumnAllUsers/OneColumnAllUsers.php";
wfLoadExtension( "DisableAccount" );
//require_once "$IP/extensions/BlockBatch/BlockBatch.php";
wfLoadExtension( 'DeleteBatch' );
require_once "$IP/extensions/UndeleteBatch/UndeleteBatch.php";
$wgGroupPermissions['bureaucrat']['undeletebatch'] = false;
require_once "$IP/extensions/OnlineStatus/OnlineStatus.php";
require_once "$IP/extensions/MsUpload/MsUpload.php";
wfLoadExtension( 'Purge' );
//require_once "$IP/extensions/Lockdown/Lockdown.php";
wfLoadExtension( 'Lockdown' );
//require_once "$IP/extensions/AntiSpoof/AntiSpoof.php";
wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'TorBlock' );
//wfLoadExtension( 'MaintenanceShell' );
//$wgRegexBlockDatabase = $wgSharedDB;

$wgEchoSharedTrackingDB = $hvInstallationPrefix . 'meta_wiki';
$wgEchoPerUserBlacklist = true;
$wgEchoCrossWikiNotifications = true;
$wgEchoUseCrossWikiBetaFeature = false;

// SocialProfile
// require_once "$IP/extensions/SocialProfile/SocialProfile.php";
// require_once "$IP/extensions/SocialProfile/UserStats/EditCount.php";

wfLoadExtension( 'GlobalBlocking' );
$wgGlobalBlockingDatabase = $hvInstallationPrefix . 'globalblocking';
$wgApplyGlobalBlocks = true;
unset( $wgGroupPermissions['steward']['globalblock']);

// EasyTimeline
putenv("GDFONTPATH=/usr/share/fonts/truetype/freefont");
wfLoadExtension( 'timeline' );
$fontFile = 'ascii'; // Use the internal Ploticus font

// GlobalUserGroups
// require_once "$IP/extensions/GlobalUserGroups/GlobalUserGroups.php";
// $wgGlobalUserGroupsUseEMWT = true;

//wfLoadExtension( 'SpamBlacklist' );
//$wgSpamBlacklistFiles = array(
//   "https://meta.wikimedia.org/w/index.php?title=Spam_blacklist&action=raw&sb_ver=1",
//   "https://en.wikipedia.org/w/index.php?title=MediaWiki:Spam-blacklist&action=raw&sb_ver=1"
//);

$wgSpamRegex = "/viagra|porn|online-casino|dirare\.com|sexcluborgy\.net/";

wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

//$wgSyntaxHighlightModels = array( 'css', 'javascript', 'lua' );

wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'GlobalCssJs' );

wfLoadExtension( 'CodeEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;

//wfLoadExtension( 'Discord' );
// List webhook URLs to send notifications to (string or array containing strings)
//$wgDiscordWebhookURL = [ "" ];

//wfLoadExtension( 'Flow' );

$wgCTMinEditCount = 15;
$wgCTShowLink = false;

wfLoadExtension( 'GlobalUserPage' );
$wgGlobalUserPageAPIUrl = 'https://meta.hypoverse.org/w/api.php';
$wgGlobalUserPageDBname = $hvInstallationPrefix . 'meta_wiki';
$wgGlobalUserPageTimeout = 'default';


wfLoadExtension( 'GlobalPreferences' );

//wfLoadExtension( 'CreateWiki' );
//wfLoadExtension( 'ManageWiki' );
//$wgManageWiki = array( 'cdb' => true, 'core' => true, 'extensions' => true, 'namespaces' => true, 'permissions' => true, 'settings' => true );

//$wgManageWikiCDBDirectory = "/home/hypoverseorg/private_files/managewiki";
