<?php




// return [
//     "/" => base_path("controllers/index.php"),
//     "/contact" => base_path("controllers/contact.php"),
//     "/about" => base_path("controllers/about.php"),
//     "/notes" => base_path("controllers/notes/index.php"),
//     "/note" => base_path("controllers/notes/show.php"),
//     "/note/create" => base_path("controllers/notes/create.php")
// ];




$route->get("/", "controllers/index.php");
$route->get("/contact", "controllers/contact.php");
$route->get("/about", "controllers/about.php");



$route->get("/notes", "controllers/notes/index.php");
$route->get("/note", "controllers/notes/show.php");
$route->delete("/note", "controllers/notes/destroy.php");


$route->get("/note/create", "controllers/notes/create.php");

$route->post("/notes", "controllers/notes/store.php");


?>