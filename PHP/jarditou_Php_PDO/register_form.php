<?php 
    include("header.php");
?>

    <section>
        <div class="row mx-auto">
            <div class="col-12 shadow mb-3 mt-3 pt-1 text-center bg-secondary">
                <form action="register_script.php" method="POST">
                    <label class ="mt-2" for="login">Identifiant :</label>
                    <input type="text" name="login" id="login" required><br>
                    <label for="mdp">Mot de Passe :</label>
                    <input type="password" name="mdp" id="mdp" required><br>
                    <label for="confirmmdp">Confirmer le Mot de Passe :</label>
                    <input type="password" name="confirmmdp" id="confirmmdp" required><br>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required><br>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" required><br>
                    <label for="mail">Adresse Mail :</label>
                    <input type="text" name="mail" id="mail" required><br>
                    <input type="submit" name="submit" value="Inscription" class="mb-2">
                </form>
                <p class="">Déjà inscrit? <a href="login_form.php">Connectez-vous ici</a></p>
            </div>
        </div>
    </section>
    <br>

<?php 
    include("footer.php");
?>