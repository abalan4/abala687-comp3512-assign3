<?php

session_start();

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
                            
                <div class="mdl-card mdl-shadow--2dp demo-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Top 15 Most Visited Countries</h2>
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
                    
             <script> 
                            
                            $.getJSON("service-topCountries.php", function(json) {
                                console.log(json); 
                                for(var i=0; i<json.length; i++){
                                $('#sample select').append("<option value=" + i + ">" + json[i].CountryCode + "</option>");
                                    }
                                    
                            });
                            
                            function popInfo() {
                                 $.getJSON("service-topCountries.php", function(json) {
                                     var myList = document.getElementById("mySelect").value;
                                     var cName = json[myList].CountryName;
                                     var cCount = json[myList].Count;
                                     document.getElementById("de").innerHTML = "Country: " + cName + "<br>" + "Number of Visits: " + cCount;
                                 });
                            }
                            
                            $.getJSON("service-totals.php", function(json2) {
                                console.log(json2);
                                $("#test").append(json2[0].Count);
                                    
                                    
                            });
              </script>
                    
              </div>

            </div>
            
            
            
            
            
            <div class="mdl-card mdl-shadow--2dp demo-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Other info</h2>
              </div>
                <div class="mdl-card__supporting-text">

                     <div id="info"></div>
                      <br><br>
             <script> 
                            $.getJSON("service-totals.php", function(json2) {
                                
                                $("#info").append("Total number of visits in June: " + json2[0].Count + "<br><br>" + 
                                "Unique countries viewed from: " + json2[1].Count + "<br><br>" + 
                                "Total number of employee To-Do's: " + json2[2].Count + "<br><br>" + 
                                "Total employee messages: " + json2[3].Count);
                                      
                            });
                            
                           
              </script>
                    
              </div>

            </div>
            
            
            
            
            <div class="mdl-card mdl-shadow--2dp demo-card-square">
                <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Top 10 Adopted Books</h2>
              </div>
                <div class="mdl-card__supporting-text">

                     <div id="info2"></div>
                      <br><br>
             <script> 
                            $.getJSON("service-topAdoptedBooks.php", function(json3) {
                                console.log(json3);
                                $("#info2").append("Total adoptions: " + json3[0].Count);
                                      
                            });
                            
                           
              </script>
              </div>
            </div>
            
            
            
            
        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>