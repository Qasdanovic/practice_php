<?php
require "functions/function.php";
// require "Routes/Route.php";

$config = require "config/config.php";

require "Database.php";

$db = new Database($config);
$result = $db->query("SELECT * FROM users")->fetchAll();

dd($result)


?>


?>