<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fichier-lien</title>
</head>
<body>

<?php

$fp= fopen("ListeLiens.txt","r");
while (!feof($fp)) {
    $ligne=fgets($fp,255);
    echo "<a href=\"".$ligne."\">Lien</a>"."<br>";
}


?>




</body>
</html>