<?php $this->title = [Yii::t('default', 'Error') . ' ' . $error['code'], Yii::app()->getModule('yupe')->siteName]; ?>

<h2><?= Yii::t('default', 'Error') . ' ' . $error['code']; ?>!</h2>

<?php
switch ($error['code']) {
    case '404':
        $msg = Yii::t(
            'default',
            'Page you try to request, was not found. You can go out from this page and {link}.',
            [
                '{link}' => CHtml::link(
                    Yii::t('default', 'Перейти в каталог'),
                    $this->createUrl('./store'),
                    [
                        'title' => Yii::t('default', 'Каталог'),
                        'alt'   => Yii::t('default', 'Каталог'),
                    ]
                ),

            ]
        );
        break;
    default:
        $msg = $error['message'];
        break;
}
?>

<p class="alert alert-danger">
    <?= $msg; ?>
</p>
