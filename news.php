<?php
include_once('config.php');
include_once('caching.php');
include_once('./httpful.phar');
include_once('newsparser.php');
header('Content-Type: text/html; charset=utf-8');
?>


<!DOCTYPE HTML>
<html>
   <head>
      <title>GFT News</title>
		<meta http-equiv="content-twype" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/foundation.css" />
    	<link rel="stylesheet" href="css/app.css" /><link rel="stylesheet" type="text/css" href="css/newsformat.css">
   </head>

	<body>
		<script src=js/modernizr.js></script>
		<script>
		Modernizr.load({
		    test: Modernizr.touch,
		    yep : 'appMobile.css',
		});
		</script>
		<div id="news">
			<?php

				$uri = "http://api.nytimes.com/svc/news/v3/content/all/all.json?api-key=$newsapikey";
				$rawresponsejson = \Httpful\Request::get($uri)->send();
				$responsejson = $rawresponsejson.raw_body;
				echo printArticleObjects(parseArticleObjectsFromJson($responsejson));
			?>
		</div>

	</body>
</html>