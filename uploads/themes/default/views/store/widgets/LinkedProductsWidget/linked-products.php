<?php /* @var $dataProvider CActiveDataProvider */ ?>
    Если характеристики данной модели Вам не подходят, обратите внимание на схожую продукцию:
<?php $this->widget(
    'zii.widgets.CListView',
    [
        'dataProvider' => $dataProvider,
        'template' => '{items}',
        'itemView' => '_item',
        'cssFile' => false,
        'pager' => false,
    ]
); ?>

