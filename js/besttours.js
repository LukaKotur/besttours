function buttonPulldown(){}$(document).ready(function(){$("#banner-1").click(function(){$("#button-pulldown").fadeToggle();});});function displayReset(){document.getElementById('tours-content-bg').style.display="none";document.getElementById('tours-content-vi').style.display="none";document.getElementById('tours-content-gr').style.display="none";document.getElementById('tours-content-ai').style.display="none";document.getElementById('tours-content-sh').style.display="none";};function changeToursBelgrade(){displayReset();document.getElementById('tours-content-bg').style.display="initial";};function changeToursVienna(){displayReset();document.getElementById('tours-content-vi').style.display="initial";};function changeToursGraz(){displayReset();document.getElementById('tours-content-gr').style.display="initial";};function changeToursAirport(){displayReset();document.getElementById('tours-content-ai').style.display="initial";};function changeToursShopping(){displayReset();document.getElementById('tours-content-sh').style.display="initial";};$(function(){$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')});$('#myCarousel').carousel({interval:5500,pause:'none'})
$(document).on('click','a[href^="#"]',function(e){var id=$(this).attr('href');var $id=$(id);if($id.length===0){return;}e.preventDefault();var pos=$(id).offset().top-180;$('body, html').animate({scrollTop:pos});});$(document).ready(function(){var scroll_start=0;var startchange=$('#startchange');var offset=startchange.offset();if(startchange.length){$(document).scroll(function(){scroll_start=$(this).scrollTop();if(scroll_start>offset.top-80){$(".navbar-fixed-top").css('background-color','#000');}else{$('.navbar-fixed-top').css('background-color','#000');}});}});$(document).ready(function(){$("#toTop").hide();$(window).scroll(function(){if($(this).scrollTop()>600){$('#toTop').fadeIn();}else{$('#toTop').fadeOut();}});$('.navbar a[href*=#]').each(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname&&this.hash.replace(/#/,'')){var $targetId=$(this.hash),$targetAnchor=$('[name='+this.hash.slice(1)+']');var $target=$targetId.length?$targetId:$targetAnchor.length?$targetAnchor:false;if($target){var targetOffset=$target.offset().top;$(this).click(function(){$('html, body').animate({scrollTop:targetOffset},1000);return false;});if(window.location.hash){var targetOffset=$('a[href*='+window.location.hash+']').offset().top;window.location.href=window.location.href.replace(/#.*/,'#');}}}});});$(document).ready(function(){$('body').scrollspy({target:".navbar",offset:30});});$(document).ready(function(){$(".navbar-nav li a").click(function(event){$(".navbar-collapse").collapse('hide');});});var $animation_elements=$('.animation-element');var $window=$(window);function check_if_in_view(){var window_height=$window.height();var window_top_position=$window.scrollTop();var window_bottom_position=(window_top_position+window_height-200);$.each($animation_elements,function(){var $element=$(this);var element_height=$element.outerHeight();var element_top_position=$element.offset().top;var element_bottom_position=(element_top_position+element_height);if((element_bottom_position>=window_top_position)&&(element_top_position<=window_bottom_position)){$element.addClass('in-view');}});}$window.on('scroll resize',check_if_in_view);$window.trigger('scroll');