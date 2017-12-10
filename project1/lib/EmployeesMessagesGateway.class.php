<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class EmployeesMessagesGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{

return "SELECT E.FirstName, E.LastName, E2.LastName, M.Content, E2.FirstName, M.MessageDate, M.Category FROM Employees AS E, Employees AS E2, EmployeeMessages AS M ";
  
}
protected function getOrderFields() {
return 'EmployeeToDo.DateBy DESC, FirstName';
}
protected function getPrimaryKeyName() {
return "M.EmployeeID = E.EmployeeID AND M.ContactID = E2.EmployeeID AND E.EmployeeID";
}
}
?>