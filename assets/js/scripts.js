jQuery(document).ready(function($) {
	//init foundation
	$(document).foundation();

	//init main homepage slider
	$('.transport-slider').slick({
		'arrows': true,
		'prevArrow': '<button type="button" class="slick-prev"><span class="dashicons dashicons-arrow-left-alt2"></span></button>',
		'nextArrow': '<button type="button" class="slick-next"><span class="dashicons dashicons-arrow-right-alt2"></span></button>',
		'autoplay': true
	});

	//init homepage logos slider
	$('.transport-companies-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		'arrows': true,
		'prevArrow': '<button type="button" class="slick-prev"><span class="dashicons dashicons-arrow-left-alt2"></span></button>',
		'nextArrow': '<button type="button" class="slick-next"><span class="dashicons dashicons-arrow-right-alt2"></span></button>',
		'autoplay': false
	});

	//handler for search field
	$('.header .search-wrap .search-submit').on('click', function(event) {
		event.preventDefault();

		var searchWrap = $(this).parents('.search-wrap');
		$(document).on('click', function(event) {
			if (searchWrap.hasClass('visible')) {
				if (!$(event.target).parents().hasClass('search')) {
					event.preventDefault();
					searchWrap.removeClass('visible');
				} else if ($(event.target).parents().hasClass('search-submit') || $(event.target).hasClass('search-submit')) {
					if (searchWrap.find('.search-input').val()) {
						searchWrap.find('form').submit();
					}
				}
			}
		});
		searchWrap.addClass('visible');
	});
});