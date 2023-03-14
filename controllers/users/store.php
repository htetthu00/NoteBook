<?php

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$errors;

if(!Validator::email($_POST['email'])) {
    $errors = ["Invalid Email"];
}

if(Validator::password($_POST['password'])) {
    $errors = ["Password must be at least 8 characters long."];
}

// if(0 === Validator::phone($_POST['phone'])) {
//     $errors = ["Enter valid phone number. Eg.09xxxxxxxxx"];
// }

if(empty($errors)){

    if(isset($_FILES['profile'])){
        $profile_name = 'images/'. date('Y-m-d-H:i:s') .$_FILES['profile']['name'];
        $profile_tmp = $_FILES['profile']['tmp_name'];

        move_uploaded_file($profile_tmp, $profile_name);
    }
    
    $member = $db->query("SELECT member_id FROM members")->get();

    $count= count($member) - 1;
    
    $previous_member_id = $member[$count];

    $db->query('INSERT INTO members(member_id, username, email, address, created_at, updated_at, phone, gender, password, profiles) 
                VALUES (:member_id, :username, :email, :address, :created_at, :updated_at, :phone, :gender, :password, :profiles)', [
            'member_id' => $previous_member_id['member_id'] + 1,
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'address' => $_POST['address'] == '' ? null : $_POST['address'],
            'created_at' => date('Y-m-d-H:i:s'),
            'updated_at' => date('Y-m-d-H:i:s'),
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender'],
            'password' => md5($_POST['password']),
            'profiles' => $profile_name


    ]);

    header('location: /login');
    exit();
}

$_SESSION['errors'] = $errors;
header('location: /register');
exit();