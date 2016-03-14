jQuery(document).ready(function($) {
	$('.transport-slider').slick({
		'arrows': true,
		'prevArrow': '<button type="button" class="slick-prev"><span class="dashicons dashicons-arrow-left-alt2"></span></button>',
		'nextArrow': '<button type="button" class="slick-next"><span class="dashicons dashicons-arrow-right-alt2"></span></button>',
		'autoplay': true
	});

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
});