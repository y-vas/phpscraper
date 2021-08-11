<?php

class Scrapper {

  public static function search($search, $start = 0){
    // instead of using a db we use a the session to make this more simpler
    $dbarr = $_SESSION[$search] = $_SESSION[$search] ?? [];

    $dom = new DOMDocument;
    $dom->loadHTMLFile('https://www.google.es/search?q=' . urlencode($search) . '&start=' . urlencode($start) );

    $links = $dom->getElementsByTagName( "h3" );

    foreach( $links as $link ) {
        $anchor = $link->parentNode;
        $url    = $anchor->getAttribute('href');

        // deobfucate the url given by google
        $q = parse_url( $url )['query'];
        parse_str( $q , $params );
        $url = $params['q'];

        // check the url how many matches has and (store or update)
        // them in the session
        if ( !empty( $url ) ){
          $count = isset($dbarr[$url]) ? $dbarr[$url] : 0;
          $count += substr_count(file_get_contents( $url ), $search );
          $_SESSION[$search][$url] = $count;
        }
    }

    // sort the matches
    uasort($_SESSION[$search], function($a, $b) {
      return $b - $a;
    });

    return $_SESSION[$search];
  }



}
