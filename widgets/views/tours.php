<section class="space-top" data-bg-src="/frontend-files/img/bg/deal_bg_1.jpg">
    <div class="container">
        <div class="row text-center text-lg-start justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg-8 mb-n2 mb-lg-0">
                <div class="title-area">
                    <span class="sub-title justify-content-center justify-content-lg-start"><span class="shape left d-inline-block d-lg-none"><span class="dots"></span></span> <?= Yii::t("app", "tours")?> <span class="shape right"><span class="dots"></span></span></span>
                    <h2 class="sec-title text-white"><?= Yii::t("app", "tours")?></h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="icon-box style2"><button data-slick-prev="#dealSlide1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slick-next="#dealSlide1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-0 ot-carousel" id="dealSlide1" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model):?>
            <?php $img = app\models\StaticFunctions::getImage('tours', $model->id, $model->images); ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tour-offer">
                        <div class="tour-offer__img"><img src="<?=$img?>" alt="Tour Image"> <span class="tour-offer__tag"><?=$model->period?></span></div>
                        <div class="tour-offer__content">
                            <div class="tour-offer__top">
                                <div>
                                    <h3 class="tour-offer__title box-title"><a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?=$model['title_'.Yii::$app->language];?></a></h3>
                                </div>
                                <span class="tour-offer__price"><span class="price"><?=$model->price?> UZS</span></span>
                            </div>
                            <p class="tour-offer__text"><?=$model['description_'.Yii::$app->language];?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</section>