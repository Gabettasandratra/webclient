<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Approbation crédits</h2>
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
          <h5 align="center" class="titre">Approbation crédits</h5>
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
                    <th scope="col">Nom client</th>
                    <th scope="col">Date demande</th>
                    <th scope="col">Montant demandé</th>
                    <th scope="col">Agent de crédit</th>
                    <th scope="col">Situation Crédit</th>
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

<div id="modalAdd" title="Approbation crédit">
     <form id="myForm" action="" method="post">
                
          <div class="col-12">

            <div class="form-group row" >
              <input type="hidden" id="st" value="" name="stat">
                <label for="statuts" class="col-form-label col-sm-4">Action:</label>
                <input type="text" id='statuts' value="" class="form-control form-control-sm col-6" disabled> 
             </div>

              <div class="form-group row" >
                  <label for="cl" class="col-form-label col-sm-4">Client:</label>
                  <input type="text" id='client' value="" class="form-control form-control-sm col-6" disabled> 
               </div>                       
             
            <div class="form-group row" >

                <input type="hidden" id="num" value="" name="numCredit">
                <label for="numCredits" class="col-form-label col-sm-4">Numero crédit:</label>
                <input type="text" id='numCredits' value="" class="form-control form-control-sm col-4" disabled>
          
             </div>     
           
            <div class="form-group row">
              <label for="date_app" class="col-form-label lab-date col-sm-4">Date Approbation:</label>
              <input type="date" class="form-control form-control-sm col-4" name="date_app" id="date_app">
            </div>

            <div class="form-group row" >
                <label for="approuv_par" class="col-form-label lab-app col-sm-4">Approuvé par:</label>
                <input type="text" id='approuv_par' value="<?php echo $nomUtilisateur ?>" class="form-control form-control-sm col-6" name="approuv_par">
             </div>       


             <div class="form-group row" >
                <label for="montant_app" class="col-form-label col-sm-4">Montant:</label>
                <input type="number" style="text-align:right" step="100" id='montant_app' class="form-control form-control-sm col-6" name="montant_app">
             </div>                       
     
            <div class="form-group row" >
                <label for="description" class="col-form-label col-sm-4">Description:</label>
                <textarea id='description' class="form-control form-control-sm col-8" name="description"> </textarea>
             </div>    

            </div>

        </form>
      <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
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


  //Controle modal
  $( "#dialog" ).dialog({
    autoOpen: true,
    width: 1300,
    height: 610,
    show: {
      effect: "size",
      duration: 300,      
    },
    hide: {
      effect: "size",
      duration: 300
    }
  });

  $( "#modalAdd" ).dialog({
    autoOpen: false,
    width: 500,
    height: 550,
    show: {
      effect: "scale",
      duration: 300,      
    },
    hide: {
      effect: "scale",
      duration: 300
    }
  });
//$( "#dialog" ).dialog( "open" );
  $( "#fermerModal" ).on( "click", function() {
   $( "#modalAdd" ).dialog( "close" );
   $('#myForm')[0].reset();
  });

  /*//FERMER MODAL
  $('#fermerModal').click(function(){
    $('#modalAdd').modal('hide');
   
  });*/
 
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#date_app').val(today);  
}




//AFFICHE CREDIT
 afficheCredit();
  function afficheCredit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeApprobation",
        dataType:"json",
        data:{mc: 'Approbation en attente', mc2 : 'commission payer'} ,
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var code;
                var nom;

                if(response.length == null){

                    if (c.individuel != null) {
                      code = c.individuel.codeInd;
                      nom = c.individuel.nomClient +' '+c.individuel.prenomClient; 
                    }else if(c.groupe != null){
                       code = c.groupe.codeGrp;
                       nom = c.groupe.nomGroupe;
                    }
                      //code +' | '+
                      html += '<tr>' +
                      '<td>' + c.numCredit + '</td>' +
                      '<td>' +nom + '</td>' +
                      '<td>' + c.dateDemande + '</td>' +
                      '<td>' + c.montantDemande + '</td>' +
                      '<td>' + c.agent.nomUtilisateur + '</td>' +
                      '<td>' + c.approbationStatut + '</td>' +
                     '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-approbation" nom="'+nom+'"  montant="'+c.montantDemande+'" data="'+ c.numCredit +'" role="button"><i class="fa fa-edit"></i> Approuvé</a>'+
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-rejet" nom="'+nom+'"  montant="'+c.montantDemande+'"  data="'+ c.numCredit +'" role="button"><i class="fa fa-edit"></i> Rejeté</a>'+
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-warning btn-sm item-differer" nom="'+nom+'"  montant="'+c.montantDemande+'"  data="'+ c.numCredit +'" role="button"><i class="fa fa-edit"></i> Différer</a>'+
                
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
                      '<td>' +nom + '</td>' +
                      '<td>' + c[i].dateDemande + '</td>' +
                      '<td>' + c[i].montantDemande + '</td>' +
                      '<td>' + c[i].agent.nomUtilisateur + '</td>' +
                      '<td>' + c[i].approbationStatut + '</td>' +
                     '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-approbation" nom="'+nom+'"   montant="'+c[i].montantDemande+'" data="'+ c[i].numCredit +'" role="button"><i class="fa fa-edit"></i> Approuvé</a>'+
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-rejet" nom="'+nom+'"  montant="'+c[i].montantDemande+'" data="'+ c[i].numCredit +'" role="button"><i class="fa fa-edit"></i> Rejeté</a>'+
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-warning btn-sm item-differer" nom="'+nom+'"  montant="'+c[i].montantDemande+'" data="'+ c[i].numCredit +'" role="button"><i class="fa fa-edit"></i> Différer</a>'+
                
                     '</td>' +
                      '</tr>';
                  }
                  
                }
                //var a=etudiant_table.num_matricule;
                $('#showdata').html(html);
                $('#teteTable').html(response.length+' crédit en attente d\'approbation');
                
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('Accun crédit peut être approuvé pour le moment');
        }
    });
}


$('#btnSave').click(function(){

	  var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();

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
                //Crédit
                var ident = d.substring(0,7);
                console.log(ident);
                $( "#modalAdd" ).dialog( "close" );
                $('#myForm')[0].reset();

                console.log(response);
                    
               if(ident == 'Crédit '){
                $('.alert-success').html(d).fadeIn().delay(5000).fadeOut('slow');                   
               }else{
                $('.alert-danger').html(d).fadeIn().delay(5000).fadeOut('slow');                   
               }
                afficheCredit();
              }
              else {
                  alert('Erreur');
              }
          },
          error: function(){
             $('.alert-danger').html('Erreur enregistrement').fadeIn().delay(5000).fadeOut('slow');
          }
      });
});


$('#showdata').on('click','.item-approbation', function(){
  var id = $(this).attr('data');
  var montant = $(this).attr('montant');
  var nom = $(this).attr('nom');

$( "#modalAdd" ).dialog( "open" );
 $('#modalAdd').attr('title','Approuver demande');

 affText('Approuver demande','Date approbation:','Approuvé par:','Approuver',id,montant,nom);
  $('#statuts').attr('style',' background-color: green;color: white; text-align : center;');
   
    today();


});

$('#showdata').on('click','.item-rejet', function(){

 var id = $(this).attr('data');
  var montant = $(this).attr('montant');
  var nom = $(this).attr('nom');

  $( "#modalAdd" ).dialog( "open" );
 $('#modalAdd').attr('title','Rejeter demande');
 
  affText('Rejeter demande','Date rejet:','Rejeté par:','Rejeté',id,montant,nom);
   $('#statuts').attr('style',' background-color: red;color: white; text-align : center;');
  today();

});

$('#showdata').on('click','.item-differer', function(){

  var id = $(this).attr('data');
 var montant = $(this).attr('montant');
 var nom = $(this).attr('nom');

  $( "#modalAdd" ).dialog( "open" );
 $('#modalAdd').attr('title','Différer demande');

  affText('Différer demande','Date:','Différer par:','Différer',id,montant,nom);


   $('#statuts').attr('style',' background-color: yellow;color: black; text-align : center;');
//  today();

});


function affText(titre,date,differPar,statuts,id,montant,nom){

/*  $('#modalAdd').modal('show');
  $('#modalAdd').find('.modal-title').text(titre);*/
  $('#modalAdd').find('.lab-date').text(date);
  $('#modalAdd').find('.lab-app').text(differPar);
  $('#myForm').attr('action','<?php echo base_url();?>index.php/saveApprobation');
  
  $('#numCredits').attr('value',id);
  $('#num').attr('value',id);
  $('#montant_app').attr('value',montant);
    $('#client').attr('value',nom);

  $('#st').attr('value',statuts);
  $('#statuts').attr('value',statuts);
  today();

}


});

</script>