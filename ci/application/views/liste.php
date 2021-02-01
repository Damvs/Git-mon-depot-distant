<?php //var_dump();?>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-image table-responsive">
                    <thead>
                        <tr class="table-active bg-light">
                            <th>Photo</th>
                            <th>ID</th>
                            <th>Référence</th>
                            <th>Libellé</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Couleur</th>
                            <th>Ajout</th>
                            <th>Modif</th>
                            <th>Bloqué</th>
                            <th scope="col">Panier <?php if(!empty($this->session->panier) or $this->session->panier==array())
                            {                            
                                $iTotal = 0;
                                $article['pro_qte'] ="0";
                                foreach($this->session->panier as $article){
                                $iTotal += $article['pro_qte'];
                                    if($iTotal == NULL)
                                    {
                                        $iTotal=0;
                                    }
                                
                            }
                
                
                //echo  '<span class="badge badge-success">'.$iTotal.' Produit(s)</span> ';
                
                //sizeof($this->session->panier);
                
                            }?>
                <a href="<?php echo site_url('panier/afficherPanier');?>"><?php echo  '<span class="badge badge-success">'.$iTotal.' Produit(s)</span> ';?></a></th><!--titre colonne 9-->
                        </tr>
                    </thead>
                    <tbody class="border border-dark">
                        <tr class="table">
                            <?php //var_dump($produits);                
                            if(!empty($liste_produits)) {
                                foreach ($liste_produits as $row) 
                                {
                                    echo '<td ><img src="' . base_url('assets/images/' . $row->pro_id . '.' . $row->pro_photo . '') . '" class="img-fluid w-75" /></td>';
                                    echo "<td>".$row->pro_id."</td>";
                                    echo "<td>".$row->pro_ref."</td>";
                                    echo "<td>".$row->pro_libelle."</td>";
                                    echo "<td>".$row->pro_prix."€"."</td>";
                                    echo "<td>".$row->pro_stock."</td>";
                                    echo "<td>".$row->pro_couleur."</td>";
                                    echo "<td>".$row->pro_d_ajout."</td>";
                                    echo "<td>".$row->pro_d_modif."</td>";
                                    //echo "<td>".$row->pro_bloque."</td>";
                                                
                                    /* Pour chaque produit, on ouvre un formulaire qui appellera 
                                    * la méthode 'panier/ajouterPanier' 
                                    * ... oh oh oh! ça sent la boucle...  
                                    */
                                    if ($row->pro_bloque == 1) {
                                        echo '<td><span class="bloque">bloqué</span></td>';
                                    } else {
                                        echo '<td></td>';
                                    }
                                    if ($row->pro_bloque != 1 && $row->pro_stock > 0) {
                                        echo '  <td>' . form_open('panier/ajouterPanier', 'class="form-inline"');
                                    
                                    
                                    ?>
                                <!-- <td> -->
                                    <!-- champ visible pour indiquer la quantité à commander -->
                                    <input type="number" class="form-control" name="pro_qte" id="pro_qte" value="1">
                                    <input type="hidden" name="pro_prix" id="pro_prix" value="<?= $row->pro_prix ?>">
                                    <input type="hidden" name="pro_id" id="pro_id" value="<?= $row->pro_id ?>">
                                    <input type="hidden" name="pro_libelle" id="pro_libelle_<?php ?>" value="<?= $row->pro_libelle ?>">

                                    <!-- Bouton 'Ajouter au panier' -->
                                    <div class="form-group">
                                        <input type="submit" value="Ajouter au panier" class="btn btn-default btn-sm btn-success">            
                                    </div>
                                    </form>
                                <!-- </td> -->
                                <?php 
                                }
                                else
                                {
                                    echo '<td></td>';
                                } 
                                ?> 
                                
                        </tr>
                                <?php } 
                                }?>
                            
                    </tbody>
                </table>
        </div>

