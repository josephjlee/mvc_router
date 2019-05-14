<?php

require_once __DIR__.'/../functions.php';
require_once __DIR__.'/../core/bootstrap.php';
// scriptLocation('controllers/index.php');

$tasks = App::get('database')->selectAll('tasks');

$users = App::get('database')->selectAll('users');

require __DIR__.'/../views/index.view.php';



?>
