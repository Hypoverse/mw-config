<?php
# Permissions across the network

# All Users
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['autocreateaccount'] = true;
$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['writeapi'] = true;

# Users
$wgGroupPermissions['user']['ArticleToCategory2'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['user']['editusertalk'] = true;
$wgGroupPermissions['user']['edittalk'] = true;
$wgGroupPermissions['user']['createaccount'] = false;
$wgGroupPermissions['user']['move'] = true;
$wgGroupPermissions['user']['move-subpages'] = true;
$wgGroupPermissions['user']['move-categorypages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['sendemail'] = true;
$wgGroupPermissions['user']['skipcaptcha'] = false;
$wgGroupPermissions['user']['upload'] = true;
$wgGroupPermissions['user']['upload_by_url'] = true;
$wgGroupPermissions['user']['reupload'] = true;
$wgGroupPermissions['user']['reupload-own'] = true;
$wgGroupPermissions['user']['reupload-shared'] = true;
$wgGroupPermissions['user']['writeapi'] = true;

# Flooders
$wgGroupPermissions['flooder']['bot'] = true;
$wgGroupPermissions['flooder']['noratelimit'] = true;

# Bots
$wgGroupPermissions['bot']['autopatrol'] = true;
$wgGroupPermissions['bot']['bot'] = true;
$wgGroupPermissions['bot']['edit'] = true;
$wgGroupPermissions['bot']['noratelimit'] = true;
$wgGroupPermissions['bot']['skipcaptcha'] = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;

# Autoconfirmed Users
$wgGroupPermissions['autoconfirmed']['cleantalk-bypass'] = true;
$wgGroupPermissions['autoconfirmed']['edittemplates'] = false;
$wgGroupPermissions['autoconfirmed']['purge'] = true;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['autoconfirmed']['upload_by_url'] = true;

# Manually Confirmed Users
$wgGroupPermissions['confirmed']['autoconfirmed'] = true;
$wgGroupPermissions['confirmed']['cleantalk-bypass'] = true;
$wgGroupPermissions['confirmed']['editsemiprotected'] = false;
$wgGroupPermissions['confirmed']['edittemplates'] = false;
$wgGroupPermissions['confirmed']['purge'] = true;
$wgGroupPermissions['confirmed']['skipcaptcha'] = true;
$wgGroupPermissions['confirmed']['upload_by_url'] = true;

# Extended Confirmed Users
$wgGroupPermissions['extendedconfirmed']['extendedconfirmed'] = true;

# Autopatrolled Group
$wgGroupPermissions['autopatrolled']['autopatrol'] = true;

# Rollbacker Group
$wgGroupPermissions['rollback']['rollback']  = true;
$wgGroupsRemoveFromSelf['rollback'] = array( 'rollback' );

# Moderator Group
$wgGroupPermissions['moderator'] = $wgGroupPermissions['user'];
$wgGroupPermissions['moderator']['ArticleToCategory2AddCat'] = true;
$wgGroupPermissions['moderator']['autoconfirmed'] = true;
$wgGroupPermissions['moderator']['autopatrol'] = true;
$wgGroupPermissions['moderator']['block'] = true;
$wgGroupPermissions['moderator']['blockemail'] = true;
$wgGroupPermissions['moderator']['delete'] = true;
$wgGroupPermissions['moderator']['deletedhistory'] = true;
$wgGroupPermissions['moderator']['deletedtext'] = true;
$wgGroupPermissions['moderator']['edittemplates'] = true;
$wgGroupPermissions['moderator']['extendedconfirmed'] = true;
$wgGroupPermissions['moderator']['import'] = true;
$wgGroupPermissions['moderator']['importupload'] = true;
$wgGroupPermissions['moderator']['markbotedits'] = true;
$wgGroupPermissions['moderator']['moderator'] = true;
$wgGroupPermissions['moderator']['movefile'] = true;
$wgGroupPermissions['moderator']['noratelimit'] = true;
$wgGroupPermissions['moderator']['patrol'] = true;
$wgGroupPermissions['moderator']['patrolmarks'] = true;
$wgGroupPermissions['moderator']['protect'] = true;
$wgGroupPermissions['moderator']['purge'] = true;
$wgGroupPermissions['moderator']['rollback'] = true;
$wgGroupPermissions['moderator']['skipcaptcha'] = true;
$wgGroupPermissions['moderator']['suppressredirect'] = true;
$wgGroupPermissions['moderator']['unblockself'] = true;
$wgGroupPermissions['moderator']['undelete'] = true;

$wgGroupsRemoveFromSelf['moderator'] = array( 'moderator' );

# Administrator Group
$wgGroupPermissions['sysop'] = $wgGroupPermissions['moderator'];
$wgGroupPermissions['sysop']['abusefilter-log-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-privatedetails'] = false;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['abusefilter-view-private'] = false;
$wgGroupPermissions['sysop']['adminlinks'] = true;
$wgGroupPermissions['sysop']['ArticleToCategory2AddCat'] = true;
$wgGroupPermissions['sysop']['block'] = true;
$wgGroupPermissions['sysop']['createaccount'] = false;
$wgGroupPermissions['sysop']['deletebatch'] = true;
$wgGroupPermissions['sysop']['editinterface'] = true;
$wgGroupPermissions['sysop']['editprotected'] = true;
$wgGroupPermissions['sysop']['editsitecss'] = true;
$wgGroupPermissions['sysop']['editsitejs'] = true;
$wgGroupPermissions['sysop']['editsitejson'] = true;
$wgGroupPermissions['sysop']['edittemplates'] = true;
$wgGroupPermissions['sysop']['extendedconfirmed'] = true;
$wgGroupPermissions['sysop']['import'] = true;
$wgGroupPermissions['sysop']['importupload'] = true;
$wgGroupPermissions['sysop']['ipblock-exempt'] = true;
$wgGroupPermissions['sysop']['managechangetags'] = true;
$wgGroupPermissions['sysop']['markbotedits'] = true;
$wgGroupPermissions['sysop']['moderator'] = true;
$wgGroupPermissions['sysop']['move'] = true;
$wgGroupPermissions['sysop']['movefile'] = true;
$wgGroupPermissions['sysop']['move-categorypages'] = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['move-subpages'] = true;
$wgGroupPermissions['sysop']['nuke'] = false;
$wgGroupPermissions['sysop']['purge'] = true;
$wgGroupPermissions['sysop']['reupload'] = true;
$wgGroupPermissions['sysop']['reupload-own'] = true;
$wgGroupPermissions['sysop']['reupload-shared'] = true;
$wgGroupPermissions['sysop']['skipcaptcha'] = true;
$wgGroupPermissions['sysop']['tboverride'] = false;
$wgGroupPermissions['sysop']['titleblacklistlog'] = false;
$wgGroupPermissions['sysop']['unblockself'] = true;
$wgGroupPermissions['sysop']['upload'] = true;
$wgGroupPermissions['sysop']['upload_by_url'] = true;

$wgAddGroups['sysop'] = array( 'moderator', 'rollback', 'confirmed', 'autopatrolled', 'flooder' );
$wgRemoveGroups['sysop'] = array( 'moderator', 'rollback', 'confirmed', 'autopatrolled', 'flooder' );
$wgGroupsAddToSelf['sysop'] = array( 'flooder' );
$wgGroupsRemoveFromSelf['sysop'] = array( 'sysop', 'flooder' );

# Bureaucrat Group
$wgGroupPermissions['bureaucrat']['adminlinks'] = true;
$wgGroupPermissions['bureaucrat']['bureaucrat'] = true;
$wgGroupPermissions['bureaucrat']['createaccount'] = false;
$wgGroupPermissions['bureaucrat']['deletelogentry'] = true;
$wgGroupPermissions['bureaucrat']['deleterevision'] = true;
$wgGroupPermissions['bureaucrat']['noratelimit'] = true;
$wgGroupPermissions['bureaucrat']['nuke'] = true;
$wgGroupPermissions['bureaucrat']['skipcaptcha'] = true;
$wgGroupPermissions['bureaucrat']['unblockself'] = true;
$wgGroupPermissions['bureaucrat']['userrights'] = false;

$wgAddGroups['bureaucrat'] = array( 'bureaucrat', 'sysop', 'bot' );
$wgRemoveGroups['bureaucrat'] = array( 'sysop', 'bot' );
$wgGroupsRemoveFromSelf['bureaucrat'] = array( 'bureaucrat' );

# Consul Group
$wgGroupPermissions['consul']['consul'] = true;
$wgGroupPermissions['consul']['createaccount'] = false;
$wgGroupPermissions['consul']['noratelimit'] = true;
$wgGroupPermissions['consul']['unblockself'] = true;
$wgGroupPermissions['consul']['userrights'] = false;

$wgAddGroups['consul'] = array( 'bureaucrat' );
$wgRemoveGroups['consul'] = array( 'bureaucrat' );
$wgGroupsRemoveFromSelf['consul'] = array( 'consul' );

# Global Bots
$wgGroupPermissions['bot-global']['autopatrol'] = true;
$wgGroupPermissions['bot-global']['bot'] = true;
$wgGroupPermissions['bot-global']['edit'] = true;
$wgGroupPermissions['bot-global']['noratelimit'] = true;
$wgGroupPermissions['bot-global']['skipcaptcha'] = true;
$wgGroupPermissions['bot-global']['suppressredirect'] = true;

# Global Administrators 
$wgGroupPermissions['sysop-global'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions['sysop-global']['cleantalk-bypass'] = true;
$wgGroupPermissions['sysop-global']['deletebatch'] = true;
$wgGroupPermissions['sysop-global']['extendedconfirmed'] = true;
$wgGroupPermissions['sysop-global']['globalblock'] = true;
$wgGroupPermissions['sysop-global']['globalblock-whitelist'] = true;
$wgGroupPermissions['sysop-global']['globalblock-exempt'] = true;
$wgGroupPermissions['sysop-global']['markbotedits'] = true;
$wgGroupPermissions['sysop-global']['moderator'] = true;
$wgGroupPermissions['sysop-global']['nuke'] = true;
$wgGroupPermissions['sysop-global']['unblockself'] = true;

$wgGroupsAddToSelf['sysop-global'] = array( 'flooder' );
$wgGroupsRemoveFromSelf['sysop-global'] = array( 'sysop-global', 'flooder' );

# Staff
$wgGroupPermissions['staff'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions["staff"]["apihighlimits"] = true;
$wgGroupPermissions['staff']['ArticleToCategory2AddCat'] = true;
$wgGroupPermissions['staff']['bureaucrat'] = true;
$wgGroupPermissions['staff']['changeauthor'] = true;
$wgGroupPermissions['staff']['checkuser'] = true;
$wgGroupPermissions['staff']['checkuser-log'] = true;
$wgGroupPermissions['staff']['cleantalk-bypass'] = true;
$wgGroupPermissions['staff']['consul'] = true;
$wgGroupPermissions['staff']['deletebatch'] = true;
$wgGroupPermissions['staff']['deletelogentry'] = true;
$wgGroupPermissions['staff']['deleterevision'] = true;
$wgGroupPermissions['staff']['disableaccount'] = true;
$wgGroupPermissions['staff']['editinterface'] = true;
$wgGroupPermissions['staff']['editprotected'] = true;
$wgGroupPermissions['staff']['editsitecss'] = true;
$wgGroupPermissions['staff']['editsitejs'] = true;
$wgGroupPermissions['staff']['editsitejson'] = true;
$wgGroupPermissions['staff']['edittemplates'] = true;
$wgGroupPermissions['staff']['editusercss'] = true;
$wgGroupPermissions['staff']['edituserjs'] = true;
$wgGroupPermissions['staff']['edituserjson'] = true;
$wgGroupPermissions['staff']['extendedconfirmed'] = true;
$wgGroupPermissions['staff']['globalblock'] = true;
$wgGroupPermissions['staff']['globalblock-whitelist'] = true;
$wgGroupPermissions['staff']['globalblock-exempt'] = true;
$wgGroupPermissions['staff']['hideuser'] = true;
$wgGroupPermissions['staff']['import'] = true;
$wgGroupPermissions['staff']['importupload'] = true;
$wgGroupPermissions['staff']['interwiki'] = true;
$wgGroupPermissions['staff']['investigate'] = true;
$wgGroupPermissions['staff']['managechangetags'] = true;
$wgGroupPermissions['staff']['markbotedits'] = true;
$wgGroupPermissions['staff']['moderator'] = true;
$wgGroupPermissions['staff']['nuke'] = true;
$wgGroupPermissions['staff']['oathauth-disable-for-user'] = true;
$wgGroupPermissions['staff']['oathauth-verify-user'] = true;
$wgGroupPermissions['staff']['oathauth-view-log'] = true;
$wgGroupPermissions['staff']['protectsite'] = true;
$wgGroupPermissions['staff']['purge'] = true;
$wgGroupPermissions['staff']['renameuser'] = true;
$wgGroupPermissions['staff']['replacetext'] = true;
$wgGroupPermissions['staff']['suppressionlog'] = true;
$wgGroupPermissions['staff']['suppressrevision'] = true;
$wgGroupPermissions['staff']['sre'] = true;
$wgGroupPermissions['staff']['staff'] = true;
$wgGroupPermissions['staff']['tech'] = true;
$wgGroupPermissions['staff']['themedesigner'] = true;
$wgGroupPermissions['staff']['unblockable'] = true;
$wgGroupPermissions['staff']['userrights'] = false;
$wgGroupPermissions['staff']['userrights-interwiki'] = false;
$wgGroupPermissions['staff']['viewpmlog'] = true;
$wgGroupPermissions['staff']['viewsuppressed'] = true;

$wgAddGroups['staff'] = array( 'sysop-global', 'bureaucrat', 'sysop', 'moderator', 'rollback', 'autopatrolled', 'confirmed', 'bannedfromchat-global', 'bannedfromchat', 'bot-global', 'bot', 'flooder' );
$wgRemoveGroups['staff'] = array( 'sysop-global', 'bureaucrat', 'sysop', 'moderator', 'rollback', 'autopatrolled', 'confirmed', 'bannedfromchat-global', 'bannedfromchat', 'bot-global', 'bot', 'flooder' );
$wgGroupsRemoveFromSelf['staff'] = array( 'staff' );

# IT Staff
$wgGroupPermissions['SRE']['import'] = true;
$wgGroupPermissions['SRE']['apihighlimits'] = true;
$wgGroupPermissions['SRE']['autopatrol'] = true;
$wgGroupPermissions['SRE']['editcontentmodel'] = true;
$wgGroupPermissions['SRE']['editinterface'] = true;
$wgGroupPermissions['SRE']['edit-restricted-interface'] = true;
$wgGroupPermissions['SRE']['editsitecss'] = true;
$wgGroupPermissions['SRE']['editsitejs'] = true;
$wgGroupPermissions['SRE']['editsitejson'] = true;
$wgGroupPermissions['SRE']['edittemplates'] = true;
$wgGroupPermissions['SRE']['editusercss'] = false;
$wgGroupPermissions['SRE']['edituserjs'] = false;
$wgGroupPermissions['SRE']['edituserjson'] = false;
$wgGroupPermissions['SRE']['import'] = false;
$wgGroupPermissions['SRE']['importupload'] = false;
$wgGroupPermissions['SRE']['noratelimit'] = true;
$wgGroupPermissions['SRE']['purge'] = true;
$wgGroupPermissions['SRE']['tech'] = true; 
$wgGroupPermissions['SRE']['sre'] = true;
$wgGroupPermissions['SRE']['writeapi'] = true;
$wgAddGroups['SRE'] = false;
$wgRemoveGroups['SRE'] = false;
$wgGroupsRemoveFromSelf['SRE'] = array( 'SRE' );

# Manager(s)
$wgGroupPermissions['manager'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions['manager']['apihighlimits'] = true;
$wgGroupPermissions['manager']['ArticleToCategory2AddCat'] = true;
$wgGroupPermissions['manager']['bureaucrat'] = true;
$wgGroupPermissions['manager']['changeauthor'] = true;
$wgGroupPermissions['manager']['checkuser'] = true;
$wgGroupPermissions['manager']['checkuser-log'] = true;
$wgGroupPermissions['manager']['cleantalk-bypass'] = true;
$wgGroupPermissions['manager']['consul'] = true;
$wgGroupPermissions['manager']['deletebatch'] = true;
$wgGroupPermissions['manager']['deletelogentry'] = true;
$wgGroupPermissions['manager']['deleterevision'] = true;
$wgGroupPermissions['manager']['disableaccount'] = true;
$wgGroupPermissions['manager']['editinterface'] = true;
$wgGroupPermissions['manager']['editprotected'] = true;
$wgGroupPermissions['manager']['editsitecss'] = true;
$wgGroupPermissions['manager']['editsitejs'] = true;
$wgGroupPermissions['manager']['editsitejson'] = true;
$wgGroupPermissions['manager']['edittemplates'] = true;
$wgGroupPermissions['manager']['editusercss'] = true;
$wgGroupPermissions['manager']['edituserjs'] = true;
$wgGroupPermissions['manager']['edituserjson'] = true;
$wgGroupPermissions['manager']['extendedconfirmed'] = true;
$wgGroupPermissions['manager']['globalblock'] = true;
$wgGroupPermissions['manager']['globalblock-whitelist'] = true;
$wgGroupPermissions['manager']['globalblock-exempt'] = true;
$wgGroupPermissions['manager']['hideuser'] = true;
$wgGroupPermissions['manager']['import'] = true;
$wgGroupPermissions['manager']['importupload'] = true;
$wgGroupPermissions['manager']['interwiki'] = true;
$wgGroupPermissions['manager']['investigate'] = true;
$wgGroupPermissions['manager']['managechangetags'] = true;
$wgGroupPermissions['manager']['manager'] = true;
$wgGroupPermissions['manager']['markbotedits'] = true;
$wgGroupPermissions['manager']['moderator'] = true;
$wgGroupPermissions['manager']['nuke'] = true;
$wgGroupPermissions['manager']['oathauth-disable-for-user'] = true;
$wgGroupPermissions['manager']['oathauth-verify-user'] = true;
$wgGroupPermissions['manager']['oathauth-view-log'] = true;
$wgGroupPermissions['manager']['protectsite'] = true;
$wgGroupPermissions['manager']['purge'] = true;
$wgGroupPermissions['manager']['renameuser'] = true;
$wgGroupPermissions['manager']['replacetext'] = true;
$wgGroupPermissions['manager']['sre'] = true;
$wgGroupPermissions['manager']['suppressionlog'] = true;
$wgGroupPermissions['manager']['suppressrevision'] = true;
$wgGroupPermissions['manager']['staff'] = true;
$wgGroupPermissions['manager']['tech'] = true;
$wgGroupPermissions['manager']['themedesigner'] = true;
$wgGroupPermissions['manager']['unblockable'] = true;
$wgGroupPermissions['manager']['userrights-interwiki'] = true;
$wgGroupPermissions['manager']['viewpmlog'] = true;
$wgGroupPermissions['manager']['viewsuppressed'] = true;

$wgAddGroups['manager'] = true;
$wgRemoveGroups['manager'] = true;

# Temporary group (to use when new wikis get added)
# $wgGroupPermissions['h-manager']['userrights'] = true;