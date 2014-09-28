<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/26/14
 * Time: 01:50 AM
 */

namespace eStadium\Baseball {

    require_once 'ITeamFormation.interface.php';

    /**
     * Class TeamFormation
     *
     * This class carries information about team, players, starting line, and bat orders
     *
     * @package eStadium\Baseball
     */
    class TeamFormation implements ITeamFormation
    {
        private $team;
        private $starters;
        private $batOrders;

        public function __construct($team, $starters = array(), $batOrders = array())
        {
            $this->team = $team;
            $this->starters = $starters;
            $this->batOrders = $batOrders;
        }

        /**
         * Set team for team formation
         * @param ITeam $team
         * @return void
         */
        public function setTeam($team)
        {
            $this->team = $team;
        }

        /**
         * Get team for team formation
         * @return ITeam
         */
        public function getTeam()
        {
            return $this->team;
        }

        /**
         * Set list of players for starter
         *
         * @param IPlayer[]
         * @return void
         */
        public function setStarters($starters)
        {
            $this->starters = $starters;
        }

        /**
         * Get list of players for starter
         * @return IPlayer[]
         */
        public function getStarters()
        {
            return $this->starters;
        }

        /**
         * Add player to starter list
         *
         * @param IPlayer $player
         * @return void
         */
        public function addStarter($player)
        {
            array_push($this->starters, $player);
        }

        /**
         * Set list of bat orders
         *
         * @param IPlayer[] $batOrders
         * @return void
         */
        public function setBatOrders($batOrders)
        {
            $this->batOrders = $batOrders;
        }

        /**
         * Get list of bat orders
         * @return IPlayer[]
         */
        public function getBatOrders()
        {
            return $this->batOrders;
        }

        /**
         * Add player to bat orders
         * @param IPlayer $player
         * @return void
         */
        public function addBatOrder($player)
        {
            array_push($this->batOrders, $player);
        }
    }

}