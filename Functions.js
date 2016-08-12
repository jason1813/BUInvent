$(function() {
  var h1Height = $('h1').height(); // get height of h1 tag
  $('li a').click(function (e) {
      e.preventDefault();
      var target = $(this.hash);
      $('html, body').animate({
          scrollTop: target.offset().top - h1Height // scroll to h3 minus height of h1
      }, 1000);
      return false;
  });
});