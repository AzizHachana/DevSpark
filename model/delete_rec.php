<?php
require_once 'connect.php';

try {

    $value = $_POST['delete'];

    $delete = $pdo->prepare('DELETE FROM reclamation WHERE id = :id');
    $delete->bindParam(':id', $value);
    $delete->execute();
    header("Location: ../view/Back/listContact.php");
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

?>
