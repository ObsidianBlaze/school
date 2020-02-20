<?php

$servername = "localhost";
$username = "root";
$password = "";
$db       = "school";
//Create a connection
$conn = new mysqli($servername, $username, $password, $db);

//Check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
	// echo "Connected Successfully";