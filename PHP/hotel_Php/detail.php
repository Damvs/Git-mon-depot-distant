<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>
<body>

<?php

require "connexion_hotelDB.php";

?>

<?php

try {
    // Récupération de l'identifiant concerné, passé en GET
    $sta_id=$_GET['sta_id'];

    $requete = "SELECT * FROM station where sta_id=".$sta_id;
    $result = $db->query($requete);

    // Récupération du résultat de la requête

    $row = $result->fetch(PDO::FETCH_OBJ);

    // Libération de la connexion au serveur de BDD
    $result->closeCursor();
}

catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}
?>

<div>

     Identifiant : <?php echo   $row->sta_id."<br>"; ?>
     Nom de la station : <?php echo   $row->sta_nom."<br>"; ?>
     Altitude de la station : <?php  echo   $row->sta_altitude."<br>"; ?>

</div>

</body>
</html>