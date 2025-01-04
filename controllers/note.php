<?php
require "Database.php";
$config = require "config/config.php";

$db = new Database($config);
$id = $_GET["id"];
// dd($id);
$user = $db->query("SELECT * FROM users where id=?", [$id])->fetchOne();
// dd($users);
if(! $user){
    abort(Response::FORBIDDEN);
}


$content = "this is notes page";
$title = "Notes:";
require 'views/note.view.php';

?>