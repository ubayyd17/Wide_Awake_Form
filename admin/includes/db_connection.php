<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "wideawake_db";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$databasename);
$db=$conn;
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
