<?php

session_start();

if(isset($_SESSION["myusername"]) && isset($_SESSION["myFirst"]) && isset($_SESSION["myLast"]) && isset($_SESSION["myEmail"])){
        //do nothing
        }
else{
		//redirect to login
        header("Location:/project1/login.php");
    }


?>