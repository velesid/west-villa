<?php
/*
Template Name: MmM
*/
?>
<html>
<head>
    <style>
        body {
            background-color: #000715;
            margin: 0;
            padding: 0;
        }
        .preload {
            position: fixed;
            background-color: transparent;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 50px 50px;
        }
        .preload > .video {
            height: 100%;
            background-color: transparent;
            position: relative;
            overflow: hidden;
        }
        .preload > .video > .firm {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: transparent;
            background-image: url(http://www.west-villa.com.ua/wp-content/themes/structure/library/photo/pre-logo.png);
            background-size: 30%;
            background-position: 50% center;
            background-repeat: no-repeat;
        }
        .preload > .video > .gradient:before{
            content: "";
            width: 60%;
            height: 100%;
            display: block;
            /*background-image: -webkit-radial-gradient(#000, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.08), rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.04), rgba(0, 0, 0, 0.02), transparent);           */
            background-image: -webkit-radial-gradient(#000715, rgba(0, 7, 21, 0.9), rgba(0, 7, 21, 0.8), rgba(0, 7, 21, 0.7), rgba(0, 7, 21, 0.6), rgba(0, 7, 21, 0.5), rgba(0, 7, 21, 0.4), rgba(0, 7, 21, 0.3), rgba(0, 7, 21, 0.2), rgba(0, 7, 21, 0.1), rgba(0, 7, 21, 0.08), rgba(0, 7, 21, 0.06), rgba(0, 7, 21, 0.04), rgba(0, 7, 21, 0.02), transparent);
            border-radius: 50%;
            position: absolute;
            left: 20%;
            top: 0%;
            background-position: 50% center;
        }
        .preload > .video > .gradient{
            width: 100%;
        }
        .preload > .video > .firm > .overlay {
            background-color: transparent;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .preload > .video > .video-foreground > iframe, .preload > .video > .video-foreground {
            pointer-events: none !important;
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 300%;
        }

    </style>
</head>
<body>
<style>
    .main-menu{
        transition:all .5s ease-in-out;
    }
    .preload{
        opacity: 1;
        visibility: visible;
        transition:all .5s ease-in-out;
    }
    .done{
        opacity: 0 !important;
        visibility: hidden !important;
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

<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<!--Kak sdelat preloder, прилодер перед загрузкой сайта. -1-Kод будет запущен когда страница будет полностью загружена, включая все
 фреймы, объекты и изображения.  -2-Fynkciy bydet dlitsy 2500 milisekynd.   -3-Obyavili peremen-*preloder*-i-nashli-blok
s id*page-preloader*-i-etot-ID-pomestili-v-ety-per, toge samoe s -4-.   -5-Esle-per*preloder*(v-per*preloder* -seichas
soderg ID=page-preloader) ne soderh v bloke-v-kontente klass*'done'* -to-6-Dobavit-klass*'done'*    -->

<script>
    $(window).load(function() {         // -1-
        setTimeout(function () {        // -2-
            var preloader = document.getElementById('page-preloader');   // -3-
            var contenton = document.getElementById('content-on');      // -4-
            if( !preloader.classList.contains('done') )                 // -5-
            {
                preloader.classList.add('done');                        // -6-
            }
            if( !contenton.classList.contains('turn-on') )
            {
                contenton.classList.add('turn-on');
            }
        }, 2500);
    });
</script>

</body>
</html>


