<?php

require_once 'Game.class.php';
require_once 'Venue.class.php';
require_once 'TeamFormation.class.php';

class GameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider baseballGameProvider
     */
    public function testGameCanSetVenue($baseballGame, $expected)
    {
        $this->assertEquals($expected, $baseballGame->getVenue());
    }

    /**
     * @dataProvider venueGameIdProvider
     */
    public function testVenueGameId($venue, $expected)
    {
        $this->assertEquals($expected, $venue->getGameId());
    }

    /**
     * @dataProvider venueStadiumProvider
     */
    public function testVenueStadium($venue, $expected)
    {
        $this->assertEquals($expected, $venue->getStadium());
    }

    public function venueGameIdProvider()
    {
        $venue1 = new \eStadium\Baseball\Venue();
        $venue1->setGameId(1);

        $venue2 = new \eStadium\Baseball\Venue();
        $venue2->setGameId(2);

        return array(
            array($venue1, 1),
            array($venue2, 2)
        );
    }

    public function venueStadiumProvider()
    {
        $venue1 = new \eStadium\Baseball\Venue();
        $venue1->setStadium('Swayze Field');

        $venue2 = new \eStadium\Baseball\Venue();
        $venue2->setStadium('Boddy Dodd');

        return array(
            array($venue1, 'Swayze Field'),
            array($venue2, 'Boddy Dodd')
        );
    }

    public function baseballGameProvider()
    {
        $baseballGame1 = new \eStadium\Baseball\Game();
        $venue1 = new \eStadium\Baseball\Venue();
        $venue1->setGameId(1);
        $venue1->setStadium('Swayze Field');

        $baseballGame1->setVenue($venue1);

        $baseballGame2 = new \eStadium\Baseball\Game();
        $venue2 = new \eStadium\Baseball\Venue();
        $venue2->setGameId(2);
        $venue2->setStadium('Bobby Dodd');
        $baseballGame2->setVenue($venue2);

        return array(
          array($baseballGame1, $venue1),
          array($baseballGame2, $venue2)
        );
    }

}
