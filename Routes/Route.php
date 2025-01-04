

<?php

$url = parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($url);

$routes = require "./Routes/Routes.php";

if (array_key_exists($url, $routes)){
    require($routes[$url]);
} else {
    abort(404);
}

?>