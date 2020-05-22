
<!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile " >
    <div class="x_title">
      <h2>Nouveau compte caisse</h2>
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
          <h6 id="teteTa">&nbsp;</h6>
    </div>
    <div class="col-6"><!-- style="margin-right:15px;" -->
      <button id="btnAdd" type="button" style="float:right;" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
      <button id="btnAff" style="float:right;" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-plus"></i> Nouveau</button>
      <button id="btnFerm" type="button" class="btn btn-sm btn-danger" style="display: none;float:right;"><i class="fa fa-eye-slash"></i> Fermer</button>
    </div>
  </div>   
  <hr>
  <br>

    <div class="card-header bg-light" id="saisie" style="display: none;" >
    <form id="myForm" action="" method="post"> 

         <div class="row"> 

            <div class="col-6">
                 <div class="form-group row">                                
                    <label class="col-sm-4" for="nom">Nom du compte : </label>
                    <div class=" col-sm-6">
                      <input type="text" name="nom" class="form-control form-control-sm col-8" id="nom">
                    </div>
                  </div>
            
                  <div class="form-group row">
                    <label class="col-sm-4" for="planCompta">Comptes GL</label>
                    <div class="col-sm-6">
                        <select name="planCompta" class="form-control form-control-sm col-8" id="planCompta">
                            <option value=""></option>
                             <?php foreach($list->list as $val) :?>
                                 <option value="<?= $val->tkey ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                             <?php endforeach; ?>
                        </select>
                     </div>
                  </div>              
                <div class="form-group row">                   
                    <label class="col-sm-4" for="devise">Devise : </label>
                    <div class=" col-sm-6">
                        <input type="text" name="devise" class="form-control form-control-sm col-8" id="devise">
                    </div>
                </div>   
                                      
               </div>
 
            </div> 
         </form>
        </div> 

        <br>
       <div class="row">
          <div class="col-6">
                <h6 id="teteTae"></h6>
          </div>
          <div class="col-6"><!-- style="margin-right:15px;" -->
          </div>
        </div>
        <br>
        <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

        </div>      

       <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
           <table class="table table-sm table-striped table-hover table-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nom comptes caisse</th>
                  <th scope="col">Numéro compte comptable | libellé compte</th>
                  <th scope="col">Devise</th>
                </tr>
              </thead>
              <tbody id="showCompte">
                
              </tbody>
            </table>
        </div>

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

/*$( "#dialog" ).dialog({
    autoOpen: true,
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
  });*/

//AFFICHE COMPTES CAISSE
 afficheCompteCaisse();
  function afficheCompteCaisse(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeCompteCaisse",
        dataType:"json",
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                if(c.length == null){
                   html += '<tr>' +
                    '<td>' + c.nomCptCaisse + '</td>' +
                    '<td>' + c.account.numCpt +' | '+ c.account.label + '</td>' +
                    '<td>' + c.devise + '</td>' +
                    '</tr>';
                }else{                  
                  for (i = 0; i < c.length; i++) {

                      html += '<tr>' +
                      '<td>' + c[i].nomCptCaisse + '</td>' +
                      '<td>' + c[i].account.numCpt +' | '+ c[i].account.label + '</td>' +
                      '<td>' + c[i].devise + '</td>' +
                      '</tr>';
                  }
                }

                $('#showCompte').html(html);
                $('#teteTable').html('Total compte caisse : '+c.length);
            }
        },
        error: function(){
           $('#showCompte').html('Aucun données');
           $('#teteTable').html('Aucun compte caisse');
        }
    });
}

	$('#btnAdd').click(function(){

		var data = $('#myForm').serialize();

        var nom = $('input[name=nom]');
        var devise = $('input[name=devise]');
       
        var valider = '';

        if(nom.val() == ''){
            $('#nom').addClass('is-invalid');
        }else{
            $('#nom').removeClass('is-invalid');
            valider +='1';
        }
        if(devise.val() == ''){
            $('#devise').addClass('is-invalid');
        }else{
            $('#devise').removeClass('is-invalid');
            valider +='2';
        }

        if(valider == '12'){

          $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/AjoutCompteCaisse',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Enregistrer';
                    }
                    else if(response.type == 'up')
                    {
                        var type = 'Modifer';
                    }
                    else if(response.existe)
                    {
                        alert('Cet est déja exist');
                    }
                    //$('#modalAdd').modal('hide');
                    //$('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Configuration '+type+' avec succes!').fadeIn().delay(5000).fadeOut('slow');
                    
                    //alert('Compte caisse bien enregistré!!!'); 
                    $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> Compte caisse bien enregistré!'
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      }); 
                    $('#myForm')[0].reset();
                    //$('.alert-success').html('Compte caisse bien enregistré!!!')
                   //.fadeIn().delay(3000).fadeOut('slow'); 
                    afficheCompteCaisse();
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
            $.notify({            
                      message: '<span class="glyphicon glyphicon-remove"> Erreur enregistrement'
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
            alert('veuillez remplir les champs obligatoire')
        }


	});


    $('#btnAff').click(function(){
        
        $('#saisie').attr('style','display: bloc');
        $('#btnAff').attr('style','display: none');
        $('#btnFerm').attr('style','display: bloc;float:right;');
        $('#btnSave').attr('disabled', false);

    });

     $('#btnFerm').click(function(){
        
        $('#saisie').attr('style','display: none');
        $('#btnFerm').attr('style','display: none');
        $('#btnAff').attr('style','display: bloc;float:right;');
        $('#btnSave').attr('disabled', true);

    });


});

</script>