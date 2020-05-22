
<!DOCTYPE html>
<html>
	<head>
<title>Gestion d'outil de Microfinance'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/fidev.jpg"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/font-awesome-5/css/fontawesome-all.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/jquery.dataTables.min.css');?>"/>

    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
	</head>
	<body class="text-secondary">
		<div id="page">

<div class="modal fade" data-backdrop="static" id="connexion" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="modalLabel">
        			<span class="fa fa-lock"></span> &nbsp;CONNEXION
        		</h5>
      		</div>
      		<div class="modal-body">
      			<?php
	                if(validation_errors()) {
	                    ?>
	                    <div class="alert alert-danger alert-dismissable" role="alert">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
	                        </button>
	                        <strong><?php echo validation_errors()?></strong>
	                        
	                    </div>
	                <?php
	                }
	            ?>
	      		<form action="<?php echo site_url('login');?>" method="post">
	      			
	      			<div class="form-group">
			    		<label for="login">Utilisateur :</label>
			    		<input type="text" class="form-control" name="login" minlength="2" required>
			  		</div>
			  		<div class="form-group">
			    		<label for="mdp">Mot de passe :</label>
			    		<input type="password" class="form-control" name="mdp" min="1" placeholder="*****" minlength="3" required>
			  		</div>
	      		</div>
				    <div class="modal-footer">
				        <button type="submit" name="login" class="btn btn-secondary" >		  
				        	<span class="fa fa-unlock"></span> &nbsp; Se connecter &nbsp;
				    	</button>
				    </div>
				</form>
    	</div>
  	</div>
</div>
<script type="text/javascript">
	$("#connexion").modal();
	$('#btcon').click(function(){
		var url = $('#myForm').attr('action', '<?php echo base_url(); ?>index.php');
        var data = $('#myForm').serialize();

        $.ajax({
            method: "post",
            url: url,
            dataType:'json',
            data: data,
            async: false,
            success: function() {
                 alert('ok');
            },
            error: function(){
                alert('pas de donnée');
            }       	
        });
	});
</script>
		</div>



   <div class="container" style="margin-top: 100px;">

    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>AUTHENTIFICATION</h1>
                    </div>

                    <div class="panel-body">
                        <?php
                        if(validation_errors()) {
                            ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <strong><?php echo validation_errors()?></strong>
                                
                            </div>
                        <?php
                        }
                        ?>
                       
                </div>
            </div>

        <div class="col-md-4"></div>
    </div>
</div>


    

 
<label for="montant">Montant</label>
<input onkeyup="verif_nombre(this);" name="montant" id="montant" type="text" size="10" /> <i>exemple : 5626</i>

<footer style="margin-bottom: 0;bottom: 0;">
    <nav class="navbar navbar-inverse navbar-fixed-bottom" >
        <h4 align="center" style="color: #FFFFFF">Projet CodeIgniter L3 Hybride 2017</h4>
    </nav>
</footer>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.1.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
		



<script language="Javascript">
function verif_nombre(champ)
  {


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
                    tete +='<table class="table table-fixed table-bordered table-hover table-sm">'+
                     '<caption id="total_credit"></caption>'+
                     '<thead id="showEnTete" class="thead-light" style="background-color: #3f87a6; color: white;">'+
                     '<tr>' +
                     '<td>' + c[j].numCpt + '</td>' +
                     '<td>' + c[j].label + '</td>' +
                     '<td>' + c[j].soldeInit + '</td>' +
                     '</tr>'+
                     '</thead>'+
                     '<tbody id="showGrandLivre">'+
                     mouvement(c[j].tkey);  

                    +'</tbody>'+
                    '</table>';
               
                }
                 $('#PageAimprimer').html(tete);
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


    var chiffres = new RegExp("[0-9]");
    var verif;
    var points = 0;
 
    for(x = 0; x < champ.value.length; x++)
    {
            verif = chiffres.test(champ.value.charAt(x));
        if(champ.value.charAt(x) == "."){points++;}
            if(points > 1){verif = false; points = 1;}
        if(verif == false){champ.value = champ.value.substr(0,x) + champ.value.substr(x+1,champ.value.length-x+1); x--;}
    }
  }
</script>
	</body>
</html>






body{
  background-color: #bdc3c7;
}



<div class="container">
  <table class="table table-fixed">
    <thead>
      <tr>
        <th class="col-xs-3">First Name</th>
        <th class="col-xs-3">Last Name</th>
        <th class="col-xs-6">E-mail</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>

      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
      <tr>
        <td class="col-xs-3">John</td>
        <td class="col-xs-3">Doe</td>
        <td class="col-xs-6">johndoe@email.com</td>
      </tr>
    </tbody>
  </table>
</div>

  // Montant a remboursé
            double montRembourser = 0.0;
            
            // Recuperer le montant reste au dernier
            // remboursement

            Query qr = em.createQuery("SELECT r.restaPaie FROM Remboursement r JOIN r.demandeCredit numDem"
                    + " WHERE r.dateRemb =( SELECT MAX(rb.dateRemb) FROM Remboursement rb JOIN rb.demandeCredit nums WHERE nums.numCredit"
                    + "= :numsCredit) AND numDem.numCredit = :numero");
            qr.setParameter("numsCredit", numCredit);
            qr.setParameter("numero", numCredit);

            // On considère que le paiement de l'interet est
            // prioritaire

            List listReq = qr.getResultList();
            if (listReq.isEmpty()) {
              montRembourser = montant;

            } else {
              double derRestPaie = (double)qr.getSingleResult();
              montRembourser = montant + derRestPaie;               
              System.out.println("montant reste de dernière paiement : "+ derRestPaie);
            }

            double restPaieInt = montRembourser - inter;
            double interetRemb = 0.0;
            double principaleRem = 0.0;
            double soldRest = 0.0;
            double restPaiePrinc = 0.0;

            if (restPaieInt > 0.0) {

              interetRemb = inter;

              restPaiePrinc = restPaieInt - princ;

              if (restPaiePrinc >= 0.0) {
                principaleRem = princ;                
                cals.setPayer(true);
              } else if (restPaiePrinc < 0.0) {
                principaleRem = restPaieInt;
                cals.setMprinc(restPaiePrinc);
                cals.setPayer(true);
              }

              soldRest = restPaiePrinc;

              principalTotal = principalTotal - principaleRem;
              interetTotal = interetTotal - interetRemb;
              soldeTotal = principalTotal + interetTotal;//

              if (soldeTotal == 0.0) {
                dm.setApprobationStatut("Credit remboursé");
              }

              // Insertion au GrandLivre
              double tots = principaleRem + interetRemb;
              String cptC = String.valueOf(cptCaisse
                  .getAccount().getTkey());

              // Solde Debité
              debit.setTcode(indexTcode);
              debit.setDate(date);
              debit.setDescr("Remboursement du crédit "
                  + numCredit);
              debit.setPiece(piece);
              debit.setUserId(ut.getNomUtilisateur());
              debit.setCompte(cptC);
              debit.setDebit(tots);
              debit.setCodeInd(dm.getIndividuel());

              // Solde Crédité 1 (Principal)
              credit1.setTcode(indexTcode);
              credit1.setDate(date);
              credit1.setDescr("Remboursement principal du crédit "
                  + numCredit);
              credit1.setPiece(piece);
              credit1.setUserId(ut.getNomUtilisateur());
              credit1.setCompte(confGl
                  .getCptPrincEnCoursInd());
              credit1.setCredit(principaleRem);
              credit1.setCodeInd(dm.getIndividuel());

              // Solde Crédité 2 (Interet)

              credit2.setTcode(indexTcode);
              credit2.setDate(date);
              credit2.setDescr("Remboursement Interet du crédit "
                  + numCredit);
              credit2.setPiece(piece);
              credit2.setUserId(ut.getNomUtilisateur());
              credit2.setCompte(confGl.getCptIntRecCrdtInd());
              credit2.setCredit(interetRemb);
              credit2.setCodeInd(dm.getIndividuel());

              // Inserer au Entité Remboursement

              saveRemb.setTcode(indexTcode);
              saveRemb.setDemandeCredit(dm);
              saveRemb.setUtilisateur(ut);
              saveRemb.setDateRemb(date);
              saveRemb.setPiece(piece);
              saveRemb.setCash(cash);
              saveRemb.setCptCaisseNum(cptC);
              saveRemb.setCheqid(0);
              saveRemb.setCheqcomm(0);
              saveRemb.setStationery(0);
              saveRemb.setOverpay(0);
              saveRemb.setPrincipal(principaleRem);
              saveRemb.setInteret(interetRemb);
              saveRemb.setMontant_paye(montant);
              saveRemb.setRestaPaie(soldRest);

              // Modification sur l'entité DemandeCredit
              dm.setSolde_total(soldeTotal);
              dm.setPrincipale_total(principalTotal);
              dm.setInteret_total(interetTotal);

              // Modification sur l'entité Calapresdebl

              try {
                transaction.begin();
                em.persist(saveRemb);
                em.persist(debit);
                em.persist(credit1);
                em.persist(credit2);
                em.merge(cals);
                em.merge(dm);
                transaction.commit();
                em.refresh(saveRemb);

                results = "Remboursement Enregistrer!!!";
                System.out.println(results);
                retour = true;
              } catch (Exception e) {
                e.printStackTrace();
              } finally {
                if (em == null) {
                  em.close();
                }

              }

            } else if (restPaieInt < 0.0) {
              System.out.println("montant inferieur au interet due");
            }
            