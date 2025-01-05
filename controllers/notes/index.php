<?php

use Core\Database;


$config = require base_path("config/config.php");

$db = new Database($config);

$users = $db->query("SELECT * FROM users")->getAll();
// dd($result);

view('notes/index.view.php', [
    'content' => "this is notes list page",
    "title" => "notes list",
    'users' => $users
]);

?>