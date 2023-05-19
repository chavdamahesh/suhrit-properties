
 function initialize(lat,lng) {
    var myLatlng = new google.maps.LatLng(lat,lng);
    var myOptions = {
      zoom: 12,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    
    var marker = new google.maps.Marker({    	
        position: myLatlng, 
        map: map,
        draggable:true
    });
    
    google.maps.event.addListener(
        marker,
        'drag',
        function() {
            var upLat = marker.position.lat();
            var upLng = marker.position.lng();
            $("input#lat").val(upLat).trigger('input');
            $("input#lng").val(upLng).trigger('input');
            angular.element($('#lat')).triggerHandler('input');
            angular.element($('#lng')).triggerHandler('input');
        }
    );
  }



