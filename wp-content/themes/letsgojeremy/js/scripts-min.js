function resizeDiv(){vpw=$(window).width(),vph=$(window).height(),$("body.home .hero-section #gradient").css({height:vph/1+"px"})}$(document).ready(function(){resizeDiv()}),window.onresize=function(e){resizeDiv()},$(function(){$(".site-header1").data("size","big")}),$(window).scroll(function(){$(document).scrollTop()>0?"big"==$(".site-header1").data("size")&&($(".site-header1").data("size","small"),$(".site-header1").stop().animate({height:"40px"},600)):"small"==$(".site-header1").data("size")&&($(".site-header1").data("size","big"),$(".site-header1").stop().animate({height:"75px"},600))}),$(document).ready(function(){$(".mydiv").bloxhover({effect:"square",duration:400,sliceCount:32,delay:30,color:"rgba(141, 198, 63, 0.7)"})});