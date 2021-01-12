<?php 
    include("header.php");
?>

    <!------------
        TABLEAU
    ------------->
        <section>
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
                        </tr>
                    </thead>
<?php
    echo $_SESSION["role"];
    require "connexion_jarditouDB.php"; // Connexion base
    $requete = "SELECT * FROM produits";
    $result = $db->query($requete);
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { 
            
    ?>

                    <tbody class="border border-dark">
                        <tr class="table-secondary">
                            <td class="w-25 bg-warning"><img src="<?php echo "src/img/";echo $row->pro_id;echo "."; echo $row->pro_photo ?>" alt="imgproduit" class="img-fluid"></td>
                            <td><?php echo $row->pro_id ?></td>
                            <td><?php echo $row->pro_ref ?></td>
                            <?php 
                                if ($_SESSION["role"]=="admin"){echo '<td class="bg-warning"><a class="text-danger text-uppercase" href="details.php?pro_id='.$row->pro_id.'"'.'title="Modifier"><u><b>'.$row->pro_libelle.'</b></u></a></td>';
                            }else if ($_SESSION["role"]=="user"){echo '<td class="bg-warning">'.$row->pro_libelle.'</td>';} 
                            ?>
                            <td><?php echo $row->pro_prix."€" ?></td>
                            <td><?php echo $row->pro_stock ?></td>
                            <td><?php echo $row->pro_couleur ?></td>
                            <td><?php echo $row->pro_d_ajout ?></td>
                            <td></td>
                            <td><?php echo $row->pro_bloque ?></td>
                        </tr>
                    </tbody>

    
    <?php 
        }

        
$result->closeCursor(); // Libère la connexion au serveur

}  
?>
                </table>
            </div>
        </div>
    </section>
    <!--------------
        Fin Tableau
    --------------->    
    
    <!-- Bouton créer nouvel enregistrement -->
    <div class="col-12">
        <a class="btn btn-success btn mr-3 border-dark" href="add_form.php">Ajouter un produit</a>
    </div>

    <br>

<?php 
    include("footer.php");
?>