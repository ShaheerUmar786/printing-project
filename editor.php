<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (file_exists('php_connector.php')) {
    require('php_connector.php');
} else {
    $uri = (dirname($_SERVER['SCRIPT_NAME']) == '/') ? '/' : dirname($_SERVER['SCRIPT_NAME']) . '/';
    $scheme = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
    @header("location: " . $scheme . "://$_SERVER[HTTP_HOST]" . $uri . 'installer');
    die();
}

include('core/index.php');

?>