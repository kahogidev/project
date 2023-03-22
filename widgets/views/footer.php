<footer class="footer-wrapper footer-layout1">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="ot-widget-about">
                            <div class="about-logo"><a href="/"><img src="/frontend-files/img/logo-white.svg" alt="Travon"></a></div>
                            <p class="about-text"><?= Yii::t("app", "about1")?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title"><?= Yii::t("app", "menulinks")?></h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <?php if(!empty($menues)):?>
                                    <?php foreach ($menues as $menue):?>
                                         <li><a href="<?=$menue->link;?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><?= Yii::t("app", "contactinfo")?></h3>
                        <div class="ot-widget-contact">
                            <?php if (!empty($contacts)): ?>
                                <?php foreach ($contacts as $contact):?>
                                    <div class="info-box">
                                        <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                                        <p class="info-box_text"><?=$contact->addres?></p>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                                        <p class="info-box_text"><a href="" class="info-box_link"><?=$contact->first_phone?></a> </p>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                                        <p class="info-box_text"><a href="" class="info-box_link"><?=$contact->email?></a></p>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title"><?= Yii::t("app", "galleryinfo")?></h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_1.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_1.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_2.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_2.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_3.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_3.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_4.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_4.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_5.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_5.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="/frontend-files/img/widget/gallery_1_6.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_6.jpg" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap style2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="#">WEBSPACE</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-end d-none d-lg-block">
                    <div class="footer-links">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>