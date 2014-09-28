<?php
/**
 * IGame interface
 * @author Thanh Ky Quan
 * @date 09/25/2014
 * @version 0,1
 */

namespace eStadium\Baseball;

/**
 * This interface defines methods that class implements to represent a (Baseball) Game object.
 *
 * @package eStadium\Baseball
 */
interface IGame
{
    /**
     * Set Venue for the game
     *
     * @param IVenue $venue
     * @return void
     */
    public function setVenue($venue);

    /**
     * Get venue information about the game
     *
     * @return IVenue
     */
    public function getVenue();

    /**
     * Set teams
     *
     * @param Team[]
     * @return mixed
     */
    public function setTeams($teams);

    /**
     * Get teams
     * @return Team[]
     */
    public function getTeams();
}
