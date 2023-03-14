<?php

$router->get('/', 'controllers/index.php');
$router->get('/store', 'controllers/store.php');

//posts

$router->get('/posts', 'controllers/posts/index.php');
$router->get('/post', 'controllers/posts/show.php');
$router->get('/posts/create', 'controllers/posts/create.php');
$router->post('/posts/create', 'controllers/posts/store.php');
$router->delete('/post', 'controllers/posts/destroy.php');
$router->delete('/posts', 'controllers/posts/destroy.php');

$router->get('/post/edit', 'controllers/posts/edit.php');
$router->patch('/post', 'controllers/posts/update.php');

//Register

$router->get('/register', 'controllers/register.php');
$router->post('/users', 'controllers/users/store.php');


//login

$router->get('/login', 'controllers/login.php');
$router->get('/logout', 'controllers/logout.php');
$router->post('/auth', 'controllers/auth.php');

#user

$router->get('/users', 'controllers/users/index.php');


