<?php
class EmployeeToDoTotalGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT COUNT(*) as Count
        FROM EmployeeToDo
        WHERE DateBy like '2017-06-%'
        ORDER BY Count DESC";
}
protected function getOrderFields() {
return '';
}
protected function getPrimaryKeyName() {
return "";
}
}
?>