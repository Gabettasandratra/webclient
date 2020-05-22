<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Epargne extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    //AFFICHE GRAND LIVRE

    public function saveCompteEpargne(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
           
            $param->dateCree = $this->input->post('dateOverture');
            $param->cmptGeler = $this->input->post('compteGeler');
            $param->pasRetrait = $this->input->post('retrait');
            
            $param->dateRetirer = $this->input->post('dateRetirer');
            $param->idProduitEp = $this->input->post('produit');
            $param->codeInd = $this->input->post('codeCli');
            $param->codeGrp = $this->input->post('codeGrp');;
            $param->userId = $this->input->post('user');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("ouvrirCompte", array($param));

            $result = $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Information non enregistrer,,,erreur!';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
                $msg['message'] = 'Enregistrement reussit!!!';
            }

            echo json_encode($msg);             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //AFFICHE COMPTE 

    public function getCompteEpargne(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProduitEp = $this->input->get('idProduit');
            $param->codeInd = $this->input->get('codeInd');
            $param->codeGrp = $this->input->get('codeGrp');;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompte", array($param));

            $result = $res->resultat;

            echo json_encode($result);             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //AFFICHE COMPTE 

    public function findCompte(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->numCmpt = $this->input->get('code');

            $arguments = new stdClass();

            $arguments->numCompte = $this->input->get('code');
            $arguments->dateDeb = "";
            $arguments->dateFin = "";


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompteByCode", array($param));
            $transaction = $client->__soapCall("getReleverCompte", array($arguments));

            $result = $res->resultat;
            $resTrans = $transaction->resultat;

            $msg['erreur'] = false;
            if(!empty($result) || !empty($resTrans)){
                $msg['result']=$result;              
                $msg['trans']=$resTrans;              
            }else{
                $msg['erreur']=true;
            }             
            echo json_encode($msg); 

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } 

//AFFICHE COMPTE 

    public function getCompteEpargneParCode(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProduitEp = $this->input->get('idProduit');
            $param->codeInd = $this->input->get('codeInd');
            $param->codeGrp = $this->input->get('codeGrp');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompte", array($param));

            $result = $res->resultat;

            $msg['success'] = false;
            if(!empty($result)){
                $msg['result']=$result; 
                $msg['success'] = true;              
            }                      
            echo json_encode($msg); 

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //AFFICHE TRANSACTION D'UNE COMPTE 

    public function getTransComptEp(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            
            $arguments = new stdClass();

            $arguments->numCompte = $this->input->get('code');
            $arguments->dateDeb = "";
            $arguments->dateFin = "";


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $transaction = $client->__soapCall("getReleverCompte", array($arguments));
            $resTrans = $transaction->resultat;

            $msg['erreur'] = false;
            if(!empty($resTrans)){           
                $msg['trans']=$resTrans;              
            }else{
                $msg['erreur']=true;
            }             
            echo json_encode($msg); 

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //AFFICHE COMPTE
    public function findCompteEpargne(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            
            $param = new stdClass();
        
            $param->numCmpt = $this->input->get('code');


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompteByCode", array($param));

            $result = $res->resultat;
           
            $msg['erreur'] = false;
            if(!empty($result)){
                $msg['result']=$result;              
            }else{
                $msg['erreur']=true;
            }             
            echo json_encode($msg); 
 

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    //Chercher compte
   public function getCmpt(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->numCmpt = $this->input->get('code');


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompteByCode", array($param));
        

            $result = $res->resultat;
         
            $msg['erreur'] = false;
            if(!empty($result)){
              echo json_encode($result);              
            }else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }             

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //ENREGISTREMENT DE TRANSACTION 

    public function saveTransaction(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->type = $this->input->post('transaction');
            $param->date = $this->input->post('dateOperation');
            $param->montant = $this->input->post('montantT');
            $param->description = $this->input->post('description');
            $param->piece = $this->input->post('piece');
            $param->typPaie = $this->input->post('payement');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');

            $param->CompteCaisse = $this->input->post('numCptCaisse');
            $param->numCompte = $this->input->post('numCptEp');
            $param->utilisateur = $this->input->post('user');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("trasactionEpargne", array($param));

            $result = $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Information de transaction non enregistrer!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Transaction reussit!!!';
            }

            echo json_encode($msg);              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    //ENREGISTREMENT D'UNE VIREMENT 

    public function saveVirement(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->comptRetirer = $this->input->post('numCompte');
            $param->comptDepot = $this->input->post('numCompte2');
            $param->montant = $this->input->post('montant');
            $param->piece = $this->input->post('piece');
            $param->date = $this->input->post('dateOperation');
            $param->typePaie = $this->input->post('payement');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');
            $param->comptCaisse = $this->input->post('numCptCaisse');
            $param->utilisateur = $this->input->post('user');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("virement", array($param));

            $result = $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Trasfert non enregistrer!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Transfert d\'argent reussit!!!';
            } 

            echo json_encode($msg);  
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT TRANSACTION

    public function rapportTransaction(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
             
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportTransactions", array($param));

            $result = $res->resultat;
            if(!empty($result)){

                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //CALCUL INTERET

    public function calculInteret(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProd = $this->input->post('produit');           
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("calcInteret", array($param));

            $result = $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Erreur calcul Intérêt!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Opération enregistrer!!!';
            }

            echo json_encode($msg);            


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT INTERET

    public function getInteret(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProd = $this->input->post('produit');           
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportInteret", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Fermer compte épargne
    
    public function fermerCompte(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->comptFerm->id = "";           
            $param->comptFerm->dateCloture = $this->input->post('dateFermer');           
            $param->comptFerm->fraisCloture = $this->input->post('frais');           
            $param->comptFerm->numRecue = $this->input->post('piece');           
            $param->comptFerm->raison = $this->input->post('raison');           
            $param->numCmpt = $this->input->post('numCmpt');                  

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("fermerCompte", array($param));

            $result = $res->validation;
           
            $msg['success'] = false;
            $msg['message'] = 'Information non enregistrer';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Enregistrement reussit!!!';
            }

             echo json_encode($msg);

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }




    //RAPPORT SOLDE D'EPARGNE

    public function getSoldeEpargne(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProd = $this->input->post('produit');        

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getSoldeEpargne", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //RAPPORT SOLDE D'EPARGNE MIN MAX

    public function getSoldeMinMax(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->dateDeb = $this->input->post('dateDeb');        
            $param->dateFin = $this->input->post('dateFin');        

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getSoldeMinMax", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT RELEVER DE COMPTE D'EPARGNE

    public function getReleverCompte(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->numCompte = $this->input->post('numCptEp');           
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           

            $param2 = new stdClass();
            $param2->numCmpt = $this->input->post('numCptEp');   

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getReleverCompte", array($param));

            $detail = $client->__soapCall("findCompteByCode", array($param2));

            $result = $res->resultat;
            $compte = $detail->resultat;
            if(!empty($result)){
               $msg['result'] = $result;
               $msg['compte'] = $compte;
            }              
            echo json_encode($msg);

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT NOUVEAU COMPTE D'EPARGNE

    public function getNouveauCompte(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
                 
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportNouveauCompte", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT COMPTE EPARGNE FERMER

    public function getCompteFermer(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
                 
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getCompteFermer", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT EPARGNE PAR PRODUIT

    public function rapportEpargneProduit(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->idProd = $this->input->get('produit');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportParProduit", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //RAPPORT Fiche journalière d'épargne

    public function getFicherJournalier(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->date = $this->input->post('dateDeb');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getFicheJournalier", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //RAPPORT Etat de compte épargne

    public function getEtatCompte(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();
        
            $param->dateDeb = $this->input->post('dateDeb');           
            $param->dateFin = $this->input->post('dateFin');           
            $param->cat1 = $this->input->post('cat1');           
            $param->cat2 = $this->input->post('cat2');           
            $param->cat3 = $this->input->post('cat3');           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getEtatCompte", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    /************************************************************************/
    /********************************Dépôt à terme***************************/
    /************************************************************************/
    //Calcul date échéance

    public function calculDateEcheancheDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->date = $this->input->get('date');           
            $param->periode = $this->input->get('periode');           
          

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getDateEcheanche", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }     

    //Calcul Montant lors d'un retrait sur DAT

    public function calculMontantDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->date = $this->input->get('date');           
            $param->compte = $this->input->get('numCompt');           
          

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("calculMontantDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }              


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } 

    //Détail produits épargne

    public function getDetailProduitEpargne(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->idProd = $this->input->get('id');           
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findProduitById", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Find all compte DAT

    public function findCompteDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->compte = $this->input->get('code');           
            $param->payer = 0;           
            $param->fermer = 0;           
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findCompteDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Find one compte DAT

    public function getCompteDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->compte = $this->input->get('id');           
            $param->payer = 0;           
            $param->fermer = 0;           
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getCompteDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Ouvrir compte DAT
    public function ouvrirCompteDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();        
            $param->idProduitEp = $this->input->post('produit');
            $param->codeInd = $this->input->post('individuel');
            $param->codeGrp = $this->input->post('groupe');
            $param->userId = $this->input->post('user');
            $param->piece = $this->input->post('piece');
            $param->typePaie = $this->input->post('payement');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');
            $param->CompteCaisse = $this->input->post('numCptCaisse');
            $param->numCompte = $this->input->post('comptEpargne');           

            $param->compte->numCompteDAT = "";
            $param->compte->dateDepot = $this->input->post('dateDepot');
            $param->compte->dateEcheance = $this->input->post('dateEc');
            $param->compte->montant = $this->input->post('montant');
            $param->compte->interet ="";
            $param->compte->tauxInt = $this->input->post('tauxInt');
            $param->compte->periode = $this->input->post('periode');
            $param->compte->modePayeInteret = "";
            $param->compte->ret = "";
            $param->compte->dateRetrait = "";
            $param->compte->totalIntRetrait = "";
            $param->compte->taxe = "";
            $param->compte->penalite = "";
            $param->compte->total = "";
            $param->compte->payeInt = "";
            $param->compte->raison = "";
            $param->compte->fermer = "";


           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("ouvrirDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } 

    //Retrait DAT
    public function retraitDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();  
            $param->compte = $this->input->post('compteN');
            $param->date = $this->input->post('dateRetrait');
            
            $param->userId = $this->input->post('user');
            $param->piece = $this->input->post('piece');
            $param->typePaie = $this->input->post('payement');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');
            $param->CompteCaisse = $this->input->post('numCptCaisse');
            $param->numCompte = $this->input->post('comptEpargne');     
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("retaraitDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }             


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } 

    //Supprimer compte DAT
    public function supprimerDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();  
            $compte = $this->input->post('compteN');          
            $param->compte = $this->input->post('compteN');           
            $param->raison = $this->input->post('raison');    

           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("annulerDAT", array($param));

            $result = $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Dépôt à terme numéro '.$compte.' a été supprimer';
            }

             echo json_encode($msg);         


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Rapport compte DAT
    public function getRapportDAT(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();  

            $param->dateDeb = $this->input->post('dateDebut');           
            $param->dateFin = $this->input->post('dateFin');    
            $param->payer = 0;    
            $param->fermer = 0;   
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }         


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }   

    //Rapport compte DAT supprimés
    public function getRapportDATSupprimer(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
            $param = new stdClass();  

            $param->dateDeb = $this->input->post('dateDebut');           
            $param->dateFin = $this->input->post('dateFin');    
            $param->payer = 0;    
            $param->fermer = 1;   
           
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }         


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //Rapport échéance DAT
    public function getRapportEcheanceDAT(){

    	 try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             
    	 	$param = new stdClass();  

            $param->dateDeb = $this->input->post('dateDebut');           
            $param->dateFin = $this->input->post('dateFin');    
    
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("rapportEcheanceDAT", array($param));

            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }         


        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }



}