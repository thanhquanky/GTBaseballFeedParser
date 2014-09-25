<?php

namespace eStadium\Baseball;

require_once 'ITeamFormation.interface.php';

class TeamFormation implements ITeamFormation
{
  private $starters;
  private $batOrders;

  public function __construct($starters = array(), $batOrders = array())
  {
    $this->starters = $starters;
    $this->batOrders = $batOrders;
  }

  public function setStarters($starters)
  {
    $this->starters = $starters;
  }

  public function getStarters()
  {
    return $this->starters;
  }

  public function addStarter($starter)
  {
    array_push($this->starters, $starter);
  }

  public function setBatOrders($batOrders)
  {
    $this->batOrders = $batOrders;
  }

  public function getBatOrders()
  {
    return $this->batOrders;
  }

  public function addBatOrder($batOrder)
  {
    array_push($this->batOrders, $batOrder);
  }

}

?>
