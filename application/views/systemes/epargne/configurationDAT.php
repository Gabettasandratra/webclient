<!-- <div class="container">

	<div class="card-header col-8 place">
		<h5 align="center" class="titre">Configuration produit dépôt à terme</h5>
	</div>

	<br> -->
 <!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration produits dépôt à terme</h2>
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

	<div class="alert alert-success" style="display: none;margin-bottom: 25px ">

    </div>    

    <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

    </div>      

	<form id="myForm" action="" method="post">
		<div class="row" style="margin-top: 50px;margin-left:20px;">
			<div class="col-6">
			   <div class="form-group row">
		          <label for="produit" class="col-sm-3">Produit Epargne: <span id="champObligatoir">*</span></label>
		          <div class="col-sm-6">
		              <select name="produit" class="form-control form-control-sm col-12" id="produit">
		                   <option value="">----Choisir produit----</option>
		                   <?php foreach($result->resultat as $val) :?>
		                        <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
		                    <?php endforeach; ?>
		              </select>
		            </div>
		       </div>  
			</div>
			<div class="col-6">
			    <div class="col-12" style="text-align: right">
                  <button id="btnSaveConfProd" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
                </div>
			</div>

		</div>

		<hr>
		<div class="row">
		    <div class="col-12">
		      <div class="card mt-3 tab-card envelope">
		        <div class="card-header tab-card-header">
		          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		            <li class="nav-item">
		                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Configuration par défaut dépôts à terme</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Configuration GL dépôts à terme</a>
		            </li>
		          </ul>
		        </div>

		        <div class="tab-content" id="myTabContent">

		          <div class="tab-pane fade show active p-3" style="margin-top: 20px;" id="one" role="tabpanel" aria-labelledby="one-tab">
		          
		             <div class="row">		                

		                <div class="col-4 forms">
		                		                 
		                   <div class="form-group row">
		                      <label for="montantMin" class="col-sm-6">Montant minimum de dépôt: <span id="champObligatoir">*</span></label>
		                      <div class="col-sm-6">
		                       <input type="number" min="0" value="0" id="montantMin" name="montantMin" class="form-control form-control-sm col-12"/>
		                      </div>
		                   </div>

		                   <div class="form-group row">
		                      <label for="montantMax" class="col-sm-6">Montant maximum de dépôt:<span id="champObligatoir">*</span></label>
		                      <div class="col-sm-6">
		                       <input type="number" min="0" value="99999999999" id="montantMax" name="montantMax" class="form-control form-control-sm col-12"/>
		                      </div>
		                   </div>

		                   <div class="form-group row">
		                      <label for="intMin" class="col-sm-6">Intérêt minimum(%):</label>
		                      <div class="col-sm-6">
		                       <input type="number" min="1" value="1" id="intMin" name="intMin" class="form-control form-control-sm col-6"/>
		                      </div>
		                   </div>	

		       			  <div class="form-group row">
		                      <label for="intMax" class="col-sm-6">Intérêt maximum(%):</label>
		                      <div class="col-sm-6">
		                       <input type="number" min="1" value="99" id="intMax" name="intMax" class="form-control form-control-sm col-6"/>
		                      </div>
		                   </div>

                           <div class="form-group row">
		                      <label for="periodeMin" class="col-sm-6">Période minimale intérêt(%):</label>
		                      <div class="col-sm-6">
		                       <input type="number" min="1" value="1" id="periodeMin" name="periodeMin" class="form-control form-control-sm col-6"/>
		                      </div>
		                   </div>	

		       			  <div class="form-group row">
		                      <label for="periodeMax" class="col-sm-6">Période maximale intérêt(%):</label>
		                      <div class="col-sm-6">
		                       <input type="number" min="1" value="99" id="periodeMax" name="periodeMax" class="form-control form-control-sm col-6"/>
		                      </div>
		                   </div>	                   

		                </div>

		                <div class="col-6 forms">

		                 <div class="form-group row">
		                     <label for="devise" class="col-sm-6">Devise: <span id="champObligatoir">*</span></label>
		                    <div class="col-sm-4">
		                       <select name="devise" class="form-control form-control-sm col-12" id="devise">
		                             <option value="MGA">MGA</option>
		                             <option value="FRANC">FRANC</option>
		                             <option value="USD">USD</option>
		                             <option value="EURO">EURO</option>
		                             
		                        </select>
		                     </div>
		                   </div>
		                 
		                  <div class="form-group">
	                        <div class="custom-control custom-checkbox">
	                          <input class="custom-control-input" name="auccunInteret" type="checkbox" value="1" id="auccunInteret">
	                          <label class="custom-control-label" for="auccunInteret">
	                            Aucun intérêt pour les retraits prématurés
	                          </label>
	                        </div>
	                      </div>  
		                     
		                   <div class="form-group row">
		                      <label for="penalPercent" class="col-sm-6">Pénalité pour fin prématurée(%):</label>
		                      <div class="col-sm-6">
		                       <input type="number" min="0" value="0" id="penalPercent" name="penalPercent" class="form-control form-control-sm col-4"/>
		                      </div>
		                   </div> 
		                   
		                   <div class="form-group row">
		                      <label for="penalFixe" class="col-sm-6">Pénalité pour fin prématurée(Montant fixe):</label>
		                      <div class="col-sm-4">
		                       <input type="number" min="0" value="0" id="penalFixe" name="penalFixe" class="form-control form-control-sm col-12"/>
		                      </div>
		                   </div>

		                  <div class="form-group row">
		                      <label for="taxe" class="col-sm-6">Taxe Retenue(%):</label>
		                      <div class="col-sm-4">
		                       <input type="number" min="0" value="0" id="taxe" name="taxe" class="form-control form-control-sm col-6"/>
		                      </div>
		                   </div>

		                   <div class="form-group row">
		                      <label for="nbjr" class="col-sm-6">Nombre de jours dans l'année:</label>
		                      <div class="col-sm-4">
		                       <input type="number" min="365" value="365" id="nbjr" name="nbjr" class="form-control form-control-sm col-12"/>
		                      </div>
		                   </div>

		                </div>
		             </div> 
		          
		          </div>         


		          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
		            
		                <!-- CONFIGURATION GL-->

		                  <div class="row">

		                    <div class="col-6">

		                        <div class="form-group row">
		                             <label for="cmptEpargne" class="col-sm-6 col-form-label">Compte transactions sur dépôts à terme:<span id="champObligatoir">*</span></label>
		                           <div class="col-sm-5">
		                            <select name="cmptEpargne" class="form-control form-control-sm" id="cmptEpargne">
		                                <option></option>
		                                <?php foreach($list->list as $val) :?>
		                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                              <?php endforeach; ?>
		                            </select>
		                           </div>
		                        </div> 

		                        <div class="form-group row">
		                             <label for="cmptIntDuDAT" class="col-sm-6 col-form-label">Compte intérêt dû sur des dépôts à terme: <span id="champObligatoir">*</span></label>
		                           <div class="col-sm-5">
		                            <select name="cmptIntDuDAT" class="form-control form-control-sm" id="cmptIntDuDAT">
		                                <option></option>
		                                <?php foreach($list->list as $val) :?>
		                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                              <?php endforeach; ?>
		                            </select>
		                           </div>
		                        </div> 

		                        <div class="form-group row">
		                             <label for="cmptIntPayeDAT" class="col-sm-6 col-form-label">Compte intérêt payé: <span id="champObligatoir">*</span></label>
		                           <div class="col-sm-5">
		                            <select name="cmptIntPayeDAT" class="form-control form-control-sm" id="cmptIntPayeDAT">
		                                <option></option>
		                                <?php foreach($list->list as $val) :?>
		                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                              <?php endforeach; ?>
		                            </select>
		                           </div>
		                        </div> 

		                        <div class="form-group row">
		                             <label for="cmptIntEchus" class="col-sm-6 col-form-label">Compte intérêt échus: <span id="champObligatoir">*</span></label>
		                           <div class="col-sm-5">
		                            <select name="cmptIntEchus" class="form-control form-control-sm" id="cmptIntEchus">
		                                <option></option>
		                                <?php foreach($list->list as $val) :?>
		                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                              <?php endforeach; ?>
		                            </select>
		                           </div>
		                        </div> 


		                    </div>

		                    <div class="col-6">


		                       <div class="form-group row">
		                           <label for="cmptPenalDAT" class="col-sm-6 col-form-label">Compte des pénalités sur dépôts à terme:<span id="champObligatoir">*</span></label>
		                         <div class="col-sm-5">
		                          <select name="cmptPenalDAT" class="form-control form-control-sm" id="cmptPenalDAT">
		                              <option></option>
		                              <?php foreach($list->list as $val) :?>
		                                <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                            <?php endforeach; ?>
		                          </select>
		                         </div>
		                        </div>

		                       <div class="form-group row">
		                           <label for="cmptDiffCash" class="col-sm-6 col-form-label">Compte différences de cash:<span id="champObligatoir">*</span></label>
		                         <div class="col-sm-5">
		                          <select name="cmptDiffCash" class="form-control form-control-sm" id="cmptDiffCash">
		                              <option></option>
		                              <?php foreach($list->list as $val) :?>
		                                <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                            <?php endforeach; ?>
		                          </select>
		                         </div>
		                        </div>

		                      <div class="form-group row">
		                           <label for="cmptCheque" class="col-sm-6 col-form-label">Compte chèques:<span id="champObligatoir">*</span></label>
		                         <div class="col-sm-5">
		                          <select name="cmptCheque" class="form-control form-control-sm" id="cmptCheque">
		                              <option></option>
		                              <?php foreach($list->list as $val) :?>
		                                <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                            <?php endforeach; ?>
		                          </select>
		                         </div>
		                        </div>

		                       <div class="form-group row">
		                           <label for="cmptTaxeRetenu" class="col-sm-6 col-form-label">Compte de taxe retenue: <span id="champObligatoir">*</span></label>
		                         <div class="col-sm-5">
		                          <select name="cmptTaxeRetenu" class="form-control form-control-sm" id="cmptTaxeRetenu">
		                              <option></option>
		                              <?php foreach($list->list as $val) :?>
		                                <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
		                            <?php endforeach; ?>
		                          </select>
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

    //Control
     control();
    function control(){
    	$('#penalPercent').blur(function(){

	        if($('input[name=penalPercent]').val() == "0" || $('input[name=penalPercent]').val() == ""){
	          $('#penalFixe').attr('disabled',false);	          
	        }else{
	          $('#penalFixe').attr('disabled',true);
	          $('input[name=penalFixe]').val("0");
	        }
    	}); 

    	$('#penalFixe').blur(function(){

	        if($('input[name=penalFixe]').val() == "0" || $('input[name=penalFixe]').val() == ""){
	          $('#penalPercent').attr('disabled',false);	          
	        }else{
	          $('#penalPercent').attr('disabled',true);
	           $('input[name=penalPercent]').val("0");
	        }
    	}); 
    }	

	//ENREGISTREMENT CONFIGURATION 
	var produit = '';

	$('#produit').change(function() {  
	  $( "#produit option:selected" ).each(function() {
	      produit = $( this ).attr('value');
	    }); 
	});


    $('#btnSaveConfProd').click(function(){

      var data = $('#myForm').serialize();

      if (produit == '') {
      	//alert('Veuillez séléctionner un produit !!');
      	$('.alert-danger').html('Veuillez séléctionner un produit !!')
	              .fadeIn().delay(2000).fadeOut('slow');
      }else{      

	      $.ajax({
	            type:'ajax',
	            method: "post",
	            url: '<?php echo base_url();?>index.php/saveConfigDAT',
	            dataType:'json',
	            data: data,
	            async: false,
	            success: function(response) {
	                //alert(response);
	                if (response.success) {
	                    if(response.type == 'ad')
	                    {
	                        var type = 'Effectuer';
	                    }
	                    console.log(response);
	                    
						$('#myForm')[0].reset();
						  $.notify({            
		                          message: '<span class="glyphicon glyphicon-ok"> '+response.message
		                      },{
		                          type: 'success',
		                          animate: {
		                              enter: 'animated fadeInDown',
		                              exit: 'animated fadeOutUp'
		                          }
		                      });     
	                    // $('.alert-success').html(response.message)
	             		 //.fadeIn().delay(5000).fadeOut('slow');  

	                }
	                else {
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
	            },
	            error: function(response){
	            	  $.notify({            
                          message: '<span class="glyphicon glyphicon-remove"> '+response.message
                      },{
                          type: 'danger',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });     
	               //$('.alert-danger').html('Erreur enregistrement')
	              //.fadeIn().delay(2000).fadeOut('slow');
	            }
	        });
		}
	});

});


</script>