<?php

class Request {

    public static function uri() {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        echo 'uri: '.$uri.'<br>';
        return $uri;
    }

}