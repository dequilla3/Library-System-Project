<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "library_db";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);

if(!$conn){
	die("Database Connection Failed!".mysqli_connect_error());
}