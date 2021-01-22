<?php //echo validation_errors();//affichage des erreurs retourner par le controleur ?>
<?php echo form_open(); //ouverture du formulaire ?>

<div class="form-group">
    <label for="pro_libelle">Libellé</label>
    <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value="<?php echo set_value('pro_libelle'); ?>">
    <?php echo form_error('pro_libelle'); ?>
</div> 

<div class="form-group">
    <label for="pro_ref">Référence</label>
    <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo set_value('pro_ref'); ?>">
    <?php echo form_error('pro_ref');//contrairement à validation_errors() plus haut, 
    //mettre cette fonction ici permet d'afficher l'erreur au plus pres du champ concerné avec attribut "name"?>
</div> 

<button type="submit" class="btn btn-dark">Ajouter</button>    
</form>