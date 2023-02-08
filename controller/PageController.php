<?php
namespace controller;
use core\APP;

class PageController{

  function home(){
    $users=APP::get('database')->selectAll("users");
    
    view("home",$users);
  }
  function about(){
    
    view("about");
  }
  function createUser(){
    
    APP::get('database')->insertSingle(
      ['username'=> request('username')],
      "users"
    );
    redirect("/");
    
  }
}