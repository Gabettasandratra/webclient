<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    //AFFICHE TOUT GROUPE

    public function allGroupe(){

        try {
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl");
            $result = $client->__soapCall("getAllGroupe", array());

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


    public function clientIndividuel(){
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
          
        try {
             
            /*$client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl");
            $result = $client->__soapCall("getAllIndividuel", array());

            $data['result'] = $result;
             $this->load->view('pages/tete',$data);
            $this->load->view('client/individuel');
*/            
            $data['titre'] = 'Ajout client individuel';
            $data['tete'] = 'Client individuel';
            $this->load->view('template/header',$data);
            $this->load->view('client/individuel');
            $this->load->view('template/footer');              

           
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

//FONCTION POUR CHERCHER TOUS CLIENT INDIVIDUEL PAR SON CODE

public function findIndividuel(){

    try {
            
            $code = $this->input->get('code');

            $param = new stdClass();
            $param->code = $code;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("findByCode",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['erreur'] = false;
            if(!empty($result)){
                echo json_encode($result);               
            }else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
} 

//FONCTION POUR AFFICER TOUS LES CLIENT INDIVIDUEL NON APPROUVEE
public function getClientNonApprouver(){

    try {
            
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getClientNonApprouver",  array());
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);               
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
} 


//APPROUVER CLIENT

public function approbationClient(){

    try {
        $param = new stdClass();
        $param->codeClient = $this->input->get('codeClient');

        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("approbationClient",  array($param));
       // $res = $client->demandeCredit($data);
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

//FONCTION POUR CHERCHER UN CLIENT INDIVIDUEL PAR SON CODE

public function getOneIndividuel(){

    try {
            $param = new stdClass();
            $param->codeClient = $this->input->get('id');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getOneIndividuel",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['erreur'] = false;
            if(!empty($result)){
                $msg['result'] = $result;            
            }else{
                $msg['erreur']=true;
            }
            echo json_encode($msg); 
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
} 


//FONCTION POUR CHERCHER UN CLIENT GROUPE PAR SON CODE

public function findGroupe(){

    try {
            
            $code = $this->input->get('code');

            $param = new stdClass();
            $param->code = $code;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("findByCode",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['erreur'] = false;
            if(!empty($result)){
                echo json_encode($result);               
            }else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
} 


//FONCTION VERIFICATION DATE NAIS

public function verifDateNais(){

    try {
            $param = new stdClass();
            $param->dateDeb = $this->input->get('dateDeb');
            $param->dateFin = $this->input->get('dateFin');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("verifDate", array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['erreur'] = false;
            if(!empty($result)){
                echo json_encode($result);               
            }else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }
} 


 /*FONCTION POUR APPELER L'ENREGISTREMENT D'UN CLIENT INDIVIDUEL*/

 public function saveClientIndividuel(){

     try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            /*INFORMATION CLIENT*/
            $codeInd = "";
            $dateInscription = $this->input->post('dateInscription'); 

            $dateNaissance = $this->input->post('dateNaissance');    

            $dateSortie = "";                
            
            $email = $this->input->post('email');                     
            
            $estClientIndividuel = "";                     
            
            $estGarant = $this->input->post('estGarant');                     
            
            $estMembreGroupe = $this->input->post('estMembreGroupe');                     
            
            $etatCivil = $this->input->post('etatCivil');                     
            
            $langue = $this->input->post('langue');                     
            
            $lieuNaissance = $this->input->post('lieuNaissance');                     
            
            $nbEnfant = $this->input->post('nbEnfant');                     
            
            $nbPersCharge = $this->input->post('nbPersCharge');                     
            
            $niveauEtude = $this->input->post('niveauEtude');                     
            
            $nomClient = $this->input->post('nomClient');                     
            
            $nomConjoint = $this->input->post('nomConjoint');                     
            
            $numDmdCrdtAGarantir = "";                                    
            

            $param = new stdClass();

            $param->individuel->codeInd = $codeInd;

            $param->individuel->dateInscription = $dateInscription;
            
            $param->individuel->dateNaissance = $dateNaissance;

            $param->individuel->dateSortie = $dateSortie;

            $param->individuel->email = $email;

            $param->individuel->estClientIndividuel = $estClientIndividuel;

            $param->individuel->estGarant = $estGarant;

            $param->individuel->estMembreGroupe = $estMembreGroupe;

            $param->individuel->isListeRouge = "";

            $param->individuel->etatCivil = $etatCivil;

            $param->individuel->langue = $langue;

            $param->individuel->lieuNaissance = $lieuNaissance;

            $param->individuel->nbEnfant = $nbEnfant;

            $param->individuel->nbPersCharge = $nbPersCharge;

            $param->individuel->niveauEtude = $niveauEtude;

            $param->individuel->nomClient = $nomClient;

            $param->individuel->nomConjoint = $nomConjoint;

            //$param->individuel->numDmdCrdtAGarantir = $numDmdCrdtAGarantir;

            $param->individuel->numeroMobile =  $this->input->post('numeroMobile');   

            $param->individuel->parentAdresse = $this->input->post('parentAdresse');

            $param->individuel->parentNom =  $this->input->post('parentNom');

            $param->individuel->prenomClient = $this->input->post('prenomClient');

            $param->individuel->profession = $this->input->post('profession');

            $param->individuel->raisonSortie = "";

            $param->individuel->isListeNoir = "";
            
            $param->individuel->isSain = "";

            $param->individuel->sexe = $this->input->post('sexe');

            $param->individuel->titre = $this->input->post('titre');

            //AGENCE

            $param->agence = $this->input->post('agence');

           /* INFORMATION DOC INDENTITER*/

            $param->docIdentite->numero = $this->input->post('numero');

            $param->docIdentite->dateEmis = $this->input->post('dateEmis');

            $param->docIdentite->dateExpire = $this->input->post('dateExpire');

            $param->docIdentite->delivrePar =  $this->input->post('delivrePar');

            $param->docIdentite->priorite = $this->input->post('priorite');

            $param->docIdentite->typedoc = $this->input->post('typedoc');

            /*INFORMATION ADDRESSE*/

            $param->adresse->idAdresse = "";

            $param->adresse->adresseCommune = $this->input->post('adresseCommune');

            $param->adresse->adresseDistrict = $this->input->post('adresseDistrict');

            $param->adresse->adressePhysique = $this->input->post('adressePhysique');

            $param->adresse->adresseRegion = $this->input->post('adresseRegion');

            $param->adresse->adresseVille = $this->input->post('adresseVille');

            $param->adresse->codeRegion = $this->input->post('codeRegion');

            $param->adresse->distanceAgence = $this->input->post('distanceAgence');



            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("insertIndividuel", array($param));
            $result = $res->resultat;
            $msg['success'] = false;
            $msg['erreur'] = false;
            if($result == "Succes"){
                $msg['type'] = 'ad';
                $msg['success'] = true;

            }
            elseif ($result == "Error") {
                $msg['erreur'] = true;
            }
             echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

 }

    public function clientGroupe(){
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
            $fonctionMembre = $client->__soapCall("getFonctionMembre", array());
            $individuel = $client->__soapCall("getListeNonMembre", array());

            $data['result'] = $result;
            $data['listIndividuel'] = $individuel;
            $data['fonction'] = $fonctionMembre;
            
            $data['titre'] = 'Gestion groupe';
            $data['tete'] = 'Client groupe';
            $this->load->view('template/header',$data);
            $this->load->view('client/groupe', $data);
            $this->load->view('template/footer');  

           /* $this->load->view('pages/tete',$data);
            $this->load->view('client/groupe', $data);*/
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


public function saveGroupe(){


     try {
            /*INFORMATION CLIENT*/

            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            
            $param = new stdClass();

            $param->groupe->codeGrp = "";

            $param->groupe->nomGroupe = $this->input->post('nomGroupe');

            $param->groupe->dateInscription = $this->input->post('dateInscription');

            $param->groupe->email = $this->input->post('email');

            $param->groupe->numeroMobile = $this->input->post('numeroMobile');

            $param->groupe->numReference = $this->input->post('numReference');

            $param->groupe->NumStat = $this->input->post('NumStat');

            $param->groupe->president = "";
            $param->groupe->secretaire = "";
            $param->groupe->tresorier = "";

            /*INFORMATION ADDRESSE*/

            $param->adresse->idAdresse = "";

            $param->adresse->adresseCommune = $this->input->post('adresseCommune');

            $param->adresse->adresseDistrict = $this->input->post('adresseDistrict');

            $param->adresse->adressePhysique = $this->input->post('adressePhysique');

            $param->adresse->adresseRegion = $this->input->post('adresseRegion');

            $param->adresse->adresseVille = $this->input->post('adresseVille');

            $param->adresse->codeRegion = $this->input->post('codeRegion');

            $param->adresse->distanceAgence = $this->input->post('distanceAgence');

            //AGENCE
            $param->agence = $this->input->post('agence');


            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveGroupe", array($param));
            $result = $res->resultat;
            
            $msg['success'] = false;
            $msg['erreur'] = false;
           
            if($result == "success"){
                $msg['type'] = 'ad';
                $msg['success'] = true;

            }
            elseif ($result == "erreur") {
                $msg['erreur'] = true;
            }
             echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }


}

public function addMembreGroupe(){

    try {
        error_reporting(E_ERROR | E_PARSE | E_NOTICE);
        $nomGroupe = $this->input->post('nomGroupe');
        $codeInd = $this->input->post('codeInd');

        $param = new stdClass();
        $param->nomGroupe = $nomGroupe;
        $param->rowIndividuel = $codeInd;

        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("addMembreGroupe",  array($param));
       // $res = $client->demandeCredit($data);
        $result = $res->resultat;
        $msg['erreur'] = false;
        $msg['success'] = false;
        if($result == true){
            $msg['success'] = true;
            echo json_encode($msg);               
        }else{
            $msg['erreur']=true;
            echo json_encode($msg); 
        }
        
    } catch (SoapFault $e) {
        echo '<br/>'.$e;
    }

}

//Ajouter Membres groupe
public function saveMembreGroupe(){

    try {
        error_reporting(E_ERROR | E_PARSE | E_NOTICE);

        $param = new stdClass();
        $param->membre->id = '';
        $param->membre->codeInd = $this->input->post('codeInd');
        $param->membre->codeGroupe = '';
        $param->membre->fonction = $this->input->post('fonction');

        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("addMembre",  array($param));
       // $res = $client->demandeCredit($data);
        $result = $res->validation;
        $msg['success'] = false;
        if($result){
            $msg['result'] = $result;
            $msg['success'] = true;
        }
        echo json_encode($msg);               
        
    } catch (SoapFault $e) {
        echo '<br/>'.$e;
    }

}

//Get Membres View
public function countMembreView(){

    try {
        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("getallMembreView",  array());
       // $res = $client->demandeCredit($data);
        $result = $res->resultat;
        echo json_encode($result);               
        
    } catch (SoapFault $e) {
        echo '<br/>'.$e;
    }

}

//Vider Membres View
public function viderMembreView(){

    try {
        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("deleteMembreView",  array());
       // $res = $client->demandeCredit($data);
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

public function transferMembre(){

     try {
        error_reporting(E_ERROR | E_PARSE | E_NOTICE);
        $param = new stdClass();
        $param->id = $this->input->post('idMembre');
        $param->codeGroupe = $this->input->post('grpDest');
        $param->codeInd = "";
        $param->fonction = 4;

        $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

        $res = $client->__soapCall("tansfertMembreGroupe",  array($param));

        $result = $res->validation;
        $msg['erreur'] = false;
        $msg['success'] = false;
        if($result == true){
            $msg['success'] = true;               
        }else{
            $msg['erreur']=true;
        }
        echo json_encode($msg); 
        
    } catch (SoapFault $e) {
        echo '<br/>'.$e;
    }

}


    public function afficheMembreGroupe(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->code = $this->input->get('id');
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("getMembreGroupe",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            if(!empty($result)){
                echo json_encode($result);               
            }
          //  $msg['erreur'] = false;
            /*else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }*/
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

/*AFFICHE LES MEMBRES DE CONSEILS D'ADMIN d'UN GROUPE*/
    public function afficheConseilGroupe(){

        try {
            
            $codeGroupe = $this->input->get('codeGroupe');

            $param = new stdClass();
            $param->codeGroupe = $codeGroupe;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("findOneGroupe",  array($param));
           // $res = $client->demandeCredit($data);
            $result = $res->resultat;
            $msg['erreur'] = false;
            if(!empty($result)){
                echo json_encode($result);               
            }else{
                $msg['erreur']=true;
                echo json_encode($msg); 
            }
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //AJOUTER CONSEIL GROUPE

    public function addConseilGroupe(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $codeGroupe = $this->input->post('numGroupe');
            $president = $this->input->post('codeIndP');
            $secretaire = $this->input->post('codeIndS');
            $tresorier = $this->input->post('codeIndT');

            $param = new stdClass();
            $param->codeGroupe = $codeGroupe;
            $param->president = $president;
            $param->secretaire = $secretaire;
            $param->tresorier = $tresorier;

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/groupe?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("addConseil",  array($param));
        
            $msg['success'] = false;
            if($res){
               $msg['success'] = true;               
            }
            echo json_encode($msg); 
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //AJOUTER CONSEIL GROUPE

    public function saveListeRouge(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->formulaire->id =  "";
            $param->formulaire->date =  $this->input->post('dateAjout');
            $param->formulaire->raison =  $this->input->post('raison');
            $param->formulaire->rouge =  $this->input->post('rouge');
            $param->codeInd =  $this->input->post('codeCli');
            $param->codeGrp =  $this->input->post('codeGrp');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("addListeRouge",  array($param));
        
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Enregistrement reussit!!!';
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //RAPPORT LISTE ROUGE

    public function afficheListeRouge(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
      
            $param->agence =  $this->input->post('agences');
            $param->dateDeb =  $this->input->post('dateDebs');
            $param->dateFin =  $this->input->post('dateFins');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("afficheListeRouge",  array($param));
            $res = $result->liste_rouges;
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement';
            if(!empty($res)){
                $msg['success'] = true;  
                $msg['result'] = $res;
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //RAPPORT CIN

    public function getRapportCIN(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
      
            $param->dateDeb =  $this->input->post('dateDeb');
            $param->dateFin =  $this->input->post('dateFin');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("rapportCIN",  array($param));
         
            $res = $result->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement';
            if(!empty($res)){
                $msg['success'] = true;  
                $msg['result'] = $res;
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //ENREGISTREMENT DROIT INSCRIPTION

    public function saveDroitInscription(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->formulaire->rowId =  "";
            $param->formulaire->date_paye =  $this->input->post('dateInscrit');
            $param->formulaire->piece =  $this->input->post('piece');
            $param->formulaire->droits =  $this->input->post('droit');
            $param->formulaire->fraisDossier =  $this->input->post('fraisDoss');
            $param->formulaire->fraisAdmin =  $this->input->post('fraisAdmin');
            $param->formulaire->compteCaisse =  $this->input->post('numCptCaisse');

            $param->codeInd =  $this->input->post('codeCli');
            $param->codeGrp =  $this->input->post('codeGrp');

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("saveDroitInscription",  array($param));
        
            $msg['success'] = false;
            $msg['message'] = 'Erreur enregistrement';
            if($result == true){
                $msg['success'] = true;  
                $msg['message'] = 'Enregistrement reussit!!!';
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }


    //RAPPORT CLIENT INDIVIDUEL

    public function afficheRapportClient(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->agence =  $this->input->post('agence');
            $param->adresse =  $this->input->post('adresse');
            $param->nivEtude =  $this->input->post('niveauEtude');
            $param->sexe =  $this->input->post('sexe');
            $param->profession =  $this->input->post('profession');
            $param->dateDeb =  $this->input->post('dateDeb');
            $param->dateFin =  $this->input->post('dateFin');
            $param->startDate =  $this->input->post('startDate');
            $param->endDate =  $this->input->post('endDate');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("rapportsIndividuel", array($param));
            
            $res = $result->resultat;
            $msg['success'] = false;
            $msg['message'] = 'Erreur de chargement des données';
            if(!empty($res)){
                $msg['success'] = true;  
                $msg['result'] = $res;
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }
  

    //Détail client

    public function getDetailClient(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->codeClient =  $this->input->get('id');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $detailCredit = $client->__soapCall("getDetailCredit", array($param));
            $detailEpargnr = $client->__soapCall("getDetailEpargne", array($param));
            $detail = $client->__soapCall("getOneIndividuel", array($param));
            
            $credit = $detailCredit->resultat;
            $epargne = $detailEpargnr->resultat;
            $individuel = $detail->resultat;

            $msg['success'] = false;
            $msg['message'] = 'Erreur de chargement des données';
            if(!empty($credit) || !empty($epargne) ){
                $msg['success'] = true;  
                $msg['credit'] = $credit;
                $msg['epargne'] = $epargne;
                $msg['individuel'] = $individuel;
            }

            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }

    //Détail client

    public function deleteIndividuel(){

        try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            $param = new stdClass();
            $param->codeClient =  $this->input->get('id');
           

            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $result = $client->__soapCall("deleteIndividuel", array($param));
          
            $res = $result->validation;           

            $msg['success'] = false;
            $msg['type'] = 'ad';
            if($res == true){
                $msg['success'] = true;
                $msg['result'] = 'le client a été supprimer avec succès!!!';

            }else{
                 $msg['result'] = 'Erreur suppression!!!';
            }
            echo json_encode($msg);  
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

    }



    //SAVE GARANT


 public function saveGarant(){

     try {
            error_reporting(E_ERROR | E_PARSE | E_NOTICE);
            /*INFORMATION CLIENT*/                    
                                    
            
            //$estMembreGroupe = $this->input->post('estMembreGroupe');                                                                                          
        
            $param = new stdClass();

            $param->individuel->codeInd = "";
            $param->individuel->dateInscription =  $this->input->post('dateInscription');            
            $param->individuel->dateNaissance = $this->input->post('dateNaissance');
            $param->individuel->dateSortie = "";
            $param->individuel->email = $this->input->post('email'); 
            $param->individuel->estClientIndividuel = $this->input->post('estIndividuel'); 
            $param->individuel->estGarant = "";
            $param->individuel->estMembreGroupe = "";
            $param->individuel->isListeRouge = "";
            $param->individuel->etatCivil =$this->input->post('etatCivil');
            $param->individuel->langue =  $this->input->post('langue'); 
            $param->individuel->lieuNaissance = $this->input->post('lieuNaissance'); 
            $param->individuel->nbEnfant = $this->input->post('nbEnfant'); 
            $param->individuel->nbPersCharge = $this->input->post('nbPersCharge');  
            $param->individuel->niveauEtude = $this->input->post('niveauEtude');
            $param->individuel->nomClient = $this->input->post('nomClient');  
            $param->individuel->nomConjoint =  $this->input->post('nomConjoint');  
            $param->individuel->numDmdCrdtAGarantir = "";

            $param->individuel->numeroMobile =  $this->input->post('numeroMobile'); 

            $param->individuel->parentAdresse = $this->input->post('parentAdresse');

            $param->individuel->parentNom =  $this->input->post('parentNom');

            $param->individuel->prenomClient = $this->input->post('prenomClient');

            $param->individuel->profession = $this->input->post('profession');

            $param->individuel->raisonSortie = "";

            $param->individuel->sexe = $this->input->post('sexe');

            $param->individuel->titre = $this->input->post('titre');

            $param->individuel->isListeRouge = "";
            
            $param->individuel->isListeNoir = "";
            
            $param->individuel->isSain = "";


            //AGENCE

            $param->agence = $this->input->post('agence');

           /* INFORMATION DOC INDENTITER*/

            $param->docIdentite->numero = $this->input->post('numero');

            $param->docIdentite->dateEmis = $this->input->post('dateEmis');

            $param->docIdentite->dateExpire = $this->input->post('dateExpire');

            $param->docIdentite->delivrePar =  $this->input->post('delivrePar');

            $param->docIdentite->priorite = $this->input->post('priorite');

            $param->docIdentite->typedoc = $this->input->post('typedoc');

            /*INFORMATION ADDRESSE*/

            $param->adresse->idAdresse = "";

            $param->adresse->adresseCommune = $this->input->post('adresseCommune');

            $param->adresse->adresseDistrict = $this->input->post('adresseDistrict');

            $param->adresse->adressePhysique = $this->input->post('adressePhysique');

            $param->adresse->adresseRegion = $this->input->post('adresseRegion');

            $param->adresse->adresseVille = $this->input->post('adresseVille');

            $param->adresse->codeRegion = $this->input->post('codeRegion');

            $param->adresse->distanceAgence = $this->input->post('distanceAgence');



            $client = new SoapClient("http://127.0.0.1:8082/service2.0/client/individuel?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

            $res = $client->__soapCall("saveGarant", array($param));
            $result = $res->resultat;
            $msg['success'] = false;
            $msg['erreur'] = false;
            if($result == true){
                $msg['type'] = 'ad';
                $msg['success'] = true;

            }
             echo json_encode($msg);
            
        } catch (SoapFault $e) {
            echo '<br/>'.$e;
        }

 }



}