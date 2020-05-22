<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel="icon" type="image/png" href="/symfony/web/image/logo.jpg">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Saisie d'opération comptable</title>
                    <!--link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" / -->
            <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /-->
            <link href="/symfony/web/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
            <!--link href="/symfony/web/bootstrap/css/material-kit.css" rel="stylesheet"/ -->
            <link href="/symfony/web/bootstrap/css/custom.css" rel="stylesheet"/>
            <link href="/symfony/web/bootstrap/css/animate.css" rel="stylesheet"/>
            <link href="/symfony/web/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
            <link href="/symfony/web/bootstrap/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
        		    </head>
    <body>

        <nav class="navbar navbar-dark navbar-default" id="sectionsNav">

    <div class="navbar-header">
        <a class="navbar-brand" href="/symfony/web/">
            <span class="logo">FIDEV Madagascar</span>
        </a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right ">
            <li class="nav-item"><a href="/symfony/web/Comptabilite/Comptes/PlanComptable" >Plan comptable</a></li>
            <li><a href="/symfony/web/Comptabilite/grandlivre/">Grand livre</a></li>
            <li><a href="/symfony/web/Comptabilite/Journal/journal">Journal des opérations</a></li>
            <li><a href="/symfony/web/Comptabilite/Journal/saisie" class="menu-header-dw">Saisie comptable</a></li>
            <li><a href="/symfony/web/Comptabilite/Balance/">Balance des comptes</a></li>
        </ul>
    </div>
</nav>

         
        
        
        <div class="container">
            
<div class ="row">
    
    
    </div> 

<div class="col-md-5">
<!-- Le tableau pour une écriture comptable donc débit et crédit -->
<form class="form-horizontal" role="form" method="post" autocomplete="off">
    <table class="table">
        <legend>Saisied'opération comptable</legend>
        <thead><tr><th>Label</th><th>Paramètres</th></tr></thead>
        <tbody id="t">
            <tr><td><label for="date">Date écheance</label></td><td><input type="date" name="date" id="date" value="2019-10-12"></td></tr>
            <tr><td>Pièce comptable justificatif</td><td><input type="text" name="piece" id="piece" required></td></tr>
            <tr><td>Déscription de l'opération</td><td><input type="text" name="descr" id="descr"></td></tr>
            <!--tr><td>Compte analytique</td><td><input type="text" name="analytique" id="analytique"></td></tr>
            <tr><td>Compte budgetaire</td><td><input type="text" name="budgetaire" id="budgetaire"></td></tr-->
        </tbody>
    </table>
    <button type="button" class="btn btn-success" id="send">Valider</button>
</form>
</div>


<div class="col-md-7">
    <table class="table table-hover">
        <legend>Opération</legend>
        <thead class="thead-light">
            <tr>
                <td><input type="text" name="compte" id="compte"></td>
                <td><input type="text" id="libelle" readonly></td>
                <td><input type="text" name="debit" id="debit"></td>
                <td><input type="text" name="credit" id="credit"><button type="button" id="append" class="btn btn-xs btn-primary">Add</button></td>
            </tr>
            <tr>
                <th>Numero de compte</th>
                <th>Intitulé du compte</th>
                <th>Débit</th>
                <th>Crédit</th>
            </tr>

        </thead>
        <tbody id="op">
            
        </tbody>
        <tfoot>
            <tr><td colspan=2>Totaux des mouvements</td><td id="tdebit">0</td><td id="tcredit">0</td></tr>
        </tfoot>
    </table>
</div>
   
        </div>       

        <script src="/symfony/web/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="/symfony/web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/symfony/web/bootstrap/js/jquery.dropdown.js" type="text/javascript"></script>      
        <script src="/symfony/web/bootstrap/js/bootstrap-notify.min.js" type="text/javascript"></script>
        <script src="/symfony/web/bootstrap/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                
    <script>

        $(document).ready(function() {

            // focus on input debit and credit
            $('#debit').focus(function(){
                $('#credit').val("");
            }); 
            
            $('#credit').focus(function(){
                $('#debit').val("");
            }); 

            $('#op').on('dblclick','tr',function(e){
                // juste séparer les champs par le tab
                var array = $(e.currentTarget)[0].innerText.split('\t');
                console.log(array);
                $('#compte').val(array[0]);
                $('#libelle').val(array[1]); 
                $('#debit').val(array[2]); 
                $('#credit').val(array[3]); 

                $(e.currentTarget)[0].remove();
            });

            $('#send').click(function(){
                sendAjax();
            });

            $('#append').click(function(){
                
                var lib = $('#libelle').val();
                var num_compte = $('#compte').val();
                var debit = $('#debit').val(); 
                var credit = $('#credit').val(); 

                var html = '<tr class="modify"><td>'+num_compte+'</td><td>'+lib+'</td><td>'+debit+'</td><td>'+credit+'</td></tr>';
                $('#op').append(html); // inserrer le nouveau element row
                $('#compte').val('');
                $('#debit').val(''); 
                $('#credit').val('');
                $('#libelle').val('');  

                var tdebit = parseFloat($('#tdebit').html());
                if (!isNaN(parseFloat(debit))) tdebit += parseFloat(debit);
                $('#tdebit').html(tdebit);

                var tcredit = parseFloat($('#tcredit').html());
                if (!isNaN(parseFloat(credit))) tcredit += parseFloat(credit);
                $('#tcredit').html(tcredit);
                
            });

            
            $("#compte").autocomplete({
                source: function(request, response){
                    $.ajax({
                        url: 'http://localhost:8080/HelloRestfull/rest/comptes/jsonp?active=true&start='+$("#compte").val(),
                        type: 'get',
                        crossDomain: true,
                        dataType: 'jsonp',
                        jsonpCallback:'callback',
                        success: function(data){
                            response($.map(data, function(item){
                                return item.compte+ " | " +item.libelle;
                            }));
                        }
                    });
                },
                select: function(event,ui) {
                    var c = ui.item.value.split(' |');
                    $('#libelle').val(c[1]);
                    $(this).val(c[0]);
                    return false;
                }
            });      
        
    });

    

    function sendAjax(){
        var tr = $('#op tr');

        // on a les info sous forme de tableau
        var json = {};
        //json.date = Math.floor( Date.parse($('#date').val()) / 1000);
        json.date = Date.parse($('#date').val());
        json.piece = $('#piece').val();
        json.description = $('#descr').val();
        
        var mov = [];
        for(var i = 0; i < tr.length; i++){
            var array = tr[i].innerText.split('\t');
            var o = {};
            o.compte = array[0];
            o.debit = parseFloat(array[2]);
            if (isNaN(o.debit)) o.debit = 0;
            o.credit = parseFloat(array[3]);
            if (isNaN(o.credit)) o.credit = 0;
            mov.push(o);
        }

        json.mouvements = mov;

        console.log(JSON.stringify(json));

        $.ajax({
            url: 'http://localhost:8080/HelloRestfull/rest/journal',
            type: 'post',
            crossDomain: true,
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify(json),
            success: function(data){
                console.log(data);
                $.notify({            
                    message: data.message
                },{
                    type: 'info',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });     
            },
            error: function(data){
                var jsonresponse = data.responseJSON;
                $.notify({            
                    message: jsonresponse.message
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
</script>