
<!-- <div id="dialog" title="Divers opérations comptable" style="margin-top: 2%">
 -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Divers opérations comptable</h2>
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

			<!-- <legend style=" font-size: 17px !important;text-align:left;color: black;"> <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> 
		     Veuillez choisir le code budgétaire ou le code analytique
		     <div style="float: right;">
		         <button id="btnSave" type="button" class="btn btn-sm btn-info" ><i class="fa fa-save"></i> Enregistrer</button>
		    </div>
		   </legend> -->
		    <div class="row">
		      <div class="col-6">
		        
		      </div>
		      <div class="col-6">
		          <div class="col-12" style="text-align: right">
		            <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
		          </div>
		      </div>

		    </div>
		    <br>
		  <hr><br>
		  	<div id="saisie" style="display: bloc">
			<form id="myForm" action="" method="post"> 

				 <div class="row"> 

				 	<div class="col-5">

				 		 <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>

				 		<div class="form-group row">
			              <label for="date" class="col-sm-4">Date: <span id="champObligatoir">*</span></label>
			              <div class="col-sm-6">
			                <input type="date" class="form-control form-control-sm col-6" id="date" name="date" />
			              </div> 
			            </div>

				 		<div class="form-group row">
			            	<label for="piece" class="col-sm-4">Pièce justificatif: <span id="champObligatoir">*</span></label>
			                <div class="col-sm-8">
			                  <input type="text" class="form-control form-control-sm col-8" id="piece" name="piece" />
			                </div> 
			            </div>
						
						<div class="form-group row">
			            	<label for="desc" class="col-sm-4">Description opération: <span id="champObligatoir">*</span></label>
			                <div class="col-sm-8">
			                  <input type="text" class="form-control form-control-sm col-8" id="desc" name="desc" />
			                </div> 
			            </div>
			            <br/>

			            <legend style="text-align: left;font-size: 18px !important;" class="col-sm-12">Compte budgétaire</legend>
			             <hr class="col-9" style="margin-right: 50%;">

			            <div class="form-group row">
				             <label for="codeBudget" class="col-sm-4 col-form-label">Budgét: </label><!-- <span id="champObligatoir">*</span> -->
				           <div class="col-sm-6">
				            <select name="codeBudget" class="form-control form-control-sm col-8" id="codeBudget">
				                <option></option>
				                <?php foreach($list->resultat as $val) :?>
				                  <option value="<?= $val->code ?>"><?= $val->code ?> | <?= $val->nom ?></option>
				              <?php endforeach; ?>
				            </select>
				           </div>
				        </div> 

			            <div class="form-group row">
			           	   <label for="soldeBudget" class="col-sm-4">Solde:</label>
			                <div class="col-sm-6">
			                  <input type="number" class="form-control form-control-sm col-8" id="soldeBudget" name="soldeBudget" disabled/>
			                </div> 
			            </div> 

			            <div class="form-group row">
			           	   <label for="compteBudget" class="col-sm-4">Compte:</label>
			                <div class="col-sm-8">
			                  <input type="hidden" id="compteBudget" name="compteBudget"/>
			                  <input type="hidden" id="libBudget" name="libBudget"/>
			                  <input type="text" class="form-control form-control-sm col-8" id="cmptBudget" name="cmptBudget" disabled/>
			                </div> 
			            </div>

						<div class="form-group row">
			           	   <label for="soldeBudget" class="col-sm-8"></label>
			                <div class="col-sm-2">
			            	  <button type="button" id="validerBudget" class="btn btn-sm btn-primary">Valider</button>
			                </div> 
			            </div>


				 	</div>   
				 	<div class="col-7">
			       
			                        		
			      		<legend style="text-align: left;font-size: 20px !important;" class="col-sm-12">Mouvements des comptes</legend>
			              <hr class="col-11" style="margin-right: 50%;">	              

			               <table class="table table-borderless">
			                  <tbody id="a">
			                       <tr>
			                        <td><label for="analytique" class="col-sm-8">Code analytique: </label></td>
			                        <td>
			                        	<input type="text" class="form-control form-control-sm col-12" id="analytique" name="analytique"/></td>
			                        <td>
		                        	 <button type="button" id="sd" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
		                        	</td>	          
			                      </tr>
			                  </tbody>
			              </table>


			              <table class="table table-borderless">
			                 <thead>
			                    <tr>
			                      <th scope="col">Compte</th>
			                      <th scope="col">Intitulé</th>
			                      <th scope="col">Débit</th>
			                      <th scope="col">crédit</th>
			                    </tr>
			                  </thead>
			                  <tbody id="t">
			                       <tr>
			                        <td><input type="text" class="form-control form-control-sm col-12" name="compte" id="compte"></td>
			                        <td><input type="text" class="form-control form-control-sm col-12" id="libelle" disabled></td>
			                        <td><input type="number" class="form-control form-control-sm col-12" name="debit" id="debit"></td>
			                        <td><input type="number" class="form-control form-control-sm col-12" name="credit" id="credit"></td>
			                        <td><button type="button" id="ajouter" class="btn btn-sm btn-primary">Ajouter</button></td>
			                      </tr>
			                  </tbody>
			              </table>

			              <br/>

			               <table class="table table-responsive-sm table-bordered table-hover table-sm">
					          <thead class="thead-light">
					            <tr>
					                <th scope="col">#Compte</th>
					                <th scope="col">intitulé du compte</th>
					                <th scope="col">Débit</th>
					                <th scope="col">Crédit</th>
					              </tr>
					            </thead>
					            <tbody id="showMouvement">
					             
					          </tbody>			      
		                      <tfoot>
		                          <tr><td colspan=2>Totaux des mouvements</td><td id="tdebit">0</td><td id="tcredit">0</td></tr>
		                      </tfoot>
					        </table>	 
			            
				 	</div>   
		        </div>

			</form>
		</div>
		</div>
	</div>
</div>
</div>

<!-- Un fenetre modal pour l'insertion d'un nouveau compte génerale -->
<div id="modalShow" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="titre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Choix code analytique</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
          	<table class="table table-responsive-sm table-bordered table-hover table-sm">
			  <thead class="thead-light">
			    <tr>
				    <th scope="col">#Code</th>
				    <th scope="col">Nom</th>
				    <th scope="col">Action</th>
				 </tr>
			    </thead>
			    <tbody id="showCodeAn">
			     
			  </tbody>			      
			</table>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" id="btnSuivant" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Valider</button> -->
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
        </div>
      </div>

    </div>
  </div>

 
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.print.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Responsive/js/dataTables.responsive.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/jszip/jszip.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/pdfmake/pdfmake.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/pdfmake/vfs_fonts.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.html5.min.js');?>"></script>

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

//si on click sur le champ débit ou crédit
$('#debit').focus(function(){
    $('#credit').val("");
}); 

$('#credit').focus(function(){
    $('#debit').val("");
}); 

//chercher code analytique
$('#sd').click(function(){
	$( "#modalShow" ).modal( "show" );
	affCode();
});

//afficher les codes analytiques

function affCode(){
	$.ajax({
    type:'ajax',
    method:"get",
    url:"<?php echo base_url();?>index.php/getAnalytique",
    dataType:"json",
    async: false,
    success:function(response){

    	var c = response.result;
    	var affiche;
		if (response.success) {
       
       		if(c.length == null){
       			affiche += '<tr>' +
	              '<td>' + c.id + '</td>' +
	              '<td>' + c.nom + '</td>' +
	              '<td>' +
	              '<a href="javascript:;" id="selectCod" class="btn btn-success btn-sm item-codeAn" data="'+ c.nom+'">Selectionner</a>' +
	              '</td>' +       
	              '</tr>';
       		}else{
       			for (var i = 0; i < c.length; i++) {
				  affiche += '<tr>' +
                  '<td>' + c[i].id + '</td>' +
                  '<td>' + c[i].nom + '</td>' +
                  '<td>' +
                  '<a href="javascript:;" id="selectCod" class="btn btn-success btn-sm item-codeAn" data="'+ c[i].nom+'">Selectionner</a>' +
                  '</td>' +       
                  '</tr>';
    			}
       		}

       		$('#showCodeAn').html(affiche)

        }
    }
});
}

$('#showCodeAn').on('click','.item-codeAn', function(){

  var nom = $(this).attr('data');
  $('#modalShow').modal('hide');
  $('input[name=analytique]').val(nom);
});

today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#date').val(today);  
}

  $( "#dialog" ).dialog({
      autoOpen: true,
      width: 1400,
      height: 580,
      show: {
        effect: "bounce",
        duration: 800,      
      },
      hide: {
        effect: "explode",
        duration: 1000
    }
   });

//Ajouter un compte crédit
 $('#ajouter').click(function(){
    
    var lib = $('#libelle').val();
    var num_compte = $('#compte').val();
    var debit = $('#debit').val(); 
    var credit = $('#credit').val();

    var eqDeb;
    var eqCred; 

    if (!isNaN(parseFloat(debit))){
      eqDeb = debit;
      eqCred = 0;
    } 
    $('#tdebit').html(tcredit);

    if (!isNaN(parseFloat(credit))){
      eqCred = credit;
      eqDeb = 0;
    } 
    var tdebit = parseFloat($('#tdebit').html());
    if (!isNaN(parseFloat(debit))) tdebit += parseFloat(debit);
    var tcredit = parseFloat($('#tcredit').html());
    if (!isNaN(parseFloat(credit))) tcredit += parseFloat(credit);


    var html = '<tr class="modify"><td>'+num_compte+'</td><td>'+lib+'</td><td>'+eqDeb+'</td><td>'+eqCred+'</td></tr>';
   
    var result = '';

    if(num_compte == ''){
		$('#compte').addClass('is-invalid');
	}else{
		$('#compte').removeClass('is-invalid');
		result +='1';
	}

	if(debit == ''){
		$('#debit').addClass('is-invalid');
	}else{
		$('#debit').removeClass('is-invalid');
		result +='2';
	}

	if(result == '12'){
	    $('#showMouvement').append(html); // inserrer le nouveau element row

	    $('#tdebit').html(tdebit);
	    $('#tcredit').html(tcredit);
	}else{
	 $.notify({            
            message: 'Veuillez remplir les champs colorés en rouge'
        },{
            type: 'warning',
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            }
        });
	}

    
});

    $('#btnSave').click(function(){

    	var data = $('#myForm').serialize();
    	//var data = $('#myForm').serialize();

    	//verification formulaire
    	var rubrique = $('input[name=piece]');
    	var desc = $('input[name=desc]');
    	var date = $('input[name=date]');
    	var analytique =  $('input[name=analytique]');

    	 var t = $('#showMouvement tr');
    	 console.log(t.length);

    	//var compte = $('input[select=compte]');

    	var str = '';

    	var valider = '';

    	if(rubrique.val() == ''){
    		$('#piece').addClass('is-invalid');
    	}else{
    		$('#piece').removeClass('is-invalid');
    		valider +='1';
    	}

    	if(desc.val() == ''){
    		$('#desc').addClass('is-invalid');
    	}else{
    		$('#desc').removeClass('is-invalid');
    		valider +='2';
    	}

    	if(date.val() == ''){
    		$('#date').addClass('is-invalid');
    	}else{
    		$('#date').removeClass('is-invalid');
    		valider +='3';
    	}

    	if(analytique.val() == ''){
    		$('#analytique').addClass('is-invalid');
    	}else{
    		$('#analytique').removeClass('is-invalid');
    		valider +='4';
    	}


    	if(valider == '1234'){

    		if(t.length < 2){

    			 $.notify({            
		            message: 'Veuillez équilibre les comptes!!!'
		        },{
		            type: 'danger',
		            animate: {
		                enter: 'animated fadeInDown',
		                exit: 'animated fadeOutUp'
		            }
		        });

    		}else{
	    		$.ajax({
		        type:'ajax',
		        method:"post",
		        url:"<?php echo base_url();?>index.php/saveOpreationDivers",
		        data: data,
		        dataType:"json",
		        async: false,
		        success:function(response){
		        if (response.success) {
		           
		            console.log(response);
		             
		              $.notify({            
		                  message: response.message
		              },{
		                  type: 'success',
		                  animate: {
		                      enter: 'animated fadeInDown',
		                      exit: 'animated fadeOutUp'
		                  }
		              });  

				       $('#tdebit').html('0');
				       $('#tcredit').html('0'); 
				       $('#showMouvement').html(''); 


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
		                message: response.message
		            },{
		                type: 'danger',
		                animate: {
		                    enter: 'animated fadeInDown',
		                    exit: 'animated fadeOutUp'
		                }
		            });
		        }
		    });
    			
    		}

    	}else{
			 $.notify({            
	            message: 'Veuillez remplir les champs obligatoire!!!'
	        },{
	            type: 'warning',
	            animate: {
	                enter: 'animated fadeInDown',
	                exit: 'animated fadeOutUp'
	            }
	        });
    	}	      

	 });


//EQUILIBRER

$('#validerBudget').click(function(){

    var num = $('#compte').val();

    var lib;
    var num_compte = $('input[name=compteBudget]').val();
    var lib_compte = $('input[name=libBudget]').val();
    var debit = $('#debit').val(); 
    var credit = $('#credit').val(); 
    var soldeBudget = $('#soldeBudget').val(); 

    var eqDeb;
    var eqCred;

    var tdebit = parseFloat($('#tdebit').html());
    var tcredit = parseFloat($('#tcredit').html());

    if (!isNaN(parseFloat(debit))){
      tcredit += parseFloat(debit);
      eqCred =  parseFloat(debit);
      eqDeb = 0;
    } 

    if (!isNaN(parseFloat(credit))){
      tdebit += parseFloat(credit);
      eqDeb = parseFloat(credit);
      eqCred = 0;
    } 


    var result = '';

    if(num == ''){
		$('#compte').addClass('is-invalid');
	}else{
		$('#compte').removeClass('is-invalid');
		result +='1';
	}

	if(debit == ''){
		$('#debit').addClass('is-invalid');
	}else{
		$('#debit').removeClass('is-invalid');
		result +='2';
	}

	if(num_compte == ''){
		$('#cmptBudget').addClass('is-invalid');
	}else{
		$('#cmptBudget').removeClass('is-invalid');
		result +='3';
	}

	if(soldeBudget == ''){
		$('#soldeBudget').addClass('is-invalid');
	}else{
		$('#soldeBudget').removeClass('is-invalid');
		result +='4';
	}

	if(result == '1234'){
	      if(num == num_compte){
		      alert('SVP, veuillez choisir un autre compte d\'équilibre');
		    }else{
		      var html = '<tr class="modify"><td>'+num_compte+'</td><td>'+lib_compte+'</td><td>'+eqDeb+'</td><td>'+eqCred+'</td></tr>';
		       $('#tdebit').html(tcredit);
		       $('#tcredit').html(tdebit); 
		       $('#showMouvement').append(html); 
		      
		    }
	}else{
	 $.notify({            
            message: 'Veuillez ajouter d\'abord le compte à equilibrer'
        },{
            type: 'warning',
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            }
        });
	}

});

  //CHERCHER COMPTE 1

  $("#compte").autocomplete({
      source: function(request, response){
        var code = $("#compte").val();
        //var code =  $('input[name=codeCli]').val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findAccount',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){                                
                  response($.map(data, function(item){
                      return item.numCpt +' |'+ item.label;
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#libelle').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  }); 

   $('#codeBudget').change(function() {
    
    var str = "";
    $( "#codeBudget option:selected" ).each(function() {
      str += $( this ).attr('value') + " ";
    });

      $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/findBudget',
      dataType: 'json',
      data:{code: str},
      async: false,
      success: function(data){
        //alert('ok')
        $('input[name=soldeBudget]').val(data.account.soldeProgressif);
        $('input[name=compteBudget]').val(data.account.numCpt);
        $('input[name=libBudget]').val(data.account.label);
        $('input[name=cmptBudget]').val(data.account.numCpt+' | '+ data.account.label);
      },
      error: function(){
        alert('Impossible d\'afficher les donnée')
      }

  });

  });

	
});

</script>