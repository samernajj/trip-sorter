<?php

namespace App\Transportation;
/**
 * Class TrainTransportation
 *
 * @package app\Transportation\TrainTransportation
 */

class TrainTransportation extends Transportation
{
    protected $msg = "Take train %s from %s to %s. Sit in seat %s.";

    /**
     * @param  array $trip
     * @return String
     */
    public function getMsg(array $trip)
    {
        $msgString = sprintf(
            $this->msg,
            $trip['Transportation_number'],
            $trip['Departure'],
            $trip['Arrival'],
            $trip['Seat']
        );

        return $msgString;
    }
}