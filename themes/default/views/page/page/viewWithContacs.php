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
<div style="padding-left: 20px">
    <div class="row" style="margin-top: 20px">
        <div class="col-lg-10">
            <p style="margin: 0px"><b> Телефон </b></p>
			<span> <span style="font-size:34px">  <strong> 8-800-700-88-47</span> <p style="margin: 0px"> Звонок по России бесплатный. </p> </strong>
			</span>
            <br>
            <p>Специалисты ТД "Барнаульские ТАЛИ" рады приветствовать Вас на нашем сайте и готовы ответить на любые Ваши
                вопросы по телефону или посредством <a
                    style="text-decoration: underline; color: black;font-weight: bold "
                    href="skype:telfer.barnaul?call"> бесплатного звонка по Skype </a>
                (без видео), <a href="https://www.skype.com/ru/download-skype/skype-for-computer/"
                                style="text-decoration: underline;color: black;">загрузите Skype </a> и
                звоните нам бесплатно.</p>
            <p> <span style="font-size: 18px"> Режим работы: пн-пт 9:00-18:00 (+4 MSK) </span></p>
            <table>
                <tbody>
                <tr>
                    <td style="padding: 2px 5px"><span style="font-size:18px"><b>E-mail</b></span></td>
                    <td style="padding: 2px 5px"><a style="color: black;text-decoration: underline;font-size: 17px"
                                                    href="mailto:barnaul@tali.ru"><strong>barnaul@tali.ru</strong></a>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 2px 5px"><span style="font-size:18px"><b>Skype</b></span></td>
                    <td style="padding: 2px 5px"><a
                            style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold"
                            href="skype:tdtali?call">
                            tdtali </a></td>
                </tr>
                <tr>
                    <td style="padding: 2px 5px"><span style="font-size:18px"><b>ICQ</b></span></td>
                    <td style="padding: 2px 5px"> <span
                            style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold">
                                        480568098 </span></td>
                </tr>
                </tbody>


            </table>

        </div>
        <div class="col-lg-2 visible-lg">
            <img style="width:100%; height:auto; max-width:200px"
                 src="/uploads/image/c40afdf773462e5568f99a673d9f4e21.png">
            <p>Позвоните нам считав QR код</p>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 15px;padding-left: 5px">
        <div class="col-lg-12">
            <?php if (date("w") == 0 || date("w") == 6): ?>
                <div style="margin-bottom: 15px;font-weight: bold">
                    Сегодня у нас выходной, если вы хотите связаться с нами, то оставьте заявку в этой форме, и мы дадим вам ответ в первый рабочий день
                </div>
                <div>
                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-dialog-product" role="document">
                            <div class="modal-content modal-form-custom" style="height: 200px !important;">
                                <div class="modal-header">
                                    <span style="font-size:20px"></span>
                                    <button style="opacity:1" type="button" class="close close-button "
                                            data-dismiss="modal"
                                            aria-label="Close"><img src="/themes/default/web/images/close.png"></button>
                                </div>
                                <div class="modal-body" style="text-align: center;">
                                    <span style="font-size: 34px;">Спасибо за заявку</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <input class="form-control hidden-xs" type="email" name="email" id="email"
                                               placeholder="">
                                        <label for="message">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message"
                              placeholder="Текст сообщения"> </textarea>
                                        <button onclick="yaCounter4512622.reachGoal('ticket'); return true;"
                                                class="btn btn-success order-button" type="submit">Отправить
                                        </button>
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
                                        <input class="form-control visible-xs" type="text" name="email2" id="email2"
                                               placeholder="">
                                        <label for="message_mobile">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message_mobile"
                              placeholder="Текст сообщения"> </textarea>
                                        <button onclick="yaCounter4512622.reachGoal('ticketm'); return true;"
                                                class="btn btn-success order-button" type="submit">Отправить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                
                 
				 <div class="b-notwork-form">
				 
				   <div style="margin-bottom: 15px;font-weight: bold">
                    Сегодня у нас выходной, если вы хотите связаться с нами, то оставьте заявку в этой форме, и мы дадим вам ответ в первый рабочий день
                </div>
                <div>
                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-dialog-product" role="document">
                            <div class="modal-content modal-form-custom" style="height: 200px !important;">
                                <div class="modal-header">
                                    <span style="font-size:20px"></span>
                                    <button style="opacity:1" type="button" class="close close-button "
                                            data-dismiss="modal"
                                            aria-label="Close"><img src="/themes/default/web/images/close.png"></button>
                                </div>
                                <div class="modal-body" style="text-align: center;">
                                    <span style="font-size: 34px;">Спасибо за заявку</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <input class="form-control hidden-xs" type="email" name="email" id="email"
                                               placeholder="">
                                        <label for="message">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message"
                              placeholder="Текст сообщения"> </textarea>
                                        <button onclick="yaCounter4512622.reachGoal('ticket'); return true;"
                                                class="btn btn-success order-button" type="submit">Отправить
                                        </button>
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
                                        <input class="form-control visible-xs" type="text" name="email2" id="email2"
                                               placeholder="">
                                        <label for="message_mobile">Ваше сообщение </label>
                    <textarea class="form-control message-order" name="message" id="message_mobile"
                              placeholder="Текст сообщения"> </textarea>
                                        <button onclick="yaCounter4512622.reachGoal('ticketm'); return true;"
                                                class="btn btn-success order-button" type="submit">Отправить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
				 
				 
				 </div>
				 
				 
				 
				 
				 

            <?php endif; ?>

        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-2" style="font-size: 16px">
            <p><strong style="font-size: 18px;color: black"> Максим Олегович </strong></p>
            <p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(мтс) 8-913-227-4297</p>
            <p><img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
            <p><img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
            <p><img src="http://status.icq.com/27/online1.gif"> ICQ: 480-568-098 </p>
            <p><img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a
                    style="text-decoration: underline;color:black;font-weight: bold" href="skype:tdtali.ru?call">tdtali.ru</a>
            </p>
        </div>
        <div class="col-lg-9">
            <p style="margin: 0px"> Специалист по лебедкам: лебедки ручные, мтм, лебедки электрические:</p>
            <p style="margin: 0px"> (тяговые, монтажные, маневровые, вспомогательные, крановые).</p>
            <p style="margin: 0px"> Тали ручные производства Россия и Польша: червячные, шестеренные, рычажные. </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-2 " style="font-size: 16px">
            <p><strong style="font-size: 18px;color: black"> Cергей Юрьевич </strong></p>
            <p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(мтс) 8-983-175-1006</p>
            <p><img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
            <p><img src="http://status.icq.com/27/online1.gif"> ICQ: 355-619-255 </p>
            <p><img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a
                    style="text-decoration: underline;color:black;font-weight: bold"
                    href="skype:tali.ru?call">tali.ru</a></p>
        </div>
        <div class="col-lg-9">
            <p style="margin: 0px">Специалист по запасным частям к грузоподъемному оборудованию:</p> запчасти к талям,
            талям
            электрическим,
            кранам, кран-балкам, грейферы канатные и моторные.
            <p style="margin: 0px"> Редукторы общепромышленного назначения.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-2" style="font-size: 16px">
            <p><strong style="font-size: 18px;color: black"> Марина Валерьевна </strong></p>
            <p><img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 770-663 </p>
            <p><img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
            <p><img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 39-88-46 </p>
            <p><img src="http://status.icq.com/27/online1.gif"> ICQ: 452-081-423 </p>
            <p><img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a
                    style="text-decoration: underline;color:black;font-weight: bold" href="skype:sweety-2011?call">sweety-2011</a>
            </p>
        </div>
        <div class="col-lg-9">
            <p style="margin: 0px">Зап. части к талям электрическим Россия.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-2" style="font-size: 16px">
            <p><strong style="font-size: 18px;color: black"> Константин Николаевич </strong></p>
            <p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(билайн) 8-905-080-5066</p>
            <p><img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
        </div>
        <div class="col-lg-9">
            <p style="margin: 0px"> Специалист по техническим вопросам:</p>
            <p style="margin: 0px">Тали электрические, кран балки, зап. части к талям электрическим и</p>
            <p style="margin: 0px">кран балкам.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-2" style="font-size: 16px">
            <p><strong style="font-size: 18px;color: black"> Ирина Александровна </strong></p>
            <p><img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
            <p><img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
            <p><img src="http://status.icq.com/27/online1.gif"> ICQ: 633-897-499 </p>
            <p><img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a
                    style="text-decoration: underline;color:black;font-weight: bold"
                    href="skype:telfer.barnaul?call"><u>telfer.barnaul</u></a>
            </p>
        </div>
        <div class="col-lg-9">
            <p style="margin: 0px">Тали электрические Болгария, Россия</p>
            <p style="margin: 0px">Запасные части к талям электрическим Болгария</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <p style="font-size: 18px;font-weight: bold;color: black"> Наши сайты</p>
            <p><a class="link-color" href="http://tali.ru"> www.tali.ru </a></p>
            <p> тали, тали электрические, краны, запчасти </p>
            <p><a class="link-color" href="http://www.tali.barnaul.ru"> www.tali.barnaul.ru </a></p>
            <p> тали, тельфера, кран балки </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <p><strong>Юридический адрес:</strong> Алтайский край, г.Барнаул 656037, пр-т Калинина 57.ООО <strong>ПКФ
                    "Барнаульские тали"</strong></p>
            <p><strong>Почтовый адрес:</strong> 656037, г. Барнаул, А/Я 1317.ООО <strong>ПКФ "Барнаульские
                    тали"</strong>
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12" style="text-align:center;padding-bottom:30px;">
            <img style="width:100%; height:auto; max-width:600px"
                 src="/uploads/image/c3021960f4dc7f0af30632604e0601e5.jpg">
        </div>
    </div>
</div>
<div id="test-time" style="visibility: hidden">
    <?= date("Y-m-d H:i:s") ?>
</div>