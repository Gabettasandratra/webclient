
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration crédit Groupe</h2>
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
				   	
					  <div class="col-md-3">
					
					    <div class="form-group">
					      <label for="tauxIntAnnuel">Taux d'intéret Annuel</label>
					      <input type="text" name="tauxIntAnnuel" class="form-control form-control-sm" id="tauxIntAnnuel" placeholder="0.0">
					    </div>

					     <div class="form-group">
					      <label for="typeTranche">Type Tranche</label>
					     	<select name="typeTranche" class="form-control form-control-sm" id="typeTranche">
						  		<option>Quotidiennement</option>
						  		<option>Hebdomadairement</option>
						  		<option>Quizaine</option>
						  		<option>Mensuellement</option>
							</select>
					    </div>
					  
					    <div class="form-group">
					      <label for="diffPaie">Différé de paiement</label>
					      <input type="text" name="diffPaie" class="form-control form-control-sm" id="diffPaie" placeholder="2">
					    </div>
					    
					    <div class="form-group">
					      <label for="tranche">Tranche</label>
					      <input type="text" name="tranche" class="form-control form-control-sm" id="tranche" placeholder="20">
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

					    <!-- PREMIER COLONE -->
					     <div class="col-md-3">
					    

					    <div class="form-group">
					      <label for="calculeInt">Calcul intéret</label>
					     	<select name="calculeInt" class="form-control form-control-sm">
						  		<option>Taux Fixe</option>
						  		<option>Amortissement dégressif</option>
						  		<option>Solde dégressif escompté</option>
							</select>
					    </div> 

					    <div class="form-group">
					      <label for="secteurActiviter">Secteur d'activité par défaut</label>
					     	<select name="secteurActiviter" class="form-control form-control-sm" id="secteurActiviter">
						  		<option>Agriculture</option>
						  		<option>Commerce</option>
						  		<option>Autre</option>
							</select>
					    </div>

					    <div class="form-group">
					      <label for="montant">Montant Crédit</label>
					      <input type="text" name="montant" class="form-control form-control-sm" id="montant" placeholder="0.0">
					    </div>

					    <div class="form-group">
					      <label for="commCredit">Commission sur crédit(%)</label>
					      <input type="text" name="commCredit" class="form-control form-control-sm" id="commCredit" placeholder="20">
					    </div>


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
		                      <input class="custom-control-input" name="calculIntJours" type="checkbox" value="1" id="calculIntJours">
		                      <label class="custom-control-label" for="calculIntJours">
		                         Calcul d'intéret en jours
		                      </label>
		                    </div>
		            	</div>			

					  	<div class="form-group">
		                    <div class="custom-control custom-checkbox">
		                      <input class="custom-control-input" name="augmenterCycle" type="checkbox" value="1" id="augmenterCycle">
		                      <label class="custom-control-label" for="augmenterCycle">
		                         Augmenter le cycle de crédit
		                      </label>
		                    </div>
		            	</div>			 

					    </div>


					    	<!-- DEUXIEME COLONE -->
					    
					    <div class="col-md-3">

						   

					    <div class="form-group">
						      <label for="delaiGrace">Délai de grace maximum</label>
						      <input type="text" name="delaiGrace" class="form-control form-control-sm" id="delaiGrace" placeholder="999">
					    </div>
						    
					    <div class="form-group">
						      <label for="montantParMembre">Montant de crédit par membre</label>
						      <input type="text" name="montantParMembre" class="form-control form-control-sm" id="montantParMembre" placeholder="0.00">
					    </div>
						        
					    <div class="form-group">
						      <label for="numCycleMembre">N° de cycle du membre de groupe</label>
						      <input type="text" name="numCycleMembre" class="form-control form-control-sm" id="numCycleMembre" placeholder="1">
					    </div>

					    <div class="form-group">
					      <label for="montMin">Montant minimum par membre</label>
					      <input type="text" name="montMin" class="form-control form-control-sm " id="montMin" placeholder="0.0">
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
		                      <input class="custom-control-input" name="forfaitPaieprealable" type="checkbox" value="1" id="forfaitPaieprealable">
		                      <label class="custom-control-label" for="forfaitPaieprealable">
		                        Forfait pour paiement préalable de l'intéret
		                      </label>
		                    </div>
		            	</div>			 
						    

					  	<div class="form-group">
		                    <div class="custom-control custom-checkbox">
		                      <input class="custom-control-input" name="garantCredit" type="checkbox" value="1" id="garantCredit">
		                      <label class="custom-control-label" for="garantCredit">
		                        Garantie du crédit vérifié au niveau des membres
		                      </label>
		                    </div>
		            	</div>			 
						    
					   	</div>

					   		<!-- TROISIEME COLONE -->
					   <div class="col-md-3">	     

					    <div class="form-group">
					      <label for="montMaxParMenmbre">Montant maximum par membre</label>
					      <input type="text" name="montMaxParMenmbre" class="form-control form-control-sm col-6" id="montMaxParMenmbre" placeholder="0.0">
					    </div> 

					     <div class="form-group">
						      <label for="periodeMin">Période minimum de crédit (en mois)</label>
						      <input type="text" name="periodeMin" class="form-control form-control-sm col-6" id="periodeMin" placeholder="0">
						    </div> 

						    <div class="form-group">
						      <label for="periodeMax">Période maximum de crédit (en mois)</label>
						      <input type="text" name="periodeMax" class="form-control form-control-sm col-6" id="periodeMax" placeholder="0">
						    </div>

						<div class="form-group">
					      <label for="periodMinAvantAdhesion">Période minimum d'adhésion avant le décaissement (pour groupes)</label>
					      <input type="text" name="periodMinAvantAdhesion" class="form-control form-control-sm col-6" id="periodMinAvantAdhesion" placeholder="0">
					    </div> 

					    <div class="form-group">
					      <label for="periodMinAvantDecaisse">Période minimum d'adhésion avant le décaissement (pour membres des groupes)</label>
					      <input type="text" name="periodMinAvantDecaisse" class="form-control form-control-sm col-6" id="periodMinAvantDecaisse" placeholder="0.0">
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

	$('#btnAdd').click(function(){

		//var url =  $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ConfigCreditIndividuel');
		var data = $('#myForm').serialize();

		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/ConfigCreditGroupes',
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
                    
                    $('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Configuration credit groupe '+type+' avec succes!').fadeIn().delay(4000).fadeOut('slow');
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