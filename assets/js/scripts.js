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


	/*--------------------------------------------*\
		Add google map with address
	\*--------------------------------------------*/

	var geocoder;
	var map;

	function initialize() {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(35.11189781522975, 47.866625577972876);

		var mapOptions = {
			zoom: 15,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			draggable: false,
		};

		map = new google.maps.Map(document.getElementById('map-wrapper'), mapOptions);
	}

	function codeAddress() {
		geocoder.geocode({
			'address': address
		}, function(results, status) {

			if (status == google.maps.GeocoderStatus.OK) {

				map.setCenter(results[0].geometry.location);

				var service = new google.maps.places.PlacesService(map);

				service.getDetails({
						placeId: results[0].place_id
					},
					function(placeResult, status) {
						if (status != google.maps.places.PlacesServiceStatus.OK) {
							alert('Не удалось найти детали места.');
							return;
						}

						var marker = new google.maps.Marker({
							map: map,
							position: placeResult.geometry.location,
							title: site_title,
						});
					});

			} else {
				alert('Не удалось найти геокод по определенным причинам: ' + status);
			}
		});
	}

	$(window).on('load', function() {
		if ($('#map-wrapper').length) {
			initialize();
			codeAddress();
		}
	});
});