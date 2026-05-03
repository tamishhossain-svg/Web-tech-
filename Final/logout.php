<?php
session_start(); // Connect to the current session

//Remove all variables from the session 'locker'
session_unset();

// Destroy the session entirely
session_destroy();

// Send the user back to the login page
header("Location: login.php");
exit;
?>