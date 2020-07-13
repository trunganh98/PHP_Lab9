<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>PHP Login System with Remember me feature</title>
<! — materialize CSS →
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<div class="form_div shadow">
<div class="row center-align">
<h5>Login Form</h5>
</div>
<?php
if(isset($_GET['error'])){
?>
<p> You entered invalid user name or password.</p><br>
<?php
}
?>
<form class="" action="login_ac.php" method="post">
<div class="row">
<div class="input-field col s12">
<input name="user_name" type="text">
<label for="user_name">User Name</label>
</div>
<div class="input-field col s12">
<input name="user_pass" type="password" >
<label for="user_pass">Password</label>
</div>
<div class="input-field col s12">
<label>
<input type="checkbox" name="remember_me" />
<span>Remember Me</span>
</label>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<button class="btn waves-effect waves-light" type="submit" name="submit" value="login">Login </button>
</div>
</div>
</form>
</div>
</div>
</body>
</html>