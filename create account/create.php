<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webs";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
	
	// SQL query to check if user exists
	$sqlquery = "INSERT INTO users VALUES('$username','$email','$password')";
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}