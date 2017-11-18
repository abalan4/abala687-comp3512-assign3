<?php

session_start();

include 'checkloginstatus.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
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
                                  <h2 class="mdl-card__title-text">Browse Universities</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                  Browse all the universities.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"
                                      href="/project1/browse-universities.php?state=reset">Click Here
                                    </a>
                                </div>
                              </div>
                              <!-- Square card -->
                              <div class="mdl-card mdl-shadow--2dp demo-card-square">
                                <div class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">Browse Books</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                  Browse all the books.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"
                                    href="/project1/browse-books.php?subcategory=reset">Click Here
                                    </a>
                                </div>
                              </div>
                              <!-- Square card -->
                              <div class="mdl-card mdl-shadow--2dp demo-card-square">
                                <div class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">Browse Employees</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                  Browse all the employees.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"
                                     href="/project1/browse-employees.php">Click Here
                                    </a>
                                </div>
                              </div>
                              <!-- Square card -->
                              <div class="mdl-card mdl-shadow--2dp demo-card-square">
                                <div class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">About</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                  Learn more about us.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"
                                       href="aboutus.php">Click Here
                                    </a>
                                </div>
                              </div>
                    </div>
            
        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>