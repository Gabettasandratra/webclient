<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Transfert d'épargne</h2>
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
 
    <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

    </div>   
    <div class="row"><!-- style="margin-top: 50px;margin-left:20px;" -->
      <div class="col-6">
        
      </div>
      <div class="col-6">
          <div class="col-12" style="text-align: right">
            <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
          </div>
      </div>

    </div>
    <hr> 
    <br>

        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
              
          <div class="">

            <form id="myForm" action="" method="post">           
        
              <div class="col-12">            
                <div class="control-group row">

                  <div class="col-6"> 

                    <label for="du" style="text-align: center;" class="col-sm-12">Compte envoyeur:</label>
                    <hr><br>
                       <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>

                     <div class="form-group row">
                       <label class="col-sm-4" for="numCompte">N° compte: <span id="champObligatoir">*</span></label>
                          <div class=" col-sm-6">                            
                            <input type="text" class="form-control form-control-sm col-12" placeholder="N° de compte envoyeur" 
                             name="numCompte" id="numCompte">
                          </div>
                       </div> 

                        <div class="form-group row">                                        
                            <label id="labCode" class="col-sm-4" for="codeCli">Code Client: </label>
                            <div class=" col-sm-6">
                              <input type="text" name="codeCli" class="form-control form-control-sm col-12" id="codeCli" disabled>
                          </div>
                        </div>                      

                       <div class="form-group row">                                        
                            <label class="col-sm-4" for="nom">Nom Client: </label>
                            <div class=" col-sm-6">
                              <input type="text" class="form-control form-control-sm col-12" name="nom" id="nom" disabled>
                            </div>
                        </div>  

                       <div class="form-group row">    
                         <label for="produit" class="col-sm-4">Produit:</label>
                          <div class="col-sm-6">
                              <input type="text" class="form-control form-control-sm col-12" name="produit" id="produit" disabled>
                          </div>                      
                        </div> 
                              
                       <div class="form-group row">
                         <label class="col-sm-4" for="soldeCompte">Solde du compte: </label>
                            <div class=" col-sm-6">
                              <input type="text" style="text-align:right" class="form-control form-control-sm col-12" id="soldeCompte" name="soldeCompte" disabled>
                            </div>
                       </div>                    

                 </div>

                  <div class="col-6">
                     <label for="vers" style="text-align: center;" class="col-sm-12">Compte destinataire:</label>
                      <hr class="">
                      <br>
                          <div class="form-group row">
                           <label class="col-sm-4" for="numCompte2">N° compte:  <span id="champObligatoir">*</span> </label>
                              <div class=" col-sm-6">                            
                                <input type="text" class="form-control form-control-sm col-12"
                                placeholder="N° de compte destinataire" name="numCompte2" id="numCompte2">
                              </div>
                           </div> 
        
                          <div class="form-group row">                                        
                              <label id="labCode2" class="col-sm-4" for="codeCli2">Code Client:</label>
                              <div class=" col-sm-6">
                                <input type="text" name="codeCli2" class="form-control form-control-sm col-12" id="codeCli2" disabled>
                              </div>
                          </div>                      

     
                         <div class="form-group row">    
                           <label for="produit" class="col-sm-4">Produit:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm col-12" name="produit2" id="produit2" disabled>
                            </div>                      
                          </div> 

                         <div class="form-group row">                                        
                              <label class="col-sm-4" for="nom">Nom Client: </label>
                              <div class=" col-sm-6">
                                <input type="text" class="form-control form-control-sm col-12" name="nom2" id="nom2" disabled>
                              </div>
                          </div>  
                          


                           <div class="form-group row">
                             <label class="col-sm-4" for="soldeCompte2">Solde du compte: </label>
                                <div class=" col-sm-6">
                                  <input type="text" style="text-align:right" class="form-control form-control-sm col-12" id="soldeCompte2" name="soldeCompte2" disabled>
                                </div>
                           </div> 
                    </div>                 

                </div>
                <br>
                <hr>
                <div class="control-group row">
                    <div class="col-6">  
                     <!--  <div class="form-group row">
                         <label class="col-sm-5" for="devise">Devise: </label>
                            <div class=" col-sm-6">
                              <input type="text" class="form-control form-control-sm col-12" id="devise" name="devise" disabled>
                            </div>
                       </div>  -->

                        <div class="form-group row">                                        
                          <label class="col-sm-5" for="dateOperation">Date opération: <span id="champObligatoir">*</span> </label>
                          <div class=" col-sm-6">
                            <input type="date" name="dateOperation" class="form-control form-control-sm col-8" id="dateOperation" required>
                          </div>
                      </div>


                      <div class="form-group row">                                        
                          <label class="col-sm-5" for="montant">Montant: <span id="champObligatoir">*</span></label>
                          <div class=" col-sm-6">
                            <input type="number" style="text-align:right" name="montant" value="" size="12" maxlength="15"
                            class="form-control form-control-sm col-12" id="montant"  required/>
                          </div>
                      </div> 

                      <div class="form-group row">                                        
                          <label class="col-sm-5" for="piece">Piece comptable: <span id="champObligatoir">*</span></label>
                          <div class=" col-sm-6">
                            <input type="text" name="piece" class="form-control form-control-sm col-12" id="piece" required>
                          </div>
                      </div> 

                    </div> 

                    <div class="col-6">

                        <fieldset class="scheduler-border"> 
                            <legend class="scheduler-border">Mode de payement</legend> 
                                    
                            <div class="form-group row">
                              <div class="custom-control custom-radio custom-control-inline col-4">
                                <input class="custom-control-input" name="payement" type="radio" value="cash" id="cash" checked>
                                <label class="custom-control-label" for="cash">
                                  Cash
                                </label>
                              </div>

                              <div id="affGuichet" class="form-group col-8 row" style="">                              
                                  <label for="numCptCaisse" class="col-sm-5">Guichet:</label>
                                  <select name="numCptCaisse" class="form-control form-control-sm col-7">
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
                                <div class="custom-control custom-radio custom-control-inline col-4">
                                  <input class="custom-control-input" name="payement" type="radio" value="mobile" id="mobile">
                                  <label class="custom-control-label" for="mobile">
                                    Transfer via mobile
                                  </label>
                                </div>

                                 <div id="affMob" style="display: none;" class="form-group col-8 row">                                        
                                    <label class="col-sm-4" for="tel">N° tel: </label>
                                    <div class=" col-sm-8">
                                      <input type="text" name="tel" class="form-control form-control-sm col-12" id="tel">
                                    </div>
                                </div> 
                              
                            </div>  

                        </fieldset> 

                    </div>

                </div>

              </div>
            </form> 
          </div>
        </div>

    <br><br>
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

nb = document.getElementById('montant');
nb.onkeypress = keyPress;


$(function(){

    today();
    function today(){
      var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);

      var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

      $('#dateOperation').val(today);  
    }
    
    //N° d COMPTE 

    //SAISIE N° DE COMPTE 1
      $("#numCompte").autocomplete({
          source: function(request, response){
            var code = $("#numCompte").val();
            //var code =  $('input[name=codeCli]').val();
              $.ajax({
                  type : 'ajax',
                  url: '<?php echo base_url();?>index.php/getCmpt',
                  method: 'get',
                  data: {code : code},
                  crossDomain: true,
                  dataType: 'json',
                  jsonpCallback:'callback',
                  success: function(data){                                
                      response($.map(data, function(item){
                          return item.numCompteEp;
                      }));
                  }
              });
          },
          select: function(event,ui) {
              var c = ui.item.value;
              findCompt1(c);
              return false;
          }
      }); 

    function findCompt1(num){
       $.ajax({
            type : 'ajax',
            url: '<?php echo base_url();?>index.php/getCmpt',
            method: 'get',
            data: {code : num},
            crossDomain: true,
            dataType: 'json',
            jsonpCallback:'callback',
            success: function(data){   

                var nom;
                var code;

                if (data.individuel != null) {
                  nom = data.individuel.nomClient +' '+data.individuel.prenomClient;
                  code = data.individuel.codeInd;
                }else if(data.groupe != null){
                  nom = data.groupe.nomGroupe;
                  code = data.groupe.codeGrp;
                }

                $('#numCompte').val(data.numCompteEp); 
                $('#soldeCompte').val(data.solde);
                $('input[name=nom]').val(nom);
                $('input[name=codeCli]').val(code);
                $('input[name=produit]').val(data.produitEpargne.nomProdEpargne);
                $('input[name=devise]').val(data.produitEpargne.configProdEp.devise);

            }
        });

    }

    //SAISIE N° DE COMPTE DESTINATAIRE
      $("#numCompte2").autocomplete({
          source: function(request, response){
            var code = $("#numCompte2").val();
            //var code =  $('input[name=codeCli]').val();
              $.ajax({
                  type : 'ajax',
                  url: '<?php echo base_url();?>index.php/getCmpt',
                  method: 'get',
                  data: {code : code},
                  crossDomain: true,
                  dataType: 'json',
                  jsonpCallback:'callback',
                  success: function(data){                                
                      response($.map(data, function(item){
                          return item.numCompteEp;
                      }));
                  }
              });
          },
          select: function(event,ui) {
              var c = ui.item.value;
              findCompt2(c);
              return false;
          }
      }); 

    function findCompt2(num){
       $.ajax({
            type : 'ajax',
            url: '<?php echo base_url();?>index.php/getCmpt',
            method: 'get',
            data: {code : num},
            crossDomain: true,
            dataType: 'json',
            jsonpCallback:'callback',
            success: function(data){   

                var nom;
                var code;

                if (data.individuel != null) {
                  nom = data.individuel.nomClient +' '+data.individuel.prenomClient;
                  code = data.individuel.codeInd;
                }else if(data.groupe != null){
                  nom = data.groupe.nomGroupe;
                  code = data.groupe.codeGrp;
                }

                $('#numCompte2').val(data.numCompteEp); 
                $('#soldeCompte2').val(data.solde);
                $('input[name=nom2]').val(nom);
                $('input[name=codeCli2]').val(code);
                $('input[name=produit2]').val(data.produitEpargne.nomProdEpargne);
            }
        });
    }

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


    $('#btnSave').click(function(){

        var data = $('#myForm').serialize();

        var num1 = $('input[name=numCompte]').val();
        var num2 = $('input[name=numCompte2]').val();

        var dateOperation = $('input[name=dateOperation]').val();
        var montant = $('input[name=montant]').val();
        var piece = $('input[name=piece]').val();

        var result = '';

        if(num1 == ''){
          $('#numCompte').addClass('is-invalid');
        }else{
          $('#numCompte').removeClass('is-invalid');
          result +='1';
        }
        if(num2 == ''){
          $('#numCompte2').addClass('is-invalid');
        }else{
          $('#numCompte2').removeClass('is-invalid');
          result +='2';
        }
        if(dateOperation == ''){
          $('#dateOperation').addClass('is-invalid');
        }else{
          $('#dateOperation').removeClass('is-invalid');
          result +='3';
        }
        if(montant == ''){
          $('#montant').addClass('is-invalid');
        }else{
          $('#montant').removeClass('is-invalid');
          result +='4';
        }
        if(piece == ''){
          $('#piece').addClass('is-invalid');
        }else{
          $('#piece').removeClass('is-invalid');
          result +='5';
        }

        if(result == '12345'){
            save(data);
        }else{
          $('.alert-danger').html('Veuillez remplir les champs demandés')
        .fadeIn().delay(5000).fadeOut('slow');   
        }

    });

    function save(data){
        	$.ajax({
                type:'ajax',
                method: "post",
                url: '<?php echo base_url();?>index.php/SaveVirement',
                dataType:'json',
                data: data,
                async: false,
                success: function(response) {
                  var num1 =  $('#numCompte').val(); 
                  var num2 =  $('#numCompte2').val(); 
                  findCompt1(num1);
                  findCompt2(num2);
                    //alert(response);
                    if (response.success) {
                        if(response.type == 'ad')
                        {
                            var type = 'Effectuer';
                        }
                       // alert(response.message);
                        $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> '+response.message
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
                   //alert(response.message); 
                     $.notify({            
                        message: '<span class="glyphicon glyphicon-remove"> '+response.message
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