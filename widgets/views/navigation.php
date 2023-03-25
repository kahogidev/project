<style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: #4bd16f;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
<div class="ot-menu-wrapper">
    <div class="ot-menu-area text-center">
        <button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href=""><img style="width: 50px!important;" src="/frontend-files/img/logo.png" alt="Travon"></a></div>
    </div>
</div>
<header class="ot-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <?php if (!empty($contacts)): ?>
                                <?php foreach ($contacts as $contact):?>
                                    <li><i class="fal fa-phone"></i><a href="tel:+256214203215"><?=$contact->first_phone?></a></li>
                                    <li class="d-none d-xl-inline-block"><i class="fal fa-envelope"></i><a href="mailto:info@travon.com"><?=$contact->email?></a></li>
                                    <li><i class="fal fa-location-dot"></i><?=$contact->addres?></li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-lg-inline-block"><i class="far fa-user"></i><a href="<?=\yii\helpers\Url::to(["admin/"])?>">Login </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href=""><img style="width: 100px!important;" src="/frontend-files/img/logo.png" alt="Travon"></a></div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <?php if (!empty($menues)): ?>
                                    <?php foreach ($menues as $menue): ?>
                                        <li><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                                <li>
                                    <div class="dropdown">
                                        <button class="dropbtn"><?= Yii::t("app", "lang")?></button>
                                        <div class="dropdown-content">
                                            <?php
                                            foreach (Yii::$app->params['language'] as $key => $value){
                                                echo " <a style='font-color:black' href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>
<div class="ot-hero-wrapper hero-1">
    <div class="hero-slider ot-carousel" data-fade="true">
        <div class="ot-hero-slide">
            <div class="ot-hero-bg" data-bg-src="/frontend-files/img/hero/hero_bg_1_1.jpg"></div>
            <div class="container z-index-common">
                <div class="hero-style1">
                    <span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s"><span class="shape right"><span class="dots"></span></span></span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.2s"><?= Yii::t("app", "slider1")?></h1>
                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.4s"><?= Yii::t("app", "sliders1")?></p>
                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s"><?= Yii::t("app", "more")?></a>
                </div>
            </div>
        </div>
        <div class="ot-hero-slide">
            <div class="ot-hero-bg" data-bg-src="/frontend-files/img/hero/hero_bg_1_2.jpg"></div>
            <div class="container z-index-common">
                <div class="hero-style1">
                    <span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s"><span class="shape right"><span class="dots"></span></span></span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.2s"><?= Yii::t("app", "slider1")?></h1>
                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.4s"><?= Yii::t("app", "sliders1")?></p>
                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s"><?= Yii::t("app", "more")?></a>
                </div>
            </div>
        </div>
        <div class="ot-hero-slide">
            <div class="ot-hero-bg" data-bg-src="/frontend-files/img/hero/hero_bg_1_3.jpg"></div>
            <div class="container z-index-common">
                <div class="hero-style1">
                    <span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s"><span class="shape right"><span class="dots"></span></span></span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.2s"><?= Yii::t("app", "slider1")?></h1>
                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.4s"><?= Yii::t("app", "sliders1")?></p>
                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s"><?= Yii::t("app", "more")?></a>
                </div>
            </div>
        </div>
    </div>
</div>
