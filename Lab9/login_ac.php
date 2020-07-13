<?php
session_start();
require_once 'config.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn -> connect_errno) die("Connect DB error");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Login System with Remember me feature</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body style="padding:40px;">
<?php
if (isset($_POST['login']))
{
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];


    $query = "select * from users where username = '$name'";
    $result = $conn -> query($query);
    if ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        if (password_verify($password,$row[2]))
        {
            $_SESSION['user_name'] = $name;
            $_SESSION['user_password'] = $hash;
       if (isset($_POST['remember_me']) && $_POST['remember_me'] == '1')
       {
            setcookie('mycookie',$name.' '.$password,time()+3600);
       }
       header("location: home.php");
        } else echo "Login fail !";
    }
}
?>
</body>
</html>
