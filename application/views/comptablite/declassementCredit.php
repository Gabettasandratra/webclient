<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="tet" style="display:none;">
    <div class="x_title">
      <h2>Declassement crédit</h2>
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
            <div class="col-6" style="text-align: right"><!-- style="margin-right:15px;" -->
                  <button id="change" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-recycle"></i> Changer date</button>&nbsp;
                  <button id="btnSave" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>&nbsp;
               </div>
          </div>
          <br>
           <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
            <table class="table table-fixed table-striped table-hover table-sm">
               <!-- <legende>Rapport des comptes</legende> -->
                <thead class="thead-dark">
                 <tr>
                    <th scope="col">#N° crédit</th>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Montant Crédit</th>
                    <th scope="col">Intérêt restant</th>
                    <th scope="col">Principal restant</th>
                    <th scope="col">Pénalités en arriérés</th>
                    <th scope="col">Total restant</th>
                    <th scope="col">Dernier remboursement</th>
                    <th scope="col">Jours en arriérés</th>
                    <th scope="col">Déclassement</th>
                  </tr>
                </thead>
                <tbody id="showdata">

                </tbody>
              </table>
            </div>  

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
        <h5 class="modal-title" id="titre">Dé-classifier crédits en arriérés</h5>
      </div>
      <div class="modal-body">
           <form id="myForm" action="" method="post">
              <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
              <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

              </div>      

              <div class="col-12">

                  <div class="form-group row">
                    <input type="hidden" name="userId"  value="<?php echo $idUtilisateur ?>"/>
                    <label for="dateDeb" class="col-form-label lab-date col-sm-4">Date déclassement:</label>
                    <input type="date" class="form-control form-control-sm col-4" name="dateDeb" id="dateDeb">
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

<!-- MODAL VALIDATION-->
<div class="modal fade" id="modalValide" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
  <div class="modal-content">
    <div class="modal-header">Enregistrement déclassement</div>
    <div class="modal-body" id="bodyInfo">             
        <input type="hidden" name="nb" id="nb"/>
        <input type="hidden" name="dat" id="dat"/>
        <h5 id="infos"></h5>
    </div>
    <div class="modal-footer">
      <button id="btn-accept" type="button" class="btn btn-sm btn-success">Oui</button>
      <button id="btn-refuse" type="button" class="btn btn-sm btn-secondary">Non</button>
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

//bouton chager date
  $('#change').click(function(){
    $('#modalAdd').modal('show');
    $('#tet').attr('style','display:none;');//container
  }); 
//Button fermer
 $('#fermerModal').click(function(){
    $('#modalAdd').modal('hide');
  });

//Enregistrement
$('#btnSave').click(function(){
  $('#modalValide').modal('show');
  var taille = $('#showdata tr').length -1;
  $('#infos').html('Voulez vous vraiment déclasser ces '+taille+' crédits?');   
});

//bouton refuse
$('#btn-refuse').click(function(){
  $('#modalValide').modal('hide');
});
$('#btn-accept').click(function(){
   var data = $('#myForm').serialize(); 
   save(data);
});

//affichage après selection date
$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=dateDeb]').val();

    var d;

    var ok = '';
    if(dates == ''){
      d = '';
      $('#dateDeb').addClass('is-invalid');
    }
    else{
      d = dates;
      $('#dateDeb').removeClass('is-invalid');
      ok +='1';
    }
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Crédits déclassé au:  '+d); 

     if(ok == '1'){
      getDonne(data);
     }else {
      $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Le champ date ne peut être vide!')
              .fadeIn().delay(2000).fadeOut('slow');
     }

});

//recupération données
function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/declasserCredit',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response) {}
                  var i;              
                  var c = response;
                  var html;

                  if(c.length == null){
                      html += '<tr>' +
                        '<td>' + c.numCred + '</td>' +
                        '<td>' + c.nom +' '+ c[i].prenom + '</td>' +
                        '<td>' + c.codePro + '</td>' +
                        '<td>' + c.montantCred + '</td>' +
                        '<td>' + c.interet + '</td>' +
                        '<td>' + c.princArr + '</td>' +
                        '<td>' + c.penaliteArr + '</td>' +
                        '<td>' + c.totalArr + '</td>' +
                        '<td>' + c.dernierRemb + '</td>' +
                        '<td>' + c.nbJourRetard + '</td>' +
                        '<td>' + c.stat + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {

                        html += '<tr>' +
                        '<td>' + c[i].numCred + '</td>' +
                        '<td>' + c[i].nom +' '+ c[i].prenom + '</td>' +
                        '<td>' + c[i].codePro + '</td>' +
                        '<td>' + c[i].montantCred + '</td>' +
                        '<td>' + c[i].interet + '</td>' +
                        '<td>' + c[i].princArr + '</td>' +
                        '<td>' + c[i].penaliteArr + '</td>' +
                        '<td>' + c[i].totalArr + '</td>' +
                        '<td>' + c[i].dernierRemb + '</td>' +
                        '<td>' + c[i].nbJourRetard + '</td>' +
                        '<td>' + c[i].stat + '</td>' +
                        '</tr>';
                    }                    
                  }

                  $('#modalAdd').modal('hide');
                  $('#tet').attr('style','display:bloc;');

                  html += '<tr>'+
                  '<td colspan=11>  &nbsp;</td>'+
                  '</tr>';
                 /* $('#totalDeb').html(total_Debit);
                  $('#totalCred').html(total_Credit);*/

                  $('#showdata').html(html);   
                  $('#teteTable').html('Total crédits déclassé : '+c.length);   
                                                 
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


//function Enregistrement

function save(data){
    $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/saveDeclassement',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
              
              if(response.success){
                alert('Enregistrement reussit');
                $('#modalValide').modal('hide');
              }
                                            
            },
            error: function(response){
             alert('Erreur enregistrement');
            }
    });
}

});

</script>