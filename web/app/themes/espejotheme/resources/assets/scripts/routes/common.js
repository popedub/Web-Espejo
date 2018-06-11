export default {
  init() {
    // JavaScript to be fired on all pages
    $('#menu-item-132 > a').click(function () {
      $('.sub-menu').toggleClass('show');
    });
    if ($('.sub-menu li').hasClass('current-menu-item')) {
      $('.sub-menu').toggleClass('show');
      $('.sub-menu li.current-menu-item a').wrapInner('<span></span>');
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
