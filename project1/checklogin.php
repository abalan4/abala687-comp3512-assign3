<?php
define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');

session_start();

//This function gets the username and password from POST and creates the salted password which it returns to the getUserLogin function to store in the database.
function getUserSalt(){
    
    $getUser = $_POST["username"];
    $getPass = $_POST["userpass"];
		
		try {
			
			$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT UserName, Password, Salt from UsersLogin where UserName=?";
			
			$statement = $pdo -> prepare($sql);
			$statement -> bindvalue(1, $getUser);
			$statement -> execute();
			
			while ($row = $statement->fetch()){
			
			$saltedPass = md5($getPass . $row['Salt']);	
			
			if ($saltedPass == $row['Password']){
			    //echo "Login worked!";
			    return $saltedPass;
			    
			}
			}
			
			
			$pdo = null;
			}
			catch (PDOException $e) {
			die( $e->getMessage() );
				}
}

//After registering is successful, this function accesses database and stores session cookies to the database. If unsuccessful attempt is true creates session cookie for unsuccessful login.
function getUserLogin(){
    $getUser = $_POST["username"];
    $getPass = getUserSalt();
    
		try {
			
			$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT UserName, Password, Salt, FirstName, LastName, Email from UsersLogin INNER JOIN Users ON UsersLogin.UserID = Users.UserID where UserName=? and Password=?";
			
			$statement = $pdo -> prepare($sql);
			$statement -> bindvalue(1, $getUser);
			$statement -> bindvalue(2, $getPass);
			$statement -> execute();
			
			while ($row = $statement->fetch()){
				
				
				$a = "Login Successful!";
                $_SESSION["myusername"] = $row['UserName'];
                $_SESSION["myFirst"] = $row['FirstName'];
                $_SESSION["myLast"] = $row['LastName'];
                $_SESSION["myEmail"] = $row['Email'];
				
			}
			
			if ($a != "Login Successful!")
			{
			    //$a = "Incorrect Username or Password";
			    $_SESSION["attempt"] = 1;
			    
			}
			$pdo = null;
			}
			catch (PDOException $e) {
			die( $e->getMessage() );
				}

    echo $a;
}

getUserLogin();

header("Location:/project1/login.php");

?>