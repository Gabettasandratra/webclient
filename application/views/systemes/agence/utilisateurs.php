
<!-- Page content -->
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Gestion utilisateurs</h2>
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

 
        <!-- <div class="card-header col-8 place">
          <h5 align="center" class="titre">Gestion utilisateurs</h5>
        </div>
        <br> -->
          <div class="row">
            <div class="col-6">
                  <h6 id="teteTa">&nbsp;</h6>
            </div>
            <div class="col-6"><!-- style="margin-right:15px;" -->
                  <button id="btnAdd" type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modalAdd"
                     style="float:right;"><i class="fa fa-plus-circle"></i> Nouveau utilisateur</button>
               </div>
          </div>
        <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div>  
          <hr>
          <br>
               <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
            <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
              <table id="tab" class="display table table-fixed table-striped table-hover table-sm">
                 <!-- <legende>Rapport des comptes</legende> -->
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#Id</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Login</th>
                      <th scope="col">Genre</th>
                      <th scope="col">Télephone</th>
                      <th scope="col">Fonction</th>
                      <th scope="col" colspan=2>Action</th>
                    </tr>
                  </thead>
                  <tbody id="showUser">

                  </tbody>
                </table>
              </div>
         <br/>
      </div>
    </div>
  </div>
</div>


<!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">

          <div class="alert alert-danger aleModal" style="display: none;margin-bottom: 25px;text-align:center; ">

          </div>           
          <div class="form-group row">
            <label for="nom" class="col-form-label col-sm-4">Nom utilisateur: <span id="champObligatoir">*</span></label>
            <div class="col-sm-8">
               <input type="text" class="form-control form-control-sm col-10" name="nom" placeholder="ex: Randria" id="nom" required="required">
            </div>
           </div>

           <div class="form-group row">
              <label for="identifiant" class="col-form-label col-sm-4">Identification: <span id="champObligatoir">*</span></label>
              <div class="col-sm-8">
                   <input type="text" class="form-control form-control-sm col-10" name="identifiant" placeholder="ex: Rakotoson" id="identifiant" required="required">
              </div>
            </div>

           <div class="form-group row">
              <label for="mdp" class="col-form-label col-sm-4">Mot de passe: <span id="champObligatoir">*</span></label>
              <div class="col-sm-8">
                   <input type="password" class="form-control form-control-sm col-10" name="mdp" id="mdp" required="required">
              </div>
            </div>

           <div class="form-group row">
              <label for="mdp2" class="col-form-label col-sm-4">Confirmer Mot de passe: <span id="champObligatoir">*</span></label>
              <div class="col-sm-8">
                   <input type="password" class="form-control form-control-sm col-10" name="mdp2" id="mdp2" required="required">
              </div>
            </div>

           <div class="form-group row">
              <label for="photo" class="col-form-label col-sm-4">Photo: <span id="champObligatoir">*</span></label>
              <div class="col-sm-8">
                   <input type="file" class="form-control form-control-sm col-10" name="photo" id="photo" size="33">
              </div>
            </div>


             <div class="form-group row">
              <label for="tel" class="col-form-label col-sm-4">Télephone: <span id="champObligatoir">*</span></label>
              <div class="col-sm-8">
                   <input type="text" class="form-control form-control-sm col-10" name="tel" id="tel" required="required">
              </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-4" for="agence">Genre:</label>
                <div class="col-sm-6">
                    <select name="genre" class="form-control form-control-sm col-8" id="genre">
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Féminin</option>
                    </select>
                 </div>
              </div>  

              <div class="form-group row">
                  <label class="col-sm-4" for="fonction">Fonction: </label>
                  <div class="col-sm-6">
                      <select name="fonction" class="form-control form-control-sm col-8" id="fonction">
                           <?php foreach($fonc->resultat as $vals) :?>
                              <option value="<?= $vals->idFonction ?>"><?= $vals->libelleFonction ?></option>
                          <?php endforeach; ?>
                      </select>
                   </div>
              </div>  
        
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
        <button type="button" id="btnSave" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL SUPPRESSION-->
<div class="modal fade" id="modalSup" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="margin-top: 100px;">
  <div class="modal-content">
    <div class="modal-header">Suppression utilisateur</div>
    <div class="modal-body" id="bodyInfo">             
        <input type="hidden" name="idUser" id="idUser"/>
        <h6 id="infos"></h6>
    </div>
    <div class="modal-footer">
      <button id="btn-accept" type="button" class="btn btn-sm btn-success">Oui</button>
      <button id="btn-refuse" type="button" class="btn btn-sm btn-secondary">Non</button>
    </div>
  </div>
</div>
</div>

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

<script>
$(function(){ 

  //Configuration tableau
  load_user();    

//FONCTION CHARGE LES LISTES DES PRODUIT
function load_user(){

     $.ajax({
            type:'ajax',
            method:"get",
            url:"<?php echo base_url();?>index.php/chargeUser",
            dataType:"json",
            async: false,
            success:function(data){
                if(data){
                    var c = data;
                    var html;

                    for (i = 0; i < c.length; i++) {
                        
                        var j = i+1 ;

                        html += '<tr>' +
                        '<td>' + j + '</td>' +
                        '<td>' + c[i].nomUtilisateur + '</td>' +
                        '<td>' + c[i].loginUtilisateur + '</td>' +
                        '<td>' + c[i].genreUser + '</td>' +
                        '<td>' + c[i].telUser + '</td>' +
                        '<td>' + c[i].fonction.libelleFonction + '</td>' +
                        '<td>' +
                        '<a href="#" class="btn btn-info btn-sm item-edit" data="'+c[i].idUtilisateur+'" role="button"><i class="fa fa-edit"></i></a>' +
                        '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger btn-sm item-delete" noms="'+c[i].nomUtilisateur+'" data="'+c[i].idUtilisateur+'"><i class="fa fa-trash-alt"></i></a>' +
                        '</td>' +
                        '</tr>';
                    }

                    //var a=etudiant_table.num_matricule;
                    $('#showUser').html(html);
                    $('#teteTable').html('Effectif utilisateus: '+ c.length);

                }
                //$('#pagination_link').html(data.pagination_link);
            }
        });
}

//Supprimer un produit

$('#btn-accept').click(function(){
    var id = $('input[name=idUser]').val();

     $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/deleteUser",
        dataType:"json",
        data: {id: id},
        async: false,
        success:function(data){
           if(data.success){
            $.notify({            
                  message: '<span class="glyphicon glyphicon-ok"> Utilisateur supprimé avec success!'
              },{
                  type: 'success',
                  animate: {
                      enter: 'animated fadeInDown',
                      exit: 'animated fadeOutUp'
                  }
              });

            //alert('Utilisateur supprimer avec success!')
             $('#modalSup').modal('hide');
             load_user();
           }
        }
    });
});

$('#btn-refuse').click(function(){
    $('#modalSup').modal('hide');
});

$('#showUser').on('click','.item-delete', function(){ 
  var id = $(this).attr('data');
  var nom = $(this).attr('noms');

  $('#modalSup').modal('show');

  $('input[name=idUser]').val(id);

  $('#infos').html('Voulez vous vraiment supprimer l\'utilisateur '+nom+' ?');
});

/*//AJOUTER NOUVEAU PRODUIT
$('#btnAdd').click(function(){
    $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ajoutProduit');

});*/

    $('#btnSave').click(function(){

    	//var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();

        //Verification des saisie

        var nom =  $('input[name=nom]');
        var pseudo =  $('input[name=identifiant]');
        var mdp =  $('input[name=mdp]');
        var mdp2 =  $('input[name=mdp2]');
        var tel =  $('input[name=tel]');

        var result = '';

       	if(nom.val()==''){
           $('#nom').addClass('is-invalid');
        }
        else{
            $('#nom').removeClass('is-invalid');
            result +='1';
        }

        if(pseudo.val()==''){
            $('#identifiant').addClass('is-invalid');
        }
        else{
            $('#identifiant').removeClass('is-invalid');
            result +='2';
        }

        if(mdp.val()==''){
            $('#mdp').addClass('is-invalid');
        }
        else{
            $('#mdp').removeClass('is-invalid');
            result +='3';
        }

        if(mdp2.val()==''){
            $('#mdp2').addClass('is-invalid');
        }
        else{
            $('#mdp2').removeClass('is-invalid');
            result +='4';
        }

        if(tel.val()==''){
            $('#tel').addClass('is-invalid');
        }
        else{
            $('#tel').removeClass('is-invalid');
            result +='5';
        }

        if(result=='12345'){

          if(mdp.val() == mdp2.val()){
            $('#mdp2').removeClass('is-invalid');
            save(data);
          }else{
             $('#mdp2').addClass('is-invalid');
             $('.aleModal').html('<span class="glyphicon glyphicon-remove">'+'</span>'+'&nbsp;'+'Confirmation mot de passe incorrect!').
          fadeIn().delay(4000).fadeOut('slow');
          }
        	
        }else{
          $('.aleModal').html('<span class="glyphicon glyphicon-remove">'+'</span>'+'&nbsp;'+'Veuillez remplir les champs obligatoire!').
          fadeIn().delay(4000).fadeOut('slow');
        }

    });
  
    //Fonction qui enregistre les informations des clients
    function save(data){
        
        $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/saveUser',
            dataType:'json',
            cache: false,
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Ajouter';
                    }
                    else if(response.type == 'up')
                    {
                        var type = 'Modifer';
                    }
                    else if(response.existe)
                    {
                        alert('Cet est déja exist');
                    }
                     $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> Utilisateur enregistré avec success!'
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });

                    //alert('Utilisateur enregistré avec success');
                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    load_user();
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
              $('.aleModal').html('<span class="glyphicon glyphicon-remove">'+'</span>'+'&nbsp;'+'Erreur enregistrement!')
              .fadeIn().delay(5000).fadeOut('slow');
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
});

</script>