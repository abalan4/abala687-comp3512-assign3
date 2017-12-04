<?php
class AdoptionGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT Books.Title, Books.ISBN10, AdoptionBooks.BookID, COUNT(*) as Count
        FROM Adoptions, AdoptionBooks, Books
        WHERE AdoptionBooks.AdoptionID=Adoptions.AdoptionID and AdoptionBooks.BookID=Books.BookID
        GROUP BY AdoptionBooks.BookID
        ORDER BY Count DESC
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