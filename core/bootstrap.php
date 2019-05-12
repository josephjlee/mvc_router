<?php

$app = [];

$title = 'dblab - onizu.rf.gd';
$intro = 'hello!';
$cssFile = '..\styles.css';

$app['config'] = require __DIR__.'/../config.php';
require __DIR__.'/Router.php';
require __DIR__.'/Request.php';
require __DIR__.'/database/Connection.php';
require __DIR__.'/database/QueryBuilder.php';

// $pdo = Connection::make();

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

?>
