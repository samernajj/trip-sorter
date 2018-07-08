<?php

namespace App\Transportation;
/**
 * Class Transportation
 *
 * @package app\Transportation\Transportation
 */
abstract class Transportation
{
    protected $msg;

    /**
     * @param  array $trip
     */
    abstract public function getMsg(array $trip);
}