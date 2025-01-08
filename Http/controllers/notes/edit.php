<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve(Database::class);


$id = $_GET["id"];




$user = $db->query("SELECT * FROM users where id=?", [$id])->fetchOne();


if(! $user){
    abort(Response::FORBIDDEN);
}

$errors = [];


view('notes/edit.view.php', [
    "errors" => $errors,
    "user" => $user
]);