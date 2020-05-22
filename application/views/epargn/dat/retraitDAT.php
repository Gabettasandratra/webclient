<!-- <div class="container" style="display:none">

	<div class="card-header col-8 place">
		<h5 align="center" class="titre">Retrait dépôt à terme</h5>
	</div>

	<br> -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile " id="pre" style="display:none">
    <div class="x_title">
      <h2>Retrait dépôt à terme</h2>
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
			                 <label for="dateRetrait" class="col-sm-3">Date retrait:  <span id="champObligatoir">*</span></label>
			                 <div class="col-sm-6">
			                   <input type="date" id="dateRetrait" name="dateRetrait" class="form-control form-control-sm col-8"/>
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
					<div class="form-group row">

						<div class="col-6">
							<!-- <span id="champObligatoir">*</span> -->
						                  
						   <div class="form-group row">
					          <label for="nCompte" class="col-sm-4">N° compte:</label>
					          <div class="col-sm-6">
			                    <input type="hidden" id="compteN" name="compteN"/>
			                    <input type="text" id="nCompte" name="nCompte" class="form-control form-control-sm col-12" disabled/>
					          </div>
					       </div>  	
			           

			                <div class="form-group row">
			                  <label for="codClient" class="col-sm-4">Code client:</label>
			                  <div class="col-sm-6">            
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
						<span class="vertical-line"></span>		
						<div class="col-5 forms">

						  <div class="form-group row">
			                 <label for="dateDepot" class="col-sm-4">Date dépôt:</label>
			                 <div class="col-sm-6">
			                   <input type="date" id="dateDepot" name="dateDepot" class="form-control form-control-sm col-8" disabled/>
			                 </div>
			               </div>

			                <div class="form-group row">
			                 <label for="dateEcheanche" class="col-sm-4">Date échéanche:</label>
			                 <div class="col-sm-6">
			                   <input type="hidden" id="dateEc" name="dateEc"/>
			                   <input type="date" id="dateEcheanche" name="dateEcheanche" class="form-control form-control-sm col-8" disabled/>
			                 </div>
			               </div>
			 				
			 			  <div class="form-group row">
			                 <label for="montant" class="col-sm-4">Montant:</label>
			                 <div class="col-sm-6">
			                   <input type="number" min="0" value="0" id="montant" name="montant" class="form-control form-control-sm col-8" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="tauxInt" class="col-sm-4">Taux d'intérêt (%):</label>
			                 <div class="col-sm-3">
			                   <input type="number" min="1" value="1" id="tauxInt" name="tauxInt" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="periode" class="col-sm-4">Période (en mois): </label>
			                 <div class="col-sm-3">
			                   <input type="number" id="periode" min="1" value="1" name="periode" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>    


			               <div class="form-group row">
			                  <label for="taxe" class="col-sm-4">Taxe (%):</label>
			                  <div class="col-sm-4">
			                   <input type="number" id="taxe" value="0" name="taxe" class="form-control form-control-sm col-8" disabled/>
			                  </div>
			               </div>

			                <div class="form-group row">
			                  <label for="taxeRetenue" class="col-sm-4">Taxe Retenue:</label>
			                  <div class="col-sm-4">
			                   <input type="number" id="taxeRetenue" value="0" name="taxeRetenue" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div> 

			                <div class="form-group row">
			                  <label for="penalite" class="col-sm-4">Pénalité:</label>
			                  <div class="col-sm-4">
			                   <input type="number" id="penalite" value="0" name="penalite" class="form-control form-control-sm col-12" disabled/>
			                  </div>
			               </div>           
			  			
			              <div class="form-group row">
			                 <label for="intEcheance" class="col-sm-4">Intérêt gagné:</label>
			                 <div class="col-sm-4">
			                   <input type="number" value="0" id="intEcheance" name="intEcheance" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			               <div class="form-group row">
			                 <label for="valeur" class="col-sm-4">Montant total:</label>
			                 <div class="col-sm-4">
			                   <input type="number"  value="0" id="valeur" name="valeur" class="form-control form-control-sm col-12" disabled/>
			                 </div>
			               </div>

			 			</div>

					</div>
					

				</form>

			</div>
</div>
</div>
</div>

<!-- Choix client -->

<div id="modalAdd" title="Veuillez selectionner un compte DAT" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div>              
	          <div class="form-group row">                                        
	              <label id="labCode" class="col-sm-5" for="numCompte">N° compte DAT: <span id="champObligatoir">*</span> </label>
	              <div class=" col-sm-7">
	                <input type="text" name="numCompte" placeholder="Saisir n° compte" class="form-control form-control-sm col-12" id="numCompte">	               
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
	  width: 450,
	  height: 250,
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

	  $('#dateRetrait').val(today);  
	}

	//Find compte DAT
	 $("#numCompte").autocomplete({
	      source: function(request, response){
	        //var code = $('input[name=codeGrp]').val();
	        var code = $("#numCompte").val();
	          $.ajax({
	              type : 'ajax',
	              url: '<?php echo base_url();?>index.php/findCompteDAT',
	              method: 'get',
	              data: {code : code},
	              crossDomain: true,
	              dataType: 'json',
	              jsonpCallback:'callback',
	              success: function(data){
	                  response($.map(data, function(item){
	                      return item.numCompteDAT+ " | " +item.dateEcheance;
	                  }));
	              }
	          });
	      },
	      select: function(event,ui) {
	          var c = ui.item.value.split(' |');
	          $(this).val(c[0]);
	          return false;
	      }
	  });  

	//Fonction additional
	choixPaye();

	//Click sur le bouton suivant
	$('#btnAff').click(function(){

		  //Vérifie si le code client individuel et groupe sont null
		  if($('input[name=numCompte]').val() == ""){
	          $('#numCompte').addClass('is-invalid');
	          $('.alert-danger').html('Veuillez saisir le numéro de compte, SVP!')
	              .fadeIn().delay(3000).fadeOut('slow');	          
	       }else{
	       		//Si le client est individuel	       		
	       		$('#numCompte').removeClass('is-invalid');
				$('#modalAdd').dialog('close');
				$('#pre').attr('style','display:block');
				getCompte($('input[name=numCompte]').val());	
				calculMontant($('input[name=dateRetrait]').val(),$('input[name=numCompte]').val());	 
	       }

	});//container

	//Affiche détails d'une compte DAT
	function getCompte(id){
		$.ajax({
	      type:'ajax',
	      method:"get",
	      url:'<?php echo base_url();?>index.php/getCompteDAT',
	      dataType:'json',
	      data: {id:id},
	      async: false,
	        success: function(response) {
	            //alert(response);
	            if(response.individuel != null){
	            	$('input[name=codClient]').val(response.individuel.codeInd);
	            	$('input[name=nom]').val(response.individuel.nomClient +' '+response.individuel.prenomClient);
	            	getCompteEpargne(response.individuel.codeInd);
	            }else if(response.groupe != null){
	            	$('input[name=codClient]').val(response.groupe.codeGrp);
	            	$('input[name=nom]').val(response.groupe.nomGroupe);
	            }

	          	$('input[name=nCompte]').val(response.numCompteDAT);
	          	$('input[name=compteN]').val(response.numCompteDAT);
	          	$('input[name=dateDepot]').val(response.dateDepot);
	          	$('input[name=dateEcheanche]').val(response.dateEcheance);
	          	$('input[name=montant]').val(response.montant);
	          	$('input[name=tauxInt]').val(response.tauxInt);
	          	$('input[name=periode]').val(response.periode);

	          	$('input[name=taxe]').val(response.produitEpargne.configGeneralDat.taxe);
	          	$('input[name=nomProduit]').val(response.produitEpargne.nomProdEpargne);
	          	$('input[name=devise]').val(response.produitEpargne.configGeneralDat.devise);
	          
	        },
	        error: function(response){	          
	        
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
      var dateRetrait = $('input[name=dateRetrait]').val();

      var valider = '';

      if(piece == ''){
      	$('#piece').addClass('is-invalid');
      }else{
      	$('#piece').removeClass('is-invalid');
      	valider+='1';
      }
      if(dateRetrait == ''){
      	$('#dateRetrait').addClass('is-invalid');
      }else{
      	$('#dateRetrait').removeClass('is-invalid');
      	valider+='2';
      } 
    
      if (valider == '12') {
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
            url: '<?php echo base_url();?>index.php/retraitDAT',
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

	//Calcul intérêt
	$('#dateRetrait').change(function(){
	  calculMontant($('input[name=dateRetrait]').val(),$('input[name=numCompte]').val());
	});

	function calculMontant(date,numCompt){
	  $.ajax({
            type:'ajax',
            method: "get",
            url: '<?php echo base_url();?>index.php/calculMontantDAT',
            dataType:'json',
            data: {date:date,numCompt:numCompt},
            async: false,
            success: function(response) {
               $('input[name=taxeRetenue]').val(response.taxe);
               $('input[name=intEcheance]').val(response.interet);
               $('input[name=valeur]').val(response.montant);
               $('input[name=periode]').val(response.periode);
               $('input[name=penalite]').val(response.penalite);
            },
            error: function(response){
              alert('Erreur');
            }
        });
	}


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


});


</script>