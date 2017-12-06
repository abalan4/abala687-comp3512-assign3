<?php

session_start();

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
    
    <script src="js/validateForm.js"></script>
    
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
            
            <form action="createUser.php" method="post" id="fileForm" role="form">
            <div> 	 
                <label for="firstname"><span class="req"></span> First name: </label>
                    <input class="form-control" type="text" name="firstname" id="txt">
            </div>
            
            <div>
                <label for="lastname"><span class="req">* </span> Last name: </label> 
                    <input class="form-control" type="text" name="lastname" id="txt" onkeyup = "Check(this)"  required />   
            </div>
            
            <div class="form-group">
                <label for="address"><span class="req"></span> Address: </label> 
                    <input class="form-control" type="text" name="address" id="txt">
            </div>
            
            <div>
                <label for="city"><span class="req">* </span> City: </label> 
                    <input class="form-control" type="text" name="city" id="txt" onkeyup = "Check(this)" required />
            </div>
            
            <div>
                <label for="region"><span class="req"></span> Region: </label> 
                    <input class="form-control" type="text" name="region" id="txt">
            </div>
            
             <div>
                <label for="country"><span class="req">* </span> Country: </label> 
                    <input class="form-control" type="text" name="country" id="txt" onkeyup = "Check(this)" required />
            </div>
            
            <div>
                <label for="postal"><span class="req"></span> Postal: </label> 
                    <input class="form-control" type="text" name="postal" id="txt">
            </div>
            
            <div>
                <label for="phonenumber"><span class="req"></span> Phone Number: </label> 
                    <input class="form-control" type="text" name="phonenumber" id="phone">
            </div>
            
            <div>
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id="email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div>
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass" /> </p>

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again"  id="confirmedPass" onkeyup="checkInput(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>
            <div>
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div>
            </fieldset>
            </form>

</div>
</div>
	</main>
</div>
</div>
</body>
</html>