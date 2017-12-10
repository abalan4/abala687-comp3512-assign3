<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class AdoptionGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT sum(Quantity) as mySum, Books.Title, Books.ISBN10, AdoptionBooks.BookID
        FROM Adoptions, AdoptionBooks, Books
        WHERE AdoptionBooks.AdoptionID = Adoptions.AdoptionID
        AND AdoptionBooks.BookID = Books.BookID
        GROUP BY AdoptionBooks.BookID
        ORDER BY mySum DESC 
        LIMIT 10";
}
protected function getOrderFields() {
return '';
}
protected function getPrimaryKeyName() {
return "";
}
}

?>