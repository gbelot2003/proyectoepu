jQuery(document).ready(function() {
	"use strict";
jQuery('#ei-slider').eislideshow({
					animation			: 'sides',
					autoplay			: true,
                           speed           : 1000,
                           titlespeed          : 2000,
					slideshow_interval	: 5000,
					titlesFactor		: 0.6
                });
jQuery('.ei-slider-picture').eislideshow({
					animation			: 'sides',
					autoplay			: true,
                           speed           : 1000,
                           titlespeed          : 2000,
					slideshow_interval	: 5000,
					titlesFactor		: 0.6
                });

jQuery( "li.current-menu-item" ).prev("li").children("a").css( "border-right", "none" );

jQuery( "a.active" ).parent("li").addClass('active');

jQuery('.top-tabs li a').click(function() {
    jQuery(this).parent('li').parent('ul').children('li').removeClass('active');
    jQuery(this).parent('li').addClass('active');
});


jQuery('#primary-menu').superfish({
				
			});
jQuery('#secondary-menu').superfish({
				
			});
jQuery("ul.sf-menu").superfish({
			animation: {height:'show'},   
			animationOut: {height:'hide'},
			delay:     600             // 0.6 second delay on mouseout
		});

jQuery('li.mm-list ul li').each(function() {
	jQuery(this).children('ul:first').replaceWith( "<ol>" + jQuery(this).children('ul:first').html() + "</ol>" );
});



jQuery(".sf-menu li").on('mouseenter mouseleave', function (e) {
    	var w = jQuery(this).children('ul.mega-sub-menu-one').width();
	var y = jQuery(this).children('ul.mega-sub-menu-three').width();
     	var l = jQuery(this).offset().left;
    	var docW = jQuery(".mainmenu").width();

    	var isOff = (l+ w <= docW);
	var iOff = (l+ y <= docW);

    if ( ! isOff || !iOff ) {
        jQuery(this).addClass("edge");
    } else {
		jQuery(this).removeClass("edge");
    }
});

jQuery(".open-panel").click(function(){
  
  jQuery("html").toggleClass("opennav");
  
});

jQuery(".closepanel").click(function(){
  
  jQuery("html").removeClass("opennav");
  
});

jQuery(".down-open").click(function(){

	jQuery('.slider-widget').css( "height", "auto" );

});

jQuery(".menuopenicon").click(function(){
  
  jQuery('.mainmenu').slideToggle();
  
});


jQuery('.carodiv').carouFredSel({
					responsive: true,
					auto:false,
					prev: '.prev',
					next: '.next',
						mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					},
					width: '100%',
					height: '200px',
					scroll: 2,
					items: {
						width: 250,						visible: {
							min: 1,
							max: 4
						}
					}
				});

jQuery('.slider-caro').carouFredSel({
					responsive: true,
					items: 1,
	prev: '#prev-sc',
	next: '#next-sc',
	scroll: {
        						duration: 1250,
							timeoutDuration: 3000,
        						pauseOnHover: true,
					},
    auto: true
});
	

jQuery('.slider-cover').mouseenter(function() {
		jQuery('.slider-cover .next').css("opacity","1");
	});

jQuery('.slider-cover').mouseleave(function() {
		jQuery('.slider-cover .next').css("opacity","0");
	});
jQuery('.slider-cover').mouseenter(function() {
		jQuery('.slider-cover .prev').css("opacity","1");
	});
jQuery('.slider-cover').mouseleave(function() {
		jQuery('.slider-cover .prev').css("opacity","0");
	});

 jQuery('#nes-ti').carouFredSel({
        items                : 1,
        direction            : "up",
        scroll : {
            items            : 1,
            duration        : 1000,
            pauseOnHover    : true
        }
    });

jQuery('#first-news-pic').carouFredSel({
					responsive: true,
					circular: false,
					auto: false,
					items: {
						visible: 1
					},
					scroll: {
						fx: 'directscroll'
					}
				});

jQuery('#thumbs').carouFredSel({
					circular: false,
					infinite: false,
					auto: false,
					items: {
						visible: {
							min: 2,
							max: 6
						},
						width: 120
					}
				});

jQuery('.connect-us li').mouseenter(function() {
		jQuery(this).find(".hover-show").show( 600 );
	});

jQuery('.connect-us li').mouseleave(function() {
		jQuery(this).find(".hover-show").hide( 600 );
	});


jQuery('#thumbs a').mouseenter(function() {
		jQuery(this).addClass('reafter');
	});

jQuery('#thumbs a').mouseleave(function() {
		jQuery(this).removeClass('reafter');
	});

jQuery('#thumbs a').first().addClass('selected');

jQuery('#thumbs a').click(function() {
					jQuery('#first-news-pic').trigger('slideTo', '#' + this.href.split('#').pop() );
					jQuery('#thumbs a').removeClass('selected');
					jQuery(this).addClass('selected');
					return false;
				});

			


jQuery('.videoflexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 200,
        itemMargin: 10,
        minItems: 2,
        maxItems: 3,
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });

 jQuery('#flexnav').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 200,
    itemMargin: 5,
    asNavFor: '#mainslider'
  });
   
  jQuery('#mainslider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#flexnav"
  });



		var offset = 300;
		var offset_opacity = 1200;
		var scroll_top_duration = 700;

	//hide or show the "back to top" link
	jQuery(window).scroll(function(){
		( jQuery(this).scrollTop() > offset ) ? jQuery('.subhtop').addClass('subhis-visible') : jQuery('.subhtop').removeClass('subhis-visible subhfade-out');
		if( jQuery(this).scrollTop() > offset_opacity ) { 
			jQuery('.subhtop').addClass('subhfade-out');
		}
	});

	//smooth scroll to top
	jQuery('.subhtop').on('click', function(event){
		event.preventDefault();
		jQuery('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});



    });