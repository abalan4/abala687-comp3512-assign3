<?php

include 'includes/book-config.inc.php';

header('Content-Type: application/json');

    $db = new BookVisitsTotalGateway($connection );
    $results = $db->findCountries();
    
    $db2 = new BookVisitsUniqueGateway($connection );
    $results2 = $db2->findCountries();           
    
    $db3 = new EmployeeToDoTotalGateway($connection );
    $results3 = $db3->findCountries(); 
    
    $db4 = new EmployeeMsgTotalGateway($connection );
    $results4 = $db4->findCountries();  
    
    $combArray = array_merge($results, $results2, $results3, $results4);
    
    echo json_encode($combArray);
     
?>