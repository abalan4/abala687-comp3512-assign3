<?php
class SubcategoriesBooksGateway extends TableDataGateway {
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
return "Subcategories.SubcategoryID";
}
protected function getSecondaryKeyName() {
return " and Books.SubcategoryID";
}

protected function getThirdKeyName() {
return " and Imprints.ImprintID=Books.ImprintID";
}
}
?>