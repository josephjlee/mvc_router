<?php

require_once __DIR__.'/../functions.php';
// scriptLocation('controllers/index.php');

$tasks = $app['database']->selectAll('tasks');

require __DIR__.'/../views/index.view.php';



?>
