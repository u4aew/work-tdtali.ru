
<?php 
 /**
 * @var StoreCategory $category 
 * @var int[] $attributeIds
 */
$attributes = [];
foreach ($attributeIds as $id)
{
    $attributes[] = Attribute::model()->findByPk($id);
}
$products = Yii::app()->getComponent('productRepository')->getListForCategoryAsArray($category);
?>

<h2><?=$category->name; ?></h2>
<table>
    <thead>
        <th>
          Общий вид  
        </th> 
        <th>
            Модель
        </th>
        <?php foreach ($attributes as $attribute):?> 
        <th>
            <?=$attribute->title;?>
        </th>
        <?php endforeach; ?>
        <th>
            Цена
        </th>
    </thead>
    <tbody>
       <?php foreach ($products as $product):?>
       <tr>
           <td>
                  <img  class="category-images-img " src="<?= $product->getImageUrl(200, 185); ?>"/>
         </td>
           <td><?=$product->name;?></td>
            <?php foreach ($attributes as $attribute):?> 
            <td>
              <?= AttributeRender::renderValue($attribute, $product->attribute($attribute));?>
            </td>
            <?php endforeach; ?>
           <td>        
              <?php if ($product->getResultPrice() > 0):?>
               <?= round($product->getBasePrice(), 2); ?>
               <?= Yii::t("StoreModule.store", "RUB"); ?> 
               <?php else:?>
                Договорная
               <?php endif; ?>
            </td>
       </tr>
       <?php endforeach; ?>        
    </tbody>
</table>