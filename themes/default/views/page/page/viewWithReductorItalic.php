<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = [$model->title, Yii::app()->getModule('yupe')->siteName];
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<h1 class="pagetitle"><?= $model->title; ?></h1>
<div class="row">
    <div class="col-lg-12" style="padding: 0 50px">
        Transtecno (Италия) проектирует, производит и продает широкий ассортимент редукторов (червячных, цилиндрических,
        планетарных) с электродвигателями постоянного и переменного тока, изготавливает как типовые, так и нетиповые
        редукторы по специальным проектам.
    </div>
</div>
<div class="row" style="margin-top: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\1_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>Червячные редукторы серии CM</b></p>


        Комбинация червячных редукторов серии СММ
        Pn 0.06 - 1.85 кВт M2 18 - 2450 Nm i 75 - 3600
        Основные свойства линейки CMM:
        - Литые алюминиевые корпуса типоразмера 026, 030, 040, 050, 063, 075, 090 и 110. Чугунный корпус типоразмера
        130.
        - Двойной конический роликоподшипник типоразмера 090, 110 и 130
        - Заполнены синтетическим маслом на весь срок службы.
    </div>
</div>

<hr>
<div class="row" style="margin-top: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\3_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8 " style="background-color: #F3E0D1">
        <p><b>Механические вариаторы и комбинация редукторов CMV</b></p>
        Модульное исполнение - это особенность цилиндрических редукторов линейки CMG. Возможны различные варианты
        монтажа цилиндрического редуктора, используя фланцевый тип соединения или «на лапах».
        Особенности цилиндрического редуктора серии CMG:
        - Литой алюминиевый корпус и входной фланец типоразмеров 00, 01, 02, 03 и 04.
        - Чугунный корпус типоразмера 05. Чугунные «лапы» и выходной фланец.
        - Цилиндрические поверхностно-закаленные зубчатые колеса.
        - Заполнены синтетическим маслом на весь срок службы.
    </div>
</div>


<div class="row" style="margin-top: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\4_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>Цилиндрические редукторы серии CMG</b></p>
        Модульное исполнение коническо цилиндрического редуктора CMB делает его полностью взаимозаменяемыми с червячными
        редукторами CM.
        Возможны различные варианты монтажа, используя выходные фланцы, выходные валы и не входящие в комплект
        реактивные штанги.
        Общие свойства всех устройств линейки CMB:
        - Литой алюминиевый корпус типоразмера 633 и 903.
        - Чугунный корпус типоразмера 1103
        - Цилиндрические шлифованные зубчатые колеса.
        - Заполнен синтетическим маслом на весь срок службы.
    </div>
</div>

<div class="row" style="margin-top: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\5_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>Коническо-цилиндрические редукторы серии CMB</b></p>
        Модульное исполнение коническо цилиндрического редуктора CMB делает его полностью взаимозаменяемыми с червячными
        редукторами CM.
        Возможны различные варианты монтажа, используя выходные фланцы, выходные валы и не входящие в комплект
        реактивные штанги.
        Общие свойства всех устройств линейки CMB:
        - Литой алюминиевый корпус типоразмера 633 и 903.
        - Чугунный корпус типоразмера 1103
        - Цилиндрические шлифованные зубчатые колеса.
        - Заполнен синтетическим маслом на весь срок службы.
    </div>
</div>

<div class="row" style="margin-top: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\6_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>Одноступенчатые цилиндрические редукторы PU</b></p>
        Модульное исполнение коническо цилиндрического редуктора CMB делает его полностью взаимозаменяемыми с червячными
        редукторами CM.
        Возможны различные варианты монтажа, используя выходные фланцы, выходные валы и не входящие в комплект
        реактивные штанги.
        Общие свойства всех устройств линейки CMB:
        - Литой алюминиевый корпус типоразмера 633 и 903.
        - Чугунный корпус типоразмера 1103
        - Цилиндрические шлифованные зубчатые колеса.
        - Заполнен синтетическим маслом на весь срок службы.
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\6_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>Планетарные редукторы серии P</b></p>
        Особенности планетарного редуктора серии P:
        - Соосные входной и выходной валы.
        - Компактный дизайн.
        - Высокий момент при минимальных размерах.
        - Низкий момент инерции.
        - Любое монтажное положение.
        - Выходной момент до 300 Нм
        Широкий диапазон передаточных отношений
        Четыре набора шестерен с разными передаточными отношениями обеспечивают широкий диапазон передаточных отношений
        от 3,7:1 для одноступенчатых редукторов до 2076:1 для четырехступенчатых.
        Присоединительные фланцы
        Все серии доступны в базовой версии. Серии от Р52 до Р120 доступны дополнительно с фланцами по стандарту DIN
        42948 как со стороны мотора так и стороны выходного вала. Размеры см. в каталоге. Фланцы могут поставляться и
        для нестандартных моторов под заказ.
    </div>
</div>
<hr>
<div class="row" style="margin-top: 10px;margin-bottom: 10px">
    <div class="col-lg-2 col-sm-4"><img src="\uploads\image\2_italic-min.jpg" style="display: block;margin: 0 auto">
    </div>
    <div class="col-lg-9 col-sm-8" style="background-color: #F3E0D1">
        <p><b>
                Комбинация червячных редукторов серии СММ</b></p>
        Основные свойства линейки CMV:
        - Высокая точность регулирования: ± 0.5/1%
        - Диапазон регулирования скорости 1:5
        - Литые алюминиевые корпуса на CM040, 050, 063, 075, 090 and 110. Чугунный корпус на CM130
        - Корпуса вариаторов VAM018, 037 и 075 изготовлены из алюминия. У более крупных вариаторов - чугунный.
    </div>
</div>
