<section class="space-bottom">
    <div class="testi-sec space" data-bg-src="assets/img/bg/bg_map_2.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> <?= Yii::t("app", "testmon")?> <span class="shape right"><span class="dots"></span></span></span>
                <h2 class="sec-title"><?= Yii::t("app", "testmon")?></h2>
            </div>
            <div class="row slider-shadow ot-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">

                <?php if (!empty($models)): ?>
                     <?php foreach ($models as $model):?>
                        <div class="col-lg-6">
                            <div class="testi-card">
                                <div class="testi-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                <p class="testi-card__text">“<?=$model['comment_'.Yii::$app->language];?>”</p>
                                <div class="testi-card__profile">
                                    <div class="media-body">
                                        <h3 class="testi-card__name"> <?=$model->name?></h3>
                                        <span class="testi-card__desig"> <?=$model->email?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>


            </div>
        </div>
    </div>
</section>