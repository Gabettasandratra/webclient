
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration crédit Individuel</h2>
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

			<div class="">
					  	<!-- AFFICHER LORS D'UN ACTION -->
			    <div class="alert alert-success" style="display: none;margin-top: 25px ">

			    </div>
			    <!-- FORMULAIRE DE SAISIE -->

			    <form  id="myForm" action="" method="post">	

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
					          <button id="btnAdd" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
					        </div>
						</div>

					</div>

				   	<hr>
				   	<br>


				   	  <div class="row">
					    <div class="col-12">
					      <div class="card mt-3 tab-card">
					        <div class="card-header tab-card-header">
					          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
					            <li class="nav-item">
					                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Généralité crédit individuel</a>
					            </li>
					            <li class="nav-item">
					                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Intérêt crédit individuel</a>
					            </li>
					          </ul>
					        </div>

					        <div class="tab-content" id="myTabContent">

					          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
					              
						         <div class="control-group col-12"> 		
					    			
					    			<div class="col-sm-6 col-md-6">

					    				 <div class="form-group row">
									      <label for="montant" class="col-sm-4 col-md-4">Montant Crédit</label>
									      <div class="col-6">
									      	<input type="number" name="montant" class="form-control form-control-sm" id="montant" value="0.0">
									      </div>
									    </div>

									     <div class="form-group row">
									      <label for="montMin" class="col-4">Montant minimum</label>
									      <div class="col-6">
									      	<input type="number" name="montMin" class="form-control form-control-sm" id="montMin" value="0">
									      </div>
									    </div> 

									    <div class="form-group row">
									      <label for="montMax" class="col-4">Montant maximum</label>
									      <div class="col-6">
										      <input type="number" name="montMax" class="form-control form-control-sm" id="montMax" value="99999999">
									      </div>
									    </div> 

									    <div class="form-group row">
									      <label for="commCredit" class="col-4">Commission sur crédit(%)</label>
									      <div class="col-6">
									      	<input type="number" name="commCredit" class="form-control form-control-sm" id="commCredit" value="0">
									      </div>
									    </div>

					    			</div>

					    			<div class="col-sm-6 col-md-6">

					    				 <div class="form-group row">
									      <label for="adhesMin" class="col-6">Adhésion minimum (en jours) avant le décaisement</label>
									      <div class="col-6">
									      	<input type="number" name="adhesMin" class="form-control form-control-sm col-10" id="adhesMin" value="0">
									      </div>
									    </div>

										<div class="form-group row">
									      <label for="periodMin" class="col-6">Période minimum de crédit (en mois)</label>
									      <div class="col-6">
									      	<input type="number" name="periodMin" class="form-control form-control-sm col-10" id="periodMin" value="0">
									      </div>
									    </div> 

									    <div class="form-group row">
									      <label for="periodMax" class="col-6">Période maximum de crédit (en mois)</label>
									      <div class="col-6">
									      	<input type="number" name="periodMax" class="form-control form-control-sm col-10" id="periodMax" value="99999">
									      </div>
									    </div> 

									    <div class="form-group row">
										      <label for="delaiGrace" class="col-6">Délai de grace maximum</label>
										      <div class="col-6">
										      	<input type="number" name="delaiGrace" class="form-control form-control-sm col-10" id="delaiGrace" value="999">
										      </div>
									    </div>
										    
									   	<div class="form-group">
				                            <div class="custom-control custom-checkbox">
				                              <input class="custom-control-input" name="activeVal" type="checkbox" value="1" id="activeVal">
				                              <label class="custom-control-label" for="activeVal">
				                                  Activer la validation du montant de crédit par cycle
				                              </label>
				                            </div>
				                    	</div>
					    			</div>
							    	
							    </div> 
					          </div>
					          
					         <!--  FORMULAIRE FRAIS CREDIT GROUPE  -->
					          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
						           	
								   <div class="control-group col-12 row"> 

								   		<div class="col-sm-6 col-md-6">

								   			<div class="form-group row">
										      <label for="tauxIntAnnuel" class="col-4">Taux d'intéret Annuel</label>
										      <div class="col-6">
										      	<input type="text" name="tauxIntAnnuel" class="form-control form-control-sm" id="tauxIntAnnuel" placeholder="0.0">
										      </div>
										    </div>

										     <div class="form-group row">
										      <label for="typeTranche" class="col-4">Type Tranche</label>
										      <div class="col-6">
										     	<select name="typeTranche" class="form-control form-control-sm" id="typeTranche">
											  		<option value=""></option>
											  		<option value="Quotidiennement">Quotidiennement</option>
											  		<option value="Hebdomadairement">Hebdomadairement</option>
											  		<option value="Quinzaine">Quinzaine</option>
											  		<option value="Mensuellement">Mensuellement</option>
												</select>
										      </div>
										    </div>
										  
										    <div class="form-group row">
										      <label for="diffPaie" class="col-4">Différé de paiement</label>
										        <div class="col-6">
										      		<input type="text" name="diffPaie" class="form-control form-control-sm" id="diffPaie" value="0">
										        </div>
										    </div>
										    
										    <div class="form-group row">
										      <label for="tranche" class="col-4">Tranche</label>
										        <div class="col-6">
										      		<input type="text" name="tranche" class="form-control form-control-sm" id="tranche" value="10">
										        </div>
										    </div>

										    <div class="form-group row">
										      <label for="calculeInt" class="col-4">Calcul intéret</label>
										        <div class="col-6">
											     	<select name="calculeInt" class="form-control form-control-sm">
												  		<option>Taux Fixe</option>
												  		<option>Amortissement dégressif</option>
												  		<option>Solde dégressif escompté</option>
													</select>
										        </div>
										    </div>

								   		</div>
								   		<div class="col-sm-6 col-md-6">


							   				<div class="form-group">
					                            <div class="custom-control custom-checkbox">
					                              <input class="custom-control-input" name="paiePrealInt" type="checkbox" value="1" id="paiePrealInt">
					                              <label class="custom-control-label" for="paiePrealInt">
					                                  Paiement préalable des intéret
					                              </label>
					                            </div>
					                    	</div>

										    					 
										   	<div class="form-group">
					                            <div class="custom-control custom-checkbox">
					                              <input class="custom-control-input" name="calculIntDiff" type="checkbox" value="1" id="calculIntDiff">
					                              <label class="custom-control-label" for="calculIntDiff">
					                                 Calcul intéret pour le différé
					                              </label>
					                            </div>
					                    	</div>

										    					 
										   	<div class="form-group">
					                            <div class="custom-control custom-checkbox">
					                              <input class="custom-control-input" name="intdedDecais" type="checkbox" value="1" id="intdedDecais">
					                              <label class="custom-control-label" for="intdedDecais">
					                                  Intéret déduit au décaisement
					                              </label>
					                            </div>
					                    	</div>					
										    					 
										   	<div class="form-group">
					                            <div class="custom-control custom-checkbox">
					                              <input class="custom-control-input" name="calculIntJours" type="checkbox" value="1" id="calculIntJours">
					                              <label class="custom-control-label" for="calculIntJours">
					                                  Calcul d'intéret en jours
					                              </label>
					                            </div>
					                    	</div>
										
										    					 
										   	<div class="form-group">
					                            <div class="custom-control custom-checkbox">
					                              <input class="custom-control-input" name="forfaitPaieprealable" type="checkbox" value="1" id="forfaitPaieprealable">
					                              <label class="custom-control-label" for="forfaitPaieprealable">
					                                Forfait pour paiement préalable de l'intéret
					                              </label>
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
			  
  	         <!-- <div class="card-footer col-12" style="text-align: right">
				 <button id="btnAdd" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
			</div> -->
		  		<!-- <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Modifier</button> -->
			  
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

	$('#btnAdd').click(function(){

		//var url =  $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ConfigCreditIndividuel');
		var data = $('#myForm').serialize();

		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/ConfigCreditIndividuel',
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
                    //$('#myForm')[0].reset();
                    $('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Configuration '+type+' avec succes!').fadeIn().delay(5000).fadeOut('slow');
                    //AllClient();
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
                alert('pas de donnée');
            }
        });


	});

	 $('#idProduit').change(function() {
    
    var str = "";
    $( "#idProduit option:selected" ).each(function() {
      str += $( this ).attr('value');
    });

      $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/getConfigProduit',
      dataType: 'json',
      data:{idProdCredit: str},
      async: false,
      success: function(data){
        if(data.configCreditIndividuel == null){
          $('input[name=montant]').val('');
          $('input[name=montMin]').val('');
          $('input[name=commCredit]').val('');
          $('input[name=adhesMin]').val('');
          $('input[name=periodMin]').val('');
          $('input[name=periodMax]').val('');
          $('input[name=delaiGrace]').val('');


          $('input[name=tauxIntAnnuel]').val('');
          $('input[name=tranche]').val('');
          $('input[name=typeTranche]').val('');
          $('input[name=calculeInt]').val('');
          $('input[name=diffPaie]').val('');         
        }else{
          $('input[name=tauxIntAnnuel]').val(data.configCreditIndividuel.tauxInteretAnnuel);
          $('input[name=tranche]').val(data.configCreditIndividuel.tranches);
          $('#typeTranche').val(data.configCreditIndividuel.typeTranche);
          $('#calculeInt').val(data.configCreditIndividuel.modeCalculInteret);
          $('input[name=diffPaie]').val(data.configCreditIndividuel.differePaiement);
          $('input[name=commission]').val(data.configCreditIndividuel.commission_crédit);  

          if(data.configCreditIndividuel.pariementPrealableInt == true){
          		$('paiePrealInt').attr('checked','true');          	
          }else{
          		$('paiePrealInt').attr('checked','false');          	
          }	


          $('#calculIntDiff').val(data.configCreditIndividuel.calculIntDiff);
          $('#intdedDecais').val(data.configCreditIndividuel.intDeduitAuDecaissement);
          $('#calculIntJours').val(data.configCreditIndividuel.calculIntEnJours);
          $('#forfaitPaieprealable').val(data.configCreditIndividuel.forfaitPaiePrealableInt);
        }



      },
      error: function(){
        alert('Impossible d\'afficher les donnée')
      }

  });

  });


});

</script>