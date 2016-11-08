<?php /* @var $dataProvider CActiveDataProvider */ ?>
    Если характеристики данной модели Вам не подходят, обратите внимание на схожую продукцию:
<hr style="margin: 10px 0 0 0">
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
