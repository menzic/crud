<?php

// connect to database
$host = "localhost";
$user = "root";
$password = "";
$db = "crud";
$Database = new mysqli($host, $user, $password, $db);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
//ini_set('display_errors', 1);

if (isset($_POST['save'])){
	$name = $_POST['name'];
	$location = $_POST['location'];

$Database->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or
die($Database->error);
}