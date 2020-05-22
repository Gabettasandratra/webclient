<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Dépôt d'épargne</h2>
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
          
      <div class="">

        <form id="myForm" action="" method="post">           
          <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
           <div class="control-group row"> 
              <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>           

              <div class="form-group col-4 row">
               <label class="col-sm-5" for="numCptEp">N° compte:<span id="champObligatoir">*</span> </label>
                  <div class=" col-sm-7">                            
                    <input type="text" class="form-control form-control-sm col-12" name="numCptEp" id="numCptEp">
                  </div>
               </div>  

            <div class="form-group col-5 row">                                        
                <label class="col-sm-4" for="nom">Nom Client: </label>
                <div class=" col-sm-8">
                  <input type="text" name="nom" class="form-control form-control-sm col-12" id="nom" disabled>
                </div>
              </div>

               <div class="form-group col-3 row">
               <label class="col-sm-3" for="soldeCompte">Solde: </label>
                  <div class=" col-sm-9">
                    <input type="text" style="text-align:right" class="form-control form-control-sm col-12" id="soldeCompte" name="soldeCompte" disabled>
                  </div>
             </div> 
            <input type="hidden" name="transaction" value="DE" id="transaction">
        
          </div>
       </div> 
      <hr style="margin: 20px;"/>
  
  
      <div class="col-12">            
        <div class="control-group row">

          <div class="col-4">  


             <div class="form-group row">                                        
                  <label id="labCode" class="col-sm-5" for="codeCli">Code Client:</label>
                  <div class=" col-sm-6">
                    <input type="text" name="codeCli" class="form-control form-control-sm col-12" id="codeCli" disabled>
                  </div>
              </div>     

               <div class="form-group row">    
                 <label for="produit" class="col-sm-5">Produit:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm col-12" name="produit" id="produit" disabled>
                  </div>                      
                </div> 
              <div class="form-group row">
               <label class="col-sm-5" for="devise">Devise: </label>
                  <div class=" col-sm-6">
                    <input type="text" class="form-control form-control-sm col-12" id="devise" name="devise" disabled>
                  </div>
             </div> 

            <div class="form-group row">                                        
                <label class="col-sm-5" for="description">Description: <span id="champObligatoir">*</span></label>
                <div class=" col-sm-6">
                  <input type="text" name="description" value="Dépôt" class="form-control form-control-sm col-12" id="description">
                </div>
            </div>

          <div class="form-group row">                                        
              <label class="col-sm-5" for="piece">Piece comptable: <span id="champObligatoir">*</span></label>
              <div class=" col-sm-6">
                <input type="text" name="piece" class="form-control form-control-sm col-12" id="piece" required>
              </div>
          </div>

        </div>


        <div class="col-4">  

        <div class="form-group row">                                        
            <label class="col-sm-5" for="dateOperation">Date opération: <span id="champObligatoir">*</span> </label>
            <div class=" col-sm-6">
              <input type="date" name="dateOperation" class="form-control form-control-sm col-10" id="dateOperation" required>
            </div>
        </div>

        <div class="form-group row">                                        
            <label class="col-sm-5" for="montant">Montant: <span id="champObligatoir">*</span></label>
            <div class=" col-sm-6">
              <input type="text" style="text-align:right" name="montant" class="form-control form-control-sm col-12" id="montant" required>
            </div>
        </div> 

         <div class="form-group row">                                        
            <label class="col-sm-5" for="papeterie">Papeterie: </label>
            <div class=" col-sm-6">
              <input type="text" style="text-align:right" name="papeterie" value="0.0" class="form-control form-control-sm col-12" id="papeterie">
            </div>
        </div> 


         <div class="form-group row">                                        
            <label class="col-sm-5" for="commission">Commission: </label>
            <div class=" col-sm-6">
              <input type="text" style="text-align:right" name="commission" value="0.0" class="form-control form-control-sm col-12" id="commission">
            </div>
        </div> 

        <div class="form-group row">                                        
            <label class="col-sm-5" for="montantTot">Montant Total:</label>
            <div class=" col-sm-6">
              <input type="hidden" name="montantT" id="montantT">
              <input type="text" style="text-align:right" name="montantTot" class="form-control form-control-sm col-12" id="montantTot" disabled>
            </div>
        </div>


        </div>  

        <div class="col-4">
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
          </div>  
          <hr>    
          <br>             

            </div>
          </div>
        </form> 
        <br/>
        <hr>
          <div class="row">
          <div class="col-6">
              <h6 id="teteTable">Détails transactions</h6>
          </div>
          <div class="col-6"><!-- style="margin-right:15px;" -->
             <button id="btnSave" style="float: right;" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
          </div>
          </div>
          <br>
           <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
            <table class="table table-fixed table-striped table-hover table-sm">
               <!-- <legende>Rapport des comptes</legende> -->
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">Date operations</th>
                  <th scope="col">Transaction</th>
                  <th scope="col">Dépôt</th>
                  <th scope="col">Retrait</th>
                  <th scope="col">Solde progressif</th>
                  <th scope="col">Piece comptable</th>
                  <th scope="col">Cash/chèque/mobile</th>
                </tr>
                </thead>
                <tbody id="showTrans">
                  <tr id="trAvant" style="display:bloc;">
                    <!-- <td colspan="3"></td> -->
                    <td colspan=7 aling="center" style="font-weight: bold;">Pas de donner de transanction pour le moment</td>
                     <!-- <td colspan="3"></td> -->
                  </tr>
              </tbody>
                <tfoot>
                    <tr>
                      <td colspan="2">Totaux</td>
                      <td id="totalDep">0.0</td>
                      <td id="totalRet">0.0</td>
                      <td id="totalSolde">0.0</td>
                      <td colspan="2"></td>
                    </tr>
                  </tfoot>
              </table>
            </div>

          </div>
        </div>

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

  //CHANGER TRANSACTION
today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateOperation').val(today);  
}


//SAISIE N° DE COMPTE
  $("#numCptEp").autocomplete({
      source: function(request, response){
        var code = $("#numCptEp").val();
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
          $('#totalDep').html('0.0');
          $('#totalRet').html('0.0');
          $('#totalSolde').html('0.0');
          var c = ui.item.value;
          findCompt(c);
          getTrans(c);
          return false;
      }
  });

  function getTrans(num){
    $.ajax({
    type : 'ajax',
    url: '<?php echo base_url();?>index.php/getTransComptEp',
    method: 'get',
    data: {code : num},
    crossDomain: true,
    dataType: 'json',
    jsonpCallback:'callback',
    success: function(data){   
          var aff;
          var depot ='';
          var retrait = '';
          var totDeb = 0.0;
          var totRet = 0.0;
          var lib;
          var soldeTot = 0.0;


        if(data.trans != null){
          var c=data.trans;

         
          if(c.length == null){
            if(c.typeTransEp == 'DE'){
                lib = 'Dépôt';
                depot = c.montant;
                retrait = '';
                totDeb += parseFloat(c.montant);
              }else if(c.typeTransEp == 'RE'){
                 lib = 'Retrait';
               retrait = c.montant;
               depot = '';
               totRet += parseFloat(c.montant);
              }
                
                aff += '<tr>' +
                '<td>' + c.dateTransaction + '</td>' +
                '<td>' + lib + '</td>' +
                '<td>' + depot + '</td>' +
                '<td>' + retrait + '</td>' +
                '<td>' + c.solde + '</td>' +
                '<td>' + c.pieceCompta + '</td>' +
                '<td>' + c.typePaie + '</td>' +
                '</tr>';
          }else{
            for (i = 0; i < c.length; i++) {

              if(c[i].typeTransEp == 'DE'){
                lib = 'Dépôt';
                depot = c[i].montant;
                retrait = '';
                totDeb += parseFloat(c[i].montant);
              }else if(c[i].typeTransEp == 'RE'){
                 lib = 'Retrait';
               retrait = c[i].montant;
               depot = '';
               totRet += parseFloat(c[i].montant);
              }
                
                aff += '<tr>' +
                '<td>' + c[i].dateTransaction + '</td>' +
                '<td>' + lib + '</td>' +
                '<td>' + depot + '</td>' +
                '<td>' + retrait + '</td>' +
                '<td>' + c[i].solde + '</td>' +
                '<td>' + c[i].pieceCompta + '</td>' +
                '<td>' + c[i].typePaie + '</td>' +
                '</tr>';

            }                
          }
        }
         soldeTot = totDeb - totRet;

          $('#totalDep').html(totDeb);
          $('#totalRet').html(totRet);
          $('#totalSolde').html(soldeTot);
          $('#showTrans').html(aff);

    }, 
    error: function(response){
          $('#showTrans').html("");
      }
});
  } 

  function findCompt(num){
   $.ajax({
        type : 'ajax',
        url: '<?php echo base_url();?>index.php/findCompteEpargne',
        method: 'get',
        data: {code : num},
        crossDomain: true,
        dataType: 'json',
        jsonpCallback:'callback',
        success: function(data){   

            var nom;
            var code;

            if (data.result.individuel != null) {
              nom = data.result.individuel.nomClient +' '+data.result.individuel.prenomClient;
              code = data.result.individuel.codeInd;
            }else if(data.result.groupe != null){
              nom = data.result.groupe.nomGroupe;
              code = data.result.groupe.codeGrp;
            }

            $('#numCptEp').val(data.result.numCompteEp); 
            $('#soldeCompte').val(data.result.solde);
            $('input[name=nom]').val(nom);
            $('input[name=codeCli]').val(code);
            $('input[name=produit]').val(data.result.produitEpargne.nomProdEpargne);
            $('input[name=devise]').val(data.result.produitEpargne.configProdEp.devise);

        }, 
        error: function(response){
              alert('ce compte n\'éxiste pas!');
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

//MONTANT TOTAL

$('#montant').keyup(function(){

  var mont = parseFloat($('input[name=montant]').val());
  var papeterie = parseFloat($('input[name=papeterie]').val());
  var commission = parseFloat($('input[name=commission]').val());

  var montTot = mont - papeterie - commission;
  $('input[name=montantTot]').val(montTot);
  $('input[name=montantT]').val(montTot);

});
 
$('#papeterie').keyup(function(){

  var mont = parseFloat($('input[name=montant]').val());
  var papeterie = parseFloat($('input[name=papeterie]').val());
  var commission = parseFloat($('input[name=commission]').val());

  var montTot = mont - papeterie - commission;
  $('input[name=montantTot]').val(montTot);
  $('input[name=montantT]').val(montTot);

});

$('#commission').keyup(function(){

  var mont = parseFloat($('input[name=montant]').val());
  var papeterie = parseFloat($('input[name=papeterie]').val());
  var commission = parseFloat($('input[name=commission]').val());

  var montTot = mont - papeterie - commission;
  $('input[name=montantTot]').val(montTot);
  $('input[name=montantT]').val(montTot);

});



$('#btnSave').click(function(){
      var data = $('#myForm').serialize();

      var compte = $('input[name=numCptEp]');
      var piece= $('input[name=piece]');
      var description= $('input[name=description]');
      var montant= $('input[name=montant]');

      var result = '';

      if(compte.val() == ''){
        $('#numCptEp').addClass('is-invalid');
      }else{
        $('#numCptEp').removeClass('is-invalid');
        result +='1';
      } 

     if(piece.val() == ''){
        $('#piece').addClass('is-invalid');
      }else{
        $('#piece').removeClass('is-invalid');
        result +='2';
      } 

     if(description.val() == ''){
        $('#description').addClass('is-invalid');
      }else{
        $('#description').removeClass('is-invalid');
        result +='3';
      } 
     if(montant.val() == ''){
        $('#montant').addClass('is-invalid');
      }else{
        $('#montant').removeClass('is-invalid');
        result +='4';
      } 

      if (result == '1234') {
        save(data);
      }else{
        alert('Champs incomplète');
      }

});

    function save(data){
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
        
            //alert(response.message);
            var dn = $('input[name=numCptEp]').val();  
            findCompt(dn);
            getTrans(dn);
            $('#trAvant').attr('style','display: none;');
             $.notify({            
                message: '<span class="glyphicon glyphicon-ok"> '+response.message
                },{
                    type: 'success',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });

              $('input[name=piece]').val("p");
              $('input[name=description]').val('Dépôt');
              $('input[name=montant]').val(0);
              $('input[name=montantTot]').val(0);
              $('input[name=montantT]').val(0);
            //$('#showTrans').append(html);
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