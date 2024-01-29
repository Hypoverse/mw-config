 <?php

// DISABLED
//wfLoadExtension( 'AuthorProtect' );
//wfLoadExtension( 'CodeEditor' );
//wfLoadExtension( 'LocalisationUpdate' );
//wfLoadExtension( 'ProtectSite' ); # interferes with global groups
//wfLoadExtension( 'WikiForum' ); // csrf security vulnerability
//wfLoadExtension( 'SimpleBatchUpload' ); // unresolvable module ext.SimpleBatchUpload, requires php8
//$wgProtectSiteLimit = 'indefinite';
//$wgProtectSiteExempt = array( 'manager', 'staff', 'sysop-global', 'rollback-global', 'co-bureaucrat', 'bureaucrat', 'junioradmin' );
//wfLoadExtension( 'UserMerge' );
//$wgUserMergeProtectedGroups = ['sysop', 'senioradmin', 'jrbureaucrat', 'bureaucrat', 'srbureaucrat', 'bot-global', 'rollback-global', 'sysop-global', 'staff', 'manager'];
// wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/QuestyCaptcha' ]); - testing if this solves the captcha problem(s)...

wfLoadExtension("AbuseFilter");
wfLoadExtension("AdminLinks");
wfLoadExtension("Antispam");
// wfLoadExtension("ArticleToCategory2");
wfLoadExtension("CategoryTree");
wfLoadExtension("ChangeAuthor");
wfLoadExtension("CharInsert");
wfLoadExtension("CheckUser");
wfLoadExtension("Cite");
wfLoadExtension("CiteThisPage");
wfLoadExtension("CreatePageUw");
// wfLoadExtension("DataMaps");
wfLoadExtension("DeleteBatch");
wfLoadExtension("DiscussionTools");
wfLoadExtension("DisableAccount");
wfLoadExtension("DisplayTitle");
wfLoadExtension("DPLforum");
wfLoadExtension("EasyTimeline");
wfLoadExtension("Echo");
wfLoadExtension("EditCountNeue");
wfLoadExtension("FontAwesome");
wfLoadExtension("Gadgets");
wfLoadExtension("GlobalPreferences");
wfLoadExtension("Highlightjs_Integration");
wfLoadExtension("ImageMap");
wfLoadExtension("InputBox");
wfLoadExtension("Interwiki");
wfLoadExtension("InterwikiDispatcher");
wfLoadExtension("LinkSuggest");
wfLoadExtension("Linter");
// wfLoadExtension("MediaWikiChat"); # Unused. --Hypercane
wfLoadExtension("MessageCommons");
wfLoadExtension("MsCatSelect");
wfLoadExtension("MsUpload");
wfLoadExtension("MultimediaViewer");
wfLoadExtension("NativeSvgHandler");
wfLoadExtension("Nuke");
wfLoadExtension("OATHAuth");
wfLoadExtension("PageImages");
wfLoadExtension("PageForms");
wfLoadExtension("ParserFunctions");
wfLoadExtension("PdfHandler");
// wfLoadExtension("ProtectionIndicator");
wfLoadExtension("Purge");
wfLoadExtension("Renameuser");
wfLoadExtension("ReplaceText");
wfLoadExtension("RightFunctions");
wfLoadExtension("SecureLinkFixer");
wfLoadExtension("SpamBlacklist");
wfLoadExtension("StaffPowers");
wfLoadExtension("SyntaxHighlight_GeSHi");
wfLoadExtension("TemplateData");
wfLoadExtension("TemplateStyles");
wfLoadExtension("TextExtracts");
wfLoadExtension("Thanks");
wfLoadExtension("TitleBlacklist");
wfLoadExtension("WikiEditor");
wfLoadExtension("VisualEditor");

// EXTENSION CONFIGURATION

// $wgDataMapsNamespaceId = 126;
// $wgDataMapsEnableCreateMap = true;
// $wgDataMapsEnableVisualEditor = true;


$wgGlobalPreferencesDB = "meta_wiki";

/***
 $wgCaptchaQuestions = [
	"" => "",
	"" => "",
];
$wgCaptchaTriggers['badlogin'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['edit'] = false;
$wgCaptchaTriggers['create'] = false;
$wgCaptchaTriggers['createtalk'] = false;
***/

$wgParsoidSettings = ['linting' => true];

wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoEngineConf['luastandalone']['luaPath'] = '/usr/bin/lua5.1';
$wgScribuntoEngineConf['luastandalone']['cpuLimit'] = 20;
$wgScribuntoEngineConf['luastandalone']['memoryLimit'] = 52428800;
// $wgScribuntoEngineConf['luastandalone']['errorFile'] = "/var/log/mw/debug-lua.log";

// AbuseFilter
$wgAbuseFilterEmergencyDisableThreshold = [
    'default' => false
];

// Antispam
$wgCTAccessKey = "nutuzybe7ara";
$wgCTShowLink = false;

// ArticleToCategory2
// $wgArticleToCategory2ConfigBlacklist = true;

// CheckUser
$wgCheckUserEnableSpecialInvestigate = true;
$wgCheckUserForceSummary = true;

// DisplayTitle
$wgAllowDisplayTitle = true; // defaults to true
$wgRestrictDisplayTitle = false; // defaults to true

// Interwiki
$wgInterwikiCentralDB = 'meta_wiki';

// InterwikiDispatcher
$wgIWDPrefixes = [
  # [[mh:meta]] => https://meta.miraheze.org/wiki/
  # [[mh:meta:Miraheze]] => https://meta.miraheze.org/wiki/Miraheze
  'miraheze' => [
    'interwiki' => 'mh',
    'url' => 'https://$2.miraheze.org/wiki/$1',
	  'dbname' => '$2wiki',
	  'baseTransOnly' => true,
  ],
  # [[fandom:minecraft]] => https://minecraft.fandom.com/wiki/
  # [[fandom:minecraft:Cookie]] => https://minecraft.fandom.com/wiki/Cookie
  # [[fandom:de.minecraft:Keks]] => https://minecraft.fandom.com/de/wiki/Keks
  'fandom' => [
    'interwiki' => 'fandom',
    'url' => 'https://$2.fandom.com/wiki/$1',
    'urlInt' => 'https://$2.fandom.com/$3/wiki/$1',
  ],
];

// LinkSuggest
$wgLinkSuggestFromNamespaces = [ NS_MAIN, NS_PROJECT ];

// MessageCommons
$wgMessageCommonsDatabase = 'meta_wiki';
$wgMessageCommonsLang = 'en';


// MSCatSelect
// $wgMSCS_WarnNoCategories = false;

// OATHAuth
$wgOATHAuthDatabase = 'meta_wiki';
$wgOATHExclusiveRights = ['checkuser', 'checkuser-log', 'investigate', 'suppressionlog', 'suppressrevision', 'viewsuppressed'];
$wgOATHRequiredForGroups = ['staff', 'manager'];

// PluggableAuth
## $wgPluggableAuth_EnableAutoLogin = true;
## $wgPluggableAuth_EnableLocalLogin = true;

// RegexBlock
$wgRegexBlockDatabase = $wgSharedDB;

// RightFunctions
$wgRightFunctionsUserGroups = array( '*', 'user', 'moderator', 'sysop', 'bureaucrat', 'consul', 'sysop-global', 'staff', 'manager' );

// Scribunto
$wgScribuntoEngineConf['luastandalone']['cpuLimit'] = 15;

// StaffPowers
$wgStaffPowersStewardGroupName = false;
//$wgShowExceptionDetails = true;

// Timeline
$wgTimelineTimelineFile = "$IP\\extensions\\EasyTimeline\\EasyTimeline.pl";
$wgTimelinePloticusCommand = "/usr/bin/ploticus";
$wgTimelinePerlCommand = "/usr/bin/perl";
$wgTimelineFontDirectory = '/usr/share/fonts/truetype/freefont';
//putenv("GDFONTPATH=/usr/share/fonts/truetype/freefont"); 
$MapPNG = true;
$wgShellboxUrls = [
//	'default' => 'http://shellbox.hypoverse.org/shellbox'
];
$wgShellboxSecretKey = '47b91e9ffa2edec994bd38435454da55';

require_once( "$IP/extensions/GlobalUserGroups/GlobalUserGroups.php" );
// use extra translations for various user group names and similars
$wgGlobalUserGroupsUseEMWT = true;
// the following groups are defined as global, and intend to award on Special:UserRights listed in all the databases in $wgLocalDatabases are entered into the table 'user_groups' for each user
// for example:

$wgLocalDatabases = array(
	'meta_wiki',
	'staff_wiki',
	'astronomy_wiki',
	'disasters_wiki',
	'events_wiki',
  'sports_wiki',
	'test_wiki',
	'writersRoundtable_wiki',
);

$wgGlobalUserGroups = array(
    'bot-global',
    'manager',
    'SRE',
    'sysop-global',
    'staff',
);

wfLoadExtension( 'GlobalBlocking' );
$wgGlobalBlockingDatabase = 'globalblocking';
$wgGlobalBlockingBlockXFF = true;
$wgApplyGlobalBlocks = [
	'meta_wiki',
	'astronomy_wiki',
	'disasters_wiki',
	'events_wiki',
	'sports_wiki',
	'writersRoundtable_wiki',
];
$wgGlobalBlockingApplyUsernameBlocks = [
	'meta_wiki',
	'astronomy_wiki',
	'disasters_wiki',
	'events_wiki',
	'sports_wiki',
	'writersRoundtable_wiki',
];