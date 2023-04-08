<?php
include 'db.php';

// start the session
session_start();

// retrieve the username and password from the login form
$username = $_POST["username"];
$password = $_POST["password"];

// TODO: check the username and password against the database
// and set the session variables if the login is successful
if ($login_successful) {
  $_SESSION["user_id"] = $user_id; // replace with the user's actual ID
  $_SESSION["username"] = $username;
  header("Location: profile.php");
  exit();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>

      <input type="submit" value="Login">
    </form>
  </body>
</html>
