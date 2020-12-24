<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form action="login_script.php" method="POST">
<label for="login">Identifiant :</label>
<input type="text" name="login" id="login">
<label for="mdp">Mot de Passe</label>
<input type="text" name="mdp" id="mdp">
<input type="submit" name="submit" value="Connexion">
</form>


</body>
</html>