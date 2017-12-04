<?php

include 'includes/book-config.inc.php';

header('Content-Type: application/json');

    $db = new AdoptionGateway($connection );
    $results = $db->findCountries();
    
    echo json_encode($results);
     
?>