<?php

require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';

$uri = Request::uri();
echo 'from index.php - $uri captured: '.$uri.'<br>';
$uri = 'about'; // Resetting $uri

//require $router->direct($uri);

require Router::load('routes.php')->direct($uri); //chaining methods

?>
