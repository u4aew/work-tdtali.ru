<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');
/* @var $category StoreCategory */

$this->title =  $category->getMetaTile();
$this->metaDescription = $category->getMetaDescription();
$this->metaKeywords =  $category->getMetaKeywords();

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs(true)
);
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
    );?>
</div>
	<!--Заголовок -->
<h1> <?= Yii::t('', ' {category}', ['{category}' => CHtml::encode($category->name)]); ?></h1>
<!--Вариант отображения в категориях -->
<?php if ($category->id == 25):?>
	<? $this->renderPartial("viewcategory/electric-category",["category" => $category]); ?>
		<?php return; ?>
			<?php endif; ?>
<?php if ($category->id == 36):?>
	<? $this->renderPartial("viewcategory/Motor-reduktor-category",["category" => $category]); ?>
		<?php return; ?>
			<?php endif; ?>
					
<!--Информационный блок в категориях в зависимости от ID категории -->
	<div class="visible-lg">
    <?php if ($category->id == 26):?>
	<? $this->renderPartial("infoblock/info-tyagovye"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	<?php if ($category->id == 28):?>
	<? $this->renderPartial("infoblock/info-manevrovye-top"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	<?php if ($category->id == 29):?>
	<? $this->renderPartial("infoblock/info-ramopodemnye-top"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	<?php if ($category->id == 30):?>
	<? $this->renderPartial("infoblock/info-stroitelnye-top"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	<?php if ($category->id == 31):?>
	<? $this->renderPartial("infoblock/info-shahtnaya-top"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	<?php if ($category->id == 32):?>
	<? $this->renderPartial("infoblock/info-avtomobilnye-top"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
    <?php if ($category->id == 33):?>
	<? $this->renderPartial("infoblock/info-burovye-top"); ?>
		<?php/* return;*/ ?>
     <?php endif; ?>
</div>
<!--карточки товара в категориях -->
<div class="container-fluid">
	<hr style="margin:0px">
	<div class=row>

<?php $this->widget(
                    'bootstrap.widgets.TbListView',
                    [
                        'dataProvider' => $dataProvider,
                        'itemView' => '//store/product/_item',
                        'summaryText' => '',
                        'enableHistory' => true,
                        'cssFile' => false,
                        'sortableAttributes' => [
							'price'
                        ],
                    ]
                ); ?>


</div>
</div>
<script>
    $(document).ready(function()
    {
        $(".block-order button").click(function()
        {
            
            $(this).parent().children(".form-order-mobile").slideToggle();            
        });
    });
</script>
<hr>
<?php if ($category->id == 28):?>
	<? $this->renderPartial("infoblock/info-manevrovye-bottom"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>

	<?php if ($category->id == 29):?>
	<? $this->renderPartial("infoblock/info-ramopodemnye-bottom"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>

	<?php if ($category->id == 31):?>
	<? $this->renderPartial("infoblock/info-shahtnaya-bottom"); ?>
	<?php/* return;*/ ?>
	<?php endif; ?>
	