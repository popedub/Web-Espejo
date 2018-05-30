/* eslint-disable */
import infiniteScroll from 'infinite-scroll/dist/infinite-scroll.pkgd.min';
//import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';
var Masonry = require('masonry-layout');
var InfiniteScroll = require('infinite-scroll');
//var imagesLoaded = require('imagesloaded');
/* eslint-enable */


export default {
  init() {
    // JavaScript to be fired on the home page


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable */
    jQuery(window).on('load', function () {
      /* eslint-enable */
      //container
      var $container = $('.grid');
      //masonry
      $container.masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        initLayout: false,
      });
      $container.masonry('on', 'layoutComplete', function () {
        //console.log('layout is complete');
      });
      $container.imagesLoaded(function () {
        $container.masonry();
      });

      var msnry = $container.data('masonry');
      InfiniteScroll.imagesLoaded = imagesLoaded;
      $container.infiniteScroll({
        // options
        path: '.nav-previous a',
        append: '.post',
        hideNav: '.posts-navigation',
        outlayer: msnry,
        //debug: true,
      });
    });


  },
};
