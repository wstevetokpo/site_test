<?php

    require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes/config.php';

    if ( HOME_PATH !== '/' ) {
        $requestURLe = preg_replace('#' . HOME_PATH . '#', '', $_SERVER['REQUEST_URI']);
    }
    else {
        $requestURLe = '';
        for ( $e = 1, $s = strlen($_SERVER['REQUEST_URI']); $e <= $s; $e += 1 ) {
            if ( isset($_SERVER['REQUEST_URI'][$e]) ) {
                $requestURLe .= $_SERVER['REQUEST_URI'][$e];
            }
        }
    }
        
    $requestURL = explode('/', $requestURLe);

    //Ex: 0-fr 1-section 2-param 3-value
    /* if ( in_array($requestURL[0], $les_lg) ) {
        $requestLang = $requestURL[0];
        if ( isset($requestURL[1]) AND !empty($requestURL[1]) ) {
            $requestPage = $requestURL[1];
            if ( isset($requestURL[2]) ) {
                $requestParam = $requestURL[2];
                if ( isset($requestURL[3]) ) {
                    $requestValue = $requestURL[3];
                }
            }
        }
    }
    else {
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $lang = substr($lang,0,2);
        $requestLang = $lang;
        if ( isset($requestURL[0]) AND !empty($requestURL[0]) ) {
            $requestPage = $requestURL[0];
            if ( isset($requestURL[1]) ) {
                $requestParam = $requestURL[1];
                if ( isset($requestURL[2]) ) {
                    $requestValue = $requestURL[2];
                }
            }
        }
    } */

    if ( isset($requestURL[0]) AND !empty($requestURL[0]) ) {
        $requestPage = $requestURL[0];
        if ( isset($requestURL[1]) ) {
            $requestParam = $requestURL[1];
            if ( isset($requestURL[2]) ) {
                $requestValue = $requestURL[2];
            }
        }
    }

    if ( !in_array($requestLang, $les_lg) ) {
        $requestLang = $les_lg[0];
    }

    require __DIR__ . DIRECTORY_SEPARATOR . 'includes/lang.' . $requestLang . '.php';

    if ( file_exists('content/'. $requestPage . '.php') ) {
        include_once __DIR__ . DIRECTORY_SEPARATOR . 'content/'. $requestPage . '.php';
    }
    else {
        $page_not_found = TRUE;
    }
    if ( isset($page_not_found) AND $page_not_found ) {
        include_once __DIR__ . DIRECTORY_SEPARATOR . 'content/index.php';
    }