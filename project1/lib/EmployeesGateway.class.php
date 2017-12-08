<?php
class EmployeesGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT * FROM Employees";
}
protected function getOrderFields() {
return 'LastName, FirstName';
}
protected function getPrimaryKeyName() {
return "EmployeeID";
}
protected function getEmployeeCityStatement() {
    return "SELECT distinct City FROM Employees";
}

public function findAllEmployeeCities() {
    $sql = $this->getEmployeeCityStatement();
   $statement = DatabaseHelper::runQuery($this->connection, $sql, null);
   return $statement->fetchAll();
}

public function displayEmployees()
{
    $sql = $this->getSelectStatement();
    
   $cityFilter = isset($_GET['cityFilter']) ? $_GET['cityFilter'] : null;
   $lnameFilter = isset($_GET['lnameFilter']) ? $_GET['lnameFilter'] : null;
    
    if ($cityFilter || $lnameFilter) {
        $sql.=  ' WHERE ';
        
        if ($cityFilter) {
            $sql.= 'City = "' . $cityFilter . '"';
            if ($lnameFilter) {
                $sql.= ' AND ';
            }
        }
        if ($lnameFilter) {
             $sql.= "LastName LIKE '". $lnameFilter. "%'";
         }
    }

    $sql.= ' ORDER BY LastName Asc' ;
     $statement = DatabaseHelper::runQuery($this->connection, $sql, null);
    return $statement->fetchAll();
}

}

?>