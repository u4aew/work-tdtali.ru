<?php $form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    [
        'action' => ['/store/product/search'],
        'method' => 'GET',
    ]
) ?>



<?= CHtml::textField(
    AttributeFilter::MAIN_SEARCH_QUERY_NAME,
    CHtml::encode(Yii::app()->getRequest()->getQuery(AttributeFilter::MAIN_SEARCH_QUERY_NAME)),
    ['class' => 'find-field'
    ]
); ?>


<input type="submit" value="найти" class="find-button"> 
<?php $this->endWidget(); ?>
