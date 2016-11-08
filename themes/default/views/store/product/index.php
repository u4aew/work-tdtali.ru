<?php

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');



$this->title = 'Купить лебедку электрическую - Барнаульские тали ';
$this->description = 'Лебедки - один из видов грузоподъемной техники применяймые для подъема и перемещения грузов, комплектации грузоподъемных устройств, подтягивания железнодорожных вагонов, вытягивания застрявших автомобилий.';





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
	<div class="row " style="padding-left:30px">
		<h1><?= Yii::t("StoreModule.store", "Product catalog"); ?></h1>
	</div>

<div class="qwerty">
	<?php foreach ($categories as $item) :?>

		<div class="col-lg-6 col-md-12 col-sm-12">  

			<div class="decoration-block-store">
			</div>
			<div class="info-block-store">
				<?php
				$url = "";
				if ($item->parent)
				{
					$url = "/".$item->parent->slug;
				}
				$url.="/".$item->slug;
				?>
			<a href="<?= "/store".$url ?>"> <img src="<?=$item->getImageUrl(150,150) ?>"> </a>
            <div class="mobile-info-block-store">
					<a style="font-size: 14px" class="link-color" href="<?= "/store".$url ?> ">
						<b>  <?=$item->name ?>  </b>
						</a>
					<br> 
					<?= $item->description ?>
				</div>
				
			</div>
		</div>


		<?php endforeach; ?>
</div>
      <!-- -->
      
      	<div class="col-lg-6 col-md-12 col-sm-12">  

			<div class="decoration-block-store" style="height:121px">
			</div>
			<div class="info-block-store">
				
            <div class="mobile-info-block-store">
					
				</div>
			</div>
		</div>				