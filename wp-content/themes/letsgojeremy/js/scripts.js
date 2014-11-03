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