<?php

namespace eStadium;

class BaseballGame
{
    private $gameId;
    private $visitor;
    private $home;
    private $date;
    private $location;
    private $stadium;
    private $startTime;
    private $scheduledInning;

    public function __construct()
    {

    }

    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    public function getGameId()
    {
        return $this->gameId;
    }

    public function getVisitor()
    {
        return $this->visitor;
    }

    public function setVisitor($visitor)
    {
        $this->visitor = $visitor;
    }

    public function getHome()
    {
        return $this->home;
    }

    public function setHome($home)
    {
        $this->home = $home;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getStadium()
    {
        return $this->stadium;
    }

    public function setStadium($stadium)
    {
        $this->stadium = $stadium;
    }

    public function getScheduledInning()
    {
        return $this->scheduledInning;
    }

    public function setScheduledInning($scheduledInning)
    {
        $this->scheduledInning = $scheduledInning;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }


}
?>
