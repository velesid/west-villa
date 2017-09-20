/**
 * Created by User on 29.08.2017.
 */
$(window).load(function() {
    setTimeout(function () {
        var preloader = document.getElementById('page-preloader');
        var contenton = document.getElementById('content-on');
        if( !preloader.classList.contains('done') )
        {
            preloader.classList.add('done');
        }
        if( !contenton.classList.contains('turn-on') )
        {
            contenton.classList.add('turn-on');
        }
    }, 2500);
});