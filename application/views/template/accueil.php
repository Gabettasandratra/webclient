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
    


    <script src="<?php echo base_url('/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/vendors/Chart.js/dist/Chart.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/Chart/dist/Chart.bundle.min.js');?>"></script>


<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row" style="display: inline-block;margin-top:2%;" >
  <div class="tile_count">
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Clients individuels</span>
      <div id="totClient" class="count" align="center"></div><!-- 
      <span class="count_bottom"><i class="green">4% </i> Par rapport au dernier</span> -->
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-users"></i> Clients groupes</span>
      <div id="totGroupe" class="count" align="center"></div><!-- 
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
    </div>
     <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence") { ?>                                    
      <div class="col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-money"></i> Approbation en attente</span>
        <div id="totApprob"  class="count" align="center"></div>
        <span class="count_bottom" align="center"></i> <a href="<?php echo base_url(); ?>index.php/MenuApprobation"><i class="fa fa-eye green"> Voir</i></a></span>
      </div>
    <?php } ?>

    <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent crédit") { ?>  
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Decaissement en attente</span>
      <div id="totDecaissement" class="count" align="center"></div>
      <span class="count_bottom" align="center"></i> <a href="<?php echo base_url(); ?>index.php/MenuDecaissement"><i class="fa fa-eye green"> Voir</i></a></span>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-calendar"></i> Remboursement aujourd'hui</span>
      <div id="totRemb" class="count" align="center">0</div>
      <span class="count_bottom" align="center"></i> <a href="#"><i class="fa fa-eye green"> Voir</i></a></span>
    </div>
    <?php } ?>
    <?php if($fonctionUser == "Administrateur" || $fonctionUser == "Chef agence" || $fonctionUser == "Agent épargne") { ?>  
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-calendar"></i> DAT arrive en échéance aujourd'hui</span>
      <div id="totDAT" class="count red" align="center">0</div>
      <span class="count_bottom" align="center"></i> <a href="#"><i class="fa fa-eye green"> Voir</i></a></span>
    </div>
     <?php } ?>
  </div>
</div>
  <!-- /top tiles -->
  <br />
  <br />
  <br />

  <div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Comptes comptable les plus utilisés</h2>
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
          <div class="widget_summary">
            <div class="w_left w_25">
              <span>101115</span>
            </div>
            <div class="w_center w_55">
              <div class="progress">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                  <span class="sr-only">70% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>123</span>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="widget_summary">
            <div class="w_left w_25">
              <span>102001</span>
            </div>
            <div class="w_center w_55">
              <div class="progress">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>100</span>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="widget_summary">
            <div class="w_left w_25">
              <span>707001</span>
            </div>
            <div class="w_center w_55">
              <div class="progress">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                  <span class="sr-only">50% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>90</span>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="widget_summary">
            <div class="w_left w_25">
              <span>601023</span>
            </div>
            <div class="w_center w_55">
              <div class="progress">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                  <span class="sr-only">40% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>80</span>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="widget_summary">
            <div class="w_left w_25">
              <span>240001</span>
            </div>
            <div class="w_center w_55">
              <div class="progress">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                  <span class="sr-only">30% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>50</span>
            </div>
            <div class="clearfix"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 ">
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Epargne & Crédit</h2>
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
          <canvas id="myChart" style="width:100%;" height="200" ></canvas>

          <!--  <table class="" style="width:100%">width="140" 
            <tr>
              <th style="width:37%;">
                <p></p>
              </th>
              <th>
                <div class="col-lg-7 col-md-7 col-sm-7 ">
                  <p class="">Clients</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                  <p class="">Taux</p>
                </div>
              </th>
            </tr>
            <tr>
              <td>
                <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
              </td>
              <td>
                <table class="tile_info">
                  <tr>
                    <td>
                      <p><i class="fa fa-square blue"></i>Individuel </p>
                    </td>
                    <td>80%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Groupe </p>
                    </td>
                    <td>20%</td>
                  </tr>
               
                </table>
              </td>
            </tr>
          </table> -->
        </div>
      </div>
    </div>

  </div>

  <form id="myForm" action="" method="post">
      <input type="hidden" id='date' name="date"> <!-- value="2020-06-15" -->
  </form>
  <br />
  <br />
  <br /> 
  <br />
  <br />
  <br /> 
  <br />
  <br />
  <br /> 
  <br />
  <br />
  <br />
</div>
        <!-- /page content -->

<script type="text/javascript">
  
  //Char js
  let myChart = document.getElementById('myChart').getContext('2d');

  //Options global
  Chart.defaults.global.defaultFontFamily='Lato';
  Chart.defaults.global.defaultFontSize=12;
  Chart.defaults.global.defaultFontColor='#777';

  let pieChart = new Chart(myChart,{
    type:'pie',//bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data:{
      labels:['Crédit','Epargne'],
      datasets:[{
        label:'Activités',
        data:[
          '50',
          '70'
        ],
        //backgroundColor:'green'
        backgroundColor:[
          'rgba(54,162,235,0.6)',
          'rgba(255,99,132,0.6)'
        ],
        borderWidth:1,
        borderColor:'#777',
        hoverBorderWidth:3,
        hoverBorderColor:'#000'
      }]
    },
    options:{
      title:{
        display:false,
        text:'Activités',
        fontSize:12,

      },
      legend:{
        position:'right'
      } ,
      layout:{
        padding:{
          left:0,
          right:0,
          bottom:0,
          top:0
        }
      }
    }
  });

  //AFFICHAGE D TOUT CLIENT
//INDIVIDUEL
AllClient();
function AllClient(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeClient",
        dataType:"json",
        async: false,
        success:function(data){
          $('#totClient').html(data.length);
        },
        error: function(){
           $('#totClient').html(0);
           $('#totClient').addClass('red');
        }
    });
}

//GROUPE
 allGroupe();
function allGroupe(){
    $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/chargeGroupe',
      dataType: 'json',
      async: false,
      success: function(data){
        $('#totGroupe').html(data.length);
      },
      error: function(){
        $('#totGroupe').html(0);
        $('#totGroupe').addClass('red');
       
      }
  });
}


//Total Remboursement aujourd'hui
   //today();
    function today(){
      var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);

      var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

      $('#date').val(today);  
    }

  var data = $('#myForm').serialize(); 
  getRemboursement(data);
  function getRemboursement(data){
        $.ajax({
              type:'ajax',
              method: "post",
              url: '<?php echo base_url();?>index.php/getMontantDuToDay',
              dataType:'json',
              data: data,
              async: false,
              success: function(response) {
                  //alert(response);    
                  if(response.length == null){
                    $('#totRemb').html(1);
                  }else{                  
                     $('#totRemb').html(response.length);
                  }

              },
              error: function(response){
                $('#totRemb').html(0);
                $('#totRemb').addClass('red');
                 
              }
      });
  }

//Total approbation en attente
 totApprobations();
  function totApprobations(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeApprobation",
        dataType:"json",
        data:{mc: 'Approbation en attente', mc2 : 'commission payer'} ,
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var code;
                var nom;

                if(response.length == null){
                  $('#totApprob').html(1);
                }else{                  
                   $('#totApprob').html(response.length);
                }
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
             $('#totApprob').html(0);
             $('#totApprob').addClass('red');
        }
    });
}  
//Total décaissement en attente
totDecais();
function totDecais(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeDecaissement",
        dataType:"json",
        data:{mc: 'Approuver', mc2 : 'payé apres approbation'} ,
        async: false,
        success:function(response){
            if(response){
                var c = response;
                var html;
                var code;
                var nom;

                if(response.length == null){
                  $('#totDecaissement').html(1);
                }else{                  
                   $('#totDecaissement').html(response.length);
                }
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
             $('#totDecaissement').html(0);
             $('#totDecaissement').addClass('red');
        }
    });
}



</script>