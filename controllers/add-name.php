<?php

// var_dump($_REQUEST);

$app['database']->insert('users', [
    'name' => $_POST['name'],
    ]);

header('Location: index.php');

?>