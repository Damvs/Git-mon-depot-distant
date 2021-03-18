$(document).ready(function() 
{
    $("#bouton_envoi").click(function(event) 
    {
        let nom = $('#nom');
        let missNom = $('#missNom');
        let validNom = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/;
        let prenom = $('#prenom');
        let missPrenom = $('#missPrenom');
        let validPrenom = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/;
        let sexe = $('#sexe');
        let missSexe = $('#missSexe');
        let birthday = $('#birthday');
        let missBirthday = $('#missBirthday');
        let codepostal = $('#codepostal');
        let missCodepostal = $('#missCodepostal');
        let validCodepostal = /^\d{5}$/;
        let mail = $('#mail');
        let missMail = $('#missMail');
        let validMail = /^([\w\.-]+@[\w\.-]+\.[\w\s]+)$/;
        let question = $('#question');
        let missQuestion = $('#missQuestion');
        let checkform = $('#checkform');
        let missCheckform = $('#missCheckform');
        let formValid = $('#bouton_envoi');
        let annuler = $('#bouton_annuler')
        verif();  
    });      

    $("#bouton_annuler").click(function(event) {
        verifAnnuler();
    });

    function verif(event) {

        if (nom.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault(); //on annule l'envoi
            missNom.textContent = '*Nom manquant'; //on met un message pour avertir l'utilisateur
            missNom.style.color = 'red'; //en rouge ça se voit mieux
        }else if (validNom.test(nom.value) == false){ //Si l'élément ne correspond pas au Regex
            event.preventDefault(); //on annule l'envoi
            missNom.textContent = '*Format du Nom incorrect';//message pour avertir
            missNom.style.color = 'orange';//en orange pour marquer la différence avec un champ vide
        } else {
        }

        if (prenom.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault();//on annule l'envoi
            missPrenom.textContent = '*Prénom manquant';
            missPrenom.style.color = 'red';   
        }else if (validPrenom.test(prenom.value) == false){ //Si l'élément ne correspond pas au Regex
            event.preventDefault();//on annule l'envoi
            missPrenom.textContent = '*Format du Prénom incorrect';
            missPrenom.style.color = 'orange';
        } else {
        }

        if (birthday.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault();//on annule l'envoi
            missBirthday.textContent = '*Date de naissance manquante';
            missBirthday.style.color = 'red';   
        } else {
        }

        if (codepostal.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault();//on annule l'envoi
            missCodepostal.textContent = '*Code Postal manquant';
            missCodepostal.style.color = 'red';   
        }else if (validCodepostal.test(codepostal.value) == false){ //Si l'élément ne correspond pas au Regex
            event.preventDefault();//on annule l'envoi
            missCodepostal.textContent = '*Format du Code Postal incorrect';
            missCodepostal.style.color = 'orange';
        } else {
        }

        if (mail.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault();//on annule l'envoi
            missMail.textContent = '*E-mail manquant';
            missMail.style.color = 'red';   
        }else if (validMail.test(mail.value) == false){ //Si l'élément ne correspond pas au Regex
            event.preventDefault();//on annule l'envoi
            missMail.textContent = '*Format du mail incorrect';
            missMail.style.color = 'orange';
        } else {
        }

        if (question.validity.valueMissing) //Si le champ est vide
        {
            event.preventDefault();//on annule l'envoi
            missQuestion.textContent = '*Veuillez décrire votre requête en quelques lignes';
            missQuestion.style.color = 'red';   
        }



        if (checkform.validity.valueMissing) //Si la case n'est pas cochée
        {
            event.preventDefault();//on annule l'envoi
            missCheckform.textContent = '*Veuillez cocher pour accepter le traitement de ce formulaire';
            missCheckform.style.color = 'red';
        }   

    }


    function verifAnnuler(event) 
    {   //Fenêtre d'avertissement en cas d'annulation de la saisie pour prévenir que le formulaire va être effacé
        if (window.confirm("Vous allez annuler votre saisie et effacer le formulaire \nVoulez-vous continuer ?") == false) 
        {
            event.preventDefault();//on annule le reset
        }
    }
}); 