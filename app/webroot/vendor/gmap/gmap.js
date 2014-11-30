$(document).ready(function() {
    InitMap();
});


function LoadMap() {
	var locations = new Array(
        [39.027718,-109.231567], [39.385263,-115.784912], [39.546411,-111.450805], [40.187266,-111.582641], [40.446947,-111.049804], [40.455307,-107.523193], [40.647303,-110.588378], [40.455307,-109.533691], [41.240641,-111.824340], [41.672911,-106.704711], [41.943148,-111.615600], [42.024813,-112.109985]
	);
	var markers = new Array();
	var mapOptions = {
		center: new google.maps.LatLng(40.446947, -111.049804),
		zoom: 7,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $.each(locations, function(index, location) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location[0], location[1]),
            map: map,
            icon: 'images/makers/marker-transparent.png'
        });

	    var myOptions = {
	        content: '<div class="infobox pgl-property pgl-bg-light"><div class="property-thumb-info"><div class="property-thumb-info-image"><img alt="" class="img-responsive" src="images/properties/property-1.jpg"><span class="property-thumb-info-label"><span class="label price">$358,000</span><span class="label forrent">Rent</span></span></div><div class="property-thumb-info-content"><h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3><address>Ferris Park, Jersey City Land in Sales</address></div><div class="amenities clearfix"><ul class="pull-left"><li><strong>Area:</strong> 450<sup>m2</sup></li></ul><ul class="pull-right"><li><i class="icons icon-bedroom"></i> 3</li><li><i class="icons icon-bathroom"></i> 2</li></ul></div></div></div>',
	        disableAutoPan: false,
	        maxWidth: 0,
	        pixelOffset: new google.maps.Size(-146, -190),
	        zIndex: null,
	        closeBoxURL: "",
	        infoBoxClearance: new google.maps.Size(1, 1),
	        position: new google.maps.LatLng(location[0], location[1]),
	        isHidden: false,
	        pane: "floatPane",
	        enableEventPropagation: false
	    };
	    marker.infobox = new InfoBox(myOptions);
		marker.infobox.isOpen = false;

	    var myOptions = {
	        draggable: true,
			content: '<div class="marker"><div class="marker-inner"></div></div>',
			disableAutoPan: true,
			pixelOffset: new google.maps.Size(-21, -58),
			position: new google.maps.LatLng(location[0], location[1]),
			closeBoxURL: "",
			isHidden: false,
			// pane: "mapPane",
			enableEventPropagation: true
	    };
	    marker.marker = new InfoBox(myOptions);
		marker.marker.open(map, marker);
		markers.push(marker);

        google.maps.event.addListener(marker, "click", function (e) {
            var curMarker = this;

            $.each(markers, function (index, marker) {
                // if marker is not the clicked marker, close the marker
                if (marker !== curMarker) {
                    marker.infobox.close();
                    marker.infobox.isOpen = false;
                }
            });


            if(curMarker.infobox.isOpen === false) {
                curMarker.infobox.open(map, this);
                curMarker.infobox.isOpen = true;
                map.panTo(curMarker.getPosition());
            } else {
                curMarker.infobox.close();
                curMarker.infobox.isOpen = false;
            }

        });
    });
}

function InitMap() {
    if ($('#map').length !== 0) {
	    google.maps.event.addDomListener(window, 'load', LoadMap);
    }
	
}