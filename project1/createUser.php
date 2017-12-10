<?php

define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');

session_start();


//This function checks if there is an existing username in the database. If a match is found, a querystring is returned to the register page and it displays an error.
function checkExisting(){
try {
                                $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "select UserName from UsersLogin";
                                $result = $pdo->query($sql);
                            
                            while ($row = $result->fetch()) {
                            if ($_POST["email"] == $row['UserName']){
                                $matchFound = 1;
                                }
                            else{
                                //do nothing
                            }    
                            }
                            
                            $pdo = null;
                                }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
                                }
                                
                                if($matchFound == 1) {
                                 header("Location:/project1/register.php?exists=true");
                                }
                                 else{
                                     
                                     $salt = MD5(microtime());
                                    $pass = MD5($_POST["password"] . $salt);
                                    $joined = date("Y-m-d H:i:s");
                                     
                                     try {
                                    $conn = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    
                                    $sql = "BEGIN; INSERT INTO UsersLogin (Username, Password, Salt, DateJoined, DateLastModified)
                                    		VALUES ('" . $_POST["email"] . "', '" . $pass . "', '" . $salt . "', 1, '2');" . "COMMIT;
                                    		INSERT INTO Users (UserID, FirstName, LastName, Address, City, Region, Country, Postal, Phone, Email) 
                                			VALUES(LAST_INSERT_ID(),'" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["address"] . "', '" . $_POST["city"] . "', 
                                			'" . $_POST["region"] . "', '" . $_POST["country"] . "', '" . $_POST["postal"] . "', '" . $_POST["phonenumber"] . "', '" . $_POST["email"] . "');
                                    		";
                                    
                                    $conn->exec($sql);
                                    echo "Success!";
                                    }
                                	catch(PDOException $e)
                                    {
                                    echo $sql . "<br>" . $e->getMessage();
                                    }
                                
                                $conn = null;
                                
                                header("Location:/project1/index.php");
                                }
}

checkExisting();

?>

