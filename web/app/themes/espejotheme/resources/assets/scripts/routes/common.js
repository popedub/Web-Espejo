export default {
  init() {
    // JavaScript to be fired on all pages
    $('#menu-item-132 a').click(function () {
      $('.sub-menu').toggleClass('show');
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
