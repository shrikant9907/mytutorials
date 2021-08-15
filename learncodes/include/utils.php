<?php

include_once 'constants.php';

function getSiteName($sitename = '') {
    if ($sitename) 
        return $sitename;

    return SITE_NAME;
}

function getSiteDesc($sitedesc = '') {
    if ($sitedesc) 
        return $sitedesc;

    return SITE_DESC;
}