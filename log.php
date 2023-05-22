
<!DOCTYPE html>
<html style="background: aliceblue;">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="logcss.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background: aliceblue;">
	<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Database connection details
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "mini";
		// Connect to database
		$conn = mysqli_connect($host, $user, $password, $database);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// Retrieve login details from form submission
		$username = $_POST["username"];
		$password = $_POST["password"];

		//SELECT * FROM `user_id` WHERE username ='admin' and pass='anything';
		//sanitize username to prevent SQL injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		//again sanitize username to prevent SQL injection
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password); 
        {
			// SQL query to check if user exists
			$sql = "SELECT * FROM user_id WHERE username='$username' AND pass='$password'";
			$result = mysqli_query($conn, $sql);
			// Check if user exists
			if (mysqli_num_rows($result) == 1) {
				// User exists, redirect to dashboard or home page
				header("Location:home/index.php");
			} else {
				// User does not exist, display error message
				echo '<div class="alert alert-danger" role="alert"> Invalid username or password </div>';

			}
		}
		// Close database connection
		mysqli_close($conn);
    }
	?>
	<?php
	if (isset($_GET["submit"])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mini";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			echo '<div class="alert alert-success" role="alert"><strong> Success!</strong> Account created successfully
  </div>';
		} 
			
			$username = $_GET["username2"];
			$email = $_GET["email2"];
			$password = $_GET["confirm_password2"];
			
			$sqlcheck = "SELECT * FROM user_id WHERE username='$username' OR email='$email'";
			$result = mysqli_query($conn, $sqlcheck);
			$num = mysqli_num_rows($result);
			if ($num == 1) {
				
				echo '<div class="alert alert-danger" role="alert"> Username or Email already exists </div>';
			} else {
				
				$sql = "INSERT INTO user_id VALUES('$username','$email','$password')";
				
				if (mysqli_query($conn, $sql)) {
					
					echo '<div class="alert alert-success" role="alert"><strong> Success!</strong> Account created successfully</div>';
				} else {
					
					echo '<div class="alert alert-danger" role="alert">We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused! </div>';
				}
			}
			mysqli_close($conn);
		}
	
	?>

	<div class="login-box">
		<h1>Login</h1>
		<form action="log.php" method="POST">
			<label>Username:</label>
			<input type="text" name="username" required>
			<label>Password:</label>
			<input type="password" name="password" required>
			<a href="forget/forget.php">forget password</a>
			<input type="submit" value="Login">
		</form>
		<hr class="borderborder-primary border-2 opacity-50">
		<form>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Create Account
			</button>
		</form>

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<form action="log.php" method="get">
							<label for="username">Username:</label>
							<input type="text" id="username" name="username2" ><br>

							<label for="email">Email:</label>
							<input type="email" id="email" name="email2" ><br>

							<label for="password">Password:</label>
							<input type="password" id="password" name="password2"><br>

							<label for="confirm_password">Confirm Password:</label>
							<input type="password" id="confirm_password" name="confirm_password2" ><br>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss ="modal"> Close  
                                </button>
								<div class="sub">
									<input name="submit" class="btn btn-primary" id="sub" type="submit" value="Create Account">
								</div>

							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script src="log.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>