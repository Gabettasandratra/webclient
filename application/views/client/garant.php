<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Nouveau garant de crédit</h2>
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

      <br>
      <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6">
            <div class="col-12" style="text-align: right">
              <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
            </div>
        </div>

      </div>
      <hr>
      <br>
       <div class="alert alert-success" style="display: none;margin-bottom: 25px;text-align:center; ">

        </div>    

        <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

        </div>     

          <form id="myForm" action="" method="post">  
                <div class="form-row">
          
                  <div class="col-12 row">
                    <div class="col-4">
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
                          <label for="dateInscription" class="col-sm-4 col-form-label">Date inscription:</label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control form-control-sm col-8" id="dateInscription" name="dateInscription">
                          </div>
                      </div> 
                                             
                    </div>
                    <div class="col-4">

                      <div class="form-group row">
                        <label for="nomClient" class="col-sm-4 col-form-label">Nom:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control form-control-sm" id="nomClient" name="nomClient">
                        </div>
                      </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" name="estIndividuel" type="checkbox" value="1" id="estIndividuel">
                              <label class="custom-control-label" for="estIndividuel">
                                 Le Garant est aussi Client?
                              </label>
                            </div>
                        </div>

                      </div>  

                      <div class="col-4">
                        <div class="form-group row">
                          <label for="prenomClient" class="col-sm-4 col-form-label">Prenom:</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" id="prenomClient" name="prenomClient">
                          </div>
                        </div>

                      </div>  
                  </div>
              </div>

              <div class="card mt-3 tab-card">
                <div class="card-header tab-card-header">
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active"  id="one-tab" data-toggle="tab" href="#AffAddrs" role="tab" aria-controls="One" aria-selected="true">Addresse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#Affdonnes" role="tab" aria-controls="One" aria-selected="true">Données personnelles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#AffIdentification" role="tab" aria-controls="One" aria-selected="true">Identification</a>
                    </li>
                  </ul>
                </div>

                <div class="tab-content" id="myTabContent">

                  <div class="tab-pane fade show active p-3" id="AffAddrs" role="tabpanel" aria-labelledby="one-tab">
                      
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

                            <div class="form-group row">
                              <label for="distanceAgence" class="col-sm-4 col-form-label">Distance à l'agence:</label>
                              <div class="col-sm-3">
                               <input type="number" min="0" placeholder="Km" class="form-control form-control-sm" id="distanceAgence" name="distanceAgence"> 
                            </div>

                            </div>

                          </div>                      

                      </fieldset>     

                  </div>

                   <div class="tab-pane fade show p-3" id="Affdonnes" role="tabpanel" aria-labelledby="two-tab">
                         
                        <div class="row">

                          <div class="col-6">

                           <div class="form-group row">
                              <label for="dateNaissance" class="col-sm-4 col-form-label">Nais:</label>
                              <div class="col-sm-6">
                                <input type="date" class="form-control form-control-sm" id="dateNaissance" name="dateNaissance">
                                </div>
                            </div>

                              <div class="form-group row">
                                <label for="lieuNaissance" class="col-sm-4 col-form-label">Lieu:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-sm" id="lieuNaissance" name="lieuNaissance">
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
                                <label for="nomConjoint" class="col-sm-4 col-form-label">Nom conjointe:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-sm" id="nomConjoint" name="nomConjoint">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="profession" class="col-sm-4 col-form-label">Profession:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-sm" id="profession" name="profession">
                                </div>
                            </div>


                        </div>
                        <div class="col-6">

                            <div class="form-group row">
                                <label for="etatCivil" class="col-sm-4 col-form-label">Etat civil:</label>
                                <div class="col-sm-6">
                                   <select name="etatCivil" class="form-control form-control-sm" id="etatCivil">
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marié">Marié</option>
                                        <option value="Séparé">Séparé</option>
                                        <option value="Divorcé">Divorcé</option>
                                        <option value="Veuf">Veuf</option>
                                    </select>
                                </div>
                            </div>

                          <div class="form-group row">
                                <label for="langue" class="col-sm-4 col-form-label">Langue:</label>
                                <div class="col-sm-6">
                                   <select name="langue" class="form-control form-control-sm" id="langue">
                                        <option value="Malagasy">MALAGASY</option>
                                        <option value="Francais">FRANCAIS</option>
                                        <option value="Anglais">ANGLAIS</option>
                                    </select>
                                </div>
                            </div>
                           
                           <div class="form-group row">
                                <label for="nbEnfant" class="col-sm-4 col-form-label">Nb enfants:</label>
                                <div class="col-sm-3">
                                  <input type="number" min="0" max="14" class="form-control form-control-sm" id="nbEnfant" name="nbEnfant">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbPersCharge" class="col-sm-4 col-form-label">Nb personne charge:</label>
                                <div class="col-sm-3">
                                  <input type="number" min="0" max="20" class="form-control form-control-sm" id="nbPersCharge" name="nbPersCharge">
                                </div>
                            </div>


                          <div class="form-group row">
                            <label for="niveauEtude" class="col-sm-4 col-form-label">Education:</label>
                            <div class="col-sm-6">
                               <select name="niveauEtude" class="form-control form-control-sm" id="niveauEtude">
                                    <option >Accun</option>
                                    <option >Illetré</option>
                                    <option >Primaire</option>
                                    <option >Secondaire premier Cycle</option>
                                    <option >Secondaire premier Cycle</option>
                                    <option >Secondaire second Cycle</option>
                                    <option >Universitaire</option>
                                </select>
                                </div>
                            </div>

                          </div>                       
                      </div>
                    </div>


                   <div class="tab-pane fade show p-3" id="AffIdentification" role="tabpanel" aria-labelledby="three-tab">
                         
                      <div class="row">

                        <div class="col-6">

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Photo : </label>
                              <div class="custom-file col-sm-6">
                                <input type="file" name="photo" class="" id="customFile">
                              <!--   <label class="custom-file-label" for="customFile">Choose file</label> -->
                              </div>                               
                            </div> 

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Sexe:</label>
                              <!-- <div class="col-sm-6"></div> -->
                                  <div class="form-check form-check-inline" style="margin-left: 10px;">
                                    <input class="form-check-input" type="radio" name="sexe" id="masculin" value="masculin" checked>
                                    <label class="form-check-label" for="masculin">Masculin</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="feminin" value="feminin">
                                    <label class="form-check-label" for="feminin">Feminin</label>
                                  </div>                                
                            </div> 

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Titre:</label>
                              <!-- <div class="col-sm-6"></div> -->
                                  <div class="form-check form-check-inline" style="margin-left: 10px;">
                                    <input class="form-check-input" type="radio" name="titre" id="homme" value="Homme" checked>
                                    <label class="form-check-label" for="homme">Homme</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="titre" id="femme" value="Femme">
                                    <label class="form-check-label" for="femme">Femme</label>
                                  </div>                                
                            </div>
                      

                          <fieldset class="scheduler-border col-10"> 
                              <legend class="scheduler-border">Informations Parent</legend> 
                                      
                              <div class="form-group row">
                                <label for="parentNom" class="col-sm-4 col-form-label">Nom:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-sm" id="parentNom" name="parentNom" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="parentAdresse" class="col-sm-4 col-form-label">Adresse:</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-sm" id="parentAdresse" name="parentAdresse">
                                </div>
                              </div>

                          </fieldset> 
                        </div>
                        <div class="col-6">

                          <fieldset class="scheduler-border"> 
                              <legend class="scheduler-border">Information d'indentité</legend> 
                                          
                              <div class="form-group row">
                                  <label for="typedoc" class="col-sm-4 col-form-label">Type document:</label>
                                  <div class="col-sm-6">
                                     <select name="typedoc" class="form-control form-control-sm" id="typedoc">
                                          <option value=""></option>
                                          <option value="CIN">CIN</option>
                                          <option value="Passeport">Passeport</option>
                                      </select>
                                      </div>
                              </div>

                                <div class="form-group row">
                                  <label for="numero" class="col-sm-4 col-form-label">Numero:</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm" placeholder="520-014-123-562" id="numero" name="numero" >
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="dateEmis" class="col-sm-4 col-form-label">Date emis:</label>
                                  <div class="col-sm-6">
                                    <input type="date" class="form-control form-control-sm" id="dateEmis" name="dateEmis">
                                  </div>
                                </div>

                                <div id="affDateExpire" class="form-group row">
                                  <label for="dateExpire" class="col-sm-4 col-form-label">Date expire:</label>
                                  <div class="col-sm-6">
                                    <input type="date" class="form-control form-control-sm" id="dateExpire" name="dateExpire">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="delivrePar" class="col-sm-4 col-form-label">delivrer par:</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm" id="delivrePar" name="delivrePar">
                                  </div>
                                </div>

                                <div class="form-group row">
                                 <!--  <label for="priorite" class="col-sm-4 col-form-label">Priorité:</label> -->
                                  <div class="col-sm-2">
                                    <input type="hidden" max="1" min="0" class="form-control form-control-sm" id="priorite" name="priorite">
                                  </div>
                                </div>

                          </fieldset> 

                        </div>

                      </div>                

                  </div>

                </div>
              </div>
          </form>
              
      </div>
    </div>
  </div>
</div>
</div>
<!-- </div> -->

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



<script text="javascript">

$(function(){ 

$( "#dialog" ).dialog({
  autoOpen: true,
  width: 1400,
  height: 550,
  show: {
    effect: "bounce",
    duration: 2000,      
  },
  hide: {
    effect: "explode",
    duration: 1000
  }
});

today();
  function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateInscription').val(today);  
}

$('#btnSave').click(function(){

  var data = $('#myForm').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/saveGarant',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
              //alert(response);
              if (response.success) {
                console.log(response);
                  $.notify({            
                      message:'<span class="glyphicon glyphicon-ok"> Enregistrement reussit!!!'
                  },{
                      type: 'success',
                      animate: {
                          enter: 'animated fadeInDown',
                          exit: 'animated fadeOutUp'
                      }
                  });  
                   $('#myForm')[0].reset();
                }

            },
           error: function(response){
              $.notify({            
                  message:'<span class="glyphicon glyphicon-remove"> Erreur enregistrement'
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


    //CHOIX DU TYPE DOCUMENT
      $('#affDateExpire').attr('style', 'display : bloc;');

    /* $('#typedoc').change(function() {
        
        var str = "";
       
        var pass = new String('Passeport');
    
        $( "#typedoc option:selected" ).each(function() {
          str += $( this ).attr('value');
        });


        if(pass == str){
          $('#affDateExpire').attr('style', 'display : bloc;');  
                  
        }
        else{          
          $('#affDateExpire').attr('style', 'display : none;');
          $('input[name=dateExpire]').val('');
        }

  });
*/
});

</script>