var map;
var marker;

function initialize() {

    // Use HTML5 Geolocation to find user location.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition,PositionError);
    } else {
        //document.getElementById('map-canvas').innerHTML = "Geolocation is not supported by this browser."; 
        showPosition();  
    }
 
}

function PositionError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
           document.getElementById('map-canvas').innerHTML="User denied the request for Geolocation.";
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById('map-canvas').innerHTML="Location information is unavailable.";
           
            break;
        case error.TIMEOUT:
            document.getElementById('map-canvas').innerHTML="The request to get user location timed out.";
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById('map-canvas').innerHTML="An unknown error occurred.";
            break;
    }    
     // Use default location
      showPosition();
}


function showPosition(position) {

    // Default map center in London
    var lat = 51.5286417;
    var lng =  -0.1015987;
   
    //  Overwrite default location with the device's location if browser support 
   if (position) {
       lat = position.coords.latitude;
       lng = position.coords.longitude;
    }
    
    var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(lat,lng)
      };
      
    map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
    
    //Add handler when user click on the map
    google.maps.event.addListener(map, 'click', dropPin);
  

}

function dropPin(event) {
    
    // Remove previous marker   
    if(marker)
        marker.setMap(null);
  
    marker = new google.maps.Marker({
        position: event.latLng,
        map: map,
        draggable:true,
        animation: google.maps.Animation.DROP
    });
  
     //Add handler when user drag pin to new position
    google.maps.event.addListener(marker, 'dragend', updatePos);
   
    // Update GPS location on Screen 
    updatePos();
    
}

function updatePos(){
    
    var pinPos =marker.getPosition().lat()+","+marker.getPosition().lng();
    document.getElementById('pinPos').value = pinPos;
}


google.maps.event.addDomListener(window, 'load', initialize);