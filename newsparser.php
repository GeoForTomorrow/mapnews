<?php
   function parseNews($jsonToParse)
   {
      $jsonToParse = mb_convert_encoding($jsonToParse, "HTML-ENTITIES", "UTF-8");
      $jsonToParse = str_ireplace("raw_body","",$jsonToParse);
      $jsonToParse = str_ireplace("â€˜","&rsquo;",$jsonToParse);
      $jsonobject = json_decode($jsonToParse, TRUE);

      /*
      $jsonIterator = new RecursiveIteratorIterator(
      new RecursiveArrayIterator(json_decode($jsonToParse, TRUE)),
      RecursiveIteratorIterator::SELF_FIRST);

      foreach ($jsonIterator as $key => $val) {
      /*
      if(is_array($val)) {
        echo "$key:<br />";
      } else {
        echo "$key => $val<br />";
      }

      }
      */

      $results = $jsonobject['results'];
      $resultsnum = sizeof($results);



      for ($i=0;$i<=$resultsnum;$i++)
      {
         echo ("<h2>".$results[$i]['title'])."</h2>";
         echo ("<h6>".$results[$i]['caption'])."</h6>";
         echo ("<p>".$results[$i]['abstract'])."</p>";
         echo ("<a target=\"blank\" href=\"".$results[$i]['url'])."\">Read Original Article</a><br><br>";
      }
      return "";
      $responseBox = "<script>document.getElementById('news').innerHTML='$results';</script>";
      return $responseBox;

   }

?>
