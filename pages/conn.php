<?php
$host = "db";
$db = "mydatabase";
$user = "user";
$pass = "password";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXPECTION,
    PDO::ATTR_DEFAULT_FETCH => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,

];
try{
    $connection = new PDO($dsn, $user, $pass, $options);
    echo "Connected to database";
}catch (\PDOExpection $e){
    echo "Connection failed:" . $e=>getMessage();
}
?>