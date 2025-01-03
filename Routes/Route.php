

<?php

$url = parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($url);

$routes = [
    "/" => "controllers/index.php",
    "/contact" => "controllers/contact.php",
    "/about" => "controllers/about.php"
];

if (array_key_exists($url, $routes)){
    require($routes[$url]);
} else {
    abort();
}

?>