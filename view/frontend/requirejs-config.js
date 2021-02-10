/**
 * Mickael offers require js config.
 *
 * @category  Mickael
 * @package   Mickael\Offers
 * @author    Mickael BAILLOT <mickael.baillot@gmail.com>
 */
var config = {
    paths: {
        'slick': "Mickael_Offers/js/slick.min"
    },
    map: {
        '*': {
            "slickSlider": "Mickael_Offers/js/slick-slider"
        }
    },
    shim: {
        slick: {
            deps: ['jquery']
        }
   }
};
