<?php
/* @var StoreCategory $category ; */

$categories = StoreCategory::model()->findAll("parent_id = " . $category->id);
?>
<!-- Выодит блок с информцией в категориях-->
<div class="hidden-xs" style="margin-bottom:20px">
    Лебедка ручная один из видов подъемных механизмов, тяговое усилие передается посредством каната или иного гибкого элемента от барабана.
    Предназначается для перемещения и подъема груза при строительных, монтажных, ремонтных и других работ. Отличаются невысокой стоимостью, универсальностью применения, 
    не требует источника электропитания, что расширяет область их применения. Работать с данным механизмом можно при температурах окружающей среды от -40 С до +40 С, допускается работа, 
    как в помещении, так и на открытом воздух
</div>
<div class="container-fluid">
    <!-- Выводит все категории, ручных лебедок->
    <?php foreach ($categories as $item): ?>
        <div style="clear: both;text-align:center;">
			<h2 style="font-size:18px;color:black"><?=$item->name; ?></h2>

        </div>
        <?php
        $criteria = new CDbCriteria();
        $criteria->compare("category_id",$item->id);
        $criteria->order = "position";
        $products = Product::model()->findAll($criteria);
        ?>
        <?php foreach ($products as $currentProduct): ?>
            <?php $this->renderPartial("//store/product/_item",["data" => $currentProduct]);?>

        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

