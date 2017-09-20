$(function () {
    $(document).on('click', ".button-floor", function (event) {
        event.preventDefault();

        var floor_num = $(this).data('floor')
        $.ajax({
            method: "get",
            url: "http://www.west-villa.com.ua/floor-ajax/?tEST=888",
            data: {
                floor: floor_num
            }
        })
            .done(function (html) {

                $('.floor-wrapper').empty();
                $('.floor-wrapper').append(html);
                $(".wrapper-frame").animate({
                    scrollTop: $('.floor-wrapper').position().top
                }, 500);


                var flatTypePrefix = 0;

                if(floor_num < 4 && floor_num > 0){
                    flatTypePrefix = 1;
                }
                if(floor_num > 3){
                    flatTypePrefix = 4;
                }
                var params =
                    {
                        floor: floor_num,
                        flattype: flatTypePrefix+ '-1',
                        flatnum: '55',
                        noAutoScroll: true
                    };
                getFlat(params);
            });
    });   // end end end end end end end end end end end end end end end end end end end end end end end end end end


    $(document).on('click', ".flat-button", function () {
        var $this = $(this);
        var $floor = $this.data("floor")
        var $flatType = $this.data("flattype")
        var $flatNum = $this.data("flat")
        var $number = $this.data("number")
        console.log($number);
        var params =
            {
            floor: $floor,
            flattype: $flatType,
            flatnum: $flatNum,
            number: $number
           };

        getFlat(params)
});


// funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy funkciy
    function getFlat(params2) {
        $.ajax({
            method: "get",
            dataType: "html",
//                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            url: "http://www.west-villa.com.ua/flat-ajax/",
            data: params2
        })
            .done(function (msg) {
                $('.content-plan').empty();
                $('.content-plan').append(msg)
                // console.log(params2)
               if(!params2.noAutoScroll){
                   $(".wrapper-frame").animate({
                       scrollTop: $('.content-plan').position().top
                   }, 500);
               }

            });
    }

})