<?php
require_once './src/controller/ProductController.php';

$router->get('/', ProductController::class . '@home');
$router->get('/product/detail/{id}', ProductController::class . '@productDetail');
$router->get('/product/update/{id}', ProductController::class . '@showUpdateForm');
$router->post('/product/update/{id}', ProductController::class . '@updateProduct');
$router->post('/product/create', ProductController::class . '@create');
$router->get('/product/createPage', ProductController::class . '@createPage');
$router->get('/product/delete/{id}', ProductController::class . '@delete');