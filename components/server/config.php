<?php
// Production
$servername = "localhost";
$username = "u976956619_iba";
$database = "u976956619_iba";
$password = "Sid12asthana";

// Development
// $servername = "localhost";
// $username = "root";
// $database = "iba";
// $password = "";

// Validate Connection
$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die("Error 404: " . $connection->connect_error);
}