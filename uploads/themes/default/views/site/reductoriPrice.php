<?php $this->pageTitle = Yii::app()->getModule('yupe')->siteName;?>


<?php 
    use \application\store;
    use \Yii;


    $category = StoreCategory::model()->findByPk(26);
    $attributeIds = [66,67,68];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);

    $category = StoreCategory::model()->findByPk(26);
    $attributeIds = [66,67,68];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);



?>