<?php

include 'includes/book-config.inc.php';

header('Content-Type: application/json');

    $db = new BookVisitsGateway($connection );
    $result = $db->findCountries();
                            
    echo json_encode($result);
     
?>