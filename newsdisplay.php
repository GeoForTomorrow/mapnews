<?php
include_once("news.php");
include_once("location.php");
header("content-type: application/x-javascript; charset=utf-8");
//Generate markers based on news tag
$newsObjects = getNewsObjects();
$customMarkers = '';
$results = $newsObjects;

$resultsnum = sizeof($results);
for ($i=0;$i<=$resultsnum;$i++)
{
    $caption = $results[$i]['caption'];
    $abstract =$results[$i]['abstract'];
    $originalURL = $results[$i]['url'];
    $geoFacet = $results[$i]['geo_facet'];
    $locationStr = "";
    $lat = -1;
    $lng = -1;
    if ($geoFacet != "")
    {
        $locationStr = $geoFacet[0]; //Assign to first location tag
        //Get coords from GMaps
        $latlng = parseLatLngStrJsonForCoordinates(getLatLngJson($locationStr));
        $lat = $latlng['lat'];
        $lng = $latlng['lng'];
    }
    $title = $results[$i]['title'];
    $currentResultMarker = <<<EOT
    var marker=new google.maps.Marker({
        //position: tryParseLocFromURL(currentMapLoc), //position, ANYWHERE
        position: new google.maps.LatLng(parseFloat($lat), parseFloat($lng)),
        animation: google.maps.Animation.DROP, //animation, only BOUNCE or DROP, i like bounce better
        title: "$title", //marker TOOLTIP
        icon: "newsmarker.png" //marker icon
    });
    markers.push(marker);    //add the marker to the array
    infoWindowText.push("$abstract"); //add content for the infowindow
    marker.setMap(map); //add the marker to the map

EOT;
    $customMarkers .= $currentResultMarker;
}
$markerWrapperFunction = <<<EOT
function addMarkers()
{
    $customMarkers
}
EOT;

echo file_get_contents("mapcore.js"); //Echo map core
echo $markerWrapperFunction;
?>