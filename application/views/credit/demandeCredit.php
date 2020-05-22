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

          <br/>
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
                    <button type="button" id="btnAvancer" class="btn btn-primary btn-sm">Suivant <i class="fa fa-forward"></i></button>&nbsp;
                    <button type="button" id="btnAvancer2" style="display: none;" class="btn btn-primary btn-sm">Suivant <i class="fa fa-forward"></i></button>
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
                          <a class="nav-link disabled" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Finalisation demande</a>
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

                      <!-- GARANTIE CREDIT -->
                      <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                          <div class="col-12">
                            <div class="row"> 
                              <div class="col-6">
                                 <legend>Garant de crédit</legend>
                              </div>
                              <div class="col-6">
                                  <!-- <a id="btnGarant" type="button" class="btn btn-sm btn-primary" style="float:right;"
                                  href="<?php echo base_url(); ?>index.php/Client/Garant"><i class="fa fa-plus"></i> Nouveau garant</a>      -->   
                              </div>
                            </div>
                             <hr>
                             <br>
                            <div class="form-group row">
                              
                              <label for="garant1" class="col-sm-2">1er Garant: </label>
                             
                              <div class="col-sm-4">
                                <input type="hidden" id="gar1" class="form-control form-control-sm" name="gar1" >
                                <input type="text" id="garant1" class="form-control form-control-sm" name="garant1" disabled>
                              </div>
                              <div class="col-1">
                                <button type="button" id="choisir1" class="btn btn-info btn-sm">choisir</button>
                              </div>
                             <div class="col-sm-1">
                                <input type="number" id="tauxGar1" class="form-control form-control-sm col-sm-12" value="0" name="tauxGar1">
                              </div> 

                              <div class="col-1"> <span>%</span></div>

                           </div> 

                          <div class="form-group row">
                              
                              <label for="garant2" class="col-sm-2">2ème Garant: </label>
                             
                              <div class="col-sm-4">
                                <input type="hidden" id="gar2" class="form-control form-control-sm" name="gar2" >
                                <input type="text" id="garant2" class="form-control form-control-sm" name="garant2" disabled>
                              </div>
                              <div class="col-1">
                                <button type="button" id="choisir2" class="btn btn-info btn-sm">choisir</button>
                              </div>
                             <div class="col-sm-1">
                                <input type="number" id="tauxGar2" class="form-control form-control-sm col-sm-12" value="0" name="tauxGar2">
                              </div> 

                              <div class="col-1"> <span>%</span></div>

                           </div> 

                          <div class="form-group row">
                              
                              <label for="garant3" class="col-sm-2">3ème Garant: </label>
                             
                              <div class="col-sm-4">
                                <input type="hidden" id="gar3" class="form-control form-control-sm" name="gar3" >
                                <input type="text" id="garant3" class="form-control form-control-sm" name="garant3" disabled>
                              </div>
                              <div class="col-1">
                                <button type="button" id="choisir3" class="btn btn-info btn-sm">choisir</button>
                              </div>
                             <div class="col-sm-1">
                                <input type="number" id="tauxGar3" class="form-control form-control-sm col-sm-12" value="0" name="tauxGar3">
                              </div> 

                              <div class="col-1"> <span>%</span></div>

                           </div> 

                         <!--   <div class="form-group">
                            <div>
                            </div>
                          </div>  -->
                      </div>
                      <br>
                      <br>
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
           <!--    <br/> -->    
          </form>
          <br/>
          <br/>
        </div>
      </div>
    </div>
  </div>

<!-- EN FORMULAIRE DEMANDE -->

<!-- MODAL SELECTION GARANT -->
<div class="modal fade" id="modalShoxGarant" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Listes garant</h5>
        </div>
        <div class="modal-body">             
            
         <table class="table table-fixed table-bordered table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Code garant</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Profession</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="showGarant">

              </tbody>
            </table>
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-arrow-circle-right"></i> Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL CLIENT -->
<div class="modal fade" id="modalClient" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Listes clients</h5>
        </div>
        <div class="modal-body">             
            <br>
            <br>
            
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

<div id="modalTrans" title="Demande crédit">             
      <br>
      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

      </div>                                             
      <br>
    <div class="form-group row">                                        
          <label id="labCode" class="col-sm-3" for="codeCli">Code Client: <span id="champObligatoir">*</span> </label>
          <div class="col-sm-6">
            <input type="text" name="codeCli" placeholder="Saisir n° client" class="form-control form-control-sm col-12" id="codeCli">
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
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
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

/*******************************ECRITURE DEMANDE*******************************/

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


/**********************CALENDRIER DE REMBOURSEMENT******************************/
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


              $('#one').removeClass().addClass('tab-pane fade p-3');
              $('#three').removeClass().addClass('tab-pane fade p-3');
              $('#two').removeClass().addClass('tab-pane fade show active p-3');

              $('#btnPrecedent').attr('style', 'display: bloc');
              $('#btnPrecedent2').attr('style', 'display: none');
              $('#btnAvancer').attr('style', 'display: none');
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
            url: '<?php echo base_url(); ?>index.php/demandeCredit',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {

                    $('#myForm')[0].reset();   
                    viderCal();
                    viderGaratieView();
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

 //CLICK SUR LE BOUTTON SUIVANT
      $('#btn-suivant').click(function(){
        var codeCli =  $('input[name=codeCli]').val();
        getInfoClient(codeCli);

        if(codeCli == '')
        {
          $('#codeCli').addClass('is-invalid');
           $('.alert-danger').html('Le code client ne doit pas être vide!')
                    .fadeIn().delay(2000).fadeOut('slow');
        }else{
          $('#codeCli').removeClass('is-invalid');
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
      $('#showClient').on('click','.item-clientInd', function(){

        var codeCli = $(this).attr('data');
        var nomClient = $(this).attr('vals');
        $('#modalClient').modal('hide');

        $('#modalTrans').dialog('open');

        $('input[name=codeCli]').val(codeCli);
        $('input[name=codeInds]').val(codeCli);
        $('input[name=codeC]').val(codeCli);
        $('#btn-find').attr('disabled',false);
        $('#TeteCard').html('Demande crédit de '+nomClient+', code d\'enregistrement '+ codeCli);

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

    $('#btnPrecedent').click(function(){

    viderCal();

    $('#one-tab').removeClass().addClass('nav-link active');
    $('#two-tab').removeClass().addClass('nav-link disabled');
    $('#three-tab').removeClass().addClass('nav-link disabled');


    $('#two').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade p-3');
    $('#one').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnAvancer2').attr('style', 'display: none');
    $('#btnPrecedent').attr('style', 'display: none;');
    $('#btnPrecedent2').attr('style', 'display: none');
    $('#btnAvancer').attr('style', 'display: bloc');
     $('#btnSave').attr('style', 'display: none');
     $('#openModalClient').attr('style', 'display: bloc');
  });


//MENU MODIFIER CALENDRIER
  $('#btnAvancer2').click(function(){

    $('#two-tab').removeClass().addClass('nav-link disabled');
    $('#one-tab').removeClass().addClass('nav-link disabled');
    $('#three-tab').removeClass().addClass('nav-link active');


    $('#one').removeClass().addClass('tab-pane fade p-3');
    $('#two').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnAvancer2').attr('style', 'display: none');
    $('#btnPrecedent').attr('style', 'display: none;');
    $('#btnPrecedent2').attr('style', 'display: bloc');
    $('#btnAvancer').attr('style', 'display: none');
     $('#btnSave').attr('style', 'display: bloc');
     $('#openModalClient').attr('style', 'display: none');
  });

    $('#btnPrecedent2').click(function(){
      viderGaratieView();

    $('#one-tab').removeClass().addClass('nav-link disabled');
    $('#two-tab').removeClass().addClass('nav-link active');
    $('#three-tab').removeClass().addClass('nav-link disabled');


    $('#one').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade p-3');
    $('#two').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnPrecedent').attr('style', 'display: bloc');
    $('#btnPrecedent2').attr('style', 'display: none');
    $('#btnAvancer').attr('style', 'display: none');
    $('#btnAvancer2').attr('style', 'display: bloc');
     $('#btnSave').attr('style', 'display: none');
     $('#openModalClient').attr('style', 'display: none');
  });


   }   

   $('#openModalClient').click(function(){
     $('#contentCard').attr('style', 'display: none;');
    $('#modalTrans').dialog('open');
   });



    //$('#btn-suivant').attr('disabled',true);
    //CHERCHER CLIENT

      $('#btn-fer').click(function(){
        $('#modalClient').modal('hide');
        $('#modalTrans').dialog('open');
        $('#btn-find').attr('disabled',false);
     });


     $('#btn-find').click(function(){
        $('#modalTrans').dialog('close');
        $('#modalClient').modal('show');
          AllClient();  
         //Configuration table
         $('#tab').DataTable({
            language: {
                url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
            }, dom: 'flrtp'
        });  
     });

//AFFICHAGE D TOUT CLIENT
//INDIVIDUEL
function AllClient(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeClient",
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].codeInd + '</td>' +
                    '<td>' + c[i].nomClient +' '+c[i].prenomClient + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-clientInd" vals="' + c[i].nomClient +' '+c[i].prenomClient + '" data="'+ c[i].codeInd+'">Selectionner</a>' +
                    '</td>' +
                    '</tr>';
                }

                //var a=etudiant_table.num_matricule;
                $('#showClient').html(html);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('pas de donnée');
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
            if(data.configCreditIndividuel == null || data.configFraisCredit == null 
              || data.configGlCredit == null || data.configGarantieCredit == null){
                alert('Ce Produit n\'est pas configuré, SVP, veuillez tout d\'abord le configurer');
              $('input[name=tauxAnnuel]').val('');
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
              $('input[name=tauxAnnuel]').val(data.configCreditIndividuel.tauxInteretAnnuel);
              $('input[name=nbTranche]').val(data.configCreditIndividuel.tranches);
              $('#typeTranche').val(data.configCreditIndividuel.typeTranche);
              $('#modeCalcul').val(data.configCreditIndividuel.modeCalculInteret);
              $('input[name=diffPaie]').val(data.configCreditIndividuel.differePaiement);
              $('input[name=commission]').val(data.configCreditIndividuel.commission_crédit);

              $('input[name=montMin]').val(data.configCreditIndividuel.montantMinCredit);          
              $('input[name=montMax]').val(data.configCreditIndividuel.montantMaxCredit);          
              $('input[name=periodeMin]').val(data.configCreditIndividuel.periodeMinCredit);          
              $('input[name=periodeMax]').val(data.configCreditIndividuel.periodeMaxCredit);   

              //verification épargne
              $('#affGaratieM').html('Garatie matériel requis: <strong><span id="champObligatoir" class="affM">'+data.configGarantieCredit.pourcentageGarantieInd+'</span> % </strong>');
              $('input[name=percM]').val(data.configGarantieCredit.pourcentageGarantieInd);   
            }
              if(data.configGarantieCredit.lierEpargne == true){
                //Taux garantie épargne 
                $('input[name=tauxSoldeRequi]').val(data.configGarantieCredit.percentMontantInd);
                $('input[name=produitEpargne]').val(data.configGarantieCredit.produitEpargne.idProdEpargne);

                $('#affGaratieE').html('Garatie épargne requis: <strong><span id="champObligatoir" class="affE">'+data.configGarantieCredit.percentMontantInd+'</span> % </strong>');  
                $('input[name=percE]').val(data.configGarantieCredit.percentMontantInd); 
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

     


      //Fonction éxecuter quand on click sur le boutton suivant 1
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


                    $('#one').removeClass().addClass('tab-pane fade p-3');
                    $('#three').removeClass().addClass('tab-pane fade p-3');
                    $('#two').removeClass().addClass('tab-pane fade show active p-3');

                    $('#btnPrecedent').attr('style', 'display: bloc');
                    $('#btnPrecedent2').attr('style', 'display: none');
                    $('#btnAvancer').attr('style', 'display: none');
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
                  var codeInd = $('input[name=codeInds]').val();
                  var codeGrp = "";

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


    //Affichage garantie

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

    //Vider garantie View
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

choixGart();
function choixGart(){
  $('#choisir1').click(function(){
    $('#modalShoxGarant').modal('show');
    var t = "choisir1";
    chargeGarants(t);
  });

  $('#choisir2').click(function(){
    $('#modalShoxGarant').modal('show');
     var t = "choisir2";
     chargeGarants(t);
  });

  $('#choisir3').click(function(){
    $('#modalShoxGarant').modal('show');
    var t = "choisir3";
    chargeGarants(t);
  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar3', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');

    if( $('input[name=gar1]').val() == codeGar || $('input[name=gar2]').val() == codeGar  ){
      alert('le garant de crédit doit être different!!!');
    }else{
      $('#modalShoxGarant').modal('hide');

      $('input[name=gar3]').val(codeGar);
      $('input[name=garant3]').val(nom); 
      /*$('#tauxGar3').attr('disabled', false);   */  
    }

  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar2', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');

    if( $('input[name=gar1]').val() == codeGar || $('input[name=gar3]').val() == codeGar  ){
      alert('le garant de crédit doit être different!!!');
    }else{
    $('#modalShoxGarant').modal('hide');

    $('input[name=gar2]').val(codeGar);
    $('input[name=garant2]').val(nom); 
/*    $('#tauxGar2').attr('disabled', false);*/   
    }

  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar1', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');
    
    if( $('input[name=gar2]').val() == codeGar || $('input[name=gar3]').val() == codeGar){
      alert('le garant de crédit doit être different!!!');
    }else{
      $('#modalShoxGarant').modal('hide');

      $('input[name=gar1]').val(codeGar);
      $('input[name=garant1]').val(nom);
     /* $('#tauxGar1').attr('disabled', false); */
    }
  });
  
}



function chargeGarants(choix){
   $.ajax({
    type:'ajax',
    method: "post",
    url: '<?php echo base_url(); ?>index.php/chargeGar',
    dataType:'json',
    async: false,
    success: function(response) {
     
      var html;
      var i;
      var c = response;
      var html;
      var add = choix.substring(7,8);
      var sel = 'selGar'+add;
      //alert(sel);
      if(c.length == null){
              html += '<tr>' +
              '<td>' + c.codeGarant + '</td>' +
              '<td>' + c.nom +' '+c.prenom + '</td>' +
              '<td>' + c.profession + '</td>' +
              '<td>' +
              '<a href="javascript:;" vals="' + c.nom +' '+c.prenom + '" class="btn btn-success btn-sm '+sel+'" data="'+c.codeGarant+'">Selectionner</a>' +
              '</td>' +
              '</tr>';
      }else{
          for (i = 0; i < c.length; i++) {
              html += '<tr>' +
              '<td>' + c[i].codeGarant + '</td>' +
              '<td>' + c[i].nom +' '+c[i].prenom + '</td>' +
              '<td>' + c[i].profession + '</td>' +
              '<td>' +
              '<a href="javascript:;" vals="' + c[i].nom +' '+c[i].prenom + '" class="btn btn-success btn-sm '+sel+'" data="'+ c[i].codeGarant+'">Selectionner</a>' +
              '</td>' +
              '</tr>';
          }
        }
        $('#showGarant').html(html);
        
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

});

</script>