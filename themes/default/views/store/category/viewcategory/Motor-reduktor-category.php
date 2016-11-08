<?php
/* @var StoreCategory $category ; */

$categories = StoreCategory::model()->findAll("parent_id = " . $category->id);
?>
<!-- Выодит блок с информцией в категориях-->
<div class="hidden-xs" style="margin-bottom:20px">
    Редуктор – это устройство для преобразования вращения входного вала с наиболее высокой скорости в более низкую
    скорость на выходном валу. Понятие редукторы, довольно распространено в механике. Уже не один десяток лет данный
    агрегат обширно используется в самых различных отраслях производства промышленной техники. Сегодня они повсеместно
    применяются в станках и ряде других сложных механизмах, таких как: приводы кранов, конвейеры, бетономешалки,
    лебедки. От выбора редуктора во многом будет зависеть его надежность. Ошибки в расчете и выборе редукторов могут
    привести к его преждевременной поломки и, как последствие к финансовым потерям. Поэтому работы по расчетам и выбору
    редуктора нужно доверить опытным специалистам, которые смогут учесть все факторы, такие как месторасположения
    редуктора в пространстве и его условий работы, а так же температуру нагревания в процессе эксплуатации. Проведя
    надлежащий расчет редуктора, специалист сможет обеспечит подбор оптимального типоразмера редуктора
    общемашиностроительного под Ваш определенный привод.
    <p style="margin:0px"><a style="text-decoration: underline" class="link-color"
                             href="/pages/vybor-reduktora-klassifikaciya-redukto">Классификация редуктора, использование
            редуктора </a>
    </p>
    <p>
        <a style="text-decoration: underline" class="link-color"
           href="/pages/vybor-reduktora-raschet-peredatochnogo-chisla-reduktora">Выбор редуктора, расчет редуктора. </a>
    </p>
</div>
<div class="container-fluid">
    <!-- Выводит все категории, мотор-редукторов-->
    <?php foreach ($categories as $item): ?>
        <div class="row" style="background-color:#F3E0D1; margin-bottom:5px">
            <div class="col-lg-9">
                <img style="float:left; margin:10px; width:100%; max-height:140px; max-width:130px;"
                     src="<?= $item->getImageUrl(200, 200); ?>">
                <div class="mobile-description-category">
                    <h2 style="color: #366b81;
    font-size: 14px;
    text-decoration: underline;
    font-weight: bold;">
                        <a style="font-size: 14px" class="link-color"
                           href="<?= " /store/reduktory-motor-reduktory/" . $item->slug ?>">
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
                <?php
                $products = Product::model()->findAll("category_id = " . $item->id);
                ?>
                <ul class="model-category" style="list-style:none;padding: 0px ">
                    <?php foreach ($products as $currentProduct): ?>
                        <Li><a class="iteam-model-category"
                               href="<?= $currentProduct->getLink(); ?>"><?= $currentProduct->name; ?></a></Li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="row" style="background-color:#F3E0D1; margin-bottom:5px">
        <div class="col-lg-9">
            <img style="float:left; margin:10px; width:100%; max-height:140px; max-width:130px;"
                 src="/uploads/thumbs/store/category/200x200_b2e470f2a5a5f318bf9107b3d66087d9.jpg">
            <div class="mobile-description-category">

                <h2 style="color: #366b81;
    font-size: 14px;
    text-decoration: underline;
    font-weight: bold;">
                   <a style="font-size: 14px" class="link-color"  style="color: #0E4E69" href="/pages/motor-reduktory-proizvodstva-italii"> Редукторы производства Италии </a>
                 </h2>
                <p>
                    Итальянская компания Transtecno проектирует и производит широкий ассортимент редукторов червячных,
                    цилиндрических и планетарных с приводами электродвигателей постоянного и переменного тока.
                    Производство изготавливает как типовые модели, так и специфические редукторы по специальным
                    проектам.
                </p>
            </div>
        </div>
        <div class="col-lg-3 hidden-xs"
             style="background-color:#49A9C2; min-height:150px; border-left:5px solid white;">
            <ul class="model-category" style="list-style:none;padding: 0px ">

                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii"> CM </a>
                </Li>
                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii"> CMG </a>
                </Li>

                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii"> CMG </a>
                </Li>
                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii"> PU </a>
                </Li>
                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii">  CMV </a>
                </Li>
                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii"> CMV </a>
                </Li>
                <Li><a class="iteam-model-category"
                       href="/pages/motor-reduktory-proizvodstva-italii">P </a>
                </Li>
            </ul>
        </div>
    </div>


</div>