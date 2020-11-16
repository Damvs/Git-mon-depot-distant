//Fonction qui demande à l'utilisateur quelle table de multiplication il désire afficher
function UserTableMultiplication(X) {
    var i = 1; //on set l'itérateur de la boucle, qui est aussi le multiplicateur
    var X = parseInt(window.prompt("Entrer le nombre à multiplier")); //on demande le nombre correspondant à la table que l'utilisateur veut afficher avec une fenêtre
    //on crée la boucle afin d'afficher chaque ligne avec l'opération + résultat
    while (i<=10) 
    {
        document.write(i + " x " + X + " = " + i*X+"<br>");//affichage de l'opération + résultat
        i++; 
    }
}

UserTableMultiplication();//execution de la fonction
document.write("<br>");

//Fonction qui donne la table de multiplication de X, dont la valeur est 5 pour l'exemple
function TableMultiplication(X) {
    var i = 1;//on set l'itérateur de la boucle, qui est aussi le multiplicateur
    var X;//on déclare X
    //on crée la boucle afin d'afficher chaque ligne avec l'opération + résultat
    while (i<=10) 
    {
        document.write(i + " x " + X + " = " + i*X+"<br>");//affichage de l'opération + résultat
        i++; 
    }
}

TableMultiplication(5);//execution de la fonction avec 5 comme exemple
