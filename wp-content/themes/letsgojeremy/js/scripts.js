// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
    resizeDiv();
});
window.onresize = function(event) {
    resizeDiv();
};
function resizeDiv() {
    vpw = $(window).width(); // Viewport Width
    vph = $(window).height(); // Viewport Height

    // Hero Image
    $('body.home .hero-section #gradient').css({'height': vph / 1 + 'px'}); // Setting the Height of a class equal to the viewport height divided by 2
}

// -- Responsive Header -- //
$(function(){
  $('.site-header .site-branding').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('.site-header').data('size') == 'big')
    {
        $('.site-header').data('size','small');
        $('.site-header').stop().animate({
            height:'40px'
        },600);
    }
}
else
  {
    if($('.site-header').data('size') == 'small')
      {
        $('.site-header').data('size','big');
        $('.site-header').stop().animate({
            height:'100px'
        },600);
      }  
  }
});