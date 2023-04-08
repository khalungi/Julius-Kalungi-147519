<?php
include 'db.php';

// start the session
session_start();

// check if the user is logged in by checking for the session variables
if (!isset($_SESSION["user_id"]) || !isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

// retrieve the user's information from the database
$user_id = $_SESSION["user_id"]; // replace with the user's actual ID
$username = $_SESSION["username"];
$email = "test_user@example.com"; // TODO: replace with the user's actual email
$firstname = "John"; // TODO: replace with the user's actual first name
$lastname = "Doe"; // TODO: replace with the user's actual last name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // update the user's information in the database with the changes made in the form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  // TODO: update the user's information in the database
}

// display the user's information on the profile page
echo "<p>Username: <span id=\"username\">$username</span></p>";
echo "<p>Email: <span id=\"email\">$email</span></p>";
echo "<p>First Name: <span id=\"firstname\">$firstname</span></p>";
echo "<p>Last Name: <span id=\"lastname\">$lastname</span></p>";

// add a logout button to the profile page
echo "<form action=\"logout.php\">";
echo "<button type=\"submit\">Logout</button>";
echo "</form>";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
  </head>
  <body>
    <h1>Profile</h1>
    <p>Username: <span id="username"></span></p>
    <p>Email: <span id="email"></span></p>
    <p>First Name: <span id="firstname"></span></p>
    <p>Last Name: <span id="lastname"></span></p>
    <button onclick="editProfile()">Edit Profile</button>
    <form id="profile-form" action="update_profile.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username-input" name="username" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email-input" name="email" required><br><br>
      
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname-input" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname-input" name="lastname" required><br><br>

      <input type="submit" value="Save Changes">
      <button type="button" onclick="cancelEdit()">Cancel</button>
    </form>
    <script>
      function editProfile() {
        // show the profile form and populate it with existing data
        document.getElementById("profile-form").style.display = "block";
        document.getElementById("username-input").value = document.getElementById("username").textContent;
        document.getElementById
