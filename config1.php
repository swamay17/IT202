<?php
session_start();
$host = "sql2.njit.edu";
$username = "sm2758";
$password = "SUCJrH91f";
$dbname = "sm2758";

$con = mysqli_connect($host, $username, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}



