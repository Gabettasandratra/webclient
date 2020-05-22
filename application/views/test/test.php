  <div class="row">
    <div class="col-12">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Produits épargne</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
               
          <hr>
          <br/>
          <div class="col-12">
             
              
           <!--   <table class="table table-sm">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#Id produit</th>
                    <th scope="col">Type de produit</th>
                    <th scope="col">Nom produit</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody id="showProduit">
                  
                </tbody>
              </table>
 -->
          </div>


          </div>

        </div>
      </div>
    </div>
</div>
CONFIG FRAIS CREDIT

  <div class="form-group row">
                <label class="col-sm-2" for="idProduit">Produit</label>
            <div class="col-sm-8">
              <select name="idProduit" class="form-control form-control-sm col-8" name="idProduit" id="idProduit">
                 <?php foreach($result->Listes_ProduitCredit as $value) :?>
                            <option value="<?= $value->idProdCredit ?>"><?= $value->nomProdCredit ?></option>
                        <?php endforeach; ?>
            </select>
             </div>
            </div>
               

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="demandeOUdecaisse" type="checkbox" value="1" id="demandeOUdecaisse">
                <label class="form-check-label" for="demandeOUdecaisse">
                  Frais au decaissement ou à la demande
                </label>
              </div>
            </div>

table {
     font-family: arial, sans-serif;
     border-collapse: collapse;
     width: 100%;
    }
    td,
    th {
     border: 1px solid #dddddd;
     text-align: left;
     padding: 8px;
    }
    th {
     background-color: #ccd;
    }
    tr:nth-child(even) {
     background-color: #dddddd;
    }
    tr:nth-child(odd) {
     background-color: #ddeedd;
    }
    .highlight {
     background-color: Yellow;
     color: Green;
    }

  
 <div class="form-group row">
    
    <label for="totalVal" class="col-sm-6" style="color: blue;">Total garantie: </label>
   
    <div class="col-sm-4">
    </div>

 </div> 

 <div class="form-group row">
    
    <label for="monts" class="col-sm-6" style="color: blue;">Montant demandé: </label>
   
    <div class="col-sm-4">
      <input type="hidden" id="monts" class="form-control form-control-sm" name="monts">
    </div>

 </div> 

 <div class="form-group row">
    
    <label for="percentVal" class="col-sm-6" style="color: blue;">Pourcentage total: </label>
   
    <div class="col-sm-2" style="float: right;">
      <input type="number" id="percentVal" class="form-control form-control-sm" name="percentVal" disabled>
    </div>

    <div class="col-sm-1" style="float: right;">
      <label style="color: blue;">%</label>
    </div>
    
    <div class="col-sm-2" style="float: right;">
        <button type="button" id="valdPercent" class="btn btn-primary btn-sm">Valider</button>
        <button type="button" id="AnnulPercent" style="display: none;" class="btn btn-danger btn-sm">Annuler</button>
    </div>

 </div> 


   <div id="affAgence" class="form-group row">              
                      <label id="lab" for="agence" class="col-sm-4">Agence:</label>             
                      <div class="col-sm-8">  
                        <input type="text" class="form-control form-control-sm col-12" name="agences" id="agence">                        
                      </div>
                    </div>

                  <div class="form-group row">
                      <label for="adresse" class="col-sm-4">Adresse:</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control form-control-sm col-12" name="adresses" id="adresse">
                      </div>
                   </div>

                   <div class="form-group row">
                      <label for="proffession" class="col-sm-4">Proffession:</label>
                      <div class="col-sm-8">
                         <input type="text" class="form-control form-control-sm col-12" name="proffessions" id="proffession">
                      </div>
                   </div>
 

                   <div class="form-group row">
                      <label for="niveauEtude" class="col-sm-4">Niveau d'étude:</label>
                      <div class="col-sm-8">
                       <select name="niveauEtudes" class="form-control form-control-sm col-12" id="niveauEtude">
                            <option></option>
                            <option>Illetré</option>
                            <option>Primaire</option>
                            <option>Secondaire premier Cycle</option>
                            <option>Secondaire premier Cycle</option>
                            <option>Secondaire second Cycle</option>
                            <option>Universitaire</option>
                        </select>
                      </div>
                   </div> 

                   <div class="form-group row">
                      <label for="sexe" class="col-sm-4">Sexe:</label>
                      <div class="col-sm-8">
                         <select name="sexes" class="form-control form-control-sm col-12" id="sexe">
                            <option></option>
                            <option>masculin</option>
                            <option>feminin</option>
                        </select>
                      </div>
                   </div>   

                  <div id="affDeb" class="form-group row">
                      <label for="dateDeb" class="col-sm-4">Date inscription entre:</label>
                      <div class="col-sm-4">
                        <input type="date" id='dateDeb' name="dateDebs" class="form-control form-control-sm col-12">                       
                      </div>
                       <div class="col-sm-4">
                        <input type="date" id='dateDeb' name="dateDebs" class="form-control form-control-sm col-12">                       
                      </div>
                   </div>   
                
                    <div id="affFin" class="form-group row">              
                      <label for="dateFin" class="col-sm-4 lab-date">et:</label>                 
                      <div class="col-sm-8">  
                         <input type="date" class="form-control form-control-sm col-8" name="dateFins" id="dateFin">
                      </div>
                    </div>




    //CHOIX DU TYPE D'AFFICHAGE

     $('#type').change(function() { 

        var str = "";
       
        var tout = new String('tout');
        var agence = new String('agence');
        var inscription = new String('inscription');
        var adresse = new String('adresse');
        var dateNais = new String('dateNais');
        var proffession = new String('proffession');
        var etude = new String('etude');
        var sexe = new String('sexe');
       
        $( "#type option:selected" ).each(function() {
          str += $( this ).attr('value');
        });


        if(tout == str){
          $('#affAgence').attr('style', 'display : none;');  
          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          AllClient();

           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');
           
         /* $( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected('');*/
          /*each(function() {
            str += $( this ).attr('value');
          });*/
           $('input[name=startDate]').val('');
           $('input[name=dateDeb]').val('');
           $('input[name=endDate]').val('');
           $('input[name=dateFin]').val('');
        }
        else if(agence == str){          
          $('#affAgence').attr('style', 'display : bloc;');  
          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          $('#lab').html('Agence');

          $('#agence').attr('type', 'text');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : none;');  


          $('input[name=agence]').val('');
          $('input[name=adresse]').val('');
          $('input[name=proffession]').val('');

    /*      $( "#niveauEtude option:selected" ).each(function() {
           $( this ).attr('value', '');
        });*/

          /*$("#niveauEtude").selected('');
          $("#sexe").selected('');*/

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'hidden');
          $('#dateFin').attr('type', 'hidden');  
         
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');
          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }else if(inscription == str){ 
          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');

          $('#affAgence').attr('style', 'display : none;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : none;');  


         $('input[name=agence]').val('');
         $('input[name=adresse]').val('');
         $('input[name=proffession]').val('');
         /*$( "#niveauEtude" ).selected('');
         $( "#sexe" ).selected(''); */
          
         $('input[name=startDate]').val('');
         $('input[name=endDate]').val('');

         $('#startDate').attr('type', 'date');
         $('#endDate').attr('type', 'date');

         $('#dateDeb').attr('type', 'hidden');
         $('#dateFin').attr('type', 'hidden');

         $('input[name=dateDeb]').val('');
         $('input[name=dateFin]').val('');

        }else if(adresse == str){

           $('#lab').html('Adresse');

          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          $('#affAgence').attr('style', 'display : bloc;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'text');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : none;');  


           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');

          /*$( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected(''); */
          
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'hidden');
          $('#dateFin').attr('type', 'hidden');

          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }    
        else if(dateNais == str){

          $('#affDeb').attr('style', 'display : bloc;');                     
          $('#affFin').attr('style', 'display : bloc;');

          $('#affAgence').attr('style', 'display : none;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : none;');  


           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');

        /*  $( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected('');*/ 
          
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'date');
          $('#dateFin').attr('type', 'date');

          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }    
        else if(proffession == str){

           $('#lab').html('Proffession');

          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          $('#affAgence').attr('style', 'display : bloc;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'text');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : none;');  


           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');

          /*$( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected(''); */
          
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'hidden');
          $('#dateFin').attr('type', 'hidden');

          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }  
        else if(etude == str){

           $('#lab').html('Niveau d\'étude');

          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          $('#affAgence').attr('style', 'display : bloc;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : bloc;');  
          $('#sexe').attr('style', 'display : none;');  


           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');

          /*$( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected(''); */
          
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'hidden');
          $('#dateFin').attr('type', 'hidden');

          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }else if(sexe == str){

           $('#lab').html('Sexe');

          $('#affDeb').attr('style', 'display : none;');                     
          $('#affFin').attr('style', 'display : none;');

          $('#affAgence').attr('style', 'display : bloc;');  

          $('#agence').attr('type', 'hidden');
          $('#adresse').attr('type', 'hidden');
          $('#proffession').attr('type', 'hidden');
          $('#niveauEtude').attr('style', 'display : none;');  
          $('#sexe').attr('style', 'display : bloc;');  


           $('input[name=agence]').val('');
           $('input[name=adresse]').val('');
           $('input[name=proffession]').val('');

          /*$( "#niveauEtude" ).selected('');
          $( "#sexe" ).selected(''); */
          
          $('input[name=startDate]').val('');
          $('input[name=endDate]').val('');

          $('#startDate').attr('type', 'hidden');
          $('#endDate').attr('type', 'hidden');

          $('#dateDeb').attr('type', 'hidden');
          $('#dateFin').attr('type', 'hidden');

          $('input[name=dateDeb]').val('');
          $('input[name=dateFin]').val('');

        }    

  });


<!-- 
            <legend style="text-align: left;font-size: 18px !important;" class="col-sm-12">Compte d'équilibre</legend>
                <hr class="col-11" style="margin-right: 50%;">

                <table class="table table-borderless">
                   <thead>
                      <tr>
                        <th scope="col">code budgétaire</th>
                        <th scope="col">libellé</th>
                        <th scope="col">compte</th>
                        <th scope="col">solde</th>
                      </tr>
                    </thead>
                    <tbody id="budget">
                         <tr>
                          <td><input type="text" class="form-control form-control-sm col-12" name="codBudget" id="codBudget"></td>
                          <td><input type="text" class="form-control form-control-sm col-12" id="nomBudget" disabled></td>
                          <td><input type="text" class="form-control form-control-sm col-12" name="comptBudget" id="comptBudget"></td>
                          <td><input type="text" class="form-control form-control-sm col-12" name="soldeBudget" id="soldeBudget"></td>
                          <td><button type="button" id="ajouter" class="btn btn-sm btn-primary">Ajouter</button></td>
                        </tr>
                    </tbody>
                </table> -->

  /*List<Account> compte = getCompteDistinct();
  List<Grandlivre> list = new ArrayList<Grandlivre>();
  
  for (int i = 0; i < compte.size(); i++) {
    System.out.println("tkey :"+compte.get(i).getTkey()+"\n");
    
    String sql = "select gr from Grandlivre gr join gr.account a where a.tkey = '"+compte.get(i).getTkey()+"'";
    
    TypedQuery<Grandlivre> query = em.createQuery(sql,Grandlivre.class);
    
    list = query.getResultList();   
  }
  
  for (int i = 0; i < list.size(); i++) {
    System.out.println("Tkey :"+list.get(i).getAccount().getTkey());
    
    System.out.println("Tcode :"+list.get(i).getTcode());
    System.out.println("Compte :"+list.get(i).getAccount().getNumCpt());
    System.out.println("Debit :"+list.get(i).getDebit());
    System.out.println("Credit :"+list.get(i).getCredit());
    System.out.println("Date :"+list.get(i).getDate() +"\n");
  }*/
    //CHOIX DU TYPE DE RAPPORT

     $('#type').change(function() {
        
        var str = "";
       
        var prod = new String('produit');
        var prodDate = new String('produitParDate');
        var cli = new String('client');
        var cliDate = new String('clientParDate');
        var compt = new String('compte');
        var comptDate = new String('compteParDate');
        var user = new String('utilisateur');
        var userDate = new String('utilisateurDate');
        var date = new String('date');
       
        $( "#type option:selected" ).each(function() {
          str += $( this ).attr('value');
        });


        if(date == str){
          $('#affdate').attr('style', 'display : bloc;');  

          $('#affChoix').attr('style', 'display : none;');                     
          $('#affProd').attr('style', 'display : none;');
          $('#affClient').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');

           $('#idUser').attr('value', '');
           $('#numCompte option').attr('value', '');
           $('#codeCli').attr('value', '');
           $('#codeGrp').attr('value', '');
           $('#produit option').attr('value', '');
                  
        }
        else if(prod == str){          
          $('#affProd').attr('style', 'display : bloc;');

          $('#affChoix').attr('style', 'display : none;');
          $('#affdate').attr('style', 'display : none;');
          $('#affClient').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');
          
          $('#dateDeb').attr('value', '');
          $('#dateFin').attr('value', '');
          $('#idUser').attr('value', '');
          $('#numCompte option').attr('value', '');
          $('#codeCli').attr('value', '');
          $('#codeGrp').attr('value', '');
        }else if(cli == str){
          
          $('#affClient').attr('style', 'display : bloc;');
          $('#affChoix').attr('style', 'display : bloc;');

          $('#affProd').attr('style', 'display : none;');
          $('#affdate').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');

          $('#dateDeb').attr('value', '');
          $('#dateFin').attr('value', '');
          $('#idUser').attr('value', '');
          $('#numCompte option').attr('value', '');
          $('#produit option').attr('value', '');
        }
        else if(compt == str){
          
          $('#affChoix').attr('style', 'display : bloc;');
          $('#affClient').attr('style', 'display : bloc;');
          $('#affCompte').attr('style', 'display : bloc;');

          $('#affProd').attr('style', 'display : none;');          
          $('#affdate').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');


          $('#dateDeb').attr('value', '');
          $('#dateFin').attr('value', '');
          $('#idUser').attr('value', '');
          $('#produit option').attr('value', '');       
           }
        else if(user == str){
                  
          $('#affUser').attr('style', 'display : bloc;');
          $('#idUser').attr('value', '<?php echo $idUtilisateur ?>');

          $('#affChoix').attr('style', 'display : none;');
          $('#affClient').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          $('#affProd').attr('style', 'display : none;');
          $('#affdate').attr('style', 'display : none;');

          $('#dateDeb').attr('value', '');
          $('#dateFin').attr('value', '');
          $('#numCompte option').attr('value', '');
          $('#codeCli').attr('value', '');
          $('#codeGrp').attr('value', '');
          $('#produit option').attr('value', ''); 
        }
        else if(userDate == str){
                  
          $('#affUser').attr('style', 'display : bloc;');
          $('#affdate').attr('style', 'display : bloc;');
           $('#idUser').attr('value', '<?php echo $idUtilisateur ?>');

          $('#affChoix').attr('style', 'display : none;');
          $('#affClient').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          $('#affProd').attr('style', 'display : none;');

          $('#numCompte option').attr('value', '');
          $('#codeCli').attr('value', '');
          $('#codeGrp').attr('value', '');
          $('#produit option').attr('value', ''); 
        }
       else if(prodDate == str){
                    
          $('#affProd').attr('style', 'display : bloc;');
          $('#affdate').attr('style', 'display : bloc;');
                    
          $('#affUser').attr('style', 'display : none;');
          $('#affChoix').attr('style', 'display : none;');
          $('#affClient').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');
          
          $('#idUser').attr('value', '');
          $('#numCompte option').attr('value', '');
          $('#codeCli').attr('value', '');
          $('#codeGrp').attr('value', '');
        }
       else if(cliDate == str){
          $('#affChoix').attr('style', 'display : bloc;');
          $('#affClient').attr('style', 'display : bloc;');
          $('#affdate').attr('style', 'display : bloc;'); 

          $('#idUser').attr('value', '');              
          $('#affProd').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');
          $('#affCompte').attr('style', 'display : none;');

          $('#idUser').attr('value', '');
          $('#produit').attr('value', '');
          $('#numCompte option').attr('value', '');
        }    
       else if(comptDate == str){
          $('#affChoix').attr('style', 'display : bloc;');
          $('#affClient').attr('style', 'display : bloc;');
          $('#affCompte').attr('style', 'display : bloc;');
          $('#affdate').attr('style', 'display : bloc;');                    
                    
          $('#affProd').attr('style', 'display : none;');
          $('#affUser').attr('style', 'display : none;');

          $('#idUser').attr('value', '');
          $('#produit').attr('value', '');
        }


  });


  
static List<Account> getCompteDistinct(){
  String sql = "select distinct g.account from Grandlivre g order by g.account asc";
  
  List<Account> compte = new ArrayList<Account>();
  
  TypedQuery<Account> query = em.createQuery(sql,Account.class);
  
  compte = query.getResultList(); 
  
  for (Account account : compte) {
    System.out.println("Id :"+account.getTkey());
    System.out.println("Compte :"+account.getNumCpt()+"\n");
  }
  return compte;
}

static List<Grandlivre> reqs(int compte){
  List<Grandlivre> list = new ArrayList<Grandlivre>();
  
  String sql = "select gr from Grandlivre gr join gr.account a where a.tkey = '"+compte+"'";
  
  TypedQuery<Grandlivre> query = em.createQuery(sql,Grandlivre.class);
  
  list = query.getResultList(); 
  
  for (int i = 0; i < list.size(); i++) {
    System.out.println("Tkey :"+list.get(i).getAccount().getTkey());
    
    System.out.println("Tcode :"+list.get(i).getTcode());
    System.out.println("Compte :"+list.get(i).getAccount().getNumCpt());
    System.out.println("Debit :"+list.get(i).getDebit());
    System.out.println("Credit :"+list.get(i).getCredit());
    System.out.println("Date :"+list.get(i).getDate() +"\n");
  }
  
  return list;
}


@Override
public List<Grandlivre> tests() {
  List<Grandlivre> list = new ArrayList<Grandlivre>();
  
  String sql = "select distinct g.account from Grandlivre g order by g.account asc";
  
  List<Account> compte = new ArrayList<Account>();
  
  TypedQuery<Account> query = em.createQuery(sql,Account.class);
  
  compte = query.getResultList(); 
  
  for (Account account : compte) {
    System.out.println("Id :"+account.getTkey());
    System.out.println("Compte :"+account.getNumCpt()+"\n");
        
    return reqs(account.getTkey());
  }
  
  return null;
  /*List<Account> compte = getCompteDistinct();
  List<Grandlivre> list = new ArrayList<Grandlivre>();
  
  for (int i = 0; i < compte.size(); i++) {
    System.out.println("tkey :"+compte.get(i).getTkey()+"\n");
    
    String sql = "select gr from Grandlivre gr join gr.account a where a.tkey = '"+compte.get(i).getTkey()+"'";
    
    TypedQuery<Grandlivre> query = em.createQuery(sql,Grandlivre.class);
    
    list = query.getResultList();   
  }
  
  for (int i = 0; i < list.size(); i++) {
    System.out.println("Tkey :"+list.get(i).getAccount().getTkey());
    
    System.out.println("Tcode :"+list.get(i).getTcode());
    System.out.println("Compte :"+list.get(i).getAccount().getNumCpt());
    System.out.println("Debit :"+list.get(i).getDebit());
    System.out.println("Credit :"+list.get(i).getCredit());
    System.out.println("Date :"+list.get(i).getDate() +"\n");
  }*/
  
}
