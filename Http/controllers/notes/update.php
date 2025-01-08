<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Validator;

$db = App::resolve(Database::class);

$id = $_POST["id"];

$user = $db->query("SELECT * FROM users where id=?", [$id])->fetchOne();
// dd($user);


if(! $user){
    abort(Response::FORBIDDEN);
};

$errors = [] ;

if (! Validator::String($_POST["body"], 1, 50)){
    $errors["body"] = "body connot be empty or more than 50";
};

if(count($errors)){
    return view("notes/edit.view.php", [
        "errors" => $errors,
        "user" => $user
    ]);
};


$db->query("UPDATE users set name=? WHERE id=?", [
    $_POST["body"],
    $id
]);
    
header("location:notes");
die();

?>