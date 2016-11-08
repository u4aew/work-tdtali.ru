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

	<h1 class="pagetitle"> <?= $model->title; ?></h1>

	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img style="max-height:100px" src="/uploads/image/7ac83863f4db0b0346744123e120b7a4.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./shema-raboty-manevrovoy-lebedki">Устройство и принцип работы маневровых лебедок, схема работы лебедки</a>
			<p>Лебедка состоит из следующих основных узлов: Главного и вспомогательного барабанов, редукторов, электродвигателя и установки пусковой аппаратуры, смонтированных на общей раме сварной конструкции.</p>
		</div>
	</div>

	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img style="max-height:100px" src="/uploads/image/5c73b3cd25c0fa5a25916d7a8af8eeb9.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./oborotnyy-blok-dlya-manevrovoy-lebedki">Оборотный блок (поворотный блок) маневровой лебедки</a>
			<p>Используется для маневровых лебедок в качестве вспомогательного элемента для подтягивания главного каната, вспомогательным к месту зацепа с вагоном.</p>
		</div>
	</div>
	<div class="row" style="margin-bottom:20px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img style="max-height:100px" src="/uploads/image/067d9e3d2cf69171dcb89414e6ac6b09.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./princip-raboty-i-primenenie-lebedki">Типы лебедок и их применение, принцип работы лебедки, применение лебедки </a>
			<p>
				Типы лебедок и их применение, принцип работы лебедки, применение лебедки Одним из видов современного грузоподъемного оборудования является лебедка. Подъем и перемещение осуществляется с помощью подвижного движущегося элемента: каната, троса либо цепи. Преимуществом использования лебедок является маленькое физическое усилие рабочих при использовании, надежность в работе, компактные габариты, большие тяговые усилия.</p>
		</div>
	</div>
	
	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img style="max-height:100px" src="/uploads/image/dc1a3073f63f17ff8b8c22324f3359c3.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./kreplenie-montazh-i-ustanovka-lebedki">Крепление лебедки, Монтаж лебедки, Установка лебедки  </a>
			<p>Закрепление лебедок осуществляется к раме на анкерные болты, анкерные болты монтируются в фундамент или сваи при залитии бетона. Так же существуют менее надежные варианты крепления такие как крепление якорем, крепление с помощью балласта и крепление к каркасу здания.</p> 
		</div>
	</div>	
	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img style="max-height:100px" src="/uploads/image/5a8e3d1dec09327afa7cc47bfd10430d.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./pravila-tehniki-bezopasnosti-pri-rabote-s-lebedkoy">Правила техники безопасности при работе с лебедкой   </a>
			<p>Машинист лебедки должен быть обучен работе с оборудованием и получить знания о безопасных методах работы. При получении задания рабочий должен проверить рабочее место. В случае возникновения аварийной ситуации машинист обязан выключить оборудование до устранения всех неполадок</p>
		</div>
	</div>	
	


	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img src="/uploads/image/eaf2fe2b2d71d757525294d210dbe79a.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./razlichie-lebedki-i-tali">Отличия лебедки от тали    </a>
			<p>При выборе оборудования для подъема грузов у покупателя часто возникает вопрос с выбором, постольку как лебедка, так и таль исполняют схожие операции, но не везде имеется возможность для установки тали или лебедки. Так же имеются принципиальные отличия в устройстве, размещении и назначении их использования.</p>
		</div>
	</div>	
	


	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img src="/uploads/image/3d01cfe7ac986a18897358b1b712d021.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./vybor-reduktora-raschet-peredatochnogo-chisla-reduktora">Выбор редуктора, подбор редуктора, расчет редуктора     </a>
			<p>Для правильного выбора редуктора требуется выполнить соответствующие расчеты, поскольку от правильности выбора может зависеть надежность работы оборудование и срок эксплуатации. Практика показывает что правильно подобранный редуктор может безотказно прослужить до 10 лет.</p>
		</div>
	</div>	
	
	<div class="row" style="margin-bottom:10px">
		<div class="col-lg-2" style="text-align:center; padding:20px 20px"> <img src="/uploads/image/fefc369bc572d73797f48b6a63a9a353.jpg"> </div>
		<div class="col-lg-9 link-product-name" style="border-left:20px solid #DFC1A5; background-color:#F3E0D1;min-height:150px">
			<a href="./vybor-reduktora-klassifikaciya-redukto">Классификация редуктора, использование редуктора  </a>
			<p>В настоящее время в современных промышленных механизмах самым распространенным является редукторный привод. Предпосылки к его созданию были заложены древними греками. В наше время редуктор общепромышленный классифицируют по: типу передачи, типу зубчатых колес, по числу ступеней.</p>
		</div>
	</div>	

