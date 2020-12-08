<?php 
if (file_exists("jarditou_index_header.php") ) 
{
    include("jarditou_index_header.php");
} 
else 
{
    // Erreur (à gérer) 404 not found
} 
?>

<div class="row">
            <div class="col-12">
                <img src="src/img/promotion.jpg" class="img-fluid" alt="promotion">
            </div>
        </div>
    </header>

    <section>
        <div class="row mx-auto">
            <div class="col-12 col-lg-8 shadow mb-3">
                <br>
                <h2>L'entreprise</h2>
                    <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
                    <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                    <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie	</p>
                <h2>Qualité</h2>
                    <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet. Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
                <h2>Devis gratuit</h2>
                    <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dignissimos, earum enim, nobis odit aspernatur aliquam vitae architecto minima deleniti ea delectus dolore. Deserunt veniam tempore hic sunt, laborum quia.</p>
            </div>
            <div class="col-12 col-lg-4 text-center bg-warning shadow mb-3">
                <br>
                <h2>[Colonne de droite]</h2>
            </div>
        </div>
    </section>
    <br>


<?php 
    
if (file_exists("jarditou_index_footer.php") ) 
{
    include("jarditou_index_footer.php");
} 
else 
{
    // Erreur (à gérer) 404 not found
} 
?>