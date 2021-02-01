<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    /**
    * \brief Afficher la liste des produits
    * \return $aView    La liste des produits
    * \author Damien Valentini
    * \date 01/02/2021
    */
    public function liste()
    {       
        /* Un premier tableau à passer au morceau de vue 'header',
        * celui-ci contient une valeur pour la balise <title> de la page
        */ 
        $aViewHeader["header"] = ["title" => "Liste des produits"];

        /* Transferer dans la partie Models
        // Chargement de la database du repertoire config
        $this->load->database();

        // Exécute la requête (toujours avec $this->db)
        $results = $this->db->query("SELECT * FROM produits");  
        
        // Récupération des résultats grâce à la methode "result()" qui fait un tableau d'objet (chaque ligne de la db est un objet)   
        $aListe = $results->result(); 
        */

        // Chargement du modèle 'produitsModel'
        $this->load->model('produitsModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau) 
        * remarque la syntaxe $this->nomModele->methode()       
        */
        $aListe = $this->produitsModel->liste();

        //Liste dans le tableau des variables pour transmettre à la vue (chargé en variable dans la vue liste.php)
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

    /**
    * \brief Ajouter un produit à la liste des produits
    * \return $tableCategories $tableProduits   Insert en bdd    
    * \author Damien Valentini
    * \date 01/02/2021
    */
    public function ajouter()
    {
        // Chargement des assistants 'form' et 'url' (url permet d'utiliser redirect();)
        $aViewHeader["header"] = ["title" => "Formulaire d'ajout"];
        $this->load->view('header',$aViewHeader); 
        //$this->load->model('produitsModel');
        //$this->load->helper('form', 'url'); plus nécessaire config autoload
        // Chargement de la BDD
        $this->load->database();
        //Chargement d'une librairie de validation de formulaire
        //$this->load->library('form_validation'); plus nécessaire config autoload
        
        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            $tableProduits=array(
            "pro_ref"=> $this->input->post("pro_ref"),
            "pro_libelle"=> $this->input->post("pro_libelle"),
            "pro_description"=> $this->input->post("pro_description"),
            "pro_prix"=> $this->input->post("pro_prix"),
            "pro_stock"=> $this->input->post("pro_stock"),
            "pro_bloque"=> $this->input->post("pro_bloque"),
            "pro_couleur"=> $this->input->post("pro_couleur"),
            );

            $tableCategories=array(
                "cat_nom"=> $this->input->post("cat_nom")
            );
            //Definition des filtres, requiere une valeur dans le champ avec le name "pro_ref" A UPDATE --TODO --
            $this->form_validation->set_rules("pro_ref","Référence","required|min_length[6]",array("required" => "Le %s doit être obligatoire.", "min_length" => "Le %s doit avoir longueur minimum de 6 caractères."));
            //personnalisation du message erreur (alert-danger --> Bootstrap)
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            if ($this->form_validation->run() == FALSE)
            {//Echec de la validation, on renvoi à la vue du formulaire
                $this->load->view("ajouter");
            }
            else
            {//La validation a réussi, valeurs correctes, on insert en bdd            
            
                // On extrait l'extension du nom du fichier,
                // on utilise la variable PHP superglobale $_FILES    
                if ($_FILES)
                {
                    // On extrait l'extension du nom du fichier 
                    // Dans $_FILES["pro_photo"], pro_photo est la valeur donnée à l'attribut name du champ de type 'file'  
                    $extension = substr(strrchr($_FILES["pro_photo"]["name"], "."), 1);
                }
                
                $tableProduits["pro_d_ajout"]=date("Y-m-d H:i:s");
                $pro_ref = $this->input->post("pro_ref");
                $date["pro_ref"]=strtoupper($pro_ref);
                
                
                $this->db->insert('categories', $tableCategories);
                $tableProduits["pro_cat_id"]=$this->db->insert_id();
                $this->db->insert('produits', $tableProduits);
                $id=$this->db->insert_id();
                

                //$this->produitsModel->ajouter($tableProduits,$tableCategories);

                // On créé un tableau de configuration pour l'upload
                $config['upload_path'] = './assets/images/'; // chemin où sera stocké le fichier
                // nom du fichier final
                $config['file_name'] = $id.'.'.$extension; 
                // On indique les types autorisés (ici pour des images)
                $config['allowed_types'] = 'gif|jpg|jpeg|png'; 

                // On charge la librairie 'upload'
                $this->load->library('upload');

                // On initialise la config 
                $this->upload->initialize($config);

                // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
                if ( ! $this->upload->do_upload('pro_photo')) 
                {
                    // Echec : on récupère les erreurs dans une variable (une chaîne)
                    $sUploadErrors = $this->upload->display_errors("<div class='alert alert-danger'>", "</div>");    

                    // on réaffiche la vue du formulaire en passant les erreurs 
                    $aView["sUploadErrors"] = $sUploadErrors;

                    /* On envoie le message d'erreur dans le fichier php_error.log,
                    * voir explications ci-après
                    */
                    error_log($sUploadErrors, 0);

                    /* Pour l'utilisateur, on envoie un message flash
                    * n'oubliez pas, cela nécessite la librairie 'session'
                    */ 
                    $this->load->library('session'); 
                    $this->session->set_flashdata('sUploadError2','Le téléchargement de la photo a échoué.');

                    // Réaffichage du formulaire 
                    $this->load->view('ajouter', $aView);
                }
                $aUploadDatas = $this->upload->data();

                    //redirection vers la methode liste du controleur produits via url helper
                    redirect("produits/liste");
                
            }
            
        } 
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('ajouter');
        }
    }// ajouter()

    /**
    * \brief Modifie un produit de la liste des produits
    * \return $data    mise à jour du produit de la liste des produits
    * \author Damien Valentini
    * \date 01/02/2021
    */
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
        $categorie = $this->db->query("SELECT * FROM categories JOIN produits ON cat_id=pro_cat_id WHERE pro_id= ?", $id);
        $aView["categorie"] = $categorie->row(); // première ligne du résultat


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


    /**
    * \brief Supprimer une produit de la liste des produits
    * \return $data    Delete un produit de la liste des produits
    * \author Damien Valentini
    * \date 01/02/2021
    */
    public function supprimer($id)
    {
        $aViewHeader["header"] = ["title" => "Formulaire de suppresion"];
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