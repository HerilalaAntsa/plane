jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});
	
	
	//Initiat WOW JS
	new WOW().init();
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
				return false;
		});
	
	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});


	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});

	//Datepicker
	var dateFormat = "dd/mm/yyyy",
		from = $( ".from" )
			.datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 3,
				showOn: "button",
				buttonImage: "images/calendar.png",
				buttonImageOnly: true,
			})
			.on( "change", function() {
				to.datepicker( "option", "minDate", getDate( this ) );
			}),
		to = $( ".to" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 3,
			showOn: "button",
			buttonImage: "images/calendar.png",
			buttonImageOnly: true,
		})
			.on( "change", function() {
				from.datepicker( "option", "maxDate", getDate( this ) );
			});

	function getDate( element ) {
		var date;
		try {
			date = $.datepicker.parseDate( dateFormat, element.value );
		} catch( error ) {
			date = null;
		}

		return date;
	}
});