<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM members WHERE email = :email AND password = :password', [
    'email' => $_POST['email'],
    'password' =>  md5($_POST['password'])
])->find();


if(false != $user)
{
    $_SESSION['user'] = $user;
    setDarkSuccess('Successfully login');
    redirectTo('posts');
}else {
    // $_SESSION['errors'] = ['Incorrect username or password.'];
    setError('Incorrect username or password.');
    redirectTo('login');
}

