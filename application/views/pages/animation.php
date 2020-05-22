<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){


    //Verification des saisie

    var agent =  $('input[name=agent]');
    var but =  $('input[name=but]');

    var result = '';

  if(agent.val()==''){
        agent.parent().parent().addClass('has-error');
    }
    else{
        agent.parent().parent().removeClass('has-error');
        result +='1';
    }
    if(but.val()==''){
        etat.parent().parent().addClass('has-error');
    }
    else{
        but.parent().parent().removeClass('has-error');
        result +='2';
    }

    if(result=='12'){}

   

	
  $("button").click(function(){
    $("div").animate({
      left: '250px',
      opacity: '0.5',
      height: '150px',
      width: '150px'
    });
  });
});
</script> 
</head>
<body>

<button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>

</body>