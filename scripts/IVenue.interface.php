<?php

namespace eStadium\Baseball;

/**
 * Interface IVenue
 *
 * Interface for Venue
 *
 * @package eStadium\Baseball
 */
interface IVenue
{
  public function getVisitorName();
  public function setVisitorName($visitorName);
  public function getHomeName();
  public function setHomeName($homeName);
  public function getGameDate();
  public function setGameDate($gameDate);
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
