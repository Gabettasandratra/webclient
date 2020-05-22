<br/>
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="dialog" style="margin-top: 1%;display:none;">
    <div class="x_title">
      <h2>ournal des divers comptes</h2>
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

    <div class="form-group">
        
        <div class="row">
          <div class="col-6">
                <h6 id="teteTable"></h6>
          </div>
          <div class="col-6"><!-- style="margin-right:15px;" -->
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer date</button>
             </div>
        </div>
        <br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table class="table table-fixed table-striped table-hover table-sm">
             <!-- <legende>Rapport des comptes</legende> -->
              <thead class="thead-dark">
               <tr>
                  <th scope="col">#N° piece</th>
                  <th scope="col">Date opération</th>
                  <th scope="col">Compte | description de l'opération</th>
                  <th scope="col">Débit</th>
                  <th scope="col">Crédit</th>
                </tr>
              </thead>
              <tbody id="showdata">

              </tbody>
              <tfoot id="showFoot">
                <tr>
                  <td colspan=3>Totaux</td>
                  <td id="totalDeb">0.0</td>
                  <td id="totalCred">0.0</td>
                </tr>
              </tfoot>
            </table>
          </div>  

      </div>
      <br>
      <br>
      <br>
    </div>
    </div>
    </div>
    </div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Journal des autres comptes</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                <div class="col-12">

                    <div class="form-group row">
                      <label for="dateDeb" class="col-form-label lab-date col-sm-4">Date rapport:</label>
                      <input type="date" class="form-control form-control-sm col-4" name="dateDeb" id="dateDeb">
                    </div>

                </div>

              </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
                <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Afficher</button>
          </div>
      </div>
  </div>
</div>
</div>



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

  today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateDeb').val(today);  
}


$('#modalAdd').modal('show');

  $('#change').click(function(){
     $('#modalAdd').modal('show');
     $('#dialog').attr('style','display:none;');
  });


$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=dateDeb]').val();

    var d;

    if(dates == ''){
      d = '';
    }
    else{
      d = dates;
    }
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Journal jusqu\'au date :  '+d); 

     getDonne(data);

});


function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getJournalDivers',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response) {}
                  var i;              
                  var c = response;
                  var html;

                  var debit = '';
                  var credit = '';

                  var total_Credit = 0;
                  var total_Debit = 0;

                  if(c.length == null){
                     total_Credit += parseFloat(c.credit);
                      total_Debit += parseFloat(c.debit);
                      html += '<tr>' +
                        '<td>' + c.piece + '</td>' +
                        '<td>' + c.date + '</td>' +
                        '<td>' + c.account.numCpt +'  |  '+ c.descr + '</td>' +
                        '<td>' + c.debit + '</td>' +
                        '<td>' + c.credit + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {
                       total_Credit += parseFloat(c[i].credit);
                       total_Debit += parseFloat(c[i].debit);

                        html += '<tr>' +
                        '<td>' + c[i].piece + '</td>' +
                        '<td>' + c[i].date + '</td>' +
                        '<td>' + c[i].account.numCpt +'  |  '+ c[i].descr + '</td>' +
                        '<td>' + c[i].debit + '</td>' +
                        '<td>' + c[i].credit + '</td>' +
                        '</tr>';
                    }                    
                  }

                  $('#modalAdd').modal('hide');
                   $('#dialog').attr('style','display:bloc;');

                  html += '<tr>'+
                  '<td colspan=5>  &nbsp;</td>'+
                  '</tr>';
                  $('#totalDeb').html(total_Debit);
                  $('#totalCred').html(total_Credit);

                  $('#showdata').html(html);   
                  $('#teteTable').html('Totaux transaction : '+c.length); 
                                                 
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


});

</script>