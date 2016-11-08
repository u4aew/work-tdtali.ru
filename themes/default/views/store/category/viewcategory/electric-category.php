<?php
/* @var StoreCategory $category ; */

$categories = StoreCategory::model()->findAll("parent_id = " . $category->id);
$result = [];
$firstNum = 0;
$lastNum = 0;
$key = 0;
foreach ($categories as $item)
{
    if ($item->id == 29)
        $firstNum = $key;
    if ($item->id == 28)
        $lastNum = $key;
    $result[$key++] = $item;
}
$elem = $result[$firstNum];
$result[$firstNum] = $result[$lastNum];
$result[$lastNum] = $elem;
?>

<!-- блок с информцией в категориях-->
<div class="hidden-xs" style="margin-bottom:20px">
  <div>
    Электрическая лебедка это грузоподъемное оборудование, используемое для производства подъемных и транспортных
    операций в строительных, такелажных, монтажных и прочих работах. 
	<span class="hidden-sm hidden-md">
	Позволяет механизировать работы и ликвидировать
    трудоемкий ручной труд в промышленности и гражданском строительстве. Также лебедка электрическая используется в
    комплектации разных строительно-подъемных устройств, буровых установок, кранов, мачтовых подъемников, а также для
    передвижения по железнодорожным путям вагонов и цистерн. Подъем грузов, проводится с помощью троса, наматываемого на
    барабан, через передаточный механизм редуктора, приводится в движение электродвигателем. По основным отраслям
    применения лебедки электрические классифицируются как: тяговые и монтажные, маневровые, буровые и вспомогательные,
    скреперные и шахтные, крановые и автомобильные. По способам передачи вращения вала двигателя к барабану разделяются
    на редукторные и фрикционные. Производятся электролебедки в двух главных климатических исполнениях "Т" и "У", в
    соответствиях с ГОСТ 15150-69, они не предназначаются для подъема людей и рассчитываются на работу в невзрывоопасных
    окружающих средах и при температурах -40 +40. По пожеланию заказчика лебедка может быть укомплектована
    электрооборудованием во взрывобезопасном исполнении. </span>
</div>
</div>
<div class="container-fluid">
    <!-- Все категории, электрических лебёдок-->
    <?php foreach ($result as $item): ?>
        <div class="row" style="background-color:#F3E0D1; margin-bottom:5px">
            <div class="col-lg-9">
                <a href="<?= " /store/elektricheskie/" . $item->slug ?>"><img
                        style="float:left; margin:10px; width:100%;max-height:140px; max-width:130px;"
                        src="<?= $item->getImageUrl(200, 200); ?>"></a>
                <div class="mobile-description-category">
                    <h2 style="color: #366b81;
    font-size: 14px;
    text-decoration: underline;
    font-weight: bold;">
                        <a style="font-size: 14px" class="link-color"
                           href="<?= " /store/elektricheskie/" . $item->slug ?>">
                            <?= $item->name; ?>
                        </a>
                    </h2>
                    <p>
                        <?= $item->description; ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 hidden-xs"
                 style="background-color:#49A9C2; min-height:150px; border-left:5px solid white;">
                <!------ !! Выводить товары вложенных категорий !! ------->
                <?php
                $products = Product::model()->findAll("category_id = " . $item->id);
                $childCategories = StoreCategory::model()->findAll("parent_id = " . $item->id);
                foreach ($childCategories as $childCategory)
                {
                    $products = array_merge($products, Product::model()->findAll("category_id = " . $childCategory->id));
                }
                ?>
                <ul class="model-category" style="list-style:none;padding: 0px; ">
                    <?php foreach ($products as $currentProduct): ?>
                        <Li><a class="iteam-model-category"
                               href="<?= $currentProduct->getLink(); ?>"><?= $currentProduct->name; ?></a></Li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>