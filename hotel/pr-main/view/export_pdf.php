<?php

require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

require '../../config.php'; 
$pdo = Config::getConnexion();

$sql = "SELECT Nom, Adresse, Pays, image FROM hotel";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$hotels = $stmt->fetchAll(PDO::FETCH_ASSOC);

$html = <<<HTML
<style>
 
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-bottom: 20px;
                    }
                    th, td {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>';
<h1>Hotel Details</h1>
<table>
    <tr>
    <th>Nom</th>
    <th>Adresse</th>
    <th>Pays</th>
    <th>Image</th>
    </tr>
    HTML;
    <?php foreach ($hotels as $hotel): ?>
    $html .= <<<HTML
    <tr>
        <td><?= $hotel['id']; ?></td>
        <td><?= $hotel['Nom']; ?></td>
        <td><?= $hotel['Adresse']; ?></td>
        <td><?= $hotel['Ville']; ?></td>
    HTML;
}
$html .= '</table>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("hotel_file", array('Attachment' => 0));


?>