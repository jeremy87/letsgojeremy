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
    $('body.home .hover-section').css({'height': vph / 1 + 'px'}); // Setting the Height of a class equal to the viewport height divided by 2
}

// -- Responsive Header UNUSED -- //
$(function(){
  $('#header_nav').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('#header_nav').data('size') == 'big')
    {
        $('#header_nav').data('size','small');
        $('#header_nav').stop().animate({
            height:'40px'
        },600);
    }
}
else
  {
    if($('#header_nav').data('size') == 'small')
      {
        $('#header_nav').data('size','big');
        $('#header_nav').stop().animate({
            height:'100px'
        },600);
      }  
  }
});