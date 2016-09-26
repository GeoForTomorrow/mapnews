<!--

	NewsView/MapNews
	Developed by:
		Geography For Tomorrow, Inc (http://geofortomorrow.org),
		0xFireball (https://0xfireball.me)

-->

<!DOCTYPE HTML>
<html>
	<head>
		<LINK REL="SHORTCUT ICON" HREF="/../images/gftLogo.ico">
        <title>NewsView</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/foundation.css" />
	    <link rel="stylesheet" href="css/app.css" />
        <!--<link rel="stylesheet" href="/../assets/css/main.css"/>-->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />-->
		<script type="text/javascript" src="mapcore.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <style type="text/css">
            html, body {
              overflow: hidden;
            }
        </style>
	</head>

    <body class="homepage">
<!--<div class="container container1">-->

	<div class="container1">
            <div class="headerNews">
                    <h1>NewsView</h1>
                    <input class="short lessMoreSpaceLeft spaceAbove" type="text" id="location" placeholder="Location">
                    <input class="short spaceLeft spaceAbove" type="text" id="newsItem" placeholder="News topic">
                    <a href="#" class="button buttonRed moreSpaceLeft spaceAbove" id="tut">Tutorial</a>
                    <a href="#" class="button buttonGreen lessSpaceLeft spaceAbove" id="info">Information/About</a>
                <!--<div class="form-group spaceLeft">
                      <input type="text" class="form-control" id="usr" placeholder="City, state, or country">
                    </div>
                    <div class="form-group spaceLeft">
                      <input type="text" class="form-control" id="usr" placeholder="News topic">
                    </div>
                    <li><a href="#" class="button special buttonRed" onclick="location.href='tutorial.html'">Tutorial</a></li>
                    <button class="btn btn-info"  onclick="location.href='i.html'">Information</button>
                    <p>Developed by <a href="dev.geofortomorrow.org" target="_blank">Geography for Tomorrow</a></p>-->

            </div>
            <div class="headerNews2" id="popUpWind">
                    <h1>NewsView</h1>
                    <input class="short spaceAbove" type="text" id="location" placeholder="Location">
                    <input class="short lessSpaceAbove" type="text" id="newsItem" placeholder="News topic">
                    <!--<div class="buttonsSameRow"><a href="#" class="button buttonRed spaceAbove" onclick="location.href='tutorial.html'">Tutorial</a>
                    <a href="#" class="button buttonGreen spaceAbove" onclick="location.href='information.html'">Information/About</a></div>
                    <div class="buttonsDiff">--><a href="#" class="button buttonRed spaceAbove" id="tut2">Tutorial</a>
                    <a href="#" class="button buttonGreen lessSpaceAbove" id="info2">Information/About</a>
            </div>
            <div class="menu" id="menu">menu</div>
		    <div class="map" id="map"></div>
            <div class="popUp" id="tutorial">
                <h2>NewsView Tutorial</h2>
                <p class="firstP">NewsView is an application developed by <a href="dev.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) that synthesizes the latest news from sources like <i>The New York Times</i>. Then, based on the location that each news item references, it is placed on the map, providing an interactive way to learn about what's going on in the world. Whether you are interested in the news of a specific region or news of a specific type, NewsView enables you to explore and build your awareness of current events. NewsView was made in collaboration with <a href="https://0xfireball.me" target="_blank">0xFireball</a>.</p>
                <p><b>Markers: </b>Each marker on the map denotes a news item. Click on a marker of interest, and a small textbox appears with the title of the news. Click on the textbox, and you can learn more about the news item!</p>
                <p><b>Search: </b>Search for a specific region in the first search area marked "Location." Search for a specific news topic in the second search area marked "News topic." Note that you can only search for one at a time.</p>
                <p><b>Suggested Use: </b>This application was built to be used in the elementary, middle, and high school classroom. Students can open up the webpage on computers, tablets, or smartphones, and the teacher can guide the students through a 10-minute activity visiting different places on the map and learning about events that are happening in real-time.</p>
                <p><b>Note on Accessibility: </b>The news synthesized by this application comes from <i>The New York Times</i> and adheres to the highest standards of appropriateness. However, we understand that some news items might be inappropriate for some audiences (ex. depicting overt violence or inappropriate themes), and we try our best to eliminate them from our news database.</p>
                <p><b>Games: </b>Coming soon!</p>
                <p><b>Contact us</b> for more information, suggested lesson plans, and feedback: contact@geofortomorrow.org</p>
            </div>
            <div class="popUp" id="information">
                <h2>About NewsView</h2>
                <h3>Version 1.0 &copy; 2016 Geography for Tomorrow Inc.</h3>
                <p class="firstP">NewsView was developed by <a href="dev.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) in collaboration with <a href="https://0xfireball.me/" target="_blank">0xFireball</a>. NewsView's creation was made possible by the resources provided by <a href="http://www.bcp.org" target="_blank">Bellarmine College Preparatory's</a> Computer Science Department.</p>
                <p><b>Project Leaders: </b> Arvind Sridhar (Founder/President of Geography for Tomorrow and GFT Labs), <a href="https://0xfireball.me" target="_blank">Nihal Talur</a> (Vice President of GFT Labs), Dylan Doblar (Programmer at GFT Labs), and Brad Lindemann (Teacher at Bellarmine College Preparatory and Mentor at GFT Labs)</p>
                <p><b>Last Updated: </b>September 24, 2016</p>
                <p><b>Contact us</b> for troubleshooting, more information, suggested lesson plans, and feedback: contact@geofortomorrow.org</p>
            </div>
            <div class="popUp2" id="tutorial2">
                <h2>NewsView Tutorial</h2>
                <p class="firstP">NewsView is an application developed by <a href="dev.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) that synthesizes the latest news from sources like <i>The New York Times</i>. Then, based on the location that each news item references, it is placed on the map, providing an interactive way to learn about what's going on in the world. Whether you are interested in the news of a specific region or news of a specific type, NewsView enables you to explore and build your awareness of current events.</p>
                <p><b>Markers: </b>Each marker on the map denotes a news item. Click on a marker of interest, and a small textbox appears with the title of the news. Click on the textbox, and you can learn more about the news item!</p>
                <p><b>Search: </b>Search for a specific region in the first search area marked "Location." Search for a specific news topic in the second search area marked "News topic." Note that you can only search for one at a time.</p>
                <p><b>Suggested Use: </b>This application was built to be used in the elementary, middle, and high school classroom. Students can open up the webpage on computers, tablets, or smartphones, and the teacher can guide the students through a 10-minute activity visiting different places on the map and learning about events that are happening in real-time.</p>
                <p><b>Note on Accessibility: </b>The news synthesized by this application comes from <i>The New York Times</i> and adheres to the highest standards of appropriateness. However, we understand that some news items might be inappropriate for some audiences (ex. depicting overt violence or inappropriate themes), and we try our best to eliminate them from our news database.</p>
                <p><b>Games: </b>Coming soon!</p>
                <p><b>Contact us</b> for, more information, suggested lesson plans, and feedback: contact@geofortomorrow.org</p>
            </div>
            <div class="popUp2" id="information2">
                <h2>About NewsView</h2>
                <h3>Version 1.0 &copy; 2016 Geography for Tomorrow Inc.</h3>
                <p class="firstP">NewsView was developed by <a href="dev.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) in collaboration with <a href="https://0xfireball.me/" target="_blank">0xFireball</a>. NewsView's creation was made possible by the resources provided by <a href="http://www.bcp.org" target="_blank">Bellarmine College Preparatory's</a> Computer Science Department.</p>
                <p><b>Project Leaders: </b> Arvind Sridhar (Founder/President of Geography for Tomorrow and GFT Labs), Nihal Talur (Vice President of GFT Labs), Dylan Doblar (Programmer at GFT Labs), and Brad Lindemann (Teacher at Bellarmine College Preparatory and Mentor at GFT Labs)</p>
                <p><b>Last Updated: </b>September 24, 2016</p>
                <p><b>Contact us</b> for troubleshooting, more information, suggested lesson plans, and feedback: contact@geofortomorrow.org</p>
            </div>
            <script type="text/javascript">
            var count = 0;
            var count2 = 0;
            $(document).mouseup(function (e)
            {
                var container = $("#popUpWind");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            $("#menu").click(function(){
                $("#popUpWind").fadeIn(300);
            });
            $("#tut").click(function(){
                $("#tutorial").show();
                $("#tutorial").animate({bottom:'0%'},800);
                count = count+1;
            });
            $("#tut2").click(function(){
                $("#tutorial2").fadeIn(300);
            });
            $("#info").click(function(){
                $("#information").show();
                $("#information").animate({bottom:'0%'},800);
                count2 = count2+1;
            });
            $("#info2").click(function(){
                $("#information2").fadeIn(300);
            });
            $(document).mouseup(function (e)
            {
                var container = $("#tutorial");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    && count%2!=0)
                {
                    count = count+1;
                    if (count%2==0) {
                    container.animate({bottom:'-80%'},800);
                    container.fadeOut(0);}
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#information");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    && count2%2!=0)
                {
                    count2 = count2+1;
                    if (count2%2==0) {
                    container.animate({bottom:'-80%'},800);
                    container.fadeOut(0);}
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#tutorial2");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#information2");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            </script>
        </div>
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