<?php

require 'functions.php';

$query = require 'core/bootstrap.php';

$router = new Router;
require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);




$title = 'dblab - onizu.rf.gd';
$intro = 'hello!';

//$tasks = $query->selectAll('tasks');

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// vd($tasks[0]->description);

//require 'index.view.php';
?>
