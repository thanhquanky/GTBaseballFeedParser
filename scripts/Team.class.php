<?php
/**
 * Created by IntelliJ IDEA.
 * @author Thanh Ky Quan
 * Date: 9/25/14
 * Time: 11:50 PM
 */

namespace eStadium\Baseball;

require_once 'scripts/ITeam.interface.php';

/**
 * Class Team
 * @package eStadium\Baseball
 */
class Team implements ITeam{
    /** @var string Team's name */
    private $name;

    /** @var string Team's code */
    private $code;

    /** @var int Team's rank */
    private $rank;

    /** @var string Team's record */
    private $record;

    /** @var IPlayer[] Team's players  */
    private $players;

    /** @var IPlayer[] Team's starters */
    private $starters;

    /** @var IPlayer[] Team's bat orders */
    private $batOrders;

    /**
     * Constructor
     */
    public function __construct($name, $code, $rank, $record, $starters = array(), $batOrders = array(), $players = array())
    {
        $this->name = $name;
        $this->code = $code;
        $this->rank = $rank;
        $this->record = $record;
        $this->starters = $starters;
        $this->batOrders = $batOrders;
        $this->players = $players;
    }
    /**
     * Set Team's name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get Team's name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Team's code
     * @param string $code
     * @return void
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get Team's code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set Team's rank
     * @param int $rank
     * @return mixed
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * Get Team's rank
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set Team's record
     * @param string $record
     * @return void
     */
    public function setRecord($record)
    {
        $this->record = $record;
    }

    /**
     * Get Team's record
     * @return string
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set players for starting the game
     *
     * @param IPlayer[] $starters
     * @return void
     */
    public function setStarters($starters)
    {
        $this->starters = $starters;
    }

    /**
     * Get players to start the game
     *
     * @return IPlayer[]
     */
    public function getStarters()
    {
        return $this->starters;
    }

    /**
     * Set bat orders
     * @param IPlayer[] $batOrders
     * @return void
     */
    public function setBatOrders($batOrders)
    {
        $this->batOrders = $batOrders;
    }

    /**
     * Get bat orders
     *
     * @return IPlayer[]
     */
    public function getBatOrders()
    {
        return $this->batOrders;
    }

    /**
     * Set team's players
     *
     * @param IPlayer $players
     * @return void
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

    /**
     * Get team's players
     *
     * @return IPlayer[]
     */
    public function getPlayers()
    {
        return $this->players;
    }
}