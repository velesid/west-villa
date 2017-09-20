/**
 * Created by User on 22.08.2017.
 */
$(document).ready(function () {
    var owl = $(".owl-carousel");

    owl.owlCarousel({
        responsive: {
            0: {
                items: 2,
                nav: true,
                loop: false
            },
            600: {
                items: 2,
                nav: true,
                loop: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        },
        items: 2,
        loop: false,
        margin: 0,
        responsiveClass: true,
        center: false,
        dots: false,
        rewind: false,
        dotData: true,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        autoWidth: false,
        autoHeight: false,
        smartSpeed: 1000,
        thumbsPrerendered: true,
        animateOut: 'fadeInRightBig',
        animateIn: 'fadeOutLeftBig',
        touchDrag: true,
        mouseDrag: true,
        navElement:'div',
        navigation: true,
        navText:['<div class="prev-button">&#10510;</div>','<div class="next-button">&#10511;</div>']
    });

});

