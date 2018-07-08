<?php

namespace App {

    /**
     * Class TripSorter
     *
     * @package app\TripSorter
     */
    class TripSorter
    {

        /**
         * Array of trips
         *
         * @var array
         */
        private $tripArray = array();


        public function __construct(array $tripArray)
        {
            $this->tripArray = $tripArray;
        }

        /**
         * Sort a trip array
         *
         * @return array
         */
        public function sort()
        {
            $this->getFirstAndLastTrip();
            $this->sortingTrips();
            return $this->tripArray;
        }

        /**
         * Get first and last Trip
         */
        private function getFirstAndLastTrip()
        {
            // check if array less than 2 elements
            if (count($this->tripArray) < 2) {
                return $this->tripArray;
            }

            // Find first and last element
            for ($i = 0, $max = count($this->tripArray); $i < $max; $i++) {
                $isFirstTrip = true;
                $isLastTrip = true;

                foreach ($this->tripArray as $index => $trip) {
                    // check If this trip have a previous trip
                    if (strcasecmp($this->tripArray[$i]['Departure'], $trip['Arrival']) == 0) {
                        $isFirstTrip = false;
                    } // check If this trip have a next trip
                    elseif (strcasecmp($this->tripArray[$i]['Arrival'], $trip['Departure']) == 0) {
                        $isLastTrip = false;
                    }
                }

                // modify array and put first and last trip
                if ($isFirstTrip) {
                    $first_element = $this->tripArray[$i];
                    unset($this->tripArray[$i]);
                    array_unshift($this->tripArray, $first_element);
                } elseif ($isLastTrip) {
                    $last_element = $this->tripArray[$i];
                    unset($this->tripArray[$i]);
                    array_push($this->tripArray, $last_element);
                }

            }

            // reindex array
            $this->tripArray = array_values($this->tripArray);
        }

        /**
         * Sorting trips
         */
        private function sortingTrips()
        {
            for ($i = 0, $max = count($this->tripArray) - 1; $i < $max; $i++) {

                foreach ($this->tripArray as $index => $trip) {
                    if (strcasecmp($this->tripArray[$i]['Arrival'], $trip['Departure']) == 0) {
                        //switch between elements in stack
                        $nextIndex = $i + 1;
                        $tempElement = $this->tripArray[$nextIndex];
                        $this->tripArray[$nextIndex] = $trip;
                        $this->tripArray[$index] = $tempElement;
                        break;
                    }
                }
            }
        }
    }
}
