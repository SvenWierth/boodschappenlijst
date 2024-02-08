<?php

$app['database']->insert('groceries', [
    'name' => $_POST['name'],
    'number' => $_POST['number'],
    'price' => $_POST['price']
]);

require 'views/item-added.view.php';