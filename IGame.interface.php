<?php

namespace eStadium\Baseball;

interface IGame
{
  public function setVenue($venue);
  public function getVenue();

  public function setHomeTeam($team);
  public function getHomeTeam();

  public function setVisitorTeam($team);
  public function getVisitorTeam();
}
