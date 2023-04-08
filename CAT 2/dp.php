<?php
// database configuration
$host = "localhost"; // replace with your host name
$username = "root"; // replace with your MySQL username
$password = " "; // replace with your MySQL password
$dbname = "database"; // replace with your MySQL database name

// create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
