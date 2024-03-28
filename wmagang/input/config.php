<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "register_login";

// Create connection
$conn = new mysqli($server, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
