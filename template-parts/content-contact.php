<?php
/*Template Name: contact*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_image', favicon_image ); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'apple_touch_icon', apple_touch_icon ); ?>"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/map.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css"
          rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

<body class="page-loaded">

<a href="http://www.west-villa.com.ua/menu/">
    <div class="start-page">
        <img src="http://www.try.arpik.net/wp-content/themes/structure/library/photo/button-close.svg" alt="">
    </div>
</a>

<div class="wrapper-frame">
<div class="map-wrapper">
    <div class="background"><img src="<?= get_template_directory_uri(); ?>/library/photo/vest-willa-contact.png" /></div>
    <div class="path wobble size">
        <img class="logo-contact" src="<?= get_template_directory_uri(); ?>/library/photo/pre-logo.png" alt="" />
        <div class="c-title">
            <h1>КОНТАКТЫ</h1>
        </div>
        <div class="c-address">
            <p>Украина, г. Киев, ул. Обуховская 122</p>
            <p>тел. (068)-948-11-52</p>
        </div>
         <div class="contact-title">Отправьте сообщение: Наши специалисты <br />свяжутся с Вами  в ближайшее время</div>
            <?php echo do_shortcode('[contact-form-7 id="75503" title="Contact-form"]'); ?>
    </div>

    <!--        --- Map Content ----->
    <div class="map-content size">
        <div id="map"></div>
        <script>

            var map_styles = [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#636371"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#060610"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#636371"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#070707"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#636371"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.rail",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                }
            ];


            function initMap() {

                var styleArray = [{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]
                var map = new google.maps.Map(document.getElementById('map'), {
                    styles: map_styles,
                    draggable: false,
                    scrollwheel: false,
                    zoom: 17,
                    center: {lat: 50.465871, lng: 30.331461}
                });
                var image = {
                    url: 'http://www.west-villa.com.ua/wp-content/themes/structure/library/photo/geo.png',
                    size: new google.maps.Size(40, 40),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(10, 40),
                    scaledSize: new google.maps.Size(40, 40)
                };

                var marker = new google.maps.Marker({
                    position: {lat: 50.465871, lng: 30.331461},
                    map: map,
                    title: 'West Villa',
                    icon: image,
                    animation: google.maps.Animation.BOUNCE
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA92k-MCO-YChnbwrg5s24ICAgWLj5fZDs&callback=initMap">
        </script>

        <script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.line').addClass('fadeIn');
            });
        </script>

    </div>

</div>
</body>
</html>