<!-- <div id="dialog" title="Rapport transactions" style="margin-top: 1%;">
 -->
 <div class="right_col" role="main">
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile" style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport transactions épargne</h2>
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

    <div class="row">
      <div class="col-6">
            <h6 id="teteTable">&nbsp;</h6>
      </div>
      <div class="col-6">
           <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
         </div>
      </div>
      <hr>
      <br>
     <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
      <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
        <table class="table table-fixed table-striped table-hover table-sm">
           
            <thead class="thead-dark">
               <tr>
                <th scope="col">#N° transaction</th>
                <th scope="col">Date transaction</th>
                <th scope="col">Mode payement</th>
                <th scope="col">Détail</th>
                <th scope="col">Dépôt</th>
                <th scope="col">Rétrait</th>
              </tr>
            </thead>
            <tbody id="showdata">

            </tbody>
            <tfoot id="showFoot">
              <tr>
                <td colspan="4">Totaux</td>
                <td id="totalDep">0.0</td>
                <td id="totalRet">0.0</td>
              </tr>
            </tfoot>
        </table>
      </div>
  <br/>
</div>
</div>
</div>
</div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Veuillez choisir une période</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>

                <div class="col-12">
                   <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                   </div>      

                    <div class="form-group row">
                      <label for="dateDeb" class="col-form-label lab-date col-sm-4">Période du:</label>
                      <input type="date" class="form-control form-control-sm col-4" name="dateDeb" id="dateDeb">
                    </div>
                    
                    <div class="form-group row">
                      <label for="dateFin" class="col-form-label lab-date col-sm-4">Au période:</label>
                      <input type="date" class="form-control form-control-sm col-4" name="dateFin" id="dateFin">
                    </div>  

                  </div>

              </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
                <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-list"></i> Afficher</button>
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
$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

$('#modalAdd').modal('show');

  $('#change').click(function(){
     $('#modalAdd').modal('show');
     $('#impre').attr('style','display:none');
  });


$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var user = $('input[name=user]').val();

    var data = $('#myForm').serialize();    	
    var datDeb = $('input[name=dateDeb]');
    var datFin= $('input[name=dateFin]');

    var datDeb;
    var datFin;

    var result = '';

    if(datDeb.val() == ''){
      $('#dateDeb').addClass('is-invalid');
       datDeb = 'xxxx-xx-xx';
    }else{
      $('#dateDeb').removeClass('is-invalid');
      result +='1';
      datDeb = datDeb.val();
    } 
    if(datFin.val() == ''){
      $('#dateFin').addClass('is-invalid');
       datFin = 'xxxx-xx-xx';
    }else{
      $('#datFin').removeClass('is-invalid');
      result +='2';
      datFin = datFin.val();
    }

    if(result == '12'){
     $('#textDate').html('transaction entre '+  datDeb +' au '+datFin);  
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   

      getData(data);
    }else{
      $('.alert-danger').html('<h5>'+'&nbsp;'+'Vous devez definir une période, merci!'+'</5>')
      .fadeIn().delay(4000).fadeOut('slow');
    }

});


function getData(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/rapportTransaction',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response) {
                  var i;              
                  var c = response;
                  var html;
                  var code;
                  var t;

                  var depot ='';
                  var retrait = '';
                  var totDeb = 0.0;
                  var totRet = 0.0;

                  if(c.length == null){
                      if(c.typeTransEp == 'DE'){
                        depot = c.montant;
                        retrait = '';
                        totDeb += parseFloat(c.montant);
                      }else if(c.typeTransEp == 'RE'){
                        depot = '';
                       retrait = c.montant;
                       totRet += parseFloat(c.montant);
                      }

                        html += '<tr>' +
                        '<td>' + c.idTransactionEp + '</td>' +
                        '<td>' + c.dateTransaction + '</td>' +
                        '<td>' + c.typePaie + '</td>' +
                        '<td>' + c.description + '</td>' +
                        '<td>' + depot + '</td>' +
                        '<td>' + retrait + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {

                      if(c[i].typeTransEp == 'DE'){
                        depot = c[i].montant;
                        retrait = '';
                        totDeb += parseFloat(c[i].montant);
                      }else if(c[i].typeTransEp == 'RE'){
                        depot = '';
                       retrait = c[i].montant;
                       totRet += parseFloat(c[i].montant);
                      }

                        html += '<tr>' +
                        '<td>' + c[i].idTransactionEp + '</td>' +
                        '<td>' + c[i].dateTransaction + '</td>' +
                        '<td>' + c[i].typePaie + '</td>' +
                        '<td>' + c[i].description + '</td>' +
                        '<td>' + depot + '</td>' +
                        '<td>' + retrait + '</td>' +
                        '</tr>';

                    }                    
                  }

                  $('#modalAdd').modal('hide');
                  //$('#dialog').dialog('open');

                  $('#impre').attr('style','display:bloc;');

                 /* html += '<tr>'+
                  '<td>  &nbsp;</td>'+
                  '</tr>';*/
                  $('#totalDep').html(totDeb);
                  $('#totalRet').html(totRet);
                  $('#showdata').html(html);
            
                 
                }
                else {
                 $.notify({            
                  message: 'Désolé, Auccun resultat de votre recherche,Veuillez essayer avec autre type'
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
               $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!!!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}

});

</script>