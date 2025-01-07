<?php
session_start();


use Core\Router;

const BASE_PATH = __DIR__."/../";


require BASE_PATH."functions/function.php";
// require base_path("Database.php");



spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    // dd($class);
    require base_path($class . ".php");
});


require base_path("bootstrap.php");


// require base_path("Response.php");
// require base_path("Routes/Route.php");


$route = new Router;
// dd($route);

require base_path("Routes/Routes.php");

$url = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];


$route->route($url, $method);







?>

