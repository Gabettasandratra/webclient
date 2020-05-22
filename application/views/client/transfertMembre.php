<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div id="impre" class="x_panel tile" style="display:none;">
    <div class="x_title">
      <h2>Transfert membre groupe</h2>
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
          <div class="col-6"><!-- 
                <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-recycle"></i> Changer groupe</button>
             </div>
          </div>
          <hr>
          <br>
         <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                  <tr>
                      <th scope="col">Nom groupe</th>
                      <th scope="col">Nom et prenom client</th>
                      <th scope="col">Fonction</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="showIndividuel">

                </tbody>
            </table>
          </div>

      </div>
    </div>
  </div>
</div>



<!-- MODAL CLIENT -->
<div class="modal fade" id="modalClient" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titre">Listes clients</h5>
      </div>
      <div class="modal-body">             
          
       <table id="tab" class="table table-fixed table-striped table-hover table-sm">
          <thead class="thead-light">
            <tr>
              <th scope="col">Code client</th>
              <th scope="col">Nom</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="showClient">

          </tbody>
        </table>
     <br>
      </div>
      <div class="modal-footer">
        <button id="btn-fer" type="button" class="btn btn-sm   btn-danger"><i class="fa fa-arrow-circle-right"></i> Fermer</button>
      </div>
    </div>
  </div>
</div>

<div id="modalTrans" title="Code groupe">             
      <br>
      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

      </div>                                             
      <br>
    <div class="form-group row"> 
          <label id="labCode" class="col-sm-3" for="codeCli">Code groupe: <span id="champObligatoir">*</span> </label>
          <div class="col-sm-6">
            <input type="text" name="codeGrp" placeholder="Saisir code groupe" class="form-control form-control-sm col-12" id="codeGrp" required>           
          </div>
          <div class="col-sm-3">
            <button id="btn-find" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
          </div>
      </div>   
  <div class="modal-footer">
    <button id="btn-suivant" type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-right"></i> Suivant</button>
  </div>
   
</div>

<!-- MODAL CLIENT -->
<div class="modal fade" id="modalTransfererMembre" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titre">Transférer</h5>
      </div>
      <div class="modal-body">             
          <form id="myForm" action="" method="post">
            <div class="form-group row">
                <label class="col-sm-4" for="grpDep">Groupe départ:</label>
                <div class="col-sm-6">
                  <input type="text" name="grpDep" class="form-control form-control-sm col-12" id="grpDep" disabled>           
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-4" for="ind">Nom client:</label>
                <div class="col-sm-6">
                  <input type="hidden" name="idMembre" id="idMembre">           
                  <input type="hidden" name="codeGroupe" id="codeGroupe">           
                  <input type="hidden" name="codeInd" id="codeInd">           
                  <input type="text" name="ind" class="form-control form-control-sm col-12" id="ind" disabled>           
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4" for="fonct">Fonction:</label>
                <div class="col-sm-6">
                  <input type="text" name="fonct" class="form-control form-control-sm col-12" id="fonct" disabled>           
                </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-4" for="grpDest">Groupe destination:</label>
                <div class="col-sm-6">
                  <select name="grpDest" class="form-control form-control-sm" id="grpDest">
                          <option value=""></option>
                           <?php foreach($result->resultat as $f) :?>
                                <option value="<?php echo ($f->codeGrp); ?>"><?= $f->nomGroupe ?></option>
                            <?php endforeach; ?>
                  </select>          
                </div>
            </div>

          </form>        
      </div>
      <div class="modal-footer">
        <button id="btnFermer" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye-slash"></i> Annuler</button>
        <button id="btnTransferer" type="button" class="btn btn-sm btn-primary"><i class="fa fa-send"></i> Transférer</button>
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


  //Controle modal
  $( "#modalTrans" ).dialog({
    autoOpen: true,
    width: 600,
    height: 250,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "explode",
      duration: 800
    }
  });

  $('#btnFermer').click(function(){
    $('#modalTransfererMembre').modal('hide');
  });

    /*getClient();*/
    //Configuration table
/*   $('#tab').DataTable({
      language: {
          url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
      }, dom: 'flrtBp',
          buttons: [
          ]
      });*/
    function getClient(id){

        $.ajax({
          type:'ajax',
          method: "get",
          url: '<?php echo base_url();?>index.php/getMembreGroupeByCode',
          dataType:'json',
          data: {id: id},
          async: false,
          success: function(response) {
              var i;
              var c = response;
              var html;
              var nom;

               if(c.length == null){
                nom = c.individuel.nomClient +' '+c.individuel.prenomClient;
                   html += '<tr>' +
                    '<td>' + c.groupe.nomGroupe + '</td>' +
                    '<td>' + nom + '</td>' +
                    '<td>' + c.fonctionMembre.nomFonction + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success  btn-sm item-voir" codeGroupe="'+ c.groupe.codeGrp+'" codeInd="'+ c.individuel.codeInd+'"'+
                    'groupe="'+ c.groupe.nomGroupe+'"  nom="'+ nom+'" data="'+ c.idMembre+'"  fonction="'+ c.fonctionMembre.nomFonction+'">'+
                    '<i class="fa fa-send"></i> Transferer </a>' +
                    '</td>' +
                    '</tr>';
              }else{
                for (i = 0; i < c.length; i++) {
                   nom = c[i].individuel.nomClient +' '+c[i].individuel.prenomClient;
                    html += '<tr>' +
                    '<td>' + c[i].groupe.nomGroupe + '</td>' +
                    '<td>' + nom + '</td>' +
                    '<td>' + c[i].fonctionMembre.nomFonction + '</td>' +
                    '<td>' +
                     '<a href="javascript:;" class="btn btn-success  btn-sm item-voir" codeGroupe="'+ c[i].groupe.codeGrp+'" codeInd="'+ c[i].individuel.codeInd+'"'+
                     'groupe="'+ c[i].groupe.nomGroupe+'"  nom="'+ nom+'" data="'+ c[i].idMembre+'"  fonction="'+ c[i].fonctionMembre.nomFonction+'">'+
                     '<i class="fa fa-send"></i> Transferer </a>' +
                    '</td>' +
                    '</tr>';
                }
                
              }
              $('#showIndividuel').html(html);      

          },
          error: function(){
              alert('Auccun membres');
              $('#showIndividuel').html("");   
          }
      });

    }


  //AFFICHER DETAIL CLIENT
    $('#showIndividuel').on('click','.item-voir', function(){
      var id = $(this).attr('data');
      var nom = $(this).attr('nom');
      var groupe = $(this).attr('groupe');
      var fonction = $(this).attr('fonction');
      var codeInd = $(this).attr('codeInd');
      var codeGroupe = $(this).attr('codeGroupe');
      $('#modalTransfererMembre').modal('show');
      $('input[name=grpDep]').val(groupe);
      $('input[name=ind]').val(nom);
      $('input[name=fonct]').val(fonction);

      $('input[name=idMembre]').val(id);
      $('input[name=codeInd]').val(codeInd);
      $('input[name=codeGroupe]').val(codeGroupe);
    });

    //Transferer membre bouton
    $('#btnTransferer').click(function(){
        var data = $('#myForm').serialize();
        $.ajax({
          type:'ajax',
          method: "post",
          url: '<?php echo base_url();?>index.php/transfererMembre',
          dataType:'json',
          data: data,
          async: false,
          success: function(response) {
              var i;
              if(response.success == true){                
                $('#modalTransfererMembre').modal('hide');
                
                var id = $('input[name=codeGroupe]').val();
                getClient(id);
                console.log(response);
                  $.notify({            
                      message: 'Transfert reussit!!!'
                  },{
                      type: 'success',
                      animate: {
                          enter: 'animated fadeInDown',
                          exit: 'animated fadeOutUp'
                      }
                  });   
              }   

          },
          error: function(){
              //alert('Erreur enregistrement');
            $.notify({            
                  message: 'Erreur enregistrement'
              },{
                  type: 'danger',
                  animate: {
                      enter: 'animated fadeInDown',
                      exit: 'animated fadeOutUp'
                  }
              });     
          }
      });
     });

 //CHERCHER CLIENT
    $('#btn-fer').click(function(){
      $('#modalClient').modal('hide');
      $('#modalTrans').dialog('open');
      //$('#btn-find').attr('disabled',false);
   });


   $('#btn-find').click(function(){
      $('#modalTrans').dialog('close');
      $('#modalClient').modal('show');
      allGroupe();  
   });

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
                        '<td>' +
                        '<a href="javascript:;" class="btn btn-success btn-sm item-clientGrp" vals="' +c[i].nomGroupe+ '" data="'+c[i].codeGrp+'">Selectionner</a>' +
                        '</td>' +
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

    //CLICK SUR LE BOUTTON SUIVANT
    $('#btn-suivant').click(function(){
      var codeCli =  $('input[name=codeCli]').val();

      var group = $('input[name=codeGrp]').val();
      if(group == ''){
          $('#codeGrp').addClass('is-invalid');
           $('.alert-danger').html('Le code client ne doit pas être vide!')
                  .fadeIn().delay(2000).fadeOut('slow');
      }else{
        $('#codeGrp').removeClass('is-invalid');
        $('#modalTrans').dialog('close');
        $('#impre').attr('style', 'display:bloc;');
        getClient(group);
      }
    });

    //Changer groupe
    $('#change').click(function(){
        $('#modalTrans').dialog('open');
        $('#impre').attr('style', 'display:none;');
    });


    //CHOISIR CLIENT VIA RECHERCHE
    $('#showClient').on('click','.item-clientGrp', function(){

      var codeCli = $(this).attr('data');
      var nomClient = $(this).attr('vals');
      $('#modalClient').modal('hide');
      $('#modalTrans').dialog('open');
      $('input[name=codeGrp]').val(codeCli);

    });
});

</script>