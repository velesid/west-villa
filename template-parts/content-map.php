<?php
/*
Template Name: Map
*/
?>
<?php include_once( get_template_directory() . '/template-parts/frame-top.php') ?>


    <div class="map-wrapper">
        <div class="background"><img src="<?= get_template_directory_uri(); ?>/library/photo/family.png" /></div>
        <div class="path wobble">
            <div class="points logo"><img src="<?= get_template_directory_uri(); ?>/library/photo/logo-map.png" />

                <div class="line p1">
                    <a href="#" class="point"><span>14,5 км<i>Вокзальная площадь</i></span></a>
                </div>
                <!--                <div class="line p2 fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">-->
                <!--                    <a href="#" class="point"><span>0,65 км<i>школа № 72</i></span></a>-->
                <!--                </div>-->
                <div class="line p3">
                    <a href="#" class="point"><span>5.8 км.<i>Лавинна Билычи</i></span></a>
                </div>
                <div class="line p4">
                    <a href="#" class="point"><span>1.8 км<i> метро Академгородок</i></span></a>
                </div>
                <div class="line p5">
                    <a href="#" class="point"><span>2.5 км<i>проспект Победы</i></span></a>
                </div>
                <div class="line p6">
                    <a href="#" class="point invers"><span>0.6 км<i>Озеро</i></span></a>
                </div>
                <!--                <div class="line p7 wow fadeIn" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;">-->
                <!--                    <a href="#" class="point invers"><span>1.2 км<i>Велика кишеня</i></span></a>-->
                <!--                </div>-->
                <div class="line p8">
                    <a href="#" class="point invers"><span>0,65 км<i>школа № 72</i></span></a>
                </div>
                <div class="line p9" >
                    <a href="#" class="point invers"><span>10 м<i>Лес</i></span></a>
                </div>

            </div>
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
                        zoom: 16,
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

        <?php include_once( get_template_directory() . '/template-parts/frame-bottom.php') ?>
