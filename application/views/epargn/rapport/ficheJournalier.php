<div class="right_col" role="main">
 <div id="impre" style="display:none;margin-top:2%" class="col-md-12 col-sm-12">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Fiche journalière épargne</h2>
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
                    <th scope="col">N° Compte &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nom</th>
                    <th scope="col" style="text-align: center;">Cash</th>
                    <th scope="col" style="text-align: center;">Chèque</th>
                    <th scope="col" style="text-align: center;">Transfers d'épargne</th>
                    <th scope="col" style="text-align: center;">Totaux</th>
                  </tr>
                </thead>
                <tbody id="showdata">

              </tbody>
               <tfoot id="showFoot" style="display: none;font-weight: bold;padding-top: 80px; ">         
                 <tr>
                  <td>Totaux mouvement</td>
                  <td id="totalCash" style="text-align: right;"></td>
                  <td id="totalBanque" style="text-align: right;"></td>
                  <td id="totalTrans" style="text-align: right;"></td>
                  <td id="total" style="text-align: right;"></td>
                 </tr>
              </tfoot> 
            </table>
        </div>

    </div>
  </div>
 </div>
</div>


<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Rapport sur intérêt d'épargne</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
            <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

            </div>   
                 <form id="myForm" action="" method="post">           
                    <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
                     <div class="control-group"> 
                       
                         <div id="affdate" class="form-group row">  
                           <label class="col-sm-4" for="dateDeb">
                                 Date: <span id="champObligatoir">*</span> </label>                                      
                             <div class=" col-sm-7">
                               <input type="date" name="dateDeb" class="form-control form-control-sm col-10" id="dateDeb">
                             </div>                   
                         </div>                         
                         <!--  <div class="form-group">
                            <div style="float: right;">
                              <button id="btnAff" type="button" class="btn btn-sm btn-info"><i class="fa fa-clipboard-list"></i> Afficher</button>
                              </div>
                          </div>    -->

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

    today();
    function today(){
      var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);

      var today =  now.getFullYear()+"-"+(month)+"-"+(day);

      $('#dateDeb').val(today);  
    }

    $('#modalAdd').modal('show');
    $('#change').click(function(){
       $('#modalAdd').modal('show');
       $('#impre').attr('style','display:none');
    });

    $('#fermerModal').click(function(){
      $('#modalAdd').modal('hide');
    });

    $('#btnAff').click(function(){

         var data = $('#myForm').serialize();

         var dates = $('input[name=dateDeb]');

         var ok = '';

        if(dates.val() == ''){
          $('#dateDeb').addClass('is-invalid');
        }else{
          $('#dateDeb').removeClass('is-invalid');
          ok +='1';
        }

        if(ok == '1'){
            $.ajax({
                  type:'ajax',
                  method: "post",
                  url: '<?php echo base_url();?>index.php/getFicherJournalier',
                  dataType:'json',
                  data: data,
                  async: false,
                  success: function(response) {
                      //alert(response);
                      if (response != null) {
                        var i;              
                        var c = response;
                        var html;
                        var nom; 
                        var depot = '0';
                        var retrait = '0';
                        var depBanqu = '0';
                        var retraitBanqu = '0';
                        var depTrans='0';
                        var retraitTrans='0';

                        var totDeb = 0.0;
                        var totCred = 0.0;

                        var totalDebit=0.0;
                        var totalCredit=0.0;
                        var totalDebCash = 0.0;
                        var totalCredCash = 0.0;
                        var totalDebBanque = 0.0;
                        var totalCredBanque = 0.0;
                        var totalDebTrans = 0.0;
                        var totalCredTrans = 0.0;

                        html += '<tr class="bg-light" style="margin-bottom:5%;font-weight: bold;">' +
                              '<td> Code agence HA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>' +

                              '<td style="text-align: right;"> Débit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              'Crédit </td>' + 

                              '<td style="text-align: right;"> Débit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                             ' Crédit</td>' +

                              '<td style="text-align: right;">Débit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              'Crédit </td>' +

                              '<td style="text-align: right;">Débit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              'Crédit </td>' +                                 
                              '</tr>'+
                              '<tr>' +
                              '<td></td>' +
                              '</tr>'+
                              '<tr>' +
                              '<td></td>' +
                              '</tr>';

                        if(c.length == null){

                            if(c.compteEpargne.groupe != null){
                                nom = c.compteEpargne.groupe.nomGroupe;
                              }else if(c.compteEpargne.individuel != null){
                                nom = c.compteEpargne.individuel.nomClient +' '+ c.compteEpargne.individuel.prenomClient;
                              }

                              if(c.typePaie =='cash'){

                                if(c.typeTransEp == 'DE'){
                                    depot = c.montant;
                                    //retrait = '0.0';

                                }
                                else if(c.typeTransEp == 'RE'){
                                    retrait = c.montant;
                                    //depot = '0.0';
                                }

                              }
                                
                              if(c.typePaie =='cheque'){

                                if(c.typeTransEp == 'DE'){
                                    depBanqu = c.montant;
                                    //retrait = '0.0';

                                }
                                else if(c.typeTransEp == 'RE'){
                                    retraitBanqu = c.montant;
                                    //depot = '0.0';
                                }

                              } 

                              if(c.typePaie =='mobile'){

                                if(c.typeTransEp == 'DE'){
                                    depTrans = c.montant;
                                    //retrait = '0.0';

                                }
                                else if(c.typeTransEp == 'RE'){
                                    retraitTrans = c.montant;
                                    //depot = '0.0';
                                }

                              }

                              totDeb = parseFloat(depot) + parseFloat(depBanqu) + parseFloat(depTrans);   

                              totCred = parseFloat(retrait) + parseFloat(retraitBanqu) + parseFloat(retraitTrans);  

                              totalDebit += totDeb;
                              totalCredit += totCred;

                              totalDebCash += parseFloat(depot);
                              totalCredCash += parseFloat(retrait);

                              totalDebBanque += parseFloat(depBanqu);
                              totalCredBanque+= parseFloat(retraitBanqu);

                              totalDebTrans += parseFloat(depTrans);
                              totalCredTrans += parseFloat(retraitTrans);
                                  
                              html += '<tr>' +
                              '<td>' + c.compteEpargne.numCompteEp +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              nom + '</td>' +

                              '<td style="text-align: right;">' +depot+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retrait  + '</td>' + 

                              '<td style="text-align: right;">' +depBanqu+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retraitBanqu  + '</td>' +

                              '<td style="text-align: right;">' +depTrans+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retraitTrans  + '</td>' +

                              '<td style="text-align: right;">' +totDeb+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              totCred  + '</td>' +                                 
                              '</tr>';

                        } else{
                            for (i = 0; i < c.length; i++) {

                              if(c[i].compteEpargne.groupe != null){
                                nom = c[i].compteEpargne.groupe.nomGroupe;
                              }else if(c[i].compteEpargne.individuel != null){
                                nom = c[i].compteEpargne.individuel.nomClient +' '+ c[i].compteEpargne.individuel.prenomClient;
                              }

                              if(c[i].typePaie =='cash'){

                                if(c[i].typeTransEp == 'DE'){
                                    depot = c[i].montant;
                                    //retrait = '0.0';

                                }
                                else if(c[i].typeTransEp == 'RE'){
                                    retrait = c[i].montant;
                                    //depot = '0.0';
                                }

                              }
                                
                              if(c[i].typePaie =='cheque'){

                                if(c[i].typeTransEp == 'DE'){
                                    depBanqu = c[i].montant;
                                    //retrait = '0.0';

                                }
                                else if(c[i].typeTransEp == 'RE'){
                                    retraitBanqu = c[i].montant;
                                    //depot = '0.0';
                                }

                              } 

                              if(c[i].typePaie =='mobile'){

                                if(c[i].typeTransEp == 'DE'){
                                    depTrans = c[i].montant;
                                    //retrait = '0.0';

                                }
                                else if(c[i].typeTransEp == 'RE'){
                                    retraitTrans = c[i].montant;
                                    //depot = '0.0';
                                }

                              }

                              totDeb = parseFloat(depot) + parseFloat(depBanqu) + parseFloat(depTrans);   

                              totCred = parseFloat(retrait) + parseFloat(retraitBanqu) + parseFloat(retraitTrans);  

                              totalDebit += totDeb;
                              totalCredit += totCred;

                              totalDebCash += parseFloat(depot);
                              totalCredCash += parseFloat(retrait);

                              totalDebBanque += parseFloat(depBanqu);
                              totalCredBanque+= parseFloat(retraitBanqu);

                              totalDebTrans += parseFloat(depTrans);
                              totalCredTrans += parseFloat(retraitTrans);
                                  
                              html += '<tr>' +
                              '<td>' + c[i].compteEpargne.numCompteEp +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              nom + '</td>' +

                              '<td style="text-align: right;">' +depot+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+
                              '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retrait  + '</td>' + 

                              '<td style="text-align: right;">' +depBanqu+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ 
                              '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retraitBanqu  + '</td>' +

                              '<td style="text-align: right;">' +depTrans+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              retraitTrans  + '</td>' +

                              '<td style="text-align: right;">' +totDeb+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                              totCred  + '</td>' +                                 
                              '</tr>';

                            }  
                          
                        }


                        html +='<tr>' +'<td></td>' +'</tr>'+ '<tr>' +'<td></td>' +'</tr>';
                        $('#showFoot').attr('style', 'display : bloc');

                        $('#showdata').html(html);
                        $('#modalAdd').modal('hide');
                        $('#impre').attr('style','display:bloc;');

                        $('#totalCash').html(totalDebCash +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+
                          '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                          totalCredCash);          
                        $('#totalBanque').html(totalDebBanque +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+
                          '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                          totalCredBanque);          
                        $('#totalTrans').html(totalDebTrans +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ 
                          totalCredTrans);          
                        $('#total').html(totalDebit +'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+
                         totalCredit);          
                      }
                      else {
                        $('#showdata').html('');
                           $.notify({            
                            message: 'Accune transactions pour ce date'
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
                    $('.alert-danger').html('<i class="fa fa-remove">'+'</i>'+'&nbsp;'+'Accune transactions pour ce date!!')
              .fadeIn().delay(2000).fadeOut('slow');
                     /* $.notify({            
                          message: 'Accune transactions pour ce date' 
                      },{
                          type: 'danger',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });*/
                  }
              });

        }else{

           $.notify({            
                message: 'Vous devez ajouter une date' 
            },{
                type: 'warning',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            });
          
        }
    });

});

</script>