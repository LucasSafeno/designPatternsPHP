<?php
// require "app/Counter.php";
require "app/Connection.php";

// use app\Counter;
use app\Connection;

// Counter::addCounter(10);

// var_dump(Counter::getCounter());


$instanceOne = Connection::getinstance();
$instanceTwo = Connection::getinstance();


var_dump($instanceOne == $instanceConnection);

