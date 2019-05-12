<?php

require 'core/bootstrap.php';

echo 'from index.php - $uri captured in bootstrap: '.$uri.'<br>';

$uriNav = $_GET['uri'] ?? 'home'; // if 'uri' not received, set $uriNav to 'home'

require Router::load('routes.php')->direct($uriNav); //chaining methods

?>
