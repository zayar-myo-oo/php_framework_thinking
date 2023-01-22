<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'database_fun.php';
require 'Request.php';
require 'Router.php';

$config = require "config.php";
$queryData=new QueryBuilder(
  Connection::make($config['database'])
);
// $tasks = $queryData->selectAll("tasks");
// dd($tasks);


