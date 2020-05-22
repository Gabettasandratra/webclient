<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="tet" style="display:none;">
    <div class="x_title">
      <h2>Résultat des comptes par période</h2>
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

		<div class="form-group">
		
		<div class="row">
			<div class="col-6">
      			<h6 id="teteTable"></h6>
			</div>
			<div class="col-6"><!-- style="margin-right:15px;" -->
	          <button id="btnChange" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
	       </div>
		</div>
		<br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table class="table table-fixed table-striped table-hover table-sm">
             <!-- <legende>Rapport des comptes</legende> -->
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Libélle compte</th>
                  <th scope="col">N° Compte</th>
                  <th scope="col">Dépense</th>
                  <th scope="col">Revenu</th>
                  <th scope="col">Profit</th>
                </tr>
              </thead>
              <tbody id="showdata">
            
              </tbody>
              <tfoot id="showFoot">
              	<tr>
              		<td colspan=2>Totaux</td>
              		<td id="totCrédit"></td>
              		<td id="totDebit"></td>
              		<td id="totProfit"></td>
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

<div id="modalAdd" title="Résultat par période" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div> 
         	 <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
	         <!--  <div class="form-group row">
	            <label for="typeCherche" class="col-sm-5">Type de recherche: <span id="champObligatoir">*</span></label>
	              <div class="col-sm-7">
	                <select name="typeCherche" class="form-control form-control-sm col-8" id="typeCherche">
	                     <option value="unDate">Dans une date</option>
	                     <option value="deuxDate">Entre deux dates</option>
	                </select>
	              </div>
	           </div>  
	          <br> -->
	          <div class="form-group row">                                        
	              <label id="dateDeb" class="col-sm-5" for="dateDebut">Du date: <span id="champObligatoir">*</span> </label>
	              <div class=" col-sm-7">
	                <input type="date" name="dateDebut" class="form-control form-control-sm col-8" id="dateDebut">
	              </div>
	          </div>   
 			
 			 <div class="form-group row" id="dt" style="display:bloc;">                                        
	              <label id="dateF" class="col-sm-5" for="dateFin">Au date: <span id="champObligatoir">*</span> </label>
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
	  width: 550,
	  height: 320,
	  show: {
	    effect: "size",
	    duration: 800,      
	  },
	  hide: {
	    effect: "explode",
	    duration: 800
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
	     
		   if(dateFin == ''){
		   		labDated = 'Affichage jusqu\'au date : ';
		   		valDated =dateDebut; 
		   		labDateF = '';
		   		valDateF ='';
		   		$('#dateFin').addClass('is-invalid');
		   }else{
		   		labDated = 'Du date : ';
		   		valDated =dateDebut;
		   		labDateF = 'Au date : ';
		   		valDateF =dateFin;
		   		$('#dateFin').removeClass('is-invalid');
	      		valider+='2';
		   }

		  if (valider == '12') {
	      	getRapport(data);
	      }else{    
	      		$('.alert-danger').html('Veuillez mentionner les dates')
	 		  	.fadeIn().delay(5000).fadeOut('slow');     
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

		     $('#textImpr').html('Imprimé par:  '+  user);   
		     $('#textDateImpr').html('Imprimé le:  '+dayNow);   

	});

	//Affiche détails d'une compte DAT
	function getRapport(data){
		$.ajax({
	      type:'ajax',
	      method:"post",
	      url:'<?php echo base_url();?>index.php/getResultatCompta',
	      dataType:'json',
	      data: data,
	      async: false,
	        success: function(response) {
             //alert(response);
              var c = response.result;
              var html;
              var t=0;

              var totRev = 0;
              var totDep = 0;
              var totProf = 0;
                              
                for (i = 0; i < c.length; i++) {

                   var total_depense = 0;
                   var total_revenu = 0;

                   html += '<tr>' +
                    '<td class="thead" colspan=5>' + c[i].compteParent + '</td>' +
                    '</tr>';

                   var list = c[i].listCompte;
                   t += list.length; 
                   if(c[i].listCompte.length == null){
                      total_depense += parseFloat(list.sommeCred);
                      total_revenu += parseFloat(list.sommeDeb);

                      html += '<tr>' +
                      '<td>' + list.numCompte + '</td>' +
                      '<td>' + list.libele + '</td>' +
                      '<td>' + list.sommeCred + '</td>' +
                      '<td>' + list.sommeDeb + '</td>' +
                      '<td> </td>' +
                      '</tr>';

                   }else{                        
                     for (var j = 0; j < list.length; j++) {
                        total_depense += parseFloat(list[j].sommeCred);
                        total_revenu += parseFloat(list[j].sommeDeb);

                        html += '<tr>' +
                        '<td>' + list[j].libele + '</td>' +
                        '<td>' + list[j].numCompte + '</td>' +
                        '<td>' + list[j].sommeCred + '</td>' +
                        '<td>' + list[j].sommeDeb + '</td>' +
                        '<td> </td>' +
                        '</tr>';

                     }
                   }


                  html += '<tr>'+
                  '<td class="fot" colspan=2> Totaux '+  c[i].compteParent +' </td>'+
                  '<td class="fot"> '+total_depense+'</td>'+
                  '<td class="fot" colspan=2> '+total_revenu+'</td>'+
                  '</tr>';

                  totRev += total_revenu;
                  totDep += total_depense;
                
                }    

                totProf = (parseFloat(totRev)) + (parseFloat(totDep));


             $('#modalAdd').dialog('close');
			 $('#tet').attr('style','display:bloc');	
			 $('#showdata').html(html);
			 $('#teteTable').html("Total comptes : "+t);
			 $('#totDebit').html(totRev);
			 $('#totCrédit').html(totDep);//container
			 $('#totProfit').html(totProf);

	        },
	        error: function(response){	          
	        $('.alert-danger').html('Aucun résultat ne correspond à votre recherche!')
	 		  	.fadeIn().delay(3000).fadeOut('slow');     
	        }
	    });
	}

	//Changer client
	$('#btnChange').click(function(){
		$('#modalAdd').dialog('open');
		$('#tet').attr('style','display:none');		
	});

});


</script>