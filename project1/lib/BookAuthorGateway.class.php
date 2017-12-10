<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class BookAuthorGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT FirstName, LastName 
    FROM ((Books 
    INNER JOIN BookAuthors ON Books.BookID = BookAuthors.BookID)
    INNER JOIN Authors ON Authors.AuthorID = BookAuthors.AuthorID)";
}
protected function getOrderFields() {
return 'BookAuthors.Order ';
}
protected function getPrimaryKeyName() {
return "Books.ISBN10";
}
}
?>