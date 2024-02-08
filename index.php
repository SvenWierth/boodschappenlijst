<?php

$query = require 'core/bootstrap.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

$uri = Request::uri();

require Router::load('routes.php')
    ->direct($uri, Request::method());