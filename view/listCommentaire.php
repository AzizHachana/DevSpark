<?php

include '../controller/CommentaireC.php';

$CommentaireC = new CommentaireC();
$Commentaires = $CommentaireC->listCommentaire();

if (isset($_GET['id_com'])) {
    $id = $_GET['id_com'];
    $CommentaireC->deleteCommentaire($id_com);
    header("Location: listCommentaire.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Commentaires</title>
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
            width: 80%;
            margin: 20px auto;
            background-color: #AB889F;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #fff;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            background-color: #ff69b4;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
            width: 100%;
        }

        h2 {
            color: #ff69b4;
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #0E0C0E;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #8B4513;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .preview_img {
            width: 50px;
            height: 50px;
            border: 2px solid #ccc;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Liste des Commentaires</h1>
        <h2><a href="../view/addCommentaire.php">Ajouter un Commentaire</a></h2>

        <table>
            <tr>
                <th>Id</th>
                <th>Commentaire</th>
                <th>Date_ommentaire</th>
            </tr>

            <?php foreach ($Commentaires as $commentaire) : ?>
                <tr>
                    <td><?= $commentaire['id']; ?></td>
                    <td><?= $commentaire['Commentaire']; ?></td>
                    <td><?= $commentaire['Date_commentaire']; ?></td>
                    
                    <td align="center">
                        <a href="../view/editCommentaire.php?id=<?= $commentaire['id_com']; ?>"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 3a9 9 0 0 0-9 9c0 5.148 7.793 13.833 8.154 14.25a.5.5 0 0 0 .692 0C13.207 25.833 21 17.148 21 12a9 9 0 0 0-9-9zm0 16.5c-1.754 0-3.276-1.186-4.462-3H16.46c-.36 1.07-1.243 1.5-2.46 1.5zm0-13.5a7.5 7.5 0 0 1 0 15 7.5 7.5 0 0 1 0-15zm0 12a4.5 4.5 0 1 0-4.5-4.5A4.5 4.5 0 0 0 12 18zm0-6c-1.377 0-2.5 1.123-2.5 2.5S10.623 17 12 17s2.5-1.123 2.5-2.5S13.377 12 12 12z" />
                                </svg> Update</button></a>
                    </td>
                    <td>
                        <a href="../view/listCommentaire.php?id=<?= $commentaire['id']; ?>"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z" />
                                </svg> Delete</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>