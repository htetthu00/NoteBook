<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$members = $db->query('SELECT * FROM members')->get();

$response = ['data' => $members];

echo json_encode($response);