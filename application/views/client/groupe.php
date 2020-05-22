<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" >
    <div class="x_title">
      <h2>Nouveau Client groupe</h2>
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
            <h6>Total membres: <i class="fa fa-users"></i> <span id="tot" class="badge bg-red">0</span></h6>
          </div>
          <div class="col-6">
              <div class="col-12" style="text-align: right">
                <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
              </div>
          </div>

        </div>
        <hr>
        <br>
        <form id="myForm" action="" method="post">  
          <div class="form-row">
          
              <div class="col-6">

                      <div class="form-group row">
                         <label for="agence" class="col-sm-4 col-form-label">Agence: <span id="champObligatoir">*</span></label>
                         <div class="col-sm-6">
                          <select name="agence" class="form-control form-control-sm" id="agence">
                              <option value="HA">HARDI</option>
                              <option value="FI">FIDEV</option>
                          </select>
                         </div>
                      </div>

                   <div class="form-group row">
                      <label for="nomGroupe" class="col-sm-4 col-form-label">Nom groupe: <span id="champObligatoir">*</span></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="nomGroupe" name="nomGroupe">
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <label for="email" class="col-sm-4 col-form-label">Email: <span id="champObligatoir">*</span></label>
                      <div class="col-sm-6">
                        <input type="email" class="form-control form-control-sm" id="email" name="email">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="numeroMobile" class="col-sm-4 col-form-label">Tel: <span id="champObligatoir">*</span></label>
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
                      <label for="distanceAgence" class="col-sm-4 col-form-label">Distance agence: <span id="champObligatoir">*</span></label>
                      <div class="col-sm-6">
                        <input type="number" min="0" placeholder="Km" class="form-control form-control-sm col-4" id="distanceAgence" name="distanceAgence"> 
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dateInscription" class="col-sm-4 col-form-label">Date inscription: <span id="champObligatoir">*</span></label>
                      <div class="col-sm-6">
                        <input type="date" class="form-control form-control-sm col-6" id="dateInscription" name="dateInscription">
                      </div>
                  </div>

              
              </div>

              <div class="col-6">
                <legend class="scheduler-border">Ajouter Membre groupe</legend> 
                <hr>
                <div class="form-group row">
                     <label for="client" class="col-sm-4 col-form-label">Nom client:</label>
                      <div class="col-sm-6">
                        <select name="codeInd" class="form-control form-control-sm" id="codeInd">
                            <option value=""></option>
                            <?php foreach($listIndividuel->resultat as $vals) :?>
                                <option value="<?php echo ($vals->codeInd); ?>"><?= $vals->codeInd ?> | <?= $vals->nomClient ?> <?= $vals->prenomClient ?></option>
                            <?php endforeach; ?>
                        </select>
                      </div>                     
                </div>   

                <div class="form-group row">
                     <label for="addrClient" class="col-sm-4 col-form-label">Adresse client:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm col-12" id="addrClient" name="addrClient" disabled>
                      </div>                     
                </div>

                <div class="form-group row">
                   <label for="fonction" class="col-sm-4 col-form-label">Fonction:</label>
                    <div class="col-sm-6">
                      <select name="fonction" class="form-control form-control-sm" id="fonction">
                          <option value=""></option>
                           <?php foreach($fonction->resultat as $f) :?>
                                <option value="<?php echo ($f->nomFonction); ?>"><?= $f->nomFonction ?></option>
                            <?php endforeach; ?>
                      </select>
                    </div>                     
                </div>   

                <div class="row">
                  <div class="col-4">&nbsp;</div>
                  <div class="col-6">
                    <button type="button" style="float:right;" id="btnValider" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</button>
                  </div>
                </div>

              </div>

          </div>

          <hr>
          <br>
          <fieldset class="scheduler-border"> 
              <legend class="scheduler-border">Informations d'adresse</legend> 
              
              <div class="row">
                <div class="col-6">

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

                </div>
                <div class="col-6">

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
                </div>
              </div>             
          </fieldset> 
      </form>    


    </div>
  </div>
</div>
</div>
</div>

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
                            <button type="button" id="" class="btn btn-info col-sm-12"><i class="fa fa-plus-circle"></i> Ajouter</button>
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

  //Ajout membres groupe
   var codeInd = '';
   var fonction = '';   

    $('#codeInd').change(function() {  
      $( "#codeInd option:selected" ).each(function() {
          codeInd = $( this ).attr('value');
        }); 
        if(codeInd == ''){
          $('input[name=addrClient]').val('');
        }else{
          getClient(codeInd);
          if(fonction == 'Président'){
            getDetailClient(codeInd);
          }else{
           /* $('input[name=adressePhysique]').val('');
            $('input[name=adresseCommune]').val('');
            $('input[name=adresseDistrict]').val('');
            $('input[name=adresseRegion]').val('');
            $('input[name=adresseVille]').val('');
            $('input[name=codeRegion]').val('');*/
          }
        }
    }); 



    $('#fonction').change(function() {  
      $( "#fonction option:selected" ).each(function() {
          fonction = $( this ).attr('value');
        }); 
      if(fonction == 'Président'){
        if(codeInd != ''){
          getDetailClient(codeInd);
        }
      }else{
       /* $('input[name=adressePhysique]').val('');
        $('input[name=adresseCommune]').val('');
        $('input[name=adresseDistrict]').val('');
        $('input[name=adresseRegion]').val('');
        $('input[name=adresseVille]').val('');
        $('input[name=codeRegion]').val('');*/
      }
    });

    //Affiche détail client
    function getClient(id){
       $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url(); ?>index.php/getOneIndividuel',
        dataType:'json',
        data: {id: id},
        async: false,
        success: function(response) {
            //alert(response);
            var c = response.result;
            if (response.result) {
                $('input[name=addrClient]').val(c.adresse.adressePhysique +' '+c.adresse.adresseCommune);
            }
            else if(response.erreur){
                alert('Erreur');
            }
        },
        error: function(){
            alert('Erreur');
        }
      });
    }


    //Affiche détail client
    function getDetailClient(id){
       $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url(); ?>index.php/getOneIndividuel',
        dataType:'json',
        data: {id: id},
        async: false,
        success: function(response) {
            //alert(response);
            var c = response.result;
            if (response.result) {
                $('input[name=adressePhysique]').val(c.adresse.adressePhysique);
                $('input[name=adresseCommune]').val(c.adresse.adresseCommune);
                $('input[name=adresseDistrict]').val(c.adresse.adresseDistrict);
                $('input[name=adresseRegion]').val(c.adresse.adresseRegion);
                $('input[name=adresseVille]').val(c.adresse.adresseVille);
                $('input[name=codeRegion]').val(c.adresse.codeRegion);
            }
            else if(response.erreur){
                alert('Erreur');
            }
        },
        error: function(){
            alert('Erreur');
        }
      });
    }

    //AJOUTER MEMBRE GROUPE
    $('#btnValider').click(function(){
        var data = $('#myForm').serialize();

            $.ajax({
                type:'ajax',
                method: "post",
                url:'<?php echo base_url(); ?>index.php/saveMembreGroupe',
                dataType:'json',
                data: data,
                async: false,
                success: function(response) {
                    //alert(response);
                    if (response.success) {

                      if(response.result=="Membre ajouté!!!")
                      {
                        $('#fonction').val("");
                        $.notify({            
                            message: '<span class="glyphicon glyphicon-ok">'+response.result
                        },{
                            type: 'success',
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            }
                        }); 
                        countMembre();                        
                      }else{
                         $.notify({            
                            message: '<span class="glyphicon glyphicon-delete">'+response.result
                        },{
                            type: 'danger',
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            }
                        }); 
                      }

                    }
                },
                error: function(){
                    alert('Erreur');
                }
            });

    });

    function countMembre(){
       $.ajax({
            type:'ajax',
            method: "get",
            url:'<?php echo base_url(); ?>index.php/countMembreView',
            dataType:'json',
            async: false,
            success: function(response) {
              var d = '1';
              if(response == null){
                $('#tot').removeClass('bg-red');
                $('#tot').addClass('bg-green');
                $('#tot').html(d);
              }else{
                $('#tot').removeClass('bg-red');
                $('#tot').addClass('bg-green');
                $('#tot').html(response.length);
              }
            },
            error: function(){
                alert('Erreur');
            }
        });

    }
     viderMembreView();
    function viderMembreView(){
       $.ajax({
            type:'ajax',
            method: "get",
            url:'<?php echo base_url(); ?>index.php/viderMembreView',
            dataType:'json',
            async: false,
            success: function(response) {
              if(response.success){
                $('#tot').removeClass('bg-green');
                $('#tot').addClass('bg-red');
                $('#tot').html('0');
              }
            },
            error: function(){
                alert('Erreur');
            }
        });

    }


    //ENREGISTREMENT NOUVEAU GROUPE

$('#btnSave').click(function(){

  //var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/saveGroupe',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    $('#myForm')[0].reset();
                    //allGroupe();                    
                    viderMembreView();
                    countMembre();
                     $.notify({            
                          message: '<span class="glyphicon glyphicon-ok"> Enregistrement reusit!!!!'
                      },{
                          type: 'success',
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

 
});

</script>