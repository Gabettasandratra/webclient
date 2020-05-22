
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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/log.css');?>"/>

    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/popper.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>

    <style type="text/css">
        body{
                /*background-color: #F8F8FF;*/
                background-image : url("<?php echo base_url();?>/assets/img/money.jpg") !important;
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: fixed;
            }    

    </style>
	</head>
	<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
             
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>/assets/img/user.png">
                </div>
           
                 <form id="myForm" class="col-12" action="<?php echo base_url();?>index.php/connection" method="post">

                      <div class="alert alert-danger" style="display: none;margin-bottom: 25px ">

                       </div>     

                        <div class="form-group">
                            <input type="text" id="pseudo" name="login" autocomplete="off" placeholder="Nom de l'Utilisateur" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" id="mdp" name="mdp" placeholder="Mot de Passe" class="form-control pws"/>
                                 <div class="input-group-append">
                                    <span id="see" class="input-group-text"><a href="#"><i class="fa fa-eye"></i></a></span>
                                    <span id="cacher" class="input-group-text" style="display: none"><a id="cacher" href="#"><i class="fa fa-eye-slash"></i></a></span>
                                </div>
                            </div>
                           
                        </div>
                        
                        <button type="submit" name="logins" class="btn"><i class="fa fa-sign-in-alt"></i> Connection</button>
                    
                 </form>
            
            </div><!-- END OF MODAL CONTENT -->
        </div>
    </div>


<!-- MODALE CHOIX TRANSACTION -->
<div class="modal fade" id="modalErreurLog" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
<div class="modal-dialog" style="margin-top: 130px;" role="document">
  <div class="modal-content">
    <div class="modal-header">
    <div class="modal-body">             
        <div id="affiche"></div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">

  $(function(){
    <?php if(isset($erreurLogin)){?>
    $('.alert-danger').html("<?php echo $erreurLogin ?>")
              .fadeIn().delay(3000).fadeOut('slow');
    <?php } ?>
  });

$('#see').click(function(){


    $('#mdp').attr('type', 'text');
    $('#see').attr('style', 'display: none');
    $('#cacher').attr('style', 'display: bloc');
});
$('#cacher').click(function(){
    $('#mdp').attr('type', 'password');
    $('#see').attr('style', 'display: bloc');
    $('#cacher').attr('style', 'display: none');
});

/*
    $('#modalErreurLog').modal('show');
    $('#affiche').html('<?php echo $msg?>');*/

</script>

</body>
</html>