<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

/* @var $category StoreCategory */

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog")];

?>
    <div class="col-md-12">
        <!-- Хлебные крошки  -->
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'htmlOptions' =>
                    [
                        'class' => 'breadcrumb',
                    ],
                'links' => $this->breadcrumbs,
            ]
        ); ?>
    </div>
    <!--Каталог товаров -->
    <div class="row" style="padding-left:30px">
        <h1><?= Yii::t("StoreModule.store", "Product catalog"); ?></h1>
    </div>

<?php if (count($products) > 0) : ?>
    <?php foreach ($products as $item) : ?>

        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="decoration-block-store">
            </div>
            <div class="info-block-store">
                <img src="<?= $item->getImageUrl(110, 105) ?>">
                <?php
                $url = $item->getUrl();
                ?>
                <div class="mobile-info-block-store">
                    <a href="<?= $url ?> ">
                        <b>  <?= $item->type->name . " " . CHtml::encode($item->getName()); ?>  </b>
                    </a>
                    <br>
                    <?= $item->description ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    Ничего не нашли
<?php endif; ?>