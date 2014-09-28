<?php

require_once 'scripts/Game.class.php';
require_once 'scripts/Venue.class.php';
require_once 'scripts/TeamFormation.class.php';


class GameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider venueLocationProvider
     */
    public function testVenueLocation($venue, $expected)
    {
        $this->assertEquals($expected, $venue->getLocation());
    }

    /**
     * @dataProvider venueStadiumProvider
     */
    public function testVenueStadium($venue, $expected)
    {
        $this->assertEquals($expected, $venue->getStadium());
    }

    public function venueStadiumProvider()
    {
        $venue = $this->venueProvider();
        return array(
            array($venue, 'Swayze Field')
        );
    }

    public function venueLocationProvider()
    {
        $venue = $this->venueProvider();
        return array(
            array($venue, 'Oxford, Miss.')
        );
    }

    public function venueProvider()
    {
        $stadium = 'Swayze Field';
        $location = 'Oxford, Miss.';
        $visitorName = 'Washington';
        $homeName = 'Georgia Tech';
        $gameDate = '6/1/2014';
        $startTime = '7:07 pm';
        $scheduledInning = 9;
        $venue = new \eStadium\Baseball\Venue($homeName, $visitorName, $location, $stadium, $gameDate, $startTime, $scheduledInning);

        return $venue;
    }

}
