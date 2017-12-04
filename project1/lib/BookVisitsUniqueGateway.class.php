<?php
class BookVisitsUniqueGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "select count(distinct CountryCode) as Count from BookVisits";
}
protected function getOrderFields() {
return '';
}
protected function getPrimaryKeyName() {
return "";
}
}
?>