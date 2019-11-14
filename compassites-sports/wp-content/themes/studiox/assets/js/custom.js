jQuery(document).ready(function($){
	$('.bravo_map_wrap').each(function(){
		var map_div=$(this).find('.bravo_google_map');
		var lt = map_div.data('lat');
		var ld = map_div.data('lng');
		var address=map_div.data('address');
		// var options = {
		// 	center: new google.maps.LatLng(lt, ld),
		// 	zoom: map_div.data('zoom'),
		// 	scrollwheel: false,
		// 	panControl: false,
		// 	zoomControl: true,
		// 	scaleControl: true,
		// 	mapTypeControl: false,
		// 	streetViewControl: false,
		// };
		// var div = map_div[0];
		// var map = new google.maps.Map(div, options);

		// var image = map_div.data('marker');

		map = new GMaps({
			el: '#'+$(this).attr('id')
			, lat: lt
			, lng: ld
			, scrollwheel: false
		});
		map.drawOverlay({
			lat: map.getCenter().lat()
			,
			lng: map.getCenter().lng()
			,
			layer: 'overlayLayer'
			,
			content: '<div class="overlay_map"><div class="pin bounce"></div><div class="overlay_arrow above"></div></div>'
			,
			verticalAlign: 'top'
			,
			horizontalAlign: 'center'
		});


	})
});