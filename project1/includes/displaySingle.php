<?php  
    
    /*The displaySingle.php page is used to isolate markup from the single-books.php page. 
    There is a database call to the SingleBooksGateway to display the book, a call to the UniversityBookGateway to return the adopted universities, 
    and a call to the BookAuthorGateway to return the authors of the book.
    */
                             /* display requested uni's information */
                             
                             $c = checkISBN();
                        
                                $db = new SingleBooksGateway($connection );
                                $result = $db->findMessages($c);
                                
                                foreach($result as $row) {
                                      
                                      echo "<div class=\"mdl-card2 mdl-shadow--2dp demo2-card-square\">\n";
                                      echo "<div class=\"mdl-card__title mdl-card--expand\">\n";
                                      echo ' <h2 class="' . "mdl-card__title-text" . '"' . ">" .   $row['Title']  . "</h2>";
                                      echo "</div>\n";
                                      echo "<div class=\"mdl-card__supporting-text\">\n";
                                     
                                      echo '<div id="max" href="#"><img src="/project1/book-images/medium/' . $row['ISBN10'] . '.jpg"></div>';
                                      echo "<div id=\"picture\">\n";
                                      echo '<h5><p align="center"><div id="min"><a href="#">Close</a></div></p></h5>';
                                      echo "<img src='/project1/book-images/large/" . $row['ISBN10'] . ".jpg'>";
                                      echo "</div>";
                                      echo '<div id="bright"></div>';
                                      
                                      echo "ISBN10: " . $row['ISBN10'] . "<br>";
                                      echo "ISBN13: " . $row['ISBN13'] . "<br>";
                                      echo "Year: " . $row['CopyrightYear'] . "<br>";
                                      echo "Subcategory: " . "<a href=" . '"' . "browse-books.php?subcategory=" . $row['SubcategoryID'] . '">' . $row['SubcategoryName'] . "</a>" . "<br>";
                                      echo "Imprint: " . "<a href=" . '"' . "browse-books.php?imprint=" . $row['ImprintID'] . '">' . $row['Imprint'] . "</a>" . "<br>";
                                      echo "Status: " . $row['Status'] . "<br>";
                                      echo "Imprint: " . $row['Imprint'] . "<br>";
                                      echo "Binding: " . $row['BindingType'] . "<br>";
                                      echo "Trim Size: " . $row['TrimSize'] . "<br>";
                                      echo "Page Count: " . $row['PageCountsEditorialEst'] . "<br>" . "<br>";
                                      echo "Description: " . $row['Description'] . "<br>";
                                      echo "</div>\n";
                                      echo "</div>";
                                      
                                }
                             
                                $db = new UniversityBookGateway($connection );
                                $result = $db->findMessages($c);
                                
                                     echo "<div class=\"mdl-card2 mdl-shadow--2dp demo2-card-square\">\n";
                                     echo "<div class=\"mdl-card__title mdl-card--expand\">\n";
                                     echo '<h2 class="' . "mdl-card__title-text" . '"' . ">" . "Univerisites that have adopted this book: " . "</h2>";
                                     echo "</div>\n";
                                     echo "<div class=\"mdl-card__supporting-text\">\n";
                                                    
                                foreach($result as $row) {
                                     echo "<a href=" . '"' . "browse-universities.php?university=" . $row['UniversityID'] . '&state=' . '">' . $row['Name'] . "</a>" . "<br>";
                                     
                                }
                                    echo "</div>\n";
                                    echo "</div>";
                                
                                $db = new BookAuthorGateway($connection );
                                $result = $db->findManyByID($c);
                                
                                    echo "<div class=\"mdl-card2 mdl-shadow--2dp demo3-card-square\">\n";
                                    echo "<div class=\"mdl-card__title mdl-card--expand\">\n";
                                    echo '<h2 class="' . "mdl-card__title-text" . '"' . ">" . "Authors:" . "</h2>";
                                    echo "</div>\n";
                                    echo "<div class=\"mdl-card__supporting-text\">\n";
                                    
                             
                             foreach($result as $row) {
                             echo $row['FirstName'] . ", " . $row["LastName"] . "<br>";
                             }
                                    echo "</div>\n";
                                    echo "</div>";
                             
                             
                           ?>