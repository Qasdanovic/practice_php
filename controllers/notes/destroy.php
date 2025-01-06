<?php

use Core\App;


$db = App::container()->resolve("Core\Database");


$id = $_GET["id"];




$db->query("DELETE FROM users WHERE id=?", [
    $id
]) ;

header("location:/notes");

// dd($id);



?>