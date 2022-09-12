(function ($) {
    "use strict";
    // Page loading
    $(window).on('load', function () {
        $('.preloader-active').delay(450).addClass('slow');
       
    });
    /*-----------------
        Menu Stick
    -----------------*/
    var header = $('.sticky-bar');
    var win = $(window);
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass('stick');

        } else {
            header.addClass('stick');

        }
    });
 

    /*Carausel 2 columns*/
    function monst_carousel_two_items(){
 
        if($('.carausel-2-columns').length){
        var appendArrowsClassName =  '.carausel-2-columns-1-arrows'
        $(".carausel-2-columns").not('.slick-initialized').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="prevArrow"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg></span>',
            nextArrow: '<span class="nextArrow"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></span>',
            appendArrows: (appendArrowsClassName),
        });
    }
}

 /*Carausel 2 columns*/
 function monst_carousel_fade(){
 
    if($('.carausel-fade').length){
    var appendArrowsClassName =  '.carausel-fade-1-arrows'
    $(".carausel-fade").not('.slick-initialized').slick({
        slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            loop: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="prevArrow"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg></span>',
            nextArrow: '<span class="nextArrow"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></span>',
            appendArrows: (appendArrowsClassName),
            autoplay: true,
    });
}
}

 /*Carausel 2 columns*/
 function monst_carousel_fade_two(){
 
    if($('.carausel-fade-2').length){
    
    $(".carausel-fade-2").not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: true,
        arrows: false,
        autoplay: true,
    });
}
}
     /*client carouel 5 columns*/
 
function monst_client_carousel(){
 
    if($('.client_carousel').length){
 
    $(".client_carousel").not('.slick-initialized').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: false,
        autoplay: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        loop: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        
    });
}
}


    /*---------------------
        Mobile menu active
    ------------------------ */
    var $offCanvasNav = $('.mobile-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown_menu');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand">+</span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function (e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active_menu');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active_menu');
                $this.closest('li').siblings('li').removeClass('active_menu').find('li').removeClass('active_menu');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });

 

    /*------ Wow Active ----*/
    $( document ).ready(function() {
        new WOW().init();
    });


    /*---- CounterUp ----*/
    function monst_fun_count(){
        if($('.count-box').length){
            $('.count').counterUp({
                delay: 10,
                time: 2000
            });
        }
    }


    /*---- type_write js ----*/
    function monst_type_write_text(){
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = !1
    };
    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];
        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1)
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1)
        }
        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
        var that = this;
        var delta = 200 - Math.random() * 100;
        if (this.isDeleting) {
            delta /= 2
        }
        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = !0
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = !1;
            this.loopNum++;
            delta = 500
        }
        setTimeout(function() {
            that.tick()
        }, delta)
    };
    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period)
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.05em solid rgba(147, 197, 253)}";
        document.body.appendChild(css)
    }
}


function monst_faqsall() {
    var accordion = {
        init: function() {
            $('dd').filter(':nth-child(n+1)').addClass('hide');
            $('dt').on('click', this.show);
        },
        show: function() {
            var $this = $(this),
                $ddToShow = $this.next(),
                $ddToClose = $this.next().siblings('dd');
            $this.addClass('active');
            $this.siblings('dt').removeClass('active');
            $ddToShow.slideDown(200);
            accordion.hide($ddToClose);
        },
        hide: function(elem) {
            elem.slideUp(200);
        }
    };
    accordion.init();
}

/*-----------------------------
     light box
-----------------------------*/
function creote_light_box() {
    if ($('.lightbox-image').length) {
        $('.lightbox-image').fancybox({
            openEffect: 'fade',
            closeEffect: 'fade',
            helpers: {
                media: {}
            }
        });
    }
}
/*-----------------------------
     light box
-----------------------------*/
function creote_sidemenu() {
if($(".sidemenu_area").length) {
    //adding a new class on button element
    $('#side_menu_toggle_btn').on('click',function () {
        $('body').addClass('side_menu_toggled');   
    });
    //removing a existing class from button element
    $('#side_menu_toggle_btn_close').on('click',function () {
        $('body').removeClass('side_menu_toggled');
    });
}
}
    /* ==========================================================================
    Elementor front end start
    ========================================================================== */
    $(window).on('elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-single-banner-v1.default', monst_type_write_text);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-single-banner-v2.default', monst_type_write_text);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-single-banner-v2.default', monst_client_carousel);
        
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-fun-facts-v1.default', monst_fun_count);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-card-v1.default', monst_carousel_two_items);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-carousel-image-box-v1.default', monst_carousel_fade);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-carousel-image-box-v1.default', monst_carousel_fade_two);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-cleint-image-v1.default', monst_client_carousel);

        elementorFrontend.hooks.addAction('frontend/element_ready/monst-faqs-v1.default', monst_faqsall);
        elementorFrontend.hooks.addAction('frontend/element_ready/monst-faqs-v1.default', creote_light_box);
        
        
    });



    jQuery(window).on('load', function() {
        (function($) {
            monst_fun_count();
            creote_sidemenu();
        })(jQuery);
    });


})(jQuery);