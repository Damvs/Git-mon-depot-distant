<?php 
    include("header.php");
?>

    <section>
        <div class="row col-12 my-3">
            <p>* Ces zones sont obligatoires</p>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="postform.php" method="post" id="formulaire_contact" enctype="multipart/form-data">
                    <h1>Vos Coordonnées</h1>
                    <div class="form-group mt-4">
                        <label for="nom">Nom*</label>
                        <input type="text" class="form-text form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" required>
                        <span id="missNom"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="prenom">Prénom*</label>
                        <input type="text" class="form-text form-control" name="prenom" id="prenom" placeholder="Veuillez saisir votre prénom" required>
                        <span id="missPrenom"></span>
                    </div>
                    <div class="form-group mt-4">
                        <p><d1>Sexe*</d1></p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="feminin" value="feminin" checked required>
                            <label class="form-check-label" for="feminin">Féminin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="masculin" value="masculin" required>
                            <label class="form-check-label" for="masculin">Masculin</label>
                        </div>
                        <span id="missSexe"></span>
                    </div> 
                    <div class="form-group mt-4">
                        <label for="birthday">Date de Naissance*</label>
                        <input type="date" class="form-text form-control" name="birthday" id="birthday" required>
                        <span id="missBirthday"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="codepostal">Code postal*</label>
                        <input type="text" class="form-text form-control" name="codepostal" id="codepostal" maxlength="5" required>
                        <span id="missCodepostal"></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-text form-control" name="adresse" id="adresse">
                    </div>
                    <div class="form-group mt-4">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-text form-control" name="ville" id="ville">
                    </div>
                    <div class="form-group mt-4">
                        <label for="mail">Email*</label>
                        <input type="email" class="form-text form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr" required>
                        <span id="missMail"></span>
                    </div>
                    <h1>Votre demande</h1>
                    <div class="form-group mt-4">
                        <p><d1>Sujet</d1></p>
                        <select class="custom-select" name="sujet">
                            <option selected>Veuillez sélectionner un sujet</option>
                            <option value="1">Promotion</option>
                            <option value="2">Recrutement</option>
                            <option value="3">SAV</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="question">Votre question* :</label> <br>
                        <textarea name="question" id="question" cols="155" rows="3" class="col-12 border" required></textarea>
                        <span id="missQuestion"></span>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkform" id="checkform" required>
                            <label class="form-check-label" for="checkform">J'accepte le traitement informatique de ce formulaire*</label> <br>
                            <span id="missCheckform"></span>
                        </div>
                    </div>
                    <div class="form-group mt-2">   
                        <input type="file" name="fichier"> 
                    </div>
                    <button type="submit" class="btn btn-dark mr-1 border-primary" id="bouton_envoi">Envoyer</button>
                    <button type="reset" class="btn btn-dark border-primary" id="bouton_annuler">Annuler</button>
                </form>
            </div>
        </div>


    </section>
    <br>

<?php 
    include("footer.php");
?>    
