
<!-- <div class="container-fluid" style="margin-top: 7%;">
 -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration générale produit crédit</h2>
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
				<div class="col-12 col-12 col-12 col-12">
									    <!-- FORMULAIRE DE SAISIE -->
			    <div class="row">

			    <form  id="myForm" action="" method="post">	
			 	
			 		<div class="row">
			  			<div class="form-group col-6 row">
					     <label class="col-sm-2" for="idProduit">Produit</label>
				  		<div class="col-sm-6">
					     	<select name="idProduit" class="form-control form-control-sm col-8" name="idProduit" id="idProduit">
					     		<option value=""></option>
						  		 <?php foreach($result->Listes_ProduitCredit as $value) :?>
			                        <option value="<?= $value->idProdCredit ?>"><?= $value->nomProdCredit ?></option>
			                    <?php endforeach; ?>
							</select>
					   	 </div>
					   	</div>

					   	<div class="col-6">
					   		<button id="btnAdd" type="submit" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-save"></i> Enregistrer</button>
					   	</div>
			 		</div>

				   	<hr>
				   	<div class="form-row" >
			
					  <div class="col-md-4">
					  		
							<div class="form-group">
								<input type="hidden" name="rowId" value="1"/>
							   	<br>
								<fieldset class="scheduler-border"> 
								    <legend class="scheduler-border">Recalcul des dates d'échéance au décaissement</legend> 
									    <div class="control-group"> 
									    	<div class="form-check">
											  <input class="form-check-input" type="radio" name="recaluDateEcheanceAuDecaise" id="exampleRadios1" value="ne pas mettre a jours les dates" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    Ne pas mettre à jour les dates d'échéance
											  </label>
											</div>

											<div class="form-check">
											  <input class="form-check-input" type="radio" name="recaluDateEcheanceAuDecaise" id="exampleRadios2" value="mettre a jours les dates">	
											  <label class="form-check-label" for="exampleRadios2">
											    Mettre à jour les dates d'échéance de la différence entre la date de demande et de décaissement
											  </label>
											</div>

						    		    </div> 
								</fieldset> 
							</div>
							 

							<div class="form-group">
								<fieldset class="scheduler-border"> 
								    <legend class="scheduler-border">Recalcul intérêt sur remboursement</legend> 
									    <div class="control-group"> 
							          	
							          	<div class="form-check">
										  <input class="form-check-input" type="radio" name="recalculInt" id="example1" value="0" checked>
										  <label class="form-check-label" for="example1">
										    Jamais recalculer l'intérêt sur remboursement en cas d'ammortissement dégressif 
										  </label>
										</div>

										<div class="form-check">
										  <input class="form-check-input" type="radio" name="recalculInt" id="example2" value="1">
										  <label class="form-check-label" for="example2">
										    Toujours recalculer l'intérêt sur remboursement en cas d'ammortissement dégressif
										  </label>
										</div>

							          </div> 
								</fieldset> 
								 
							</div>
						  
					    </div>

					    <!-- PREMIER COLONE -->
					     <div class="col-md-3" style="margin-left: 10px;">
					    		
					     	<br><!-- 
							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="lierEpargne" type="checkbox" value="1" id="lierEpargne">
		                              <label class="custom-control-label" for="lierEpargne">
		                                	 Produit lié à l'épargne?
		                              </label>
		                            </div>
	                        	</div> -->
	                        	<input type="hidden" name="lierEpargne" value ="0" />
							  	<div class="form-group">
								      <label for="nbrJrInt">Nombre de jours d'intérêt dans l'année</label>
								      <input type="text" name="nbrJrInt" class="form-control form-control-sm col-4" id="nbrJrInt" placeholder="Ex: 240">
								  </div>

								  <div class="form-group ">
								      <label for="nbrSemaine">Nombre de semaines dans l'année</label>
								      <input type="text" name="nbrSemaine" class="form-control form-control-sm col-4" id="nbrSemaine" placeholder="Ex: 48">
								  </div>
						
								<div class="form-group">
							      <label for="devise">Devises</label>
							     	<select name="devise" class="form-control form-control-sm col-4" id"devise">
								  		<option>MGA</option>
								  		<option>MKD</option>
								  		<option>MMK</option>
								  		<option>MNT</option>
								  		<option>MOP</option>
									</select>
							    </div>

							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="tauxIntVarSoldeDegr" type="checkbox" value="1" id="tauxIntVarSoldeDegr">
		                              <label class="custom-control-label" for="tauxIntVarSoldeDegr">
		                                Utiliser un taux d'intérêt variable pour des crédits au solde dégressif
		                              </label>
		                            </div>
	                        	</div>

							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="publiPosDemande" type="checkbox" value="1" id="publiPosDemande">
		                              <label class="custom-control-label" for="publiPosDemande">
		                                	Générer des enregistrements publi-postage lors de la demande de crédit
		                              </label>
		                            </div>
	                        	</div>

					
							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="publiPosDecaisse" type="checkbox" value="1" id="publiPosDecaisse">
		                              <label class="custom-control-label" for="publiPosDecaisse">
		                                	Générer des enregistrements publi-postage lors des décaissements
		                              </label>
		                            </div>
	                        	</div>

								
							<!-- END COLONE  -->

					    </div>


					    	<!-- DEUXIEME COLONE REMBOURSSEMNT -->
					

					    <div class="col-md-4">
					    	<br>
							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="reinitialiserIntImpayer" type="checkbox" value="1" id="reinitialiserIntImpayer">
		                              <label class="custom-control-label" for="reinitialiserIntImpayer">
		                                Ne pas réinitialiser les intérêts impayés après recalcul pour le solde dégressif
		                              </label>
		                            </div>
	                        	</div>
					
					
							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="produitLimit" type="checkbox" value="1" id="produitLimit">
		                              <label class="custom-control-label" for="produitLimit">
		                                Exclure le produit des limitations générales à la demande et au décaissement en cas de 2ème crédit
		                              </label>
		                            </div>
	                        	</div>


							   <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="changerCmptGL" type="checkbox" value="1" id="changerCmptGL">
		                              <label class="custom-control-label" for="changerCmptGL">
		                                 Utilisateur peut changer le compte GL de surpaiement au remboursement
		                              </label>
		                            </div>
	                        	</div>

								 <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="activePrioriRembDeclass" type="checkbox" value="1" id="activePrioriRembDeclass">
		                              <label class="custom-control-label" for="activePrioriRembDeclass">
		                                Activer la priorité de remboursement pour des crédits déclassés: Capital, Intérêt et Pénalités
		                              </label>
		                            </div>
		                        </div>
							   	
								 <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="privilegieRembDouteux" type="checkbox" value="1" id="privilegieRembDouteux">
		                              <label class="custom-control-label" for="privilegieRembDouteux">
		                                Privilégier le remboursement du capital pour des créances douteuses (crédits en arriérés depuis plus de xx jours)
		                              </label>
		                            </div>
		                        </div>
		
	  							 <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="regleDuplum" type="checkbox" value="1" id="regleDuplum">
		                              <label class="custom-control-label" for="regleDuplum">
		                                Activer la règle Duplum (Les intérêts ne doivent pas dépasser le capital en cours)
		                              </label>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="custom-control custom-checkbox">
		                              <input class="custom-control-input" name="decaissePartiel" type="checkbox" value="1" id="decaissePartiel">
		                              <label class="custom-control-label" for="decaissePartiel">
		                                	Autoriser le décaissement partiel
		                              </label>
		                            </div>
		                        </div>

					   	</div>
					</div>
					 <!-- END COLONE  -->
					   	<!-- POUR LE BOUTTON -->
				</form>
				</div>
			  </div>
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

	$('#btnAdd').click(function(){

		//var url =  $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ConfigGeneralCredit');
		var data = $('#myForm').serialize();

		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/ConfigGeneralCredit',
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
                    alert('Configuration générale crédit bien Enregistré');
                  //$('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Configuration '+type+' avec succes!').fadeIn().delay(7000).fadeOut('slow');
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


});

</script>