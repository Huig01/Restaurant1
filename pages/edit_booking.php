<?php
include 'conn.php';
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM booking_system WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if (!$booking) {
        echo "Boeking niet gevonden.";
        exit;
    }
} else {
    echo "Geen boeking-ID opgegeven.";
    exit;
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $booking_date = $_POST['booking_date'];
 
    $sql = "UPDATE booking_system SET name = :name, email = :email, booking_date = :booking_date WHERE id = :id";
    $stmt = $connection->prepare($sql);
 
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);    
    $stmt->bindParam(':booking_date', $booking_date);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
    if ($stmt->execute()) {
        echo "Boeking bijgewerkt!";    
        exit;
    } else {
        echo "Er is een fout opgetreden.";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boeking Bewerken</title>
    </head>
    <body>
        <h1>Boeking Bewerken</h1>
        <form action="" method="post">
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($booking['name']) ?>" required><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($booking['email']) ?>" required><br><br>

            <label for="booking_date">Datum van boeking:</label><br>
            <input type="date" id="booking_date" name="booking_date" value="<?= htmlspecialchars($booking['booking_date']) ?>" required><br><br>

            <input type="submit" value="Bijwerken">
        </form>
    </body>
</html>