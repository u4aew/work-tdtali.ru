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


<script xmlns="http://www.w3.org/1999/html">
    $(document).ready(
        function () {
            setTimeout($(".box-guaranty").fadeIn(), 600);
            setTimeout($(".box-skill").fadeIn(), 1200);
        }
    )
</script>
<div class="container-fluid" style="margin: 0;">
    <div class="row" style="padding-top: 10px">
        <div class="col-lg-11">
            <div class="box-wellcom">
                Уважаемые коллеги!
                <br>
                Рады приветствовать Вас на нашем сайте!
            </div>
            <div class="box-company-info">
                <div class="b-company-info__description">
                    <span class="span-company-info__title">
                        О Компании
                    </span>
                    <ul class="box-company-info__skill-list">
                        <li class="box-company-info__skill-list-item">
                            Торговый дом «Барнаульские тали» работает на рынке грузоподъемного оборудования 17 лет.
                        </li>
                        <li class="box-company-info__skill-list-item">
                            С нами, на постоянной основе, сотрудничают более 800 заказчиков
                        </li>
                        <li class="box-company-info__skill-list-item">
                            Рынок нашего сбыта охватывает всю территорию России, а также стран бывшего СССР, это
                            Казахстан,
                            Киргизия, Таджикистан, Узбекистан, Белоруссия, Украина.
                        </li>
                    </ul>
                    <div class="wrapper-product  animation">
                        <div class="wrapper-product-item">
                            <div class="wrapper-product__product-icon">
                                <div class="wrapper-product__product-icon-image"
                                     style="background-image: url('/themes/default/web/images/wotk-time.png')">
                                </div>
                            </div>
                            <div class="wrapper-product__product-title">

                            </div>
                        </div>
                        <div class="wrapper-product-item">
                            <div class="wrapper-product__product-icon">
                                <div class="wrapper-product__product-icon-image"
                                     style="background-image: url('/themes/default/web/images/clients.png')"></div>
                            </div>
                            <div class="wrapper-product__product-title">

                            </div>
                        </div>
                        <div class="wrapper-product-item">
                            <div class="wrapper-product__product-icon">
                                <div class="wrapper-product__product-icon-image "
                                     style="background-image: url('/themes/default/web/images/cert.png')"></div>
                            </div>
                            <div class="wrapper-product__product-title">

                            </div>
                        </div>
                        <div class="wrapper-product-item">
                            <div class="wrapper-product__product-icon">
                                <div class="wrapper-product__product-icon-image"
                                     style="background-image: url('/themes/default/web/images/world.png')"></div>
                            </div>
                            <div class="wrapper-product__product-title">

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="row" style="padding-top: 10px">
    <div class="col-lg-11">
        <div class="box-product-info">
            <div class="b-product-info__description">
                    <span class="span-product-info__title">
                        Продукция
                    </span>

                <ul class="box-product-info__skill-list">
                    <li class="box-product-info__skill-list-item">
                        Перечень продукции ТД «Барнаульские тали» это более 1000 видов наименований, с
                        которыми ВЫ можете ознакомиться в
                        <a class="box-product-info__skill-list-item__link" href="/store"><b style="font-family: Arial,Helvetica,sans-serif;"> КАТАЛОГЕ</b> </a>
                    </li>
                    <li class="box-product-info__skill-list-item">
                        Все типы электролебедок отвечают требованиям действующих ГОСТов и имеют соответствующее
                        разрешение Гостехнадзора
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding-top: 10px">
    <div class="col-lg-11">
        <div class="box-delivery-info">
            <div class="b-delivery-info__description">
                    <span class="span-delivery-info__title">
                        Доставка продукции
                    </span>
                <ul class="box-delivery-info__skill-list">
                    <li class="box-product-info__skill-list-item">
                        <img src="/themes/default/web/images/Truck.png" alt="" style="height: 30px"> Автотранспортными компаниями;
                    </li>
                    <li class="box-delivery-info__skill-list-item">
                        <img src="/themes/default/web/images/hytg.png" style="height: 20px" alt=""> Почтово-багажным отделением.
                    </li>
                    <li class="box-delivery-info__skill-list-item">
                        <img src="/themes/default/web/images/parcel_l.png" style="height: 30px" alt="">  Почтовыми посылками;
                    </li>
                    <li class="box-delivery-info__skill-list-item">
                        <img src="/themes/default/web/images/air_plane_airport.png" style="height: 30px"> Авиа-доставка;
                    </li>

                </ul>

            </div>
        </div>
    </div>
</div>


</div>