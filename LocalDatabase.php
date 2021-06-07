<?php
/*
 * Database Settings
 */

if ((defined('MW_DEBUG') and MW_DEBUG) or (defined('MW_REMOTE_DEBUG') and MW_REMOTE_DEBUG)) {
    $wgShowExceptionDetails = true;
    $wgDebugToolbar = true;
    $wgShowDebug = true;
    $wgDevelopmentWarnings = true;

    $wgDebugDumpSql  = true;
    $wgShowSQLErrors = true;
    $wgShowDBErrorBacktrace = true;

    $wgDebugLogFile = "/tmp/mediawiki-debug-{$wgDBname}.log";
}

require_once "/home/hypoverseorg/private_files/mediawiki_mysql_20210413155249.php";

//$wgSharedDB = $hvInstallationPrefix . 'centralauth';
$wgSharedDB = $hvInstallationPrefix . 'meta_wiki';

$wgLocalDatabases = array(
    $hvInstallationPrefix . 'meta_wiki',
    $hvInstallationPrefix . 'disasters_wiki',
    $hvInstallationPrefix . 'sci_fi_wiki',
);

//Global Tables
if (!getenv('UPGRADING_WIKI')) {
    $wgSharedTables = array(
//        'actor',
//        'interwiki',
        'objectcache',
        'spoofuser', // AutoSpoof with CentralAuth
        'abuse_filter',
        'abuse_filter_action',
        'abuse_filter_history',
        'abuse_filter_log',
//        'account_requests',
//        'cu_changes',
//        'cu_log',
//        'chat_users',
//        'global_user_groups',
//        'global_block_whitelist',
//        'user',
//        'user_properties',
//        'user_system_gift',
//        'system_gift',
//        'user_board',
//        'user_gift',
//        'gift',
//        'user_profile',
//        'user_fields_privacy',
//        'user_relationship',
//        'user_relationship_request',
//        'user_points_archive',
//        'user_stats',
//        'user_points_monthly',
//        'user_points_weekly',
//        'user_system_messages',
    );
}

if (defined('USE_CENTRAL_AUTH') and USE_CENTRAL_AUTH) {
    wfLoadExtension( 'CentralAuth' );
    $wgCentralAuthCookies = true;
    $wgCentralAuthAutoNew = true;
    $wgCentralAuthPreventUnattached = true;
    $wgCentralAuthDatabase = $hvInstallationPrefix . 'centralauth';
    $wgCentralAuthAutoMigrate = true;
    $wgCentralAuthCookieDomain = '.hypoverse.org';
    $wgCentralAuthCreateOnView = true;
    $wgCentralAuthLoginWiki = $hvInstallationPrefix . 'meta_wiki';
    $wgCentralAuthSilentLogin = true;
    //$wgCentralAuthUseOldAutoLogin = false;
    //$wgCentralAuthAutoLoginWikis = $wgLocalDatabases;
    $wgCentralAuthEnableUserMerge = true;

    // https://www.mediawiki.org/wiki/Extension:CentralAuth#%22SUL2%22_behavior
    $wgCookieSameSite = 'None';
    $wgUseSameSiteLegacyCookies = true;

    $wgConf = new SiteConfiguration;
    $wgConf->settings = array(
        'wgServer' => array(
            'default' => 'https://hypoverse.org',
            $hvInstallationPrefix . 'meta_wiki' => 'https://meta.hypoverse.org',
            $hvInstallationPrefix . 'disasters_wiki' => 'https://disasters.hypoverse.org',
            $hvInstallationPrefix . 'sci_fi_wiki' => 'https://sci-fi.hypoverse.org',
        ),
        'wgCanonicalServer' => array(
            'default' => 'https://hypoverse.org',
            $hvInstallationPrefix . 'meta_wiki' => 'https://meta.hypoverse.org',
            $hvInstallationPrefix . 'disasters_wiki' => 'https://disasters.hypoverse.org',
            $hvInstallationPrefix . 'sci_fi_wiki' => 'https://sci-fi.hypoverse.org',
        ),
        'wgScriptPath' => array(
            'default' => '/w',
            $hvInstallationPrefix . 'meta_wiki' => '/w',
            $hvInstallationPrefix . 'disasters_wiki' => '/w',
            $hvInstallationPrefix . 'sci_fi_wiki' => '/w',
        ),

        'wgArticlePath' => array(
            'default' => '/wiki/$1',
            $hvInstallationPrefix . 'meta_wiki' => '/wiki/$1',
            $hvInstallationPrefix . 'disasters_wiki' => '/wiki/$1',
            $hvInstallationPrefix . 'sci_fi_wiki' => '/wiki/$1',
        ),

        'wgSitename' => array(
            'default' => 'Hypoverse',
            $hvInstallationPrefix . 'meta_wiki' => "Hypoverse Meta",
            $hvInstallationPrefix . 'disasters_wiki' => "Hypoverse Disasters",
            $hvInstallationPrefix . 'sci_fi_wiki' => "Hypoverse Sci-Fi",
        ),

        'wgLanguageCode' => array(
            'default' => '$lang',
        ),

        'wgLocalInterwiki' => array(
            'default' => '$lang',
        ),
    );

    $wgConf->wikis = $wgLocalDatabases;
    $wgConf->suffixes = array( '_wiki' );

    function efGetSiteParams( $conf, $wiki )
    {
        $site = null;
        $lang = null;
        return array(
            'suffix' => $site,
            'lang' => $lang,
            'params' => array(
                'lang' => $lang,
                'site' => $site,
                'wiki' => $wiki,
            ),
            'tags' => array(),
        );
    }

    $wgConf->siteParamsCallback = 'efGetSiteParams';

    $wgHooks['SetupAfterCache'][] = function() {
        global $wgConf, $wgDBname,
            $wgServer, $wgCanonicalServer, $wgArticlePath;
        $wgConf->settings['wgServer'][$wgDBname] = $wgServer;
        $wgConf->settings['wgCanonicalServer'][$wgDBname] = $wgCanonicalServer;
        $wgConf->settings['wgArticlePath'][$wgDBname] = $wgArticlePath;
        return true;
    };
}

