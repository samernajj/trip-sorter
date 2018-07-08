<?php

// Define Json File Path
define('JSON_FILE_PATH', __DIR__ . '/jsonFile/');

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

use App\FacadeTrip;

// This is dummy file data  
$jsonFile = JSON_FILE_PATH . 'trips.json';
$json = file_get_contents($jsonFile);
$json_data = json_decode($json, true);

// complete the journey
$facadeTrip = new FacadeTrip();
$completeJourney = $facadeTrip->newRandomJourneys($json_data);
