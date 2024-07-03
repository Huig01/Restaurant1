<?php
include 'conn.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);    
    $booking_date = $_POST['booking_date'];
 
    if (empty($name) || empty($email) || empty($booking_date)) {
        echo "Alle velden zijn verplicht.";
        exit;
    }
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ongeldig e-mailadres.";
        exit;
    }
 
    $sql = "INSERT INTO booking_system (name, email, booking_date) VALUES (:name, :email, :booking_date)";
    $stmt = $connection->prepare($sql);
 
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);   
    $stmt->bindParam(':booking_date', $booking_date);
 
    try {
        if ($stmt->execute()) {
            echo "Boeking succesvol!";
        } else {
            echo "Er is een fout opgetreden. Probeer het opnieuw.";
        }
    } catch (PDOException $e) {
        echo "Databasefout: " . $e->getMessage();
    }
}
?>

