<?php

include 'includes/book-config.inc.php';

/*This function checks the querystring parameters to make sure the input is valid*/
function checkISBN(){
    
    if(isset($_GET['ISBN10']) && is_numeric($_GET['ISBN10']) && ($_GET['ISBN10']<'0321906366')) {
        $num = $_GET['ISBN10'];
    }
    
    elseif(isset($_GET['ISBN10']) && ((substr($_GET['ISBN10'], -1)) == 'X')){
       $num = $_GET['ISBN10'];
    }

    else{
        $num = '0132991322';
    }
    
    return $num;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRM Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    
</head>

<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        
       
    
             <main class="mdl-layout__content mdl-color--grey-50">
                 
                                <h2>Image Modal</h2>
                                <p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
                                <p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>
                                
                                <img id="myImg" src="/project1/images/ios-desktop.png" alt="Trolltunga, Norway" width="300" height="200">
                                
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                  <span class="close">&times;</span>
                                  <img class="modal-content" id="img01">
                                  <div id="caption"></div>
                                </div>
                                
                                <script>
                                // Get the modal
                                var modal = document.getElementById('myModal');
                                
                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img = document.getElementById('myImg');
                                var modalImg = document.getElementById("img01");
                                var captionText = document.getElementById("caption");
                                img.onclick = function(){
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                    captionText.innerHTML = this.alt;
                                }
                                
                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];
                                
                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() { 
                                    modal.style.display = "none";
                                }
                                </script>
                                                                
    </main>
</div>
          
</body>
</html>