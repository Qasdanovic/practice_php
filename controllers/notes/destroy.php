<?php

use Core\Database;
// use Core\Response;

$config = require base_path("config/config.php");

$db = new Database($config);
$id = $_GET["id"];
// dd($_GET);



$db->query("DELETE FROM users WHERE id=?", [
    $id
]) ;

header("location:/notes");

// dd($id);



?>