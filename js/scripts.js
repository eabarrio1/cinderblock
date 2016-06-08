$(document).ready(function(){
    $(".bg-slider").hide()
    $(".bg-slider:first-child").show();
    
    // $(".nav-dots div").click(function(){
    //     slideTo($(this).index());
    // })

    //  $(".nav-dots div").click(function(){
    //     slideTo($(this).index());
    // })
});



function slidePrev() {
    if ($("#slider .active").index() == 0) {
        slideTo($("#slider .bg-slider").length - 1);
    }
    else {
        slideTo($("#slider .active").index() - 1);
    }
}

/*slider function*/
setInterval(function() {
  slideNext();
}, 4000);



function slideNext() {
    if ($("#slider .active").index() == $("#slider .bg-slider").length - 1) {
        slideTo(0);
    }
    else {
        slideTo($("#slider .active").index() + 1);
    }
}

function slideTo(slide) {
    $("#slider .active").fadeOut().removeClass("active");
    $("#slider .bg-slider").eq(slide).fadeIn().addClass("active");
    $(".nav-dots .current").removeClass("current");
    $(".nav-dots div").eq(slide).addClass("current");
}

var ww = document.body.clientWidth;

// STICK NAV

$(window).scroll(function() {
	
	var scrollPos = $(window).scrollTop();

	var navSwitchPos = 150;
	
	if(scrollPos > navSwitchPos) {
		
		$('nav').addClass('reset');
		$('#menu-btn').addClass('reset');
		//setTimeout(function() {$('nav').addClass('fixed');}, 2).offset();	
		
	} else {
	
		$('nav').removeClass('reset');
		$('nav').removeClass('fixed');
		$('#menu-btn').removeClass('reset');

	}
	
});


$("nav li a").click(function () {
		   
	$(".nav").hide();
		    
});    
				
// EQUAL SIZE BIOS
	

// SHOW AND HIDE NAV WHEN RESIZING


$(window).resize(function() {
    
    if($(window).width() > 765) 
        
	  $('nav').show();
        
    if($(window).width() <= 765) 
        
        $('nav').hide();
        
       
});

/*old stuff*/

$(document).ready(function() {
	$("nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$("nav").slideToggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 640) {
		$(".toggleMenu").css("display", "block");
		if (!$(".toggleMenu").hasClass("active")) {
			$("nav").hide();
		} else {
			$("nav").show();
		}
		$("nav ul li").unbind('mouseenter mouseleave');


		// MENU SUB MENU DROPDOWN

		// $("nav ul li a.parent").unbind('click').bind('click', function(e) {
		// 	// must be attached to anchor element to prevent bubbling
		// 	e.preventDefault();
		// 	$(this).parent("li").toggleClass("hover");
		// });

		// ELENA U RULE!!!!

		$("nav ul li a.parent").one('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 640) {
		$(".toggleMenu").css("display", "none");
		$("nav").show();
		$("nav ul li").removeClass("hover");
		$("nav ul li a").unbind('click');
		$("nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}