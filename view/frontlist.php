<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pays</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto,
                Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            line-height: 1.4;
            background: #61575F;
            color: #333;
            margin: 0 1em;
        }

        .container {
            width: 80%; /* Largeur de la boîte */
            margin: 20px auto;
            background-color: #AB889F; /* Nouvelle couleur de fond */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .country {
            width: 30%;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .country img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .country p {
             margin: 0;
    text-align: center;
    font-weight: bold;
    font-family: 'Open Sans', 𝙼𝚘𝚗𝚘𝚜𝚙𝚊𝚌𝚎; /* Exemple d'une autre police */
        }

        h1 {
            text-align: center;
            color: #ff69b4;
            font-size: 5em; /* Exemple d'agrandissement de la taille du texte */
        }
    </style>
</head>

<body>
    <h1>-- Liste Des Pays --</h1>
    <div class="container">
        <?php
        include '../controller/PaysC.php';

        $PaysC = new PaysC();
        $Pays = $PaysC->listPays();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $PaysC->deletePays($id);
            header("Location: listPays.php");
        }
        ?>

        <?php foreach ($Pays as $Pays) : ?>
            <div class="country">
                <img src="<?php echo ("./images/uploads/" . $Pays['image']); ?>" alt="" class="preview_img">
                <p>ID: <?= $Pays['id']; ?></p>
                <p>Nom Pays: <?= $Pays['NomP']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

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
