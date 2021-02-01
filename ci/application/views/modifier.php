<?php echo form_open(); ?>

<input type="hidden" name="id" value="<?php echo $produit->pro_id; ?>">

<section>
        <div class="row col-12 my-3">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="pro_libelle">Libellé</label>
                    <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value="<?php echo set_value('pro_libelle', $produit->pro_libelle); ?>">
                    <?php echo form_error('pro_libelle'); ?>
                </div> 

                <div class="form-group">
                    <label for="pro_ref">Référence</label>
                    <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo set_value('pro_ref', $produit->pro_ref); ?>">
                    <?php echo form_error('pro_ref');//contrairement à validation_errors() plus haut, 
                    //mettre cette fonction ici permet d'afficher l'erreur au plus pres du champ concerné avec attribut "name"?>
                </div> 

                <div class="form-group">
                        <label for="cat_nom">Categorie</label> <br>
                        <input type="text"  class="form-text form-control" name="cat_nom" id="cat_nom" value="<?php echo set_value('cat_nom') ,$categorie->cat_nom; ?>">
                </div>

                <div class="form-group">
                        <label for="pro_description">Description</label> <br>
                        <textarea name="pro_description" id="pro_description" cols="155" rows="3" class="col-12 border"><?php echo set_value('pro_description',$produit->pro_description); ?></textarea>
                </div>                    

                <div class="form-group">
                        <label for="pro_prix">Prix</label>
                        <input type="text" class="form-text form-control" name="pro_prix" id="pro_prix" value="<?php echo set_value('pro_prix',$produit->pro_prix); ?>">
                </div>

                <div class="form-group">
                        <label for="pro_stock">Stock</label>
                        <input type="text" class="form-text form-control" name="pro_stock" id="pro_stock" value="<?php echo set_value('pro_stock',$produit->pro_stock); ?>">
                </div>

                <div class="form-group">
                        <label for="pro_couleur">Couleur</label>
                        <input type="text" class="form-text form-control" name="pro_couleur" id="pro_couleur" value="<?php echo set_value('pro_couleur',$produit->pro_couleur); ?>">
                </div>

                <div class="form-group">
                    <p>Produit bloqué ? : </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pro_bloque" id="oui" value="oui" checked>
                        <label class="form-check-label" for="oui">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pro_bloque" id="non" value="non">
                        <label class="form-check-label" for="non">Non</label>
                    </div>
                </div> 

                <div class="form-group mt-4">
                        <label for="d_ajout">Date d'ajout : </label>
                        <input type="date" class="form-text form-control" name="d_ajout" value="<?php echo  date("Y-m-d") ?>"  id="d_ajout" readonly>
                </div>

                <button type="submit" class="btn btn-dark">Modifier</button>    
            </form>




<!-- 
<div class="form-group">
    <label for="pro_libelle">Libellé</label>
    <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value="<?php echo set_value('pro_libelle', $produit->pro_libelle); ?>">
</div>    

<div class="form-group">
    <label for="pro_ref">Référence</label>
    <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo set_value('pro_ref', $produit->pro_ref); ?>">
</div>    

<button type="submit" class="btn btn-dark">Modifier</button>  
</form>  -->