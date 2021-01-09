<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php 
date_default_timezone_set('Europe/Paris');

$users_login=valid_donnees($_POST['login']);
$users_motdepasse=valid_donnees($_POST['mdp']);
$users_derniere_connexion=new DateTime();

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

if (!empty($users_login)
&& strlen($users_login) <= 50
&& !empty ($users_motdepasse))
{
        
    session_start();

    require "connexion_jarditouDB.php";    
    $requete=$db->prepare("SELECT * FROM users where users_login=? limit 1");
    $requete->execute(array($users_login));
    $check=$requete->fetchAll();
    
    if(count($check)==0)
    {
        echo "Identifiant invalide";
    }
    else
    {   
        $requete2=$db->prepare("SELECT * FROM users where users_login=? limit 1");
        $requete2->execute(array($users_login));
        $check2=$requete2->fetch(PDO::FETCH_ASSOC);
        $users_nom= ucfirst($check2["users_nom"]);
        $users_prenom= ucfirst($check2["users_prenom"]);


        if (password_verify($users_motdepasse,$check2['users_motdepasse'])) {
            echo "mot de passe valide";
            //$_SESSION["login"]=$users_login;
            $_SESSION["login"]=$users_login;
            $_SESSION["users_nom"]=$users_nom;
            $_SESSION["users_prenom"]=$users_prenom;

            $requete3 = $db->prepare("UPDATE users SET users_derniere_connexion=:users_derniere_connexion WHERE users_login=:users_login");
            $requete3->bindValue(':users_derniere_connexion', $users_derniere_connexion->format('Y-m-d H:i:s'));
            $requete3->execute($users_derniere_connexion);
            $requete3->closeCursor(); //probleme ne stock pas en bdd

            $_SESSION["users_derniere_connexion"]=$users_derniere_connexion;

            header("location: index.php");
            exit();
        }
        else
        {
            echo "mot de passe invalide";
        }
    }
    
    

}
else
{
    //header ("Location: login_form.php");
    echo "Le nom d'utilisateur ou le mot de passe est incorrect";
}


?>

</body>
</html>