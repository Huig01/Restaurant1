<?php
session_start();
if(empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: login.php");
    exit();
}
 
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
 
if ($username == "admin" && $email == "admin" && $password == "admin") {
    $_SESSION["user"] = $username;
    header("Location: dashboard.php");
 } else {
    header("Location: login.php");
 }
?>
