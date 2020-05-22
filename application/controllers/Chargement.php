<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chargement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    //AFFICHE GRAND LIVRE

    public function afficheProduit(){

         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllCredit", array());

            $data= $result->Listes_ProduitCredit;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    //AFFICHE CLIENT

    public function afficheClient(){

    	 try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl");
            $result = $client->__soapCall("getAllIndividuel", array());

            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //AFFICHE GROUPE

      public function afficheGroupe(){

         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl");
            $result = $client->__soapCall("getAllGroupe", array());

            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } 

    //AFFICHE DEMANDE

      public function afficheDemande(){

         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");
            $result = $client->__soapCall("findAllDemand", array());

            $data= $result->voir_Demande;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //AFFICHE CREDIT

      public function afficheCredit(){

         try {
             
            $mc = $this->input->get('mc');
            $mc2 = $this->input->get('mc2');

            $param = new stdClass();
            $param->mc = $mc;
            $param->mc2 = $mc2;

             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findDemandeByMc", array($param));

            $data= $result->Liste_demande;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //AFFICHE COMPTES CAISSE

    public function afficheCompteCaisse(){

          try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findAllComptCaisse", array());

            $data= $result->Liste_CompteCaisse;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    //AFFICHE PRODUITS EPARGNE

    public function afficheProduitEp(){
           try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            
            $result = $client->__soapCall("findAllProduit", array());

            $data= $result->liste;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    //AFFICHE COMPTE COMPTABLE

    public function afficheCompteCompta(){
           try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("getAccounts", array());
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    //AFFICHE GRAND LIVRE

    public function listGrandLivre(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->compte ="";
            $param->nomUtilisateur ="";
            $param->dateDeb ="";
            $param->dateFin ="";
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $result = $client->__soapCall("afficheGrandLivre", array($param));
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    //AFFICHE GRAND LIVRE BUDGET

    public function getGrandLivreBudget(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->code ="";
            $param->dateDeb =$this->input->post('dateDeb');
            $param->dateFin =$this->input->post('dateFin');
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $res = $client->__soapCall("getGrandLivreBudget", array($param));
           
            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun données trouvé';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }  

    //AFFICHE GRAND LIVRE ANALYTIQUE

    public function getGrandLivreAnalytique(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->code =$this->input->post('codeAnalytique');
            $param->dateDeb =$this->input->post('dateDeb');
            $param->dateFin =$this->input->post('dateFin');
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
         
            $res = $client->__soapCall("getGrandLivreAnalytique", array($param));
           
            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun données trouvé';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }   

     //AFFICHE GRAND LIVRE PAR BUDGET

    public function getGrandLivreParBudget(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->code = $this->input->post('codeBudget');
            $param->dateDeb =$this->input->post('dateDeb');
            $param->dateFin =$this->input->post('dateFin');

             $param2 = new stdClass();
             $param2->code = $this->input->post('codeBudget');
             //recuperer via grand livre
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));         
            $res = $client->__soapCall("getGrandLivreBudget", array($param));
           
            //recuperer dépuis budget 
            $client2 = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));         
            $res2 = $client2->__soapCall("findBudget", array($param2));
           
            $result= $res->resultat;

            $budg = $res2->resultat;

            $msg['success'] = false;
            $msg['message'] = 'Auccun données trouvé';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
                $msg['budg'] = $budg;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    //AGENCE

    public function affichePersonnels(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("getPersonnels", array());
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }  

    //GET ALL USERS
    public function getAllUtilisateur(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("getAllUser", array());
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }  



    //GARANT

    public function afficheGarant(){
           try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("listeGarant", array());
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }  

//CREDIT

public function ecritureDemande(){
       try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();           
            $param->codeInd = $this->input->post('codeInds');
            $param->codeGrp = $this->input->post('codeGroupe');
            $param->dat_dem = $this->input->post('date_demande');
            $param->montant = $this->input->post('montant_demande');
            $param->tauxInt = $this->input->post('tauxAnnuel');
            $param->nbTranche = $this->input->post('nbTranche');
            $param->typeTranche = $this->input->post('typeTranche');
            $param->diffPaie = $this->input->post('diffPaie');
            $param->modCalcul = $this->input->post('modeCalcul'); 


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("demCredit", array($param));
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //Modifier calendrier

    public function modifCalendrierPaie(){
       try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);            
            $param = new stdClass();           
            $param->id = $this->input->post('numIndex');
            $param->cals->rowId ="";
            $param->cals->date = $this->input->post('dateEcheanche');
            $param->cals->montantComm = $this->input->post('Modcommission');
            $param->cals->montantInt = $this->input->post('interet');
            $param->cals->montantPenal = "";
            $param->cals->montantPrinc = $this->input->post('principal');
            $param->cals->numCred = "";
    

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("modifCalendrier", array($param));
           
            $data= $result->validation;
             $msg['success'] = false;
             if($data == true){
                $msg['success'] = true;
             }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //Vider calendrier

    public function viderCalendrier(){
       try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);            
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("deleteCalendrier", array());
           
            $data= $result->validation;
             $msg['success'] = false;
             if($data == true){
                $msg['success'] = true;
             }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //Get calendrier demande
    public function getCalendrier(){
       try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,
                'trace' => 0));
         
            $result = $client->__soapCall("getAllCalView", array());
           
            $data= $result->resultat;
            echo json_encode($data);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}