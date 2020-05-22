
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration garant et garantie crédit</h2>
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

	<!-- 	<div class="card-header col-8 place">
			<h5 align="center" class="titre">Configuration garant et garantie crédit</h5>
		</div>
		<br> -->
		<form id="myForm" action="" method="post">
		<div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

		</div>    

		<div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

		</div>    

		<div class="row" style="margin-top: 50px;margin-left:20px;">
			<div class="col-6">
			   <div class="form-group row">
		          <label for="idProduit" class="col-sm-3">Produit crédit: <span id="champObligatoir">*</span></label>
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
		                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Garant & Garantie</a>
		            </li><!-- 
		            <li class="nav-item">
		                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Garantie</a>
		            </li> -->
		          </ul>
		        </div>

		        <div class="tab-content" id="myTabContent">

		          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
		              
				         <div class="control-group col-10"> 			    
					    	<div class="form-group">
			                    <div class="custom-control custom-checkbox">
			                      <input class="custom-control-input" name="lierEpargne" type="checkbox" value="1" id="lierEpargne">
			                      <label class="custom-control-label" for="lierEpargne">
			                        	 Produit lié à l'épargne?
			                      </label>
			                    </div>
			            	</div>

			            	<div id="affEpargne" class="form-group row" style="display: bloc;">
						      <label for="produitEpargne" class="col-4">Produit épargne: </label>
						      <div class="col-4">
						     	<select name="produitEpargne" class="form-control form-control-sm" id="produitEpargne">
							  		<option></option>
		                               <?php foreach($pEpargne->resultat as $val) :?>
		                                    <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
		                                <?php endforeach; ?>
								</select>
						      </div>
						    </div>

				  			  <div id="affMont" class="form-group" style="display: bloc;">
							      
				  			  	<div class="row">

				  			  		<div class=" col-4">
							      		<label for="pourcetageMontant">Basé sur % du montant de crédit demandé: </label>
							      	</div>
							      	<div class=" col-4 row">
							      		<label for="purcetageInd" class="col-4">Individuel: </label>
							      		<div class="col-6">
							      			<input type="number" name="purcetageInd" class="form-control form-control-sm" id="purcetageInd" value="0.0">
							      		</div>
							      	</div>	
							      	<div class=" col-4 row">
							      		<label for="purcetageGrp" class="col-4">Groupe: </label>
							      		<div class="col-6">
							      			<input type="number" name="purcetageGrp" class="form-control form-control-sm col-12" id="purcetageGrp" value="0.0">
							      		</div>
							      	</div>			   

							    </div>

				  			  </div>

				  			<!--   <div class="form-group">
				                <div class="custom-control custom-checkbox">
				                  <input class="custom-control-input" name="baseSurMontant" type="checkbox" value="1" id="baseSurMontant">
				                  <label class="custom-control-label" for="baseSurMontant">
				                    	 Crédit basé sur le montant de crédit
				                  </label>
				                </div>
				              </div> -->
				              <hr>
				              <div class="row">
				              	<div class="col-4">
							  		  <div class="form-group">
						                <div class="custom-control custom-checkbox">
						                  <input class="custom-control-input" name="garantInd" type="checkbox" value="1" id="garantInd">
						                  <label class="custom-control-label" for="garantInd">
						                    	 Garant obligatoire pour le crédit individuel
						                  </label>
						                </div>
						              </div>
				              	</div>
				              	<div class="col-6">
				              		<div class="row">
							      		<label for="pourcetageGarant" class="col-6">Pourcentange par garant (%): </label>
							      		<div class="col-6">
							      			<input type="number" name="pourcetageGarant" class="form-control form-control-sm col-4" id="pourcetageGarant" value="0">
							      		</div>
							      	</div>		
				              	</div>
				              </div> 

				              <div class="row">
				              	<div class="col-4">
							  		  <div class="form-group">
						                <div class="custom-control custom-checkbox">
						                  <input class="custom-control-input" name="garatieInd" type="checkbox" value="1" id="garatieInd">
						                  <label class="custom-control-label" for="garatieInd">
						                    	 Garantie obligatoire pour le crédit individuel
						                  </label>
						                </div>
						              </div>
				              	</div>
				              	<div class="col-6">
				              		<div class="row">
							      		<label for="pourcetageGarInd" class="col-6">Pourcentange garatie (%): </label>
							      		<div class="col-6">
							      			<input type="number" name="pourcetageGarInd" class="form-control form-control-sm col-4" id="pourcetageGarInd" value="0">
							      		</div>
							      	</div>		
				              	</div>
				              </div>

				              <div class="row">
				              	<div class="col-4">
							  		  <div class="form-group">
						                <div class="custom-control custom-checkbox">
						                  <input class="custom-control-input" name="garatieGrp" type="checkbox" value="1" id="garatieGrp">
						                  <label class="custom-control-label" for="garatieGrp">
						                    	 Garantie obligatoire pour le crédit groupe
						                  </label>
						                </div>
						              </div>
				              	</div>
				              	<div class="col-6">
				              		<div class="row">
							      		<label for="pourcetageGarGrp" class="col-6">Pourcentange garatie (%): </label>
							      		<div class="col-6">
							      			<input type="number" name="pourcetageGarGrp" class="form-control form-control-sm col-4" id="pourcetageGarGrp" value="0">
							      		</div>
							      	</div>		
				              	</div>
				              </div>            				               

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
		            url: '<?php echo base_url(); ?>index.php/saveConfigGarantieCredit',
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
/*
	$('#lierEpargne').change(function(){
		var val = $(this).attr('checked');
		if(val == true){
			$('#affMont').attr('style','display:bloc');
			$('#affEpargne').attr('style','display:bloc');
		}else if(val == false){
			$('#affMont').attr('style','display:none');
			$('#affEpargne').attr('style','display:none');
		}
	});
*/
	 function control(){		 	

		$('#'+elem1).keyup(function(){
			if(($('input[name='+elem1+']').val() != '') || ($('input[name='+elem1+']').val() != "0")){
				$('input[name='+elem2+']').val(0);
			}
		});

		$('#'+elem2).keyup(function(){
			if($('input[name='+elem2+']').val()!='' ||  $('input[name='+elem2+']').val()!='0'){
				$('input[name='+elem1+']').val('0');
			}
		});

	 }

});

</script>