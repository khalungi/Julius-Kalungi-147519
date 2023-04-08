<?php
include 'db.php';

// start the session
session_start();

// retrieve the user's information from the signup form
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

// TODO: insert the user's information into the database
// and set the session variables if the insertion is successful
if ($insertion_successful) {
  $_SESSION["user_id"] = $user_id; // replace with the user's actual ID
  $_SESSION["username"] = $username;
  header("Location: profile.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
  </head>
  <body>
    <h1>Sign Up</h1>
    <form action="signup.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>
