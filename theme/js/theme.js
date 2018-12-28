jQuery(function() {

jQuery.fn.autoscroll = function(selector) {
        jQuery('html, body').animate({
            scrollTop: jQuery(this).offset().top
        }, 900);
    }

    jQuery('.arrow').on('click', function() {
        jQuery('.content').autoscroll();
    });
})

jQuery(document).ready(function() {
    jQuery(".hamburger-icon").on('click', function() {
        jQuery(".menu-wrapper").toggleClass("open");
    });
});

jQuery(document).ready(function() {
    var hamburger = jQuery('.hamburger-icon');
    hamburger.click(function() {
        hamburger.toggleClass('active');
        return false;
    });
});

/*Viewport Animations*/

jQuery(document).ready(function() {
    jQuery('.slide-big').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUpBig',
        offset: 200
       });
});

jQuery(document).ready(function() {
    jQuery('.wps-product-item').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.slideUp').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.zoom').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn zoomIn',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.fade-in-right').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.fade-in').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 400
       });
});

jQuery(document).ready(function() {
    jQuery('.flip-in').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated flipInX',
        offset: 400
       });
});

jQuery('.search-button').click(function(){
  jQuery(this).parent().toggleClass('open');
});