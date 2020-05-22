<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Systemes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        /*$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');*/
    }

    /************************************************ CONFIGURATION CREDIT ***************************************************/
   
/*********AGENCE**********/
    public function ajoutPersonnels()
    {


        try {     
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);    
            $param = new stdClass();
            $param->infoPersonel->codePersonnel = "";
            $param->infoPersonel->nom = $this->input->post('nom');
            $param->infoPersonel->prenom = $this->input->post('prenom');
            $param->agence = $this->input->post('agence');
            $param->fonction = $this->input->post('fonction');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("addPersonnel", array($param));
            $result = $res->validation;

            $msg['success'] = false;
            if($result == true){
                $msg['success'] = true;
              }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }  


    //Ajout utilisateur
    public function saveUser()
       {

            try {
                error_reporting(E_ERROR | E_PARSE | E_NOTICE); 
                //$this->output->enable_profiler(TRUE);

               //!$this->upload->do_upload($field_name)
               /* if (isset($_FILES["photo"]["name"])) 
                  {
                  }   
                    
                    $config['upload_path'] = './assets/uploads/photo/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '500';
                    $config['max_width'] = '1024';
                    $config['max_height'] = '768';

                    $this->load->library('upload',$config);
                    //$this->upload->initialize($config);

                    if(!$this->upload->do_upload('photo')){
                        $msg['success'] = false;
                        echo $this->upload->display_errors();
                    }else{
                        $data = $this->upload->data();
                        $name_file = "./assets/uploads/photo/".$data['file_name'];

                       
                    }

                    $field_name = "photo";
                    $img = $this->input->post('photo');*/                    

            $param = new stdClass();
            $param->nomUser = $this->input->post('nom');
            $param->loginUser = $this->input->post('identifiant');
            $param->mdpUser = $this->input->post('mdp');
            $param->mdpUserConf = $this->input->post('mdp2');
            $param->genreUser = $this->input->post('genre');
            $param->telUser = $this->input->post('tel'); 
            $param->photo = "";                            //$upload_data['file_name'];
            $param->fonction = $this->input->post('fonction');
          
            //$param->compteCaisse = "";

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("insertUser", array($param));

            $result = $res->validation;
              $msg['success'] = false;
            if($result == true){
                $msg['success'] = true;
            }  
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }

    //Ajout utilisateur
    public function deleteUser()
       {

            try {
                error_reporting(E_ERROR | E_PARSE | E_NOTICE);    
                $param = new stdClass();
                $param->id = $this->input->get('id');
             
                //$param->compteCaisse = "";

                $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

                $res = $client->__soapCall("deleteUser", array($param));
                $result = $res->validation;

                $msg['success'] = false;
                if($result == true){
                    $msg['success'] = true;
                  }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }


    /****** MENU PRODUIT CREDIT (LISTE DES PRODUITS)*******/
   
    public function produitCredit()
    {

    if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];  
          
            $data['titre'] = 'Produit crédit';
            $data['tete'] = 'Produit crédit';
            $this->load->view('template/header',$data);
            $this->load->view('systemes/prouitCredit');
            $this->load->view('template/footer');           
            
           /* $this->load->view('pages/tete',$data);
            $this->load->view('systemes/prouitCredit');*/
        }

    }

    /****************** AJOUT PRODUIT CREDUIT******************************/
   
    public function saveproduit()
    {

        try {
            $nom = $this->input->post('nomProd');
            $etat = $this->input->post('etat');
                       
            $param = new stdClass();
            $param->nomProd = $nom;
            $param->etat = $etat;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");

            $res = $client->__soapCall("saveProduit_Credit", array($param));
            $result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($result){
                $msg['success'] = true;
            }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    } 


    //Supprimer produit crédit  
    public function deleteProduitCredit()
    {

        try {
            $id = $this->input->get('id');
                                  
            $param = new stdClass();
            $param->idProduitCredit = $id;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("deleteProduitCredit", array($param));
            $result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($result){
                $msg['success'] = true;
                $msg['result'] = $result;

            }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    } 


    /******************************CONFIG CREDIT INDIVIDUEL******************************/

    public function configCreditIndividuel(){

         try {

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $idProduit = $this->input->post('idProduit');
            
            $adhesionMinAvantDecais = $this->input->post('adhesMin');

            $calculIntDiff = $this->input->post('calculIntDiff');
            
            $calculIntEnJours = $this->input->post('calculIntJours'); 

            $commission_crédit = $this->input->post('commCredit');
            
            $delaisGraceMax = $this->input->post('delaiGrace'); 

            $differePaiement = $this->input->post('diffPaie');
            
            $forfaitPaiePrealableInt = $this->input->post('forfaitPaieprealable');

            $intDeduitAuDecaissement = $this->input->post('intdedDecais');
            
            $intPendantDiffere = $this->input->post('paiePrealInt'); 

            /*$intSurDiffCapitalise = $this->input->post('nomProd');*/
            
            $modeCalculInteret = $this->input->post('calculeInt');
          
            $montantCredit = $this->input->post('montant');
          
            $montantMaxCredit = $this->input->post('montMax');
          
            $montantMinCredit = $this->input->post('montMin');
/*          
            $pariementPrealableInt = $this->input->post('etat');*/
            
            $periodeMaxCredit = $this->input->post('periodMax');
            
            $periodeMinCredit = $this->input->post('periodMin');
            
            $tauxInteretAnnuel = $this->input->post('tauxIntAnnuel');
    /*       
            $trancheDistIntPeriodeDiff = $this->input->post('etat');*/
           
            $tranches = $this->input->post('tranche');
           
            $typeTranche = $this->input->post('typeTranche');
           
            $validationMontantCreditParCycle = $this->input->post('activeVal');
                       
            $param = new stdClass();
           
            $param->configIndCredit->rowId = "";

            $param->configIndCredit->adhesionMinAvantDecais = $adhesionMinAvantDecais;

            $param->configIndCredit->calculIntDiff = $calculIntDiff;

            $param->configIndCredit->calculIntEnJours = $calculIntEnJours;
            
            $param->configIndCredit->commission_crédit = $commission_crédit;

            $param->configIndCredit->delaisGraceMax = $delaisGraceMax;

            $param->configIndCredit->differePaiement = $differePaiement;

            $param->configIndCredit->forfaitPaiePrealableInt = $forfaitPaiePrealableInt;

            $param->configIndCredit->intDeduitAuDecaissement = $intDeduitAuDecaissement;

            $param->configIndCredit->intPendantDiffere = $intPendantDiffere;

            $param->configIndCredit->intSurDiffCapitalise = "";
                    /*KSkksd
                                */
            $param->configIndCredit->modeCalculInteret = $modeCalculInteret;

            $param->configIndCredit->montantCredit = $montantCredit;

            $param->configIndCredit->montantMaxCredit = $montantMaxCredit;

            $param->configIndCredit->montantMinCredit = $montantMinCredit;

            $param->configIndCredit->pariementPrealableInt = "";

            /*DERNIER LIGNE*/
            $param->configIndCredit->periodeMaxCredit = $periodeMaxCredit;

            $param->configIndCredit->periodeMinCredit = $periodeMinCredit;

            $param->configIndCredit->tauxInteretAnnuel = $tauxInteretAnnuel;

            $param->configIndCredit->trancheDistIntPeriodeDiff = "";


            /////////////////////////////////////////
            $param->configIndCredit->tranches = $tranches;

            $param->configIndCredit->typeTranche = $typeTranche;

            $param->configIndCredit->validationMontantCreditParCycle = $validationMontantCreditParCycle;

             $param->idProduit = $idProduit;




            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configCreditInd", array($param));
            $result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($result){
                $msg['success'] = true;
            }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }


    }

    /*******************************CONFIGURATION CREDIT GROUPES***************************************/

    public function configCreditGroupe(){

         try {
            
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            $montantCredit = $this->input->post('montant');

            $tauxInteretAnnuel = $this->input->post('tauxIntAnnuel');

            $differePaiement = $this->input->post('diffPaie');

            $tranches = $this->input->post('tranche');

            $typeTranche = $this->input->post('typeTranche');

            $modeCalculInteret = $this->input->post('calculeInt');

            $commission_crédit = $this->input->post('commCredit');

            $montantMinCredit = $this->input->post('montMin');
            
            $montantMaxCredit = $this->input->post('montMaxParMenmbre');
          
            $adhesionMinGroupe = $this->input->post('periodMinAvantAdhesion');

            $adhesionMinMembre = $this->input->post('periodMinAvantDecaisse');

            $garantieVerifieMembre = $this->input->post('garantCredit');

            $delaisGraceMax = $this->input->post('delaiGrace'); 

            $paiePrealableInt = $this->input->post('paiePrealInt'); 

            $calculIntDiff = $this->input->post('calculIntDiff');
            
            $intDiffPaieCapital = "";

            $intPendantDiffere = "";   

            $intDeduitAuDecaissement = $this->input->post('intdedDecais');

            $calculIntEnJours = $this->input->post('calculIntJours'); 

            $forfaitPaiePrealableInt = $this->input->post('forfaitPaieprealable');

            $montantCreditMembre = $this->input->post('montantParMembre');

            $numCycleMembre = $this->input->post('numCycleMembre');

            $secteurActiv = $this->input->post('secteurActiviter');

            $periodeMinCredit = $this->input->post('periodMin');

            $periodeMaxCredit = $this->input->post('periodMax');
           
            $idProduit = $this->input->post('idProduit');
            
          /*  $adhesionMinAvantDecais = $this->input->post('adhesMin');      
         
            $trancheDistIntPeriodeDiff = $this->input->post('etat');           
           
            $validationMontantCreditParCycle = $this->input->post('activeVal');*/
                       
            $param = new stdClass();
           
            $param->configCreditGroup->rowId = "";
            
            $param->configCreditGroup->montantCredit = $montantCredit;

            $param->configCreditGroup->interetAnnuel = $tauxInteretAnnuel;

            $param->configCreditGroup->diffPaiement = $differePaiement;

            $param->configCreditGroup->tranche = $tranches;
            
            $param->configCreditGroup->typeTranche = $typeTranche;

            $param->configCreditGroup->calculeInteret = $modeCalculInteret;

            $param->configCreditGroup->commissionCredit = $commission_crédit;
            
            $param->configCreditGroup->montanMinParMembre = $montantMinCredit;

            $param->configCreditGroup->montantMaxParMembre = $montantMaxCredit;

            $param->configCreditGroup->adhesionMinGroup = $adhesionMinGroupe;

            $param->configCreditGroup->adhesionMinMembre = $adhesionMinMembre;

            $param->configCreditGroup->garantieVerifieMembre = $garantieVerifieMembre;

            $param->configCreditGroup->delaiMax = $delaisGraceMax;

            $param->configCreditGroup->paiePrealableInt = $paiePrealableInt;

            $param->configCreditGroup->calculIntDiff = $calculIntDiff;
            
            $param->configCreditGroup->intDiffPaieCapital = $intDiffPaieCapital;

            $param->configCreditGroup->intPaieDiff = $intPendantDiffere;
            
            $param->configCreditGroup->trancheDistIntPeriode = "";

            $param->configCreditGroup->intDeduitauDecais = $intDeduitAuDecaissement;
           
            $param->configCreditGroup->calculIntJours = $calculIntEnJours;

            $param->configCreditGroup->forfaitPaieInt = $forfaitPaiePrealableInt;

            $param->configCreditGroup->montantCreditMembre = $montantCreditMembre;

            $param->configCreditGroup->numCycleMembre = $numCycleMembre;

            $param->configCreditGroup->secteurActiv = $secteurActiv;
            
            $param->configCreditGroup->periodeMinCredit = $periodeMinCredit;

            $param->configCreditGroup->periodeMaxCredit = $periodeMaxCredit;

             $param->idProduit = $idProduit;


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl");

            $res = $client->__soapCall("configGroup", array($param));
            //$result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if(isset($res)){
                $msg['success'] = true;
            }
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
    }


    /********************************CONFIGURATION FRAIS CREDIT INDIVIDUEL******************************/

    public function configFraisCredit(){

        try{

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            //FRAIS INDIVIDUEL
            $idProduit = $this->input->post('idProduit');
            $frais = $this->input->post('frais');
     
            $param = new stdClass();
            $param->configFraisCredit->rowId = "";
            $param->configFraisCredit->commission = $this->input->post('commission');
            $param->configFraisCredit->fraisDemandeOuDecais = "0";
            $param->configFraisCredit->fraisDeveloppement =  $this->input->post('fraisDev');
            $param->configFraisCredit->fraisRefinancement =  $this->input->post('fraisRef');
            $param->configFraisCredit->papeterie = $this->input->post('papeterie');

            $param->configFraisCredit->avantOuApres =  $frais;
            $param->configFraisCredit->tauxFraisDev = $this->input->post('fraisDev2');
            $param->configFraisCredit->tauxCommission = $this->input->post('commission2');
            $param->configFraisCredit->tauxRef = $this->input->post('fraisRef2');
            $param->configFraisCredit->tauxPapeterie = $this->input->post('papeterie2');


            $param->idProduit = $idProduit;

            //FRAIS GROUPE
            $donnee = new stdClass();

            $donnee->confFraisGroupe->avantOuApres =  $frais;
            $donnee->confFraisGroupe->commission =  $this->input->post('commissionGroupe');
            $donnee->confFraisGroupe->fraisDemandeOuDecais = "0";
            $donnee->confFraisGroupe->fraisDeveloppement = $this->input->post('fraisDevGroupe');
            $donnee->confFraisGroupe->fraisRefinancement = $this->input->post('fraisRefGroupe');
            $donnee->confFraisGroupe->papeterie = $this->input->post('papeterieGroupe');
            $donnee->confFraisGroupe->rowId = "";

            $donnee->confFraisGroupe->tauxFraisDev = $this->input->post('fraisDevGroupe2');
            $donnee->confFraisGroupe->tauxCommission = $this->input->post('commissionGroupe2');
            $donnee->confFraisGroupe->tauxRef = $this->input->post('fraisRefGroupe2');
            $donnee->confFraisGroupe->tauxPapeterie = $this->input->post('papeterieGroupe2');

            $donnee->idProduit = $idProduit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configFraisCredits", array($param));
            $res2 = $client->__soapCall("configFraisCreditGroupes", array($donnee));
            
            $result = $res->validation;
            $result2 = $res2->validation;

            $msg['success'] = false;
            if($result == true && $result2 == true)
                $msg['success'] = true;
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    /********************************CONFIGURATION Garantie et garant crédit CREDIT ******************************/

    public function saveConfigGarantieCredit(){

        try{

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            //FRAIS INDIVIDUEL
            $idProduit = $this->input->post('idProduit');     
            $param = new stdClass();
            $param->configGarCredit->rowId = "";
            $param->configGarCredit->lierEpargne = $this->input->post('lierEpargne');

            $param->configGarCredit->garantieBaseMontantCredit =  "";

            $param->configGarCredit->garantieGrpOblig =  $this->input->post('garatieGrp');
            $param->configGarCredit->garantieIndOblig =  $this->input->post('garatieInd');
            $param->configGarCredit->garantIndOblig = $this->input->post('garantInd');

            $param->configGarCredit->percentMontantGrp = $this->input->post('purcetageGrp');
            $param->configGarCredit->percentMontantInd = $this->input->post('purcetageInd');

            $param->configGarCredit->pourcentageGarant = $this->input->post('pourcetageGarant');
            $param->configGarCredit->pourcentageGarantieInd = $this->input->post('pourcetageGarInd');
            $param->configGarCredit->pourcentageGarantieGrp = $this->input->post('pourcetageGarGrp');
          
            $param->produitEpargne= $this->input->post('produitEpargne');
            $param->idProduit = $idProduit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configGarantiCredit", array($param));
            
            $result = $res->validation;
            $msg['success'] = false;
            if($result == true)
                $msg['success'] = true;
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    } 

    //Configuration pénalité credit

      public function saveConfigPenaliteCredit(){

        try{

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            //FRAIS INDIVIDUEL
            $idProduit = $this->input->post('idProduit');     
            $param = new stdClass();
            $param->configPenalite->rowId = "";
            $param->configPenalite->differePaiement = "";
            $param->configPenalite->limiteExpirationPenal = "";
            $param->configPenalite->montantFixe = $this->input->post('fixe');
            $param->configPenalite->modeCalcul = $this->input->post('calculPenal');
            $param->configPenalite->pourcentage = $this->input->post('pourcentage');
            $param->configPenalite->penalJrFerie = "";
           

            $param->idProduit = $idProduit;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configPenalite", array($param));
            
            $result = $res->validation;
            $msg['success'] = false;
            if($result == true)
                $msg['success'] = true;
            echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }




    /*******************************CONFIGURATION POUR TOUT CREDIT ************************************/

    public function configToutCredit(){


    }


    /*******************************CONFIGURATION GENERAL CREDIT**************************************************************/
    
    public function ConfigGeneralCredit(){

         try{

            //error_reporting(0);
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $idProduit = $this->input->post('idProduit');


            $param = new stdClass();
            $param->configGnrlCredit->rowId =$this->input->post('rowId');

            $param->configGnrlCredit->activePrioriteRembCreditDeclassse = $this->input->post('activePrioriRembDeclass');
            
            $param->configGnrlCredit->activeRegleDuplum = $this->input->post('regleDuplum');
            
            $param->configGnrlCredit->autoriseDecaisPartiel = $this->input->post('decaissePartiel');
            
            $param->configGnrlCredit->devise = $this->input->post('devise');
           
            $param->configGnrlCredit->enregPbliPostDemndCredit = $this->input->post('publiPosDemande');

            $param->configGnrlCredit->enregPubliPostDecaiss = $this->input->post('publiPosDecaisse');

            $param->configGnrlCredit->exclurePrdtLimitation = $this->input->post('produitLimit');
            
/*            $param->configGnrlCredit->methodeDegressifCompose = $this->input->post('methodDegressif');
*/          
            $param->configGnrlCredit->nbrJrInt = $this->input->post('nbrJrInt');

            $param->configGnrlCredit->nbrSemaine = $this->input->post('nbrSemaine');

            $param->configGnrlCredit->nePasReinitialiserIntImpayeSoldeDegr = $this->input->post('reinitialiserIntImpayer');

            $param->configGnrlCredit->peutChangerCptGLSurpaie = $this->input->post('changerCmptGL');

            $param->configGnrlCredit->privilegeRembCapitalCreanceDouteuse = $this->input->post('privilegieRembDouteux');

            $param->configGnrlCredit->produitLieEpargne = $this->input->post('lierEpargne');
           
            $param->configGnrlCredit->recalcDateEcheanceAuDecais = $this->input->post('recaluDateEcheanceAuDecaise');

            $param->configGnrlCredit->recalcINtRembAmortDegr = $this->input->post('recalculInt');

            $param->configGnrlCredit->tauxIntVarSoldeDegr = $this->input->post('tauxIntVarSoldeDegr');          
          
           
            $param->idProduit = $idProduit;


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configGnrlCredit", array($param));
            //$result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($res){
                $msg['success'] = true;
            }
        echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }      

    }


    /***********************************************CONFIG GL CREDIT***********************************************************/

    public function ConfigGLCredit(){

        try {

          error_reporting(E_ERROR | E_PARSE | E_NOTICE);
           
            $param = new stdClass();
            $param->configGlCredit->rowId ="";

            $param->configGlCredit->commDec =$this->input->post('commDec');

            $param->configGlCredit->commDem =$this->input->post('commDem');

            $param->configGlCredit->cptComAccGagneGrp = "";
            $param->configGlCredit->cptComAccGagneInd =$this->input->post('cptComAccGagneInd');

            $param->configGlCredit->cptComEchuAccGrp = "";
            $param->configGlCredit->cptComEchuAccInd =$this->input->post('cptComEchuAccInd');

            $param->configGlCredit->cptCommCredit =$this->input->post('cptCommCredit');

            $param->configGlCredit->cptCredPasseEnPerteGrp = "";
            $param->configGlCredit->cptCredPasseEnPerteInd =$this->input->post('cptCredPasseEnPerteInd');

            $param->configGlCredit->cptIntEchuARecGrp = "";
            $param->configGlCredit->cptIntEchuARecInd =$this->input->post('cptIntEchuARecInd');

            $param->configGlCredit->cptIntEchuGrp = "";
            $param->configGlCredit->cptIntEchuInd =$this->input->post('cptIntEchuInd');

            $param->configGlCredit->cptIntRecCrdtGrp = "";            
            $param->configGlCredit->cptIntRecCrdtInd =$this->input->post('cptIntRecCrdtInd');

            $param->configGlCredit->cptPapeterie =$this->input->post('cptPapeterie');

            $param->configGlCredit->cptPenalCptblsAvaGrp = "";
            $param->configGlCredit->cptPenalCptblsAvaInd =$this->input->post('cptPenalCptblsAvaInd');

            $param->configGlCredit->cptPenalCredit =$this->input->post('cptPenalCredit');

            $param->configGlCredit->cptPrincEnCoursGrp = "";
            $param->configGlCredit->cptPrincEnCoursInd =$this->input->post('cptPrincEnCoursInd');

            $param->configGlCredit->cptProvCoutMauvCreanceGrp = "";
            $param->configGlCredit->cptProvCoutMauvCreanceInd =$this->input->post('cptProvCoutMauvCreanceInd');
            
            $param->configGlCredit->cptProvMauvCreanceGrp = "";
            $param->configGlCredit->cptProvMauvCreanceInd =$this->input->post('cptProvMauvCreanceInd');

            $param->configGlCredit->cptRecCreanDouteuse =$this->input->post('cptRecCreanDouteuse');

            $param->configGlCredit->cptRevPenalGrp = "";
            $param->configGlCredit->cptRevPenalInd =$this->input->post('cptRevPenalInd');

            $param->configGlCredit->cptSurpaiement =$this->input->post('cptSurpaiement');

            $param->configGlCredit->diffMonnaie =$this->input->post('diffMonnaie');

            $param->configGlCredit->fraisDevDec =$this->input->post('fraisDevDec');

            $param->configGlCredit->fraisDevDem =$this->input->post('fraisDevDem');

            $param->configGlCredit->majorationDec =$this->input->post('majorationDec');

            $param->configGlCredit->papeterieDec =$this->input->post('papeterieDec');

            $param->configGlCredit->papeterieDem =$this->input->post('papeterieDem');

            $param->configGlCredit->procFeeDec =$this->input->post('procFeeDec');

            $param->configGlCredit->refinFeeDem =$this->input->post('refinFeeDem');

            $param->idProduit =$this->input->post('idProduit');


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/credit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("configGLCredit", array($param));
            //$result = $res->validation;

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($res){
                $msg['success'] = true;
            }
            echo json_encode($msg);
                
            } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }      

        }

        /**************************************AJOUT COMPTE CAISSE*********************************/

        public function AjoutCompteCaisse(){

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    $param = new stdClass();
           
                    $param->cptCaisse = $this->input->post('nom');
                    $param->devise = $this->input->post('devise');
                    $param->planCompta = $this->input->post('planCompta');

                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("addCompteCaisse", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['type'] = 'ad';
                    if($result == true){
                        $msg['success'] = true;
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }    
        }

        //Save configuration transaction compta
        public function SaveConfigCompta(){

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                $param = new stdClass();
       
                $param->compteCaisse = $this->input->post('compteCaisse');
                $param->compteBanque = $this->input->post('compteBanque');

                $client = new SoapClient("http://127.0.0.1:8082/service2.0/comptabilite?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                $res = $client->__soapCall("saveConfigTransaction", array($param));

                $result = $res->validation;
                
                $msg['success'] = false;
                $msg['type'] = 'ad';
                if($result == true){
                    $msg['success'] = true;
                }
                echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }    
        }



        /*********************************************************************************************************************/

        /**************************************CONFIGURATION EPARGNE**********************************************************/

        public function saveProduitEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    $param = new stdClass();
           
                    $param->nomProd = $this->input->post('nom');
                    $param->typeEpargne = $this->input->post('type');
                    $param->isActive = $this->input->post('etat');

                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("saveProduit", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'enregistrement!';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Enregistrement produit reussit!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            }    

        }

        public function desactiverProduitEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    $param = new stdClass();
           
                    $param->idProd = $this->input->get('id');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("desactiverProduit", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de desactivaion du produit!';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Produit desactivé!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }

        //Activer produit épargne
        public function activerProduitEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {
                    $param = new stdClass();
           
                    $param->idProd = $this->input->get('id');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("activerProduit", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'activation du produit!';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Produit activeé!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {        
                echo '<br/>'.$e;
            } 
        }

        //Supprimer produit épargne
        public function deleteProduitEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {
                    $param = new stdClass();
           
                    $param->idProd = $this->input->get('id');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("supprimerProduitEpargne", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de suppression du produit!';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Produit supprimé!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }

        
        public function SaveConfigProduitEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {


                    //Configuration Grand Livre produit épargne
                    $param3 = new stdClass();
           
                    $param3->configGlEpargne->rowId ="";
                    $param3->configGlEpargne->chargeIntNegGrp ="";
                    $param3->configGlEpargne->chargeIntNegInd ="";
                    $param3->configGlEpargne->chargeSMScpt = $this->input->post('cmptMobile');
                    $param3->configGlEpargne->clotureCptEp = "";
                    $param3->configGlEpargne->commChequeRejete = "";
                    $param3->configGlEpargne->commEpargne = $this->input->post('cmptCommEpargne');
                    $param3->configGlEpargne->commSurDecouverts = "";
                    $param3->configGlEpargne->coutIntAPayerGrp = "";
                    $param3->configGlEpargne->coutIntAPayerInd ="";
                    $param3->configGlEpargne->cptAttente = "";
                    $param3->configGlEpargne->cptChargeRelCpt = "";
                    $param3->configGlEpargne->cptCheque = $this->input->post('cmptcheque');
                    $param3->configGlEpargne->cptPapeterieEp = $this->input->post('cmptPapeterie');
                    $param3->configGlEpargne->cptVireCheque = $this->input->post('cmptVirementCheq');
                    $param3->configGlEpargne->epargneGrp ="";
                    $param3->configGlEpargne->epargneInd = $this->input->post('cmptEpargne');
                    $param3->configGlEpargne->intComptAvGrp = "";
                    $param3->configGlEpargne->intComptAvInd= "";
                    $param3->configGlEpargne->intDecApresExpGrp= "";
                    $param3->configGlEpargne->intDecApresExpInd= "";
                    $param3->configGlEpargne->intPayeGrp="";
                    $param3->configGlEpargne->intPayeInd= $this->input->post('cmptIntPaye');
                    $param3->configGlEpargne->penalEpargne= $this->input->post('cmptPenalEpargne');
                    $param3->configGlEpargne->retenuTaxe= "";
                    $param3->configGlEpargne->virePermCptTit= $this->input->post('cmptTrans');
                    $param3->configGlEpargne->virePermFraisBan= $this->input->post('cmptVirementCheq');
                    $param3->configGlEpargne->virePermPenalCpt= "";
                                                       

                    $param3->idProduit = $this->input->post('idProduit');
                   

                    //Configuration intérêt produit épargne

                    $param2 = new stdClass();
           
                    $param2->configInteret->rowId ="";
                    $param2->configInteret->dateCalcul = $this->input->post('dateCal');
                    $param2->configInteret->interetMinGrp = "";
                    $param2->configInteret->interetMinInd = $this->input->post('soldeMinIntInd');
                    $param2->configInteret->modeCalcul = $this->input->post('modeCalcule');
                    $param2->configInteret->nbrJrInt = $this->input->post('nbJrInt');
                    $param2->configInteret->nbrSemaineInt = $this->input->post('nbSem');
                    $param2->configInteret->periodeInteret = $this->input->post('nbMois');
                    $param2->configInteret->soldeMinGrp = "";
                    $param2->configInteret->soldeMinInd = $this->input->post('soldeMinInd');
                    $param2->configInteret->tauxInteret = $this->input->post('taux');
                                    

                    $param2->idproduit = $this->input->post('idProduit');
                   
                    //Configuration générale produit épargne
                    $param = new stdClass();
           
                    $param->configProduit->rowId ="";
                    $param->configProduit->ageMinCpt = $this->input->post('ageMin');
                    $param->configProduit->fraisTenuCpt ="";
                    $param->configProduit->nbrJrIn = $this->input->post('nbJrInactif');
                    $param->configProduit->nbrJrMaxDep = "";
                    $param->configProduit->nbrJrMinRet = $this->input->post('nbMinJourRetrait');
                    $param->configProduit->soldeOverture = $this->input->post('soldeOverture');
                    $param->configProduit->devise = $this->input->post('devise');
                    $param->configProduit->soldeNegatif = $this->input->post('protectSoldNegatif');
                    $param->configProduit->penalitePrelevemnt = $this->input->post('penPrelevmnt');
                    $param->configProduit->commRetraitCash = $this->input->post('commRetrait');
                    $param->configProduit->commTransfer = $this->input->post('commTransfere');
                    $param->configProduit->fraisFermeture = $this->input->post('FraisFermeture');                   

                    $param->idproduit = $this->input->post('idProduit');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    
                    //envoie paramètre pour la méthode configuration générale
                    $res = $client->__soapCall("saveConfigProduit", array($param));
                    $result = $res->validation;

                    //envoie paramètre pour méthode configuration Intérêt
                    $res2 = $client->__soapCall("saveConfigIntProduit", array($param2));
                    $result2 = $res2->validation;

                    //envoie paramètre pour la méthode configuration Grand Livre
                    $res3 = $client->__soapCall("configGlEpargne", array($param3));
                    $result3 = $res3->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'enregistrement de cette configuration!';
                    $msg['type'] = 'ad';
                    if($result == true && $result2 == true && $result3 == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Enregistrement Configuration reussit!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }

        
        public function saveConfigInterEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    $param = new stdClass();
           
                    $param->configInteret->rowId ="";
                    $param->configInteret->dateCalcul = $this->input->post('dateCal');
                    $param->configInteret->interetMinGrp = "";
                    $param->configInteret->interetMinInd = $this->input->post('soldeMinIntInd');
                    $param->configInteret->modeCalcul = $this->input->post('modeCalcule');
                    $param->configInteret->nbrJrInt = $this->input->post('nbJrInt');
                    $param->configInteret->nbrSemaineInt = $this->input->post('nbSem');
                    $param->configInteret->periodeInteret = $this->input->post('nbMois');
                    $param->configInteret->soldeMinGrp = "";
                    $param->configInteret->soldeMinInd = $this->input->post('soldeMinInd');
                    $param->configInteret->tauxInteret = $this->input->post('taux');
                                    

                    $param->idproduit = $this->input->post('produit');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("saveConfigIntProduit", array($param));

                    $result = $res->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'enregistrement de cette configuration!';
                    $msg['type'] = 'ad';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Enregistrement Configuration reussit!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }        
      
        public function saveConfigGlEpargne(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    $param = new stdClass();
           
                    $param->configGlEpargne->rowId ="";
                    $param->configGlEpargne->chargeIntNegGrp ="";
                    $param->configGlEpargne->chargeIntNegInd ="";
                    $param->configGlEpargne->chargeSMScpt = $this->input->post('cmptMobile');
                    $param->configGlEpargne->clotureCptEp = "";
                    $param->configGlEpargne->commChequeRejete = "";
                    $param->configGlEpargne->commEpargne = $this->input->post('cmptCommEpargne');
                    $param->configGlEpargne->commSurDecouverts = "";
                    $param->configGlEpargne->coutIntAPayerGrp = "";
                    $param->configGlEpargne->coutIntAPayerInd ="";
                    $param->configGlEpargne->cptAttente = "";
                    $param->configGlEpargne->cptChargeRelCpt = "";
                    $param->configGlEpargne->cptCheque = $this->input->post('cmptcheque');
                    $param->configGlEpargne->cptPapeterieEp = $this->input->post('cmptPapeterie');
                    $param->configGlEpargne->cptVireCheque = $this->input->post('cmptVirementCheq');
                    $param->configGlEpargne->epargneGrp ="";
                    $param->configGlEpargne->epargneInd = $this->input->post('cmptEpargne');
                    $param->configGlEpargne->intComptAvGrp = "";
                    $param->configGlEpargne->intComptAvInd= "";
                    $param->configGlEpargne->intDecApresExpGrp= "";
                    $param->configGlEpargne->intDecApresExpInd= "";
                    $param->configGlEpargne->intPayeGrp="";
                    $param->configGlEpargne->intPayeInd= $this->input->post('cmptIntPaye');
                    $param->configGlEpargne->penalEpargne= $this->input->post('cmptPenalEpargne');
                    $param->configGlEpargne->retenuTaxe= "";
                    $param->configGlEpargne->virePermCptTit= $this->input->post('cmptTrans');
                    $param->configGlEpargne->virePermFraisBan= $this->input->post('cmptVirementCheq');
                    $param->configGlEpargne->virePermPenalCpt= "";
                                                       

                    $param->idProduit = $this->input->post('produit');
                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $res = $client->__soapCall("configGlEpargne", array($param));
                    $result = $res->validation;

                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'enregistrement de cette configuration!';
                    $msg['type'] = 'ad';
                    if($result == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Enregistrement Configuration reussit!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }



        //Configuration DAT

          public function saveConfigDAT(){

             error_reporting(E_ERROR | E_PARSE | E_NOTICE);

            try {

                    //Configuration générale
                    $param = new stdClass();

                    $param->idProduit = $this->input->post('produit');
           
                    $param->configGeneral->id ="";
                    $param->configGeneral->devise = $this->input->post('devise');

                    $param->configGeneral->depotMin = $this->input->post('montantMin');
                    $param->configGeneral->depotMax = $this->input->post('montantMax');

                    $param->configGeneral->interMin = $this->input->post('intMin');
                    $param->configGeneral->interMax = $this->input->post('intMax');
                   
                    $param->configGeneral->periodeMinInt = $this->input->post('periodeMin');
                    $param->configGeneral->periodeMaxInt = $this->input->post('periodeMax');

                    $param->configGeneral->finPremature = $this->input->post('penalPercent');
                    $param->configGeneral->montantPremature = $this->input->post('penalFixe');
                    $param->configGeneral->auccunInteret = $this->input->post('auccunInteret');

                    $param->configGeneral->taxe = $this->input->post('taxe');
                    $param->configGeneral->nbJrAnnee = $this->input->post('nbjr');
                    $param->configGeneral->calculIntEnJrs = "";

                    //Configuration Grand Livre
                    $gl = new stdClass();

                    $gl->idProduit = $this->input->post('produit');                              
                                               
                    $gl->configGl->id = "";
                    $gl->configGl->cmptDAT = $this->input->post('cmptEpargne');
                    $gl->configGl->cmptIntDuDAT = $this->input->post('cmptIntDuDAT');
                    $gl->configGl->cmptPenalDAT = $this->input->post('cmptPenalDAT');
                    $gl->configGl->cmptIntPayeDAT = $this->input->post('cmptIntPayeDAT');
                    $gl->configGl->cmptIntEchus = $this->input->post('cmptIntEchus');
                    $gl->configGl->cmptAccumule = "";
                    $gl->configGl->cmptDiffCash = $this->input->post('cmptDiffCash');
                    $gl->configGl->cmptCheque = $this->input->post('cmptCheque');
                    $gl->configGl->cmptTaxeRetenu = $this->input->post('cmptTaxeRetenu');

                    
                    $client = new SoapClient("http://127.0.0.1:8082/service2.0/produit?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
                    $configGen = $client->__soapCall("configGeneralDatEpargne", array($param));
                    $configGl = $client->__soapCall("configGlDatEpargne", array($gl));

                    $resultGl = $configGl->validation;
                    $resultGen = $configGen->validation;
                    
                    $msg['success'] = false;
                    $msg['message'] = 'Désolé, il y a une erreur lors de l\'enregistrement de cette configuration!';
                    $msg['type'] = 'ad';
                    if($resultGl == true && $resultGen == true){
                        $msg['success'] = true;
                        $msg['message'] = 'Enregistrement Configuration reussit!';
                    }
                    echo json_encode($msg);

                
             } catch (SoapFault $e) {
                echo '<br/>'.$e;
            } 
        }

    /*************************************************************************************************************************/

}
