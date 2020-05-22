<div class="alert alert-success" style="display: none;margin-top: 25px ">

</div>
<button type="button" style="margin: 10px;float: right" id="btnAdd" class="btn btn-primary btn-sm btn-circle"
data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus-circle"></i> Nouveau Demande</button>

<!--  TABLEAU AFFICHE LA LISTE DES PRODUIT table-hover table-dark -->
<div id="tableDemande" class="table-responsive-sm teteTable" style="padding-right=25px;padding-left=25px;">
<table class="table table-fixed table-bordered table-hover table-sm">
 <caption>Historique de demande</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">N° Crédit</th>
            <th scope="col">N° Client</th>
            <th scope="col">Nom</th>
            <!-- <th scope="col">N° Produit</th> -->
            <th scope="col">Date demande</th>
           <th scope="col">Montant demandé</th>
            <th scope="col">But de Crédit</th>
            <th scope="col">Agent crédit</th>
            <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="showDemande">
 
  </tbody>
</table>
</div>
          if (response < 0) {
               var solde_total = response.demandeCredit.interet_total + response.demandeCredit.principale_total;
              html +='<tr>' +
              '<td>' + response.demandeCredit.numCredit + '</td>' +
              '<td>' + response.dateRemb + '</td>' +
              '<td>' + response.typeAction + '</td>' +
              '<td>' + response.principal + '</td>' +
              '<td>' + response.interet + '</td>' +
              '<td>' + response.restaPaie + '</td>' +
              '<td>' + response.cheqcomm + '</td>' +
              '<td>' + response.stationery + '</td>' +
              '<td>' + response.solde + '</td>' +
              '<td>' + response.totalPrincipale + '</td>' +
              '<td>' + response.totalInteret + '</td>' +
              '<td>' + response.nbEcheance + '</td>' +
              '</tr>';
          }else{
              for (i = 0; i < c.length; i++) {
            var solde_total = c[i].demandeCredit.interet_total + c[i].demandeCredit.principale_total;
              html +='<tr>' +
              '<td>' + c[i].demandeCredit.numCredit + '</td>' +
              '<td>' + c[i].dateRemb + '</td>' +
              '<td>' + c[i].typeAction + '</td>' +
              '<td>' + c[i].principal + '</td>' +
              '<td>' + c[i].interet + '</td>' +
              '<td>' + c[i].restaPaie + '</td>' +
              '<td>' + c[i].cheqcomm + '</td>' +
              '<td>' + c[i].stationery + '</td>' +
              '<td>' + c[i].solde + '</td>' +
              '<td>' + c[i].totalPrincipale + '</td>' +
              '<td>' + c[i].totalInteret + '</td>' +
              '<td>' + c[i].nbEcheance + '</td>' +
              '</tr>';
          }  
          }
        