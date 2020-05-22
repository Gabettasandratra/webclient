<!-- 
<div class="container" id="dialog" style="display:none;">style="background-color: #F8F8FF;" title="Demande crédit" style="margin-top: 1%;"

 -->
 <div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
  <div class="x_panel tile" id="dialog" style="display:none;">
    <div class="x_title">
      <h2>Demande crédit</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Settings 1</a>
              <a class="dropdown-item" href="#">Settings 2</a>
            </div>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

          <br/><!-- <br> -->
            <h5 id="TeteCard" style="text-align: center;" class="card-header bg-light"></h5><!-- card-header bg-light -->  
            <br>
            <hr>

            <div class="row">
              <div class="col-6">
              </div>
              <div class="col-6"><!-- style="margin-right:15px;" -->
                 <div style="text-align: right">
                    <button type="button" id="openModalClient" class="btn btn-info btn-sm"><i class="fa fa-recycle"></i> Chager client</button>
                    &nbsp; <button type="button" id="btnPrecedent" style="display: none;"  class="btn btn-primary btn-sm"><i class="fa fa-backward"></i> Precedent</button>&nbsp;
                    <button type="button" id="btnPrecedent2" style="display: none;"  class="btn btn-primary btn-sm"><i class="fa fa-backward"></i> Precedent</button>&nbsp;
                    <button type="button" id="btnPrecedent3" style="display: none;"  class="btn btn-primary btn-sm"><i class="fa fa-backward"></i> Precedent</button>&nbsp;
                   
                    <button type="button" id="btnAvancer" class="btn btn-primary btn-sm">Suivant <i class="fa fa-forward"></i></button>&nbsp;
                    <button type="button" id="btnAvancer2" style="display: none;" class="btn btn-primary btn-sm">Suivant <i class="fa fa-forward"></i></button>
                    <button type="button" id="btnAvancer3" style="display: none;" class="btn btn-primary btn-sm">Suivant <i class="fa fa-forward"></i></button>
                    &nbsp; <button type="button" id="btnSave" style="display: none;" class="btn btn-primary btn-sm" disabled><i class="fa fa-save"></i> Enregistrer</button>
                  </div>    
                   <!--  <button id="btnChange" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button> -->
                 </div>
            </div>
           <form id="myForm" action="" method="post">

                <div class="card mt-3 tab-card">
                  <div class="card-header tab-card-header">
                   
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Ecriture de demande crédit</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Calendrier prévu de remboursement</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Montant crédit par membres</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">Finalisation demande</a>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-content" id="myTabContent">

                    <!-- ECRITURE DEMANDE -->
                    <div class="tab-pane fade show active p-3" style="margin-top: 20px;" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="row">
                        <div class="col-md-4">

                              <div class="form-group">
                                <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                           
                                <div class="form-group row">
                                    <label for="idProduit" class="col-sm-6">Produit: <span id="champObligatoir">*</span></label>
                                    <div class="col-sm-6">
                                      <select name="idProduit" class="form-control form-control-sm" id="idProduit">
                                            <option value=""></option>
                                            <?php foreach($listProduit->Listes_ProduitCredit as $value) :?>
                                              <option value="<?= $value->idProdCredit ?>"><?= $value->nomProdCredit ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                    </div> 
                                 </div>

                                <div class="form-group row">
                                  <label for="date_demande" class="col-form-label col-sm-6">Date demande: <span id="champObligatoir">*</span></label>
                                  <div class="col-sm-6">
                                     <input type="date" class="form-control form-control-sm" name="date_demande" id="date_demande">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <label for="montant_demande" class="col-sm-6">Motant: <span id="champObligatoir">*</span></label>
                                    <div class="col-sm-6">
                                      <input type="number" style="text-align:right" id='montant_demande' value="" step='100' class="form-control form-control-sm col-12" name="montant_demande">
                                    </div>
                                 </div>  

                                  <div class="form-group row" >
                                      <label for="but_credit" class="col-form-label col-sm-6">But de crédit:</label>
                                      <div class="col-sm-6">
                                        <select name="but_credit" class="form-control form-control-sm" id="but_credit">
                                            <option value="Economique">Economique</option>                                   
                                            <option value="Social">Social</option>                                   
                                      </select>
                                      </div>
                                   </div>  

                                <div class="form-group row">
                                  <label for="nom_agent" class="col-sm-6">Agent de crédit: <span id="champObligatoir">*</span></label>
                                  <div class="col-sm-6">
                                    <!-- <input type="text" id='nom_agent' class="form-control form-control-sm" name="nom_agent" > -->
                                    <select name="nom_agent" class="form-control form-control-sm" id="nom_agent">
                                        <option></option>
                                          <?php foreach($listAgent->resultat as $vals) :?>
                                            <option value="<?= $vals->idUtilisateur ?>"><?= $vals->nomUtilisateur ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                  </div> 
                               </div> 

                                <div class="form-group row">
                                  <label for="soldeEpargne" class="col-form-label col-sm-6" >Solde d'épargne réquis:</label>
                                    <div class="col-sm-6">                                      
                                      <input type="hidden" id='tauxSoldeRequi' name="tauxSoldeRequi">
                                      <input type="number" id='soldeEpargne' class="form-control form-control-sm" name="soldeEpargne" disabled>
                                    </div>
                                 </div>                                           
                               
                                </div>        
                        
                              </div>

                              <div class="col-md-4">
                              
                                <div class="form-group">                                  
                                    
                                   <div class="form-group row">
                                      <label for="commission" class="col-form-label col-sm-6">Commission:</label>
                                      <div class="col-sm-6">
                                       <input type="number" style="text-align:right" id='commission' class="form-control form-control-sm" name="commission" >
                                      </div>
                                   </div> 

                                      <div class="form-group row">
                                    <label for="tauxAnnuel" class="col-sm-6">Taux d'interet annuel:<span id="champObligatoir">*</span></label>
                                    <div class="col-sm-6">
                                      <input type="number" id='tauxAnnuel' class="form-control form-control-sm" name="tauxAnnuel" >
                                    </div>
                                 </div>  

                                 <div class="form-group row">
                                    <label for="nbTranche" class="col-sm-6">Nombre de tranche:<span id="champObligatoir">*</span></label>
                                    <div class="col-sm-6">
                                      <input type="number" id='nbTranche' class="form-control form-control-sm" name="nbTranche">
                                    </div>
                                 </div> 

                                  <div class="form-group row">
                                    <label for="typeTranche" class="col-sm-6">Type de tranche: <span id="champObligatoir">*</span></label>
                                    <div class="col-sm-6">
                                     <!-- <input type="text" id='typeTranche' class="form-control form-control-sm" name="typeTranche"> -->
                                      <select name="typeTranche" class="form-control form-control-sm" id="typeTranche">
                                            <option value=""></option>
                                            <option value="Quotidiennement">Quotidiennement</option>
                                            <option value="Hebdomadairement">Hebdomadairement</option>
                                            <option value="Quinzaine">Quinzaine</option>
                                            <option value="Mensuellement">Mensuellement</option>                                  
                                      </select>
                                    </div>
                                 </div>

                                  <div class="form-group row">
                                      <label for="diffPaie" class="col-sm-6">Différer de paiement: </label>
                                      <div class="col-sm-6">
                                        <input type="number" id='diffPaie' class="form-control form-control-sm" name="diffPaie" >
                                      </div>
                                   </div> 

                                  <div class="form-group row">
                                    <label for="modeCalcul" class="col-form-label col-sm-6" >Mode calcul interet:</label>

                                    <div class="col-sm-6">
                                      <select name="modeCalcul" class="form-control form-control-sm" id="modeCalcul">
                                          <option value=""></option>
                                          <option value="Taux Fixe">Taux Fixe</option>
                                          <option value="Amortissement dégressif">Amortissement dégressif</option>
                                          <option value="Solde dégressif escompté">Solde dégressif escompté</option>
                                      </select>
                                      <!-- <input type="text" id='modeCalcul' class="form-control form-control-sm" name="modeCalcul" > -->
                                    </div>
                                 </div>                       

                              </div>  
                            </div>


                           <div class="col-md-4">
                            <input type="hidden" id='codeInds' name="codeInds">
                            <input type="hidden" id='codeC' name="codeC">
                            <input type="hidden" id='codeGroupe' name="codeGroupe">                            
                            <input type="hidden" id='produitEpargne'name="produitEpargne">
              
                              <div class="form-group row">
                                <label for="montMin" class="col-form-label col-sm-6">Montant minimum crédit:</label>
                                <div class="col-sm-6">
                                 <input type="number" style="text-align:right" id='montMin' class="form-control form-control-sm" name="montMin" disabled>
                                </div>
                             </div> 

                              <div class="form-group row">
                                <label for="montMax" class="col-form-label col-sm-6">Montant maximum crédit:</label>
                                <div class="col-sm-6">
                                 <input type="number" style="text-align:right" id='montMax' class="form-control form-control-sm" name="montMax" disabled>
                                </div>
                             </div> 

                              <div class="form-group row">
                                <label for="periodeMin" class="col-form-label col-sm-6">Période minimum crédit:</label>
                                <div class="col-sm-6">
                                 <input type="number" style="text-align:right" id='periodeMin' class="form-control form-control-sm" name="periodeMin" disabled>
                                </div>
                             </div> 

                              <div class="form-group row">
                                <label for="periodeMax" class="col-form-label col-sm-6">Période maximum crédit:</label>
                                <div class="col-sm-6">
                                 <input type="number" style="text-align:right" id='periodeMax' class="form-control form-control-sm" name="periodeMax" disabled>
                                </div>
                             </div> 
                          </div>

                      </div>
                  </div>

                   <!-- CALENDRIER REMBOURSEMENT -->
                  <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                      <div class="row">
                        <div class="col-7">
                           <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
                          <div id="PageAimprimer" class="table-responsive-sm col-12" style="padding-right=25px;padding-left=25px;">
                            <table class="table table-fixed table-bordered table-hover table-sm">
                               <caption>Calendrier due</caption>
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">N° Crédit </th>
                                    <th scope="col">Date échéance </th>
                                    <th scope="col">Principal </th>
                                    <th scope="col">Intérêt </th>
                                    <th scope="col">Pénalité </th>
                                    <th scope="col">Commission </th>
                                    <th scope="col">Total </th>
                                    <th scope="col">Tranche </th>
                                  </tr>
                                </thead>
                                <tbody id="showCalendrier">
                  
                                </tbody>
                                <tfoot id="showFoot">

                                </tfoot>
                              </table>
                            </div>

                        </div>
                        <div class="col-5">
                          <legend class="forms">Modification tranche</legend>
                           <hr class="forms">
                           <br>
                          <!--  <form id="formChangeCal" action="" method="post"> -->
                                 <input type="hidden" id='numIndex' class="form-control form-control-sm" name="numIndex">

                                  <div class="form-group row forms">
                                    <label for="numTranch" class="col-sm-4">N° tranche: </label>
                                    <div class="col-sm-5">
                                      <input type="text" id='numTranch' class="form-control form-control-sm" name="numTranch" disabled>
                                    </div>
                                 </div>

                                 <div class="form-group row forms">
                                    <label for="dateEcheanche" class="col-sm-4">Tranche: </label>
                                    <div class="col-sm-5">
                                      <input type="text" id='dateEcheanche' class="form-control form-control-sm" name="dateEcheanche" >
                                    </div>
                                 </div> 
                                 <div class="form-group row forms">
                                    <label for="principal" class="col-sm-4">Principal: </label>
                                    <div class="col-sm-5">
                                      <input type="text" id='principal' class="form-control form-control-sm" name="principal" >
                                    </div>
                                 </div> 

                                  <div class="form-group row forms">
                                    <label for="interet" class="col-sm-4">Intérêt: </label>
                                    <div class="col-sm-5">
                                      <input type="text" id='interet' class="form-control form-control-sm" name="interet" >
                                    </div>
                                 </div> 

                                  <div class="form-group row forms">
                                    <label for="Modcommission" class="col-sm-4">Commission: </label>
                                    <div class="col-sm-5">
                                      <input type="text" id='Modcommission' class="form-control form-control-sm" name="Modcommission" >
                                    </div>
                                 </div> 

                                 <div class="form-group row forms">
                                  <div class="col-6"> </div>
                                  <div class="col-5" style="margin-left: 2%;">
                                    <button type="button" id="modifierTranche" class="btn btn-info btn-sm">
                                      <i class="fa fa-edit"></i> Modfier</button>
                                  </div>
                                 </div>
                           <!-- </form> -->

                        </div>
                      </div>

                    </div>   

                    <!-- MONTANT CREDIT PAR MEMBRE -->
                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                           <!--  <legend class="forms">Modification tranche</legend>
                             <hr class="forms"> -->
                        <input type="hidden" id='numCred' name="numCred">
                                 
                        <div class="row">
                          <div class="col-5">
                             <br>

                            <div class="form-group row">
                               <label for="nomMembre" class="col-sm-4 col-form-label">Nom membre:</label>
                                <div id="affP" class="col-sm-6">
                                  <select name="nomMembre" class="form-control form-control-sm" id="nomMembre">
                                    <option></option>
                                   </select> 
                                </div>
                             </div>

                             <div class="form-group row">
                                <label for="principalMembre" class="col-sm-4">Principal: </label>
                                <div class="col-sm-6">
                                  <input type="number" id='principalMembre' class="form-control form-control-sm" name="principalMembre" >
                                </div>
                             </div>

                              <div class="form-group row forms">
                                <label for="tauxIntMembre" class="col-sm-4">Taux d'intérêt: </label>
                                <div class="col-sm-6">
                                  <input type="number" style="float: right;" id='tauxIntMembre' class="form-control form-control-sm col-sm-4" name="tauxIntMembre" >
                                </div>
                             </div> 

                              <div class="form-group row">
                                <label for="interetMembre" class="col-sm-4">Intérêt: </label>
                                <div class="col-sm-6">
                                  <input type="number" id='interetMembre' class="form-control form-control-sm" name="interetMembre" >
                                </div>
                             </div>

                              <div class="form-group row">
                                <label for="totalMontantMembre" class="col-sm-4">Totaux: </label>
                                <div class="col-sm-6">
                                  <input type="number" id='totalMontantMembre' value="0" class="form-control form-control-sm" name="totalMontantMembre" disabled>
                                </div>
                             </div>

                              <div class="form-group row">
                                <label for="intr" class="col-sm-4">&nbsp; </label>
                                <div class="col-sm-6">
                                    <button type="button" id="btnAddMontantMembre" 
                                    style="float:right;" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i>  Ajouter</button>
                                </div>
                             </div> 



                          </div>
                          <div class="col-6">
                            <br>
                           <!--   <div class="form-group row">
                                <label for="pourcentageEpMembre" class="col-sm-4">Pourcentage épargne avec la tranche: </label>
                                <div class="col-sm-5">
                                  <input type="text" id='pourcentageEpMembre' class="form-control form-control-sm" name="pourcentageEpMembre" >
                                </div>
                             </div>

                             <div class="form-group row">
                                <label for="montantEpMembre" class="col-sm-4">Montant épargne avec la tranche: </label>
                                <div class="col-sm-5">
                                  <input type="text" id='montantEpMembre' class="form-control form-control-sm" name="montantEpMembre">
                                </div>
                             </div> -->
                             <legend>Information compte épargne du client</legend>
                             <hr><br>
                              <div class="form-group row">
                                <label for="comptEpMembre" class="col-sm-4">Compte épargne: </label>
                                <div class="col-sm-5">
                                  <select name="comptEpMembre" class="form-control form-control-sm" id="comptEpMembre">
                                    <option></option>
                                   </select> 
                                  <!-- <input type="text" id='comptEpMembre' class="form-control form-control-sm" name="comptEpMembre" disabled> -->
                                </div>
                             </div>

                              <div class="form-group row">
                                <label for="soldeEpMembre" class="col-sm-4">Solde: </label>
                                <div class="col-sm-5">
                                  <input type="text" id='soldeEpMembre' class="form-control form-control-sm" name="soldeEpMembre" disabled>
                                </div>
                             </div> 

                             <div class="form-group row">
                                <label for="deviseEp" class="col-sm-4">Devise: </label>
                                <div class="col-sm-5">
                                  <input type="text" id='deviseEp' class="form-control form-control-sm" name="deviseEp" disabled>
                                </div>
                             </div>

                          </div>
                        </div>
                        <br>
                        <hr>
                        <div class="col-12">
                             <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
                            <div class="table-responsive-sm col-12">
                              <table class="table table-fixed table-hover table-sm">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">N° Crédit</th>
                                      <th scope="col">Membre</th>
                                      <th scope="col">Principal </th>
                                      <th scope="col">Intérêt </th>
                                      <th scope="col">Taux intérêt </th>
                                    </tr>
                                  </thead>
                                  <tbody id="showMontantMembre">
                    
                                  </tbody>
                                </table>
                              </div>
                              <br>                             
                          </div>

                    </div>     

                      <!-- GARANTIE CREDIT -->
                      <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                       <br>
                        <div class="col-12">    
                          <div class="col-12">    
                             <div class="row"> 
                                <div class="col-6">
                                   <legend>Garantie crédit</legend>
                                   <input type="hidden" id='numCredGar' class="form-control form-control-sm" name="numCredGar">
                                   <input type="hidden" id="monts" class="form-control form-control-sm" name="monts">  

                                   <input type="hidden" id="validGarE" value="0" name="validGarE">                          
                                   <input type="hidden" id="validGarM" value="0" name="validGarM">  

                                   <input type="hidden" id="percE" name="percE">                          
                                   <input type="hidden" id="percM" name="percM">                                  
                                </div>
                                <div class="col-6 row">
                                  <div class="col-6">
                                   <legend id="affGaratieM"></legend>
                                  </div>
                                  <div class="col-6">
                                   <legend id="affGaratieE"></legend>
                                  </div>
                                  <!--   <button type="button" id="AnnulPercent" style="display: none;" class="btn btn-danger btn-sm">Annuler</button>       
                                    <button type="button" style="float:right;" id="valdPercent" class="btn btn-primary btn-sm">Valider garantie</button> -->
                                </div>
                              </div>
                             <hr>
                             <br>
                             
                              <!--  <div class="col-12">   </div> -->
                            
                                <table>
                                  <tr>
                                    <th><label for="typeGar" class="col-sm-12">Type:<span id="champObligatoir">*</span></label></th>
                                    <th><label id="affNomGartie" for="nomGar" class="col-sm-12">Nom garantie:</label></th>
                                    <th><label id="affMontantGartie" for="valGar" class="col-sm-12">Valeur:</label></th>
                                    <th><label id="affTauxGartie" for="tauxGar" class="col-sm-12">Taux (%):</label></th>
                           
                                  </tr>
                                  <tr>
                                    <td> 
                                      <select name="typeGar" class="form-control form-control-sm col-12" id="typeGar">
                                              <option value=""></option>                                   
                                              <option value="Materiel">Matériel</option>                                  
                                              <option value="Epargne">Epargne</option>                                   
                                        </select>
                                      </td>
                                    <td><input type="text" id='nomGar' class="form-control form-control-sm" name="nomGar"></td>
                                    <td> <input type="number" id='valGar' class="form-control form-control-sm" name="valGar"></td>
                                    <td>
                                      <input type="number" id='tauxGar' class="form-control form-control-sm col-10" name="tauxGar"></td>
                                    <td>
                                      &nbsp;&nbsp;&nbsp;<button type="button" id="addGarantie" class="btn btn-primary btn-sm">Ajouter</button>
                                    </td>
                                  </tr>
                                </table>                          

                            <br><br>
                           <div id="PageAimprimer2" class="table-responsive-sm col-12" style="padding-right=25px;padding-left=25px;">
                            <table class="table table-fixed table-bordered table-hover table-sm">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">N° Crédit </th>
                                    <th scope="col">Type garantie </th>
                                    <th scope="col">Garantie </th>
                                    <th scope="col">Valeur </th>
                                    <th scope="col">Taux</th>
                                  </tr>
                                </thead>
                                <tbody id="showGarantie">
                  
                                </tbody>
                                <tfoot id="showFootGarantie">

                                </tfoot>
                              </table>
                            </div>

                        </div>

                        </div>
                      
                  </div>           

                </div>
              </div> 
           <!--    <br/> -->    
          </form>
          <br/>
          <br/>
        </div>
      </div>
    </div>
  </div>

<!-- EN FORMULAIRE DEMANDE -->

<!-- MODAL CLIENT -->
<div class="modal fade" id="modalClient" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Listes clients</h5>
        </div>
        <div class="modal-body">             
            
         <table id="tab" class="table table-fixed table-striped table-hover table-sm">
            <thead class="thead-light">
              <tr>
                <th scope="col">Code client</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="showClient">

            </tbody>
          </table> 
       <br>
        </div>
        <div class="modal-footer">
          <button id="btn-fer" type="button" class="btn btn-sm   btn-danger"><i class="fa fa-arrow-circle-right"></i> Fermer</button>
        </div>
      </div>
    </div>
  </div>

    <!-- MODAL CLIENT -->
<div class="modal fade" id="modalInfoCli" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5><i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> Information sur le client</h5>
        </div>
        <div class="modal-body">             
          <label id="bodyInfo" style="font-size: 17px !important"></label> <br>
          <span style="font-size: 15px !important">Voulez vous continuer?</span>
        </div>
        <div class="modal-footer">
          <button id="btn-accept" type="button" class="btn btn-success">Oui</button>
          <button id="btn-refuse" type="button" class="btn btn-secondary">Non</button>
        </div>
      </div>
    </div>
  </div>

<div id="modalTrans" title="Demande crédit groupe">             
      <br>
      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

      </div>                                             
      <br>
    <div class="form-group row"> 
          <label id="labCode" class="col-sm-3" for="codeCli">Code groupe: <span id="champObligatoir">*</span> </label>
          <div class="col-sm-6">
            <input type="text" name="codeGrp" placeholder="Saisir n° client Groupe" class="form-control form-control-sm col-12" id="codeGrp" required>           
          </div>
          <div class="col-sm-3">
            <button id="btn-find" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
          </div>
      </div>   
  <div class="modal-footer">
    <button id="btn-suivant" type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-right"></i> Suivant</button>
  </div>
   
</div>

<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.print.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Responsive/js/dataTables.responsive.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/jszip/jszip.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/pdfmake/pdfmake.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/pdfmake/vfs_fonts.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.html5.min.js');?>"></script>


 <!-- jQuery -->
  <script src="<?php echo base_url('/assets/vendors/jquery/dist/jquery.min.js');?>"></script>
      <!-- Bootstrap -->
 <script src="<?php echo base_url('/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('/assets/vendors/fastclick/lib/fastclick.js');?>"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url('/assets/vendors/nprogress/nprogress.js');?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('/assets/vendors/iCheck/icheck.min.js');?>"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('/assets/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/gauge.js/dist/gauge.min.js');?>"></script>

   <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
       <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>

<script text="javascript">
$(function(){ 

  //Controle modal
  $( "#modalTrans" ).dialog({
    autoOpen: true,
    width: 600,
    height: 250,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "explode",
      duration: 800
    }
  });

  function keyPress (e) {
  e = e || window.event;
  var c = e.keyCode;
  return c>=48 && c<=55;
  }

  nb = document.getElementById('commission');
  nb.onkeypress = keyPress;
  mont = document.getElementById('montant_demande');
  mont.onkeypress = keyPress;
  dif = document.getElementById('diffPaie');
  dif.onkeypress = keyPress;


  $('#openModalClient').click(function(){
     //$('#modalInfoCli').modal('show');
     $('#dialog').attr('style','display:none;');
  });

/*$('#modalTrans').modal('show');*/
$('#montant_demande').keyup(function(){
  var mont = parseFloat($('input[name=montant_demande]').val());
  var tauxSoldeRequi = parseFloat($('input[name=tauxSoldeRequi]').val());
  var total = (mont * tauxSoldeRequi)/100;
  console.log('Total solde requis '+total);
  $('input[name=soldeEpargne]').val(total);
  $('input[name=monts]').val(mont);

});

//recuperation calendrier après modification
function getAllCal(){
   $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url(); ?>index.php/getCalendrier',
        dataType:'json',
        async: false,
        success: function(response) {
  
            var html;
            var sh;
            var i;
            var c = response;
            var tot = 0;
            var totG = 0;
            var totP = 0;
            var totI = 0;
            var totPen = 0;
            var totCom = 0;
            var t = 1;
              var html;
              for (i = 0; i < c.length; i++) {
                $('input[name=numCredGar]').val(c[0].numCred);

                tot = parseFloat(c[i].montantPrinc) + parseFloat(c[i].montantInt)
                 + parseFloat(c[i].montantPenal) + parseFloat(c[i].montantComm) ;
                totG = totG + tot;
                totP = totP + parseFloat(c[i].montantPrinc);
                totI = totI +  parseFloat(c[i].montantInt);
                totPen = totPen + parseFloat(c[i].montantPenal);
                totCom = totCom + parseFloat(c[i].montantComm) ;
                  html += '<tr>' +
                  '<td>' + c[i].numCred + '</td>' +
                  '<td>' + c[i].date + '</td>' +
                  '<td>' + c[i].montantPrinc + '</td>' +
                  '<td>' + c[i].montantInt + '</td>' +
                  '<td>' + c[i].montantPenal + '</td>' +
                  '<td>' + c[i].montantComm + '</td>' +
                  '<td>' + tot+ '</td>' +
                  '<td>' + c[i].rowId + '</td>' +
                  '</tr>';
                  t++;//contenteditable="true"
              }
              var totTranche = t-1;
              sh += '<tr>'+
               '<td>Total</td>' +
               '<td></td>' +
               '<td>' +totP + '</td>' +
               '<td>' +totI + '</td>' +
               '<td>' +totPen+ '</td>' +
               '<td>' +totCom+ '</td>' +
               '<td>' +totG+ '</td>' +
               '<td>' +totTranche+ '</td>' +
               '</tr>';
              $('#showFoot').html(sh);
              $('#showCalendrier').html(html);

              $('#two-tab').removeClass().addClass('nav-link active');
              $('#one-tab').removeClass().addClass('nav-link disabled');
              $('#three-tab').removeClass().addClass('nav-link disabled');
              $('#four-tab').removeClass().addClass('nav-link disabled');


              $('#one').removeClass().addClass('tab-pane fade p-3');
              $('#three').removeClass().addClass('tab-pane fade p-3');
              $('#four').removeClass().addClass('tab-pane fade p-3');
              $('#two').removeClass().addClass('tab-pane fade show active p-3');

              $('#btnPrecedent').attr('style', 'display: bloc');
              $('#btnPrecedent2').attr('style', 'display: none');
              $('#btnPrecedent3').attr('style', 'display: none');
              $('#btnAvancer').attr('style', 'display: none');
              $('#btnAvancer3').attr('style', 'display: none');
              $('#btnAvancer2').attr('style', 'display: bloc');
              $('#btnSave').attr('style', 'display: none');
              $('#openModalClient').attr('style', 'display: none');

        },
        error: function(){
          $('#showCalendrier').html('donnée vide');
           $('#showFoot').html('');
        }
    });
}

//Modification calendrier
$('#modifierTranche').click(function(){

  var data = $('#myForm').serialize();

   $.ajax({
        type:'ajax',
        method: "post",
        url: '<?php echo base_url(); ?>index.php/modifCalendrierPaie',
        dataType:'json',
        data: data,
        async: false,
        success: function(response) {
            
            if(response.success){
              getAllCal();
            }
            
        },
        error: function(){
          alert('Erreurrrrrrrrrrrr!!')
        }
    });

});

//Suppression calendrier
viderCal();
function viderCal(){
     $.ajax({
        type:'ajax',
        url: '<?php echo base_url(); ?>index.php/viderCalendrierPaie',
        dataType:'json',
        async: false,
        success: function(response) {
            
            if(response.success){
              //alert('calendrier vide');
            }
            
        },
        error: function(){
          alert('Erreurrrrrrrrrrrr!!')
        }
    });
}


function getDataCalendrier(){

  var listTable = new Array();

   $('#showCalendrier').find('tr').each(function(i,el){
      var tds = $(this).find('td'),
      attNum = tds.eq(0).text(),
      attdate = tds.eq(1).text(),
      attPrinc = tds.eq(2).text(),
      attInt = tds.eq(3).text();
   });

   listTable[i] = attNum + '~' + attdate;
   alert(listTable[i] + ' - ' + i);

}

$('#btnSave').click(function(){

  //var url = $('#myForm').attr('action');
  var data = $('#myForm').serialize();
   $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/demandeCreditGroupe',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {

                    $('#myForm')[0].reset();   
                    viderCal();
                    viderGaratieView();
                    videMontantMembre();
                    getMontantMembre();
                    chargeGarantie();
                    getAllCal();                 
                     console.log(response);
                      $.notify({            
                          message: 'Enregistrement reuissit!'
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      }); 
                }
                else {
                    console.log(response);
                    $.notify({            
                        message: 'Erreur enregistrement!'
                    },{
                        type: 'warning',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    }); 
                }
            },
            error: function(){
              console.log(response);
                $.notify({            
                    message: 'Erreur!'
                },{
                    type: 'danger',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                }); 
            }
        });

});

//BOUTTON IMPRIMER

$('#btnImprimer').click(function(){

  $('#modalAfficheCalendrier').modal('hide');
  imprimer('PageAimprimer');

});

//Fonction additional
  choixClients();
  utils(); 

//FONCTION POUR FAIRE IMPRESSION

function imprimer(divName) {
   var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   $('#modalAfficheCalendrier').modal('hide');
}


calculGarantie();
function calculGarantie(){

    $('#valGar').keyup(function(){

      var valeur = parseFloat($('input[name=valGar]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
    //pourcentage de garatie du garant 1
      var taux = (valeur * 100) / mont ;

      $('input[name="tauxGar"]').val(taux);

    /*  if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }*/
    });

}

 $('#showCalendrier').on('click','tr',function(e){
      //juste séparer les champs par le tab
      var array = $(e.currentTarget)[0].innerText.split('\t');
      console.log(array);
      $('#numIndex').val(array[7]);
      $('#numTranch').val(array[7]);
      $('#dateEcheanche').val(array[1]);
      $('#principal').val(array[2]); 
      $('#interet').val(array[3]); 
      $('#Modcommission').val(array[5]); 

      //$( this ).addClass('bg-primary');
      
  });

 $('#showCalendrier').on('mouseover','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).addClass('bg-primary');
  });
  $('#showCalendrier').on('mouseout','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).removeClass();
  });

  //MODAL CHOIX CODE CLIENT


changerTab();
   //FUNCTION CHANGER TAB

var strs = '';
$('#idProduit').change(function() {  
 $( "#idProduit option:selected" ).each(function() {
      strs = $( this ).attr('value');
    });  
});

  function changerTab(){
//MENU DEMANDE CREDIT
  $('#btnAvancer').click(function(){

    var data = $('#myForm').serialize();

    var dates = $('input[name=date_demande]');
    var montant = $('input[name=montant_demande]');
    var but = $('input[name=but_credit]');
    var but2 = $('input[name=but_creditSos]');

    var result = "";

    if(dates.val()== ''){
      $('#date_demande').addClass('is-invalid');
    }else{
      $('#date_demande').removeClass('is-invalid');
      result +='1';
    }
    
    if(montant.val() == ''){
      $('#montant_demande').addClass('is-invalid');
    }else{
      $('#montant_demande').removeClass('is-invalid');
      result +='2';
    }

    if(strs == ''){
      $('#idProduit').addClass('is-invalid');
    }else{
      $('#idProduit').removeClass('is-invalid');
      result +='3';
    }

    if(result == '123'){

       var montant_demande = parseFloat($('input[name=montant_demande]').val()); 
       var montMin = parseFloat($('input[name=montMin]').val());           
       var montMax = parseFloat($('input[name=montMax]').val());  
       //><
       if(montant_demande<montMin){
          alert('Montant demander est inférieur au montant minimum autoriser');
       }else if(montant_demande > montMax){
          alert('Montant demander est superieur au montant maximum autoriser');
       }else{
          avancer(data);
       } 

    }else{
     $.notify({            
          message: 'Veuillez remplir les formulaires coloré en rouge!'
      },{
          type: 'warning',
          animate: {
              enter: 'animated fadeInLeft',
              exit: 'animated fadeOutUp'
          }
      }); 
    }
  });

    function avancer(data){      
      $.ajax({
      type:'ajax',
      method: "post",
      url: '<?php echo base_url(); ?>index.php/ecritureDemande',
      dataType:'json',
      data: data,
      async: false,
      success: function(response) {

          var html;
          var sh;
          var i;
          var c = response;
          var tot = 0;
          var totG = 0;
          var totP = 0;
          var totI = 0;
          var totPen = 0;
          var totCom = 0;
          var t = 1;
            var html;
            for (i = 0; i < c.length; i++) {

              tot = parseFloat(c[i].montantPrinc) + parseFloat(c[i].montantInt)
               + parseFloat(c[i].montantPenal) + parseFloat(c[i].montantComm) ;
              totG = totG + tot;
              totP = totP + parseFloat(c[i].montantPrinc);
              totI = totI +  parseFloat(c[i].montantInt);
              totPen = totPen + parseFloat(c[i].montantPenal);
              totCom = totCom + parseFloat(c[i].montantComm) ;
              $('input[name=numCred]').val(c[0].numCred);
                html += '<tr>' +
                '<td>' + c[i].numCred + '</td>' +
                '<td >' + c[i].date + '</td>' +
                '<td >' + c[i].montantPrinc + '</td>' +
                '<td >' + c[i].montantInt + '</td>' +
                '<td >' + c[i].montantPenal + '</td>' +
                '<td >' + c[i].montantComm + '</td>' +
                '<td>' + tot+ '</td>' +
                '<td>' + c[i].rowId + '</td>' +
                '</tr>';
                t++;//contenteditable="true"
            }
            var totTranche = t-1;
            sh += '<tr>'+
             '<td>Total</td>' +
             '<td></td>' +
             '<td>' +totP + '</td>' +
             '<td>' +totI + '</td>' +
             '<td>' +totPen+ '</td>' +
             '<td>' +totCom+ '</td>' +
             '<td>' +totG+ '</td>' +
             '<td>' +totTranche+ '</td>' +
             '</tr>';
            $('#showFoot').html(sh);
            $('#showCalendrier').html(html);

            $('#two-tab').removeClass().addClass('nav-link active');
            $('#one-tab').removeClass().addClass('nav-link disabled');
            $('#three-tab').removeClass().addClass('nav-link disabled');
            $('#four-tab').removeClass().addClass('nav-link disabled');


            $('#one').removeClass().addClass('tab-pane fade p-3');
            $('#three').removeClass().addClass('tab-pane fade p-3');
            $('#four').removeClass().addClass('tab-pane fade p-3');
            $('#two').removeClass().addClass('tab-pane fade show active p-3');

            $('#btnPrecedent').attr('style', 'display: bloc');
            $('#btnPrecedent2').attr('style', 'display: none');
            $('#btnPrecedent3').attr('style', 'display: none');
            $('#btnAvancer').attr('style', 'display: none');
            $('#btnAvancer3').attr('style', 'display: none');
            $('#btnAvancer2').attr('style', 'display: bloc');
            $('#btnSave').attr('style', 'display: none');
            $('#openModalClient').attr('style', 'display: none');

          },
          error: function(){
            console.log(response);
            $.notify({            
                message: 'Erreur!'
            },{
                type: 'danger',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            }); 
          }
      });
    }

    $('#btnPrecedent').click(function(){
      viderCal();
      $('#one-tab').removeClass().addClass('nav-link active');
      $('#two-tab').removeClass().addClass('nav-link disabled');
      $('#three-tab').removeClass().addClass('nav-link disabled');
      $('#four-tab').removeClass().addClass('nav-link disabled');

      $('#two').removeClass().addClass('tab-pane fade p-3');
      $('#three').removeClass().addClass('tab-pane fade p-3');
      $('#four').removeClass().addClass('tab-pane fade p-3');
      $('#one').removeClass().addClass('tab-pane fade show active p-3');

      $('#btnAvancer3').attr('style', 'display: none');
      $('#btnAvancer2').attr('style', 'display: none');
      $('#btnPrecedent').attr('style', 'display: none;');      
      $('#btnPrecedent2').attr('style', 'display: none');
      $('#btnPrecedent3').attr('style', 'display: none');

      $('#btnAvancer').attr('style', 'display: bloc');

      $('#btnSave').attr('style', 'display: none');
      $('#openModalClient').attr('style', 'display: bloc');
  });


//MENU MODIFIER CALENDRIER
  $('#btnAvancer2').click(function(){

    $('#three-tab').removeClass().addClass('nav-link active');
    $('#two-tab').removeClass().addClass('nav-link disabled');
    $('#one-tab').removeClass().addClass('nav-link disabled');
    $('#four-tab').removeClass().addClass('nav-link disabled');

    $('#three').removeClass().addClass('tab-pane fade show active p-3');
    $('#one').removeClass().addClass('tab-pane fade p-3');
    $('#two').removeClass().addClass('tab-pane fade p-3');
    $('#four').removeClass().addClass('tab-pane fade p-3');

    $('#btnAvancer3').attr('style', 'display: bloc');
    $('#btnAvancer2').attr('style', 'display: none');
    $('#btnAvancer').attr('style', 'display: none');
    
    $('#btnPrecedent').attr('style', 'display: none;');
    $('#btnPrecedent3').attr('style', 'display: none;');
    $('#btnPrecedent2').attr('style', 'display: bloc');

    $('#btnSave').attr('style', 'display: none');
    $('#openModalClient').attr('style', 'display: none');
    var data = $('input[name="codeGroupe"]').val();
    getMembre(data);
  });
    
    //Menu ajouter montant au membre groupe
    $('#btnPrecedent2').click(function(){
      //viderGaratieView();
      //videMontantMembre();

        $('#two-tab').removeClass().addClass('nav-link active');
        $('#one-tab').removeClass().addClass('nav-link disabled');
        $('#three-tab').removeClass().addClass('nav-link disabled');
        $('#four-tab').removeClass().addClass('nav-link disabled');


        $('#two').removeClass().addClass('tab-pane fade show active p-3');
        $('#one').removeClass().addClass('tab-pane fade p-3');
        $('#three').removeClass().addClass('tab-pane fade p-3');
        $('#four').removeClass().addClass('tab-pane fade p-3');

        $('#btnPrecedent').attr('style', 'display: bloc');
        $('#btnPrecedent2').attr('style', 'display: none');
        $('#btnPrecedent3').attr('style', 'display: none');

        $('#btnAvancer3').attr('style', 'display: none');
        $('#btnAvancer').attr('style', 'display: none');
        $('#btnAvancer2').attr('style', 'display: bloc');
        $('#btnSave').attr('style', 'display: none');
        $('#openModalClient').attr('style', 'display: none');
    });


    //MENU GARANTIE CREDIT
    $('#btnAvancer3').click(function(){

      var montant_demande = parseFloat($('input[name="montant_demande"]').val());
      var montant_partager = parseFloat($('input[name="totalMontantMembre"]').val());

      if(montant_demande != montant_partager){
        alert('Le montant demandé doit être équivalent\n au montant distribué au membre du groupe!!!');
      }else{
        $('#three-tab').removeClass().addClass('nav-link disabled');
        $('#two-tab').removeClass().addClass('nav-link disabled');
        $('#one-tab').removeClass().addClass('nav-link disabled');
        $('#four-tab').removeClass().addClass('nav-link active');

        $('#three').removeClass().addClass('tab-pane fade p-3');
        $('#one').removeClass().addClass('tab-pane fade p-3');
        $('#two').removeClass().addClass('tab-pane fade p-3');
        $('#four').removeClass().addClass('tab-pane fade show active p-3');

        $('#btnAvancer3').attr('style', 'display: none');
        $('#btnAvancer2').attr('style', 'display: none');
        $('#btnAvancer').attr('style', 'display: none');
        
        $('#btnPrecedent').attr('style', 'display: none;');
        $('#btnPrecedent3').attr('style', 'display: bloc;');
        $('#btnPrecedent2').attr('style', 'display: none');

        $('#btnSave').attr('style', 'display: bloc');
        $('#openModalClient').attr('style', 'display: none');
        var data = $('input[name="codeGroupe"]').val();
        getMembre(data);
      }

    });
      
    //Menu ajouter montant au membre groupe
    $('#btnPrecedent3').click(function(){
      viderGaratieView();
      //videMontantMembre();

        $('#two-tab').removeClass().addClass('nav-link disabled');
        $('#one-tab').removeClass().addClass('nav-link disabled');
        $('#three-tab').removeClass().addClass('nav-link active');
        $('#four-tab').removeClass().addClass('nav-link disabled');


        $('#two').removeClass().addClass('tab-pane fade p-3');
        $('#one').removeClass().addClass('tab-pane fade p-3');
        $('#three').removeClass().addClass('tab-pane show active fade p-3');
        $('#four').removeClass().addClass('tab-pane fade p-3');

        $('#btnPrecedent').attr('style', 'display: none');
        $('#btnPrecedent2').attr('style', 'display: bloc');
        $('#btnPrecedent3').attr('style', 'display: none');

        $('#btnAvancer3').attr('style', 'display: bloc');
        $('#btnAvancer').attr('style', 'display: none');
        $('#btnAvancer2').attr('style', 'display: none');
        $('#btnSave').attr('style', 'display: none');
        $('#openModalClient').attr('style', 'display: none');
    });


   }   

   $('#openModalClient').click(function(){
     $('#contentCard').attr('style', 'display: none;');
    $('#modalTrans').dialog('open');
   });

    //CHERCHER CLIENT
      $('#btn-fer').click(function(){
        $('#modalClient').modal('hide');
        $('#modalTrans').dialog('open');
        //$('#btn-find').attr('disabled',false);
     });


     $('#btn-find').click(function(){
        $('#modalTrans').dialog('close');
        $('#modalClient').modal('show');
        allGroupe();  
         //Configuration table
         $('#tab').DataTable({
            language: {
                url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
            }, dom: 'flrtp'
        });  
     });

//AFFICHAGE D TOUT CLIENT

//GROUPE

function allGroupe(){
    $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/chargeGroupe',
      dataType: 'json',
      async: false,
      success: function(data){
         var html = '';
         var i;
           if(data){
                var c = data;
                var html;
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].codeGrp + '</td>' +
                    '<td>' + c[i].nomGroupe + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-clientGrp" vals="' +c[i].nomGroupe+ '" data="'+c[i].codeGrp+'">Selectionner</a>' +
                    '</td>' +
                    '</tr>';
                }

                $('#showClient').html(html);
            }

      },
      error: function(){
        alert('Accun Membres trouver!');
       
      }
  });
}


//FERMER CALENDRIER

  $('#fermeCal').click(function(){
      $('#modalAfficheCalendrier').modal('hide');
      $('#modalAdd').modal('show');
  });

  $('#idProduit').change(function() {
    
    var str = "";
    $( "#idProduit option:selected" ).each(function() {
      str += $( this ).attr('value');
    });

      $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/getConfigProduit',
      dataType: 'json',
      data:{idProdCredit: str},
      async: false,
      success: function(data){
        //alert('ok')data.configGarantieCredit == null || || data.configCreditGroupe == null   || data.confFraisGroupe == null 
        // || data.configGeneralCredit == null
        if(data.configCreditGroupe == null || data.configFraisCredit == null 
          || data.configGlCredit == null || data.configGarantieCredit == null){
            alert('Ce Produit n\'est pas configuré, SVP, veuillez tout d\'abord le configurer');
          $('input[name=tauxAnnuel]').val('');
          $('input[name=tauxIntMembre]').val('');          

          $('input[name=nbTranche]').val('');
          $('input[name=typeTranche]').val('');
          $('input[name=modeCalcul]').val('');
          $('input[name=diffPaie]').val('');
          $('input[name=commission]').val('');

          $('input[name=montMin]').val('');          
          $('input[name=montMax]').val('');          
          $('input[name=periodeMin]').val('');          
          $('input[name=periodeMax]').val('');             
        }else{
          $('input[name=tauxAnnuel]').val(data.configCreditGroupe.interetAnnuel);
          $('input[name=tauxIntMembre]').val(data.configCreditGroupe.interetAnnuel);

          $('input[name=nbTranche]').val(data.configCreditGroupe.tranche);
          $('#typeTranche').val(data.configCreditGroupe.typeTranche);
          $('#modeCalcul').val(data.configCreditGroupe.calculeInteret);
          $('input[name=diffPaie]').val(data.configCreditGroupe.diffPaiement);
          $('input[name=commission]').val(data.configCreditGroupe.commissionCredit);

          $('input[name=montMin]').val(data.configCreditGroupe.montanMinParMembre);          
          $('input[name=montMax]').val(data.configCreditGroupe.montantMaxParMembre);          
          $('input[name=periodeMin]').val(data.configCreditGroupe.periodeMinCredit);          
          $('input[name=periodeMax]').val(data.configCreditGroupe.periodeMaxCredit);   

          //verification épargne
          $('#affGaratieM').html('Garatie matériel requis: <strong><span id="champObligatoir" class="affM">'+data.configGarantieCredit.pourcentageGarantieGrp+'</span> % </strong>');
          $('input[name=percM]').val(data.configGarantieCredit.pourcentageGarantieGrp);   
        }
          if(data.configGarantieCredit.lierEpargne == true){
            //Taux garantie épargne 
            $('input[name=tauxSoldeRequi]').val(data.configGarantieCredit.percentMontantGrp);
            $('input[name=produitEpargne]').val(data.configGarantieCredit.produitEpargne.idProdEpargne);

            $('#affGaratieE').html('Garatie épargne requis: <strong><span id="champObligatoir" class="affE">'+data.configGarantieCredit.percentMontantGrp+'</span> % </strong>');  
            $('input[name=percE]').val(data.configGarantieCredit.percentMontantGrp); 
          }else{
            $('input[name=tauxSoldeRequi]').val(0);  
            $('#affGaratieE').html('Garatie épargne requis: '+0); 
            $('input[name=produitEpargne]').val(''); 
          } 
      },
      error: function(){
        alert('Impossible d\'afficher les donnée')
      }

  });

  });

  //Si on change le taux d'intérêt
  $('#tauxAnnuel').keyup(function(){
     var taux = $('input[name=tauxAnnuel]').val();
    $('input[name=tauxIntMembre]').val(taux);
  });

//CLICK SUR LE BOUTTON SUIVANT
$('#btn-suivant').click(function(){
  var codeCli =  $('input[name=codeCli]').val();
  getInfoClient(codeCli);
  var group = $('input[name=codeGrp]').val();
  if(group == ''){
      $('#codeGrp').addClass('is-invalid');
       $('.alert-danger').html('Le code client ne doit pas être vide!')
              .fadeIn().delay(2000).fadeOut('slow');
  }else{
    $('#codeGrp').removeClass('is-invalid');
    $('#modalTrans').dialog('close');
    $('#modalInfoCli').modal('show');
  }
});

$('#btn-accept').click(function(){
  $('#dialog').attr('style','display: bloc;');
  $('#modalInfoCli').modal('hide');
});
$('#btn-refuse').click(function(){
  $('#dialog').attr('style','display: none;');
  $('#modalInfoCli').modal('hide');
  $('#modalTrans').dialog('open');
});



//CHOISIR CLIENT VIA RECHERCHE
/*$('#showClient').on('click','.item-clientInd', function(){

  var codeCli = $(this).attr('data');
  var nomClient = $(this).attr('vals');
  $('#modalClient').modal('hide');

  $('#modalTrans').dialog('open');

  $('input[name=codeCli]').val(codeCli);
  $('input[name=codeGroupe]').val(codeCli);
  $('#btn-find').attr('disabled',false);
  $('#TeteCard').html('Demande crédit de '+nomClient+', code d\'enregistrement '+ codeCli);

});*/

//CHOISIR CLIENT VIA RECHERCHE
$('#showClient').on('click','.item-clientGrp', function(){

  var codeCli = $(this).attr('data');
  var nomClient = $(this).attr('vals');
  $('#modalClient').modal('hide');
  $('#modalTrans').dialog('open');

  $('input[name=codeGrp]').val(codeCli);
  $('input[name=codeGroupe]').val(codeCli);
  $('input[name=codeC]').val(codeCli);
  $('#btn-find').attr('disabled',false);
  var gr = 'Demande crédit du goupe '+nomClient+', code d\'enregistrement '+ codeCli;

  $('#TeteCard').html(gr);

});


function getInfoClient(code){

     $.ajax({
        type:'ajax',
        method:"get",
        url:'<?php echo base_url();?>index.php/demCredGetInfoClient',
        dataType:'json',
        data : {code : code},
        async: false,
        success:function(donne){
            var corp;

            corp =donne; 

           $('#bodyInfo').html('<strong>'+ corp +'</strong>');
        }
    });
} 

    
      /**********************Garantie et Garant****************************/

            //Fonction pour la vérification du compte épargne du client
      function getCompteEpargne(idProduit,codeInd,codeGrp){
       /*  var data = $('#myForm').serialize();
            avancer(data);*/
           $.ajax({
              type:'ajax',
              method:"get",
              url:'<?php echo base_url();?>index.php/getCompteEpargneParCode',
              dataType:'json',
              data : {idProduit : idProduit, codeInd: codeInd, codeGrp: codeGrp},
              async: false,
              success:function(donne){
                  if(donne.success==true){
                    var d = donne.result;
                     $('input[name=nomGar]').val(d.numCompteEp);
                     $('input[name=valGar]').val(d.solde);
                    var mont = parseFloat($('input[name=montant_demande]').val());
     
                  //pourcentage de garatie du garant 1
                    var taux = (d.solde * 100) / mont ;

                    $('input[name="tauxGar"]').val(taux);
                  }
              },
              error: function(){
                  alert('Ce client n\'avait pas un compte dépôt de garatie');
              }
          });
      }



      //Choix type de garatie
       choixTypeGarantie();
      function choixTypeGarantie(){
         $('#typeGar').change(function() {
                var str = "";
                var m = new String('Materiel');
                var e = new String('Epargne');
               
                $( "#typeGar option:selected" ).each(function() {
                  str += $( this ).attr('value');
                });
                
                if(m == str){
                  $('#affNomGartie').html('Nom garantie: ');                          
                  $('#affMontantGartie').html('Valeur: ');                          
                  $('#affTauxGartie').html('Taux (%):');                          
                }
                else if(e == str){  
                  var idProduit = $('input[name=produitEpargne]').val();
                  var codeInd = "";
                  var codeGrp = $('input[name=codeGroupe]').val();

                  getCompteEpargne(idProduit,codeInd,codeGrp);        
                  $('#affNomGartie').html('N° compte: ');                          
                  $('#affMontantGartie').html('Solde: ');                          
                  $('#affTauxGartie').html('Taux (%): ');     
                }else{
                  $('#affNomGartie').html('');                          
                  $('#affMontantGartie').html('');                          
                  $('#affTauxGartie').html('');     
                }


          });
      }



      /***************************Gestion membre groupe******************************/

      $('#principalMembre').keyup(function(){
          var principale = parseFloat($(this).val());
          var tauxAnnuel = parseFloat($('#tauxIntMembre').val());
              
          var intMois = tauxAnnuel / 12;
          var intTot = (principale * intMois)/100;
          $('#interetMembre').val(intTot);
      });


      function getMembre(data){
        $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url();?>index.php/afficheMembreGroupe',
        dataType: 'json',
        data:{nomGroupe: data},
        async: false,
        success: function(data){
              var html;
              var s;
              var t;
              var i;
              var code;
               if(data){
                  var c = data;
                  html += '<option></option>';      
               
                  for (i = 0; i < c.length; i++) {
                      //code = c[i].codeInd;                 
                      html+='<option value="'+c[i].codeInd+'">'+c[i].codeInd+' |'+c[i].nomClient + ' '+ c[i].prenomClient +'</option>';                   
                    }
                   
                    $('#nomMembre').html(html);            
                  }     
            },
            error: function(){
            }

        });
      }

      //Affiche montant par membre
      function getMontantMembre(){
         $.ajax({
              type:'ajax',
              method:"get",
              url:'<?php echo base_url();?>index.php/getMontantMembre',
              dataType:'json',
              async: false,
              success:function(donne){
                  var c = donne;
                  var html;
                  if(c.length == null){
                      html += '<tr>' +
                        '<td>' + c.numCredit + '</td>' +
                        '<td>' + c.codeInd+ '</td>' +
                        '<td>' + c.principale + '</td>' +
                        '<td>' + c.interet + '</td>' +
                        '<td>' + c.tauxInt + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {
                        html += '<tr>' +
                        '<td>' + c[i].numCredit + '</td>' +
                        '<td>' + c[i].codeInd + '</td>' +
                        '<td>' + c[i].principale + '</td>' +
                        '<td>' + c[i].interet + '</td>' +
                        '<td>' + c[i].tauxInt + '</td>' +
                        '</tr>';
                    }                    
                  }
                  $('#showMontantMembre').html(html);
              },
              error: function(){
                 // alert('Aucun données');
              }
          });          
      }

      var nomMembre = '';
      $('#nomMembre').change(function() {  
        $( "#nomMembre option:selected" ).each(function() {
            nomMembre = $( this ).attr('value');
          }); 
      });
      //Enregistrer montant d'un membre
      $('#btnAddMontantMembre').click(function(){
        var data = $('#myForm').serialize();
        if(nomMembre == ''){
          alert('Veuillez sélectionner le code client!!!');
          $('#nomMembre').addClass('is-invalid');
        }else{
          $('#nomMembre').removeClass('is-invalid');
          saveMontantMembre(data);
        }
      });

      function saveMontantMembre(data){
          $.ajax({
              type:'ajax',
              method:"post",
              url:'<?php echo base_url();?>index.php/saveMontantMembre',
              dataType:'json',
              data : data,
              async: false,
              success:function(donne){
                console.log(donne);
                  if(donne.success==true){                    
                     getMontantMembre();
                     var tot = parseFloat($('#totalMontantMembre').val());                     
                     var principale = parseFloat($('input[name=principalMembre]').val());
                     tot += principale;
                     $('#totalMontantMembre').val(tot);
                  }
              },
              error: function(){
                  alert('Montant crédit déjà ajouté pour ce client ');
              }
          });          
      }

      //Vide table qui affiche le montant crédit par membre
        videMontantMembre();
        function videMontantMembre(){
          $.ajax({
              type:'ajax',
              method:"get",
              url:'<?php echo base_url();?>index.php/deleteMontantMembre',
              dataType:'json',
              async: false,
              success:function(donne){
                  if(donne.success==true){
                     //getMontantMembre();
                  }
              },
              error: function(){
                  alert('Erreur');
              }
          });          
      }


      //Enregistrement garantie

    function chargeGarantie(){
        $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url(); ?>index.php/chargeGarantie',
        dataType:'json',
        async: false,
        success: function(response) {
            var c = response;
            var html;

            if(c.length == null){
                html += '<tr>' +
                  '<td>' + c.numCredit + '</td>' +
                  '<td>' + c.typeGarantie+ '</td>' +
                  '<td>' + c.nomGarantie + '</td>' +
                  '<td>' + c.valeur + '</td>' +
                  '<td>' + c.pourcentage + '</td>' +
                 /* '<td>' + c.approbationStatut + '</td>' +*/
                  /*'<td>' + c.soldeTotal + '</td>' +*/
                  '</tr>';
            }else{
              for (i = 0; i < c.length; i++) {
                  html += '<tr>' +
                  '<td>' + c[i].numCredit + '</td>' +
                  '<td>' +c[i].typeGarantie + '</td>' +
                  '<td>' + c[i].nomGarantie + '</td>' +
                  '<td>' + c[i].valeur + '</td>' +
                  '<td>' + c[i].pourcentage + '</td>' +
                /*  '<td>' + c[i].approbationStatut + '</td>' +*/
                  /*'<td>' + c[i].soldeTotal + '</td>' +*/
                  '</tr>';
              }                    
            }
                $('#showGarantie').html(html);
            },
            error: function(){
             $('#showGarantie').html('donnée vide');
            }
          });
        }

         //Enregstrement garantie view
        $('#addGarantie').click(function(){
           var data = $('#myForm').serialize();
           saveGarantie(data);
        });

        function saveGarantie(data){
         $.ajax({
          type:'ajax',
          method: "post",
          url: '<?php echo base_url(); ?>index.php/saveGarantie',
          dataType:'json',
          data: data,
          async: false,
          success: function(response) {
              //alert(response);
              if (response) {
                 /* $('#btnSave').attr('disabled', true);
                  $('#btnSave').attr('disabled', false);*/
    
                   //$('#myForm')[0].reset();
                   console.log(response);
                   chargeGarantie();

                    var str = "";
                    var m = new String('Materiel');
                    var e = new String('Epargne');

                    var vM = parseFloat($('input[name=validGarM]').val());
                    var vE = parseFloat($('input[name=validGarE]').val());
                    var tG = parseFloat($('input[name=tauxGar]').val());

                    var pE = parseFloat($('input[name=percE]').val());
                    var pM = parseFloat($('input[name=percM]').val());
                   
                    $( "#typeGar option:selected" ).each(function() {
                      str += $( this ).attr('value');
                    });
                    
                    if(m == str){
                       vM += tG;
                       $('input[name=validGarM]').val(vM);
                       if(vM >= pM){
                        $('.affM').attr('style', 'color:green;');
                       } 
                                                           
                    }
                    else if(e == str){  
                        vE += tG;
                        $('input[name=validGarE]').val(vE);
                        if(vE >= pE){
                          $('.affE').attr('style', 'color:green;');
                        }     
                    }

                   if(vM >= pM && vE >= pE){
                        $('#btnSave').attr('disabled', false);
                    }      

              }
              else {
                  console.log(response);
                  $.notify({            
                      message: 'Erreur enregistrement!'
                  },{
                      type: 'warning',
                      animate: {
                          enter: 'animated fadeInDown',
                          exit: 'animated fadeOutUp'
                      }
                  }); 
              }
          },
          error: function(){
           alert('Erreur Enregistrement garantie');
          }
      });
    }



    viderGaratieView();
    function viderGaratieView(){
       $.ajax({
          type:'ajax',
          url: '<?php echo base_url(); ?>index.php/viderGaratieView',
          dataType:'json',
          async: false,
          success: function(response) {
              
              if(response){
                $('#showGarantie').html('');
              }
              
          },
          error: function(){
            alert('Erreurrrrrrrrrrrr!!')
          }
      });
    }


});

</script>