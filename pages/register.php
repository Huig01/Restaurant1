<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action='register_logic.php'  name='register_logic' method="POST">
        <label>Username: </label>
        <input type="text" name="username" placeholder="Username" required>
        <label>Password: </label>
        <input type="password" name="password" placeholder="Password" required>
        <label>Email: </label>
        <input type="email" name="email" placeholder="email" required>
        <input type="submit" value="register">
    </form>    
</body>
</html>