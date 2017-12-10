<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class ImprintBooksGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT Books.CopyrightYear, Books.ISBN10, Books.Title, Subcategories.SubcategoryName, Imprints.Imprint FROM Books, Subcategories, Imprints";
}
protected function getOrderFields() {
return 'Books.Title limit 20 ';
}
protected function getPrimaryKeyName() {
return "Imprints.ImprintID";
}
protected function getSecondaryKeyName() {
return " and Books.ImprintID";
}

protected function getThirdKeyName() {
return " and Subcategories.SubcategoryID=Books.SubcategoryID";
}
}
?>