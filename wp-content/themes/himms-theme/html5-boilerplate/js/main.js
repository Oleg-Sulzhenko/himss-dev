jQuery(function() {
    jQuery('.menu-icon').click(function() {
        if (jQuery(this).hasClass('open')) {
            jQuery(this).removeClass('open');
            jQuery('.menu').hide();
        } else {
            jQuery(this).addClass('open');
            jQuery('.menu').show();
        }
    });
});