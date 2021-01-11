<?php
date_default_timezone_set('Europe/Paris');

$users_nom=valid_donnees($_POST['nom']);
$users_prenom=valid_donnees($_POST['prenom']);
$users_mail=valid_donnees($_POST['mail']);
$users_motdepasse=password_hash(valid_donnees($_POST['mdp']),PASSWORD_DEFAULT);
$users_confirmmdp=valid_donnees($_POST['confirmmdp']);
$users_login=valid_donnees($_POST['login']);
$users_date_inscription= new DateTime();
$users_derniere_connexion= new DateTime();


function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

var_dump($users_nom);
var_dump($users_prenom);
var_dump($users_mail);
var_dump($users_motdepasse);
var_dump($users_login);
var_dump($users_date_inscription);
echo "<br>";

//if (isset($_POST['Envoyer']) && $_POST['Envoyer'] == 'Envoyer')
//{
    if (!empty($users_nom)
    && strlen($users_nom) <= 50
    && !empty ($users_prenom)
    && strlen($users_prenom) <= 50
    && !empty ($users_login)
    && strlen($users_login) <= 50
    && preg_match("^[A-Za-z '-]+$^",$users_nom)
    && preg_match("^[A-Za-z '-]+$^",$users_prenom)
    && !empty($users_mail)
    && filter_var($users_mail, FILTER_VALIDATE_EMAIL))
    {
        if (valid_donnees($_POST['mdp']) == valid_donnees($_POST['confirmmdp']))
        {
            $erreur = NULL;   
            
            require "connexion_jarditouDB.php";

            // Selection des données dans les tables 'user' à l'aide d'une requête préparée
            $check = $db->prepare('SELECT users_mail FROM users WHERE users_mail=:users_mail');
            // On execute la requête
            $check->execute(array(
                'users_mail' => $users_mail
                ))or die(print_r($check->errorInfo())); // On traque l'erreur s'il y en a une
            $num_rows = $check->rowCount();
            //pareil pour login
            $check2 = $db->prepare('SELECT users_login FROM users WHERE users_login=:users_login');
            $check2->execute(array(
                'users_login' => $users_login
                ))or die(print_r($check2->errorInfo())); // On traque l'erreur s'il y en a une
            $num_rows2 = $check2->rowCount();
                
            if($num_rows==0 and $num_rows2==0)
            {
                require "connexion_jarditouDB.php"; 

                try{
                    // Construction de la requête INSERT sans injection SQL
                    $requete = $db->prepare("INSERT INTO users (users_nom,users_prenom,users_mail,users_login,users_motdepasse,users_date_inscription,users_derniere_connexion) VALUES (:users_nom,:users_prenom,:users_mail,:users_login,:users_motdepasse,:users_date_inscription,:users_derniere_connexion)");

                    // Association des valeurs aux paramètres
                    $requete->bindValue(':users_nom', $users_nom);
                    $requete->bindValue(':users_prenom', $users_prenom);
                    $requete->bindValue(':users_mail', $users_mail);
                    $requete->bindValue(':users_login', $users_login);
                    $requete->bindValue(':users_motdepasse', $users_motdepasse);
                    $requete->bindValue(':users_date_inscription', $users_date_inscription->format('Y-m-d H:i:s'));
                    $requete->bindValue(':users_derniere_connexion', $users_derniere_connexion->format('Y-m-d H:i:s'));


                    // Exécution de la requête
                    $requete->execute();

                    // Libération de la connexion au serveur de BDD
                    $requete->closeCursor();

                    header("Location:login_form.php".$erreur);
                    exit;
                
                }

                // Gestion des erreurs
                catch (Exception $e) {

                    echo "La connexion à la base de données a échoué ! <br>";
                    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
                    echo "Erreur : " . $e->getMessage() . "<br>";
                    echo "N° : " . $e->getCode();
                    die("Fin du script");
                }
            }
            if ($num_rows!=0)
            {
                echo 'Cet email est deja inscrit !<br>';
            }
            if ($num_rows2!=0)
            {
                echo 'Cet identifiant est déjà inscrit !<br>';
            }
        }
        else
        {
            echo "Les 2 mots de passe sont différents !<br>";
        }
    }
    if (filter_var($users_mail, FILTER_VALIDATE_EMAIL) == false)
    {
        echo "mail invalide <br>" ;
    }
//}

$hash = '$2y$10$yZQuwfAtZ8tBQJJkKTUJTelM2Xq4nD7OPAXkJ9pcFW5FmH5wsK2Fu';

if (password_verify('damv', $hash)) {
    echo 'Le mot de passe est valide !<br>';
} else {
    echo 'Le mot de passe est invalide.<br>';
}
?>
