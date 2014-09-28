<?php
/**
 * Project: GTBaseballFeedParser
 * User: thanhquanky
 * Date: 9/28/14
 * Time: 12:10 AM
 */
namespace eStadium\Baseball;

interface IPlayerFormation
{
    public function setSpot($spot);

    public function getSpot();

    public function setName($name);

    public function getName();

    public function setNumber($number);

    public function getNumber();

    public function setPosition($position);

    public function getPosition();
}