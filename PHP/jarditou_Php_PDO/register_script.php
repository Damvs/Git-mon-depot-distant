<?php
date_default_timezone_set('Europe/Paris');

$users_nom=$_POST['nom'];
$users_prenom=$_POST['prenom'];
$users_mail=$_POST['mail'];
$users_motdepasse=$_POST['mdp'];
$users_login=$_POST['login'];
$users_date_inscription= new DateTime();


require "connexion_jarditouDB.php"; 

try{
// Construction de la requête INSERT sans injection SQL
$requete = $db->prepare("INSERT INTO users (users_nom,users_prenom,users_mail,users_login,users_motdepasse,users_date_inscription) VALUES (:users_nom,:users_prenom,:users_mail,:users_login,:users_motdepasse,:users_date_inscription)");

// Association des valeurs aux paramètres
$requete->bindValue(':users_nom', $users_nom, PDO::PARAM_STR);
$requete->bindValue(':users_prenom', $users_prenom, PDO::PARAM_INT);
$requete->bindValue(':users_mail', $users_mail, PDO::PARAM_INT);
$requete->bindValue(':users_login', $users_login, PDO::PARAM_INT);
$requete->bindValue(':users_motdepasse', $users_motdepasse, PDO::PARAM_INT);
$requete->bindValue(':users_date_inscription', $users_date_inscription, PDO::PARAM_INT);

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


?>