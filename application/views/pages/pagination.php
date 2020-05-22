
    $('#logins').click(function(){

        var data = $('#myForm').serialize(); 

        var login = $('input[name=login]');
        var mdp= $('input[name=mdp]');

        var result = '';

        if(login.val() == ''){
          $('#pseudo').addClass('is-invalid');
        }else{
          $('#pseudo').removeClass('is-invalid');
          result +='1';
        } 
        if(mdp.val() == ''){
          $('#mdp').addClass('is-invalid');
        }else{
          $('#mdp').removeClass('is-invalid');
          result +='2';
        }

        if(result == '12'){
            $.ajax({
            type:'',
            method: "post",
            url: '<?php echo base_url();?>index.php/connection',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                
                                                 
            },
            error: function(response){
              $('.alert-danger').html('<i class="fa fa-delete">'+'</i>'+'&nbsp;'+'Auccun resultat de votre recherche!')
              .fadeIn().delay(2000).fadeOut('slow');
            }
         });
        }else{
          $.notify({            
              message: 'Veuillez choisir la date!!!' 
          },{
              type: 'danger',
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });
        }                                                                               

    });


function load_donner(){
      $.ajax({
          type:'ajax',
          method:"get",
          url:"<?php echo base_url();?>index.php/welcome/pagination/",
          dataType:"json",
          async: false,
          success:function(data){
              if(data.etudiant_table){
                  var c = data.etudiant_table;
                  var html;
                  for (i = 0; i < c.length; i++) {
                      html += '<tr>' +
                      '<td>' + c[i].num_matricule + '</td>' +
                      '<td>' + c[i].nom_et + '</td>' +
                      '<td>' + c[i].prenom_et + '</td>' +
                      '<td>' + c[i].dat_nais + '</td>' +
                      '<td>' + c[i].sexe + '</td>' +
                      '<td>' + c[i].nom_niv + '</td>' +
                      '<td>' + c[i].nom_parcour + '</td>' +
                      '<td>' + c[i].entrer + '</td>' +
                      '<td>' +
                      '<a href="javascript:;" class="btn btn-success item-voir" data="'+ c[i].num_et+'"><span class="glyphicon glyphicon-eye-open"></span>Détail</a>' +
                      '&nbsp;<a href="javascript:;" class="btn btn-info item-edit" data="' + c[i].num_et+'"><span class="glyphicon glyphicon-edit"></span> Modifier</a>' +
                      '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger item-delete" data="' + c[i].num_et+'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>' +
                      '</td>' +
                      '</tr>';
                      $('#h2').html('<h3 style="color: #000000">'+data.etudiant_table[i].nom_niv+'&nbsp;'+c[i].nom_parcour+'&nbsp;:&nbsp;'+c[i].debut+' - '+c[i].fin+'</h3>');
                      //$('#an').html('<h3 style="color: #000000">'+'Année universitaire'+data[i].debut+'&nbsp;'+data[i].fin+'</h3>');
                  }

                  //var a=etudiant_table.num_matricule;
                  $('#showdata').html(html);
              }
              //$('#pagination_link').html(data.pagination_link);
          },
      error: function(){
          alert('pas de donnée');
      }
      });
  }

  <?php if($loginUtilisateur == "eddy") { ?>
        <?php } ?>