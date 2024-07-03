<?php
include 'conn.php';
?>
<?php

 
$sql = "SELECT * FROM booking_system";
$stmt = $connection->prepare($sql);
$stmt->execute();
$booking_system = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boekingen Beheren</title>
    </head>
    <body>
        <h1>Boekingen Beheren</h1>
        <table border ="1">
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>E-mail</th>
                <th>Datum van Boeking</th>
                <th>Acties</th>
            </tr>
            <?php foreach ($booking_system as $booking): ?>
                <tr>
                    <td><?= htmlspecialchars($booking['id']) ?></td>
                    <td><?= htmlspecialchars($booking['name']) ?></td>
                    <td><?= htmlspecialchars($booking['email']) ?></td>                    
                    <td><?= htmlspecialchars($booking['booking_date']) ?></td>
                    <td>
                        <a href="edit_booking.php?id=<?= $booking['id'] ?>">Bewerken</a>
                        <a href="delete_booking.php?id=<?= $booking['id'] ?>">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>