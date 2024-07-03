<?php
include 'conn.php';
?>
<?php
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM booking_system WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
    if ($stmt->execute()) {
        echo "Boeking verwijderd!";
    } else {
        echo "Er is een fout opgetreden.";
    }
} else {
    echo "Geen boeking-ID opgegeven.";
}
exit;
?>