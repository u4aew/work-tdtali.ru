<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="yandex-verification" content="62b3e0e4e6c2dc3d" />
    <link rel="shortcut icon" type="image/x-icon" href="/themes/default/web/images/favicon.ico"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php Yii::app()->getController()->widget(
        'vendor.chemezov.yii-seo.widgets.SeoHead',
        [
            'httpEquivs' => [
                'Content-Type' => 'text/html; charset=utf-8',
                'X-UA-Compatible' => 'IE=edge,chrome=1',
                'Content-Language' => 'ru-RU'
            ],
            'defaultTitle' => $this->yupe->siteName,
            'defaultDescription' => $this->yupe->siteDescription,
            'defaultKeywords' => $this->yupe->siteKeyWords,
        ]
    ); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
 

-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/fancybox/jquery.fancybox-1.3.4.css');
    ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name='wmail-verification' content='076be797ae26b00bd6e449cc714a24ea'/>
    <meta name="google-site-verification" content="7BcpBVDLUBmKE5jXhTyZy7M-SxNySMuHr_nwMgz6ULI"/>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter4512622 = new Ya.Metrika({
                    id: 4512622,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/4512622" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-15302342-4', 'auto');
    ga('send', 'pageview');

</script>
<!-- Шапка сайта  -->
<?php if (Yii::app()->hasModule('menu')): ?>
    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu']); ?>
<?php endif; ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar  -->
            <div id="sidebar" class="col-lg-2 col-md-3 col-sm-3 hidden-xs"
                 style="background-color:#146c94;float:left;padding:0px;min-height:850px ">


                <div class="navigation">
                    <div class="navigation__fixed">
                        <div class="number-sidebar">
									<span style="font-size:20px">
									<p><strong> 8 (3852) 77-06-63 </strong> </p>
									<p><strong> 8 (3852) 77-06-63 </strong></p>
									</span>
									<span style="font-size:16px">
									<p>8 (3852) 39-88-46  </p>
									<p>8 (3852) 39-88-47 </p>
                                    </span>
                            <div class="FixedEmail">
                                <table id="EmailNotwork">
                                    <tbody>
                                    <tr>
                                        <td style="padding: 5px 3px"><img
                                                src="/uploads/image/e680f81035ada0c74679f403375b70b5.png"
                                                style="vertical-align: text-top"></td>
                                        <td style="padding: 5px 3px"><a
                                                style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold"
                                                href="mailto:barnaul@tali.ru">barnaul@tali.ru</a></td>
                                    </tr>

                                    <tr>
                                        <td style="padding: 5px 3px"><img
                                                src="/uploads/image/30ec0b3984e04a59da7b4b2f9c1476bc.png"></td>
                                        <td style="padding: 5px 3px"><a
                                                style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold"
                                                href="skype:tdtali?call">
                                                tdtali </a></td>
                                    </tr>

                                    <tr>
                                        <td style="padding: 5px 3px"><img
                                                src="/uploads/image/2988d218dc016b031092696279d9a4a6.png"></td>
                                        <td style="padding: 5px 3px"><span
                                                style="font-weight: bold;font-size: 18px;color: black"> 480568098  </span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <p id="AdresSidebar">Для писем: 656037, г. Барнаул, а/я 1317 </p>
                            </div>
                        </div>
                        <?php if (date("w") == 0 || date("w") == 6): ?>
                            <div class="b-notwork-form" style="display:block;">
                                <div class="b-notwork-form__message">
                                    У нас сегодня выходной, заполните форму и мы ответим в первый рабочий день.
                                </div>
                                <div>
                                    <form id="work-form">
                                        <label class="notwork-form__label" for="useremail">Ваш E-mail </label>
                                        <input class="notwork-form__input" style="display:block;width:100%"
                                               id="useremail" type="text" name="useremail" required>
                                        <label class="notwork-form__label" for="usertext">Сообщение </label>
                                        <textarea class="notwork-form__input"
                                                  style="display:block;width:100%;height:80px;resize:none;"
                                                  id="usertext" type="text" name="usertext"></textarea>
                                        <button class="notwork-form__btn" type="submit"
                                                onclick="yaCounter4512622.reachGoal('notwork'); return true;"> Отправить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="b-notwork-form">
                                <div class="b-notwork-form__message">
                                    <?php if (date("w") == 5): ?>
                                        Рабочее время у нас закончилось, заполните форму
                                        и мы ответим в первый рабочий день
                                    <?php else: ?>
                                        Рабочее время у нас закончилось, заполните форму,
                                        наш рабочий день начнется через <span id="time"> </span>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <form id="work-form">
                                        <label class="notwork-form__label" for="useremail">Ваш E-mail </label>
                                        <input class="notwork-form__input" style="display:block;width:100%"
                                               id="useremail" type="text" name="useremail" required>
                                        <label class="notwork-form__label" for="usertext">Сообщение </label>
                                        <textarea class="notwork-form__input"
                                                  style="display:block;width:100%;height:80px;resize:none;"
                                                  id="usertext" type="text" name="usertext"></textarea>
                                        <button class="notwork-form__btn" type="submit"
                                                onclick="yaCounter4512622.reachGoal('notwork'); return true;"> Отправить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="number-sidebar js-hide-number-siderbar" >
                            <table>
                                <tbody>
                                <tr>
                                    <td style="padding: 5px 3px"><img
                                            src="/uploads/image/e680f81035ada0c74679f403375b70b5.png"
                                            style="vertical-align: text-top"></td>
                                    <td style="padding: 5px 3px"><a
                                            style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold"
                                            href="mailto:barnaul@tali.ru">barnaul@tali.ru</a></td>
                                </tr>

                                <tr>
                                    <td style="padding: 5px 3px"><img
                                            src="/uploads/image/30ec0b3984e04a59da7b4b2f9c1476bc.png"></td>
                                    <td style="padding: 5px 3px"><a
                                            style="text-decoration: underline;color: black; font-size: 18px;font-weight: bold"
                                            href="skype:tdtali?call">
                                            tdtali </a></td>
                                </tr>

                                <tr>
                                    <td style="padding: 5px 3px"><img
                                            src="/uploads/image/2988d218dc016b031092696279d9a4a6.png"></td>
                                    <td style="padding: 5px 3px"><span
                                            style="font-weight: bold;font-size: 18px;color: black"> 480568098  </span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="field" style="padding:10px;text-align:center">
                            <?php $this->widget('application.modules.store.widgets.SearchProductWidget'); ?>
                            <p style="margin: 5px 0 0 0 ;"><em><i style="font-style:normal">Например, ТЛ-14</i> </em>
                            </p>
                        </div>
                        <div class="news-sidebar" style="margin-top:20px; color:white;">
                            <p style="text-align:center"><a style="font-size:18px;text-decoration: underline;"
                                                            href="/news"><b>Новости
                                        компании</b></a></p>
                        </div>
                        <div class="link-sidebar">
                            <div class="hidden-link">
                                <a href="/news/vnimanie-povyshenie-cen-na-produkciyu-importnogo-proizvodstva"
                                   style="text-decoration: none;margin: 5px;font-style: italic"><p style="margin: 0px">
                                        Цены
                                        на Российские лебедки
                                    </p>
                                    <p style="margin: 0px"> не зависят от курса валют <img src="/uploads/image/euro.png"
                                                                                           width="20px"></p>  </p>
                                    <a href="/pages/tehnicheskimi-harakteristikami">Изготовление лебёдок по параметрам
                                        заказчика</a>
                                    <a href="/pages/geografiya-postavok">География поставок</a>
                                    <a href="/pages/dostavka-produkcii">Доставка</a>
                            </div>

                            <div class="menu-sidebar">
                                <p style="text-align: center;padding-top:10px;font-size: 20px;font-weight: bold;"> Меню
                                    сайта </p>
                                <ul class="menu-list"
                                ">
                                <li><a href="/pages/o-kompanii-td-barnaulskie-tali"> О компании </a></li>
                                <li><a href="/store"> Продукция </a></li>
                                <li><a href="/site/lebedkiprice"> Цены </a></li>
                                <li><a href="/pages/kontakty-kompanii"> Контакты </a></li>
                                <li><a href="/pages/vopros-po-produkcii"> Заявка </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>


                </div>

            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 ">
                <!--Содержимое-->
                <?= $content; ?>
            </div>
</main>
<div class="clearfix"></div>
<footer>
    <!-- Подвал -->
    <div style="background-color:#e4c5a6;height:50px" class="col-sm-12">
        <div style="float:left; padding:15px"> 1999-2016 © ТД "Барнаульские тали"</div>
        <div class="hidden-xs " style="float:right; padding:3px"><b> 8-800-700-88-47 </b>
            <br> Звонок по России бесплатный
        </div>
    </div>
    </div>
    </div>
</footer>
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".breadcrumb").addClass("js-breadcrumb-fixed");
        } else {
            $(".breadcrumb").removeClass("js-breadcrumb-fixed");
        }
    })
</script>
<!-- START ME-TALK -->
<script type='text/javascript'>
    (function (d, w, m) {
        var s = d.createElement('script');
        s.type = 'text/javascript';
        s.id = 'supportScript';
        s.charset = 'utf-8';
        s.async = true;
        s.src = '//me-talk.ru/support/support.js?h=6bb1bb2685766e0c91f218f6f25833a7';
        var sc = d.getElementsByTagName('script')[0];
        w[m] = w[m] || function () {
                (w[m].q = w[m].q || []).push(arguments);
            };
        if (sc) sc.parentNode.insertBefore(s, sc); else d.documentElement.firstChild.appendChild(s);
    })(document, window, 'MeTalk');
</script>
<!-- END ME-TALK -->


<script type="text/javascript" src="/js/jquery.fancybox-1.3.4_patch.js"></script>
<?php
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script-header.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slide-info.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script-image-fancybox.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/moment.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/moment-timezone.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/mail-script.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/work-time.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/fixed-price.js');
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/siderbar-fixed.js');
?>
</body>

</html>


