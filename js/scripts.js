(function($) {
    Drupal.behaviors.slideShow = {
        attach: function(context) {
            $(document).ready(function() {
                $(".field-name-field-slides").flexslider({
                    animation: "slide",
                    smoothHeight: true, 
                    slideshow: false,
                });
            });
        }
    }
}(jQuery));