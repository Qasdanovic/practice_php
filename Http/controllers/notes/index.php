<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query("SELECT * FROM users")->getAll();
// dd($result);


return view('notes/index.view.php', [
    'content' => "this is notes list page",
    "title" => "notes list",
    'users' => $users
]);

?>