<!-- <div id="dialog" title="Grand Livre budgétaire" style="margin-top: 2%"> -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="dialog" style="display:bloc;">
    <div class="x_title">
      <h2>Grand Livre budgétaire</h2>
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

	 <form id="myForm" action="" method="post">
	   <div class="row" aling="center">
		
		<!-- 	<div class="col-2"> 
				<legend style=" font-size: 17px !important;text-align:left;color: black;"> 
				<i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> 
			    Grand Livre budgét</legend>
		  </div> -->
		
		  <div class="col-4">
		  <div class="form-group row">
		         <label for="codeBudget" class="col-sm-2 col-form-label">Budgét: </label><!-- <span id="champObligatoir">*</span> -->
		       <div class="col-sm-8">
		        <select name="codeBudget" class="form-control form-control-sm col-12" id="codeBudget">
		            <option value=""></option>
		            <?php foreach($list->resultat as $val) :?>
		              <option value="<?= $val->code ?>"><?= $val->code ?> | <?= $val->nom ?></option>
		          <?php endforeach; ?>
		        </select>
		       </div>
		     </div> 
		  </div>

		 <div class="col-4 row">      
		 	<label for="dateDeb" class="col-sm-3">Du date:</label>
	       <div class="col-sm-8">
	         <input type="date" class="form-control form-control-sm col-12" id="dateDeb" name="dateDeb" />
	       </div> 
		 </div>

		 <div class="col-2">      
	         <input type="date" class="form-control form-control-sm col-12" id="dateFin" name="dateFin" />
		 </div>
		

		 <div class="col-2" style="float: right;">      
		 	 <button id="btnAfficher" type="button" class="btn btn-sm btn-primary" ><i class="fa fa-list"></i> Afficher</button>
		 </div>
	   
	   </div>
	   </form>
	  <hr>

	   <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table id="tab" class="table table-fixed table-striped table-hover table-sm">
             <!-- <legende>Rapport des comptes</legende> -->
          	 <caption id="total_credit"></caption>
              <thead id="showHead" class="thead-dark">
               <tr>
                  <th scope="col">Code Budgét</th>
	              <th scope="col">Nom budgét</th>
	              <th scope="col">Compte</th>
	              <th scope="col">libellé compte</th>
	              <th scope="col">Date transaction</th>
	              <th scope="col">Transaction</th>
	              <th scope="col">Description</th>
	              <th scope="col">Piece</th>
	              <th scope="col">Débit</th>
	              <th scope="col">Crédit</th>
                </tr>
              </thead>
              <tbody id="showGrandLivre">
            
              </tbody>
              <tfoot id="showFoot" style="display: none;">
	          	 <tr><td id="budget" colspan=2>Budgét salaire</td>
	          	 	<td id="prevision" colspan=6>Prévision</td>
	          	 	<td colspan=6 id="reel">reél</td>
	          	 </tr>
	          	 <tr style="background-color: white">
	          	 	<td class="td-borderless" colspan=8></td>
	          	 	<td style="background-color: green" id="ecart" colspan=2>Ecart:</td>
	          	 </tr>
	          </tfoot> 
            </table>
          </div>  

	<!-- <div class="card w-90" style="padding-right=25px;padding-left=25px;" >
	  <div class="card-body">
	    <div class="card-text">

			<div id="PageAimprimer" class="table-responsive-sm">
		      <table class="table table-fixed table-bordered table-hover table-sm">
		         <caption id="total_credit"></caption>
		          <thead id="showHead" class="thead-light">
		            <tr>
		              <th scope="col">Code Budgét</th>
		              <th scope="col">Nom budgét</th>
		              <th scope="col">Compte</th>
		              <th scope="col">libellé compte</th>
		              <th scope="col">Date transaction</th>
		              <th scope="col">Transaction</th>
		              <th scope="col">Description</th>
		              <th scope="col">Piece</th>
		              <th scope="col">Débit</th>
		              <th scope="col">Crédit</th>
		            </tr>
		          </thead>
		          <tbody id="showGrandLivre">
				
		          </tbody>
		          <tfoot id="showFoot" style="display: none;">
		          	 <tr><td id="budget" colspan=2>Budgét salaire</td>
		          	 	<td id="prevision" colspan=6>Prévision</td>
		          	 	<td colspan=6 id="reel">reél</td>
		          	 </tr>
		          	 <tr style="background-color: white">
		          	 	<td class="td-borderless" colspan=8></td>
		          	 	<td style="background-color: green" id="ecart" colspan=2>Ecart:</td>
		          	 </tr>
		          </tfoot> 
		      </table>
		  </div>
		</div>
	  </div>
	</div> -->

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

$(function() {
	/*$( "#dialog" ).dialog({
	  autoOpen: true,
	  width: 1510,
	  height: 550,
	  show: {
	    effect: "bounce",
	    duration: 800,      
	  },
	  hide: {
	    effect: "explode",
	    duration: 1000
	}
	});*/

var str = '';
$('#codeBudget').change(function() {  
 $( "#codeBudget option:selected" ).each(function() {
      str = $( this ).attr('value');
    });  
});

$('#btnAfficher').click(function(){               
	var dateDeb = $('input[name=dateDeb]');
	var dateFin = $('input[name=dateFin]');

	if(str == ''){
		charger();
	}else{
		poster();
	}

	
});



function poster(){
	var data = $('#myForm').serialize();
	$.ajax({
	    type:'ajax',
	    method:"post",
	    url:"<?php echo base_url();?>index.php/getGrandLivreParBudget",
	    dataType:"json",
	    data: data,
	    async: false,
	    success:function(response){

	    	var affiche;
	    	var c = response.result;

	    	var affFoot;
	    	var f = response.budg;
	    	var reel = 0;
	    	var ecart = 0;

	    	if(response.success){

	    		if(c.length == null){

	    			reel += parseFloat(c.credit);
	    			affiche += '<tr>' +
	                  '<td>' + c.budget.code + '</td>' +
	                  '<td>' + c.budget.nom + '</td>' +
	                  '<td>' + c.account.numCpt + '</td>' +
	                  '<td>' + c.account.label + '</td>' +
	                  '<td>' + c.date + '</td>' +
	                  '<td>' + c.descr + '</td>' +                  
	                  '<td>' + c.analytique.nom + '</td>' +
	                  '<td>' + c.piece + '</td>' +
	                  '<td>' + c.debit + '</td>' +
	                  '<td>' + c.credit + '</td>' +
	                  /*'<td>' + c.solde + '</td>' +*/
	                  '</tr>';
	    		}else{

	    			for (var i = 0; i < c.length; i++) {
	    				reel += parseFloat(c[i].credit);
	    				affiche += '<tr>' +
		                  '<td>' + c[i].budget.code + '</td>' +
		                  '<td>' + c[i].budget.nom + '</td>' +
		                  '<td>' + c[i].account.numCpt + '</td>' +
		                  '<td>' + c[i].account.label + '</td>' +
		                  '<td>' + c[i].date + '</td>' +
		                  '<td>' + c[i].descr + '</td>' +                  
                          '<td>' + c[i].analytique.nom + '</td>' +
		                  '<td>' + c[i].piece + '</td>' +
		                  '<td>' + c[i].debit + '</td>' +
		                  '<td>' + c[i].credit + '</td>' +
                          '</tr>';
		                 /* '<td>' + c[i].solde + '</td>' +     */          
	    			}

	    		}

	    		$('#showFoot').attr('style','display : bloc');

	    		ecart = f.prevision - reel;

	    		if(ecart < 0){
	    			$('#ecart').attr('style','background-color: red;color: white;');
	    		}else if(ecart > 0){
	    			$('#ecart').attr('style','background-color: green;color: white;');
	    		}

	    		$('#budget').html('Budget: '+f.nom );
	    		$('#prevision').html('Prévision : '+f.prevision +' MGA');
	    		$('#reel').html('reél : '+reel +' MGA');
	    		$('#ecart').html('Ecart : '+ecart +' MGA');
	    		$('#showGrandLivre').html(affiche);

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


charger();
	function charger(){
		var data = $('#myForm').serialize();
		$.ajax({
	    type:'ajax',
	    method:"post",
	    url:"<?php echo base_url();?>index.php/getGrandLivreBudget",
	    dataType:"json",
	    data: data,
	    async: false,
	    success:function(response){

	    	var affiche;
	    	var c = response.result;

	    	if(response.success){

	    		if(c.length == null){
	    			affiche += '<tr>' +
	                  '<td>' + c.budget.code + '</td>' +
	                  '<td>' + c.budget.nom + '</td>' +
	                  '<td>' + c.account.numCpt + '</td>' +
	                  '<td>' + c.account.label + '</td>' +
	                  '<td>' + c.date + '</td>' +
	                  '<td>' + c.descr + '</td>' +                  
	                  '<td>' + c.analytique.nom + '</td>' +
	                  '<td>' + c.piece + '</td>' +
	                  '<td>' + c.debit + '</td>' +
	                  '<td>' + c.credit + '</td>' +
	                  /*'<td>' + c.solde + '</td>' +*/
	                  '</tr>';
	    		}else{

	    			for (var i = 0; i < c.length; i++) {
	    				affiche += '<tr>' +
		                  '<td>' + c[i].budget.code + '</td>' +
		                  '<td>' + c[i].budget.nom + '</td>' +
		                  '<td>' + c[i].account.numCpt + '</td>' +
		                  '<td>' + c[i].account.label + '</td>' +
		                  '<td>' + c[i].date + '</td>' +
		                  '<td>' + c[i].descr + '</td>' +                  
                          '<td>' + c[i].analytique.nom + '</td>' +
		                  '<td>' + c[i].piece + '</td>' +
		                  '<td>' + c[i].debit + '</td>' +
		                  '<td>' + c[i].credit + '</td>' +
		                 /* '<td>' + c[i].solde + '</td>' + */              
                          '</tr>';
	    			}

	    		}
	    		$('#showFoot').attr('style','display : none');
	    		$('#showGrandLivre').html(affiche);

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

});

</script>