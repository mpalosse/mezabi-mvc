<?php
const PREFIX_TO_RELATIVE_PATH = "/mezabi";
require $_SERVER[ 'DOCUMENT_ROOT' ] . PREFIX_TO_RELATIVE_PATH . '/lib/vendor/autoload.php';

use application\DefaultComponentFactory;
use yasmf\DataSource;
use yasmf\Router;

$dataSource = new DataSource(
    $host = 'mezabi-db',
    $port = '3306', 
    $db = 'mezabi-db', 
    $user = 'mezabi-user', 
    $pass = 'mezabi-password', 
    $charset = 'utf8mb4'
);

$router = new Router(new DefaultComponentFactory(), $dataSource) ;
$router->route(PREFIX_TO_RELATIVE_PATH, $dataSource);
