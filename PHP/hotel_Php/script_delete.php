<?php 

$sta_id=$_GET['sta_id'];
require "connexion_hotelDB.php";

$requete = $db->prepare("DELETE FROM station WHERE sta_id=:sta_id");

$requete->bindValue(':sta_id', $sta_id, PDO::PARAM_INT);

$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();

// Redirection vers index.php
header("Location: hotel_index.php");
exit;


?>