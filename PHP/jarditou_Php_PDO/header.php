

<?php
    // Initialiser la session
    session_start();

    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["login"]))
    {
        if (!strstr($_SERVER["REQUEST_URI"],"login_form.php") && !strstr($_SERVER["REQUEST_URI"],"register_form.php"))
        {
            header("Location: login_form.php");
            exit(); 
        }
    }
    if(!isset($_SESSION["role"]))
    {
        $_SESSION["role"]="user";
    }

    if(($_SESSION["role"]!="admin" && strstr($_SERVER["REQUEST_URI"],"details.php"))
    or($_SESSION["role"]!="admin" && strstr($_SERVER["REQUEST_URI"],"delete_form.php"))
    or($_SESSION["role"]!="admin" && strstr($_SERVER["REQUEST_URI"],"update_form.php"))
    or($_SESSION["role"]!="admin" && strstr($_SERVER["REQUEST_URI"],"add_form.php"))
    )
    {
        header("Location: tableau.php");
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jarditou</title>
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
                            <li class="nav-item <?php if (strstr($_SERVER["REQUEST_URI"],"index.php")){echo "active";} ?>">
                                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?php if (strstr($_SERVER["REQUEST_URI"],"tableau.php")){echo "active";} ?>">
                                <a class="nav-link" href="tableau.php">Tableau</a>
                            </li>
                            <li class="nav-item <?php if (strstr($_SERVER["REQUEST_URI"],"contact.php")){echo "active";} ?>">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item
                            <?php if(!isset($_SESSION["login"]))
                            { 
                               
                                if (strstr($_SERVER["REQUEST_URI"],"login_form.php"))
                                {
                                     echo "active";
                                }
                                ?>">
                                <?php echo '<a class="nav-link" href="login_form.php">Se connecter</a>';
                            }
                            ?>
                            </li>
                            <li class="nav-item
                            <?php if(!isset($_SESSION["login"]))
                            { 
                                if (strstr($_SERVER["REQUEST_URI"],"register_form.php"))
                                {
                                     echo "active";
                                }
                                ?>">
                                <?php echo '<a class="nav-link" href="register_form.php">S\'incrire</a>';
                            }    
                            ?>
                            </li>
                            <?php if(isset($_SESSION["login"]))
                            { 
                                echo'<li class="nav-item"> <a class="nav-link" href="logout.php">Se déconnecter</a>';
                            }
                            ?>
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
