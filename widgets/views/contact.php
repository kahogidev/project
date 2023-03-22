<div class="space">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-5">
                <div class="contact-info-wrap">
                    <div class="shape-img"><img src="/frontend-files/img/shape/contact_shape.png" alt="shape"></div>
                    <h3 class="border-title2"><?= Yii::t("app", "contactp")?></h3>
                    <div class="contact-info-box">
                        <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model):?>

                                <div class="contact-info">
                                    <h4 class="contact-info__title"><?= Yii::t("app", "tel")?>:</h4>
                                    <div class="contact-info__icon"><i class="fal fa-phone"></i></div>
                                    <div class="media-body"><span class="contact-info__text"><a href=""><?=$model->first_phone?></a></span></div>
                                </div>
                                <div class="contact-info">
                                    <h4 class="contact-info__title"><?= Yii::t("app", "email")?>:</h4>
                                    <div class="contact-info__icon bg-theme"><i class="fal fa-envelope"></i></div>
                                    <div class="media-body"><span class="contact-info__text"><a href=""><?=$model->email?></a> </span></div>
                                </div>
                                <div class="contact-info">
                                    <h4 class="contact-info__title"><?= Yii::t("app", "location")?>:</h4>
                                    <div class="contact-info__icon bg-title"><i class="fal fa-location-dot"></i></div>
                                    <div class="media-body"><span class="contact-info__text"><?=$model->addres?></span></div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>

                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="650" height="470" id="gmap_canvas" src="https://maps.google.com/maps?q=namangan%20shahar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:470px;width:650px;}</style><a href="https://www.embedgooglemap.net">how to embed google map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:470px;width:650px;}</style></div></div>            </div>
        </div>
    </div>
</div>
<div class="space-bottom" data-bg-src="/frontend-files/img/bg/contact_bg_1.html">
    <div class="container">
        <form action="https://www.adivaha.com/themeforest-travon/mail.php" method="POST" class="contact-form ajax-contact">
            <h3 class="form-title"><?= Yii::t("app", "contactinfo")?></h3>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control style3" name="name" id="name" placeholder="<?= Yii::t("app", "name")?>"> <i class="fal fa-user"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control style3" name="email" id="email" placeholder="<?= Yii::t("app", "email")?>"> <i class="fal fa-envelope"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="tel" class="form-control style3" name="number" id="phone" placeholder="<?= Yii::t("app", "tel")?>"> <i class="fal fa-phone"></i></div>
                <div class="form-group col-md-6">
                    <input type="date" class="form-control style3" name="number" id="date" placeholder="Phone Number">                </div>

                <div class="form-group col-12">
                    <select>
                        <?php if(!empty($tours)):?>
                            <?php foreach ($tours as $tour):?>
                                <option style="padding: 10px"><?=$tour["title_".Yii::$app->language];?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                </div>
            </div>
                <div class="form-btn col-12">
                    <button onclick="booking()" class="ot-btn"><?= Yii::t("app", "send")?></button>
                </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div>