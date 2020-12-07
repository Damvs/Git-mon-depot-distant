<html>
<body>

<?php 

$nom = valid_donnees($_POST["nom"]);
$prenom = valid_donnees($_POST["prenom"]);
$sexe = valid_donnees($_POST["sexe"]);
$birthday = valid_donnees($_POST["birthday"]);
$codepostal = valid_donnees($_POST["codepostal"]);
$adresse = valid_donnees($_POST["adresse"]);
$ville = valid_donnees($_POST["ville"]);
$mail = valid_donnees($_POST["mail"]);
$question = valid_donnees($_POST["question"]);

function valid_donnees($donnees){
   $donnees = trim($donnees); //Enleve les espaces avant et après la saisie
   $donnees = stripslashes($donnees);//Enleve les antislashes
   $donnees = htmlspecialchars($donnees);//Permet affichage certains char en html
   return $donnees;
}

if (!empty($nom) 
   && strlen($nom)<=30 
   && preg_match("^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$",$nom))
   {
      echo "Ok";
   }
   else
   {
      echo "Le nom doit être renseigné";
   }

if (!empty($prenom) 
   && strlen($prenom)<=30 
   && preg_match("^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$",$prenom))
   {
      echo "Ok";
   }
else
   {
      echo "Le prénom doit être renseigné";
   }

if (isset($sexe)) 
   {
      echo "Ok";
   }
else
   {
      echo "Vous devez cocher une case entre Masculin et Féminin";
   }

if (checkdate($birthday)) 
   {
      echo "Ok";
   }
else
   {
      echo "Vous devez saisir une date valide";
   }






var_dump($_FILES);

//affichage de l'erreur
array(
        0=>"There is no error, the file uploaded with success",
        1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
        2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        3=>"The uploaded file was only partially uploaded",
        4=>"No file was uploaded",
        6=>"Missing a temporary folder"
);

// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir 
       déplacer et renommer le fichier */
    $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1); //set l'extesion du fichier lors du renommage et du déplacement
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "depot_fichier_upload/pro_id.$extension"); //renomer et deplacer le fichier upload     

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    

?> 
</body>
</html>