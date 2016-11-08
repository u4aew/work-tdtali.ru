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
<div class="row" style="padding-bottom:20px"> 
	<div class="col-lg-12">
	<div class="order-block">
		<form method="post">
		<div class="form-group" style="text-align:center">
			<span style="font-size:20px"><strong>Форма обратной свзязи</strong></span>
		</div>
		<div class="form-group order-group">
		    <input type="hidden" name="project_name" value="Барнаульские тали"> 
			<input type="hidden" name="admin_email" value="dialoggg1994@gmail.com">
			<input type="hidden" name="form_subject" value="Форма отправки(Обратная связь)">
			<label class="hidden-xs" for="email">Ваш E-mail </label>
			<input class="form-control hidden-xs" type="email" name="email" id="email" placeholder="" required>
			<label class="visible-xs" for="email2">Ваш E-mail или Телефон </label>
			<input class="form-control visible-xs" type="text" name="email2" id="email2" placeholder="">
			<label for="email">Ваше сообщение </label>
			<textarea class="form-control message-order" name="message" id="message" placeholder="Текст сообщения"> </textarea>
			<button class="btn btn-success order-button" type="submit" >Отправить </button>
			</div>
		</form>
	</div>	
	</div>
</div>
