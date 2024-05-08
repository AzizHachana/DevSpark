
<?php
include '../phpqrcode/qrlib.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'generer_qr_code') {
    if (isset($_GET['reservation_id'])) {
        $reservation_id = $_GET['reservation_id'];
        $lien = 'http://localhost/hotel/view/voucher.php?reservation_id=' . $reservation_id;
        QRcode::png($lien, 'image-qrcode.png');
    }

    if (file_exists('image-qrcode.png')) {
        echo '<img src="image-qrcode.png" alt="QR Code">';
    } else {
        echo 'QR code could not be generated';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: Qr_code.php");
        exit;
    }
}


// Récupération de l'identifiant de l'hôtel depuis l'URL
if (isset($_GET['reservation_id'])) {
    $reservation_id = $_GET['reservation_id'];
    $pdo = new PDO(
        'mysql:host=localhost;dbname=atelierphp',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    $query = "SELECT * FROM reservation WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$reservation_id]);
    $res_info = $statement->fetch(PDO::FETCH_ASSOC);

    // Vérification si l'hôtel existe
    if (!$res_info) {
        // Redirection vers une page d'erreur si l'hôtel n'existe pas
        header("Location: erreur.php");
        exit;
    }


$user_query = "SELECT * FROM unityuser WHERE id = ?";
    $user_statement = $pdo->prepare($user_query);
    $user_statement->execute([$res_info['user_id']]);
    $user_info = $user_statement->fetch(PDO::FETCH_ASSOC);

    // Vérification si l'utilisateur existe
    if (!$user_info) {
        // Redirection vers une page d'erreur si l'utilisateur n'existe pas
        header("Location: erreur.php");
        exit;
    }
} else {
    // Redirection vers une page d'erreur si aucune ID de réservation n'est fournie
    header("Location: erreur.php");
    exit;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v18.0.1/dist/font-face.css" rel="stylesheet" type="text/css" />
  <title>Réservation de villa</title>
  <style>
  * {
    padding: 0;
    margin: 0;
    font-family: 'Vazir', sans-serif;
}

.box {
    
    color: #555555;
    width: 850px;
    height: 600px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 30px #ccc;
    border-radius: 7px;
    position: absolute;
    top: 5%;
    left: 0;
    right: 0;
    margin: 0 auto;
}


.head {
    margin: 10px 0;
    margin-bottom: 0;
    width: 100%;
    display: flex;
    direction: rtl;
    justify-content: flex-start; /* Aligner les éléments au début de la ligne */
}

.head .resHead {
    font-size: 30px;
    color: white;
    padding: 10px 20px; /* Ajouter un espace intérieur */
    background-color: #00c9c9;
    border-radius: 7px; /* Arrondir les coins */
    margin-right: 280px; /* Déplacer vers la gauche autant que possible */
}


.head .empHead {
    flex: 0.3;
    display: inline-block;
}

.head .logoHead {
    flex: 0.4;
    height: 50px;
    display: inline-block;
    text-align: left;
    padding-left: 10px;
}

.logoHead img {
    max-height: 100%;
}

.summaryContext {
    margin-top: 5px;
    margin-bottom: 10px;
    width: 100%;
    display: flex;
    direction: rtl;
}

.resCodeBox {
    position: relative;
    padding: 0 20px;
    flex: 0.3;
    font-size: 18px;
    display: inline-block;
    vertical-align: top;
}

.resCodeBox .resCode {
    direction: ltr;
    text-align: center;
    font-size: 25px;
    color: #00c9c9;
    line-height: 40px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}

.contai {
    position: relative;
    flex: 0.7;
    display: inline-block;
}

.contai .idCode {
    position: absolute;
    color: white;
    background-color: #00c9c9;
    padding: 0 10px;
    top: 0;
    left: -5px;
    font-size: 23pt;
}

.idVilla {
    font-size: 16px;
}

.idVilla h3 {
    font-size: 18pt;
}

.inDate {
    width: 45%;
    padding-right: 7px;
    border-left: 5px solid #00c9c9; /* Couleur de la bande pour la date d'arrivée */
    display: inline-block;
    margin-right: -3px; 
    text-align: right;
    transform: translateX(10%); /* Décalage vers la gauche pour compenser la bordure */
}

.outDate {
    width: 45%;
    padding-right: 7px;
    border-left: 5px solid #d03675; /* Couleur de la bande pour la date de départ */
    display: inline-block;
    margin-right: -3px; /* Décalage vers la gauche pour compenser la bordure */
}
.outDate1
{
transform: translateX(-53%); 
}
.outDate2
{
transform: translateX(-57%); 
}
.outDate3
{
transform: translateX(-59%); 
}
.outDate4
{
transform: translateX(-80%); 
}
.outDate5
{
transform: translateX(10%); 
}
.outDate6
{
transform: translateX(10%); 
}
.outDate7
{
transform: translateX(10%); 
}
.outDate8
{
transform: translateX(7%); 
}
.outDate9
{
transform: translateX(9%); 
}
.outDate10
{
transform: translateX(-47%); 
}
.outDate11
{
transform: translateX(-35%); 
}



.contai br {
    content: "";
    margin: 2em;
    display: block;
    font-size: 24%;
}

hr {
    margin: auto;
    width: 90%;
}

.downContext {
    width: 100%;
    padding: 20px;
    padding-top: 0;
    box-sizing: border-box;
    direction: rtl;
}

.detailContext {
    width: 48%;
    display: inline-block;
}

.guest {
    margin: 5px 0;
}

.guestStr {
    width: 48%;
    display: inline-block;
}

.guestName {
    width: 48%;
    display: inline-block;
}

.money {
    position: relative;
    margin: 5px 0;
}

.moneyStr {
    width: 48%;
    display: inline-block;
}

.moneyInput {
    width: 48%;
    display: inline-block;
}

.map {
    width: 48%;
    background-color: rgb(255, 0, 119);
    height: 205px;
    display: inline-block;
    vertical-align: bottom;
}

input {
    width: 100%;
    border: none;
    border-style: none;
    background: transparent;
    outline: none;
    font-size: 16px;
    font-family: B Homa Regular;
}

li {
    list-style: none;
}

.footer {
    direction: rtl;
    padding: 0 20px;
    box-sizing: border-box;
}

.resDate {
    width: 60%;
    display: inline-block;
}

.telBack {
    width: 30%;
    display: inline-block;
    direction: ltr;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 700;
}
button.custom-link {
                                color: white;
                                /* Couleur du texte */
                                text-decoration: none;
                                /* Supprimer le soulignement par défaut */
                                font-weight: bold;
                                /* Gras */
                                padding: 10px 20px;
                                /* Ajouter de l'espace autour du texte */
                                border: 2px solid black;
                                /* Bordure noire */
                                border-radius: 10px;
                                /* Bordure arrondie */
                                background-color: pink;
                                /* Fond rose */
                                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
                                /* Ombre */
                                transition: all 0.3s ease;
                                /* Transition fluide pour l'effet hover */
                            }

                            /* Style du lien lorsqu'il est survolé */
                            button.custom-link:hover {
                                background-color: black;
                                /* Changement de couleur de fond au survol */
                                color: pink;
                                /* Changement de couleur de texte au survol */
                                box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);
                                /* Ombre plus prononcée au survol */
                            }
  </style>
</head>
  <body >

    <div class="box" >
        <div class="head">
            <div class="resHead">Reçu de réservation</div>
            <div class="empHead"></div>
            <!--<div class="logoHead"><img src="images/logo.png" alt="logo"></div>-->
        </div>
        <div class="summaryContext">
            <div class="resCodeBox">
                <h3></h3>
                <h4 style="color:rgb(128, 128, 128)"></h4>
               
            </div>
            <div class="contai">
                <div class="resCodeBox">
                    <div class="outDate10">
                    <h2>: Numéro de réservation </h2>
                    </div>
                    <div class="outDate11">
                    <div class="resCode">BV13970209127</div></div>
                   
                    <br>
                    <h3>Téléphone du propriétaire: M. Bazargi 09123456789</h3>
                </div>
                <!--<div class="idCode">Code villa: 123</div>-->
                <div class="hostNum"></div>
                <br>
                <div class="date">
                    <div class="inDate">
                    <div class="outDate1">
                        <h4 style="color:rgb(128, 128, 128) "> : Date d'arrivée </h4>
                        </div>
                        <div class="outDate2">
                        <h3><?= $res_info['DDA'] ?></h3>
                        </div>
                        <div class="outDate4">
                        <span style="color: #00c9c9;">  14:00</span>
                        </div>
                    </div>
                    <div class="outDate">
                        <div class="outDate1">
                        <h4 style="color:rgb(128, 128, 128)">: Date de départ </h4>
                        </div>
                        <div class="outDate3">
                        <h3><?=$res_info['DDP'] ?></h3>
                        </div>
                        <div class="outDate4">
                        <span style="color: #d03675;;">  12:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="">
            <div class="detailContext">
            <div class="outDate5">
                <h2>Détails de la réservation</h2>
                </div>
                <div class="guest">
                <div class="outDate6">
                    <div class="guestStr"><strong> Invité :</div> 
                 </div> 
                 <div class="outDate7">
                    <div class="guestName"><?= $user_info['nom'] ?></div> </div>
                </div>
                <hr>
                <div class="money">
                    
                    <div class="">
                        <ul>
                        <div class="outDate8">
                            <li style=margin:10px;>Nombre de personnes :</li> </div>
                            <div class="outDate9">
                            <li>1 Personne </li>
                            </div>
                            <li style="visibility:hidden; font-size: 5px;">""</li>
                            <li><input type="text"></li>
                            <li><input type="text"></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="map"></div>
        </div>
        <hr>
        <div class="footer">
            <div class="resDate">
                <h6>Date et heure de la réservation sur le site: Jeudi 22 Ordibehesht 97 à 11:45</h6>
            </div>
            <div class="telBack">
                <span>02128423732</span>
            </div>
        </div>
    </div>
    <form method="post" action="">
    <input type="hidden" name="action" value="generer_qr_code">
    <input type="submit" value="Générer QR Code" style="background-color:  black; /* Black */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width:180px ;">

</form>

    <div>
         <button class="" id=""></button>
     </div>
        <script src="../view/pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
        <script src="html2pdf.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


  </body>
</html>
