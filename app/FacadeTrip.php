<?php

namespace App;

/**
 * Class FacadeTrip
 *
 * @package app\FacadeTrip
 */

class FacadeTrip
{
    /**
     * @param  array $tripArray
     * @throws Exception\TransportTypeInvalid
     */
    public function newRandomJourneys(array $tripArray)
    {
        $tripSorter = new TripSorter($tripArray);
        $sortedTrip = $tripSorter->sort();

        //print the Journey
        foreach ($sortedTrip as $index => $trip) {
            echo $index + 1 . "-" . TransportationFactory::createTransportation($trip['Transportation'])->getMsg($trip) . PHP_EOL;
            if ($index == count($sortedTrip) - 1) {
                echo $index + 2 . "-" . "You have arrived at your final destination." . PHP_EOL;
            }
        }

    }
}