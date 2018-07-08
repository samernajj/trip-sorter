<?php

namespace App;

use App\Exception\TransportTypeInvalid;

/**
 * Class TransportationFactory
 *
 * @package app\TransportationFactory
 */
class TransportationFactory
{
    protected static $transportation = array(
        'train' => 'App\Transportation\TrainTransportation',
        'plane' => 'App\Transportation\PlaneTransportation',
        'bus' => 'App\Transportation\BusTransportation'
    );

    /**
     * @param $type
     * @return String
     * @throws TransportTypeInvalid
     */
    public static function createTransportation($type)
    {
        $targetClass = static::$transportation[strtolower($type)];
        if (class_exists($targetClass)) {
            return new $targetClass;
        } else {
            throw new TransportTypeInvalid("The Transportation type '$type' is not recognized.");
        }
    }
}