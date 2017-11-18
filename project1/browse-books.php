<?php

session_start();

include 'checkloginstatus.php';
include 'includes/book-config.inc.php';

function checkQuery(){
  
    if (!empty($_GET['subcategory']) && $_GET['subcategory'] == "reset"){
        $_GET['subcategory'] = 30;
    }
    elseif (!empty($_GET['imprint']) && $_GET['imprint'] == "reset"){
        $_GET['imprint'] = 1;   
    }
    elseif((isset($_GET['subcategory'])  && $_GET['subcategory'] < 39) && is_numeric( $_GET['subcategory'])){
        $num = $_GET['subcategory'];
    }
    elseif((isset($_GET['imprint']) && $_GET['imprint'] < 7) && is_numeric( $_GET['imprint'])){
        $num = $_GET['imprint'];
    }
    else{
    header('Location: browse-books.php?subcategory=30');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Books</title>
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
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Subcategory</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                    <div class="four wide field">
                        
                                <?php
                                checkQuery();
                                
                                try{
                                $srt = 1;
                                $db = new SubcategoriesGateway($connection );
                                $result = $db->findAllSorted($srt);
                                echo "Filter by: " . "<br>";
                                echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?subcategory=" . "reset" ."'>" . "Reset Filter" . "</a>" . "<br><br>" . "&nbsp ";
                                foreach ($result as $row){
                                echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?subcategory=" . $row['SubcategoryID'] ."'>" . $row['SubcategoryName'] . "</a>" . "&nbsp ";
                                    }
                                    
                                }
                                catch (Exception $e) {
                                die( $e->getMessage() );
                                }
                                
                                ?>
                    </div>  
                     </ul>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Imprint</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                    <div class="four wide field">
                               
                                <?php
                                try{
                                $srt = 1;
                                $db = new ImprintGateway($connection );
                                $result = $db->findAllSorted($srt);
                                echo "Filter by: " . "<br>";
                                echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?imprint=" . "reset" ."'>" . "Reset Filter" . "</a>" . "<br><br>" . "&nbsp ";
                                foreach ($result as $row){
                                echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?imprint=" . $row['ImprintID'] ."'>" . $row['Imprint'] . "</a>" . " ";
                                }}
                                catch (Exception $e) {
                                die( $e->getMessage() );
                                }
                                ?>
                              
                    </div>  
                </ul>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
              
              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">

                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Books</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                          
                        
                          <div class="mdl-tabs__panel is-active" id="address-panel">
                              
                           <?php   
                             /* display requested uni's information */
                            
                            include 'functions.php';
                            
                           ?>
                           
         
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