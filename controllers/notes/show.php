<?php

use Core\Database;
use Core\Response;

$config = require base_path("config/config.php");

$db = new Database($config);
$id = $_GET["id"];


if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $db->query("DELETE FROM users WHERE id=?", [
        $id 
    ]) ;

    header("location: /notes");
} else {

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
}
// dd($id);



?>