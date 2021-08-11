<?php

require 'vendor/autoload.php';
require 'Src/Scrapper.php';

use Mark\App;

$api = new App('http://0.0.0.0:3000' );

$api->any('/', function ( $request ){
  return file_get_contents('Src/search.php');
});

$api->get('/search', function( $request ) {

  $question = $request->get()['q'] ?? null;
  $start    = $request->get()['pages'] ?? null;

  $results = Scrapper::search( $question , $start );

  ob_start();

  include 'Src/results.php';

  return ob_get_clean();
});

$api->start();
