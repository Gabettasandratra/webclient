<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    public function demandeCredits(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $date_demande = $this->input->post('date_demande');
            $montant = $this->input->post('montant_demande');
            $nom_agent = $this->input->post('nom_agent');
            $idProduit = $this->input->post('idProduit');
            $code_client = $this->input->post('codeInds');
            $user = $this->input->post('user');
                       
            $param = new stdClass();
            $param->idProduit = $idProduit;
            $param->codeInd = $code_client;
            $param->codeGroupe = '';

            $param->demandeCredit->numCredit = "";
            $param->demandeCredit->nbCredit = "";
            $param->demandeCredit->dateDemande = $date_demande;
            $param->demandeCredit->montantDemande = $montant;
            $param->demandeCredit->interet = "";
            $param->demandeCredit->butCredit = $this->input->post('but_credit');
            $param->demandeCredit->appBy ="";
            $param->demandeCredit->approbationStatut ="";
            $param->demandeCredit->dateApprobation ="";
            $param->demandeCredit->descrApprobation ="";
            $param->demandeCredit->montantApproved ="";
            $param->demandeCredit->commission =0;
            $param->demandeCredit->taux =$this->input->post('tauxAnnuel');
            $param->demandeCredit->nbTranche =$this->input->post('nbTranche');
            $param->demandeCredit->typeTranche =$this->input->post('typeTranche');
            $param->demandeCredit->diffPaie =$this->input->post('diffPaie');
            $param->demandeCredit->modeCalculInteret =$this->input->post('modeCalcul');
            $param->demandeCredit->solde_total ="";
            $param->demandeCredit->principale_total ="";
            $param->demandeCredit->interet_total ="";

            //Agent de crédit
            $param->id_Agent = $this->input->post('nom_agent');                      

            //Garant crédit
            $param->codeGar1 = $this->input->post('gar1');            
            $param->tauxGar1 = $this->input->post('tauxGar1'); 

            $param->codeGar2 = $this->input->post('gar2');            
            $param->tauxGar2 = $this->input->post('tauxGar2');  

            $param->codeGar3 = $this->input->post('gar3');            
            $param->tauxGar3 = $this->input->post('tauxGar3');      

            //Utilisateur de saisie      
            $param->user_id = $user;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveDemandeCreditIndividuel",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($result == true){
                $msg['success'] = true;
            }
            else
                echo "error";
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }
    //Enregistrement demande crédit groupe
    public function demandeCreditGroupe(){

    	try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $date_demande = $this->input->post('date_demande');
            $montant = $this->input->post('montant_demande');
            $nom_agent = $this->input->post('nom_agent');
            $idProduit = $this->input->post('idProduit');
            $user = $this->input->post('user');
                       
           	$param = new stdClass();
            $param->idProduit = $idProduit;
            $param->codeGrp = $this->input->post('codeGroupe');

            $param->demandeCredit->numCredit = "";
            $param->demandeCredit->nbCredit = "";
            $param->demandeCredit->dateDemande = $date_demande;
            $param->demandeCredit->montantDemande = $montant;
            $param->demandeCredit->interet = "";
            $param->demandeCredit->butCredit = $this->input->post('but_credit');
            $param->demandeCredit->appBy ="";
            $param->demandeCredit->approbationStatut ="";
            $param->demandeCredit->dateApprobation ="";
            $param->demandeCredit->descrApprobation ="";
            $param->demandeCredit->montantApproved ="";
            $param->demandeCredit->commission =0;
            $param->demandeCredit->taux =$this->input->post('tauxAnnuel');
            $param->demandeCredit->nbTranche =$this->input->post('nbTranche');
            $param->demandeCredit->typeTranche =$this->input->post('typeTranche');
            $param->demandeCredit->diffPaie =$this->input->post('diffPaie');
            $param->demandeCredit->modeCalculInteret =$this->input->post('modeCalcul');
            $param->demandeCredit->solde_total ="";
            $param->demandeCredit->principale_total ="";
            $param->demandeCredit->interet_total ="";

            //Agent de crédit
            $param->id_Agent = $this->input->post('nom_agent');                      

            //Utilisateur de saisie      
            $param->user_id = $user;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveDemandeCreditGroupe",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($result == true){
                $msg['success'] = true;
            }
            else
                echo "error";
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Enregistrement garantie

    public function saveGarantie(){
        try {
             error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->garantie->rowId = "";
            $param->garantie->typeGarantie = $this->input->post('typeGar');
            $param->garantie->nomGarantie = $this->input->post('nomGar');
            $param->garantie->valeur = $this->input->post('valGar');
            $param->garantie->pourcentage = $this->input->post('tauxGar');
            $param->garantie->numCredit ="";
            $param->codeInd = $this->input->post('codeC');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("addGarantieView",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->validation;
            if($result == true)
                echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }


    //Vider garantie view

    public function viderGaratieView(){
        try {
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("deleteGarantieVIew",  array());
           // $res = $client->demandeCredit($data);
            $result = $res->validation;
            if($result == true)
                echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Recupere les listes des garanties

    public function chargeGarantie(){
        try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getAllGarantieView",  array());
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            if(!empty($result))
                echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }


    /*****************************Demande crédit groupe*****************************/

    //Recupere liste montant par membre groupe

    public function getMontantMembre(){
        try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getAllCrediGroupeView",  array());
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            if(!empty($result))
                echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }
  //Enregistrement Montant crédit par membre

    public function saveMontantMembre(){
        try {
             error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->numCredit = $this->input->post('numCred');
            $param->codeGroupe = $this->input->post('codeGroupe');
            $param->codeInd = $this->input->post('nomMembre');
            $param->montant = $this->input->post('principalMembre');
            $param->interet = $this->input->post('interetMembre');
            $param->taux = $this->input->post('interetMembre');
 
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("addmontantMembreGroupe",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['success'] = false;
            if(!empty($result))
                $msg['success'] = true;
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }


    //Vider Table CreditMembreGroupeView

    public function deleteMontantMembre(){
        try {
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("deleteMontant",  array());
           // $res = $client->demandeCredit($data);
            $result = $res->validation;
            if($result == true)
                echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

 //AFFICHE LES CONFIGURATION FRAIS

    public function editCommission(){
        try {
            
            $idProduit = $this->input->get('idProdCredit');

            $param = new stdClass();
            $param->idProduitCredit = $idProduit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("findOne",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->validation;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //AFFICHE commission avant ou après approbation

    public function getCommissionCredit(){
        try {
            
            $mc = $this->input->get('mc');

            $param = new stdClass();
            $param->mc = $mc;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getCommissionAvantApprobation",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //ENREGISTREMENT COMMISSION
    public function saveCommission(){

             try {
            
                $param = new stdClass();
               
                $param->cash = $this->input->post('cash');
                $param->statuCommission = $this->input->post('statut_comm');
                $param->date= $this->input->post('datePaie');
                $param->piece = $this->input->post('piece');
                $param->comm = $this->input->post('commission');
                $param->papeterie = $this->input->post('papeterie');
                 

                $param->numCredit = $this->input->post('numCredit');
                $param->userId = $this->input->post('user');
                $param->cptCaisse = $this->input->post('numCptCaisse');
              
                $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

                $res = $client->__soapCall("insertCommission",  array($param));
               // $res = $client->demandeCredit($data);
                $result = $res->validation;

                $msg['success'] = false;
                $msg['type'] = 'ad';
                if($result){
                    $msg['success'] = true;
                }
                else
                    echo "error";
                echo json_encode($msg);
                
            } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }


    }

    //ENREGISTREMENT APPROBATION 
    public function saveApprobation(){

             try {
           
               // $user = $this->input->post('user');
                $num_credit = $this->input->post('numCredit');
                $app_par = $this->input->post('approuv_par');
                $date_app = $this->input->post('date_app');
                $description = $this->input->post('description');
                $montant_app = $this->input->post('montant_app');
                $statut = $this->input->post('stat');

                $param = new stdClass();
                $param->num_credit = $num_credit;
                $param->approuv_par = $app_par;
                $param->dateApp = $date_app;
                $param->descApp = $description;
                $param->montantApp = $montant_app;
                $param->statut = $statut;

                $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

                $res = $client->__soapCall("saveApprobation",  array($param));
               // $res = $client->demandeCredit($data);
                $result = $res->resultat;

                $msg['success'] = false;
                //$msg['type'] = 'ad';
                $msg['resultat'] = $result;
                if($result){
                    $msg['success'] = true;
                }
                else
                    echo "error";
                echo json_encode($msg);
                
            } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }

        }


    public function saveDecaissement(){

         try {
        
            $param = new stdClass();
           
            $param->date= $this->input->post('date_dec');
            $param->typePaie = $this->input->post('payement');
            $param->montant = $this->input->post('montant');
            $param->commission = $this->input->post('commission');
            $param->papeterie = $this->input->post('papeterie');
            $param->piece = $this->input->post('piece');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');
            $param->numCompte = $this->input->post('comptEpargne');
            $param->comptCaisse = $this->input->post('numCptCaisse');

            $param->num_credit = $this->input->post('numCredit');
            $param->id_utilisateur = $this->input->post('user');
          
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveDecaisement",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;

            $msg['success'] = false;
            $msg['resultat'] = $result;
            if($result){
                $msg['success'] = true;
            }
            else
                echo "error";
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    public function dernierRemboursement(){

        try {

            $numCredit = $this->input->get('numCredit');

            $param = new stdClass();
            $param->numCredit = $numCredit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("dernierRemboursement",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }
  
  //Chercher numCrédit par mot clé
  public function findCreditParNum(){

        try {

            $param = new stdClass();
            $param->mc = $this->input->get('code');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("chercherCredit", array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }


    public function saveRemboursement(){

           try {
        
            $param = new stdClass();
           
            $param->numCredit = $this->input->post('numCredit');
            $param->utilisateur = $this->input->post('user');
            
            $param->date= $this->input->post('dateRemb');
            $param->montant = $this->input->post('montant');
            $param->piece = $this->input->post('piece');
            $param->typePaie = $this->input->post('payement');
            $param->numTel = $this->input->post('tel');
            $param->numCheq = $this->input->post('numCheque');
            $param->comptCaisse = $this->input->post('numCptCaisse');
            
          
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveRemboursement",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;

            $msg['success'] = false;
            $msg['resultat'] = $result;
            $msg['type'] = 'ad';
            if($result == true){
                $msg['success'] = true;
            }
            else
                echo "error";
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }

//CALENDRIER ECHEANCE
    public function historiqueRemboursement(){

         try {

            $numCredit = $this->input->get('numCredit');

            $param = new stdClass();
            $param->numCredit = $numCredit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("historiqueCredit",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //HISTORIQUE REMBOURSEMENT
    public function histoqueRemboursement(){

         try {

            $numCredit = $this->input->get('numCredit');

            $param = new stdClass();
            $param->numCredit = $numCredit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("historiqueCreditTout",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    public function getMontantRemb(){

          try {
            
            $numCredit = $this->input->get('numCredit');
            $date = $this->input->get('date');

            $param = new stdClass();
            $param->numCredit = $numCredit;
            $param->date = $date;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getMontaRemb",  array($param));
            // $res = $client->demandeCredit($data);
            $result = $res->list;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }   

//Get Info client

     public function getInfoClient(){

          try {
            
            $codeCli = $this->input->get('code');

            $param = new stdClass();
            $param->code = $codeCli;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getInfoClient",  array($param));
            // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get Fiche crédit

     public function getFicheCredit(){

          try {
            
            $numCred = $this->input->post("numCredit");

            $param = new stdClass();
            $param->numCred = $numCred;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("listeFicheCredit",  array($param));
            $res2 = $client->__soapCall("getCreditById",  array($param));
            // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $cred = $res2->resultat;
            $msg['result'] = $result;
            $msg['cred'] = $cred;
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get Statut crédit

     public function getStatutCredit(){

          try {

            $param = new stdClass();
            $param->dateDeb =  $this->input->post("dateDeb");
            $param->dateFin =  $this->input->post("dateFin");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getCreditByDate",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }


    //Get Décaissement en attente

     public function getDecaissementAttente(){

          try {

            $param = new stdClass();
            $param->dateDeb =  $this->input->post("dateDeb");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getDecaissementAttente",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get Décaissement

     public function getDecaissement(){

          try {

            $param = new stdClass();
            $param->dateDeb =  $this->input->post("dateDeb");
            $param->dateFin =  $this->input->post("dateFin");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getDecaissement",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get Garant crédit

     public function getGarantCredit(){

          try {

            $param = new stdClass();
            $param->numCredit =  $this->input->get("numCredit");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getGarantCredit",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get Garantie crédit

     public function getGarantieCredit(){

          try {

            $param = new stdClass();
            $param->numCredit =  $this->input->get("numCredit");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getGarantieCredit",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get rapport solde restant du

     public function getSoldeRestantDu(){

          try {

            $param = new stdClass();
            $param->date =  $this->input->post("dateDeb");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getSoldeRestantDu",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get rapport montant dû aujourd'hui

     public function getMontantDuToDay(){

          try {

            $param = new stdClass();
            $param->date =  $this->input->post("date");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getMontantDu",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get rapport montant dû pour un payement futur

     public function getMontantDuFutur(){

          try {


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getMontantDuFutur",  array());
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Get rapport portefeuille par agent de crédit

     public function getPortefeuilleAgent(){

          try {

            $param = new stdClass();
            $param->dateDeb =  $this->input->post("dateDeb");
            $param->dateFin =  $this->input->post("dateFin");

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("analysePortefeuille",  array($param));
            
            $result = $res->resultat;
           
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

//Get All Crédit

     public function getAllCredit(){

          try {

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("findAllDemand",  array());
            // $res = $client->demandeCredit($data);
            $result = $res->voir_Demande;
            echo json_encode($result);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }
    



}