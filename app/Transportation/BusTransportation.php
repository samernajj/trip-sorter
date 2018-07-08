<?php

namespace App\Transportation;
/**
 * Class BusTransportation
 *
 * @package app\Transportation\BusTransportation
 */

class BusTransportation extends Transportation
{
    protected $msg = "Take the airport bus from %s to %s. No seat assignment";

    /**
     * @param  array $trip
     * @return String
     */
    public function getMsg(array $trip)
    {
        $msgString = sprintf(
            $this->msg,
            $trip['Departure'],
            $trip['Arrival']
        );

        return $msgString;
    }
}