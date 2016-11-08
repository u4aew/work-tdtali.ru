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
    );?>
								</div>
	<!--Каталог товаров -->
	<div class="row" style="padding-left:30px">
		<h1><?= Yii::t("StoreModule.store", "Product catalog"); ?></h1>
	</div>
	<?php foreach ($categories as $item) :?>

		<div class="col-lg-6 col-md-12 col-sm-12">  

			<div class="decoration-block-store">
			</div>
			<div class="info-block-store">
				<img src="<?=$item->getImageUrl(150,150) ?>">
				<?php 
                $url = "";
            if ($item->parent)
            {
                $url = "/".$item->parent->slug;
            }
            $url.="/".$item->slug;
            ?>
            <div class="mobile-info-block-store">
					<a href="<?= "/store".$url ?> ">
						<b>  <?=$item->name ?>  </b>
						</a>
					<br> 
					<?= $item->description ?>
				</div>
			</div>
		</div>

		<?php endforeach; ?>
      
     	
					