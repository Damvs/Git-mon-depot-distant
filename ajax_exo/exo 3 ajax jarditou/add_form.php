<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><noscript> activer jquery</noscript>    
    <title>Ajout-jarditou</title>
</head>
<body>
    <div class="container">

    <section>
        <div class="row col-12 my-3">
        </div>
        <div class="row">
            <div class="col-12">
                <form action="add_script.php" method="post" id="formulaire_ajout">

                    <div class="form-group mt-4">
                        <label for="reference">Reference : </label>
                        <input type="text"  class="form-text form-control" name="reference" id="reference">
                    </div>   
                    <div class="form-group mt-4">
                        <label for="categories_parent">Catégorie :</label> <br>
                        <select  class="form-control" name="categories_parent" id="categories_parent"></select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="categories">Sous-catégorie :</label> <br>
                        <select class="form-control" name="categories" id="categories"></select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="libelle">Libellé : </label>
                        <input type="text" class="form-text form-control" name="libelle" id="libelle">
                    </div>                    
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <textarea name="description" id="description" cols="155" rows="3" class="col-12 border" ></textarea>
                    </div>                    
                    <div class="form-group mt-4">
                        <label for="prix">Prix : </label>
                        <input type="text" class="form-text form-control" name="prix" id="prix">
                    </div>
                    <div class="form-group mt-4">
                        <label for="stock">Stock : </label>
                        <input type="text" class="form-text form-control" name="stock" id="stock">
                    </div>
                    <div class="form-group mt-4">
                        <label for="couleur">Couleur : </label>
                        <input type="text" class="form-text form-control" name="couleur" id="couleur">
                    </div>

                    <div class="form-group mt-4">
                        <p>Produit bloqué ? : </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="oui" value="oui" checked>
                            <label class="form-check-label" for="oui">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="non" value="non">
                            <label class="form-check-label" for="non">Non</label>
                        </div>
                    </div> 
                    <div class="form-group mt-4">
                        <label for="d_ajout">Date d'ajout : </label>
                        <input type="date" class="form-text form-control" name="d_ajout" value="<?php echo  date("Y-m-d") ?>"  id="d_ajout" readonly>
                    </div>
                    <div class="form-group mt-2">
                        <label for="fichier">Image : </label> <br> 
                        <input type="file" name="fichier"> 
                    </div>
                    <div class="form-group mt-4">
                        <a class="btn btn-secondary btn-lg mr-3 border-dark" href="tableau.php">Retour</a>
                        <button type="submit" class="btn btn-success btn-lg mr-1 border-dark" id="bouton_envoi">Envoyer</button>
                        <button type="reset" class="btn btn-danger btn-lg border-dark" id="bouton_annuler">Annuler</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
    <br>
</div>
</body>
</html>

<!-- <script>

    $(document).ready(function() {

        $("#categories_parent").load("listeoptions1.php");

        $("#categories_parent").change(function() {
        
            $("#categories").load("listeoptions2.php?id_cat_parent="+$("#categories_parent").val());
        });
    });

    
</script> -->

<script>

    $(document).ready(function() {
        
        $("#categories_parent").ready(function() {
            $.get({
                url: "listeoptions1.php", 
                success: function(resultat) 
                {
                    $("#categories_parent").html(resultat);
                }
            });
            return false;  
        });
    });

    $(document).ready(function() {
        $("#categories_parent").change(function() {
        var cat_parent_id=$("#categories_parent").val();
            $.get({
                url: "listeoptions2.php", 
                data: 'id='+cat_parent_id,
                success: function(resultat) 
                {
                    $("#categories").html(resultat);
                }
            });
            return false;  
        });
    });

    
</script>