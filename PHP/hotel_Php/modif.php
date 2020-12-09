<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification-Hotel</title>
</head>
<body>

<form action ="script_modif.php" method="post">
<?php

require "connexion_hotelDB.php";
$sta_id=$_GET['sta_id'];
// Construction de la requête
$requete = "SELECT * FROM station WHERE sta_id=".$sta_id;$result = $db->query($requete);
// Si la requête renvoit un seul et unique résultat, on ne fait pas de boucle !
$row = $result->fetch(PDO::FETCH_OBJ); 

// Libération de la connexion au serveur de BDD
$result->closeCursor();

?>

<div>
    <label>Identifiant de la station</label><br>
    <input type="text" value="<?php echo $row->sta_id ?>"  name="id" readonly>
</div>
<br>

<div>
    <label for="nom_for_label">Nom de la station</label><br>
    <input type="text" value="<?php echo $row->sta_nom ?>" name="nom" id="nom_for_label">
</div>
<br>

<div>
    <label for="altitude_for_label">Altitude</label><br>
    <input type="text" value="<?php echo $row->sta_altitude ?>"  name="altitude" id="altitude_for_label">
</div>

<br>

<input type="submit" value="Valider les modifications">

</body>
</html>