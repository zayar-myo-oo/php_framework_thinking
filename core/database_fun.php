<?php



function dd($data){
    echo "<pre>";
    var_dump($data);
    die();
};

function view($name,$data=[]){
    extract($data);
    return require "view/$name.view.php";
}

function redirect($name){
  header("Location: $name");
}
function request($name){
  if($_SERVER['REQUEST_METHOD']=='POST'){
    return $_POST[$name];
  }
  if($_SERVER['REQUEST_METHOD']=='GET'){
return $_GET[$name];
  }
}