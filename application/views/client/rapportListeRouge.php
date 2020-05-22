<div class="right_col" role="main" >
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport clients à la liste rouge</h2>
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
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer critères</button>
             </div>
          </div>
          <hr>
          <br>
         <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
            <table class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                  <tr>
                      <th scope="col">Code client</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Date ajout</th>
                      <th scope="col">raison</th>
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


<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Rapport liste rouge</h5>
        </div>
        <div class="modal-body">
              
              <form id="myForm" action="" method="post">
                <div class="">
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                    <div class="form-group row">
                      <label for="type" class="col-sm-5">Afficher par: <span id="champObligatoir">*</span></label>
                      <div class="col-sm-7">
                        <select class="form-control form-control-sm col-12" id="type">
                             <option value="t"></option>
                             <option value="tout">Tous</option>
                             <option value="parAgence">Par Agence</option>
                             <option value="parDate">Par date</option>                                            
                        </select>
                      </div>
                   </div>  

                   <div id="affAgence" class="form-group row">              
                      <label id="lab" for="agence" class="col-sm-5">Agence:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="agences" id="agence">
                      </div>
                    </div>

                   <div id="affDeb" class="form-group row">
                      <label for="dateDeb" class="col-sm-4">Date début:</label>
                      <div class="col-sm-8">
                        <input type="date" id='dateDeb' name="dateDebs" class="form-control form-control-sm col-12">
                      </div>
                   </div>     
                 
                
                    <div id="affFin" class="form-group row">              
                      <label for="dateFin" class="col-sm-4 lab-date">Date fin:</label>
                 
                      <div class="col-sm-8">  
                        <input type="date" class="form-control form-control-sm col-12" name="dateFins" id="dateFin">
                      </div>
                    </div>

                   <!--   <div class="form-group">
                        <div style="float: right;">
                          <button id="btnAfficher" type="button"><i class="fa fa-list"></i> Afficher</button>
                          </div>
                      </div>  -->
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


<!-- DETAIL DU CLIENT -->
<div class="modal fade" id="modalAfficheDetail" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <div class="col-12">
              <div class="form-group row">
                  <label id="code" class="col-sm-2">HA/I/000021</label>
                   <label id="nom" class="col-sm-2">RANDRIAMANJAKA</label>
                  <label id="prenom" class="col-sm-2">Dame Francis</label>
                  <label id="dateNais" class="col-sm-2">15/05/1996</label>
                  <label id="lieuNais" class="col-sm-2">à Ambovombé</label>
                  <label id="sexe" class="col-sm-2">Homme</label>
               </div>

              <div class="form-group row">
                  <label id="cin" class="col-sm-2">510-032-012-154-569</label>
                  <label id="adresse" class="col-sm-2">Ambalavao</label>
                  <label id="email" class="col-sm-2">dame@gmail.com</label>
                  <label id="etatCivil" class="col-sm-2">Marié</label>
                  <label id="numeroMobile" class="col-sm-2">0341256478</label>
                  <label id="nivEtude" class="col-sm-2">Homme</label>
               </div>

               <div class="form-group row">
                  <label id="profession" class="col-sm-2">mpamboly</label>
                  <label id="langue" class="col-sm-2">Malagasy</label>
                  <label id="nbEnfant" class="col-sm-2">4</label>
                  <label id="prsCharge" class="col-sm-2">8</label>
                  <label id="nomParent" class="col-sm-2">RANDRIA</label>
                  <label id="nomGarant" class="col-sm-2">Bema</label>
               </div> 
            </div>

            <hr>
            <br>
    
          <div class="row">

            <div class="col-6">

            <!--  DETAIL EPARGNE -->
                <div class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
                  <table class="table table-bordered table-hover table-sm">
                     <legend> Détail épargne</legend>
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">N° Compte</th>
                          <th scope="col">date ouverture</th>
                          <th scope="col">Dernière transaction</th>
                          <th scope="col">Solde</th>        
                      </tr>
                    </thead>
                    <tbody>
                  
                    </tbody>
                  </table>
                </div>
            </div>

                 <div class="col-6">

            <!--  DETAIL CREDIT -->
                <div class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
                  <table class="table table-bordered table-hover table-sm">
                     <legend> Détail crédit</legend>
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">N° crédit</th>
                          <th scope="col">état de crédit</th>
                          <th scope="col">Dernière transaction</th>
                          <th scope="col">Principal</th>        
                          <th scope="col">Intérêt</th>        
                          <th scope="col">Solde</th>        
                      </tr>
                    </thead>
                    <tbody>
                  
                    </tbody>
                  </table>
                </div>

            </div>

          </div>  

       </div>
       <div class="modal-footer">
        <button id="retour" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-out"></i>Retour</button>
     </div>
    </div>
  </div>
</div>

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

    $('#fermerModal').click(function(){
      $('#modalAdd').modal('hide');
    });

    $('#modalAdd').modal('show');


      $('#change').click(function(){
         $('#modalAdd').modal('show');
         $('#impre').attr('style','display:none;');
         /*$('#dialog').dialog('close');*/
      });

    //CHOIX DU TYPE D'AFFICHAGE
     $('#btnAfficher').attr('disabled', true);
     $('#btnAfficher').addClass('btn btn-sm btn-light');
     $('#type').change(function() { 

        var str = "";
        var t = new String('t');
        var tout = new String('tout');
        var agence = new String('parAgence');
        var date = new String('parDate');
       
        $( "#type option:selected" ).each(function() {
          str += $( this ).attr('value');
        });

        if(t==str){
          $('#btnAfficher').attr('disabled', true);
          $('#btnAfficher').addClass('btn btn-sm btn-light');
        }else{
           $('#btnAfficher').attr('disabled', false);
           $('#btnAfficher').attr('class','btn btn-sm btn-primary');
        }


        if(tout == str){
          $('#affAgence').attr('style', 'display : none;');  
          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

           $('input[name=agences]').val('');
           $('input[name=dateDebs]').val('');
           $('input[name=dateFins]').val('');
        }
        else if(agence == str){          
          $('#affAgence').attr('style', 'display : bloc;');  
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');
          
           $('input[name=agences]').val('');
           $('input[name=dateDebs]').val('');
           $('input[name=dateFins]').val('');

        }else if(date == str){ 
          $('#affAgence').attr('style', 'display : none;');  
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');
          
           $('input[name=agences]').val('');
           $('input[name=dateDebs]').val('');
           $('input[name=dateFins]').val('');

        }
  });


  //AFFICHER DETAIL CLIENT
$('#showIndividuel').on('click','.item-voir', function(){
  var id = $(this).attr('data');

  $('#modalAfficheDetail').modal('show');
  $('#ModalLabel').html('Détail du client N° '+ id);
/*  $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/HistoqueRemboursement',
      dataType:'json',
      data: {codeClient: id},
      async: false,
      success: function(response) {
        var i;
          var c = response;
          var html;

          for (i = 0; i < c.length; i++) {
            var solde_total = c[i].demandeCredit.interet_total + c[i].demandeCredit.principale_total;
              html +='<tr>' +
              '<td>' + c[i].demandeCredit.numCredit + '</td>' +
              '<td>' + c[i].dateRemb + '</td>' +
              '<td>' + c[i].typeAction + '</td>' +
              '<td>' + c[i].principal + '</td>' +
              '<td>' + c[i].interet + '</td>' +
              '<td>' + c[i].restaPaie + '</td>' +
              '<td>' + c[i].cheqcomm + '</td>' +
              '<td>' + c[i].stationery + '</td>' +
              '<td>' + c[i].solde + '</td>' +
              '<td>' + c[i].totalPrincipale + '</td>' +
              '<td>' + c[i].totalInteret + '</td>' +
              '<td>' + c[i].nbEcheance + '</td>' +
              '</tr>';
          }  
          $('#modalAfficheHistorique').modal('show');
          $('#PageAimprimer').attr('class','table table-fixed table-bordered table-hover table-sm')
          $('#showHistor').html(html);      

      },
      error: function(){
          alert('pas de donnée');
      }
  });*/
});


$('#btnAff').click(function(){

		var data = $('#myForm').serialize();

		 $.ajax({
          type:'ajax',
          method:"post",
          url:'<?php echo base_url();?>index.php/afficheListeRouge',
          dataType:'json',
          data: data,
          async: false,
          success:function(response){
          
                if(response.success){
                    var c = response.result;
                    var html;
                    if(c.length == null){
                         html += '<tr>' +
                          '<td>' + c.individuel.codeInd + '</td>' +
                          '<td>' + c.individuel.nomClient +' '+c.individuel.prenomClient + '</td>' +
                          '<td>' + c.date + '</td>' +
                          '<td>' + c.raison + '</td>' +
                          '<td>' +
                          '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+c.individuel.codeInd+'"><i class="fa fa-eye"></i> Détail client</a>' +            
                          '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-sm btn-warning item-delete" data="' +c.individuel.codeInd+'">retirer</a>' +
                          '</td>' +
                          '</tr>';
                    }else{
                      for (i = 0; i < c.length; i++) {
                          html += '<tr>' +
                          '<td>' + c[i].individuel.codeInd + '</td>' +
                          '<td>' + c[i].individuel.nomClient +' '+c[i].individuel.prenomClient + '</td>' +
                          '<td>' + c[i].date + '</td>' +
                          '<td>' + c[i].raison + '</td>' +
                          '<td>' +
                          '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+c[i].individuel.codeInd+'"><i class="fa fa-eye"></i> Détail client</a>' +            
                          '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-sm btn-warning item-delete" data="' +c[i].individuel.codeInd+'">retirer</a>' +
                          '</td>' +
                          '</tr>';
                      }                      
                    }
                    var now = new Date();
                    var day = ("0" + now.getDate()).slice(-2);
                    var month = ("0" + (now.getMonth() + 1)).slice(-2);

                    var today = (day)+"/"+(month)+"/"+now.getFullYear() ; 
                     $('#headSpan').attr('style','display: bloc;margin-left: 10%;color: red;');
                    $('#headSpan').html(c.length +' membre ajouter au liste rouge aujord\'huit le '+ today);
                    //var a=etudiant_table.num_matricule;
                    $('#showIndividuel').html(html);
                    $('#impre').attr('style', 'display: bloc;');
                    $('#modalAdd').modal('hide');
                }
          },
         error: function(response){
            $('.alert-danger').html('<i class="fa fa-remove">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
         /* $.notify({            
              message: response.message
          },{
              type: 'danger',
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });*/
        }
      });


			});


});

</script>