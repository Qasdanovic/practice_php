<?php
require "Database.php";
$config = require "config/config.php";

$db = new Database($config);

$users = $db->query("SELECT * FROM users")->getAll();
// dd($result);

$content = "this is notes page";
$title = "Notes:";
require 'views/notes.view.php';

?>