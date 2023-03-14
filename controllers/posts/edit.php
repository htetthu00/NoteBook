<?php

use Core\App;
use Core\Database;


if(checkUser()){
    
    $db = App::resolve(Database::class);

    $current_user = getAuthUser();

    $post = $db->query("SELECT * FROM posts WHERE id = :id AND member_id = :member_id",[
        'id' => $_GET['id'],
        'member_id' => $current_user['member_id']
    ])->findOrFail();

    view('posts/edit.view.php', ['post' => $post]);
} else {
    $router = new Core\Router;
    $router->abort();
}