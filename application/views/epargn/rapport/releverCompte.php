<!-- 
<div id="dialog" title="Relevés de compte" style="margin-top: 1%;">
 -->
<div class="right_col" role="main">
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile" style="margin-top:2%;">
    <div class="x_title">
      <h2>Relevés de compte</h2>
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

            <div class="card w-90" style="margin-left: 0%;background-color: #F8F8FF;">
               <div class="card-header">
                <div class="row">
                  <h5 class="col-6">Information client | produit</h5>  
                  <div class="col-6">
<!--                       <button id="change" type="button" class="btn btn-sm btn-primary" style="float:right;"><i class="fa fa-recycle"></i> Changer compte</button>
 -->                  </div>
                </div>
                </div>
              <div class="card-body">
                <div class="card-text">
                     
                  <div class="row"> 

                    <div class="col-6">

                         <div class="form-group row">              
                            <label for="numCpt" class="col-sm-5">N° de compte:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="numCpt" id="numCpt" disabled>                        
                            </div> 
                          </div>

                         <div class="form-group row">              
                            <label for="nom" class="col-sm-5">Nom:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="nom" id="nom" disabled>                        
                            </div>
                          </div>
                          
                         <div class="form-group row">              
                            <label for="codeInd" class="col-sm-5">Code client:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="codeInd" id="codeInd" disabled>                        
                            </div>
                        </div> 

                        <div class="form-group row">              
                            <label for="adr" class="col-sm-5">Adresse:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="adr" id="adr" disabled>                        
                            </div>
                        </div> 

                        <div class="form-group row">              
                            <label for="email" class="col-sm-3">Email:</label>             
                            <div class="col-sm-9">  
                              <input type="text" class="form-control form-control-sm col-12" name="email" id="email" disabled>                        
                            </div>
                        </div> 
                    </div>
                    
                    <div class="col-6">

                        <div class="form-group row">              
                            <label for="solde" class="col-sm-5">Solde actuel:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="solde" id="solde" disabled>                        
                            </div>
                        </div>
                        
                        <div class="form-group row">              
                            <label for="prod" class="col-sm-5">Produit:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="prod" id="prod" disabled>                        
                            </div>
                        </div>

                         <div class="form-group row">              
                            <label for="devise" class="col-sm-5">Devise:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="devise" id="devise" disabled>                        
                            </div>
                        </div>

                         <div class="form-group row">              
                            <label for="calcInt" class="col-sm-5">Mode calcul intérêt:</label>             
                            <div class="col-sm-7">  
                              <input type="text" class="form-control form-control-sm col-12" name="calcInt" id="calcInt" disabled>                        
                            </div>
                        </div>

                    </div>

                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="col-6">

            <div class="card w-90" style="margin-left: 0%;background-color: #F8F8FF;">
              <div class="card-header">
                  <h5>Information utilisateur</h5>  
                </div>
              <div class="card-body">
                <div class="card-text">
                    <h6 id="textImpr">Imprimer par</h6>
                    <h6 id="textDateImpr">Imprimer le</h6>    
                    <h6 id="textRelev"></h6>    
                </div>
              </div>
            </div>

          </div>

        </div>

        <br/>

            <div class="row">
              <div class="col-6">
                    <h6 id="teteTable">&nbsp;</h6>
              </div>
              <div class="col-6">
                   <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
                    <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer dates</button>
                 </div>
              </div>
              <hr>
              <br>
             <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
              <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
                <table class="table table-fixed table-striped table-hover table-sm">
                   
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">N° transactions</th>
                        <th scope="col">Date</th>
                        <th scope="col">Pièce comptable</th>
                        <th scope="col">Cash/chèque/mobile</th>
                        <th scope="col">Description</th>
                        <th scope="col">Dépôt</th>
                        <th scope="col">Retrait</th>
                        <th scope="col">Solde</th>
                      </tr>
                    </thead>
                    <tbody id="showdata">

                    </tbody>
                     <tfoot id="showFoot" style="display: none;">         
                       <tr class="table-borderless">
                        <td id="nom" colspan=4></td>
                        <td id="produit" colspan=3></td>
                        <td id="total" colspan=1>Total:</td>
                       </tr>
                    </tfoot> 
                </table>
              </div>
      </div>
    </div>
  </div>
</div>


<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div id="modalAdd" title="Rélever de compte épargne" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

         </div>      
          <div class="form-group row">
            <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <!-- <span class="col-sm-1"> </span> <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> -->
            <label class="col-sm-5" for="numCompte">
                N° compte:<span id="champObligatoir">*</span> </label>
                <div class=" col-sm-7">                            
                  <input type="text" class="form-control form-control-sm col-12" name="numCptEp" id="numCptEp">
                </div>
             </div>  

              <div id="affdate" class="form-group row">  
                <label class="col-sm-5" for="dateDeb">Du date: </label>                                      
                  <div class=" col-sm-7">
                    <input type="date" name="dateDeb" class="form-control form-control-sm col-12" id="dateDeb">
                  </div>                   
              </div>  
            <div class="form-group row">
             <label class="col-sm-5" for="dateFin">Jusqu'au date: </label>
                <div class=" col-sm-7">
                    <input type="date" name="dateFin" class="form-control form-control-sm col-12" id="dateFin">
                </div>
             </div>   

          </div>
       </div> 
    </form> 

   <div class="modal-footer">
    <!-- <span style="float: left;margin-right: 20%">les champs marqué par <span id="champObligatoir">*</span> </label> sont obligatoire </span> -->
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


<script text="javascript">

$(function(){


$( "#dialog" ).dialog({
  autoOpen: false,
  width: 1500,
  height: 570,
  show: {
    effect: "size",
    duration: 800,      
  },
  hide: {
    effect: "explode",
    duration: 800
  }
});

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

//changer compte
$('#change').click(function(){
   $('#modalAdd').dialog('open');
  // $('#dialog').dialog('close');
  $('#impre').attr('style','display: none;');
});

$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

//Champ numCompte epargne autocomplète
//SAISIE N° DE COMPTE
  $("#numCptEp").autocomplete({
      source: function(request, response){
        var code = $("#numCptEp").val();
        //var code =  $('input[name=codeCli]').val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/getCmpt',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){                                
                  response($.map(data, function(item){
                      return item.numCompteEp;
                  }));
              }
          });
      },
      select: function(event,ui) {

         var c = ui.item.value;
         $(this).val(c);
         return false;
      }
  });

$('#btnAff').click(function(){
    var data = $('#myForm').serialize();

    var num = $('input[name=numCptEp]');
    var dateDeb = $('input[name=dateDeb]');
    var dateFin = $('input[name=dateFin]');

    var valider = '';

    if(num.val() == ''){
      $('#numCptEp').addClass('is-invalid');
    }else{
      $('#numCptEp').removeClass('is-invalid');
      valider +='1';
    }
   /* if(dateDeb.val() == ''){
      $('#dateDeb').addClass('is-invalid');
    }else{
      $('#dateDeb').removeClass('is-invalid');
      result +='2';
    }
    if(dateFin.val() == ''){
      $('#dateFin').addClass('is-invalid');
    }else{
      $('#dateFin').removeClass('is-invalid');
      result +='3';
    }*/

    if(valider == '1'){

      affichText();

        $.ajax({
        type:'ajax',
        method: "post",
        url: '<?php echo base_url();?>index.php/getReleverCompteEpargne',
        dataType:'json',
        data: data,
        async: false,
        success: function(response) {
            //alert(response);
            if (response != null) {
              var i;              
              var c = response.result;
              var dt = response.compte;
              var html;
              var code;
              var fermer;
              var depot;
              var retrait;
              var nom;
              var total;
              var pr;
              var devise;
              //var solde;

              /*if(c.length == null){

              }else{

              }*/

              for (i = 0; i < c.length; i++) {
  /*
                total = c[0].compteEpargne.solde;

                pr = c[0].compteEpargne.produitEpargne.nomProdEpargne;

                devise = c[0].compteEpargne.produitEpargne.configProdEp.devise;                 
               */
                if(c[i].typeTransEp == 'DE'){
                    depot = c[i].montant;
                    retrait = '';
                }
                else if(c[i].typeTransEp == 'RE'){
                    retrait = c[i].montant;
                    depot = '';
                }
                  html += '<tr>' +
                  '<td>' + c[i].idTransactionEp + '</td>' +
                  '<td>' + c[i].dateTransaction + '</td>' +
                  '<td>' + c[i].pieceCompta + '</td>' +
                  '<td>' + c[i].typePaie + '</td>' +
                  '<td>' + c[i].description+ '</td>' +
                  '<td>' + depot + '</td>' +
                  '<td>' + retrait+ '</td>' +
                  '<td>' + c[i].solde  + '</td>' +              
                  '</tr>';

              }
              //$('#showFoot').attr('style','display: bloc');

             /* $('#nom').html('Nom du client: '+nom);
              $('#produit').html('Produit: '+pr);
              $('#total').html('Total: '+total+'  '+devise);
              */

              if(dt.groupe != null){
                  nom = dt.groupe.nomGroupe;
                  code = dt.groupe.codeGrp;
                }else if(dt.individuel != null){
                  nom = dt.individuel.nomClient +' '+ dt.individuel.prenomClient;
                  code = dt.individuel.codeInd;
                }

              //info client
              $('input[name=numCpt]').val(dt.numCompteEp);
              $('input[name=codeInd]').val(code);
              $('input[name=nom]').val(nom);
              $('input[name=adr]').val(dt.individuel.adresse.adressePhysique);
              $('input[name=email]').val(dt.individuel.email);

              //info produit
              $('input[name=solde]').val(dt.solde);
              $('input[name=prod]').val(dt.produitEpargne.nomProdEpargne);
              $('input[name=devise]').val(dt.produitEpargne.configProdEp.devise);
              $('input[name=calcInt]').val(dt.produitEpargne.configInteretProdEp.modeCalcul);

              $('#showdata').html(html);
              $('#modalAdd').dialog('close');
              //$('#dialog').dialog('open');
              $('#impre').attr('style','display: bloc;');
             
            }
            else {
              $('#showdata').html('');
               $.notify({            
                message: 'Désolé, Auccun resultat de votre recherche'
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
            $('.alert-danger').html('<h6>'+'&nbsp;'+'Aucun resultat de votre recherche!'+'</6>')
              .fadeIn().delay(4000).fadeOut('slow');
          }
      });

    }else{
        $('.alert-danger').html('<h6>'+'&nbsp;'+'Veuillez saisir le numéro de compte, merci!'+'</6>')
        .fadeIn().delay(4000).fadeOut('slow');
    }
});

function affichText(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var user = $('input[name=user]').val();

    var dateDeb = $('input[name=dateDeb]').val();
    var dateFin = $('input[name=dateFin]').val();

    var datDeb;
    var datFin;


    if(dateDeb == '' && dateFin == ''){
      datDeb = 'xxxx-xx-xx';
      datFin = 'xxxx-xx-xx';
    }
    else{
      datDeb = dateDeb;
      datFin = dateFin;
    }

    $('#textRelev').html('Rélever de compte entre '+  datDeb +' au '+datFin);  
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
 }

});

</script>