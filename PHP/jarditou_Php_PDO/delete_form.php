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
                        <h1 class="text-center"><b><?php echo $row->pro_libelle ?></b></h1>
                    </div>
                    <div class="row col-12">
                        <p class="mx-auto">Êtes vous sûr de vouloir supprimer <b>"<?php echo $row->pro_libelle ?>"</b> de la base de données ?</p>
                    </div>
                    <div class="mt-4 text-center">                        
                        <a class="btn btn-danger btn-lg mr-3 border-dark float-center" href="delete_script.php?pro_id=<?php echo $row->pro_id; ?>">Supprimer</a>
                        <a class="btn btn-dark btn-lg mr-3 border-dark" href="details.php?pro_id=<?php echo $row->pro_id; ?>">Annuler</a>
                    </div>
                </form>
            </div>
        </div>


    </section>
    <br>
    
<?php 
    include("footer.php");
?>    
