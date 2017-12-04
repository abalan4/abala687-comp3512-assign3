<?php
class BookVisitsTotalGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT COUNT(*) as Count
        FROM BookVisits
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