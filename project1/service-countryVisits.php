<?php

include 'includes/book-config.inc.php';

header('Content-Type: application/json');
    //get is used to capture querystring and passed to findCountry which populates JSON object based on desired country code.
    $id = $_GET['id'];

    $db = new BookVisitsCodeGateway($connection );
    $result = $db->findCountry($id);
                            
    echo json_encode($result);
     
?>