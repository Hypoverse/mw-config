<?php
######################
## GLOBAL MW CONFIG ##
######################

require_once "LocalDatabase.php";
require_once 'LocalExtensions.php';
require_once "LocalWiki.php";
define('MW_DEBUG', false);
define('USE_CENTRAL_AUTH', true);
unset( $wgFooterIcons['poweredby'] );

# $wgWhitelistRead
$wgWhitelistRead = array(
    "Main Page", "Special:UserLogin", "Special:UserLogout"
   );

$wgCookieDomain = 'hypoverse.com';
$wgCrossSiteAJAXdomains = array( '*.hypoverse.com' );

$wgLocaltimezone = "UTC";
date_default_timezone_set( $wgLocaltimezone );

$wgEnablePartialBlocks = true;
$wgEnableUploads = true;
$wgUploadDirectory = "$IP/images";
$wgGenerateThumbnailOnParse = true;
#$wgEnableScaryTranscluding = false;
$wgIncludeLegacyJavaScript = true;
$wgDefaultSkin = "vector";
$wgSkipSkins = array( 'cologneblue', 'modern');

$wgExtensionFunctions[] = function() {
    global $wgGroupPermissions;
    
    unset(
        $wgGroupPermissions['checkuser'],
        $wgGroupPermissions['commentadmin'],
        $wgGroupPermissions['interface-admin'],
        $wgGroupPermissions['flow-bot'],
        $wgGroupPermissions['oversight'],
        $wgGroupPermissions['staff'],
        $wgGroupPermissions['steward'],
        $wgGroupPermissions['suppress']
    );
};

$wgConf = new SiteConfiguration;"

$wgConf->settings = [

## Global Settings ##

   'wgUseRCPatrol' => [
      'default' => true,
  ],
   'wgImplicitGroups' => [
      'default' => [ '*', 'user', 'autoconfirmed', 'emailconfirmed', 'extendedconfirmed' ],
  ],
   'wgUseInstantCommons' => [
      'default' => true,
  ],
   'wgCookieSetOnAutoblock' => [
      'default' => true,
  ],
   'wgAllowCopyUploads' => [
      'default' => true,
  ],
    'wgCopyUploadsFromSpecialUpload' => [
      'default' => true,
  ],
    'wgCookieSetOnIpBlock' => [
      'default' => true,
  ],
    'wgUseAjax' => [
      'default' => true,
  ],
    'wgEnableAPI' => [
      'default' => true,
  ],
    'wgEnableWriteAPI' => [
      'default' => true,
  ],
    'wgAllowUserJs' => [
      'default' => true,
  ],
    'wgAllowUserCss' => [
      'default' => true,
  ],
    'wgAllowUserCssPrefs' => [
      'default' => true,
  ],
    'wgUseSiteJs' => [
      'default' => true,
  ],
    'wgUseSiteCss' => [
      'default' => true,
  ],
    'wgAutoConfirmCount' => [
      'default' => 10,
  ],
    '$wgAutoConfirmAge' => [
      'default' => 86400*4,
  ],
    'wgBlockCIDRLimit' => [
      'default' => [
        'IPv4' => 14,
        'IPv6' => 18,
	  ],
  ],
    'wgNamespaceAliases' => [
      'default' => [
        'MW' => NS_MEDIAWIKI,
        'T'  => NS_TEMPLATE,
	  ],
  ],
    'wgNamespaceProtection' => [
      'default' => [
        'NS_TEMPLATE' => templateeditor,
       ],
  ],	     
    '+wgRestrictionLevels' => [
       'default' => [
            'autoconfirmed',
	    'extendedconfirmed',
	    'sysop',
	    'bureaucrat',
	    'wiki-leader',
	    'staff',
       ],
   ], 
    'wgFileExtensions' => [
       'default' => [ 'pdf', 'png', 'gif', 'jpg', 'jpeg', 'ico', 'svg' ],
   ],
    'wgFavicon' => [
       'default' => '$wgScriptPath/images/6/64/Favicon.ico"',
   ],
    'wgMaxImageArea' => [
        'default' => '10e7',
   ],

// Global Extension config //
	'wgManageWikiPermissionsAdditionalRights' => [
		'default' => [
			'*' => [
				'autocreateaccount' => true,
				'read' => true,
		    ],
	    ],
    ],
    'wgProtectSiteLimit' => [
	   'default' => 'indefinite',
	],
	'wgProtectSiteDefaultTimeout' => [
	   'default' => '2 hours',
	],

    '+wgSemiprotectedRestrictionLevels' => [ 
	   'default' => [ 
	     '',
		 'autoconfirmed',
		 'extendedconfirmed',
      ],
    ],
    '+wgCascadingRestrictionLevels' => [ 
	   'default' => [
	     'sysop', 
		 'bureaucrat',
		 'wiki-leader',
		 'staff',
	  ],
    ],
    'wgRestrictionTypes' => [ 
	    'default' => [
		 'create',
		 'delete',
		 'edit',
		 'move',
		 'upload',
	  ],
    ],
	'wgAccountCreationThrottle' => [
		'default' => 5,
	],
    'wgAbuseFilterCentralDB' => [
	    'default' => 'hypoverse_abusefilter',
	],
    'wgContentHandlerUseDB' => [
        'default' => true,
	],
    'wgNamespaceContentModels' => [
	    'default' => [
		 'NS_PROJECT_TALK' => 'flow-board',
         'NS_TALK'         => 'flow-board',
         'NS_USER_TALK'    => 'flow-board',
	  ], 
	],
	'wgManageWikiPermissionsAdditionalRights' => [
		'default' => [
			'*' => [
				'read' => true,
			],
	    ],
	],
  ];
