<div class="right_col" role="main">
<div class="col-md-12 col-sm-12" style="margin-top: 2%;">
<div class="x_panel tile " id="tet" style="display:bloc;">
  <div class="x_title">
    <h2>Rapport montant dû aujourd'hui</h2>
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

      <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center;">

      </div> 

      <div class="row">
        <div class="col-6">
              <h6 id="teteTable"></h6>
        </div>
        <!-- <div class="col-6">
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer date</button>
        </div> -->
      </div>
      <br>
     <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
      <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
        <table class="table table-fixed table-striped table-hover table-sm">
           
            <thead class="thead-dark">
              <tr>
                 <th scope="col">N° crédit</th>
                 <th scope="col">Nom client</th>
                 <th scope="col">Montant total restant</th>
                 <th scope="col">Principal aujourd'hui</th>
                 <th scope="col">Intérêt aujourd'hui</th>
                 <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody id="showdata">

            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">Totaux</td>
                <td id="totalM">0.0</td>
                <td id="totalP">0.0</td>
                <td id="totalI">0.0</td>
                <td id="total">0.0</td>
              </tr>
            </tfoot>
        </table>
      </div>
        <form id="myForm" action="" method="post">
              <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
              <input type="hidden" id='date' name="date"> <!-- value="2020-06-15" -->
          </form>
     <br/>
   <br/>
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

      $('#date').val(today);  
    }
    var data = $('#myForm').serialize(); 
    getDonne(data);
    function getDonne(data){
          $.ajax({
                type:'ajax',
                method: "post",
                url: '<?php echo base_url();?>index.php/getMontantDuToDay',
                dataType:'json',
                data: data,
                async: false,
                success: function(response) {
                    //alert(response);             
                      var c = response;
                      var html;
                      var nom;
                      var totM = 0;
                      var totDay;
                      var totalP = 0;
                      var totalI = 0;
                      var total = 0;

                     // var detail = response.cred;

                      if(c.length == null){

                         if (c.demandeCredit.individuel != null) {
                            nom = c.demandeCredit.individuel.nomClient +' '+c.demandeCredit.individuel.prenomClient; 
                          }
                          else if(c.demandeCredit.groupe != null){
                             nom = c.demandeCredit.groupe.nomGroupe;
                          }//c.demandeCredit.groupe.codeGrp +' |'+  //c.demandeCredit.individuel.codeInd +' |'+
                          totDay = parseFloat(c.mprinc) + parseFloat(c.mint);
                          totM = totM + parseFloat(c.demandeCredit.solde_total);
                          totalP = totalP + parseFloat(c.mprinc);
                          totalI = totalI + parseFloat(c.mint);
                          total = total + totDay;
                          html += '<tr>' +
                            '<td>' + c.demandeCredit.numCredit + '</td>' +
                            '<td>' +nom + '</td>' +
                            '<td>' + c.demandeCredit.solde_total + '</td>' +
                            '<td>' + c.mprinc + '</td>' +
                            '<td>' + c.mint + '</td>' +
                            '<td>' + totDay + '</td>' +
                            '</tr>';
                      }else{                
                        for (i = 0; i < c.length; i++) {
                           if (c[i].demandeCredit.individuel != null) {
                              nom = c[i].demandeCredit.individuel.nomClient +' '+c[i].demandeCredit.individuel.prenomClient; 
                            }
                            else if(c[i].demandeCredit.groupe != null){
                               nom = c[i].demandeCredit.groupe.nomGroupe;
                            }
                            totM = totM + parseFloat(c[i].demandeCredit.solde_total);
                            totDay = parseFloat(c[i].mprinc) + parseFloat(c[i].mint);
                            totalP = totalP + parseFloat(c[i].mprinc);
                            totalI = totalI + parseFloat(c[i].mint);
                            total = total + totDay;
                            html += '<tr>' +
                            '<td>' + c[i].demandeCredit.numCredit + '</td>' +
                            '<td>' +nom + '</td>' +
                            '<td>' + c[i].demandeCredit.solde_total + '</td>' +
                            '<td>' + c[i].mprinc + '</td>' +
                            '<td>' + c[i].mint + '</td>' +
                            '<td>' + totDay + '</td>' +
                            '</tr>';
                        }                    
                      }
                     /* html += '<tr>'+
                      '<td colspan=6>  &nbsp;</td>'+
                      '</tr>';*/
                      $('#showdata').html(html); 
                      $('#totalM').html(totM);
                      $('#totalP').html(totalP);
                      $('#totalI').html(totalI);
                      $('#total').html(total);

                      $('#teteTable').html('Remboursement aujourd\'hui: '+c.length);   

                },
                error: function(response){
                   $('#teteTable').html('Aucun remboursement aujourd\'hui');   
                   $('#showdata').html('Aucun données!!!'); 
                   $('.alert-danger').html('Pas de remboursement aujourd\'hui')
                  .fadeIn().delay(5000).fadeOut('slow');
                }
        });
    }


});

</script>