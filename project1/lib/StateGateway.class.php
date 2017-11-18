<?php
class StateGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT StateName from States";
}
protected function getOrderFields() {
return '';
}
protected function getPrimaryKeyName() {
return "";
}
}
?>