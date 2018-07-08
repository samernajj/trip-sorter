<?php

namespace Tests;

use App\TripSorter;

class TripSorterTest extends \PHPUnit\Framework\TestCase
{
    protected $tripArray = array(
        array(
            "Departure" => "Saudi Arabia",
            "Arrival" => "Oman",
            "Transportation" => "Train",
            "Transportation_number" => "SS488",
            "Seat" => "5D"
        ),
        array(
            "Departure" => "Lebanon",
            "Arrival" => "Jordan",
            "Transportation" => "Plane",
            "Transportation_number" => "SK11",
            "Seat" => "6C",
            "Gate" => "2"
        ),
        array(
            "Departure" => "Oman",
            "Arrival" => "UAE",
            "Transportation" => "Plane",
            "Transportation_number" => "KS11",
            "Seat" => "7A",
            "Gate" => "1"
        ),
        array(
            "Departure" => "Jordan",
            "Arrival" => "Saudi Arabia",
            "Transportation" => "Bus"
        ),
    );

    protected $expectedTripArray = array(
        array(
            "Departure" => "Lebanon",
            "Arrival" => "Jordan",
            "Transportation" => "Plane",
            "Transportation_number" => "SK11",
            "Seat" => "6C",
            "Gate" => "2"
        ),
        array(
            "Departure" => "Jordan",
            "Arrival" => "Saudi Arabia",
            "Transportation" => "Bus"
        ),
        array(
            "Departure" => "Saudi Arabia",
            "Arrival" => "Oman",
            "Transportation" => "Train",
            "Transportation_number" => "SS488",
            "Seat" => "5D"
        ),
        array(
            "Departure" => "Oman",
            "Arrival" => "UAE",
            "Transportation" => "Plane",
            "Transportation_number" => "KS11",
            "Seat" => "7A",
            "Gate" => "1"
        ),

    );

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $tripSorter = new TripSorter($this->tripArray);
        $sortedTrip = $tripSorter->sort();
        $this->assertTrue($this->isEqualArray($this->expectedTripArray, $sortedTrip));
    }

    private function isEqualArray($expectedTripArray, $sortedTrip)
    {
        foreach ($sortedTrip as $key => $element)
            if ($expectedTripArray[$key]['Departure'] != $element['Departure']) {
                return false;
            }
        return true;
    }
}