var storychapter = 0;
var slideshow = false;
$(document).ready(function() {
    if (isRetina() == true) {
        $('#hero-slides > img').each(function() {
            var imgName = $(this).attr('src');
            var newimgName = imgName.replace('.png', '@2x.png');
            $(this).attr('src', newimgName);
        });
    }
    if (!is_touch_device()) {
        $("#hero-slides").slidesjs({
            play: {
                active: true,
                effect: "slide",
                interval: 4000,
                auto: true,
                swap: false,
                pauseOnHover: true,
                restartDelay: 9999
            },
            navigation: {
                active: true
            },
            pagination: {
                active: false,
                effect: "slide"
            },
            width: 512,
            height: 320
        });
    } else {
        $("#hero-slides").slidesjs({
            play: {
                active: false,
                effect: "slide",
                interval: 4000,
                auto: false,
                swap: false,
                pauseOnHover: false,
                restartDelay: 2500
            },
            navigation: {
                active: false
            },
            pagination: {
                active: false,
                effect: "slide"
            },
            width: 512,
            height: 320
        });
    }
    $("#tour-slides").slidesjs({
        play: {
            active: true,
            effect: "slide",
            interval: 6000,
            auto: true,
            swap: false,
            pauseOnHover: true,
            restartDelay: 2500
        },
        navigation: {
            active: true
        },
        pagination: {
            active: true,
            effect: "slide"
        },
        callback: {
            complete: function(num) {
                slide_caption(num);
            }
        },
        width: 859,
        height: 500
    });
    home_resize();
    if (!is_touch_device()) {
        $('#features').win_scroll(function() {
            $('#email > .feature-illustration').addClass('do_animate');
            $('#automation > .feature-illustration').addClass('do_animate');
            $('#sales > .feature-illustration').addClass('do_animate');
        });
    }
    $('#testimonials .testimonial-avatar li').click(function() {
        var index = $(this).attr('id');
        $('.testimonial-list li').removeClass('ac_block');
        $('.testimonial-list [data-test=' + index + ']').addClass('ac_block');
        $('.testimonial-avatar li').removeClass('active');
        $(this).addClass('active');
    });
    if (!is_touch_device()) {
        $('#testimonials').win_scroll(function() {
            $('#support-map').addClass('do_animate');
        });
    }
    $(window).resize(function() {
        home_resize();
    });
    $('input[name=email]').on('blur', function() {
        $(this).mailcheck({
            suggested: function(element, suggestion) {
                $("#mailcheck-email").show();
                $("#mailcheck-email a.suggestion").unbind('click').click(function(e) {
                    element.val(suggestion.full);
                    $("#mailcheck-email").hide();
                    return false;
                }).html(suggestion.full);
            },
            empty: function(element) {}
        });
    });
    Mailcheck.defaultTopLevelDomains.push('com.au');
});

function slide_caption(slide) {
    var alt = $('#tour-slides #' + slide).attr('alt');
    var desc = alt.split("|");
    var title = desc[0];
    var body = desc[1];
    $('.tour-caption > .title').html(title);
    $('.tour-caption > p').html(body);
}

function home_resize() {
    var tourimgheight = $('#tour-slides img:first-of-type').height() + 60;
    $('.ac_home-tour').height(tourimgheight);
    $('#tour-slides img:first-of-type').load(function() {
        tourimgheight = $('#tour-slides img:first-of-type').height() + 60;
        $('.ac_home-tour').height(tourimgheight);
    });
    if (winWidth <= 980) {} else if (slideshow == true) {}
};
var waitForFinalEvent = (function() {
    var timers = {};
    return function(callback, ms, uniqueId) {
        if (!uniqueId) {
            uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
            clearTimeout(timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();