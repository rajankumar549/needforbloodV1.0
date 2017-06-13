(function($){ //create closure so we can safely use $ as alias for jQuery

        $('.main_menu nav').meanmenu({
            meanScreenWidth: "991",
            meanMenuContainer: '.mobile-menu'
        }); 
    
})(jQuery);