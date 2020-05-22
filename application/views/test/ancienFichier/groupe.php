<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Gestion Client groupe</h2>
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


          <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

            </div>         

            <div class="row">
              <div class="col-6">
                    <h6 id="teteTable"></h6>
              </div>
              <div class="col-6"><!-- style="margin-right:15px;" -->
                    <button id="btnAdd" type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modalAdd"
                       style="float:right;"><i class="fa fa-plus-circle"></i> Nouveau groupe</button>
                 </div>
            </div>
            <hr>  
            <br>
            <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
        <div class="able-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
            <table class="table table-hover table-sm">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">#Code groupe</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Date inscription</th>
                  <th scope="col">email</th>
                  <th scope="col">Telephone</th>
                  <th scope="col" style="marging-left: 35px;"> Action</th>
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

<br>

<br>
<!-- <div id="modalGestGroupe" style="margin-top: 10px;display:none;">     
    <hr>
    <h6>Gestion groupe</h6> -->

<div class="modal fade" id="modalGestGroupe" tabindex="-1" role="dialog" aria-labelledby="Transfer" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gestion groupe</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         <div class="row">
        
          <div class="col-5">


            <form id="FormulaireConseil" action="" method="post" style="background-color: #A9A9A9;font-weight: bold;">
              <input type="hidden" id="numGrp" name="numGroupe" value=""/>
               <fieldset class="scheduler-border"> 
                  <legend class="scheduler-border" style="">Ajouter membres conseil</legend> 
                    
                    <div class="form-group row">
                      <label for="codeIndP" class="col-sm-6 col-form-label">Président:</label>
                          <div id="affP" class="col-sm-6">
                            <select name="codeIndP" class="form-control form-control-sm" id="codeIndP">
                              <option></option>
                             </select> 
                          </div>
                       </div>
                          

                    <div class="form-group row">
                      <label for="codeIndS" class="col-sm-6 col-form-label">Secrétaire:</label>
                          <div id="affS" class="col-sm-6">
                            <select name="codeIndS" class="form-control form-control-sm" id="codeIndS">
                               <option></option>
                             </select> 
                          </div>
                       </div>
                          

                    <div class="form-group row">
                      <label for="codeIndT" class="col-sm-6 col-form-label">Trésorier:</label>
                          <div id="affT" class="col-sm-6">
                            <select name="codeIndT" class="form-control form-control-sm" id="codeIndT">
                                <option></option>
                             </select> 
                          </div>
                       </div>                      

                    <button type="button" id="btnOK" class="btn btn-info col-sm-3"><i class="fa fa-save"></i> Enregistrer</button>
              
              </fieldset>
              
              </form>


              <fieldset class="scheduler-border"> 
                    <legend class="scheduler-border">Membres Conseil d'Administration</legend> 
                            
                      <div class="form-group row">
                        <label for="president" class="col-sm-2 col-form-label">Président(e):</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" value="" id="president" name="president" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="secretaire" class="col-sm-2 col-form-label">Secrétaire:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" value="" id="secretaire" name="secretaire" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tresorier" class="col-sm-2 col-form-label">Trésorier:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="tresorier" value="" name="tresorier" disabled>
                        </div>
                      </div>

                </fieldset> 

          </div>        
          
          <div class="col-7">


            <form id="myForm2" action="" method="post"  style="background-color: #A9A9A9;font-weight: bold;">
              <input type="hidden" id="nomGrp" name="nomGroupe" value=""/>
               <fieldset class="scheduler-border col-12"> 
                  <legend class="scheduler-border" style="">Ajouter membres</legend> 
                    
                    <div class="form-group row forms">
                         <label for="client" class="col-sm-2 col-form-label">Nom client:</label>
                          <div class="col-sm-4">
                          <select name="codeInd" class="form-control form-control-sm" id="codeInd">
                              <option>----Nom du client-----</option>
                              <?php foreach($listIndividuel->resultat as $vals) :?>
                                  <option value="<?php echo ($vals->codeInd); ?>"><?= $vals->nomClient ?> <?= $vals->prenomClient ?></option>
                              <?php endforeach; ?>
                          </select>
                          </div>
                          <div class="col-2">
                            <button type="button" id="btnValider" class="btn btn-info col-sm-12"><i class="fa fa-plus-circle"></i> Ajouter</button>
                          </div>
                       </div>
              
               </fieldset>          
              </form>
                <hr/>
                <br/>
                <table class="table table-sm table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#Code client</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Profession</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="showMembre">
                    
                  </tbody>
                </table>
                
                    
          </div>

      </div>
      </div>
     <div class="modal-footer">
        <button type="button" id="btnFerme" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close"></i> Fermer</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL DE TRANSFER MEMBRE DE GROUPE -->

<div class="modal fade" id="modalTransfer" tabindex="-1" role="dialog" aria-labelledby="Transfer" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Transfer">Transferer membre</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       
        <form id="formTransfer" action="" method="post">
          
          <div class="form-group">
          
            <input type="hidden" id="clientC" name="clientCode" value=""/>
                            
            <div class="form-group row">
               <label for="groupeDep" class="col-sm-3 col-form-label">Groupe départ:</label>
                  <div class="col-sm-6">
                  <select name="groupeDep" class="form-control form-control-sm" id="groupeDep">
                      <?php foreach($result->resultat as $values) :?>
                          <option value="<?php echo ($values->codeGrp); ?>"><?= $values->nomGroupe ?></option>
                      <?php endforeach; ?>
                  </select>
                  </div>
             </div>

          <div class="form-group row">
              <label for="client" class="col-sm-3 col-form-label">Nom:</label>
              <div class="col-sm-6">
                <input type="text" id="client" class="form-control" placeholder="" name="client" disabled/>
               </div>
            </div>
           
            <div class="form-group row">
             <label for="groupeDest" class="col-sm-3 col-form-label">Groupe destination:</label>
                  <div class="col-sm-6">
                  <select name="groupeDest" class="form-control form-control-sm" id="groupeDest">
                      <?php foreach($result->resultat as $values) :?>
                          <option value="<?php echo ($values->codeGrp); ?>"><?= $values->nomGroupe ?></option>
                      <?php endforeach; ?>
                  </select>
                  </div>
             </div>
    
           </div>
    
        </form>

      </div>
     <div class="modal-footer">
        <button type="button" id="btnFermeTranfer" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close"></i> Fermer</button>
        <button type="button" id="btnSaveTransfer" class="btn btn-primary"><i class="fa fa-download"></i> Transferer</button>
      </div>

    </div>
  </div>
</div>
    

    <!-- MODAL POUR AJOUTER OU MODIFIER UN GROUPE -->
      <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nouveau Groupe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                    <form id="myForm" action="" method="post">  
                        <div class="form-row">
                        
                            <div class="col-5">

                                    <div class="form-group row">
                                       <label for="agence" class="col-sm-4 col-form-label">Agence:</label>
                                       <div class="col-sm-6">
                                        <select name="agence" class="form-control form-control-sm" id="agence">
                                            <option value="HA">HARDI</option>
                                            <option value="FI">FIDEV</option>
                                        </select>
                                       </div>
                                    </div>

                                 <div class="form-group row">
                                    <label for="nomGroupe" class="col-sm-4 col-form-label">Nom groupe:</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-sm" id="nomGroupe" name="nomGroupe">
                                    </div>
                                  </div>
                                 
                                  <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email:</label>
                                    <div class="col-sm-6">
                                      <input type="email" class="form-control form-control-sm" id="email" name="email">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <label for="numeroMobile" class="col-sm-4 col-form-label">Tel:</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-sm" id="numeroMobile" name="numeroMobile">
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label for="numReference" class="col-sm-4 col-form-label">N° Réference:</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-sm" id="numReference" name="numReference">
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label for="NumStat" class="col-sm-4 col-form-label">N° Statistique:</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-sm" id="NumStat" name="NumStat">
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label for="dateInscription" class="col-sm-4 col-form-label">Date inscription:</label>
                                    <div class="col-sm-6">
                                      <input type="date" class="form-control form-control-sm col-8" id="dateInscription" name="dateInscription">
                                    </div>
                                </div>

                            
                            </div>

                            <div class="col-6">

                                <fieldset class="scheduler-border"> 
                                    <legend class="scheduler-border">Informations d'adresse</legend> 
                                            
                                      <div class="form-group row">
                                        <label for="adressePhysique" class="col-sm-4 col-form-label">Adresse:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="adressePhysique" name="adressePhysique" >
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="adresseCommune" class="col-sm-4 col-form-label">Commune:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="adresseCommune" name="adresseCommune" >
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="adresseDistrict" class="col-sm-4 col-form-label">District:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="adresseDistrict" name="adresseDistrict">
                                        </div>
                                      </div> 

                                      <div class="form-group row">
                                        <label for="adresseRegion" class="col-sm-4 col-form-label">Region:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="adresseRegion" name="adresseRegion" >
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="adresseVille" class="col-sm-4 col-form-label">Ville:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="adresseVille" name="adresseVille">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="codeRegion" class="col-sm-4 col-form-label">Code region:</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="codeRegion" name="codeRegion">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="distanceAgence" class="col-sm-4 col-form-label">Distance agence:</label>
                                        <div class="col-sm-3">
                                          <input type="number" min="0" class="form-control form-control-sm" id="distanceAgence" name="distanceAgence">
                                        </div>
                                      </div>

                                </fieldset> 

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


  today();
  function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateInscription').val(today);  
}

   $( "#content" ).dialog({
      autoOpen: true,
      width: 1400,
      height: 500,
      show: {
        effect: "fold",
        duration: 1000,      
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });

    //FONCTION QUI AFFICHE TOUT GROUPES

    allGroupe();

    function allGroupe(){
        $.ajax({
              type:'ajax',
              method: "get",
              url: '<?php echo base_url();?>index.php/chargeGroupe',
              dataType: 'json',
              async: false,
              success: function(data){
                var i;
                var c = data;
                var html;

                   if(data.length != null){
                        for (i = 0; i < c.length; i++) {
                            html += '<tr>' +
                            '<td>' + c[i].codeGrp + '</td>' +
                            '<td>' + c[i].nomGroupe + '</td>' +
                            '<td>' + c[i].dateInscription + '</td>' +
                            '<td>' + c[i].email + '</td>' +
                            '<td>' + c[i].numeroMobile + '</td>' +
                            '<td>' +
                            '<a href="#modalGestGroupe" class="btn btn-success btn-sm item-gerer" variables="'+ c[i].codeGrp +'" data="'+ c[i].nomGroupe+'" role="button"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;'+
                            '<a href="javascript:;" class="btn btn-primary btn-sm item-edit" role="button"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;'+
                            '<a href="javascript:;" class="btn btn-danger btn-sm item-delete" role="button"><i class="fa fa-trash-alt"></i></a>'+
                            '</td>' +
                            '</tr>';
                        }

                    }else{

                      html += '<tr>' +
                            '<td>' + c.codeGrp + '</td>' +
                            '<td>' + c.nomGroupe + '</td>' +
                            '<td>' + c.dateInscription + '</td>' +
                            '<td>' + c.email + '</td>' +
                            '<td>' + c.numeroMobile + '</td>' +
                            '<td>' +
                            '<a href="#modalGestGroupe" class="btn btn-success btn-sm item-gerer" variables="'+ c.codeGrp +'" data="'+ c.nomGroupe+'" role="button"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;'+
                            '<a href="javascript:;" class="btn btn-primary btn-sm item-edit" role="button"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;'+
                            '<a href="javascript:;" class="btn btn-danger btn-sm item-delete" role="button"><i class="fa fa-trash-alt"></i></a>'+
                            '</td>' +
                            '</tr>';
                      
                    }
                  $('#showdata').html(html);
                  $('#teteTable').html('Total groupe : '+ c.length);


              },
               error: function(){
                var  html;
                 html += '<tr class="borderless">' +
                    '<td style="text-aling: center;font-size:1.5em" colspan=6 > No data find </td>' +
                   '</tr>';
               $('#showdata').html(html);
              
                 $.notify({            
                    message: 'Auccun groupe trouver!!!'
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


/*POUR AFFICHER LE MODAL GESTION GROUPE*/
$('#showdata').on('click','.item-gerer', function(){
  var data = $(this).attr('data');
  var data2 = $(this).attr('variables');

  //$('#modalGestGroupe').attr('style: display:bloc;');
  $('#modalGestGroupe').modal('show');
  $('#modalGestGroupe').find('.modal-title').text('Gestion du groupe : '+ data );
  $('#myForm2').attr('action','<?php echo base_url(); ?>index.php/addMembreGroupe');
  $('#nomGrp').attr('value', data);
  
  $('#FormulaireConseil').attr('action','<?php echo base_url(); ?>index.php/addConseilGroupe');
  $('#numGrp').attr('value', data2);



  //AJAX POUR AFFICHER LES MEMBRES DE GROUPE SELECTIONNER
   affMembreGroupe(data);

   //AJAX POUR AFFICHER LES CONSEILS DU GROUPE SELECTIONNER
   afficheConseils(data2);
    
  $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/afficheMembreGroupe',
      dataType: 'json',
      data:{nomGroupe: data},
      async: false,
      success: function(data){
            var html;
            var s;
            var t;
            var i;
            var code;
             if(data){
                var c = data;
              html += '<option></option>';              
              s +=  '<option></option>';              
              t += '<option></option>';
             
                for (i = 0; i < c.length; i++) {
                code = c[i].codeInd;                 
                      html+='<option value"'+code+'">'+c[i].codeInd+'</option>';      
                      s+='<option value"'+code+'">'+c[i].codeInd+'</option>';                  
                      t+='<option value"'+code+'">'+c[i].codeInd+'</option>';                  
                  }
                 
                  $('#codeIndP').html(html);            
                  $('#codeIndS').html(s);           
                  $('#codeIndT').html(t);           
                }     
          },
          error: function(){
          }

      });

});


//CLICK SUR LE BOUTTOUN NOUVEAU GROUPE
$('#btnAdd').click(function(){
    $('#myForm').attr('action','<?php echo base_url(); ?>index.php/saveGroupe');

});

//ENREGISTREMENT NOUVEAU GROUPE

$('#btnSave').click(function(){

	var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();

    	$.ajax({
            type:'ajax',
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                 
                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    allGroupe();

               $.notify({            
                    message: '<span class="glyphicon glyphicon-ok"> Enregistrement reusiit!!!!'
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
                      message: 'Erreur'
                  },{
                      type: 'warning',
                      animate: {
                          enter: 'animated fadeInDown',
                          exit: 'animated fadeOutUp'
                      }
                  });
                }
            },
            error: function(){
                $.notify({            
                    message: '<span class="glyphicon glyphicon-remove"> Erreur enregistrement'
                },{
                    type: 'danger',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });
            }
        });

});

//TRANSFERER MEMBRE

$('#showMembre').on('click','.item-transfer', function(){
    var data = $(this).attr('data');
    var nom = $(this).attr('variable');
   
    $('#modalGestGroupe').dialog('close');
    $('#modalTransfer').modal('show');
    $('#formTransfer').attr('action','<?php echo base_url(); ?>index.php/transferMembre');
   
    $('#clientC').attr('value', data);
    $('#client').attr('placeholder', nom);



});

//ENREGISTREMENT TRANSFER

$('#btnSaveTransfer').click(function(){

    var url =  $('#formTransfer').attr('action');
    var data =  $('#formTransfer').serialize();

    $.ajax({
            type:'ajax',
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response) {
                  $('#modalGestGroupe').dialog('open');
                  $('#modalTransfer').modal('hide');
                  /*$('#modalGestGroupe').find('.modal-title').text('Gestion du groupe : '+ response );
                  $('#myForm2').attr('action','<?php echo base_url(); ?>index.php/addMembreGroupe');
                  $('#nomGrp').attr('value', data);*/
                  affMembreGroupe(response);
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
                alert('pas de donnée');
            }
        });    

});

//FERMER MODAL TRANSFER

$('#btnFermeTranfer').click(function(){

     $('#modalTransfer').modal('hide');
     $('#modalGestGroupe').dialog('open');

});

//AJOUTER CONSEILS

$('#btnOK').click(function(){
  var url = $('#FormulaireConseil').attr('action');
  var data = $('#FormulaireConseil').serialize();

  var num = $('#numGrp').attr('value');

    $.ajax({
      type:'ajax',
      method: "post",
      url: url,
      dataType: 'json',
      data:data,
      async: false,
      success: function(response){
            if (response.success == true) {
              alert('Enregistrement reusiit!!!');
              afficheConseils(num);
            }
           
          },
          error: function(){
          }

      });


});


//FONCTION AFFICHE CONSEIL

function afficheConseils(numGroupe){

 $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/afficheConseilGroupe',
      dataType: 'json',
      data:{codeGroupe: numGroupe},
      async: false,
      success: function(data){
        if (data.erreur) {

        }else{

          $('input[name=president]').val(data.president);
          $('input[name=secretaire]').val(data.secretaire);
          $('input[name=tresorier]').val(data.tresorier);
        }
      },
      error: function(){
        alert('Accun Membres trouver!');
       
      }

  });


}

//FONCTION APPELER POUR AFFICHER LES MEMBRE DE GROUPE
function affMembreGroupe(data1){
      $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/afficheMembreGroupe',
      dataType: 'json',
      data:{nomGroupe: data1},
      async: false,
      success: function(data){
            var html = '';
            var i;
                if(data.erreur){
                    alert('Accun Membres trouver!');
                     $('#showMembre').html('Accun membres trouver');
                }
                else if(data){
                  var c = data;
                  var html;
                  console.log(data);
                  if(c.length == null){
                    html += '<tr>' +
                        '<td>' + c.codeInd + '</td>' +
                        '<td>' + c.nomClient + '</td>' +
                        '<td>' + c.prenomClient + '</td>' +
                        '<td>' + c.profession + '</td>' +
                        '<td>' +
                        '<a href="javascript:;" class="btn btn-success btn-sm item-transfer" variable="'+c.codeInd+' '+ c.prenomClient + '" data="'+ c.codeInd+'">Transférer</a>' +
                        '</td>' +
                        '</tr>';
                  }else{

                    for (i = 0; i < c.length; i++) {
                        html += '<tr>' +
                        '<td>' + c[i].codeInd + '</td>' +
                        '<td>' + c[i].nomClient + '</td>' +
                        '<td>' + c[i].prenomClient + '</td>' +
                        '<td>' + c[i].profession + '</td>' +
                        '<td>' +
                        '<a href="javascript:;" class="btn btn-success btn-sm item-transfer" variable="'+c[i].nomClient+' '+ c[i].prenomClient + '" data="'+ c[i].codeInd+'">Transférer</a>' +
                        '</td>' +
                        '</tr>';
                    }
                  }             
                    $('#showMembre').html(html);
                }
                else
                {
                    alert('Accun Membres trouver!');
                }
            $('#showMembre').html(html);
      },
      error: function(){
        //alert('Accun Membres trouver!');
        var htm;
            htm += '<div alling="center">'+
            'Accun membres trouver'+'</div>';
        $('#showMembre').html(htm);
      }

  });
}

//AJOUTER MEMBRE GROUPE
$('#btnValider').click(function(){
    var donne = $('#nomGrp').attr('value');
    var url = $('#myForm2').attr('action');
    var data = $('#myForm2').serialize();

        $.ajax({
            type:'ajax',
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    affMembreGroupe(donne);
                }
                else if(response.erreur){
                    alert('Erreur');
                }
            },
            error: function(){
                alert('pas de donnée');
            }
        });

});




});

</script>