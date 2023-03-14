<?php 


use Core\App;

$db = App::resolve('Core\Database');

$current_user_id = 1;

$post = $db->query("SELECT * FROM posts WHERE id = :id",['id' => $_POST['id']])->findOrFail();

authorize($post['member_id'] == $current_user_id);


$db->query('DELETE FROM posts WHERE id = :id',['id' => $_POST['id'] ]);

// echo json_encode(['result' => true, 'message' => 'Note deleted successfully']);

header('location: /posts');
exit();
