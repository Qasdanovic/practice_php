<?php

$config = require "config/config.php";
require "Database.php";
$db = new Database($config);
require "Validator.php";

// dd(Validator::email("kasdhjgsahgsh@g.com"));

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $errors = [];


    if(! Validator::String($_POST['body'], 1, 50)){
        $errors["body"] = "body is required or more than 50";
    }


    if(empty($errors))
    {
        $db->query("INSERT INTO users(name, username, password) VALUES (?, ?, ?)", [
            $_POST['body'],
            $_POST['body'],
            $_POST['body'],
        ]);
    }

}
require "views/note-create.view.php";
