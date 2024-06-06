<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
   <link rel="stylesheet" href="../css/test.css">
   <link rel="stylesheet" href="img">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
        <div class="logo">SKY FLIGHTS</div>
        <div class="header-row">
            <div class="home-button">
                <div class="home-button-text"><a href = "../index.php">HOME<a></div>
            </div>       
        </div>
    </div>
</div>
<div class="loggin_block">
    <div class="loggin_2block">
        <h1> Login </h1>
        <form action='register_logic.php'  name='register_logic' method="POST">
            <div class="label_name">
                <label>Username: </label>
            </div>
            <div class="input_username">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="label_password">
                <label>Password: </label>
            </div>
            <div class="input_password">
            <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="label_Email">
            <label>Email: </label>
            </div>
            <div class="input_Email">
            <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="input_login">
            <input type="submit" value="register">
            </div>
        </form>
    </div>
</div>  
</div>
</html>