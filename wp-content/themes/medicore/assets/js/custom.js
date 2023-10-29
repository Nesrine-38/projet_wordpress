/*--------------------------------------------------
Project:        Medicous
Version:        1.0
Author:         Company Name
-----------------------------------------------------

    JS INDEX
    ================================================
    * preloader js
    * sticky menu js
    * slick nav 
    * slick icon slider
    * testimonial slider
    * slick icon slider
    * bottom to top
    * Isotop with ImagesLoaded
    * ACCORDION WITH TOGGLE ICONS
    ================================================*/

(function ($) {
    "use strict";
    var $main_window = $(window);
    /*====================================
        preloader js
      ======================================*/
    $main_window.on('load', function () {
        $('#preloader').fadeOut('slow');
    });
    /*====================================
        sticky menu js
      ======================================*/
    var windows = $(window);
    var sticky = $('.header-fixed');
    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        if (scroll < 50) {
            sticky.removeClass('stick');
        } else {
            sticky.addClass('stick');
        }
    });

    /*====================================
        slick nav
    ======================================*/
    var logo_path = jQuery('.mobile-menu').data('logo');
    var logo_link = jQuery('.mobile-menu').data('link');
    var logo_type = jQuery('.mobile-menu').data('type');
    let logo;

    if (logo_type === 'text') {
      logo = '<a href="' + logo_link + '"></a>';
    }else {
      logo = '<a href="' + logo_link + '"><img src="' + logo_path + '" class="img-fluid" alt="logo"></a>';;
    }

    jQuery('.navbar-nav').slicknav({
        appendTo: '.mobile-menu',
        removeClasses: true,
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"><i/>',
        openedSymbol: '<i class="fa fa-angle-down"><i/>',
        brand: logo
    });

    function medicore_toggle_icon_burger() {
        const list = document.querySelectorAll(".slicknav_nav li a");
            // get first element to be focused inside modal
            const firstFocusableElement = document.getElementById('slicknav_btnn');
            const logo = document.querySelector('.navbar-brand');
            const firstFocusableElementclass = document.querySelector('.slicknav_collapsed');
            // get last element to be focused inside modal
            const last = list[list.length - 1];
            const lastFocusableElement = last;
            document.addEventListener('keydown', function (e) {
                let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
                if (!isTabPressed) {
                    return;
                }
                if(event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElement) {               
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
                if(event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElementclass) {               
                    logo.focus();
                    e.preventDefault();
                }

                // if shift key pressed for shift + tab combination
                if (e.shiftKey) {
                    if (document.activeElement === firstFocusableElement) {
                        lastFocusableElement.focus();
                        e.preventDefault();
                    }
                } else {
                    if (document.activeElement === lastFocusableElement) {
                        firstFocusableElement.focus();
                        e.preventDefault();
                    }
                }
            });
    }
    medicore_toggle_icon_burger();
   

    /*====================================
               Isotop with ImagesLoaded
    ======================================*/
    var isotopFilter = $('.isotop-filter');
    var isotopGrid = $('.isotop-grid');
    var isotopGridMasonry = $('.isotop-grid-masonry');
    var isotopGridItem = '.isotop-item';
    /*-- Images Loaded --*/
    isotopGrid.imagesLoaded(function () {
        /*-- Filter List --*/
        isotopFilter.on('click', 'button', function () {
            isotopFilter.find('button').removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            isotopGrid.isotope({
                filter: filterValue
            });
        });
        /*-- Filter Grid Layout FitRows --*/
        isotopGrid.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'fitRows',
            masonry: {
                columnWidth: '.isotop-grid',
            }
        });
        /*-- Filter Grid Layout Masonary --*/
        isotopGridMasonry.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'masonry',
            masonry: {
                columnWidth: 1,
            }
        });
    });

    /*====================================
        masonry-item
    ======================================*/
    $('.masonry-item').imagesLoaded(function () {
        $('.masonry-item').isotope({
            itemSelector: '.masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.masonry'
            }
        });
    });
    
    /*====================================
        slick  slider
    ======================================*/
    $('.hero-slide').slick({
        infinite: true,
        dots: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

   
    /*====================================
        bottom to top
    ======================================*/
    var btn = $('#btn-to-top');
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
     
    jQuery(document).ready(function() {
        jQuery(".navbar-nav").accessibleDropDown();
    });
    jQuery.fn.accessibleDropDown = function () {
        var el = jQuery(this);
        /* Make dropdown menus keyboard accessible */
        jQuery("a", el).focus(function() {
            jQuery(this).parents("li").addClass("force-show");
        }).blur(function() {
            jQuery(this).parents("li").removeClass("force-show");
        });
    }
})(jQuery);