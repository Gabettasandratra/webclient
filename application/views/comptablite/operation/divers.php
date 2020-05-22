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

				 	<div class="col-6">

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

				 	</div>   
				 	<div class="col-6"> 		      		      

			               <table class="table table-borderless">
			                  <tbody id="a">
			                       <tr>
			                        <td><label for="analytique" class="col-sm-12">Code analytique: </label></td>
			                        <td>
			                        	<input type="text" class="form-control form-control-sm col-12" id="analytique" name="analytique"/></td>
			                        <td>
		                        	 <button type="button" id="sd" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
		                        	</td>	          
			                      </tr>
			                  </tbody>
			              </table>
  						
  						 <table class="table table-borderless">
			                  <tbody id="a">
			                       <tr>
			                        <td><label for="budget" class="col-sm-12">Code budgétaire: </label></td>
			                        <td>
			                        	<input type="text" class="form-control form-control-sm col-12" id="budget" name="budget"/></td>
			                        <td>
		                        	 <button type="button" id="findBudget" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
		                        	</td>	          
			                      </tr>
			                  </tbody>
			              </table>			            
				 	</div>   
		        </div>
		        <hr>
	        <legend style="text-align: left;font-size: 20px !important;" class="col-sm-12">Mouvements des comptes</legend>
	        <br>
		    <!-- <hr class="col-11" style="margin-right: 50%;">	         -->
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
                        <td><input type="hidden" id="label" name="label">
                        	<input type="text" class="form-control form-control-sm col-12" id="libelle" disabled></td>
                        <td><input type="number" class="form-control form-control-sm col-12" name="debit" id="debit" value="0"></td>
                        <td><input type="number" class="form-control form-control-sm col-12" name="credit" id="credit" value="0"></td>
                        <td><button type="button" id="ajouter" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Ajouter</button></td>
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
            <input type="hidden" id="cDebit" name="cDebit"/>
            <input type="hidden" id="cCredit" name="cCredit"/>
			</form>
		</div>
		</div>
	</div>
</div>
</div>

<!-- fenêtre qui affiche la liste des codes analytiques -->
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


<!-- fenêtre qui affiche la liste des codes budgétaire -->
<div id="modalShowBudget" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="titre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Choix code budgétaire</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
          	<table class="table table-responsive-sm table-bordered table-hover table-sm">
			  <thead class="thead-light">
			    <tr>
				    <th scope="col">#Code</th>
				    <th scope="col">Description</th>
				    <th scope="col">Prévision</th>
				    <th scope="col">Action</th>
				 </tr>
			    </thead>
			    <tbody id="showCodeBud">
			     
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
$('#debit').keyup(function(){
    //$('#credit').attr('disabled',true);'input[name=debit]'
    if(($(this).val() != '') || ($(this).val() != "0")){
		$('input[name=credit]').val(0);
	}
}); 

$('#credit').keyup(function(){
    if(($(this).val() != '') || ($(this).val() != "0")){
		$('input[name=debit]').val(0);
	}
}); 

//chercher code analytique
$('#sd').click(function(){
	$( "#modalShow" ).modal( "show" );
	affCode();
});
//chercher code budget
$('#findBudget').click(function(){
	$( "#modalShowBudget" ).modal( "show" );
	affCodeBudget();
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

//affiche les codes budgétaires
function affCodeBudget(){
	$.ajax({
    type:'ajax',
    method:"get",
    url:"<?php echo base_url();?>index.php/getBudget",
    dataType:"json",
    async: false,
    success:function(response){

    	var c = response.result;
    	var affiche;
		if (response.success) {
       
       		if(c.length == null){
       			affiche += '<tr>' +
	              '<td>' + c.code + '</td>' +
                  '<td>' + c.nom + '</td>' +
                  '<td>' + c.prevision + ' MGA </td>' +
	              '<td>' +
	              '<a href="javascript:;" id="selectCod" class="btn btn-success btn-sm item-codeBud" data="'+ c.code+'">Selectionner</a>' +
	              '</td>' +       
	              '</tr>';
       		}else{
       			for (var i = 0; i < c.length; i++) {
				  affiche += '<tr>' +
                  '<td>' + c[i].code + '</td>' +
                  '<td>' + c[i].nom + '</td>' +
                  '<td>' + c[i].prevision + ' MGA </td>' +
                  '<td>' +
                  '<a href="javascript:;" id="selectCod" class="btn btn-success btn-sm item-codeBud" data="'+ c[i].code+'">Selectionner</a>' +
                  '</td>' +       
                  '</tr>';
    			}
       		}

       		$('#showCodeBud').html(affiche)

	        }
	    }
	});
}

//Sélectionné code budget
$('#showCodeBud').on('click','.item-codeBud', function(){

  var nom = $(this).attr('data');
  $('#modalShowBudget').modal('hide');
  $('input[name=budget]').val(nom);
});


today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#date').val(today);  
}


//Ajouter un compte crédit
 $('#ajouter').click(function(){
    
   /* 
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
   
*/
	  var lib = $('#label').val();
    var num_compte = $('input[name=compte]').val();
    var debit = $('#debit').val(); 
    var credit = $('#credit').val();

    var result = '';
    if(lib == ''){
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
	
	if(credit == ''){
		$('#credit').addClass('is-invalid');
	}else{
		$('#credit').removeClass('is-invalid');
		result +='3';
	}
	    saveOperation();

  /*if(result == '1'){
	}else{
	 $.notify({            
            message: 'Veuillez remplir les champs colorés'
        },{
            type: 'warning',
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            }
        });
	}*/

    
});

  
/******************* Opération view **********************/

	function saveOperation(){
		var data = $('#myForm').serialize();
		 $.ajax({
	      type:'ajax',
	      method: "post",
	      url: '<?php echo base_url();?>index.php/addOperationView',
	      dataType: 'json',
	      data:data,
	      async: false,
	      success: function(data){
	      	if(data.success == true	){
	       		getOperation(); 		
	      	}
	      },
	      error: function(){
	        alert('Impossible d\'ajouté une nouvelle compte')
	      }

		 });
	}

	function getOperation(){
	    $.ajax({
	      type:'ajax',
	      method: "get",
	      url: '<?php echo base_url();?>index.php/getOperationView',
	      dataType: 'json',
	      async: false,
	      success: function(data){
	        if(data){
		        var i;              
		        var c = data;
		        var html;

		        var debit = '';
		        var credit = '';

		        var total_Credit = 0;
		        var total_Debit = 0;

		        if(c.length == null){
		            total_Credit += parseFloat(c.credit);
		            total_Debit += parseFloat(c.debit);
		            html += '<tr>' +
		            '<td>' + c.numCmpt + '</td>' +
	                '<td>' + c.label + '</td>' +
	                '<td>' + c.debit + '</td>' +
	                '<td>' + c.credit + '</td>' +
	                '</tr>';
		          }else{
		            for (i = 0; i < c.length; i++) {
		               total_Credit += parseFloat(c[i].credit);
		               total_Debit += parseFloat(c[i].debit);

		                html += '<tr>' +
		                '<td>' + c[i].numCmpt + '</td>' +
		                '<td>' + c[i].label + '</td>' +
		                '<td>' + c[i].debit + '</td>' +
		                '<td>' + c[i].credit + '</td>' +
		                '</tr>';
		           }                    
		        }

		        $('#showMouvement').html(html);
		        $('#tdebit').html(total_Debit);
		        $('#tcredit').html(total_Credit);
	        }
	      },
	      error: function(){
	        $('#showMouvement').html('');
	      }

	  });
	}
viderOperation();
	function viderOperation(){
		$.ajax({
	      type:'ajax',
	      method: "get",
	      url: '<?php echo base_url();?>index.php/viderOperationView',
	      dataType: 'json',
	      async: false,
	      success: function(data){
	        if(data.success == true){
	        	getOperation();
	        }
	      },
	      error: function(){
	       /* alert('Erreur')*/
	      }

	   });
	}

    $('#btnSave').click(function(){

    	var data = $('#myForm').serialize();
    	//var data = $('#myForm').serialize();

    	//verification formulaire
    	var rubrique = $('input[name=piece]');
    	var desc = $('input[name=desc]');
    	var date = $('input[name=date]');
      var analytique =  $('input[name=analytique]');
    	var budget =  $('input[name=budget]');

    	 var t = $('#showMouvement tr');
    	 console.log(t.length);

    	//var compte = $('input[select=compte]');

    	var str = '';

      var tdebit = parseFloat($('#tdebit').html());
      var tcredit = parseFloat($('#tcredit').html());

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
	   if(budget.val() == ''){
    		$('#budget').addClass('is-invalid');
    	}else{
    		$('#budget').removeClass('is-invalid');
    		valider +='5';
    	}


    	if(valider == '12345'){

    		if(tdebit != tcredit){

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
	    		saveData(data);    			
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

  //Sauvegarder
  function saveData(data){

    $.ajax({
            type:'ajax',
            method:"post",
            url:"<?php echo base_url();?>index.php/saveOperationDivers",
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
               $('#myForm')[0].reset();
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
          $('#label').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  }); 

  //Chercher code budget par saisie
	 $("#budget").autocomplete({
	      source: function(request, response){
	        var code = $("#budget").val();
	        //var code =  $('input[name=codeCli]').val();
	          $.ajax({
	              type : 'ajax',
	              url: '<?php echo base_url();?>index.php/findCodeBudget',
	              method: 'get',
	              data: {code : code},
	              crossDomain: true,
	              dataType: 'json',
	              jsonpCallback:'callback',
	              success: function(data){                                
	                  response($.map(data, function(item){
	                      return item.code +' |'+ item.nom +' - '+ item.prevision + ' MGA ';
	                  }));
	              }
	          });
	      },
	      select: function(event,ui) {
	          var c = ui.item.value.split(' |');
	          //$('#libelle').val(c[1]);
	          $(this).val(c[0]);
	          return false;
	      }
	  }); 

  //Chercher code analytique par saisie
  	 $("#analytique").autocomplete({
	      source: function(request, response){
	        var code = $("#analytique").val();
	          $.ajax({
	              type : 'ajax',
	              url: '<?php echo base_url();?>index.php/findCodeAnalytique',
	              method: 'get',
	              data: {code : code},
	              crossDomain: true,
	              dataType: 'json',
	              jsonpCallback:'callback',
	              success: function(data){                                
	                  response($.map(data, function(item){
	                      return item.id +' |'+ item.nom;
	                  }));
	              }
	          });
	      },
	      select: function(event,ui) {
	          var c = ui.item.value.split(' |');
	          //$('#libelle').val(c[1]);
	          $(this).val(c[1]);
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
		        alert('Impossible d\'afficher les données')
		      }

		  });

  });

	
});

</script>