<?php

/* $servername = "localhost";
$username = "rounavza_cakekornerwebsite";
$password = "rounavza_cakekornerwebsite";
$dbname = "rounavza_cakekornerwebsite"; */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rounavza_rtslanding";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
