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
        <div class="a1"><a href="login.php"> LOGIN  </a> </div>
        <div class="a2"><a href=""> RESTAURANT </a></div>
        <div class="a3"><a href="products.php"> PRODUCTEN </a></div>
        <div class="a11"><a href=""> MENU  </a> </div>
        <div class="a12"><a href="../index.php"> HOME  </a> </div>
    </div>   
   </nav>
   <div class="menu_Block">
   <div class="menu_sushi_block">
    
   <?php  
   include "../pages/conn.php";

   $stmt = $connection->query("SELECT * FROM products");
   while ($row = $stmt-> fetch()){
    echo "<div class = menu_sushi>";
  
    echo $row['naam']."<br />\n";
    echo $row['prijs']."<br />\n";
    echo $row['omschrijving']."<br />\n";   
    echo "</div>";  
     
   }
   ?> 
   </div> 
   </div> 
</body>
</html>
