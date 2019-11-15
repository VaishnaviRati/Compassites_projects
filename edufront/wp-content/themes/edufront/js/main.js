$(document).ready(function() {
    $('body').scrollspy({
        target: ".navbar",
        offset: 100
    });

    // Add smooth scrolling on all links inside the navbar
    $("#topNavbar a, .navbar-brand").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1500, function() {
                window.location.hash = hash;
            });
        }
    });
});

// script for backgroung transition color changes

$(window).scroll(function() {

    // selectors
    var $window = $(window),
        $panel = $('.slide');
    $topnav = $('.topnav');

    var scroll = $window.scrollTop() + ($window.height() / 3);

    $panel.each(function() {
        var $this = $(this);
        var menucolor = $(this).data('color');
        if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

            // Remove all classes on body with color-
            $panel.removeClass(function(index, css) {
                return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
            });

            // Add class of currently active div
            $panel.addClass('color-' + $(this).data('color'));

            $topnav.addClass('color-' + menucolor);
        } else {
            $topnav.removeClass('color-' + menucolor);
        }
    });

}).scroll();