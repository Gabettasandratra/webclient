<div class="right_col" role="main" >
 <div id="impre" style="display:none;" class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Rapport Carte d'Identité des clients</h2>
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

  <div >
      <div class="row">
          <div class="col-6">
                <h6 id="teteTab"></h6>
          </div>
          <div class="col-6">
               <!--  <button id="imprimer" style="float: right" type="button" class="btn btn-sm btn-print"><i class="fa fa-recycle"></i> Imprimer</button> -->
                <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer date</button>
             </div>
          </div>
          <hr>
          <br>
         <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
          <div id="PageAimprimer" class="table-responsive-sm contTable"><!-- style="padding-right=25px;padding-left=25px;" -->
            <table class="table table-fixed table-striped table-hover table-sm">
               
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Code | Nom du client </th>
                    <th scope="col">Type de carte</th>
                    <th scope="col">N° carte</th>
                    <th scope="col">Date émission</th>
                    <th scope="col">Date expiration</th>
                    <th scope="col">Emis par</th>
                    <th scope="col">Priorité</th>
                  </tr>
                </thead>
                <tbody id="showdata">

                </tbody>
            </table>
          </div>
    </div>
         <br/>
       <br/>
       <br/>
    </div>
    </div>
    </div>
</div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Rapport CIN</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>
                <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      

                <div class="col-12">

                    <div class="form-group row">
                      <label for="dateDeb" class="col-form-label lab-date col-sm-4">Du date:</label>
                      <input type="date" class="form-control form-control-sm col-4" name="dateDeb" id="dateDeb">
                    </div>
                     <div class="form-group row">
                      <label for="dateFin" class="col-form-label lab-date col-sm-4">Au date:</label>
                      <input type="date" class="form-control form-control-sm col-4" name="dateFin" id="dateFin">
                     
                    </div>

                </div>

              </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
                <button type="button" id="btnAff" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Afficher</button>
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

  today();
function today(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);

  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

  $('#dateDeb').val(today);  
  $('#dateFin').val(today);  
}

$('#fermerModal').click(function(){
  $('#modalAdd').modal('hide');
});

$('#modalAdd').modal('show');


  $('#change').click(function(){
     $('#modalAdd').modal('show');
     $('#impre').attr('style','display:none;');
     /*$('#dialog').dialog('close');*/
  });


$('#btnAff').click(function(){
     var btn = $(this);
    $(btn).buttonLoader('start');

    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var dayNow = (day)+"/"+(month)+"/"+now.getFullYear();

    var data = $('#myForm').serialize(); 

    var user = $('input[name=user]').val();
    var dateDeb = $('input[name=dateDeb]').val();
    var dateFin = $('input[name=dateFin]').val();

    var daDeb;
    var daFin;

    if(dateDeb == ''){
      daDeb = '';
    }
    else{
      daDeb = ' du date d\'inscription '+dateDeb;
    }

    if(dateFin == ''){
      daFin = '';
    }
    else{
      daFin = ' jusqu\'au date '+dateFin;
    }
    
     $('#textImpr').html('Imprimé par:  '+  user);   
     $('#textDateImpr').html('Imprimé le:  '+dayNow);   
     $('#textAff').html('Rapport CIN '+daDeb+' '+daFin); 
     setTimeout(function () {
          $(btn).buttonLoader('stop');
          getDonne(data);
        }, 1000);
    // getDonne(data);

});


function getDonne(data){
      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url();?>index.php/getRapportCIN',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {                
                  var i;              
                  var c = response.result;
                  var html;
                  var d = '';

                  if(c.length == null){
                   
                     
                      if(c.dateExpire != null){
                        d = c.dateExpire;
                      }else{
                        d = d;
                      }
                    
                        html += '<tr>' +
                        '<td>' +c.individuel.codeInd +' &nbsp; &nbsp; | &nbsp; &nbsp; '+  c.individuel.nomClient +' '+ c.individuel.prenomClient + '</td>' +
                        '<td>' + c.typedoc + '</td>' +
                        '<td>' + c.numero + '</td>' +
                        '<td>' + c.dateEmis + '</td>' +
                        '<td>' + d + '</td>' +
                        '<td>' + c.delivrePar + '</td>' +
                        '<td>' + c.priorite + '</td>' +
                        '</tr>';
                  }else{
                    for (i = 0; i < c.length; i++) {

                      if(c[i].dateExpire != null){
                        d = c[i].dateExpire;
                      }else{
                        d = d;
                      }
                    
                        html += '<tr>' +
                        '<td>' + c[i].individuel.codeInd +' &nbsp; &nbsp; | &nbsp; &nbsp; '+  c[i].individuel.nomClient +' '+ c[i].individuel.prenomClient  + '</td>' +
                        '<td>' + c[i].typedoc + '</td>' +
                         '<td>' +c[i].numero + '</td>' +
                        '<td>' + c[i].dateEmis + '</td>' +
                        '<td>' + d + '</td>' +
                        '<td>' + c[i].delivrePar + '</td>' +
                        '<td>' + c[i].priorite + '</td>' +
                        '</tr>';
                    }                    
                  }

                  $('#modalAdd').modal('hide');
                  $('#impre').attr('style','display:bloc;');
                  
                 //s $('#cardAffiche').fadeIn().delay(3000);$('#dialog').dialog('open');

                  $('#showdata').html(html); 
                  $('#total').html('Total carte d\'Identité: '+c.length);  
                  } 
                                                 
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
    });
}

});

</script>