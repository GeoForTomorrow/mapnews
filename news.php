<?php
include_once('config.php');
include_once('caching.php');
include_once('./httpful.phar');
include_once('newsparser.php');
header('Content-Type: text/html; charset=utf-8');
getNewsObjects();

	function getNewsObjects()
	{
		//CACHING ENABLED: The server will only fetch news again if the cache has expired. Set expiry values in caching.php
		/*************** CACHE **************/
		$newsCacheName = 'newscache';
		$responsejson = null;
		$cacheExpired = is_null(checkCache($newsCacheName));
		$noCache = !is_null($_GET["nocache"]);

		////////////////////////

		if ($cacheExpired || $noCache)
		{
			$uri = "http://api.nytimes.com/svc/news/v3/content/all/all.json?api-key=$newsapikey";
			$rawresponsejson = \Httpful\Request::get($uri)->send();
			$responsejson = $rawresponsejson.raw_body;
			setCacheVal($newsCacheName, $responsejson);
			if ($debug) echo("Fetched.");
		}
		else
		{
			if ($debug) echo("From cache.");
			$responsejson = getCacheVal($newsCacheName);
		}
		return parseArticleObjectsFromJson($responsejson);
	}
?>