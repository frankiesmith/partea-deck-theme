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

function toggleRecipeMenu() {
    if ($(this).scrollTop() > 300) {
        $(".recipe-menu").fadeIn();
    } else {
        $(".recipe-menu").fadeOut();
    }
}

$(window).scroll(toggleRecipeMenu);

$(toggleRecipeMenu);