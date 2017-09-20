<?php
/**
 * Template Name: Progress
 */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_mod('favicon_image', favicon_image); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_theme_mod('apple_touch_icon', apple_touch_icon); ?>"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/progress.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

    <?php include_once(get_template_directory() . '/template-parts/frame-top-no-head.php') ?>

    <div class="wrapper-progress">

        <div class="video-block">
            <img src="<?= get_template_directory_uri(); ?>/library/photo/bg-window.jpg" alt="">
            <div class="overlay"></div>
            <div class="video-block-content">
                <div class="video-block-title">Строительство</div>
                <div class="video-content">
                    <img src="<?= get_template_directory_uri(); ?>/library/photo/vido-broadcast.jpg" alt="">
                    <div class="video-block-subtitle">Август 2017</div>
                    <a href="" class="button"><img
                                src="<?= get_template_directory_uri(); ?>/library/photo/video-button2.png" alt=""></a>
                    <div class="button-title">Следите за ходом <br/> строительства онлайн</div>
                </div>
            </div>
        </div>

        <div class="charts-wrapper">
            <div class="charts-main">
                <div class="charts-titile">
                    ГОТОВНОСТЬ ОБЪЕКТА
                </div>
                <div class="charts-content">
                    <h2>Устройство фундамента</h2>
                    <div class="bar">
                        <div class="bar-inner bar-100" data-percent="100%"></div>
                    </div>

                    <h2>Возведения каркаса здания</h2>
                    <div class="bar">
                        <div class="bar-inner bar-95" data-percent="95%"></div>
                    </div>

                    <h2>Кладка наружных и внутренних стен</h2>
                    <div class="bar">
                        <div class="bar-inner bar-65" data-percent="65%"></div>
                    </div>

                    <h2>Фасадные работы</h2>
                    <div class="bar">
                        <div class="bar-inner bar-0" data-percent="0%"></div>
                    </div>

                    <h2>Устройство кровли</h2>
                    <div class="bar">
                        <div class="bar-inner bar-0" data-percent="0%"></div>
                    </div>

                    <h2>Устройство внутренних коммуникаций</h2>
                    <div class="bar">
                        <div class="bar-inner bar-20" data-percent="20%"></div>
                    </div>

                    <h2>Внутреняя отделка помещений</h2>
                    <div class="bar">
                        <div class="bar-inner bar-15" data-percent="15%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="progress">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php
                the_content();
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <script>
        (function (document) {
            var _bars = [].slice.call(document.querySelectorAll('.bar-inner'));
            _bars.map(function (bar, index) {
                setTimeout(function () {
                    bar.style.width = bar.dataset.percent;
                }, index * 1000);

            });
        })(document)
    </script>
    <?php include_once(get_template_directory() . '/template-parts/frame-bottom.php') ?>
</div>
</html>
