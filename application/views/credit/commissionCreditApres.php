

<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Paiement Commission après approbation</h2>
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
        <h5 align="center" class="titre">Paiement Commission après approbation</h5>
      </div>
      <br> -->
       <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

      </div>    

      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

      </div> 
      <br>
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
                    <th scope="col">N° Client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date demande</th>
                    <th scope="col">Montant demandé</th>
                    <th scope="col">Statut de Crédit</th>
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

<!-- MODAL POUR LES FORMULAIRES DES COMMISSION ET L'ENREGISTRER -->
 <div id="modalAdd" title="Payement commission">

    <form id="myForm" action="" method="post" style="margin-top: 3%;">
      
      <div class="col-12">
           
            <div class="form-group">
             
              <input type="hidden" name="user" value="<?php echo $idUtilisateur ?>"/>
              <input type="hidden" name="tcode" value=""/>
              <input type="hidden" name="cheqid" value=""/>
              <input type="hidden" name="statut_comm" value="commission payer"/>
              <input type="hidden" name="tdf" value=""/>
              <input type="hidden" name="totvat" value=""/>
              <input type="hidden" name="cptCaisseNum" value=""/>
             

              <input id="paramNumCredit" type="hidden" name="numCredit"  value=""/>

               <div class="alert alert-danger al" style="display: none;margin-bottom: 25px;text-align:center; ">

                </div> 
               
               <div class="form-group row">
                  <label for="numCred" class="col-form-label col-sm-5">N° crédit:</label>
                  <input type="text" style="background-color: green;color: white; text-align : center;" class="form-control form-control-sm col-6" name="numCred" id="numCred" disabled>
                </div>

             <div class="form-group row">
                <label for="client" class="col-form-label col-sm-5">Client:</label>
                <input type="text" class="form-control form-control-sm col-6" name="client" id="client" disabled>
              </div>
             
              <div class="form-group row" >
                <label for="papeterie" class="col-form-label col-sm-5">Papeterie:</label>
                <input type="text" style="text-align:right" id='papeterie' step='100' class="form-control form-control-sm col-6" name="papeterie" disabled>
             </div>                       

            <div class="form-group row" >
                <label for="commission" class="col-form-label col-sm-5">Commission de crédit:</label>
                <input type="text" style="text-align:right" id='commission' value="" step='100' class="form-control form-control-sm col-6" name="commission" disabled>
             </div>                       

            <div class="form-group row" >
                <label for="frais" class="col-form-label col-sm-5">Frais de développement:</label>
                <input type="text" style="text-align:right" id='frais' step='100' class="form-control form-control-sm col-6" name="frais" disabled>
             </div> 

            
         </div>

        <div class="form-group">

             <div class="form-group row">
                <label for="datePaie" class="col-form-label col-sm-5">Date de paiement:</label>
                <input type="date" class="form-control form-control-sm col-4" name="datePaie" id="datePaie">
                <!-- <div class="col-4">
                </div> -->
              </div>

              <div class="form-group row" >
                  <label for="piece" class="col-form-label col-sm-5">Pièce comptable:</label>
                  <input type="text" id='piece' class="form-control form-control-sm col-6" name="piece">
               </div>   

              <div class="form-group">

                   <fieldset class="scheduler-border"> 
                    <legend class="scheduler-border">Mode de payement</legend> 
                            
                    <div class="form-group">
                      
                       <div class="form-group row">
                        <div class="custom-control custom-radio custom-control-inline col-12">
                          <input class="custom-control-input" name="payement" type="radio" value="cash" id="cash" checked>
                          <label class="custom-control-label" for="cash">
                            Cash
                          </label>
                        </div>
                      </div>
                        
                      <div class="form-group row">
                          
                          <label for="numCptCaisse" class="col-sm-5">Guichet:</label>
                          <select name="numCptCaisse" class="form-control form-control-sm col-7">
                                  <option></option>
                             <?php foreach($comm->Liste_CompteCaisse as $value) :?>
                                  <option value="<?= $value->nomCptCaisse ?>"><?= $value->nomCptCaisse ?> || <?= $value->account->numCpt ?></option>
                              <?php endforeach; ?>
                        </select>
                      </div>

                    </div>   
                </fieldset> 
              </div>  


            </div>

          </div>

        </form>
     
    <div class="modal-footer">
      <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
      <button type="button" id="btnSave" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
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
    height: 630,
    show: {
      effect: "scale",
      duration: 300,      
    },
    hide: {
      effect: "scale",
      duration: 300
    }
  });
  function today(){
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    $('#datePaie').val(today);  
  }


  //FERMER MODAL
  $('#fermerModal').click(function(){
    $('#modalAdd').dialog('close');
    $('#myForm')[0].reset();
  });

  //AFFICHE LIST DES CREDIT
  afficheCredit();
  function afficheCredit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeCommApres",
        dataType:"json",
        data:{mc: '0'} ,
        async: false,
        success:function(response){
            if(response){
                  var c = response;
                var html;
                var code;
                var nom;

                if (response.length == null) {

                    if (c.individuel != null) {
                      code = c.individuel.codeInd;
                      nom = c.individuel.nomClient +' '+c.individuel.prenomClient; 
                    }else if(c.groupe != null){
                       code = c.groupe.codeGrp;
                       nom = c.groupe.nomGroupe;
                    }

                      html += '<tr>' +
                      '<td>' + c.numCredit + '</td>' +
                      '<td>' +code+'</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c.dateDemande + '</td>' +
                      '<td>' + c.montantDemande + '</td>' +
                      '<td>' + c.approbationStatut + '</td>' +
                      '<td>' +
                      '<a href="javascript:;" class="btn btn-success btn-sm item-paye" nom="'+nom+'" variable="'+ c.numCredit +'" data="'+c.produitCredit.idProdCredit+'" role="button">'+
                      'payer</a>'+
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
                      '<td>' +code+'</td>' +
                      '<td>' + nom + '</td>' +
                      '<td>' + c[i].dateDemande + '</td>' +
                      '<td>' + c[i].montantDemande + '</td>' +
                      '<td>' + c[i].approbationStatut + '</td>' +
                      '<td>' +
                      '<a href="javascript:;" class="btn btn-success btn-sm item-paye" nom="'+nom+'" variable="'+ c[i].numCredit +'" data="'+c[i].produitCredit.idProdCredit+'" role="button">'+
                      'payer</a>'+
                      '</td>' +
                      '</tr>';
                    }

                }
                $('#teteTable').html(c.length+' crédit en attente de commission');

                $('#showdata').html(html);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('Accun crédit peut être payer la commission après approbation');
            $('#teteTable').html('Auccun crédit');
            $('#showdata').html('données vide');
        }
    });
}


//ENREGISTREMENT COMMISSION


$('#btnSave').click(function(){

    var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();
    var piece = $('input[name=piece]').val();

    if(piece == ''){
      $('#piece').addClass('is-invalid');
      $('.al').html('Le champ piece ne doit pas être vide').fadeIn().delay(3000).fadeOut('slow');
    }else{
      $('#piece').removeClass('is-invalid');
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
                   
                    $('#modalAdd').dialog('close');
                    $('#myForm')[0].reset();
                    $('.alert-success').html('Payemment commission enregistrer avec succes!').fadeIn().delay(5000).fadeOut('slow');
                    afficheCredit();
                }
                else {
                   $('.alert-danger').html('Erreur enregistrement commission').fadeIn().delay(5000).fadeOut('slow'); 
                }
            },
            error: function(){
              $('.alert-danger').html('Erreur enregistrement commission').fadeIn().delay(5000).fadeOut('slow');
            }

    });
  }
});

//CLICK SUR LE BOUTTON PAYER
$('#showdata').on('click','.item-paye', function(){
  var id = $(this).attr('data');
  var numCredit = $(this).attr('variable');
  var nom = $(this).attr('nom');

  $('#modalAdd').dialog('open');
  $('#myForm').attr('action','<?php echo base_url();?>index.php/saveCommission');

  today();
  $('#paramNumCredit').attr('value', numCredit);
  $('#client').attr('value', nom);
  $('#numCred').attr('value', numCredit);


  $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/editCommission',
      dataType: 'json',
      data:{idProdCredit: id},
      async: false,
      success: function(data){
        //alert('ok')
        $('input[name=paps]').val(data.configFraisCredit.papeterie);
        $('input[name=papeterie]').val(data.configFraisCredit.papeterie);
        $('input[name=comms]').val(data.configFraisCredit.commission);
        $('input[name=commission]').val(data.configFraisCredit.commission);
        $('input[name=frais]').val(data.configFraisCredit.fraisDeveloppement);

      },
      error: function(){
        alert('Impossible d\'afficher les donnée')
      }

  });


});


});

</script>