$(document).ready(function() {
    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

    //------- Niceselect  js --------//

    if (document.getElementById("default-select")) {
        $('select').niceSelect();
    };
    if (document.getElementById("default-select2")) {
        $('select').niceSelect();
    };
    if (document.getElementById("service-select")) {
        $('select').niceSelect();
    };

    //------- Lightbox  js --------//

    $('.img-gal').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    //------- Superfish nav menu  js --------//

    $('.nav-menu').superfish({
        animation: {
            opacity: 'show'
        },
        speed: 2000
    });



    //------- Owl Carusel  js --------//

    $('.active-hot-deal-carusel').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayHoverPause: true,
        lazyLoad: true,
        animateOut: 'fadeOut',
        smartSpeed:500,
        margin:10,
        dots: true,
        nav: true,
        navText : ["<i class='fa fa-chevron-left mobile'></i>","<i class='fa fa-chevron-right mobile'></i>"]
    });

     $('.active-testimonial').owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            autoplayHoverPause: true,
            smartSpeed:500,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1,
                },
                992: {
                    items: 3,
                }
            }
        });

        $('.single-destination-active').owlCarousel({
                items: 3,
                loop: false,
                margin: 20,
                autoplayHoverPause: true,
                smartSpeed:500,
                autoplay: true,
                nav: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    200: {
                        items: 1
                    },
                    500: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    }
                }
            });

    //------- Mobile Nav  js --------//
    
    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });
        //$mobile_nav.find('> ul').attr({
        //    'class': '',
        //    'id': ''
        //});
        $('body .main-menu').append($mobile_nav);
        $('body .main-menu').prepend('<button type="button" id="mobile-nav-toggle"><i class="fas fa-bars"></i></button>');
        $('#mobile-nav').prepend('<button type="button" id="mobile-nav-close"><i class="fas fa-times"></i></button>');

        $(document).on('click', '#mobile-nav-toggle', function(e) {
            $('#mobile-nav').slideDown({
                easing: "easeInQuad"
            });
        });

        $(document).on('click', '#mobile-nav-close', function(e) {
            $('#mobile-nav').slideUp({
                easing: "easeInQuad"
            });
        });

    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    //------- Smooth Scroll  js --------//

    $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-fixed')) {
                        top_space = top_space;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
                    $('#mobile-body-overly').fadeOut();
                }
                return false;
            }
        }
    });

    $(document).ready(function() {

        $('html, body').hide();

        if (window.location.hash) {

            setTimeout(function() {

                $('html, body').scrollTop(0).show();

                $('html, body').animate({

                    scrollTop: $(window.location.hash).offset().top - 108

                }, 1000)

            }, 0);

        } else {

            $('html, body').show();

        }

    });


    jQuery(document).ready(function($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('nav a[href="' + path + '"]');
        // Add active class to target link
        target.addClass('menu-active');
    });

    $(document).ready(function() {
        if ($('.menu-has-children ul>li a').hasClass('menu-active')) {
            $('.menu-active').closest("ul").parentsUntil("a").addClass('parent-active');
        }
    });




    //------- Header Scroll Class  js --------//

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

});
