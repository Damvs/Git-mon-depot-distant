<?php 
header('Access-Control-Allow-Origin: http://localhost/ajax_demo');  

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

$str_requete = "SELECT * FROM liens";
$result = $db->query($str_requete);

$liens = $result->fetchAll(PDO::FETCH_OBJ);
echo json_encode($liens);

$result->closeCursor();
?>