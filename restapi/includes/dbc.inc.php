<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "caketreats";

$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);

if($conn == false)
{
    die("Error: Could not connect. " . mysqli_connect_error());
}

?>