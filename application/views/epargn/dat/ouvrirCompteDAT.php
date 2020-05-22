<!-- <div class="container" style="display:none">

	<div class="card-header col-8 place">
		<h5 align="center" class="titre">Ouvrir compte dépôt à terme</h5>
	</div>

	<br> -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile " id="pre" style="display:none">
    <div class="x_title">
      <h2>Ouvrir compte dépôt à terme</h2>
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


				<div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

			    </div>    

			    <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

			    </div>      

				<form id="myDonnee" action="" method="post">

					<input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>

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
			                  <button id="btnChange" type="button" class="btn btn-sm btn-light"><i class="fa fa-recycle"></i> Changer client</button>
			                  &nbsp;&nbsp;
			                  <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
			                </div>
						</div>

					</div>

					<hr>
					<br>
					<br>
					<div class="row">

						<div class="col-6">
							<!-- <span id="champObligatoir">*</span> -->
						  <div class="form-group row">
			                  <label for="codClient" class="col-sm-4">Code client:</label>
			                  <div class="col-sm-6">
			                  	<input type="hidden" name="individuel" id="individuel">
				                <input type="hidden" name="groupe"  id="groupe">	            
			                    <input type="text" id="codClient" name="codClient" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div>

						  <div class="form-group row">
			                  <label for="nom" class="col-sm-4">Nom client:</label>
			                  <div class="col-sm-8">
			                   <input type="text" id="nom" name="nom" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div>
						
						  <div class="form-group row">
			                  <label for="nomProduit" class="col-sm-4">Nom produit:</label>
			                  <div class="col-sm-6">
			                   <input type="text" id="nomProduit" name="nomProduit" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div>

			               <div class="form-group row">
			                  <label for="devise" class="col-sm-4">Dévise:</label>
			                  <div class="col-sm-4">
			                   <input type="text" id="devise" name="devise" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div> 

			               <div class="form-group row">
			                 <label for="dateEcheanche" class="col-sm-4">Date échéanche:</label>
			                 <div class="col-sm-4">
			                   <input type="hidden" id="dateEc" name="dateEc"/>
			                   <input type="date" id="dateEcheanche" name="dateEcheanche" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="intEcheance" class="col-sm-4">Intérêt à l'échéance:</label>
			                 <div class="col-sm-4">
			                   <input type="number" value="0" id="intEcheance" name="intEcheance" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="valeur" class="col-sm-4">Montant total à l'échéance:</label>
			                 <div class="col-sm-4">
			                   <input type="number"  value="0" id="valeur" name="valeur" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                  <label for="taxe" class="col-sm-4">Taxe (%):</label>
			                  <div class="col-sm-3">
			                   <input type="text" id="taxe" valeu="0" name="taxe" class="form-control form-control-sm col-8" disabled/>
			                  </div>
			               </div>

			                <div class="form-group row">
			                  <label for="taxeRetenue" class="col-sm-4">Taxe Retenue:</label>
			                  <div class="col-sm-4">
			                   <input type="text" id="taxeRetenue" valeu="0" name="taxeRetenue" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div>

			              
						</div>
						<span class="vertical-line"></span>		
						<div class="col-5">

						  <div class="form-group row">
			                 <label for="dateDepot" class="col-sm-4">Date dépôt: <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-6">
			                   <input type="date" id="dateDepot" name="dateDepot" class="form-control form-control-sm col-8"/>
			                 </div>
			               </div>
			 				
			 			  <div class="form-group row">
			                 <label for="montant" class="col-sm-4">Montant: <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-6">
			                   <input type="number" min="0" value="0" id="montant" name="montant" class="form-control form-control-sm col-8"/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="tauxInt" class="col-sm-4">Taux d'intérêt (%): <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-3">
			                   <input type="number" min="1" value="1" id="tauxInt" name="tauxInt" class="form-control form-control-sm col-12"/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="periode" class="col-sm-4">Période (en mois): <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-3">
			                   <input type="number" id="periode" min="1" value="1" name="periode" class="form-control form-control-sm col-12"/>
			                 </div>
			               </div>               
			  			
			  			  <div class="form-group row">
			                 <label for="piece" class="col-sm-4">Piece comptable: <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-6">
			                   <input type="text" id="piece" name="piece" class="form-control form-control-sm col-8"/>
			                 </div>
			               </div>
			               <br>
			                <div class="">
					               <fieldset class="scheduler-border"> 
					                <legend class="scheduler-border">Mode de payement <span id="champObligatoir">*</span></legend> 
					                        
					                <div class="form-group row">
					                    <div class="custom-control custom-radio custom-control-inline col-3">
					                      <input class="custom-control-input" name="payement" type="radio" value="cash" id="cash" checked>
					                      <label class="custom-control-label" for="cash">
				    	                    Cash
				                      </label>
				                    </div>

					                     
					                  <div id="affGuichet" class="form-group col-9 row" style="">
					                      
					                      <label for="numCptCaisse" class="col-sm-4">Guichet:</label>
					                      <select name="numCptCaisse" class="form-control form-control-sm col-8">
					                              <option></option>
					                         <?php foreach($comm->Liste_CompteCaisse as $value) :?>
					                              <option value="<?= $value->nomCptCaisse ?>"><?= $value->nomCptCaisse ?> || <?= $value->account->tkey ?></option>
					                          <?php endforeach; ?>
					                    </select>
					                  </div>

					                </div>   

					                <div class="form-group row">
					                    <div class="custom-control custom-radio custom-control-inline col-3">
					                      <input class="custom-control-input" name="payement" type="radio" value="cheque" id="cheque">
					                      <label class="custom-control-label" for="cheque">
					                        Chèque
					                      </label>
					                    </div>
					                   
					                       <div id="affCheque" style="display: none;" class="form-group col-9 row">                                        
					                          <label class="col-sm-4" for="numCheque">N° chèque: </label>
					                          <div class=" col-sm-8">
					                            <input type="text" name="numCheque" class="form-control form-control-sm col-12" id="numCheque">
					                          </div>
					                      </div> 
					                 
					                </div> 

					                <div class="form-group row">
					                    <div class="custom-control custom-radio custom-control-inline col-3">
					                      <input class="custom-control-input" name="payement" type="radio" value="mobile" id="mobile">
					                      <label class="custom-control-label" for="mobile">
					                        Transfer mobile
					                      </label>
					                    </div>

					                 
					                     <div id="affMob" style="display: none;" class="form-group col-9 row">                                        
					                        <label class="col-sm-4" for="tel">N° tel: </label>
					                        <div class=" col-sm-8">
					                          <input type="text" name="tel" class="form-control form-control-sm col-12" id="tel">
					                        </div>
					                    </div>                        
					                </div>  

					                <div class="form-group row">
					                    <div class="custom-control custom-radio custom-control-inline col-3">
					                      <input class="custom-control-input" name="payement" type="radio" value="epargne" id="epargne">
					                      <label class="custom-control-label" for="epargne">
					                        Transfer épargne
					                      </label>
					                    </div>

					                 
					                     <div id="affEp" style="display: none;" class="form-group col-9 row">                                        
					                       <label for="comptEpargne" class="col-sm-4">Compte:</label>
					                       <select id="comptEpargne" name="comptEpargne" class="form-control form-control-sm col-8">
					                         	<option></option>	                        
					                       </select>
					                    </div>                        
					                </div>  

					            </fieldset> 
					        </div>  

						</div>

					</div>
					

				</form>

			</div>
			</div>
			</div>
</div>

<!-- Choix client -->

<div id="modalAdd" title="Veuillez selectionner un client" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div>      
	          <div class="form-group row">
	            <label for="choix" class="col-sm-5">Client: <span id="champObligatoir">*</span></label>
	              <div class="col-sm-7">
	                <select name="choix" class="form-control form-control-sm col-12" id="choix">
	                     <option>-----Choisir client-----</option>
	                     <option value="individuel">Individuel</option>
	                     <option value="groupe">Groupe</option>
	                </select>
	              </div>
	           </div>  
	          
	          <div class="form-group row">                                        
	              <label id="labCode" class="col-sm-5" for="codeCli">Code Client: <span id="champObligatoir">*</span> </label>
	              <div class=" col-sm-7">
	                <input type="text" name="codeCli" placeholder="Saisir n° client" class="form-control form-control-sm col-12" id="codeCli">
	                <input type="hidden" name="codeGrp" placeholder="Saisir n° client Groupe" class="form-control form-control-sm col-12" id="codeGrp">
	                <input type="hidden" placeholder="Veuillez séléctioner le client" class="form-control form-control-sm col-12" id="rien" disabled>
	              </div>
	          </div>   

         </div>
       </div> 
    </form> 
    <br><br>
   <div class="modal-footer">
    <!-- <span style="float: left;margin-right: 20%">les champs marqué par <span id="champObligatoir">*</span> </label> sont obligatoire </span> -->
     <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout">Suivant <i class="fa fa-forward"></i></button>
 </div>

</div>

  <!-- jQuery -->
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
    <script src="<?php echo base_url('/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
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

     <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
       <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>


<script type="text/javascript">


$(function(){


	$( "#modalAdd" ).dialog({
	  autoOpen: true,
	  width: 500,
	  height: 300,
	  show: {
	    effect: "size",
	    duration: 800,      
	  },
	  hide: {
	    effect: "explode",
	    duration: 800
	  }
	});

	today();
	  function today(){
	  var now = new Date();
	  var day = ("0" + now.getDate()).slice(-2);
	  var month = ("0" + (now.getMonth() + 1)).slice(-2);

	  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

	  $('#dateDepot').val(today);  
	}
	//Fonction additional
	choixClients();
	utils();
	choixPaye();

	//Click sur le bouton suivant
	$('#btnAff').click(function(){

		  //Vérifie si le code client individuel et groupe sont null
		  if($('input[name=codeCli]').val() == "" && $('input[name=codeGrp]').val() == ""){
	          $('#codeCli').addClass('is-invalid');
	          $('.alert-danger').html('Veuillez choisir un client, SVP!')
	              .fadeIn().delay(3000).fadeOut('slow');	          
	       }else{
	       		//Si le client est individuel
	       		if($('input[name=codeCli]').val() != ""){

	       			$('input[name=codClient]').val($('input[name=codeCli]').val());	 
	       			$('input[name=individuel]').val($('input[name=codeCli]').val());
	       			$('input[name=groupe]').val("");	
	       			getCompteEpargne($('input[name=codeCli]').val());  

	       		}//Si le client est un groupe
	       		else if($('input[name=codeGrp]').val() != ""){


	       			$('input[name=codClient]').val($('input[name=codeGrp]').val());	 
	       			$('input[name=groupe]').val($('input[name=codeGrp]').val());
	       			$('input[name=individuel]').val("");	       		
	       		}

	       		$('#codeCli').removeClass('is-invalid');
				$('#modalAdd').dialog('close');
				$('#pre').attr('style','display:block');	//container	 
	       }

	});

	function getCompteEpargne(id){
		$.ajax({
	      type:'ajax',
	      method:"get",
	      url:'<?php echo base_url();?>index.php/getDetailClient',
	      dataType:'json',
	      data: {id:id},
	      async: false,
	        success: function(response) {
	            //alert(response);
	            var detailEpargne;
	            var epargne = response.epargne;
	            var c;
	            if (response.success) {

	            	 detailEpargne += '<option></option>';   

	                //détail épargne
	                if(epargne.length == null){
	                	 detailEpargne+='<option value="'+epargne.numCompteEp+'">'+epargne.numCompteEp+' |'+epargne.solde+'</option>';     
	                }else{
	                  c = epargne.length;
	                  for (i = 0; i < epargne.length; i++) {
	                  	detailEpargne+='<option value="'+epargne[i].numCompteEp+'">'+epargne[i].numCompteEp+' |'+epargne[i].solde+'</option>';	                 
	                  }
	                  
	                }

	                $('#comptEpargne').html(detailEpargne);
	             }
	          
	        },
	        error: function(response){	          
	          var detailEpargne = '<option></option>';  
	          $('#comptEpargne').html(detailEpargne); 
	        }
	    });
	}

	//Changer client
	$('#btnChange').click(function(){
		$('#modalAdd').dialog('open');
		$('#pre').attr('style','display:none');		
	});

    $('#btnSave').click(function(){

      var data = $('#myDonnee').serialize();

      var piece = $('input[name=piece]').val();
      var dateDepot = $('input[name=dateDepot]').val();
      var montant = $('input[name=montant]').val();
      var taux = $('input[name=tauxInt]').val();
      var periode = $('input[name=periode]').val();

      var valider = '';

      if(piece == ''){
      	$('#piece').addClass('is-invalid');
      }else{
      	$('#piece').removeClass('is-invalid');
      	valider+='1';
      }
      if(dateDepot == ''){
      	$('#dateDepot').addClass('is-invalid');
      }else{
      	$('#dateDepot').removeClass('is-invalid');
      	valider+='2';
      } 
     if(montant == ''){
      	$('#montant').addClass('is-invalid');
      }else{
      	$('#montant').removeClass('is-invalid');
      	valider+='3';
      }  
      if(taux == ''){
      	$('#tauxInt').addClass('is-invalid');
      }else{
      	$('#tauxInt').removeClass('is-invalid');
      	valider+='4';
      }
 	 if(periode == ''){
      	$('#periode').addClass('is-invalid');
      }else{
      	$('#periode').removeClass('is-invalid');
      	valider+='5';
      }

      if (valider == '12345') {
      	 saveData(data);
      }else{    
  		$('.alert-danger').html('Veuillez remplir les champs demandés')
		  	.fadeIn().delay(5000).fadeOut('slow');     
	 }
	});

	function saveData(data){
		$.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/ouvrirCompteDAT',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                    console.log(response);
         
                    if(response == 'Enregistrement reussit')
                    {
					  $('#myDonnee')[0].reset();
					 // $('#myForm').preventDefault();
                      $('.alert-success').html(response)
             		  .fadeIn().delay(5000).fadeOut('slow');  	                        
                    }else{
                    	 $('.alert-danger').html(response)
             		  .fadeIn().delay(5000).fadeOut('slow'); 
                    }                  
            },
            error: function(response){
               $('.alert-danger').html('Erreur enregistrement')
              .fadeIn().delay(2000).fadeOut('slow');
            }
        });
	}

 //Control
	//ENREGISTREMENT CONFIGURATION 
	var produit = '';

	$('#produit').change(function() {  
	  $( "#produit option:selected" ).each(function() {
	      produit = $( this ).attr('value');
	    }); 
	  getDetailProduit(produit);
	});

	//Select produit
	 $('#btnSave').attr('disabled',true);
     $('#btnSave').removeClass('btn-primary');
     $('#btnSave').addClass('btn-light');

	function getDetailProduit(id){
		 $.ajax({
            type:'ajax',
            method: "get",
            url: '<?php echo base_url();?>index.php/getDetailProduitEpargne', 
            dataType:'json',
            data: {id:id},
            async: false,
            success: function(response) {
            	if(response.configGeneralDat == null || response.configGlDat == null ){
            		
            		 $('.alert-danger').html('Ce produit n\'est pas configuré')
	              .fadeIn().delay(8000).fadeOut('slow');
	               $('input[name=nomProduit]').val(response.nomProdEpargne);            		
             	   $('input[name=devise]').val("");            		
             	   $('input[name=taxe]').val(""); 

             	   $('#btnSave').attr('disabled',true);
             	   $('#btnSave').removeClass('btn-primary');
             	   $('#btnSave').addClass('btn-light');
            	}else{

            	 $('.alert-danger').html('Ce produit n\'est pas configuré').fadeOut('slow');

             	  $('input[name=nomProduit]').val(response.nomProdEpargne);            		
             	  $('input[name=devise]').val(response.configGeneralDat.devise);            		
             	  $('input[name=taxe]').val(response.configGeneralDat.taxe); 
             	 
             	  var tautTaxe = parseFloat(response.configGeneralDat.taxe);
             	  var intert = parseFloat($('input[name=intEcheance]').val());
             	  var tax = (tautTaxe*intert)/100;
             	  $('input[name=taxeRetenue]').val(tax); 

             	  $('#btnSave').attr('disabled',false);
             	  $('#btnSave').removeClass('btn-light');
             	  $('#btnSave').addClass('btn-primary');

            	}
            },
            error: function(response){
              alert('Erreur');
            }
        });
	}

	function calcul(){
	  var mont = parseFloat($('input[name=montant]').val());
	  var taut = parseFloat($('input[name=tauxInt]').val());
	  var periode = parseFloat($('input[name=periode]').val());

	  var interet = (mont * periode) * taut/100;
	  var total = mont + interet;
	  $('input[name=intEcheance]').val(interet);
	  $('input[name=valeur]').val(total);


	   var tautTaxe = parseFloat($('input[name=taxe]').val());
 	   var intert = parseFloat($('input[name=intEcheance]').val());
 	   var tax = (tautTaxe*intert)/100;
 	   $('input[name=taxeRetenue]').val(tax); 
	}

	//Calcul intérêt
	$('#montant').keyup(function(){
	 	calcul();
	});
	
	//Calcul intérêt
	$('#tauxInt').keyup(function(){
	  calcul(); 
	});

	//Calcul intérêt
	$('#periode').keyup(function(){
	  calcul();
	  calculDateEcheanche($('input[name=dateDepot]').val(),$('input[name=periode]').val());

	});

	//Calcul intérêt
	$('#dateDepot').change(function(){
	  calculDateEcheanche($('input[name=dateDepot]').val(),$('input[name=periode]').val());

	});

	calculDateEcheanche($('input[name=dateDepot]').val(),$('input[name=periode]').val());
	function calculDateEcheanche(date,periode){
	  $.ajax({
            type:'ajax',
            method: "get",
            url: '<?php echo base_url();?>index.php/calculDateEcheancheDAT',
            dataType:'json',
            data: {date:date,periode:periode},
            async: false,
            success: function(response) {
               $('input[name=dateEcheanche]').val(response);
               $('input[name=dateEc]').val(response);
            },
            error: function(response){
              alert('Erreur');
            }
        });
	}


});


</script>