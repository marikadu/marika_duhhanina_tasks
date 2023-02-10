<?php

$servername = "db";
$username = "wordpress2";
$password = "password";
$dbname = "capp1";

// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die('Connection failed: ' . $conn -> connect_error);
}

?>