<?php
require 'flight/Flight.php';
require 'language/language.php';

// Variables
Flight::set('flight.views.path', './views');

// Routes
Flight::route('/', function () {
  Flight::render('home');
});

Flight::route('/quote', function () {
  $query = Flight::request()->query;

  header('Cache-Control: no-cache');
  header('Content-type: image/svg+xml');

  require 'views/home_new.php';

});

Flight::start();
