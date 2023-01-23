<?php
class Request{

  public static function url(){
    return parse_url(trim($_SERVER['REQUEST_URI'],"/"),PHP_URL_PATH);
      //trim($_SERVER['REQUEST_URI'],"/") //output -> /name -> name
      //using parse_url // output-> /names?username="Crank" -> names
  }
}