<?php
//Including the connection code to the DB.
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone    = $_POST["phone"];
    $email    = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO student (firstname, lastname, phone, email, password)
VALUES ('$firstname', '$lastname', '$phone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        //Trying to reroute to the original page with PHP.
        echo "<script>
        alert('New record created successfully');
        window.location='members.php';
            </script>";
        //Trying to reroute to the original page with PHP.
        // header("Location:members.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
