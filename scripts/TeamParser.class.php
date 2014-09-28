<?php
/**
 * Project: GTBaseballFeedParser
 * User: thanhquanky
 * Date: 9/28/14
 * Time: 12:51 AM
 */

namespace eStadium\Baseball;

require_once 'PlayerFormation.class.php';
require_once 'Player.class.php';
require_once 'Team.class.php';

class TeamParser {
    private $playerParser;

    /**
     * Constructor
     *
     * @param $feed Feed to parse
     */
    public function __construct($playerParser)
    {
        $this->playerParser = $playerParser;
    }
    /**
     * Return team's information
     *
     * @return ITeam
     */
    public function parse($feed)
    {
        /**
         * Set team's attributes
         */
        $teamAttributes = $feed->attributes();

        $name = $teamAttributes['name']->__toString();
        $code = $teamAttributes['code']->__toString();
        $rank = intval($teamAttributes['rank']->__toString());
        $record = $teamAttributes['record']->__toString();


        $starters = $this->parseStarters($feed);
        //$team->setStarters($starters);

        $batOrders = $this->parseBatOrders($feed);
        //$team->setBatOrders($batOrders);

        $players = $this->parsePlayers($feed);

        $team = new Team($name, $code, $rank, $record, $starters, $batOrders, $players);
        return $team;
    }

    /**
     * Helper function to parse player information
     * @param $playerInfo
     * @return PlayerFormation
     */
    private function parsePlayerFormation($playerInfo)
    {
        $playerInfo = $playerInfo->attributes();
        $spot = intval($playerInfo['spot']->__toString());
        $name = $playerInfo['name']->__toString();
        $number = intval($playerInfo['uni']->__toString());
        $position = $playerInfo['pos']->__toString();
        $starter = new PlayerFormation($spot, $name, $number, $position);
        return $starter;
    }

    /**
     * Parse starters information
     * @param $feed
     * @return IPlayer[]
     */
    public function parseStarters($feed)
    {
        $teamStarters = array();
        foreach ($feed->starters->starter as $starterInfo)
        {
            $player = $this->parsePlayerFormation($starterInfo);
            array_push($teamStarters, $player);
        }
        return $teamStarters;
    }

    /**
     * Parse bat orders
     * @param $feed
     * @return IPlayer[]
     */
    public function parseBatOrders($feed)
    {

        $batOrders = array();
        foreach ($feed->batords->batord as $batOrderInfo) {
            $player = $this->parsePlayerFormation($batOrderInfo);
            array_push($batOrders, $player);
        }
        return $batOrders;
    }

    /**
     * @param $feed
     */
    public function parsePlayers($feed)
    {
        $players = array();
        foreach ($feed->player as $playerInfo)
        {
            $player = $this->playerParser->parse($playerInfo);
            array_push($players, $player);
        }
        return $players;
    }
} 