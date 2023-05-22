<head>
    <title>Forgot Password Page </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection details
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "mini";

        // Connect to database
        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Retrieve login details from form submission
        $username = $_POST["user_email"]; {
            // SQL query to check if user exists
            $sql = "SELECT * FROM user_id WHERE email = '$username'";
            $result = mysqli_query($conn, $sql);
            // Check if user exists
            if (mysqli_num_rows($result) == 1) {
                // User exists, fetch password
                $row = mysqli_fetch_assoc($result);
                $password = $row["pass"];
                // Display password
                echo '<div class="alert alert-success" role="alert"> Your password is: ' . $password . '</div>';
            } else {
                // User does not exist, display error message
                echo '<div class="alert alert-danger" role="alert"> Invalid Gmail </div>';

            }
        }
        // Close database connection
        mysqli_close($conn);
    }

    ?>
    <div>
        <div class="row">
            <h1>Forgot Password</h1>
            <h6 class="information-text">Enter your registered email to reset your password.</h6>
            <form class="form-group" action="forget.php" method="POST">
                <input type="email" name="user_email" id="user_email">
                <p><label for="username">Email</label></p>
                <button onclick="showSpinner()">Reset Password</button>
                <form>
                    <div class="footer">
                        <h5>Already have an account? <a href="../log.php">Sign In.</a></h5>
                        <p class="information-text"><span class="symbols" title="Lots of love from me to YOU!">&hearts;
                            </span></p>
                    </div>
        </div>
    </div>
</body>