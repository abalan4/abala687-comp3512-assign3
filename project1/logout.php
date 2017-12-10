<?php
session_start();

//This page destroys all session cookies and logs user out.
include 'checkloginstatus.php';

session_destroy();

header("Location:/project1/login.php");
?>

