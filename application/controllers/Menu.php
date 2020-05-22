<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }



   /***************************************** ACCUEIL ***********************************************************/
    public function accueil(){
       if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
    }else{
        $session_data = $this->session->userdata('logged_in');
        $data['idUtilisateur'] = $session_data['idUtilisateur'];
        $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
        $data['fonctionUser'] = $session_data['fonctionUser'];
        $data['titre'] = 'Gestion de microfinance';
        $data['tete'] = 'Accueil';
        $this->load->view('template/header',$data);
        $this->load->view('template/accueil');
        $this->load->view('template/footer');
    }
    }


    /**************************************CLIENT**************************************/

    //APPROBATION CLIENT
    public function menuApprouverClient()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
            
            $data['titre'] = 'Approbation client';
            $data['tete'] = 'Approbation client';
            $this->load->view('template/header',$data);
            $this->load->view('client/approuverClient');
            $this->load->view('template/footer');           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

    //GARANT
    public function menuGarant()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
            
            $data['titre'] = 'Garant crédit';
            $data['tete'] = 'Garant crédit';
            $this->load->view('template/header',$data);
            $this->load->view('client/garant');
            $this->load->view('template/footer');           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

    //LIST ROUGE
    public function menuListRouge()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $data['titre'] = 'Liste rouge';
            $data['tete'] = 'Liste rouge';
            $this->load->view('template/header',$data);
            $this->load->view('client/listRouge');
            $this->load->view('template/footer'); 
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

        //DROIT INSCRIPTION
    public function menuDroitInscription()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $comm = $client->__soapCall("findAllComptCaisse", array());
            $data['comm'] = $comm;
                       /*$this->load->view('pages/tete',$data);
            $this->load->view('client/droitInscription',$data);*/

            $data['titre'] = 'Droit inscription';
            $data['tete'] = 'Frais inscription';
            $this->load->view('template/header',$data);
            $this->load->view('client/droitInscription',$data);
            $this->load->view('template/footer'); 
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

        //RAPPORTS CLIENT
    public function menuRapportsClient()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $data['titre'] = 'Rapport client individuel';
            $data['tete'] = 'Rapport client individuel';
            $this->load->view('template/header',$data);
            $this->load->view('client/rapportClient');
            $this->load->view('template/footer');           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 
        //RAPPORTS LISTE ROUGE CLIENT
    public function menuRapportsListeRouge()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];          

        try {
            $data['titre'] = 'Rapport liste rouge';
            $data['tete'] = 'Rapport liste rouge';
            $this->load->view('template/header',$data);
            $this->load->view('client/rapportListeRouge');
            $this->load->view('template/footer');              
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

    //RAPPORTS CIN CLIENT
    public function menuRapportsCIN()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $data['titre'] = 'Rapport carte d\'identité';
            $data['tete'] = 'Rapport CIN';
            $this->load->view('template/header',$data);
            $this->load->view('client/rapportCIN');
            $this->load->view('template/footer');
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

    /*************************************CLIENT GROUPE********************************/

    //Transferer membres groupe
    public function menuTransfererMembreGroupe()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
            try {

                $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                //$client2 = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl");
                $result = $client->__soapCall("getAllGroupe", array());
                $data['result'] = $result;

                $data['titre'] = 'Transfert membre groupe';
                $data['tete'] = 'Transfert membre';
                $this->load->view('template/header',$data);
                $this->load->view('client/transfertMembre',$data);
                $this->load->view('template/footer');                        
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    } 

    //Rapport client groupe
    public function menuRapportGroupe()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
            try {

                $data['titre'] = 'Rapport client groupe';
                $data['tete'] = 'Liste groupe';
                $this->load->view('template/header',$data);
                $this->load->view('client/rapportGroupe');
                $this->load->view('template/footer');                        
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    } 


    /*******************************************************************************************************/
	/***************************************** MENU CONFIGURATION **********************************************/
    public function menuCreditIndividuel()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data['result'] = $result;

            $data['titre'] = 'Configuration produit crédit individuel';
            $data['tete'] = 'Config produit crédit individuel';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configCreditIndividuel', $data);
            $this->load->view('template/footer');                  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

       public function menuConfigGroupe()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data['result'] = $result;

            $data['titre'] = 'Configuration produit crédit groupe';
            $data['tete'] = 'Config produit crédit groupe';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configCreditGroupe', $data);
            $this->load->view('template/footer');            
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    }


       public function menuFraisCredit()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data['result'] = $result;
            
            $data['titre'] = 'Configuration frais crédit';
            $data['tete'] = 'Config produit frais crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configFraisCredit', $data);
            $this->load->view('template/footer');            
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    }

       public function menuConfigGLCredit()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("findAllCredit", array());
            $result2 = $client2->__soapCall("listComptes", array());

            $data['result'] = $result;
            $data['list'] = $result2;

            $data['titre'] = 'Configuration Grand livre crédit';
            $data['tete'] = 'Config produit Grand livre crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configGLCredit', $data);
            $this->load->view('template/footer');            
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    }

    public function menuconfigToutCredit()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

        
        try {

            $data['titre'] = 'Configuration pour tous crédit';
            $data['tete'] = 'Config pour tous crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configToutCredit');
            $this->load->view('template/footer');          
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    } 

     public function menuConfigGenerale()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data['result'] = $result;
           
            $data['titre'] = 'Configuration générale produit crédit';
            $data['tete'] = 'Config générale produit crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configGenerale',$data);
            $this->load->view('template/footer');
/*
            $this->load->view('pages/tete',$data);
            $this->load->view('systemes/credit/configGenerale',$data);*/
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    }

    //Configuration Garants et garanties
     public function menuConfigGarantGaratieCredit()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {
            $param = new stdClass();
            $param->debut = "AT";
            $param->val = 0;
            
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("findAllCredit", array());

            $result2 = $client2->__soapCall("getProduit", array($param));

            $data['result'] = $result;
            $data['pEpargne'] = $result2;

            $data['titre'] = 'Configuration garanties crédit';
            $data['tete'] = 'Config gatanties crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configGarantGaraties',$data);
            $this->load->view('template/footer');
            /*
            $this->load->view('pages/tete',$data);
            $this->load->view('systemes/credit/configGarantGaraties',$data);*/
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      }
    }

    //Configuration pénalité crédit
     public function menuConfigPenaliteCredit()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
        
        try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data['result'] = $result;
            
            $data['titre'] = 'Configuration pénalité crédit';
            $data['tete'] = 'Config pénalité crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/credit/configPenalite',$data);
            $this->load->view('template/footer');
            /*

            $this->load->view('pages/tete',$data);
            $this->load->view('systemes/credit/configPenalite',$data);*/
           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      }
    }

    /**********************************COMPTES CAISSES*********************************/

    //Ajout compte caisse
    public function menuComptesCaisse(){
       if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];


         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("listComptes", array());

            $data['list'] = $result;

            $data['titre'] = 'Configuration comptes caisses';
            $data['tete'] = 'Comptes caisses';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/comptes/compteCaisse',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('systemes/comptes/compteCaisse', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    } 

    //Configuration transaction compta
   public function menuConfigTransactionCompta(){
       if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("listComptes", array());

            $data['list'] = $result;

            $data['titre'] = 'Configuration transaction compta';
            $data['tete'] = 'Config transaction';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/comptes/configTransaction',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('systemes/comptes/compteCaisse', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    }

    /***********************************CONFIGURATION EPARGNE****************************************/
   
    //Produit Epargne
    public function produitEpargne(){

        if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];  
            $data['fonctionUser'] = $session_data['fonctionUser'];      
           
         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("getTypeEpargne", array());
            $res = $client->__soapCall("getCategorieEp", array());

            $data['type'] = $result;
            $data['categorie'] = $res;
             
            $data['titre'] = 'Ajout produit épargne';
            $data['tete'] = 'Produit épargne';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/epargne/produitEpargne',$data);
            $this->load->view('template/footer');

           /*$this->load->view('pages/tete',$data);
           $this->load->view('systemes/epargne/produitEpargne',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
        
    } 

    }

    //Config Produit épargne
    public function configProduitEpargne(){

        if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];  
            $data['fonctionUser'] = $session_data['fonctionUser'];      
           
         try {
            $param = new stdClass();
            $param->debut = "AT";
            $param->val = 0;
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client2->__soapCall("listComptes", array());
            $result = $client->__soapCall("getProduit", array($param));

            $data['list'] = $res;
            $data['result'] = $result;
            
            $data['titre'] = 'Configuration produit épargne';
            $data['tete'] = 'Configuration Produit épargne';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/epargne/configuration',$data);
            $this->load->view('template/footer');
/*

           $this->load->view('pages/tete',$data);
           $this->load->view('systemes/epargne/configuration',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
        
    } 

    } 

    //Config Produit Dépôt à terme
    public function menuConfigDAT(){

        if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];  
            $data['fonctionUser'] = $session_data['fonctionUser'];      
           
         try {

            $param = new stdClass();
            $param->debut = "AT";
            $param->val = 1;
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client2->__soapCall("listComptes", array());
            $result = $client->__soapCall("getProduit", array($param));

            $data['list'] = $res;
            $data['result'] = $result;
            
            $data['titre'] = 'Configuration dépôt à terme';
            $data['tete'] = 'Configuration DAT épargne';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/epargne/configurationDAT',$data);
            $this->load->view('template/footer');

           /*$this->load->view('pages/tete',$data);
           $this->load->view('systemes/epargne/configurationDAT',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
        
    } 

    } 


    /*******************************AGENCE****************************************/

    //AGENCE 
      public function menuPersonnels(){

        if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur']; 
            $data['fonctionUser'] = $session_data['fonctionUser'];       
           
         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("getAgence", array());
            $fonc = $client->__soapCall("getFonction", array());

            $data['result'] = $result;
            $data['fonc'] = $fonc;

            $this->load->view('pages/tete',$data);
            $this->load->view('systemes/agence/personnels',$data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
        
    } 

    }  



    /********************Configuration utilisateurs***********************/

    public function menuConfigUtilisateurs(){

        if(!$this->session->userdata('logged_in')){
        redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur']; 
            $data['fonctionUser'] = $session_data['fonctionUser'];       
           
         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("getAgence", array());
            $fonc = $client->__soapCall("getFonction", array());

            $data['result'] = $result;
            $data['fonc'] = $fonc;

            $data['titre'] = 'Gérer utilisateurs';
            $data['tete'] = 'Utilisateurs';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/agence/utilisateurs',$data);
            $this->load->view('template/footer');

            /*$this->load->view('pages/tete',$data);
            $this->load->view('systemes/agence/utilisateurs',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
        
    } 

    }




    /***************************************************************************************************/


    /*********************************** MODULE CREDIT *************************************************/

    public function demandeCredits(){

     if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['loginUtilisateur'] = $session_data['loginUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];


         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", 
                array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", 
                array('cache_wsdl' => WSDL_CACHE_NONE));

            $param = new stdClass();
            $param->fonction = 'Agent crédit';
            $client3 = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl",
             array('cache_wsdl' => WSDL_CACHE_NONE));

            
            $result = $client->__soapCall("findAllDemand", array());
            $produits = $client->__soapCall("findAllCredit", array());
            $individuel = $client2->__soapCall("getAllIndividuel", array());
            $listGarant = $client2->__soapCall("listeGarant", array());           
            $listAgent = $client3->__soapCall("getUser", array($param));           


            $data['result'] = $result;
            $data['listProduit'] = $produits;
            $data['listIndividuel'] = $individuel;
            $data['listGarant'] = $listGarant;
            $data['listAgent'] = $listAgent;

            $data['titre'] = 'Demande crédit';
            $data['tete'] = 'Demande crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/demandeCredit',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/demandeCredit', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}  


//Demande crédit groupe
 public function menuDemandeCreditGroupe(){

     if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['loginUtilisateur'] = $session_data['loginUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];


         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", 
                array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", 
                array('cache_wsdl' => WSDL_CACHE_NONE));

            $param = new stdClass();
            $param->fonction = 'Agent crédit';
            $client3 = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl",
             array('cache_wsdl' => WSDL_CACHE_NONE));

            
            $result = $client->__soapCall("findAllDemand", array());
            $produits = $client->__soapCall("findAllCredit", array());
            $individuel = $client2->__soapCall("getAllIndividuel", array());
            $listGarant = $client2->__soapCall("listeGarant", array());           
            $listAgent = $client3->__soapCall("getUser", array($param));           


            $data['result'] = $result;
            $data['listProduit'] = $produits;
            $data['listIndividuel'] = $individuel;
            $data['listGarant'] = $listGarant;
            $data['listAgent'] = $listAgent;

            $data['titre'] = 'Demande crédit groupe';
            $data['tete'] = 'Demande crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/demandeCreditGroupe',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/demandeCredit', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}




//MENU COMMISSION CREDIT AVANT APPROBATION

    public function commissionCreditAvant(){

         if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $param = new stdClass();
            $param->mc = 'Approbation en attente';
            $param->mc2 = '';

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findDemandeByMc", array($param));
            $comm = $client->__soapCall("findAllComptCaisse", array());
          
            $data['result'] = $result;
            $data['comm'] = $comm;
           
            $data['titre'] = 'Commission crédit avant appobation';
            $data['tete'] = 'Commission crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/commissionCredit',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/commissionCredit', $data);
            */
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    }


    //MENU COMMISSION CREDIT APRES APPROBATION

    public function commissionCreditApres(){

         if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $param = new stdClass();
            $param->mc = 'Approuvé';
            $param->mc2 = '';

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findDemandeByMc", array($param));
             $comm = $client->__soapCall("findAllComptCaisse", array());
          
            $data['result'] = $result;
            $data['comm'] = $comm;
           
            $data['titre'] = 'Commission crédit après appobation';
            $data['tete'] = 'Commission crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/commissionCreditApres',$data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/commissionCreditApres', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    }


    //APPROBATION CREDIT

    public function menuApprobation(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
            $param->mc = 'Approbation en attente';
            $param->mc2 = 'payé avant approbation';

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findDemandeByMc", array($param));
          
            $data['result'] = $result;
           
            $data['titre'] = 'Approbation';
            $data['tete'] = 'Commission crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/Approbation',$data);
            $this->load->view('template/footer');
            
             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/Approbation', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    }

    //DECAISSEMENT 

    public function menuDecaissement(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
            $param->mc = 'Approuvé';
            $param->mc2 = 'payé apres approbation';

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("findDemandeByMc", array($param));
            $comm = $client->__soapCall("findAllComptCaisse", array());
          
            $data['result'] = $result;
            $data['comm'] = $comm;
           
            $data['titre'] = 'Décaissement crédit';
            $data['tete'] = 'Décaissement';
            $this->load->view('template/header',$data);
            $this->load->view('credit/Decaissement',$data);
            $this->load->view('template/footer');   

            /* $this->load->view('pages/tete',$data);
             $this->load->view('credit/Decaissement', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

    //Menu rembourser crédit
    public function menuRemboursement(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
            $param->mc = 'Demande decaissé';
            $param->mc2 = '';

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $result = $client->__soapCall("findDemandeByMc", array($param));
            $comm = $client->__soapCall("findAllComptCaisse", array());
          
            $data['result'] = $result;
            $data['comm'] = $comm;
           
            $data['titre'] = 'Remboursement crédit';
            $data['tete'] = 'Remboursement';
            $this->load->view('template/header',$data);
            $this->load->view('credit/Remboursement',$data);
            $this->load->view('template/footer'); 

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('credit/Remboursement', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }  

//Menu supprimer credit
    public function menuSupprimerCredit(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Supprimer crédit';
            $data['tete'] = 'Supprimer crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/supprCredit');
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/ficheCredit');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport Fiche credit
    public function menuRapportFicheCredit(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Rapport fiche crédit';
            $data['tete'] = 'Fiche crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/ficheCredit');
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/ficheCredit');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }
    
    //Rapport garant et garanties credit
      public function menuRapportGarantGaranties(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
                $data['titre'] = 'Rapport garanties crédit';
                $data['tete'] = 'garanties crédit';
                $this->load->view('template/header',$data);
                $this->load->view('credit/rapport/garantGaranties');
                $this->load->view('template/footer');
            /* $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/garantGaranties');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport credit approuvé/réjeté/en attente
      public function menuRapportStatutCredit(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Status crédit';
            $data['tete'] = 'Status crédit';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/statutCredit');
            $this->load->view('template/footer');
             /*
             $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/statutCredit');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport Décaissement en attente
      public function menuRapportDecaissementAttente(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Rapport Décaissement en attente';
            $data['tete'] = 'Décaissement en attente';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/decaissementAttente');
            $this->load->view('template/footer');
             
             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/decaissementAttente');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport Décaissement crédit
      public function menuRapportDecaissement(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Rapport Décaissement';
            $data['tete'] = 'Rapport décaissement';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/decaissement');
            $this->load->view('template/footer');
             
             /*$this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/decaissement');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport Solde restant dû
      public function menuRapportSoldeRestantDu(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport solde restant dû';
            $data['tete'] = 'Solde restant dû';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/soldeRestantDu');
            $this->load->view('template/footer');/*
             $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/soldeRestantDu');
            */
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport Montant dû aujourd'hui
      public function menuRapportMontantDuAujourdhui(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport montant dû aujourd\'hui';
            $data['tete'] = 'Montant dû aujourd\'hui';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/montantDu');
            $this->load->view('template/footer');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    //Rapport dû pour un payement futur
      public function menuRapportDuFutur(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport montant dû pour un payement futur';
            $data['tete'] = 'Montant dû pour un payement futur';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/duFutur');
            $this->load->view('template/footer');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

//Rapport Solde restant dû
      public function menuRapportPortefeuilleAgent(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            
            $data['titre'] = 'Rapport analyse portefeuille par agents de crédit';
            $data['tete'] = 'portefeuille par agents';
            $this->load->view('template/header',$data);
            $this->load->view('credit/rapport/prortefeuilleAgent');
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('credit/rapport/prortefeuilleAgent');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }
    }

    /********************************************MODULE EPARGNE***************************************************/

    public function menuOuvrirCompteEp(){


        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
            $param->debut = "AT";
            $param->val = 0;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
          
            $comm = $client2->__soapCall("findAllComptCaisse", array());
            $result = $client->__soapCall("getProduit", array($param));
            //$result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;

            $data['titre'] = 'Ouvrir compte épargne';
            $data['tete'] = 'Ouvrir compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/ouvrirCompte', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/ouvrirCompte', $data);             
              $this->load->view('pages/pied');
            */
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

    //Dépôt d'épargne
     public function menuDepot(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
           
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;

            $data['titre'] = 'Dépôt épargne';
            $data['tete'] = 'Dépôt compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/depot', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/depot', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


    //Retrait d'épargne
     public function menuRetrait(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
           
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;

            $data['titre'] = 'Retrait épargne';
            $data['tete'] = 'Retrait épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/retrait', $data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('epargn/retrait', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     public function menuVirement(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
           
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;
        
            $data['titre'] = 'Transfert épargne';
            $data['tete'] = 'Transfert épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/virement', $data);
            $this->load->view('template/footer');
           
            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/virement', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


     public function menuRapportTransactions(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
           
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;

            $data['titre'] = 'Rapport transactions épargne';
            $data['tete'] = 'Rapport transactions épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/transactions', $data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/transactions', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     public function menuRapportInteret(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
           
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;
            $data['comm'] = $comm;

            $data['titre'] = 'Rapport sur intérêt épargne';
            $data['tete'] = 'Rapport sur intérêt épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/interet', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/interet', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

    //CALCUL INTERET EPARGNE
     public function menuCalculInteret(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
    
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;

            $data['titre'] = 'Calcul intérêt épargne';
            $data['tete'] = 'Calcul intérêt épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/calculInteret', $data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('epargn/calculInteret', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }  


     //FERMER COMPTE EPARGNE
     public function menuFermerCompteEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $data['titre'] = 'Fermer compte épargne';
            $data['tete'] = 'Fermer compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/fermerCompte');
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('epargn/fermerCompte');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


     //RAPPORT COMPTE EPARGNE FERMER
     public function menuCompteFermerEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $data['titre'] = 'Rapport compte épargne fermé';
            $data['tete'] = 'Rapport compte épargne fermé';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/CompteFermer');
            $this->load->view('template/footer');
            
            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/CompteFermer');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

    //RAPPORT SUR EPARGNE
     public function menuRapportEpargneParProduit(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;

            $data['titre'] = 'Rapport compte épargne par produit';
            $data['tete'] = 'Rapport compte épargne par produit';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/epargneParProduit', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/epargneParProduit', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


    //RAPPORT SUR SOLDE EPARGNE
     public function menuRapportSoldeEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;

            $data['titre'] = 'Rapport solde épargne';
            $data['tete'] = 'Rapport solde épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/soldeEpargne', $data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/soldeEpargne', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 


    //Relever de compte epargne
     public function menuReleverCompteEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;

            $data['titre'] = 'Rélever de compte épargne';
            $data['tete'] = 'Rélever de compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/releverCompte');
            $this->load->view('template/footer');
             /*
             $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/releverCompte');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


    //Rapport nouveau compte epargne
     public function menuNouveauCompteEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport nouveau compte épargne';
            $data['tete'] = 'Rapport nouveau compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/nouveauCompte');
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/nouveauCompte');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 


    //Rapport fiche journalière epargne
     public function menuFicheJournalier(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport fiche journalière';
            $data['tete'] = 'Rapport fiche journalière';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/ficheJournalier');
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/ficheJournalier');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 


    //Rapport état de compte epargne
     public function menuEtatCompte(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $data['titre'] = 'Rapport état compte épargne';
            $data['tete'] = 'Rapport état compte épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/etatCompte');
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/etatCompte');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 

    //Rapport Solde Min et Max epargne
     public function menuSoldeMinMaxEpargne(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("findAllProduit", array());

            $data['result'] = $result;

            $data['titre'] = 'Rapport solde min/max épargne';
            $data['tete'] = 'Rapport solde min/max épargne';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/rapport/soldeMinMax', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('epargn/rapport/soldeMinMax', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    /*************************************************************************************/
                                         //DAT EPARGNE
    /*************************************************************************************/
     //Ouvrir compte DAT
     public function menuOuvrirCompteDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

           
            $param = new stdClass();
            $param->debut = "AT";
            $param->val = 1;
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
            
            $result = $client->__soapCall("getProduit", array($param));

            $data['comm'] = $comm;
            $data['result'] = $result;
            
             $data['titre'] = 'Ouvrir Dépôt à terme';
            $data['tete'] = 'Ouvrir DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/ouvrirCompteDAT', $data);
            $this->load->view('template/footer');


           /*$this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/ouvrirCompteDAT',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }    

      //Ouvrir compte DAT
     public function menuRetraitDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $comm = $client2->__soapCall("findAllComptCaisse", array());
            $data['comm'] = $comm;
           
            $data['titre'] = 'Retrait Dépôt à terme';
            $data['tete'] = 'Retrait DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/retraitDAT', $data);
            $this->load->view('template/footer');

          /* $this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/retraitDAT',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    
      //Supprimer compte DAT
     public function menuSupprimerDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Supprimer Dépôt à terme';
            $data['tete'] = 'Supprimer DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/annulerDAT');
            $this->load->view('template/footer');

          /* $this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/annulerDAT');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    //Rapport dépôt à terme
     public function menuRapportDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
             $data['titre'] = 'Rapport nouveau compte Dépôt à terme';
            $data['tete'] = 'Rapport nouveau compte DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/rapport/depotATerme');
            $this->load->view('template/footer');

           /*$this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/rapport/depotATerme');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
        
    //Rapport Echeance dépôt à terme
     public function menuRapportEcheance(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
             
             $data['titre'] = 'Rapport échéance Dépôt à terme';
            $data['tete'] = 'Rapport échéance DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/rapport/echeance');
            $this->load->view('template/footer');


        /*   $this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/rapport/echeance');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    //Rapport Compte supprimé dépôt à terme
     public function menuRapportCompteSupprimerDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Rapport Dépôt à terme supprimé';
            $data['tete'] = 'Rapport DAT supprimé';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/rapport/compteSupprimer');
            $this->load->view('template/footer');

          /* $this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/rapport/compteSupprimer');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    
    //Rapport état du compte dépôt à terme
     public function menuRapportEtatCompteDAT(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Etat de compte Dépôt à terme';
            $data['tete'] = 'Etat de compte DAT';
            $this->load->view('template/header',$data);
            $this->load->view('epargn/dat/rapport/etatCompte');
            $this->load->view('template/footer'); 
         
         /*  $this->load->view('pages/tete',$data);
           $this->load->view('epargn/dat/rapport/etatCompte');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    } 
    


    /***************************COMPTABILITE****************************/


    //GRAND LIVRE GENERALE

    public function menuGrandLivre(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

             $data['titre'] = 'Grand Livre';
            $data['tete'] = 'Grand Livre';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/grandLivre');
            $this->load->view('template/footer'); 

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/grandLivre');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


     //GRAND LIVRE AUXILIAIRE
     public function menuGrandLivreGenerale(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Grand Livre général';
            $data['tete'] = 'Grand Livre général';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/grandLivre/grandLivreGeneral');
            $this->load->view('template/footer'); 

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/grandLivreGeneral');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //GRAND LIVRE AUXILIAIRE
     public function menuGrandLivreAuxiliaire(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Grand Livre auxilliaire';
            $data['tete'] = 'Grand Livre auxilliaire';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/grandLivre/grandLivreAuxiliaire');
            $this->load->view('template/footer'); 

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/grandLivreAuxiliaire');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //GRAND LIVRE Budgétaire
     public function menuGrandLivreBudget(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

             $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
             $res = $client2->__soapCall("listBudget", array());

             $data['list'] = $res;

            $data['titre'] = 'Grand Livre budgetaire';
            $data['tete'] = 'Grand Livre budgetaire';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/grandLivre/grandLivreBudget',$data);
            $this->load->view('template/footer'); 

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/grandLivreBudget',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //GRAND LIVRE Analytique
     public function menuGrandLivreAnalytique(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

             $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
             $res = $client->__soapCall("getAnalytique", array());

            //$result= $res->resultat;

             $data['list'] = $res;

            $data['titre'] = 'Grand Livre analytique';
            $data['tete'] = 'Grand Livre analytique';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/grandLivre/grandLivreAnalytique',$data);
            $this->load->view('template/footer'); 

            /* $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/grandLivreAnalytique',$data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //BALANCE DES COMPTES
     public function menuBalance(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

              $data['titre'] = 'Balance des comptes';
            $data['tete'] = 'Balance';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/resultat/balance');
            $this->load->view('template/footer'); 

            /* $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/balance');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //BILAN DES COMPTES
     public function menuBilan(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $data['titre'] = 'Bilan des comptes';
            $data['tete'] = 'Bilan';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/resultat/bilan');
            $this->load->view('template/footer'); 


            /* $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/bilan');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //COMPTES DE RESULTAT
     public function menuCompteResultat(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $data['titre'] = 'Comptes de résultat';
            $data['tete'] = 'Comptes de résultat';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/resultat/compteResultat');
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/compteResultat');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

    /***********************Journal************************/

    //Caisse
 public function menuJournalCaisse(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Journal caisse';
            $data['tete'] = 'Journal caisse';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/journal/caisse');
            $this->load->view('template/footer');

          /*   $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/journal/caisse');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }  

 //Banque
 public function menuJournalBanque(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Journal banque';
            $data['tete'] = 'Journal banque';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/journal/banque');
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/journal/banque');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


 //Divers
 public function menuJournalDivers(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $data['titre'] = 'Journal opération divers';
            $data['tete'] = 'Journal opération divers';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/journal/divers');
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/journal/divers');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


/**************************************************************/
       //PLAN COMPTABLE
     public function menuPlanComptable(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("getComptes", array());

            $data['result'] = $result;

            $data['titre'] = 'Ajout compte comptable';
            $data['tete'] = 'Plan comptable';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/planComptable', $data);
            $this->load->view('template/footer');

            /* $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/planComptable', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }  

     //TRANSACTION COMPTABLE
     //Transaction caisse
     public function menuTransactionComptable(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $param = new stdClass();          
            $param->compte = "";
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("getComptes", array());
            $res2 = $client->__soapCall("getComptesActif", array($param));
            $conf = $client->__soapCall("getConfigCompta", array());

            $data['result'] = $result;
            $data['res'] = $res2;
            $data['config'] = $conf;

            $data['titre'] = 'Transaction caisse';
            $data['tete'] = 'Transaction caisse';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/operation/caisse', $data);
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/transaction', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }     
    //Transaction banque
    public function menuTransactionBanque(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {
            $param = new stdClass();          
            $param->compte = "";
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("getComptes", array());
            $res2 = $client->__soapCall("getComptesActif", array($param));
            $conf = $client->__soapCall("getConfigCompta", array());

            $data['result'] = $result;
            $data['res'] = $res2;
            $data['config'] = $conf;

            $data['titre'] = 'Transaction banque';
            $data['tete'] = 'Transaction banque';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/operation/banque', $data);
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/transaction', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //BUDGETISATION
     public function menuBudget(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
           
            $param->compte = "";

            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client2->__soapCall("listComptes", array());

            $data['list'] = $res;


            $data['titre'] = 'Gérer budgét';
            $data['tete'] = 'Gérer budgét';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/budgetaire', $data);
            $this->load->view('template/footer');

           /*  $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/budgetaire', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //Opération Divers
     public function menuOperationComptaDivers(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
           
            $param->compte = "";

            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client2->__soapCall("listBudget", array());

            $data['list'] = $res;

            $data['titre'] = 'Saisie opération divers';
            $data['tete'] = 'Saisie opération divers';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/operation/divers', $data);
            $this->load->view('template/footer');

             /*$this->load->view('pages/tete',$data);
             $this->load->view('comptablite/operationDivers', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }

     //Declassement crédit
     public function menuDeclassementCredit(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];

         try {

            $param = new stdClass();
           
            $param->compte = "";

           /* $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client2->__soapCall("listBudget", array());

            $data['list'] = $res;
*/
            $data['titre'] = 'Déclassement crédit';
            $data['tete'] = 'Déclassement crédit';
            $this->load->view('template/header',$data);
            $this->load->view('comptablite/declassementCredit');
            $this->load->view('template/footer');

        /*     $this->load->view('pages/tete',$data);
             $this->load->view('comptablite/declassementCredit');*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        }

    }


}