<?php
function showBooks(){
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

    if (!empty($_GET['subcategory']) && $_GET['subcategory'] == "reset"){
                                
                                $theID = 30;
                                $db = new SubcategoriesBooksGateway($connection );
                                $result = $db->findSubsById($theID);
                                
                                foreach($result as $row) {
                                showBooks();
                                }
    }
                                
    elseif (!empty($_GET['imprint']) && $_GET['imprint'] == "reset"){
                               
                               
                                $theID = 1;
                                $db = new ImprintBooksGateway($connection );
                                $result = $db->findSubsById($theID);
                               
                                foreach($result as $row) {
                                showBooks();
                                }
    }
        
        elseif((isset($_GET['subcategory'])  && $_GET['subcategory'] < 39) && is_numeric( $_GET['subcategory'])){
                                
                                $theID = $_GET['subcategory'];
                                $db = new SubcategoriesBooksGateway($connection );
                                $result = $db->findSubsById($theID);
                                
                                foreach($result as $row) {
                          
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
                                
        elseif((isset($_GET['imprint']) && $_GET['imprint'] < 7) && is_numeric( $_GET['imprint'])){
            
                                $theID = $_GET['imprint'];
                                $db = new ImprintBooksGateway($connection );
                                $result = $db->findSubsById($theID);
                               
                                foreach($result as $row) {
                          
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
                                
       
       
       
       
        else{
                                
                               
                               $_GET['subcategory'] = "reset";
                               $_GET['imprint'] = "reset";
                               
                                }
    ?>