<?php
class SubcategoriesGateway extends TableDataGateway {
public function __construct($connect) {
parent::__construct($connect);
}
protected function getSelectStatement()
{
return "SELECT * from Subcategories ";
}
protected function getOrderFields() {
return 'SubcategoryName';
}
protected function getPrimaryKeyName() {
return "SubcategoryID";
}
}
?>