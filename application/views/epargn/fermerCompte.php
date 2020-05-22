<!-- <div id="dialog" title="Fermer compte épargne" style="margin-top: 2%;">
 -->
 <div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Fermer compte épargne</h2>
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
        <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
         <div class="control-group row"> 

           <div class="col-4">
           <!--  <span> <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> 
              On peut trier la liste par numéro de compte d'épargne</span> -->
           </div>
	           <div id="affdate" class="form-group col-4 row forms">  
	             <label class="col-sm-3" for="compte">Trier: </label>    	
	                                              
	               <div class=" col-sm-8">
	                 <input type="text" name="compte" class="form-control form-control-sm col-10" id="compte">
	               </div>                   
	           </div>    

          </div>
       </div> 
    </form>
    <hr> 

      <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
    <div id="PageAimprimer" class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
      <table class="table table-fixed table-bordered table-hover table-sm">
         <!-- <legende>Rapport des comptes</legende> -->
          <thead class="thead-light">
            <tr>
              <th scope="col">N° Compte</th>
              <th scope="col">Nom client</th>
              <th scope="col">Produit</th>
              <th scope="col">Date ouverture</th>
              <th id="sd" scope="col">Solde actuel</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="showdata">

          </tbody>
        </table>
        </div>

    </div>
  </div>
 </div>
</div>

<!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->
  <div class="modal fade" id="modalFermer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fermer compte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="myForm2" action="" method="post">
            <div class="form-group row">
               <label for="num" class="col-form-label col-sm-4">N° compte:</label>
                <div class="col-sm-8">
                    <input type="hidden" name="numCmpt" id="numCmpt">
                    <input type="text" class="form-control form-control-sm col-6" name="num" id="num" disabled style="background-color: green;color: white; text-align : center;">
                </div>
            </div>

                 <div class="form-group row">
                    <label for="dateFermer" class="col-form-label col-sm-4">Date fermeture:</label>

                    <div class="col-sm-8">
                         <input type="date" class="form-control form-control-sm col-6" name="dateFermer" id="dateFermer">
                    </div>
                  </div>
                
                 <div class="form-group row">
                      <label for="piece" class="col-form-label col-sm-4">Pièce comptable:</label>

                    <div class="col-sm-8">
                         <input type="text" class="form-control form-control-sm col-10" name="piece" id="piece">
                    </div>
                  </div>

                <div class="form-group row">
                    <label class="col-sm-4" for="frais">Frais de clôture:</label>
                     <div class="col-sm-8">
                         <input type="number" class="form-control form-control-sm col-10" name="frais" id="frais">
                    </div>
                </div>             

                  <div class="form-group row">
                    <label class="col-sm-4" for="raison">Raison:</label>
                     <div class="col-sm-8">
                         <textarea id='raison' class="form-control form-control-sm col-10" name="raison"> </textarea>
                    </div>
                </div>  

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
          <button type="button" id="btnSave" class="btn btn-sm btn-info"><i class="fa fa-save"></i> Enregistrer</button>
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
$(function(){

  //control numerique
nb = document.getElementById('frais');
nb.onkeypress = keyPress;

	$( "#dialog" ).dialog({
	  autoOpen: true,
	  width: 1300,
	  height: 570,
	  show: {
	    effect: "slide", 
	    duration: 700,      
	  },
	  hide: {
	    effect: "explode",
	    duration: 800
	  }
	});

function theDay(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateFermer').val(today);  
}

function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = (day)+"/"+(month)+"/"+now.getFullYear();

  $('#sd').html('Solde le '+ today);  

}

$('#compte').keyup(function(){
  var num = $(this).val();
  afficher(num);
});

afficher('');
function afficher(num){
$.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/getCmpt',
      dataType:'json',
      data: {code: num},
      async: false,
      success: function(response) {   
          //alert(response);
          if (response != null) {
            var i;              
            var c = response;
            var html;
            var nom;        

            for (i = 0; i < c.length; i++) {
              if(c[i].groupe != null){
                nom = c[i].groupe.nomGroupe;
              }else if(c[i].individuel != null){
                nom = c[i].individuel.nomClient +' '+ c[i].individuel.prenomClient;
              }
         
                html += '<tr>' +
                '<td>' + c[i].numCompteEp + '</td>' +
                '<td>' + nom+ '</td>' +
                '<td>' + c[i].produitEpargne.nomProdEpargne +'</td>' +
                '<td>' + c[i].dateOuverture + '</td>' +                    
                '<td>' + c[i].solde + '</td>' +
                '<td>' + 
                '<a href="javascript:;" class="btn btn-danger btn-sm item-fermer" data="'+ c[i].numCompteEp+'"><i class="fa fa-eye-slash"></i> Fermer</a>' +
                 '</td>' +                   
                '</tr>';

            }
            today();
            $('#showdata').html(html);
      
           
          }
          else {
            $('#showdata').html('');
               $.notify({            
                message: 'Désolé, Auccun resultat de votre recherche,Veuillez essayer avec autre type'
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
        $('#showdata').html('');
          $.notify({            
              message: 'Liste vide il n\'y a pas de compte pour ce produit' 
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

$('#showdata').on('click','.item-fermer', function(){
  var data = $(this).attr('data'); 

   $('#modalFermer').modal('show');
   $('#num').val(data);
   $('#numCmpt').val(data);
   theDay();

 });


$('#btnSave').click(function(){
  var data = $('#myForm2').serialize();

  var dateF = $('input[name=dateFermer]');
  var piece = $('input[name=piece]');
  var raison = $('input[name=raison]');
  var frais = $('input[name=frais]');

  var valider = '';

  //control de validation saisie
  if(dateF.val() == ''){
    $('#dateFermer').addClass('is-invalid');
  }else{
    $('#dateFermer').removeClass('is-invalid');
    valider +='1';
  }

  if(piece.val() == ''){
    $('#piece').addClass('is-invalid');
  }else{
    $('#piece').removeClass('is-invalid');
    valider +='2';
  }

  if(raison.val() == ''){
    $('#raison').addClass('is-invalid');
  }else{
    $('#raison').removeClass('is-invalid');
    valider +='3';
  }

  if(frais.val() == ''){
    $('#frais').addClass('is-invalid');
  }else{
    $('#frais').removeClass('is-invalid');
    valider +='4';
  }

  if (valider == '1234') {
    poster(data); 
  }else{
    $('#modalFermer').modal('show');
  }

});

function poster(data){
   $.ajax({
        type:'ajax',
        method: "post",
        url: '<?php echo base_url();?>index.php/fermerCompteEpargne',
        dataType:'json',
        data: data,
        async: false,
        success: function(response) {
            //alert(response);
            if (response.success) {
                $('#modalFermer').modal('hide');
                afficher('');
                console.log(response);
                $.notify({            
                    message: response.message
                },{
                    type: 'success',
                    animate: {
                        enter: 'animated fadeInLeft',
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
}


});

</script>