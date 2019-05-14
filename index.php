<?php

require 'core/bootstrap.php';

use App\Core\Router;

echo 'from index.php - $uri captured in bootstrap: '.$uri.'<br>';

if($requestType == 'POST') {
    $uriNav = $_POST['uri'];
} else {
    $uriNav = $_GET['uri'] ?? 'home'; // if 'uri' not received, set $uriNav to 'home'
}
echo '<br>from index.php - $uriNav: '.$uriNav.'<br>';


Router::load('routes.php')->direct($uriNav); //chaining methods

?>
