<?php

use Core\App;
use Core\Database;
use Core\Validator;

// dd(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];



//validate the inputs
$errors = [] ;

if(!Validator::String($email, 6, 50)){
    $errors["body"]["email"] = "email cannot be empty or more less than 6 chars";
};

if(!Validator::String($password, 6, 50)){
    $errors["body"]["password"] = "password cannot be empty or more less than 6 chars";
}

if(count($errors))
{
    return view("register/index.view.php", [
        "errors" => $errors
    ]);
    die();
}


$db = App::resolve(Database::class);

$checkEmail = $db->query("SELECT * FROM users WHERE email=?", [
    $email
])->fetchOne();

// dd($checkEmail);


if(! $checkEmail){
    $errors["check"]["email"] = "user not found";

    return view("register/index.view.php", [
        "errors" => $errors
    ]);
}


dd("kaaayn had khona");
