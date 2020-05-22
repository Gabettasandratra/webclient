<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Budgétisation</h2>
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
	
	<legend style=" font-size: 17px !important;text-align:left;color: black;"> <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> 
     Cliquez sur nouveau pour ajouter des budgets
     <div style="float: right;">
      <button id="btnAff" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-plus"></i> Nouveau</button>
      <button id="btnFerm" type="button" class="btn btn-sm btn-danger" style="display: none"><i class="fa fa-eye-slash"></i> Fermer</button>
      <button id="btnSave" type="button" class="btn btn-sm btn-primary" ><i class="fa fa-save"></i> Enregistrer</button>
    </div>
   </legend>
  <hr><br>
  	<div id="saisie" style="display: none">
	<form id="myForm" action="" method="post"> 

		 <div class="row"> 

		 	<div class="col-6">
		 		<div class="form-group row">
	            	<label for="rubrique" class="col-sm-4">Rubrique: <span id="champObligatoir">*</span></label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control form-control-sm col-8" id="rubrique" name="rubrique" />
	                </div> 
	            </div>

		            <div class="form-group row">
		           	   <label for="prevision" class="col-sm-4">Prévision: <span id="champObligatoir">*</span></label>
		                <div class="col-sm-8">
		                  <input type="number" class="form-control form-control-sm col-8" id="prevision" name="prevision" />
		                </div> 
		            </div>
<!-- 
		            <div class="form-group row">
			             <label for="compte" class="col-sm-4 col-form-label">Compte comptable: <span id="champObligatoir">*</span></label>
			           <div class="col-sm-8">
			            <select name="compte" class="form-control form-control-sm col-8" id="compte">
			                <option></option>
			                <?php foreach($list->list as $val) :?>
			                  <option value="<?= $val->tkey ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
			              <?php endforeach; ?>
			            </select>
			           </div>
			        </div>  -->

			 	</div>   
			 	<div class="col-6">
		        
		            <div class="form-group row">
		              <label for="date" class="col-sm-4">Date: <span id="champObligatoir">*</span></label>
		              <div class="col-sm-6">
		                <input type="date" class="form-control form-control-sm col-6" id="date" name="date" />
		              </div> 
		            </div>

		            <div class="form-group row">
		              <label for="desc" class="col-sm-4">Description:</label>
		              <div class="col-sm-8">
		              	<textarea class="form-control form-control-sm col-8" id="desc" name="desc"></textarea>
		              </div> 
		            </div> 
				 	</div>   
		        </div>

			</form>
		</div>
		<br>
		 <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
	          <table id="tab" class="display table table-fixed table-striped table-hover table-sm ">
	             <!-- <legende>Rapport des comptes</legende> -->
	              <thead class="thead-dark">
	                <tr>
		                <th scope="col">#Code budget</th>
		                <th scope="col">Rubrique</th>
		                <th scope="col">Date</th>
		                <th scope="col">Prévision</th>
		                <th scope="col">Description</th>
		              </tr>
		            </thead>
		            <tbody id="showBudget">
		             
		          </tbody>
	            </table>
	          </div>  

			</div>
		</div>
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
today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#date').val(today);  
}

//Configuration du fenêtre modal
$('#btnSave').attr('disabled', true);

  $( "#dialog" ).dialog({
      autoOpen: true,
      width: 1300,
      height: 550,
      show: {
        effect: "bounce",
        duration: 800,      
      },
      hide: {
        effect: "explode",
        duration: 1000
    }
   });

    $( "#fermerModal" ).click(function(){
     $( "#dialog" ).modal( "hide" );
    });

    $('#btnAff').click(function(){
  		
    	$('#saisie').attr('style','display: bloc');
    	$('#btnAff').attr('style','display: none');
    	$('#btnFerm').attr('style','display: bloc');
    	$('#btnSave').attr('disabled', false);

    });

     $('#btnFerm').click(function(){
  		
    	$('#saisie').attr('style','display: none');
    	$('#btnFerm').attr('style','display: none');
    	$('#btnAff').attr('style','display: bloc');
    	$('#btnSave').attr('disabled', true);

    });


    $('#btnSave').click(function(){

    	var data = $('#myForm').serialize();
    	//var data = $('#myForm').serialize();

    	//verification formulaire
    	var rubrique = $('input[name=rubrique]');
    	var prevision = $('input[name=prevision]');
    	var date = $('input[name=date]');
    	//var compte = $('input[select=compte]');

    	var str = '';

    	var valider = '';

    	if(rubrique.val() == ''){
    		$('#rubrique').addClass('is-invalid');
    	}else{
    		$('#rubrique').removeClass('is-invalid');
    		valider +='1';
    	}

    	if(prevision.val() == ''){
    		$('#prevision').addClass('is-invalid');
    	}else{
    		$('#prevision').removeClass('is-invalid');
    		valider +='2';
    	}

    	if(date.val() == ''){
    		$('#date').addClass('is-invalid');
    	}else{
    		$('#date').removeClass('is-invalid');
    		valider +='3';
    	}

    	if(valider == '123'){
    		$.ajax({
	        type:'ajax',
	        method:"post",
	        url:"<?php echo base_url();?>index.php/saveBudget",
	        data: data,
	        dataType:"json",
	        async: false,
	        success:function(response){
	        if (response.success) {

	        	afficheBudget();
	           
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
 afficheBudget();
function afficheBudget(){
	   $.ajax({
	    type:'ajax',
	    method:"get",
	    url:"<?php echo base_url();?>index.php/getBudget",
	    dataType:"json",
	    async: false,
	    success:function(response){

	    	var affiche;
	    	var c = response.result;

	    	if(response.success){

	    		if(c.length == null){
	    			affiche += '<tr>' +
	                  '<td>' + c.code + '</td>' +
	                  '<td>' + c.nom + '</td>' +
	                  '<td>' + c.date + '</td>' +
	                  '<td>' + c.prevision + '</td>' +
	                  '<td>' + c.description + '</td>' +
	                  '</tr>';
	                  /*'<td>' + c.account.numCpt+' '+c.account.label + '</td>' +  */                
	    		}else{

	    			for (var i = 0; i < c.length; i++) {
	    				affiche += '<tr>' +
                          '<td>' + c[i].code + '</td>' +
                          '<td>' + c[i].nom + '</td>' +
                          '<td>' + c[i].date + '</td>' +
                          '<td>' + c[i].prevision + '</td>' +
                          '<td>' + c[i].description + '</td>' +
                          '</tr>';
                          /*'<td>' + c[i].account.numCpt+' '+c[i].account.label + '</td>' +   */               
	    			}

	    		}

	    		$('#showBudget').html(affiche);

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

/*
	$( "#compte option:selected" ).each(function() {
	  str += $( this ).attr('value');
	});
	if(str == ''){
		$('#compte').addClass('is-invalid');
	}else{
		$('#compte').removeClass('is-invalid');
		valider +='4';
	}*/
	
});

</script>