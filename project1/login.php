<?php

define('DBHOST', '');
define('DBNAME', 'book');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:dbname=book;charset=utf8mb4;');

session_start();

function checkLoginStatus(){
    if(isset($_SESSION["myusername"]) && isset($_SESSION["myFirst"]) && isset($_SESSION["myLast"]) && isset($_SESSION["myEmail"])) {
        if($_SESSION["prevPage"]){
        	header("Location:/project1/" . $_SESSION["prevPage"]);
        }
        else{
        	header("Location:/project1/index.php");
        }
    }
    else{
        //do nothing
    }
}

checkLoginStatus();

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
    <script src="js/validateLogin.js"></script>
 
 
<script>
	function disappearError(){
    $("#userField").hide();
};
</script> 
   
</head>

<body>

<div class=.mdl-layout__containerlogin>    
<div class="mdl-layoutlogin mdl-js-layout mdl-color--grey-100">
	<main class="mdl-layout__contentlogin">
		
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
				<h2 class="mdl-card__title-text">CRM Admin</h2>
			</div>
	  	<div class="mdl-card__supporting-text">
				<form action="checklogin.php" method="post">
					<div class="mdl-textfield mdl-js-textfield">
						<div>Username: </div>
						<input required name="username" type="username" class="form-control inputpass" id="username" onclick="disappearError();" onkeyup="checkInput(); return false;" />
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<div>Password: </div>
						<input required name="userpass" type="password" class="form-control inputpass" id="userpass" onclick="disappearError();" onkeyup="checkInput(); return false;" />
					
					<center><br><div id="userField" style="color:#ff0000"></div></center>
					</div>
					<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect type="submit">Log in</button>
			        </div>
				</form>
				    <form action="register.php" method="post">
				    <div class="mdl-card__actions mdl-card--border">
			            <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect type="submit2">Register</button>
			         </div>
			     </form>
			     
			</div>
			<?php
                     
                     if(isset($_SESSION["attempt"])){ 
                     echo "<script>" . '$("#userField").html("' . "Incorrect Username or Pass" . '"' . ");" . "</script>";
                     $_SESSION["attempt"] = 0;
                     }
                     
                     elseif(!isset($_SESSION["attempt"])){
                         //do nothing
                     }
                     
                     elseif(!isset($_SESSION["myFirst"])){
                      
                     echo "<script>" . '$("#userField").html("' . "2Incorrect Username or Pass" . '"' . ");" . "</script>"; 
                     
                     }
                    
                    else{
                      //do nothing
                      }
                      
                    ?> 
			
		</div>
	</main>
</div>
</div>
          
</body>
</html>