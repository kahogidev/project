<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> <?= Yii::t("app", "team")?><span class="shape right"><span class="dots"></span></span></span>
            <h2 class="sec-title"><?= Yii::t("app", "team")?></h2>
        </div>
        <div class="row">

            <?php if (!empty($models)): ?>
            <?php foreach ($models as $model):?>
            <?php
            $img = app\models\StaticFunctions::getImage('managers', $model->id, $model->images);
            ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
                        <div class="ot-team team-box">
                            <div class="team-img">
                                <img src="<?=$img?>" alt="Team">
                                <div class="team-social">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="box-title"><a href=""><?=$model->first_name?> <?=$model->last_name?></a></h3>
                                <span class="team-desig"><?=$model->position?></span>
                                <span class="team-desig"><?=$model->first_phone?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>
</section>