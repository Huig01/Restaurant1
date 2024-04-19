<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="logo_sushi">
        <div class="logo1"></div>
    </div>     
    <div class="suchi-bar">
        <div class="a1"><a href=""> LOGIN  </a> </div>
        <div class="a2"><a href=""> RESTAURANT </a></div>        
        <div class="a11"><a href="menu.php"> MENU  </a> </div>
        <div class="a12"><a href="../index.php"> HOME  </a> </div>
    </div>   
</nav>  
   <div class="loggin_block">
    <div class="loggin_2block">
        <h1> Login </h1>
        <form action='login_logic.php' name='login_logic' method="POST">
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
            <div class="remember_password_block">
                <div class="remember_password">
                    <div class="password_bol"></div>
                </div>
                <div class="a13"><a>REMEMBER ME</a></div>
                <div class="forgot_password">
                    <a>FORGOT PASSWORD? </a>
                </div>
            </div>
            <div class="input_login">
                 <input type= "submit" value="Login">
            </div>
            <div class="or">                
            <hr width ="40%" color="black"/><a>Or</a><hr width ="40%" color="black"/>
            </div>           
            <div class= "input_login_facebook">            
                <input type="submit" value = "Login in Facebook"> 
            </div>
            <div class= "input_login_Google">
                <input type="submit" value = "Login in Google"> 
            </div>
        </form>
        <div class="a14"><a href="register.php"> Account aanmaken  </a> </div>  
    </div>             
</body>
</html>   