$(function() {
  var h1Height = $('h1').height(); // get height of h1 tag
  var toptabsHeight = $('ul.toptabs').height(); // get height of top tabs
  var total = h1Height + toptabsHeight; //total height of h1 and toptabs
  $('.sidetabs li a').click(function (e) {
      e.preventDefault();
      var target = $(this.hash);
      $('html, body').animate({
          scrollTop: target.offset().top - total // scroll to h3 minus total height of h1 and top tabs
      }, 1000);
      return false;
  });
});