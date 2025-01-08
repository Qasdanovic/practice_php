<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\forms\LoginForm;
use Core\Authenticator;


$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();

if(! $form->validate($email, $password)){
    view("login/index.view.php", [
        'errors' => $form->errors()
    ]);
}


$auth = new Authenticator();

if($auth->attempt($email, $password)) {
    redirect("/");
}


view("login/index.view.php", [
    "error" => "email or password are incorrects!"
]);




;








