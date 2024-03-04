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
    <div class="logo_sushi">
        <div class="logo1"></div>
    </div>     
    <div class="suchi-bar">
        <div class="a1"><a href=""> RESTAURANT </a></div>
        <div class="a2"><a href=""> BESTELEN </a></div>
        <div class="a3"><a href=""> MENU  </a> </div>
    </div>   
   </nav>   
   <div class="foto2"></div>
   <div class="midden">
    <div class="restaurant">
        <div class="a4">
            <a>Sushi bar & restaurant Nijmegen<a>
        </div>
        <div class="a5">
            <a>In het historisch centrum van de oudste stad van Nederland ligt de Molenstraat. Het hele jaar door is deze straat de place to be voor gezellige evenementen. Je vindt hier ook een scala aan restaurants, waaronder ons Aziatisch restaurant Sushi Bar en Restaurant. Hier kun je genieten van een all you can eat arrangement bestaande uit heerlijke sushi en grillgerechten. Zien we je snel voor een lunch of diner?<a>
        </div>
    </div>
    <div class="reserveren">

    </div>
   </div>
    
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