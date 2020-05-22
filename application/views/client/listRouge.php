
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Ajout client à la liste rouge ou liste noire</h2>
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

              <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                    
                <div class="">

                  <form id="myForm" action="" method="post">           
                    <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
                     <div class="control-group row"> 
                        <input type="hidden" name="user"  value="<?php echo $idUtilisateur ?>"/>
                         <div class="form-group col-4 row">
                              <label for="choix" class="col-sm-4">Client: <span id="champObligatoir">*</span></label>
                              <div class="col-sm-8">
                                <select name="choix" class="form-control form-control-sm col-12" id="choix">
                                     <option>-----Choisir client-----</option>
                                     <option value="individuel">Individuel</option>
                                     <option value="groupe">Groupe</option>
                                </select>
                              </div>
                           </div>  
        
                          <div class="form-group col-4 row">                                        
                              <label id="labCode" class="col-sm-5" for="codeCli">Code Client: <span id="champObligatoir">*</span> </label>
                              <div class=" col-sm-7">
                                <input type="text" name="codeCli" placeholder="Saisir n° client" class="form-control form-control-sm col-12" id="codeCli" required>
                                <input type="hidden" name="codeGrp" placeholder="Saisir n° client Groupe" class="form-control form-control-sm col-12" id="codeGrp" required>
                                <input type="hidden" placeholder="Veuillez séléctioner le client" class="form-control form-control-sm col-12" id="rien" disabled>
                              </div>
                          </div>   

                          <div class="form-group col-4 row">                                        
                              <label class="col-sm-5" for="nom">Nom Client: </label>
                              <div class=" col-sm-7">
                                <input type="text" class="form-control form-control-sm col-12" id="nom" disabled>
                              </div>
                          </div>                   
                    </div>
                 </div> 
                <hr style="margin: 20px;"/>
                <br/>
            
              <div class="col-12">            
                <div class="control-group row" style="margin-top:15px;">

                  <div class="col-12">

                      <div class="form-group col-6">
                        <fieldset class="scheduler-border"> 
                            <legend class="scheduler-border">Mettre client à la:</legend> 
                              <div class="control-group"> 
                                  
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="rouge" id="example1" value="1" checked>
                                  <label class="form-check-label" for="example1">
                                    Liste rouge
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="rouge" id="example2" value="0">
                                  <label class="form-check-label" for="example2">
                                    Liste noire
                                  </label>
                                </div>

                              </div> 
                        </fieldset> 
                         
                      </div>
          
                      <div class="form-group row">                                        
                        <label class="col-sm-2" for="dateAjout">Date: <span id="champObligatoir">*</span></label>
                        <div class=" col-sm-3">
                          <input type="date" name="dateAjout" class="form-control form-control-sm col-8" id="dateAjout" required="required">
                        </div>
                      </div>
                    
                      <div class="form-group row">                                        
                        <label class="col-sm-2" for="raison">Raison: <span id="champObligatoir">*</span></label>
                        <div class=" col-sm-4">
                          <textarea class="form-control form-control-sm" id="raison" name="raison" required></textarea>
                          <!-- <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div> -->
                         <!--  <input type="text" name="raison" class="form-control form-control-sm col-12" id="raison" required="required"> -->
                        </div>
                    </div>

                  </div>

                </div>
              </div>
             </form>           

            </div>
          </div>
      
      <div class="modal-footer" style="text-align: right">
        <button id="btnSave" type="button" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
      </div>
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

<script text="javascript">

$(function(){

$( "#dialog" ).dialog({
  autoOpen: true,
  width: 1100,
  height: 500,
  show: {
    effect: "slide",
    duration: 1200,      
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

  $('#dateAjout').val(today);  
}

  //OUVERTURE MODAL SOLDE D'OUVERTURE

  $('#soldeOuvert').click(function(){
     $('#modalSolde').modal('show');
  });

//SAISIE N° DE COMPTE
  $("#codeCli").autocomplete({
      source: function(request, response){
        var code = $("#codeCli").val();
        //var code =  $('input[name=codeCli]').val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findIndividuel',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){
                  response($.map(data, function(item){
                      return item.codeInd+ " | " +item.nomClient +" " +item.prenomClient;
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#nom').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  }); 

   //SAISIE N° DE COMPTE
  $("#codeGrp").autocomplete({
      source: function(request, response){
        //var code = $('input[name=codeGrp]').val();
        var code = $("#codeGrp").val();
          $.ajax({
              type : 'ajax',
              url: '<?php echo base_url();?>index.php/findGroupe',
              method: 'get',
              data: {code : code},
              crossDomain: true,
              dataType: 'json',
              jsonpCallback:'callback',
              success: function(data){
                  response($.map(data, function(item){
                      return item.codeGrp+ " | " +item.nomGroupe;
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#nom').val(c[1]);
          $(this).val(c[0]);
          return false;
      }
  });  


//CHOIX PAYEMENT

   $('#cash').click(function() {

      $('#affGuichet').attr('style', 'display: bloc;');                                             
      $('#affCheque').attr('style', 'display: none;');                                             
      $('#affMob').attr('style', 'display: none;');                                             
  });

   $('#cheque').click(function() {

      $('#affCheque').attr('style', 'display: bloc;');                                             
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affMob').attr('style', 'display: none;');                                             
  });

   $('#mobile').click(function() {

      $('#affMob').attr('style', 'display: bloc;');                                             
      $('#affGuichet').attr('style', 'display: none;');                                             
      $('#affCheque').attr('style', 'display: none;');                                             
  });


    //AFFICHER CLIENT

     $('#choix').change(function() {
        
        var str = "";
        var i = new String('individuel');
        var g = new String('groupe');
       
        $( "#choix option:selected" ).each(function() {
          str += $( this ).attr('value');
        });

        if(g == str){
          $('#codeGrp').attr('type', 'text');                       
          $('#codeCli').attr('type', 'hidden');                       
          $('#rien').attr('type', 'hidden');    
          $('input[name=codeCli]').val('');                   
        }
        else if(i == str){          
          $('#codeCli').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#rien').attr('type', 'hidden');
          $('input[name=codeGrp]').val('');
        }else{
          
          $('#rien').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#codeCli').attr('type', 'hidden');
          $('input[name=codeGrp]').val('');
          $('input[name=codeCli]').val(''); 
        }


  });



$('#btnSave').click(function(){

    var data = $('#myForm').serialize();

    	$.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveListeRouge',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Effectuer';
                    }
                     $('#myForm')[0].reset();
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


});

//ENREGISTREMENT DE PRIMER DEPOT

$('#depot').click(function(){

 var data = $('#formdepot').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/SaveTransactionEpargne',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Effectuer';
                    }
                    $('#modalSolde').modal('hide');
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


});

});

</script>