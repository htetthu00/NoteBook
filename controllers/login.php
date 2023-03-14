<?php

use Core\Router;

if(checkUser()){
    $router = new Router;
    $router->abort();
}

view("login.view.php");

