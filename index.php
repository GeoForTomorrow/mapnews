<!DOCTYPE HTML>
<html>
	<head>
		<title>GFT News</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/foundation.css" />
	    	<link rel="stylesheet" href="css/appMobile.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
		<!--<script type="text/javascript" src="main.js"></script>-->
		<script type="text/javascript" src="newsdisplay.php"></script>
	</head>

    <body class="homepage">
<!--<div class="container container1">-->
	<div class="header" id="hoverPanel">

			<div class = "center"><button onclick="location.href='news.php'"><div class = "center"><h1>NewsView</h1></div></button></div>
			<div class="form-group spaceSides">
			  <input type="text" class="form-control" id="usr" placeholder="City, state, or country" style = "margin-top:10px;">
			</div>
			<div class="form-group spaceSides">
			  <input type="text" class="form-control" id="usr" placeholder="News topic" style = "margin-top:10px;">
			</div>
			<div class="center">
				<button class="btn btn-primary" onclick="location.href='tutorial.html'">Tutorial</button>
				<button class="btn btn-info"  onclick="location.href='i.html'">Information</button>
			</div>
			<div class="cool-text center"><p>Developed by <a href="http://geofortomorrow.org" target="_blank">Geography for Tomorrow Inc.</a> in collaboration with <a href="https://github.com/0xFireball" target="_blank">0xFireball</a><h6><a onclick="closeHoverPanel()">close</a></h6></p></div>
	</div>
	<!--<div class = "floatingBox"><h1>Hi</h1></div>-->
		<div class="map" id="map"></div>
		<!--<script type="text/javascript">
			var map;
			function initMap() {
			  map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: 37.7833, lng: -122.4167},
			    zoom: 15
			  });
			}
		</script>-->
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGGHhcb9WFb55q77UWaAvGxbWJOLvetiQ&callback=initializeMap">
		</script>
	<!--</div>-->


	<!--Modal Dialogs-->


	<!--Some Framework Scripts-->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/what-input.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/app.js"></script>
    <script>
    	function closeHoverPanel()
    	{
			var hp = document.getElementById('hoverPanel');
			hp.parentElement.removeChild(hp);
    	}
    </script>
    </body>

</html>