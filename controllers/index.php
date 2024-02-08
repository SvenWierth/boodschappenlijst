<?php

$groceries = $query->selectAll('groceries');

require 'views/index.view.php';