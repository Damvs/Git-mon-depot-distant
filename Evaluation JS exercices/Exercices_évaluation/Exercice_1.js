function agePop() {
    var a = 0;
    var b = 0;
    var c = 0;

    do {
        var n = parseInt(window.prompt("Veuillez entrer votre âge"));
        if (n<20) {
            a++;
        } 
        else if (n>40) 
        {
            b++;
        } 
        else if (n>=20 && n<=40)
        {
            c++;
        }
        else if (n<0) 
        {
            alert("Saisie erronée")     
        }

    } while (n<100);
    
    document.write("Il y a " + a + " personne(s) de moins de 20 ans <br>")
    document.write("Il y a " + b + " personne(s) de plus de 40 ans <br>")
    document.write("Il y a " + c + " personne(s) à un âge moyen <br>")
    
}

agePop()