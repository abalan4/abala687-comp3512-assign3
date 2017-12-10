<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class UniversityBookGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT Name, Universities.UniversityID 
        FROM (((Books 
        INNER JOIN AdoptionBooks ON Books.BookID = AdoptionBooks.BookID)
        INNER JOIN Adoptions ON Adoptions.AdoptionID = AdoptionBooks.AdoptionID)
        INNER JOIN Universities ON Adoptions.UniversityID = Universities.UniversityID)";
}
protected function getOrderFields() {
return 'Namee';
}
protected function getPrimaryKeyName() {
return "Books.ISBN10";
}
}
?>