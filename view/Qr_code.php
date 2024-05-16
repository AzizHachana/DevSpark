<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff; /* Couleur de fond blanche */
        }

        #qrCodeContainer {
            border: 2px solid #000000; /* Bordure noire */
            padding: 20px;
            background-color: #ffffff; /* Fond blanc */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        #qrCodeImage {
            display: block;
            margin: 0 auto;
            width: 300px; /* Largeur de l'image */
            height: auto; /* Hauteur automatique pour conserver les proportions */
        }
    </style>
</head>
<body>
    
    <!-- Code QR -->
    <div id="qrCodeContainer">
        <img id="qrCodeImage" src="image-qrcode.png" alt="QR Code">
    </div>

    <!-- Scripts -->
    <script>
        // Vous pouvez ajouter ici du JavaScript si nécessaire
    </script>
</body>
</html>
