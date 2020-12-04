<html>
<body>

<?php 


var_dump($_FILES);

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
   $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);
   move_uploaded_file($_FILES["fichier"]["tmp_name"], "depot_fichier_upload/pro_id.$extension"); //renomer et deplacer le fichier upload     

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    

//chmod("C:\Users\Damien\Desktop\Depot_image_server\pho_id.jpg", 0744); //Tout droit pour user, lecture seule pour les autres

?> 
</body>
</html>