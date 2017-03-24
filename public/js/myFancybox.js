$(document).ready(function() {
    // Change title type, overlay closing speed
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title : {
                    type : 'outside'
            },
            overlay : {
                    speedOut : 0
            }
        }
    });
});
