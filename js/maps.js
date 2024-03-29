(function ($) {
    "use strict";
    var locations = [];
    var markerIcon = {
        anchor: new google.maps.Point(12, 0),
        url: 'images/marker.png',
        labelOrigin: new google.maps.Point(25, 20)
    }
    function mainMap() {
        function locationData(locationURL, locationImg, locationTitle, locationAddress, locationPrice, locationStarRating) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div class="infoBox-close"><i class="far fa-times"></i></div><a href="' + locationURL + '" class="listing-img-content fl-wrap"><img src="' + locationImg + '" alt=""><span class="map-popup-location-price"><strong>Abierto</strong>' + locationPrice + '</span></a> <div class="listing-content fl-wrap"><div class="card-popup-raining map-card-rainting" data-staRrating="' + locationStarRating + '"></div><div class="listing-title fl-wrap"><h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"><i class="fas fa-map-marker-alt"></i>' + locationAddress + '</span></div></div></div></div>')
        }
	    //  Map Infoboxes ------------------
         locations = [
            [locationData('listing-single2.html', 'images/productos/gallina_familiar.jpg', 'Restaurante Doña Aleja', "Cra. 9a ## 15b-18", "$ 320", "5"), 3.234163, -76.568006, 0, markerIcon],
            [locationData('listing-single.html', 'images/productos/hamburguesa_angus.jpg', 'HAMBURGUESAS BARBAROS', "Cra. 9a ## 15b-18", "$ 120", "4"), 3.264991, -76.536907, 1, markerIcon],
            [locationData('listing-single.html', 'images/establecimientos/darsalud.png', 'DARSALUD', " Cl. 13 #11-03", "$ 50", "5"), 3.264879, -76.539593, 2, markerIcon],
            [locationData('listing-single.html', 'images/gal/2.jpg', 'Drogas Sebastian', "Carrera 10 # 5 - 37 ", "$ 50", "3"), 3.260093,  -76.543867, 3, markerIcon],
            [locationData('listing-single.html', 'images/establecimientos/licores_grande.jpg', 'ESTANCO EL CORSO', "Calle 18a # 8a - 101 ", "$ 210", "5"), 3.265185, -76.536475, 4, markerIcon],
            [locationData('listing-single.html', 'images/establecimientos/la-flecha.jpg', 'COMERCIALIZADORA LA FLECHA S.A.S', "Carrera 11 # 7 - 81", "$ 105", "4"), 3.262022,-76.542646, 5, markerIcon],
            [locationData('listing-single.html', 'images/establecimientos/logo-cafe.jpeg', 'Café Xamundí', " ", "$ 115", "3"), 3.262058, -76.540470, 6, markerIcon],
            [locationData('listing-single2.html', 'images/inversiones/jugos_abuela.jpeg', 'Jugos de La Abuela', "calle 10 #8-117", "$70", "5"), 3.260280, -76.539800, 7, markerIcon],

        ];


	    //   Map Infoboxes end ------------------
        var map = new google.maps.Map(document.getElementById('map-main'), {
            zoom: 14.5,
            scrollwheel: false,
            center: new google.maps.LatLng(3.262096, -76.540240),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            fullscreenControl: true,
            navigationControl: false,
            streetViewControl: false,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [{
                    "featureType": "poi.attraction",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.medical",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.place_of_worship",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.school",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit.station.bus",
                    "stylers": [{
                        "visibility": "off"
                    }]

                }
            ]
        });
        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-137, -25),
            zIndex: null,
            boxStyle: {
                width: "260px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };

        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];
        console.log(locations.length)
        for (i = 0; i < locations.length; i++) {
            console.log(locations[i][1], locations[i][2]);
            var labels = '123456789';
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: locations[i][4],
                id: i,
                label: {
                    text: "" + (i + 1),
                    color: "#3AACED",
                    fontSize: "11px",
                    fontWeight: "bold",
                },
            });
            allMarkers.push(marker);
            var ib = new InfoBox();
            google.maps.event.addListener(ib, "domready", function () {
                cardRaining()
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    map.panTo(latLng);
                    map.panBy(0, -50);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.infoBox-close').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
        var options2 = {
            imagePath: 'images/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options2);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        if ($(".controls-mapwn").length) {
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });
            var markers = [];
            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        $('.map-item').on("click", function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
            google.maps.event.trigger(allMarkers[marker_index], "click");
            if ($(window).width() > 1064) {
                if ($(".map-container").hasClass("fw-map")) {
                    $('html, body').animate({
                        scrollTop: $(".map-container").offset().top + "-110px"
                    }, 1000)
                    return false;
                }
            }
        });
        $('.nextmap-nav').on("click", function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            if (index + 1 < allMarkers.length) {
                google.maps.event.trigger(allMarkers[index + 1], 'click');
            } else {
                google.maps.event.trigger(allMarkers[0], 'click');
            }
        });
        $('.prevmap-nav').on("click", function (e) {
            e.preventDefault();
            map.setZoom(15);
            if (typeof (currentInfobox) == "undefined") {
                google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
                var index = currentInfobox;
                if (index - 1 < 0) {
                    google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
                } else {
                    google.maps.event.trigger(allMarkers[index - 1], 'click');
                }
            }
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);
        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                map.setZoom(map.getZoom() - 1);
            });
        }
    }
    var map = document.getElementById('map-main');
    if (typeof (map) != 'undefined' && map != null) {
        
        google.maps.event.addDomListener(window, 'load', mainMap);
    }
})(this.jQuery);