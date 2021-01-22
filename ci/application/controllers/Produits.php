<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    public function liste()
    {       
        /* Un premier tableau à passer au morceau de vue 'header',
        * celui-ci contient une valeur pour la balise <title> de la page
        */ 
        $aViewHeader["header"] = ["title" => "Liste des produits"];

        // Chargement de la database du repertoire config
        $this->load->database();

        // Exécute la requête (toujours avec $this->db)
        $results = $this->db->query("SELECT * FROM produits");  
        
        // Récupération des résultats grâce à la methode "result()" qui fait un tableau d'objet (chaque ligne de la db est un objet)   
        $aListe = $results->result(); 

        //Liste dans le tableau des variables pour transmettre à la vue
        $aView["liste_produits"] = $aListe;

        /* Un second tableau à passer au morceau de vue 'liste'
        * celui-ci contient la liste des produits (résultats de requête SQL) 
        */
        //$aViewListe = ["aProduits" => $aProduits]; 

        // On passe le tableau en second argument de la méthode
        $this->load->view('header',$aViewHeader); 
        $this->load->view('liste', $aView);
        $this->load->view('footer');

    }

    public function ajouter()
    {
        // Chargement des assistants 'form' et 'url' (url permet d'utiliser redirect();)
        $aViewHeader["header"] = ["title" => "Formulaire d'ajout"];
        $this->load->view('header',$aViewHeader); 

        //$this->load->helper('form', 'url'); plus nécessaire config autoload
        // Chargement de la BDD
        $this->load->database();
        //Chargement d'une librairie de validation de formulaire
        //$this->load->library('form_validation'); plus nécessaire config autoload
        
        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            
            $data = $this->input->post();
            //Definition des filtres, requiere une valeur dans le champ avec le name "pro_ref"
            $this->form_validation->set_rules("pro_ref","Référence","required|min_length[6]",array("required" => "Le %s doit être obligatoire.", "min_length" => "Le %s doit avoir longueur minimum de 6 caractères."));
            //personnalisation du message erreur (alert-danger --> Bootstrap)
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            if ($this->form_validation->run() == FALSE)
            {//Echec de la validation, on renvoi à la vue du formulaire
                $this->load->view("ajouter");
            }
            else
            {//La validation a réussi, valeurs correctes, on insert en bdd            
                
                $data["pro_d_ajout"]=date("Y-m-d H:i:s");
                $pro_ref = $this->input->post("pro_ref");
                $date["pro_ref"]=strtoupper($pro_ref);
                
                $this->db->insert('produits', $data);
                
                //redirection vers la methode liste du controleur produits via url helper
                redirect("produits/liste");
            }
            
        } 
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('ajouter');
        }
    }// ajouter()

    public function modifier($id)
    {
        $aViewHeader["header"] = ["title" => "Formulaire de modification"];
        $this->load->view('header',$aViewHeader); 

        // Chargement des assistants 'form' et 'url'
        //$this->load->helper('form', 'url'); plus nécessaire config autoload

        // Chargement de la librairie 'database'
        $this->load->database();  

        //$this->load->library('form_validation'); plus nécessaire config autoload
        // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
        $produit = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", $id);
        $aView["produit"] = $produit->row(); // première ligne du résultat

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();
    
            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('pro_ref', 'Référence', 'required',array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == FALSE)
            {// Echec de la validation, on réaffiche la vue formulaire 
                $this->load->view('modifier', $aView);
            }
            else
            {// La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
    
                /* Utilisation de la méthode where() toujours 
                * avant select(), insert() ou update()
                * dans cette configuration sur plusieurs lignes 
                */  
                unset($data["id"]);
                $this->db->where('pro_id', $id);
                $this->db->update('produits', $data);
                
                redirect("produits/liste");
            }
        } 
        else 
        { // 1er appel de la page: affichage du formulaire             
            $this->load->view('modifier', $aView);
        }    
    } // -- modifier()

    public function supprimer($id)
    {
        $aViewHeader["header"] = ["title" => "Formulaire de modification"];
        $this->load->view('header',$aViewHeader); 

        // Chargement des assistants 'form' et 'url'
        //$this->load->helper('form', 'url'); plus nécessaire config autoload

        // Chargement de la librairie 'database'
        $this->load->database();  

        //$this->load->library('form_validation'); plus nécessaire config autoload
        // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
        $produit = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", $id);
        $aView["produit"] = $produit->row(); // première ligne du résultat

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();
    
            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'

                $this->load->view('supprimer', $aView);
    
                /* Utilisation de la méthode where() toujours 
                * avant select(), insert() ou update()
                * dans cette configuration sur plusieurs lignes 
                */  
                unset($data["id"]);
                $this->db->where('pro_id', $id);
                $this->db->delete('produits', $data);
                
                redirect("produits/liste");
        } 
        else 
        { // 1er appel de la page: affichage du formulaire             
            $this->load->view('supprimer', $aView);
        }    
    } // -- supprimer()

    
}

?>