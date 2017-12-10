<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class ImprintGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT ImprintID, Imprint from Imprints ";
}
protected function getOrderFields() {
return 'Imprint';
}
protected function getPrimaryKeyName() {
return "ImprintID";
}
}
?>