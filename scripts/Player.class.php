<?php

namespace eStadium\Baseball {

    require_once 'IPlayer.interface.php';

    class Player implements IPlayer
    {
        private $name;
        private $number;
        private $position;
        private $spot;
        private $bats;
        private $shortName;
        private $throws;

        public function __construct($name, $shortName, $number, $spot, $position, $bats, $throws)
        {
            $this->name = $name;
            $this->number = $number;
            $this->position = $position;
            $this->spot = $spot;
            $this->shortName = $shortName;
            $this->bats = $bats;
            $this->throws = $throws;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getNumber()
        {
            return $this->number;
        }

        public function setNumber($number)
        {
            $this->number = $number;
        }

        public function getPosition()
        {
            return $this->position;
        }

        public function setPosition($position)
        {
            $this->position = $position;
        }
    }
}