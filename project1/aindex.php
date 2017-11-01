<?php
define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');

function displayEmployees(){
    try {
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "select * from Employees order by LastName";
                                $result = $pdo->query($sql);
                                
                            while ($row = $result->fetch()) {
                            echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?employee=' . $row['EmployeeID'] . '" class="';
                            if (isset($_GET['id']) && $_GET['id'] == $row['EmployeeID']) echo 'active ';
                                echo 'item">';
                                echo "<li>" . $row['FirstName'] . " " . $row['LastName'] . '</a>' . "</li>";
                            }
                            $pdo = null;
                                }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
                                }
    
};

function displayEmpInfo(){
    try {
                                if (isset($_GET['employee']) && $_GET['employee'] > 0) {
                                    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql = 'select * from Employees where EmployeeId=' . $_GET['employee'];
                                    $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {
                                    echo "<h4>" . $row['FirstName'] . " " . $row['LastName'] . "</h4>";
                                    echo $row['Address'] . "<br/>";
                                    echo $row['City'] . ", " . $row['Region'] . "<br/>";
                                    echo $row['Country'] . ", " . $row['Postal'] . "<br/>";
                                    echo $row['Email'];
                                    }
                                    $pdo = null;
                                    }
                                    }
                                catch (PDOException $e) {
                                    die( $e->getMessage() );
                                }
    
};

function displayToDo(){
    
    
                                    try {
                                        if (isset($_GET['employee']) && $_GET['employee'] > 0) {
                                            $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $sql = 'SELECT * FROM EmployeeToDo INNER JOIN Employees ON Employees.EmployeeID = EmployeeToDo.EmployeeID WHERE Employees.EmployeeID=' . $_GET['employee'] . " Order by EmployeeToDo.DateBy DESC";
                                            $result = $pdo->query($sql);
                                            while ($row = $result->fetch()) {
                                             
                                        echo "<tr>";
                                        echo "<td>" . $row['DateBy'] . "</td>";
                                        echo "<td>" . $row['Status'] . "</td>";
                                        echo "<td>" . $row['Priority'] . "</td>";
                                        echo "<td>" . "<div align='left'>" . $row['Description'] . "</div>" . "</td>";
                                        echo "</tr>";
                                    
                                            }
                                            $pdo = null;
                                        }
                                    }
                                    catch (PDOException $e) {
                                        die($e->getMessage());
                                    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chapter 14</title>
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
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
                                      <a href="/project1/browse-universities.php">Click Here</a>
                                    </a>
                                </div>
                              </div>
                              <!-- Square card -->
                              <div class="mdl-card mdl-shadow--2dp demo-card-square">
                                <div class="mdl-card__title mdl-card__accent mdl-card--expand">
                                  <h2 class="mdl-card__title-text">Browse Books</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                  Browse all the books.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                      <a href="/project1/browse-books.php">Click Here</a>
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
                                  <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
                                      <a href="/project1/browse-employees.php">Click Here</a>
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
                                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                      <a href="aboutus.php">Click Here</a>
                                    </a>
                                </div>
                              </div>
                    </div>
            
        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>