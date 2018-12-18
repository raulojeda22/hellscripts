<?php


if ($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['HTTP_HOST']=='127.0.0.1'){
    define('_PUBLIC_URL_','http://'.$_SERVER['HTTP_HOST'].'/hellscripts/www');
    define('_PROJECT_URL_','http://'.$_SERVER['HTTP_HOST'].'/hellscripts/www');    
}else {
    define('_PUBLIC_URL_','https://'.$_SERVER['HTTP_HOST']);
    define('_PROJECT_URL_','https://'.$_SERVER['HTTP_HOST'].'/www');    
}


?>