<?php

// echo("hello world");
use Core\Database;
use Core\Validator;

$config = require base_path("config/config.php");


$db = new Database($config);

// dd(Validator::email("kasdhjgsahgsh@g.com"));
$errors = [];


    if(!Validator::String($_POST['body'], 1, 50)){
        $errors["body"] = "body is required or more than 50";
    }



    if (!empty($errors)){
        // dd($errors);
        view("notes/create.view.php", $errors);
    }


    if(empty($errors))
    {
        $db->query("INSERT INTO users(name, username, password) VALUES (?, ?, ?)", [
            $_POST['body'],
            $_POST['body'],
            $_POST['body'],
        ]);
    }

    // echo "done";


    header("location: /notes");
