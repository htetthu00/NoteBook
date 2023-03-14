<?php 

use Core\App;
use Core\Database;
use Core\Validator;


if(checkUser()){
    
    $db = App::resolve(Database::class);

    $current_user = getAuthUser();

    $errors;


    if(!Validator::string($_POST['body'], 1, 1000)){
        $errors = ["The post field is required and cannot be more than 1,000 characters."];
    }

    $post = $db->query("SELECT * FROM posts WHERE id = :id AND member_id = :member_id",[
        'id' => $_POST['id'],
        'member_id' => $current_user['member_id']
    ])->findOrFail();
    
    if(empty($errors)){
        $db->query("UPDATE posts SET body = :body WHERE id = :id", [
            'body' => $_POST['body'],
            'id' => $post['id'],
        ]);
        
        setDarkSuccess("Updated post successfully");
        redirectTo('posts');
    }

} else {
    $router = new Core\Router;
    $router->abort();
}