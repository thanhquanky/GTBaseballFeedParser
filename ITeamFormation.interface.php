<?php

namespace eStadium\Baseball;

interface ITeamFormation
{
  public function setStarters($starters);
  public function getStarters();
  public function addStarter($starter);
  public function setBatOrders($batOrders);
  public function getBatOrders();
  public function addBatOrder($batOrder);
}

?>
