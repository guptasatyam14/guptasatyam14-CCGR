<?php
	// Database connection details
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "webs";
	
	// Connect to database
	$conn = mysqli_connect($host, $user, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// Retrieve login details from form submission
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	// SQL query to check if user exists
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	
	// Check if user exists
	if (mysqli_num_rows($result) == 1) {
		// User exists, redirect to dashboard or home page
		header("Location: logphp.php");
	} else {
		// User does not exist, display error message
		echo "Invalid username or password";
	}
	
	// Close database connection
	mysqli_close($conn);
?>
