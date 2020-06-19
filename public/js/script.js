 function getCookie(name) {
                    var matches = document.cookie.match(new RegExp(
                      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                      ));
                    return matches ? decodeURIComponent(matches[1]) : undefined;
                  }
$(document).ready(function(){

    var swiperStories = new Swiper('.swiper-stories', {
      //  initialIndex: (getCookie('round')-1),
        slidesPerView: 6,
        mousewheel: true,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-stories-arrow__next',
            prevEl: '.swiper-stories-arrow__prev'
        },
        breakpoints: {
            1270: {
                simulateTouch: true,
                slidesPerView: 5
            },
            1015: {
                slidesPerView: 4
            },
            800: {
                slidesPerView: 3
            },
            700: {
                slidesPerView: 5
            },
            640: {
                slidesPerView: 4
            },
            540: {
                slidesPerView: 3
            },
            360: {
                slidesPerView: 3
            },
            340: {
                slidesPerView: 2
            }
        }
    });
    var swiperRound = new Swiper('.swiper-round', {
        initialSlide: (getCookie('round')-1),
        navigation: {
            nextEl: '.swiper-button-next-round',
            prevEl: '.swiper-button-prev-round'
        },
        speed: 500,
        simulateTouch: false
    });
    var swiperCheckIn = new Swiper('.swiper-check-in', {
        navigation: {
            nextEl: '.swiper-button-next-check-in',
            prevEl: '.swiper-button-prev-check-in'
        },
        autoHeight: true,
        speed: 500,
        simulateTouch: false
    });

    // glitch
    $( function() {
        $( ".glitch-img" ).mgGlitch({
            destroy : false,
            glitch: true,
            scale: true,
            blend : true,
            blendModeType : 'hue',
            glitch1TimeMin : 200,
            glitch1TimeMax : 400,
            glitch2TimeMin : 10,
            glitch2TimeMax : 100
        });
    });

    // mob nav open/close
    $('.open-nav').click(function (e){
        e.preventDefault();
        $('.block-nav').toggleClass('open');
    });
    $('.close-nav').click(function (){
        $('.block-nav').removeClass('open');
    });

    // wow
    new WOW().init();

    // file-upload
    $(".file-upload-photo input[type=file]").change(function(){
        var filenamephoto = $(this).val().replace(/.*\\/, "");
        $("#filename-photo").val(filenamephoto);
    });
    $(".file-upload-track input[type=file]").change(function(){
        var filenametrack = $(this).val().replace(/.*\\/, "");
        $("#filename-track").val(filenametrack);
    });

    // $('.button-rating').click(function () {
    //     $('.popup').show();
    //     $('body').addClass('fixed-field');
    // });

    $('.popup-rating-close__ico').click(function () {
        $('.popup').hide();
        $('body').removeClass('fixed-field');
    });

    $('.popup__substrate').click(function () {
        $('.popup').hide();
        $('body').removeClass('fixed-field');
    });
});
