<script>
    $(window).on('load resize', windowSize);
    function windowSize() {
        var heightRever = $(".box-card-manevr__title-rever").height();
        $(".box-card-manevr__title-norever").height(heightRever);
    }

    $(document).ready(function () {
        $(".box-card-manevr__btn-norever").click(function () {
            $('.box-rever').removeClass("box-rever__focus");
            $('.box-norever').addClass("box-norever__focus");
        });

        $(".box-card-manevr__btn-rever").click(function () {
            $('.box-norever').removeClass("box-norever__focus");
            $('.box-rever').addClass("box-rever__focus");
        });
    });
</script>


<?php
/* @var StoreCategory $category ; */

$categories = StoreCategory::model()->findAll("parent_id = " . $category->id);
?>
<!-- Выодит блок с информцией в категориях-->
<div  style="margin-bottom:20px">
    <div class="row" style="margin:0 15px 10px 15px;background-color: white">
	<span class="hidden-xs ">
        Лебедка маневровая применяется на складах вблизи железнодорожных путей и других прирельсовых участках, где
        осуществляются работы по разгрузки погрузке и продукции с вагонов. 
		<span class="hidden-sm hidden-md">
		Маневровая лебедка предназначена для
        транспортировки железнодорожных вагонов и полувагонов, железнодорожных платформ и цистерн, может перемещать до
        семнадцати железнодорожных вагонов или платформ массой груза до 1200 тонн, без учета массы самого состава может
        применяться для комплектации маневрового устройства или использоваться в качестве него.
        Лебедка электрическая маневровая дает возможность уменьшить затраты и не арендовать для таких работ маневровый
        тепловоз. Может использоваться в аварийных ситуациях когда использование маневрового тепловоза или электровоза
        невозможна. В том числе, установленные на нее экономичные электродвигатели, позволяют, тем самым, добиваться
        минимальных энергозатрат в эксплуатации. </span>
		
		
		
		</span>
        <div class="col-lg-12">
            <hr style="clear: both">
            <div class="row">
                <div class="col-lg-6  col-md-6 col-sm-12">
                    <div class="box-card-manevr">
                        <div class="row" style="margin: 0;padding: 0">
                            <div class="col-lg-3">
                                <div class="box-card-manevr__image"
                                     style="background-image: url('/themes/default/web/images/1.png'); "></div>

                            </div>

                            <div class="col-lg-9">
                                <div class="box-card-manevr__title box-card-manevr__title-norever">
                                    Лебедки для передвижения вагонов в <br> <strong>одном направлении </strong>
                                </div>
                                <div class="row">

                                    <div class="col-lg-7" style="text-align: left">

                                        <table style="margin: 0 auto;display: inline-block">
                                            <thead>
                                            <tr>
                                               <th colspan="2" style="padding: 3px">
                                                   Режимы работы
                                               </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <td style="padding: 3px">
                                                1 Вариант
                                            </td>
                                            <td style="padding: 3px">
                                                2 Вариант
                                            </td>
                                            <tr>
                                                <td style="padding: 3px"><a class="example6"
                                                                            href="/themes/default/web/images/11.jpg"><img
                                                            src="/themes/default/web/images/11.jpg" width="80px" alt=""
                                                            style="border: 1px solid black"></a></td>
                                                <td style="padding: 3px"><a class="example6"
                                                                            href="/themes/default/web/images/22.jpg">
                                                        <img
                                                            src="/themes/default/web/images/22.jpg" width="80px" alt=""
                                                            style="border: 1px solid black"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="col-lg-5">

                                        <a class="box-card-manevr__btn box-card-manevr__btn-norever" href="#norever">
                                            Смотреть
                                            <span class="caret"> </span>
                                        </a>

                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6 col-sm-12">
                    <div class="box-card-manevr">
                        <div class="row" style="margin: 0;padding: 0">
                            <div class="col-lg-3">
                                <div class="box-card-manevr__image"
                                     style="background-image: url('/themes/default/web/images/lem10.png'); "></div>
                            </div>

                            <div class="col-lg-9">
                                <div class="box-card-manevr__title box-card-manevr__title-rever">
                                   <span style="font-weight: bold;"> Реверсивные  </span>лебедки для передвижения <br> вагонов в <strong> двух направлениях
                                    </strong>
                                </div>
                                <div class="row">

                                    <div class="col-lg-7" style="text-align: left">
                                        <table style="margin: 0 auto;display: inline-block">
                                            <thead>
                                            <tr>
                                                <th style="padding: 3px">
                                                    Режим работы
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="padding: 3px">
                                                    1 Вариант
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px"><a class="example6"
                                                                            href="/themes/default/web/images/311.png"><img
                                                            src="/themes/default/web/images/311.png" height="30px" alt=""
                                                            style="border: 1px solid black"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="col-lg-5">

                                        <a class="box-card-manevr__btn box-card-manevr__btn-rever" href="#rever">
                                            Смотреть
                                            <span class="caret"> </span>
                                        </a>

                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <hr style="clear: both">
        </div>

        <hr>
        <div>
            <table>
                <tr>
                    <td><img src="/uploads/image/7ac83863f4db0b0346744123e120b7a4.jpg" width="90px" style="margin:10px"
                             alt="">
                    </td>
                    <td><A CLASS="link-color" HREF="/pages/shema-raboty-manevrovoy-lebedki">Устройство и принцип работы
                            маневровых лебедок, схема работы лебедки </A>Лебедка состоит из следующих основных узлов:
                        Главного и
                        вспомогательного барабанов, редукторов, электродвигателя и установки пусковой аппаратуры,
                        смонтированных
                        на общей раме сварной конструкции. Представлены типовые схемы рекомендуемой работы с маневровыми
                        лебедками двухбарабанными и однобарабанными.
                    </td>
                </tr>


                <tr>
                    <td><img src="/uploads/image/ff2602daf73c12f8b60ea49bd98d6bb8.jpg" width="90px" style="margin: 10px"
                             alt="">
                    </td>
                    <td><a CLASS="link-color" href="/pages/tehnicheskimi-harakteristikami"> Производство маневровых
                            лебедок
                            по
                            характеристикам заказчика. </a> Сегодня лебедки активно применяются для маневровых работ.
                        Учитывая
                        требования потребителей, мы уделяет особое внимание подбору оборудования для каждого клиента, и
                        расширяем технические возможности производимых лебедок
                    </td>
                </tr>

            </table>
        </div>
        <hr style="clear: both">
    </div>
    <div class="container-fluid">
        <!-- Выводит все категории, ручных лебедок-->
        <h3 id="norever" style="text-align: center;font-weight: bold"> Лебедки для передвижения вагонов в одном
            направлении </h3>
        <section class="box-norever">
            <?php foreach ($categories as $item): ?>

                <?php
                $criteria = new CDbCriteria();
                $criteria->compare("category_id", $item->id);
                $criteria->order = "position";
                $products = Product::model()->findAll($criteria);
                ?>

                <?php foreach ($products as $currentProduct): ?>
                    <?php $this->renderPartial("//store/product/_item-for-manevr-no-rever", ["data" => $currentProduct]); ?>
                <?php endforeach; ?>
                <div style="clear: both"></div>
            <?php endforeach; ?>
        </section>
        <h3 id="rever" style="text-align: center;font-weight: bold"> Реверсивные лебедки для передвижения вагонов в двух
            направлениях
        </h3>
        <section class="box-rever">
            <?php foreach ($categories as $item): ?>
                <?php
                $criteria = new CDbCriteria();
                $criteria->compare("category_id", $item->id);
                $criteria->order = "position";
                $products = Product::model()->findAll($criteria);
                ?>
                <?php foreach ($products as $currentProduct): ?>
                    <?php $this->renderPartial("//store/product/_item-for-manevr-rever", ["data" => $currentProduct]); ?>
                <?php endforeach; ?>
                <div style="clear: both"></div>
            <?php endforeach; ?>
        </section>
    </div>





