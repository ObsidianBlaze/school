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
echo "Connected Successfully";
 
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone    = $_POST["phone"];
$email    = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO student (firstname, lastname, phone, email, password)
VALUES ('$firstname', '$lastname', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>