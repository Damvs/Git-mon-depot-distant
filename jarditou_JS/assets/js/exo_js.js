//AFFICHER DU TEXTE EXO 1
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


//OPERATEUR EXO 1
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


//CONDITIONS Exo 1
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


//CONDITIONS Exo 2
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


//CONDITIONS Exo 3
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


//BOUCLES Exo 1
/*
var i=1;
var prenom;
do
{
    
    prenom = window.prompt("Saisissez le prénom N°"+i+"\n"+"ou Clic sur Annuler pour arrêter la saisie.");
    
    console.log("Prénom N°"+i+"      "+prenom);
    
    i++;
}while (prenom!=null && prenom.length!=0);
*/

//BOUCLES Exo 2
/*var N = parseInt(window.prompt("Entrer un nombre"));

for (i=0; i < N; i++) {
    console.log(i);
}
*/

//BOUCLES Exo 3
/*
var N;
var som = 0;
var i=0;

do {
    N= parseInt(window.prompt("Entrer un Nombre, Entrer 0 pour Terminer"));
    som=som+N;
    if (N==0) 
    {
        break;   
    }
    i++;

} while (N!=0);

console.log("La somme est : " + som);
console.log("La moyenne est : " + som/i);
*/


//BOUCLES Exo 4
/*
var X = parseInt(window.prompt("Entrer le nombre à multiplier"));
var N = parseInt(window.prompt("Entrer le nombre de multiple désiré"));
var i = 1;

while (i<=N) 
{
    console.log(i + " x " + X + " = " + i*X);
    i++; 
}
*/

//BOUCLES Exo 5

/*var voyelle = ["a", "e", "i", "o", "u", "y", "A", "E","I","O","U","Y"];
var mot = window.prompt("Entrer un mot");
var NbrV=0;
var lettre;
var i;
var voy= "";
var consonne;


for(i=0; i<mot.length; i++) 
{
    lettre = mot.substr(i,1);

    if (voyelle.indexOf(lettre)>=0)
    {
        //voy += mot[i] +',';
        NbrV++;
    }

//consonne = mot.length - NbrV;    
}

console.log("Le nombre de voyelle est : "+NbrV);
console.log("Le nombre de consonne est : "+consonne)
//console.log(voy)
*/

//FONCTION Exo 1
/*
var x;
var y;
var img;

function affichageImg(img) 
{
    //On inclut une balise img html avec src ""
    document.write('<img src="' + img + ' ">');
}

function produit(x,y)
{
    x= window.prompt("Entrer un nombre");
    y= window.prompt("Entrer un multiplicateur");
    result=x*y;
    cube=x*x*x
    affichageImg("src/img/papillon.jpg") ;
    document.write("<br>Le produit de "+x+" x "+y+" est égal à "+result+" <br>Le cube de "+x+" est égal à " + cube);
}

/*function affichageImg(img) 
{
    var img = document.createElement("img");
    img.src ="src/img/papillon.jpg";
    document.getElementById("img").appendChild(img);
    return img
}

produit(x,y)
*/

//FONCTIONS Exo 2
var str1;
var str2;
var n;

function strtok(str1,str2,n) {
    str1=window.prompt("Entrer une phrase");
    n=parseInt(window.prompt("Entrer un nombre"));
    str2=str1.split(["  "]);
    document.write(str1.substr(str2,n));
}

strtok(str1,str2,n)