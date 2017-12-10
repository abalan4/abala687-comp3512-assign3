<?php
session_start();

//Creates session cookie to remember last visited page so that after login it redirects to previous page
$_SESSION["prevPage"] = (basename($_SERVER['PHP_SELF']));
include 'checkloginstatus.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
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
              


<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#alex-panel" class="mdl-tabs__tab is-active">Asssignment 2 group</a>
      <a href="#course-panel" class="mdl-tabs__tab">Course</a>
      <a href="#resources-panel" class="mdl-tabs__tab">Resources Used</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="alex-panel">
    <ul>
      <th>Assignment 2 created for COMP 3512 WEB II</th>
      <li>Alex Balan: Student ID: 201521687</li>
      <ul>Contributions: 
        <li>Login/Register/Logout</li>
        <li>Enlarge/dim image</li>
        <li>Google maps</li>
        <li>Browse-universities</li>
        <li>Browse-books/single-books</li>
        <li>JSON pages/Analytics page</li>
        <li>Github page</li>
      </ul>
      <li>Kevin Lewis: Student ID: 201526932 </li>
      <ul>Contributions: 
        <li>Browse Employees</li>
        <li>Simple Search</li>
        <li>Wildcard Search</li>
        <li>CSS styling</li>
        <li>Google MDL Cards</li>
        <li>Navigation</li>
        <li>Page Layout/Styling</li>
      </ul>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="course-panel">
    <ul>
      <li>COMP 3512 - Web II</li>
      <li>Professor: Randy Connolly</li>
      <li>Date: <?php echo date('l \t\h\e jS'); ?></li>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="resources-panel">
    <ul>
      <li><a href="https://getmdl.io/">MDL</a></li>
      <li>Images from Assignment 1 zip</li>
      <li><a href="https://github.com/abalan4/abala687-comp3512-assign3">Assignment 3 GitHub</a></li>
    </ul>
  </div>


             
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>