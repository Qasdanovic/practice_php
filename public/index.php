<?php

const BASE_PATH = __DIR__."/../";

require BASE_PATH."functions/function.php";
// require base_path("Database.php");



spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    // dd($class);
    require base_path($class . ".php");
});



// require base_path("Response.php");
require base_path("Routes/Route.php");





?>

