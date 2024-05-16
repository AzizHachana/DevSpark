<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$value = $_POST['reset'];
try {
    $query = $pdo->prepare('UPDATE reclamation SET status = "Not Responded" WHERE id = :id');
    $query->bindValue(':id', $value);
    $query->execute();
    
    $rowCount = $query->rowCount();
        
        if ($rowCount > 0) {
            echo "<script>alert('Reclamation with ID $value has been modified.');</script>";
        } else {
            echo "<script>alert('No changes were made to the reclamation with ID $value.');</script>";
        }

        header("Location: ../view/Back/listContact.php");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}

?>