<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel PHP</title>
</head>
<body>

<h1>Catalogue Hotel</h1>
<!-- Notre code php -->
<?php
    
    require "connexion_hotelDB.php"; // Connexion base
    $requete = "SELECT * FROM station";
    $result = $db->query($requete);
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { ?>

            <div> 
                <?php  echo $row->sta_nom; ?> <!--On affiche le nom des stations -->
                <a href="detail.php?sta_id=<?php echo $row->sta_id ?>">Détail</a> <!-- Affiche le détail pour chaque station -->
                <a href="modif.php?sta_id=<?php echo $row->sta_id ?>">Modifier</a>
                <a href="script_delete.php?sta_id=<?php echo $row->sta_id  ?>">Supprimer</a>
            </div> 
        <?php 
        }

        
$result->closeCursor(); // Libère la connexion au serveur

}  
?>
<br> <br>
<a href="hotel_create.php">Créer un nouvel enregistrement</a>

</body>
</html>