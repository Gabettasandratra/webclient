<!--   <div id="dialog" title="Rapport compte épargne fermer" style="margin-top: 1%;">

<div class="card w-90" style="margin-left: 0%;background-color: #F8F8FF;">
    <div class="card-header">
     <div class="row">
        <h5 class="col-6">Info utilsateur</h5>  
        <div class="col-6">
            <button id="change" type="button" class="btn btn-sm btn-primary" style="float:right;"><i class="fa fa-recycle"></i> Changer les dates</button>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="card-text">
          <h6 id="textImpr">Imprimer par</h6>
          <h6 id="textDateImpr">Imprimer le</h6>    
          <h6 id="textDate"></h6>    
      </div>
    </div>
  </div> -->

<div class="right_col" role="main">
 <div id="dialog" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile"  style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport compte épargne fermer</h2>
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

          <div class="card w-90" >
            <div class="card-body">
              <div class="card-text">
                      <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
                  <div id="PageAimprimer" class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
                    <table class="table table-fixed table-bordered table-hover table-sm">
                       <!-- <legende>Rapport des comptes</legende> -->
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">N° Compte</th>
                            <th scope="col">Nom client</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Date ouverture</th>
                            <th scope="col">Date fermeture</th>
                            <th scope="col">Dernière solde</th>
                            <th id="sd" scope="col">Raison de fermeture</th>
                          </tr>
                        </thead>
                        <tbody id="showdata">

                        </tbody>
                      </table>
                    </div>
              </div>
            </div>
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
          <h5 class="modal-title" id="titre">Rapport compte épargne fermer</h5>
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


<script type="text/javascript">
$(function(){
/*	$( "#dialog" ).dialog({
	  autoOpen: false,
	  width: 1400,
	  height: 570,
	  show: {
	    effect: "size",
	    duration: 800,      
	  },
	  hide: {
	    effect: "size",
	    duration: 800
	  }
	});*/

$('#modalAdd').modal('show');
  $('#fermerModal').click(function(){
      $('#modalAdd').modal('hide');
  });

$('#change').click(function(){
   $('#modalAdd').modal('show');
   $('#dialog').attr('style','display:none;');
});


function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = (day)+"/"+(month)+"/"+now.getFullYear();

  //$('#sd').html('Solde le '+ today);  
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

     $('#textDate').html('Compte épargne fermé entre '+  datDeb +' jusqu\'au '+datFin);  
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);

     var data = $('#myForm').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getCompteFermer',
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

                  if(c.length == null){

                     if(c.compteEpargne.groupe != null){
                          nom = c.compteEpargne.groupe.nomGroupe;
                        }else if(c.compteEpargne.individuel != null){
                          nom = c.compteEpargne.individuel.nomClient +' '+ c.compteEpargne.individuel.prenomClient;
                        }
                            
                        html += '<tr>' +
                        '<td>' + c.compteEpargne.numCompteEp + '</td>' +
                        '<td>' + nom+ '</td>' +
                        '<td>' + c.compteEpargne.produitEpargne.nomProdEpargne + '</td>' +
                        '<td>' + c.compteEpargne.dateOuverture + '</td>' +
                        '<td>' + c.dateCloture  + '</td>' +
                        '<td>' + c.compteEpargne.solde + '</td>' +
                        '<td>' + c.raison + '</td>' +                                    
                        '</tr>';

                  } else{
                      for (i = 0; i < c.length; i++) {
                      
                        if(c[i].compteEpargne.groupe != null){
                          nom = c[i].compteEpargne.groupe.nomGroupe;
                        }else if(c[i].compteEpargne.individuel != null){
                          nom = c[i].compteEpargne.individuel.nomClient +' '+ c[i].compteEpargne.individuel.prenomClient;
                        }       
                            
                        html += '<tr>' +
                        '<td>' + c[i].compteEpargne.numCompteEp + '</td>' +
                        '<td>' + nom+ '</td>' +
                        '<td>' + c[i].compteEpargne.produitEpargne.nomProdEpargne + '</td>' +
                        '<td>' + c[i].compteEpargne.dateOuverture + '</td>' +
                        '<td>' + c[i].dateCloture  + '</td>' +
                        '<td>' + c[i].compteEpargne.solde + '</td>' +
                        '<td>' + c[i].raison + '</td>' +                                    
                        '</tr>';

                      }  
                    
                  }   
                  $('#modalAdd').modal('hide');
                  $('#dialog').attr('style','display:bloc;');  
                  $('#showdata').html(html);          
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