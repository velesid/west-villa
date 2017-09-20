<!DOCTYPE html>
<html class="remodal-is-locked" <?php language_attributes(); ?>>
<head>
    <title>West Villa</title>
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.theme.default.min.css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo get_template_directory_uri(); ?>/library/css/preloader.css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" media="screen,projection" />
    <script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/main.js"></script>
    <audio src="<?php echo get_template_directory_uri(); ?>/sound/soundTick.mp3" id="sound-tick"></audio>
    <audio src="<?php echo get_template_directory_uri(); ?>/sound/soundNext.mp3" id="sound-slide"></audio>
</head>
<body>

<style>
    .fp-background{
        visibility: hidden;
        opacity: 0;
        transition:all 1.3s ease-in-out;
    }
    .preload{
        opacity: 1;
        visibility: visible;
        transition:all 1.3s ease-in-out;
    }
    .done{
        opacity: 0 !important;
        visibility: hidden !important;
    }
    .turn-on{
        opacity: 1 !important;
        visibility: visible !important;
    }
</style>
<div id="page-preloader" class="preload">

    <div class="video">
        <div class="video-foreground">
            <video style="position: absolute; height: auto; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 100%;  right: 0px; bottom: 0px; max-width:none;" src="http://www.west-villa.com.ua/wp-content/themes/structure/library/photo/west-willa-video.mp4" data-src="/wp-content/uploads/2016/10/headervideo.mp4" loop="loop" muted="muted" autoplay="" class="vsc-initialized" data-vscid="r1r27v5ak"></video>
        </div>
        <div class="gradient"></div>
        <div class="firm">
            <div class="overlay"></div>
        </div>
    </div>
</div>
<div id="content-on" class="remodal fp-background">

    <div class="cls_border clb1"></div>
    <div class="cls_border clb2"></div>
    <div class="cls_border clb3"></div>
    <div class="cls_border clb4"></div>

    <div class="remodal-dialog">
        <div class="menu_container owl-carousel owl-theme ">
            <div class="menu_slide_item menu_fst_sld zero">
                <div class="blocks block1 apart zoomIn" page="apartments" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/artc_20170314192105926.jpg') 0% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/about">
                        <div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">о комплексе</p>
                        </div></a>
                </div>

                <div class="blocks block1 zoomIn" page="healthy-life" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/menu_video.jpg') 40% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/gallery"><div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">галерея пректа </p>
                        </div></a>
                </div>

                <div class="blocks block1 zoomIn" page="emotional-oasis" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/artc_20170227201038673.jpg') 40% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/house">
                        <div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">подбор  квартиры</p>
                        </div></a>
                </div>

                <div class="blocks block1 zoomIn" page="extras" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/artc_20170227201152409.jpg') 40% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/map">
                        <div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">расположение <br /    > инфраструктура</p>
                        </div>
                    </a>
                </div>
                <div class="go_next"></div>
            </div>

            <!--    * Slide-2 *-->
            <div class="menu_slide_item menu_sec_sld">
                <div class="go_prev"></div>
                <div class="blocks block1 zoomIn" page="about" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/sld_20170301190919427.jpg') 0% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/conditions"><div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">условия покупки</p>
                        </div></a>
                </div>


                <div class="blocks block1 zoomIn" page="management" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/sld_20170301034412394.jpg') 40% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/news">
                        <div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">Акции</p>
                        </div></a>
                </div>

                <div class="blocks block1  zoomIn" page="video" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/artc_20170227201139419.jpg') 40% center no-repeat;"></div>
                    <div class="prev_v hidden-sm" style="height: 97px; width: 97px; margin-left: -48.5px; margin-top: -48.5px;">
                        <div class="inner" style="height: 50.8px; width: 50.8px; margin-left: -25.4px; margin-top: -25.4px;">
                            <div class="pl_btl"></div>
                            <div class="pl_btl2"></div>
                        </div>
                    </div>
                    <a href="http://www.west-villa.com.ua/progress"><div class="text">
                            <hr>
                            <div class="clear"></div>

                            <p class="menu_page_name">ход строительства</p>

                        </div></a>
                </div>

                <div class="blocks block1 zoomIn" page="contacts" style="opacity: 1;">
                    <div class="hover"></div>
                    <div class="image" style="background: url('/split/files/categories/artc_20170301010713927.jpg') 40% center no-repeat;"></div>
                    <a href="http://www.west-villa.com.ua/contact"><div class="text">
                            <hr>
                            <div class="clear"></div>
                            <p class="menu_page_name">Контакты</p>
                        </div></a>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="mobile-menu">
    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/artc_20170314192105926.jpg') 0% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/about">
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">о комплексе</p>
            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/menu_video.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/gallery"><div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">галерея проекта </p>
            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/artc_20170227201038673.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/house">
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">подбор  квартиры</p>
            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/artc_20170227201152409.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/map">
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">расположение <br /    > инфраструктура</p>
            </div>
        </a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/sld_20170301190919427.jpg') 0% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/conditions"><div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">условия покупки</p>
            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/sld_20170301034412394.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/news">
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Акции</p>
            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/artc_20170227201139419.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/progress"><div class="text">
                <hr>
                <div class="clear"></div>

                <p class="menu_page_name">ход строительства</p>

            </div></a>
    </div>

    <div class="m-block">
        <div class="hover"></div>
        <div class="image" style="background: url('/split/files/categories/artc_20170301010713927.jpg') 40% center no-repeat;"></div>
        <a href="http://www.west-villa.com.ua/contact"><div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Контакты</p>
            </div></a>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/preloder.js"></script>
</body>
</html>
