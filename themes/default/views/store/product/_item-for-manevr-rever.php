<?php
/* @var Product $data */
?>
<?php if ($data->category->id == 48) : ?>
    <?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($data->slug)]);
    ?>
    <!-- Карточка товара в категориях -->
    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 card-product-block">
        <div style="text-align:center !important;" class="col-md-3 col-sm-12 category-images-block">
            <!-- Изображение товара -->
            <div class="category-images">
                <a href="<?= $productUrl; ?>">
                    <img class="category-images-img " src="<?= $data->getImageUrl(110, 105); ?>"/>
                </a>
            </div>
        </div>
        <!-- Технические характеристики -->
        <div class="col-offset-lg-1 col-lg-8 col-offset-md-1 col-md-8 col-sm-12 block-specifications-categoty">
            <?php foreach ($data->getAttributeGroups() as $groupName => $items): ?>
                <h2 style="margin:0px"><span class="active-name"> <a
                            href="<?= $productUrl; ?>"> <?= $data->type->name . " " . CHtml::encode($data->getName()); ?>  </a>  </span>
                </h2>
                <!-- Вывод атрибутов в зависимости от ID -->
                <table class="table-specifications-categoty">
                    <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($items as $attribute): ?>
                        <?php if ($i++ == 5) break; ?>
                        <tr>
                            <td style="width: 70%">
                                <span><?= CHtml::encode($attribute->title); ?></span>
                            </td>
                            <td style="width: 30%; text-align: center;">
                                <?= AttributeRender::renderValue($attribute, $data->attribute($attribute)); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
                    <div class="block-specifications-categoty__box-price">
                    <div     class="block-specifications-categoty__box-price-price">
                        Стоимость
                    </div>
                    <div       class="block-specifications-categoty__box-price-price_value">
                        <?php if ($data->getResultPrice() > 0): ?>
                            <?= number_format($data->getBasePrice(), 0,"."," "); ?>
                            <?= Yii::t("StoreModule.store", "RUB"); ?>
                        <?php else: ?>
                            По заявке
                        <?php endif; ?>
                    </div>
                    <div style="clear: both"></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="block-order visible-xs">
            <button class="btn btn-primary" style="width:100%" type="button"> Отправить заявку</button>
            <div class="form-order-mobile" style="display:none;">
                <form class="mobileneedMailForm" method="post">
                    <fieldset class="form-group">
                        <legend>Заявка на <?= CHtml::encode($data->getName()); ?>  </legend>
                        <input type="hidden" name="project_name" value="Барнаульские тали">
                        <input type="hidden" name="admin_email" value="barnaul@tali.ru">
                        <input type="hidden" name="form_subject"
                               value="Форма отправки(Мобильная версия): оставить заявку">
                        <input type="hidden" name="model-mobile"
                               value="<?= $data->type->name . " " . CHtml::encode($data->getName()); ?>">
                        <label for="emailmobile"> Ваш Email или телефон </label>
                        <input name="email" class="form-control" id="emailmobile" type="text">
                        <label for="succmobile">Ваше сообщение </label>
                            <textarea name="message" id="succmobile"
                                      class="form-control">Здрувствуйте, интересует <?= $data->type->name . " " . CHtml::encode($data->getName()); ?>   </textarea>
                        <button onclick="yaCounter4512622.reachGoal('paym'); return true;" class="btn btn-success" style="width:100%; height:50px; margin-top:15px"
                                type="submit"> Отправить
                        </button>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
<?php else: ?>
    <?php if ($data->category->id == 29) : ?>
        <?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($data->slug)]);
        ?>
        <!-- Карточка товара в категориях -->
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 card-product-block hack">
            <div style="text-align:center !important;" class="col-md-3 col-sm-12 category-images-block">
                <!-- Изображение товара -->
                <div class="category-images">
                    <a href="<?= $productUrl; ?>">
                        <img class="category-images-img " src="<?= $data->getImageUrl(110, 105); ?>"/>
                    </a>
                </div>
            </div>
            <!-- Технические характеристики -->
            <div class="col-offset-lg-1 col-lg-8 col-offset-md-1 col-md-8 col-sm-12 block-specifications-categoty">
                <?php foreach ($data->getAttributeGroups() as $groupName => $items): ?>
                    <h2 style="margin:0px"><span class="active-name"> <a
                                href="<?= $productUrl; ?>"> <?= $data->type->name . " " . CHtml::encode($data->getName()); ?>  </a>  </span>
                    </h2>
                    <!-- Вывод атрибутов в зависимости от ID -->
                    <table class="table-specifications-categoty">
                        <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($items as $attribute): ?>
                            <?php if ($i++ == 5) break; ?>
                            <tr>
                                <td style="width: 70%">
                                    <span><?= CHtml::encode($attribute->title); ?></span>
                                </td>
                                <td style="width: 30%; text-align: center;">
                                    <?= AttributeRender::renderValue($attribute, $data->attribute($attribute)); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Вывод цены в блоке -->
					    <div class="block-specifications-categoty__box-price">
                    <div     class="block-specifications-categoty__box-price-price">
                        Стоимость
                    </div>
                    <div       class="block-specifications-categoty__box-price-price_value">
                        <?php if ($data->getResultPrice() > 0): ?>
                            <?= number_format($data->getBasePrice(), 0,"."," "); ?>
                            <?= Yii::t("StoreModule.store", "RUB"); ?>
                        <?php else: ?>
                            По заявке
                        <?php endif; ?>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="block-order visible-xs">
                <button class="btn btn-primary" style="width:100%" type="button"> Отправить заявку</button>
                <div class="form-order-mobile" style="display:none;">
                    <form class="mobileneedMailForm" method="post">
                        <fieldset class="form-group">
                            <legend>Заявка на <?= CHtml::encode($data->getName()); ?>  </legend>
                            <input type="hidden" name="project_name" value="Барнаульские тали">
                            <input type="hidden" name="admin_email" value="barnaul@tali.ru">
                            <input type="hidden" name="form_subject"
                                   value="Форма отправки(Мобильная версия): оставить заявку">
                            <input type="hidden" name="model-mobile"
                                   value="<?= $data->type->name . " " . CHtml::encode($data->getName()); ?>">
                            <label for="emailmobile"> Ваш Email или телефон </label>
                            <input name="email" class="form-control" id="emailmobile" type="text">
                            <label for="succmobile">Ваше сообщение </label>
                            <textarea name="message" id="succmobile"
                                      class="form-control">Здрувствуйте, интересует <?= $data->type->name . " " . CHtml::encode($data->getName()); ?>   </textarea>
                            <button onclick="yaCounter4512622.reachGoal('paym'); return true;" class="btn btn-success" style="width:100%; height:50px; margin-top:15px"
                                    type="submit"> Отправить
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    <?php else: ?>
    <?php endif; ?>
<?php endif; ?>