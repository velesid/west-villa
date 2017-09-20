jQuery(document).ready(function($) {
    var owl = $(".owl-carousel");

    owl.owlCarousel({
        loop: false,
        margin: 0,
        responsiveClass: true,
        center: true,
        dots: true,
        rewind: false,
        dotData: true,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        autoWidth: false,
        items: 1,
        autoHeight: false,
        smartSpeed: 1000,
        thumbsPrerendered: true,
        animateOut: 'fadeOutUpBig',
        animateIn: 'fadeInDownBig',
        touchDrag: false,
        mouseDrag: false
    });

    // owl.on('mousewheel', '.owl-stage', function (e) {
    //     if (e.originalEvent.deltaY>0) {
    //         owl.trigger('next.owl');
    //     } else {
    //         owl.trigger('prev.owl');
    //     }
    //     e.preventDefault();
    // });


    // owl.on('changed.owl.carousel', function () {
    //         // animateGallery();
    //     }
    // );

    function animateGallery() {

        $('.owl-carousel .owl-item .hidden-block').removeClass('fade-in-right');
        setTimeout(function () {
            $('.owl-carousel .owl-item.active .hidden-block').addClass('fade-in-right')
        }, 1);

        $('.owl-carousel .owl-item .shadow').removeClass('angle');
        setTimeout(function () {
            $('.owl-carousel .owl-item.active .shadow').addClass('angle')
        }, 1);

        $('.owl-carousel .owl-item .text-block').removeClass('fade-in-down');
        setTimeout(function () {
            $('.owl-carousel .owl-item.active .text-block').addClass('fade-in-down')
        }, 1);
    }

    $(window).load(function () {
        $('body').addClass('page-loaded');
    });
});

