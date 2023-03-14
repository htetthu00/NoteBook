<?php


use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');


    $errors;


    if(!Validator::string($_POST['body'], 1, 1000)){
        $errors = ["The post field is required and cannot be more than 1,000 characters."];
    }

    if(empty($errors)){
        $db->query('INSERT INTO posts(body, member_id) VALUES (:body, :member_id)', [
            'body' => $_POST['body'],
            'member_id' => 1   //rand(1,6)
        ]);

        $_POST['body'] = '';

        header('location: /posts');
        exit();
    }

    $_SESSION['errors'] = $errors;

    header('location: /posts/create');
    exit();

