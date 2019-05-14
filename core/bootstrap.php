<?php

require __DIR__.'/Router.php';
require __DIR__.'/Request.php';
require __DIR__.'/database/Connection.php';
require __DIR__.'/database/QueryBuilder.php';
require __DIR__.'/App.php';
require __DIR__.'/../controllers/PagesController.php';
require __DIR__.'/../controllers/UsersController.php';

//$app = [];
//$app['config'] = require __DIR__.'/../config.php';
// $pdo = Connection::make();

App::bind('config', require __DIR__.'/../config.php');
//$config = App::get('config');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

$uri = Request::uri(); // not being used at the moment
$requestType = Request::method();

function view($name, $data = [])
{
    extract($data);
    return require __DIR__."/../views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}

?>
