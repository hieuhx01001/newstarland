/**
 * Created by kongdt on 2/26/17.
 */
var wpssclose_ = 0;
jQuery('#icon_label').click(function () {
    if (wpssclose_ == 1) {
        jQuery('#wpbs_slider').animate({
            left: '-=250'
        }, 400, function () {
            // Animation complete.
        });
        wpssclose_ = 0;
    } else {
        jQuery('#wpbs_slider').animate({
            left: '+=250'
        }, 400, function () {
            // Animation complete.
        });
        wpssclose_ = 1;
    }
});
