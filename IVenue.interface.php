<?php

namespace eStadium\Baseball;

interface IVenue
{
  public function setGameId($gameId);
  public function getGameId();
  public function getVisitor();
  public function setVisitor($visitor);
  public function getHome();
  public function setHome($home);
  public function getDate();
  public function setDate($date);
  public function getLocation();
  public function setLocation($location);
  public function getStadium();
  public function setStadium($stadium);
  public function getScheduledInning();
  public function setScheduledInning($scheduledInning);
  public function getStartTime();
  public function setStartTime($startTime);
}

?>
