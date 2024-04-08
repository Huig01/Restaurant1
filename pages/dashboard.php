<?php
session_start();
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if($_SESSION['rol'] < 2 ){

}
?>
<form action='user_delete_logic.php'  name='user_delete_logic' method="POST">
    <label>Id van user </label>
    <input type="text" name="id_user" placeholder="Username" required>
    <input type="submit" value="delete_user">
</form>    