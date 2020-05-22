<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Plan comptable</h2>
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
                <h6 id="t">&nbsp;</h6>
          </div>
          <div class="col-6"><!-- style="margin-right:15px;" -->
                   <button id="openModal" type="button"  class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus"></i> Nouveau compte</button>
             </div>
        </div>
        <br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table id="tab" class="display table table-fixed table-striped table-hover table-sm ">
             <!-- <legende>Rapport des comptes</legende> -->
              <thead class="thead-dark">
               <tr>
                   <th scope="col">Compte parent</th>
                    <th scope="col">Numero du compte</th>
                    <th scope="col">Intitulé du compte</th>
                    <th scope="col">Devise</th>
                    <th scope="col">Active</th>
                </tr>
              </thead>
              <tbody id="showCompte">
            
              </tbody>
             
            </table>
          </div>  

      </div>
      <br>
      <br>
    <br>
  <br>
<br>
 
 <!-- GERER TYPE PRODUIT -->
<!-- Un fenetre modal pour l'insertion d'un nouveau compte génerale -->
<div id="modalCompte" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="titre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Créer un compte génerale</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
          <form id="myForm" role="form" action="" method="post" autocomplete="off">
              <div class="form-group row">
                  <label  class="col-sm-5 control-label" for="numero">Numéro de compte <span id="champObligatoir">*</span></label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="1" required/>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-5 control-label"
                          for="libelle" >Libellé du compte <span id="champObligatoir">*</span></label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="libelle" name="libelle" placeholder="Compte de trésorerie" required/>
                  </div>
              </div> 

              <div class="form-group row">
                  <label class="col-sm-5 control-label"
                          for="solde" >Solde initial:</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control form-control-sm" id="solde" name="solde" value="0"/>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-5 control-label" for="parent" >Compte parent</label>

                  <div id="showParent" class="col-sm-6">
                      
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-5 control-label" for="devise" >Devise <span id="champObligatoir">*</span></label>

                  <div class="col-sm-6">
                      <select name="devise" id="devise" class="form-control form-control-sm">
                          <option value="MGA">MGA |Ariary</option>    
                          <option value="MGA">EUR |Euro</option> 
                          <option value="USD">USD |Dollar</option>            
                      </select>
                  </div>
              </div>
                   
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
          <button type="button" id="btnAdd" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Ajouter</button>
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

  $('#openModal').click(function(){
    $('#modalCompte').modal('show');
  });



//AFFICHE COMPTES CAISSE
 afficheCompte();
  //Configuration table
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
           /* */

  function afficheCompte(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeCompteCompta",
        dataType:"json",
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var active;
                var parent;
                var showParent;
                var devise;
                showParent = ' <select name="compte_parent" id="parent" class="form-control form-control-sm">'+
                          '<option selected="selected" value=""></option>';
                for (i = 0; i < c.length; i++) {

                 if(c[i].isActive == true){
                      active = 'Oui';
                    }else if(c[i].isActive == false){  
                      active = 'Non';
                    }

                    if(c[i].account != null){
                      parent = c[i].account.numCpt;
                    }else{
                      parent = 'header';
                    }

                    if(c[i].devise != null){
                      devise = c[i].devise;
                    }else{
                      devise = '';
                    }

                    html += '<tr>' +
                    '<td>' + parent + '</td>' +
                    '<td>' + c[i].numCpt + '</td>' +
                    '<td>' + c[i].label + '</td>' +
                    '<td>' + devise + '</td>' +
                    '<td>' + active+ '</td>' +
                    '</tr>';

                    showParent +='<option value="'+c[i].tkey+'">'+c[i].numCpt+' |'+c[i].label+'</option>';                                    
                    
                }

                $('#showCompte').html(html);
                showParent += '</select>';
                $('#showParent').html(showParent);
                $('#teteTable').html('Total compte: '+c.length);                
            }
        },
        error: function(){
           var html;
           html+=
           '<tr>' +     
                '<td colspan="7"></td>' +
                '</tr>'+
            '<tr>' +     
                '<td colspan="3" style="text-aling:center;margin-top:10px;">Auccun Contenu</td>' +
                '</tr>';
            $('#showCompte').html(html);
        }
    });
}

	$('#btnAdd').click(function(){

		var data = $('#myForm').serialize();


    var numer = $('input[name=numero]');
    var libel = $('input[name=libelle]');
    var sold = $('input[name=solde]');

    var valid = '';

    if(numer.val() == ''){
      $('#numero').addClass('is-invalid');
    }else{
      $('#numero').removeClass('is-invalid');
      valid +='1';
    }
   if(libel.val() == ''){
      $('#libelle').addClass('is-invalid');
    }else{
      $('#libelle').removeClass('is-invalid');
      valid +='2';
    }
    if(sold.val() == ''){
      $('#solde').addClass('is-invalid');
    }else{
      $('#solde').removeClass('is-invalid');
      valid +='3';
    }


    if (valid == '123') {
		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/SaveCompteCompta',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                  console.log(response);
                    $.notify({            
                        message: 'Le compte numero '+response.message.numCpt+' a été enregistrer avec success'
                    },{
                        type: 'success',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });  
                     $('#myForm')[0].reset();
                    $('#modalCompte').modal('hide');
                    afficheCompte();  

                }
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

    }else{
       $('#modalCompte').modal('show');
    }

	});

});

</script>