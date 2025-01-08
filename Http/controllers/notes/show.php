<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve(Database::class);


$id = $_GET["id"];




$user = $db->query("SELECT * FROM users where id=?", [$id])->fetchOne();
    // dd($users);
if(! $user){
    abort(Response::FORBIDDEN);
}
    
view('notes/show.view.php', [
    'content' => "this is single note page",
    "title" => "show note",
    'user' => $user
]);

// dd($id);



?>