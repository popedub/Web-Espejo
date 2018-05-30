/* eslint-disable */
//import lightGallery from 'lightgallery/dist/js/lightgallery-all.min';
/* eslint-enable */
export default {
  init() {
    // JavaScript to be fired on all pages
    // $('.mejs-container').attr('style', function (i, style) {
    //   console.log('hola');
    //   return style && style.replace(/display[^;]+;?/g, '');

    // });
    //$('#mep_4').css('max-width','100%');
  },
  finalize() {
    // JavaScript to be fired on single page, after page specific JS is fired
    $(document).ready(function() {
      $('#ligthbox').lightGallery({
        share: false,
        zoom: false,
        thumbnail: false,
        fullScreen: false,
        download: false,
        counter: false,
        autoplay: false,
        autoplayControls: false,
        nextHtml: 'Siguiente',
        prevHtml: 'Anterior',
      });

    });

  },
};
