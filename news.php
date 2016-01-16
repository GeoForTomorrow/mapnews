<?php
$apikey = "2114c2cb601b0c59901797bf147a4f82:0:73729815";
include('./httpful.phar');
?>

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
    	<link rel="stylesheet" href="css/app.css" />
	</head>
	
	<body>
		<div id="news">
			<?php
				$placeholder = "<script>document.getElementById('news').innerHTML='Fetching News...';</script>";
				echo $placeholder;
				$uri = "http://api.nytimes.com/svc/news/v3/content/all/all.json?api-key=$apikey";
				$responsejson = \Httpful\Request::get($uri)->send();
				$responsebox = "<script>document.getElementById('news').innerHTML='$response';</script>";
				//echo $responsebox;
				$jsonIterator = new RecursiveIteratorIterator(
				new RecursiveArrayIterator(json_decode($responsejson, TRUE)),
				    RecursiveIteratorIterator::SELF_FIRST);
				
				foreach ($jsonIterator as $key => $val) {
				    if(is_array($val)) {
				        echo "$key:<br />";
				    } else {
				        echo "$key => $val<br />";
				    }
				}
			?>
		</div>
		
	</body>
</html>