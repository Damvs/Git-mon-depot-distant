function searchName() {
    var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

    while (tab[0]!="")//Tant que le premier index du tableau n'est pas à blanc, on laisse la boucle tourné, tous les prenoms ne sont pas encore trouvé
    {
        var nom = window.prompt("Veuillez entrer un prénom");//Demande d'un prénom
        var n = tab.indexOf(nom);//chercher l'index du prénom
        if (tab[n]==nom) //si il y a bien un index qui correspond au prénom
        {
        tab.splice(n,1);//alors supprimer le nom par son index
        tab.push("");//alors ajouter une valeur à blanc à la fin du tableau
        }
        else
        {
           alert("Ce nom n'est pas dans la liste") //Sinon afficher que le nom n'est pas dans la liste
        }
        console.log(tab)
    }
}

searchName();