<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="dialog" style="display:none;">
    <div class="x_title">
      <h2>Grand Livre générale</h2>
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
                <h6 id="d">&nbsp;&nbsp;</h6><!-- teteTable -->
          </div>
          <div class="col-6"><!-- style="margin-right:15px;" -->
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer critères</button>
             </div>
        </div>
        <br>
        <br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table id="tab" class="table table-fixed table-striped table-hover table-sm">
             <!-- <legende>Rapport des comptes</legende> -->
              <thead class="thead-dark">
               <tr>
                  <th scope="col">#Code transaction</th>
                  <th scope="col">N° Compte</th>
                  <th scope="col">Date transaction</th>
                  <th scope="col">Description transaction</th>
                  <th scope="col">Piece</th>
                  <th scope="col">Débit</th>
                  <th scope="col">Crédit</th>
                </tr>
              </thead>
              <tbody id="showGrandLivre">
            
              </tbody>
              <tfoot id="showFoot">
               
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

<div id="modalAdd" title="Grand Livre Générale" style="margin-top: 2%">

    <form id="myForm" action="<?php echo base_url();?>index.php/afficheGrandLivre" method="post">
      <div class="">

          <div class="form-group row">
           <!--  <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle col-sm-1"></i> -->
            <label for="type" class="col-sm-4">Afficher par: </label>
            <div class="col-sm-6">
              <select class="form-control form-control-sm col-12" id="type">
                   <option value="">--Choisir type--</option>
                   <option value="compte">Par compte</option>
                  <!--  <option value="utilisateur">Par utilisateur</option> -->
                   <option value="parDate">Par date</option>
              </select>
            </div>
         </div>  

         <div id="affUser" class="form-group col-3 row" style="display: none;">              
            <label for="nomUtilisateur" class="col-sm-4">Nom:</label>             
            <div class="col-sm-8">  
              <input type="text" class="form-control form-control-sm col-12" name="nomUtilisateur" id="nomUtilisateur">
            </div>
          </div>
        


         <div id="affCompte" class="form-group row" style="display: none">              
            <label for="compte" class="col-sm-4">Compte:</label>             
            <div class="col-sm-6">  
              <input type="text" class="form-control form-control-sm col-12" name="compte" id="compte">
            </div>
          </div>

         <div id="affDeb" class="form-group row">
            <label for="dateDeb" class="col-sm-4">Date début:</label>
            <div class="col-sm-6">
              <input type="date" id='dateDeb' name="dateDeb" class="form-control form-control-sm col-12">
            </div>
         </div>     
       
      
          <div id="affFin" class="form-group row">              
            <label for="dateFin" class="col-sm-4 lab-date">Date fin:</label>
       
            <div class="col-sm-6">  
              <input type="date" class="form-control form-control-sm col-12" name="dateFin" id="dateFin">
            </div>
          </div>
      </div>
    </form>
   <div class="modal-footer">
     <!--  <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button> -->
      <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout .has-spinner"><i class="fa fa-list"></i> Afficher</button>
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

<script type="text/javascript">

$(function(){

  $('#change').click(function() {
    $('#modalAdd').dialog('open');
    $('#dialog').attr('style','display:none;');
  });

//  $('#modalAdd').modal('show');

  $('#btnAff').click(function(){
      var btn = $(this);
      $(btn).buttonLoader('start');
      setTimeout(function () {
        $(btn).buttonLoader('stop');
        affich();
    }, 1000);
      
  });

  $( "#modalAdd" ).dialog({
    autoOpen: true,
    width: 600,
    height: 350,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "explode",
      duration: 800
  }
  });

  //CHERCHER COMPTE 1

  $("#compte").autocomplete({
      source: function(request, response){
        var code = $("#compte").val();
        //var code =  $('input[name=codeCli]').val();
         $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findAccount',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){                                 
                  response($.map(data, function(item){
                      return item.numCpt +' |'+ item.label;
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          //$('#libelle').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  }); 

    //CHOIX DU TYPE D'AFFICHAGE

     $('#type').change(function() {
        
        var str = "";
       
        var compte = new String('compte');
        var user = new String('utilisateur');
        var date = new String('parDate');
       
        $( "#type option:selected" ).each(function() {
          str += $( this ).attr('value');
        });


        if(compte == str){
          //$('#compte').attr('disabled', false);
          $('#affCompte').attr('style', 'display : bloc;');  
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');

          //$('#affUser').attr('style', 'display : none;');
          $('input[name=nomUtilisateur]').val('');
          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

           var html;
           var foot; 

           html += '<tr>'+
          '<th scope="col">#Code transaction</th>'+
          '<th scope="col">Compte</th>'+
          '<th scope="col">Date transaction</th>'+
          '<th scope="col">Description transaction</th>'+
          '<th scope="col">Piece</th>'+
          '<th scope="col">Débit</th>'+
          '<th scope="col">Crédit</th>'+
          '<th scope="col">Solde progressif</th>'+
          '</tr>';
          foot += '<tr>'+
            '<td colspan=5>Totaux des mouvements</td>'+
            '<td id="tdebit">0</td>'+
            '<td id="tcredit">0</td>'+/*
            '<td id="tSolde">0</td>'+*/
          '</tr>';
          $('#showHead').html(html); 
          $('#showFoot').html(foot); 

        }
      else if(date == str){ 
          //$('#compte').attr('disabled', true);
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');

          $('#affCompte').attr('style', 'display : none;');
         
          $('input[name=compte]').val('');
          $('input[name=nomUtilisateur]').val('');
          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');


           var html;
           var foot; 

           html += '<tr>'+
          '<th scope="col">#Code transaction</th>'+
          '<th scope="col">Compte</th>'+
          '<th scope="col">Date transaction</th>'+
          '<th scope="col">Description transaction</th>'+
          '<th scope="col">Piece</th>'+
          '<th scope="col">Débit</th>'+
          '<th scope="col">Crédit</th>'+
          '</tr>';
            $('#showHead').html(html); 
          $('#showFoot').html('');
        }else{
         
         // $('#compte').attr('disabled', true);
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');

          $('#affCompte').attr('style', 'display : none;');
          

           var html;
           var foot; 

           html += '<tr>'+
          '<th scope="col">#Code transaction</th>'+
          '<th scope="col">Compte</th>'+
          '<th scope="col">Date transaction</th>'+
          '<th scope="col">Description transaction</th>'+
          '<th scope="col">Piece</th>'+
          '<th scope="col">Débit</th>'+
          '<th scope="col">Crédit</th>'+
          '</tr>';
          $('#showHead').html(html); 
          $('#showFoot').html('');
        }       

  });


function affich(){
    var data = $('#myForm').serialize();

     $.ajax({
              type:'ajax',
              method:"post",
              url: '<?php echo base_url();?>index.php/findGranLivre',
              dataType:'json',
              data: data,
              async: false,
              success:function(response){
                  if(response){
                    if(response.success){
                      var c = response.result;
                      var html;
                      var total_Credit = 0;
                      var total_Debit = 0;
                      var solde = 0;
                      var compte;
                      var lib;
                      for (i = 0; i < c.length; i++) {
                        total_Credit += parseFloat(c[i].credit);
                        total_Debit += parseFloat(c[i].debit);
                          if(c[i].account != null){
                            compte=c[i].account.numCpt;
                            lib =c[i].account.label;
                            solde = c[i].account.soldeProgressif;
                          }else{
                            compte = c[i].compte;
                            lib = '';
                          }

                          html += '<tr>' +
                          '<td>' + c[i].tcode + '</td>' +
                          '<td>' + compte + '</td>' +/*
                          '<td>' + lib + '</td>' +*/
                          '<td>' + c[i].date + '</td>' +
                          '<td>' + c[i].descr + '</td>' +
                          '<td>' + c[i].piece + '</td>' +
                          '<td>' + c[i].debit + '</td>' +
                          '<td>' + c[i].credit + '</td>' +/*
                          '<td>' + c[i].solde + '</td>' +*/
                          '</tr>';
                      }
                      $('#dialog').attr('style','display:bloc;')
                      $('#modalAdd').dialog('close');
                      $('#teteTable').html("Totaux transaction : "+c.length);
                      $('#showGrandLivre').html(html);
                      $('#tdebit').html(total_Debit);
                      $('#tcredit').html(total_Credit);
                      $('#tSolde').html('Total solde: '+solde);
                    }

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

                  }//DataTables/media/French.json
                
              },
             error: function(response){
              $('#modalCompte').modal('hide');
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
          });

}

});

</script>