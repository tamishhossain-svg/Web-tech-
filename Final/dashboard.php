<?php
session_start(); //  Start session to access the 'locker'

//Check if the user is actually logged in
if (!isset($_SESSION['username'])) {
    // If 'username' is not in the locker
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Dashboard</h2>
    <!-- Use the session data to welcome the user -->
    <p>Welcome back, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
    
    <br>
    <a href="logout.php">Click here to Logout</a>
</body>
</html>