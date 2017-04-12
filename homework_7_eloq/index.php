<?php
error_reporting (E_ALL);
require_once 'config.php';
//require_once 'connect.php';
require_once 'route.php';

$rou = new Route();

$rou->start();
