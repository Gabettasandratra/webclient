<div class="right_col" role="main" >
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport clients individuels</h2>
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
      
    <br/>
        <div class="row">
          <div class="col-6">
                <h6 id="teteTable">&nbsp;</h6>
          </div>
          <div class="col-6">
               <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer critères</button>
             </div>
          </div>
          <hr>
          <br>
         <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
            <table id="tab" class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                  <tr>
                     <th scope="col">Code client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date inscription</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Email</th>
                    <th scope="col">Profession</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="showIndividuel">

                </tbody>
            </table>
          </div>

        <br>
        <br>
        <br>
        <br>
			   
    </div>
  </div>
  </div>
</div>

<!-- DETAIL CLIENT -->

<div id="modalDetail" title="Détail Client" style="margin-top: 1%;">

      <div class="card w-100" >
         <div class="card-header">
           <div class="row">         
              <h5 class="col-6">Information client</h5>  
               <div class="col-6">
                  <button id="retour" type="button" class="btn btn-sm btn-danger" style="float:right;"><i class="fa fa-back"></i> retour</button>
                </div>
             </div>
          </div>
          <div class="card-body">
            <div class="card-text">
              
              <div class="row">

                  <div class="col-4">
                   <!-- style="text-align:center"  -->
                      <div class="form-group row">              
                        <label for="codeInd" class="col-sm-5">Code client:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="codeInd" id="codeInd" disabled>                        
                        </div>
                      </div>

                      <div class="form-group row">              
                        <label for="nom" class="col-sm-5">Nom et prenom:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="nom" id="nom" disabled>                        
                        </div>
                      </div>

                      <div class="form-group row">              
                        <label for="nais" class="col-sm-5">Date Nais:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="nais" id="nais" disabled>                        
                        </div>
                      </div>

                     <div class="form-group row">              
                        <label for="lieu" class="col-sm-5">Lieu nais:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="lieu" id="lieu" disabled>                        
                        </div>
                      </div>

                    <div class="form-group row">              
                        <label for="titre" class="col-sm-5">Titre:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="titre" id="titre" disabled>                        
                        </div>
                    </div>  

                    <div class="form-group row">              
                        <label for="langue" class="col-sm-5">Langue:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="langue" id="langue" disabled>                        
                        </div>
                    </div>

                    <div class="form-group row">              
                        <label for="statutClient" class="col-sm-5">Statut client:</label>             
                        <div class="col-sm-7">  
                          <input type="text" class="form-control form-control-sm col-12" name="statutClient" id="statutClient" disabled>                        
                        </div>
                    </div>
                    <p id="mauv"></p>

                  </div>
                  <div class="col-4">

                    <div class="form-group row">              
                      <label for="etat" class="col-sm-5">Etat civil:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="etat" id="etat" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="conjoint" class="col-sm-5">Nom conjoint(e):</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="conjoint" id="conjoint" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="nbEnf" class="col-sm-5">Nombre enfant:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="nbEnf" id="nbEnf" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="nbCharge" class="col-sm-5">Personne charge:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="nbCharge" id="nbCharge" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="parent" class="col-sm-5">Nom parent:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="parent" id="parent" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="parentAddres" class="col-sm-5">Adresse parent:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="parentAddres" id="parentAddres" disabled>                        
                      </div>
                    </div>

                  </div>
                  <div class="col-4">

                    <div class="form-group row">              
                      <label for="adressePhysique" class="col-sm-5">Adresse:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="adressePhysique" id="adressePhysique" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="commune" class="col-sm-5">Commune:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="commune" id="commune" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="district" class="col-sm-5">District:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="district" id="district" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="region" class="col-sm-5">Région:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="region" id="region" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="ville" class="col-sm-5">Ville:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="ville" id="ville" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="codeReg" class="col-sm-5">Code région:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="codeReg" id="codeReg" disabled>                        
                      </div>
                    </div>

                    <div class="form-group row">              
                      <label for="distAgence" class="col-sm-5">Distance angence:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="distAgence" id="distAgence" disabled>                        
                      </div>
                    </div>

                  </div>

              </div>  


            </div>
          </div>
      </div>
    <br/>
    <div class="row">

      <div class="col-6">

        <div class="card w-100" >
           <div class="card-header">
            <h5>Détail épargne</h5>  
            </div>
          <div class="card-body">
            <div class="card-text">
                 <!--  TABLEAU AFFICHE Le détail épargne du client en question -->
                  <div id="Epargneimprimer" class="table-responsive-sm" style="padding: 0px;">
                    <table class="table table-fixed table-bordered table-hover table-sm">
                       <caption id="total_epargne"></caption>
                        <thead id="" class="thead-light">
                          <tr>
                            <th scope="col">N° compte</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Date ouverture</th>
                            <th scope="col">Solde actuel</th>
                            <th scope="col">Fermer</th>
                          </tr>
                        </thead>
                        <tbody id="showEpargne">
                
                        </tbody>
                    </table>
                </div>                                        
            </div>
          </div>
        </div>

      </div>

      <div class="col-6">

         <div class="card w-100" >
            <div class="card-header">
             <h5>Détail crédit</h5>  
            </div>
          <div class="card-body">
            <div class="card-text">
                 <!--  TABLEAU AFFICHE Le détail crédit du client en question -->
                  <div id="Creditimprimer" class="table-responsive-sm" style="padding: 0px;">
                    <table class="table table-fixed table-bordered table-hover table-sm">
                       <caption id="total_credit"></caption>
                        <thead id="" class="thead-light">
                          <tr>
                            <th scope="col">N° crédit</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Statut crédit</th>
                            <th scope="col">Principal total</th>
                            <th scope="col">Intéret total</th>
                            <th scope="col">Solde total</th>
                          </tr>
                        </thead>
                        <tbody id="showCredit">
                
                        </tbody>
                    </table>
                </div>                                        
            </div>
          </div>
        </div>

      </div>

    </div> 
    <br/> 

</div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Rapport client individuel</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                 <div class="col-12">

                   <div class="form-group row">              
                      <label id="lab" for="agence" class="col-sm-5">Agence:</label>             
                      <div class="col-sm-7">  
                        <input type="text" class="form-control form-control-sm col-12" name="agence" id="agence">                        
                      </div>
                    </div>

                  <div class="form-group row">
                      <label for="adresse" class="col-sm-5">Adresse:</label>
                      <div class="col-sm-7">
                          <input type="text" class="form-control form-control-sm col-12" name="adresse" id="adresse">
                      </div>
                   </div>

                   <div class="form-group row">
                      <label for="profession" class="col-sm-5">Proffession:</label>
                      <div class="col-sm-7">
                         <input type="text" class="form-control form-control-sm col-12" name="profession" id="profession">
                      </div>
                   </div>
 

                   <div class="form-group row">
                      <label for="niveauEtude" class="col-sm-5">Niveau d'étude:</label>
                      <div class="col-sm-7">
                       <select name="niveauEtude" class="form-control form-control-sm col-12" id="niveauEtude">
                            <option value=""></option>
                            <option value="Illetré">Illetré</option>
                            <option value="Primaire">Primaire</option>
                            <option value="Secondaire premier Cycle">Secondaire premier Cycle</option>
                            <option value="Secondaire second Cycle">Secondaire second Cycle</option>
                            <option value="Universitaire">Universitaire</option>
                        </select>
                      </div>
                   </div> 

                   <div class="form-group row">
                      <label for="sexe" class="col-sm-5">Sexe:</label>
                      <div class="col-sm-7">
                         <select name="sexe" class="form-control form-control-sm col-12" id="sexe">
                            <option value=""></option>
                            <option value="masculin">masculin</option>
                            <option value="feminin">feminin</option>
                        </select>
                      </div>
                   </div>   

                  <div id="affDeb" class="form-group row">
                      <label for="dateDeb" class="col-sm-4">Naissance entre:</label>
                      <div class="col-sm-4">
                        <input type="date" id='dateDeb' name="dateDeb" class="form-control form-control-sm col-12">                       
                      </div>
                       <div class="col-sm-4">
                        <input type="date" id='dateFin' name="dateFin" class="form-control form-control-sm col-12">                       
                      </div>
                   </div>   

                   <div id="affDeb" class="form-group row">
                      <label for="dateDeb" class="col-sm-4">Inscription entre:</label>
                      <div class="col-sm-4">
                        <input type="date" id='startDate' name="startDate" class="form-control form-control-sm col-12">                       
                      </div>
                       <div class="col-sm-4">
                        <input type="date" id='endDate' name="endDate" class="form-control form-control-sm col-12">                       
                      </div>
                   </div>   
            
                </div>

              </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
                <button type="button" id="btnAfficher" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-list"></i> Afficher</button>
          </div>
      </div>
  </div>
</div>
</div>
	

<!-- MODAL SUPPRESSION-->
<div class="modal fade" id="modalSup" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
  <div class="modal-content">
    <div class="modal-body" id="bodyInfo">             
        <input type="hidden" name="codeClient" id="codeClient"/>
        <h6 id="infos"></h6>
    </div>
    <div class="modal-footer">
      <button id="btn-accept" type="button" class="btn btn-sm btn-success">Oui</button>
      <button id="btn-refuse" type="button" class="btn btn-sm btn-secondary">Non</button>
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


<script src="<?php echo base_url('/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
    <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>


<script type="text/javascript">

$(function(){

$('#modalAdd').modal('show');

//Détail client
$( "#modalDetail" ).dialog({
  autoOpen: false,
  width: 1200,
  height: 500,
  show: {
    effect: "size",
    duration: 800,      
  },
  hide: {
    effect: "size",
    duration: 800
  }
});

$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

//Supprimer un client

$('#btn-accept').click(function(){
    var id = $('input[name=codeClient]').val();

     $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/deleteIndividuel",
        dataType:"json",
        data: {id: id},
        async: false,
        success:function(data){
           if(data.success){
             alert(data.result);

             $('#modalSup').modal('hide');
             $('#modalAdd').modal('show');
           }
        },
         error: function(data){
          alert(data.result);
          $('#modalSup').modal('hide');
        }
    });
});

$('#btn-refuse').click(function(){
    $('#modalSup').modal('hide');
    $('#impre').attr('style','display:bloc;');//.container
});

$('#showIndividuel').on('click','.item-delete', function(){ 
  var id = $(this).attr('data');

   $('#impre').attr('style','display:none;');
  $('#modalSup').modal('show');

  $('input[name=codeClient]').val(id);

  $('#infos').html('Voulez vous vraiment supprimer le client n° '+id+' ?');
});


/*************************************************************/

$('#retour').click(function(){//dialog
   $('#impre').attr('style','display:bloc;');
  $('#modalDetail').dialog('close');
});

$('#showIndividuel').on('click','.item-voir', function(){
  var id = $(this).attr('data');
 /* $('#dialog').dialog('close');*/
  $('#impre').attr('style','display:none;');
  $('#modalDetail').dialog('open');
  getDetail(id);
});


$('#change').click(function(){
   $('#modalAdd').modal('show');
   $('#impre').attr('style','display:none;');
   /*$('#dialog').dialog('close');*/
});

$('#btnAfficher').click(function(){
   var btn = $(this);
    $(btn).buttonLoader('start');

    var data = $('#myForm').serialize();
    //getDonne(data);
    setTimeout(function () {
       affichText();
        $(btn).buttonLoader('stop');
        getDonne(data);
      }, 2000);

});

/************************fonction pour recuperer la liste des clients************************/
 function getDonne(data){
     $.ajax({
          type:'ajax',
          method:"post",
          url:'<?php echo base_url();?>index.php/afficheRapportClient',
          dataType:'json',
          data: data,
          async: false,
          success:function(response){
          
                if(response.success){
                    var c = response.result;
                    var html;

                    if(c.length == null){
                         html += '<tr>' +
                          '<td>' + c.codeInd + '</td>' +
                          '<td>' + c.nomClient +' '+c.prenomClient + '</td>' +
                          '<td>' + c.dateInscription + '</td>' +
                          '<td>' + c.numeroMobile + '</td>' +
                          '<td>' + c.sexe + '</td>' +
                          '<td>' + c.email + '</td>' +
                          '<td>' + c.profession + '</td>' +
                          '<td>' +
                          '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+ c.codeInd+'"><i class="fa fa-eye"></i> </a>' +
                          '&nbsp;<a href="javascript:;" class="btn btn-sm btn-primary item-edit" data="' + c.codeInd+'"><i class="fa fa-edit"></i> </span> </a>' +
                          '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="' + c.codeInd+'"><i class="fa fa-trash-alt"></i> </a>' +
                          '</td>' +
                          '</tr>';
                    }else{
                      for (i = 0; i < c.length; i++) {
                          html += '<tr>' +
                          '<td>' + c[i].codeInd + '</td>' +
                          '<td>' + c[i].nomClient +' '+c[i].prenomClient + '</td>' +
                          '<td>' + c[i].dateInscription + '</td>' +
                          '<td>' + c[i].numeroMobile + '</td>' +
                          '<td>' + c[i].sexe + '</td>' +
                          '<td>' + c[i].email + '</td>' +
                          '<td>' + c[i].profession + '</td>' +
                          '<td>' +
                          '<a href="javascript:;" class="btn btn-success btn-sm item-voir" data="'+ c[i].codeInd+'"><i class="fa fa-eye"></i> </a>' +
                          '&nbsp;<a href="javascript:;" class="btn btn-sm btn-primary item-edit" data="' + c[i].codeInd+'"><i class="fa fa-edit"></i> </span> </a>' +
                          '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-sm btn-danger item-delete" data="' + c[i].codeInd+'"><i class="fa fa-trash-alt"></i> </a>' +
                          '</td>' +
                          '</tr>';
                      }
                      
                    }

                    //var a=etudiant_table.num_matricule;
                    $('#modalAdd').modal('hide');
                    $('#impre').attr('style','display:bloc;');
                    /*$('#dialog').dialog('open');*/
                    $('#showIndividuel').html(html);
                    $('#total').html('Effectif clients individuels: '+c.length);  
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
                }
          },
         error: function(response){
          $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
        }
      });
 }

 var sexe = '';
 var niveauEtude = '';

$('#niveauEtude').change(function() {  
  $( "#niveauEtude option:selected" ).each(function() {
      niveauEtude = $( this ).attr('value');
    }); 
});

$('#sexe').change(function() {  
   $( "#sexe option:selected" ).each(function() {
      sexe = $( this ).attr('value');
    });
});


/*******************fonction pour voir le détail d'un client*************************/
function getDetail(id){
     $.ajax({
          type:'ajax',
          method:"get",
          url:'<?php echo base_url();?>index.php/getDetailClient',
          dataType:'json',
          data: {id:id},
          async: false,
          success:function(response){
          
                if(response.success){
                    var epargne = response.epargne;
                    var credit = response.credit;
                    var html;
                    var detailEpargne;
                    var fermer;

                    //détail crédit
                    if(credit.length == null){
                          html += '<tr>' +
                          '<td>' + credit.numCredit + '</td>' +
                          '<td>' + credit.produitCredit.nomProdCredit + '</td>' +
                          '<td>' + credit.approbationStatut + '</td>' +
                          '<td>' + credit.principale_total + '</td>' +
                          '<td>' + credit.interet_total + '</td>' +
                          '<td>' + credit.solde_total + '</td>' +
                          '</tr>';
                    }else{
                      for (i = 0; i < credit.length; i++) {
                          html += '<tr>' +
                          '<td>' + credit[i].numCredit + '</td>' +
                          '<td>' + credit[i].produitCredit.nomProdCredit + '</td>' +
                          '<td>' + credit[i].approbationStatut + '</td>' +
                          '<td>' + credit[i].principale_total + '</td>' +
                          '<td>' + credit[i].interet_total + '</td>' +
                          '<td>' + credit[i].solde_total + '</td>' +
                          '</tr>';
                      }
                      
                    }

                    //détail épargne
                    if(epargne.length == null){
                        if(epargne.fermer == true){
                          fermer = 'Oui'
                        }else{
                          fermer = 'Non'
                        }

                          detailEpargne += '<tr>' +
                          '<td>' + epargne.numCompteEp + '</td>' +
                          '<td>' + epargne.produitEpargne.nomProdEpargne + '</td>' +
                          '<td>' + epargne.dateOuverture + '</td>' +
                          '<td>' + epargne.solde + '</td>' +
                          '<td>' + fermer + '</td>' +
                          '</tr>';
                    }else{
                      for (i = 0; i < epargne.length; i++) {

                        if(epargne[i].fermer == true){
                          fermer = 'Oui'
                        }else{
                          fermer = 'Non' 
                        }

                          detailEpargne += '<tr>' +
                          '<td>' + epargne[i].numCompteEp + '</td>' +
                          '<td>' + epargne[i].produitEpargne.nomProdEpargne + '</td>' +
                          '<td>' + epargne[i].dateOuverture + '</td>' +
                          '<td>' + epargne[i].solde + '</td>' +
                          '<td>' + fermer + '</td>' +
                          '</tr>';
                      }
                      
                    }

                    var individuel = response.individuel;
                    var stat;
                    var par;
                    var styles;

                    if(individuel.isSain == true){
                      stat = 'bon client';
                      par = 'c\'est un client sain';
                      $('#statutClient').attr('style','background-color: green;color: white;');
                    }else if(individuel.isListeNoir == true){
                      stat = 'mauvais client';
                      par = 'ce client est dans la liste noir';
                      $('#statutClient').attr('style','background-color: yellow;color: black;');
                    }else if(individuel.isListeRouge == true){
                      stat = 'très mauvais client';
                      par = 'ce client est dans la liste rouge';
                      $('#statutClient').attr('style','background-color: red;color: white;');
                    }

                    $('input[name=codeInd]').val(individuel.codeInd);
                    $('input[name=nom]').val(individuel.nomClient +' '+individuel.prenomClient);
                    $('input[name=nais]').val(individuel.dateNaissance);
                    $('input[name=lieu]').val(individuel.lieuNaissance);
                    $('input[name=titre]').val(individuel.titre);
                    $('input[name=langue]').val(individuel.langue);
                    $('input[name=statutClient]').val(stat);

                     $('#mauv').html(par);

                    $('input[name=etat]').val(individuel.etatCivil);
                    $('input[name=conjoint]').val(individuel.nomConjoint);
                    $('input[name=nbEnf]').val(individuel.nbEnfant);
                    $('input[name=nbCharge]').val(individuel.nbPersCharge);
                    $('input[name=parent]').val(individuel.parentNom);
                    $('input[name=parentAddres]').val(individuel.parentAdresse);


                    $('input[name=adressePhysique]').val(individuel.adresse.adressePhysique);
                    $('input[name=commune]').val(individuel.adresse.adresseCommune);
                    $('input[name=district]').val(individuel.adresse.adresseDistrict);
                    $('input[name=region]').val(individuel.adresse.adresseRegion);
                    $('input[name=ville]').val(individuel.adresse.adresseVille);
                    $('input[name=codeReg]').val(individuel.adresse.codeRegion);
                    $('input[name=distAgence]').val(individuel.adresse.distanceAgence +' Km');

                    var detCred;
                    var detEpa;
                    if(epargne.length == null){
                      detEpa = 1;
                    }
                    else{
                      detEpa = epargne.length;
                    }
                    if(credit.length == null){
                      detCred = 1;
                    }else{
                      detCred = credit.length;
                    }
                    $('#showEpargne').html(detailEpargne);
                    $('#showCredit').html(html);
                    $('#total_epargne').html('Total épargne: '+detEpa);  
                    $('#total_credit').html('Total crédit: '+detCred);  
                }
          },
         error: function(response){
          $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
        }
      });
 }

 /**********************fonction pour l'affichages des informations************************/
 
 function affichText(){

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var user = $('input[name=user]').val();

    var agence = $('input[name=agence]').val();
    var adresse = $('input[name=adresse]').val();
    var profession = $('input[name=profession]').val();
    var dateDeb = $('input[name=dateDeb]').val();
    var dateFin = $('input[name=dateFin]').val();
    var startDate = $('input[name=startDate]').val();
    var endDate = $('input[name=endDate]').val();

    var ag;
    var ad;
    var pr;
    var niv;
    var s;
    var datDeb;
    var datFin;
    var startD;
    var endD;

    if(agence == ''){
      ag = 'Tout';
    }
    else{
      ag = agence;
    }

    if(adresse == ''){
      ad = 'Tout';
    }
    else{
      ad = adresse;
    }

    if(profession == ''){
      pr = 'Tout';
    }
    else{
      pr = profession;
    }

    if(niveauEtude == ''){
      niv = 'Tout';
    }
    else{
      niv = niveauEtude;
    }

    if(sexe == ''){
      s = 'Tout';
    }
    else{
      s = sexe;
    }

    if(dateDeb == '' && dateFin == ''){
      datDeb = 'xxxx-xx-xx';
      datFin = 'xxxx-xx-xx';
    }
    else{
      datDeb = dateDeb;
      datFin = dateFin;
    }

    if(startDate == '' && endDate == ''){
      startD = 'xxxx-xx-xx';
      endD = 'xxxx-xx-xx';
    }
    else{
      startD = startDate;
      endD = endDate;
    }



    $('#textAgence').html('Agence:  '+  ag);   
    $('#textAdresse').html('Adresse:  '+  ad);  
    $('#textProfession').html('Proffession:  '+  pr);  
    $('#textNivEtude').html('Niveau étude:  '+  niv);  
    $('#textSexe').html('Sexe:  '+  s);  
    $('#textNais').html('Date de naissance entre '+  datDeb +' au '+datFin);  
    $('#textInscription').html('Date inscription entre '+  startD +' au '+endD);  

    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
 }

});

</script>