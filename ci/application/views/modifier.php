<?php echo form_open(); ?>

<input type="hidden" name="id" value="<?php echo $produit->pro_id; ?>"> 

<div class="form-group">
    <label for="pro_libelle">Libellé</label>
    <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value="<?php echo set_value('pro_libelle', $produit->pro_libelle); ?>">
</div>    

<div class="form-group">
    <label for="pro_ref">Référence</label>
    <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo set_value('pro_ref', $produit->pro_ref); ?>">
</div>    

<button type="submit" class="btn btn-dark">Modifier</button>  
</form> 