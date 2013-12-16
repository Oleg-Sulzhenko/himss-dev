// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {
        };
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

// Place any jQuery/helper plugins in here.
jQuery(document).ready(function() {
    var onColorboxOpen = function() {
        jQuery('.popup-container').show();
    };
    var onColorboxClose = function() {
        jQuery('.popup-container').hide();
    };

    jQuery('.more-info-link').colorbox({
        inline: true,
        close: 'X',
        onOpen: onColorboxOpen,
        onClosed: onColorboxClose
    });
    jQuery('#events-tabs').tabulous({
        effect: 'scale' // scale / slideLeft / scaleUp / flip

    });

});