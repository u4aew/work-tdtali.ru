<?php 
$mainAssets = "/public/assets/74c22bf7";

?>
    <header>
        <!-- Modal -->
        <div class="navbar navbar-default navbar-static-top header-site" style="margin-bottom:-2px;">
            <div class="hidden-xs block-logo-name-company"><a href="/"> <img src="/uploads/image/826a42e01147f2318aa391d522f1abad.jpg" alt="Логотип Барнаульские тали"></a>
                <br>
                <span> Барнаульские тали </span></div>
            <div id="block-phone-free" class="hidden-xs block-free-phone">
                <span class="free-number"><img src="/uploads/image/048c33c671579cc51114331cfa606bc8.png" alt="телефон барнаульские тали"> 8-800-700-88-47</span>
                <p> <span class="info-russia-number">  Звонок по России бесплатный
              </span> </div>
            <div class="container-fluid menu-tdtali">

                <div class="navbar-header mobile-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="visible-xs block-mobile-info">Барнаульские тали</div>
                </div>
                <div id="responsive-menu" class="collapse navbar-collapse">
                    <ul class="iteam-menu-list">
                        <?php foreach ($this->params['items'] as $item):?>
                            <li>
                                <a href="<?=$item["url"] ?>">
                                    <?=$item["label"] ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="visible-xs mobile-russia-number">
                <span> 8-800-700-88-47 
			</span>
                <span>  barnaul@tali.ru 
		     </span>
                <br>
                <span> Звонок по России бесплатный
		  </span>
                <br>
                <span>
		  <img src="/uploads/image/62bd7a3ea698a05d66968e126fae813c.png" class="logo-skype">  <a href="skype:telfer.barnaul?call"> Tdtali </a> 
		  </span>
                <span> ICQ 480568098 
		  </span>
            </div>
        </div>
    </header>