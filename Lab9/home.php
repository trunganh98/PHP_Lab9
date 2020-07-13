<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Login System with Remember me feature</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="padding:40px;">
<?php
if(isset($_COOKIE['user_name'])) $user = $_COOKIE['user_name'];
if(isset($_COOKIE['user_password'])) $user = $_COOKIE['user_password'];

if(!isset($user)){
    echo "Unauthorized access. Please <a href='login.php'>Login</a>";
die();
}
?>
<p>
    Welcome <?php echo $user; ?>
    <br>
    <a href="logout.php">Logout</a>
</p>
</body>
</html>