
/****** NAVBAR COLOR CHANGE  *****/
  $(document).ready(function(){
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length){
      $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top-80) {
          $(".navbar-fixed-top").css('background-color', '#000');
        } else {
          $('.navbar-fixed-top').css('background-color', 'transparent');
        }
      });
    }
  });


  $(document).ready(function(){
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length){
      $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top-100) {
          $(".navbar-small").css('background-color', '#ffffff');
        } else {
          $('.navbar-small').css('background-color', '#ffffff');
        }
      });
    }
  });




/********   NAVBAR SCROLL EFFECT  ***********/
 $(document).ready(function() {
   $("#toTop").hide();

            // fade in & out
            $(window).scroll(function () {
              if ($(this).scrollTop() > 600) {
                $('#toTop').fadeIn();
              } else {
                $('#toTop').fadeOut();
              }
            });

            $('.navbar a[href*=#]').each(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                && location.hostname == this.hostname
                && this.hash.replace(/#/,'') ) {
                var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
              var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
              if ($target) {
               var targetOffset = $target.offset().top;
               $(this).click(function() {
                 $('html, body').animate({scrollTop: targetOffset}, 1000);//speed
                 return false;
               });
              if (window.location.hash) {
                var targetOffset = $('a[href*=' + window.location.hash + ']').offset().top;
                window.location.href = window.location.href.replace(/#.*/,'#');
              }
             }
           }
         });
      });

  $(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 30});
  });



/***** BUDGET SLIDER *******/

// With JQuery
$(document).ready(function (){
// With JQuery
$("#ex8").slider({
  formatter: function(value) {
        return '€ ' + value;
      },tooltip_position: 'bottom',

});
});

/***** EaseIn Animation ******/
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height - 200 );

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } /*else {
      //$element.removeClass('in-view'); ako oces vise puta da se aktivira efekat a ne samo jednom
    }*/
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

/******** Our-Sevices Animation **************/



/******** Repsonsive Navbar Collapse ******/
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});
/***** HOVER FOR FOOTER  ******/
  function onHoverFB()
  {
    $("#facebook").attr('src', 'images/footer-fb-hover.png');
  }

  function offHoverFB()
  {
    $("#facebook").attr('src', 'images/footer-fb.png');
  }

  function onHoverPIN()
  {
    $("#pinterest").attr('src', 'images/footer-pinterest-hover.png');
  }

  function offHoverPIN()
  {
    $("#pinterest").attr('src', 'images/footer-pinterest.png');
  }

  function onHoverGOOGLE()
  {
    $("#google").attr('src', 'images/footer-g+-hover.png');
  }

  function offHoverGOOGLE()
  {
    $("#google").attr('src', 'images/footer-g+.png');
  }

  function onHoverSKYPE()
  {
    $("#skype").attr('src', 'images/footer-skype-hover.png');
  }

  function offHoverSKYPE()
  {
    $("#skype").attr('src', 'images/footer-skype.png');
  }

  function onHoverIN()
  {
    $("#in").attr('src', 'images/footer-in-hover.png');
  }

  function offHoverIN()
  {
    $("#in").attr('src', 'images/footer-in.png');
  }

/* Icon text change */

/*$( "#icon-print" ).click(function() { iconSlideTop(); });
$( "#icon-web" ).click(function() { iconSlideTop(); });
$( "#icon-brand" ).click(function() { iconSlideTop(); });
$( "#icon-custom" ).click(function() { iconSlideMiddle(); });
$( "#icon-wordpress" ).click(function() { iconSlideMiddle(); });
$( "#icon-shop" ).click(function() { iconSlideMiddle(); });
$( "#icon-social" ).click(function() { iconSlideBottom(); });
$( "#icon-seo" ).click(function() { iconSlideBottom(); });
$( "#icon-links" ).click(function() { iconSlideBottom(); });
$( "#icon-campaign" ).click(function() { iconSlideBottom(); });*/

/*function iconSlideTop() {
  document.getElementById("icon-text-left").innerHTML = " ";
  $( "#icon-text-left" ).slideUp( 0, function() { });
  document.getElementById("icon-text-left").innerHTML = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-left" ).slideDown( 400, function() {});
};

function iconSlideMiddle() {
  $( "#icon-text-left" ).slideUp( 400, function() {});
  $( "#icon-text-left" ).slideDown( 400, function() {});
};

function iconSlideBottom() {
  $( "#icon-text-left" ).slideUp( 400, function() {});
  $( "#icon-text-left" ).slideDown( 400, function() {});
};*/


function iconTextChangePrint() {
  document.getElementById("icon-text-left").innerHTML = " ";
  $( "#icon-text-left" ).slideUp(0);
  document.getElementById("icon-text-left").innerHTML = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-left" ).slideDown(400);

  iconActiveResetTop();
  document.getElementById("icon-print").src = "images/category-assets/hover/print.png";
  document.getElementById("icon-label-print").classList.add("icon-label-active");
};

function iconTextChangeWeb() {
  document.getElementById("icon-text-left").innerHTML = " ";
  $( "#icon-text-left" ).slideUp( 0, function() { });
  document.getElementById("icon-text-left").innerHTML = " Bacon ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-left" ).slideDown( 400, function() {});

  iconActiveResetTop();
  document.getElementById("icon-web").src = "images/category-assets/hover/web-and-apps.png";
  document.getElementById("icon-label-web").classList.add("icon-label-active");
};

function iconTextChangeBrand() {
  document.getElementById("icon-text-left").innerHTML = " ";
  $( "#icon-text-left" ).slideUp( 0, function() { });
  document.getElementById("icon-text-left").innerHTML = " Lorel ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-left" ).slideDown( 400, function() {});

  iconActiveResetTop();
  document.getElementById("icon-brand").src = "images/category-assets/hover/brand-identity.png";
  document.getElementById("icon-label-brand").classList.add("icon-label-active");
};

function iconTextChangeCustom() {
  document.getElementById("icon-text-right").innerHTML = " ";
  $( "#icon-text-right" ).slideUp( 0, function() { });
  document.getElementById("icon-text-right").innerHTML = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-right" ).slideDown( 400, function() {});

  iconActiveResetMiddle();
  document.getElementById("icon-custom").src = "images/category-assets/hover/custom-dev.png";
  document.getElementById("icon-label-custom").classList.add("icon-label-active");
};

function iconTextChangeWordPress() {
  document.getElementById("icon-text-right").innerHTML = " ";
  $( "#icon-text-right" ).slideUp( 0, function() { });
  document.getElementById("icon-text-right").innerHTML = " Bacon ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-right" ).slideDown( 400, function() {});

  iconActiveResetMiddle();
  document.getElementById("icon-wordpress").src = "images/category-assets/hover/wordpress.png";
  document.getElementById("icon-label-wordpress").classList.add("icon-label-active");
};

function iconTextChangeShop() {
  document.getElementById("icon-text-right").innerHTML = " ";
  $( "#icon-text-right" ).slideUp( 0, function() { });
  document.getElementById("icon-text-right").innerHTML = " Lorel ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-right" ).slideDown( 400, function() {});

  iconActiveResetMiddle();
  document.getElementById("icon-shop").src = "images/category-assets/hover/web-shop.png";
  document.getElementById("icon-label-shop").classList.add("icon-label-active");
};

function iconTextChangeSocial() {
  document.getElementById("icon-text-leftbottom").innerHTML = " ";
  $( "#icon-text-leftbottom" ).slideUp( 0, function() { });
  document.getElementById("icon-text-leftbottom").innerHTML = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-leftbottom" ).slideDown( 400, function() {});

  iconActiveResetBottom();
  document.getElementById("icon-social").src = "images/category-assets/hover/social-media.png";
  document.getElementById("icon-label-social").classList.add("icon-label-active");
};

function iconTextChangeSEO() {
  document.getElementById("icon-text-leftbottom").innerHTML = " ";
  $( "#icon-text-leftbottom" ).slideUp( 0, function() { });
  document.getElementById("icon-text-leftbottom").innerHTML = " Bacon ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-leftbottom" ).slideDown( 400, function() {});

  iconActiveResetBottom();
  document.getElementById("icon-seo").src = "images/category-assets/hover/seo-analytics.png";
  document.getElementById("icon-label-seo").classList.add("icon-label-active");
};

function iconTextChangeLinks() {
  document.getElementById("icon-text-leftbottom").innerHTML = " ";
  $( "#icon-text-leftbottom" ).slideUp( 0, function() { });
  document.getElementById("icon-text-leftbottom").innerHTML = " Lorel ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-leftbottom" ).slideDown( 400, function() {});

  iconActiveResetBottom();
  document.getElementById("icon-links").src = "images/category-assets/hover/link-building.png";
  document.getElementById("icon-label-links").classList.add("icon-label-active");
};

function iconTextChangeCampaign() {
  document.getElementById("icon-text-leftbottom").innerHTML = " ";
  $( "#icon-text-leftbottom" ).slideUp( 0, function() { });
  document.getElementById("icon-text-leftbottom").innerHTML = " Campaign ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure sed quisquam provident animi hic quae impedit quam omnis nobis aut vero, ex necessitatibus magni deserunt dolorem, harum delectus tenetur.";
  $( "#icon-text-leftbottom" ).slideDown( 400, function() {});

  iconActiveResetBottom();
  document.getElementById("icon-campaign").src = "images/category-assets/hover/campaign.png";
  document.getElementById("icon-label-campaign").classList.add("icon-label-active");
};

function iconActiveResetTop() {
  document.getElementById("icon-print").src = "images/category-assets/print.png";
  document.getElementById("icon-web").src = "images/category-assets/web-and-apps.png";
  document.getElementById("icon-brand").src = "images/category-assets/brand-identity.png";

  document.getElementById("icon-label-print").classList.remove("icon-label-active");
  document.getElementById("icon-label-web").classList.remove("icon-label-active");
  document.getElementById("icon-label-brand").classList.remove("icon-label-active");
};

function iconActiveResetMiddle() {
  document.getElementById("icon-custom").src = "images/category-assets/custom-dev.png";
  document.getElementById("icon-wordpress").src = "images/category-assets/wordpress.png";
  document.getElementById("icon-shop").src = "images/category-assets/web-shop.png";

  document.getElementById("icon-label-custom").classList.remove("icon-label-active");
  document.getElementById("icon-label-wordpress").classList.remove("icon-label-active");
  document.getElementById("icon-label-shop").classList.remove("icon-label-active");
};

function iconActiveResetBottom() {
  document.getElementById("icon-social").src = "images/category-assets/social-media.png";
  document.getElementById("icon-seo").src = "images/category-assets/seo-analytics.png";
  document.getElementById("icon-links").src = "images/category-assets/link-building.png";
  document.getElementById("icon-campaign").src = "images/category-assets/campaign.png";

  document.getElementById("icon-label-social").classList.remove("icon-label-active");
  document.getElementById("icon-label-seo").classList.remove("icon-label-active");
  document.getElementById("icon-label-links").classList.remove("icon-label-active");
  document.getElementById("icon-label-campaign").classList.remove("icon-label-active");
};

$(document).ready(function() {
  iconTextChangePrint();
  iconTextChangeCustom();
  iconTextChangeSocial();
});
