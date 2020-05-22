$(function(){ 

  //Controle modal
  $( "#dialog" ).dialog({
    autoOpen: false,
    width: 1400,
    height: 610,
    show: {
      effect: "size",
      duration: 800,      
    },
    hide: {
      effect: "size",
      duration: 800
    }
  });

  function keyPress (e) {
  e = e || window.event;
  var c = e.keyCode;
  return c>=48 && c<=55;
  }

  nb = document.getElementById('commission');
  nb.onkeypress = keyPress;
  mont = document.getElementById('montant_demande');
  mont.onkeypress = keyPress;
  dif = document.getElementById('diffPaie');
  dif.onkeypress = keyPress;


  $('#openModalClient').click(function(){
     //$('#modalInfoCli').modal('show');
     $('#dialog').dialog('close');
  });

$('#modalTrans').modal('show');

$('#montant_demande').keyup(function(){

  var mont = parseFloat($('input[name=montant_demande]').val());

  $('input[name=monts]').val(mont);

});


//recuperation calendrier après modification
function getAllCal(){
   $.ajax({
        type:'ajax',
        method: "get",
        url: '<?php echo base_url(); ?>index.php/getCalendrier',
        dataType:'json',
        async: false,
        success: function(response) {
  
            var html;
            var sh;
            var i;
            var c = response;
            var tot = 0;
            var totG = 0;
            var totP = 0;
            var totI = 0;
            var totPen = 0;
            var totCom = 0;
            var t = 1;
              var html;
              for (i = 0; i < c.length; i++) {

                tot = parseFloat(c[i].montantPrinc) + parseFloat(c[i].montantInt)
                 + parseFloat(c[i].montantPenal) + parseFloat(c[i].montantComm) ;
                totG = totG + tot;
                totP = totP + parseFloat(c[i].montantPrinc);
                totI = totI +  parseFloat(c[i].montantInt);
                totPen = totPen + parseFloat(c[i].montantPenal);
                totCom = totCom + parseFloat(c[i].montantComm) ;
                  html += '<tr>' +
                  '<td>' + c[i].numCred + '</td>' +
                  '<td>' + c[i].date + '</td>' +
                  '<td>' + c[i].montantPrinc + '</td>' +
                  '<td>' + c[i].montantInt + '</td>' +
                  '<td>' + c[i].montantPenal + '</td>' +
                  '<td>' + c[i].montantComm + '</td>' +
                  '<td>' + tot+ '</td>' +
                  '<td>' + c[i].rowId + '</td>' +
                  '</tr>';
                  t++;//contenteditable="true"
              }
              var totTranche = t-1;
              sh += '<tr>'+
               '<td>Total</td>' +
               '<td></td>' +
               '<td>' +totP + '</td>' +
               '<td>' +totI + '</td>' +
               '<td>' +totPen+ '</td>' +
               '<td>' +totCom+ '</td>' +
               '<td>' +totG+ '</td>' +
               '<td>' +totTranche+ '</td>' +
               '</tr>';
              $('#showFoot').html(sh);
              $('#showCalendrier').html(html);

              $('#two-tab').removeClass().addClass('nav-link active');
              $('#one-tab').removeClass().addClass('nav-link disabled');
              $('#three-tab').removeClass().addClass('nav-link disabled');


              $('#one').removeClass().addClass('tab-pane fade p-3');
              $('#three').removeClass().addClass('tab-pane fade p-3');
              $('#two').removeClass().addClass('tab-pane fade show active p-3');

              $('#btnPrecedent').attr('style', 'display: bloc');
              $('#btnPrecedent2').attr('style', 'display: none');
              $('#btnAvancer').attr('style', 'display: none');
              $('#btnAvancer2').attr('style', 'display: bloc');
              $('#btnSave').attr('style', 'display: none');
              $('#openModalClient').attr('style', 'display: none');

        },
        error: function(){
          alert('Erreurrrrrrrrrrrr!!!!');
        }
    });
}

//Modification calendrier
$('#modifierTranche').click(function(){

  var data = $('#myForm').serialize();

   $.ajax({
        type:'ajax',
        method: "post",
        url: '<?php echo base_url(); ?>index.php/modifCalendrierPaie',
        dataType:'json',
        data: data,
        async: false,
        success: function(response) {
            
            if(response.success){
              getAllCal();
            }
            
        },
        error: function(){
          alert('Erreurrrrrrrrrrrr!!')
        }
    });

});

//Suppression calendrier
viderCal();
function viderCal(){
     $.ajax({
        type:'ajax',
        url: '<?php echo base_url(); ?>index.php/viderCalendrierPaie',
        dataType:'json',
        async: false,
        success: function(response) {
            
            if(response.success){
              //alert('calendrier vide');
            }
            
        },
        error: function(){
          alert('Erreurrrrrrrrrrrr!!')
        }
    });
}

controlValidation();
function controlValidation(){
  $('#valdPercent').click(function(){
    $('#modalValid').modal('show');
  });

  $('#AnnulPercent').click(function(){
    $('#valdPercent').attr('style', 'display: bloc;');  
    $('#AnnulPercent').attr('style', 'display: none;');
    $('#btnSave').attr('disabled', true);
  });

  $('#btn-Oui').click(function(){
    $('#modalValid').modal('hide');
    $('#btnSave').attr('disabled', false);
    $('#valdPercent').attr('style', 'display: none;');  
    $('#AnnulPercent').attr('style', 'display: bloc;');  
  });
  $('#btn-Non').click(function(){
    $('#modalValid').modal('hide');
    $('#btnSave').attr('disabled', true);
    $('#valdPercent').attr('style', 'display: bloc;');  
    $('#AnnulPercent').attr('style', 'display: none;');
  });

}

function getDataCalendrier(){

  var listTable = new Array();

   $('#showCalendrier').find('tr').each(function(i,el){
      var tds = $(this).find('td'),
            attNum = tds.eq(0).text(),
            attdate = tds.eq(1).text(),
            attPrinc = tds.eq(2).text(),
            attInt = tds.eq(3).text();
   });

   listTable[i] = attNum + '~' + attdate;
   alert(listTable[i] + ' - ' + i);

}

$('#btnSave').click(function(){

  //var url = $('#myForm').attr('action');
  var data = $('#myForm').serialize();
   $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/demandeCredit',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {

                   // $('#myForm')[0].reset();

                     console.log(response);
                      $.notify({            
                          message: 'Enregistrement reuissit!'
                      },{
                          type: 'success',
                          animate: {
                              enter: 'animated fadeInDown',
                              exit: 'animated fadeOutUp'
                          }
                      }); 
                }
                else {
                    console.log(response);
                    $.notify({            
                        message: 'Erreur enregistrement!'
                    },{
                        type: 'warning',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    }); 
                }
            },
            error: function(){
              console.log(response);
                $.notify({            
                    message: 'Erreur!'
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

//BOUTTON IMPRIMER

$('#btnImprimer').click(function(){

  $('#modalAfficheCalendrier').modal('hide');
  imprimer('PageAimprimer');

});


//SAISIE N° DE COMPTE
  $("#numFind").autocomplete({
      source: function(request, response){
        var code = $("#numFind").val();
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
          //$('#nom').val(c[1]);
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



//FONCTION POUR FAIRE IMPRESSION

function imprimer(divName) {
   var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   $('#modalAfficheCalendrier').modal('hide');
}


calculGarantie();
function calculGarantie(){

    $('#valeur1').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garaties saississez
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

    //pourcentage de garatie du garant 1
      var taux1 = ((val1 + val2) * 100) / mont ;
      $('input[name=tauxGar1]').val(taux1);

    //pourcentage total des garaties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }
    });

    $('#valeur2').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garaties saisissez
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

      //pourcentage de garatie du garant 1
      var taux1 = ((val1 + val2) * 100) / mont ;
      $('input[name=tauxGar1]').val(taux1);

    //pourcentage total des garaties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }

    });

    $('#valeur3').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
       var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garanties saisissez
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

      //pourcentage de garatie du garant 2
      var taux2 = ((val3 + val4) * 100) / mont ;
      $('input[name=tauxGar2]').val(taux2);

      //pourcentage total des garanties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }
    });

    $('#valeur4').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garanties
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

      //pourcentage de garatie du garant 2
      var taux2 = ((val3 + val4) * 100) / mont ;
      $('input[name=tauxGar2]').val(taux2);

      //pourcentage total des garanties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }
    });

 $('#valeur5').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garanties
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

      //pourcentage de garatie du garant 3
      var taux3 = ((val5 + val6) * 100) / mont ;
      $('input[name=tauxGar3]').val(taux3);

      //pourcentage total des garanties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }
    }); 

$('#valeur6').keyup(function(){

      var val1 = parseFloat($('input[name=valeur1]').val());
      var val2 = parseFloat($('input[name=valeur2]').val());
      var val3 = parseFloat($('input[name=valeur3]').val());
      var val4 = parseFloat($('input[name=valeur4]').val());
      var val5 = parseFloat($('input[name=valeur5]').val());
      var val6 = parseFloat($('input[name=valeur6]').val());
      var mont = parseFloat($('input[name=montant_demande]').val());
     
     //Addition des garanties
      var montTot = val1 + val2 + val3 + val4 + val5 + val6;
      $('input[name=totalVal]').val(montTot);

      //pourcentage de garatie du garant 3
      var taux3 = ((val5 + val6) * 100) / mont ;
      $('input[name=tauxGar3]').val(taux3);

      //pourcentage total des garanties
      var perc = (montTot * 100) / mont; 
      $('input[name="percentVal"]').val(perc);

      if(perc > 100){
         $('#percentVal').attr('style', 'background-color: green;color: white;');
      }else{
        $('#percentVal').attr('style', 'background-color: red;color: white;');
      }
    });

}

choixGart();
function choixGart(){
  $('#choisir1').click(function(){
    $('#modalShoxGarant').modal('show');
    chargeGarants();
    $('#selectGar').addClass('selGar1');
  });

  $('#choisir2').click(function(){
    $('#modalShoxGarant').modal('show');
    chargeGarants();
    $('#selectGar').addClass('selGar2');
  });

  $('#choisir3').click(function(){
    $('#modalShoxGarant').modal('show');
    chargeGarants();
    $('#selectGar').addClass('selGar3');
  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar3', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');

    if( $('input[name=gar1]').val() == codeGar || $('input[name=gar2]').val() == codeGar  ){
      alert('le garant de crédit doit être different!!!');
    }else{
      $('#modalShoxGarant').modal('hide');

      $('input[name=gar3]').val(codeGar);
      $('input[name=garant3]').val(nom); 
      /*$('#tauxGar3').attr('disabled', false);   */  
    }

  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar2', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');

    if( $('input[name=gar1]').val() == codeGar || $('input[name=gar3]').val() == codeGar  ){
      alert('le garant de crédit doit être different!!!');
    }else{
    $('#modalShoxGarant').modal('hide');

    $('input[name=gar2]').val(codeGar);
    $('input[name=garant2]').val(nom); 
/*    $('#tauxGar2').attr('disabled', false);*/   
    }

  });

  //CHOISIR CLIENT VIA RECHERCHE
  $('#showGarant').on('click','.selGar1', function(){

    var codeGar = $(this).attr('data');
    var nom = $(this).attr('vals');
    
    if( $('input[name=gar2]').val() == codeGar || $('input[name=gar3]').val() == codeGar){
      alert('le garant de crédit doit être different!!!');
    }else{
      $('#modalShoxGarant').modal('hide');

      $('input[name=gar1]').val(codeGar);
      $('input[name=garant1]').val(nom);
     /* $('#tauxGar1').attr('disabled', false); */
    }
  });
  
}



function chargeGarants(){
   $.ajax({
    type:'ajax',
    method: "post",
    url: '<?php echo base_url(); ?>index.php/chargeGar',
    dataType:'json',
    async: false,
    success: function(response) {
     
      var html;
      var i;
      var c = response;
      var html;

      if(c.length == null){
              html += '<tr>' +
              '<td>' + c.codeGarant + '</td>' +
              '<td>' + c.nom +' '+c.prenom + '</td>' +
              '<td>' + c.profession + '</td>' +
              '<td>' +
              '<a href="javascript:;" id="selectGar" vals="' + c.nom +' '+c.prenom + '" class="btn btn-success btn-sm item-garant" data="'+c.codeGarant+'">Selectionner</a>' +
              '</td>' +
              '</tr>';
      }else{
          for (i = 0; i < c.length; i++) {
              html += '<tr>' +
              '<td>' + c[i].codeGarant + '</td>' +
              '<td>' + c[i].nom +' '+c[i].prenom + '</td>' +
              '<td>' + c[i].profession + '</td>' +
              '<td>' +
              '<a href="javascript:;" id="selectGar" class="btn btn-success btn-sm item-garant" data="'+ c[i].codeGarant+'">Selectionner</a>' +
              '</td>' +
              '</tr>';
          }
        }
        $('#showGarant').html(html);
        
    },
    error: function(){
      console.log(response);
        $.notify({            
            message: 'Erreur!'
        },{
            type: 'danger',
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            }
        }); 
    }
});
}

 $('#showCalendrier').on('click','tr',function(e){
      //juste séparer les champs par le tab
      var array = $(e.currentTarget)[0].innerText.split('\t');
      console.log(array);
      $('#numIndex').val(array[7]);
      $('#numTranch').val(array[7]);
      $('#dateEcheanche').val(array[1]);
      $('#principal').val(array[2]); 
      $('#interet').val(array[3]); 
      $('#Modcommission').val(array[5]); 

      //$( this ).addClass('bg-primary');
      
  });

 $('#showCalendrier').on('mouseover','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).addClass('bg-primary');
  });
  $('#showCalendrier').on('mouseout','tr',function(e){
      //juste séparer les champs par le ta
      $( this ).removeClass();
  });

  //MODAL CHOIX CODE CLIENT


   changerTab();
   //FUNCTION CHANGER TAB

var strs = '';
$('#idProduit').change(function() {  
 $( "#idProduit option:selected" ).each(function() {
      strs = $( this ).attr('value');
    });  
});

  function changerTab(){
//MENU DEMANDE CREDIT
  $('#btnAvancer').click(function(){

    var data = $('#myForm').serialize();

    var dates = $('input[name=date_demande]');
    var montant = $('input[name=montant_demande]');
    var but = $('input[name=but_credit]');
    var but2 = $('input[name=but_creditSos]');

    var result = "";

    if(dates.val()== ''){
      $('#date_demande').addClass('is-invalid');
    }else{
      $('#date_demande').removeClass('is-invalid');
      result +='1';
    }
    
    if(montant.val() == ''){
      $('#montant_demande').addClass('is-invalid');
    }else{
      $('#montant_demande').removeClass('is-invalid');
      result +='2';
    }

    if(but.val() == ''){
      $('#but_credit').addClass('is-invalid');
    }else{
      $('#but_credit').removeClass('is-invalid');
      result +='3';
    } 

    if(but2.val() == ''){
      $('#but_creditSos').addClass('is-invalid');
    }else{
      $('#but_creditSos').removeClass('is-invalid');
      result +='4';
    }

    if(strs == ''){
      $('#idProduit').addClass('is-invalid');
    }else{
      $('#idProduit').removeClass('is-invalid');
      result +='5';
    }

    if(result == '12345'){
        $.ajax({
        type:'ajax',
        method: "post",
        url: '<?php echo base_url(); ?>index.php/ecritureDemande',
        dataType:'json',
        data: data,
        async: false,
        success: function(response) {
  
            var html;
            var sh;
            var i;
            var c = response;
            var tot = 0;
            var totG = 0;
            var totP = 0;
            var totI = 0;
            var totPen = 0;
            var totCom = 0;
            var t = 1;
              var html;
              for (i = 0; i < c.length; i++) {

                tot = parseFloat(c[i].montantPrinc) + parseFloat(c[i].montantInt)
                 + parseFloat(c[i].montantPenal) + parseFloat(c[i].montantComm) ;
                totG = totG + tot;
                totP = totP + parseFloat(c[i].montantPrinc);
                totI = totI +  parseFloat(c[i].montantInt);
                totPen = totPen + parseFloat(c[i].montantPenal);
                totCom = totCom + parseFloat(c[i].montantComm) ;
                  html += '<tr>' +
                  '<td>' + c[i].numCred + '</td>' +
                  '<td >' + c[i].date + '</td>' +
                  '<td >' + c[i].montantPrinc + '</td>' +
                  '<td >' + c[i].montantInt + '</td>' +
                  '<td >' + c[i].montantPenal + '</td>' +
                  '<td >' + c[i].montantComm + '</td>' +
                  '<td>' + tot+ '</td>' +
                  '<td>' + c[i].rowId + '</td>' +
                  '</tr>';
                  t++;//contenteditable="true"
              }
              var totTranche = t-1;
              sh += '<tr>'+
               '<td>Total</td>' +
               '<td></td>' +
               '<td>' +totP + '</td>' +
               '<td>' +totI + '</td>' +
               '<td>' +totPen+ '</td>' +
               '<td>' +totCom+ '</td>' +
               '<td>' +totG+ '</td>' +
               '<td>' +totTranche+ '</td>' +
               '</tr>';
              $('#showFoot').html(sh);
              $('#showCalendrier').html(html);

              $('#two-tab').removeClass().addClass('nav-link active');
              $('#one-tab').removeClass().addClass('nav-link disabled');
              $('#three-tab').removeClass().addClass('nav-link disabled');


              $('#one').removeClass().addClass('tab-pane fade p-3');
              $('#three').removeClass().addClass('tab-pane fade p-3');
              $('#two').removeClass().addClass('tab-pane fade show active p-3');

              $('#btnPrecedent').attr('style', 'display: bloc');
              $('#btnPrecedent2').attr('style', 'display: none');
              $('#btnAvancer').attr('style', 'display: none');
              $('#btnAvancer2').attr('style', 'display: bloc');
              $('#btnSave').attr('style', 'display: none');
              $('#openModalClient').attr('style', 'display: none');

        },
        error: function(){
          console.log(response);
          $.notify({            
              message: 'Erreur!'
          },{
              type: 'danger',
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          }); 
        }
    });

    }else{
     $.notify({            
          message: 'Veuillez remplir les formulaires coloré en rouge!'
      },{
          type: 'warning',
          animate: {
              enter: 'animated fadeInLeft',
              exit: 'animated fadeOutUp'
          }
      }); 
    }
  });

    $('#btnPrecedent').click(function(){

    viderCal();

    $('#one-tab').removeClass().addClass('nav-link active');
    $('#two-tab').removeClass().addClass('nav-link disabled');
    $('#three-tab').removeClass().addClass('nav-link disabled');


    $('#two').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade p-3');
    $('#one').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnAvancer2').attr('style', 'display: none');
    $('#btnPrecedent').attr('style', 'display: none;');
    $('#btnPrecedent2').attr('style', 'display: none');
    $('#btnAvancer').attr('style', 'display: bloc');
     $('#btnSave').attr('style', 'display: none');
     $('#openModalClient').attr('style', 'display: bloc');
  });


//MENU MODIFIER CALENDRIER
  $('#btnAvancer2').click(function(){

    $('#two-tab').removeClass().addClass('nav-link disabled');
    $('#one-tab').removeClass().addClass('nav-link disabled');
    $('#three-tab').removeClass().addClass('nav-link active');


    $('#one').removeClass().addClass('tab-pane fade p-3');
    $('#two').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnAvancer2').attr('style', 'display: none');
    $('#btnPrecedent').attr('style', 'display: none;');
    $('#btnPrecedent2').attr('style', 'display: bloc');
    $('#btnAvancer').attr('style', 'display: none');
     $('#btnSave').attr('style', 'display: bloc');
     $('#openModalClient').attr('style', 'display: none');
  });

    $('#btnPrecedent2').click(function(){

    $('#one-tab').removeClass().addClass('nav-link disabled');
    $('#two-tab').removeClass().addClass('nav-link active');
    $('#three-tab').removeClass().addClass('nav-link disabled');


    $('#one').removeClass().addClass('tab-pane fade p-3');
    $('#three').removeClass().addClass('tab-pane fade p-3');
    $('#two').removeClass().addClass('tab-pane fade show active p-3');

    $('#btnPrecedent').attr('style', 'display: bloc');
    $('#btnPrecedent2').attr('style', 'display: none');
    $('#btnAvancer').attr('style', 'display: none');
    $('#btnAvancer2').attr('style', 'display: bloc');
     $('#btnSave').attr('style', 'display: none');
     $('#openModalClient').attr('style', 'display: none');
  });


   }   

   $('#openModalClient').click(function(){
     $('#contentCard').attr('style', 'display: none;');
    $('#modalTrans').modal('show');
   });



    $('#btn-suivant').attr('disabled',true);
    //AFFICHER CLIENT
    choixCli();
    function choixCli(){
      $('#btn-find').attr('disabled',true);
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
          $('#btn-find').attr('disabled',false);
           $('#btn-suivant').attr('disabled',false);
          allGroupe();                      
        }
        else if(i == str){          
          $('#codeCli').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#codeGrp').attr('value', '');
          $('#rien').attr('type', 'hidden');
          $('#btn-find').attr('disabled',false);
           $('#btn-suivant').attr('disabled',false);
          AllClient();
        }else{          
          $('#rien').attr('type', 'text');
          $('#codeGrp').attr('type', 'hidden');
          $('#codeCli').attr('type', 'hidden');
          $('#btn-find').attr('disabled',true);
          $('#btn-suivant').attr('disabled',true);
        }
    });
    }

    //CHERCHER CLIENT

      $('#btn-fer').click(function(){
        $('#modalClient').modal('hide');
        $('#modalTrans').modal('show');
        $('#btn-find').attr('disabled',false);
     });


     $('#btn-find').click(function(){
        $('#modalTrans').modal('hide');
        $('#modalClient').modal('show');
         choixCli();
     });

//AFFICHAGE D TOUT CLIENT
//INDIVIDUEL
function AllClient(){
     
      $.ajax({
        type:'ajax',
        method:"get",
        url:"<?php echo base_url();?>index.php/chargeClient",
        dataType:"json",
        async: false,
        success:function(data){
            if(data){
                var c = data;
                var html;
                for (i = 0; i < c.length; i++) {
                    html += '<tr>' +
                    '<td>' + c[i].codeInd + '</td>' +
                    '<td>' + c[i].nomClient +' '+c[i].prenomClient + '</td>' +
                    '<td>' +
                    '<a href="javascript:;" class="btn btn-success btn-sm item-clientInd" vals="' + c[i].nomClient +' '+c[i].prenomClient + '" data="'+ c[i].codeInd+'">Selectionner</a>' +
                    '</td>' +
                    '</tr>';
                }

                //var a=etudiant_table.num_matricule;
                $('#showClient').html(html);
            }
            //$('#pagination_link').html(data.pagination_link);
        },
        error: function(){
            alert('pas de donnée');
        }
    });
}

//GROUPE

function allGroupe(){
    $.ajax({
          type:'ajax',
          method: "get",
          url: '<?php echo base_url();?>index.php/chargeGroupe',
          dataType: 'json',
          async: false,
          success: function(data){
             var html = '';
             var i;
               if(data){
                    var c = data;
                    var html;
                    for (i = 0; i < c.length; i++) {
                        html += '<tr>' +
                        '<td>' + c[i].codeGrp + '</td>' +
                        '<td>' + c[i].nomGroupe + '</td>' +
                        '<td>' +
                        '<a href="javascript:;" class="btn btn-success btn-sm item-clientGrp" vals="' +c[i].nomGroupe+ '" data="'+c[i].codeGrp+'">Selectionner</a>' +
                        '</td>' +
                        '</tr>';
                    }

                    $('#showClient').html(html);
                }

          },
          error: function(){
            alert('Accun Membres trouver!');
           
          }
      });
}


//FERMER CALENDRIER

  $('#fermeCal').click(function(){
      $('#modalAfficheCalendrier').modal('hide');
      $('#modalAdd').modal('show');
  });

  $('#idProduit').change(function() {
    
    var str = "";
    $( "#idProduit option:selected" ).each(function() {
      str += $( this ).attr('value') + " ";
    });

      $.ajax({
      type:'ajax',
      method: "get",
      url: '<?php echo base_url();?>index.php/getConfigProduit',
      dataType: 'json',
      data:{idProdCredit: str},
      async: false,
      success: function(data){
        //alert('ok')
        $('input[name=tauxAnnuel]').val(data.configCreditIndividuel.tauxInteretAnnuel);
        $('input[name=nbTranche]').val(data.configCreditIndividuel.tranches);
        $('input[name=typeTranche]').val(data.configCreditIndividuel.typeTranche);
        $('input[name=modeCalcul]').val(data.configCreditIndividuel.modeCalculInteret);
        $('input[name=diffPaie]').val(data.configCreditIndividuel.differePaiement);
        $('input[name=commission]').val(data.configCreditIndividuel.commission_crédit);

      },
      error: function(){
        alert('Impossible d\'afficher les donnée')
      }

  });

  });

//CLICK SUR LE BOUTTON SUIVANT
$('#btn-suivant').click(function(){
  var codeCli =  $('input[name=codeCli]').val();
  getInfoClient(codeCli);
  
  $('#modalTrans').modal('hide');
  $('#modalInfoCli').modal('show');
});

$('#btn-accept').click(function(){
  $('#dialog').dialog('open');
  $('#modalInfoCli').modal('hide');
});
$('#btn-refuse').click(function(){
  $('#dialog').dialog('close');
  $('#modalInfoCli').modal('hide');
  $('#modalTrans').modal('show');
});



//CHOISIR CLIENT VIA RECHERCHE
$('#showClient').on('click','.item-clientInd', function(){

  var codeCli = $(this).attr('data');
  var nomClient = $(this).attr('vals');
  $('#modalClient').modal('hide');

  $('#modalTrans').modal('show');

  $('input[name=codeCli]').val(codeCli);
  $('input[name=codeInds]').val(codeCli);
  $('#btn-find').attr('disabled',false);
  $('#TeteCard').html('Demande crédit de '+nomClient+', code d\'enregistrement '+ codeCli).Blink();

});

//CHOISIR CLIENT VIA RECHERCHE
$('#showClient').on('click','.item-clientGrp', function(){

  var codeCli = $(this).attr('data');
  var nomClient = $(this).attr('vals');
  $('#modalClient').modal('hide');
  $('#modalTrans').modal('show');

  $('input[name=codeGrp]').val(codeCli);
  $('input[name=codeInds]').val(codeCli);
  $('#btn-find').attr('disabled',false);
  var gr = 'Demande crédit du goupe '+nomClient+', code d\'enregistrement '+ codeCli;

  $('#TeteCard').html(gr);

});


function getInfoClient(code){

     $.ajax({
        type:'ajax',
        method:"get",
        url:'<?php echo base_url();?>index.php/demCredGetInfoClient',
        dataType:'json',
        data : {code : code},
        async: false,
        success:function(donne){
            var corp;

            corp +='<label style="font-size: 17px !important">'+
            '<i style="color: #FFD700;font-size: 22px !important;" class="fa fa-info-circle"></i> '+
            donne+'</label>'+
            '<br>'+
            '<span style="font-size: 15px !important">Voulez vous continuer?</span>'; 

           $('#bodyInfo').html(corp);
        }
    });
} 

});
