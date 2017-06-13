(function($) {
    
    "use strict";

    // ==================== Preloader
    function preloader_load() {
        if($('.preloader').length){
            $('.preloader').delay(300).fadeOut(500);
        }
    }

    // Bootstrap Carousel Speed
   

    // ==================== Progress Bar / Levels
    if($('.progress-levels .progress-box .bar-fill').length){
        $(".progress-box .bar-fill").each(function() {
            var progressWidth = $(this).attr('data-percent');
            $(this).css('width',progressWidth+'%');
            $(this).children('.percent').html(progressWidth+'%');
        });
    }

    // ==================== Navbar Scroll To Fixed
    $(document).ready(function() {
        $('.scrollingto-fixed').scrollToFixed();
        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];
            summary.scrollToFixed({
                marginTop: $('.scrollingto-fixed').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });

    // ====================Prelader
    function preloader() {
        var $preloader = $('#preloader');
        $preloader.delay(200).fadeOut('slow');
    }

    // ==================== Gallery Masonry Isotop And Other Gallery and Lightbox
    function masonryIsotop() {
        if ($('.masonry-gallery').length) {
            $('.masonry-gallery').isotope({
                layoutMode:'masonry'
            });
        }
        if($('.masonry-filter').length){
            $('.masonry-filter a').children('span').click(function(){
                var Self = $(this);
                var selector = Self.parent().attr('data-filter');
                $('.masonry-filter a').children('span').parent().removeClass('active');
                Self.parent().addClass('active');
                $('.masonry-gallery').isotope({ filter: selector });
                return false;
            });
    }
        
    /*================================ magnificPopup  ================================*/
    /* http://dimsemenov.com/plugins/magnific-popup/ // view-source:http://dimsemenov.com/plugins/magnific-popup/ */

    // lightbox image
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
          }
        });
    });




    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
    });


    //LighvtBox / Fancybox
    if($('.lightbox-image').length) {
      $('.lightbox-image').fancybox();
    }

    }


    // ==================== Parallax Backgrounds
    $.stellar({
       horizontalScrolling: false,
       responsive: true
    });

    // ==================== Price range slider
    



    // ==================== fitVids
    function fit_Vids() {
        $body.fitVids();
    }

    // ==================== YTplayer
    if($('.player').length) {
        $(".player").mb_YTPlayer();
    }

    // ==================== funfact animate number
    if($('.counting-nmbr').length){
        $('.counting-nmbr').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }

    // ==================== Accordions
    if($('.accordion-box').length){
       $('.accordion-box .acc-btn').click(function() {
        if($(this).hasClass('active')!==true){
                $('.accordion-box .acc-btn').removeClass('active');
            }
            
        if ($(this).next('.acc-content').is(':visible')){
                $(this).removeClass('active');
                $(this).next('.acc-content').slideUp(500);
            }
        else{
                $(this).addClass('active');
                $('.accordion-box .acc-content').slideUp(500);
                $(this).next('.acc-content').slideDown(500);    
            }
        });
    }

    // ==================== OWL CAROUSEL AND OTHER SLIDER SCRIPT 

    // Testimonial
    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: true,
            nav:false,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }


    // Owl-volunteer-carousel
    if($('.volunteer-carousel').length){
        $('.volunteer-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: true,
            nav:false,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    // Owl-donator-carousel
    if($('.donator-carousel').length){
        $('.donator-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: true,
            nav:false,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        })
    }

    // ==================== Scroll To top
    $(function () {
            $.scrollUp({
                scrollName: 'scrollUp', 
                scrollDistance: 300,       
                scrollFrom: 'top',          
                scrollSpeed: 700,           
                easingType: 'linear',   
                animation: 'fade',      
                animationSpeed: 200,      
                scrollTrigger: false,     
                scrollTarget: false,
                scrollImg: true,      
                scrollText: '', 
                scrollTitle: false,   
                scrollImg: false,   
                activeOverlay: false,
                zIndex: 2147483647, 
            });
        });


    // Range slider one
    $( ".slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 300 ],
            slide: function( event, ui ) {
                $( ".amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount" ).val( "$" + $( ".slider-range" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range" ).slider( "values", 1 ) );

    // Range slider two
    $( ".slider-range-two" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 400 ],
            slide: function( event, ui ) {
                $( ".amount-two" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-two" ).val( "$" + $( ".slider-range-two" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-two" ).slider( "values", 1 ) );

    // Range slider three
    $( ".slider-range-three" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 320 ],
            slide: function( event, ui ) {
                $( ".amount-three" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-three" ).val( "$" + $( ".slider-range-three" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-three" ).slider( "values", 1 ) );

    // Range slider four
    $( ".slider-range-four" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 420 ],
            slide: function( event, ui ) {
                $( ".amount-four" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-four" ).val( "$" + $( ".slider-range-four" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-four" ).slider( "values", 1 ) );

    // Range slider five
    $( ".slider-range-five" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 300 ],
            slide: function( event, ui ) {
                $( ".amount-five" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-five" ).val( "$" + $( ".slider-range-five" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-five" ).slider( "values", 1 ) );

    // Range slider six
    $( ".slider-range-six" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 380 ],
            slide: function( event, ui ) {
                $( ".amount-six" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-six" ).val( "$" + $( ".slider-range-six" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-six" ).slider( "values", 1 ) );

     // Range slider big
    $( ".slider-range-big" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 0, 320 ],
            slide: function( event, ui ) {
                $( ".amount-big" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
    $( ".amount-big" ).val( "$" + $( ".slider-range-big" ).slider( "values", 0 ) +
            " - $" + $( ".slider-range-big" ).slider( "values", 1 ) );
    



    


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
    $(document).on('ready', function() {
        // add your functions
        
    });
    
/* ==========================================================================
   When document is loading, do
   ========================================================================== */

    $(window).on('load', function() {
        // add your functions
        preloader_load();
        masonryIsotop();
    }); 


/* ==========================================================================
   When Window is resizing, do
   ========================================================================== */
    $(window).on('resize', function() {
        // add your functions
    });


})(window.jQuery);