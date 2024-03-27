<?php
//auteur: BYZ
//Database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bieren";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//Check connection
if(!$conn)
{
    die("failed to connect: " . mysqli_connect_error());
}