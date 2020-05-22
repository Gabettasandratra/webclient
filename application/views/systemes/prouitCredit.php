<!-- <div id="dialog" class="container" style="margin-top: 1%;">   
  <div class="card-header col-8 place">
    <h5 align="center" class="titre">Produits crédit</h5>
  </div>
  <br>
 -->
 <!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Produits crédit</h2>
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

          <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

            </div> 
           
            <div class="row">
              <div class="col-6">
                    <h6 id="teteTab">&nbsp;</h6>
              </div>
              <div class="col-6"><!-- style="margin-right:15px;" -->
                    <button id="btnAdd" type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modalAdd"
                       style="float:right;"><i class="fa fa-plus-circle"></i> Nouveau Produit</button>
                 </div>
            </div>
            <hr>
            <br>
                 <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
              <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
                <table class="table table-fixed table-striped table-hover table-sm">
                   <!-- <legende>Rapport des comptes</legende> -->
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">N° Produit</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Etat</th>
                        <th scope="col" colspan=2>Action</th>
                      </tr>
                    </thead>
                    <tbody id="showProduit">

                    </tbody>
                  </table>
                </div>
           <br/>
        </div>
    </div>
  </div>
</div>


<!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau Produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm" action="" method="post">
          <div class="form-group row">
            <label for="nomProd" class="col-sm-6">Nom Produit:</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control form-control-sm col-12" name="nomProd" placeholder="Produit de Fonctionnement" id="nomProd">
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label class="col-sm-10">Etat du produit: </label>
            </div>
            <div class="form-group col-4">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="etat" type="checkbox" value="1" id="etat">
                      <label class="custom-control-label" for="etat">
                           Activer
                      </label>
                    </div>
                </div>                              
            </div>

          </div>       
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
        <button type="button" id="btnSave" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL SUPPRESSION-->
<div class="modal fade" id="modalSup" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
  <div class="modal-content">
    <div class="modal-body" id="bodyInfo">             
        <input type="hidden" name="idProd" id="idProd"/>
        <h5 id="infos"></h5>
    </div>
    <div class="modal-footer">
      <button id="btn-accept" type="button" class="btn btn-sm btn-success">Oui</button>
      <button id="btn-refuse" type="button" class="btn btn-sm btn-secondary">Non</button>
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


<script>
$(function(){ 

 /*   $('#etat').click(function(){
        var val = $('#etat').attr('value');
        if(val == 1){
            $('#labelEtat').html('Desactiver');
        }else if (val != 1){
             $('#labelEtat').html('Activer');
        }

    });
*/
//FONCTION CHARGE LES LISTES DES PRODUIT
function load_produit(){

     $.ajax({
            type:'ajax',
            method:"get",
            url:"<?php echo base_url();?>index.php/chargeProduit",
            dataType:"json",
            async: false,
            success:function(data){
                if(data){
                    var c = data;
                    var html;
                    var et;
                    var active;
                    for (i = 0; i < c.length; i++) {
                        if(c[i].etat == true){
                            et = 'Activer';
                            active = 'Desactiver';
                        }else if(c[i].etat == false){
                            et = 'Desactiver';
                            active = 'Activer';
                        }

                        html += '<tr>' +
                        '<td>' + c[i].idProdCredit + '</td>' +
                        '<td>' + c[i].nomProdCredit + '</td>' +
                        '<td>' + et + '</td>' +
                        '<td>' +
                       /* '<a href="#" class="btn btn-info btn-sm item-edit" role="button"><i class="fa fa-edit"></i> '+active+'</a>' +*/
                        '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-delete" data="'+c[i].idProdCredit+'"><i class="fa fa-trash-alt"></i></a>' +
                        '</td>' +
                        '</tr>';
                    }

                    //var a=etudiant_table.num_matricule;
                    $('#showProduit').html(html);
                    $('#teteTable').html('Total produits crédit: '+ c.length);

                }
                //$('#pagination_link').html(data.pagination_link);
            }
        });
}

load_produit();

//Supprimer un produit

$('#btn-accept').click(function(){
    var id = $('input[name=idProd]').val();

     $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/deleteProduitCredit",
        dataType:"json",
        data: {id: id},
        async: false,
        success:function(data){
           if(data.success){
             $.notify({            
                message: data.result
            },{
                type: 'success',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            });

             load_produit();
             $('#modalSup').modal('hide');
           }
        }
    });
});

$('#btn-refuse').click(function(){
    $('#modalSup').modal('hide');
});

$('#showProduit').on('click','.item-delete', function(){ 
  var id = $(this).attr('data');

  $('#modalSup').modal('show');

  $('input[name=idProd]').val(id);

  $('#infos').html('Voulez vous vraiment supprimer le produit n° '+id+' ?');
});

//AJOUTER NOUVEAU PRODUIT
$('#btnAdd').click(function(){
    $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ajoutProduit');

});

$('#btnSave').click(function(){

	var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();

    //Verification des saisie

    var nom =  $('input[name=nomProd]');
    var etat =  $('input[name=etat]');

    var result = '';

 	if(nom.val()==''){
       $('#nomProd').addClass('is-invalid');
    }
    else{
        $('#nomProd').removeClass('is-invalid');
        result +='1';
    }
    /*
    if(etat.val()==''){
        etat.parent().parent().addClass('has-error');
    }
    else{
        etat.parent().parent().removeClass('has-error');
        result +='2';
    }*/

    if(result=='1'){
    	$.ajax({
            type:'ajax',
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Ajouter';
                    }
                    else if(response.type == 'up')
                    {
                        var type = 'Modifer';
                    }
                    else if(response.existe)
                    {
                        alert('Cet est déja exist');
                    }
                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    $('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Produit '+type+' avec succes!').fadeIn().delay(5000).fadeOut('slow');
                    load_produit();
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
                alert('pas de donnée');
            }
        });

    }

});


/*$('#showProduit').on('mouseover','tr',function(e){
      $('#dp').attr('style:display:bloc;');
  });
  $('#showProduit').on('mouseout','tr',function(e){
      //$( this ).removeClass();
       $('#dp').attr('style:display:none;');
  });
*/


});

</script>