<?php

include 'includes/book-config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    
</head>

<body>

<script>
/*$(function ()
{
    $('#my-image').on('click', function ()
    {
        $(this).width(1000);
        
        })
    });
});


function toggle(myimg) {
  if (myimg.width == 248)
    {myimg.width = 500;}
    
  else
    {myimg.width = 248;}
}

//$('#foo').css({'background-color': 'red'}); */
</script>



    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

<script>
var tracker = true;

function toggle() {
    
    if (tracker){
        $('#myimage').width(700);
        $('#foo').css({'background-color': 'black'});
        tracker = false;
    }
    else{
        $('#myimage').width(248);
        $('#foo').css({'background-color': 'white'});
        tracker = true;
    }
}
</script>

<div id='foo'>
    <img id='myimage' src="/project1/book-images/medium/013261930X.jpg" onclick="toggle()" />
</div>
       
       
       
       </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>