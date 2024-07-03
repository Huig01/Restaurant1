<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maak een boeking</title>
    </head>
<body>
    <h1>Maak een boeking</h1>
    <form action="process_booking.php" method="post">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>        
        <label for="booking_date">Datum van boeking:</label><br>
        <input type="date" id="booking_date" name="booking_date" required><br><br>
        <input type="submit" value="Boek nu">
    </form>
</body>
</html>