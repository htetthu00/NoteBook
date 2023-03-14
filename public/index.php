<?php

session_start();

require "../vendor/autoload.php";

const BASE_PATH = __DIR__.'/../';


require BASE_PATH . 'Core/function.php';

spl_autoload_register(function ($class) {
    require base_path(str_replace('\\', '/', $class).'.php');
});

require base_path('bootstrap.php');

$router = new Core\Router;

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);







// require "function.php";
// // require "Database.php";
// require "Response.php";
// require "router.php";;
// $db = new Database;

// $userInfo = $db->query("SELECT name FROM users")->fetchAll(PDO::FETCH_ASSOC);

// dd($userInfo);