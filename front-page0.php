<html class="remodal-is-locked">
<head>

<!--inline-->
<link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" media="screen,projection" />
<link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.theme.default.min.css" rel="stylesheet" media="screen,projection" />
<link rel="stylesheet" href="/css/fonts.css">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" media="screen,projection" />
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/main.js"></script>

 </head>



<body>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
            the_content();
        ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<audio src="<?php echo get_template_directory_uri(); ?>/sound/soundTick.mp3" id="sound-tick"></audio>
<audio src="<?php echo get_template_directory_uri(); ?>/sound/soundNext.mp3" id="sound-slide"></audio>
<div class="remodal" id="menu_modal">

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
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Apartments</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="emotional-oasis" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/artc_20170227201038673.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Emotional<br>oasis</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="healthy-life" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/artc_20170227201123649.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Healthy<br>Lifestyle</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="services" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/artc_20170227201139419.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Services</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="extras" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/artc_20170227201152409.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Extras</p>
            </div>
        </div>
        <div class="go_next"></div>
    </div>

<!--    * Slide-2 *-->
    <div class="menu_slide_item menu_sec_sld">
        <div class="go_prev"></div>
        <div class="blocks block1 zoomIn" page="about" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/sld_20170301190919427.jpg') 0% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">About Signature</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="management" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/sld_20170301034412394.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Signature<br>Management</p>
            </div>
        </div>

        <div class="blocks block1 zoomIn" page="contacts" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/artc_20170301010713927.jpg') 40% center no-repeat;"></div>
            <div class="text">
                <hr>
                <div class="clear"></div>
                <p class="menu_page_name">Contacts</p>
            </div>
        </div>

        <div class="blocks block1  zoomIn" page="video" style="opacity: 1;">
            <div class="hover"></div>
            <div class="image" style="background: url('/split/files/categories/menu_video.jpg') 40% center no-repeat;"></div>
            <div class="prev_v hidden-sm" style="height: 97px; width: 97px; margin-left: -48.5px; margin-top: -48.5px;">
                <div class="inner" style="height: 50.8px; width: 50.8px; margin-left: -25.4px; margin-top: -25.4px;">
                    <div class="pl_btl"></div>
                    <div class="pl_btl2"></div>
                </div>
            </div>
            <div class="text">
                <hr>
                <div class="clear"></div>

                <p class="menu_page_name">Watch <br>the Signature <br>video</p>

            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>


