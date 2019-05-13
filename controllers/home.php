<?php

require_once __DIR__.'/../functions.php';
require_once __DIR__.'/../core/bootstrap.php';
// scriptLocation('controllers/index.php');

$tasks = $app['database']->selectAll('tasks');

$users = $app['database']->selectAll('users');

require __DIR__.'/../views/index.view.php';



?>
