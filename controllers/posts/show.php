<?php

use Core\App;

$db = App::resolve('Core\Database');

$current_user_id = 1;

$post = $db->query("SELECT * FROM posts WHERE id = :id",['id' => $_GET['id']])->findOrFail();

$member = $db->query("SELECT * FROM members WHERE member_id = :id",['id' => $post['member_id']])->findOrFail();

authorize( $post['member_id'] == $current_user_id );

view('posts/show.view.php', ['post' => $post, 'member' => $member]);