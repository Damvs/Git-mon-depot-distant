<?php 
    include("header.php");
?>

    <section>
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

                    <div class="row col-12 my-5 w-25 img rounded mx-auto d-block">
                        <img src="<?php echo "src/img/";echo $row->pro_id;echo "."; echo $row->pro_photo ?>" alt="imgproduit" class="img-fluid">
                    </div>
                    <div class="form-group mt-4">
                        <label for="reference">Reference : </label>
                        <input type="text"  class="form-text form-control" value="<?php echo $row->pro_ref ?>" name="reference" id="reference" readonly disabled>
                    </div>                    
                    <div class="form-group mt-4">
                        <p>Categorie : </p>
                        <select class="custom-select" name="categories" readonly disabled>
                            <option selected><?php echo $row->cat_nom ?></option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="reference">Libellé : </label>
                        <input type="text" class="form-text form-control" name="libelle" id="libelle" value="<?php echo $row->pro_libelle ?>" readonly disabled>
                    </div>                    
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <textarea name="description" id="description" cols="155" rows="3" class="col-12 border" readonly disabled><?php echo $row->pro_description ?></textarea>
                    </div>                    
                    <div class="form-group mt-4">
                        <label for="prix">Prix : </label>
                        <input type="text" class="form-text form-control" value="<?php echo $row->pro_prix ?>€" name="prix" id="prix" readonly disabled>
                    </div>
                    <div class="form-group mt-4">
                        <label for="stock">Stock : </label>
                        <input type="text" class="form-text form-control" value="<?php echo $row->pro_stock ?>" name="stock" id="stock" readonly disabled>
                    </div>
                    <div class="form-group mt-4">
                        <label for="couleur">Couleur : </label>
                        <input type="text" class="form-text form-control" value="<?php echo $row->pro_couleur ?>" name="couleur" id="couleur" readonly disabled>
                    </div>

                    <div class="form-group mt-4">
                        <p>Produit bloqué ? : </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="oui" value="oui" checked disabled>
                            <label class="form-check-label" for="oui">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloque" id="non" value="non" readonly disabled>
                            <label class="form-check-label" for="non">Non</label>
                        </div>
                    </div> 
                    <div class="form-group mt-4">
                        <label for="date_ajout">Date d'ajout : </label>
                        <input type="date" class="form-text form-control" value="<?php echo $row->pro_d_ajout ?>" name="date_ajout" id="date_ajout" readonly disabled>
                    </div>
                    <div class="form-group mt-4">
                        <label for="date-modif">Date de modification : </label>
                        <input type="datetime" class="form-text form-control" value="<?php echo $row->pro_d_modif ?>" name="date-modif" id="date-modif" readonly disabled>
                    </div>
                    <div class="form-group mt-4">
                        <a class="btn btn-secondary btn-lg mr-3 border-dark" href="tableau.php">Retour</a>
                        <a class="btn btn-warning btn-lg mr-3 border-dark" href="update_form.php?pro_id=<?php echo $row->pro_id; ?>">Modifier</a>
                        <a class="btn btn-danger btn-lg mr-3 border-dark" href="delete_form.php?pro_id=<?php echo $row->pro_id; ?>">Supprimer</a>
                    </div>
                </form>
            </div>
        </div>


    </section>
    <br>
    
<?php 
    include("footer.php");
?>