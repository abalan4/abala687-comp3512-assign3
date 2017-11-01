<?php
define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');


function displayBooks(){
    try {
        
        if (!empty($_GET['subcategory']) && $_GET['subcategory'] == "reset"){
                               
                                $res = 30; 
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "SELECT Books.CopyrightYear, Books.ISBN10, Books.Title, Subcategories.SubcategoryName, Imprints.Imprint FROM Books, Subcategories, Imprints WHERE Subcategories.SubcategoryID=" . $res . ' and Books.SubcategoryID=' . $res . " and Imprints.ImprintID=Books.ImprintID order by Books.Title limit 20";
                                
                                $result = $pdo->query($sql);
                                
                                if ($res != reset){
                                
                            while ($row = $result->fetch()) {
                          
                                
                                echo "<div class=\"mdl-card mdl-shadow--2dp demo-card-square\">\n";
                                echo "                                <div class=\"mdl-card__title mdl-card--expand\">\n";
                                echo '                                  <h2 class="' . "mdl-card__title-text" . '"' . ">" . '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' .  $row['Title'] . "</a>" . "</h2>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__supporting-text\">\n";
                                echo '                                  <a href="' . "single-book.php?ISBN10=" . $row['ISBN10'] . '">' . '<img src="/project1/book-images/thumb/' . $row['ISBN10'] . '.jpg"' . "></a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Year: " . $row['CopyrightYear'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Subcategory: " . $row['SubcategoryName'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Imprint: " . $row['Imprint'] . "</a>" . "<br>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__actions mdl-card--border\">\n";
                                echo "                                  <a class=\"mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect\">\n";
                                echo                                    '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Click Here</a>";
                                echo "                                    </a>\n";
                                echo "                                </div>\n";
                                echo "                              </div>";

                                
                            } 
                            }
                            $pdo = null;
                                }
                                
                    elseif (!empty($_GET['imprint']) && $_GET['imprint'] == "reset"){
                               
                                $res = 1; 
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                
                                $sql = "SELECT Books.CopyrightYear, Books.ISBN10, Books.Title, Subcategories.SubcategoryName, Imprints.Imprint FROM Books, Subcategories, Imprints WHERE Imprints.ImprintID=" . $res . " and Books.ImprintID=". $res . " and Subcategories.SubcategoryID=Books.SubcategoryID order by Books.Title limit 20";
                                
                                $result = $pdo->query($sql);
                                
                                
                                
                            while ($row = $result->fetch()) {
                          
                                
                                echo "<div class=\"mdl-card mdl-shadow--2dp demo-card-square\">\n";
                                echo "                                <div class=\"mdl-card__title mdl-card--expand\">\n";
                                echo '                                  <h2 class="' . "mdl-card__title-text" . '"' . ">" . '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' .  $row['Title'] . "</a>" . "</h2>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__supporting-text\">\n";
                                echo '                                  <a href="' . "single-book.php?ISBN10=" . $row['ISBN10'] . '">' . '<img src="/project1/book-images/thumb/' . $row['ISBN10'] . '.jpg"' . "></a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Year: " . $row['CopyrightYear'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Subcategory: " . $row['SubcategoryName'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Imprint: " . $row['Imprint'] . "</a>" . "<br>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__actions mdl-card--border\">\n";
                                echo "                                  <a class=\"mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect\">\n";
                                echo                                    '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Click Here</a>";
                                echo "                                    </a>\n";
                                echo "                                </div>\n";
                                echo "                              </div>";

                                
                            } 
                            
                            $pdo = null;
                                }
        
        
        elseif(($_GET['subcategory'] < 35) && isset($_GET['subcategory']) && is_numeric( $_GET['subcategory'])){
                                
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "SELECT Books.CopyrightYear, Books.ISBN10, Books.Title, Subcategories.SubcategoryName, Imprints.Imprint FROM Books, Subcategories, Imprints WHERE Subcategories.SubcategoryID=" . $_GET['subcategory'] . ' and Books.SubcategoryID=' . $_GET['subcategory'] . " and Imprints.ImprintID=Books.ImprintID order by Books.Title limit 20";
                                
                                $result = $pdo->query($sql);
                                
                                if ($_GET['subcategory'] != reset){
                                
                            while ($row = $result->fetch()) {
                          
                                
                                echo "<div class=\"mdl-card mdl-shadow--2dp demo-card-square\">\n";
                                echo "                                <div class=\"mdl-card__title mdl-card--expand\">\n";
                                echo '                                  <h2 class="' . "mdl-card__title-text" . '"' . ">" . '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' .  $row['Title'] . "</a>" . "</h2>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__supporting-text\">\n";
                                echo '                                  <a href="' . "single-book.php?ISBN10=" . $row['ISBN10'] . '">' . '<img src="/project1/book-images/thumb/' . $row['ISBN10'] . '.jpg"' . "></a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Year: " . $row['CopyrightYear'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Subcategory: " . $row['SubcategoryName'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Imprint: " . $row['Imprint'] . "</a>" . "<br>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__actions mdl-card--border\">\n";
                                echo "                                  <a class=\"mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect\">\n";
                                echo                                    '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Click Here</a>";
                                echo "                                    </a>\n";
                                echo "                                </div>\n";
                                echo "                              </div>";

                                
                            } 
                            }
                            $pdo = null;
                                }
                                
        elseif(($_GET['imprint'] < 8) && isset($_GET['imprint']) && is_numeric( $_GET['imprint'])){
                                
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "SELECT Books.CopyrightYear, Books.ISBN10, Books.Title, Subcategories.SubcategoryName, Imprints.Imprint FROM Books, Subcategories, Imprints WHERE Imprints.ImprintID=" . $_GET['imprint'] . " and Books.ImprintID=". $_GET['imprint'] . " and Subcategories.SubcategoryID=Books.SubcategoryID order by Books.Title limit 20";
                                
                                $result = $pdo->query($sql);
                                
                                if ($_GET['subcategory'] != reset){
                                
                            while ($row = $result->fetch()) {
                          
                                
                                echo "<div class=\"mdl-card mdl-shadow--2dp demo-card-square\">\n";
                                echo "                                <div class=\"mdl-card__title mdl-card--expand\">\n";
                                echo '                                  <h2 class="' . "mdl-card__title-text" . '"' . ">" . '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' .  $row['Title'] . "</a>" . "</h2>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__supporting-text\">\n";
                                echo '                                  <a href="' . "single-book.php?ISBN10=" . $row['ISBN10'] . '">' . '<img src="/project1/book-images/thumb/' . $row['ISBN10'] . '.jpg"' . "></a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Year: " . $row['CopyrightYear'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' ."Subcategory: " . $row['SubcategoryName'] . "</a>" . "<br>";
                                echo '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Imprint: " . $row['Imprint'] . "</a>" . "<br>";
                                echo "                                </div>\n";
                                echo "                                <div class=\"mdl-card__actions mdl-card--border\">\n";
                                echo "                                  <a class=\"mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect\">\n";
                                echo                                    '<a href="' . "/project1/single-book.php?ISBN10=" . $row['ISBN10'] . '">' . "Click Here</a>";
                                echo "                                    </a>\n";
                                echo "                                </div>\n";
                                echo "                              </div>";

                                
                            } 
                            }
                            $pdo = null;
                                }
       
       
       
       
        else{
                                
                               
                               $_GET['subcategory'] = "reset";
                                displayBooks();
                                }                        
        
        
    }
     catch (PDOException $e) {
        die( $e->getMessage() );
                                }
    
};



function displayUniInfo(){
                                
                                try {
                                if (isset($_GET['university']) && $_GET['university'] > 0) {
                                    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql = 'select * from Universities where UniversityID=' . $_GET['university'];
                                    $result = $pdo->query($sql);
                                
                                
                                while ($row = $result->fetch()) {
                                    echo "<h4>" . $row['Name'] . "</h4>";
                                    echo $row['Address'] . "<br/>";
                                    echo $row['City'] . ", ";
                                    echo $row['State'] . " " . $row['Zip'] . "<br/>";
                                    echo $row['Website']. "<br/>";
                                    echo $row['Longitude'] . " ";
                                    echo $row['Latitude'];
                                    }
                                    $pdo = null;
                                    }
                                    }
                                catch (PDOException $e) {
                                    die( $e->getMessage() );
                                }
                                
};


function getSubcategory(){
	
			try {
                                   
                                    
                                    {
                                            $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $sql = 'SELECT * from Subcategories order by SubcategoryName';
                                            $result = $pdo->query($sql);
                                            echo "Filter by: " . "<br>";
                                            echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?subcategory=" . "reset" ."'>" . "Reset Filter" . "</a>" . "<br><br>" . "&nbsp ";
                                            while ($row = $result->fetch()) {
                                            
                                            echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?subcategory=" . $row['SubcategoryID'] ."'>" . $row['SubcategoryName'] . "</a>" . "&nbsp ";
                                        
                                            }
                                            $pdo = null;
                                        }
                                    }
                                    catch (PDOException $e) {
                                        die($e->getMessage());
                                    }
};
function getImprint(){
	
			try {
                                   
                                    
                                    {
                                            $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $sql = 'SELECT * from Imprints order by Imprint';
                                            $result = $pdo->query($sql);
                                            echo "Filter by: " . "<br>";
                                            echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?imprint=" . "reset" ."'>" . "Reset Filter" . "</a>" . "<br><br>" . "&nbsp ";
                                            while ($row = $result->fetch()) {
                                            
                                            echo "<a href='" . $_SERVER["SCRIPT_NAME"] . "?imprint=" . $row['ImprintID'] ."'>" . $row['Imprint'] . "</a>" . " ";
                                        
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
                  <h2 class="mdl-card__title-text">Subcategory</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                    <div class="four wide field">
                        
                                <?php
                                getSubcategory();
                                
                                ?>
                    </div>  
                         <?php 
                           /* programmatically loop though univesity and display each
                              name as <li> element. */
                            
                           
                           
                         ?>            

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
                                getImprint();
                                ?>
                              
                    </div>  
                         <?php 
                           /* programmatically loop though univesity and display each
                              name as <li> element. */
                           
                           
                         ?>            

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
                            
                             displayBooks();
                           ?>
                           
         
                          </div>
                          <div class="mdl-tabs__panel" id="todo-panel">
                              
                               <?php                       
                                 ?>                                 
                            
                           
         
                          </div>
                          
                          <div class="mdl-tabs__panel" id="messages-panel">
                              
                               <?php                       
                                
                                    
                               ?>                                  
                            
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