<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
  <div class="x_panel tile" id="impre" style="display:none">
    <div class="x_title">
      <h2>Remboursemment crédit</h2>
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
    <!--   <div class="card-header col-8 place">
        <h5 align="center" class="titre">Remboursemment crédit</h5>
      </div> -->
      <br>
      <h5 id="TeteCard" style="text-align: center;" class="card-header bg-light"></h5>
        <br>
         <div class="form-group" style="background-color: yellow;color: black;text-align:center;"><!-- hsl(0, 0%, 50%) -->
              <label id="infos" style="font-weight: bold;margin-left: 10px;" class="col-form-label"></label>
           </div> 
        <hr>
        <div class="row">
          <div class="col-2">
          </div>
          <div class="col-10"><!-- style="margin-right:15px;" -->
             <div style="text-align: right">
                <button type="button" class="btn btn-sm btn-info" id="changer"><i class="fa fa-recycle"></i> Changer crédit</button>&nbsp;&nbsp;
                <button type="button" class="btn btn-sm btn-secondary" id="btnHistoRemb"><i class="fa fa-list"></i> Historique remboursement</button>&nbsp;&nbsp;
                <button variable="" type="button" id="btnVoirHisto" class="btn btn-sm btn-success"><i class="fa fa-calendar-alt"></i> Calendrier écheanche</button>&nbsp;&nbsp;
                <button type="button" id="btnSave" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Enregistrer</button>
              </div>    
               <!--  <button id="btnChange" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button> -->
             </div>
        </div>
        <hr>
        <br>
        <div class="form-group">
              <div class="row">
             
                  <div class="col-3">

                     <div class="form-group row">
                        <label for="numCredits" class="col-form-label col-sm-6">Numero crédit:</label>
                        <input type="text" id='numCredits' name="numCredit" class="form-control form-control-sm col-sm-6" 
                        style=" text-align : center;" value="" disabled><!-- background-color: green;color: white; -->
                     </div>     
                   
                  </div>
                  
                  <div class="col-5 forms">
                      <div class="form-group row">
                        <label for="dateDernierRemb" class="col-form-label lab-date col-sm-6">Dernier Remboursement:</label>
                        <input type="date" class="form-control form-control-sm col-sm-4" name="dateDernierRemb" id="dateDernierRemb" disabled>
                      </div>
                  </div>
                  
                  <div class="col-3">
                    <div class="form-group row" >
                        <label for="solde" class="col-form-label col-sm-4">Solde:</label>
                        <input type="text" style="text-align:right" id='solde' class="form-control form-control-sm col-sm-6" name="solde" disabled>
                     </div> 
                  </div>

              </div>

                  <hr/>
               <form id="myForm" class="form" action="" method="post">            
                  <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

                      </div> 
                 <div class="row">
                    <div class="form-group col-md-6">               

                      <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                      <input type="hidden" id="num" name="numCredit"  value=""/>
                      <div class="form-group row">
                          <label for="dateRemb" class="col-form-label col-sm-3 lab-date">Date:</label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control form-control-sm col-sm-6" name="dateRemb" id="dateRemb">            
                         </div>
                    </div>
            
                      <div class="form-group row">
                          <label for="montant" class="col-form-label col-sm-3">Montant:</label>
                          <div class="col-sm-6">
                            <input type="text" style="text-align:right" id='montant' class="form-control form-control-sm col-sm-8" name="montant">
                          </div>
                       </div> 

                     <div class="form-group row">
                        <label for="piece" class="col-form-label col-sm-3">Pièce:</label>
                        <div class="col-sm-6">
                          <input type="text" id='piece' class="form-control form-control-sm col-sm-10" name="piece">
                        </div>
                     </div>                      
                      <br>
                     <fieldset class="scheduler-border"> 
                        <legend class="scheduler-border" style="margin-right: 5%;">Mode de payement</legend> 
                                
                        <div class="form-group row">
                            <div class="custom-control custom-radio custom-control-inline col-4">
                              <input class="custom-control-input" name="payement" type="radio" value="cash" id="cash" checked>
                              <label class="custom-control-label" for="cash">
                                Cash
                              </label>
                            </div>                           
                          <div id="affGuichet" class="form-group col-8 row" style="">
                              
                              <label for="numCptCaisse" class="col-sm-5">Guichet:</label>
                              <select name="numCptCaisse" class="form-control form-control-sm col-6">
                                      <option></option>
                                 <?php foreach($comm->Liste_CompteCaisse as $value) :?>
                                      <option value="<?= $value->nomCptCaisse ?>"><?= $value->nomCptCaisse ?> || <?= $value->account->numCpt ?></option>
                                  <?php endforeach; ?>
                            </select>
                          </div>

                        </div>   

                        <div class="form-group row">
                            <div class="custom-control custom-radio custom-control-inline col-4">
                              <input class="custom-control-input" name="payement" type="radio" value="cheque" id="cheque">
                              <label class="custom-control-label" for="cheque">
                                Chèque
                              </label>
                            </div>                         
                               <div id="affCheque" style="display: none;" class="form-group col-8 row">                                        
                                  <label class="col-sm-5" for="numCheque">N° chèque: </label>
                                  <div class=" col-sm-7">
                                    <input type="text" name="numCheque" class="form-control form-control-sm col-12" id="numCheque">
                                  </div>
                              </div>                      
                        </div> 

                        <div class="form-group row">
                            <div class="custom-control custom-radio custom-control-inline col-5">
                              <input class="custom-control-input" name="payement" type="radio" value="mobile" id="mobile">
                              <label class="custom-control-label" for="mobile">
                                Transfer via mobile
                              </label>
                            </div>                         
                               <div id="affMob" style="display: none;" class="form-group col-7 row">                                        
                                  <label class="col-sm-5" for="tel">N° tel: </label>
                                  <div class=" col-sm-7">
                                    <input type="text" name="tel" class="form-control form-control-sm col-12" id="tel">
                                  </div>
                              </div> 
                          
                        </div>  

                    </fieldset>
                        <!-- <div class="col-sm-6">
                          <input type="text" id='piece' class="form-control form-control-sm col-sm-10" name="piece">
                        </div> -->

                  </div>

                <div id="showMontant" class="col-md-6">
                   
                    <div class="form-group row">
                      <label for="Charge" class="col-form-label col-sm-6">Charge due:</label>
                      <div class="col-sm-6">
                        <input type="text" style="text-align:right" id="Charge" value="" class="form-control form-control-sm col-sm-8" name="Charge" disabled>
                      </div>
                    </div>

                 <div class="form-group row">
                     <label for="penalDu" class="col-form-label col-sm-6">Pénalité due:</label>
                    <div class="col-sm-6">
                      <input type="text" style="text-align:right" id="penalDu" value="" class="form-control form-control-sm col-sm-8" name="penalDu" disabled>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="commDue" class="col-form-label col-sm-6">Commission due:</label>
                    <div class="col-sm-6">
                      <input type="text" style="text-align:right" id="commDue" value="" class="form-control form-control-sm col-sm-8" name="commDue" disabled>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="interArr" class="col-form-label col-sm-6">Intérêt en arriérés:</label>
                    <div class="col-sm-6">
                      <input type="text" style="text-align:right" id="interArr" value="" class="form-control form-control-sm col-sm-8" name="interArr" disabled>
                    </div>
                 </div>
                <div class="form-group row">
                  <label for="princArr" class="col-form-label col-sm-6">Principal en arriérés:</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align:right" id="princArr" class="form-control form-control-sm col-sm-8" value=""  name="princArr" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="interDue" class="col-form-label col-sm-6">Intérêt dû:</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align:right" id="interDue" class="form-control form-control-sm col-sm-8"  value="" name="interDue" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="princDue" class="col-form-label col-sm-6">Principal dû:</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align:right" id="princDue" class="form-control form-control-sm col-sm-8" value="" name="princDue" disabled>
                  </div>
                </div>
               <div class="form-group row">
                <label for="interAnticiper" class="col-form-label col-sm-6">Intérêt payer anticipativement:</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align:right" id="interAnticiper" class="form-control form-control-sm col-sm-8"  value=""  name="interAnticiper" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="princAnticiper" class="col-form-label col-sm-6">Principal rembourser anticipativement:</label>
                  <div class="col-sm-6">
                    <input type="text" style="text-align:right" id="princAnticiper" class="form-control form-control-sm col-sm-8" value="" name="princAnticiper" disabled>
                  </div>
                </div> 

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
 </div>
</div>


 <!-- Recherche numéro crédit -->
<div class="modal fade" id="modalCherche" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Liste Crédit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
            <div class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
              <table class="table table-fixed table-striped table-hover table-sm">
                 <!-- <caption>Liste crédit</caption> -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">N° Crédit</th>
                      <th scope="col">Nom client</th>
                      <th scope="col">Montant crédit</th>                      
                      <th scope="col">Intérêt</th>                      
                      <th scope="col">Total solde restant</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
              
                </tbody>
              </table>
            </div>

       </div>
       <div class="modal-footer">
        <button id="back1" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> fermer</button>
     </div>
    </div>
  </div>
</div>

 <!-- CALENDRIER d'éCHEANCE -->
<div class="modal fade" id="modalAfficheCalendier" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Calendrier d'écheance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <!--  Tableau qui affiche le calendrier de remboursement  -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" ><!-- style="padding: 15px;" style="padding-right=25px;padding-left=25px;" -->
            <table class="table table-fixed table-striped table-hover table-sm">
              <!--  <caption>Calendrier due</caption> -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#Num crédit </th>
                    <th scope="col">Date</th>
                    <th scope="col">Principal</th>
                    <th scope="col">Intérêt</th>
                    <th scope="col">Commission</th>
                    <th scope="col">Pénalité</th>
                    <th scope="col">Etat de remboursement</th>
                  </tr>
                </thead>
                <tbody id="showHistorique">
  
                </tbody>
                 <tfoot>
                  <tr>
                    <td colspan="2">Totaux</td>
                    <td id="totalPr">0.0</td>
                    <td id="totalInt">0.0</td>
                    <td id="totalC">0.0</td>
                    <td id="totalP">0.0</td>
                    <td></td>
                  </tr>
                </tfoot>
              </table>
          </div>

       </div>
       <div class="modal-footer">
        <button id="btn-imprimer" type="button" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-print"></i> Imprimer</button>
        <button id="retour" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Retour</button>
     </div>
    </div>
  </div>
</div>

<!-- MODAL POUR AFFICHER LES FORMULAIRES DE REMBOURSEMENT -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Remboursement crédit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        

</div>
<div class="modal-footer">
 
</div>
</div>
</div>
</div>

<!-- HISTORIQUE CREDIT -->
<div class="modal custom fade col-12" id="modalAfficheHistorique" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modalTail" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Historique du crédit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <!--  TABLEAU AFFICHE L'HISTORIQUE DE REMBOURSEMENT -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding: 15px;" style="padding-right=25px;padding-left=25px;">
            <table class="table table-fixed table-striped table-hover table-sm">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#crédit</th>
                    <th scope="col">Date</th>
                    <th scope="col">Transaction</th>
                    <th scope="col">Principal</th>
                    <th scope="col">Intérêt</th>
                    <th scope="col">Commission</th>
                    <th scope="col">Papeterie</th>
                    <th scope="col">Solde courant</th>
                    <th scope="col">Solde Principale</th>
                    <th scope="col">Solde intérêt</th>
                    <th scope="col">écheance</th>
                  </tr>
                </thead>
                <tbody id="showHistor">
  
                </tbody>
              </table>
          </div>

       </div>
       <div class="modal-footer">
        <button id="btn-imprimer" type="button" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-print"></i> Imprimer</button>
        <button id="" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
       </div>
    </div>
  </div>
</div>


<!-- Choix client -->

<div id="dialog" title="Veuillez saisir le numéro de crédit" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div>              
            <div class="form-group row">                                        
                <label id="labCode" class="col-sm-3" for="numCred">Numéro crédit: <span id="champObligatoir">*</span> </label>
                <div class=" col-sm-6">
                  <input type="text" name="numCred" placeholder="Saisir n° crédit" class="form-control form-control-sm col-12" id="numCred">                 
                </div>
                <div class=" col-sm-3">
                    <button id="btn-find" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
                </div>
            </div>   

         </div>
       </div> 
    </form> 
    <br><br>
   <div class="modal-footer">
     <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout">Suivant <i class="fa fa-forward"></i></button>
 </div>
</div>

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
  <script src="<?php echo base_url('/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
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

  $("#dialog").dialog({
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

  //Click sur boutton suivant
  $('#btnAff').click(function(){
    var numCred = $('input[name=numCred]').val();

    if(numCred == ''){
      $('#numCred').addClass('is-invalid');
      $('.alert-danger').html('Ce numéro crédit n\'esxiste pas')
        .fadeIn().delay(3000).fadeOut('slow');  
    }else{
       $('#numCred').removeClass('is-invalid');
       getDetail(numCred); 
       detailClient(numCred);    
    }

  });

  function detailClient(code){
       $.ajax({
          type : 'ajax',
          url: '<?php echo base_url();?>index.php/findCreditParNum',
          method: 'get',
          data: {code : code},
          crossDomain: true,
          dataType: 'json',
          jsonpCallback:'callback',
          success: function(response){
            var c = response;
            var id;
            var nom;

              if (c.individuel != null) {
                  id = c.individuel.codeInd;
                  nom = c.individuel.nomClient +' '+c.individuel.prenomClient; 
                }else if(c.groupe != null){
                   id = c.groupe.codeGrp;
                   nom = c.groupe.nomGroupe;
                }
            $('#TeteCard').html('Remboursement crédit de '+nom+', code d\'enregistrement '+id);
          }
      });
  }

    //Find compte DAT
   $("#numCred").autocomplete({
        source: function(request, response){
          //var code = $('input[name=codeGrp]').val();
          var code = $("#numCred").val();
            $.ajax({
                type : 'ajax',
                url: '<?php echo base_url();?>index.php/findCreditParNum',
                method: 'get',
                data: {code : code},
                crossDomain: true,
                dataType: 'json',
                jsonpCallback:'callback',
                success: function(data){
                    response($.map(data, function(item){
                        return item.numCredit;
                    }));
                }
            });
        },
        select: function(event,ui) {
            var c = ui.item.value;
            $(this).val(c);
            return false;
        }
    });  



  //CHOIX PAYEMENT

   $('#cash').click(function() {

      $('#affGuichet').attr('style', 'display: bloc;');                                             
      $('#affCheque').attr('style', 'display: none;');                                             
      $('#affMob').attr('style', 'display: none;');                                             
  });

   $('#cheque').click(function() {

      $('#affCheque').attr('style', 'display: bloc;');                                             
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affMob').attr('style', 'display: none;');                                             
  });

   $('#mobile').click(function() {

      $('#affMob').attr('style', 'display: bloc;');                                             
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affCheque').attr('style', 'display: none;');                                             
  });



  //AFFICHER HISTORIQUE
 $('#btnHistoRemb').click(function(){
    var numCred = $('input[name=numCred]').val();

    historique (numCred);
  });


  function historique (id) {
    $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/HistoqueRemboursement',
      dataType:'json',
      data: {numCredit: id},
      async: false,
      success: function(response) {
        var i;
          var c = response;
          var html;

          if (c.length == null) {
              var solde_total = c.demandeCredit.interet_total + c.demandeCredit.principale_total;
                  html +='<tr>' +
                  '<td>' + c.demandeCredit.numCredit + '</td>' +
                  '<td>' + c.dateRemb + '</td>' +
                  '<td>' + c.typeAction + '</td>' +
                  '<td>' + c.principal + '</td>' +
                  '<td>' + c.interet + '</td>' +
                  /*'<td>' + c[i].restaPaie + '</td>' +*/
                  '<td>' + c.cheqcomm + '</td>' +
                  '<td>' + c.stationery + '</td>' +
                  '<td>' + c.solde + '</td>' +
                  '<td>' + c.totalPrincipale + '</td>' +
                  '<td>' + c.totalInteret + '</td>' +
                  '<td>' + c.nbEcheance + '</td>' +
                  '</tr>';
          }else{
              for (i = 0; i < c.length; i++) {
                var solde_total = c[i].demandeCredit.interet_total + c[i].demandeCredit.principale_total;
                  html +='<tr>' +
                  '<td>' + c[i].demandeCredit.numCredit + '</td>' +
                  '<td>' + c[i].dateRemb + '</td>' +
                  '<td>' + c[i].typeAction + '</td>' +
                  '<td>' + c[i].principal + '</td>' +
                  '<td>' + c[i].interet + '</td>' +
                  /*'<td>' + c[i].restaPaie + '</td>' +*/
                  '<td>' + c[i].cheqcomm + '</td>' +
                  '<td>' + c[i].stationery + '</td>' +
                  '<td>' + c[i].solde + '</td>' +
                  '<td>' + c[i].totalPrincipale + '</td>' +
                  '<td>' + c[i].totalInteret + '</td>' +
                  '<td>' + c[i].nbEcheance + '</td>' +
                  '</tr>';
              }  
          }

          $('#modalAfficheHistorique').modal('show');
          //$('#PageAimprimer').attr('class','table table-fixed table-hover table-sm');
          $('#showHistor').html(html);      

      },
      error: function(){
          alert('Aucun remboursement jusqu\'ici!!!');
      }
  });
  }
/*$('#showdata').on('click','.item-historiqueCredit', function(){
  var id = $(this).attr('data');
  
});
*/
   //FERMER MODAL
 /* $('#fermerModal').click(function(){
    $('#myForm')[0].reset();
    //$('#showMontant').html('');
    $('#modalAdd').modal('hide');
  });
*/
   //RETOUR
  $('#retour').click(function(){
    $('#modalAfficheHistorique').modal('hide');
    //$('#modalAdd').modal('show');
  });

//AFFICHE LES MONTANT A REMBOURSER
function motantDue(num,str){
  $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/getMontantRemb',
      dataType: 'json',
      data:{ numCredit: num, date: str},
      async: false,
      success: function(data){
        var html;
        $('input[name=Charge]').val(data[0]);
        $('input[name=penalDu]').val(data[1]);
        $('input[name=commDue]').val(data[2]);
        $('input[name=interArr]').val(data[3]);
        $('input[name=princArr]').val(data[4]);
        $('input[name=interDue]').val(data[5]);
        $('input[name=princDue]').val(data[6]);
        $('input[name=interAnticiper]').val(data[7]);
        $('input[name=princAnticiper]').val(data[8]);     

        $('#montant').attr('value',data[9]);

        $('#infos').html('<i class="fa fa-info-circle"></i> '+data[10] +', '+ data[11]+', '+data[12]);

      },
      error: function(){
        alert('Impossible d\'afficher les données')
      }

  });
}

$('#dateRemb').change(function(){
  var str;
  str = $('input[name=dateRemb]').val();

  var num = $('#num').attr('value');
   motantDue(num,str);

});

//Séléction numéro crédit
  //AFFICHER HISTORIQUE
$('#showdata').on('click','.item-select', function(){
  var id = $(this).attr('data');
  $('#dialog').dialog('open');
  $('#modalCherche').modal('hide');
  $('input[name=numCred]').val(id);
});

//Changer crédit
$('#changer').click(function(){
   $('#dialog').dialog('open');
  $('#impre').attr('style','display:none');// .container
});

//AFFICHE Liste crédit CREDIT
 $('#btn-find').click(function(){
  $('#dialog').dialog('close');
  $('#modalCherche').modal('show');
  afficheCredit();
 });
 //boutton fermer chercher numéro crédit
 $('#back1').click(function(){
  $('#dialog').dialog('open');
  $('#modalCherche').modal('hide');
  //afficheCredit();
 });
  function afficheCredit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeRemb",
        dataType:"json",
        data:{mc: 'Demande decaissé', mc2 : ''} ,
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var code;
                var nom;

                if(c.length == null){
                  if (c.individuel != null) {
                      code = c.individuel.codeInd;
                      nom = c.individuel.nomClient +''+c.individuel.prenomClient; 
                    }else if(c.groupe != null){
                       code = c.groupe.codeGrp;
                       nom = c.groupe.nomGroupe;
                    }

                      html += '<tr>' +
                      '<td>' + c.numCredit + '</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c.montantApproved + '</td>' +                      
                      '<td>' + c.interet + '</td>' +
                      '<td>' + c.solde_total + '</td>' +
                      /*'<td>' + c[i].approbationStatut + '</td>' +*/
                      '<td>' +
                      '<a href="javascript:;" class="btn btn-success btn-sm item-select" data="'+ c.numCredit +'" role="button"> Séléctionner </a>'+
                      '</td>' +
                      '</tr>';
                }else{
                  for (i = 0; i < c.length; i++) {

                    if (c[i].individuel != null) {
                      code = c[i].individuel.codeInd;
                      nom = c[i].individuel.nomClient +''+c[i].individuel.prenomClient; 
                    }else if(c[i].groupe != null){
                       code = c[i].groupe.codeGrp;
                       nom = c[i].groupe.nomGroupe;
                    }

                      html += '<tr>' +
                      '<td>' + c[i].numCredit + '</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c[i].montantApproved + '</td>' +
                      '<td>' + c[i].interet + '</td>' +
                      '<td>' + c[i].solde_total + '</td>' +
                      /*'<td>' + c[i].approbationStatut + '</td>' +*/
                      '<td>' +
                      '<a href="javascript:;" class="btn btn-success btn-sm item-select" data="'+ c[i].numCredit +'" role="button"> Séléctionner </a>'+
                      '</td>' +
                      '</tr>';
                  }
                  
                }
                /*var led = '<i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i>  '+
                c.length+' remboursement crédit en cours';
                $('#legende').html(led);*/
                $('#showdata').html(html);
            }
        },
        error: function(){
            alert('pas de donnée');
        }
    });
}


$('#btnSave').click(function(){

	var url = $('#myForm').attr('action');
  var data = $('#myForm').serialize();

  var dat = $('input[name=dateRemb]').val();
  var mont = $('input[name=montant]').val();
  var piece = $('input[name=piece]').val();

  var result = '';

  if(dat == ''){
    $('#dateRemb').addClass('is-invalid');
  }else{
    $('#dateRemb').removeClass('is-invalid');
    result +='1';
  }

  if(mont == ''){
     $('#montant').addClass('is-invalid');
  }else{
    $('#montant').removeClass('is-invalid');
    result +='2';
  }

  if(piece == ''){
    $('#piece').addClass('is-invalid');
  }else{
    $('#piece').removeClass('is-invalid');
    result +='3';
  }
    
    if(result == '123'){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/saveRemboursement',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                var type;
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        type = 'Effectué';
                    }
                    //$('#modalAdd').modal('hide');

                    $('#myForm')[0].reset();
                    console.log(response);
                    $.notify({            
                        message: 'Remboursement enregistrer!'
                    },{
                        type: 'success',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                    //alert('Enregistrement reuissit');
                   // $('.container').attr('style','display:none;');
                    //$('#impre').attr('style','display:bloc');
                    $('#impre').attr('style','display:none');
                    $('#dialog').dialog('open');
                    afficheCredit();
                   
               }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
              //alert('Erreur enregistrement');
              //console.log(response);
              $.notify({            
                  message: 'Erreur de sauvegardage'
              },{
                  type: 'success',
                  animate: {
                      enter: 'animated fadeInDown',
                      exit: 'animated fadeOutUp'
                  }
              });
          }
        });
    }else{
       $('.alert-danger').html(''+'&nbsp;'+'Veuillez remplir les champs demandés!!!')
              .fadeIn().delay(2000).fadeOut('slow');
    }
    	

});

//HISTORIQUE DEMANDE
$('#btnVoirHisto').click(function(){

  var num =  $('#btnVoirHisto').attr('variable');
  $('#modalAdd').modal('hide');
  $('#modalAfficheCalendier').modal('show');

  $.ajax({
     type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/historiqueRemboursement',
      dataType:'json',
      data: {numCredit: num},
      async: false,
      success: function(response) {
          var i;
          var c = response;
          var html;

          var totalPr = 0;
          var totalInt = 0;
          var totalC = 0;
          var totalP = 0;

          for (i = 0; i < c.length; i++) {
            var paye = c[i].payer;
            var trans;
             if(paye == 1){
                trans = '<td>Terminer <span type="button" class="btn btn-sm btn-success forms">'+
                '<i class="fa fa-check-circle"></i></span></td>';
              }else if(paye == 0){
                trans ='<td>En cours.....</td>';
              }
              totalPr += parseFloat(c[i].mprinc);
              totalInt += parseFloat(c[i].mint);
              totalC += parseFloat(c[i].mcomm);
              totalP += parseFloat(c[i].mpen);
              html +='<tr>' +
              '<td>' + c[i].demandeCredit.numCredit + '</td>' +
              '<td>' + c[i].date + '</td>' +
              '<td>' + c[i].mprinc + '</td>' +
              '<td>' + c[i].mint + '</td>' +
              '<td>' + c[i].mcomm + '</td>' +
              '<td>' + c[i].mpen + '</td>' +
                trans +
              '</tr>';


          }  
          //$('#PageAimprimer').attr('class','table table-fixed table-bordered table-hover table-sm')
          $('#showHistorique').html(html);
          $('#totalPr').html(totalPr);
          $('#totalInt').html(totalInt);
          $('#totalC').html(totalC);
          $('#totalP').html(totalP);

      },
      error: function(){
        var html;
       // $('#PageAimprimer').attr('class','table table-fixed table-borderless table-hover table-sm')
         html +='<tr>' +
              
              '<td colspan="7"><h4> Aucun élement</h4></td>' +
           
              '</tr>';
          alert('pas de donnée');
          $('#showHistorique').html(html);
      }

  });

});

function getDetail(id){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateRemb').val(today);
 
  motantDue(id,today);

  $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/dernierRemboursement',
      dataType:'json',
      data: {numCredit: id},
      async: false,
      success: function(response) {
        var i;
        if (response.length > 1 ) {
            $('#numCredits').attr('value',id);
            $('#num').attr('value',id);
            $('#btnVoirHisto').attr('variable',id);
            $('#solde').attr('placeholder',response[0]);
            $('#dateDernierRemb').attr('value',response[1]);
        }else {
         // $('#montant').attr('value',response);
        }
         $('#dialog').dialog('close');
          $('#impre').attr('style','display:bloc;');
        // $('.container').attr('style','display:bloc');
      },
      error: function(){
          alert('pas de donnée');
      }
  });

}

/*$('#showdata').on('click','.item-rembourser', function(){
  var id = $(this).attr('data');
  $('#modalAdd').modal('show');
  $('#myForm').attr('action','');
});
*/

//BOUTTON IMPRIMER

$('#btn-imprimer').click(function(){

  $('#modalAfficheCalendier').modal('hide');
  imprimer('PageAimprimer');

});


//FONCTION POUR FAIRE IMPRESSION

function imprimer(divName) {
   var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
    $('#modalAfficheCalendier').modal('hide');
}



});

</script>