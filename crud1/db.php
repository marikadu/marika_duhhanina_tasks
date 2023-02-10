<?php

$servername = "webprog23_db_1";
$username = "app1";
$password = "password";
$dbname = "app1";

// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die('Connection failed: ' . $conn -> connect_error);
}

?>