
    var nom = document.getElementById('nom');
    var missNom = document.getElementById('missNom');
    var validNom = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+([-'\s][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/;
    var prenom = document.getElementById('prenom');
    var missPrenom = document.getElementById('missPrenom');
    var validPrenom;
    var sexe = document.getElementsByName('sexe');
    var missSexe = document.getElementById('missSexe');
    var validSexe;
    var birthday = document.getElementById('birthday');
    var missBirthday = document.getElementById('missBirthday');
    var validBirthday;
    var codepostal = document.getElementById('codepostal');
    var missCodepotal = document.getElementById('missCodepostal');
    var validCodepostal;
    var mail = document.getElementById('mail');
    var missMail = document.getElementById('missMail');
    var validMail = /^([\w\.-]+@[\w\.-]+\.[\w\s]+)$/;
    var question = document.getElementById('question');
    var missQuestion = document.getElementById('missQuestion');
    var checkform = document.getElementById('checkform');
    var missCheckform = document.getElementById('missCheckform');
    var formValid = document.getElementById('bouton_envoi');
    var annuler = document.getElementById('bouton_annuler')

    formValid.addEventListener('click',verif);
    annuler.addEventListener('click', verifAnnuler);
    

function verif(event) {

    if (nom.validity.valueMissing) 
    {
     event.preventDefault();
     missNom.textContent = '*Nom manquant';
     missNom.style.color = 'red';   
    }else if (validNom.test(nom.value) == false){
        event.preventDefault();
        missNom.textContent = '*Format du nom incorrect';
        missNom.style.color = 'orange';
    } else {
    }
}

function verifAnnuler(event) 
{
    if (window.confirm("Vous allez annuler votre saisie et effacer le formulaire \nVoulez-vous continuer ?") == false)
    {
        event.preventDefault();
    }
}