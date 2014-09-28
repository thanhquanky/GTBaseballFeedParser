<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 11:52 PM
 */

namespace eStadium\Baseball;

/**
 * Interface ITeam
 *
 * @package eStadium\Baseball
 */
interface ITeam {
    /**
     * Set Team's name
     *
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * Get Team's name
     *
     * @return string
     */
    public function getName();

    /**
     * Set Team's code
     * @param string $code
     * @return void
     */
    public function setCode($code);

    /**
     * Get Team's code
     * @return string
     */
    public function getCode();

    /**
     * Set Team's rank
     * @param int $rank
     * @return mixed
     */
    public function setRank($rank);

    /**
     * Get Team's rank
     * @return int
     */
    public function getRank();

    /**
     * Set Team's record
     * @param $record
     * @return void
     */
    public function setRecord($record);

    /**
     * Get Team's record
     * @return string
     */
    public function getRecord();

    /**
     * Set players for starting the game
     *
     * @param IPlayer[] $starters
     * @return void
     */
    public function setStarters($starters);

    /**
     * Get players to start the game
     *
     * @return IPlayer[]
     */
    public function getStarters();

    /**
     * Set bat orders
     * @param IPlayer[] $batOrders
     * @return void
     */
    public function setBatOrders($batOrders);

    /**
     * Get bat orders
     *
     * @return IPlayer[]
     */
    public function getBatOrders();

    /**
     * Set team's players
     *
     * @param IPlayer $players
     * @return void
     */
    public function setPlayers($players);

    /**
     * Get team's players
     *
     * @return IPlayer[]
     */
    public function getPlayers();
} 