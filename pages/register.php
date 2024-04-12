<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="loggin_block2">
    <div class="loggin_2block2">
        <h1> Register </h1>
        <form action='register_logic.php'  name='register_logic' method="POST">
            <div class="label_name2">
                <label>Username: </label>
            </div>
            <div class="input_username2">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="label_password2">
                <label>Password: </label>
            </div>
            <div class="input_password">
            <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="label_Email2">
            <label>Email: </label>
            </div>
            <div class="input_password">
            <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="input_login">
            <input type="submit" value="register">
            </div>
        </form>
    </div>
</div>        
</body>
</html>