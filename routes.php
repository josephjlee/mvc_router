<?php

$router->define ([
  'home' => 'PagesController@home',
  'about' => 'PagesController@about',
  'contact' => 'PagesController@contact',
  'users' => 'UsersController@index',
  'userAdd' => 'UsersController@add'
]);

?>
