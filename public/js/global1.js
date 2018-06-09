var winWidth = 0;
var winHeight = 0;
var winScrollPos = 0;
var mobile = false;
var navOpen = false;
$(document).ready(function() {
    if ($('.ac_section').length) {
        var url = window.location.href;
        var pathArray = window.location.pathname.split('/');
        $('.ac_section-nav a#nav_' + pathArray[2] + '').addClass('active');
        if (pathArray[2] == "") {
            $('.ac_section-nav a#nav_' + pathArray[1] + '').addClass('active');
        }
    }
    var is_touch = is_touch_device();
    if (!is_touch) {
        $('body').addClass('no-touch');
    } else {
        $('body').addClass('touch');
    }
    if ($('video').length && is_touch && !$.browser.msie) {
        $('video').attr('controls', true);
    }
    win_resize(false);
    $(window).resize(function() {
        win_resize(false);
    });
    if (mobile) {}
    $('.ac_header-nav-control').click(function() {
        mobile_nav();
    });
    $('.ac_footer-mobile-nav select').change(function() {
        var loc = $(".ac_footer-mobile-nav select option:selected").val();
        if (loc != '--' && loc != 'status') {
            window.location.href = '/' + loc + '/';
        }
        if (loc == 'status') {
            window.location.href = 'http://status.activecampaign.com';
        }
    });
    $('#blog-categories').change(function() {
        var loc = $("#blog-categories option:selected").val();
        if (loc != '--') {
            window.location.href = loc;
        }
    });
});

function mobile_nav() {
    var nav = $('#ac_header-nav');
    if (navOpen == false) open_nav();
    else close_nav();

    function open_nav() {
        nav.addClass('ac_block');
        $('nav, .ac_body-wrapper').addClass('side-menu');
        nav.css('height', winHeight);
        navOpen = true;
        $('nav, .ac_body-wrapper').prepend('<div class="body_overlay">&nbsp;</div>');
        $('.body_overlay').click(function() {
            close_nav();
        });
    }

    function close_nav() {
        nav.removeClass('ac_block');
        $('nav, .ac_body-wrapper').removeClass('side-menu');
        navOpen = false;
        $('.body_overlay').remove();
        $('.body_overlay').unbind();
    }
}

function win_resize(debug) {
    winWidth = $(document).width();
    winHeight = $(document).height();
    var nav = $('#ac_header-nav');
    if (debug) console.log("Window size: " + winWidth + " x " + winHeight);
    if (winWidth <= 980) {
        mobile = true;
        $('body').addClass('mobile-nav');
        if (nav.hasClass('ac_block')) nav.removeClass('ac_block');
    } else {
        mobile = false;
        $('body').removeClass('mobile-nav');
        $('nav, .ac_body-wrapper').removeClass('side-menu');
        nav.css('height', 'initial');
    }
    if ($('.ac_section').length) {
        var xpos = $('.ac_section-wrap').offset().left;
        $('.title-pre').width(xpos);
    }
}
(function($) {
    $.fn.win_scroll = function(callback, offset) {
        offset = (typeof offset === 'undefined') ? '380' : offset;
        var element = $(this);
        var viewport = $(window).height();
        if (viewport >= 900) {
            offset = 550;
        }
        var elementYPos = element.offset().top;
        var scrollPos = $(window).scrollTop();
        var window_offset = elementYPos - scrollPos - offset;
        $(window).scroll(function() {
            scrollPos = $(window).scrollTop();
            if (scrollPos >= window_offset) {
                if (typeof callback == 'function') {
                    callback.call(this);
                }
            }
        });
    };
}(jQuery));

function pinIt(element) {
    var ypos = $(element).offset().top;
    $(window).scroll(function() {
        scrollPos = $(window).scrollTop();
        if (scrollPos >= ypos) {
            $(element).addClass('pinned');
            $('body').addClass('pinned_content');
        } else {
            $(element).removeClass('pinned');
            $('body').removeClass('pinned_content');
        }
    });
}

function isRetina() {
    if (window.matchMedia) {
        var mq = '(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 2dppx)';
        if (window.devicePixelRatio >= 2) {
            return true;
        }
        if (window.matchMedia && window.matchMedia(mq).matches) {
            return true;
        }
        return false;
    }
}

function is_touch_device() {
    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch || $.browser.msie) {
        return true;
    } else {
        return false;
    }
};