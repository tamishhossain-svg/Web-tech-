<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
    <p>Your last login was: <?php echo $_COOKIE['last_login'] ?? 'First time here!'; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>