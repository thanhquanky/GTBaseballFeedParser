<?php
/**
 * Project: GTBaseballFeedParser
 * User: thanhquanky
 * Date: 9/28/14
 * Time: 12:30 AM
 */

namespace eStadium\Baseball;

require_once 'Venue.class.php';

class VenueParser {
    public function __construct()
    {

    }

    /**
     * Parse visitor team name from current feed
     *
     * @return void
     */
    public function parseVisitorName($feed)
    {
        return $feed['visname']->__toString();
    }

    /**
     * Parse home team name from current feed
     *
     * @return void
     */
    public function parseHomeName($feed)
    {
        return $feed['homename']->__toString();
    }

    /**
     * Parse location where the baseball game is hosted at
     *
     * @return mixed
     */
    public function parseLocation($feed)
    {
        return $feed['location']->__toString();
    }

    /**
     * Parse number of innings that has been scheduled for this game
     *
     * @return mixed
     */
    public function parseScheduledInning($feed)
    {
        return intval($feed['schedinn']->__toString());
    }

    /**
     * Parse the stadium where this game is played at
     *
     * @return mixed
     */
    public function parseStadium($feed)
    {
        return $feed['stadium']->__toString();
    }

    /**
     * Parse the time when the game is started
     *
     * @return mixed
     */
    public function parseStartTime($feed)
    {
        return $feed['start']->__toString();
    }

    /**
     * Parse the date when the game is started
     *
     * @return mixed
     */
    public function parseGameDate($feed)
    {
        return $feed['date']->__toString();
    }



    public function parse($feed)
    {
        $venueAttributes = $feed->attributes();
        $homeName = $this->parseHomeName($venueAttributes);
        $visitorName = $this->parseVisitorName($venueAttributes);
        $location = $this->parseLocation($venueAttributes);
        $stadium = $this->parseStadium($venueAttributes);
        $gameDate = $this->parseGameDate($venueAttributes);
        $startTime = $this->parseStartTime($venueAttributes);
        $scheduledInning = $this->parseScheduledInning($venueAttributes);


        $venue = new Venue($homeName, $visitorName, $location, $stadium, $gameDate, $startTime, $scheduledInning);
        return $venue;
    }
} 