<?php
$host = 'localhost';
$base = 'loft_db';
$user = 'root';
$pass = '123';
$connection = @new mysqli($host, $user, $pass, $base);
//print_r($connection);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');
