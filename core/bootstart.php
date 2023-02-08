<?php
/*
require 'database/Connection.php';//database setup file
require 'database/QueryBuilder.php';//get the data from database

require 'Request.php';//get the url file
require 'Router.php';//routing factory file
*/

use core\APP;

require 'database_fun.php';//common function

APP::bind("config",require "config.php");

APP::bind("database",new QueryBuilder(
    Connection::make(APP::get("config")['database'])));







