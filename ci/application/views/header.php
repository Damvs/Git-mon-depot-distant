<!-- application/views/liste.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Liste des produits</title>
</head>

<body>
    <header>
        <?php foreach ($header as $title) {
            echo "<h1>".$title."</h1>";
        }
        //var_dump($header); ?>
    </header>