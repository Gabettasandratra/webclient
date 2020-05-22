<!-- <div class="jumbotron"  style="padding-bottom: 10px;padding-top: -5px;">
		<h5>Configuration Crédit</h5>
</div> -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration générale crédit</h2>
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
			  	<!-- AFFICHER LORS D'UN ACTION -->
			    <div class="alert alert-success" style="display: none;margin-top: 25px ">

			    </div>
			    <!-- FORMULAIRE DE SAISIE -->
			    <div class="row">

			    <form  id="myForm"  class="form-row" action="" method="post">	

					  <div class="col-md-4 forms">
					  
					     		<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="suiviCreditGroupe" type="checkbox" id="suiviCreditGroupe">
								      <label class="form-check-label" for="suiviCreditGroupe">
								        Suivi des crédit de groupe au niveau des membres
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="tauxIntMembreGroup" type="checkbox" id="tauxIntMembreGroup">
								      <label class="form-check-label" for="tauxIntMembreGroup">
								        Les membres de groupe ont des taux d'intéret différents
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="solliciterCredit" type="checkbox" id="solliciterCredit">
								      <label class="form-check-label" for="solliciterCredit">
								       	Le client peut solliciter un 2ème crédit quand le 1er est en cours
								      </label>
								    </div>
								  </div> 

								   <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="recevoirCredit" type="checkbox" id="recevoirCredit">
								      <label class="form-check-label" for="recevoirCredit">
								       	Le client peut recevoir un 2ème crédit quand le 1er est en cours
								      </label>
								    </div>
								  </div> 


								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="autoriserCredit" type="checkbox" id="autoriserCredit">
								      <label class="form-check-label" for="autoriserCredit">
								        Le deuxième crédit est autorisé s'il n'y a pas d'arriérés
								      </label>
								    </div>
								  </div>  

							 <div class="form-group">
							      <label for="maxNumJour">Max. Numéro du jours pour la mise à jour des tranches après le décaissement</label>
							      <input type="text" name="maxNumJour" class="form-control form-control-sm col-4" id="maxNumJour" placeholder="99999">
						 	 </div>

							  <div class="form-group">
							    <div class="form-check">
							      <input class="form-check-input" name="calculArrierer" type="checkbox" id="calculArrierer">
							      <label class="form-check-label" for="calculArrierer">
							        Total du capital, intérêts, pénalité et commission utilisé pour le calcul d'arriérés
							      </label>
							    </div>
							  </div>

							  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="calculArrierer" type="checkbox" id="calculArrierer">
								      <label class="form-check-label" for="calculArrierer">
								        Aviser l'utilisateur au démarrage si les pénalités ne sont pas calculées à l'heure
								      </label>
								    </div>
							  </div>

					    </div>

					    <!-- PREMIER COLONE -->
					     <div class="col-md-3 forms">
					    

							    <div class="form-group">
							      <label for="decaisseParDefaut">Décaissement par défaut</label>
							     	<select name="decaisseParDefaut" class="form-control form-control-sm col-8" id"decaisseParDefaut">
								  		<option>Cash</option>
								  		<option>Chèque</option>
								  		<option>Transfere au Cpte Epargne</option>
								  		<option>Transfere au Cpte Bancaire du Client</option>
								  		<option>Décaissement au fournissseur</option>
									</select>
							    </div>

							     <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="cycleCreditModifiable" type="checkbox" id="cycleCreditModifiable">
								      <label class="form-check-label" for="cycleCreditModifiable">
								       	Cycle de crédit modifiable au décaissement
								      </label>
								    </div>
								  </div>

							  	<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="numeroCreditModifiable" type="checkbox" id="numeroCreditModifiable">
								      <label class="form-check-label" for="numeroCreditModifiable">
								       	Numéro de crédit modifiable à la demande de crédit
								      </label>
								    </div>
								  </div>

								   <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="autoriseDecaissement" type="checkbox" id="autoriseDecaissement">
								      <label class="form-check-label" for="autoriseDecaissement">
								        Ne pas autorisé un décaissement en cas que le partenaire a un crédit en cours
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="imprimerRecu" type="checkbox" id="imprimerRecu">
								      <label class="form-check-label" for="imprimerRecu">
								       	Imprimer un reçu au décaissement
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="imprimerContrat" type="checkbox" id="imprimerContrat">
								      <label class="form-check-label" for="imprimerContrat">
								       	Imprimer un contrat de crédit au décaissement
								      </label>
								    </div>
								  </div>


							   	<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="dateEcheance" type="checkbox" id="dateEcheance">
								      <label class="form-check-label" for="dateEcheance">
								        Les dates d'échéance doivent être reportées lors du virement de chèque
								      </label>
								    </div>
								  </div>
								 
							     <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="prioriRemb" type="checkbox" id="prioriRemb">
								      <label class="form-check-label" for="prioriRemb">
								        Priorités de remboursement modifiable
								      </label>
								    </div>
								  </div>
								 	 
				<!-- END COLONE  -->

					    </div>


					    	<!-- DEUXIEME COLONE REMBOURSSEMNT -->
					    
					    <div class="col-md-3 forms">


							    <div class="form-group">
							      <label for="rembParDefaut">Remboursement par défaut</label>
							     	<select name="rembParDefaut" class="form-control form-control-sm col-8" id"rembParDefaut">
								  		<option>Cash</option>
								  		<option>Chèque</option>
								  		<option>Virement de l'épargne</option>
								  		<option>Directe à la Banque</option>								 
									</select>
							    </div>

							 	<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="autoriserSurPaieCredit" type="checkbox" id="autoriserSurPaieCredit">
								      <label class="form-check-label" for="autoriserSurPaieCredit">
								        Autoriser le surpaiement de crédits
								      </label>
								    </div>
								</div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="exclureRembAnticipatif" type="checkbox" id="exclureRembAnticipatif">
								      <label class="form-check-label" for="exclureRembAnticipatif">
								       	Exclure des rembourssements anticipatifs dans le calcul du taux de rembourssement
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="considererCreditEcheant" type="checkbox" id="considererCreditEcheant">
								      <label class="form-check-label" for="considererCreditEcheant">
								       	Considérer les crédit échéant le jour de rapport entant qu'en arriérés
								      </label>
								    </div>
								  </div>

								  <div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="agentPeutChanger" type="checkbox" id="agentPeutChanger">
								      <label class="form-check-label" for="agentPeutChanger">
								        L'Agent de crédits peut changer le calendrier de remboursement
								      </label>
								    </div>
								  </div>
							

							   	<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="payerTrancheAvance" type="checkbox" id="payerTrancheAvance">
								      <label class="form-check-label" for="payerTrancheAvance">
								        Le client peut payer des tranches en avance
								      </label>
								    </div>
								  </div>

							   	<div class="form-group">
								    <div class="form-check">
								      <input class="form-check-input" name="garantPeutAvaliser" type="checkbox" id="garantPeutAvaliser">
								      <label class="form-check-label" for="garantPeutAvaliser">
								        Un garant peut avaliser plusieur crédit
								      </label>
								    </div>
								  </div>

						    <!-- END COLONE  -->
					   	</div>

					   		<!-- TROISIEME COLONE -->
						 <!-- <div class="col-md-2">
					   	 	
					   	 	
						 </div>
 -->

					   	<!-- POUR LE BOUTTON -->
					</form>
					</div>

  	         <div class="card-footer col-12" style="text-align: right">
				 <button id="btnAdd" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
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

		var url =  $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ConfigCreditIndividuel');
		var data = $('#myForm').serialize();

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
                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    $('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'demande '+type+' avec succes!').fadeIn().delay(5000).fadeOut('slow');
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