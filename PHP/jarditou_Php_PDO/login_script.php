<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php 

$_SESSION["login"] = "damv";
$_SESSION["mdp"] = "damv1";



if ( !isset($_SESSION["login"]) OR $_SESSION["login"]!=$_POST["login"] OR $_SESSION["mdp"]!=$_POST["mdp"]) 
{
    header("Location:login_form.php".$erreur);
    exit;
}
else
{
    header("Location:login_success.php");
}

?>

</body>
</html>