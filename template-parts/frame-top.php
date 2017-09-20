<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_image', favicon_image ); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'apple_touch_icon', apple_touch_icon ); ?>"/>
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/owl.carousel.min.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/css/animate.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/map.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/gallery.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/news.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <style>
        /**** frame ****/
        body {
            padding: 40px;
            height: 100vh;
            transition: padding 1.5s ease-in-out !important;
            background-color: #000715;
            box-sizing: border-box;
            font-family: roboto;
        }
        .start-page {
            position: fixed;
            z-index: 2;
            width: 56px;
            height: 56px;;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border: 1px solid #ffffff;
            cursor: pointer;
            background-color: #000715;
            box-sizing: border-box;
        }
        .start-page > img {
            top: 0;
            left: 0;
            width: 28px;
            height: 28px;
            margin: 12px;
            display: block;
            transition: transform .2s ease-in-out;
        }
        .start-page:hover > img {
            transform: rotate(90deg);
        }
        .page-loaded .wrapper-frame {
            transform: scaleY(1);
            transition: transform .5s ease-in-out !important;
        }
        .wrapper-frame {
            transform: scaleY(.75);
            outline: #fff solid 1px;
            outline-offset: 9px;
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>

<body class="page-loaded">

<a href="http://www.west-villa.com.ua/menu/">
    <div class="start-page">
        <img src="http://www.try.arpik.net/wp-content/themes/structure/library/photo/button-close.svg" alt="">
    </div>
</a>

<div class="wrapper-frame">