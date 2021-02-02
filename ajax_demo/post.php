<?php 
try 
{      
   $db = new PDO('mysql:host=localhost;dbname=sites;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));   
} 
catch (Exception $e) 
{
   echo'Erreur : '.$e->getMessage().'<br>';
   echo'N° : '.$e->getCode(); 
   die('Fin du script');
}

/*
if (isset($_POST)) 
{
   // var_dump($_POST);
   echo"<script>alert('Posté !');</script>";
}
*/

$str_requete = "SELECT * FROM liens WHERE id=".$_POST['id'];
$result = $db->query($str_requete);

// Solutions OK pour l'afpa 
while ($liens = $result->fetch(PDO::FETCH_OBJ))
{
   echo $liens->titre."<br>";
}

/* Solutions perso : HS 
$liens = $result->fetchAll(PDO::FETCH_OBJ);

// echo gettype($liens);

foreach ($liens as $lien) 
{
   echo $lien->titre."<br>";   
}
*/

// $result->closeCursor();
?>