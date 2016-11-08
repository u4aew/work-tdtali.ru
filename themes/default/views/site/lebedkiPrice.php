<?php 
$this->title = 'Цены на лебедки - Барнаульские тали';
$this->description = 'На сегодняшний день сфера строительства успешно развивается, строятся новые офисные здания, торговые центры, жилые дома.';
?>
<h1>Цена на лебедки </h1>
<div class="row">
    <div class="col-lg-12">

        <p>
            <a href="/site/reductoriPrice"><img class="img-price-reductor" style="float:right"
                                                src="/uploads/image/92960701fa9075c736ff23985583490e.jpg"> </a>
        <p style="margin: 0px" class="hidden-xs">На сегодняшний день сфера строительства успешно развивается, строятся
            новые офисные здания, торговые центры, жилые дома. И без надежного и качественного оборудования не обойтись.
        <p style="margin: 0">Компания Барнаульские тали с радостью поможет Вам выбрать необходимое оборудование, которое
            будет использоваться долгие годы.Обратите внимание! Цена лебедки может зависеть от комплектации канатом,
        </p> а также установки дополнительных опций. Покупка лебедки для производства требует взвешенного решения.
        <a class="link-color" style="text-decoration: underline" href="/store/elektricheskie"> Электрическая
            лебедка </a> надежное и простое в эксплуатации оборудование. Свяжитесь с нашим специалистом для получение
        подробной информации. Наш прайс-лист на лебедки имеет актуальные цены на предлагаемую продукцию, для уточнения
        текущего уровня цен обращайтесь в отдел продаж.
        </p>
        <span align="center"><strong>При заключении долгосрочных договоров на поставку лебедок возможны СКИДКИ и БОНУСЫ!!!</strong></span> </p>
        <p>Для расчета нестандартного оборудования необходимо <a class="link-color" style="text-decoration: underline"
                                                                 href="/download-files/opros.rar"> заполнить опросный
                лист на лебедку. </a></p>
        <div class="col-lg-12">
            <p align="center"><a onclick="yaCounter4512622.reachGoal('price-excel'); return true;" class="price-excel" style="text-decoration: underline"
                                 href="https://docs.google.com/spreadsheets/d/1N-gRf1mu_4ld0walckANzlvQsJIc_fgItMFFeobxxik/pub?output=xlsx">
                    Скачать прайс-лист в Excel <img style="max-width: 30px;height: auto" src="/uploads/image/excel.png">
                </a></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="margin-bottom:20px">
        <?php
        use \application\store;
       
	   $category = StoreCategory::model()->findByPk(26);
        $attributeIds = [66, 67, 78, 79, 72];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(30);
        $attributeIds = [66, 67, 78, 68, 79, 72];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(29);
        $attributeIds = [91, 98, 101, 94, 100];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(28);
        $attributeIds = [66, 67, 78, 68, 79];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(32);
        $attributeIds = [66, 67, 68, 72];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(34);
        $attributeIds = [106, 113, 107, 108];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(44);
        $attributeIds = [66, 115, 67];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(45);
        $attributeIds = [66, 115, 67];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(46);
        $attributeIds = [66, 115, 67];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(31);
        $attributeIds = [155, 157, 159];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        $category = StoreCategory::model()->findByPk(33);
        $attributeIds = [118, 119, 122, 123];
        $this->renderPartial("lebedkiPrice_table", ["category" => $category, "attributeIds" => $attributeIds]);

        ?>
    </div>
</div>