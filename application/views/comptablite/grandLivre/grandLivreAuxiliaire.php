<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12" style="margin-top:2%;">
  <div class="x_panel tile" id="dialog" style="display:none;">
    <div class="x_title">
      <h2>Grand Livre Auxilliaire</h2>
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
    <div class="form-group">
    
    <div class="row">
      <div class="col-6">
            <h6 id="teteTable"></h6>
      </div>
      <div class="col-6"><!-- style="margin-right:15px;" -->
            <button id="change" style="float: right" type="button" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i> Changer client</button>
         </div>
    </div>
    <br>
         <!--  TABLEAU QUI AFFICHE LA LISTE DES COMPTES table-hover table-dark -->
        <div id="PageAimprimer" class="table-responsive-sm contTable" style="padding-right=25px;padding-left=25px;">
          <table id="tab" class="table table-fixed table-striped table-hover table-sm">
              <thead id="showHead" class="thead-dark">
                <tr><!-- 
                  <th scope="col">#Code client</th> -->
                  <th scope="col">Nom</th>
                  <th scope="col">Date transaction</th>
                  <th scope="col">N° compte</th>
                  <th scope="col">Description transaction</th>
                  <th scope="col">Débit</th>
                  <th scope="col">Crédit</th><!-- 
                  <th scope="col">Piece</th> -->
                </tr>
              </thead>
              <tbody id="showGrandLivre">
      
              </tbody>
              <tfoot id="showFoot">
              <tr>
                <td colspan=4>Totaux des mouvements</td>
                <td id="tdebit">0</td>
                <td id="tcredit">0</td><!-- 
                <td id="tSolde">0</td> -->
               </tr>
              </tfoot>
          </table>
        </div>  
    </div>
  <br>
  <br>
  <br>
</div>
</div>
</div>
</div>

<!-- Choix client -->
<div id="modalAdd" title="Veuillez selectionner un client" style="margin-top: 2%">
    <form id="myForm" action="" method="post">           
      <div class="col-12" style="margin-top:10px;margin-bottom:10px;">                
        <div class="control-group"> 
           <input type="hidden" name="user" id="user"  value="<?php echo $nomUtilisateur ?>"/>   
         <div class="alert alert-danger" style="display: none;margin-bottom: 25px;text-align:center; ">

         </div>      
            <div class="form-group row">
              <label for="choix" class="col-sm-5">Client: <span id="champObligatoir">*</span></label>
                <div class="col-sm-7">
                  <select name="choix" class="form-control form-control-sm col-12" id="choix">
                       <option>-----Choisir client-----</option>
                       <option value="individuel">Individuel</option>
                       <option value="groupe">Groupe</option>
                  </select>
                </div>
             </div>  
            
            <div class="form-group row">                                        
                <label id="labCode" class="col-sm-5" for="codeCli">Code Client: <span id="champObligatoir">*</span> </label>
                <div class=" col-sm-7">
                  <input type="text" name="codeCli" placeholder="Saisir n° client" class="form-control form-control-sm col-12" id="codeCli">
                  <input type="hidden" name="codeGrp" placeholder="Saisir n° client Groupe" class="form-control form-control-sm col-12" id="codeGrp">
                  <input type="hidden" placeholder="Veuillez séléctioner le client" class="form-control form-control-sm col-12" id="rien" disabled>
                </div>
            </div>   

         </div>
       </div> 
    </form> 
    <br><br>
   <div class="modal-footer">
    <!-- <span style="float: left;margin-right: 20%">les champs marqué par <span id="champObligatoir">*</span> </label> sont obligatoire </span> -->
     <button type="button" id="btnAfficher" class="btn btn-sm btn-primary bt-ajout">Suivant <i class="fa fa-forward"></i></button>
 </div>

</div>

<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/DataTables/media/Buttons/js/buttons.bootstrap4.min.js');?>"></script>
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

$( "#modalAdd" ).dialog({
    autoOpen: true,
    width: 500,
    height: 300,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "explode",
      duration: 800
    }
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

   $('#change').click(function(){      
    $('#modalAdd').dialog('open');
    $('#dialog').attr('style','display:none;');    
   });

/* $('#btnAfficher').attr('disabled',true);
 $('#btnAfficher').addClass("btn btn-sm btn-light");*/
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
          $('#codeCli').attr('value', '');                       
          $('#rien').attr('type', 'hidden'); 
         /* $('#btnAfficher').attr('disabled',false);  
           $('#btnAfficher').attr('class','btn btn-sm btn-primary');        */      
        }
        else if(i == str){          
          $('#codeCli').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#codeGrp').attr('value', '');
          $('#rien').attr('type', 'hidden');
         /* $('#btnAfficher').attr('disabled',false);
            $('#btnAfficher').attr('class','btn btn-sm btn-primary');  */
        }else{          
          $('#rien').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#codeCli').attr('type', 'hidden');
         /* $('#btnAfficher').attr('disabled',true);
            $('#btnAfficher').attr('class','btn btn-sm btn-light');  */
        }
    });

$('#btnAfficher').click(function(){

    $('#modalAdd').dialog('close');
    $('#dialog').attr('style','display:bloc');
		var data = $('#myForm').serialize();

		 $.ajax({
        type:'ajax',
        method:"post",
        url: '<?php echo base_url();?>index.php/afficheGrandLivreAuxiliaire',
        dataType:'json',
        data: data,
        async: false,
        success:function(response){
            if(response){
              if(response.success){
                var c = response.result;
                var html;
                var total_Credit = 0;
                var total_Debit = 0;
                var solde = 0;
                for (i = 0; i < c.length; i++) {
                  var code;
                  var nom;

                      if (c[i].codeInd != null) {
                        code = c[i].codeInd.codeInd;
                        nom = c[i].codeInd.nomClient +' '+c[i].codeInd.prenomClient; 
                      }else if(c[i].groupe != null){
                         code = c[i].groupe.codeGrp;
                         nom = c[i].groupe.nomGroupe;
                      }

                  total_Credit += parseFloat(c[i].credit);
                  total_Debit += parseFloat(c[i].debit);
                  solde += parseFloat(c[i].solde);
                    html += '<tr>' +/*
                    '<td>' + code + '</td>' +*/
                    '<td>' + nom + '</td>' +
                    '<td>' + c[i].date + '</td>' +
                    '<td>' + c[i].compte + '</td>' +
                    '<td>' + c[i].descr + '</td>' +
                    '<td>' + c[i].debit + '</td>' +
                    '<td>' + c[i].credit + '</td>' +
                   /* '<td>' + c[i].piece + '</td>' +
                    '<td>' + c[i].solde + '</td>' +*/
                    '</tr>';
                }
                $('#teteTable').html("Totaux transaction : "+c.length);
                $('#showGrandLivre').html(html);
                $('#tdebit').html(total_Debit);
                $('#tcredit').html(total_Credit);
                $('#tab').DataTable({
                    language: {
                        url: "<?php echo base_url('/assets/DataTables/media/French.json');?>"
                    }, dom: 'flrtBp',
                        buttons: [
                        'excelHtml5',
                        'pdfHtml5',
                        'print'
                        ]
                });
                /*
                $('#tSolde').html(solde);*/
              }

            }
          
        },
       error: function(response){
         $('.alert-danger').html('Auccun resultat de votre recherche!')
        .fadeIn().delay(2000).fadeOut('slow');
      }
    });


  });


});

</script>