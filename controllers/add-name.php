<?php

// var_dump($_REQUEST);

App::get('database')->insert('users', [
    'name' => $_POST['name'],
    ]);

header('Location: index.php');

?>