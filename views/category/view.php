<section class="space" id="trip-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> <?= Yii::t("app", "category1")?><span class="shape right"><span class="dots"></span></span></span>
            <h2 class="sec-title"><?= Yii::t("app", "category1")?></h2>
        </div>
        <div class="row slider-shadow ot-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-xs-slide-show="1" data-arrows="true">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images); ?>
                    <div class="col-xl-8 col-lg-8 col-md-6">
                        <div class="trip-box">
                            <div class="trip-box__img"><img style="height: 320px; object-fit: cover" src="<?=$img?>" alt="Trip image"></div>
                            <div class="trip-box__content">
                                <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>"><?=$model['name_'.Yii::$app->language];?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<section class="space">
    <div class="container">
        <div class="row gy-40 justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-card__icon"><img src="/frontend-files/img/icon/feature_1_1.svg" alt="icon"></div>
                    <h3 class="feature-card__title"><?= Yii::t("app", "service1")?></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-card__icon"><img src="/frontend-files/img/icon/feature_1_2.svg" alt="icon"></div>
                    <h3 class="feature-card__title"><?= Yii::t("app", "service2")?></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-card__icon"><img src="/frontend-files/img/icon/feature_1_3.svg" alt="icon"></div>
                    <h3 class="feature-card__title"><?= Yii::t("app", "service3")?></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-card__icon"><img src="/frontend-files/img/icon/feature_1_4.svg" alt="icon"></div>
                    <h3 class="feature-card__title"><?= Yii::t("app", "service4")?></h3>
                </div>
            </div>
        </div>
    </div>
</section>