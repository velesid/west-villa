<?php
/*
Template Name: Apartment-selection
*/
?>
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
            width: 60px;
            height: 60px;
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
            margin: 14px;
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
    <link href="<?php echo get_template_directory_uri(); ?>/css/house.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

<body class="page-loaded">
<?php
$flats = array(
    '1' => true,
    '2' => false,
    '3' => true,
    '4' => true,
    '5' => false,
    '6' => true,
    '7' => true,
    '8' => false,
    '9' => true,
    '10' => true,
    '11' => true,
    '12' => true,
    '13' => false,
    '14' => true,
    '15' => true,
    '16' => false,
    '17' => false,
    '18' => true,
    '19' => false,
    '20' => true,
);

function getFlatNumber($floor, $apartmentName)
{
    if (in_array($apartmentName, [1, 2, 3])) {
        $flatsOnFloor = 3;
        $begins = 1;
    } else {
        $flatsOnFloor = 2;
        $begins = 13;
    }
    return $begins + ($flatsOnFloor * ($floor - 1));
}
//var_dump($floor);
?>

<a href="http://www.west-villa.com.ua/menu/">
    <div class="start-page">
        <img src="http://www.try.arpik.net/wp-content/themes/structure/library/photo/button-close.svg" alt="">
    </div>
</a>

<div class="wrapper-frame">

<div class="house-main">
    <?php
    $floor = $_GET['floor'];
    if ($floor == null) {
        $floor = 1;
        $floorNull = 'Квартира';
    }
    $floor = (int)$floor;
    ?>
    <img src="<?= get_template_directory_uri(); ?>/library/photo/house-select.jpg" alt="Выбор квартиры"
         class="images-selection"/>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1920 795" style="enable-background:new 0 0 1920 1080;" xml$:space="preserve">

        <a href="/house/?floor=0" class="button-floor" data-floor="0">
            <polygon points="1782,699 1782.7,750.3 1822.7,761.7 1822.7,766 1870.3,779.3 1870.3,786.3 1519,788.3 1337.7,788
		976.3,790 618,791 294.3,791.3 38.7,792 38,785 80.3,772 80,766.3 118.3,755 118.7,698.7"/>
        </a>
        <a href="/house/?floor=1" class="button-floor" data-floor="1">
            <polygon points="118.7,575.7 118.7,579.3 105.7,579.3 105.7,588.7 118.7,588.7 118.7,645.3 105.7,648 105.7,655.7
		118.7,655.7 118.7,698.3 1781.3,698.3 1781.3,575.7"/>
        </a>
        <a href="/house/?floor=2" class="button-floor" data-floor="2">
            <polygon points="118.7,453 118.7,458.7 96.7,458.7 96.7,467.3 118.7,467.3 118.7,525.7 107.7,525.7 107.7,533.3
		118.7,533.3 118.7,575.7 1781.7,575.3 1781.7,453"/>
        </a>
        <a href="/house/?floor=3" class="button-floor" data-floor="3">
            <polygon points="118.7,452.7 118.7,332.5 1781.7,332.7 1782,453"/>
        </a>
        <a href="/house/?floor=4" class="button-floor" data-floor="4">
            <polygon points="1782,332.5 1782,175 1713,174 1713,164.5 1534.5,163.5 1517.5,173.5 1254.5,172.5 1254.5,158
		1071,156.5 1063.5,172 910.5,171.5 910.5,156 724.5,155.5 724.5,168.5 692,167.5 678,146 539,146 538,170 501,169.5 465.5,149
		361,149 361,158.5 252,158.5 252,168.5 118.5,168.5 118.5,219 92,219 92,226.5 118,235 118,286 92,286 92,294.5 118,301 119,332
		775,332.5 "/>
        </a>
    </svg>

    <div class="button-select">
        <a class="button-black button-floor" data-floor="0" href="/house/?floor=0">Техпомещение</a>
        <a class="button-black button-floor" data-floor="1" href="/house/?floor=1">1 этаж</a>
        <a class="button-black button-floor" data-floor="2" href="/house/?floor=2">2 этаж</a>
        <a class="button-black button-floor" data-floor="3" href="/house/?floor=3">3 этаж</a>
        <a class="button-black button-floor" data-floor="4" href="/house/?floor=4">4 этаж</a>
        <a class="button-black" href="#">скачать</a>
    </div>


    <div class="floor-wrapper">
        <?php
        if ($floor == 0) {
            include get_template_directory() . '/house/floor-0-svg.php';
        }
        elseif ($floor < 4) {
            include get_template_directory() . '/house/floor-1-svg.php';
        } else {
            include get_template_directory() . '/house/floor-4-svg.php';
        }
        ?>
    </div>


    <div class="content-plan">
        <?
        var_dump($number);
        $flatNum = ($floor - 1) * 3 + 1;
        $flatType = $floor != 4 ? '1-1' : '4-1';
        include get_template_directory() . '/house/flat-content.php';
        ?>
    </div>
    <p class="copyright">© West Villa 2017. All rights reserved.</p>
</div>
</div>

<script>
    $(function () {
        $("div.description ul li").click(function () {
            $(this)
                .siblings().removeClass("active").end()
                .andSelf().addClass("active");
            $(".tab-pane").removeClass("active")
            console.log($(".tab-pane"))
            var tabId = $(this).data("tab")
            $(tabId).addClass("active")
            console.log($(this).data("tab"))
        });
    });
</script>

<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/house-selection.js"></script>
</body>
