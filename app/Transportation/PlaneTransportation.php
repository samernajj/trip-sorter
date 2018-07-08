<?php

namespace App\Transportation;
/**
 * Class PlaneTransportation
 *
 * @package app\Transportation\PlaneTransportation
 */

class PlaneTransportation extends Transportation
{
    protected $msg = "From %s take flight %s to %s. Gate %s, seat %s. ";
    protected $msgBaggage = 'Baggage drop at ticket counter %s. ';
    protected $msgNoBaggage = 'Baggage will we automatically transferred from your last leg.';

    /**
     * @param  array $trip
     * @return String
     */
    public function getMsg(array $trip)
    {
        $msgString = sprintf(
            $this->msg,
            $trip['Departure'],
            $trip['Transportation_number'],
            $trip['Arrival'],
            $trip['Gate'],
            $trip['Seat']
        );

        //check if array has baggae
        if (!empty($trip['Baggage'])) {
            $msgString = sprintf($msgString . $this->msgBaggage, $trip['Baggage']);
        } else {
            $msgString .= $this->msgNoBaggage;
        }

        return $msgString;
    }
}