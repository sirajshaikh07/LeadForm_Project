<?php


include("../Connection/connection.php");
// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to select a user with the provided username and password
$sql = "SELECT * FROM login WHERE UserName = '$username' AND Password = '$password'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // Login successful
    header("Location: home.html"); // Redirect to home.html
    exit();
} else {
    // Login failed
    
    header("Location: login.php"); // Redirect back to the login page
    exit();
}

?>
