function searchName() {
    var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

    while (tab[0]!="")
    {
        var nom = window.prompt("Veuillez entrer un prénom");
        var n = tab.indexOf(nom);
        if (tab[n]==nom) 
        {
        tab.splice(n,1);
        tab.push("");
        }
        else
        {
           alert("Ce nom n'est pas dans la liste") 
        }
        console.log(tab)
    }
}

searchName();