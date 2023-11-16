<?php
$servername = "localhost";
$username = "root";
$password = "";
$datbase="googleform";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$datbase);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}





?>