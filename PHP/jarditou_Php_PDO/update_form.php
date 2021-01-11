<?php 
    include("header.php");
?>

    <section>
        <div class="row col-12 my-3">
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post" id="formulaire_modif">
                
                <?php

                require "connexion_jarditouDB.php";
                $pro_id=$_GET['pro_id'];
                // Construction de la requête
                $requete = "SELECT * FROM produits JOIN categories ON pro_cat_id=cat_id WHERE pro_id=".$pro_id;
                $result = $db->query($requete);
                // Si la requête renvoit un seul et unique résultat, on ne fait pas de boucle !
                $row = $result->fetch(PDO::FETCH_OBJ); 

                // Libération de la connexion au serveur de BDD
                $result->closeCursor();

                ?>


                    <div class="form-group mt-4">
                        <label for="id">ID : </label>
                        <input type="text"  class="form-text form-control" name="id" id="id" value="<?php echo $row->pro_id ?>" disabled>
                    </div>                    
                    <div class="form-group mt-4">
                        <label for="reference">Reference : </label>
                        <input type="text"  class="form-text form-control" name="reference" id="reference" placeholder="<?php echo $row->pro_ref ?>">
                    </div>                    
                    <div class="form-group mt-4">
                        <p>Categorie : </p>
                        <input type="text"  class="form-text form-control" name="categories" id="categories" placeholder="<?php echo $row->cat_nom ?>">
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="reference">Libellé : </label>
                        <input type="text" class="form-text form-control" name="libelle" id="libelle" placeholder="<?php echo $row->pro_libelle ?>">
                    </div>                    
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <textarea name="description" id="description" cols="155" rows="3" class="col-12 border" placeholder="<?php echo $row->pro_description ?>"></textarea>
                    </div>                    
                    <div class="form-group mt-4">
                        <label for="prix">Prix : </label>
                        <input type="text" class="form-text form-control" name="prix" id="prix" placeholder="<?php echo $row->pro_prix ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label for="stock">Stock : </label>
                        <input type="text" class="form-text form-control" name="stock" id="stock" placeholder="<?php echo $row->pro_stock ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label for="couleur">Couleur : </label>
                        <input type="text" class="form-text form-control" name="couleur" id="couleur" placeholder="<?php echo $row->pro_couleur ?>">
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
                        <input type="date" class="form-text form-control" name="d_ajout" value="<?php echo $row->pro_d_ajout ?>"  id="d_ajout" readonly>
                    </div>
                    <div class="form-group mt-4">
                        <label for="d_modif">Date de modification : </label>
                        <input type="date" class="form-text form-control" name="d_modif" value="<?php echo  date("Y-m-d") ?>"  id="d_modif" readonly>
                    </div>
                    <div class="form-group mt-2">
                        <label for="fichier">Image : </label> <br> 
                        <input type="file" name="fichier"> 
                    </div>
                    <div class="form-group mt-4">
                        <a class="btn btn-secondary btn-lg mr-3 border-dark" href="details.php?pro_id=<?php echo $row->pro_id; ?>">Retour</a>
                        <button type="submit" class="btn btn-success btn-lg mr-1 border-dark" id="bouton_envoi">Enregister la modification</button>
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