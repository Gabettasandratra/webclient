<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptabilite extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    //AFFICHE GRAND LIVRE

    public function afficheGrandLivre(){

         try {
             
            $param = new stdClass();
           
            $param->nomUtilisateur = $this->input->post('nomUtilisateur');
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("afficheGrandLivre", array($param));

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

    //AFFICHE MOUVEMENT GRAND LIVRE PAR COMPTE

    public function getMouvement(){

         try {
             
            $param = new stdClass();
           
            /*$param->nomUtilisateur = $this->input->post('nomUtilisateur');
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');*/

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("mouvementCompte", array());

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

    //AFFICHE LES DIFFERENTS COMPTES DANS LE GRAND LIVRE 

    public function getCompteDistinct(){

         try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getAcountDistinct", array());

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


    //Get journal comptable

    public function getJournalCaisse(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
           
            $param->id = $this->input->get('id');
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getGrandLivreGen", array($param));

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

      //AFFICHE COMPTE ACTIF

    public function getComptesActif(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
           
            $param->compte = $this->input->get('code');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getComptesActif", array($param));

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

    //ENREGISTREMENT DU COMPTE COMPTA

    public function saveCompte(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
           
            $param->comptes->tkey = "";
            $param->comptes->hlevel = "";
            $param->comptes->isActive = "";
            $param->comptes->isHeader = "";
            $param->comptes->label = $this->input->post('libelle');
            $param->comptes->numCpt = $this->input->post('numero');
            $param->comptes->devise = $this->input->post('devise');
            $param->comptes->ferme = "";
            $param->comptes->soldeInit = $this->input->post('solde');
            $param->comptes->soldeProgressif ="";
            $param->parentId = $this->input->post('compte_parent');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("addAccount", array($param));

            $result = $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Information non enregistrer,,,erreur!';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['message'] = $result;
            }

            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //ENREGISTREMENT DUTRANSACTION

    public function saveTransaction(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->date = $this->input->post('dateOperation');
            $param->piece = $this->input->post('piece');
            $param->description = $this->input->post('description');
            $param->compte1 = $this->input->post('compte');
            $param->compte2 = $this->input->post('numCptEq');
            $param->montant = $this->input->post('montant');
            $param->utilisateur = $this->input->post('user');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("saveTransaction", array($param));

            $result = $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Information non enregistrer!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Transaction reussit!';
            }

            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //FIND GRAND LIVRE

    public function findGranLivre(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->compte = $this->input->post('compte');
            $param->nomUtilisateur = $this->input->post('nomUtilisateur');
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("afficheGrandLivre", array($param));

            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun resultat de votre recherche';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //FIND GRAND LIVRE AUXILIAIRE

    public function granLivreAuxiliaire(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->codeInd = $this->input->post('codeCli');
            $param->codeGrp = $this->input->post('codeGrp');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("grandLivreClient", array($param));

            $result= $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Auccun resultat de votre recherche';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //BILAN DES COMPTES

    public function bilan(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getBilan", array($param));

            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun resultat de votre recherche';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //COMPTES DES RESULTATS

    public function resultatCompta(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getResultat", array($param));

            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun resultat de votre recherche';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //BALANCE DES COMPTES

    public function balance(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->dateDeb = $this->input->post('dateDeb');
            $param->dateFin = $this->input->post('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getBalance", array($param));

            $result= $res->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Auccun resultat de votre recherche';
            if(!empty($result)){
                $msg['success'] = true;  
                $msg['result'] = $result;
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //Enregistrement budget

    public function saveBudget(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->budget->code = "";
            $param->budget->nom = $this->input->post('rubrique');
            $param->budget->prevision = $this->input->post('prevision');
            $param->budget->date = $this->input->post('date');
            $param->budget->description = $this->input->post('desc');
            $param->budget->realisation = "";

            /*$param->idCompte = $this->input->post('compte');*/

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("saveBudget", array($param));

            $result= $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement!!!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Enregistrement reussit!!!';
            }
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //recuperer budget

    public function getBudget(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("listBudget", array());

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

    //recuperer code analytique

    public function getAnalytique(){

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getAnalytique", array());

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


    //recuperer tout les comptes

    public function getAccount(){

         $param = new stdClass();
         $param->compte = $this->input->get('code');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("chercheAccount", array($param));

            $result= $res->resultat;
           
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

   //getJournalCaisse

    //Journal Caisse et Banque
    public function getJournal(){

         $param = new stdClass();
         $param->date = $this->input->post('dateDeb');
         $param->numCmpt = $this->input->post('numCmpt');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getJournal", array($param));

            $result= $res->resultat;
           
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

    //Journal des autres comptes
    public function getJournalDivers(){

         $param = new stdClass();
         $param->date = $this->input->post('dateDeb');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("getJournalDivers", array($param));

            $result= $res->resultat;
           
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

    //recuperer Budget par son code

    public function findBudget(){

         $param = new stdClass();
         $param->code = $this->input->get('code');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("findBudget", array($param));

            $result= $res->resultat;
           
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

 //chercher code Budgetaire

    public function findCodeBudget(){

         $param = new stdClass();
         $param->code = $this->input->get('code');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("chercherBudget", array($param));

            $result= $res->resultat;
           
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
 //chercher code Analytique

    public function findCodeAnalytique(){

         $param = new stdClass();
         $param->code = $this->input->get('code');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("chercherAnalytique", array($param));

            $result= $res->resultat;
           
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

    //Enregistrement Operation divers

    public function saveOperationDivers(){

          error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $param = new stdClass();
            $param->date = $this->input->post('date');
            $param->piece = $this->input->post('piece');
            $param->description = $this->input->post('desc');

            $param->analytique = $this->input->post('analytique'); 
            $param->budget = $this->input->post('budget'); 
            $param->utilisateur = $this->input->post('user'); 

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("saveOperationDivers", array($param));

            $result = $res->validation;
            $msg['success'] = false;
            $msg['message'] = 'Opération non enregistrer!';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Opération reussit!';
            }
 
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    //Declassement crédit

    public function declasserCredit(){

         $param = new stdClass();
         $param->date = $this->input->post('dateDeb');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("declasserCredit", array($param));

            $result= $res->resultat;
           
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

    //Save Declassement crédit

    public function saveDeclassement(){

         $param = new stdClass();
         $param->date = $this->input->post('dateDeb');
         $param->user = $this->input->post('userId');

         try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $res = $client->__soapCall("saveDeclassement", array($param));
           
            $result = $res->validation;
            $msg['success'] = false;
            //$msg['message'] = 'Opération non enregistrer!';
            if($result == true){
                $msg['success'] = true;  
                //$msg['message'] = 'Opération reussit!';
            }
 
            echo json_encode($msg);  
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    /***********************Transaction comptable********************/
     
     //Get opération view 
      public function getOperationView(){

             try {
                error_reporting(E_ERROR | E_PARSE | E_NOTICE);
                $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                $res = $client->__soapCall("listOperationView", array());

                $result= $res->resultat;
                if(!empty($result)){
                    echo json_encode($result);               
                }    
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }  

     //Ajout opération view 
      public function addOperationView(){
             error_reporting(E_ERROR | E_PARSE | E_NOTICE);
             $param = new stdClass();
             $param->operation->id = "";
             $param->operation->numCmpt = $this->input->post('compte');
             $param->operation->label = $this->input->post('label');
             $param->operation->debit = $this->input->post('debit');
             $param->operation->credit = $this->input->post('credit');
             try {
                $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                $res = $client->__soapCall("addOperationView", array($param));

                $result= $res->validation;
                $msg['success']=false;
                if($result==true){
                    $msg['success']=true;                    
                }    
                echo json_encode($msg);               
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }    

     //Vider opération view 
      public function viderOperationView(){
             try {
                error_reporting(E_ERROR | E_PARSE | E_NOTICE);
                $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                $res = $client->__soapCall("viderOperationView", array());

                $result= $res->validation;
                $msg['success']=false;
                if($result==true){
                    $msg['success']=true;                    
                }    
                echo json_encode($msg);               
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }   


}