<?php

namespace App\Core;

class Request {

    public static function uri() {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        echo 'from Request class - $uri: '.$uri.'<br>';
        return $uri;
    }

    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}