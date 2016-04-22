<?php
//Caching - 0xFireball [3/16/2016]
/*************************************************************
 *
 * Caching backend to prevent spamming the APIs
 * We cache results, and more stuff...
 * blah blah blah
 *
 *
 *
 *
 * ***********************************************************/
$cachePath = "./cache/";
$cacheExpirationPeriod = 600; //10 minutes
//$cacheExpirationPeriod = 10; //10 minutes

    function init_cache()
    {
        if (!file_exists($cachePath))
        {
            //Create if not exist
            mkdir($cachePath, 0777, true);
        }
        else
        {
            //DELETUS EVERYTHINGUS
            $files = glob($cachePath.'*'); // get all file names
            foreach($files as $file)
            { // iterate files
                if(is_file($file))
                    unlink($file); // delete file
            }
        }
    }


    /**
     * Check Cache
     * Parameters:
     * $filename - the name of the cache file to check
     *
     * Returns:
     * NULL if the cache file does not exist or has expired
     * TRUE if the cache file exists and has not expired.
     *
     */
    function checkCache($fileName)
    {
        global $cachePath, $cacheExpirationPeriod;
        $qfilePath = $cachePath.$fileName;
        if (!is_file($qfilePath))
        {
            return null;
        }
        else
        {
            $ftimestamp = filemtime($qfilePath); //file timestamp
            $currenttime = time();
            if ($currenttime-$ftimestamp<$cacheExpirationPeriod)
            {
                return true; //Cache available
            }
            else {
                return null; //Cache expired.
            }
        }
    }

    function getCacheVal($fileName) //See checkCache for more info
    {
        global $cachePath, $cacheExpirationPeriod;
        $qfilePath = $cachePath.$fileName;
        return file_get_contents($qfilePath);
    }

    function setCacheVal($fileName, $contents)
    {
        global $cachePath, $cacheExpirationPeriod;
        $qfilePath = $cachePath.$fileName;
        file_put_contents($qfilePath, $contents);
    }
?>