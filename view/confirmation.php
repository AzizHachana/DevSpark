<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Confirmation d'envoi</title> 
    <style> 
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
            margin: auto;
        }

        .title {
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .message {
            margin-bottom: 40px;
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            background-color: #FFA500;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.1rem;
        }

        .btn:hover {
            background-color: #3e8e41;
        }

        .animate-right {
            animation: slideRight 1s ease forwards;
        }

        @keyframes slideRight {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .background-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(2.5px);
        }
    </style>
</head> 

<body> 
    <div class="background">
        <img src="bg_2.jpg" alt="Background Image" class="background-image">
    </div>
    <div class="container animate-right"> 
        <h1 class="title">Message envoyé avec succès !</h1>
        <p class="message">Votre message a bien été envoyé à l'administration. Nous vous répondrons dans les plus brefs délais. Merci !</p> 
        <a href="index copy.php" class="btn">Retour à l'accueil</a> 
    </div> 

    <script>
        window.onload = function() {
            var container = document.querySelector('.container');
            container.classList.add('animate-right');
        };
    </script>
</body> 
</html>
