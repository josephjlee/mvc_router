<?php

class Request {

    public static function uri() {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        echo 'from Request class - $uri: '.$uri.'<br>';
        return $uri;
    }

}