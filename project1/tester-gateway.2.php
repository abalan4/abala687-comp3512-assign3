<?php

include 'includes/book-config.inc.php';

function checkQuery(){
  
    if(!isset($_GET['employee'])){
      $_GET['employee'] = 1;
      $num = 1;
    }
    elseif(is_numeric($_GET['employee']) && isset($_GET['employee']) && ($_GET['employee']<'99')) {
        $num = $_GET['employee'];   
    }
    else{
        $num = 1;
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
                  <h2 class="mdl-card__title-text">Employees</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">

                         <?php 
                           /* programmatically loop though employees and display each
                              name as <li> element. */
                                
                                try{
                                $srt = null;
                                $db = new EmployeesGateway($connection );
                                $result = $db->findAllSorted($srt);
                                foreach ($result as $row){
                                echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?employee=' . $row['EmployeeID'] . '" class="';
                                echo 'item">';
                                echo "<li>" . $row['FirstName'] . " " . $row['LastName'] . '</a>' . "</li>";
                                }}
                                catch (Exception $e) {
                                die( $e->getMessage() );
                                }
                           
                         ?>            

                    </ul>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
              
              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">

                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Employee Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                          <div class="mdl-tabs__tab-bar">
                              <a href="#address-panel" class="mdl-tabs__tab is-active">Address</a>
                              <a href="#todo-panel" class="mdl-tabs__tab">To Do</a>
                              <a href="#messages-panel" class="mdl-tabs__tab">Messages</a>
                          </div>
                        
                          <div class="mdl-tabs__panel is-active" id="address-panel">
                              
                           <?php   
                             /* display requested employee's information */
                                $theID = checkQuery();                             
                              
                                $db = new EmployeesGateway($connection );
                                $result = $db->findById($theID);
                              
                                    echo "<h4>" . $result['FirstName'] . " " . $result['LastName'] . "</h4>";
                                    echo $result['Address'] . "<br/>";
                                    echo $result['City'] . ", " . $result['Region'] . "<br/>";
                                    echo $result['Country'] . ", " . $result['Postal'] . "<br/>";
                                    echo $result['Email'];
                                
                           ?>
                           
         
                          </div>
                          <div class="mdl-tabs__panel" id="todo-panel">
                              
                                                           
                            
                                <table class="mdl-data-table  mdl-shadow--2dp">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Date</th>
                                      <th class="mdl-data-table__cell--non-numeric">Status</th>
                                      <th class="mdl-data-table__cell--non-numeric">Priority</th>
                                      <th class="mdl-data-table__cell--non-numeric">Content</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php /*  display TODOs  */
                                    
                                  $theID = checkQuery(); 
                                  $db = new EmployeesToDoGateway($connection );
                                  $result = $db->findManyById($theID);
                                        
                                        foreach ($result as $row){
                                        echo "<tr>";
                                        echo "<td>" . $row['DateBy'] . "</td>";
                                        echo "<td>" . $row['Status'] . "</td>";
                                        echo "<td>" . $row['Priority'] . "</td>";
                                        echo "<td>" . "<div align='left'>" . $row['Description'] . "</div>" . "</td>";
                                        echo "</tr>";
                                        }
                                    
                                    ?>
                                  </tbody>
                                </table>
                           
         
                          </div>
                          
                          <div class="mdl-tabs__panel" id="messages-panel">
                              
                                                         
                            
                                <table class="mdl-data-table  mdl-shadow--2dp">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Date</th>
                                      <th class="mdl-data-table__cell--non-numeric">Category</th>
                                      <th class="mdl-data-table__cell--non-numeric">From</th>
                                      <th class="mdl-data-table__cell--non-numeric">Message</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php /*  display Messages  */
                                    
                                    $theID = checkQuery(); 
                                    $db = new EmployeesMessagesGateway($connection );
                                    $result = $db->findMessages($theID);
                                        
                                        foreach ($result as $row){
                                        echo "<tr>";
                                        echo "<td>" . $row['MessageDate'] . "</td>";
                                        echo "<td>" . $row['Category'] . "</td>";
                                        echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
                                        echo "<td>" . "<div align='left'>" . substr($row['Content'], 0, 40) . "..." . "</div>" . "</td>";
                                        echo "</tr>";
                                        }
                                    
                                    ?>
                                  </tbody>
                                </table>
                           
         
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