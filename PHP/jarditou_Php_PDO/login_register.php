<?php 
    session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jarditou-Inscription</title>
</head>

<body>



<div class="container">
    <header>
        <div class="row mx-auto">
            <div class="col-6 d-none d-lg-block">
                <img src="src/img/jarditou_logo.jpg" class="img-fluid m-2" width="30%" alt="jarditou_logo">
            </div>
            <div class="col-6">
                <h1 class="text-right d-none d-lg-block mt-2 mr-5">Tout le jardin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">Jarditou.com</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tableau.php">Tableau</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login_form.php">Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="login_register.php">S'incrire</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="src/img/promotion.jpg" class="img-fluid" alt="promotion">
            </div>
        </div>
    </header>

    <section>
        <div class="row mx-auto">
            <div class="col-12 shadow mb-3 mt-3 pt-1 text-center bg-secondary">
                <form action="login_register.php" method="POST">
                    <label class ="mt-2" for="login">Identifiant :</label>
                    <input type="text" name="login" id="login" required><br>
                    <label for="mdp">Mot de Passe :</label>
                    <input type="text" name="mdp" id="mdp" required><br>
                    <label for="confirmmdp">Confirmer le Mot de Passe :</label>
                    <input type="text" name="confirmmdp" id="confirmmdp" required><br>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required><br>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" required><br>
                    <label for="mail">Adresse Mail :</label>
                    <input type="text" name="mail" id="mail" required><br>
                    <input type="submit" name="submit" value="Inscription" class="mb-2">
                </form>
            </div>
        </div>
    </section>
    <br>
    <footer>
        <div class="row">
            <div class="col-12 mt-n3">
                <nav class="navbar navbar-dark bg-dark rounded navbar-expand mx-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">mentions légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">horaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">plan du site</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
<?php
date_default_timezone_set('Europe/Paris');

$users_nom=valid_donnees($_POST['nom']);
$users_prenom=valid_donnees($_POST['prenom']);
$users_mail=valid_donnees($_POST['mail']);
$users_motdepasse=password_hash(valid_donnees($_POST['mdp']),PASSWORD_DEFAULT);
$users_confirmmdp=valid_donnees($_POST['confirmmdp']);
$users_login=valid_donnees($_POST['login']);
$users_date_inscription= new DateTime();

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
                'users_mail' => $_POST['mail']
                ))or die(print_r($check->errorInfo())); // On traque l'erreur s'il y en a une
            $num_rows = $check->rowCount();
            //pareil pour login
            $check2 = $db->prepare('SELECT users_login FROM users WHERE users_login=:users_login');
            $check2->execute(array(
                'users_login' => $_POST['login']
                ))or die(print_r($check2->errorInfo())); // On traque l'erreur s'il y en a une
            $num_rows2 = $check2->rowCount();
                
            if($num_rows==0 and $num_rows2==0)
            {
                require "connexion_jarditouDB.php"; 

                try{
                    // Construction de la requête INSERT sans injection SQL
                    $requete = $db->prepare("INSERT INTO users (users_nom,users_prenom,users_mail,users_login,users_motdepasse,users_date_inscription) VALUES (:users_nom,:users_prenom,:users_mail,:users_login,:users_motdepasse,:users_date_inscription)");

                    // Association des valeurs aux paramètres
                    $requete->bindValue(':users_nom', $users_nom);
                    $requete->bindValue(':users_prenom', $users_prenom);
                    $requete->bindValue(':users_mail', $users_mail);
                    $requete->bindValue(':users_login', $users_login);
                    $requete->bindValue(':users_motdepasse', $users_motdepasse);
                    $requete->bindValue(':users_date_inscription', $users_date_inscription->format('Y-m-d H:i:s'));

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
            }
            if ($num_rows!=0)
            {
                echo 'Cet email est deja inscrit !';
            }
            if ($num_rows2!=0)
            {
                echo 'Cet identifiant est déjà inscrit !';
            }
        }
        else
        {
            echo "Les 2 mots de passe sont différents !";
        }
    }
    if (filter_var($users_mail, FILTER_VALIDATE_EMAIL) == false)
    {
        echo "mail invalide";
    }
//}


?>


</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
