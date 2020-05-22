<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->form_validation->set_rules('login','Login','trim|required');
        $this->form_validation->set_rules('mdp','Mot de Passe','trim|required|callback_basisdata_cek');
        if($this->form_validation->run()==false)
        {
            $this->load->view('login/index');
        }else{
            redirect(base_url('index.php/login/accueil'),'refresh');
        }
    }

    public function authentification(){
        error_reporting(E_ERROR | E_PARSE );
        try {
            
            $login = $this->input->post('login');
            $mdp = $this->input->post('mdp');

            $param = new stdClass();
            $param->login = $login;
            $param->mdp = $mdp;
             
            $client = new SoapClient("http://127.0.0.1:8082/service2.0/user?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
            $response = $client->__soapCall("authentifie", array($param));

            $result = $response->resultAuth;
    
            if($result != null){
                $sess_array = array();
                $sess_array = $arrayName = array('idUtilisateur' => $result->idUtilisateur,'nomUtilisateur' =>$result->nomUtilisateur ,
                    'loginUtilisateur' =>$result->loginUtilisateur,'fonctionUser' =>$result->fonction->libelleFonction );
                    $this->session->set_userdata('logged_in', $sess_array);
                redirect(base_url('index.php/login/accueil'),'refresh');
            }
            else{
                $data['erreurLogin']='Non d\'utilisateur ou mot de passe incorecte';
                $this->load->view('login/index',$data);
               /* $this->form_validation->set_message('basisdata_cek','Nom utilisateur ou Mot de passe incorecte');
                return false;*/
            }
            
        } catch (Exception $e) {
            $data['erreurLogin']='On a une erreur de connection au serveur!!!';
            $this->load->view('login/index',$data);
            //echo $e->getMessage();
        }

    }


    public function accueil(){

        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }else{
            $session_data = $this->session->userdata('logged_in');
            $data['idUtilisateur'] = $session_data['idUtilisateur'];
            $data['nomUtilisateur'] = $session_data['nomUtilisateur'];
            $data['loginUtilisateur'] = $session_data['loginUtilisateur'];
            $data['fonctionUser'] = $session_data['fonctionUser'];
            $data['titre'] = 'Gestion de microfinance';
            $data['tete'] = 'Accueil';
            $this->load->view('template/header',$data);
            $this->load->view('template/accueil');
            $this->load->view('template/footer');
            /*$this->load->view('pages/tete');
            $this->load->view('pages/home');*/
            //$this->load->view('pages/pied');

        }

    }

    //FUNCTION DECONNECTION
    public function logout(){

        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(site_url('login'),'refresh');
    }

}
