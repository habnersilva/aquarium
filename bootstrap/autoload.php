<?php
require_once __DIR__ . "/configuration.php";
require_once __DIR__ . "/../vendor/autoload.php";


$base  = dirname($_SERVER['PHP_SELF']);

// Bibliote Klein exigi essa estruta para reconhecer as rotas
if(ltrim($base, '/')){ 

    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$route = new Framework\Aquarium\Routing\Route();

require_once __DIR__ . "/../app/routes.php";

$route->dispatch();

?>