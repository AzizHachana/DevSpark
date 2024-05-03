<?php
include '../controller/PaysC.php';

$PaysC = new PaysC();
$Continent = $_GET['Continent'];

if (!empty($Continent)) {
    $Pays = $PaysC->searchPaysByContinent($Continent);
} else {
    $Pays = $PaysC->listPays();
}

foreach ($Pays as $country) {
    // Affichez les pays comme vous le faites actuellement dans le fichier Blog.php
}
?>
