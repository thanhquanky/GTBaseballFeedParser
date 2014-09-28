<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/26/14
 * Time: 4:03 AM
 */

namespace eStadium\Baseball;

require_once 'Player.class.php';
/*
 * Class PlayerFormation
 * @package eStadium\Baseball
 */
class PlayerFormation
{
    private $spot;
    private $name;
    private $number;
    private $position;

    /**
     * Construction
     *
     * @param $spot
     * @param $name
     * @param $number
     * @param $position
     */
    public function __construct($spot, $name, $number, $position)
    {
        $this->spot = $spot;
        $this->name = $name;
        $this->number = $number;
        $this->position = $position;
    }

    /**
     * Get player's spot
     * @return int
     */
    public function getSpot()
    {
        return $this->spot;
    }

    /**
     * Set spot
     *
     * @param int $spot
     */
    public function setSpot($spot)
    {
        $this->setSpot($spot);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }
}