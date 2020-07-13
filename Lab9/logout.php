<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['user_password']);

$hour = time() - 3600 *24 * 30;
setcookie('username', "", $hour);
setcookie('password', "", $hour);
header("Location:login.php");
?>