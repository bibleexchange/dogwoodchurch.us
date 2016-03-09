<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAzIRoL760WWwzn8Ehxti-RD5_fb3l8wXY&sensor=false&extension=.js'></script> 
 
			<script> 
			    google.maps.event.addDomListener(window, 'load', init);
			    var map;
			    function init() {
			        var mapOptions = {
			            center: new google.maps.LatLng(39.623078,-75.84941),
			            zoom: 14,
			            zoomControl: true,
			            zoomControlOptions: {
			                style: google.maps.ZoomControlStyle.DEFAULT,
			            },
			            disableDoubleClickZoom: true,
			            mapTypeControl: true,
			            mapTypeControlOptions: {
			                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			            },
			            scaleControl: true,
			            scrollwheel: false,
			            panControl: false,
			            streetViewControl: true,
			            draggable : true,
			            overviewMapControl: true,
			            overviewMapControlOptions: {
			                opened: false,
			            },
			            mapTypeId: google.maps.MapTypeId.ROADMAP,
			            styles: [
			  {
			    "featureType": "water",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#d3d3d3" }
			    ]
			  },{
			    "featureType": "transit",
			    "stylers": [
			      { "color": "#808080" },
			      { "visibility": "off" }
			    ]
			  },{
			    "featureType": "road.highway",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      { "visibility": "on" },
			      { "color": "#b3b3b3" }
			    ]
			  },{
			    "featureType": "road.highway",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#ffffff" }
			    ]
			  },{
			    "featureType": "road.local",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "visibility": "on" },
			      { "color": "#ffffff" },
			      { "weight": 1.8 }
			    ]
			  },{
			    "featureType": "road.local",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      { "color": "#d7d7d7" }
			    ]
			  },{
			    "featureType": "poi",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "visibility": "on" },
			      { "color": "#ebebeb" }
			    ]
			  },{
			    "featureType": "administrative",
			    "elementType": "geometry",
			    "stylers": [
			      { "color": "#a7a7a7" }
			    ]
			  },{
			    "featureType": "road.arterial",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#ffffff" }
			    ]
			  },{
			    "featureType": "road.arterial",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#ffffff" }
			    ]
			  },{
			    "featureType": "landscape",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "visibility": "on" },
			      { "color": "#efefef" }
			    ]
			  },{
			    "featureType": "road",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      { "color": "#696969" }
			    ]
			  },{
			    "featureType": "administrative",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      { "visibility": "on" },
			      { "color": "#737373" }
			    ]
			  },{
			    "featureType": "poi",
			    "elementType": "labels.icon",
			    "stylers": [
			      { "visibility": "off" }
			    ]
			  },{
			    "featureType": "poi",
			    "elementType": "labels",
			    "stylers": [
			      { "visibility": "off" }
			    ]
			  },{
			    "featureType": "road.arterial",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      { "color": "#d6d6d6" }
			    ]
			  },{
			    "featureType": "road",
			    "elementType": "labels.icon",
			    "stylers": [
			      { "visibility": "off" }
			    ]
			  },{
			  },{
			    "featureType": "poi",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "color": "#dadada" }
			    ]
			  }
			],
			        }
			        var mapElement = document.getElementById('DogwoodChurch');
			        var map = new google.maps.Map(mapElement, mapOptions);
			        var locations = [
			['Dogwood Church', 'undefined', 'undefined', 'undefined', 'http://maps.apple.com/?q=51.507269,-0.127695', 39.6224599, -75.85053700000003, 'https://mapbuildr.com/assets/img/markers/solid-pin-red.png']
			        ];
			        for (i = 0; i < locations.length; i++) {
						if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
						if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
						if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
			           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
			           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
			            marker = new google.maps.Marker({
			                icon: markericon,
			                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
			                map: map,
			                title: locations[i][0],
			                desc: description,
			                tel: telephone,
			                email: email,
			                web: web
			            });
			link = '';     }
			google.maps.event.addListener(marker, 'click', function() {
				window.location.href = 'http://maps.apple.com/?q=39.6224599,-75.85053700000003';
			});
			
			}
			</script>
			<style>
			    #DogwoodChurch {
			        height:400px;
			        width:100%;
			    }
			    .gm-style-iw * {
			        display: block;
			        width: 100%;
			    }
			    .gm-style-iw h4, .gm-style-iw p {
			        margin: 0;
			        padding: 0;
			    }
			    .gm-style-iw a {
			        color: #4272db;
			    }
			</style>
			
			<div id='DogwoodChurch'></div>
