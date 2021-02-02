<?php

    //Tente de se connecter
    try 
{
    //Instanciation de la connexion à la base
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=jarditou", "root", ""); 

    // Configure des attributs PDO au gestionnaire de base de données
    // Ici nous configurons l'attribut ATTR_ERRORMODE en lui donnant la valeur ERRMODE_EXCEPTION (cf. Ressources pour en savoir plus).

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

    //Si échec de la connexion (du try), on attrape l'exception avec catch
catch (Exception $e) 
{
    // On affiche le message et le code de l'erreur
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
    //Le script s'arrête ici.
}

?>

<section>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-image table-responsive">

<?php
    $requete = "SELECT * FROM produits";
    $result = $db->query($requete);
    $nbLigne = $result->rowCount(); // Nombre de lignes retournées par la requête
    if ($nbLigne > 1) {             
        while ($row = $result->fetch(PDO::FETCH_OBJ)) // Tant qu'il y a des lignes à afficher :
        { 
            
    ?>

                    <tbody class="border border-dark">
                        <tr class="table-secondary">
                            <td><?php echo $row->pro_id ?></td>
                            <td><?php echo $row->pro_ref ?></td>
                            <?php echo '<td class="bg-warning">'.$row->pro_libelle.'</td>';?>
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

