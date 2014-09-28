<?php
namespace eStadium\Baseball;

require_once 'Game.class.php';

/**
 * Class XmlFeedParser
 *
 * This class is for parsing XML Feed from Baseball game
 *
 * @package eStadium\Baseball
 */
class XmlFeedParser
{
    private $venueParser;
    private $teamParser;

    public function __construct($venueParser, $teamParser)
    {
        $this->venueParser = $venueParser;
        $this->teamParser = $teamParser;
    }
    /**
     * Parse the feed
     *
     * @param string $feed The xml feed that will be parsed
     *
     * @return void
     */
    public function parse($feed)
    {
        $venueFeed = $feed->venue;
        /** @var Venue $venue */
        $venue = $this->venueParser->parse($venueFeed);

        /** @var Team[] $teams */
        $teams = array();

        foreach ($feed->team as $teamInfo)
        {
            $team = $this->teamParser->parse($teamInfo);
            /** @var $team Team */
            array_push($teams, $team);
        }

        $game = new Game($venue, $teams);
        return $game;
    }

}
?>
