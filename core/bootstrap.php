<?php

$title = 'dblab - onizu.rf.gd';
$intro = 'hello!';
$cssFile = 'styles2.css';

require __DIR__.'/Router.php';
require __DIR__.'/Request.php';
require __DIR__.'/database/Connection.php';
require __DIR__.'/database/QueryBuilder.php';
require __DIR__.'/App.php';

//$app = [];
//$app['config'] = require __DIR__.'/../config.php';
// $pdo = Connection::make();

App::bind('config', require __DIR__.'/../config.php');
//$config = App::get('config');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

$uri = Request::uri();
$requestType = Request::method();

?>
