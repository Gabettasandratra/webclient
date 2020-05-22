<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url();?>/assets/img/logo.jpg" type="image/jpg"/>

    <title><?php echo $titre; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/font-awesome-5/css/fontawesome-all.min.css');?>"/>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap-datetimepicker.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/jquery-ui.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/animate.css');?>"/>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/custom.css');?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/DataTables/media/css/jquery.dataTables.min.css');?>"/>
   

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/mystyle.css');?>"/>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('/assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('/assets/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('/assets/vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('/assets/vendors/jqvmap/dist/jqvmap.min.css');?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('/assets/vendors/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/assets/build/css/custom.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/font-awesome-5/css/fontawesome-all.min.css');?>"
    />

  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>

  <script src="<?php echo base_url('/assets/vendors/jquery/dist/jquery.min.js');?>"></script>

   <style type="text/css">
    .btn-secondary{
      box-shadow: -2px 2px 3px black;
    }
    .btn-secondary:hover{
      box-shadow: -7px 5px 5px black, 0 0 10px black, 0 0 2px white;
    }
    .btn-success{
      box-shadow: -2px 2px 3px green;
    }
    .btn-success:hover{
      box-shadow: -7px 5px 5px green, 0 0 10px black, 0 0 2px white;
    }
    .btn-primary{
      box-shadow: -2px 2px 3px blue;
    }
    .btn-primary:hover{
      box-shadow: -7px 5px 5px blue, 0 0 10px black, 0 0 2px white;
    }
    
    .btn-danger{
      box-shadow: -2px 2px 3px red;
    }
    .btn-danger:hover{
      box-shadow: -7px 5px 5px red, 0 0 10px black, 0 0 2px white;
    }
    .right_col{
      min-height: 100%;
      color: black;
    }

    .contTable{
      margin-left: 15px;
      margin-right: 15px;
    }

    .table > thead {
      font-family: "Agency FB",sans-serif;
      font-size: 1.2em;
    }
    .table > tbody {
      font-family: "Arial",Times,sans-serif;/*Times new roman*/
      font-size: 1.1em;
    }

    .thead-dark{
      opacity: 0.7;     
      color: white;
      text-shadow: 2px 2px 5px black;
    }

    fieldset.scheduler-border { 
        border: 1px groove #ddd !important; 
        padding: 0 1.4em 1.4em 1.4em !important; 
        margin: 0 0 1.5em 0 !important; 
        -webkit-box-shadow: 0px 0px 0px 0px #000; 
          box-shadow: 0px 0px 0px 0px #000; 

    } 

    legend.scheduler-border { 
        font-size: 15px !important; 
       /* font-weight: bold !important; */
        text-align: left !important; 
    } 

    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
      /*text-align:*/ 

    }

    input[type=number] {
      -moz-appearance: textfield;
      text-align: right;
    }
    .tab-card {
     border:1px solid #eee;
     box-shadow: 4px 8px 5px 0 rgba(0, 34, 51, 0.05), 2px 4px 5px 0 rgba(0, 34, 51, 0.05);
     margin-top: 15px;
     margin-bottom: 80px;
    }

    .tab-content{
      font-family: "Arial",Times,sans-serif;
      background-color: #F5F5F5;
      /*background-color: hsla(120, 60%, 70%, 0.3);*/
      opacity: 1;
      color: black;
      font-size: 12.5px;
    }

    .tab-card-header {
      background:none;
    }
    /* Default mode */
    .tab-card-header > .nav-tabs {
      border: none;
      margin: 0px;
    }
    .tab-card-header > .nav-tabs > li {
      margin-right: 2px;
    }
    .tab-card-header > .nav-tabs > li > a {
      border: 0;
      border-bottom:2px solid transparent;
      margin-right: 0;
      color: #737373;
      padding: 2px 15px;
    }

    .tab-card-header > .nav-tabs > li > a.show {
        border-bottom:2px solid #007bff;
        color: #fff;
    }
    .tab-card-header > .nav-tabs > li > a.active {
       background-color: rgb(0,100,4); 
        color: #fff;
    }
    .tab-card-header > .nav-tabs > li:hover a{
        background-color: rgb(0,100,4);
    }
    .tab-card-header > .nav-tabs > li > a:hover {
        color: #fff;
    }

    .tab-card-header > .tab-content {
      padding-bottom: 0;
    }

    .tfoot {
    background-color: #3f87a6;
    color: #fff;
    }

    .fot {
        background-color: #3f87a6;
        color: #fff;
    }

    tfoot {
        background-color: #3f87a6;
        color: #fff;
    }

    .thead {
        background-color: #d4f5f5a9;
    }

    .thead:hover {
        background-color: #655eaaa9;
    }


   </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col fixed-left">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>index.php/Accueil" class="site_title"><img src="<?php echo base_url();?>/assets/img/logo.jpg" alt="..." class="rounded-circle" width="35px" height="35px"> <span><?php echo $tete; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>/assets/img/eddy.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span id="dis">Bienvenue,</span>
                <h2><?php echo $nomUtilisateur ?>, </h2>
                <h2 class="green" style="margin-top: 10px;color;green;"><?php echo $fonctionUser ?> </h2>             
              </div>
            </div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menus</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/Accueil"><i class="fa fa-home"></i> Accueil</a>
                  </li>
                  <!-- Menu clients -->
                  <li><a><i class="fa fa-users"></i> Client <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent crédit" 
                       || $fonctionUser == "Agent épargne" || $fonctionUser == "Opérateur de saisie") { ?>
                      <li><a href="<?php echo base_url(); ?>index.php/ClientIndividuel">Individuel</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/Individuel/ApprouverClient">Approbation client</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/ClientGroupe">Groupe</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/Groupe/TransfererMembre">Transfert membre groupe</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/Droits">Droit d'inscription</a></li>
                      <?php } ?>
                      <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent crédit" ) { ?>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/Garant">Garant de crédit</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/ListRouge">Client douteux</a></li>
                      <?php } ?>
                      <li><a>Rapports <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu"> 
                      <li><a href="<?php echo base_url(); ?>index.php/Client/RapportsClient">Rapport client individuel</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/RapportsCIN">Rapport CIN</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/Rapports/ListeGroupe">Rapport client groupe</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/RapportsListeRouge">Rapport liste rouge</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Client/RapportsListeRouge">Rapport liste noire</a></li>
                      </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Menu epargne -->
                  <li><a><i class="fa fa-university"></i> Epargne <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent épargne" ) { ?>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuOuvrirCompteEp">Ouvrir compte épargne</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuDepotEp">Dépôt</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuRetraitEp">Retrait</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuVirement">Transfert</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuCalculInteret">Calcul intérêt</a></li>                      
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/FermerCompte">Fermer compte épargne</a></li>
                      <?php } ?>
                      <li><a>Rapports sur épargne <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Rapport/Epargne/Solde">Rapport solde d'épargne</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuRapportTransactions">Rapport sur les Transactions</a></li>        
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/ReleverCompte">Relevés de compte</a></li>       
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/NouveauCompte">Rapport de nouveaux comptes d'épargne</a></li>        
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/CompteFermer">Rapport comptes d'épargne fermés</a></li>              
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/FicheJournalier">Fiche journalière d'épargne</a></li>        
                     <!--  <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/EtatCompte">Etat des comptes</a></li>   -->         
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/SoldeMinMax">Rapport solde minimum/maximum</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuRapportInteret">Rapport sur Intérêt</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Menu/Rapport/Epargne/ParProduit.aspx">Rapport des comptes par produit</a></li>

                      </ul>
                      </li>
                            <!-- <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/FermerCompte">Fermer comptes d'épargne</a></li> -->  
                        <li>
                        <a>Dépôts à terme <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/OuvrirCompteDAT">Ouvrir dépôt à terme</a></li>
                              <!-- <li><a href="<?php echo base_url(); ?>index.php/MenuRapportTransactions">Modifier dépôt à terme</a></li> -->        
                              <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/RetraitDAT">Retrait dépôt à terme</a></li>       
                              <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/SupprimerDAT">Supprimer dépôt à terme</a></li>    
                              <li><a>Rapport DAT <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/DAT">Rapport sur DAT</a></li>        
                                    <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/Echeance">Rapport échéances DAT</a></li>       
                                    <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/CompteSupprimer">Rapport DAT supprimés</a></li>     
                                    <li><a href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/EtatCompteDAT">Etat de dépôts à terme</a></li>   
                                </ul>
                              </li>    
                              
                            </ul>
                        </li>
                    </ul>
                  </li>

                  <!-- Menu Crédit -->
                  <li><a><i class="fa fa-euro-sign"></i> Crédit <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent crédit" ) { ?>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuDemandeCredit">Demande crédit individuel</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuDemandeCreditGroupe">Demande crédit groupe</a></li>
                     <!--  <li><a href="tables_dynamic.html">Modifier demande</a></li> -->
                      <li><a>Paiement commission <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/CommissionCreditAvantApprobation">avant approbation</a> </li> 
                          <li><a href="<?php echo base_url(); ?>index.php/CommissionCreditApresApprobation">après approbation</a> </li>
                        </ul>
                      </li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuApprobation">Approbation de Crédit</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuDecaissement">Décaissement</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/MenuRemboursement">Remboursement de Crédit</a></li>  
                      <li><a href="<?php echo base_url(); ?>index.php/MenuSupprimerCredit">Supprimer Crédit</a></li>  
                      <?php } ?>
                      <li><a>Rapports sur crédit <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/FicheCredit">Fiche de crédit</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/StatutCredit">Crédit approuvés/rejetés/en attente</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/DecaissementAttente">Rapport décaissement en attente</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/Decaissement">Rapport décaissement</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/SoldeRestantDu">Rapport solde restant dû</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/GarantGaranties">Rapport garants et garanties</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Etat de crédit à une date donnée</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/DuFutur">Dû pour un paiement futur</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/MontantDuAujourdhui">Montants dus aujourd'hui</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Remboursements manqués/non completés pour un jour</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Credit/Rapport/PortefeuilleAgent">Analyse portefeuille agent crédit</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Menu Comptabilité -->
                  <li><a><i class="fa fa-balance-scale"></i> Comptabilité <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Comptable" ) { ?>
                      <li><a>Saisie journal <span class="fa fa-chevron-down"></span></a>   
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Transaction">Transaction caisse</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Transaction/Banque">Transaction banque</a></li>     
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/OperationDivers">Opération divers</a></li>                        
                        </ul>
                      </li> 

                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/DeclassementCredit">Dé-classifier Crédits en arriérés</a></li>

                    <li><a>Journal <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/JournalCaisse">Journal caisse</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/JournalBanque">Journal banque</a></li>     
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/JournalDives">Journal des autres comptes</a></li>                        
                        </ul>
                      </li> 

                      <li><a>Grand livre <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/generale">Grand livre générale</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Auxiliaire">Grand livre auxiliaire</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Budget">Grand livre budgétaire</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Grand livre Analytique</a></li>
                         </ul>
                      </li>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Balance">Balance des comptes</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Bilan">Bilan</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Bilan">Analyse des comptes</a></li>
                      <?php } ?>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/CompteResultat">Resultat par periode</a></li>
                      <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Comptable" ) { ?>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/planComptable">Plan comptable</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/Comptabilite/Budget">Budgétisation</a></li>
                      <li><a href="#">Clôture du jours</a></li>
                      <li><a href="#">Clôture du mois</a></li>
                      <li><a href="#">Clôture de l'exercice</a></li>          
                      <?php } ?>
                    </ul>
                  </li>

                  <!-- Menu système & configuration -->
                  <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" ) { ?>
                  <li><a><i class="fa fa-sliders-h"></i>Systèmes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/MenuConfigUtilisateurs">Utilisateurs</a></li>
                       <li><a>Config produit épargne<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/ProduitEpargne">Définir produit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuConfigProduitEpargne">Configuration produit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Systeme/Configuration/Epargne/DAT">Configuration dépôt à terme</a></li>

                        </ul>
                      </li>
                      <li><a>Config produit crédit <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/ProduitCredit">Nouveau produit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuConfigToutCredit">Config pour tout crédit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuConfigGenerale">Config générale produit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuCreditIndividuel">Crédit Individuel</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuCreditGroupe">Crédit Groupe</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuFraisCredit">Frais crédit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Configuration/Credit/GarantGaratie">Config Garant et garanties</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/Configuration/Credit/Penalite">Pénalité crédit</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/MenuConfigGL">Config GL crédit</a></li>
                        </ul>
                      </li>    
                      <li><a>Config comptabilité<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url(); ?>index.php/MenuComptesCaisse">Ajout compte caisse</a></li> 
                          <li><a href="<?php echo base_url(); ?>index.php/Config/Compta/Transaction">Configuration transaction</a> </li>
                        </ul>
                      </li>                 
                      
                    </ul>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="sidebar-footer hidden-small">
                <div style="margin-left:15px;" data-toggle="tooltip" data-placement="top" title="Date aujourd'hui">
                    <h5 id="date" aria-hidden="true"></h5><!-- class="glyphicon glyphicon-cog" -->
                </div>
            </div>
  
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav fixed-top">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>/assets/img/eddy.jpg" alt=""><?php echo $nomUtilisateur ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"><i class="fa fa-user"></i> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <i class="fa fa-edit"></i>
                        <span>Modifier</span>
                      </a>            
                    <a class="dropdown-item" href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out"></i> Déconnexion</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <br>
        <br>
        <!-- /top navigation -->

<script type="text/javascript">
   function keyPress (e) {
        e = e || window.event;
        var c = e.keyCode;
        return c>=48 && c<=55;
    }
    $(function(){
       /*setTimeout(function () {
          $('#dis').html('&nbsp;');//style','display: none;
        }, 1000);*/
        today()
       function today(){
          var now = new Date();
          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);

          var today = (day)+"/"+(month)+"/"+now.getFullYear() ;

          $('#date').html(today);  
        }
   });
</script>