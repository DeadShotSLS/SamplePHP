<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "samplephp";

// Create connection
$db = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


?>