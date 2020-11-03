/*
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
*/

/*
var a="100";
var b=100;
var c=1.00;
var d=true;


window.alert("Ceci est une chaîne de caractères : " + a);
b=b--;
window.alert(b);
c=c+parseInt(a);
window.alert(c);
d=isNaN(d);
window.alert(d);
*/

/*
var nbr = window.prompt("Entrez un nombre"), nombre;

if (nbr%2 == 0) 
{
    window.alert("Ce nombre est Pair");    
}
else
{
    window.alert("Ce nombre est Impair");
}
*/

/*var an = 2020
var age = an -(window.prompt("Entrer votre année de naissance"))

if (age>150)
{
   window.alert("Année de naissance invalide")
}
else if (age<18) 
{
    window.alert(age + " Vous êtes mineur")
} else {
   window.alert(age + " Vous êtes majeur") 
}
*/

/*var n1 = parseInt(window.prompt("Entrer votre premier nombre"));
var op = window.prompt("Entrer le signe de votre opération parmis les suivants : + - * /");
var n2 = parseInt(window.prompt("Entrer votre second nombre"));

if (isNaN(n1) || isNaN(n2)) 
{
    window.alert("Vous devez saisir un nombre")
} 


switch(op)
{
    case"+":
        window.alert(n1+n2);
        break;

    case"-":
        window.alert(n1-n2);
        break;

    case"*":
        window.alert(n1*n2);
        break;

    case"/":
        if (n2!=0) 
        {
            window.alert(n1/n2);
        } 
        else 
        {
            window.alert("Vous ne pouvez pas diviser un nombre par 0");
        }
        break;

    default:
        window.alert("Le signe de l'opération est erroné");
}
*/

