<?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($data->slug)]); 
?>
    <!-- Карточка товара в категориях -->
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 card-product-block">
        <div class="col-md-4 col-sm-12 category-images-block">
            <!-- Изображение товара -->
            <div class="category-images"> 
                <a href="<?= $productUrl; ?>">
                <img  class="category-images-img " src="<?= $data->getImageUrl(200, 185); ?>"/>
            </a>
            </div>
             <div style="text-align:center; border:1px solid #366BA0; border-radius: 10px;margin:10px; color:#366BA0; font-weight:bold" > <span> Цена с НДС </span>  
                  <br>
                   <span>
                    <?= round($data->getBasePrice(), 2); ?>
					   <?= Yii::t("StoreModule.store", "RUB"); ?> </span>
                </div>
              
        </div>
        <!-- Технические характеристики -->
        <div class="col-offset-lg-1 col-lg-8 col-offset-md-1 col-md-8 col-sm-12 block-specifications-categoty">
            <?php foreach ($data->getAttributeGroups() as $groupName => $items): ?>
                <h2> <span class="active-name"> <a href="<?= $productUrl; ?>"> <?=$data->type->name." ".CHtml::encode($data->getName()); ?>  </a>  </span> </h2>
                                
                <!-- Вывод атрибутов в зависимости от ID -->
                <table class="table-specifications-categoty">
                    <tbody>
                        <?php $i = 0; ?>
								<?php foreach ($items as $attribute): ?>
									<?php if ($i++ == 5) break; ?>
                	<tr>
    									<td>
											<span><?= CHtml::encode($attribute->title); ?></span>
										</td>
										<td align=center>
											<?= AttributeRender::renderValue($attribute, $data->attribute($attribute));?>
										</td>
									</tr>
									<?php  endforeach; ?>
							
                    </tbody>
                </table>
                <!-- Вывод цены в блоке -->
                
                <?php endforeach; ?>
 
        </div>

        <div  class="block-order visible-xs">
            <button class="btn btn-primary" style="width:100%" type="button"> Отправить заявку </button>
       <div class="form-order-mobile" style="display:none;">
        <form method="post"> 
      <fieldset class="form-group">
      <legend>Быстрая заявка на <?=CHtml::encode($data->getName()); ?>  </legend>
							<input type="hidden" name="project_name" value="Барнаульские тали">
						    <input type="hidden" name="admin_email" value="dialoggg1994@gmail.com">
						    <input type="hidden" name="form_subject" value="Форма отправки(Мобильная версия ): оставить заявку">
							<input type="hidden" name="model-mobile" value="<?=$data->type->name." ".CHtml::encode($data->getName()); ?>">
							<label  for="emailmobile"> Ваш Email или телефон </label>
							<input name="email" class="form-control" id="emailmobile" type="text">
							<label  for="succmobile">Ваше сообщение </label>
								<textarea name="message" id="succmobile" class="form-control">Здрувствуйте, интересует  <?=$data->type->name." ".CHtml::encode($data->getName()); ?>   </textarea>
								<button class="btn btn-success" style="width:100%; height:50px; margin-top:15px" type="submit"> Отправить </button>
				</fieldset>
												</form>
        </div>
        
		</div>
     </div>
