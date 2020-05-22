<!-- <div id="dialog" title="Rapport solde d'épargne" style="margin-top: 1%;">
  -->
<div class="right_col" role="main">
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile"  style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport solde d'épargne</h2>
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
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
         </div>
      </div>
      <hr>
      <br>
     <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
      <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
        <table class="table table-fixed table-striped table-hover table-sm">
           
            <thead class="thead-dark">
               <tr>
                 <th scope="col">#N° compte</th>
                  <th scope="col">Code Client</th>
                  <th scope="col">Nom Client</th>
                  <th scope="col">Code produit | nom produit</th>
                  <th scope="col">Dernière transaction</th>
                  <th scope="col">Montant</th>
                  <th id="dates" scope="col">Solde le</th>
                  <th scope="col">Fermé</th>
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
          <h5 class="modal-title" id="titre">Rapport solde d'épargne</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                <div class="col-12">

                     <div class="form-group row">    
                       <label for="produit" class="col-sm-4">Produit: </label>
                        <div class="col-sm-8">
                          <select name="produit" class="form-control form-control-sm col-12" id="produit">
                               <option value="">Tous</option>
                               <?php foreach($result->liste as $val) :?>
                                    <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                                <?php endforeach; ?>
                          </select>
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

function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = (day) +"-"+(month)+"-"+now.getFullYear();

  $('#dates').html('Solde le '+today);  
}


$('#modalAdd').modal('show');

  $('#fermerModal').click(function(){
      $('#modalAdd').modal('hide');
  });

$( "#dialog" ).dialog({
    autoOpen: false,
    width: 1300,
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

    $('#impre').attr('style','display: none;');
  });



$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=produit]').val();

    var d='Tous';

   /* if(dates == ''){
      d = 'Tous';
    }
    else{
      d = dates;
    }*/
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Produit épargne:  '+d); 

     getDonne(data);

});


function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getSoldeEpargne',
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
                        '<td>' + c.numCompte + '</td>' +
                        '<td>' + c.codeClient + '</td>' +
                        '<td>' + c.nomClient + '</td>' +
                        '<td>' + c.codeProd +'  |  '+ c.nomProd + '</td>' +
                        '<td>' + c.dateTrans + '</td>' +
                        '<td>' + c.montant + '</td>' +
                        '<td>' + c.solde + '</td>' +
                        '<td>' + c.fermer + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {
                
                        html += '<tr>' +
                        '<td>' + c[i].numCompte + '</td>' +
                        '<td>' + c[i].codeClient + '</td>' +
                        '<td>' + c[i].nomClient + '</td>' +
                        '<td>' + c[i].codeProd +'  |  '+ c[i].nomProd + '</td>' +
                        '<td>' + c[i].dateTrans + '</td>' +
                        '<td>' + c[i].montant + '</td>' +
                        '<td>' + c[i].solde + '</td>' +
                        '<td>' + c[i].fermer + '</td>' +
                        '</tr>';
                    }                    
                  }

                  $('#modalAdd').modal('hide');
                  //$('#dialog').dialog('open');

                  $('#impre').attr('style','display: bloc;');
                  html += '<tr>'+
                  '<td colspan=8>  &nbsp;</td>'+
                  '</tr>';
                  today();
                  $('#showdata').html(html);   
                                                 
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}


});

</script>