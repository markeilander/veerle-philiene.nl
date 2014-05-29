var currentSlide = 1;
var maxSlides = $("div.slide").length;
jQuery(document).ready(function ($) {
    // scroll
    var pause = 10;
    $(document).scroll(function(e) {
        delay(function() {
            
            var tops = [];
            
            $('.story').each(function(index, element) {
                tops.push( $(element).offset().top - 200 );
            });

            var scroll_top = $(this).scrollTop();
            
            var lis = $('.nav > li');
            
            for ( var i=tops.length-1; i>=0; i-- ) {
                if ( scroll_top >= tops[i] ) {
                    menu_focus( lis[i], i+1 );
                    break;
                }
            }
        },
        pause);
    });
    $(document).scroll();
    // paralax
    //Cache some variables
	var links = $('.nav').find('li');
    var scrollableLinks = $('.scrollable').find('a');
    var arrows = $('#arrows div');
	slide = $('.slide');
	button = $('.button');
	mywindow = $(window);
	htmlbody = $('html,body');
	
	//When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
	links.click(function (e) {
		e.preventDefault();
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		$(".navbar-responsive-collapse").collapse('hide');
	});
    scrollableLinks.click(function (e) {
		e.preventDefault();
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		$(".navbar-responsive-collapse").collapse('hide');
	});
    arrows.click(function(e) {
        var slide = 1;
		e.preventDefault();
		
		if ( $(this).hasClass('disabled') )
			return;
		
		switch( $(this).attr('id') ) {
			case 'arrow-up':
				if (currentSlide != 1) {
                    slide = currentSlide-1;
                }
            break;
			case 'arrow-down':
				if (currentSlide != maxSlides) {
                    slide = currentSlide+1;
                }
            break;
		}
        currentSlide = slide;
		var offset_top = ( slide == 1 ) ? '0px' : $('.slide[data-slide="' + slide + '"]').offset().top;
    
        htmlbody.stop(false, false).animate({
            scrollTop: offset_top
        }, 1500, 'easeInOutQuart');
		$(".navbar-responsive-collapse").collapse('hide');
	});
	
	//When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
	$('.navigation-slide').click(function (e) {
		e.preventDefault();
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		$(".navbar-responsive-collapse").collapse('hide');
	});
    // menu
    //Cache some variables
	var menu_item = $('.nav').find('li');
	
	menu_item.hover(
		function(e) {
			var icon = $(this).find('.text');
			
			var left_pos = icon.offset().left - $('.nav').offset().left - 10;
			var el_width = $(this).find('.text').width() + 20;
			
			var hover_bar = $('<div class="active-menu special-active-menu"></div>')
				.css('left', left_pos)
				.css('width', el_width)
				.attr('id', 'special-active-menu-' + $(this).data('slide') );
			
			$('.active-menu').after( hover_bar );
		},
		function(e) {
			$('.special-active-menu').remove();
		}
	);
});
/****
 * Trigger scroll on resize
 **/
$(window).on('resize', function(){
    $(document).scroll();
    goToByScroll(currentSlide);
});

//Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
//easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
function goToByScroll(dataslide) {
    currentSlide = dataslide;
    var offset_top = ( dataslide == 1 ) ? '0px' : $('.slide[data-slide="' + dataslide + '"]').offset().top;
    
    htmlbody.stop(false, false).animate({
        scrollTop: offset_top
    }, 1500, 'easeInOutQuart');
}

/***************
 * = counter
***************/
function addBabies() {
  $( "#population-nl" ).delay(200).queue(function (next) {
        $(this).append("<span id='add-babies'>+2</span>");
        next();
    });
}

var options = {
  useEasing : true, 
  useGrouping : true, 
  separator : '.', 
  decimal : ',' 
}
var demo = new countUp("population-nl", 0, 16849314, 0, 9.5, options);

$('#intro').onScreen({
   container: window,
   direction: 'vertical',
   doIn: function() {
       demo.start(addBabies);
   },
   doOut: function() {
       demo.reset();
   },
   tolerance: 20,
   throttle: 50,
   toggleClass: 'onScreen'
});

var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

function menu_focus( element, i ) {
    
    enable_arrows( i );
	
	$('.nav > li').removeClass('active');
	$(element).addClass('active');
	
	var icon = $(element).find('.text');
	
	var left_pos = icon.offset().left - $('.nav').offset().left - 10;
	var el_width = $(element).find('.text').width() + 20;
	
	$('.active-menu').stop(false, false).animate(
		{
			left: left_pos,
			width: el_width
		},
		1500,
		'easeInOutQuart'
	);
}

function enable_arrows( dataslide ) {
	$('#arrows div').addClass('disabled');
	if ( dataslide != 1 ) {
		$('#arrow-up').removeClass('disabled');
	}
	if ( dataslide != 5 ) {
		$('#arrow-down').removeClass('disabled');
	}
}
