<?php

use Core\App;


$db = App::container()->resolve("Core\Database");


$users = $db->query("SELECT * FROM users")->getAll();
// dd($result);


return view('notes/index.view.php', [
    'content' => "this is notes list page",
    "title" => "notes list",
    'users' => $users
]);

?>