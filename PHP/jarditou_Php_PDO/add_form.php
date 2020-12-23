<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jarditou-Ajout</title>
</head>

<body>
<div class="container">
    <header>
        <div class="row mx-auto">
            <div class="col-6 d-none d-lg-block">
                <img src="src/img/jarditou_logo.jpg" class="img m-2" width="30%" alt="jarditou_logo">
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
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tableau.php">Tableau</a>
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

    <section>
        <div class="row col-12 my-3">
        </div>
        <div class="row">
            <div class="col-12">
                <form action="add_script.php" method="post" id="formulaire_ajout">

                    <div class="form-group mt-4">
                        <label for="reference">Reference : </label>
                        <input type="text"  class="form-text form-control" name="reference" id="reference">
                    </div>                    
                    <div class="form-group mt-4">
                        <p>Categorie : </p>
                        <input type="text"  class="form-text form-control" name="categories" id="categories">
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="reference">Libellé : </label>
                        <input type="text" class="form-text form-control" name="libelle" id="libelle">
                    </div>                    
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <textarea name="description" id="description" cols="155" rows="3" class="col-12 border" ></textarea>
                    </div>                    
                    <div class="form-group mt-4">
                        <label for="prix">Prix : </label>
                        <input type="text" class="form-text form-control" name="prix" id="prix">
                    </div>
                    <div class="form-group mt-4">
                        <label for="stock">Stock : </label>
                        <input type="text" class="form-text form-control" name="stock" id="stock">
                    </div>
                    <div class="form-group mt-4">
                        <label for="couleur">Couleur : </label>
                        <input type="text" class="form-text form-control" name="couleur" id="couleur">
                    </div>

                    <div class="form-group mt-4">
                        <p>Produit bloqué ? : </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="oui" value="oui" checked>
                            <label class="form-check-label" for="oui">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="non" value="non">
                            <label class="form-check-label" for="non">Non</label>
                        </div>
                    </div> 
                    <div class="form-group mt-4">
                        <label for="d_ajout">Date d'ajout : </label>
                        <input type="date" class="form-text form-control" name="d_ajout" value="<?php echo  date("Y-m-d") ?>"  id="d_ajout" readonly>
                    </div>
                    <div class="form-group mt-2">
                        <label for="fichier">Image : </label> <br> 
                        <input type="file" name="fichier"> 
                    </div>
                    <div class="form-group mt-4">
                        <a class="btn btn-secondary btn-lg mr-3 border-dark" href="tableau.php">Retour</a>
                        <button type="submit" class="btn btn-success btn-lg mr-1 border-dark" id="bouton_envoi">Envoyer</button>
                        <button type="reset" class="btn btn-danger btn-lg border-dark" id="bouton_annuler">Annuler</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
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