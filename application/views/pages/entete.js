function utils(){		

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
                      return item.codeInd + " |" +item.nomClient +" " +item.prenomClient;//
                  }));
              }
          });
      },
      select: function(event,ui) {
          var c = ui.item.value.split(' |');
          $('#nom').val(c[1]);
          $(this).val(c[0]);
          var id =  c[0];
          getAllCompte(id);
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
}

$(function(){

//SAISIE N° DE COMPTE
  $("#text_cherche").autocomplete({
      source: function(request, response){
        var code = $("#text_cherche").val();
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


});