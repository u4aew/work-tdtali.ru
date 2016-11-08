<?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($data->slug)]); ?>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6"  >
        <div style="min-height:120px">
            <?php 
                        $attribute = Attribute::model()->findByPk(66);
                        $value = $data->attribute($attribute);
                                                  ?>
                    <a href="<?= $productUrl; ?>">
                <img style="width:120px" src="<?= $data->getImageUrl(200, 180); ?>"/>
            </a>
        </div>
        <div style="margin-bottom:20px;">
           <span class="link-product-name">
            <a href="<?= $productUrl; ?>">
                <?= CHtml::encode($data->getName()); ?>
                <br>
                <?=$attribute->title; ?>
                   
                    <?=$value." ".$attribute->unit; ?>
            </a>
               
            </span>
        </div>
</div>