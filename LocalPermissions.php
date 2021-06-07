<?php
/*
 * Permissions Settings For All Wikis
*/

#All Users
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['*']['createaccount'] = false; // temporary
$wgGroupPermissions['*']['edit'] = false; // temporary
$wgGroupPermissions['*']['writeapi'] = true;

#Users
$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['user']['createaccount'] = true;
$wgGroupPermissions['user']['skipcaptcha'] = false;
$wgGroupPermissions['user']['upload'] = true;
$wgGroupPermissions['user']['upload_by_url'] = false;
$wgGroupPermissions['user']['reupload'] = true;
$wgGroupPermissions['user']['reupload-own'] = true;
$wgGroupPermissions['user']['reupload-shared'] = true;
$wgGroupPermissions['user']['move'] = true;
$wgGroupPermissions['user']['move-subpages'] = true;
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['move-categorypages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;

#Flooders
$wgGroupPermissions['flooder']['bot'] = true;

#Bots
$wgGroupPermissions['bot']['skipcaptcha'] = true;
$wgGroupPermissions['bot']['bot'] = true;
$wgGroupPermissions['bot']['noratelimit'] = true;
$wgGroupPermissions['bot']['autopatrol'] = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;

#Autoconfirmed Users
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['autoconfirmed']['purge'] = true;
$wgGroupPermissions['autoconfirmed']['upload_by_url'] = true;

#Manually Confirmed Users
$wgGroupPermissions['confirmed']['autoconfirmed'] = true;
$wgGroupPermissions['confirmed']['cleantalk-bypass'] = true;
$wgGroupPermissions['confirmed']['commentlinks'] = true;
$wgGroupPermissions['confirmed']['editsemiprotected'] = true;
$wgGroupPermissions['confirmed']['purge'] = true;
$wgGroupPermissions['confirmed']['skipcaptcha'] = true;
$wgGroupPermissions['confirmed']['templateeditor'] = true;
$wgGroupPermissions['confirmed']['upload_by_url'] = true;

#Extended Confirmed Users
$wgGroupPermissions['extconfirmed']['extconfirmed'] = true;
$wgGroupPermissions['extconfirmed']['cleantalk-bypass'] = true;
$wgGroupPermissions['extconfirmed']['templateeditor'] = true;

#Autopatrolled Group
$wgGroupPermissions['autopatrolled']['autopatrol'] = true;

#Local Rollback Group
$wgGroupPermissions['rollback']['rollback']  = true;
$wgGroupsRemoveFromSelf['rollback'] = array( 'rollback' );

#Junior Administrator Group
$wgGroupPermissions['junioradmin'] = $wgGroupPermissions['user'];
$wgGroupPermissions['junioradmin']['autoconfirmed'] = true;
$wgGroupPermissions['junioradmin']['purge'] = true;
$wgGroupPermissions['junioradmin']['patrol'] = true;
$wgGroupPermissions['junioradmin']['patrolmarks'] = true;
$wgGroupPermissions['junioradmin']['skipcaptcha'] = true;
$wgGroupPermissions['junioradmin']['rollback'] = true;
$wgGroupPermissions['junioradmin']['delete'] = true;
$wgGroupPermissions['junioradmin']['undelete'] = true;
$wgGroupPermissions['junioradmin']['deletedhistory'] = true;
$wgGroupPermissions['junioradmin']['deletedtext'] = true;
$wgGroupPermissions['junioradmin']['noratelimit'] = true;
$wgGroupPermissions['junioradmin']['autopatrol'] = true;
$wgGroupPermissions['junioradmin']['suppressredirect'] = true;
$wgGroupPermissions['junioradmin']['movefile'] = true;
$wgGroupPermissions['junioradmin']['editsemiprotected'] = true;
$wgGroupPermissions['junioradmin']['editprotected'] = true;
$wgGroupPermissions['junioradmin']['protect'] = true;
$wgGroupPermissions['junioradmin']['templateeditor'] = true;
$wgGroupPermissions['junioradmin']['extconfirmed'] = true;
$wgGroupPermissions['junioradmin']['bigdelete'] = true;

$wgGroupsRemoveFromSelf['junioradmin'] = array( 'junioradmin' );

#Administrator Group
$wgGroupPermissions['sysop'] = $wgGroupPermissions['junioradmin'];
$wgGroupPermissions['sysop']['flow-hide'] = true;
$wgGroupPermissions['sysop']['flow-edit-post'] = true;
$wgGroupPermissions['sysop']['flow-create-board'] = true;
$wgGroupPermissions['sysop']['flow-delete'] = true;
$wgGroupPermissions['sysop']['flow-lock'] = true;
$wgGroupPermissions['sysop']['adminlinks'] = true;
$wgGroupPermissions['sysop']['block'] = true;
$wgGroupPermissions['sysop']['ipblock-exempt'] = true;
$wgGroupPermissions['sysop']['unblockself'] = true;
$wgGroupPermissions['sysop']['gadgets-edit'] = true;
$wgGroupPermissions['sysop']['gadgets-definition-edit'] = true;
$wgGroupPermissions['sysop']['nuke'] = false;
$wgGroupPermissions['sysop']['createaccount'] = false;
$wgGroupPermissions['sysop']['skipcaptcha'] = true;
$wgGroupPermissions['sysop']['confirmaccount'] = false;
$wgGroupPermissions['sysop']['lookupcredentials'] = false;
$wgGroupPermissions['sysop']['requestips'] = false;
$wgGroupPermissions['sysop']['tboverride'] = false;
$wgGroupPermissions['sysop']['titleblacklistlog'] = false;
$wgGroupPermissions['sysop']['upload'] = true;
$wgGroupPermissions['sysop']['purge'] = true;
$wgGroupPermissions['sysop']['upload_by_url'] = true;
$wgGroupPermissions['sysop']['reupload'] = true;
$wgGroupPermissions['sysop']['reupload-own'] = true;
$wgGroupPermissions['sysop']['reupload-shared'] = true;
$wgGroupPermissions['sysop']['move'] = true;
$wgGroupPermissions['sysop']['movefile'] = true;
$wgGroupPermissions['sysop']['move-subpages'] = true;
$wgGroupPermissions['sysop']['move-categorypages'] = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-privatedetails'] = false;
$wgGroupPermissions['sysop']['abusefilter-view-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['extconfirmed'] = true;
$wgGroupPermissions['sysop']['managechangetags'] = true;
$wgGroupPermissions['sysop']['tech'] = true;
$wgGroupPermissions['sysop']['awardsmanage'] = false;
$wgGroupPermissions['sysop']['giftadmin'] = false;
$wgGroupPermissions['sysop']['avatarremove'] = false;
$wgGroupPermissions['sysop']['editsitecss'] = true;
$wgGroupPermissions['sysop']['editsitejs'] = true;
$wgGroupPermissions['sysop']['editsitejson'] = true;
$wgGroupPermissions['sysop']['templateeditor'] = true;
$wgGroupPermissions['sysop']['avatarremove'] = false;

$wgAddGroups['sysop'] = array( 'rollback', 'confirmed', 'autopatrolled' );
$wgGroupsAddToSelf['sysop'] = array( 'flooder' );
$wgRemoveGroups['sysop'] = array( 'rollback', 'confirmed', 'autopatrolled' );
$wgGroupsRemoveFromSelf['sysop'] = array( 'sysop' );

#Bureaucrat Group
$wgGroupPermissions['bureaucrat']['bureaucrat'] = true;
$wgGroupPermissions['bureaucrat']['deletelogentry'] = true;
$wgGroupPermissions['bureaucrat']['deleterevision'] = true;
$wgGroupPermissions['bureaucrat']['ipblock-exempt'] = true;
$wgGroupPermissions['bureaucrat']['unblockself'] = true;
$wgGroupPermissions['bureaucrat']['undeletebatch'] = true;
$wgGroupPermissions['bureaucrat']['userrights'] = false;
$wgGroupPermissions['bureaucrat']['renameuser'] = false;
$wgGroupPermissions['bureaucrat']['protectsite'] = false;
$wgGroupPermissions['bureaucrat']['createaccount'] = false;
// $wgGroupPermissions['bureaucrat']['confirmaccount'] = false;
// $wgGroupPermissions['bureaucrat']['lookupcredentials'] = false;
// $wgGroupPermissions['bureaucrat']['requestips'] = false;
$wgGroupPermissions['bureaucrat']['deletebatch'] = true;
$wgGroupPermissions['bureaucrat']['deletebatch-spoof'] = false;

$wgAddGroups['bureaucrat'] = array( 'bureaucrat', 'sysop', 'junioradmin', 'bot', 'flooder' );
$wgRemoveGroups['bureaucrat'] = array( 'sysop', 'junioradmin', 'bot', 'flooder' );
$wgGroupsRemoveFromSelf['bureaucrat'] = array( 'bureaucrat' );

#Wiki Leader(s) Group
$wgGroupPermissions['wiki-leader']['bureaucrat'] = true;
$wgGroupPermissions['wiki-leader']['ipblock-exempt'] = true;
$wgGroupPermissions['wiki-leader']['wiki-leader'] = true;
$wgGroupPermissions['wiki-leader']['protectsite'] = true;
$wgGroupPermissions['wiki-leader']['unblockself'] = true;
$wgGroupPermissions['wiki-leader']['userrights'] = false;
$wgGroupPermissions['wiki-leader']['renameuser'] = false;
$wgGroupPermissions['wiki-leader']['createaccount'] = false;
// $wgGroupPermissions['wiki-leader']['confirmaccount'] = false;
// $wgGroupPermissions['wiki-leader']['requestips'] = false;
// $wgGroupPermissions['wiki-leader']['lookupcredentials'] = false;

$wgAddGroups['wiki-leader'] = array( 'bureaucrat', 'sysop' );
$wgRemoveGroups['wiki-leader'] = array( 'bureaucrat', 'sysop' );
$wgGroupsRemoveFromSelf['wiki-leader'] = array( 'wiki-leader' );

#CheckUsers
$wgGroupPermissions['checkuser']['checkuser'] = true;
$wgGroupPermissions['checkuser']['checkuser-log'] = true;
$wgGroupPermissions['checkuser']['investigate'] = true;

#Oversight
$wgGroupPermissions['oversight']['hideuser'] = true;
$wgGroupPermissions['oversight']['suppressrevision'] = true;
$wgGroupPermissions['oversight']['viewsuppressed'] = true;
$wgGroupPermissions['oversight']['suppressionlog'] = true;
$wgGroupPermissions['oversight']['deleterevision'] = true;
$wgGroupPermissions['oversight']['deletelogentry'] = true;