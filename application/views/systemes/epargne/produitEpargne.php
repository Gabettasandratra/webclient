 <!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Produits épargne</h2>
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
     

    <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

    </div> 
    
    <div class="row">
      <div class="col-6">
            <h6 id="teteTable"></h6>
      </div>
      <div class="col-6"><!-- style="margin-right:15px;" -->
            <button id="btnAdd" type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modalAdd"
               style="float:right;"><i class="fa fa-plus-circle"></i> Nouveau Produit</button>
         </div>
    </div>
    <hr>
    <br>
    <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
      <table class="table table-fixed table-striped table-hover table-sm">
         <!-- <legende>Rapport des comptes</legende> -->
          <thead class="thead-dark">
           <tr>
            <th scope="col">#Id produit</th>
            <th scope="col">Type de produit</th>
            <th scope="col">Nom produit</th>
            <th scope="col">Etat</th>
            <th scope="col" colspan=3>Actions</th>
          </tr>
          </thead>
          <tbody id="showProduit">

          </tbody>
        </table>
      </div>
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
               
              <div class="col-12">               
                   <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-5" for="type">Type d'épargne</label>
                    <div class="col-sm-7">
                      <select name="type" class="form-control form-control-sm col-12" id="type">
                        <option>--- Type produit ---</option>
                          <?php foreach($type->listTypeEpargne as $val) :?>
                              <option value="<?= $val->nomTypeEpargne ?>"><?= $val->nomTypeEpargne ?></option>
                          <?php endforeach; ?>
                        </select>
                     </div>

                    </div>               
                              
                      <div class="form-group row">                                        
                          <label class="col-sm-5" for="nom">Nom du produit : </label>
                          <div class=" col-sm-7">
                            <input type="text" name="nom" class="form-control form-control-sm col-12" id="nom" required="require">
                          </div>
                    </div>                 


                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="etat" type="checkbox" value="1" id="etat">
                      <label class="custom-control-label" for="etat">
                        Activer produit
                      </label>
                    </div>
                </div>
          
              <!--   <div class="form-group col-3">
                  <div style="float: right;margin-left: 10%;">
                      <button id="btnAdd" type="button" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Enregistrer</button>
                      <button id="gererType" type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Gérer type d'épargne</button>
                  </div>
               </div> -->                  
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

<script type="text/javascript">

$(function(){


//AFFICHE COMPTES CAISSE
 afficheProuit();
  function afficheProuit(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeProduitEpargne",
        dataType:"json",
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var et;
                var active;
                var st;
                for (i = 0; i < c.length; i++) {

                 if(c[i].etat == true){
                        et = 'Activer';
                        active = 'Desactiver';
                        st = "btn-warning";
                    }else if(c[i].etat == false){
                        et = 'Desactiver';
                        active = 'Activer';
                        st = "btn-success";
                    }

                    html += '<tr>' +
                    '<td>' + c[i].idProdEpargne + '</td>' +
                    '<td>' + c[i].typeEpargne.nomTypeEpargne + '</td>' +
                    '<td>' + c[i].nomProdEpargne + '</td>' +
                    '<td>' + et + '</td>' +
                    '<td>' +
                    '<td>' + 
                    '<a href="#" class="btn '+st+' btn-sm item-desactiver" valeur="'+active+'"  data="'+c[i].idProdEpargne+'" role="button">'+active+' </a>' + '</td>' +
                    '<td>' +
                    //'<a href="#" class="btn btn-warning btn-sm item-desactiver" data="'+c[i].idProdEpargne+'" role="button">'+active+' </a>' +//
                    '&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/MenuConfigProduitEpargne" class="btn btn-success btn-sm" role="button"><i class="fa fa-sliders-h"></i> </a>' +
                    '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-delete" data="'+c[i].idProdEpargne+'" role="button"><i class="fa fa-trash-alt"></i> </a>' +
                    '</td>' +
                    '</tr>';
                }

                $('#showProduit').html(html);
                $('#teteTable').html('Totaux produits : '+c.length);
            }
        },
        error: function(){
            alert('pas de donnée');
        }
    });
}

$('#btnAdd').click(function(){
  $('#modalAdd').modal('show');
});

	$('#btnSave').click(function(){

		var data = $('#myForm').serialize();

		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/SaveProduitEpargne',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                  afficheProuit();
                    console.log(response);
                      $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> '+response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     
                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    //$('.alert-success').html(response.message).fadeIn().delay(5000).fadeOut('slow');

                }
            },
            error: function(response){
               // $('.alert-danger').html(response.message).fadeIn().delay(5000).fadeOut('slow');
                $.notify({            
                    message: '<span class="glyphicon glyphicon-remove"> '+response.message
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

$('#showProduit').on('click','.item-desactiver', function(){
    var id = $(this).attr('data');

    var valeur = $(this).attr('valeur');
   
    if (valeur == 'Activer') {
       $.ajax({
            type:'ajax',
            method: "get",
            url: '<?php echo base_url(); ?>index.php/ActiverProduitEpargne',
            dataType:'json',
            data: {id : id},
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    console.log(response);
                      $.notify({            
                          message: response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     

                  afficheProuit();
                }
            },
            error: function(response){
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
    }
    else if(valeur == 'Desactiver'){
      $.ajax({
            type:'ajax',
            method: "get",
            url: '<?php echo base_url(); ?>index.php/DesactiverProduitEpargne',
            dataType:'json',
            data: {id : id},
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    console.log(response);
                      $.notify({            
                          message: response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     

                 afficheProuit();
                }
            },
            error: function(response){
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
    }
     /**/

});


//Supprimer un produit

$('#btn-accept').click(function(){
    var id = $('input[name=idProd]').val();

     $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/deleteProduitEpargne",
        dataType:"json",
        data: {id: id},
        async: false,
        success:function(data){
           if(data.success){
             $.notify({            
                message: data.message
            },{
                type: 'success',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            });             
              afficheProuit();
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


});

</script>