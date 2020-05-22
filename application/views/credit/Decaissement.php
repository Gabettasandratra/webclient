<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Décaissement crédits</h2>
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

       <!--  <div class="card-header col-8 place">
          <h5 align="center" class="titre">Décaissement crédits</h5>
        </div>
        <br>
        <br> -->
         <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div>    

          <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div> 
         <hr>
          <div class="row">
            <div class="col-6">
                  <h6 id="teteTable"></h6>
            </div>
            <div class="col-6">
            </div>
            </div>
          <br>
       
          <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div class="table-responsive-sm contTable">
            <table class="table table-fixed table-striped table-hover table-sm">
               <!-- <caption>Paiement commission</caption> -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">N° Crédit</th>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Montant approuvé</th>
                    <th scope="col">Situation Crédit</th>
                    <th scope="col">Date approbation</th>
                    <th scope="col">Action</th>
                   </tr>
                </thead>
                <tbody id="showdata">
               
                </tbody>
            </table>
          </div>
          <br>
          <br>
          
    </div>
  </div>
 </div>
</div>

<!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->

<div id="modalAdd" title="Décaissement crédit">
        
  <form id="myForm" action="" method="post" style="margin-top: 3%;">
      
     <div class="">         
        <div class="alert alert-danger al" style="display: none;margin-bottom: 25px;text-align:center; ">

        </div> 
          <div class="form-group col-12" aling="center">

            <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
            <input type="hidden" id="num" name="numCredit"  value=""/>

            <div class="form-group row" >
                <label for="numCredit" class="col-form-label col-5">Numero crédit:</label>
                <div class="col-5">
                  <input type="text" id='numCredits' class="form-control form-control-sm col-10"
                  style="background-color: green;color: white; text-align : center;" disabled>
                </div>
             </div>     
           
            <div class="form-group row">
              <label for="date_dec" class="col-form-label col-5 lab-date">Date décaissement:</label>
              <div class="col-5">
                <input type="date" class="form-control form-control-sm col-10" name="date_dec" id="date_dec">
              </div>
            </div> 

            <div class="form-group row" >
                <label for="piece" class="col-form-label col-5">Pièce comptable:</label>
                <div class="col-5">
                  <input type="text" id='piece' class="form-control form-control-sm" name="piece">
                </div> 
             </div>   

            <div class="form-group row" >
                <label for="montant" class="col-form-label col-5">Montant:</label>
                <div class="col-5">
                  <input type="text" style="text-align:right" id='montant' class="form-control form-control-sm" name="montant">
                </div> 
             </div>                     

            <div class="form-group row">
                <label for="commission" class="col-form-label col-5">Commission:</label>
                <div class="col-5">
                  <input type="text" style="text-align:right" id='commission' value="0" class="form-control form-control-sm" name="commission">
                </div>  
             </div>                       
    
            <div class="form-group row">
                <label for="papeterie" class="col-form-label col-5">Papeterie:</label>
                <div class="col-5">
                  <input type="text" style="text-align:right" id='papeterie' value="0" class="form-control form-control-sm" name="papeterie">
                </div>  
             </div>   

            </div>
        </div>

          <div class="col-12">
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
                      Transfert mobile
                    </label>
                  </div>

                 
                     <div id="affMob" style="display: none;" class="form-group col-7 row">                                        
                        <label class="col-sm-5" for="tel">N° tel: </label>
                        <div class=" col-sm-7">
                          <input type="text" name="tel" class="form-control form-control-sm col-12" id="tel">
                        </div>
                    </div> 
                
              </div>  

             <div class="form-group row">
                  <div class="custom-control custom-radio custom-control-inline col-5">
                    <input class="custom-control-input" name="payement" type="radio" value="epargne" id="epargne">
                    <label class="custom-control-label" for="epargne">
                      Transfert épargne
                    </label>
                  </div>

                 <div id="affEp" style="display: none;" class="form-group col-7 row">                                        
                     <label for="comptEpargne" class="col-sm-4">Compte:</label>
                     <select id="comptEpargne" name="comptEpargne" class="form-control form-control-sm col-8">
                        <option></option>                         
                     </select>
                  </div>    
                
              </div>  

          </fieldset> 

      </div>  
    </form>

    <div class="modal-footer">
      <button type="button" class="btn btn-sm btn-danger" id="fermerModal">Fermer</button>
      <button type="button" id="btnSave" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Enregistrer</button>
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

  $( "#modalAdd" ).dialog({
    autoOpen: false,
    width: 500,
    height: 600,
    show: {
      effect: "scale",
      duration: 300,      
    },
    hide: {
      effect: "scale",
      duration: 300
    }
  });

  //$('#btnSave').attr('disabled');
   //FERMER MODAL
  $('#fermerModal').click(function(){
    $('#modalAdd').dialog('close');
    $('#myForm')[0].reset();
  });

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
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affCheque').attr('style', 'display: none;'); 
      $('#affEp').attr('style', 'display: none;');                                             
  });
 
 $('#epargne').click(function() {

      $('#affEp').attr('style', 'display: bloc;');                                             
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affCheque').attr('style', 'display: none;');                                             
      $('#affMob').attr('style', 'display: none;');                                             
  });

//AFFICHE CREDIT
 afficheCredit();
  function afficheCredit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeDecaissement",
        dataType:"json",
        data:{mc: 'Approuver', mc2 : 'payé apres approbation'} ,
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
                      nom = c.individuel.nomClient +' '+c.individuel.prenomClient; 
                    }else if(c.groupe != null){
                       code = c.groupe.codeGrp;
                       nom = c.groupe.nomGroupe;
                    }

                      html += '<tr>' +
                      '<td>' + c.numCredit + '</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c.montantApproved + '</td>' +
                      '<td>' + c.approbationStatut + '</td>' +
                      '<td>' + c.dateApprobation + '</td>' +
                     '<td>' +
                    '<a href="javascript:;" code="'+ code +'"  montant="'+ c.montantApproved +'" class="btn btn-success btn-sm item-decaisser" data="'+ c.numCredit +'" role="button"> Décaisser</a>'+
                     '</td>' +
                      '</tr>';
                }else{
                  for (i = 0; i < c.length; i++) {

                    if (c[i].individuel != null) {
                      code = c[i].individuel.codeInd;
                      nom = c[i].individuel.nomClient +' '+c[i].individuel.prenomClient; 
                    }else if(c[i].groupe != null){
                       code = c[i].groupe.codeGrp;
                       nom = c[i].groupe.nomGroupe;
                    }

                      html += '<tr>' +
                      '<td>' + c[i].numCredit + '</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c[i].montantApproved + '</td>' +
                      '<td>' + c[i].approbationStatut + '</td>' +
                      '<td>' + c[i].dateApprobation + '</td>' +
                     '<td>' +
                    '<a href="javascript:;" code="'+ code +'" montant="'+ c[i].montantApproved +'" class="btn btn-success btn-sm item-decaisser" data="'+ c[i].numCredit +'" role="button"> Décaisser</a>'+
                     '</td>' +
                      '</tr>';
                  }
                  
                }

                $('#teteTable').html(c.length+' crédit en attente de décaissement');
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

  var dateDec = $('input[name=date_dec]');
  var piece = $('input[name=piece]');
  var montant = $('input[name=montant]');

  var valider = '';

 if(dateDec.val() == ''){
    $('#date_dec').addClass('is-invalid');
  }else{
    $('#date_dec').removeClass('is-invalid');
    valider +='1';
  }
  if(piece.val() == ''){
    $('#piece').addClass('is-invalid');
  }else{
    $('#piece').removeClass('is-invalid');
    valider +='2';
  }
  if(montant.val() == ''){
    $('#montant').addClass('is-invalid');
  }else{
    $('#montant').removeClass('is-invalid');
    valider +='3';
  }

  if(valider == '123'){
    saveDec(data,url);

  }else{
    $('#modalAdd').dialog('open');
    $('.al').html('Veuillez remplir les formulaire!!!').fadeIn().delay(5000).fadeOut('slow');
  }

});

function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#date_dec').val(today);  
}

$('#showdata').on('click','.item-decaisser', function(){
  var id = $(this).attr('data');
  var montant = $(this).attr('montant');
  var code = $(this).attr('code');
  $('#modalAdd').dialog('open');
  $('#myForm').attr('action','<?php echo base_url();?>index.php/saveDecaissement');

  $('#numCredits').attr('value',id);
  $('#montant').attr('value',montant);
  $('#num').attr('value',id);
  getCompteEpargne(code);
  today();

});

function saveDec(data,url){
  $.ajax({
      type:'ajax',
      method: "post",
      url: url,
      dataType:'json',
      data: data,
      async: false,
      success: function(response) {
          //alert(response);
          if (response.success) {
            var d = response.resultat;
              if(response.type == 'ad')
              {
                  var type = 'Enregistrer';
              }
              $('#modalAdd').dialog('close');
              console.log(response);
             
            $('.alert-success').html('Décaissement reuissit!!!').fadeIn().delay(5000).fadeOut('slow');

            afficheCredit();
          }
      },
      error: function(){
        $('#modalAdd').dialog('open');
       
      }
  });
}

    //Chercher compte épargne du client en question
    
    function getCompteEpargne(id){
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

                   detailEpargne += '<option></option>';   

                    //détail épargne
                    if(epargne.length == null){
                       detailEpargne+='<option value="'+epargne.numCompteEp+'">'+epargne.numCompteEp+' |'+epargne.solde+'</option>';     
                    }else{
                      c = epargne.length;
                      for (i = 0; i < epargne.length; i++) {
                        detailEpargne+='<option value="'+epargne[i].numCompteEp+'">'+epargne[i].numCompteEp+' |'+epargne[i].solde+'</option>';                   
                      }
                      
                    }

                    $('#comptEpargne').html(detailEpargne);
                 }
              
            },
            error: function(response){            
              var detailEpargne = '<option></option>';  
              $('#comptEpargne').html(detailEpargne); 
            }
        });
    }

});

</script>