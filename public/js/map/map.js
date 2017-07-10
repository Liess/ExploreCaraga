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
				name: 'Bondi Beach',
				location_latitude: 9.156333, 
				location_longitude: 125.798032,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}	
			],
			'Cinema': [
			{
				name: 'Bondi Beach',
				location_latitude: 9.116963, 
				location_longitude: 126.060661,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			
			],
			'Club': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.889173, 
				location_longitude: 126.028329,
				map_image_url: 'images/img2.png',
				name_point: 'Matart Group',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			
			],

			'Cafe': [
			{
				name: 'Bondi Beach',
				location_latitude: 8.469321, 
				location_longitude: 125.682162,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],

			'Sport': [
			{
				name: 'Bondi Beach',
				location_latitude: 10.102574, 
				location_longitude: 125.653326,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],

			'Port': [
			{
				name: 'Bondi Beach',
				location_latitude: 9.959612, 
				location_longitude: 126.054661,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],


			'Bank': [
			{
				name: 'Cronulla Beach',
				location_latitude: 9.842779, 
				location_longitude: 126.105366,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],


			'Post': [
			{
				name: 'Cronulla Beach',
				location_latitude: 9.676226, 
				location_longitude: 125.947346,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],

			'Showplace': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.208987, 
				location_longitude: 125.601384,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			],

			'Park': [
			{
				name: 'Cronulla Beach',
				location_latitude: 8.158060,
				location_longitude:  126.123778,
				map_image_url: 'images/img.png',
				name_point: 'Vladivostok',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				url_point: '02.html'
			}
			]
		};

		function initialize () {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(9.1654132, 125.9359231),
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
				styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#263c3f"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6b9a76"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#38414e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#212a37"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9ca5b3"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#1f2835"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#f3d19c"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2f3948"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#515c6d"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  }
],
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
new google.maps.LatLng(7.993957,125.386963),
new google.maps.LatLng(7.993957,125.474854),
new google.maps.LatLng(7.993957,125.765991),
new google.maps.LatLng(7.999397,126.134033),
new google.maps.LatLng(7.999397,126.331787),
new google.maps.LatLng(8.004837,126.447144),
new google.maps.LatLng(8.200616,126.485596),
new google.maps.LatLng(8.341953,126.507568),
new google.maps.LatLng(8.515836,126.474609),
new google.maps.LatLng(8.809082,126.441650),
new google.maps.LatLng(9.362353,126.397705),
new google.maps.LatLng(9.654908,126.331787),
new google.maps.LatLng(9.968851,126.238403),
new google.maps.LatLng(10.185187,126.134033),
new google.maps.LatLng(10.433793,125.859375),
new google.maps.LatLng(10.541821,125.749512),
new google.maps.LatLng(10.541821,125.595703),
new google.maps.LatLng(10.541821,125.430908),
new google.maps.LatLng(10.428391,125.375977),
new google.maps.LatLng(10.060811,125.304565),
new google.maps.LatLng(9.855216,125.299072),
new google.maps.LatLng(9.681984,125.282593),
new google.maps.LatLng(9.476154,125.277100),
new google.maps.LatLng(9.167179,125.205688),
new google.maps.LatLng(9.064127,125.200195),
new google.maps.LatLng(8.906780,125.211182),
new google.maps.LatLng(8.722218,125.222168),
new google.maps.LatLng(8.526701,125.222168),
new google.maps.LatLng(8.412602,125.266113),
new google.maps.LatLng(8.233237,125.343018),
new google.maps.LatLng(8.227801,125.343018),
new google.maps.LatLng(8.211490,125.354004),
new google.maps.LatLng(8.021155,125.392456),
new google.maps.LatLng(7.995317,125.381470),
new google.maps.LatLng(7.989878,125.389709)
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




