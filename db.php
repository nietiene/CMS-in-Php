<?php

$host = 'localhost';
$user = 'root';
$password = 'factorise@123';
$dbname = "cms";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die ("Connection Failed: ", mysqli_connect_error());
}
?>