$(document).ready(function () {
    // console.log("ready!");

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        // nav: true,
        items: 1
    });

    let fade_page = 1;
    let max_fade_page = 3;

    $('.arrow-left').click(function () {
        old_fade = fade_page;

        fade_page--;
        if (fade_page <= 0) {
            fade_page = max_fade_page;
        }

        $('#fade_page' + old_fade).fadeOut(700, function () {
            // alert('animation completed');
            $('#fade_page' + fade_page).fadeIn(700);
        })
    });

    $('.arrow-right').click(function () {
        old_fade = fade_page;

        fade_page++;
        if (fade_page > max_fade_page) {
            fade_page = 1;
        }

        $('#fade_page' + old_fade).fadeOut(700, function () {
            // alert('animation completed');
            $('#fade_page' + fade_page).fadeIn(700);
        })
    });

    // $('#neraLoginModal').modal('show');
    // modal open 
    $('#open_login_modal').click(function () {
        $('#neraLoginModal').modal('show');
    })

});