<?php




// return [
//     "/" => base_path("controllers/index.php"),
//     "/contact" => base_path("controllers/contact.php"),
//     "/about" => base_path("controllers/about.php"),
//     "/notes" => base_path("controllers/notes/index.php"),
//     "/note" => base_path("controllers/notes/show.php"),
//     "/note/create" => base_path("controllers/notes/create.php")
// ];

use Core\Middlewares\Auth;
use Core\Middlewares\Guest;

$route->get("/", "index.php");
$route->get("/", "index.php");
$route->get("/", "index.php");
$route->get("/contact", "contact.php");
$route->get("/about", "about.php");



$route->get("/notes", "notes/index.php")->only("auth");

$route->get("/note", "notes/show.php");
$route->delete("/note", "notes/destroy.php");


$route->get("/note/create", "notes/create.php");

$route->get("/note/edit", "notes/edit.php");

$route->patch("/note", "notes/update.php");

$route->post("/notes", "notes/store.php");


$route->get("/register", "register/index.php")->only("guest");
$route->post("/register", "register/store.php");

$route->get("/login", "login/index.php")->only("guest");
$route->post("/login", "login/store.php");

$route->post("/logout", "login/destroy.php");


?>