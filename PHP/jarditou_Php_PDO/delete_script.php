<?php 

$pro_id=$_GET['pro_id'];
require "connexion_hotelDB.php";

$requete = $db->prepare("DELETE FROM produits WHERE pro_id=:pro_id");

$requete->bindValue(':pro_id', $pro_id, PDO::PARAM_INT);

$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();

// Redirection vers index.php
header("Location: tableau.php");
exit;


?>