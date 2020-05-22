<div class="container">
    <div style="height: 500px;width:500px;margin-top: 10%;">
      <canvas id="myChart" width="400" height="400"></canvas>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('/assets/Chart/dist/Chart.bundle.min.js');?>"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {//bar, line, radar, doughnut & pie polar area bubble scatter area mixed
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


<!-- <div id="notifCredit" class="card" style="width: 18rem;margin-top:10%;margin-left: 25%">
  <h1 class="card-img-top" align="center">0</h1>
  <div class="card-body">


    <table id="table_header">
    <tr>
       <td contenteditable="true">a</td>
       <td contenteditable="true">b</td>
       <td contenteditable="true">c</td>
    </tr>
    </table>
    <!-- <p class="card-text">total Crédit</p> 

     <form id="f" method="get" >
        <table width="100%" border="1" id="t" >
            <tbody>
          <tr>
          <td>Description</td>
          <td>Prix</td>
          <td>Quantité</td>
         
           <td>
               <input id="Sup" type="submit" value="Supprimer" />
          </td></tr>
        <tr>
          <td>
              <input id="d" type="text" /></td>
          <td>
              <input id="p" type="text" /></td>
          <td>
              <input id="q" type="text" /></td>
          <td>
              <button id="add">Ajouter</button>
        </tr>
            </tbody>
      </table>
    </form>
  </div>
</div>


<div id="contentsTable" align="center">
  <table class="tblData">
      <tr class="tblRow">
      <td class="tblCol" id="td1">Item 1</td>
      <td class="tblCol" id="td2">Item 2</td>
      <td class="tblCol" id="td3">Item 3</td>
      </tr>
      <tr class="tblRow" id="td4">
      <td class="tblCol" id="td5">Item 4</td>
      <td class="tblCol" id="td6">Item 5</td>
      <td class="tblCol" id="td7">Item 6</td>
      </tr>
      <tr class="tblRow">
      <td class="tblCol" id="td8">Item 7</td>
      <td class="tblCol" id="td9">Item 8</td>
      <td class="tblCol" id="td10">Item 9</td>
      </tr>
  </table>
</div> 
 -->
<!--  <div style="margin-top: 10%">
<button id="ok">OK</button>


  <div class="card" id="mov" style="width:100px;height:100px;">
      <div class="card-body">
        <div class="card-text">
             <sup>0</sup>
        </div>
      </div>
   </div>

   </div>
 -->

  <script>
  $( function() {

    $('#ok').click(function(){
      //window.alert();
       $('#mov').resizeTo(400,50);
    });

    /*$("#add").click(function () {                

        $("#t>tbody:last").append("<tr><td>" + $("#d").val() + "</td><td>" +
         $("#p").val() + "</td><td>" + $("#q").val() + "</td> <td><input class='ch' type='checkbox' /></td></tr>");
                });
        $("#f").submit(function(){
     return false;
     });
                $("#Sup").click(function () {
        
        if(confirm("vous les vous supprimer")==true)
        $("tr:has(input:checked)").remove();  
                });
       var c={
        'diplay':'inline-block'
        };
        
       $("ul li").css(c);

     $("#tblDatatr:has(td)").mouseover(function(e) {
       $(this).css("cursor", "pointer");
       });
       $("#tblDatatr:has(td)").click(function(e) {
       $("#tblData td").removeClass("highlight");
       var clickedCell= $(e.target).closest("td");
       clickedCell.addClass("highlight");
       $("#spnText").html(
       'Clicked table cell value is: <b> ' + clickedCell.text() + '</b>');
       });

/*  $("#notifCredit").animate({
    left: '250px',
    opacity: '0.5',
    height: '150px',
    width: '150px'
  });*/

   var div = $("#notifCredit");
   div.animate({height: '500px',width: '700px', opacity: '0.9'}, "slow",);
//   $("#notifCredit").slideUp(500).slideDown(2000); 

    //$("#notifCredit").hide("slow").show("slow");
 /* 
  div.animate({width: '400px', opacity: '0.8'}, "slow");
  div.animate({height: '250px', opacity: '0.4'}, "slow");
  div.animate({width: '250px', opacity: '0.8'}, "slow");
, function(){
    alert("The paragraph is now hidden");
  }
  */


  $(document).on('dblclick','.tblCol',function(){
    var itemText = $(this).text().toString();
        var id = $(this).attr('id');
        $(this).html("<input type=\"text\" id=txt"+id+" class=\"txtEdit\" value=\"\" size=\"15\" />");
        $('#txt'+id).focus();
        $('#txt'+id).val(itemText);
        $(this).unbind('dblclick');
});
$(document).on('focusout','.txtEdit',function(){
    var id=$(this).attr('id').toString().substring(3);
    alert('id :'+id);
    alert("Text val : "+$(this).val());
    alert(($("#"+id).length)>0);  //returning false
    alert($("#"+id).html()); // error : undefined
});

  } );
  </script>
 
<!-- <div class="toggler" style="margin-top: 10%">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Effect</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>
 
<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fade">Fade</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
  <option value="transfer">Transfer</option>
</select>
 
<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>



<div id="dialog" title="Approbation crédit">
  <form id="myForm" action="" method="post">
                
            <div class="col-12">

              <div class="form-group row" >
                <input type="hidden" id="st" value="" name="stat">
                  <label for="statuts" class="col-form-label col-sm-4">Action:</label>
                  <input type="text" id='statuts' value="" class="form-control form-control-sm col-6" disabled> 
               </div>

                <div class="form-group row" >
                    <label for="cl" class="col-form-label col-sm-4">Client:</label>
                    <input type="text" id='client' value="" class="form-control form-control-sm col-6" disabled> 
                 </div>                       
               
              <div class="form-group row" >

                  <input type="hidden" id="num" value="" name="numCredit">
                  <label for="numCredits" class="col-form-label col-sm-4">Numero crédit:</label>
                  <input type="text" id='numCredits' value="" class="form-control form-control-sm col-4" disabled>
            
               </div>     
             
              <div class="form-group row">
                <label for="date_app" class="col-form-label lab-date col-sm-4">Date Approbation:</label>
                <input type="date" class="form-control form-control-sm col-4" name="date_app" id="date_app">
              </div>

              <div class="form-group row" >
                  <label for="approuv_par" class="col-form-label lab-app col-sm-4">Approuvé par:</label>
                  <input type="text" id='approuv_par' value="<?php echo $nomUtilisateur ?>" class="form-control form-control-sm col-6" name="approuv_par">
               </div>       


               <div class="form-group row" >
                  <label for="montant_app" class="col-form-label col-sm-4">Montant:</label>
                  <input type="number" style="text-align:right" step="100" id='montant_app' class="form-control form-control-sm col-6" name="montant_app">
               </div>                       
       
              <div class="form-group row" >
                  <label for="description" class="col-form-label col-sm-4">Description:</label>
                  <textarea id='description' class="form-control form-control-sm col-8" name="description"> </textarea>
               </div>    

              </div>

          </form>

          <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
              <button type="button" id="btnSave" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Enregistrer</button>
            </div>

  </div>

 </div>
 /*

$( "#dialog" ).dialog({
    autoOpen: true,
    width: 500,
    height: 550,
    show: {
      effect: "slide",
      duration: 2000,      
    },
    hide: {
      effect: "explode",
      duration: 1000
    }
  });
//$( "#dialog" ).dialog( "open" );
  $( "#fermerModal" ).click(function(){
   $( "#dialog" ).modal( "hide" );
  });


  // run the currently selected effect
  function runEffect() {
    // get effect type from
    var selectedEffect = $( "#effectTypes" ).val();

    // Most effect types need no options passed by default
    var options = {};
    // some effects have required parameters
    if ( selectedEffect === "scale" ) {
      options = { percent: 50 };
    } else if ( selectedEffect === "transfer" ) {
      options = { to: "#button", className: "ui-effects-transfer" };
    } else if ( selectedEffect === "size" ) {
      options = { to: { width: 200, height: 60 } };
    }

    // Run the effect
    $( "#effect" ).effect( selectedEffect, options, 500, callback );
  };

  // Callback function to bring a hidden box back
  function callback() {
    setTimeout(function() {
      $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
    }, 1000 );
  };

  // Set effect from select menu value
  $( "#button" ).on( "click", function() {
    runEffect();
    return false;
  });*/

<button id="opener">Open Dialog</button>
 


    <!-- MODAL POUR AJOUTER OU MODIFIER UN PRODUIT CREDIT -->
     <!--  <div title="Basic dialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Approbation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    
              <form id="myForm" action="" method="post">
                
                      <div class="col-12">

                        <div class="form-group row" >
                          <input type="hidden" id="st" value="" name="stat">
                            <label for="statuts" class="col-form-label col-sm-4">Action:</label>
                            <input type="text" id='statuts' value="" class="form-control form-control-sm col-6" disabled> 
                         </div>

                          <div class="form-group row" >
                              <label for="cl" class="col-form-label col-sm-4">Client:</label>
                              <input type="text" id='client' value="" class="form-control form-control-sm col-6" disabled> 
                           </div>                       
                         
                        <div class="form-group row" >

                            <input type="hidden" id="num" value="" name="numCredit">
                            <label for="numCredits" class="col-form-label col-sm-4">Numero crédit:</label>
                            <input type="text" id='numCredits' value="" class="form-control form-control-sm col-4" disabled>
                      
                         </div>     
                       
                        <div class="form-group row">
                          <label for="date_app" class="col-form-label lab-date col-sm-4">Date Approbation:</label>
                          <input type="date" class="form-control form-control-sm col-4" name="date_app" id="date_app">
                        </div>

                        <div class="form-group row" >
                            <label for="approuv_par" class="col-form-label lab-app col-sm-4">Approuvé par:</label>
                            <input type="text" id='approuv_par' value="<?php echo $nomUtilisateur ?>" class="form-control form-control-sm col-6" name="approuv_par">
                         </div>       


                         <div class="form-group row" >
                            <label for="montant_app" class="col-form-label col-sm-4">Montant:</label>
                            <input type="number" style="text-align:right" step="100" id='montant_app' class="form-control form-control-sm col-6" name="montant_app">
                         </div>                       
                 
                        <div class="form-group row" >
                            <label for="description" class="col-form-label col-sm-4">Description:</label>
                            <textarea id='description' class="form-control form-control-sm col-8" name="description"> </textarea>
                         </div>    
 
                        </div>

                    </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-danger" id="fermerModal"><i class="fa fa-eye-slash"></i> Fermer</button>
              <button type="button" id="btnSave" class="btn btn-sm btn-primary bt-ajout"><i class="fa fa-save"></i> Enregistrer</button>
            </div>
          </div>
        </div>
      </div>

 --> 

<!-- 
<script type="text/javascript">
var vegetables = ['Cabbage', 'Turnip', 'Radish', 'Carrot'];
console.log(vegetables); 
// ["Cabbage", "Turnip", "Radish", "Carrot"]

var pos = 1, n = 2;

var removedItems = vegetables.splice(pos, n); 
// n définit le nombre d'éléments à supprimer,
// à partir de la position pos

console.log(vegetables); 
// ["Cabbage", "Carrot"] (le tableau d'origine est changé)

console.log(removedItems); 
// ["Turnip", "Radish"] (splice retourne la liste des éléments supprimés)


var promise = {
  'var' : 'text',
  'array': [1, 2, 3, 4]
};

console.log(promise.array);
</script>
 -->
<!-- <div class="mytag" style="margin-top: 15%;">

   <div class="form-group row">
                            
      <label for="garantie4" class="col-sm-1">4: </label>
     
      <div class="col-sm-5">
        <input type="text" id="garantie4" class="form-control form-control-sm" name="garantie4" >
      </div>
     
   </div> 
<div id="tag">
   <tr><td><a id="add_tag" href="#">Ajouter un nouveau tag</a></td><td><input class="mytag" type="text" name="new_tag_0" /></td></tr>
</div>

</div>





$('#tauxGar1').keyup(function(){

  var mont = parseFloat($('input[name=montant_demande]').val());
  var tau1 = parseFloat($('input[name=tauxGar1]').val());
 
  var montTot = (mont * tau1)/100 ;
  $('input[name=totalGarant]').val(montTot);

});

<script type="text/javascript">
    var num = $("mytag").length + 1;

    $("a#add_tag").click(function() {
      document.getElementById("tag").innerHTML += "<input class='mytag' type=\"text\" name=\"new_tag_"+num+"\"/><br/>";
        });
</script>
 -->


<!-- <div id="tabs" style="margin-top: 15%">
  <ul>
    <li><a href="#fragment-1"><span>One</span></a></li>
    <li><a href="#fragment-2"><span>Two</span></a></li>
    <li><a href="#fragment-3"><span>Three</span></a></li>
  </ul>
  <div id="fragment-1">
    <p>First tab is active by default:</p>
    <pre><code>$( "#tabs" ).tabs(); </code></pre>
  </div>
  <div id="fragment-2">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
  </div>
  <div id="fragment-3">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
  </div>
</div>
 
<script>
$( "#tabs" ).tabs();
</script>
 -->



<!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div id="myToast" class="toast" style="position: absolute; top: 0; right: 0;"><!-- data-autohide="false" 
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>

</div>

<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div> -->

<!-- <div class="card" style="margin-top:250px; height: 100px; overflow-y: auto">
  <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
</div>


<div class="card" style="height: 100px; margin-top:20px;">
  <div class="card-header">Title</div>
  <div class="card-block" style="overflow-y: auto">
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
    <div>Test</div>
  </div>
</div>
 -->
<!-- /*


<script type="text/javascript">
  /*$(window).load(function() {
    $(".loader").fadeIn().delay(5000);
    $(".loader").fadeOut('slow')(5000);
  })*/
</script>

<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
?>

  
     .my-custom-scrollbar {
      position: relative;
      height: 200px;
      overflow: auto;
      }
      .table-wrapper-scroll-y {
      display: block;
      }
*/

/*
    .table-fixed thead {
      width: 100%;
    }
    .table-fixed tbody {
      height: 300px;
      overflow-y: auto;
      width: 100%;
    }
    .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
      display: block;
    }
    .table-fixed tbody td, .table-fixed thead > tr> th {
     
      float: left;
      border-bottom-width: 0;
    }



    /*div[comma-value]{
      position:fixed;
    }
    div[comma-value]:before{
      content: attr(comma-value);
      position:absolute;
      left:0;
    }
    div[comma-value] input{
      color:#fff;
    }
*/ -->




<!-- Floating Action Button like Google Material -->

<!-- <div class="xyz">

<h1>GeeksforGeeks</h1> 
	
	<h4>Normal Circle Buttons</h4> 
	<button type="button" class="btn btn-primary btn-circle btn-sm">Blue</button> 
	<button type="button" class="btn btn-secondary btn-circle btn-sm">Gray</button> 
	<button type="button" class="btn btn-success btn-circle btn-sm">Green</button> 
	<button type="button" class="btn btn-danger btn-circle btn-sm">Red</button> 
	<button type="button" class="btn btn-warning btn-circle btn-sm">Yellow</button> 
	<button type="button" class="btn btn-light btn-circle btn-sm">White</button> 
	<button type="button" class="btn btn-dark btn-circle btn-sm">Black</button> 

	<h4>Large Circle Buttons</h4> 
	<button type="button" class="btn btn-secondary btn-circle btn-xl">Gray</button> 
	<button type="button" class="btn btn-success btn-circle btn-xl">Green</button> 
	<button type="button" class="btn btn-danger btn-circle btn-xl">Red</button> 
	<button type="button" class="btn btn-warning btn-circle btn-xl">Yellow</button> 
	<button type="button" class="btn btn-light btn-circle btn-xl">White</button> 
	<button type="button" class="btn btn-dark btn-circle btn-xl">Black</button> 

</div>

	<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Supervisor Account"> 
		<span class="pmd-floating-hidden">Supervisor Account</span>
		<i class="material-icons">supervisor_account</i>
	</a> 
	<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
		<span class="pmd-floating-hidden">Cloud Queue</span> 
		<i class="material-icons">cloud_queue</i> 
	</a> 
	<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Headset"> 
		<span class="pmd-floating-hidden">Headset</span> 
		<i class="material-icons">headset</i>
	</a> 
	<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Dialpad"> 
		<span class="pmd-floating-hidden">Dialpad</span> 
		<i class="material-icons">dialpad</i> 
	</a> 
	 .my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
 -->
<!-- <br/>
 <div style="margin-top:150px;" class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

</div>

 -->

<!-- 

<div class="container"> 
  <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
            Fixed Header Scrolling Table 
          </h4>
        </div>
        <table class="table table-fixed">
          <thead>
            <tr>
              <th class="col-xs-2">#</th><th class="col-xs-8">Name</th><th class="col-xs-2">Points</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-2">1</td><td class="col-xs-8">Mike Adams</td><td class="col-xs-2">23</td>
            </tr>
            <tr>
              <td class="col-xs-2">2</td><td class="col-xs-8">Holly Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">3</td><td class="col-xs-8">Mary Shea</td><td class="col-xs-2">86</td>
            </tr>
            <tr>
              <td class="col-xs-2">4</td><td class="col-xs-8">Jim Adams</td><td>23</td>
            </tr>
            <tr>
              <td class="col-xs-2">5</td><td class="col-xs-8">Henry Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">6</td><td class="col-xs-8">Bob Shea</td><td class="col-xs-2">26</td>
            </tr>
            <tr>
              <td class="col-xs-2">7</td><td class="col-xs-8">Andy Parks</td><td class="col-xs-2">56</td>
            </tr>
            <tr>
              <td class="col-xs-2">8</td><td class="col-xs-8">Bob Skelly</td><td class="col-xs-2">96</td>
            </tr>
            <tr>
              <td class="col-xs-2">9</td><td class="col-xs-8">William Defoe</td><td class="col-xs-2">13</td>
            </tr>
            <tr>
              <td class="col-xs-2">10</td><td class="col-xs-8">Will Tripp</td><td class="col-xs-2">16</td>
            </tr>
            <tr>
              <td class="col-xs-2">11</td><td class="col-xs-8">Bill Champion</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">12</td><td class="col-xs-8">Lastly Jane</td><td class="col-xs-2">6</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>

 -->
