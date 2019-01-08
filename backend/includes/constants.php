<?php

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

if ($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['HTTP_HOST']=='127.0.0.1'){
    define('_PUBLIC_URL_',$protocol.$_SERVER['HTTP_HOST'].'/hellscripts');
    define('_PROJECT_URL_',$protocol.$_SERVER['HTTP_HOST'].'/hellscripts/www');    
}else {
    define('_PUBLIC_URL_',$protocol.$_SERVER['HTTP_HOST']);
    define('_PROJECT_URL_',$protocol.$_SERVER['HTTP_HOST'].'/www');    
}


?>