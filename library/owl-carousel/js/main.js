$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:false,
        margin:0,
        responsiveClass:true,
        center:false,
        dots:false,
        rewind:false,
        dotData:true,
        autoplay:false,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        autoWidth: false,
        items:1,
        autoHeight:false,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                //items: 5,
                nav: false,
                loop: false
            }
    },
        navText:['+++++','/////'],
    navElement:'span',
            });
    var soundLinkSoundTick = $("#sound-tick")[0];
    var soundSlide = $("#sound-slide")[0];

    $(".cls_border.clb4").hover(function(){
        if(!$($(".owl-item")[0]).hasClass("active")){
            soundSlide.play();
        }

        $(".owl-prev").trigger("click");

    });

    $(".cls_border.clb2").hover(function(){

        if(!$($(".owl-item")[1]).hasClass("active")) {
            soundSlide.play();
        }
        $(".owl-next").trigger("click");


    });

       $(".blocks.block1").mouseenter(function() {
        soundLinkSoundTick.play();
    });



});






