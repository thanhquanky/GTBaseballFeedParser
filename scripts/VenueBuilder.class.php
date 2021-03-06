<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/26/14
 * Time: 9:22 AM
 */

namespace eStadium\Baseball;

/**
 * Class VenueBuilder
 *
 * @package eStadium\Baseball
 */
class VenueBuilder {
    private $gameId;
    private $visitorTeam;
    private $homeTeam;
    private $gameDate;
    private $location;
    private $startTime;
    private $feedParser;
    private $stadium;
    private $scheduledInning;
    private $venue;

    public function __construct($feedParser) {
        $this->feedParser = $feedParser;
    }
    /**
     * Set game id
     *
     * @param $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * Get game id
     * @return int
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Set visitor team
     *
     * @param $visitor
     */
    public function setVisitorTeam($visitor)
    {
        //$this->baseballGame->setVisitorTeam($visitor);
        $this->visitorTeam = $visitor;
    }

    /**
     * Set home team
     *
     * @param $home
     */
    public function setHomeTeam($home)
    {
        //$this->baseballGame->setHomeTeam($home);
        $this->homeTeam = $home;
    }

    /**
     * Set game date
     *
     * @param $date
     */
    public function setGameDate($date)
    {
        $this->gameDate = $date;
    }

    /**
     * Set location where the game is hosted at
     *
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Set time when the game is started
     *
     * @param $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * Set the stadium where the game is hosted
     *
     * @param $stadium
     */
    public function setStadium($stadium)
    {
        $this->stadium = $stadium;
    }

    /**
     * Set number of inning that the game is scheduled
     *
     * @param $scheduledInning
     */
    public function setScheduledInning($scheduledInning)
    {
        $this->scheduledInning = $scheduledInning;
    }

    private function build()
    {
        $feedParser = $this->feedParser;
        $venue = new Venue($this->gameId, $this->homeTeam, $this->visitorTeam, $this->gameDate, $this->location,
            $this->startTime, $this->stadium, $this->scheduledInning);
        return $venue;
    }
} 