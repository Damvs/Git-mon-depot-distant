
<?php

        //Tente de se connecter
        try 
    {
        //Instanciation de la connexion à la base
        $db = new PDO("mysql:host=localhost;charset=utf8;dbname=jarditou", "root", "",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        // Configure des attributs PDO au gestionnaire de base de données
        // Ici nous configurons l'attribut ATTR_ERRORMODE en lui donnant la valeur ERRMODE_EXCEPTION (cf. Ressources pour en savoir plus).

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 

        //Si échec de la connexion (du try), on attrape l'exception avec catch
    catch (Exception $e) 
    {
        // On affiche le message et le code de l'erreur
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
        //Le script s'arrête ici.
    }

    $requete = "SELECT cat_nom,cat_id FROM categories WHERE cat_parent=:id";
    $result = $db->prepare($requete);
    $result->bindValue(':id', $_GET["id"], PDO::PARAM_STR);
    $result->execute();
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) 
    {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { 
            $select2="<option value='".$row->cat_id."'>".$row->cat_nom."</option>";
            echo json_encode($select2, JSON_UNESCAPED_SLASHES);
        }
        $result->closeCursor(); // Libère la connexion au serveur
    } 

?>
