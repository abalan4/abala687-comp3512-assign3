<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class EmployeeMsgTotalGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT COUNT(*) as Count
        FROM EmployeeMessages
        WHERE MessageDate like '2017-06-%'
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