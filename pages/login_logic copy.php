<?php
session_start();
include 'conn.php';

 $stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
 $stmt->execute(['user' =>$_POST[$username], 'pass' => [$password]]);
 $user = $stmt->fetch();
 

if empty($user)
{
    header("Location: login.php");   
    exit();
}
$username =  $_POST["username"];
 $password =  $_POST["password"];

if($user)
{
    $_SESSION["user"] = $username;
    header("Location: dashboard.php");    
}else{
    header
}
?>

