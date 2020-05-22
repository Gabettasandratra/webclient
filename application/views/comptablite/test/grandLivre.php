<div id="dialog" title="Journal Caisse" style="margin-top: 2%">

  	<div id="PageAimprimer" class="table-responsive-sm">
        <table class="table table-fixed table-bordered table-hover table-sm">
         <caption id="total_credit"></caption>
          <thead id="showEnTete" class="thead-light" style="background-color: #3f87a6; color: white;">
          
          </thead>
          <tbody id="showGrandLivre">
		
          </tbody>
        </table>
    </div>
			   
</div>

<script type="text/javascript">

$(function(){

    $( "#dialog" ).dialog({
      autoOpen: true,
      width: 1510,
      height: 550,
      show: {
        effect: "none",
        duration: 800,      
      },
      hide: {
        effect: "explode",
        duration: 1000
    }
    });

//TEST
  afficher();
function afficher(){
       $.ajax({
        type:'ajax',
        method:"get",
        url:'<?php echo base_url();?>index.php/getCompteDistinct',
        dataType:'json',
        async: false,
        success:function(response){
            if(!response.erreur){
                var c = response;
                var tete;
                var tkey;
                var j;
                for (j = 0; j < c.length; j++) {

                    tkey = c[j].tkey;
               
                }
                    tete += '<tr>' +
                    '<td colspan=2>' + c[11].numCpt + '</td>' +
                    '<td colspan=2>' + c[11].label + '</td>' +
                    '<td>' + c[11].soldeInit + '</td>' +
                    '<td>MGA</td>' +
                    '<td>[CREDITEUR]</td>' +
                    '</tr>';
                    mouvement(c[11].tkey);

                $('#showEnTete').html(tete);
            }
        },
        error: function(){
            $.notify({            
                message: 'Accun donnée trouvé'
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

function mouvement(id){
       $.ajax({
        type:'ajax',
        method:"get",
        url:'<?php echo base_url();?>index.php/getJournalCaisse',
        dataType:'json',
        data : {id : id},
        async: false,
        success:function(donne){
            if(!donne.erreur){
                var c = donne;
                var html;

                if(c.length == null){
                     html += '<tr>' +
                    '<td>' + c.tcode + '</td>' +
                    '<td>' + c.account.numCpt + '</td>' +
                    '<td>' + c.date + '</td>' +
                    '<td>' + c.descr + '</td>' +
                    '<td>' + c.piece + '</td>' +
                    '<td>' + c.debit + '</td>' +
                    '<td>' + c.credit + '</td>' +
                    '</tr>';
                }else{
                     for (i = 0; i < c.length; i++) {
                        html += '<tr>' +
                        '<td>' + c[i].tcode + '</td>' +
                        '<td>' + c[i].account.numCpt + '</td>' +
                        '<td>' + c[i].date + '</td>' +
                        '<td>' + c[i].descr + '</td>' +           
                        '<td>' + c[i].piece + '</td>' +
                        '<td>' + c[i].debit + '</td>' +
                        '<td>' + c[i].credit + '</td>' +
                        '</tr>';
                    }
                }
                $('#showGrandLivre').html(html);
            }
        },
        error: function(){
              $.notify({            
                message: 'Accun donnée trouvé'
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

  /* g = c[j].grandLivres;
                  for (var i = 0; i < g.length; i++) {
                    html += '<tr>' +
                    '<td>' + g[i].tcode + '</td>' +
                    '<td>' + g[i].compte + '</td>' +
                    '<td>' + g[i].date + '</td>' +
                    '<td>' + g[i].descr + '</td>' +
                    '<td>' + g[i].debit + '</td>' +
                    '<td>' + g[i].credit + '</td>' +
                    '<td>' + g[i].piece + '</td>' +
                    '</tr>';
                  };*/


});

</script>