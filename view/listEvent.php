<?php
include '../controller/EventC.php';


$EventC = new EventC();

$Events = $EventC->listEvents();

if ($Events) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Professeurs</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <center>
        <h1>Liste des Event</h1>
        <h2><a href="addEvent.php">Ajouter un Professeur</a></h2>
    </center>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Image</th>
            
        </tr>

        <?php
        foreach ($Events as $event) {
        ?>
        <tr>
            <td><?= $event['id']; ?></td>
            <td><?= $event['Nom']; ?></td>
            <td><?= $event['DateE']; ?></td>
            <td><?= $event['Lieu']; ?></td>
            <td><?= $event['DescriptionE']; ?></td>
            <td><?= $event['Prix']; ?></td>
            <td><img src=<?php echo ("./images/uploads/".$event['image']); ?> alt="" style="width:50px;height:50px;border:2px solid gray;border-radius:8px;object-fit:cover"></td>
            <td>
                <a href="../view/updateEvent.php?id=<?= $event['id']; ?>">Modifier</a>
                <a href="../view/deleteEvent.php?id=<?= $event['id']; ?>">Supprimer</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <!-- Ajout du script jQuery pour la prévisualisation de l'image -->
    <script>
        $(document).ready(function() {
            // function to display image before upload
            $("input.image").change(function() {
                var file = this.files[0];
                var url = URL.createObjectURL(file);
                $(this).closest("tr").find(".preview_img").attr("src", url);
            });
        });
    </script>
</body>

</html>
<?php
} else {
    echo "<center><h2>Aucun event trouvé.</h2></center>";
}
?>
