<?php

namespace App\Core;

use App\Controllers\PagesController;

class Router {

  protected $routes = [];

  public static function load($file) {
    $router = new static; // way of creating self instance, like "new Router"
    require $file; // routes.php ($file) calls the define() method and stores the array in $this->routes
    echo '<br>from Router class - load() method called<br>';
    //var_dump($router);
    return $router;
  }

  public function define($routes) {
    $this->routes = $routes;
    echo '<br>from Router class - define() method called<br>';
  }

  public function direct($uri) {
    if (array_key_exists($uri, $this->routes)) {
      echo 'from Router class - direct() method called, $uri matched in routes.php <br>';
      //$directURI = $this->routes[$uri];
      //var_dump($directURI);
      //return $this->routes[$uri];
      return $this->callAction(
        ...explode('@', $this->routes[$uri]) // '...' (splat operator) converts array items into function arguments
      );  
    }
    throw new Exception("No route defined for this URI: $uri");

  }

  protected function callAction($controller, $action) {
    $controller = "App\\Controllers\\{$controller}";
    $controller = new $controller;
    if (!method_exists($controller, $action)) {
      throw new Exception("controller does not respond to the {$action} action.");
    }
    return $controller->$action();
  }

}

?>
