<?php
session_start();

$_SESSION["prevPage"] = (basename($_SERVER['PHP_SELF']) . "?ISBN10=" . $_GET['ISBN10']);
echo $_SESSION["prevPage"];

include 'checkloginstatus.php';
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


<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">

                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Book</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                          
                          <div class="mdl-tabs__panel is-active" id="address-panel">
                              
                           <?php include 'includes/displaySingle.php'; ?>
                           
                          </div>
                          <div class="mdl-tabs__panel" id="todo-panel">
                              
                          </div>
                          
                          <div class="mdl-tabs__panel" id="messages-panel">
                              
                          </div>
                        </div>                         
                    </div>    
  
              </div>  <!-- / mdl-cell + mdl-card -->   
            
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>