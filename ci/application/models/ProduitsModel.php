<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitsModel extends CI_Model
{
    public function liste()
    {
        // Chargement de la database du repertoire config
        $this->load->database();

        // Exécute la requête (toujours avec $this->db)
        $results = $this->db->query("SELECT * FROM produits");  
        
        // Récupération des résultats grâce à la methode "result()" qui fait un tableau d'objet (chaque ligne de la db est un objet)   
        $aProduits = $results->result(); 
        return $aProduits;
    }

    /*public function ajouter()
    {
        
        $this->load->database($tableProduits,$tableCategories);
        $this->db->insert('categories', $tableCategories);
        $tableProduits["pro_cat_id"]=$this->db->insert_id();
        $this->db->insert('produits', $tableProduits);
        return $this->db->insert_id();
        
    }*/
} 