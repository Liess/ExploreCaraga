(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Shop': [
			{
				name: '',
				location_latitude: 9.156333,
				location_longitude: 125.798032,
				map_image_url: 'images/ssurigao.jpg',
				name_point: 'Enchanted river',
				description_point: 'The Hinatuan Enchanted River is a deep spring river on the island of Mindanao in the Philippines.',
				url_point: '/Desc'
			}
			],
			'Cinema': [
			{
				name: '',
				location_latitude: 9.116963,
				location_longitude: 126.060661,
				map_image_url: 'images/nsurigao.jpg',
				name_point: 'Club Tara Resort',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '/Desc'
			}

			],
			'Club': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.889173,
				location_longitude: 126.028329,
				map_image_url: 'images/ssurigao.jpg',
				name_point: 'Enchanted river',
				description_point: 'The Hinatuan Enchanted River is a deep spring river on the island of Mindanao in the Philippines.',
				url_point: '/Desc'
			}

			],

			'Cafe': [
			{
				name: 'Bondi Beach',
				location_latitude: 8.469321,
				location_longitude: 125.682162,
				map_image_url: 'images/ssurigao.jpg',
				name_point: 'Enchanted river',
				description_point: 'The Hinatuan Enchanted River is a deep spring river on the island of Mindanao in the Philippines.',
				url_point: '/Desc'
			}
			],

			'Sport': [
			{
				name: 'Bondi Beach',
				location_latitude: 10.102574,
				location_longitude: 125.653326,
				map_image_url: 'images/ssurigao.jpg',
				name_point: 'Enchanted river',
				description_point: 'The Hinatuan Enchanted River is a deep spring river on the island of Mindanao in the Philippines.',
				url_point: '/Desc'
			}
			],

			'Port': [
			{
				name: 'Bondi Beach',
				location_latitude: 9.959612,
				location_longitude: 126.054661,
				map_image_url: 'images/ssurigao.jpg',
				name_point: 'Enchanted river',
				description_point: 'The Hinatuan Enchanted River is a deep spring river on the island of Mindanao in the Philippines.',
				url_point: '/Desc'
			}
			],


			'Bank': [
			{
				name: 'Cronulla Beach',
				location_latitude: 9.842779,
				location_longitude: 126.105366,
				map_image_url: 'images/nsurigao.jpg',
				name_point: 'Club Tara Resort',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '/Desc'
			}
			],



			'Showplace': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.208987,
				location_longitude: 125.601384,
				map_image_url: 'images/nsurigao.jpg',
				name_point: 'Club Tara Resort',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '/Desc'
			}
			],

			'Park': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.158060,
				location_longitude:  126.123778,
				map_image_url: 'images/nsurigao.jpg',
				name_point: 'Club Tara Resort',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '/Desc'
			}
			]
		};

		function initialize () {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(9.1, 125.9359231),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: false,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: false,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'images/icon/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));


				});
var myCoordinates = [
	new google.maps.LatLng(10.493213,125.628662),
new google.maps.LatLng(10.460804,125.590210),
new google.maps.LatLng(10.460804,125.496826),
new google.maps.LatLng(10.493213,125.480347),
new google.maps.LatLng(10.493213,125.436401),
new google.maps.LatLng(10.450000,125.452881),
new google.maps.LatLng(10.406780,125.474854),
new google.maps.LatLng(10.363555,125.535278),
new google.maps.LatLng(10.287896,125.496826),
new google.maps.LatLng(10.277086,125.491333),
new google.maps.LatLng(10.233843,125.474854),
new google.maps.LatLng(10.158153,125.469360),
new google.maps.LatLng(10.049994,125.480347),
new google.maps.LatLng(9.968851,125.540771),
new google.maps.LatLng(9.936388,125.562744),
new google.maps.LatLng(9.936388,125.496826),
new google.maps.LatLng(9.871452,125.474854),
new google.maps.LatLng(9.828154,125.502319),
new google.maps.LatLng(9.828154,125.408936),
new google.maps.LatLng(9.833567,125.321045),
new google.maps.LatLng(9.763198,125.348511),
new google.maps.LatLng(9.681984,125.364990),
new google.maps.LatLng(9.622414,125.386963),
new google.maps.LatLng(9.492408,125.386963),
new google.maps.LatLng(9.329831,125.441895),
new google.maps.LatLng(9.291886,125.386963),
new google.maps.LatLng(9.243093,125.364990),
new google.maps.LatLng(9.161756,125.386963),
new google.maps.LatLng(9.096673,125.386963),
new google.maps.LatLng(9.069551,125.343018),
new google.maps.LatLng(9.080400,125.255127),
new google.maps.LatLng(9.140063,125.200195),
new google.maps.LatLng(9.047853,125.211182),
new google.maps.LatLng(8.961045,125.211182),
new google.maps.LatLng(8.895926,125.244141),
new google.maps.LatLng(8.819939,125.233154),
new google.maps.LatLng(8.743936,125.255127),
new google.maps.LatLng(8.374562,125.255127),
new google.maps.LatLng(8.331083,125.277100),
new google.maps.LatLng(8.293035,125.321045),
new google.maps.LatLng(8.059230,125.370483),
new google.maps.LatLng(7.988518,125.386963),
new google.maps.LatLng(8.004837,125.518799),
new google.maps.LatLng(8.004837,125.782471),
new google.maps.LatLng(8.004837,125.936279),
new google.maps.LatLng(7.972198,126.013184),
new google.maps.LatLng(7.961317,126.024170),
new google.maps.LatLng(7.939556,126.024170),
new google.maps.LatLng(7.972198,126.090088),
new google.maps.LatLng(7.993957,126.139526),
new google.maps.LatLng(7.993957,126.243896),
new google.maps.LatLng(7.993957,126.331787),
new google.maps.LatLng(7.939556,126.364746),
new google.maps.LatLng(7.950437,126.397705),
new google.maps.LatLng(7.993957,126.425171),
new google.maps.LatLng(8.059230,126.441650),
new google.maps.LatLng(8.222364,126.474609),
new google.maps.LatLng(8.309341,126.469116),
new google.maps.LatLng(8.407168,126.474609),
new google.maps.LatLng(8.450639,126.507568),
new google.maps.LatLng(8.510403,126.397705),
new google.maps.LatLng(8.559294,126.337280),
new google.maps.LatLng(8.570158,126.210938),
new google.maps.LatLng(8.613610,126.134033),
new google.maps.LatLng(8.678779,126.156006),
new google.maps.LatLng(8.705929,126.221924),
new google.maps.LatLng(8.743936,126.243896),
new google.maps.LatLng(8.798225,126.309814),
new google.maps.LatLng(8.895926,126.370239),
new google.maps.LatLng(8.961045,126.331787),
new google.maps.LatLng(9.037003,126.298828),
new google.maps.LatLng(9.058702,126.254883),
new google.maps.LatLng(9.123792,126.260376),
new google.maps.LatLng(9.232249,126.221924),
new google.maps.LatLng(9.329831,126.194458),
new google.maps.LatLng(9.351513,126.112061),
new google.maps.LatLng(9.308149,126.106567),
new google.maps.LatLng(9.286465,126.035156),
new google.maps.LatLng(9.373193,126.013184),
new google.maps.LatLng(9.427387,126.040649),
new google.maps.LatLng(9.481572,125.969238),
new google.maps.LatLng(9.552000,125.958252),
new google.maps.LatLng(9.573668,126.046143),
new google.maps.LatLng(9.703643,126.134033),
new google.maps.LatLng(9.768611,126.199951),
new google.maps.LatLng(9.822742,126.249390),
new google.maps.LatLng(9.909333,126.232910),
new google.maps.LatLng(9.941798,126.145020),
new google.maps.LatLng(9.995901,126.112061),
new google.maps.LatLng(10.044585,126.079102),
new google.maps.LatLng(10.071629,126.046143),
new google.maps.LatLng(10.028358,125.980225),
new google.maps.LatLng(9.963440,125.963745),
new google.maps.LatLng(9.930977,125.919800),
new google.maps.LatLng(9.898510,125.831909),
new google.maps.LatLng(9.920155,125.722046),
new google.maps.LatLng(9.995901,125.694580),
new google.maps.LatLng(10.093262,125.716553),
new google.maps.LatLng(10.174374,125.716553),
new google.maps.LatLng(10.196000,125.705566),
new google.maps.LatLng(10.260871,125.672607),
new google.maps.LatLng(10.363555,125.694580),
new google.maps.LatLng(10.439196,125.694580),
new google.maps.LatLng(10.477009,125.656128),
new google.maps.LatLng(10.493213,125.634155)

];

var polyOptions = {
path: myCoordinates,
strokeColor: "#FF0000",
strokeOpacity: 1,
strokeWeight: 3
}
var it = new google.maps.Polyline(polyOptions);
it.setMap(mapObject);
		};


		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};

		function toggleMarkers (category) {
			hideAllMarkers();
			closeInfoBox();

			if ('undefined' === typeof markers[category])
				return false;
			markers[category].forEach(function (marker) {
				marker.setMap(mapObject);
				marker.setAnimation(google.maps.Animation.DROP);

			});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info none" id="marker_info">' +
				'<div class="info" id="info">'+
				'<img src="' + item.map_image_url + '" class="logotype" alt=""/>' +
				'<h2>'+ item.name_point +'<span></span></h2>' +
				'<span>'+ item.description_point +'</span>' +
				'<a href="'+ item.url_point + '" class="green_btn">More info</a>' +
				'<span class="arrow"></span>' +
				'</div>' +
				'</div>',
				disableAutoPan: true,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(40, -210),
				closeBoxMargin: '50px 200px',
				closeBoxURL: '',
				isHidden: false,
				pane: 'floatPane',
				enableEventPropagation: true
			});


		};
