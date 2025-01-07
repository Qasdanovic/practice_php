<?php

use Core\App;
use Core\Database;
use Core\Validator;

// dd(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];



//validate the inputs
$errors = [] ;

if(!Validator::email($email)){
    $errors["body"]["email"] = "please provide a valid email ! ";
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

$user = $db->query("SELECT * FROM users WHERE email=?", [
    $email
])->fetchOne();

// dd($checkEmail);


if($user){
    // $errors["check"]["email"] = "user not found";

    // return view("register/index.view.php", [
    //     "errors" => $errors
    // ]);
    $_SESSION["user"] = $user;
    header("location:/");
} else {
    $db->query("INSERT INTO users(email, password) VALUE(?,?)", [
        $email,
        $password
    ]);

    header("location:/login") ;
}


// dd("kaaayn had khona");
