(function ($) {
    "use strict";

    var minimumWidth;
    if (Modernizr.mq('(min-width: 0px)')) {
        minimumWidth = function (width) {
            return Modernizr.mq('(min-width: ' + width + 'px)');
        }
    } else {
        minWidth = function (width) {
            return $window.width() >= width;
        }
    };


    // Sticky Navbar
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 300 & minimumWidth(1200)) {
            $(".fbt_sticky_nav").addClass("sticky__nav");
        } else {
            $(".fbt_sticky_nav").removeClass("sticky__nav");
        }
        if (scroll > 400 & minimumWidth(1200)) {
            $(".fbt_sticky_nav").addClass("nav_offset");
        } else {
            $(".fbt_sticky_nav").removeClass("nav_offset");
        }
        if (scroll > 500 & minimumWidth(1200)) {
            $(".fbt_sticky_nav").addClass("scrolling_nav");
        } else {
            $(".fbt_sticky_nav").removeClass("scrolling_nav");
        }
    });


    // Search Form
    SearchFormInit();
    function SearchFormInit() {
        $(".search-trigger").on('click', function () {
            $("#search").addClass("active").find(".search").focus();
        });
        $("#search").on('click', function () {
            $(this).find(".search").focus();
        });
        $("#close").on('click', function () {
            $("#search").removeClass("active");
        });
    };


    // Back to TOP
    $().UItoTop({
        easingType: 'easeOutQuart'
    });


    // Lazyload Image
    $('.lazyloaded').lazy();


    // Toogle Comments
    (function () {
        var commentListTrigger = $('.fbt-comment-button, .fbt_bottom_toogle'),
            commentListTriggerIcon = $('.fbt-comment-button').find('span'),
            commentListTriggerClose = $('.fbt_bottom_toogle').find('span'),
            commentListBox = $('.comment-list');
        commentListTrigger.on('click', function (e) {
            e.preventDefault();
            commentListTriggerIcon.toggleClass('fbt-close-icon');
            commentListTriggerClose.toggleClass('fbt_hide_comments');
            commentListBox.slideToggle();
        });
    })();

})(jQuery);


// Scrolling Sidebar
function openNav() {
    var el = document.getElementById("sidebar-wrapper"),
        $contentOverlay = document.getElementById("fbt-content-overlay"),
        bodyClass = document.querySelector('body');
    el.classList.add("openSidebar");
    $contentOverlay.classList.add("activeOverlay");
    el.classList.remove("closeSidebar");
    bodyClass.classList.add("sidebar-visible");
};
function closeNav() {
    var el = document.getElementById("sidebar-wrapper"),
        $contentOverlay = document.getElementById("fbt-content-overlay"),
        bodyClass = document.querySelector('body');
    el.classList.remove("openSidebar");
    $contentOverlay.classList.remove("activeOverlay");
    bodyClass.classList.remove("sidebar-visible");
};


// Slider Caption Animation
(function ($) {
    var carouselContainer = $('#TopSliderPosts');
    function toggleH() {
        $('.slider-title').hide();
        var caption = carouselContainer.find('.active').find('.slider-title').addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
            function () {
                $(this).removeClass('animated fadeIn')
            });
        caption.slideToggle();
    };
    function toggleC() {
        $('.slider-button').hide();
        var button = carouselContainer.find('.active').find('.slider-button').addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
            function () {
                $(this).removeClass('animated fadeIn')
            });
        button.slideToggle();
    };
    carouselContainer.carousel().on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel').on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
})(jQuery);


// Internet Explorer - Edge thumbnails
if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    jQuery('.fbt-post-thumbnail a img, .PopularPosts a img, .RecentPosts a img, .FeaturedPost a img').addClass('d-none').each(function () {
        var t = jQuery(this),
            s = 'url(' + t.attr('data-src') + ')',
            p = t.parent(),
            d = jQuery('<div class="fbt-resize"></div>');
        p.append(d);
        d.css({
            'background-image': s
        });
        t.hide();
    });
};