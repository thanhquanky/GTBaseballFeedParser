<?php

namespace eStadium\Baseball;

require_once 'IGame.interface.php';

class Game implements IGame
{
    private $venue;
    private $hometeam;
    private $visitor;

    public function __construct($venue = null, $hometeam = null, $visitor = null)
    {
        $this->venue = $venue;
        $this->hometeam = $hometeam;
        $this->visitor = $visitor;
    }

    public function setVenue($venue)
    {
      $this->venue = $venue;
    }
    public function getVenue()
    {
      return $this->venue;
    }

    public function setHomeTeam($team)
    {
      $this->hometeam = $team;
    }
    public function getHomeTeam()
    {
      return $this->hometeam;
    }

    public function setVisitorTeam($team)
    {
      $this->visitor = $team;
    }
    public function getVisitorTeam()
    {
      return $this->visitor;
    }

}
?>
