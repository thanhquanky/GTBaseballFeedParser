<?php

namespace eStadium\Baseball;

/**
 * Interface ITeamFormation
 *
 * @package eStadium\Baseball
 */
interface ITeamFormation
{
    /**
     * Set team for team formation
     * @param ITeam $team
     * @return void
     */
    public function setTeam($team);

    /**
     * Get team for team formation
     * @return ITeam
     */
    public function getTeam();

    /**
     * Set list of players for starter
     *
     * @param IPlayer[] $starters
     * @return void
     */
    public function setStarters($starters);

    /**
     * Get list of players for starter
     * @return IPlayer[] $starters
     */
    public function getStarters();

    /**
     * Add player to starter list
     *
     * @param IPlayer $player
     * @return void
     */
    public function addStarter($player);

    /**
     * Set list of bat orders
     *
     * @param IPlayer[] $batOrders
     * @return void
     */
    public function setBatOrders($batOrders);

    /**
     * Get list of bat orders
     * @return IPlayer[]
     */
    public function getBatOrders();

    /**
     * Add player to bat orders
     * @param IPlayer $player
     * @return void
     */
    public function addBatOrder($player);
}

?>
