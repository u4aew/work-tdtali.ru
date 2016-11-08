<?php 
$this->title = 'Прайс-лист на редукторы - Барнаульские тали';
$this->description = 'Цена на редукторы и мотор-редукторы зависят от исполнения или передаточного числа, размещенные в прайс-листе цены являются ориентировочными и могут измениться в зависимости от Ваших конкретных потребностей. ';

?>
<h1>Прайс-лист на редукторы </h1>
<div class="row">
	<div class="col-lg-12">
		<p>Цена на редукторы и мотор-редукторы зависят от исполнения или передаточного числа, размещенные в прайс-листе цены являются ориентировочными и могут измениться в зависимости от Ваших конкретных потребностей. Свяжитесь с нашим специалистом для уточнения цены.</p>
		
		<p style="text-align:center">При заключении долгосрочных договоров на поставку возможны СКИДКИ и БОНУСЫ!!! </p>
	</div>
    <div class="col-lg-12">
        <p align="center"><a class="price-excel"   onclick="yaCounter4512622.reachGoal('price-excel'); return true;" style="text-decoration: underline"
                             href="https://docs.google.com/spreadsheets/d/1N-gRf1mu_4ld0walckANzlvQsJIc_fgItMFFeobxxik/pub?output=xlsx">
                Скачать прайс-лист в Excel <img style="max-width: 30px;height: auto" src="/uploads/image/excel.png">
            </a></p>
    </div>
</div>
<?php 
   
    $category = StoreCategory::model()->findByPk(38);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);

    $category = StoreCategory::model()->findByPk(39);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);

    $category = StoreCategory::model()->findByPk(40);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);
  
    $category = StoreCategory::model()->findByPk(41);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);
?>