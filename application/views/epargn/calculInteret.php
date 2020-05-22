<!-- MODALE CHOIX TRANSACTION -->
<div class="modal fade" id="modalCalcul" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
      <div class="modal-dialog" style="margin-top: 130px;" role="document">
        <div class="modal-content"> 
          <div class="modal-header">
            <h5 class="modal-title" id="titre">Calcul intérêt d'épargne</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              
               <form id="myForm" action="" method="post">  
                 <div class="form-group col-12">    

                    <div class="col-12 row">
                    
                     <label for="produit" class="col-sm-4">Produit:</label>
                      <div class="col-sm-8">
                        <select name="produit" class="form-control form-control-sm col-12" id="produit">
                             <option></option>
                             <?php foreach($result->liste as $val) :?>
                                  <option value="<?= $val->idProdEpargne ?>"><?= $val->nomProdEpargne ?></option>
                              <?php endforeach; ?>
                        </select>
                      </div> 

                    </div>
                    <br/>
                    <div class="col-12 row">
                      <label for="dateDeb" class="col-sm-4">Du date:</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control form-control-sm col-8" id="dateDeb" name="dateDeb" />
                      </div> 
                    </div>
                    <br/>
                    <div class="col-12 row">
                      <label for="dateFin" class="col-sm-4">Au date:</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control form-control-sm col-8" id="dateFin" name="dateFin" />
                      </div> 
                    </div>   


                </div>
              </form>

          </div>
      <div class="modal-footer">
        <button id="btnFermer" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye-slash"></i>  Fermer</button>
         <button id="btnDemarer" type="button" class="btn btn-sm btn-success">Calculer</button>
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

  $('#btnFermer').click(function(){
    $('#modalCalcul').modal('hide');
  });

$('#modalCalcul').modal('show');

$('#btnDemarer').click(function(){

   var data = $('#myForm').serialize();

      $.ajax({
        type:'ajax',
        method:"post",
        url:"<?php echo base_url();?>index.php/calculInteretEpargne",
        data: data,
        dataType:"json",
        async: false,
        success:function(response){
        if (response.success) {
          
          $('#modalCalcul').modal('hide');

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