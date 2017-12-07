<?php

session_start();

$_SESSION["prevPage"] = (basename($_SERVER['PHP_SELF']));
include 'checkloginstatus.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Analytics</title>
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
                    
                <div class="mdl-card mdl-shadow--2dp demo4-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text"><u>Top 10 Adopted Books</u></h2>
              </div>
                <div class="mdl-card__supporting-text">

                     <table id=infor2>
                      <tr>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Quantity</th>
                      </tr><tr id=itm0></tr>
                      <tr id=itm1></tr>
                      <tr id=itm2></tr>
                      <tr id=itm3></tr>
                      <tr id=itm4></tr>
                      <tr id=itm5></tr>
                      <tr id=itm6></tr>
                      <tr id=itm7></tr>
                      <tr id=itm8></tr>
                      <tr id=itm9></tr>
                    </table>
                    
                    <script src="js/createTopAdoptedTable.js"></script>
              </div>
            </div>    
                            
                <div class="mdl-card mdl-shadow--2dp demo4-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text"><u>Top 15 Most Visited Countries</u></h2>
              </div>
                <div class="mdl-card__supporting-text">

                    <p>Please select a country:</p>
                    <form action="">
                     <div id="sample">
                      <select name="sample" id="mySelect" onchange="popInfo()">
                        <option value=""></option>
                      </select>
                      <p id="de"></p>
                      </div>
                      <br><br>
                    </form>
                        
                    <script src="js/createCountryTable.js"></script>
              </div>

            </div>
            
            <div class="mdl-card mdl-shadow--2dp demo4-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text"><u>Totals</u></h2>
              </div>
                <div class="mdl-card__supporting-text">

                     <table id=infor>
                      <tr>
                        <th>Icon</th>
                        <th>Number</th>
                        <th>Description</th>
                      </tr>
                      <tr id=item1>
                      </tr>
                      <tr id=item2>
                      </tr>
                      <tr id=item3>
                      </tr>
                      <tr id=item4>
                      </tr>
                    </table>
                      <br><br>
                    <script src="js/createTotalsTable.js"></script>
              </div>

            </div>
        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>