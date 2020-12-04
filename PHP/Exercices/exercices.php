<html>
<body>
<?php 
/* $a = 6.32172; 
$b = intval($a); 
$c = doubleval($a); 
echo "$a - $b - $c","<br>"; 
echo"Fichier : ".__FILE__,", ligne : ".__LINE__,"<br>";
$myVar = "bonjour";
var_dump($myVar);
echo "<br>";
echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
$message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
error_log($message); 
*/

//Boucles Exo 1
/*$a = -1;
do {
    echo $a = $a + 2,"<br>";
} while ($a != 149);*/

//Boucles Exo 2
/*$a = 0;
do {
    echo "Je dois faire des sauvegardes régulières de mes fichiers <br>";
    $a++;
} while ($a != 500);
*/

//Boucles Exo 3
/*function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<thead><tr>'.$a.'</tr></thead>';
        $table .= '<tbody>'.'<tr>';
        $table .= '<th>'.$a.'</th>';
        for ($b=0; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.($a*$b).'</td>';
        }
        $table .= '</tr>'.'<tbody>';
    }
    $table .= '</table>';
    return $table;
}
 
echo table(12, 12);
*/

/*$table = "<table border='1'>";
for ($a=0; $a<=12; $a++){
    echo $table.="<thead>".$a."</thead>";
    echo $table.="<tr>".$a;
    echo $table.="<td>".($a*$a)."</td>";
    for ($a=0; $a<=12; $a++){
        echo $table.="<td>".($a*$a)."</td>";
    }
    echo $table.="</tr>";
}
$table.="</table>";
*/

//Fonctions Exo 1
/*
function calculator($nbr1,$operator,$nbr2)
{
    $nbr1;
    settype($nbr1,"float");
    $nbr2;
    settype($nbr2,"float");
    $operator;

    switch ($operator) {
        case '+':
            $resultat = $nbr1 + $nbr2;
            return $resultat;
        case '-':
            $resultat = $nbr1 - $nbr2;
            return $resultat;
        case '*':
            $resultat = $nbr1 * $nbr2;
            return $resultat;
        case '/':
            $resultat = $nbr1 / $nbr2;
            return $resultat;
        default:
            $resultat = "Ce signe n'est pas accepté, veuillez utiliser un des signes suivant: +, -, * , / entre ' ' ";
            return $resultat;
    }
}

echo calculator(1.2,'-',2);
*/

// Tableaux Exo 0

/*
$tableau = array(); // instruction optionnelle
$tableau[] = "Pomme"; 
$tableau[] = "Poire"; 
$tableau[] = "Banane"; 
var_dump($tableau); 

*/
/*
$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");
echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; 
var_dump($tab1); 

*/
/*
$facture = array(
    "Janvier"   =>  500,
    "Février"   =>  620,
    "Décembre"  =>  300
);
var_dump($facture); 
*/
/*
$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
$facture_sixmois=0; 

foreach ($facture as $mois => $valeur) 
{ 
   echo "Facture du mois de $mois : $valeur Euros<br />"; 
   $facture_sixmois +=$valeur; 
} 

echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 
var_dump($facture,$facture_sixmois);
*/
/*
$nom = array("franck","laurent","caroline","magali","veronique");   
sort($nom);

for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
{
   echo "$nom[$nb1]<br>";
}
var_dump($nom); 
*/
/*
$nom = array("franck","laurent","caroline","magali","veronique");
rsort($nom);

for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
{
   echo "$nom[$nb1]<br>";
}
var_dump($nom);
*/
/*
$tableau = array("a" => "Lundi",
"b" => "Mardi",
"c" => "Mercredi",
"d" => "Jeudi");

foreach($tableau as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
} 
var_dump($tableau); 
*/
/*
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
$nb = count($tableau); 
echo"Le tableau contient ".$nb." éléments."; 
var_dump($tableau,$nb);
*/
/*
$tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
array_push($tableau, "Vendredi");
var_dump($tableau);
*/
/*
$tableau = array("Lundi","Mardi","Mercredi"); 
$jour = array_pop($tableau); 
var_dump($tableau);
*/
/*
$tableau = array("Jeudi", "Vendredi"); 
array_unshift($tableau, "Lundi", "Mardi", "Mercredi"); 
var_dump($tableau);
*/
/*
$tableau = array("Jeudi", "Vendredi"); 
$jour = array_shift($tableau); 
var_dump($tableau);
*/







?> 
</body>
</html>