<?php

//bootstrap is working first which application is started ,it includes necessary file
require 'core/bootstart.php';

/*
 *Router Class starts to load routes.php which include route and controller
 *and get the request from the url and method
 */
require Router::load('routes.php')->direct(Request::url(),$_SERVER['REQUEST_METHOD']);
