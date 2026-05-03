<?php
session_start(); // Initialize the session system

// Check if the form was submitted
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // username and password
    if ($user === "admin" && $pass === "1234") {
        
        // Store data in the session 'locker'
        $_SESSION['username'] = $user;

         //Redirect to the dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Incorrect details. ";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Login Form</h2>
    
    <form method="post">
        <input type="text" name="user" placeholder="Username" required><br><br>
        <input type="password" name="pass" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>




