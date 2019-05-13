<?php

require 'core/bootstrap.php';

echo 'from index.php - $uri captured in bootstrap: '.$uri.'<br>';

if ($requestType == 'POST') {
    $uriNav = $_POST['uri'];
} else {
    $uriNav = $_GET['uri'] ?? 'home'; // if 'uri' not received, set $uriNav to 'home'
}
echo '<br>from index.php - $uriNav: '.$uriNav.'<br>';


require Router::load('routes.php')->direct($uriNav); //chaining methods

?>
