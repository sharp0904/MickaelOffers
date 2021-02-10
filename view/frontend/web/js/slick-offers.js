/**
* Mickael slick-offers.js.
*
* @category  Mickael
* @package   Mickael\Offers
* @author    Mickael Baillot <mickael.baillot@gmail.com>
*/
define([
  'jquery',
  'slick',
  'domReady!'
], function ($) {
  'use strict';

  return function (config, element) {
    initSlickReviews();

    function initSlickReviews() {
      $('.slick-mickaeloffers').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
      });
    }
  }
});
