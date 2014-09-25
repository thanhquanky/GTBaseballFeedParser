<?php
namespace eStadium;

class BaseballXmlFeedParser
{
    private $feed;

    /**/
    public function __construct()
    {

    }

    public function parse($feed)
    {
        $this->feed = $feed;
    }

    public function getGameId()
    {
        return $this->feed->gametracker->attributes()['gameid'];
    }

    public function getVisitorName()
    {
        return $this->feed->venue->attributes()['visname'];
    }

    public function getHomeName()
    {
        return $this->feed->venue->attributes()['homename'];
    }

    public function getLocation()
    {
        return $this->feed->venue->attributes()['location'];
    }

    public function getScheduledInning()
    {
        return $this->feed->venue->attributes()['schedinn'];
    }

    public function getStadium()
    {
        return $this->feed->venue->attributes()['stadium'];
    }

    public function getStartTime()
    {
        return $this->feed->venue->attributes()['start'];
    }

    public function getDate()
    {
        return $this->feed->venue->attributes()['date'];
    }
}
?>
