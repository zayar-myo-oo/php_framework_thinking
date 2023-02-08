<?php
use controller\PageController;

//router is Router object
// $router->get("","PageController@home");


$router->get("",[PageController::class,'home']);
$router->get("home",[PageController::class,'home']);
$router->get("about",[PageController::class,'about']);
$router->post("user",[PageController::class,'createUser']); 