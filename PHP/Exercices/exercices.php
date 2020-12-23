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

//Tableaux Exo 1
/*
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );


$groupe19002 = $a["19002"]; //création du sous groupe 19002
echo array_search("Validation",$groupe19002); //affichage de l'index de validation
*/

//Tableaux Exo 2
/*
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

$groupe19001 = $a["19001"]; //création du sous groupe 19001
$groupe19001 = array_reverse($groupe19001); //renversement de l'ordre du groupe pour rechercher la première occurence de "Stage"
$nbr = count($groupe19001); //compte le nombre total de semaine
$index = array_search("Stage",$groupe19001);//recherche de la dernière itération de "Stage" pour afficher son index //recherche première occurence de "Stage"
echo $nbr - $index; //Nombre total de semaine - occurence de tableau renversé afin d'avoir la dernière occurence de "Stage" et donc la dernière semaine de Stage
*/

//Tableaux Exo 3
/*
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

$b = array_keys($a) ; //index de $a transmis dans le tableau $b
var_dump($b); //affichage du tableau $b
*/

//Tableaux Exo 4
/*
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

$groupe19003 = $a["19003"]; //Sous groupe 19003  
$b = array_keys($groupe19003,"Stage"); //Groupe comportant les index de "Stage"
$stage = count($b); //Total des index
echo $stage; //Affichage des semaines de stages
*/

//Cours formulaire champs à valeur multiple
/*echo "Tu surfes sur le web en semaine plutôt le : <br>"; 

// Lecture du tableau 
foreach ($_REQUEST["Fjour"] as $jour)      
{ 
    echo"-".$jour."<br>"; 
} 
/*
//A tester avec ce form html
<form action="exercices.php" method="post"> 
   Tu utilises internet plutôt le :<br> 
   <input type="checkbox" name="Fjour[]" value="Lundi">Lundi<br>
   <input type="checkbox" name="Fjour[]" value="Mardi">Mardi<br>
   <input type="checkbox" name="Fjour[]" value="Mercredi">Mercredi<br>
   <input type="checkbox" name="Fjour[]" value="Jeudi">Jeudi<br />
   <input type="checkbox" name="Fjour[]" value="Vendredi">Vendredi<br>
   <input type="submit" name="envoyer" value="Envvoyer">
*/

//DATE EXO 1
/*
class DateTimeFrench extends DateTime {
    public function format($format) {
        $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $french_days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Décember');
        $french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        return str_replace($english_months, $french_months, str_replace($english_days, $french_days, parent::format($format)));
    }
}

date_default_timezone_set("Europe/Paris");
setlocale(LC_TIME, 'fr_FR.utf8','fra'); //set français
$date = new DateTimeFrench ("07/02/2019");
echo $date->format ('l j F Y');
*/

//DATE EXO 2
/*
$date = new DateTime ("07/14/2019");
echo $date->format("W"); echo "ème semaine";
*/

//DATE EXO 3
/*
$echeance = '2021/07/09'; // La date de référence
echo 'Nombre de jours restants : ', floor((strtotime($echeance) - time())/86400);
*/
//ou
/*
$finFormation = new DateTime('2021-07-09');
$date = new DateTime();
$temps = $finFormation->diff($date);
echo "Il reste ".$temps->days." jours.";
*/

//DATE EXO 5
/*
$date = new DateTime();
    for ($i = 0; $i < 4; $i++)
    {
        $date->modify('+1 years');
        if ($date->format('L') == 1)
        {
            ?>
               La prochaine année à être bissextile est : <?= $date->format('Y') ?> 
               <?php
        }
    }
*/

//DATE EXO 6
/*
$date = "17/17/2019";
$testDate = DateTime::createFromFormat('d/m/Y', $date); 
$error = $testDate->getLastErrors();
    if ($error['warning_count'] >= 1)
    {
        echo "Date erronée";
    }
*/

//DATE EXO 7
/*
$date=new DateTime ();
echo $date->format("H\hi");
*/

//DATE EXO 8
/*
$date=new DateTime ();
$date->add(new DateInterval("P1M"));
echo $date->format("d/m/yy");
*/

//Afficher répertoire Fichier
/*
function list_dir($name) {
  if ($dir = opendir($name)) {
    while($file = readdir($dir)) {
      echo "$file<br>\n";
      if(is_dir($file) && !in_array($file, array(".",".."))) {
        list_dir($file);
      }
    }
    closedir($dir);
  }
}
list_dir(".");
*/


?> 



</form> 
</body>
</html>