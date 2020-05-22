<!-- <div id="dialog" title="Configuration Grand Livre des opérations sur crédit" style="margin-top: 1%;">   -->
 
<div class="right_col" role="main" >
 <div class="col-md-12 col-sm-12">
  <div class="x_panel tile " style="margin-top:2%;">
    <div class="x_title">
      <h2>Configuration Grand Livre des opérations sur crédit</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Settings 1</a>
              <a class="dropdown-item" href="#">Settings 2</a>
            </div>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


         <form  id="myForm" action="" method="post"> 
         <br> 
        <div class="form-group row"> 
         
         <div class="col-6 row">
            <label class="col-sm-2 col-form-label" style="color: black;font-weight: bold;" for="idProduit">Produit:</label>
         <div class="col-sm-6">
            <select class="form-control form-control-sm" name="idProduit" id="idProduit">
              <option value=""></option>
               <?php foreach($result->Listes_ProduitCredit as $value) :?>
                  <option value="<?= $value->idProdCredit ?>"><?= $value->nomProdCredit ?></option>
              <?php endforeach; ?>
            </select>
           </div>
         </div>

         <div class="col-6"> <!-- style="float: right;" -->
          <button id="btnAdd" type="button" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-save"></i> Enregistrer</button>
         </div>

        </div>
        <hr>
          <div class="row">
            <div class="col-12">
              <div class="card mt-3 tab-card">
                <div class="card-header tab-card-header">
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Comptes GL frais crédit </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Comptes GL remboursement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Comptes GL autres opérations crédit</a>
                    </li>
                  </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                  <!-- AFFICHER LORS D'UN ACTION -->
        <!--           <div class="alert alert-success" style="display: none;margin-top: 25px ">

                  </div> -->


                  <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                   
                   <!-- TAB FRAIS CREDIT -->
                     <div class="row">

                        <!-- FRAIS A LA DEMANDE -->


                        <div class="col-6">
                          <div>
                            <label class="col-sm-6 col-form-label" style="font-weight: bold;">Frais à la demande</label>
                          </div>
                          <hr/>
                          <br>
                          <div class="form-group row">
                               <label for="papeterieDem" class="col-sm-4 col-form-label">Papeterie:</label>
                             <div class="col-sm-6">
                              <select name="papeterieDem" class="form-control form-control-sm" id="papeterieDem">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div> 


                          <div class="form-group row">
                               <label for="commDem" class="col-sm-4 col-form-label">Commission:</label>
                             <div class="col-sm-6">
                              <select name="commDem" class="form-control form-control-sm" id="commDem">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>


                          <div class="form-group row">
                               <label for="fraisDevDem" class="col-sm-4 col-form-label">Frais de développement:</label>
                             <div class="col-sm-6">
                              <select name="fraisDevDem" class="form-control form-control-sm" id="fraisDevDem">
                                 <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="refinFeeDem" class="col-sm-4 col-form-label">Frais de réfinancement:</label>
                             <div class="col-sm-6">
                              <select name="refinFeeDem" class="form-control form-control-sm" id="refinFeeDem">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                      <!--     <div style="margin-top: 20%;">
                            <button id="btnAdd" type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Enregistrer</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Modifier</button>
                          </div> -->

                        </div>

                        <!-- FRAIS AU DECAISSEMENT -->

                        <div class="col-6">
                          <label class="col-sm-8 col-form-label" style="font-weight: bold;">Frais au décaissement</label>
                          <hr/>
                          <br>
                          <div class="form-group row">
                               <label for="papeterieDec" class="col-sm-4 col-form-label">Papeterie:</label>
                             <div class="col-sm-6">
                              <select name="papeterieDec" class="form-control form-control-sm" id="papeterieDec">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div> 


                          <div class="form-group row">
                               <label for="commDec" class="col-sm-4 col-form-label">Commission:</label>
                             <div class="col-sm-6">
                              <select name="commDec" class="form-control form-control-sm" id="commDec">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="majorationDec" class="col-sm-4 col-form-label">Majoration:</label>
                             <div class="col-sm-6">
                              <select name="majorationDec" class="form-control form-control-sm" id="majorationDec">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>


                          <div class="form-group row">
                               <label for="fraisDevDec" class="col-sm-4 col-form-label">Frais de développement:</label>
                             <div class="col-sm-6">
                              <select name="fraisDevDec" class="form-control form-control-sm" id="fraisDevDec">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="procFeeDec" class="col-sm-4 col-form-label">Processing Fee:</label>
                             <div class="col-sm-6">
                              <select name="procFeeDec" class="form-control form-control-sm" id="procFeeDec">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                        </div>

                      </div> 
               
                  </div>
                  <!-- END TAB -->
                  
                  <!-- TAB REMBOURSEMENT -->
                  <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                     <div class="row">

                          <div class="col-6">


                            <div class="form-group row">
                                 <label for="cptPrincEnCoursInd" class="col-sm-4 col-form-label">Compte principal en cours:</label>
                               <div class="col-sm-6">
                                <select name="cptPrincEnCoursInd" class="form-control form-control-sm" id="cptPrincEnCoursInd">
                                  <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                            </div>  

                            <div class="form-group row">
                                 <label for="cptIntRecCrdtInd" class="col-sm-4 col-form-label">Compte intérêts reçus sur crédits:</label>
                               <div class="col-sm-6">
                                <select name="cptIntRecCrdtInd" class="form-control form-control-sm" id="cptIntRecCrdtInd">
                                    <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                            </div>

                             <div class="form-group row">
                                   <label for="cptSurpaiement" class="col-sm-4 col-form-label">Compte de surpaiement:</label>
                                 <div class="col-sm-6">
                                  <select name="cptSurpaiement" class="form-control form-control-sm" id="cptSurpaiement">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>

                          <div class="form-group row">
                               <label for="cptRecCreanDouteuse" class="col-sm-4 col-form-label">Compte recouvrement des créances douteuses:</label>
                             <div class="col-sm-6">
                              <select name="cptRecCreanDouteuse" class="form-control form-control-sm" id="cptRecCreanDouteuse">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                           <div class="form-group row">
                                 <label for="cptProvMauvCreanceInd" class="col-sm-4 col-form-label">Compte de provision mauvaises créances:</label>
                               <div class="col-sm-6">
                                <select name="cptProvMauvCreanceInd" class="form-control form-control-sm" id="cptProvMauvCreanceInd">
                                   <option></option>
                                    <?php foreach($list->list as $val) :?>
                                      <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                  <?php endforeach; ?>
                                </select>
                               </div>
                            </div>

                         </div>

                         <div class="col-6">

                              <div class="form-group row">
                                   <label for="cptIntEchuInd" class="col-sm-4 col-form-label">Compte intérêts échus:</label>
                                 <div class="col-sm-6">
                                  <select name="cptIntEchuInd" class="form-control form-control-sm" id="cptIntEchuInd">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>

                              <div class="form-group row">
                                   <label for="cptCheque" class="col-sm-4 col-form-label">Compte chèques:</label>
                                 <div class="col-sm-6">
                                  <select name="cptCheque" class="form-control form-control-sm" id="cptCheque">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>

                              <div class="form-group row">
                                   <label for="cptIntEchuARecInd" class="col-sm-4 col-form-label">Compte intérêts échus à recevoir:</label>
                                 <div class="col-sm-6">
                                  <select name="cptIntEchuARecInd" class="form-control form-control-sm" id="cptIntEchuARecInd">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>

                              <div class="form-group row">
                                   <label for="cptPenalCptblsAvaInd" class="col-sm-4 col-form-label">Compte pénalités comptabilisés d'avance:</label>
                                 <div class="col-sm-6">
                                  <select name="cptPenalCptblsAvaInd" class="form-control form-control-sm" id="cptPenalCptblsAvaInd">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>


                              <div class="form-group row">
                                   <label for="cptRevPenalInd" class="col-sm-4 col-form-label">Compte de revenue des pénalités comptabilisés d'avance:</label>
                                 <div class="col-sm-6">
                                  <select name="cptRevPenalInd" class="form-control form-control-sm" id="cptRevPenalInd">
                                      <option></option>
                                      <?php foreach($list->list as $val) :?>
                                        <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                 </div>
                              </div>

                         </div> 

                     </div>            
                  </div>
                 <!-- END TAB -->

                 <!-- TAB AUTRES OPERATIONS -->
                  <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                    <div class="row">

                      <div class="col-6"> 


                          <div class="form-group row">
                               <label for="cptCredPasseEnPerteInd" class="col-sm-4 col-form-label">Compte crédits passées en perte:</label>
                             <div class="col-sm-6">
                              <select name="cptCredPasseEnPerteInd" class="form-control form-control-sm" id="cptCredPasseEnPerteInd">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="cptPapeterie" class="col-sm-4 col-form-label">Compte de papeterie:</label>
                             <div class="col-sm-6">
                              <select name="cptPapeterie" class="form-control form-control-sm" id="cptPapeterie">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>


                          <div class="form-group row">
                             <label for="cptComAccGagneInd" class="col-sm-4 col-form-label">Compte de commissions accumulées gagnées:</label>
                           <div class="col-sm-6">
                            <select name="cptComAccGagneInd" class="form-control form-control-sm" id="cptComAccGagneInd">
                                <option></option>
                                <?php foreach($list->list as $val) :?>
                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                              <?php endforeach; ?>
                            </select>
                           </div>
                          </div>

                          <div class="form-group row">
                               <label for="cptComEchuAccInd" class="col-sm-4 col-form-label">Compte de commissions échues accumulées:</label>
                             <div class="col-sm-6">
                              <select name="cptComEchuAccInd" class="form-control form-control-sm" id="cptComEchuAccInd">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>
                        </div>

                      <div class="col-6">

                          <div class="form-group row">
                               <label for="cptCommCredit" class="col-sm-4 col-form-label">Compte commission sur crédit:</label>
                             <div class="col-sm-6">
                              <select name="cptCommCredit" class="form-control form-control-sm" id="cptCommCredit">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="cptPenalCredit" class="col-sm-4 col-form-label">Compte pénalités crédit:</label>
                             <div class="col-sm-6">
                              <select name="cptPenalCredit" class="form-control form-control-sm" id="cptPenalCredit">
                                 <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                          <div class="form-group row">
                               <label for="diffMonnaie" class="col-sm-4 col-form-label">Compte différences des monnaie:</label>
                             <div class="col-sm-6">
                              <select name="diffMonnaie" class="form-control form-control-sm" id="diffMonnaie">
                                  <option></option>
                                  <?php foreach($list->list as $val) :?>
                                    <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                                <?php endforeach; ?>
                              </select>
                             </div>
                          </div>

                        <div class="form-group row">
                             <label for="cptProvCoutMauvCreanceInd" class="col-sm-4 col-form-label">Compte de provision coûts des mauvaises créances:</label>
                           <div class="col-sm-6">
                            <select name="cptProvCoutMauvCreanceInd" class="form-control form-control-sm" id="cptProvCoutMauvCreanceInd">
                                <option></option>
                                <?php foreach($list->list as $val) :?>
                                  <option value="<?= $val->numCpt ?>"><?= $val->numCpt ?> | <?= $val->label ?></option>
                              <?php endforeach; ?>
                            </select>
                           </div>
                        </div>

                      </div>

                    </div>
                    <!-- END TAB -->
                  </div>

                </div>
              </div>
            </div>
          </div>
         </form>
        </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('/assets/vendors/jquery/dist/jquery.min.js');?>"></script>
      <!-- Bootstrap -->
<script src="<?php echo base_url('/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/assets/vendors/fastclick/lib/fastclick.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/vendors/nprogress/nprogress.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('/assets/vendors/iCheck/icheck.min.js');?>"></script>
<!-- Datatables -->
<script src="<?php echo base_url('/assets/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/gauge.js/dist/gauge.min.js');?>"></script>


<script src="<?php echo base_url('/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-notify.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.buttonLoader.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
    <!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/build/js/custom.min.js');?>"></script>


<script type="text/javascript">

$(function(){

  $('#btnAdd').click(function(){

    //var url =  $('#myForm').attr('action','<?php echo base_url(); ?>index.php/ConfigGeneralCredit');
    var data = $('#myForm').serialize();

      $.ajax({
            type:'ajax',
            method: "post",
            url: '<?php echo base_url(); ?>index.php/ConfigGLCredit',
            dataType:'json',
            data: data,
            async: false,
            success: function(response) {
                //alert(response);
                if (response.success) {
                    if(response.type == 'ad')
                    {
                        var type = 'Enregistrer';
                    }
                    else if(response.type == 'up')
                    {
                        var type = 'Modifer';
                    }
                    else if(response.existe)
                    {
                        alert('Cet est déja exist');
                    }

                    alert('Configuration Grand Livre bien enregistré !!!');
                  //$('.alert-success').html('<span class="glyphicon glyphicon-ok">'+'</span>'+'&nbsp;'+'Configuration '+type+' avec succes!').fadeIn().delay(7000).fadeOut('slow');
                    //AllClient();
                }
                else {
                    alert('Erreur');
                }
            },
            error: function(){
                alert('pas de donnée');
            }
        });


  });


});

</script>