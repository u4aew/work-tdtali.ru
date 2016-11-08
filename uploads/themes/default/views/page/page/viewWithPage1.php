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
<div class="col-lg-12"> 
	<p>Сегодня лебедки активно применяются во время монтажных, строительных и погрузочных работ. Применяются как оборудование, и как часть грузоподъемных машин, подъемных кранов, подъемников,  канатных дорог, бурильных установок и прочих. Учитывая требования потребителей, мы уделяет особое внимание подбору оборудования для каждого клиента, и расширяем технические возможности производимых лебедок.</p>
	<p>Большая канатоемкость барабана может позволить устанавливать лебедки в удобном для работы месте.</p>
	<p><strong>Возможно изготовление лебедок по чертежам заказчика или с измененными техническими параметрами:</strong></p>
<ul>
<li>тяговое усилие;</li>
<li>скорость навивки каната на барабан;</li>
<li>нарезной барабан;</li>
<li>канатоукладчик;</li>
<li>преобразователь частоты;</li>
<li>устройство плавного пуска;</li>
<li>канатоемкость барабана;</li>
<li>установка дополнительного второго или ленточного тормоза;</li>
<li>установка второго барабана для навивки каната;</li>
<li>несущая рама специального исполнения;</li>
<li>комплектация электродвигателем, тормозом во взрывозащищенном исполнении;</li>
<li>комплектация оцинкованным канатом;</li>
<li>счетчик вытравленного каната;</li>
	<li>муфта свободного хода барабана.</li>
	</ul>
	
<p>О возможности изготовления лебедок по Вашим параметрам узнавайте в отделе продаж.
	Для расчета точной стоимости продукции необходимо предоставить техническое задание или заполнить опросный лист.</p>
	<p><a href="">Скачать опросный лист на лебедку в формате doc </a></p>
</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<p align="center"><strong>Лебедка с ленточным тормозом</strong> </p>
		<p align="center"> <img style="width:100%; height:auto; max-width:400px;" src="/uploads/image/ff2602daf73c12f8b60ea49bd98d6bb8.jpg"></p> </div>
	<div class="col-lg-6"> <p align="center"><strong>Канатоукладчик установленный на лебедке </strong> </p>
		<p align="center"> <img style="width:100%; height:auto; max-width:400px;" src="/uploads/image/37acdcd1f94e5599b4f9b15f1345ee42.jpg"></p>  </div>
	<div class="col-lg-6"> <p align="center"><strong>Пускавая электроаппаратура во взрывозащищенном исполнении </strong> </p>
		<p align="center"> <img style="width:100%; height:auto; max-width:400px;" src="/uploads/image/514b0dcb55a98254f57adc1b0c749061.jpg"></p> </div>
	<div class="col-lg-6"><p align="center"><strong>Нарезной барабан </strong> </p>
		<p align="center"> <img style="width:100%; height:auto; max-width:400px;" src="/uploads/image/bfbf5c51f67b0838eba695bc0e0798c6.jpg"></p> </div>
</div>
