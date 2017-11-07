<?php
class UniversityGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT * from Universities order by Name limit 20";
}
protected function getOrderFields() {
return 'Namee';
}
protected function getPrimaryKeyName() {
return "UniversityID";
}
}
?>