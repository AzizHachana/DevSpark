<?php
$pdo = new PDO("mysql:host=localhost;dbname=atelierphp", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query("SELECT sexe, COUNT(*) AS count FROM unityuser GROUP BY sexe");
$sexeData = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalUsers = array_sum(array_column($sexeData, 'count'));

$sexePercentages = array_reduce($sexeData, function ($carry, $item) use ($totalUsers) {
    $percentage = ($item['count'] / $totalUsers) * 100; // Change 'sexe' to 'count'
    $carry[$item['count']] = round($percentage, 2);
    return $carry;
}, []);
?>
