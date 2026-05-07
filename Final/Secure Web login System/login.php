setcookie("user_email", $email, time() + (86400 * 30), "/"); 

setcookie("last_login", date("Y-m-d H:i:s"), time() + (86400 * 30), "/");