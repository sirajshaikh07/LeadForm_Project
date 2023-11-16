<?php
$error = ''; // Initialize the error message

if (isset($_POST['submit'])) {
    include("../Connection/connection.php");
    // Check if 'username' and 'password' keys exist in the $_POST array
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to select a user with the provided username and password
        $sql = "SELECT * FROM login WHERE UserName = '$username' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            // Login successful
            $loginSuccess = true; // Set a flag for login success
        } else {
            // Login failed
            $error = "Incorrect username or password. Please try again.";
        }
    } else {
        $error = "Username and password are required.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .colimage {
            background-image: url('../imgs/backgroundimage.png');
            background-size: cover;
            /* Additional styling properties */
        }

        .login-container {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 20px;
        }

        .error-message {
            display: none;
            color: #dc3545;
            font-size: 18px;
            text-align: center;
            margin-top: 10px;
        }

        /* Custom styles for the login form */
        .login-form {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Custom styles for the submit button */
        .btn-login {
            background: #28a745;
            border: none;
        }
    </style>

    <title>Login Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        <?php
        if (isset($loginSuccess)) {
            echo "setTimeout(function() {
                window.location.href = './myform.php';
            }, 2000);"; // Redirect after 2 seconds
        }
        ?>
        document.addEventListener('DOMContentLoaded', function() {
            var errorAlert = document.querySelector('.alert-danger');
            if (errorAlert) {
                setTimeout(function() {
                    errorAlert.style.display = 'none';
                }, 2000); // Hide the error message after 2 seconds
            }
        });
    </script>
</head>



<body>
    <div class="container p-5">
        <?php
        if (!empty($error)) { // Check if error message is not empty
            echo "<div class='alert alert-danger d-flex justify-content-center' role='alert'>
                $error
            </div>";
        }
        if (isset($loginSuccess)) {
            echo "<div class='alert alert-success d-flex justify-content-center' role='alert'>
                Login Successful! Redirecting to home.html...
            </div>";
        }
        ?>
        <!-- Your existing HTML content -->
    </div>

    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col colimage border login-container">
            <h2 class="fw-bolder text-light text-center pt-5" style="padding-bottom: 50;">Login Form</h2>

            <form action="login.php" id="loginForm" method="post" class="login-form">
                <div class="d-flex justify-content-center p-3">
                    <label class="text-light" for="username">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="d-flex justify-content-center p-3">
                    <label class="text-light" for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="d-flex justify-content-center pb-5">
                    <button class="btn btn-login btn-success" type="submit" name="submit">Login</button>
                </div>
            </form>

        </div>
        <div class="col"></div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>