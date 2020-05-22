<div class="container-fluid" style="margin-top: 5%;margin-left: 10%;">
	<div class="row">
		<div class="col-10 col-10 col-10 col-10">
			<div class="card shadow-lg bg-white rounded">
			  <h5 class="card-header bg-light">Personnels de l'institution</h5>
			  <div class="card-body">
                <button type="button" style="margin: 10px;float: right" id="btnAdd" class="btn btn-sm btn-primary"
                data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus-circle"></i> Nouveau</button>

                <!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
                <div class="table-responsive-sm" style="padding-right=25px;padding-left=25px;">
                <table class="table table-fixed table-bordered table-hover table-sm">
    			  <thead class="thead-light">
                    <caption style="color: #FFD700;font-size: 15px; font-weight : bold;" id="nbr"></caption>
    			    <tr>
    			      <th scope="col">#Code d'inscription</th>
    			      <th scope="col">Nom</th>
    			      <th scope="col">Fonction</th>
                      <th scope="col">Agence</th>
    			      <th scope="col">Action</th>
    			    </tr>
    			  </thead>
    			  <tbody id="showPersonnel">

    			  </tbody>
    			</table>
			</div>
		  </div>
		</div>

		<!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->
			<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nouveau employés</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="myForm" action="" method="post">
			          <div class="form-group row">
			            <label for="nom" class="col-form-label col-sm-4">Nom:</label>

                        <div class="col-sm-8">
			                 <input type="text" class="form-control form-control-sm col-10" name="nom" placeholder="ex: Randria" id="nom" required="required">
                        </div>
			          </div>

                       <div class="form-group row">
                        <label for="prenom" class="col-form-label col-sm-4">Prenom:</label>

                        <div class="col-sm-8">
                             <input type="text" class="form-control form-control-sm col-10" name="prenom" placeholder="ex: Rakotoson" id="prenom" required="required">
                        </div>
                      </div>

                    <div class="form-group row">
                        <label class="col-sm-4" for="fonction">Fonction:</label>
                        <div class="col-sm-6">
                            <select name="fonction" class="form-control form-control-sm col-8" id="fonction">
                                 <?php foreach($fonc->resultat as $vals) :?>
                                    <option value="<?= $vals->idFonction ?>"><?= $vals->libelleFonction ?></option>
                                <?php endforeach; ?>
                            </select>
                         </div>
                    </div>  
			         

                      <div class="form-group row">
                        <label class="col-sm-4" for="agence">Agence:</label>
                        <div class="col-sm-6">
                            <select name="agence" class="form-control form-control-sm col-8" id="agence">
                                 <?php foreach($result->resultat as $val) :?>
                                    <option value="<?= $val->codeAgence ?>"><?= $val->nomAgence ?></option>
                                <?php endforeach; ?>
                            </select>
                         </div>
                    </div>  
			        
                    </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-eye-slash"></i> Fermer</button>
			        <button type="button" id="btnSave" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Enregistrer</button>
			      </div>
			    </div>
			  </div>
			</div>

	</div>
</div>
</div>
<script>
$(function(){ 

//FONCTION CHARGE LES LISTES DES PRODUIT
function load_personnel(){

     $.ajax({
            type:'ajax',
            method:"get",
            url:"<?php echo base_url();?>index.php/chargePersonnels",
            dataType:"json",
            async: false,
            success:function(data){
                if(data){
                    var c = data;
                    var html;
                    if(c.length == null){

                        html += '<tr>' +
                            '<td>' + c.codePersonnel + '</td>' +
                            '<td>' + c.nom +' '+ c.prenom + '</td>' +
                            '<td>' + c.fonction.libelleFonction + '</td>' +
                            '<td>' + c.agence.nomAgence + '</td>' +
                            '<td>' +        
                            '<a href="javascript:;" class="btn btn-success btn-sm item-voir" role="button">'+
                            '<i class="fa fa-eye"></i> Voir client</a>' +
                            '</td>' +
                            '</tr>';

                    }else{
                        for (i = 0; i < c.length; i++) {
                            html += '<tr>' +
                            '<td>' + c[i].codePersonnel + '</td>' +
                            '<td>' + c[i].nom +' '+ c[i].prenom + '</td>' +
                            '<td>' + c[i].fonction.libelleFonction + '</td>' +
                            '<td>' + c[i].agence.nomAgence + '</td>' +
                            '<td>' +        
                            '<a href="javascript:;" class="btn btn-success btn-sm item-voir" role="button">'+
                            '<i class="fa fa-eye"></i> Voir client</a>' +
                            '</td>' +
                            '</tr>';
                        }
                        
                    }

                    $('#nbr').html('Total Personnels : '+ c.length);
                    $('#showPersonnel').html(html);
                }
            }
        });
}

load_personnel();

//AJOUTER NOUVEAU PRODUIT
$('#btnAdd').click(function(){
    $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ajoutPersonnels');

});

$('#btnSave').click(function(){

	var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();

    	$.ajax({
            type:'ajax',
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {


                    $('#modalAdd').modal('hide');
                    $('#myForm')[0].reset();
                    load_personnel();

                    console.log(response);
                    $.notify({            
                        message: 'Enregistrement reussit!'
                    },{
                        type: 'success',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                }
                else {
                    $.notify({            
                        message: 'Erreur inconnu!'
                    },{
                        type: 'danger',
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                }
            },
            error: function(){
            $.notify({            
                    message: 'Information non enregistrer!'
                },{
                    type: 'warning',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });
            }
        });

});


});

</script>