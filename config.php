<?php

return [
    'database' => [
        'name' => 'sven_boodschappenlijst',
        'username' => 'root',
        'password' => 'root',
        "connection" => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];