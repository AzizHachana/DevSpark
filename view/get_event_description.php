<?php
include '../controller/EventC.php';

if (isset($_GET['id'])) {
    $id_event = $_GET['id'];
    $eventC = new EventC();
    $event = $eventC->getEventById($id_event);

    if ($event) {
        echo $event['DescriptionE'];
    } else {
        echo 'Event not found!';
    }
} else {
    echo 'ID not provided!';
}
?>
