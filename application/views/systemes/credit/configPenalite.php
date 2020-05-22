<!-- 
<div class="container">
  
<div class="card-header col-8 place">
	<h5 align="center" class="titre">Configuration pénalités crédit</h5>
</div>
<br> -->

<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration pénalités crédit</h2>
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

		<form id="myForm" action="" method="post">
		<div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

		</div>    

		<div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

		</div>    

		<div class="row" style="margin-top: 50px;margin-left:20px;">
			<div class="col-6">
			   <div class="form-group row">
		          <label for="idProduit" class="col-sm-3">Produit: <span id="champObligatoir">*</span></label>
		         <div class="col-sm-6">
		             <select class="form-control form-control-sm col-8" name="idProduit" id="idProduit">
		             	<option value=""></option>
				  		 <?php foreach($result->Listes_ProduitCredit as $value) :?>
		                    <option value="<?= $value->idProdCredit ?>"><?= $value->nomProdCredit ?></option>
		                <?php endforeach; ?>
					</select>
		         </div>
		       </div>  
			</div>
			<div class="col-6">
			    <div class="col-12" style="text-align: right">
		          <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
		        </div>
			</div>

		</div>
		<hr>
		  <div class="row">
		    <div class="col-12">
		      <div class="card mt-3 tab-card">
		        <div class="card-header tab-card-header">
		          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		            <li class="nav-item">
		                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Pénalité</a>
		            </li><!-- 
		            <li class="nav-item">
		                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Garantie</a>
		            </li> -->
		          </ul>
		        </div>

		        <div class="tab-content" id="myTabContent">

		          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
		   
			    			
	    			<div class="form-group col-10">
						<fieldset class="scheduler-border"> 
						    <legend class="scheduler-border">Mode calcul pénalité</legend> 
							    <div class="control-group"> 


						          	<div class="row">
										<div class="col-6">
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="calculPenal" id="example1" value="montant fixe" checked>
											  <label class="form-check-label" for="example1">
											    Pénalités calculées comme un montant fixe par jour
											  </label>
											</div>
										</div>
										<div class="col-4">
											 <div id="affFixe" style="display: bloc;" class="form-group row">                                        
							                    <label class="col-sm-5" for="fixe">Montant fixe: </label>
							                    <div class=" col-sm-7">
							                      <input type="text" name="fixe" class="form-control form-control-sm col-12" id="fixe">
							                    </div>
							                </div>
										</div>
						          	</div>

						          	<div class="row">
						          		<div class="col-6">
						          			<div class="form-check">
											  <input class="form-check-input" type="radio" name="calculPenal" id="example2" value="pourcentage">
											  <label class="form-check-label" for="example2">
											    Pénalités calculées comme simple un pourcetange du solde impayé
											  </label>
											</div>			
						          		</div>
						          		<div class="col-4">
						          			 <div id="affPer" style="display: none;" class="form-group row">                                        
							                    <label class="col-sm-4" for="per">Pourcetange: </label>
							                    <div class=" col-sm-6">
							                      <input type="text" name="per" class="form-control form-control-sm col-12" id="per">
							                    </div>
							                    <label class="col-sm-2" for="per">% </label>
							                </div>      
						          		</div>
						          	</div>											

					          </div> 
						</fieldset> 
						 
					</div>

		          </div>

		        </div>
		      </div>
		    </div>
		  </div>

		</form> 
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

	 var idProduit = '';

	$('#idProduit').change(function() {  
	  $( "#idProduit option:selected" ).each(function() {
	      idProduit = $( this ).attr('value');
	    }); 
	});

	$('#btnSave').click(function(){
		 var btn = $(this);
    	 $(btn).buttonLoader('start');
		var data = $('#myForm').serialize();

		if(idProduit == ''){
       	     setTimeout(function () {
					$('#idProduit').addClass('is-invalid');
		       	    $('.alert-danger').html('Veuillez selectionner le produit,SVP!').fadeIn().delay(3000).fadeOut('slow');
				    $(btn).buttonLoader('stop');
		       }, 1500);
		}else{
			$('#idProduit').removeClass('is-invalid');
			setTimeout(function () {
		          $(btn).buttonLoader('stop');
				  $.ajax({
		            type:'ajax',
		            method: "post",
		            url: '<?php echo base_url(); ?>index.php/saveConfigPenaliteCredit',
		            dataType:'json',
		            data: data,
		            async: false,
		            success: function(response) {
		                //alert(response);
		                if (response.success) {
		                    $('#myForm')[0].reset();
		                    $('.alert-success').html('Configuration Enregistrer avec succes!').fadeIn().delay(3000).fadeOut('slow');
		                    //AllClient();
		                }
		                else {
		                   $('.alert-danger').html('Erreur enregistrement de configuration').fadeIn().delay(3000).fadeOut('slow');
		                }
		            },
		            error: function(){
		           	 $('.alert-danger').html('Erreur enregistrement de configuration').fadeIn().delay(3000).fadeOut('slow');

		            }
		        });
		       }, 1500);
		}


	});

	control();
	 function control(){		 	


		  $('#example1').click(function() {

		      $('#affFixe').attr('style', 'display: bloc;');                                             
		      $('#affPer').attr('style', 'display: none;');                                             
		  });

		   $('#example2').click(function() {
		      $('#affFixe').attr('style', 'display: none;');                                             
		      $('#affPer').attr('style', 'display: bloc;');                                          
		  });
	 }

});

</script>