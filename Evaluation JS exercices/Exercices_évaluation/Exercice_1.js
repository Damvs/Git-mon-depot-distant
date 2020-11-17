function agePop() {
    var a = 0;//initialiser les compteurs à 0
    var b = 0;
    var c = 0;

    do {
        var n = parseInt(window.prompt("Veuillez entrer votre âge"));//Demander l'âge
        if (n<20) //Si âge est en dessous de 20
        {
            a++;//alors incrémenter la valeur de a
        } 
        else if (n>40) //Si âge est au dessus de 40
        {
            b++;//alors incrémenter la valeur de b
        } 
        else if (n>=20 && n<=40) //si âge entre 20 et 40 inclus
        {
            c++;//alors incrémenter la valeur de c
        }
        else if (n<0) //Si l'âge est négatif
        {
            alert("Saisie erronée")//alors afficher que la saisie est erronée 
        }

    } while (n<100);//Faire ça tant qu'un centenaire n'est pas rencontré
    
    document.write("Il y a " + a + " personne(s) de moins de 20 ans <br>")
    document.write("Il y a " + b + " personne(s) de plus de 40 ans <br>")
    document.write("Il y a " + c + " personne(s) à un âge moyen <br>")
    
}

agePop()