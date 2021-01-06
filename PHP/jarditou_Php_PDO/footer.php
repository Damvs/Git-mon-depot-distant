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
// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");

// on lit le nombre indiqué dans ce fichier dans la variable
$visiteurs = fgets($fichier,255);

// on ajoute 1 au nombre de visiteurs
$visiteurs++;

// on se positionne au début du fichier
fseek($fichier,0);

// on écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);

// on referme le fichier moncompteur.txt
fclose($fichier);

// on indique sur la page le nombre de visiteurs
print("$visiteurs personnes sont passées par ici");
?>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php if (strstr($_SERVER["REQUEST_URI"],"contact.php")){echo "<script src='assets/js/contact_form.js'></script>";} ?>
</body>
</html>