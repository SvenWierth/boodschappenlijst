<?php

// $router->define([
//     'groceries' => 'controllers/index.php',
//     'groceries/create' => 'controllers/create.php'
// ]);

$router->get('groceries', 'controllers/index.php');
$router->get('groceries/create', 'controllers/create.php');
$router->post('groceries/create/item-added', 'controllers/item-added.php');