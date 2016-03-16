<?php
include_once("config.php");
/************* DEMO ********************
header("Content-Type: text/plain");
error_reporting(-1);
$latlng = parseLatLngStrJsonForCoordinates(getLatLngJson("San Jose"));
$lat = $latlng['lat'];
$lng = $latlng['lng'];
echo $lat;
echo $lng;
*/
function getLatLngJson($geoKeyword)
{
    $geoKeyword = urlencode($geoKeyword);
    $uP = "address=".$geoKeyword."&key=$geoapikey";
    $wbr = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?".$uP);
    return $wbr;
}
function parseLatLngStrJsonForCoordinates($json)
{
    $jsonobject = json_decode($json, TRUE);
    $results = $jsonobject['results'];
    $locObj = $results[0]['geometry']['viewport']['northeast'];
    $lat = $locObj['lat'];
    $lng = $locObj['lng'];
    //$llngstr = ((string)$lat).",".((string)$lng);
    //return $llngstr;
    return array('lat'=>$lat, 'lng'=>$lng);
}
function getLatLngFromString($locstr) //RETURNS AN ARRAY, where ARRAY['lat'] contains the latitude, and ARRAY['lng'] contains the longitude
{
    return parseLatLngStrJsonForCoordinates(getLatLngJson($locstr));
}
?>