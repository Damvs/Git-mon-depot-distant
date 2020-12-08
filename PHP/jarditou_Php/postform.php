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
$sujet = valid_donnees($_POST["sujet"]);
$question = valid_donnees($_POST["question"]);
$checkform = valid_donnees($_POST["checkform"]);

function valid_donnees($donnees){
   $donnees = trim($donnees); //Enleve les espaces avant et après la saisie
   $donnees = stripslashes($donnees);//Enleve les antislashes
   $donnees = htmlspecialchars($donnees);//Permet affichage certains char en html
   return $donnees;
}

if (!empty($nom) //Si non vide
   && strlen($nom)<=30 //si longueur plus petite que 30
   && preg_match("/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/",$nom))
   {
      echo $nom."<br>";
   }
   else
   {
      echo "Le nom doit être renseigné <br>";
   }

if (!empty($prenom) 
   && strlen($prenom)<=30 
   && preg_match("/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/",$prenom))
   {
      echo $prenom."<br>";
   }
else
   {
      echo "Le prénom doit être renseigné <br>";
   }

if (isset($sexe)) //Si le bouton est set
   {
      echo $sexe."<br>";
   }
else
   {
      echo "Vous devez cocher une case entre Masculin et Féminin <br>";
   }

if (!empty($birthday)) 
   {
      echo $birthday."<br>";
   }
else
   {
      echo "Vous devez saisir une date valide";
   }


if (!empty($codepostal)
   && preg_match("/^\d{5}$/",$codepostal)) //regex code postal
{
   echo $codepostal."<br>";
}
else
{
   echo "Veuillez entrer un code postal valide <br>";
}

if (!empty($adresse))
{
   echo $adresse."<br>";
}

if (!empty($ville))
{
   echo $ville."<br>";
}

if (!empty($mail)
   && preg_match("/^([\w\.-]+@[\w\.-]+\.[\w\s]+)$/",$mail)) //regex mail
{
   echo $mail."<br>";
}
else
{
   echo "Veuillez entrer un mail valide <br>";
}

if (!empty($sujet))
{
   echo $sujet."<br>";
}

if (!empty($question))
{
   echo $question."<br>";
}
else
{
   echo "Veuillez poser votre question <br>";
}

if (!empty($checkform))
{
   echo "checkform Ok <br>";
}
else
{
   echo "Veuillez valider le traitement du dossier en cochant la case prévue à cet effet";
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