<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="tet" style="display:none;">
    <div class="x_title">
      <h2>Bilan</h2>
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
                    <h6 id="teteTable"></h6><!-- <h5 id="textDateImpr">Imprimer par</h5> -->
              </div>
              <div class="col-6"><!-- style="margin-right:15px;" -->
                    <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
                 </div>
            </div>
            <br>
         <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
               <!-- <legende>Rapport des comptes</legende> -->
                <thead class="thead-dark">
                 <tr>
                    <th scope="col">N° compte</th>
                    <th scope="col">Libelé compte</th>
                    <th id="sdAvant" scope="col">Bilan au </th>
                    <th id="sdApres" scope="col">Bilan au </th>                    
                  </tr>
                </thead>
                <tbody id="showdata">
              
                </tbody>
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
          <h5 class="modal-title" id="titre">Bilan dans une periode</h5>
        </div>
        <div class="modal-body">
           <form id="myForm" action="" method="post">
              <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
              <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

              </div>      

              <div class="col-12">

                <div class="form-group row">
                    <label for="dateDeb" class="col-sm-4">Du date :</label>
                    <div class="col-sm-6">
                      <input type="date" id='dateDeb' name="dateDeb" class="form-control form-control-sm col-12">
                    </div>
                 </div>  

                <div class="form-group row">              
                  <label for="dateFin" class="col-sm-4 lab-date">Au :</label>
             
                  <div class="col-sm-6">  
                    <input type="date" class="form-control form-control-sm col-12" name="dateFin" id="dateFin">
                  </div>
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
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.bootstrap4.min.js');?>"></script>
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

  //today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateDeb').val(today);  
}
$('#modalAdd').modal('show');

$( "#dialog" ).dialog({
    autoOpen: false,
    width: 1450,
    height: 610,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "size",
      duration: 800
    }
  });

  $('#change').click(function(){
     $('#modalAdd').modal('show');
     //$('#dialog').dialog('close');     
     $('#tet').attr('style','display:none');
  });


$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=dateDeb]').val();
    var dateF = $('input[name=dateFin]').val();
    var deb;
    var fin;
    var valider = '';

    if(dates == ''){
      deb = 'Tout'
      //$('#dateDeb').addClass('is-invalid');
    }else{
      deb = ' periode du '+dates;
      $('#dateDeb').removeClass('is-invalid');
      valider +='1';
    } 


    if(dateF == ''){
      fin = ''
     // $('#dateFin').addClass('is-invalid');
    }else{
      fin = ' Au '+dateF;
      //$('#dateFin').removeClass('is-invalid');
      valider +='2';
    } 
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Bilan des comptes '+deb +' '+ fin); 

     $('#sdAvant').html('Bilan au '+dates); 
     $('#sdApres').html('Bilan au '+dateF); 
     $('#teteTable').html('Bilan période du '+ dates+' '+dateF); 


     getDonne(data);

});

function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getBilan',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);             
                  var c = response.result;
                  var html;
                                  
                    for (i = 0; i < c.length; i++) {

                       var total_avant = 0;
                       var total_apres = 0;

                       html += '<tr>' +
                        '<td class="thead" colspan=4>' + c[i].compteParent + '</td>' +
                        '</tr>';

                       var list = c[i].listCompte;
                       if(c[i].listCompte.length == null){
                          total_avant += parseFloat(list.soldeInit);
                          total_apres += parseFloat(list.soldeFin);

                          html += '<tr>' +
                          '<td>' + list.numCompte + '</td>' +
                          '<td>' + list.libele + '</td>' +
                          '<td>' + list.soldeInit + '</td>' +
                          '<td>' + list.soldeFin + '</td>' +
                          '</tr>';

                       }else{                        
                         for (var j = 0; j < list.length; j++) {
                            total_avant += parseFloat(list[j].soldeInit);
                            total_apres += parseFloat(list[j].soldeFin);

                            html += '<tr>' +
                            '<td>' + list[j].numCompte + '</td>' +
                            '<td>' + list[j].libele + '</td>' +
                            '<td>' + list[j].soldeInit + '</td>' +
                            '<td>' + list[j].soldeFin + '</td>' +
                            '</tr>';

                         }
                       }


                      html += '<tr>'+
                      '<td class="fot" colspan=2> Totaux</td>'+
                      '<td class="fot"> '+total_avant+'</td>'+
                      '<td class="fot"> '+total_apres+'</td>'+
                      '</tr>';
                    
                    }                    
                  

                  $('#modalAdd').modal('hide');
                 // $('#dialog').dialog('open'); 
                  $('#tet').attr('style','display:bloc');                

                  $('#showdata').html(html);
                     
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
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


});

</script>