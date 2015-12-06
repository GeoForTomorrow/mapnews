var map;
var markers = [];
var infoWindowText = [];
var currentMapLoc;

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function tryParseLocFromURL(oLoc)
{
    var lat = getParameterByName('lat');
    var lng = getParameterByName('lng');
    var newLoc = oLoc;
    if ((lat!='')&&(lng!=''))
    {
        return new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
    }
    else
    {
        return oLoc;
    }
}

function initializeMap() {
    var _centerLoc = new google.maps.LatLng(37.7833, -122.4167);
    var centerLoc = tryParseLocFromURL(_centerLoc);
    currentMapLoc = centerLoc;
    var mapOptions = {
        zoom: 10, //map zoom
        center: centerLoc, //our location to center on, by default the bay
        mapTypeId: google.maps.MapTypeId.ROADMAP //The default 2d map
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(initialLocation);
        });
    }
    mapMain();
}
function addMarkers()
{
    var marker=new google.maps.Marker({
        position: tryParseLocFromURL(currentMapLoc), //position, ANYWHERE
        animation: google.maps.Animation.BOUNCE, //animation, only BOUNCE or DROP, i like bounce better
        title: "NINJA!!!.", //marker TOOLTIP
        icon: "marker.png" //marker icon
    });
    markers.push(marker);    //add the marker to the array
    infoWindowText.push("NINJA!!!"); //add content for the infowindow
    marker.setMap(map); //add the marker to the map
    
}
function showInfoWindows()
{
    for (var i = 0; i < markers.length; ++i) {
        //Display info windows
        var infowindow = new google.maps.InfoWindow({
            content: infoWindowText[i]
        });
        
        infowindow.open(map,markers[i]);
        
        //add click event handlers
        google.maps.event.addListener(markers[i],'click',function() {
            onMarkerClick(i);
        });
    }
}
function onMarkerClick(markerId)
{
    alert('you clicked a marker.');
}
function mapMain()
{
    //Main code
    addMarkers();
    showInfoWindows();
}

