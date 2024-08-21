<?php


// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
require_once 'clientRoute.php';


// Run it!
$router->run();