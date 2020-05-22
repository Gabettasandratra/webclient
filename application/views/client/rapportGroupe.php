<div class="right_col" role="main" >
 <div id="impre" class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile " >
    <div class="x_title">
      <h2>Rapport client groupe</h2>
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

         <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                  <tr>
                      <th scope="col">Code groupe</th>
                      <th scope="col">Nom groupe</th>
                      <!-- <th scope="col">Président</th> -->
                      <th scope="col">Date inscription</th>
                      <th scope="col">Adresse</th>
                      <!-- <th scope="col">Membres</th> -->
                  </tr>
                </thead>
                <tbody id="showClient">

                </tbody>
            </table>
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


<script src="<?php echo base_url('/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
    <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>

<script type="text/javascript">

$(function(){

    allGroupe();
    //getClient();
    //Configuration table
     $('#tab').DataTable({
      language: {
          url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
      }, dom: 'flrtBp',
          buttons: [
          'excelHtml5',
          'pdfHtml5',
          'print'
          ]
      });
    function getClient(){

        $.ajax({
          type:'ajax',
          method: "get",
          url: '<?php echo base_url();?>index.php/getClientNonApprouver',
          dataType:'json',
          async: false,
          success: function(response) {
              var i;
              var c = response;
              var html;

               if(c.length == null){
                   html += '<tr>' +
                    '<td>' + c.codeInd + '</td>' +
                    '<td>' + c.nomClient +' '+c.prenomClient + '</td>' +
                    '<td>' + c.dateInscription + '</td>' +
                    /*'<td>' + c.numeroMobile + '</td>' +*/
                    '<td>' + c.sexe + '</td>' +
                    '<td>' + c.email + '</td>' +
                    '<td>' + c.profession + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+ c.codeInd+'">Approuver </a>' +
                    '</td>' +
                    '</tr>';
              }else{
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].codeInd + '</td>' +
                    '<td>' + c[i].nomClient +' '+c[i].prenomClient + '</td>' +
                    '<td>' + c[i].dateInscription + '</td>' +
                    /*'<td>' + c[i].numeroMobile + '</td>' + <i class="fa fa-eye"></i> */
                    '<td>' + c[i].sexe + '</td>' +
                    '<td>' + c[i].email + '</td>' +
                    '<td>' + c[i].profession + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+ c[i].codeInd+'">Approuver</a>' +
                    '</td>' +
                    '</tr>';
                }
                
              }
              $('#showIndividuel').html(html);      

          },
          error: function(){
              alert('pas de donnée');
          }
      });

    }

      //AFFICHAGE D TOUT CLIENT

//GROUPE

function allGroupe(){
    $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/chargeGroupe',
      dataType: 'json',
      async: false,
      success: function(data){
         var html = '';
         var i;
           if(data){
                var c = data;
                var html;
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].codeGrp + '</td>' +
                    '<td>' + c[i].nomGroupe + '</td>' +
                    '<td>' + c[i].dateInscription + '</td>' +
                    '<td>' + c[i].adresse.adressePhysique + '</td>' +
                    //'<td>' + c[i].membres.length + '</td>' +
                    '</tr>';
                }

                $('#showClient').html(html);
            }

      },
      error: function(){
        alert('Accun Membres trouver!');
       
      }
  });
}

});

</script>