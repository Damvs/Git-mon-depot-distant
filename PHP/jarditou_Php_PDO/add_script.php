<?php


$pro_ref=$_POST['reference'];
$pro_libelle=$_POST['libelle'];
$pro_description=$_POST['description'];
$pro_prix=$_POST['prix'];
$pro_stock=$_POST['stock'];
$pro_couleur=$_POST['couleur'];
$pro_bloque=$_POST['bloque'];
$pro_d_ajout=date('Y-m-d');
$pro_id;
$pro_photo;
$pro_cat_id="";

echo $pro_d_ajout;

require "connexion_jarditouDB.php"; 

try{
// Construction de la requête INSERT sans injection SQL
$requete = $db->prepare("INSERT INTO produits (pro_ref,pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_bloque,pro_d_ajout,pro_cat_id) VALUES (:pro_ref,:pro_libelle,:pro_description,:pro_prix,:pro_stock,:pro_couleur,:pro_bloque,:pro_d_ajout,:pro_cat_id)");

// Association des valeurs aux paramètres
$requete->bindValue(':pro_ref', $pro_ref, PDO::PARAM_STR);
$requete->bindValue(':pro_libelle', $pro_libelle, PDO::PARAM_INT);
$requete->bindValue(':pro_description', $pro_description, PDO::PARAM_INT);
$requete->bindValue(':pro_prix', $pro_prix, PDO::PARAM_INT);
$requete->bindValue(':pro_stock', $pro_stock, PDO::PARAM_INT);
$requete->bindValue(':pro_couleur', $pro_couleur, PDO::PARAM_INT);
$requete->bindValue(':pro_bloque', $pro_bloque, PDO::PARAM_INT);
$requete->bindValue(':pro_d_ajout', $pro_d_ajout, PDO::PARAM_INT);
$requete->bindValue(':pro_cat_id', $pro_cat_id, PDO::PARAM_INT);

// Exécution de la requête
$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

    echo "La connexion à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}

$cat_nom=$_POST['cat_nom'];


require "connexion_jarditouDB.php"; 

try{
// Construction de la requête INSERT sans injection SQL
$requete = $db->prepare("INSERT INTO categories (cat_nom) VALUES (:cat_nom)");

// Association des valeurs aux paramètres
$requete->bindValue(':cat_nom', $cat_nom, PDO::PARAM_STR);

// Exécution de la requête
$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

    echo "La connexion à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}


//Recuperation de l'image dans les dossiers
var_dump($_FILES);

array(
        0=>"There is no error, the file uploaded with success",
        1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
        2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        3=>"The uploaded file was only partially uploaded",
        4=>"No file was uploaded",
        6=>"Missing a temporary folder"
);

// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
   /* Le type est parmi ceux autorisés, donc OK, on va pouvoir 
       déplacer et renommer le fichier */
   $pro_photo = substr(strrchr($_FILES["fichier"]["name"], "."), 1);
   move_uploaded_file($_FILES["fichier"]["tmp_name"], "jarditou_Php_PDO/src/.$pro_id.$pro_photo"); //renomer et deplacer le fichier upload     

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    

// Redirection vers la page index.php
header("Location: tableau.php");
exit;
?>