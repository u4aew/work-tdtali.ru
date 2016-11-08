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
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-product" role="document">
        <div class="modal-content modal-form-custom" style="height: 200px !important;">
            <div class="modal-header">
                <span style="font-size:20px"></span>
                <button style="opacity:1" type="button" class="close close-button " data-dismiss="modal"
                        aria-label="Close"><img src="/themes/default/web/images/close.png"></button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <span style="font-size: 34px;">Спасибо за заявку</span>
            </div>
        </div>
    </div>
</div>
<h1 class="pagetitle"><?= $model->title; ?></h1>
<div class="row" style="padding-bottom:20px">
    <div class="col-lg-12">
        <div class="order-block hidden-xs">
            <form class="needMailForm" method="post">
                <div class="form-group" style="text-align:center">
                    <span style="font-size:20px"><strong>Форма обратной связи</strong></span>
                </div>
                <div class="form-group order-group ">
                    <input type="hidden" name="project_name" value="Барнаульские тали">
                    <input type="hidden" name="admin_email" value="barnaul@tali.ru">
                    <input type="hidden" name="form_subject" value="Заявка на продукцию Сайт">
                    <label for="email" id="message-alert-email">Ваш E-mail </label>
                    <input class="form-control hidden-xs" type="email" name="email" id="email" placeholder="" required>
                    <label for="message">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message"
                              placeholder="Текст сообщения"> </textarea>
                    <button onclick="yaCounter4512622.reachGoal('ticket'); return true;" class="btn btn-success order-button" type="submit">Отправить</button>
                </div>
            </form>
        </div>
        <div class="order-block visible-xs">
            <form class="mobileneedMailForm" method="post">
                <div class="form-group" style="text-align:center">
                    <span style="font-size:20px"><strong>Форма обратной связи</strong></span>
                </div>
                <div class="form-group order-group">
                    <input type="hidden" name="project_name" value="Барнаульские тали">
                    <input type="hidden" name="admin_email" value="barnaul@tali.ru">
                    <input type="hidden" name="form_subject" value="Форма отправки(Обратная связь)">
                    <label for="email2">Ваш E-mail или Телефон </label>
                    <input class="form-control visible-xs" type="text" name="email2" id="email2" placeholder="">
                    <label for="message_mobile">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message_mobile"
                              placeholder="Текст сообщения"> </textarea>
                    <button onclick="yaCounter4512622.reachGoal('ticketm'); return true;" class="btn btn-success order-button" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
