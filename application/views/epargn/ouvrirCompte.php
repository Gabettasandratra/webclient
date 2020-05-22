
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    
    <div class="x_title">
      <h2>Ouverture compte épargne</h2>
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

      <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
        <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div> 

              <form id="myForm" action="" method="post">           
                <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
                 <div class="control-group row"> 
                    <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                     <div class="form-group col-4 row">
                          <label for="choix" class="col-sm-4">Client: <span id="champObligatoir">*</span></label>
                          <div class="col-sm-8">
                            <select name="choix" class="form-control form-control-sm col-12" id="choix">
                                 <option>-----Choisir client-----</option>
                                 <option value="individuel">Individuel</option>
                                 <option value="groupe">Groupe</option>
                            </select>
                          </div>
                       </div>  

                      <div class="form-group col-4 row">                                        
                          <label id="labCode" class="col-sm-5" for="codeCli">Code Client: <span id="champObligatoir">*</span> </label>
                          <div class=" col-sm-7">
                            <input type="text" name="codeCli" placeholder="Saisir n° client" class="form-control form-control-sm col-12" id="codeCli" required>
                            <input type="hidden" name="codeGrp" placeholder="Saisir n° client Groupe" class="form-control form-control-sm col-12" id="codeGrp" required>
                            <input type="hidden" placeholder="Veuillez séléctioner le client" class="form-control form-control-sm col-12" id="rien" disabled>
                          </div>
                      </div>                    

                      <div class="form-group col-4 row">                                        
                          <label class="col-sm-5" for="nom">Nom Client: </label>
                          <div class=" col-sm-7">
                            <input type="text" class="form-control form-control-sm col-12" id="nom" disabled>
                          </div>
                      </div>                   
                </div>
             </div> 
            <hr style="margin-bottom: 20px;"/>


              <div class="col-12">            
              <div class="control-group row" style="margin-top:15px;">

                <div class="col-5">
                    
                      <div class="form-group row">
                        <label for="produit" class="col-sm-5">Produit Epargne: <span id="champObligatoir">*</span></label>
                        <div class="col-sm-6">
                            <select name="produit" class="form-control form-control-sm col-12" id="produit">
                                 <option>----Choisir produit----</option>
                                 <?php foreach($result->resultat as $val) :?>
                                      <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                                  <?php endforeach; ?>
                            </select>
                          </div>
                     </div> 

                    <div class="form-group row">                                        
                        <label class="col-sm-5" for="dateOverture">Date d'ouverture: <span id="champObligatoir">*</span> </label>
                        <div class=" col-sm-6">
                          <input type="date" name="dateOverture" class="form-control form-control-sm col-8" id="dateOverture" required="required">
                        </div>
                    </div>

                    <div id="affDateR" class="form-group row" style="display : none;">                                        
                        <label class="col-sm-5" for="dateRetirer">Date retrait: <span id="champObligatoir">*</span> </label>
                        <div class=" col-sm-6">
                          <input type="date" name="dateRetirer" class="form-control form-control-sm col-8" id="dateRetirer" required>
                        </div>
                    </div>

                    <div class="form-group row">                                        <!-- 
                        <label class="col-sm-9" for="signature">Signatures requises pour les retraits:</label> -->
                        <div class=" col-sm-3">
                          <input type="hidden" max="10" min="0" name="signature" class="form-control form-control-sm col-6" id="signature">
                        </div>
                    </div>    
                  
                     <div class="form-group row">                                        
                        <label class="col-sm-5" for="comm">Commission sur retrait de cash:</label>
                        <div class=" col-sm-6">
                          <input type="text" style="text-align:right" value="0" name="comm" class="form-control form-control-sm col-12" id="comm">
                        </div>
                    </div>


                    <div class="form-group" style="padding-top: 2%;">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="produitDefaut" type="checkbox" value="1" id="produitDefaut">
                          <label class="custom-control-label" for="produitDefaut">
                            Produit d'épargne par défaut?
                          </label>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="retrait" type="checkbox" value="1" id="retrait">
                          <label class="custom-control-label" for="retrait">
                            Pas de rétraits autorisés?
                          </label>
                        </div>
                    </div>       

                </div>

                <div class="col-7">  

                        <div class="card w-80" >
                          <div class="card-header">
                            <h6 id="ls"></h6>
                          </div>
                          <div class="card-body">
                            <div class="card-text">
                                    <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
                                <div id="PageAimprimer" class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
                                  <table class="table table-fixed table-bordered table-hover table-sm">
                                     <!-- <legende>Rapport des comptes</legende> -->
                                      <thead class="thead-light">
                                        <tr>
                                          <th scope="col">N° Compte</th>                        
                                          <th scope="col">Code produit | nom</th>
                                          <th scope="col">Date ouverture</th>
                                          <th scope="col">Solde</th>                          
                                        </tr>
                                      </thead>
                                      <tbody id="showdata">

                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                          </div>
                        </div>

                  </div>                       

                </div>
              </div>
              </form>           
            <div class="modal-footer">
              <div style="float: left;margin-right:57%;margin-left:0;">
                <h6 id="affInfo" style="color:red;display:none;"><span id="champObligatoir">*</span> le solde d'ouverture de ce produit est obligatoire</h6> 
              </div>
              <!-- <button id="btnSd" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-euro-sign"></i> Solde d'ouverture</button> -->
              <div style="text-align: right">
                  <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
              </div>
            </div>

          </div>

    </div>
  </div>
 </div>
</div>

    <!-- Modal SOLDE D'OUVERTURE-->
      <div class="modal fade" id="modalSolde" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="titre">Solde d'ouverture</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                
                <form id="formdepot" action="" method="post">
                  <div class="alert alert-danger almod" style="display: none;margin-bottom: 25px ">

                  </div>      
                   <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                   <input type="hidden" name="numCptEp"  value="" id="numCptEp"/>                   
                   <input type="hidden" name="transaction"  value="DE"/>
                   <input type="hidden" name="description" value ="Dépôt d'ouverture">

                  <div class="form-group row">                                        
                      <label class="col-sm-5" for="dateOperation">Date opération: <span id="champObligatoir">*</span> </label>
                      <div class=" col-sm-6">
                        <input type="date" name="dateOperation" class="form-control form-control-sm col-8" id="dateOperation" required>
                      </div>
                  </div> 

                   <div class="form-group row">                                        
                      <label class="col-sm-5" for="montantT">Montant: <span id="champObligatoir">*</span> </label>
                      <div class=" col-sm-6">
                        <input type="text" style="text-align:right" name="montantT" value="0.00" class="form-control form-control-sm col-10" id="montantT">
                      </div>
                  </div>

                  <div class="form-group row">                                        
                      <label class="col-sm-5" for="piece">Piece comptable: <span id="champObligatoir">*</span> </label>
                      <div class=" col-sm-6">
                        <input type="text" name="piece" class="form-control form-control-sm col-12" id="piece" required>
                      </div>
                  </div>

                  <br>
                     <fieldset class="scheduler-border"> 
                      <legend class="scheduler-border">Mode de payement</legend> 
                              
                      <div class="form-group row">
                          <div class="custom-control custom-radio custom-control-inline col-3">
                            <input class="custom-control-input" name="payement" type="radio" value="cash" id="cash" checked>
                            <label class="custom-control-label" for="cash">
                              Cash
                            </label>
                          </div>

                           
                        <div id="affGuichet" class="form-group col-9 row" style="">
                            
                            <label for="numCptCaisse" class="col-sm-5">Guichet:</label>
                            <select name="numCptCaisse" class="form-control form-control-sm col-7">
                               <?php foreach($comm->Liste_CompteCaisse as $value) :?>
                                    <option value="<?= $value->nomCptCaisse ?>"><?= $value->nomCptCaisse ?> || <?= $value->account->numCpt ?></option>
                                <?php endforeach; ?>
                          </select>
                        </div>

                      </div>   

                      <div class="form-group row">
                          <div class="custom-control custom-radio custom-control-inline col-3">
                            <input class="custom-control-input" name="payement" type="radio" value="cheque" id="cheque">
                            <label class="custom-control-label" for="cheque">
                              Chèque
                            </label>
                          </div>

                         
                             <div id="affCheque" style="display: none;" class="form-group col-9 row">                                        
                                <label class="col-sm-5" for="numCheque">N° chèque: </label>
                                <div class=" col-sm-7">
                                  <input type="text" name="numCheque" class="form-control form-control-sm col-12" id="numCheque">
                                </div>
                            </div> 
                       

                      </div> 

                      <div class="form-group row">
                          <div class="custom-control custom-radio custom-control-inline col-4">
                            <input class="custom-control-input" name="payement" type="radio" value="mobile" id="mobile">
                            <label class="custom-control-label" for="mobile">
                              Transfer mobile
                            </label>
                          </div>

                         
                             <div id="affMob" style="display: none;" class="form-group col-8 row">                                        
                                <label class="col-sm-5" for="tel">N° tel: </label>
                                <div class=" col-sm-7">
                                  <input type="text" name="tel" class="form-control form-control-sm col-12" id="tel">
                                </div>
                            </div> 
                        
                      </div>  

                  </fieldset> 
                </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
              <button id="depot" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
            </div>
          </div>
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

 $('#showdata').on('mouseover','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).addClass('bg-primary');
  });
  $('#showdata').on('mouseout','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).removeClass();
  }); 
  $('#showdata').on('click','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).addClass();
  });


today();
  function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateOverture').val(today);  
}

$('#btnSd').attr('disabled',true);
style();

  //OUVERTURE MODAL SOLDE D'OUVERTURE



  $('#btnSd').click(function(){
      var dat;

      if($('input[name=dateOverture]').val() == ""){
        dat = "";
      }else{
        dat = $('input[name=dateOverture]').val();
      }

      $('#modalSolde').modal('show');
      $('input[name=dateOperation]').val(dat);
      $('input[name=numCptEp]').val($('input[name=codeCli]').val());

  });

  //Fonction additional
  choixClients();
  utils();
  choixPaye();

$('#btnSave').click(function(){

    var data = $('#myForm').serialize();

    	$.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveCompteEpargne',
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

                    var num = response.result.numCompteEp;
                    var dates = response.result.dateOuverture;
                    var id = $('input[name=codeCli]').val();
                    getAllCompte(id);

                    if(response.result.produitEpargne.configProdEp.soldeOverture > 0){
                      $('input[name=dateOperation]').val(dates);
                      $('input[name=numCptEp]').val(num);
                      $('input[name=montantT]').val(response.result.produitEpargne.configProdEp.soldeOverture);
                      $('#modalSolde').modal('show');
                    }

                    //alert('Enregistrement reussit!!');

                   // montant
                   
                    console.log(response);
                      $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> Enregistrement reussit!!'
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
                      message: '<span class="glyphicon glyphicon-remove"> Erreur enregistrement'
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
                    message: '<span class="glyphicon glyphicon-remove"> Ce client a déjà un compte avec ce produit'
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

//ENREGISTREMENT DE PRIMER DEPOT

$('#depot').click(function(){

 var data = $('#formdepot').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveTransactionEpargne',
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
                    $('#modalSolde').modal('hide');
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
                      $('.almod').html('<i class="fa fa-remove">'+'</i>'+'&nbsp;'+response.message)
              .fadeIn().delay(2000).fadeOut('slow');
                }
            },
            error: function(response){
               $('.almod').html('<i class="fa fa-remove">'+'</i>'+'&nbsp;'+response.message)
              .fadeIn().delay(2000).fadeOut('slow');
                /*$.notify({            
                    message: response.message
                },{
                    type: 'danger',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });*/
            }
        });
    });

      //Control
      //ENREGISTREMENT CONFIGURATION 
      var produit = '';

      $('#produit').change(function() {  
        $( "#produit option:selected" ).each(function() {
            produit = $( this ).attr('value');
          }); 
        getDetailProduit(produit);
      });

      //Select produit
       $('#btnSave').attr('disabled',true);
       $('#btnSave').removeClass('btn-primary');
       $('#btnSave').addClass('btn-light');

      function getDetailProduit(id){
         $.ajax({
                type:'ajax',
                method: "get",
                url: '<?php echo base_url();?>index.php/getDetailProduitEpargne', 
                dataType:'json',
                data: {id:id},
                async: false,
                success: function(response) {
                  if(response.configGlEpargne == null || response.configInteretProdEp == null || response.configProdEp == null ){
                    
                     $('.alert-danger').html('Ce produit n\'est pas configuré')
                    .fadeIn().delay(2000).fadeOut('slow');

                     $('#btnSave').attr('disabled',true);
                     $('#btnSave').removeClass('btn-primary');
                     $('#btnSave').addClass('btn-light');

                    if(response.configProdEp.soldeOverture > 0){                      
                      $('#affInfo').attr('style','display:bloc;');
                    }else{
                      $('#affInfo').attr('style','display:none;');
                    }

                  }else{

                   $('.alert-danger').fadeOut('slow');
                   
                    $('#btnSave').attr('disabled',false);
                    $('#btnSave').removeClass('btn-light');
                    $('#btnSave').addClass('btn-primary');

                  }
                },
                error: function(response){
                  alert('Erreur');
                }
            });
      }


   function style(){

    $('#codeCli').blur(function(){

        if($('input[name=codeCli]').val() == ""){
          $('#btnSd').attr('disabled',true);
          $('#btnSd').removeClass('btn-info');
          $('#btnSd').addClass('btn-secondary');
        }else{
          $('#btnSd').attr('disabled',false);
          $('#btnSd').removeClass('btn-secondary');
          $('#btnSd').addClass('btn-info');
        }
    }); 

     $('#codeCli').mouseover(function(){
        $('#btnSd').attr('disabled',false);
        $('#btnSd').removeClass('btn-secondary');
        $('#btnSd').addClass('btn-info');
    });   

     $('#codeCli').mouseout(function(){
        if($('input[name=codeCli]').val() == ""){
          $('#btnSd').attr('disabled',true);
          $('#btnSd').removeClass('btn-info');
          $('#btnSd').addClass('btn-secondary');
        }else{
          $('#btnSd').attr('disabled',false);
          $('#btnSd').removeClass('btn-secondary');
          $('#btnSd').addClass('btn-info');
        }
    }); 

       $('#codeGrp').blur(function(){

        if($('input[name=codeGrp]').val() == ""){
          $('#btnSd').attr('disabled',true);
          $('#btnSd').removeClass('btn-info');
          $('#btnSd').addClass('btn-secondary');
        }else{
          $('#btnSd').attr('disabled',false);
          $('#btnSd').removeClass('btn-secondary');
          $('#btnSd').addClass('btn-info');
        }
    }); 

     $('#codeGrp').mouseover(function(){
        $('#btnSd').attr('disabled',false);
        $('#btnSd').removeClass('btn-secondary');
        $('#btnSd').addClass('btn-info');
    });  

     $('#codeGrp').mouseout(function(){
        if($('input[name=codeGrp]').val() == ""){
          $('#btnSd').attr('disabled',true);
          $('#btnSd').removeClass('btn-info');
          $('#btnSd').addClass('btn-secondary');
        }else{
          $('#btnSd').attr('disabled',false);
          $('#btnSd').removeClass('btn-secondary');
          $('#btnSd').addClass('btn-info');
        }
    }); 


  }

});

</script>