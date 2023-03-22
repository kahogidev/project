<div class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> <?= Yii::t("app", "hotels")?><span class="shape right"><span class="dots"></span></span></span>
            <h2 class="sec-title"><?= Yii::t("app", "hotels")?></h2>
        </div>
        <div class="row gy-30 masonary-active">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                <?php
                $img = app\models\StaticFunctions::getImage('hotel', $model->id, $model->images);
                ?>
                    <div class="col-md-6 col-xxl-auto filter-item">
                        <div class="gallery-card">
                            <div class="gallery-img"><img src="<?=$img?>" alt="gallery image"> <a href="" class="gallery-btn popup-image"><?=$model->name?>
                                    <br> <?=$model->country?> </a></div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>
</div>