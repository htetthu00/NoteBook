<?php

if(false == isset($_SESSION['user'])){
    $router = new Core\Router;
    $router->abort(403);
}

use Core\App;

$db = App::resolve('Core\Database');


$posts = $db->query("SELECT * FROM posts WHERE member_id = 1")->get();


view('posts/index.view.php', ['posts' => $posts]);
