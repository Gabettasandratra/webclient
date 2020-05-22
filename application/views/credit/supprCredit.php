<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Supprimer crédits</h2>
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
    
          <!-- Notification pour d'une action pas d'erreur -->
         <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div>    
          <!-- Notification pour d'une action avec d'erreur -->
          <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div> 

          <div class="row">
            <div class="col-6">
                  <h6 id="teteTable"></h6>
            </div>
            <div class="col-6">
            </div>
            </div>
          <br>
       
          <!--  Tableau qui affiche la liste des crédits -->
          <div class="table-responsive-sm contTable">
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
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

  <!-- Modal de confirmation de suppression -->

  <div class="modal fade" id="modalSupp" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Suppression crédit</h5>
        </div>
        <div class="modal-body" id="bodyInfo">             
            <input type="hidden" name="numCred" id="numCred"/>
            <h6 id="infos"></h6>
        </div>
        <div class="modal-footer">
          <button id="btn-accept" type="button" class="btn btn-sm btn-success">Oui</button>
          <button id="btn-refuse" type="button" class="btn btn-sm btn-secondary">Non</button>
        </div>
      </div>
    </div>
  </div>


<!-- <div id="modalSupp" title="Suppression crédit">
     <form id="myForm" action="" method="post">
        <input type="hidden" name="numCred" id="numCred"/>
        <h5 id="conf"> </h5>    
     </form>
      <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
          <button type="button" id="btnSave" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Enregistrer</button>
    </div>
</div> -->

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
   //Configuration table
   $('#tab').DataTable({
      language: {
          url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
      }, dom: 'flrtp',
          buttons: [
          'excelHtml5',
          'pdfHtml5',
          'print'
          ]
    });
  function afficheCredit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/getCredit",
        dataType:"json",
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
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-delete" nom="'+nom+'" data="'+ c.numCredit +'" role="button"><i class="fa fa-remove"></i> Supprimer</a>'+
                
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
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-delete" nom="'+nom+'" data="'+ c[i].numCredit +'" role="button"><i class="fa fa-remove"></i> Supprimer</a>'+
                     '</td>' +
                      '</tr>';
                  }
                  
                }
                //var a=etudiant_table.num_matricule;
                $('#showdata').html(html);
                $('#teteTable').html('Totaux crédit '+response.length);
                
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('Données vide!');
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


$('#showdata').on('click','.item-delete', function(){
  var id = $(this).attr('data');
  var nom = $(this).attr('nom');
  
  $('#modalSupp').modal('show');

  $('input[name=numCred]').val(id);
  $('#infos').html('Voulez vous vraiment supprimer le crédit n° '+id+' ?');
});

//Annuler suppression
$('#btn-refuse').click(function(){
    $('#modalSupp').modal('hide');
});


});

</script>