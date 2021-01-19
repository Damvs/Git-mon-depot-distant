<?php 
//phpunit --filter NomduTest Chemin
class Employe
{
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    public static $nbrEmploye=0;
    public static $employes=[];

    /*public function __construct($nom,$prenom,$dateEmbauche,$fonction,$salaire,$service)
    {
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateEmbauche=$dateEmbauche;
        $this->_fonction=$fonction;
        $this->_salaire=$salaire;
        $this->_service=$service;
    }*/

    public function __construct()
    {
        self::$nbrEmploye++;
        //ou Employe::$nbrEmploye;
        //array_push(self::$employes,$this);
    }

    public function getListEmploye()
    {
        echo self::$nbrEmploye;
        foreach (self::$employes as $emp)
        {       
            echo $this->_nom.$this->_prenom.$this->_dateEmbauche.$this->_fonction.$this->_salaire.$this->_service;
            //echo $this->_service.$this->_nom.$this->_prenom.$this->_dateEmbauche.$this->_fonction.$this->_salaire;
        }
    }

    public function getAnciennete()
    {
        $anneeEmbauche= intval($this->_dateEmbauche->format("Y"));
        $date= new DateTime();
        $currentYear=intval($date->format("Y"));
        $anciennete=$currentYear-$anneeEmbauche;
        return $anciennete;
    }

    public function calculerPrime()
    {
        $anciennete=$this->getAnciennete();
        $primeAnnuelle=0.05*$this->_salaire;
        $primeAnciennete=(0.02*$anciennete)*$this->_salaire;
        $totalPrime=$primeAnciennete+$primeAnnuelle;
        $anneeVirement= new DateTime();
        $currentDay= new DateTime("30-11-".$anneeVirement->format("Y"));
        $today=$currentDay->format("d-m-Y");
        echo "Le ".$today." un ordre de transfert a ete envoye a votre banque pour un montant de ".$totalPrime." euros.\n";
        return $totalPrime;
    }

    public function setNom($sNom) 
    {
        return $this->_nom = $sNom;
    }

    public function getNom() 
    {
        return $this->_nom;
    }

    public function setPrenom($sPrenom) 
    {
        return $this->_prenom = $sPrenom;
    }

    public function getPrenom() 
    {
        return $this->_prenom;
    }
/*
    public function setDateEmbauche($sDateEmbauche) 
    {
        return $this->_dateEmbauche = $sDateEmbauche;
    }

    public function getDateEmbauche() 
    {
        if (strlen($this->_dateEmbauche) != 0){
            return DateTime::createFromFormat("d/m/Y",$this->_dateEmbauche);
        }else{
            return null;
        }    
    }
*/
    public function setDateEmbauche($dateEmbauche)
    {

        $this->_dateEmbauche = DateTime::createFromFormat('d/m/Y', $dateEmbauche);
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }


    public function setFonction($sFonction) 
    {
        return $this->_fonction = $sFonction;
    }

    public function getFonction() 
    {
        return $this->_fonction;
    }

    public function setSalaire($sSalaire) 
    {
        return $this->_salaire = $sSalaire;
    }

    public function getSalaire() 
    {
        return $this->_salaire;
    }

    public function setService($sService) 
    {
        return $this->_service = $sService;
    }

    public function getService() 
    {
        return $this->_service;
    }

    public function setNbrEmploye($nbrEmploye) 
    {
        return $this->nbrEmploye = $nbrEmploye;
    }

    public function getNbrEmploye() 
    {
        return $this->nbrEmploye;
    }

}

?>