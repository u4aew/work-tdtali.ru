<?php

/* @var $product Product */
$this->title = $product->getMetaTitle();
$this->description = $product->getMetaDescription();
$this->keywords = $product->getMetaKeywords();
$mainAssets = Yii::app()->getModule('store')->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/jquery.simpleGal.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->getTheme()->getAssetsUrl() . '/js/store.js');

$this->breadcrumbs = array_merge(
    [Yii::t("StoreModule.store", 'Catalog') => ['/store/product/index']],
    $product->category ? $product->category->getBreadcrumbs(true) : [],
    [CHtml::encode($product->name)]
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
        ); ?>
    </div>
    <!--Всплывающее окно-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-needSuccess="false">
        <div class="modal-dialog modal-dialog-product" role="document">
            <div class="modal-content modal-form-custom">
                <div class="modal-header">
                    <span style="font-size:20px">Запрос на <?= CHtml::encode($product->name); ?></span>
                    <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                            aria-label="Close"><img src="/themes/default/web/images/close.png"></button>
                </div>
                <div class="modal-body">
				  <?php if (date("w") == 2 || date("w") == 6): ?>
              <div style="text-align:center;background-color:white;font-weight:bold;border:1px solid black"> Обратите внимание !!! <br> Заявки, отправленные в выходные дни, будут рассматриваться в рабочии </div>
            <?php else: ?>

            <?php endif; ?>
                    <table class="table-striped">
                        <thead>
                        <tr>
                            <th> Наименование</th>
                            <th> Цена, руб с НДС</th>
                        </tr>

                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?= CHtml::encode($product->name); ?>
                            </td>
                            <td>
                                <?php if ($product->getResultPrice() > 0): ?>
                                    <?= round($product->getBasePrice(), 2); ?>
                                    <?= Yii::t("StoreModule.store", "RUB"); ?>
                                <?php else: ?>
                                    По заявке
                                <?php endif; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <form class="needMailForm" method="post">
                        <input type="hidden" name="project_name" value="Барнаульские тали">
                        <input type="hidden" name="admin_email" value="barnaul@tali.ru">
                        <input type="hidden" name="form_subject" value="Заявка на продукцию Сайт">
                        <!-- END Hidden Required Fields -->
                        <input type="hidden" name="id_product" value="<?= CHtml::encode($product->id); ?>">
                        <label  id="message-alert-email" for="email">Ваш E-mail </label>
                        <input type="email" id="email" class="form-control" style="width:100%;resize: none" name="email"
                               placeholder="Ваш E-mail"  autofocus required>
                       <?= $product->short_description; ?>
                        <label for="succ">Ваше сообщение </label>
                        <textarea id="succ" class="form-control" style="width:100%; height:150px; resize: none"
                                  name="message"> Здравствуйте, интересует <?= $product->type->name . " " . CHtml::encode($product->getName()); ?> </textarea>
                        <br>
                        <button onclick="yaCounter4512622.reachGoal('pay'); return true;" style="float:right" class="btn btn-success hidden-xs"> Отправить</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-product" role="document">
            <div class="modal-content modal-form-custom" style="height: 200px !important;">
                <div class="modal-header">
                    <span style="font-size:20px">Запрос на <?= CHtml::encode($product->name); ?></span>
                    <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                            aria-label="Close"><img src="/themes/default/web/images/close.png"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <span style="font-size: 34px;">Спасибо за заявку</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Информационный блок с контактами для печати-->
    <div class="print-info col-xs-12 ">
        <div>
            <p> ТД «Барнаульские тали» Контактная информация </p>
            <p> 8-800-700-88-47 (Звонок по России бесплатный)
            <p> 8 (3852) 77-06-63 | 8 (495) 798-97-28
            <p> 8 (3852) 39-88-46 | 8 (3852) 39-88-47
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 fullhd">
                        <div class="img-protuct">
                            <!-- Изображение товара  -->
                            <a class="example6" href="<?= StoreImage::product($product); ?>"> <img class="images-img"
                                                                                                   src="<?= StoreImage::product($product); ?>"
                                                                                                   alt="<?= CHtml::encode($product->name); ?>"
                                                                                                   id="main-image"></a>

                            <div class="hidden-xs"
                                 style="width: 50px;height: 50px;position: absolute;right:20px;bottom: 70px;">
								<a class="example6"  href="<?= StoreImage::product($product); ?>">	 <img src="/themes/default/web/images/zoom.png">  </a>
                            </div>


                        </div>

                        <div class="button-block">
                            <!-- Кнопки  -->
                            <button type="button" class="button-style button-mobile hidden-xs" data-toggle="modal"
                                    data-target="#myModal" > Узнать цену <img
                                    src="http://tali.ru/wp-content/uploads/2015/01/coins_9799-e1422511559141.png">
                            </button>
                            <br>
                            <button type="button" class="button-style button-mobile hidden-xs" data-toggle="modal"
                                    data-target="#myModal"> Оставить заявку <img
                                    src="http://tali.ru/wp-content/uploads/2015/01/phone_2190-e1422511546618.png">
                            </button>
                            <!-- Кнопки для мобильной версиии  -->
							      <div style="padding: 5px;border: 3px solid black;font-weight: bold;font-size: 25px" class="visible-xs">
                            Цена c НДС, <br> <?php if ($product->getResultPrice() > 0): ?>
                                    <?= number_format($product->getBasePrice(), 0,"."," "); ?>
                                    <?= Yii::t("StoreModule.store", "RUB"); ?>
                                <?php else: ?>
                                    По заявке
                                <?php endif; ?>
                            </div>
                            <button type="button" class="visible-xs button-style button-mobile"
                                    onclick="$('#mobile-form-ticket').toggleClass('mobile-form-ticket-full');location.href ='#mobile-form-ticket'">
                                Узнать цену
                            </button>
                            <button type="button" class="visible-xs button-style button-mobile"
                                    onclick="$('#mobile-form-ticket').toggleClass('mobile-form-ticket-full');location.href ='#mobile-form-ticket'">
                                Оставить заявку
                            </button>
                            <!--Отправка заявки с мобильной версии -->
                            <div id="mobile-form-ticket">
										  <?php if (date("w") == 2 || date("w") == 6): ?>
              <div style="text-align:center;background-color:white;font-weight:bold;border:1px solid black"> Обратите внимание !!! <br> Заявки, отправленные в выходные дни, будут рассматриваться в рабочии </div>
            <?php else: ?>

            <?php endif; ?>
                                <hr>
                                <form class="mobileneedMailForm" method="post">
                                    <fieldset class="form-group" style="text-align:left">
                                        <legend>Запрос</legend>
                                        <input type="hidden" name="project_name" value="Барнаульские тали">
                                        <input type="hidden" name="admin_email" value="barnaul@tali.ru>
                                        <input type="hidden" name="form_subject"
                                               value="Форма отправки(Мобильная версия ): оставить заявку">
                                        <input type="hidden" name="id_product"
                                               value="<?= CHtml::encode($product->id); ?>">
                                        <input type="hidden" name="model" value="<?= CHtml::encode($product->name); ?>">
                                        <label for="emailmobile" class="js-alert-error"> Ваш Email или телефон </label>
                                        <input name="email" class="form-control" id="emailmobile" type="text">
                                        <label for="succmobile">Ваше сообщение </label>
                                        <textarea name="message" id="succmobile" class="form-control"
                                                  style="heigth:70px">Здравствуйте, интересует <?= $product->type->name . " " . CHtml::encode($product->getName()); ?> </textarea>
                                        <button onclick="yaCounter4512622.reachGoal('paym'); return true;" class="btn btn-success" style="width:100%; height:50px; margin-top:15px"> Отправить
                                        </button>
                                    </fieldset>
                                </form>
                                <hr>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <!-- Описание  -->
                        <div id="block-description" class="description-block hidden-xs">
                            <p>
                            <h1> <?= $product->type->name . " " . CHtml::encode($product->getName()); ?></h1> </p>
                            <p>
                                <?= $product->description; ?>
                            </p>
                        </div>
                        <div style="width:100%;height:10px;position:relative;margin-left:15px;background:linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%,rgb(255, 255, 255) 100%);top:-8px"></div>
                        <div class="next-read"><button style="font-weight: bold;" class="btn btn-default hidden-xs"
                                                  onclick="$('#block-description').toggleClass('description-block-full');">
                                Читать далее... </button></div>


                    </div>

                </div>

            </div>
            <div class="row">
                <!--Если атрибут "Показать вкладки" больше 0. то выводим табы" -->
                <?php
                $attribute = Attribute::model()->findByPk(131);
                $value = $product->attribute($attribute);
                ?>
                <?php if ($value): ?>
                    <!-- Навигация -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#specification" aria-controls="specification" role="tab"
                                              data-toggle="tab">Спецификация</a></li>
                        <li><a href="#blueprints" aria-controls="blueprints" role="tab" data-toggle="tab">Технические
                                чертежи</a></li>
                    </ul>
                    <!-- Содержимое вкладок -->
                    <div class="tab-content" style="margin:15px;">
                        <div role="tabpanel" class="tab-pane active" id="specification">
                            <div>
                                <div
                                    style="padding:5px; border:2px solid black; text-align:center;font-size:20px; font-weight:bold; margin:10px">
                                    Цена с НДС
                                    <?php if ($product->getResultPrice() > 0): ?>
                                        <?= number_format($product->getBasePrice(), 0,"."," "); ?>
                                        <?= Yii::t("StoreModule.store", "RUB"); ?>
                                    <?php else: ?>
                                        По заявке
                                    <?php endif; ?>
                                </div>
                                <div class="hidden-xs data-description">
                                    <?= $product->data; ?>
                                </div>
                                <div class="visible-xs">
                                    <!-- Технические характеристики  -->
                                    <?php foreach ($product->getAttributeGroups() as $groupName => $items): { ?>
                                        <table class="table-specifications">
                                            <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <h2>
                                                        Технические характеристики
                                                        <?= CHtml::encode($product->name); ?>
                                                    </h2>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($items as $attribute): { ?>
                                                <tr>
                                                    <td> 
                                                        <span><?= CHtml::encode($attribute->title); ?></span>
                                                    </td>
                                                    <td align=center>
                                                        <?= AttributeRender::renderValue($attribute, $product->attribute($attribute)); ?>
                                                    </td>
                                                </tr>
                                            <?php } endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php } endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="blueprints">
                            <?php foreach ($product->getImages() as $key => $image): { ?>
                                <div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div>
                                            <a class="example6" href="<?= $image->getImageUrl(); ?>">
                                                <img class="thumbnail galery-img" src="<?= $image->getImageUrl(); ?>"/>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            <?php } endforeach; ?>

                        </div>
                    </div>
                <?php else: ?>
                   
                    <div class="col-lg-6 block-specifications ">
                        <!-- Технические характеристики  -->
                        <?php foreach ($product->getAttributeGroups() as $groupName => $items): { ?>
                            <table class="table-specifications">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        <h2>
                                            Технические характеристики
                                            <?= CHtml::encode($product->name); ?>
                                        </h2>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($items as $attribute): { ?>
                                    <tr>
                                        <td>
                                            <span><?= CHtml::encode($attribute->title); ?></span>
                                        </td>
                                        <td align=center>
                                            <?= AttributeRender::renderValue($attribute, $product->attribute($attribute)); ?>
                                        </td>
                                    </tr>
                                <?php } endforeach; ?>
                                <tr class="price-table">
                                    <td> Цена без каната</td>
                                    <td>
                                        <?php if ($product->getResultPrice() > 0): ?>
                                            <?= number_format($product->getBasePrice(), 0,"."," "); ?>
                                            <?= Yii::t("StoreModule.store", "RUB"); ?>
                                        <?php else: ?>
                                            По заявке
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        <?php } endforeach; ?>
                       
                    </div>

                    <div class="col-lg-6">
                        <!-- Галерея  -->
                        <?php foreach ($product->getImages() as $key => $image): { ?>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div>
                                        <a class="example6" href="<?= $image->getImageUrl(); ?>">
                                            <img class="thumbnail galery-img" src="<?= $image->getImageUrl(); ?>"/>
                                        </a>
                                        <div style="text-align:right;width:50px" class="zoom-div col-xs-12">
											<a class="example6"  href="<?= $image->getImageUrl(); ?>">  <img src="/themes/default/web/images/zoom.png"> </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                  
                        <?php } endforeach; ?>

                        <div class="visible-xs">
                            <!-- Блок описание для мобильной версии  -->
                            <noindex>
                                <?= $product->description; ?>
                            </noindex>
                        </div>
                    </div>
                    
                
                             <div class="row">
            	<div class="col-lg-12">
                            <?= $product->data; ?>
            	</div>
            </div>
            <?php endif; ?>
            </div>
            <div class="row" style="margin-top:10px;" style="text-align:center;">
            <div>
              <div style="padding-left:15px;margin-bottom:10px;font-style:italic">
            *Приведенные ниже технические характеристики и варианты комплектации могут изменяться со временем, и отличаться от информации, опубликованной на сайте. Чтобы уточнить описание, габаритные и присоединительные размеры обращайтесь к менеджеру.
            </div>
            </div>
                    <!-- Сопутствующий товар  -->
                <div class="col-lg-12">
                    <?php $this->widget('application.modules.store.widgets.LinkedProductsWidget', ['product' => $product, 'code' => null,]); ?>
                </div>
            </div>
        </div>
        <!-- Блок для дполнительной инофрмации  -->
        <div class="col-lg-3 hidden-xs">
        <!--
        <div style="width:80%;margin:0 auto;border:2px solid rgba(158, 158, 158, 0.25);padding:5px;background-color:rgba(238, 238, 238, 0.41);text-align:center">
			<p style="text-align:center"><strong> Обратите внимание </strong></p>
			<p >Приведенные ниже технические характеристики и варианты комплектации могут изменяться со временем, и отличаться от информации, опубликованной на сайте. Чтобы уточнить описание, габаритные и присоединительные размеры обращайтесь к менеджеру.</p>
        </div>
        -->
        </div>

    </div>
<?php Yii::app()->getClientScript()->registerScript(
    "product-images",
    <<<JS
        $(".thumbnails").simpleGal({
    mainImage: "#main-image"
});
JS
); ?>