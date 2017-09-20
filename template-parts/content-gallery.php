<?php
/*
Template Name: Gallery
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_mod('favicon_image', favicon_image); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_theme_mod('apple_touch_icon', apple_touch_icon); ?>"/>
    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/normalize.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.carousel.min.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.theme.default.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/library/css/animate.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/gallery.css"
          rel="stylesheet" media="screen,projection"/>
</head>

<body style="background-image: url(<?= get_template_directory_uri() . '/library/photo/pre-logo.png' ?>)">

<a href="menu">
    <div class="start-page">
        <img src="<?php echo get_template_directory_uri(); ?>/library/photo/button-close.svg" alt="">
    </div>
</a>
<div class="owl-carousel" data-slider-id="1">
    <?php
    $galleryItems = get_posts(array('post_type' => 'project_gellery'));

    foreach ($galleryItems as $galleryItem) {

        $id = $galleryItem->ID;

        $content_post = get_post($id);
        $content = $content_post->post_content;
        if (get_field('animation_type', $id) === 'one_image'):?>
            <div class="slider one-image">
                <div class="house"
                     style="background: transparent url(<?= get_field('image-left', $id)['url']; ?>) no-repeat center bottom;">
                </div>
                <div class="angle-right"></div>
                <div class="text-block fadeInRight">
                    <p><?php echo $content ?></p>
                </div>
            </div>
        <? else: ?>
            <div class="slider two-images">
                <div class="house"
                     style="background: transparent url(<?= get_field('image-left', $id)['url']; ?>) no-repeat center bottom;">
                </div>
                <div class="hidden-block fade-in-right"
                     style="background: transparent url(<?= get_field('image-right', $id)['url']; ?>) no-repeat right bottom;">
                </div>
                <div class="shadow angle"></div>
                <div class="text-block fade-in-down">
                    <p><?php echo $content ?></p>
                </div>
            </div>
        <? endif; ?>
        <?
    }
    ?>
</div>


<div class="owl-thumbs" data-slider-id="1">
    <?php

    $galleryItems = get_posts(array('post_type' => 'project_gellery'));

    foreach ($galleryItems as $galleryItem) {
        $id = $galleryItem->ID;
        ?>

        <div class="owl-thumb-item">
            <img src="<?= get_the_post_thumbnail_url($id) ?>" alt="">
        </div>

        <?php
    }
    ?>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/OwlCarousel2Thumbs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/gallery.js"></script>
<? wp_footer(); ?>
</body>
</html>