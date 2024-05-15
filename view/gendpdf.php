<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require_once '../config.php';
require_once '../model/Reservation.php';
$sql = "SELECT * FROM reservation";
$db = config::getConnexion();
$query = $db->query($sql);
$reservation=$query->fetchAll();
ob_start();
require_once '../pdf-content.php';
$html = ob_get_clean();
ob_end_clean();
require_once '../dompdf/autoload.inc.php';

$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf=new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$fichier = 'reservation.pdf';
$dompdf->stream($fichier);






?>