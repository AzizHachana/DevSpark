<?php

$db = config::getConnexion();
$query = "SELECT NomP, likes, dislikes FROM pays";
$statement = $db->prepare($query);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

$PaysNames = [];
$percentagesLikes = [];
$percentagesDislikes = [];

foreach ($data as $row) {
    $PaysNames[] = $row['NomP'];

    $like = $row['likes'];
    $dislike = $row['dislikes'];

    $totalVotes = $like + $dislike;

    $percentageLike = ($totalVotes > 0) ? ($like / $totalVotes) * 100 : 0;
    $percentageDislike = ($totalVotes > 0) ? ($dislike / $totalVotes) * 100 : 0;

    $percentagesLikes[] = $percentageLike;
    $percentagesDislikes[] = $percentageDislike;
}
