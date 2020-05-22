<div class="right_col" role="main">
<div class="col-md-12 col-sm-12" style="margin-top: 2%;">
<div class="x_panel tile " id="tet" style="display:none;">
  <div class="x_title">
    <h2>Rapport garants et garanties crédit</h2>
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
 
  <div class="">
    <div class="">
       <div class="card w-90" style="margin-left: 0%;background-color: #F8F8FF;" >
        <div class="card-header">
             <div class="row">         
              <h5 class="col-6">Information client | produit</h5>  
               <!-- <div class="col-6">
                   <button id="change" type="button" class="btn btn-sm btn-primary" style="float:right;">
                    <i class="fa fa-recycle"></i> Changer crédit</button>
                </div> -->
             </div>
        </div>
          <div class="card-body">
            <div class="card-text">

              <div class="row">

                <div class="col-6">

                  <div class="form-group row">              
                    <label for="codCred" class="col-sm-5">N° crédit:</label>             
                    <div class="col-sm-5">  
                      <input type="text" class="form-control form-control-sm col-12" name="codCred" id="codCred" disabled>                        
                    </div>
                  </div>
                  
                  <div class="form-group row">              
                    <label for="codeInd" class="col-sm-5">Code client:</label>             
                    <div class="col-sm-5">  
                      <input type="text" class="form-control form-control-sm col-12" name="codeInd" id="codeInd" disabled>                        
                    </div>
                  </div>

                  <div class="form-group row">              
                    <label for="nom" class="col-sm-5">Nom et prenom:</label>             
                    <div class="col-sm-5">  
                      <input type="text" class="form-control form-control-sm col-12" name="nom" id="nom" disabled>                        
                    </div>
                  </div>

                  <div class="form-group row">              
                    <label for="adresse" class="col-sm-5">Adresse:</label>             
                    <div class="col-sm-5">  
                      <input type="text" class="form-control form-control-sm col-12" name="adresse" id="adresse" disabled>                        
                    </div>
                  </div>
                 
                  <div class="form-group row">              
                      <label for="montantCred" class="col-sm-5">Montant crédit:</label>             
                      <div class="col-sm-5">  
                        <input type="number" class="form-control form-control-sm col-12" name="montantCred" id="montantCred" disabled>                        
                      </div>
                    </div>

                  <div class="form-group row">              
                    <label for="interet" class="col-sm-5">Intérêt:</label>             
                    <div class="col-sm-5">  
                      <input type="number" class="form-control form-control-sm col-12" name="interet" id="interet" disabled>                        
                    </div>
                  </div> 


                </div>

                <div class="col-6">

                   <div class="form-group row">              
                      <label for="prod" class="col-sm-5">Produit crédit:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="prod" id="prod" disabled>                        
                      </div>
                    </div>
                    
                    <div class="form-group row">              
                      <label for="tauxInt" class="col-sm-5">Taux d'intérêt annuel:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="tauxInt" id="tauxInt" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="typeTranche" class="col-sm-5">Type de tranche:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="typeTranche" id="typeTranche" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="nbTranche" class="col-sm-5">Nombre tranche:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="nbTranche" id="nbTranche" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="devise" class="col-sm-5">Devise:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="devise" id="devise" disabled>                        
                      </div>
                    </div> 

                    <div class="form-group row">              
                      <label for="agent" class="col-sm-5">Agent de crédit:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="agent" id="agent" disabled>                        
                      </div>
                    </div>

                </div>
              </div>
               
            </div>
          </div>
       </div>
    </div>
  </div>
   
<br/>
<hr>    

  <div class="row">
    <div class="col-6">
          <!-- <h6 id="teteTable">Détails crédit</h6> -->
    </div>
    <div class="col-6">
         <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
          <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer crédit</button>
       </div>
    </div>
    <br>
   <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
    
    <div class="row">
      <div class="col-6">
        <div class="col-6">
          <h6 id="teteTable">Garant crédit</h6>
        </div>
        <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
          <table class="table table-fixed table-striped table-hover table-sm">
             
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom garant</th>
                  <th scope="col">montant</th>
                  <th scope="col">taux</th>
                </tr>
              </thead>
              <tbody id="showGarant">

              </tbody>
              <tfoot id="footGarant">

            </tfoot>
          </table>
        </div>
      </div>
      <div class="col-6">
        <div class="col-6">
          <h6 id="teteTable">garanties crédit</h6>
        </div>
        <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
          <table class="table table-fixed table-striped table-hover table-sm">
             
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Type</th>
                  <th scope="col">libellé</th>
                  <th scope="col">Valeur</th>
                  <th scope="col">Taux</th>
                </tr>
              </thead>
              <tbody id="showGarantie">

              </tbody>
              <tfoot id="footGarantie">

            </tfoot>
          </table>
        </div>
      </div>

    </div>

   <br/>
    </div>
  </div>
  </div>
</div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Rapport garants et garanties</h5>
        </div>
        <div class="modal-body">
           <form id="myForm" action="" method="post">
              <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
              <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

              </div>      

              <div class="col-12">

                  <div class="form-group row">
                    <label for="numCredit" class="col-form-label lab-date col-sm-3">N° crédit: <span id="champObligatoir">*</span></label>
                    <input type="text" class="form-control form-control-sm col-5" name="numCredit" id="numCredit">
                    <div class="col-sm-4">
                      <button id="btn-find" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-search"></i> chercher</button>
                    </div>
                  </div>

              </div>

              </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
                <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-list"></i> Afficher</button>
          </div>
        </div>
    </div>
  </div>
</div>

  <!-- MODAL CLIENT -->
<div class="modal fade" id="modalClient" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Liste crédits</h5>
        </div>
        <div class="modal-body">             
            
         <table class="table table-fixed table-bordered table-hover table-sm">
            <thead class="thead-light">
              <tr>
                <th scope="col">N° crédit</th>
                <th scope="col">Client</th>
                <th scope="col">Montant demandé</th>
                <th scope="col">Situation crédit</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="showClient">

            </tbody>
            
          </table>
          <br>
          <div  class="form-group row col-6"><!-- style="margin-right: 40%;" -->
            <label for="numFind" class="col-sm-5">
               <i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i>   
              Trier par Code client: </label>                           
            <div class="col-sm-7">
              <input type="text" id="numFind" class="form-control form-control-sm col-12" name="numFind">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="btn-fer" type="button" class="btn btn-sm btn-danger"><i class="fa fa-arrow-circle-right"></i> Fermer</button>
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

<script text="javascript">

$(function(){

  today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateDeb').val(today);  
}
$('#modalAdd').modal('show');

//Chercher crédit
 $('#btn-find').click(function(){
    $('#modalAdd').modal('hide');
    $('#modalClient').modal('show');
     choixCli();
 });

$('#fermerModal').click(function(){
   $('#modalAdd').modal('hide');
});

$('#btn-fer').click(function(){
   $('#modalClient').modal('hide');
   $('#modalAdd').modal('show');
});


  $('#change').click(function(){
     $('#modalAdd').modal('show');
     $('#tet').attr('style','display:none;');//.container
  });


$('#btnAff').click(function(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dates = $('input[name=dateDeb]').val();

    var num = $('input[name=numCredit]').val();

    var valider = '';

    if(num == ''){
      $('#numCredit').addClass('is-invalid');
    }else{
      $('#numCredit').removeClass('is-invalid');
      valider +='1';
    }

    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Journal caisse du:  '); 

     if(valider == '1'){
        getDonne(data);
        getGarantie(num);
        getGarant(num);
     }else{
        $('.alert-danger').html('Le numero crédit ne doit pas être vide!')
              .fadeIn().delay(2000).fadeOut('slow');
     }

});

//Selection num crédit
//CHOISIR CLIENT VIA RECHERCHE
$('#showClient').on('click','.item-clientInd', function(){

  var numCred = $(this).attr('data');
  $('#modalClient').modal('hide');

  $('#modalAdd').modal('show');

  $('input[name=numCredit]').val(numCred);
  
});



function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getFicheCredit',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);             
                  var c = response.result;
                  var html;
                  var detail = response.cred;

                  $('#modalAdd').modal('hide');
                  $('#tet').attr('style','display:bloc;');//.container

                  html += '<tr>'+
                  '<td colspan=10>  &nbsp;</td>'+
                  '</tr>';
                  $('#showdata').html(html);   

                   //détail client
                  if(detail.individuel != null){
                    $('#labNom').html("Nom et prenom: ");
                    $('input[name=codeInd]').val(detail.individuel.codeInd);
                    $('input[name=nom]').val(detail.individuel.nomClient +' '+detail.individuel.prenomClient);
                    $('input[name=adresse]').val(detail.individuel.adresse.adressePhysique);
                    $('input[name=tel]').val(detail.individuel.numeroMobile);
                  }
                  if(detail.groupe != null){
                    $('#labNom').html("Nom groupe: ");
                    $('input[name=codeInd]').val(detail.groupe.codeGrp);
                    $('input[name=nom]').val(detail.groupe.nomGroupe);
                    $('input[name=adresse]').val(detail.groupe.adresse.adressePhysique);
                    $('input[name=tel]').val(detail.groupe.numeroMobile);
                  }

                  //detail produit
                  $('input[name=codCred]').val(detail.numCredit);
                  $('input[name=prod]').val(detail.produitCredit.idProdCredit +' | '+ detail.produitCredit.nomProdCredit);
                  $('input[name=tauxInt]').val(detail.taux);
                  $('input[name=typeTranche]').val(detail.typeTranche);
                  $('input[name=nbTranche]').val(detail.nbTranche);
                  $('input[name=devise]').val('MGA');
                  $('input[name=agent]').val(detail.agent.nomUtilisateur);
                  $('input[name=interet]').val(detail.interet);
                  $('input[name=montantCred]').val(detail.montantDemande);

                 /*  //détail client
                  $('input[name=codCred]').val(detail.numCredit);
                  $('input[name=codeInd]').val(detail.individuel.codeInd);
                  $('input[name=nom]').val(detail.individuel.nomClient +' '+detail.individuel.prenomClient);
                  $('input[name=adresse]').val(detail.individuel.adresse.adressePhysique);

                  //detail produit
                  $('input[name=prod]').val(detail.produitCredit.idProdCredit +' | '+ detail.produitCredit.nomProdCredit);
                  $('input[name=tauxInt]').val(detail.taux);
                  $('input[name=typeTranche]').val(detail.typeTranche);
                  $('input[name=nbTranche]').val(detail.nbTranche);
                  $('input[name=devise]').val('MGA');
                  $('input[name=agent]').val(detail.agent.nomUtilisateur);
*/
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Aucun résultat ne correspond à votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}

    function getGarant(num){
        $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/getGarantCredit",
        data:{numCredit: num},
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                var numero=1;
                var sommMontant = 0;
                var sommTaux = 0;
                if(c.length == null){
                  sommMontant += parseFloat(c.montant);
                  sommTaux += parseFloat(c.tauxCred);
                     html += '<tr>' +
                      '<td>' + numero + '</td>' + 
                      '<td>' + c.nom +' '+ c.prenom + '</td>' +
                      '<td>' + c.montant + '</td>' +
                      '<td>' + c.tauxCred + '</td>' +        
                      '</tr>';
                }else{
                  for (i = 0; i < c.length; i++) {
                      sommMontant += parseFloat(c[i].montant);
                      sommTaux += parseFloat(c[i].tauxCred);
                      html += '<tr>' +
                      '<td>' + numero + '</td>' + 
                      '<td>' + c[i].nom +' '+ c[i].prenom + '</td>' +
                      '<td>' + c[i].montant + '</td>' +
                      '<td>' + c[i].tauxCred + '</td>' +        
                      '</tr>';
                      numero++;
                  }
                }
                $('#showGarant').html(html);
                var fot;
                 fot += '<tr>' +
                      '<td colspan=2>Totaux</td>' + 
                      '<td>' + sommMontant + '</td>' +
                      '<td>' + sommTaux + '</td>' +        
                      '</tr>';
                 $('#footGarant').html(fot);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            $('#showGarant').html('Auccun garant');
            $('#footGarant').html("");
        }
    });
    }

    function getGarantie(num){
        $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/getGarantieCredit",
        data:{numCredit: num},
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                var sommMontant = 0;
                var sommTaux = 0;
                var numero=1;
                if(c.length == null){
                      sommMontant += parseFloat(c.valeur);
                      sommTaux += parseFloat(c.pourcentage);
                      html += '<tr>' +
                      '<td>' + numero + '</td>' + 
                      '<td>' + c.typeGarantie+ '</td>' +
                      '<td>' + c.nomGarantie + '</td>' +
                      '<td>' + c.valeur + '</td>' +        
                      '<td>' + c.pourcentage + '</td>' +        
                      '</tr>';
                }else{
                  for (i = 0; i < c.length; i++) {
                      sommMontant += parseFloat(c[i].valeur);
                      sommTaux += parseFloat(c[i].pourcentage);
                      html += '<tr>' +
                      '<td>' + numero + '</td>' + 
                      '<td>' + c[i].typeGarantie+ '</td>' +
                      '<td>' + c[i].nomGarantie + '</td>' +
                      '<td>' + c[i].valeur + '</td>' +        
                      '<td>' + c[i].pourcentage + '</td>' +        
                      '</tr>';
                      numero++;
                  }
                }
                $('#showGarantie').html(html);
                var fot;
                 fot += '<tr>' +
                      '<td colspan=3>Totaux</td>' + 
                      '<td>' + sommMontant + '</td>' +
                      '<td>' + sommTaux + '</td>' +        
                      '</tr>';
                 $('#footGarantie').html(fot);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            $('#showGarantie').html('Aucun garantie');
            $('#footGarantie').html("");
        }
    });
    }


//Recuperer tout crédit

function choixCli(){
    $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/getCredit",
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                var nom;
                var prenom;
                for (i = 0; i < c.length; i++) {

                  if(c[i].individuel != null){
                    nom = c[i].individuel.nomClient+' '+ c[i].individuel.prenomClient;
                  }
                  if(c[i].groupe != null)
                  {
                    nom = c[i].groupe.nomGroupe;
                  }

                    html += '<tr>' +
                    '<td>' + c[i].numCredit + '</td>' +
                    '<td>' + nom +'</td>' +
                    '<td>' + c[i].montantDemande + '</td>' +
                    '<td>' + c[i].approbationStatut + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-clientInd" data="'+ c[i].numCredit+'">Selectionner</a>' +
                    '</td>' +
                    '</tr>';
                }

                //var a=etudiant_table.num_matricule;
                $('#showClient').html(html);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('pas de donnée');
        }
    });
}

$('#imprimer').click(function(){
  imprimer('impre');

});


//FONCTION POUR FAIRE IMPRESSION

function imprimer(divName) {
   var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   // $('#modalAfficheCalendier').modal('hide');
}

});

</script>