<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <nav>
    <div class="logo-sushi">
        <div class="logo"></div>
    </div>
    <div class="suchi-bar">
        <div class="a1"><a href=""> RESTAURANT </a></div>
        <div class="a2"><a href=""> BESTELEN </a></div>
        <div class="a3"><a href=""> MENU  </a> </div>
    </div>   
   </nav>
   <div class="foto"></div>
   <form class ='register_form' name = "register" method="POST" action="pages/register.php">
    <h3>Register now!</h3>
    <div class = "row">
        <p>Naam: </p>
        <input type = "text" name ="naam"/>
    </div>
    <div class = "row">
        <p>Leeftijd: </p>
        <input type = "texts" name ="leeftijd"/>
    </div>
    <div class = "row">
        <p>Algemene voorwaarden: </p>
        <input type = "checkbox" name ="av"/>
    </div>
    <div class = "row">
        <p>geslacht: </p>
        <input type = "text" name ="geslacht"/>
    </div>
    <div class = "row">        
        <input type = "submit" name ="submit" value='send'/>
    </div>
   </form>  
</body>
</html>