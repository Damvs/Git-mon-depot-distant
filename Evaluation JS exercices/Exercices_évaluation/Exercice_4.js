function commande() {
    var PU = parseInt(window.prompt("Veuillez entrer le prix du produit"));//On demande le prix du produit
    var QTECOM = parseInt(window.prompt("Veuillez entrer le nombre de produit"));//On demande le nombre de ce produit
    var TOT = PU * QTECOM;//On calcul le total prix * quantité
    var REM = 0;//On met la remise à 0 si quelqu'un s'amuse à mettre 0 produit avec un prix de 0, sinon TOTREM donne Not a number
    var TOTREM;
    var PAP;
    var PORT;

    console.log(PU);
    console.log(QTECOM);
    console.log(TOT);

    if (TOT>=100 && TOT<=200) //Si le Total est entre 100 et 200 inclus
    {
        REM = TOT*0.05; //on effectue la remise de 5%
    } 
    else if (TOT>200)// si le total est au dessus de 200
    {
        REM = TOT*0.10;//on effectue la remise de 10%
    }
    console.log(REM);
    
    TOTREM = TOT - REM;//on soustrait le total avec la remise pour avoir le total remisé

    if (TOTREM>500) //si total remisé est au dessus de 500
    {
        PORT = 0;// alors frais de port gratuit
    } 
    else
    {
        PORT = TOTREM*0.02;// sinon frais de port = total remisé* 2%
    }

    if (PORT<6 && PORT!=0) //si frais de port en dessous de 6 et non gratuit
    {
        PORT = 6;//alors valeur minimal des frais de port est de 6
    }

    PAP = TOTREM + PORT;//prix total à payer = total remisé + frais de port
    document.write("Le Prix à payer est de : " + PAP + " €");
    document.write("<br> Avec une Total remisé de : " + TOTREM + " €");
    document.write("<br> Dont Prix de Port de : "+ PORT + " €");
}

commande();