<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class BookVisitsCodeGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT Countries.CountryName, BookVisits.CountryCode, COUNT(*) as Count
        FROM BookVisits, Countries";
}
protected function getOrderFields() {
return " WHERE BookVisits.CountryCode=Countries.CountryCode AND Countries.CountryCode";
}
protected function getPrimaryKeyName() {
return " GROUP BY CountryCode
        ORDER BY Count DESC
        LIMIT 15";
}
}
?>