// -- Homepage Hero Image -- //
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

// -- Responsive Header UNUSED -- //
$(function(){
  $('.site-header1').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('.site-header1').data('size') == 'big')
    {
        $('.site-header1').data('size','small');
        $('.site-header1').stop().animate({
            height:'40px'
        },600);
    }
}
else
  {
    if($('.site-header1').data('size') == 'small')
      {
        $('.site-header1').data('size','big');
        $('.site-header1').stop().animate({
            height:'75px'
        },600);
      }  
  }
});

// CALL BLOXHOVER //
    $(document).ready(function() {
        $('.mydiv').bloxhover({effect: 'square', duration: 400, sliceCount: 32, delay: 30, color: 'rgba(141, 198, 63, 0.7)'});
    });