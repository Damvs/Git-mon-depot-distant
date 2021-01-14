<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
// require_once "./classes/Personnage.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class PersonnageTest extends TestCase
{  
    public function isPropertyPrivate($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPrivate();
        echo $reflector_instance;
        return $reflector_instance;
    }
    
    public $personnageLambda;   
    public $proprietePrivee = true; 
    
    public function creerPerso(){
        return new Personnage();
    }  
    
    // Teste l'instanciation d'un objet
    public function testPersonnageBase() {
        $personnageLambda = $this->creerPerso();
        $this->assertNotNull($personnageLambda);
    }
    
    // Teste la visibilité du champ nom
    public function testPersonnageChampNom(){
        $personnageLambda = $this->creerPerso();
        $private = $this->isPropertyPrivate($personnageLambda,'_nom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ nom à l'instanciation
    public function testPersonnageChampNomDefault() {
        $personnageLambda = $this->creerPerso();
        $this->assertNull($personnageLambda->getNom());
    }
    
    // Teste l'assignation du champ nom 
    public function testPersonnageValeurNom() {
        $personnageLambda = $this->creerPerso();
        $personnageLambda->setNom("Loper");
        $this->assertEquals('Loper',$personnageLambda->getNom());
    }
    
    // Teste la visibilité du champ prénom
    public function testPersonnageChampPrenom(){
        $personnageLambda = $this->creerPerso();
        $private = $this->isPropertyPrivate($personnageLambda,'_prenom');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ prenom à l'instanciation
    public function testPersonnageChampPrenomDefault() {
        $personnageLambda = $this->creerPerso();
        $this->assertNull($personnageLambda->getPrenom());
    }
    
    // Teste l'assignation du champ prenom
    public function testPersonnageValeurPrenom() {
        $personnageLambda = $this->creerPerso();
        $personnageLambda->setPrenom("Dave");
        $this->assertEquals('Dave',$personnageLambda->getPrenom());
    }
    
    // Teste la visibilité du champ age
    public function testPersonnageChampAge(){
        $personnageLambda = $this->creerPerso();
        $private = $this->isPropertyPrivate($personnageLambda,'_age');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ age à l'instanciation
    public function testPersonnageChampAgeDefault() {
        $personnageLambda = $this->creerPerso();
        $this->assertNull($personnageLambda->getAge());
    }
    
    // Teste l'assignation du champ age
    public function testPersonnageValeurAge() {
        $personnageLambda = $this->creerPerso();
        $personnageLambda->setAge(18);
        $this->assertEquals(18,$personnageLambda->getAge());
    }
    
    // Teste la visibilité du champ sexe
    public function testPersonnageChampSexe(){
        $personnageLambda = $this->creerPerso();
        $private = $this->isPropertyPrivate($personnageLambda,'_sexe');
        $this->assertEquals($this->proprietePrivee,$private);
    }
    
    // Teste la valeur du champ sexe à l'instanciation
    public function testPersonnageChampSexeDefault() {
        $personnageLambda = $this->creerPerso();
        $this->assertNull($personnageLambda->getSexe());
    }
    
    // Teste l'assignation du champ sexe
    public function testPersonnageValeurSexe() {
        $personnageLambda = $this->creerPerso();
        $personnageLambda->setSexe("Masculin");
        $this->assertEquals('Masculin',$personnageLambda->getSexe());
    }
}
?>