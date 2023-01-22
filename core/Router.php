<?php

class Router{
  protected $routes;
  
  public static function load($filename){
    $router = new Router();
    require $filename;
    return $router;
  }

  public function register($routes){
    $this->routes = $routes;
  }//define routes
  public function direct($routeName){
      if(array_key_exists($routeName,$this->routes)){
      echo $this->routes[$routeName];
      return $this->routes[$routeName];
      }else{
      die("<h1>404 pages</h1>");
      }
  }

}