<?php

namespace eStadium\Baseball {

    require_once 'IVenue.interface.php';

    class Venue implements IVenue
    {
        private $visitorName;
        private $homeName;
        private $gameDate;
        private $location;
        private $stadium;
        private $startTime;
        private $scheduledInning;

        public function __construct(
            $homeName = null,
            $visitorName = null,
            $location = null,
            $stadium = null,
            $gameDate = null,
            $startTime = null,
            $scheduledInning = 9)
        {
            $this->homeName = $homeName;
            $this->visitorName = $visitorName;
            $this->location = $location;
            $this->stadium = $stadium;
            $this->gameDate = $gameDate;
            $this->startTime = $startTime;
            $this->scheduledInning = $scheduledInning;
        }

        public function getVisitorName()
        {
            return $this->visitorName;
        }

        public function setVisitorName($visitorName)
        {
            $this->visitorName = $visitorName;
        }

        public function getHomeName()
        {
            return $this->homeName;
        }

        public function setHomeName($homeName)
        {
            $this->homeName = $homeName;
        }

        public function getGameDate()
        {
            return $this->gameDate;
        }

        public function setGameDate($gameDate)
        {
            $this->gameDate = $gameDate;
        }

        public function getLocation()
        {
            return $this->location;
        }

        public function setLocation($location)
        {
            $this->location = $location;
        }

        public function getStadium()
        {
            return $this->stadium;
        }

        public function setStadium($stadium)
        {
            $this->stadium = $stadium;
        }

        public function getScheduledInning()
        {
            return $this->scheduledInning;
        }

        public function setScheduledInning($scheduledInning)
        {
            $this->scheduledInning = $scheduledInning;
        }

        public function getStartTime()
        {
            return $this->startTime;
        }

        public function setStartTime($startTime)
        {
            $this->startTime = $startTime;
        }
    }
}
