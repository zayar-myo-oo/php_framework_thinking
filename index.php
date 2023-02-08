<?php

//This autoload file is imported all the file in your project to index.php
require "vendor/autoload.php";
require 'core/bootstart.php';

//bootstrap is working first which application is started ,it includes necessary file

/*
 *Router Class starts to load routes.php which include route and controller
 *and get the request from the url and method
 */
Router::load('routes.php')->direct(Request::url(),$_SERVER['REQUEST_METHOD']);
