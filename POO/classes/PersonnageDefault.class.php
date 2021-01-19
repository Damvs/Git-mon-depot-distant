<?php
//require_once "./classes/Personnage.class.php";

class PersonnageDefault //extends Personnage
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    public function __construct()
    {
        //parent::__construct($_nom,$_prenom,$_age,$_sexe);
        $this->_nom="Loper";
        $this->_prenom="Dave";
        $this->_age=18;
        $this->_sexe="Masculin";
    }

    public function setNom() 
    {
        return $this->_nom = "Rosoft";
    }

    public function getNom() 
    {
        return $this->_nom;
    }

    public function setPrenom() 
    {
        return $this->_prenom = "Mike";
    }

    public function getPrenom() 
    {
        return $this->_prenom;
    }

    public function setAge() 
    {
        return $this->_age = 35;
    }

    public function getAge() 
    {
        return $this->_age;
    }

    public function setSexe() 
    {
        return $this->_sexe = "Féminin";
    }

    public function getSexe() 
    {
        return $this->_sexe;
    }


}


?>