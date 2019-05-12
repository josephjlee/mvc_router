<?php

require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';

$uri = Request::uri();
$uri = ''; // Resetting $uri so it directs to index, as the 'Request URI' works only when the site is at document root level.

//require $router->direct($uri);

require Router::load('routes.php')->direct($uri); //chaining methods


//$tasks = $query->selectAll('tasks');

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// vd($tasks[0]->description);

//require 'index.view.php';
?>
