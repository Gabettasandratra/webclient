<div class="right_col" role="main">
<div class="col-md-12 col-sm-12" style="margin-top: 2%;">
<div class="x_panel tile " id="tet" style="display:none;">
  <div class="x_title">
    <h2>Rapport décaissement crédit</h2>
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
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
         </div>
      </div>
      <br>
     <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
      <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
        <table class="table table-fixed table-striped table-hover table-sm">
           
            <thead class="thead-dark">
               <tr>
                <th scope="col">N° crédit</th>
                <th scope="col">Code |nom client</th>
                <th scope="col">Produit</th><!-- 
                <th scope="col">Piece comptable</th> -->
                <th scope="col">Montant décaissé</th>
                <th scope="col">Date decaissement</th>
                <th scope="col">Décaissé par</th>
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
          <h5 class="modal-title" id="titre">Rapport crédit décaissé</h5>
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
     $('#tet').attr('style','display:nome;');//.container
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
     $('#textAff').html('Décaissement: '+deb +' '+ fin); 
     getDonne(data);
     /*if(valider == '1'){
        
     }else{
        $('.alert-danger').html('Le numero crédit ne doit pas être vide!')
              .fadeIn().delay(2000).fadeOut('slow');
     }*/

});

function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getDecaissement',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);             
                  var c = response;
                  var html;
                  var nom;
                 // var detail = response.cred;

                  if(c.length == null){
                    if (c.demandeCredit.individuel != null) {
                      nom = c.demandeCredit.individuel.codeInd +' |'+
                         c.demandeCredit.individuel.nomClient +' '+c.demandeCredit.individuel.prenomClient; 
                    } 
                    else if(c.demandeCredit.groupe != null){
                       nom = c.demandeCredit.groupe.codeGrp +' |'+
                         c.demandeCredit.groupe.nomGroupe;
                    }
                      html += '<tr>' +
                        '<td>' + c.demandeCredit.numCredit + '</td>' +
                        '<td>' + nom + '</td>' +
                        '<td>' + c.demandeCredit.produitCredit.idProdCredit +' |'+c.demandeCredit.produitCredit.nomProdCredit + '</td>' +
                        /*'<td>' + c.piece + '</td>' +*/
                        '<td>' + c.montantDec + '</td>' +
                        '<td>' + c.dateDec + '</td>' +
                        '<td>' + c.utilisateur.nomUtilisateur + '</td>' +
                       /* '<td>' + c.approbationStatut + '</td>' +*/
                        /*'<td>' + c.soldeTotal + '</td>' +*/
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {
                       if (c[i].demandeCredit.individuel != null) {
                          nom = c[i].demandeCredit.individuel.codeInd +' |'+
                             c[i].demandeCredit.individuel.nomClient +' '+c[i].demandeCredit.individuel.prenomClient; 
                        }
                        else if(c[i].demandeCredit.groupe != null){
                           nom = c[i].demandeCredit.groupe.codeGrp +' |'+c[i].demandeCredit.groupe.nomGroupe;
                        }
                        html += '<tr>' +
                        '<td>' + c[i].demandeCredit.numCredit + '</td>' +
                        '<td>' +nom+ '</td>' +
                        '<td>' + c[i].demandeCredit.produitCredit.idProdCredit +' |'+c[i].demandeCredit.produitCredit.nomProdCredit + '</td>' +
                       /* '<td>' + c[i].piece + '</td>' +*/
                        '<td>' + c[i].montantDec + '</td>' +
                        '<td>' + c[i].dateDec + '</td>' +
                        '<td>' + c[i].utilisateur.nomUtilisateur + '</td>' +
                        '</tr>';
                    }                    
                  }

                  $('#modalAdd').modal('hide');
                  $('#tet').attr('style','display:bloc;');//.container
                  $('#teteTable').html('Totaux crédits : '+c.length);   


                  html += '<tr>'+
                  '<td colspan=7>  &nbsp;</td>'+
                  '</tr>';
                  $('#showdata').html(html);   
/*
                  //détail client
                  $('input[name=codCred]').val(detail.numCredit);
                  $('input[name=codeInd]').val(detail.individuel.codeInd);
                  $('input[name=nom]').val(detail.individuel.nomClient +' '+detail.individuel.prenomClient);
                  $('input[name=adresse]').val(detail.individuel.adresse.adressePhysique);
                  $('input[name=tel]').val(detail.individuel.numeroMobile);

                  //detail produit
                  $('input[name=prod]').val(detail.produitCredit.idProdCredit +' | '+ detail.produitCredit.nomProdCredit);
                  $('input[name=tauxInt]').val(detail.produitCredit.configCreditIndividuel.tauxInteretAnnuel);
                  $('input[name=typeTranche]').val(detail.produitCredit.configCreditIndividuel.typeTranche);
                  $('input[name=nbTranche]').val(detail.produitCredit.configCreditIndividuel.tranches);
                  $('input[name=devise]').val('MGA');
                  $('input[name=agent]').val('xxx');*/

            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


});

</script>