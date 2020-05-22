<div class="right_col" role="main">
<div class="col-md-12 col-sm-12" style="margin-top: 2%;">
<div class="x_panel tile " id="tet" style="display:none;">
  <div class="x_title">
    <h2>Rapport portefeuille par agent de crédit</h2>
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
            <h6 id="teteTable">Détails crédit</h6>
      </div>
      <div class="col-6">
           <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer date</button>
         </div>
      </div>
      <br>
     <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
      <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
        <table class="table table-fixed table-striped table-hover table-sm">
           
            <thead class="thead-dark">
              <tr>
                 <th scope="col">N° crédit</th>
                 <th scope="col">Montant crédit</th>
                 <th scope="col">Montant décaisser</th>
                 <th scope="col">Montant total</th>
                 <th scope="col">Total remboursé</th>
                 <th scope="col">Total arriéres</th>
                 <th scope="col">Echéance achevé</th>
                 <th scope="col">Total échéance</th>
                 <th scope="col">Portefeuille à risque</th>
              </tr>
            </thead>
            <tbody id="showdata">

            </tbody>
        </table>
      </div>
     <br/>
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
          <h5 class="modal-title" id="titre">Rapport portefeuille par agent crédit</h5>
        </div>
        <div class="modal-body">
           <form id="myForm" action="" method="post">
              <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
              <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

              </div>      

              <div class="col-12">

                <div class="form-group row">
                    <label for="dateDeb" class="col-sm-4">Début période : <span id="champObligatoir">*</span></label>
                    <div class="col-sm-6">
                      <input type="date" id='dateDeb' name="dateDeb" class="form-control form-control-sm col-12">
                    </div>
                 </div>   

                 <div class="form-group row">
                    <label for="dateFin" class="col-sm-4">Fin période : <span id="champObligatoir">*</span></label>
                    <div class="col-sm-6">
                      <input type="date" id='dateFin' name="dateFin" class="form-control form-control-sm col-12">
                    </div>
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
     $('#tet').attr('style','display:none;');//.container
  });

$('#fermerModal').click(function(){
   $('#modalAdd').modal('hide');
});

$('#btnAff').click(function(){

    var btn = $(this);
    $(btn).buttonLoader('start');

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=dateDeb]').val();
    var date2 = $('input[name=dateFin]').val();

    var valider = '';

    if(dates == ''){
      $('#dateDeb').addClass('is-invalid');
    }else{
      $('#dateDeb').removeClass('is-invalid');
      valider +='1';
    } 
    if(date2 == ''){
      $('#dateFin').addClass('is-invalid');
    }else{
      $('#dateFin').removeClass('is-invalid');
      valider +='2';
    } 
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Journal caisse du:  '); 

     if(valider == '12'){
      setTimeout(function(){
        getDonne(data);
        $(btn).buttonLoader('stop');
      }, 2000);
     }else{
      setTimeout(function () {
        $('.alert-danger').html('Les dates ne doivent pas être vide!')
              .fadeIn().delay(2000).fadeOut('slow');
          $(btn).buttonLoader('stop');
          //getDonne(data);
        }, 1000);
       
     }

});

function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getPortefeuilleAgent',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);             
                  var c = response;
                  var html;
                 // var detail = response.cred;
                                  
                    if(c.length == null){
                          html += '<tr>' +
                            '<td class="thead" colspan=9><strong> Agent crédit : ' + c.nom + '</strong></td>' +
                            '</tr>';

                           var list = c.clients;
                           if(c.clients.length == null){

                              var totPayer = parseFloat(list.interetPayer) + parseFloat(list.principalPayer);
                              var totArriers = parseFloat(list.interetRestant) + parseFloat(list.principalRestant);                        
                              var montTot =  parseFloat(list.montantPrincipal) + parseFloat(list.montantInteret);   

                                html += '<tr>' +
                                '<td>' + list.numCredit + '</td>' +
                                '<td>' + list.montantCredit + '</td>' +
                                '<td>' + list.montantDecaisser + '</td>' +
                                '<td>' + montTot + '</td>' +
                                '<td>' + totPayer+ '</td>' +
                                '<td>' + totArriers+ '</td>' +
                                '<td>' + list.echeanceAchever + '</td>' +
                                '<td>' + list.totalEchenance + '</td>' +
                                '<td>' + totArriers + '</td>' +
                                '</tr>';

                           }else{                        
                             for (var j = 0; j < list.length; j++) {
                                var totPayer = parseFloat(list[j].interetPayer) + parseFloat(list[j].principalPayer);
                                var totArriers = parseFloat(list[j].interetRestant) + parseFloat(list[j].principalRestant);                        
                                var montTot =  parseFloat(list[j].montantPrincipal) + parseFloat(list[j].montantInteret); 
                                html += '<tr>' +
                                '<td>' + list[j].numCredit + '</td>' +
                                '<td>' + list[j].montantCredit + '</td>' +
                                '<td>' + list[j].montantDecaisser + '</td>' +
                                '<td>' + montTot + '</td>' +
                                '<td>' + totPayer+ '</td>' +
                                '<td>' + totArriers+ '</td>' +
                                '<td>' + list[j].echeanceAchever + '</td>' +
                                '<td>' + list[j].totalEchenance + '</td>' +
                                '<td>' + totArriers + '</td>' +
                                '</tr>';

                             }
                           }
                    }else{
                        for (i = 0; i < c.length; i++) {
                           html += '<tr>' +
                            '<td class="thead" colspan=9><strong> Agent crédit : ' + c[i].nom + '</strong></td>' +
                            '</tr>';

                           var list = c[i].clients;
                           if(c[i].clients.length == null){

                              var totPayer = parseFloat(list.interetPayer) + parseFloat(list.principalPayer);
                              var totArriers = parseFloat(list.interetRestant) + parseFloat(list.principalRestant); 
                              var montTot =  parseFloat(list.montantPrincipal) + parseFloat(list.montantInteret);                       

                                html += '<tr>' +
                                '<td>' + list.numCredit + '</td>' +
                                '<td>' + list.montantCredit + '</td>' +
                                '<td>' + list.montantDecaisser + '</td>' +
                                '<td>' + montTot + '</td>' +
                                '<td>' + totPayer+ '</td>' +
                                '<td>' + totArriers+ '</td>' +
                                '<td>' + list.echeanceAchever + '</td>' +
                                '<td>' + list.totalEchenance + '</td>' +
                                '<td>' + totArriers + '</td>' +
                                '</tr>';

                           }else{                        
                             for (var j = 0; j < list.length; j++) {
                                var totPayer = parseFloat(list[j].interetPayer) + parseFloat(list[j].principalPayer);
                                var totArriers = parseFloat(list[j].interetRestant) + parseFloat(list[j].principalRestant);  
                                var montTot =  parseFloat(list[j].montantPrincipal) + parseFloat(list[j].montantInteret);                       

                                html += '<tr>' +
                                '<td>' + list[j].numCredit + '</td>' +
                                '<td>' + list[j].montantCredit + '</td>' +
                                '<td>' + list[j].montantDecaisser + '</td>' +
                                '<td>' + montTot + '</td>' +
                                '<td>' + totPayer+ '</td>' +
                                '<td>' + totArriers+ '</td>' +
                                '<td>' + list[j].echeanceAchever + '</td>' +
                                '<td>' + list[j].totalEchenance + '</td>' +
                                '<td>' + totArriers + '</td>' +
                                '</tr>';

                             }
                           }              
                        
                        }
                      
                    }

                  $('#modalAdd').modal('hide');
                  $('#tet').attr('style','display:bloc;');

                  html += '<tr>'+
                  '<td colspan=11>  &nbsp;</td>'+
                  '</tr>';
                  $('#showdata').html(html); 

                  $('#teteTable').html('Total agent : '+c.length);  

                 /*  html += '<tr>'+
                '<td class="fot" colspan=2> Totaux</td>'+
                '<td class="fot"> '+total_avant+'</td>'+
                '<td class="fot"> '+total_apres+'</td>'+
                '</tr>';*/ 

            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


});

</script>