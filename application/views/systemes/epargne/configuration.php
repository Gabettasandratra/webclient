 <!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile" style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration produits épargne</h2>
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

      <form  id="myForm" action="" method="post">  

       <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

      </div>    

      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

      </div>    

      <div class="row" style="margin-top: 50px;margin-left:20px;">
        <div class="col-6">
           <div class="form-group row">
                <label for="idProduit" class="col-sm-3">Produit Epargne: <span id="champObligatoir">*</span></label>
               <div class="col-sm-6">
                   <select class="form-control form-control-sm col-8" name="idProduit" id="idProduit">
                    <option value=""></option>
                  <?php foreach($result->resultat as $val) :?>
                            <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                        <?php endforeach; ?>
            </select>
               </div>
             </div>  
        </div>
        <div class="col-6">
            <div class="col-12" style="text-align: right">
                <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
              </div>
        </div>

      </div>
      <hr>
        <div class="row">
          <div class="col-12">
            <div class="card mt-3 tab-card">
              <div class="card-header tab-card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Configuration générale des comptes épargnes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Configuration intérêt sur épargne</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Configuration GL de l'épargne</a>
                  </li>
                </ul>
              </div>

              <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active p-3" style="margin-top: 20px;" id="one" role="tabpanel" aria-labelledby="one-tab">
                 
                   <div class="row">
                      

                      <div class="col-6">
                  

                         <div class="form-group row">
                           <label for="devise" class="col-sm-6">Devise: <span id="champObligatoir">*</span></label>
                          <div class="col-sm-6">
                             <select name="devise" class="form-control form-control-sm col-6" id="devise">
                                   <option value="MGA">MGA</option>
                                   <option value="FRANC">FRANC</option>
                                   <option value="USD">USD</option>
                                   <option value="EURO">EURO</option>
                                   
                              </select>
                           </div>
                         </div>
                       
                         <div class="form-group row">
                            <label for="ageMin" class="col-sm-6">Age minimum autoriser pour ouvrir un compte: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-6">
                             <input type="number" min="18" max="100" value="18" id="ageMin" name="ageMin" class="form-control form-control-sm col-6"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="soldeOverture" class="col-sm-6">Solde fixé lors de l'ouverture d'une compte: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-6">
                             <input type="number" id="soldeOverture" name="soldeOverture" value="0" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>
                         
                         <div class="form-group row">
                            <label for="FraisFermeture" class="col-sm-6">Frais de fermeture de comptes:</label>
                            <div class="col-sm-6">
                             <input type="number" id="FraisFermeture" name="FraisFermeture" value="0" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" name="protectSoldNegatif" type="checkbox" value="1" id="protectSoldNegatif">
                                <label class="custom-control-label" for="protectSoldNegatif">
                                  Activer protection contre solde negatif
                                </label>
                              </div>
                            </div>  


                      </div>

                      <div class="col-6">
                           
                           <div class="form-group row">
                            <label for="nbJrInactif" class="col-sm-6">Nombre de jour pour classer un compte comme inactif:</label>
                            <div class="col-sm-3">
                             <input type="number" min="0" value="365" id="nbJrInactif" name="nbJrInactif" class="form-control form-control-sm col-12"/>
                            </div>
                         </div> 
                         
                         <div class="form-group row">
                            <label for="nbMinJourRetrait" class="col-sm-6">Nombre minimun de jours entre deux retrait: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-3">
                             <input type="number" min="0" value="0" id="nbMinJourRetrait" name="nbMinJourRetrait" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="montaMaxTransMobile" class="col-sm-6">Montant maximum pour transaction sur Mobile:</label>
                            <div class="col-sm-4">
                             <input type="number" id="montaMaxTransMobile" value="9999999" name="montaMaxTransMobile" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                        <div class="form-group row">
                            <label for="penPrelevmnt" class="col-sm-6">Pénalité sur prélèvement d'espèces:</label>
                            <div class="col-sm-4">
                             <input type="number" id="penPrelevmnt" value="0" name="penPrelevmnt" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="commRetrait" class="col-sm-6">Commission sur retrait cash: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-4">
                             <input type="number" value="0" id="commRetrait" name="commRetrait" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="commTransfere" class="col-sm-6">Commission sur Transfère: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-4">
                             <input type="number" id="commTransfere" value="0"  name="commTransfere" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                      </div>
                   </div> 
             
                </div>

                <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                  <div class="row">
                      <div class="col-6 ">
                      <!--   <div class="form-group row">
                            <label for="produit" class="col-sm-6">Produit Epargne: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-4">
                                <select name="produit" class="form-control form-control-sm col-12" id="produit">
                                     <option>----Choisir produit----</option>
                                     <?php foreach($result->liste as $val) :?>
                                          <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                                      <?php endforeach; ?>
                                </select>
                              </div>
                         </div> 
                           <hr/>  -->

                         <div class="form-group row">
                            <label for="soldeMinInd" class="col-sm-6">Solde minimum pour compte individuel: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-4">
                             <input type="number" id="soldeMinInd" name="soldeMinInd" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>
                         
                         <div class="form-group row">
                            <label for="soldeMinIntInd" class="col-sm-6">Solde minimum intérêt pour compte individuel: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-4">
                             <input type="number" id="soldeMinIntInd" name="soldeMinIntInd" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="soldeMinGrp" class="col-sm-6">Solde minimum pour compte Groupe:</label>
                            <div class="col-sm-4">
                             <input type="number" id="soldeMinGrp" name="soldeMinGrp" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>
                         
                         <div class="form-group row">
                            <label for="soldeMinIntGrp" class="col-sm-6">Solde minimum intérêt pour compte Groupe:</label>
                            <div class="col-sm-4">
                             <input type="number" id="soldeMinIntGrp" name="soldeMinIntGrp" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                           <label for="modeCalcule" class="col-sm-6">Mode de calcul intérêt: <span id="champObligatoir">*</span></label>
                          <div class="col-sm-4">
                             <select name="modeCalcule" class="form-control form-control-sm col-12" id="modeCalcule">
                                   <option value="">--Mode de calcul--</option>                             
                                   <option value="Solde courant">Intérêts calculés sur le solde courant quotidient</option>                             
                                   <option value="Solde minimum mensuel">Intérêts calculés sur le solde minimum mensuel</option>                             
                                   <option value="Solde moyen mensuel">Intérêts calculés sur le solde moyen mensuel</option>                             
                                   <option value="Solde fin periode">Intérêts calculés sur le solde fin de période</option>                             
                                   <option value="Solde fin mois">Intérêts calculés sur le solde fin de mois</option>                             
                                   <option value="Solde courant">Intérêts calculés sur le solde courant capitalisé</option>                             
                              </select>
                           </div>
                         </div>

                         <div class="form-group row">
                            <label for="dateCal" class="col-sm-6">Date de calcul intérêt:</label>
                            <div class="col-sm-4">
                             <input type="date" id="dateCal" name="dateCal" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                      </div>

                      <div class="col-6 ">

                        <div class="form-group row">
                            <label for="nbMois" class="col-sm-6">Nombre de mois dans l'année: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-3">
                             <input type="number" min="12" max="1" value="12" id="nbMois" name="nbMois" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>
                           
                           <div class="form-group row">
                            <label for="nbJrInt" class="col-sm-6">Nombre de jours d'intérêt dans l'année: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-3">
                             <input type="number" min="1" max="370" value="365" id="nbJrInt" name="nbJrInt" class="form-control form-control-sm col-12"/>
                            </div>
                         </div> 
                         
                         <div class="form-group row">
                            <label for="nbSem" class="col-sm-6">Nombre de semaine d'intérêt dans l'année: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-3">
                             <input type="number" min="1" max="55" value="52" id="nbSem" name="nbSem" class="form-control form-control-sm col-12"/>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="taux" class="col-sm-6">Taux d'intérêt: <span id="champObligatoir">*</span></label>
                            <div class="col-sm-5 row">
                             <input type="number" id="taux" name="taux" class="form-control form-control-sm col-6"/><span class="col-6">% par an</span>
                            </div>
                         </div>
                      </div>
                   </div> 
                    <!--  <div class="card-footer col-12" style="text-align: right">
                        <button id="btnSaveInteret" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
                      </div>   -->           
                </div>
               


                <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                  
                      <!-- CONFIGURATION GL-->

                       <div class="row">

                          <div class="col-6">

                              <!-- <div class="form-group row">
                                  <label for="produit" class="col-sm-6">Produit Epargne: <span id="champObligatoir">*</span></label>
                                <div class="col-sm-5">
                                  <select name="produit" class="form-control form-control-sm col-12" id="produit">
                                       <option>--Choisir produit--</option>
                                       <?php foreach($result->liste as $val) :?>
                                            <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                                        <?php endforeach; ?>
                                  </select>
                                </div>
                             </div>
                            <hr/> 
 -->
                              <div class="form-group row">
                                   <label for="cmptEpargne" class="col-sm-6 col-form-label">Transaction cash: <span id="champObligatoir">*</span></label>
                                 <div class="col-sm-5">
                                  <select name="cmptEpargne" class="form-control form-control-sm" id="cmptEpargne">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div> 

                              <div class="form-group row">
                                   <label for="cmptcheque" class="col-sm-6 col-form-label">Comptes chèques: <span id="champObligatoir">*</span></label>
                                 <div class="col-sm-5">
                                  <select name="cmptcheque" class="form-control form-control-sm" id="cmptcheque">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div> 

                              <div class="form-group row">
                                   <label for="cmptMobile" class="col-sm-6 col-form-label">Transaction Mobile: <span id="champObligatoir">*</span></label>
                                 <div class="col-sm-5">
                                  <select name="cmptMobile" class="form-control form-control-sm" id="cmptMobile">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div> 

                              <div class="form-group row">
                                   <label for="cmptIntPaye" class="col-sm-6 col-form-label">Intérêt payé: <span id="champObligatoir">*</span></label>
                                 <div class="col-sm-5">
                                  <select name="cmptIntPaye" class="form-control form-control-sm" id="cmptIntPaye">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div> 


                          </div>

                          <div class="col-6">


                             <div class="form-group row">
                                 <label for="cmptCommEpargne" class="col-sm-6 col-form-label">Commission sur épargne: <span id="champObligatoir">*</span></label>
                               <div class="col-sm-5">
                                <select name="cmptCommEpargne" class="form-control form-control-sm" id="cmptCommEpargne">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                              </div>

                             <div class="form-group row">
                                 <label for="cmptPenalEpargne" class="col-sm-6 col-form-label">Pénalité sur épargne:</label>
                               <div class="col-sm-5">
                                <select name="cmptPenalEpargne" class="form-control form-control-sm" id="cmptPenalEpargne">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                              </div>

                            <div class="form-group row">
                                 <label for="cmptPapeterie" class="col-sm-6 col-form-label">Comptes papeterie épargne:</label>
                               <div class="col-sm-5">
                                <select name="cmptPapeterie" class="form-control form-control-sm" id="cmptPapeterie">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                              </div>

                             <div class="form-group row">
                                 <label for="cmptTrans" class="col-sm-6 col-form-label">Comptes pour les transferts épargne: <span id="champObligatoir">*</span></label>
                               <div class="col-sm-5">
                                <select name="cmptTrans" class="form-control form-control-sm" id="cmptTrans">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                              </div>

                             <div class="form-group row">
                                 <label for="cmptVirementCheq" class="col-sm-6 col-form-label">Comptes pour les Virement par chèque:</label>
                               <div class="col-sm-5">
                                <select name="cmptVirementCheq" class="form-control form-control-sm" id="cmptVirementCheq">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                              </div>
                          </div>
                        </div>
                      <!--  <div class="card-footer col-12" style="text-align: right;margin-bottom: 0px;">
                        <button id="btnSaveGL" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
                      </div>   -->
                </div>           

              </div>
            </div>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>


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


<script src="<?php echo base_url('/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
    <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>
<script type="text/javascript">
function numStr(a, b) {
  a = '' + a;
  b = b || ' ';
  var c = '',
      d = 0;
  while (a.match(/^0[0-9]/)) {
    a = a.substr(1);
  }
  for (var i = a.length-1; i >= 0; i--) {
    c = (d != 0 && d % 3 == 0) ? a[i] + b + c : a[i] + c;
    d++;
  }
  return c;
}
$(function(){

  $( "#dialog" ).dialog({
    autoOpen: true,
    width: 1400,
    height: 610,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "size",
      duration: 800
    }
  });

 /*  $('#soldeOverture').keyup(function(){
      //parseInt($(this).val(numStr($(this).val(), '.')));  
      var nbr = $(this).val();    
       $('#FraisFermeture').val(numStr(nbr, '.'));
     });
  */
 /* function fSepMil($p) {
        $p+='';
        x=$p.split('.');
        x1=x[0];
        x2=x.length>1?'.'+x[1]:'';
        var rgx=/(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1=x1.replace(rgx,'$1'+' '+'$2');
        }
        return x1+x2;
    }
    function fTranscrire() {
        var utNombre=parseInt($('#soldeOverture').val());
        //document.getElementById("FraisFermeture").innerHTML=fSepMil(utNombre);
        $('#soldeOverture').val(fSepMil(utNombre));
    }


    $('#soldeOverture').mouseup(function(){
      fTranscrire();
     });
  control();
  function control(){
    $('#soldeOverture').mouseup(function(){
      var nombre = $(this).val();
      var int1=new Intl.NumberFormat();
      //$(this).val(int1.format(nombre));
      $('input[name=soldeOverture]').val(int1.format(nombre));
      console.log("Format par défaut de l'appareil");      
      console.log(int1.format(nombre));
      //console.log(int1.format(123456789.154));
    });
  }
*/
//ENREGISTREMENT CONFIGURATION GENERALE

  //ENREGISTREMENT CONFIGURATION 
  var produit = '';

  $('#idProduit').change(function() {  
    $( "#idProduit option:selected" ).each(function() {
        produit = $( this ).attr('value');
      }); 
  });

    $('#btnSave').click(function(){

    var data = $('#myForm').serialize();

     if (produit == '') {
        //alert('Veuillez séléctionner un produit !!');
        $('#idProduit').addClass('is-invalid');
        $('.alert-danger').html('Veuillez séléctionner un produit !!')
                .fadeIn().delay(3000).fadeOut('slow');
      }else{  
        $('#idProduit').removeClass('is-invalid');
          $.ajax({
                type:'ajax',
                method: "post",
                url: '<?php echo base_url();?>index.php/SaveConfigProduitEpargne',
                dataType:'json',
                data: data,
                async: false,
                success: function(response) {
                    //alert(response);
                    if (response.success) {
                        if(response.type == 'ad')
                        {
                            var type = 'Effectuer';
                        }
                         $('#myForm')[0].reset();
                        console.log(response);
                          $.notify({            
                              message: response.message
                          },{
                              type: 'success',
                              animate: {
                                  enter: 'animated fadeInDown',
                                  exit: 'animated fadeOutUp'
                              }
                          });     

                    }
                    else {
                         $.notify({            
                          message: response.message
                          },{
                              type: 'danger',
                              animate: {
                                  enter: 'animated fadeInDown',
                                  exit: 'animated fadeOutUp'
                              }
                          });
                    }
                },
                error: function(response){
                    $.notify({            
                        message: response.message
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






//ENREGISTREMENT INTERET 

    $('#btnSaveInteret').click(function(){

    var data = $('#myFormInteret').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveConfigInterEpargne',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Effectuer';
                    }
                    $('#myForm')[0].reset();
                    console.log(response);
                      $.notify({            
                          message: response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     

                }
                else {
                     $.notify({            
                      message: response.message
                      },{
                          type: 'danger',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });
                }
            },
            error: function(response){
                $.notify({            
                    message: response.message
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


//ENREGISTREMENT GL 

    $('#btnSaveGL').click(function(){

    var data = $('#formGl').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveConfigGlEpargne',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Effectuer';
                    }
                    console.log(response);
                      $.notify({            
                          message: response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     

                }
                else {
                     $.notify({            
                      message: response.message
                      },{
                          type: 'danger',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });
                }
            },
            error: function(response){
                $.notify({            
                    message: response.message
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


});

</script>