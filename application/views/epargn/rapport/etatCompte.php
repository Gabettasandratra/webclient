<div id="dialog" title="Etat de compte épargne" style="margin-top: 1%;">
  <div>
    <button id="change" type="button" class="btn btn-sm btn-secondary"><i class="fa fa-recycle"></i> Changer critère</button>
  </div>
  <br/>
    <div class="card w-60" >
      <div class="card-body">
        <div class="card-text">
            <div class="form-group row">
              <label for="debPeriode" id="labDeb" class="col-form-label lab-date col-sm-6">Nombre compte épargne au début de période:</label>
              <input type="text" class="form-control form-control-sm col-1" name="debPeriode" id="debPeriode" disabled>
            </div>

             <div class="form-group row">
              <label for="nouvCompt" id="labDeb" class="col-form-label lab-date col-sm-6">Nombre de nouveau compte épargne:</label>
              <input type="text" class="form-control form-control-sm col-1" name="nouvCompt" id="nouvCompt" disabled>
            </div>

            <div class="form-group row">
              <label for="finPeriode" id="labFin" class="col-form-label lab-date col-sm-6">Nombre compte épargne à la fin de période:</label>
              <input type="text" class="form-control form-control-sm col-1" name="finPeriode" id="finPeriode" disabled>
            </div>
        </div>
      </div>
    </div>
    <br/>


    <div class="card w-90" >
      <div class="card-body">
        <div class="card-text">
            <div id="PageAimprimer" class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
              <table class="table table-fixed table-borderless table-sm">
                 <!-- <legende>Rapport des comptes</legende> -->
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Solde de bilan</th>
                      <th scope="col">Nombre de compte</th>
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

   <br/>

</div>

<!-- MODAL AFFICHER POUR AJOUTER LE CRITER DE RECHERCHE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px;" role="document">
      <div class="modal-content"> 
        <div class="modal-header">
          <h5 class="modal-title" id="titre">Veuillez entrer le critère d'affichage</h5>
        </div>
        <div class="modal-body">
             <form id="myForm" action="" method="post">
                 <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                </div>      
                <div class="col-12">

                  <div class="form-group row">
                    <label for="dateDeb" class="col-form-label lab-date col-sm-4">Période du:</label>
                    <input type="date" class="form-control form-control-sm col-4" name="dateDeb" id="dateDeb">
                  </div>
                  
                  <div class="form-group row">
                    <label for="dateFin" class="col-form-label lab-date col-sm-4">Au période:</label>
                    <input type="date" class="form-control form-control-sm col-4" name="dateFin" id="dateFin">
                  </div>

                   <div class="form-group row" >
                      <label for="cat1" class="col-form-label col-sm-4">Solde 1:</label>
                      <input type="number" style="text-align:right" step="100" id='cat1' class="form-control form-control-sm col-6" name="cat1">
                   </div>                       
       
                   <div class="form-group row" >
                      <label for="cat2" class="col-form-label col-sm-4">Solde 2:</label>
                      <input type="number" style="text-align:right" step="100" id='cat2' class="form-control form-control-sm col-6" name="cat2">
                   </div> 

                  <div class="form-group row" >
                      <label for="cat3" class="col-form-label col-sm-4">Solde 3:</label>
                      <input type="number" style="text-align:right" step="100" id='cat3' class="form-control form-control-sm col-6" name="cat3">
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

<script type="text/javascript">

$(function(){

$('#modalAdd').modal('show');

$( "#dialog" ).dialog({
    autoOpen: false,
    width: 1200,
    height: 600,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "size",
      duration: 800
    }
  });

  $('#change').click(function(){
     $('#modalAdd').modal('show');
     $('#dialog').dialog('close');
  });

  $('#btnAff').click(function(){

    var data = $('#myForm').serialize();

    var datDeb = $('input[name=dateDeb]');
    var datFin= $('input[name=dateFin]');
    var cat1= $('input[name=cat1]');
    var cat2= $('input[name=cat2]');
    var cat3= $('input[name=cat3]');

    var result = '';

    if(datDeb.val() == ''){
      $('#dateDeb').addClass('is-invalid');
    }else{
      $('#dateDeb').removeClass('is-invalid');
      result +='1';
    } 
    if(datFin.val() == ''){
      $('#dateFin').addClass('is-invalid');
    }else{
      $('#datFin').removeClass('is-invalid');
      result +='2';
    }
    if(cat1.val() == ''){
      $('#cat1').addClass('is-invalid');
    }else{
      $('#cat1').removeClass('is-invalid');
      result +='3';
    }
     if(cat2.val() == ''){
      $('#cat2').addClass('is-invalid');
    }else{
      $('#cat2').removeClass('is-invalid');
      result +='4';
    }
     if(cat3.val() == ''){
      $('#cat3').addClass('is-invalid');
    }else{
      $('#cat3').removeClass('is-invalid');
      result +='5';
    }

    if(result == '12345'){
        afficher(data);
    }else{
      $('#modalAdd').modal('show');
      //$('#dialog').dialog('open');
      $('.alert-danger').html('Veuillez remplir les champs!')
          .fadeIn().delay(2000).fadeOut('slow');
    }
   
  });

  function afficher(data){
     $.ajax({
      type:'ajax',
      method: "post",
      url: '<?php echo base_url();?>index.php/getEtatCompte',
      dataType:'json',
      data: data,
      async: false,
      success: function(response) {
          //alert(response);
          if (response != null) {
            var i;              
            var c = response;
            var html;
            var sd1 = $('input[name=cat1]').val();
            var sd2 = $('input[name=cat2]').val();
            var sd3 = $('input[name=cat3]').val();

            $('#modalAdd').modal('hide');
            $('#dialog').dialog('open');

            var dateDeb = $('input[name=dateDeb]').val();
            var dateFin = $('input[name=dateFin]').val();
            
            $('#labDeb').html('Nombre de compte au période '+ dateDeb);  
            $('#labFin').html('Nombre de compte au période '+ dateFin);  
            $('#debPeriode').val(response[0]);
            $('#finPeriode').val(response[1]);
            $('#nouvCompt').val(response[2]);

            var som1 = parseFloat(sd1)+1;
            var som2 = parseFloat(sd2)+1;

             html +='<tr>' +
                    '<th class="row">&nbsp;&nbsp;&nbsp;</th>' +                                                  
                    '<td>début période &nbsp;&nbsp;&nbsp; fin période</td>' +                                                  
                    '</tr>'+
             '<tr>' +
                    '<th class="row" style="margin-left: 3px;"> Solde moin de ' + sd1 + '</th>' +  
                    '<td>' +'<label style="margin-left: 10%;" >'+ response[3] +'</label>'+
                    '<label style="margin-left: 10%;">'+response[7]  + '</label></td>' + 
                    '</tr>'+

                    '<tr>' +
                    '<th class="row" style="margin-left: 3px;"> Solde entre ' + som1 +' et '+ sd2+ '</th>' +  
                    '<td>' +'<label style="margin-left: 10%;" >'+ response[4] +'</label>'+
                    '<label style="margin-left: 10%;">'+response[8]  + '</label></td>' +       
                    '</tr>'+

                    '<tr>' +
                    '<th class="row" style="margin-left: 3px;"> Solde entre ' +som2 +' et '+ sd3+ '</th>' +   
                     '<td>' +'<label style="margin-left: 10%;" >'+ response[5] +'</label>'+
                     '<label style="margin-left: 10%;">'+response[9]  + '</label></td>' +                                                                                              
                    '</tr>'+

                    '<tr>' +
                    '<th class="row" style="margin-left: 3px;"> Solde superieur à '+ sd3+ '</th>' +                                                  
                    '<td>' +'<label style="margin-left: 10%;" >'+ response[6] +'</label>'+
                     '<label style="margin-left: 10%;">'+response[10]  + '</label></td>' +                                                  
                    '</tr>'
                    ;
          
            $('#showdata').html(html);          
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