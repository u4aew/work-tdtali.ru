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
		<div class="col-lg-10">
			<span><strong> <span style="font-size:18px">8-800-700-88-47</span> Звонок по России бесплатный. </strong>
			</span>
			<br>
			<p>Специалисты ТД "Барнаульские ТАЛИ" рады приветствовать Вас на нашем сайте и готовы ответить на любые Ваши вопросы по телефону или посредством бесплатного звонка по Skype (без видео),загрузите Skype и звоните нам бесплатно.</p>
			<p>Режим работы: пн-пт 9:00-18:00</p>
			<p><span style="font-size:18px"><b>E-mail</b></span> </p>
			<p> <a href="mailto:telfer@list.ru"><strong>telfer@list.ru</strong></a> </p>
			<p> <a href="mailto:barnaul@tali.ru"><strong>barnaul@tali.ru</strong></a> </p>
			
		</div>
		<div class="col-lg-2 visible-lg"> 
		<img style="width:100%; height:auto; max-width:200px" src="/uploads/image/c40afdf773462e5568f99a673d9f4e21.png">
			<p>Позвоните нам считав QR код</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-2">
			<p><strong> Максим Олегович </strong></p>
			<p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(мтс) 8-913-227-4297</p>
			<p> <img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
			<p> <img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
			<p> <img src="http://status.icq.com/27/online1.gif"> ICQ: 480-568-098 </p>
			<p> <img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a href="skype:tdtali.ru?call">tdtali.ru</a> </p>
		</div>
		<div class="col-lg-9">
			<p> Специалист по лебедкам: лебедки ручные, мтм, лебедки электрические:</p>
			<p> (тяговые, монтажные, маневровые, вспомогательные, крановые).</p>
			<p> Тали ручные производства Россия и Польша: червячные, шестеренные, рычажные. </p>
		</div>
	</div>
	<hr>
	<div class="row"> 
		<div class="col-lg-2"> 
			<p><strong> Cергей Юрьевич </strong></p>
			<p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(мтс) 8-983-175-1006</p>
			<p> <img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
			<p> <img src="http://status.icq.com/27/online1.gif"> ICQ: 355-619-255 </p>
			<p> <img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a href="skype:tali.ru?call">tali.ru</a> </p>
		</div>
		<div class="col-lg-9"> 
			<p>Специалист по запасным частям к грузоподъемному оборудованию:</p> запчасти к талям, талям электрическим, кранам, кран-балкам, грейферы канатные и моторные. 
			<p> Редукторы общепромышленного назначения.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-2">
			<p><strong> Марина Валерьевна </strong></p>
		    <p> <img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 770-663 </p>
		    <p> <img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p> 
			<p> <img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 39-88-46 </p>
			<p> <img src="http://status.icq.com/27/online1.gif"> ICQ: 452-081-423 </p>
			<p> <img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a href="skype:sweety-2011?call">sweety-2011</a> </p>
		</div>
		<div class="col-lg-9">
			<p>Зап. части к талям электрическим Россия.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-2">
			<p><strong> Константин Николаевич </strong></p>
			<p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(билайн) 8-905-080-5066</p>
			<p> <img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
		</div>
		<div class="col-lg-9">
			<p>	Специалист по техническим вопросам:</p>
			<p>Тали электрические, кран балки, зап. части к талям электрическим и</p>
			<p>кран балкам.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-2">
			<p><strong> Ирина Александровна </strong></p>
			<p><img src="/uploads/image/4b272225040325eb47a141c4d56c9212.jpg"> сот.(мтс) 8-913-227-4297</p>
			<p> <img src="/uploads/image/860395d8896f9ae27dadd7f053f78cbf.jpg"> тел. (3852) 770-663 </p>
			<p> <img src="/uploads/image/445ffd7e9fc86283b5dcfcc3e2b10f61.jpg"> факс (3852) 39-88-47 </p>
			<p> <img src="http://status.icq.com/27/online1.gif"> ICQ: 633-897-499 </p>
			<p> <img src="/uploads/image/3838a255e0ebd89e2f19accc5124fb88.png"> Skype:<a href="skype:telfer.barnaul?call"><u>telfer.barnaul</u></a> </p>
		</div>
		<div class="col-lg-9">
			<p>Тали электрические Болгария, Россия</p>
			<p>Запасные части к талям электрическим Болгария</p>
		</div>
	</div>
	<hr>
<div class="row">
	<div class="col-lg-12">
		<p><strong>Наши Сайты:</strong></p>
		<p>тали, тали электрические, краны, запчасти</p>
		<p><a href="#">www.tali.ru</a></p>
		<p>тали, тельфера, кран балки</p> 
		<p><a href="#"> www.tali.barnaul.ru</a></p>
	</div>
</div>
	<hr>
<div class="row">
	<div class="col-lg-12">
		<p><strong>Юридический адрес:</strong> Алтайский край, г.Барнаул 656037, пр-т Калинина 57.ООО <strong>ПКФ "Барнаульские тали"</strong></p>
		<p><strong>Почтовый адрес:</strong> 656037, г. Барнаул, А/Я 1317.ООО <strong>ПКФ "Барнаульские тали"</strong></p>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-12" style="text-align:center;padding-bottom:30px;"> 
	<img style="width:100%; height:auto; max-width:600px" src="/uploads/image/c3021960f4dc7f0af30632604e0601e5.jpg">
	</div>
</div>