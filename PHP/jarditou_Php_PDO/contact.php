<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jarditou-Contact</title>
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
                                <a class="nav-link" href="tableau_Copie.php">Tableau</a>
                            </li>
                            <li class="nav-item active">
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
            <p>* Ces zones sont obligatoires</p>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="postform.php" method="post" id="formulaire_contact" enctype="multipart/form-data">
                    <h1>Vos Coordonnées</h1>
                    <div class="form-group mt-4">
                        <label for="nom">Nom*</label>
                        <input type="text" class="form-text form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" required>
                        <span id="missNom"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="prenom">Prénom*</label>
                        <input type="text" class="form-text form-control" name="prenom" id="prenom" placeholder="Veuillez saisir votre prénom" required>
                        <span id="missPrenom"></span>
                    </div>
                    <div class="form-group mt-4">
                        <p><d1>Sexe*</d1></p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="feminin" value="feminin" checked required>
                            <label class="form-check-label" for="feminin">Féminin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="masculin" value="masculin" required>
                            <label class="form-check-label" for="masculin">Masculin</label>
                        </div>
                        <span id="missSexe"></span>
                    </div> 
                    <div class="form-group mt-4">
                        <label for="birthday">Date de Naissance*</label>
                        <input type="date" class="form-text form-control" name="birthday" id="birthday" required>
                        <span id="missBirthday"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="codepostal">Code postal*</label>
                        <input type="text" class="form-text form-control" name="codepostal" id="codepostal" maxlength="5" required>
                        <span id="missCodepostal"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-text form-control" name="adresse" id="adresse">
                    </div>
                    <div class="form-group mt-4">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-text form-control" name="ville" id="ville">
                    </div>
                    <div class="form-group mt-4">
                        <label for="mail">Email*</label>
                        <input type="email" class="form-text form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr" required>
                        <span id="missMail"></span>
                    </div>
                    <h1>Votre demande</h1>
                    <div class="form-group mt-4">
                        <p><d1>Sujet</d1></p>
                        <select class="custom-select" name="sujet">
                            <option selected>Veuillez sélectionner un sujet</option>
                            <option value="1">Promotion</option>
                            <option value="2">Recrutement</option>
                            <option value="3">SAV</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="question">Votre question* :</label> <br>
                        <textarea name="question" id="question" cols="155" rows="3" class="col-12 border" required></textarea>
                        <span id="missQuestion"></span>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkform" id="checkform" required>
                            <label class="form-check-label" for="checkform">J'accepte le traitement informatique de ce formulaire*</label> <br>
                            <span id="missCheckform"></span>
                        </div>
                    </div>
                    <div class="form-group mt-2">   
                        <input type="file" name="fichier"> 
                    </div>
                    <button type="submit" class="btn btn-dark mr-1 border-primary" id="bouton_envoi">Envoyer</button>
                    <button type="reset" class="btn btn-dark border-primary" id="bouton_annuler">Annuler</button>
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
    <script src="assets/js/contact_form.js"></script>
</body>
</html>