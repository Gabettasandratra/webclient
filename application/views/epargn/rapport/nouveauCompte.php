<!-- <div id="dialog" title="Rapport nouveau compte épargne" style="margin-top: 1%;">
 -->
 <div class="right_col" role="main">
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile"  style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport nouveau compte épargne</h2>
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

      <br/>

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
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                   <tr>
                    <th scope="col">N° Compte</th>
                    <th scope="col">Nom client</th>
                    <th scope="col">Produit | Devise</th>
                    <th scope="col">Date ouverture</th>
                    <th scope="col">Ouvrir par</th>
                    <th id="sd" scope="col">Solde actuel</th>
                    <th scope="col">Etat du compte</th>
                  </tr>
                </thead>
                <tbody id="showdata">

                </tbody>
              </table>
          </div>

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
          <h5 class="modal-title" id="titre">Rapport nouveau compte épargne</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                  <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
                   <div class="control-group "> 

                     
                       <div id="affdate" class="form-group row">  
                         <label class="col-sm-5" for="dateDeb">
                            Du date:<!--  <span id="champObligatoir">*</span> --> </label>                                      
                           <div class=" col-sm-7">
                             <input type="date" name="dateDeb" class="form-control form-control-sm col-10" id="dateDeb">
                           </div>                   
                       </div>  
                        <div class="form-group row">
                         <label class="col-sm-5" for="dateFin">Au date:<!-- <span id="champObligatoir">*</span>  --></label>
                            <div class=" col-sm-7">
                                <input type="date" name="dateFin" class="form-control form-control-sm col-10" id="dateFin">
                            </div>
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

<script type="text/javascript">
$(function(){

$('#modalAdd').modal('show');
$('#change').click(function(){
   $('#modalAdd').modal('show');
   //$('#dialog').dialog('close');
   $('#impre').attr('style','display:none');
});

$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = (day)+"/"+(month)+"/"+now.getFullYear();

  $('#sd').html('Solde le '+ today);  
}

$('#btnAff').click(function(){


    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var user = $('input[name=user]').val();

    var datDeb = $('input[name=dateDeb]');
    var datFin= $('input[name=dateFin]');

    var datDeb;
    var datFin;

    if(datDeb.val() == ''){
       datDeb = 'xxxx-xx-xx';
    }else{
      datDeb = datDeb.val();
    } 
    if(datFin.val() == ''){
       datFin = 'xxxx-xx-xx';
    }else{
      datFin = datFin.val();
    }

     $('#textDate').html('Compte épargne créer entre '+  datDeb +' jusqu\'au '+datFin);  
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   

     var data = $('#myForm').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getNouveauCompteEpargne',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response != null) {
                  var i;              
                  var c = response;
                  var html;
                  var nom;        
                  var actif;

                  for (i = 0; i < c.length; i++) {
                    if(c[i].groupe != null){
                      nom = c[i].groupe.nomGroupe;
                    }else if(c[i].individuel != null){
                      nom = c[i].individuel.nomClient +' '+ c[i].individuel.prenomClient;
                    }
                   
                    if(c[i].isActif == true){
                        actif = 'Actif';
                    }else{
                      actif = 'inactif';
                    }
               
                      html += '<tr>' +
                      '<td>' + c[i].numCompteEp + '</td>' +
                      '<td>' + nom+ '</td>' +
                      '<td>' + c[i].produitEpargne.nomProdEpargne +' | '+ c[i].produitEpargne.configProdEp.devise  + '</td>' +
                      '<td>' + c[i].dateOuverture + '</td>' +
                      '<td>' + c[i].utilisateur.nomUtilisateur  + '</td>' +
                      '<td>' + c[i].solde + '</td>' +
                      '<td>' + actif + '</td>' +                   
                      '</tr>';

                  }
                  $('#modalAdd').modal('hide');
                  //$('#dialog').dialog('open');
                  $('#impre').attr('style','display:bloc');
                  today();
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
                 
                }
                else {
                  $('#showdata').html('');
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
              $('#showdata').html('');
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!!!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
        });


});

});

</script>