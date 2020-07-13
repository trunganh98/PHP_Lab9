<?php

$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'pubications';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Connect to Db Error");
?>