

<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration Frais crédit</h2>
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
		<fieldset class="scheduler-border"> 
		   <legend class="scheduler-border">Frais crédit</legend> 
		    <div class="control-group"> 
		    	<div class="form-check">
				  <input class="form-check-input" type="radio" name="frais" id="exampleRadios1" value="avant approbation" checked>
				  <label class="form-check-label" for="exampleRadios1">
				   Frais requis avant approbation
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frais" id="exampleRadios2" value="apres approbation">
				  <label class="form-check-label" for="exampleRadios2">
				    Frais requis après approbation
				  </label>
				</div>			
		    </div>
		</fieldset> 


		  <div class="row">
		    <div class="col-12">
		      <div class="card mt-3 tab-card">
		        <div class="card-header tab-card-header">
		          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		            <li class="nav-item">
		                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Frais crédit Individuel </a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Frais crédit Groupe</a>
		            </li>
		          </ul>
		        </div>

		        <div class="tab-content" id="myTabContent">

		          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
		              
				         <div class="control-group col-10"> 		
			    
					    	<div class="form-group">
						 
						      <div class="row">
						      	<div class=" col-4">
						      		<label> &nbsp;</label><br>
						      		<label for="papeterie">Papeterie : </label>
						      	</div>
						      	<div class=" col-4">
						      		<label for="">Montant fixe : </label>
							     	<input type="number" name="papeterie" class="form-control form-control-sm" id="papeterie" value="0.0">
						      	</div>

						      	<div class=" col-4">
						      		<label style="margin-left: 5%;" for="papeterie2">En pourcentage (%) : </label>
							      <input type="number" name="papeterie2" class="form-control form-control-sm col-4" id="papeterie2" value="0.0">
						      	</div>
						     
						      </div>

			  			  </div>

			  			  <div class="form-group">
						      
			  			  		<div class="row">

			  			  		<div class=" col-4">
						      		<label for="commission">Commisssion : </label>
						      	</div>
						      	<div class=" col-4">
						      		<input type="number" name="commission" class="form-control form-control-sm" id="commission" value="0.0">
						      	</div>

						      	<div class=" col-4">
						      		<input type="number" name="commission2" class="form-control form-control-sm col-4" id="commission2" value="0.0">
						      	</div>

						      	</div>

			  			  </div>

			  			  <div class="form-group">

			  			  	<div class="row">

			  			  		<div class=" col-4">
						      		<label for="fraisDev">Frais de développement :</label>
						      	</div>

						      	<div class=" col-4">
						      		<input type="number" name="fraisDev" class="form-control form-control-sm" id="fraisDev" value="0.0">
						      	</div>

						      	<div class=" col-4">
						      		<input type="number" name="fraisDev2" class="form-control form-control-sm col-4" id="fraisDev2" value="0.0">
						      	</div>

						     </div>

			  			  </div>

			  			  <div class="form-group">
						      
			  			  		
			  			  	<div class="row">

			  			  		<div class=" col-4">
						      		<label for="fraisDev">Frais de refinancement :</label>
						      	</div>

						      	<div class=" col-4">
						      		<input type="number" name="fraisRef" class="form-control form-control-sm" id="fraisRef" value="0.0">
						      	</div>

						      	<div class=" col-4">
						      		<input type="number" name="fraisRef2" class="form-control form-control-sm col-4" id="fraisRef2" value="0.0">
						      	</div>

					      	</div>
						      	
			  			  </div>
					    </div> 
		          </div>
		          
		         <!--  FORMULAIRE FRAIS CREDIT GROUPE  -->
		          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
			           	
					   <div class="control-group col-10"> 		
				    
						    	<div class="form-group">
							 
							      <div class="row">
							      	<div class=" col-4">
							      		<label> &nbsp;</label><br>
							      		<label for="papeterieGroupe">Papeterie : </label>
							      	</div>
							      	<div class=" col-4">
							      		<label for="">Montant fixe : </label>
								     	<input type="number" name="papeterieGroupe" class="form-control form-control-sm" id="papeterieGroupe" value="0.0">
							      	</div>

							      	<div class=" col-4">
							      		<label style="margin-left: 5%;" for="papeterieGroupe2">En pourcentage (%) : </label>
								      <input type="number" name="papeterieGroupe2" class="form-control form-control-sm col-4" id="papeterieGroupe2" value="0.0">
							      	</div>
							     
							      </div>

				  			  </div>

				  			  <div class="form-group">
							      
				  			  		<div class="row">

				  			  		<div class=" col-4">
							      		<label for="commissionGroupe">Commisssion : </label>
							      	</div>
							      	<div class=" col-4">
							      		<input type="number" name="commissionGroupe" class="form-control form-control-sm" id="commissionGroupe" value="0.0">
							      	</div>

							      	<div class=" col-4">
							      		<input type="number" name="commissionGroupe2" class="form-control form-control-sm col-4" id="commissionGroupe2" value="0.0">
							      	</div>

							      	</div>

				  			  </div>

				  			  <div class="form-group">

				  			  	<div class="row">

				  			  		<div class=" col-4">
							      		<label for="fraisDevGroupe">Frais de développement :</label>
							      	</div>

							      	<div class=" col-4">
							      		<input type="number" name="fraisDevGroupe" class="form-control form-control-sm" id="fraisDevGroupe" value="0.0">
							      	</div>

							      	<div class=" col-4">
							      		<input type="number" name="fraisDevGroupe2" class="form-control form-control-sm col-4" id="fraisDevGroupe2" value="0.0">
							      	</div>

							     </div>

				  			  </div>

				  			  <div class="form-group">
							      
				  			  		
				  			  	<div class="row">

				  			  		<div class=" col-4">
							      		<label for="fraisRefGroupe">Frais de refinancement :</label>
							      	</div>

							      	<div class=" col-4">
							      		<input type="number" name="fraisRefGroupe" class="form-control form-control-sm" id="fraisRefGroupe" value="0.0">
							      	</div>

							      	<div class=" col-4">
							      		<input type="number" name="fraisRefGroupe2" class="form-control form-control-sm col-4" id="fraisRefGroupe2" value="0.0">
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


	 control('fraisRef','fraisRef2');
	 control('fraisDev','fraisDev2');
	 control('commission','commission2');
	 control('papeterie','papeterie2');

	 control('fraisRefGroupe','fraisRefGroupe2');
	 control('fraisDevGroupe','fraisDevGroupe2');
	 control('commissionGroupe','commissionGroupe2');
	 control('papeterieGroupe','papeterieGroupe2');

	 var idProduit = '';

	$('#idProduit').change(function() {  
	  $( "#idProduit option:selected" ).each(function() {
	      idProduit = $( this ).attr('value');
	    }); 
	});

	$('#btnSave').click(function(){

		var data = $('#myForm').serialize();

		if(idProduit == ''){
			$('#idProduit').addClass('is-invalid');
       	    $('.alert-danger').html('Veuillez selectionner le produit,SVP!').fadeIn().delay(3000).fadeOut('slow');

		}else{
			$('#idProduit').removeClass('is-invalid');
		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/ConfigFraisCredit',
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
		}


	});

	 function control(elem1,elem2){		 	

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


		/*$('#fraisRefGroupe').mouseout(function(){
			if(($('input[name=fraisRefGroupe]').val() != '') || ($('input[name=fraisRefGroupe]').val() != "0")){
				$('input[name=fraisRefGroupe2]').val(0);
			}
		});*/

		/*$('#fraisRefGroupe2').mouseout(function(){
			if($('input[name=fraisRefGroupe2]').val() !='' ||  $('input[name=fraisRefGroupe2]').val() !='0'){
				$('input[name=fraisRefGroupe]').val('0');
			}
		});*/
});

</script>