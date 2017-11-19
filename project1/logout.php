<?php
session_start();

include 'checkloginstatus.php';

session_destroy();

header("Location:/project1/login.php");
?>

