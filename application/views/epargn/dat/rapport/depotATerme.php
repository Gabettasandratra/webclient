<!-- <div class="container" style="display:none">

	<div class="card-header col-8 place">
		<h5 align="center" class="titre">Rapport nouveaux comptes dépôts à termes</h5>
	</div>
	<br>
	<hr>  -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile " id="pre" style="display:none">
    <div class="x_title">
      <h2>Rapport nouveaux comptes dépôt à terme</h2>
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

		<!--<div class="row" style="margin-top: 50px;margin-left:20px;">
			<div class="col-6">
			  <div class="form-group row">
		          <label style="color:orangeRed;" id="affDateDeb" class="col-sm-4">N° compte:</label>
		          <div class="col-sm-6">
		          	<label id="valDateDeb" style="float:left;" class="col-sm-4">N° compte:</label>               
                </div>
		       </div>  
		       <div class="form-group row">
		          <label style="color:orangeRed;" id="affDateFin" class="col-sm-4">N° compte:</label>
		          <div class="col-sm-6">
		          	<label id="valDateFin"  style="float:left;" class="col-sm-4">N° compte:</label>              
                </div>
		       </div> 

			</div>
			<div class="col-6">
			   	<div class="" style="float:;">
				 <span id="champObligatoir">*</span> 		                  
				 <h6 id="textImpr">Imprimer par</h6>
         		 <h6 id="textDateImpr">Imprimer le</h6> 
			   <div class="form-group row">
                  <label for="nom" class="col-sm-4">Imprimer le:</label>
                  <div class="col-sm-6">
                   <input type="text" id="nom" name="nom" class="form-control form-control-sm col-8" style="text-align:center;" disabled/>
                  </div>
               </div> 

				</div>
			</div>

		</div>
		<hr>
		-->
		<br>
		<div class="form-group">
		
		<div class="row">
			<div class="col-6">
      			<h6 id="teteTab">&nbsp;</h6>
			</div>
			<div class="col-6"><!-- style="margin-right:15px;" -->
	          <button id="btnChange" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
	       </div>
		</div>
		<hr>
		<br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table id="tab" class="table table-fixed table-striped table-hover table-sm">
             <!-- <legende>Rapport des comptes</legende> -->
              <thead class="thead-dark">
                <tr>
                  <th scope="col">N° Compte</th>
                  <th scope="col">Nom client</th>
                  <th scope="col">Produit</th>
                  <th scope="col">Date dépôt</th>
                  <th scope="col">Montant déposé</th>
                  <th scope="col">Taux d'intérêt</th>
                  <th scope="col">Période</th>
                  <th scope="col">Date échéance</th>
                  <th scope="col">Montant total à échéance</th>
                </tr>
              </thead>
              <tbody id="showdata">
            
              </tbody>
              <tfoot id="showFoot">
              	<tr>
              		<td>Totaux solde</td>
              		<td colspan=3></td>
              		<td id="totDepot" colspan=4></td>
              		<td id="totMontant"></td>
              	</tr>
              </tfoot>
            </table>
          </div>
			

		</div>
	</div>
  </div>
</div>
</div>

<!-- Choix client -->

<div id="modalAdd" title="Rapport dépôts à terme" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div> 
         	 <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
	          <div class="form-group row">
	            <label for="typeCherche" class="col-sm-5">Type de recherche: <span id="champObligatoir">*</span></label>
	              <div class="col-sm-7">
	                <select name="typeCherche" class="form-control form-control-sm col-8" id="typeCherche">
	                     <option value="unDate">Dans une date</option>
	                     <option value="deuxDate">Entre deux dates</option>
	                </select>
	              </div>
	           </div>  
	          <br>
	          <div class="form-group row">                                        
	              <label id="dateDeb" class="col-sm-5" for="dateDebut">jusqu'au date Date: <span id="champObligatoir">*</span> </label>
	              <div class=" col-sm-7">
	                <input type="date" name="dateDebut" class="form-control form-control-sm col-8" id="dateDebut">
	              </div>
	          </div>   
 			
 			 <div class="form-group row" id="dt" style="display:none">                                        
	              <label id="dateF" class="col-sm-5" for="dateFin">Date Fin: <span id="champObligatoir">*</span> </label>
	              <div class=" col-sm-7">
	                <input type="date" name="dateFin" class="form-control form-control-sm col-8" id="dateFin">
	              </div>
	          </div>   

         </div>
       </div> 
    </form> 
    <br><br>
   <div class="modal-footer">
     <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-list"></i> Afficher</button>
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


	$( "#modalAdd" ).dialog({
	  autoOpen: true,
	  width: 550,
	  height: 350,
	  show: {
	    effect: "size",
	    duration: 800,      
	  },
	  hide: {
	    effect: "explode",
	    duration: 800
	  }
	});

	//Fonction additional
	   $('#typeCherche').change(function() {
		        
	        var str = "";
	        var i = new String('unDate');
	        var g = new String('deuxDate');
	       
	        $( "#typeCherche option:selected" ).each(function() {
	          str += $( this ).attr('value');
	        });

	        if(g == str){
	          $('#dt').attr('style', 'display:bloc;');                       
	          $('#dateDeb').html('Date début:  <span id="champObligatoir">*</span>');                      
	        }
	        else if(i == str){          
	          $('#dt').attr('style', 'display:none;');                       
	          $('#dateDeb').html('jusqu\'au date Date:  <span id="champObligatoir">*</span>');  
	        }

		  });

	//Click sur le bouton suivant
	$('#btnAff').click(function(){

		 var data = $('#myForm').serialize();

		 var dateDebut = $('input[name=dateDebut]').val();
		 var dateFin = $('input[name=dateFin]').val();

		 var labDated="";
		 var labDateF="";
		 var valDated="";
		 var valDateF="";

	     var valider = '';
 	
 	      if(dateDebut == ''){
	      	$('#dateDebut').addClass('is-invalid');
	      }else{
	      	$('#dateDebut').removeClass('is-invalid');
	      	valider+='1';
	      }
	      if (valider == '1') {
	      	getRapport(data);
	      }else{    
	      		$('.alert-danger').html('Veuillez mentionner au moins une date')
	 		  	.fadeIn().delay(5000).fadeOut('slow');     
		   }

		   if(dateFin == ''){
		   		labDated = 'Affichage jusqu\'au date : ';
		   		valDated =dateDebut; 
		   		labDateF = '';
		   		valDateF ='';
		   }else{
		   		labDated = 'Du date : ';
		   		valDated =dateDebut;
		   		labDateF = 'Au date : ';
		   		valDateF =dateFin;
		   }

		   $('#affDateDeb').html(labDated);
		   $('#valDateDeb').html(valDated);
		   $('#affDateFin').html(labDateF);
		   $('#valDateFin').html(valDateF);

		    var now = new Date();
		    var day = ("0" + now.getDate()).slice(-2);
		    var month = ("0" + (now.getMonth() + 1)).slice(-2);
		    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

		    var user = $('input[name=user]').val();

		     $('#textImpr').html('Consulté par:  '+  user);   
		     $('#textDateImpr').html('Consulté le:  '+dayNow);   

	});//container

	//Affiche détails d'une compte DAT
	function getRapport(data){
		$.ajax({
	      type:'ajax',
	      method:"post",
	      url:'<?php echo base_url();?>index.php/getRapportDAT',
	      dataType:'json',
	      data: data,
	      async: false,
	        success: function(response) {
             //alert(response);
             var html;
           	 var c = response;
           	 var totalMontant=0;
           	 var totalDepot=0;
           	 var nom;
           	 var montant;

           	 if(c.length == null){
           	 	  montant = parseFloat(c.montant) + parseFloat(c.interet);
	          	  totalDepot += parseFloat(c.montant);
	          	  totalMontant +=montant;
	              
	              if(c.individuel != null){
	              	nom = c.individuel.nomClient +' '+ c.individuel.prenomClient;
	              }else if(c.groupe != null){
	              	nom = c.groupe.nomGroupe;
	              }
	          	  html += '<tr>' +
	              '<td>' + c.numCompteDAT + '</td>' +
	              '<td>' + nom + '</td>' +
	              '<td>' + c.produitEpargne.nomProdEpargne + '</td>' +
	              '<td>' + c.dateDepot + '</td>' +
	              '<td>' + c.montant + '</td>' +
	              '<td>' + c.tauxInt + '</td>' +
	              '<td>' + c.periode + '</td>' +
	              '<td>' + c.dateEcheance + '</td>' +
	              '<td>' + montant + '</td>' +
	              '</tr>';
           	 }else{
	           	 for (var i = 0; i < c.length; i++) {
	          	  montant = parseFloat(c[i].montant) + parseFloat(c[i].interet);
	          	  totalDepot += parseFloat(c[i].montant);
	          	  totalMontant +=montant;
	              
	              if(c[i].individuel != null){
	              	nom = c[i].individuel.nomClient +' '+ c[i].individuel.prenomClient;
	              }else if(c[i].groupe != null){
	              	nom = c[i].groupe.nomGroupe;
	              }
	          	  html += '<tr>' +
	              '<td>' + c[i].numCompteDAT + '</td>' +
	              '<td>' + nom + '</td>' +
	              '<td>' + c[i].produitEpargne.nomProdEpargne + '</td>' +
	              '<td>' + c[i].dateDepot + '</td>' +
	              '<td>' + c[i].montant + '</td>' +
	              '<td>' + c[i].tauxInt + '</td>' +
	              '<td>' + c[i].periode + '</td>' +
	              '<td>' + c[i].dateEcheance + '</td>' +
	              '<td>' + montant + '</td>' +
	              '</tr>';
	          
	           	 }           	 	
           	 }

             $('#modalAdd').dialog('close');
			 $('#pre').attr('style','display:bloc');	
			 $('#showdata').html(html);
			 $('#teteTable').html("Total comptes : "+c.length);
			 $('#totDepot').html(totalDepot);
			 $('#totMontant').html(totalMontant);

			   
	        },
	        error: function(response){	          
	        $('.alert-danger').html('Aucun resultat de votre recherche')
	 		  	.fadeIn().delay(3000).fadeOut('slow');     
	        }
	    });
	}

	 $('#tab').DataTable({
	      language: {
	          url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
	      }, dom: 'flrtBp',
	          buttons: [
	          'excelHtml5',
	          'pdfHtml5',
	          'print'
	          ]
	  });


	//Changer client
	$('#btnChange').click(function(){
		$('#modalAdd').dialog('open');
		$('#pre').attr('style','display:none');		
	});

});


</script>