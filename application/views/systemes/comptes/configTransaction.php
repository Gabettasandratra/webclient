
<!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile">
    <div class="x_title">
      <h2>Définition compte par défaut d'une transaction comptabilité</h2>
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
          <button id="btnSave" type="button" style="float:right;" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
        </div>
      </div>   
      <hr>
      <br>
    <div class="card-header bg-light" id="saisie">
      <form id="myForm" action="" method="post"> 

           <div class="row"> 

              <div class="col-6">
              
                  <div class="form-group row">
                    <label class="col-sm-5" for="compteCaisse">Compte transaction caisse</label>
                    <div class="col-sm-6">
                        <select name="compteCaisse" class="form-control form-control-sm col-8" id="compteCaisse">
                            <option value=""></option>
                             <?php foreach($list->list as $val) :?>
                                 <option value="<?= $val->tkey ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                             <?php endforeach; ?>
                        </select>
                     </div>
                  </div>   

                 <div class="form-group row">
                    <label class="col-sm-5" for="compteBanque">Compte transaction banque</label>
                    <div class="col-sm-6">
                        <select name="compteBanque" class="form-control form-control-sm col-8" id="compteBanque">
                            <option value=""></option>
                             <?php foreach($list->list as $val) :?>
                                 <option value="<?= $val->tkey ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                             <?php endforeach; ?>
                        </select>
                     </div>
                  </div>              
                 
                                        
              </div>
   
            </div> 
         </form>
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

	$('#btnSave').click(function(){

		var data = $('#myForm').serialize();

    $.ajax({
      type:'ajax',
      method: "post",
      url: '<?php echo base_url(); ?>index.php/SaveConfigCompta',
      dataType:'json',
      data: data,
      async: false,
      success: function(response) {
          //alert(response);
          if (response.success) {

              //alert('Compte caisse bien enregistré!!!'); 
              $.notify({            
                    message: '<span class="glyphicon glyphicon-ok"> Configuration enregistrée!'
                },{
                    type: 'success',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                }); 
              $('#myForm')[0].reset();
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

	});

});

</script>