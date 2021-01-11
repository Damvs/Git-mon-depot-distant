
<?php 
    include("header.php");
?>

    <section>
        <div class="row mx-auto">
            <div class="col-12 shadow mb-3 mt-3 pt-1 text-center bg-secondary">
                <form action="login_script.php" method="POST">
                    <label class="mr-4" for="login">Identifiant :</label>
                    <input type="text" name="login" id="login">
                    <br>
                    <label for="mdp">Mot de Passe :</label>
                    <input type="password" name="mdp" id="mdp">
                    <br>
                    <input type="submit" name="submit" value="Connexion">
                </form>
                <p>Vous êtes nouveau ici? <a href="register_form.php">S'inscrire</a></p>
            </div>
        </div>
    </section>
    <br>

<?php 
    include("footer.php");
?>