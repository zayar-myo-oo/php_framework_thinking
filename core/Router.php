<?php

class Router{
  protected $routes=[
      "GET"=>[
          //about=>"aboutController.php
      ],
      "POST"=>[

      ]
  ];
  
  public static function load($filename){
    $router = new Router();
    require $filename;
    return $router;
  }

  public function register($routes){
    $this->routes = $routes;
      }//define routes

    public function get($route,$controller){
            $this->routes['GET'][$route]=$controller;
    }
    public function post($route,$controller){
        $this->routes['POST'][$route]=$controller;
    }
  public function direct($routeName,$requestMethod){
      if(array_key_exists($routeName,$this->routes[$requestMethod])){
      return $this->routes[$requestMethod][$routeName];
      }else{
      die("<h1>404 pages</h1>");
      }
  }

}