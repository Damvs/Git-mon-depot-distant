<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jarditou-Accueil</title>
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
                                <a class="nav-link" href="index.php">Accueil </a> <span class="sr-only">(current)</span>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link " href="tableau_Copie.php">Tableau </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
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

    <!------------
        TABLEAU
    ------------->
        <section>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-image table-responsive">
                    <thead>
                        <tr class="table-active bg-light">
                            <th>Photo</th>
                            <th>ID</th>
                            <th>Référence</th>
                            <th>Libellé</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Couleur</th>
                            <th>Ajout</th>
                            <th>Modif</th>
                            <th>Bloqué</th>
                        </tr>
                    </thead>
<?php
    
    require "connexion_jarditouDB.php"; // Connexion base
    $requete = "SELECT * FROM produits";
    $result = $db->query($requete);
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { 
    ?>

                    <tbody class="border border-dark">
                        <tr class="table-secondary">
                            <td class="w-25 bg-warning"><img src="<?php echo "src/img/";echo $row->pro_id;echo "."; echo $row->pro_photo ?>" alt="imgproduit" class="img-fluid"></td>
                            <td><?php echo $row->pro_id ?></td>
                            <td><?php echo $row->pro_ref ?></td>
                            <td class="bg-warning"><a class="text-danger text-uppercase" href="details.php?pro_id=<?php echo $row->pro_id; ?>" title="Modifier"><u><b><?php echo $row->pro_libelle ?></b></u></a></td>
                            <td><?php echo $row->pro_prix."€" ?></td>
                            <td><?php echo $row->pro_stock ?></td>
                            <td><?php echo $row->pro_couleur ?></td>
                            <td><?php echo $row->pro_d_ajout ?></td>
                            <td></td>
                            <td><?php echo $row->pro_bloque ?></td>
                        </tr>
                    </tbody>

    
    <?php 
        }

        
$result->closeCursor(); // Libère la connexion au serveur

}  
?>
                </table>
            </div>
        </div>
    </section>
    <!--------------
        Fin Tableau
    --------------->
    <br>
    <footer>
        <div class="row">
            <div class="col-12">
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



</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>