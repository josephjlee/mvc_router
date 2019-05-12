<?php

$path = 'dproj/onizu.rf.gd/mvc_router';

$router->define ([
  $path => 'controllers/index.php',
  $path.'about' => 'controllers/about.php',
  $path.'about/culture' => 'controllers/about-culture.php',
  $path.'contact' => 'controllers/contact.php'
]);

?>
