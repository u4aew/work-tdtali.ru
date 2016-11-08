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
<div class="row" style="margin: 0px">
    <div class="col-lg-12">
        Для удобства наших клиентов наши логисты помогут выбрать оптимальный для клиента способ доставки груза. Доставка
        может организовываться автомобильным, железнодорожным, авиационным или попутным транспортом по дополнительному
        согласованию и с согласия клиента.
        Сроки доставки варьируются от типа заказываемой продукции и удаленности потребителя от производства. Возможен
        самовывоз.
        Чтобы рассчитать стоимость доставки более точно, обратитесь к нашим менеджерам, минимальная стоимоть доставки
        500 рублей. Доставка организуется рекомендуемыми автотранспортными компаниями:
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table>
                <thead>
                <tr>
                    <th colspan="4" style="text-align: center"> Доставка</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> Компания ПЭК
                    </td>
                    <td>
                        <a class="link-color" href="http://pecom.ru">www.pecom.ru <a>
                    </td>
                    <td>
                        <button><a href="http://pecom.ru/services-are/the-calculation-of-the-cost/"
                                   class="link__transport-company"> Рассчитать
                                доставку</a>
                        </button>
                    </td>
                    <td>
                        <button><a href="http://pecom.ru/services-are/order-status/" class="link__transport-company">
                                Отследить заказ</a></button>
                    </td>
                </tr>
                <tr>
                    <td> Компания РАТЭК
                    </td>
                    <td>
                        <a class="link-color" href="http://www.rateksib.ru">www.rateksib.ru <a>
                    </td>
                    <td>
                        <button><a href="http://www.rateksib.ru/tarify" class="link__transport-company">Рассчитать
                                доставку</a>
                        </button>
                    </td>
                    <td>
                        <button><a href="http://www.rateksib.ru/mestonahozhdenie_gruza" class="link__transport-company">
                                Отследить заказ</a></button>
                    </td>
                </tr>
                <tr>
                    <td> Деловые Линии
                    </td>
                    <td>
                        <a class="link-color" href="http://www.dellin.ru">www.dellin.ru <a>
                    </td>
                    <td>
                        <button data-toggle="modal"
                                data-target="#ModalDellinTracker"> Рассчитать доставку
                        </button>
                    </td>
                    <td>
                        <button data-toggle="modal"
                                data-target="#ModalDellinCalc"> Отследить заказ
                        </button>
                    </td>
                </tr>
                <tr>
                    <td> ЖелДорЭкспедиция
                    </td>
                    <td>
                        <a class="link-color" href="http://www.jde.ru">www.jde.ru<a>
                    </td>
                    <td>
                        <button><a href="http://www.jde.ru/online/calculator.html" class="link__transport-company">
                                Рассчитать доставку</a></button>
                    </td>
                    <td>
                        <button><a href="https://cabinet.jde.ru/index.html" class="link__transport-company"> Отследить
                                заказ</a></button>
                    </td>
                </tr>
                <tr>
                    <td> Энергия
                    </td>
                    <td>
                        <a class="link-color" href="http://nrg-tk.ru">nrg-tk.ru<a>
                    </td>
                    <td>
                        <button><a href="http://nrg-tk.ru/client/calculator/" class="link__transport-company">Рассчитать
                                доставку</a></button>
                    </td>
                    <td>
                        <button><a href="http://nrg-tk.ru/client/tracking/" class="link__transport-company">Отследить
                                заказ</a></button>
                    </td>
                </tr>
                <tr>
                    <td> Кит
                    </td>
                    <td>
                        <a class="link-color" href="http://tk-kit.ru">tk-kit.ru<a>
                    </td>
                    <td>
                        <button><a href="http://tk-kit.ru/calculate/" class="link__transport-company"> Рассчитать
                                доставку</a></button>
                    </td>
                    <td>
                        <button><a href="http://tk-kit.ru/track/" class="link__transport-company"> Отследить заказ</a>
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="margin: 0px !important;">
        <div class="col-lg-12">
            <div style="padding: 10px;">
                До транспортной компании доставляем бесплатно.
                С 1 сентября 2011 года отгрузка транспортной компанией Байкал-сервис производиться не будет
            </div>

        </div>

    </div>

    <div class="row" style="margin: 0px;padding: 10px">
        <p align="center" style="color: black"><strong> Отгрузка лебедок автомобильным транспортом </strong></p>
        <hr>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/7b8a93f59eda25033b04e12cd9424135.JPG"> <img
                    class="img-shipped" src="/uploads/image/7b8a93f59eda25033b04e12cd9424135.JPG"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/e41ca28ceb9b5417b1d84ddf941e7f05.JPG"> <img
                    class="img-shipped" src="/uploads/image/e41ca28ceb9b5417b1d84ddf941e7f05.JPG"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/26235bab9a56b99203323fa4a22d7901.jpg"> <img
                    class="img-shipped" src="/uploads/image/26235bab9a56b99203323fa4a22d7901.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/f32de5a884c291719d836ce44fd94e5c.jpg"> <img
                    class="img-shipped" src="/uploads/image/f32de5a884c291719d836ce44fd94e5c.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/1010005.jpg"> <img
                    class="img-shipped" src="/uploads/image/1010005.jpg"> </a>
        </div>
        <hr>
    </div>


    <div class="row" style="margin: 0px;padding: 10px">
        <p align="center" style="color: black"><strong> Отгрузка контейнером </strong></p>
        <hr>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/11.jpg"> <img class="img-shipped"
                                                                                     src="/uploads/image/11.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/12.jpg"> <img class="img-shipped"
                                                                                     src="/uploads/image/12.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/13.jpg"> <img class="img-shipped"
                                                                                     src="/uploads/image/13.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/4.jpg"> <img class="img-shipped"
                                                                                    src="/uploads/image/4.jpg"> </a>
        </div>
        <hr>
    </div>
    <div class="row" style="margin: 0px;padding: 10px">
        <p align="center" style="color: black"><strong> Отправка почтой </strong></p>
        <hr>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/5.jpg"> <img class="img-shipped"
                                                                                    src="/uploads/image/5.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/6.jpg"> <img class="img-shipped"
                                                                                    src="/uploads/image/6.jpg"> </a>
        </div>
        <hr>
    </div>
    <div class="row" style="margin: 0px;padding: 10px">
        <p align="center" style="color: black"><strong> Отгрузка редукторов </strong></p>
        <hr>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/7.jpg"> <img class="img-shipped"
                                                                                    src="/uploads/image/7.jpg"> </a>
        </div>
        <div class="col-lg-4"><a class="example6" href="/uploads/image/8.jpg"> <img class="img-shipped"
                                                                                    src="/uploads/image/8.jpg"> </a>
        </div>
        <hr>
    </div>
    <div class="modal fade" id="ModalDellinTracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-needSuccess="false">
        <div class="modal-dialog modal-dialog-product" role="document">
            <div class="modal-content modal-form-custom">
                <div class="modal-header">
                    <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                            aria-label="Close"><img src="/themes/default/web/images/close.png">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body__tracker">
                        <div>
                            <iframe
                                src="http://widgets.dellin.ru/calculator/?derival_to_door=off&arrival_to_door=on&disabled_calculation=off&insurance_checkbox=on&insurance=0&package=1"
                                width="332"
                                height="397"
                                scrolling="no"
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalDellinCalc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-needSuccess="false">
        <div class="modal-dialog modal-dialog-product" role="document">
            <div class="modal-content modal-form-custom" style="height: 380px">
                <div class="modal-header">
                    <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                            aria-label="Close"><img src="/themes/default/web/images/close.png">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body__calc">
                        <div>
                            <iframe src="http://widgets.dellin.ru/tracker?info=1&delivery=1&extraparams=1" width="334"
                                    height="212" scrolling="no" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalPecomCalc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-needSuccess="false">
        <div class="modal-dialog modal-dialog-product" role="document">
            <div class="modal-content modal-form-custom">
                <div class="modal-header">
                    <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                            aria-label="Close"><img src="/themes/default/web/images/close.png">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body__calc">
                        <div>
                            <!-- Код iframe-калькулятора ПЭК -->
                            <iframe allowtransparency="true" frameborder="0" width="250" height="345" scrolling="no"
                                    style="border:1px solid #ededed" src="http://pecom.ru/ru/newcalc/"></iframe>
                            <!-- Конец кода -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









