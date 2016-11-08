<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/themes/default/web/images/favicon.ico" />
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
		<script type="text/javascript" src="http://tdtali.pa.infobox.ru/img123/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<link rel="stylesheet" type="text/css" href="http://tdtali.pa.infobox.ru/img123/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
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
</head>

<body>
	<!-- Шапка сайта  -->
	<?php if (Yii::app()->hasModule('menu')): ?>
		<?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu']); ?>
			<?php endif; ?>
				<main>		
					<div class="container-fluid">
						<div class="row">
							<!-- sidebar  -->
							<div id="sidebar" class="col-lg-2 col-md-3 col-sm-3 hidden-xs" style="background-color:#146c94;float:left;padding:0px;min-height:1200px ">
								<div class="number-sidebar">
									<span style="font-size:20px">
									<p><strong> 8 (3852) 77-06-63 </strong> </p>
									<p><strong> 8 (3852) 77-06-63 </strong></p>
									</span>
									<span style="font-size:16px">
									<p>8 (3852) 39-88-46  </p>
									<p>8 (3852) 39-88-47 </p>
									</span>
									<p>Для писем: 656037, г. Барнаул, а/я 1317 </p>
									
								</div>

								<div class="number-sidebar">
									<p><img src="/uploads/image/e680f81035ada0c74679f403375b70b5.png"> <a  class="activelink" style="font-size:18px !important;font-weight:bold" href="mailto:barnaul@tali.ru">barnaul@tali.ru</a> </p>
									<p><img src="/uploads/image/30ec0b3984e04a59da7b4b2f9c1476bc.png"> <a class="activelink" href="skype:tdtali?call"> tdtali  </a> </p>
									<p><img src="/uploads/image/2988d218dc016b031092696279d9a4a6.png"> 480568098 </p>
								</div>
								<div class="news-sidebar" style="margin-top:20px; color:white;">
									<span>	<a href="/news">новости компании</a> </span>
								</div>
								<div class="link-sidebar">
								    <a href="/news/vnimanie-povyshenie-cen-na-produkciyu-importnogo-proizvodstva"><img style="width:100%; max-width:200px; height:auto" src="/uploads/image/397550f5dd4b676b8ebd31807a4f3317.png" alt="Новости"> </a>  
									<a href="/pages/tehnicheskimi-harakteristikami">Изготовление лебёдок по параметрам заказчика</a>
									<a href="/pages/geografiya-postavok">География поставок</a>
									<a href="#">Доставка</a>
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
						<div style="float:left; padding:15px"> 1999-2015 © ТД "Барнаульские тали" </div>
						<div class="hidden-xs " style="float:right; padding:3px"> <b> 8-800-700-88-47 </b>
							<br> Звонок по России бесплатный </div>
					</div>
					</div>
					</div>
				</footer>
	<script type="text/javascript" src="/js/jquery.fancybox-1.3.4_patch.js"></script>
		<?php 
	Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script-header.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/script-image-fancybox.js');
	?>
</body>

</html>