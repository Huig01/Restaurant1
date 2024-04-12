<?php
session_start();
include 'conn.php';
 
$stmt = $connection->prepare("DELETE FROM products WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch();
header('Location: ../index.php');
?>