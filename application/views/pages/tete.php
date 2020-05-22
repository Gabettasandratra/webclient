<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Gestion d'outil de Microfinance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/logo.jpg"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/mystyle.css');?>"/>
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/font-awesome-5/css/fontawesome-all.min.css');?>"/>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap-datetimepicker.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/jquery-ui.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/animate.css');?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/custom.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/DataTables/media/css/jquery.dataTables.min.css');?>"/>
   
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dropdown.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dropdown.min.js');?>"></script>

    <style type="text/css">
		body{

			/*background-color: #F8F8FF; DCDCDC 008B8B*/
			background-color: #DCDCDC;
		/*	background-image : url("<?php echo base_url();?>/assets/img/money.jpg") !important;
		    background-repeat: repeat;
		    background-size: 100%;
		    background-position: fixed;*/
		    font-size: 82%;

		}

		.navTete{
			border-radius: 8px;
			background-color: #3f87a6;
			color: white;
			/*
			margin-left: 5px;margin-right:5px;*/
		}

		/*Modal*/
	   /* .dialog { width: 500px; height: 200px; position: relative; }
	    #button { padding: .5em 1em; text-decoration: none; }
	    #effect { width: 240px; height: 170px; padding: 0.4em; position: relative; }
	    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
	    .ui-effects-transfer { border: 2px dotted gray; }
*/
		.error{
			background-color: red;
			/*outline: 1px solid #f00;*/
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

		.form-group input{
			border-radius: 6px;
			padding-left: 15px;
		}

		.container{
			background-color: white;			
			margin-bottom: 15px;
			min-height: 800px;
		   box-shadow: 8px 12px 15px 0 rgba(0, 34, 51, 0.05), 12px 15px 10px 0 rgba(0, 34, 51, 0.05);

		}
		.container-fluid{
			background-color: white;			
			margin-bottom: 15px;
			min-height: 800px;
		}

		.place{
			background-color: rgb(0,0,0);
			opacity: 0.7;
			height: 60px;			
			margin-left: 15.5%;
			border: 1px groove #ddd;
			margin-top: 10%;
 			border-radius: 10px;			
			box-shadow: -5px 5px 10px black, 1px 1px 10px black;

		}

		.titre{
			/*font-style: oblique;*/
			word-break: break-all;
		    font-family: "Georgia",Times,sans-serif;
			color: white;
 			text-shadow: -18px 2px 25px white, 0 0 5px blue, 0 0 2px white;
 			font-size: 1.8em;
 			margin: 4px;
 			opacity: 0.7px;
		}

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
			font-size: 0.9em;
		}

		.thead-dark{
			opacity: 0.7;			
			color: white;
 			text-shadow: 2px 2px 5px black;
		}

		 .vertical-line{
	        border-left: 1px solid #000;
	        display: inline-block;
	        opacity: 0.4px;
	        height: 300px;
	        margin: 50px 0 15px 25px;
	      }

		.card {

			    background-color: #ffffff;
			    border: 1px solid rgba(0, 34, 51, 0.1);
			    box-shadow: 2px 4px 2px 0 rgba(0, 34, 51, 0.05), 2px 4px 2px 0 rgba(0, 34, 51, 0.05);
			    border-radius: 1.0rem;
			}

			#teteTable{
				background-color: Tomato;/*OrangeRed*/
				color: white;
				text-shadow: 2px 2px 5px black;
				font-weight: bold;				
				margin-left: 15px;
				margin-bottom: 10px;
				height: 100%;
				width: 300px;
				box-shadow: -2px 2px 3px Tomato;
				text-align: center;
				border:1px solid Tomato;
				border-radius: 4px;
			}

			/* Tabs Card */

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
    </style>
   
</head>
<body>

<!-- 	<div class="jumbotron"  style="padding-bottom: 20px;padding-top: ;">
		<h5>Logiciel de gestion de microfinance</h5>
</div> -->
		<!-- bg-primary, bg-succes, bg-warning, bg-info, bg-danger sticky-top fixed-topv navbar-dark bg-primary  (https://code.jquery.com/)-->
	<nav class="navbar navbar-expand-md fixed-top navTete">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
		 <a href="#"><span class="navbar-toggler-icon"></span></a>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<a class="navbar-brand"><img class="rounded-circle" width="100px" height="35px" src="<?php echo base_url();?>/assets/img/logo.jpg">
		</a>
		 <span class="navbar-text">Fidev app</span>
		<span class="navbar-text">&nbsp;&nbsp;&nbsp;</span> 

		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/Accueil"><i class="fa fa-home"></i> Accueil</a>
			</li>
			<?php if($fonctionUser == "Administrateur") { ?>
			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">&nbsp;
						<i class="fa fa-users"></i> Clients
					<span class="caret"></span>
					</a>
			
				<ul class="dropdown-menu" aria-labelledby="dropdown_target">
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ClientIndividuel">Individuel</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ClientGroupe">Groupe</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/Droits">Droit d'inscription</a></li>
					<div class="dropdown-divider"></div>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/Garant">Garant de crédit</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/ListRouge">Listes Rouge</a></li>					
					<li class="hover-me">
					<a class="dropdown-item" href="#">Rapports<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/RapportsClient">Rapports Client</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/RapportsCIN">Rapports CIN</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Client/RapportsListeRouge">Rapports Listes Rouge</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
			<?php } ?>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					&nbsp;<i class="fa fa-university"></i> Epargne</a>
				<span class="caret"></span></a>

				<ul class="dropdown-menu" aria-labelledby="dropdown_target">
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuOuvrirCompteEp">Ouvrir un compte d'épargne</a></li>				
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuDepotEp">Dépôt</a></li>							
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRetraitEp">Retrait</a></li>							
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuVirement">Transfert</a></li>									
					<li class="hover-me">
					<a class="dropdown-item" href="#">Rapport sur épargne<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Rapport/Epargne/Solde">Rapport solde d'épargne</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRapportTransactions">Rapport sur les Transactions</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/ReleverCompte">Relevés de compte</a></li>				
								<li><a class="dropdown-item" href="#">Relevés de compte des membres de groupe</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/NouveauCompte">Rapport de nouveaux comptes d'épargne</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/CompteFermer">Rapport comptes d'épargne fermés</a></li>				
								<li><a class="dropdown-item" href="#">Fiche de caisse d'épargne</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/FicheJournalier">Fiche journalière d'épargne</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/EtatCompte">Etat des comptes</a></li>				
								<li><a class="dropdown-item" href="#">Rapport sur les transactions modifiées</a></li>
								<div class="dropdown-divider" style="margin-right: 15%;"></div>				
								<!-- <li><a class="dropdown-item" href="#">Livre personnel</a></li>
								<li><a class="dropdown-item" href="#">Epargne obligatoire</a></li>
								<li><a class="dropdown-item" href="#">Rapport de paiements de chèques virés</a></li>
								<li><a class="dropdown-item" href="#">Rapport de carnets de chèques émis</a></li> -->
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/Rapport/SoldeMinMax">Rapport solde minimum/maximum</a></li>
								<!-- <li><a class="dropdown-item" href="#">Transfère inter-IMF</a></li> -->
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRapportInteret">Rapport sur Intérêt</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Rapport/Epargne/ParProduit.aspx">Rapport des comptes par produit</a></li>
							</ul>
						</div>
					</li>
					<div class="dropdown-divider"></div>			
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuCalculInteret">Calcul intérêt</a></li>				
					<div class="dropdown-divider"></div>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/FermerCompte">Fermer comptes d'épargne</a></li>	
					<div class="dropdown-divider"></div>
					<li class="hover-me">
					<a class="dropdown-item" href="#">Dépôts à terme<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/OuvrirCompteDAT">Ouvrir dépôt à terme</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRapportTransactions">Modifier dépôt à terme</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/RetraitDAT">Retrait dépôt à terme</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/SupprimerDAT">Supprimer dépôt à terme</a></li>
								<div class="dropdown-divider" style="margin-right: 15%;"></div>							
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/DAT">Rapport sur dépôt à terme</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/Echeance">Rapport échéances dépôt à terme</a></li>				
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/CompteSupprimer">Rapport dépôts à terme supprimés</a></li>			
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Menu/Epargne/DAT/Rapport/EtatCompteDAT">Etat de dépôts à terme</a></li>			
								
							</ul>
						</div>
					</li>
				</ul>

			</li>



			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					&nbsp;<i class="fa fa-euro-sign"></i> Crédits
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdown_target">
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuDemandeCredit"> Demande crédit</a></li><!-- 
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuDemandeCredit"> Demande crédit groupe</a></li> -->
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuModifierDemandeCredit">Modifier demande</a></li>
					<li class="hover-me">
						<a class="dropdown-item" href="#">Paiement Commission<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/CommissionCreditAvantApprobation">avant approbation</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/CommissionCreditApresApprobation">après approbation</a></li>
							</ul>
						</div>
					</li>
					<?php if($fonctionUser == "Administrateur") { ?>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuApprobation">Approbation de Crédit</a></li>
					<?php } ?>
					<!-- <li><a class="dropdown-item" href=""><i class="fa fa-donate"></i></a></li> -->
					<li class="hover-me">
						<a class="dropdown-item" href="#">Décaissement<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuDecaissement">Décaissement total</a></li>
								<li><a class="dropdown-item" href="#">Décaissement partiel</a></li>
							</ul>
						</div>
					</li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRemboursement">Remboursement de Crédit</a></li>					
					<li class="hover-me">
					<a class="dropdown-item" href="#">Rapport sur crédit<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/FicheCredit">Fiche de crédit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/StatutCredit">Crédit approuvés/rejetés/en attente</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/DecaissementAttente">Rapport décaissement en attente</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/Decaissement">Rapport décaissement</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/SoldeRestantDu">Rapport solde restant dû</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/GarantGaranties">Rapport garants et garanties</a></li>
								<div class="dropdown-divider"></div>	
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Etat de crédit à une date donnée</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Dû pour un paiement futur</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Montants dus aujourd'hui</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Remboursements manqués/non completés pour un jour</a></li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Credit/Rapport/PortefeuilleAgent">Analyse portefeuille agent crédit</a></li>

							</ul>
						</div>
					</li>

					<!-- <li><a class="dropdown-item" href="#">Declassement</a></li>			 -->		
				</ul>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					&nbsp;<i class="fa fa-balance-scale"></i> Comptabilté
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdown_target">
					<li class="hover-me">
					<a class="dropdown-item" href="#">Saisie journal<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/Transaction">Transaction caisse</a></li>
								<li><a class="dropdown-item" href="#">Transaction banque</a></li>			
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/OperationDivers">Opération divers</a></li>
							</ul>
						</div>
					</li>
					<div class="dropdown-divider"></div>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/DeclassementCredit">Dé-classifier Crédits en arriérés</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuRemboursement">Calculer provision</a></li>
					<div class="dropdown-divider"></div>					
					<li class="hover-me">
					<a class="dropdown-item" href="#">Consulter journal<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li>
									<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/JournalCaisse">Journal caisse</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/JournalBanque">Journal banque</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/JournalDives">Journal des autres comptes</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="hover-me">
					<a class="dropdown-item" href="#">Grand livre<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/generale">Grand livre générale</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Auxiliaire">Grand livre auxiliaire</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Budget">Grand livre budgétaire</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/GrandLivre/Analytique">Grand livre Analytique</a></li>
							</ul>
						</div>
					</li>
					<!-- <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuGrandLivre"></a></li> -->
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/Balance">Balance des comptes</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/Bilan">Bilan</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/Bilan">Analyse des comptes</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/CompteResultat">Resultat par periode</a></li>
					<div class="dropdown-divider"></div>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/planComptable">Plan comptable</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Comptabilite/Budget">Budgétisation</a></li>
					<div class="dropdown-divider"></div>
					<li><a class="dropdown-item" href="#">Clôture du jours</a></li>
					<li><a class="dropdown-item" href="#">Clôture du mois</a></li>
					<li><a class="dropdown-item" href="#">Clôture de l'exercice</a></li>					
					
				</ul>
			</li>
<!-- 
			<li class="nav-item ">
				<a class="nav-link" href="#">&nbsp;<i class="fa fa-info-circle"></i> Fichiers de Support</a>
			</li> -->

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					&nbsp;<i class="fa fa-sliders-h"></i> Système
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdown_target">
					<li class="hover-me">
						<a class="dropdown-item" href="#">Agence <i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Systemes/Agence/personnels">Personnels institution</a></li>
							</ul>
						</div>
					</li>
					<li><a class="dropdown-item" href="#">Rapport de chèques</a></li>
					<li class="hover-me">
						<a class="dropdown-item" href="#">Configuration Crédit<i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<!-- <li><a class="dropdown-item" href="#">Crédit</a></l i> -->
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ProduitCredit">Nouveau produit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuConfigToutCredit">Config pour tout crédit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuConfigGenerale">Config générale produit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuCreditIndividuel">Crédit Individuel</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuCreditGroupe">Crédit Groupe</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuFraisCredit">Frais crédit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Configuration/Credit/GarantGaratie">Config Garant et garanties</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Configuration/Credit/Penalite">Pénalité crédit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuConfigGL">Config GL crédit</a></li>
								
							</ul>
						</div>
					</li>
					<li class="hover-me">
						<a class="dropdown-item" href="#">Configuration Epargne <i class="fa fa-angle-right"></i></a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ProduitEpargne">Définir produit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuConfigProduitEpargne">Configuration produit</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Systeme/Configuration/Epargne/DAT">Configuration dépôt à terme</a></li>
							</ul>
						</div>
					</li>
					<li class="hover-me">
						<a class="dropdown-item" href="#">Comptabilité<i class="fa fa-angle-right"></i> </a>
						<div class="sub-menu">
							<ul>
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuComptesCaisse">Comptes Caisse</a></li>
							</ul>
						</div>
					</li>
					<?php if(($fonctionUser == "Administrateur") || ($fonctionUser == "Directeur") || ($fonctionUser == "Contrôleur") ||
					($fonctionUser == "Chef d'agence") ) { ?>
					<li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/MenuConfigUtilisateurs">Utilisateurs</a></li>
					<?php } ?>
					<li><a class="dropdown-item" href="#">Visualisé les objectifs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>	
				</ul>

			</li>
				&nbsp;
				<li class="nav-item dropdown" style="margin-left: 0%;">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">&nbsp;
					<img class="rounded-circle" width="45px" height="35px" src="<?php echo base_url();?>/assets/img/eddy.jpg">
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown_target">
						<li><a class="dropdown-item disabled" style="color:#2E8B57 " href="#"> <?php echo $nomUtilisateur ?> </a></li>
						<li><a class="dropdown-item" href="#"><i class="fa fa-sliders-h"></i> Paramètre</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out-alt"></i> Deconnection</a></li>
					</ul>
				</li>

			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Aide <i class="fa fa-question"></i></a>
			</li>
 -->
		</ul>
                <!--   <label for="choix" class="col-sm-4">Type recherche: <span id="champObligatoir">*</span></label> -->
                  <!-- <div class="col-sm-8"> </div> -->

		<!-- <form style="margin-left: 10%;float: right;" class="form-inline row" action="">

			 <div class="form-group col-6">
                    <select name="choixCherche" class="form-control form-control-sm" id="choixCherche">
                         <option>--Type de recherche--</option>
                         <option value="individuel">Client</option>
                         <option value="individuel">Garant</option>
                         <option value="individuel">Groupe</option>
                         <option value="groupe">Crédit</option>
                         <option value="groupe">Compte épargne</option>
                         <option value="groupe">Compte comptable</option>
                    </select>
                 
               </div>  

			<div class="input-group col-6">
				<input type="text" id="text_cherche" name="text_cherche" class="form-control form-control-sm col-12" placeholder="ex: FI/I/000001" />
				 <div class="input-group-prepend">
					<button id="chercher" type="button" class="btn btn-sm btn-dark"><i class="fa fa-search"></i></button>
				</div>
			</div>
			

		</form> -->

		</div>
	</nav>

<script type="text/javascript">
	
	//fonction à appeler pour le control du champ numerique
	function keyPress (e) {
		e = e || window.event;
		var c = e.keyCode;
		return c>=48 && c<=55;
	}

	function utils(){		

		//SAISIE N° DE COMPTE
		  $("#codeCli").autocomplete({
		      source: function(request, response){
		        var code = $("#codeCli").val();
		        //var code =  $('input[name=codeCli]').val();
		          $.ajax({
		              type : 'ajax',
		              url: '<?php echo base_url();?>index.php/findIndividuel',
		              method: 'get',
		              data: {code : code},
		              crossDomain: true,
		              dataType: 'json',
		              jsonpCallback:'callback',
		              success: function(data){
		                  response($.map(data, function(item){
		                      return item.codeInd + " |" +item.nomClient +" " +item.prenomClient;//
		                  }));
		              }
		          });
		      },
		      select: function(event,ui) {
		          var c = ui.item.value.split(' |');
		          $('#nom').val(c[1]);
		          $(this).val(c[0]);
		          var id =  c[0];
		          getAllCompte(id);
		          return false;
		      }
		  }); 

		   //SAISIE N° DE COMPTE
		  $("#codeGrp").autocomplete({
		      source: function(request, response){
		        //var code = $('input[name=codeGrp]').val();
		        var code = $("#codeGrp").val();
		          $.ajax({
		              type : 'ajax',
		              url: '<?php echo base_url();?>index.php/findGroupe',
		              method: 'get',
		              data: {code : code},
		              crossDomain: true,
		              dataType: 'json',
		              jsonpCallback:'callback',
		              success: function(data){
		                  response($.map(data, function(item){
		                      return item.codeGrp+ " | " +item.nomGroupe;
		                  }));
		              }
		          });
		      },
		      select: function(event,ui) {
		          var c = ui.item.value.split(' |');
		          $('#nom').val(c[1]);
		          $(this).val(c[0]);
		          return false;
		      }
		  });  
	}

	function choixClients(){
		   //AFFICHER CLIENT

		     $('#choix').change(function() {
		        
		        var str = "";
		        var i = new String('individuel');
		        var g = new String('groupe');
		       
		        $( "#choix option:selected" ).each(function() {
		          str += $( this ).attr('value');
		        });

		        if(g == str){
		          $('#codeGrp').attr('type', 'text');                       
		          $('#codeCli').attr('type', 'hidden');  
		          $('input[name=codeCli]').val('');                     
		          $('#rien').attr('type', 'hidden');                       
		        }
		        else if(i == str){          
		          $('#codeCli').attr('type', 'text');
		          $('#codeGrp').attr('type', 'hidden');
		          $('input[name=codeGrp]').val('');
		          $('#rien').attr('type', 'hidden');
		        }else{
		          
		          $('#rien').attr('type', 'text');
		          $('#codeGrp').attr('type', 'hidden');
		          $('#codeCli').attr('type', 'hidden');
		        }


		  });
	}

	function choixPaye(){
			//CHOIX PAYEMENT

		   $('#cash').click(function() {

		      $('#affGuichet').attr('style', 'display: bloc;');                                             
		      $('#affCheque').attr('style', 'display: none;');                                             
		      $('#affMob').attr('style', 'display: none;');
		       $('#affEp').attr('style', 'display: none;');                                             
		  });

		   $('#cheque').click(function() {

		      $('#affCheque').attr('style', 'display: bloc;');                                             
		      $('#affGuichet').attr('style', 'display: none;');                                             
		      $('#affMob').attr('style', 'display: none;');  
		       $('#affEp').attr('style', 'display: none;');                                           
		  });

		   $('#mobile').click(function() {

		      $('#affMob').attr('style', 'display: bloc;');                                             
		   	  $('#affEp').attr('style', 'display: none;');
		      $('#affGuichet').attr('style', 'display: none;');                                             
		      $('#affCheque').attr('style', 'display: none;');                                             
		  });

		   $('#epargne').click(function() {

		      $('#affEp').attr('style', 'display: bloc;');                                             
		      $('#affMob').attr('style', 'display: none;');                                             
		      $('#affGuichet').attr('style', 'display: none;');                                             
		      $('#affCheque').attr('style', 'display: none;');                                             
		  });

	}

	function getAllCompte(id){

    $.ajax({
      type:'ajax',
      method:"get",
      url:'<?php echo base_url();?>index.php/getDetailClient',
      dataType:'json',
      data: {id:id},
      async: false,
        success: function(response) {
            //alert(response);
            var detailEpargne;
            var epargne = response.epargne;
            var c;
            if (response.success) {

                //détail épargne
                if(epargne.length == null){
                 c = 1;
                detailEpargne += '<tr>' +
                '<td>' + epargne.numCompteEp + '</td>' +
                '<td>' + epargne.produitEpargne.idProdEpargne +' | '+ epargne.produitEpargne.nomProdEpargne + '</td>' +
                '<td>' + epargne.dateOuverture + '</td>' +
                '<td>' + epargne.solde + '</td>' +
                '</tr>';
                }else{
                  c = epargne.length;
                  for (i = 0; i < epargne.length; i++) {
                    detailEpargne += '<tr>' +
                    '<td>' + epargne[i].numCompteEp + '</td>' +
                    '<td>' + epargne[i].produitEpargne.idProdEpargne +' | '+ epargne[i].produitEpargne.nomProdEpargne + '</td>' +
                    '<td>' + epargne[i].dateOuverture + '</td>' +
                    '<td>' + epargne[i].solde + '</td>' +
                    '</tr>';
                  }
                  
                }

                $('#showdata').html(detailEpargne);
                $('#ls').html('Liste comptes: '+c);

            }
          
        },
        error: function(response){
           $('#showdata').html('');
           $('#ls').html('Liste compte: '+0);
        }
    });

}


$(function(){

//SAISIE N° DE COMPTE
  $("#text_cherche").autocomplete({
      source: function(request, response){
        var code = $("#text_cherche").val();
        //var code =  $('input[name=codeCli]').val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findIndividuel',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){
                  response($.map(data, function(item){
                      return item.codeInd+ " | " +item.nomClient +" " +item.prenomClient;  
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#nom').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  });


});

</script>