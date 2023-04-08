<?php
// start the session
session_start();

// unset all of the session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect the user to the login page
header("Location: login.php");
exit();
?>
