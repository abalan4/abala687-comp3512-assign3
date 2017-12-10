<?php
//Part of the gateway classes for the 2 layer model. Contains the select statement including orderfields and primary key if necessary.
class SingleBooksGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT ISBN10, ISBN13, Title, CopyrightYear, SubcategoryName, Subcategories.SubcategoryID, Imprints.ImprintID, Imprint, Status, BindingType, TrimSize, PageCountsEditorialEst, Description FROM ((((Books 
    INNER JOIN Imprints ON Books.ImprintID = Imprints.ImprintID)
    INNER JOIN Subcategories ON Books.SubcategoryID = Subcategories.SubcategoryID)
    INNER JOIN Statuses ON Books.ProductionStatusID = Statuses.StatusID)
    INNER JOIN BindingTypes ON Books.BindingTypeID = BindingTypes.BindingTypeID)";
}
protected function getOrderFields() {
return 'Books.Title limit 20 ';
}
protected function getPrimaryKeyName() {
return "Books.ISBN10";
}

}
?>