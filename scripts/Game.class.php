<?php

namespace eStadium\Baseball {
    require_once 'IGame.interface.php';

    /**
     * Class Game
     *
     * This class represents a baseball game
     *
     * @package eStadium\Baseball
     */
    class Game implements IGame
    {
        private $venue;
        private $teams;

        /**
         * Constructor
         *
         * Initialize with venue, home team and visitor team
         *
         * @param IVenue $venue
         * @param ITeam $homeTeam
         * @param ITeam $visitorTeam
         */
        public function __construct($venue = null, $teams = array())
        {
            $this->venue = $venue;
            $this->teams = $teams;
        }

        public function setVenue($venue)
        {
            $this->venue = $venue;
        }
        public function getVenue()
        {
            return $this->venue;
        }

        public function setTeams($teams)
        {
            $this->teams = $teams;
        }
        public function getTeams()
        {
            return $this->teams;
        }

    }
}
