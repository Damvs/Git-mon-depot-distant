var nom;
var prenom;
var sexe;

nom = window.prompt("Entrez votre nom");

prenom = window.prompt("Entrez votre prénom");

if (window.confirm("Etes-vous un homme")==true)
{
    sexe = "Monsieur";
} 
else 
{
    sexe = "Madame";
}

window.alert("Bonjour "+ sexe +" "+ nom +" "+ prenom +" "+ "\n" +"Bienvenue sur notre site web");
