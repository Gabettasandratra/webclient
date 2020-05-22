
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile ">
    <div class="x_title">
      <h2>Saisie journal caisse</h2>
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

            <form id="myForm" role="form" action="" method="post">
              <div class="col-12">

                <div class="row">
                    <div class="col-4">

                         <h5 style="text-align: left;" class="col-sm-12">Saisie comptable:</h5>
                          <hr class="col-9" style="margin-right: 50%;">
                           <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                          <div class="form-group row">
                           <label class="col-sm-4" for="dateOperation">Date:  <span id="champObligatoir">*</span> </label>
                              <div class=" col-sm-6">                            
                                <input type="date" class="form-control form-control-sm col-12"
                              name="dateOperation" id="dateOperation">
                              </div>
                           </div> 

                          <div class="form-group row">                                        
                              <label id="piece" class="col-sm-4" for="codeCli2">Pièce justificatif: <span id="champObligatoir">*</span> </label>
                              <div class=" col-sm-6">
                                <input type="text" name="piece" style="" class="form-control form-control-sm col-12 error" id="piece">
                              </div>
                          </div>                      


                         <div class="form-group row">    
                           <label for="description" class="col-sm-4">Description de l'opération:</label>
                            <div class="col-sm-6">
                              <textarea class="form-control form-control-sm" id="description" name="description"></textarea>
                                <!-- <input type="text" class="form-control form-control-sm col-12" name="description" id="description"> -->
                            </div>
                          </div>                     

                    </div>  

                     <div class="col-8">

                     <h5 style="text-align: left;" class="col-sm-12">Mouvements des comptes:</h5>
                      <hr class="col-11" style="margin-right: 50%;">

                      <table class="table table-borderless">
                         <thead>
                            <tr>
                              <th scope="col">Compte</th>
                              <th scope="col">Intitulé du compte</th>
                              <th scope="col">Débit</th>
                              <th scope="col">crédit</th>
                            </tr>
                          </thead>
                          <tbody id="t">
                               <tr>
                                <td><input type="text" class="form-control form-control-sm col-12" name="compte" id="compte"></td>
                                <td><input type="text" class="form-control form-control-sm col-12" id="libelle" disabled></td>
                                <td><input type="text" class="form-control form-control-sm col-12" name="debit" id="debit"></td>
                                <td><input type="text" class="form-control form-control-sm col-12" name="credit" id="credit"></td>
                                <td><button type="button" id="ajouter" class="btn btn-sm btn-primary">Ajouter</button></td>
                              </tr>
                          </tbody>
                      </table>
                      <br/>

                     <table class="table">
                     <!--  <legend>Compte d'équilibre</legend> -->
                         <thead>
                            <tr>
                              <th scope="col">Compte d'équilibre</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              
                            </tr>
                          </thead>
                          <tbody id="eq">
                                <tr>
                                <td>
                                  <div class="col-sm-6">
                                    <select name="compte2" class="form-control form-control-sm col-12" id="compte2">
                                         <option></option>
                                         <?php foreach($res->resultat as $val) :?>
                                              <option value="<?= $val->compte ?>"><?= $val->compte ?> <?= $val->libelle ?></option>
                                          <?php endforeach; ?>
                                    </select>
                                  </div>
                                </td>
                                <td><button type="button" id="equilibrer" class="btn btn-sm btn-success"><i class="fa fa-balance-scale"></i> 
                                  Equilibrer</button></td>
                              <!--   <td><input type="text" class="form-control form-control-sm col-8" name="compte2" id="compte2"></td>
                                <td><input type="text" class="form-control form-control-sm col-8" id="libelle2" disabled></td>  --> 
                                <td></td>
                                <td></td>
                              </tr>
                          </tbody>
                      </table>

                         <br/>
                       <table class="table table-responsive-sm table-bordered table-hover table-sm">
                          <thead class="thead-light heads">
                            <tr>
                              <th scope="col">Compte</th>
                              <th scope="col">Intitulé du compte</th>
                              <th scope="col">Débit</th>
                              <th scope="col">crédit</th>
                            </tr>
                          </thead>
                          <tbody id="showMouvement">
                            
                          </tbody>
                          <tfoot>
                              <tr><td colspan=2>Totaux des mouvements</td><td id="tdebit">0</td><td id="tcredit">0</td></tr>
                          </tfoot>
                        </table>
                    </div>

                </div>

              </div>
          </form>
          <br>
          <div class="card-footer" style="text-align: right">
            <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
          </div>
        <br>
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

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateOperation').val(today);  
}


style();
  function style(){
    $('#piece').focus(function(){
        var a ='';
        if(a == $('input[name=piece]').val()){
          $('input[name=piece]').attr('style', 'background-color: red;');
        }else{
          $('input[name=piece]').attr('style', 'background-color: white;')
        }
    });  
  }

  //mouvement
//$('#ajouter').attr('disabled', true);
$('#debit').focus(function(){
    $('#credit').val("");
}); 

$('#credit').focus(function(){
    $('#debit').val("");
}); 
/*verif();
function verif(){ 
  if (isNaN(parseFloat(debit))){
    $('#ajouter').attr('disabled', false);
  } 
  else if(!isNaN(parseFloat(debit))){
    $('#ajouter').attr('disabled', false);
  } 
 // if (isNaN(parseFloat(credit))) $('#ajouter').attr('disabled', true);
}*/

$('#myForm input[name=piece]').blur(function(){
  if(!$(this).val()){
    $(this).addClass("error");
  } else{
    $(this).removeClass("error");
  }
});

$('#ajouter').click(function(){
    
    var lib = $('#libelle').val();
    var num_compte = $('#compte').val();
    var debit = $('#debit').val(); 
    var credit = $('#credit').val();

    var eqDeb;
    var eqCred; 

    if (!isNaN(parseFloat(debit))){
      eqDeb = debit;
      eqCred = 0;
    } 
    $('#tdebit').html(tcredit);

    if (!isNaN(parseFloat(credit))){
      eqCred = credit;
      eqDeb = 0;
    } 


    var html = '<tr class="modify"><td>'+num_compte+'</td><td>'+lib+'</td><td>'+eqDeb+'</td><td>'+eqCred+'</td></tr>';
    $('#showMouvement').append(html); // inserrer le nouveau element row

    var tdebit = parseFloat($('#tdebit').html());
    if (!isNaN(parseFloat(debit))) tdebit += parseFloat(debit);
    $('#tdebit').html(tdebit);

    var tcredit = parseFloat($('#tcredit').html());
    if (!isNaN(parseFloat(credit))) tcredit += parseFloat(credit);
    $('#tcredit').html(tcredit);
    
});


//EQUILIBRER

$('#equilibrer').click(function(){

    var num = $('#compte').val();

    var lib;
    var num_compte = $('#compte2').val();
    var debit = $('#debit').val(); 
    var credit = $('#credit').val(); 

    var eqDeb;
    var eqCred;

    var tdebit = parseFloat($('#tdebit').html());
    var tcredit = parseFloat($('#tcredit').html());

    if (!isNaN(parseFloat(debit))){
      tcredit += parseFloat(debit);
      eqCred =  parseFloat(debit);
      eqDeb = 0;
    } 

    if (!isNaN(parseFloat(credit))){
      tdebit += parseFloat(credit);
      eqDeb = parseFloat(credit);
      eqCred = 0;
    } 

    if(num == num_compte){
      alert('SVP, veuillez choisir un autre compte d\'équilibre');
    }else{
      //var code =  $('input[name=codeCli]').val();
        $.ajax({
            type : 'ajax',
            url: '<?php echo base_url();?>index.php/findCmptCompta',
            method: 'get',
            data: {code : num_compte},
            crossDomain: true,
            dataType: 'json',
            jsonpCallback:'callback',
            success: function(data){ 
             lib = data.libelle;                               
              var html = '<tr class="modify"><td>'+num_compte+'</td><td>'+lib+'</td><td>'+eqDeb+'</td><td>'+eqCred+'</td></tr>';
               $('#tdebit').html(tcredit);
               $('#tcredit').html(tdebit); 
              $('#showMouvement').append(html); 
            }
        });
      
    }

});

  //CHERCHER COMPTE 1

  $("#compte").autocomplete({
      source: function(request, response){
        var code = $("#compte").val();
        //var code =  $('input[name=codeCli]').val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findCmptCompta',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){                                
                  response($.map(data, function(item){
                      return item.compte +' |'+ item.libelle;
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#libelle').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  }); 

//ENREGISTREMENT DES INFORMATIONS
	$('#btnSave').click(function(){

		var data = $('#myForm').serialize();

		  $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/SaveTransactionCompta',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    console.log(response);
                      $.notify({            
                          message: response.message
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      });  
                       $('#myForm')[0].reset();
                       $('#tdebit').html('0');
                       $('#tcredit').html('0'); 
                       $('#showMouvement').html(''); 

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


	});


});

</script>