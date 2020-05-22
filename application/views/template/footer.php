
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Outil de gestion de microfinance, <a href="https://www.fidev.mg">www.fidev.mg</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
    
    //fonction à appeler pour le control du champ numerique
    function keyPress (e) {
        e = e || window.event;
        var c = e.keyCode;
        return c>=48 && c<=55;
    }

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

    function choixClients(){
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
                  $('input[name=codeCli]').val('');                     
                  $('#rien').attr('type', 'hidden');                       
                }
                else if(i == str){          
                  $('#codeCli').attr('type', 'text');
                  $('#codeGrp').attr('type', 'hidden');
                  $('input[name=codeGrp]').val('');
                  $('#rien').attr('type', 'hidden');
                }else{
                  
                  $('#rien').attr('type', 'text');
                  $('#codeGrp').attr('type', 'hidden');
                  $('#codeCli').attr('type', 'hidden');
                }


          });
    }

    function choixPaye(){
            //CHOIX PAYEMENT

           $('#cash').click(function() {

              $('#affGuichet').attr('style', 'display: bloc;');                                             
              $('#affCheque').attr('style', 'display: none;');                                             
              $('#affMob').attr('style', 'display: none;');
               $('#affEp').attr('style', 'display: none;');                                             
          });

           $('#cheque').click(function() {

              $('#affCheque').attr('style', 'display: bloc;');                                             
              $('#affGuichet').attr('style', 'display: none;');                                             
              $('#affMob').attr('style', 'display: none;');  
               $('#affEp').attr('style', 'display: none;');                                           
          });

           $('#mobile').click(function() {

              $('#affMob').attr('style', 'display: bloc;');                                             
              $('#affEp').attr('style', 'display: none;');
              $('#affGuichet').attr('style', 'display: none;');                                             
              $('#affCheque').attr('style', 'display: none;');                                             
          });

           $('#epargne').click(function() {

              $('#affEp').attr('style', 'display: bloc;');                                             
              $('#affMob').attr('style', 'display: none;');                                             
              $('#affGuichet').attr('style', 'display: none;');                                             
              $('#affCheque').attr('style', 'display: none;');                                             
          });

    }

    function getAllCompte(id){

    $.ajax({
      type:'ajax',
      method:"get",
      url:'<?php echo base_url();?>index.php/getDetailClient',
      dataType:'json',
      data: {id:id},
      async: false,
        success: function(response) {
            //alert(response);
            var detailEpargne;
            var epargne = response.epargne;
            var c;
            if (response.success) {

                //détail épargne
                if(epargne.length == null){
                 c = 1;
                detailEpargne += '<tr>' +
                '<td>' + epargne.numCompteEp + '</td>' +
                '<td>' + epargne.produitEpargne.idProdEpargne +' | '+ epargne.produitEpargne.nomProdEpargne + '</td>' +
                '<td>' + epargne.dateOuverture + '</td>' +
                '<td>' + epargne.solde + '</td>' +
                '</tr>';
                }else{
                  c = epargne.length;
                  for (i = 0; i < epargne.length; i++) {
                    detailEpargne += '<tr>' +
                    '<td>' + epargne[i].numCompteEp + '</td>' +
                    '<td>' + epargne[i].produitEpargne.idProdEpargne +' | '+ epargne[i].produitEpargne.nomProdEpargne + '</td>' +
                    '<td>' + epargne[i].dateOuverture + '</td>' +
                    '<td>' + epargne[i].solde + '</td>' +
                    '</tr>';
                  }
                  
                }

                $('#showdata').html(detailEpargne);
                $('#ls').html('Liste comptes: '+c);

            }
          
        },
        error: function(response){
           $('#showdata').html('');
           $('#ls').html('Liste compte: '+0);
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

</script>