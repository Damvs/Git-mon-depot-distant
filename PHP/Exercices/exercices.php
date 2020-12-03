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


?> 
</body>
</html>