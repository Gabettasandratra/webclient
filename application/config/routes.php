<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



//ROUTE POUR LA CONNECTION
$route['connection'] = 'login/authentification';
$route['Accueil'] = 'menu/accueil';

/*****************************************************************************************/
/*****************************AU CHARGEMENT DE LA PAGE***********************************/
/*****************************************************************************************/


$route['chargeProduit'] = 'chargement/afficheProduit';
$route['chargeClient'] = 'chargement/afficheClient';
$route['chargeGroupe'] = 'chargement/afficheGroupe';


/*********************CREDIT**********************/
$route['chargeDemande'] = 'chargement/afficheDemande';
$route['chargeApprobation'] = 'chargement/afficheCredit';
$route['chargeDecaissement'] = 'chargement/afficheCredit';
$route['chargeRemb'] = 'chargement/afficheCredit';
$route['chargeGar'] = 'chargement/afficheGarant';

//DEMANDE CREDIT
$route['ecritureDemande'] = 'chargement/ecritureDemande';
$route['modifCalendrierPaie'] = 'chargement/modifCalendrierPaie';
$route['getCalendrier'] = 'chargement/getCalendrier';
$route['viderCalendrierPaie'] = 'chargement/viderCalendrier';

/******************COMPTA************************/
$route['chargeCompteCaisse'] = 'chargement/afficheCompteCaisse';
$route['chargeCompteCompta'] = 'chargement/afficheCompteCompta';

/*****************CONFIGURATION EPARGNE*********************/
$route['chargeProduitEpargne'] = 'chargement/afficheProduitEp';

//FONCTION ADDITIONNAL
$route['allGroupe'] = 'client/allGroupe';

//AGENCE
$route['chargePersonnels'] = 'chargement/affichePersonnels';


/*************************************************************************************************/
/*************************************ROUTE POUR LES MENU******************************************/
/*************************************************************************************************/


//ROUTE POUR LE MENU CLIENT
$route['Client/Garant'] = 'menu/menuGarant';
$route['Client/ListRouge'] = 'menu/menuListRouge';
$route['Client/Droits'] = 'menu/menuDroitInscription';
$route['Client/RapportsClient'] = 'menu/menuRapportsClient';
$route['Client/RapportsListeRouge'] = 'menu/menuRapportsListeRouge';
$route['Client/RapportsCIN'] = 'menu/menuRapportsCIN';
$route['Client/Individuel/ApprouverClient'] = 'menu/menuApprouverClient';

//CLIENT INDIVIDUEL
$route['getClientNonApprouver'] = 'client/getClientNonApprouver';
$route['ClientIndividuel'] = 'client/clientIndividuel';
$route['approbationClient'] = 'client/approbationClient';

$route['verifDateNais'] = 'client/verifDateNais';
$route['saveClientIndividuel'] = 'client/saveClientIndividuel';
$route['findIndividuel'] = 'client/findIndividuel';
$route['saveGarant'] = 'client/saveGarant';
$route['SaveListeRouge'] = 'client/saveListeRouge';
$route['SaveDroitInscription'] = 'client/saveDroitInscription';

$route['afficheRapportClient'] = 'client/afficheRapportClient';
$route['getDetailClient'] = 'client/getDetailClient';
$route['deleteIndividuel'] = 'client/deleteIndividuel';
$route['getOneIndividuel'] = 'client/getOneIndividuel';

$route['afficheListeRouge'] = 'client/afficheListeRouge';
$route['getRapportCIN'] = 'client/getRapportCIN';

/*********GROUPE********/
$route['ClientGroupe'] = 'client/clientGroupe';
$route['saveGroupe'] = 'client/saveGroupe';
$route['saveMembreGroupe'] = 'client/saveMembreGroupe';
$route['countMembreView'] = 'client/countMembreView';
$route['viderMembreView'] = 'client/viderMembreView';


$route['Client/Rapports/ListeGroupe'] = 'menu/menuRapportGroupe';
$route['addMembreGroupe'] = 'client/addMembreGroupe';

$route['Client/Groupe/TransfererMembre'] = 'menu/menuTransfererMembreGroupe';

$route['transfererMembre'] = 'client/transferMembre';

$route['getMembreGroupeByCode'] = 'client/afficheMembreGroupe';

$route['afficheConseilGroupe'] = 'client/afficheConseilGroupe';
$route['addConseilGroupe'] = 'client/addConseilGroupe';
$route['findGroupe'] = 'client/findGroupe';

			/************************************************************/
						//ROUTE POUR LES MENUS  SYSTEMES
			/************************************************************/
//PRODUITS

$route['MenuCreditIndividuel'] = 'menu/menuCreditIndividuel';
$route['MenuConfigToutCredit'] = 'menu/menuconfigToutCredit';
$route['MenuConfigGenerale'] = 'menu/menuConfigGenerale';
$route['MenuCreditGroupe'] = 'menu/menuConfigGroupe';
$route['MenuFraisCredit'] = 'menu/menuFraisCredit';
$route['MenuConfigGL'] = 'menu/menuConfigGLCredit';
$route['Configuration/Credit/GarantGaratie'] = 'menu/menuConfigGarantGaratieCredit';
$route['Configuration/Credit/Penalite'] = 'menu/menuConfigPenaliteCredit';

//COMPTES
$route['MenuComptesCaisse'] = 'menu/menuComptesCaisse';
$route['Config/Compta/Transaction'] = 'menu/menuConfigTransactionCompta';

//AGENCE 
$route['Systemes/Agence/personnels'] = 'menu/menuPersonnels'; 

//Utilisateur

$route['MenuConfigUtilisateurs'] = 'menu/menuConfigUtilisateurs'; 


//ROUTE POUR MENU CRCONFIGURATION EPARGNE
$route['ProduitEpargne'] = 'menu/produitEpargne';
$route['MenuConfigProduitEpargne'] = 'menu/configProduitEpargne';

//CREDIT
$route['MenuDemandeCredit'] = 'menu/demandeCredits';
$route['CommissionCreditAvantApprobation'] = 'menu/commissionCreditAvant';
$route['CommissionCreditApresApprobation'] = 'menu/commissionCreditApres';
$route['MenuApprobation'] = 'menu/menuApprobation';
$route['MenuDecaissement'] = 'menu/menuDecaissement';
$route['MenuRemboursement'] = 'menu/menuRemboursement';
$route['Systeme/Configuration/Epargne/DAT'] = 'menu/menuConfigDAT';


//COMPTABILITE
//Grand Livre
$route['Comptabilite/GrandLivre'] = 'menu/menuGrandLivre';
$route['Comptabilite/GrandLivre/generale'] = 'menu/menuGrandLivreGenerale';
$route['Comptabilite/GrandLivre/Auxiliaire'] = 'menu/menuGrandLivreAuxiliaire';
$route['Comptabilite/GrandLivre/Budget'] = 'menu/menuGrandLivreBudget';
$route['Comptabilite/GrandLivre/Analytique'] = 'menu/menuGrandLivreAnalytique';

//Journal
$route['Comptabilite/JournalCaisse'] = 'menu/menuJournalCaisse';
$route['Comptabilite/JournalBanque'] = 'menu/menuJournalBanque';
$route['Comptabilite/JournalDives'] = 'menu/menuJournalDivers';


//Operation
$route['Comptabilite/Transaction'] = 'menu/menuTransactionComptable';
$route['Comptabilite/Transaction/Banque'] = 'menu/menuTransactionBanque';
$route['Comptabilite/OperationDivers'] = 'menu/menuOperationComptaDivers';

$route['Comptabilite/planComptable'] = 'menu/menuPlanComptable';

$route['Comptabilite/Balance'] = 'menu/menuBalance';
$route['Comptabilite/Bilan'] = 'menu/menuBilan';
$route['Comptabilite/CompteResultat'] = 'menu/menuCompteResultat';

$route['Comptabilite/Budget'] = 'menu/menuBudget';

//Declassement
$route['Comptabilite/DeclassementCredit'] = 'menu/menuDeclassementCredit';


/************************************************************/
				//ROUTE POUR LE MENU EPARGNE
/************************************************************/
$route['MenuOuvrirCompteEp'] = 'menu/menuOuvrirCompteEp';
$route['MenuDepotEp'] = 'menu/menuDepot';
$route['MenuRetraitEp'] = 'menu/menuRetrait';
$route['MenuVirement'] = 'menu/menuVirement';
$route['MenuRapportTransactions'] = 'menu/menuRapportTransactions';

//DAT
$route['Menu/Epargne/OuvrirCompteDAT'] = 'menu/menuOuvrirCompteDAT';
$route['Menu/Epargne/RetraitDAT'] = 'menu/menuRetraitDAT';
$route['Menu/Epargne/SupprimerDAT'] = 'menu/menuSupprimerDAT';
$route['Menu/Epargne/DAT/Rapport/DAT'] = 'menu/menuRapportDAT';
$route['Menu/Epargne/DAT/Rapport/Echeance'] = 'menu/menuRapportEcheance';
$route['Menu/Epargne/DAT/Rapport/CompteSupprimer'] = 'menu/menuRapportCompteSupprimerDAT';
$route['Menu/Epargne/DAT/Rapport/EtatCompteDAT'] = 'menu/menuRapportEtatCompteDAT';

//interet
$route['MenuRapportInteret'] = 'menu/menuRapportInteret';
$route['MenuCalculInteret'] = 'menu/menuCalculInteret';

//autre
$route['Menu/Epargne/FermerCompte'] = 'menu/menuFermerCompteEpargne';

//rapport
$route['Menu/Rapport/Epargne/ParProduit.aspx'] = 'menu/menuRapportEpargneParProduit';
$route['Menu/Rapport/Epargne/Solde'] = 'menu/menuRapportSoldeEpargne';
$route['Menu/Epargne/Rapport/ReleverCompte'] = 'menu/menuReleverCompteEpargne';
$route['Menu/Epargne/Rapport/NouveauCompte'] = 'menu/menuNouveauCompteEpargne';
$route['Menu/Epargne/Rapport/CompteFermer'] = 'menu/menuCompteFermerEpargne';
$route['Menu/Epargne/Rapport/FicheJournalier'] = 'menu/menuFicheJournalier';
$route['Menu/Epargne/Rapport/EtatCompte'] = 'menu/menuEtatCompte';
$route['Menu/Epargne/Rapport/SoldeMinMax'] = 'menu/menuSoldeMinMaxEpargne';



/******************************************************************************/
/************************ROUTE POUR CHAQUES MODULE*****************************/
/******************************************************************************/


/******************************************************************************/
						//ROUTE POUR CREDIT
/******************************************************************************/
//Demande crédit
$route['demandeCredit'] = 'credit/demandeCredits';
//Commission
$route['getConfigProduit'] = 'credit/editCommission';
$route['editCommission'] = 'credit/editCommission';

$route['chargeCommAvant'] = 'credit/getCommissionCredit';
$route['chargeCommApres'] = 'credit/getCommissionCredit';

$route['saveCommission'] = 'credit/saveCommission';
//Approbation
$route['saveApprobation'] = 'credit/saveApprobation';
//Décaissement
$route['saveDecaissement'] = 'credit/saveDecaissement';

//Remboursement
$route['dernierRemboursement'] = 'credit/dernierRemboursement';
$route['saveRemboursement'] = 'credit/saveRemboursement';
$route['historiqueRemboursement'] = 'credit/historiqueRemboursement';

$route['findCreditParNum'] = 'credit/findCreditParNum';
$route['getMontantRemb'] = 'credit/getMontantRemb';
$route['HistoqueRemboursement'] = 'credit/histoqueRemboursement';

//Demande crédit
$route['demCredGetInfoClient'] = 'credit/getInfoClient';

//Garantie crédit
$route['saveGarantie'] = 'credit/saveGarantie';
$route['chargeGarantie'] = 'credit/chargeGarantie';
$route['viderGaratieView'] = 'credit/viderGaratieView';


//Demande crédit groupe
//Enregistrement demande crédit groupe
$route['demandeCreditGroupe'] = 'credit/demandeCreditGroupe';
//Ajouter montant
$route['saveMontantMembre'] = 'credit/saveMontantMembre';
$route['getMontantMembre'] = 'credit/getMontantMembre';
$route['deleteMontantMembre'] = 'credit/deleteMontantMembre';


//Menu Rapport crédit
$route['getCredit'] = 'credit/getAllCredit';
$route['getFicheCredit'] = 'credit/getFicheCredit';
$route['getStatutCredit'] = 'credit/getStatutCredit';
$route['getDecaissementAttente'] = 'credit/getDecaissementAttente';
$route['getDecaissement'] = 'credit/getDecaissement';
$route['getGarantCredit'] = 'credit/getGarantCredit';
$route['getGarantieCredit'] = 'credit/getGarantieCredit';
$route['getSoldeRestantDu'] = 'credit/getSoldeRestantDu';
$route['getMontantDuToDay'] = 'credit/getMontantDuToDay';
$route['getMontantDuFutur'] = 'credit/getMontantDuFutur';
$route['getPortefeuilleAgent'] = 'credit/getPortefeuilleAgent';

//Menu rapport crédit
$route['Credit/Rapport/FicheCredit'] = 'menu/menuRapportFicheCredit';
$route['Credit/Rapport/StatutCredit'] = 'menu/menuRapportStatutCredit';
$route['Credit/Rapport/DecaissementAttente'] = 'menu/menuRapportDecaissementAttente';
$route['Credit/Rapport/Decaissement'] = 'menu/menuRapportDecaissement';
$route['Credit/Rapport/GarantGaranties'] = 'menu/menuRapportGarantGaranties';
$route['Credit/Rapport/SoldeRestantDu'] = 'menu/menuRapportSoldeRestantDu';
$route['Credit/Rapport/MontantDuAujourdhui'] = 'menu/menuRapportMontantDuAujourdhui';
$route['Credit/Rapport/DuFutur'] = 'menu/menuRapportDuFutur';
$route['Credit/Rapport/PortefeuilleAgent'] = 'menu/menuRapportPortefeuilleAgent';


//GROUPE 
//menus 
$route['MenuDemandeCreditGroupe'] = 'menu/menuDemandeCreditGroupe';

//Suppression crédit
$route['MenuSupprimerCredit'] = 'menu/menuSupprimerCredit';

/***********************************************************/
				//ROUTE POUR EPARGNE
/***********************************************************/

//CONFIGURATION EPARGNE
$route['SaveProduitEpargne'] = 'systemes/saveProduitEpargne';
$route['DesactiverProduitEpargne'] = 'systemes/desactiverProduitEpargne';
$route['ActiverProduitEpargne'] = 'systemes/activerProduitEpargne';
$route['deleteProduitEpargne'] = 'systemes/deleteProduitEpargne';
$route['SaveConfigProduitEpargne'] = 'systemes/SaveConfigProduitEpargne';

$route['SaveConfigGnlEpargne'] = 'systemes/saveConfigGnlEpargne';
$route['SaveConfigInterEpargne'] = 'systemes/saveConfigInterEpargne';
$route['SaveConfigGlEpargne'] = 'systemes/saveConfigGlEpargne';

$route['saveConfigDAT'] = 'systemes/saveConfigDAT';

//transaction 
$route['SaveCompteEpargne'] = 'epargne/saveCompteEpargne';
$route['getCompteEpargne'] = 'epargne/getCompteEpargne';
$route['getCmpt'] = 'epargne/getCmpt';
$route['findCmpt'] = 'epargne/findCompte';
$route['SaveTransactionEpargne'] = 'epargne/saveTransaction';
$route['SaveVirement'] = 'epargne/saveVirement';
$route['rapportTransaction'] = 'epargne/rapportTransaction';

//route pour chercher compte épargne par code client et produit
$route['getCompteEpargneParCode'] = 'epargne/getCompteEpargneParCode';

$route['findCompteEpargne'] = 'epargne/findCompteEpargne';
$route['getTransComptEp'] = 'epargne/getTransComptEp';

//interêt
$route['calculInteretEpargne'] = 'epargne/calculInteret';
$route['getInteret'] = 'epargne/getInteret';

//fermer compte
$route['fermerCompteEpargne'] = 'epargne/fermerCompte';

//rapport Epargne
$route['getSoldeEpargne'] = 'epargne/getSoldeEpargne';
$route['getSoldeMinMaxEpargne'] = 'epargne/getSoldeMinMax';
$route['rapportEpargneProduit'] = 'epargne/rapportEpargneProduit';
$route['getReleverCompteEpargne'] = 'epargne/getReleverCompte';
$route['getNouveauCompteEpargne'] = 'epargne/getNouveauCompte';
$route['getCompteFermer'] = 'epargne/getCompteFermer';
$route['getFicherJournalier'] = 'epargne/getFicherJournalier';
$route['getEtatCompte'] = 'epargne/getEtatCompte';


//DAT
$route['ouvrirCompteDAT'] = 'epargne/ouvrirCompteDAT';
$route['retraitDAT'] = 'epargne/retraitDAT';
$route['supprimerDAT'] = 'epargne/supprimerDAT';
$route['getRapportDAT'] = 'epargne/getRapportDAT';
$route['getRapportEcheanceDAT'] = 'epargne/getRapportEcheanceDAT';
$route['getRapportDATSupprimer'] = 'epargne/getRapportDATSupprimer';


$route['calculDateEcheancheDAT'] = 'epargne/calculDateEcheancheDAT';
$route['getDetailProduitEpargne'] = 'epargne/getDetailProduitEpargne';
$route['calculMontantDAT'] = 'epargne/calculMontantDAT';
$route['findCompteDAT'] = 'epargne/findCompteDAT';
$route['getCompteDAT'] = 'epargne/getCompteDAT';


/*****************************************************/
				//COMPTABILTE 	
/*****************************************************/
$route['afficheGrandLivre'] = 'comptabilite/afficheGrandLivre';
$route['SaveCompteCompta'] = 'comptabilite/saveCompte';
$route['findCmptCompta'] = 'comptabilite/getComptesActif';
$route['SaveTransactionCompta'] = 'comptabilite/saveTransaction';


//Grand Livre
$route['listGrandLivre'] = 'chargement/listGrandLivre';
$route['findGranLivre'] = 'comptabilite/findGranLivre';
$route['afficheGrandLivreAuxiliaire'] = 'comptabilite/granLivreAuxiliaire';

$route['getGrandLivreBudget'] = 'chargement/getGrandLivreBudget';
$route['getGrandLivreParBudget'] = 'chargement/getGrandLivreParBudget';
$route['getGrandLivreAnalytique'] = 'chargement/getGrandLivreAnalytique';

//Journal
$route['getJournal'] = 'comptabilite/getJournal';
$route['getJournalDivers'] = 'comptabilite/getJournalDivers';

//Transaction comptable(opération view)
$route['getOperationView'] = 'comptabilite/getOperationView';
$route['addOperationView'] = 'comptabilite/addOperationView';
$route['viderOperationView'] = 'comptabilite/viderOperationView';


$route['getBalance'] = 'comptabilite/balance';
$route['getBilan'] = 'comptabilite/bilan';
$route['getResultatCompta'] = 'comptabilite/resultatCompta';

$route['getCompteDistinct'] = 'comptabilite/getCompteDistinct';
//$route['getJournalCaisse'] = 'comptabilite/getJournalCaisse';
$route['getMouvementCompteCompta'] = 'comptabilite/getMouvement';

$route['saveBudget'] = 'comptabilite/saveBudget';
$route['getBudget'] = 'comptabilite/getBudget';
$route['getAnalytique'] = 'comptabilite/getAnalytique';

$route['findAccount'] = 'comptabilite/getAccount';
$route['findBudget'] = 'comptabilite/findBudget';

$route['saveOperationDivers'] = 'comptabilite/saveOperationDivers';


//Declassement
$route['declasserCredit'] = 'comptabilite/declasserCredit';
$route['saveDeclassement'] = 'comptabilite/saveDeclassement';

//Budget et Analytique
$route['findCodeBudget'] = 'comptabilite/findCodeBudget';
$route['findCodeAnalytique'] = 'comptabilite/findCodeAnalytique';


/************************************************************************/
/************************** CONFIGURATION *******************************/
/************************************************************************/


//ROUTE POUR LE MENU SYSTEME
//produit
$route['ProduitCredit'] = 'systemes/produitCredit';
$route['ajoutProduit'] = 'systemes/saveproduit';
$route['deleteProduitCredit'] = 'systemes/deleteProduitCredit';

$route['ConfigCreditIndividuel'] = 'systemes/configCreditIndividuel';
$route['ConfigCreditGroupes'] = 'systemes/configCreditGroupe';
$route['ConfigFraisCredit'] = 'systemes/configFraisCredit';
$route['ConfigGeneralCredit'] = 'systemes/ConfigGeneralCredit';
$route['ConfigGLCredit'] = 'systemes/ConfigGLCredit';
$route['saveConfigGarantieCredit'] = 'systemes/saveConfigGarantieCredit';
$route['saveConfigPenaliteCredit'] = 'systemes/saveConfigPenaliteCredit';

//COMPTES
$route['AjoutCompteCaisse'] = 'systemes/AjoutCompteCaisse'; 
$route['SaveConfigCompta'] = 'systemes/SaveConfigCompta'; 

//AGENCE
$route['ajoutPersonnels'] = 'systemes/ajoutPersonnels';

//Utilisateurs
$route['chargeUser'] = 'chargement/getAllUtilisateur';
$route['saveUser'] = 'systemes/saveUser';
$route['deleteUser'] = 'systemes/deleteUser';



/*************************************************************/

//ROUTE PAR DEFAUT (INDEX)
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
