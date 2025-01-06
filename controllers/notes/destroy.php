<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$id = $_GET["id"];




$db->query("DELETE FROM users WHERE id=?", [
    $id
]) ;

header("location:/notes");

// dd($id);



?>