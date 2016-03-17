<?php
include_once("news.php");
header("content-type: application/x-javascript");
//Generate markers based on news tag
$newsObjects = getNewsObjects();
$customMarkers = '';
$resultsnum = sizeof($results);
for ($i=0;$i<=$resultsnum;$i++)
{
    $caption = $results[$i]['caption'];
    $abstract =$results[$i]['abstract'];
    $originalURL = $results[$i]['url'];
    $title = $results[$i]['title'];
    $currentResultMarker = <<<EOT
    var marker=new google.maps.Marker({
        position: tryParseLocFromURL(currentMapLoc), //position, ANYWHERE
        animation: google.maps.Animation.DROP, //animation, only BOUNCE or DROP, i like bounce better
        title: $title, //marker TOOLTIP
        icon: "newsmarker.png" //marker icon
    });
    markers.push(marker);    //add the marker to the array
    infoWindowText.push($abstract); //add content for the infowindow
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