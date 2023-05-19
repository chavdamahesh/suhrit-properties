var map, sInfoBubble;
var iterator = 0;
var markers = [];

$(document).ready(function () {

    var contentString = [
        '<div class="infobox-inner"><a href="08_Properties_Single.html"><img src="assets/img/icon-1.png" alt=""/><span>HSM Villa</span></a></div>',
        '<div class="infobox-inner"><a href="08_Properties_Single.html"><img src="assets/img/icon-2.png" alt=""/><span>HSM Flat</span></div>',
        '<div class="infobox-inner"><a href="08_Properties_Single.html"><img src="assets/img/icon-3.png" alt=""/><span>HSM Commercial</span></div>',
        '<div class="infobox-inner"><a href="08_Properties_Single.html"><img src="assets/img/icon-4.png" alt=""/><span>HSM Appartment</span></a></div>'
    ];

    function initialize() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
            scrollwheel: false,
            zoom: 12,
            zoomControl:false,
            mapTypeControl: false,
            center: new google.maps.LatLng(50.8503463, 4.3517211), //Brussels
            streetViewControl:false,

            styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#00aaff"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
            // styles: [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}]
                    
        });
        
        setTimeout(function () {
            drop();
        }, 1000);

    }

    // animate markers
    function drop() {
        for (var i = 0; i < markerLatLng.length; i++) {
            setTimeout(function () {
                // addMarker();
            }, i * 400);
        }
    }

    function addMarker() {
        var marker = new google.maps.Marker({
            position: markerLatLng[iterator],
            map: map,
            icon: '/hsm-assets/img/home-map-marker.jpg',
            draggable: false
            //,animation: google.maps.Animation.DROP
        });
        markers.push(marker);

       /* var sInfoBubble = new InfoBubble({
            map: map,
            content: contentString[iterator],
            position: markerLatLng[iterator],
            disableAutoPan: true,
            hideCloseButton: true,
            shadowStyle: 0,
            padding: 0,
            borderRadius: 3,
            borderWidth: 1,
            borderColor: '#74d2b2',
            backgroundColor: '#ffffff',
            backgroundClassName: 'infobox-bg',
            minHeight: 35,
            maxHeight: 230,
            minWidth: 200,
            maxWidth: 300,
            arrowSize: 5,
            arrowPosition: 50,
            arrowStyle: 0
        });

        setTimeout(function () {
            sInfoBubble.open(map, marker);
        }, 200);

        google.maps.event.addListener(marker, 'click', function () {
            if (!sInfoBubble.isOpen()) {
                sInfoBubble.open(map, marker);
            }
            else {
                sInfoBubble.close(map, marker);
            }
        });*/

        iterator++;
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});

function showMarker(lat, lng) {
    for (let i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    var gLocation = new google.maps.LatLng(lat,lng);

    var marker = new google.maps.Marker({
        position: gLocation,
        map: map,
        icon: '/hsm-assets/img/home-map-marker.jpg',
        draggable: false
        //,animation: google.maps.Animation.DROP
    });
    markers.push(marker);
    
    var latlng = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
    map.setCenter(latlng);
}
