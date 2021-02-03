<?php 
    include("header.php");
?>

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
                        <label for="categories">Categorie :</label> <br>
                        <input type="text"  class="form-text form-control" name="categories" id="categories">
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
    
<?php 
    include("footer.php");
?>    
