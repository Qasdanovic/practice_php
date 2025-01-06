<?php

use Core\App;
use Core\Container;
use Core\Database;


$container = new Container();

$container->bind(Database::class, function(){
    $config = require base_path("config/config.php");

    return new Database($config);
});

// $db = $container->resolve("Core\Database");

App::setContainer($container);

// dd($container->bindings);
// dd($db);