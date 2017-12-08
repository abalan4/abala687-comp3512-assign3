<?php

include 'includes/book-config.inc.php';

header('Content-Type: application/json');
    $id = $_GET['id'];

    $db = new BookVisitsCodeGateway($connection );
    $result = $db->findCountry($id);
                            
    echo json_encode($result);
     
?>