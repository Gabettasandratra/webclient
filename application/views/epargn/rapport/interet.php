
<!-- <div class="container-fluid" style="margin-top: 4%;"> -->
 
<div class="right_col" role="main">
 <div id="impre" style="display:none;margin-top:2%" class="col-md-12 col-sm-12">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Rapport sur intérêt d'épargne</h2>
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
      
        <div class="conts">
          <div class="col-12">
            <div class="card mt-3 tab-card" id="cardContent" style="display: bloc;">
              <div class="card-header tab-card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Rapport sur intérêt</a>
                  </li>
                </ul>
              </div>

              <div class="tab-content" id="myTabContent" >
                <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

                   <table class="table table-responsive-sm table-bordered table-hover table-sm">
                    <thead class="thead-light">
                      <tr>
                          <th scope="col">#Num compte</th>
                          <th scope="col">Code client</th>
                          <th scope="col">Nom client</th>
                          <th scope="col">Produit</th>
                          <th scope="col">Mode calcul intérêt</th>
                          <th scope="col">Date</th>
                          <th scope="col">Solde</th>
                          <th scope="col">Intérêt</th>
                          <th scope="col">Solde après calcul intérêt</th>

                        </tr>
                      </thead>
                      <tbody id="showInt">
                       
                    </tbody>
                  </table>

               </div>
             </div>
           </div>
          </div>
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
          <h5 class="modal-title" id="titre">Rapport sur intérêt d'épargne</h5>
        </div>
        <div class="modal-body">
               <form id="myForm" action="" method="post">  
                   <div class="col-12">

                    <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                    <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                    </div>   

                    <div class="form-group col-12">    

                      <div class="form-group row">
                      
                       <label for="produit" class="col-sm-4">Produit:</label>
                        <div class="col-sm-8">
                          <select name="produit" class="form-control form-control-sm col-12" id="produit">
                               <option></option>
                               <?php foreach($result->liste as $val) :?>
                                    <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                                <?php endforeach; ?>
                          </select>
                        </div> 

                      </div>

                      <div class="form-group row">
                        <label for="dateDeb" class="col-sm-4">Du date:</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control form-control-sm col-12" id="dateDeb" name="dateDeb" />
                        </div> 
                      </div>
                      <div class="form-group row">
                        <label for="dateFin" class="col-sm-4">Au:</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control form-control-sm col-12" id="dateFin" name="dateFin" />
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

$('#modalAdd').modal('show');
$('#change').click(function(){
   $('#modalAdd').modal('show');
   $('#impre').attr('style','display:none');
});

$('#btnAff').click(function(){
   afficher();
});

$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

 afficher();
function afficher(){

   var data = $('#myForm').serialize();

      $.ajax({
        type:'ajax',
        method:"post",
        url:"<?php echo base_url();?>index.php/getInteret",
        data: data,
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].compte.numCompteEp + '</td>' +
                    '<td>' + c[i].compte.individuel.codeInd + '</td>' +
                    '<td>' + c[i].compte.individuel.nomClient + '</td>' +
                    '<td>' + c[i].compte.produitEpargne.nomProdEpargne + '</td>' +
                    '<td>' + c[i].compte.produitEpargne.configInteretProdEp.modeCalcul + '</td>' +
                    '<td>' + c[i].date + '</td>' +
                    '<td>' + c[i].solde + '</td>' +
                    '<td>' + c[i].montant + '</td>' +
                    '<td>' + c[i].compte.solde + '</td>' +
                    '</tr>';
                }

                //var a=etudiant_table.num_matricule;
                 $('#modalAdd').modal('hide');
                  //$('#dialog').dialog('open');
                  $('#impre').attr('style','display:bloc');
                $('#showInt').html(html);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
             $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!!!')
              .fadeIn().delay(2000).fadeOut('slow');
        }
    });

}
});

</script>