<?php
/**
 * Created by IntelliJ IDEA.
 * User: thanhquanky
 * Date: 9/25/14
 * Time: 3:25 PM
 */

namespace eStadium\Baseball;

/**
 * Interface IPlayer
 * @package eStadium\Baseball
 */
interface IPlayer
{
    /**
     * Get player's name
     * @return string
     */
    public function getName();

    /**
     * Set player's name
     *
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * Get player's number
     *
     * @return int
     */
    public function getNumber();

    /**
     * Set player's number
     * @param int $number
     * @return void
     */
    public function setNumber($number);

    /**
     * Get player's position
     *
     * @return string
     */
    public function getPosition();

    /**
     * Set player's position
     *
     * @param string $position
     * @return void
     */
    public function setPosition($position);
}