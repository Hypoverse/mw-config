<?php
/*
 * Local Wikis Setup
 */

//$hvInstallationPrefix = 'hypoverseorg_20210413155249_';
$hvInstallationPrefix = 'hypoverseorg_';

function hvCurrentWiki()
{
    $wikis = [
        'meta.hypoverse.org'        => 'meta',
        'disasters.hypoverse.org'   => 'disasters',
        'sci-fi.hypoverse.org'      => 'sci-fi',
    ];

    if ($currentWiki = getenv('CURRENT_WIKI')) {
        return $currentWiki;
    }

    if (isset($_SERVER['SERVER_NAME']) and isset($wikis[$_SERVER['SERVER_NAME']])) {
        return $wikis[$_SERVER['SERVER_NAME']];
    }

    if (isset($_SERVER['REQUEST_URI'])) {
        foreach ($wikis as $wiki) {
            if (strpos($_SERVER['REQUEST_URI'], '/' . $wiki) === 0) {
                return $wiki;
            }
        }
    }

    return 'meta';
}

require_once 'LocalWiki.' . hvCurrentWiki() . '.php';

