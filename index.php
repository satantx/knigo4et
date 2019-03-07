<?php

include_once 'app/config/bd.php';
include_once 'app/include/helpers.php';

$uri = $_SERVER['REQUEST_URI'];
$request = explode('?', $uri)[0];

ob_start();
switch ($request) {
    case '/' :
        require __DIR__ . '/app/views/pages/index.php';
        break;
    case '' :
        require __DIR__ . '/app/views/pages/index.php';
        break;
    case '/book' :
        require __DIR__ . '/app/views/pages/book.php';
        break;
    default: 
        require __DIR__ . '/app/views/pages/404.php';
        break;
}
$content = ob_get_clean();
include 'app/views/layouts/main.php';