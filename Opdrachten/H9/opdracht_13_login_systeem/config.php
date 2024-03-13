<?php
// Database connection configuration
$host = "localhost";
$user = "root";
$password = "";
$database = "studenten_login";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
